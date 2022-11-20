import base64
import hashlib
from os import urandom


def getSalt():
    return str(urandom(36).hex())


def encrypt(s):
    # Encrypts string to base64
    pw64 = base64.b64encode(s.encode('utf-8'))
    pw64 = pw64.swapcase()
    # Constructs SHAKE256 hash algorithm, adds modified string to hash
    masc = hashlib.shake_256()
    masc.update(pw64)
    # Returns the hex digest of the hash
    return masc.hexdigest(384)


def encryptWithSalt(s, salt):
    # Encrypts string to base64
    pw64 = base64.b64encode(s.encode('utf-8'))
    pw64 = pw64.swapcase()
    # Encodes salt, constructs SCRYPT hash algorithm, adds modified string to hash
    salt = str(salt).encode('utf-8')
    masc = hashlib.scrypt(pw64, salt=salt, n=1024, r=24, p=64, maxmem=0, dklen=384)
    # Returns the hex digest of the hash
    return masc.hex()

