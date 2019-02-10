def knn_classify (dataPt, trainCase, trainClass, K, measure):
    neigh_idx, distances = knn_search(dataPt, trainCase, K, measure)
    neigh_labels = trainClass.iloc[neigh_idx]
    return neigh_labels.mode()

#
# def knn_eval (testCase, testClass, trainCase, trainCase, K, measure):
knn_hit=0
for i in range(testClassDF.size):
    knn_label = knn_classify(testDT.iloc[i],trainDT,trainClassDF,3,0)
    #debug
    if(i==54):
        break
#     print (testClassDF.iloc[i],knn_label[0],testClassDF.iloc[i]==knn_label)

    if(testClassDF.iloc[i]==knn_label[0]):
        knn_hit+=1