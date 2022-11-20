import sys
from encryptor import *

if __name__ == '__main__':
    pw = sys.argv[1]
    try:
        sys.argv[2]
    except NameError:
        cl = None
    else:
        cl = sys.argv[2]
	
    nacl = "Ult4BrawlMeleeBros!"+cl

    print(encryptWithSalt(pw, nacl))
