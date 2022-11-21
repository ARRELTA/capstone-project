import iso8601, tzlocal, pytz, requests as r, datetime as dt, sys
import json, base64
import challonge

if __name__ == '__main__':
    operand = sys.argv[1]
    ret = []
    params = {
        "api_key" : "ehP542A3lE4OkS6IOxkjaa0rMEyU4NqN5CGuhZnN",
        "state" : "none"
        }

    challonge.set_credentials("UNCP_Admin", params["api_key"])
    match operand:
        case 0:
            params["state"] = "pending"
        case 1:
            params["state"] = "in_progress"
        case 2:
            params["state"] = "ended"
    r1 = challonge.tournaments.index(state=params["state"])
    for r in r1:
        a = b = ""
        if r["start_at"]:
            a = r["start_at"].strftime("%d %B %Y")
            b = r["start_at"].strftime("%I:%M %p")
        else:
            a = b = "None"
        par = "{} / {}"
        if r["signup_cap"] is None:
            r["signup_cap"] = "Unlimited"
        g = {
            "id": r["id"],
            "name": r["name"],
            "date": a,
            "time": b,
            "entrants": par.format(r["participants_count"], r["signup_cap"]),
            "url": r["full_challonge_url"]
        }
        ret.append(g)

print(json.dumps(ret))


