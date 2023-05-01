# import time
# import mysql.connector
# import pandas as pd
# import seaborn as sns
# import matplotlib.pyplot as plt
# import os
# from PIL import Image
# from sklearn.ensemble import RandomForestRegressor
# from fare import price_threshold
#
# # Read train data from a CSV file
# from sentimental import save_dir
#
# train_data = pd.read_excel('flights.xlsx')
#
# # Remove rows with null values
# train_data = train_data.dropna()
#
# # Remove rows with 'non-stop' as the value for the Total_Stops column
#
# # Convert the Total_Stops column to a numeric data type
#
# # Split the train data into features and labels
# X_train = train_data[['Departuredate', 'arrivaldate']]
# y_train = train_data['price']
#
# # Create and fit a random forest regressor model
# rf_model = RandomForestRegressor(random_state=0)
# rf_model.fit(X_train, y_train)
#
# # Connect to the database
# cnx = mysql.connector.connect(user='root', password='', host='localhost', database='fly_db')
#
# # Create a cursor
# cursor = cnx.cursor()
#
# # Set a maximum number of iterations
# max_iterations = 10
#
# # Initialize a counter variable
# iteration_count = 1
#
# # Execute the loop for a maximum of max_iterations times
# while iteration_count < max_iterations:
#     # Sleep for 3 seconds
#     time.sleep(3)
#
#     # Execute a SELECT statement to retrieve flight data that have not been processed yet
#     query = 'SELECT id, Departuredate, arrivaldate, DepartureLocation, Arrivallocation, price FROM flights_tb WHERE status IS NULL'
#     cursor.execute(query)
#     rows = cursor.fetchall()
#
#     # If there are no flights to process, exit the loop
#     if len(rows) == 0:
#         break
#
#     # Create a dataframe from the retrieved data
#     test_data = pd.DataFrame(rows, columns=['id', 'Departuredate', 'arrivaldate', 'Departurelocation', 'Arrivallocation', 'price'])
#
#     # Convert the Total_Stops column to a numeric data type
#
#     # Predict the flight price on the test data
#     y_pred = rf_model.predict(test_data[['Departuredate', 'arrivaldate']])
#
#     # Update the flight price in the database based on the predictions
#     for i, prediction in enumerate(y_pred):
#         if prediction > price_threshold:
#             print("Price is High")
#             update_query = f"UPDATE flights_tb SET status = 'high' WHERE id = {test_data.iloc[i]['id']}"
#             cursor.execute(update_query)
#         else:
#             print("Price is Low")
#             update_query = f"UPDATE flights_tb SET status = 'low' WHERE id = {test_data.iloc[i]['id']}"
#             cursor.execute(update_query)
#
#     # Commit the changes to the database
#     cnx.commit()
#
#     # Print the predicted values and updated flight details
#     print('Predicted flight prices:')
#     print(y_pred)
#     print('Updated flight details:')
#     print(test_data)
#
#     # Create a scatter plot of predicted prices vs actual prices
#     sns.scatterplot(x=y_train, y=y_pred)
#
#     # Increment the counter variable
#     iteration_count += 1
#
# # Save the chart as a PNG image file in the specified directory
# filename = 'image.png'
# filepath = os.path.join(save_dir, filename)
# plt.savefig(filepath)
#
# # Close the cursor and database connection
# cursor.close()
# # cnx.close()
# import pandas as pd
# import nltk
# from nltk.sentiment import SentimentIntensityAnalyzer
# import mysql.connector
#
# # Download the necessary NLTK data
# nltk.download('vader_lexicon')
#
# # Create a sentiment analyzer object
# sia = SentimentIntensityAnalyzer()
#
# # Connect to the database
# cnx = mysql.connector.connect(user='root', password='', host='localhost', database='fly_db')
#
# # Retrieve the data from the feedback_tb table
# query = "SELECT f_id, view FROM feedback_tb"
# data = pd.read_sql(query, cnx)
#
# # Predict the sentiment on the data
# sentiment_scores = data['view'].apply(lambda x: sia.polarity_scores(x)['compound'])
#
# # Add a new column to the data with the predicted sentiment scores
# data['sentiment_score'] = sentiment_scores
#
# # Update the sentiment status based on the predicted scores
# data['status'] = data['sentiment_score'].apply(lambda x: 'positive' if x >= 0.5 else ('negative' if x <= 0.5 else 'neutral'))
#
# # Update the sentiment status in the database
# cursor = cnx.cursor()
# for index, row in data.iterrows():
#     update_query = f"UPDATE feedback_tb SET status = '{row['status']}' WHERE f_id = {row['f_id']}"
#     print(update_query)
#     cursor.execute(update_query)
#
# # Commit the changes to the database
# cnx.commit()
#
# # Close the cursor and connection
# cursor.close()
# cnx.close()
#
# # Print the predicted sentiment scores and updated sentiment details
# print('Predicted sentiment scores:')
# print(sentiment_scores)
# print('Updated sentiment details:')
# print(data)
# import matplotlib.pyplot as plt
#
# # Get the count of each sentiment status
# sentiment_counts = data['status'].value_counts()
#
# # Create a bar chart of the sentiment counts
# plt.bar(sentiment_counts.index, sentiment_counts.values)
#
# # Add labels and title to the chart
# plt.xlabel('Sentiment')
# plt.ylabel('Count')
# plt.title('Sentiment Analysis')
# # plt.rcParams['savefig.bbox'] = 'tight'
# #
# # # Save the chart as a PNG image file in the current directory
# # plt.savefig('chart.png')
# # Show the chart
#
# import os
#
# # Generate the chart
# # ... code to generate the chart ...
#
# # Enable automatic saving of figures
# plt.rcParams['savefig.bbox'] = 'tight'
#
# # Specify the directory path to save the figure
# save_dir = 'C:/xampp/xampp/htdocs/Myproject/admin12/paymentimages'
#
# # Create the directory if it does not exist
# if not os.path.exists(save_dir):
#     os.makedirs(save_dir)
#
# # Save the chart as a PNG image file in the specified directory
# filename = 'chart.png'
# filepath = os.path.join(save_dir, filename)
# plt.savefig(filepath)
from PIL import Image
# import os
#
# # Specify the paths to the PNG and JPEG files
# png_path = 'C:/xampp/xampp/htdocs/Myproject/admin12/paymentimages/chart.png'
# jpeg_path = 'C:/xampp/xampp/htdocs/Myproject/admin12/paymentimages/chart.jpg'
#
# # Open the PNG file
# with Image.open(png_path) as im:
#     # Convert the PNG to JPEG and save the JPEG file
#     im.convert('RGB').save(jpeg_path)
#
# # Check if the JPEG file was created
# if os.path.exists(jpeg_path):
#     print('JPEG file created successfully.')
# else:
#     print('Failed to create JPEG file.')
#
#
# plt.show()
# plt.savefig('chart1.png')


