import random
import time
import hashlib

seed = round(time.time())
random.seed(seed, version=2)

while True:
    rnd = random.random()

    hash = hashlib.sha256(str(rnd).encode()).hexdigest()
    flag = f"HC{{{hash}}}"

    if "5bc" in hash:
        with open("./flag", "w") as f:
            f.write(flag)
        break
    else:
        print(f"Bad random value: {rnd}")

print("Flag created~")


