import numpy as np

def logicalOps(list1, list2) :
    np0 = np.array(list1)
    np1 = np.array(list2)
    """
        Differnce between the two lists, is found by converting each of the lists into a set and displaying its difference
    """
    diffList = diffList = (set(list1) - set(list2))
    """
        The logical operation AND is done by, using the zip iteration method
    """
    andList = [a and b for a,b in zip(list1, list2)]
    """
        The logical OR operation is done by, converting each list into a set and performing logical OR.
    """
    orList = []
    orList = set(list1) | set(list2)

    return diffList, andList, orList


list1 = ['vivek', 'karthi', 'shanthi devi', 'mariappan']
list2 = ['vivek', 'karthi', 'munna']

Lor, Land, Ldiff = logicalOps(list1, list2)
print(Lor)

print(Land)
print(Ldiff)


print("**********************")

print(set(list2)-set(list1))

print("**********************")
