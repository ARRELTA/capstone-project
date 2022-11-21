import iso8601, tzlocal, pytz, requests as r, datetime as dt, sys
import json, base64
import challonge

if __name__ == '__main__':
    params = json.loads(base64.b64decode(sys.argv[1]))
    more_params = json.loads(base64.b64decode(sys.argv[2]))

    api = "ehP542A3lE4OkS6IOxkjaa0rMEyU4NqN5CGuhZnN"

    challonge.set_credentials("UNCP_Admin", api)
    challonge.tournaments.update(params["TID"], **params)
