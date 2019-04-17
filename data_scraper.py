import json
import sys

def updateDB():
	from urllib.request import urlopen as uReq
	from bs4 import BeautifulSoup as soup

	results = []
	prodUrl = "https://www.amazon.com/dp/B076V72BZ6/ref=psdc_3741631_t1_B071WCB1T6"
	# Connection
	prod = uReq(prodUrl)

	# Downloading Webpage
	prodHtml = prod.read()

	# Closing connection
	prod.close()

	# Parsing webpage
	prodSoup = soup (prodHtml, "html.parser")

	# Pulling out contents of webpage we want
	prodContainer = prodSoup.find("div", {'id': 'HLCXComparisonWidget_feature_div'})
	prodTable = prodContainer.find('table', {'id' : 'HLCXComparisonTable'})

	# Storing the product name
	prodName = prodTable.tr.img["alt"]

	# Storing the Brand
	prodContainer2 = prodSoup.find('div',{'id' : 'bylineInfo_feature_div'})
	brand = prodContainer2.find('div',{'class':'a-section a-spacing-none'})
	prodBrand = brand.a.text

	# Storing the Product Price
	price = prodTable.find('tr', {'id':'comparison_price_row'})
	spanAttr = price.find('span',{'class':'a-offscreen'})
	prodPrice = spanAttr.text

	# Storing the Wattage
	watts = prodTable.find_all('tr',{'class':'comparison_other_attribute_row'})
	prodWatts = ""
	for x in watts:
		if x.span.text.strip() == "Wattage":
			prodWatts = x.td.text.strip()
			break
	prodWatts = "N/A"


	# Storing the Model Number
	prodContainer3 = prodSoup.find('div', {'id': 'prodDetails' })
	prodTable2 = prodContainer3.find('table', {'id':'productDetails_detailBullets_sections1'})
	model = prodTable2.find_all('tr')
	prodModel = ""
	for x in model:
		if x.th.text.strip() == 'Item model number':
			prodModel = x.td.text.strip()
			break

	results.append(prodModel)
	results.append(prodBrand)
	results.append(prodName)
	results.append(prodWatts)
	results.append(prodPrice)

	print(prodModel)
	print(prodBrand)
	print(prodName)
	print(prodWatts)
	print(prodPrice)
	return

if __name__ == "__main__":
	updateDB()
