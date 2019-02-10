filedir <- "C:/Users/S_kho/OneDrive - DePaul University/CSC478 PROGRAMMING MACHINE LEARNING APPLICATIONS/HW2/newsgroup/trainMatrixModified.txt"
train <- read.csv(file=filedir,header=FALSE, sep='\t')
filedir <- "C:/Users/S_kho/OneDrive - DePaul University/CSC478 PROGRAMMING MACHINE LEARNING APPLICATIONS/HW2/newsgroup/testMatrixModified.txt"
test <- read.csv(file=filedir,header=FALSE, sep='\t')

filedir <- "C:/Users/S_kho/OneDrive - DePaul University/CSC478 PROGRAMMING MACHINE LEARNING APPLICATIONS/HW2/newsgroup/testClasses.txt"
testclass <- read.csv(file=filedir,header=FALSE, sep='\t')
filedir <- "C:/Users/S_kho/OneDrive - DePaul University/CSC478 PROGRAMMING MACHINE LEARNING APPLICATIONS/HW2/newsgroup/trainClasses.txt"
trainclass <- read.csv(file=filedir,header=FALSE, sep='\t')

rm(filedir)

test <- as.data.frame(t(test))
train <- as.data.frame(t(train))
# testclass <- as.data.frame(t(testclass))
# trainclass <- as.data.frame(t(trainclass))
trainclass <- t(trainclass[2])

testclass[,2]

train[,11]
trainclass[,2]

library(class)

set.seed(1234)
pred.test.knn <- knn(train, test, trainclass[,2], k = 3)
mean(pred.test.knn != testclass[,2]) 

pred.test.knn

trainclass[trainclass$V1==798,]
trainclass[trainclass$V1==554,]
trainclass[trainclass$V1==757,]

x <- train[799,]
train[,1]
Y <- test[1,]
t(Y)
c <- as.array(t(x))
d <- as.array(t(Y))

sum(!c==d)

z <- c(as.array(t(x)),as.array(t(Y)))

# In this example, I am limiting the model to first five variables.  
# What is the misclassification rate on the test data when k=3?
# [1] 0.1733333

# When k = 10, how many times does the classifier correctly predict "yes"?
table(test$StrongSales,pred.test.knn)
