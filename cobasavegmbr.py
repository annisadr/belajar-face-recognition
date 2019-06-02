def reloaTraining(self):
	self.X = []
	self.Y = []
	train_dir ="dataWajah"
	# Loop through each person in the training set
	known_face_names = []
	known_face_encodings = []
	for class_dir in os.listdir(train_dir):
		if not os.path.isdir(os.path.join(train_dir, class_dir)):
		continue
		# Loop through each training image for the current person
		for img_path in image_files_in_folder(os.path.join(train_dir, class_dir)):
		known_face_names.append(class_dir)#self
		train_image = face_recognition.load_image_file(img_path)
		train_face_encoding = face_recognition.face_encodings(train_image)[0]
		#IF without passing face location , get face_location in face_encoding, HOG
		known_face_encodings.append(train_face_encoding)#self
		print("Looking for faces in {}".format(img_path))

	print ("Finsih reload database training")