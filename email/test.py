import os

EMAIL_ADDRESS = os.environ.get('USER_TEST')
EMAIL_PASSWORD = os.environ.get('PASS_TEST')

print(EMAIL_ADDRESS)
print(EMAIL_PASSWORD)