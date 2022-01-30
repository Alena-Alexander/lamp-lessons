from math import floor, ceil

def binarySearch(search=None, arr=None, low=None, high=None) -> object:
  # Search for x among sorted array w[low..high]. The integer
  # returned is either the location of x in w, or the location
  # where x belongs.
  if low > high: # Not found
    return low
  else:
    middle = floor((low + high)/2)
    if arr[middle] < search:
      print("too low")
      print(arr[middle])
      return binarySearch(search, arr, middle+1, high)
    elif arr[middle] == search:
      print("equal")
      print(arr[middle])
      return middle
    else:
      print("too high")
      print(arr[middle])
      return binarySearch(search, arr, low, middle-1)


####################### Main #####################
arr= range(0,9)
print(binarySearch(7, arr, 0, 9))
