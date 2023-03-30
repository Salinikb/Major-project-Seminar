import mysql.connector
import pandas as pd
import numpy as np
import seaborn as sns
from sklearn.ensemble import RandomForestRegressor
import time

# Read train data from a CSV file
train_data = pd.read_excel('flights.xlsx')

# Remove rows with null values
train_data = train_data.dropna()

# Remove rows with 'non-stop' as the value for the Total_Stops column

# Convert the Total_Stops column to a numeric data type

# Split the train data into features and labels
X_train = train_data[['Departuredate', 'arrivaldate']]
y_train = train_data['price']

# Create and fit a random forest regressor model
rf_model = RandomForestRegressor(random_state=0)
rf_model.fit(X_train, y_train)

# Calculate the median price in the training data
price_threshold = np.median(y_train)

# Connect to the database
cnx = mysql.connector.connect(user='root', password='', host='localhost', database='fly_db')

# Create a cursor
cursor = cnx.cursor()

# Execute a SELECT statement to retrieve flight data
while True:
    time.sleep(3)
    query = 'SELECT id, Departuredate, arrivaldate, DepartureLocation, Arrivallocation, price FROM flights_tb'
    cursor.execute(query)
    rows = cursor.fetchall()

    # Create a dataframe from the retrieved data
    test_data = pd.DataFrame(rows, columns=['id', 'Departuredate', 'arrivaldate', 'Departurelocation', 'Arrivallocation', 'price'])

    # Convert the Total_Stops column to a numeric data type

    # Predict the flight price on the test data
    y_pred = rf_model.predict(test_data[['Departuredate', 'arrivaldate']])

    # Update the flight price in the database based on the predictions
    for i, prediction in enumerate(y_pred):
        if prediction > price_threshold:
            print("Price is High")
            update_query = f"UPDATE flights_tb SET status = 'high' WHERE id = {test_data.iloc[i]['id']}"
            cursor.execute(update_query)
        else:
            print("Price is Low")
            update_query = f"UPDATE flights_tb SET status = 'low' WHERE id = {test_data.iloc[i]['id']}"
            cursor.execute(update_query)

    # Commit the changes to the database
    cnx.commit()

    # Print the predicted values and updated flight details
    print('Predicted flight prices:')
    print(y_pred)
    print('Updated flight details:')
    print(test_data)

# Close the cursor and connection
cursor.close()
cnx.close()