
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
driver.find_element("xpath","/html/body/div/nav/div[2]/div/ul/li[4]/a").click()
time.sleep(3)
# Enter text in textarea
driver.find_element("xpath", '/html/body/div/div/div[2]/div/div[2]/div/table/tbody/tr[3]/td[4]/b/font/a').click()
time.sleep(3)
driver.find_element("id", "myairline").send_keys("jetairways")
time.sleep(3)
driver.find_element("xpath", '/html/body/div/div/div[2]/div[2]/form/div[9]/input').click()
time.sleep(3)


print("Airport updated")