
#
# Table structure for table `authors`
#

CREATE TABLE `authors` (
  `authorid` int(11) NOT NULL auto_increment,
  `name` varchar(55) NOT NULL default '',
  PRIMARY KEY  (`authorid`)
) ;

#
# data for table `authors`
#

INSERT INTO `authors` (`authorid`, `name`) VALUES 
(1, 'J.R.R. Tolkien'),
(2, 'Alex Haley'),
(3, 'Tom Clancy'),
(4, 'Isaac Asimov');

# --------------------------------------------------------

#
# Table structure for table `books`
#

CREATE TABLE `books` (
  `bookid` int(11) NOT NULL auto_increment,
  `authorid` int(11) NOT NULL default '0',
  `title` varchar(55) NOT NULL default '',
  `ISBN` varchar(25) NOT NULL default '',
  `pub_year` smallint(6) NOT NULL default '0',
  PRIMARY KEY  (`bookid`)
) ;

#
# data for table `books`
#

INSERT INTO `books` (`bookid`, `authorid`, `title`, `ISBN`, `pub_year`) VALUES 
(1, 1, 'The Two Towers', '0-261-10236-2', 1954),
(2, 1, 'The Return of The King', '0-261-10237-0', 1955),
(3, 2, 'Roots', '0-440-17464-3', 1974),
(4, 3, 'Rainbow Six', '0-425-17034-9', 1998),
(5, 3, 'Teeth of the Tiger', '0-399-15079-X', 2003),
(6, 3, 'Executive Orders', '0-425-15863-2', 1996),
(7, 1, 'The Hobbit', '0-261-10221-4', 1937),
(8, 3, 'The Sum of All Fears', '0-425-13354-0', 1991),
(9, 3, 'Red Rabbit', '0-399-14870-1', 2000),
(10, 4, 'I, Robot', '0-553-29438-5', 1950),
(11, 4, 'Foundation', '0-553-80371-9', 1951),
(12, 4, 'Foundation\'s Edge', '0-553-29338-9', 1982),
(13, 4, 'Foundation and Empire', '0-553-29337-0', 1952),
(14, 4, 'Exploring the Earth and the Cosmos', '0-517-546671', 1982),
(15, 4, 'Second Foundation', '0-553-29336-2', 1953),
(16, 4, 'Forward the Foundation', '0-553-56507-9', 1993),
(17, 4, 'The Best of Isaac Asimov', '0-449-20829-X', 1973),
(18, 4, 'Isaac Asimov: Gold', '0-06-055652-8', 1995);
    