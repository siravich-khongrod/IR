def getInput():
	text=''
	text = raw_input("Enter number: ")
	testOddBi(text)
	
def testOddBi(text):
	bitest = text.replace('1','').replace('0','')
	if(len(bitest)):
		print('not binary')
		getInput()
	if(sum([int(c) for c in text]) % 2):
		print('Binary contains odd number of ones')
	else:
		print('Binary NOT contains odd number of ones')
		getInput()

getInput()