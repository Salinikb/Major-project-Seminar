
from selenium import webdriver
import time
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.common.action_chains import ActionChains
from selenium.webdriver.common.by import By
from selenium.webdriver.support.ui import Select
print("Login test case started")
options=webdriver.ChromeOptions()
options.add_experimental_option('excludeSwitches',['enable-logging'])
driver = webdriver.Chrome(options=options)
driver.maximize_window()
driver.get("http://localhost/Myproject/index1.php")
driver.find_element(By.ID, "sub1").click()

driver.find_element("id", "phone").send_keys("admin123@gmail.com")
time.sleep(3)
driver.find_element("id", "pass").send_keys("Admin@12")
time.sleep(3)
submit=driver.find_element(By.ID,"sub")
submit.click()

print("User Logged In")
driver.get("http://localhost/Myproject/admin12/index2.php")
time.sleep(3)
driver.find_element("xpath","/html/body/div/nav/div[2]/div/ul/li[3]/a").click()
time.sleep(3)
# Enter text in textarea
print("entering into textarea")
driver.find_element("id", "myairport").send_keys("cochin")
time.sleep(3)
driver.find_element("id", "location").send_keys("Kochi")
time.sleep(3)
driver.find_element("xpath", '/html/body/div/div/div[2]/div/div/div[1]/form/div/div[3]/div/div/input').click()
time.sleep(3)

print("Airport Added")
