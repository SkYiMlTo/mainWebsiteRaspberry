import smtplib
from email.message import EmailMessage
import time
from art import *
import os.path
import json
import subprocess

tprint("Email spammer")

def sendMail(EMAIL_ADDRESS, EMAIL_PASSWORD, msg):
    try:
        with smtplib.SMTP_SSL('smtp.gmail.com', 465) as smtp:
            smtp.login(EMAIL_ADDRESS, EMAIL_PASSWORD)
            smtp.send_message(msg)
            return False
    except:
        return True


def spam(subj, contenu, dest, nb):

    # Account Used To Spam
    EMAIL_ADDRESS = "smtpspammer666@gmail.com"
    EMAIL_ADDRESS2 = "smtpspammer6666@gmail.com"
    EMAIL_PASSWORD = "Angers2000"

    # Setup mail1
    msg1 = EmailMessage()
    msg1['Subject'] = str(subj)
    msg1['From'] = EMAIL_ADDRESS
    msg1['To'] = str(dest)  # "hugo.bourreau@isen-ouest.yncrea.fr"
    msg1.set_content(str(contenu))

    # Setup mail2
    msg2 = EmailMessage()
    msg2['Subject'] = str(subj)
    msg2['From'] = EMAIL_ADDRESS2
    msg2['To'] = str(dest)  # "hugo.bourreau@isen-ouest.yncrea.fr"
    msg2.set_content(str(contenu))

    error = False
    flipFlop = False
    for _ in range(1, nb + 1):
        error = (
            sendMail(EMAIL_ADDRESS2, EMAIL_PASSWORD, msg2)
            if flipFlop
            else sendMail(EMAIL_ADDRESS, EMAIL_PASSWORD, msg1)
        )
#            print("Sent" + str(a) + " mail with email 2")

        if error:
            error = False
            flipFlop = not flipFlop


def main():
    path = '/var/www/html/mainRaspberry/jsonFiles/smtpSpammer'
    bashCommand = "sudo rm /var/www/html/mainRaspberry/jsonFiles/smtpSpammer/"
    while 1:
        if files := os.listdir(path):
            for file in files:
                with open(f'{path}/{file}') as json_data:
                    data_dict = json.load(json_data)
                    spam(data_dict["subject"], data_dict['message'], data_dict['mail'], int(data_dict['amount']))
                    delFile = bashCommand + file
                    process = subprocess.Popen(delFile.split(), stdout=subprocess.PIPE)
                    output, error = process.communicate()
        time.sleep(15)


main()
# while a:
#     with smtplib.SMTP_SSL('smtp.gmail.com', 465) as smtp:
#         while 1:
#             try:
#                 smtp.login(EMAIL_ADDRESS, EMAIL_PASSWORD)
#                 smtp.send_message(msg)
#                 break
#             except:
#                 print("Interrupt" + str(a))
#                 a = 0
#                 break
#                 time.sleep(60)
#         if a != 0:
#             print("Email " + str(a) + " sent")
#             time.sleep(0.1)
#             smtp.quit()


