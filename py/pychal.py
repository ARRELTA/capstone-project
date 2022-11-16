import iso8601, tzlocal, pytz, requests as r, datetime as dt
import json
import challonge

baseURL = "challonge.com/"
apiURL = "https://api.challonge.com/v1/tournaments.json"
apikey = "3tiM1A4xVY0ljVd3WVHiDKoWRhNduL4k86R7kUEM"
style = sys.argv[1]
title = sys.argv[2]
url = baseURL+sys.argv[3]
entrants = sys.argv[4]
month = sys.argv[5]
day = sys.argv[6]
year = sys.argv[7]
hour = sys.argv[8] + sys.argv[10]
minute = sys.argv[9]
startTime = year+"-"+month+"-"+day+"-T"+hour+":"+minute+":00-05:00"
checkInLength = (sys.argv[11]*60)+sys.argv[12]
desc = sys.argv[13]

#Additional Parameters
thirdPlaceMatch = sys.argv[14]      # Single Elimination Only
grandFinalsMod = sys.argv[14]       # Double Elimination Only
matchWinPoints = sys.argv[14]       # Round-Robin and Swiss Only
matchTiePoints = sys.argv[15]       # Round-Robin and Swiss Only
gameWinPoints = sys.argv[16]        # Round-Robin and Swiss Only
gameTiePoints = sys.argv[17]        # Round-Robin and Swiss Only
byePoints = sys.argv[18]            # Swiss Only
rounds = sys.argv[19]               # Swiss Only


def setCredentials():
    challonge.set_credentials("UNCP_Admin", apikey)
    
def createTournament():
    params = {
        "signup_cap" : entrants
    }
    match style:
        case 0:
            challonge.tournaments.create(title, url, "single elimination", params)
        case 1:
            pass
        case 2:
            pass
        case 3:
            pass

    challonge.tournaments.create()

