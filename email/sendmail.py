import os
import smtplib
import imghdr
from email.message import EmailMessage

EMAIL_ADDRESS = os.environ.get('USER_TEST')
EMAIL_PASSWORD = os.environ.get('PASS_TEST')

contacts = ['josephinejames365@gmail.com', 'elizebethshaji8@gmail.com','vismayaprathap@gmail.com','alanabraham29082002@gmail.com','jgladwin27.2002@gmail.com']
for address in contacts:
    msg = EmailMessage()
    msg['Subject'] = 'PERIOD ALERT!'
    msg['From'] = EMAIL_ADDRESS
    msg['To'] = address

    msg.set_content('You will be having your periods soon')

    with smtplib.SMTP_SSL('smtp.gmail.com', 465) as smtp:
    #with smtplib.SMTP('localhost', 1025) as smtp:
        smtp.login(EMAIL_ADDRESS, EMAIL_PASSWORD)
        smtp.send_message(msg)