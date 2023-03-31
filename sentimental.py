

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
# # Read the data from a CSV file
# data = pd.read_excel('feedback.xlsx')
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
# # Connect to the database
# cnx = mysql.connector.connect(user='root', password='', host='localhost', database='fly_db')
#
# # Create a cursor
# cursor = cnx.cursor()
#
# # Update the sentiment status in the database
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
# from PIL import Image
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





import pandas as pd
import nltk
from nltk.sentiment import SentimentIntensityAnalyzer
import mysql.connector

# Download the necessary NLTK data
nltk.download('vader_lexicon')

# Create a sentiment analyzer object
sia = SentimentIntensityAnalyzer()

# Connect to the database
cnx = mysql.connector.connect(user='root', password='', host='localhost', database='fly_db')

# Retrieve the data from the feedback_tb table
query = "SELECT f_id, view FROM feedback_tb"
data = pd.read_sql(query, cnx)

# Predict the sentiment on the data
sentiment_scores = data['view'].apply(lambda x: sia.polarity_scores(x)['compound'])

# Add a new column to the data with the predicted sentiment scores
data['sentiment_score'] = sentiment_scores

# Update the sentiment status based on the predicted scores
data['status'] = data['sentiment_score'].apply(lambda x: 'positive' if x >= 0.5 else ('negative' if x <= 0.5 else 'neutral'))

# Update the sentiment status in the database
cursor = cnx.cursor()
for index, row in data.iterrows():
    update_query = f"UPDATE feedback_tb SET status = '{row['status']}' WHERE f_id = {row['f_id']}"
    print(update_query)
    cursor.execute(update_query)

# Commit the changes to the database
cnx.commit()

# Close the cursor and connection
cursor.close()
cnx.close()

# Print the predicted sentiment scores and updated sentiment details
print('Predicted sentiment scores:')
print(sentiment_scores)
print('Updated sentiment details:')
print(data)
import matplotlib.pyplot as plt

# Get the count of each sentiment status
sentiment_counts = data['status'].value_counts()

# Create a bar chart of the sentiment counts
plt.bar(sentiment_counts.index, sentiment_counts.values)

# Add labels and title to the chart
plt.xlabel('Sentiment')
plt.ylabel('Count')
plt.title('Sentiment Analysis')
# plt.rcParams['savefig.bbox'] = 'tight'
#
# # Save the chart as a PNG image file in the current directory
# plt.savefig('chart.png')
# Show the chart

import os

# Generate the chart
# ... code to generate the chart ...

# Enable automatic saving of figures
plt.rcParams['savefig.bbox'] = 'tight'

# Specify the directory path to save the figure
save_dir = 'C:/xampp/xampp/htdocs/Myproject/admin12/paymentimages'

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
png_path = 'C:/xampp/xampp/htdocs/Myproject/admin12/paymentimages/chart.png'
jpeg_path = 'C:/xampp/xampp/htdocs/Myproject/admin12/paymentimages/chart.jpg'

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




