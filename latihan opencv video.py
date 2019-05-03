import cv2

video = cv2.VideoCapture(1)

while True:
	_, frame = video.read()

	edge = cv2.Canny(frame, 70, 70)

	cv2.imshow('Edge Detect Live Video', edge)

	exit = cv2.waitKey(1) & 0xff #angka 1 artinya me-closing program hanya dapat menggunakan 1 key misal (x)
	if exit == ord('x'):
		break

cv2.destroyAllWindows()
video.release()
