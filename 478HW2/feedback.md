#### 1. 18/25
####  -4 b) Your function for measuring the accuracy of classifier manually stops for about 50 of test cases and ignores the rest. Here is the correct one:

```python
#D=training data matrix (document_term format), DT=the training labels, x=the instance to be classified, K=the value of K
#measure==0: Euclidean distance,  measure==1: Cosine Similarity
#Output: the predicted class for the instance
def knn_search(x,D,DT,K,measure):
   ndata = len(D) # num docs in training set
    K = K if K < ndata else ndata
    if measure==0:
            dists=np.sqrt(((D-x)**2).sum(axis=1))
   elif measure ==1:
             D_norm=np.array([np.linalg.norm(D[i])for i in range(len(D))])
             x_norm=np.linalg.norm(x)
             sims=np.dot(D,x)/(D_norm*x_norm)
             dists=1-sims
    neigh_idx=np.argsort(dists)[:K]   
    counts = np.bincount((DT[neigh_idx])) # voting
    return np.argmax(counts),neigh_idx     

def accuracy(x, D, train_L, test_L, K, measure):
    count = 0
    correct = 0
    for i in range(x.shape[0]):
        #Use the i rows of the testing data, one-by-one, in the knn function
        count += 1
        neigh_idx, predicted_class = knn_search(x[i,:], D, train_L, K, measure)
        #If the two classes match, add 1 to the correct count
        if (predicted_class == test_L[i]):
            correct += 1
    accuracypercent = (correct/count)*100
    print("Accuracy with " + str(K) + " neighbors is: " + str(accuracypercent) + "%")
    return accuracypercent
 ```
#### -3 d) You did not apply TFxIDF weights correctly. 
Sample code:
Assume trainM and testM are 2-d numpy arrays containing the training and the test term-document matrices.

```python
numberOfTerms=np.shape(trainM)[0]
DF=np.array([(trainM!=0).sum(1)]).T
N=np.shape(trainM)[1]
NMatrix=np.ones(np.shape(trainM), dtype=float)*N
IDF=np.log(np.divide(NMatrix, DF)) #compute IDF using train set
tfidfTrain=np.zeros(np.shape(IDF), dtype=float)
tfidfTest=np.zeros(np.shape(testM), dtype=float)
np.multiply(IDF, trainM, tfidfTrain) #apply IDF on train set
np.multiply(IDF[:,:200], testM, tfidfTest) #apply IDF on test set
```

#### 2. 25/25
#### 3. 30/30

### Total: 73/80. 
