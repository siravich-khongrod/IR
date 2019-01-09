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
