# https://docs.python.org/2/library/collections.html#defaultdict-objects
docs_token = [['glimps', 'index', 'queri', 'system', 'allow', 'search', 'file', 'system', 'document', 'collect', 'quickli', 'glimps', 'default', 'search', 'engin', 'larger', 'inform', 'retriev', 'system', 'also', 'use', 'part', 'web', 'base', 'search', 'engin']
,['main', 'process', 'retriev', 'system', 'document', 'index', 'queri', 'process', 'queri', 'evalu', 'relev', 'feedback', 'among', 'effici', 'updat', 'index', 'critic', 'larg', 'scale', 'system']
,['cluster', 'creat', 'short', 'snippet', 'document', 'retriev', 'web', 'search', 'engin', 'good', 'cluster', 'creat', 'full', 'text', 'web', 'document']
]

index = defaultdict(list)

for i in range(0,len(docs_token)):
    for token in docs_token[i]:
		if i not in index[token]:
			index[token].append(i)

for key in index.keys():
	print(key+": "+str(index[key]))

	
	
	
##### SEARCH #####
# index AND query
print(search_and(index,'index','query'))
print(search_and(index,'index','queri'))

# index OR query
print(search_or(index,'index','queri'))

# index AND (NOT query)
# do you mean queri?
# index AND (NOT queri) <- stemmed query
print(set(index['index']) - set(index['queri']))
# index AND (NOT query)
print(set(index['index']) - set(index['query']))

# (search AND query) OR (search AND retrieve)
search_and(index,'search','query') | search_and(index,'search','retrieve')

# (index OR cluster) AND (web OR system)
search_or(index,'index','cluser') & search_or(index,'web','system')
