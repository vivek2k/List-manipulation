import sys

"""
    To change second list into the first list
"""

size1 = sys.argv[1:2]
size2 = sys.argv[2:3]

l1 = sys.argv[3:3+int(size1[0])+1]

print("First List : " + format(l1) + ".")

l2 = sys.argv[3+int(size1[0])+1:]

print("Second List : " + format(l2) + ".")
print("\n")
toAdd = set(l1) - set(l2)
toRemove = set(l2) - set(l1)
print("You have to add : " + format(toAdd) +".")

print("You have to remove : " + format(toRemove) + ".")