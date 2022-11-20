import iso8601, tzlocal, pytz, requests as r, datetime as dt, sys
import json, base64
import challonge

if __name__ == '__main__':
	params = base64.b64decode(sys.argv[1])
	params2 = base64.b64decode(sys.argv[2])
	print(params)