import mysql.connector
import pandas as pd
import numpy as np
import seaborn as sns
from sklearn.ensemble import RandomForestRegressor
import time

# Read train data from a CSV file
train_data = pd.read_excel('flights_tb.xlsx')

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
counter = 0
max_iterations = 1
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

    counter += 1
    if counter >= max_iterations:
        break

# Close the cursor and connection
cursor.close()
cnx.close()


import os
import matplotlib.pyplot as plt

# Create a directory to save the graph
directory = 'graphs'
if not os.path.exists(directory):
    os.makedirs(directory)

# ... your code ...

# Plot the predicted values
plt.plot(y_pred)
plt.title('Predicted flight prices')
plt.xlabel('Flight index')
plt.ylabel('Price')
plt.grid()

# Save the graph in the directory
import os

# Generate the chart
# ... code to generate the chart ...

# Enable automatic saving of figures
plt.rcParams['savefig.bbox'] = 'tight'

# Specify the directory path to save the figure
save_dir = 'C:/xampp/xampp/htdocs/Myproject/user12/priceairline'

# Create the directory if it does not exist
if not os.path.exists(save_dir):
    os.makedirs(save_dir)

# Save the chart as a PNG image file in the specified directory
filename = 'chart.png'
filepath = os.path.join(save_dir, filename)
plt.savefig(filepath)
from PIL import Image
import os

# Specify the paths to the PNG and JPEG files
png_path = 'C:/xampp/xampp/htdocs/Myproject/user12/priceairline/chart.png'
jpeg_path = 'C:/xampp/xampp/htdocs/Myproject/user12/priceairline/chart.jpg'

# Open the PNG file
with Image.open(png_path) as im:
    # Convert the PNG to JPEG and save the JPEG file
    im.convert('RGB').save(jpeg_path)

# Check if the JPEG file was created
if os.path.exists(jpeg_path):
    print('JPEG file created successfully.')
else:
    print('Failed to create JPEG file.')


plt.show()
# plt.savefig('chart1.png')


