from github import Github
import time
import os
import datetime

g = Github("NickPYTH", "Kolia27062000")
repo = g.get_repo('NickPYTH/parking_spaces')
num = 0
while True:
    log_file = open('pull_logs.txt', 'a')
    i = 0
    for commit in repo.get_commits():
        last_commit = commit.commit.committer.date
        i += 1

    if num != i:  
        try:
            os.system ('git pull')
            log_file.write("Last commit date: " + str(last_commit) + " Check date: "  + str(datetime.datetime.now())  + " pulled\n")
            num = i
        except Exception:
            log_file.write("Last commit date: " + str(last_commit) + " Check date: " + str(datetime.datetime.now())  + " not pulled, some error\n")
    else:
        log_file.write("Last commit date: " + str(last_commit) + " Check date: " + str(datetime.datetime.now())  + " not pulled\n")
    time.sleep(10)
    log_file.close()
