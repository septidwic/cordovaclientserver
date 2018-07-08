CREATE TABLE `course_details` (
`nim` int(1) NOT NULL,
 `nama` varchar(25) NOT NULL,
 `jurusan` varchar(50) NOT NULL,
 `nilai` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

ALTER TABLE `course_details` ADD PRIMARY KEY (`nim`);
ALTER TABLE `course_details` MODIFY `nim` int(1) NOT NULL AUTO_INCREMENT;