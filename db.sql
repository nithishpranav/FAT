users

INSERT INTO `users` (`uid`, `u_role`, `password`) VALUES ('21MX120', 'student', 'mca');
INSERT INTO `users` (`uid`, `u_role`, `password`) VALUES ('1234', 'teacher', 'mca');
INSERT INTO `users` (`uid`, `u_role`, `password`) VALUES ('1238', 'teacher', 'mca'),
 ('1239', 'teacher', 'mca'), ('1240', 'teacher', 'mca');


//student
INSERT INTO `student` (`student_ID`, `student_name`, `student_course`, `student_semester`) VALUES ('21MX119', 'Nitihish', 'mx', '1'), ('21MX120', 'Rajesh', 'mx', '1');
//
//teacher
INSERT INTO `teacher` (`teacher_ID`, `teacher_name`) VALUES ('C3250', 'Geetha N');
INSERT INTO `teacher` (`teacher_ID`, `teacher_name`) VALUES ('1235', 'Dr.Chitra'), ('1236', 'Dr.Kalyani'), ('1237', 'Dr.Manavalan');
INSERT INTO `teacher` (`teacher_ID`, `teacher_name`) VALUES ('1238', 'Dr.G.A.Vijayalakshmi Pai'), ('1239', 'Ms.K.Gayathri'), ('1240', 'Dr.N.Illayaraja');
//

//teacher subjects
INSERT INTO `teachersubject` (`subject_ID`, `teacher_ID`) VALUES ('20MX11', 'C5234'), ('20MX18', 'C5234');
INSERT INTO `teachersubject` (`subject_ID`, `teacher_ID`) VALUES ('20MX17', 'C574'), ('20MX15', 'C574'),
 ('20MX14', 'C574'), ('20MX18', 'C3250');
 INSERT INTO `teachersubject` (`subject_ID`, `teacher_ID`) VALUES ('20MX13', '1235'), ('20MX18', '1239'),
  ('20MX15', '1236'), ('20MX18', '1236'), ('20MX12', '1237');
//
//subjects
INSERT INTO `subjects` (`s_ID`, `s_name`, `s_teacherID`, `s_course`, `s_semester`) VALUES ('20MX11', 'MFCS', '1234', 'mx', '1'), ('20MX18', 'Web Application Development', '1234', 'mx', '1');
INSERT INTO `subjects` (`s_ID`, `s_name`, `s_teacherID`, `s_course`, `s_semester`) VALUES ('20MX13', 'Data Structures', '1235', 'mx', '1'), ('20MX15', 'UNIX', '1236', 'mx', '1'), 
('20MX12', 'Structured Programming Concepts', '1237', 'mx', '1');
INSERT INTO `subjects` (`s_ID`, `s_name`, `s_teacherID`, `s_course`, `s_semester`) VALUES ('20MX14', 'DBMS', '1238', 'mx', '1'), ('20MX16', 'DS Lab', '1239', 'mx', '1'),
 ('20MX17', 'RDBMS Lab', '1240', 'mx', '1');
//
//
semester
INSERT INTO `semester` (`semester_ID`) VALUES ('3');
//
//day
INSERT INTO `day` (`day_ID`, `day_name`) VALUES ('1', 'Monday'), ('2', 'Tuesday'), ('3', 'Wednesday');
INSERT INTO `day` (`day_ID`, `day_name`) VALUES ('4', 'Thursday'), ('5', 'Friday'), ('6', 'Saturday');
//
//session
INSERT INTO `session` (`session_ID`, `session_day`, `session_course`, `session_semester`, `session_subject`) 
VALUES ('1', '1', 'mx', '1', '20MX11'), 
    ('2', '1', 'mx', '1', '20MX18');
    INSERT INTO `session` (`session_ID`, `session_day`, `session_course`, `session_semester`, `session_subject`) VALUES ('2', '2', 'mx', '1', '20MX14'), ('3', '2', 'mx', '1', '20MX15'), ('4', '2', 'mx', '1', '20MX15'), ('5', '2', 'mx', '1', '20MX11'), 
    ('6', '2', 'mx', '1', '20MX16'), ('7', '2', 'mx', '1', '20MX16');
INSERT INTO `session` (`session_ID`, `session_day`, `session_course`, `session_semester`, `session_subject`) VALUES ('3', '1', 'mx', '1', '20MX13'), 
('4', '1', 'mx', '1', '20MX11'), ('5', '1', 'mx', '1', '20MX12'), 
('6', '1', 'mx', '1', '20MX18'), ('7', '1', 'mx', '1', '20MX18');
//
INSERT INTO `session` (`session_ID`, `session_day`, `session_course`, `session_semester`, `session_subject`) VALUES ('1', '3', 'mx', '1', '20MX12'), 
('2', '3', 'mx', '1', '20MX15'), ('3', '3', 'mx', '1', '20MX13'), ('4', '3', 'mx', '1', '20MX18'),
 ('5', '3', 'mx', '1', 'Free'), ('6', '3', 'mx', '1', 'Free'), ('7', '3', 'mx', '1', 'Free');


INSERT INTO `session` (`session_ID`, `session_day`, `session_course`, `session_semester`, `session_subject`) VALUES ('1', '4', 'mx', '1', 'Free'),
 ('2', '4', 'mx', '1', '20MX12'), ('3', '4', 'mx', '1', '20MX16'), ('4', '4', 'mx', '1', '20MX16'),
  ('5', '4', 'mx', '1', '20MX17'), ('6', '4', 'mx', '1', '20MX17'), ('7', '4', 'mx', '1', 'Free');

INSERT INTO `session` (`session_ID`, `session_day`, `session_course`, `session_semester`, `session_subject`) VALUES ('1', '5', 'mx', '1', '20MX11'), ('2', '5', 'mx', '1', '20MX14'), ('3', '5', 'mx', '1', '20MX15'), ('4', '5', 'mx', '1', '20MX13'), 
  ('5', '5', 'mx', '1', '20MX12'), ('6', '5', 'mx', '1', '20MX12'), ('7', '5', 'mx', '1', 'Free');

INSERT INTO `session` (`session_ID`, `session_day`, `session_course`, `session_semester`, `session_subject`) VALUES ('1', '6', 'mx', '1', 'Free'), ('2', '6', 'mx', '1', 'Free'), ('3', '6', 'mx', '1', '20MX18'), ('4', '6', 'mx', '1', '20MX18'),
   ('5', '6', 'mx', '1', 'Free'), ('6', '6', 'mx', '1', 'Free'), ('7', '6', 'mx', '1', 'Free');

   INSERT INTO `users` (`uid`, `u_role`, `password`) VALUES ('C574', 'teacher', 'mca'), ('C52324', 'teacher', 'mca'), ('C3250', 'teacher', 'mca');