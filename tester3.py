import time
import sys
import string
import time
flag = "bYtE_BuStErS{$#Thisisurfirstflag#$}"

alpha =string.ascii_lowercase
al = list(alpha)
'''
flag6 = list(flag)
count = 5
flag6[count] = al[count]
flag6 = ''.join(flag6)
print(flag6)'''




count = 1
while True:

 # Clear the line by moving the cursor to the beginning and printing spaces
        sys.stdout.write('\r' + ' ' * len(str(flag)))
        sys.stdout.flush()
        flag6 = list(flag)
        flag6[count] = al[count]
        flag6 = ''.join(flag6)

    # Update the variable (you can replace this with your own logic)


        sys.stdout.write('\r ' + flag6)
        sys.stdout.flush()

        count+=1
        if count >25:
               count =1
        time.sleep(0.2)
          # Sleep for 1 second (adjust as needed)
