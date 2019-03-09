import tokenizer
import indexer

import imp
imp.reload(indexer)
imp.reload(tokenizer)

indexer.generate_index()