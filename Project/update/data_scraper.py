import json
from urllib.parse import urlparse
import urllib.request
from bs4 import BeautifulSoup as soup

def updateDB():
	results = []
	prodUrl = urlparse("https://www.amazon.com/RCA-Igloo-Cubc-Fridge-Freezer-Black/dp/B00Q477Z5Q/ref=sr_1_3?crid=BPPUR2ZA1WF5&keywords=refrigerator&qid=1555469675&s=home-garden&sprefix=refridg%2Cgarden%2C188&sr=1-3")

	# Connection
	prod = urllib.request.urlopen(prodUrl.geturl())

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

	return json.dumps(results)

if __name__ == '__main__':
	updateDB()
