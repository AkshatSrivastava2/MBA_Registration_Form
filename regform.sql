--
-- Database: `regform`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'akgim_admin123', '99962cd627ad7baa22af38c906e28869');

-- --------------------------------------------------------

--
-- Table structure for table `studentdetails`
--

CREATE TABLE `studentdetails` (
  `id` int(11) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `see_rollno` varchar(30) NOT NULL,
  `gen_rank` varchar(30) NOT NULL,
  `category_rank` varchar(30) NOT NULL,
  `cat_mat_cmat` varchar(30) NOT NULL,
  `percentile` varchar(30) NOT NULL,
  `other_exam_name` varchar(50) NOT NULL,
  `other_exam_percentile` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `state_of_domicile` varchar(100) NOT NULL,
  `permanent_add` varchar(200) NOT NULL,
  `pincode_perm` varchar(10) NOT NULL,
  `telno_perm` varchar(20) NOT NULL,
  `correspondence_add` varchar(200) NOT NULL,
  `pincode_corr` varchar(10) NOT NULL,
  `telno_corr` varchar(20) NOT NULL,
  `local_add` varchar(200) NOT NULL,
  `pincode_loc` varchar(10) NOT NULL,
  `telno_loc` varchar(20) NOT NULL,
  `10_school_name` varchar(200) NOT NULL,
  `10_board` varchar(200) NOT NULL,
  `10_passingyear` varchar(10) NOT NULL,
  `10_percentage` varchar(10) NOT NULL,
  `12_school_name` varchar(200) NOT NULL,
  `12_board` varchar(200) NOT NULL,
  `12_passingyear` varchar(10) NOT NULL,
  `12_percentage` varchar(10) NOT NULL,
  `diploma_college` varchar(200) NOT NULL,
  `diploma_university` varchar(200) NOT NULL,
  `diploma_passingyear` varchar(10) NOT NULL,
  `diploma_percentage` varchar(10) NOT NULL,
  `graduation_college` varchar(200) NOT NULL,
  `graduation_university` varchar(200) NOT NULL,
  `graduation_passingyear` varchar(10) NOT NULL,
  `graduation_percentage` varchar(10) NOT NULL,
  `other_college` varchar(200) NOT NULL,
  `other_university` varchar(200) NOT NULL,
  `other_passingyear` varchar(10) NOT NULL,
  `other_percentage` varchar(10) NOT NULL,
  `experience_duration` varchar(30) NOT NULL,
  `exp_organisation_name` varchar(200) NOT NULL,
  `hostel_req` varchar(20) NOT NULL,
  `verified` varchar(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentdetails`
--

INSERT INTO `studentdetails` (`id`, `Date`, `see_rollno`, `gen_rank`, `category_rank`, `cat_mat_cmat`, `percentile`, `other_exam_name`, `other_exam_percentile`, `name`, `email`, `fname`, `dob`, `nationality`, `category`, `Gender`, `state_of_domicile`, `permanent_add`, `pincode_perm`, `telno_perm`, `correspondence_add`, `pincode_corr`, `telno_corr`, `local_add`, `pincode_loc`, `telno_loc`, `10_school_name`, `10_board`, `10_passingyear`, `10_percentage`, `12_school_name`, `12_board`, `12_passingyear`, `12_percentage`, `diploma_college`, `diploma_university`, `diploma_passingyear`, `diploma_percentage`, `graduation_college`, `graduation_university`, `graduation_passingyear`, `graduation_percentage`, `other_college`, `other_university`, `other_passingyear`, `other_percentage`, `experience_duration`, `exp_organisation_name`, `hostel_req`, `verified`) VALUES
(56, '2016-11-20 07:28:01', '1', '1', '1', 'CAT', '1', '1', '1', 'jcnncnc', 'dpksingh1729@gmail.com', 'jjcjcjcj', '15 November, 2016', 'indian', 'SC', 'male', 'up', '1', '123564', '1', '1', '214100', '1', '1', '123456', '1', '1', '1', '1222', '1', '1', '1', '1222', '1', '1', '1', '2221', '1', '1', '1', '1215', '1', '1', '1', '1245', '1', '1', '1', 'Yes', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentdetails`
--
ALTER TABLE `studentdetails`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `studentdetails`
--
ALTER TABLE `studentdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
