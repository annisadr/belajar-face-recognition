import cv2

face = cv2.CascadeClassifier('haarcascade_frontalface_default.xml')
eye = cv2.CascadeClassifier('haarcascade_eye.xml')

video = cv2.VideoCapture(1)

while True:
	_, frame = video.read()
	gray = cv2.cvtColor(frame, cv2.COLOR_BGR2GRAY)

	muka = face.detectMultiScale(gray, 1.3, 5)
	for (x, y, w, h) in muka:
		cv2.rectangle(frame, (x, y), (x+w, y+h), (0, 255, 0), 4)

		roi_warna = frame[y:y + h, x:x + w]
		roi_gray = gray[y:y + h, x:x + w]
		mata = eye.detectMultiScale(roi_gray, 1.5, 3)
		for (mx,my,mw,mh) in mata:
			cv2.rectangle(roi_warna, (mx, my), (mx + mw, my + mh), (255, 0, 0), 4)


	cv2.imshow('Face dan Eye detect', frame)
	exit = cv2.waitKey(1) & 0xff #angka 1 artinya me-closing program hanya dapat menggunakan 1 key misal (x)
	if exit == ord('x'):
		break

cv2.destroyAllWindows()
video.release()
