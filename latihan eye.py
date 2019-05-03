import cv2

face = cv2.CascadeClassifier('haarcascade_frontalface_default.xml')
eye = cv2.CascadeClassifier('haarcascade_eye.xml')

img = cv2.imread('foto/tes.jpg')

gray = cv2.cvtColor(img, cv2.COLOR_BGR2GRAY)
muka = face.detectMultiScale(gray)

for (x, y, w, h) in muka:
	cv2.rectangle(img, (x, y), (x+w, y+h), (0, 255, 0), 5)


cv2.imshow('face detect', img)
cv2.waitKey(0)
cv2.destroyAllWindows()