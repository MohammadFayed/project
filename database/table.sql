--
-- Table structure for table `tblproduct`
--

CREATE TABLE `order` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `student_id` int(11) NOT NULL,
 `st _national_id` bigint(15) NOT NULL,
 `fullname` text NOT NULL,
 `details` text NOT NULL,
 `email` varchar(255) NOT NULL,
 `phone` int(11) NOT NULL,
 `mobile` int(11) NOT NULL,
 `father_name` text NOT NULL,
 `fa_national_id` bigint(15) NOT NULL,
 `father_job` text NOT NULL,
 `father_mobile` int(11) NOT NULL,
 `guardian_name` text NOT NULL,
 `guardian_national_id` bigint(15) NOT NULL,
 `guardian_link` text NOT NULL,
 `date_birth` text NOT NULL,
 `place_birth` text NOT NULL,
 `religion` text NOT NULL,
 `governorate` text NOT NULL,
 `center` text NOT NULL,
 `collage` text NOT NULL,
 `band` text NOT NULL,
 `estimate_last_year` text NOT NULL,
 `acc_latest_year` text NOT NULL,
 `acc_type` text NOT NULL,
 `ratio` int(11) NOT NULL,
 `acc_w_feed` text NOT NULL,
 `special_needs` text NOT NULL,
 `family_out` text NOT NULL,
 `statue_father` text NOT NULL,
 `stage` tinyint(4) NOT NULL DEFAULT '0',
 PRIMARY KEY (`id`),
 KEY `student_id` (`student_id`),
 CONSTRAINT `student_id` FOREIGN KEY (`student_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `fullname`, `email`, `password`, `statue`, `gender`, `stage`, `groub_id`, `date`) VALUES (NULL, 'fatma farag', 'fatma@science.tanta.edu.eg', 'bac5be9173484ac9062d8a75ceb7a6d1', 'new', 'female', '0', '0', '2020-05-12 17:16:37')
--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `student_id`, `st _national_id`, `fullname`, `details`, `email`, `phone`, `mobile`, `father_name`, `fa_national_id`, `father_job`, `father_mobile`, `guardian_name`, `guardian_national_id`, `guardian_link`, `date_birth`, `place_birth`, `religion`, `governorate`, `center`, `collage`, `band`, `estimate_last_year`, `acc_latest_year`, `acc_type`, `ratio`, `acc_w_feed`, `special_needs`, `family_out`, `statue_father`, `stage`) VALUES (NULL, '1', '123123123123123', 'fatma farag', 'elsantah - elgharbia', 'fatma@science.tanta.edu.eg', '403125239', '1065408495', 'farag', '123123123123123', 'engineer', '1065408495', 'farag', '123123123123123', 'father', '9-9-2000', 'Tanta', 'Muslim', 'Elgharbia', 'Elsantah', 'Science', 'The second', 'Very good', 'New student', 'Special', '90', 'false', 'false', 'false', 'A Live', '1')
INSERT INTO `order` (`id`, `student_id`, `st _national_id`, `fullname`, `details`, `email`, `phone`, `mobile`, `father_name`, `fa_national_id`, `father_job`, `father_mobile`, `guardian_name`, `guardian_national_id`, `guardian_link`, `date_birth`, `place_birth`, `religion`, `governorate`, `center`, `collage`, `band`, `estimate_last_year`, `acc_latest_year`, `acc_type`, `ratio`, `acc_w_feed`, `special_needs`, `family_out`, `statue_father`, `stage`) VALUES (NULL, '1', '123123123123123', 'fatma farag', 'elsantah - elgharbia', 'fatma@science.tanta.edu.eg', '403125239', '1065408495', 'farag', '123123123123123', 'engineer', '1065408495', 'farag', '123123123123123', 'father', '9-9-2000', 'Tanta', 'Muslim', 'Elgharbia', 'Elsantah', 'Science', 'The second', 'Very good', 'New student', 'Special', '90', 'false', 'false', 'false', 'A Live', '1')
INSERT INTO `order` (`id`, `student_id`, `st _national_id`, `fullname`, `details`, `email`, `phone`, `mobile`, `father_name`, `fa_national_id`, `father_job`, `father_mobile`, `guardian_name`, `guardian_national_id`, `guardian_link`, `date_birth`, `place_birth`, `religion`, `governorate`, `center`, `collage`, `band`, `estimate_last_year`, `acc_latest_year`, `acc_type`, `ratio`, `acc_w_feed`, `special_needs`, `family_out`, `statue_father`, `stage`) VALUES (NULL, '1', '123123123123123', 'fatma farag', 'elsantah - elgharbia', 'fatma@science.tanta.edu.eg', '403125239', '1065408495', 'farag', '123123123123123', 'engineer', '1065408495', 'farag', '123123123123123', 'father', '9-9-2000', 'Tanta', 'Muslim', 'Elgharbia', 'Elsantah', 'Science', 'The second', 'Very good', 'New student', 'Special', '90', 'false', 'false', 'false', 'A Live', '1')
INSERT INTO `order` (`id`, `student_id`, `st _national_id`, `fullname`, `details`, `email`, `phone`, `mobile`, `father_name`, `fa_national_id`, `father_job`, `father_mobile`, `guardian_name`, `guardian_national_id`, `guardian_link`, `date_birth`, `place_birth`, `religion`, `governorate`, `center`, `collage`, `band`, `estimate_last_year`, `acc_latest_year`, `acc_type`, `ratio`, `acc_w_feed`, `special_needs`, `family_out`, `statue_father`, `stage`) VALUES (NULL, '1', '123123123123123', 'fatma farag', 'elsantah - elgharbia', 'fatma@science.tanta.edu.eg', '403125239', '1065408495', 'farag', '123123123123123', 'engineer', '1065408495', 'farag', '123123123123123', 'father', '9-9-2000', 'Tanta', 'Muslim', 'Elgharbia', 'Elsantah', 'Science', 'The second', 'Very good', 'New student', 'Special', '90', 'false', 'false', 'false', 'A Live', '1')

--