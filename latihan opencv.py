import cv2

img = cv2.imread('foto/dw.jpg')

edge = cv2.Canny(img, 100, 100)

cv2.imshow('Detect Edge', edge)
cv2.imshow('Original',img)

cv2.waitKey(0)
cv2.destroyAllWindows()