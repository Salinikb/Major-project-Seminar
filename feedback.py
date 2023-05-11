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

driver.find_element("id", "phone").send_keys("riyajaceykurian99@gmail.com")
time.sleep(3)
driver.find_element("id", "pass").send_keys("Abc@1234")
time.sleep(3)
submit=driver.find_element(By.ID,"sub")
submit.click()

print("User Logged In")
driver.get("http://localhost/Myproject/user12/asyourneed.php")
time.sleep(3)
driver.find_element("xpath","/html/body/div[1]/div[2]/div[2]/ul/li[10]/a/span").click()
time.sleep(3)
driver.find_element("xpath","/html/body/div[6]/form/div/ul/li[1]").click()
# Enter text in textarea
driver.find_element("id", "comment").send_keys("good")
time.sleep(3)
driver.find_element("xpath", '/html/body/div[6]/form/div/input').click()
time.sleep(3)
print("feedback send")
