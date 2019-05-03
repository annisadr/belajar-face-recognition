import cv2

face = cv2.CascadeClassifier('haarcascade_frontalface_default.xml')
cam = cv2.VideoCapture(0)
jumlah = 0
id = input("Masukkan ID: ")
while  True:
	_, frame = cam.read()
	gray = cv2.cvtColor(frame, cv2.COLOR_BGR2GRAY)

	muka = face.detectMultiScale(gray, 1.3, 5)
	for (x, y, w, h) in muka:
		if cv2.waitKey(1) & 0xff == ord('c'):
			cv2.imwrite('dataWajah/User.'+id+'.'+str(jumlah)+'.jpg', gray[y:y+h, x:x+w])
			jumlah += 1

	cv2.imshow('Capturing', frame)

	if jumlah > 20:
		break


cam.release()
cv2.destroyAllWindows()