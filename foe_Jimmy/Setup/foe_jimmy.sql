-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jan 02, 2019 at 05:16 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foe_jimmy`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blogId` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `post` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `postedBy` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `image` varchar(50) NOT NULL,
  `alt` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blogId`, `title`, `post`, `date`, `postedBy`, `category`, `image`, `alt`) VALUES
(1, 'Friends of the Earth Keep Cup - Reduced Rate This Week!', '<p>Our limited edition Friends of the Earth Keep Cups have been hugely popular since we launched them as part of the Sick of Plastic Campaign this time last year.</p>\r\n<p>To celebrate one year of the campaign we\'ve decided to offer them at a reduced rate for one week only in the lead up to Christmas.</p>\r\n<p>Until now we have been exclusively gifting our Keep Cups to new monthly donors and those who give &euro;100 or more.</p>\r\n<p><strong>Why have our reusable cups been so popular?</strong></p>\r\n<p>Did you know that in Ireland we waste 20,000 single use coffee cups every hour? That adds up to 300 million a year! In comparison, reusable cups can be used time and time again for years.<br /><br />The Sick of Plastic Campaign has been one of our most popular campaigns in terms of public engagement, which goes to show - people really are sick of plastic and really want to do their bit to tackle plastic waste.</p>\r\n<p><strong>Your reusable cup can convert coffee lovers into action takers!</strong></p>\r\n<p>Carrying a reusable cup sends a strong message to business about tackling waste. It\'s also a great conversation starter, your reusable cup can empower others to take action on waste.</p>\r\n<p>Use your reusable coffee cup as a tool to inform people about the Waste Reduction Bill which is calling for a levy on single use coffee cups, a ban on single use plastics and to introduce a deposit return scheme for plastic bottles and aluminium cans.</p>', '2018-12-25 04:27:33', 1, 3, 'blog-thumbnail.bin.jpeg', 'FOE cup'),
(2, 'We can spark the solar revolution if we act right now.', '<p>Over 20,000 people signed our petition to support solar power in Ireland. Even Leo signed, while hanging out at Electric Picnic before he was Taoiseach. He agreed then there should be a fair payment for solar power.</p>\r\n<p>And now it could happen&nbsp;if you email your TDs today.</p>\r\n<p>The D&aacute;il will debate a draft law next Tuesday (the 27th) which would finally mean small-scale generators of renewable energy would get paid for the electricity they supply to the grid.</p>\r\n<p>At the moment in Ireland if you generate your own energy, any you don\'t use it all immediately, you have to give it away for free to the ESB.</p>\r\n<p>Think of a school with solar panels on the roof, generating power through the summer holidays. Or a farm with a small hydro or wind turbine, spinning all night with nowhere for the power to go. Across Europe electricity companies are obliged to pay for that extra power. It\'s only fair, and it fundamentally changes the economics of an investment in microgeneration for an individual, a community, or a small business. Suddenly pay-back periods are much shorter, a source of income is created, and the extra power is accounted for.</p>\r\n<p>It\'s a game changer. But electricity companies do not like it. They want you to buy your power entirely from them, forever.</p>\r\n<p>The Microgeneration Bill will change that. If passed, it will be the law that anyone who generates power through microgeneration will be entitled to be paid for any electricity they do not use.</p>\r\n<p>In practice it will mean solar power, hydro power and small wind turbines will be viable on Irish farms and in Irish Communities all across the country.</p>\r\n<p>More power to you,</p>\r\n<p>Kate, Oisin, Meaghan, Claudia, and Triona<br />Friends of the Earth</p>', '2018-12-25 04:27:33', 1, 1, 'blog-thumbnail.bin-2.jpeg', 'solar panel'),
(3, 'We are scared. We are angry. It\'s time to rise.', '<p>I\'ve been working on climate change for a little over 12 years now.</p>\r\n<p>I have never been more scared.</p>\r\n<p>And I have never been more hopeful.</p>\r\n<p>On the one hand, the recent UN science report is genuinely terrifying [1]. We are currently heading for a catastrophic 3C of global warming and they warn it will &ldquo;require rapid, far-reaching and unprecedented changes in all aspects of society&rdquo; to avert disaster [2].</p>\r\n<p>On the other hand, I have been inspired by wave after wave of grassroots activism in the last couple of years. Combined with dogged NGO advocacy, we have seen significant victories, and the wider public, the media and politicians have begun to take notice.</p>\r\n<p>We are at a moment of unprecedented peril. But our collective campaigning has created a small window of opportunity.</p>\r\n<p>Our future really is in the balance. That&rsquo;s where people like you come in. People who get it. People who are ready to act.</p>\r\n<p>Will you help tip the balance towards hope?</p>\r\n<p><a href=\"#\"><strong>Yes, I\'ll help sign-up to talk to my TD</strong></a></p>\r\n<p>Our politicians are paying attention to climate change like never before. But they still just don&rsquo;t really get it, as evidenced by the recent Budget [3], which came the day after the UN climate science report and still ignored climate change.</p>\r\n<p>At a spontaneously organized protest outside the D&aacute;il, where hundreds gathered just days later, a student activist caught the mood well when she told the crowd &ldquo;We are scared. We are angry. We are here to make them act\" [4].</p>\r\n<p><strong>Now we want to talk to every TD in the D&aacute;il to drive home the need for #ClimateActionNow. Will you join us?</strong></p>\r\n<p>On Wednesday 5<sup>th</sup>&nbsp;December, we&rsquo;re taking over Buswells Hotel opposite the D&aacute;il to organize conversations between constituents and their TDs.</p>\r\n<p>One the same day, the new Minister, Richard Bruton, who is talking about &ldquo;a revolution&rdquo; to tackle climate change [5], will be presenting to the special all-party Committee on Climate Action.</p>\r\n<p>The EPA will also be publishing the latest figures on Ireland&rsquo;s climate polluting emissions, which are certain to be alarming.</p>\r\n<p>And we want to tell every TD that it&rsquo;s time for #ClimateActionNow.</p>\r\n<p>We&rsquo;ve organized lobby days like this in the past. They have been crucial to winning key amendments to the climate law, like making sure the advisory council Prof John Fitzgerald chair was truly independent. And like building support for the Divestment Bill that is now on the verge of becoming law.</p>\r\n<p><strong><a href=\"http://bit.ly/SCC_Rise\">Come along on December 5<sup>th</sup></a></strong>. You don&rsquo;t have to be an expert in climate policy, you just have to be expert in being a human worried about climate change. It doesn&rsquo;t matter if you have never spoken to your TD before. In fact it makes it all the more powerful. There&rsquo;ll be staff and volunteers from various members of the Stop Climate Choas Coalition there all day to support you no matter what time you come between 10am and 7pm.</p>\r\n<h4>So, what next?</h4>\r\n<p><a href=\"#\">A)&nbsp;Email your TD now&nbsp;to ask them to come to Buswell&rsquo;s</a></p>\r\n<p><a href=\"#\">B)&nbsp;Tell us what time you think you can come at</a></p>\r\n<p>We&rsquo;ll let you know which of your TDs have confirmed and what time they plan to be there.</p>\r\n<p>Thanks to our campaigning a special all-party Committee is now considering the landmark report of the Citizens&rsquo; Assembly on climate change. Our goal on December 5<sup>th</sup>&nbsp;is for citizens to assemble again to&nbsp;<a href=\"#\">make sure TDs know&nbsp;</a>that whatever plan they produce must be at least as strong as the Citizens&rsquo; Assembly report.</p>\r\n<p>Earth is our only home. It&rsquo;s time to rise before it&rsquo;s too late.</p>\r\n<p><strong><a href=\"#\">Register now for #RiseforClimate</a>, Jobs and Justice on December 5<sup>th</sup>.</strong></p>\r\n<p><strong><a href=\"donate.php\">Give what you can now</a>&nbsp;to help us organize this and more climate campaigning.</strong></p>\r\n<p>Together we can tip the balance.</p>\r\n<p>Yours in hope and fellowship,</p>\r\n<p>Oisin Coghlan<br />for the Friends of the Earth team.</p>', '2018-12-25 04:27:33', 1, 1, 'blog-thumbnail.bin-3.jpeg', 'melt ice'),
(4, 'Apply now to take part in Mobilize. Resist. Transform. Environmental Issues Course 2018!', '<p>Are you aware of the existence of environmental issues, but unsure how they interconnect? Are you eager to meet like-minded people with whom to delve into these issues and find a point of intervention where you can make a change? Perhaps you have watched a documentary about climate change but don\'t know where to start in order to make a change, and that can be a lonely, scary place. So maybe you need to feel part of a community to feel supported enough to try to make those changes?</p>\r\n<p>&nbsp;</p>\r\n<p><strong>If any or all of this sounds like you, then register now to take part in Mobilize.Resist.Transform - a 6 week Autumn evening course run by Friends of the Earth.</strong></p>\r\n<p>Apply to take part by completing this <a href=\"#\">form</a></p>\r\n<p>This course aims to offer a space to explore the environmental issues of our time, how they intersect and what some of the root causes might be. We will use a variety of participatory, development education style methodologies and work with each other to probe the issues over the course of the 6 weeks, with reading materials provided for each week to deepen your experience. Ways of working can in themselves be an act of revolution, so in our sessions we will be using activities that recognise the whole person, not just the intellect, and we will strive to always confront oppression and privilege. Thus, the sessions will, for the most part, not be lecture style, but will employ creative methodologies and interaction. We will also endeavour to have the input of guest speakers in relevant sessions.</p>\r\n<p>The course will run for six&nbsp;<strong>Thursday evenings</strong>, from<strong>&nbsp;November 8th to December 13th</strong>, in Dublin City Centre&nbsp;from&nbsp;<strong>6:30pm to 9pm</strong>.&nbsp;<strong>The location will be given to all those whose applications are successful.</strong></p>\r\n<p>To cover the cost of the space, we will be asking for a contribution of &euro;40 for those in employment and &euro;25 for those unwaged or students. This is payable once your registration is confirmed.</p>\r\n<p><strong>Once again, you can apply to take part by completing&nbsp;<a href=\"#\">this short form</a>.</strong></p>', '2018-12-25 15:43:03', 1, 1, 'blog-thumbnail.bin-4.jpeg', 'recycle bin'),
(5, 'We\'re not going down without a fight', '<p>Last Monday a UN scientific panel published&nbsp;<a href=\"#\">an alarming report on climate change</a>. The impacts are worse than we thought and to prevent complete climate chaos we essentially have to halve our pollution by 2030 and reduce it to zero by 2050.</p>\r\n<p>On Tuesday, the Government introduced Budget 2019, dropping plans for an increase in the carbon tax announced by the Taoiseach, and effectively \"<a href=\"#\">giving two fingers to the Paris Agreement</a>\" and everyone who is threatened by climate change.</p>\r\n<p>It was a staggering failure of political leadership that put us all at risk of devastating climate impacts.</p>\r\n<p><strong>But we\'re not going down without a fight.</strong></p>\r\n<p><strong>What you can do:</strong></p>\r\n<h3>1. Ring your TD on 01-6183000</h3>\r\n<p>Call 01-6183000 and ask for the office of one of your local TDs. Leave a message to say you are shocked, alarmed and that you want to see climate action now.<br />(<a href=\"#\">use this map to figure out who your TDs are).</a></p>\r\n<h3><a href=\"#\">2. Email all your local TDs</a></h3>\r\n<p>You can use this link to send an email to all the TDs in your constituency. We haven\'t written a preset message for you. Use your own words, it can be as short as you like. Tell them why you want climate action now. You might be worried about your children or grandchildren. Or you own future! Tell your TDs what it is that makes you angry, sad or worried about climate change.</p>\r\n<h3><a href=\"#\">3. Come to the D&aacute;il on Tuesday lunchtime</a></h3>\r\n<p>Three activist groups have organized an impromptu demonstration on Tuesday 15th between 12.30 and 2pm to show TDs that people care about climate change. Friends of the Earth and Stop Climate Chaos are supporting the demo organized by the Dublin Eco-Feminist Collective, Not Here Not Anywhere, and Young Friends of the Earth.</p>\r\n<p>If you are in striking distance of Dublin 2, join us.&nbsp;<strong>If not, call your TD,</strong>&nbsp;that will have a real impact too - let\'s make sure they all get dozens of phone calls.</p>\r\n<p>The biggest take-away from the UN report is that every fraction of a degree of climate change matters. And we don\'t know which fraction is the difference between climate damage and climate catastrophe. So everything we do matters and every decision government makes now matters. We are almost out of time, and the Government is absolutely out of excuses.</p>\r\n<p>Please make sure they hear from you tomorrow.</p>\r\n<p>All our tomorrows depend on it.</p>\r\n<p>Oisin Coghlan<br />Friends of the Earth</p>\r\n<p><strong>P.S. This is the moment to ask to your family and friends to take action too.</strong>&nbsp;If you\'re like me you\'re too polite in most social situations to bring up climate change. Today is the day we push through that awkwardness for the sake of our futures:</p>\r\n<ol>\r\n<li><strong>Send this email to the people you care about, cos they need to care about climate change.</strong></li>\r\n<li>Agree with a couple of friends that you\'ll call your TDs and compare notes.</li>\r\n<li>Grab a friend and bring them with you to the demo.</li>\r\n</ol>', '2018-12-25 15:43:03', 1, 2, 'blog-thumbnail.bin-5.jpeg', 'card with earth shape'),
(6, 'Hiring: Young FoE Ireland Food Sovereignty Events & Communications Officer!', '<p>Friends of the Earth Ireland is seeking an Events and Communications officer to promote food sovereignty within an 18-35 age range in Ireland.</p>\r\n<p>The post is half-time and based in the Friends of the Earth Ireland office in Dublin. Application details are at the bottom of this page.</p>\r\n<p>Friends of the Earth Ireland is an environmental justice campaigning organization, striving to create a just world where both people and nature thrive. It is a member of the Irish Environmental Network, the Environmental Pillar, and is the secretariat of the Stop Climate Chaos coalition Ireland, a network of 28 civil society, youth and faith-based organisations campaigning for Ireland to do its fair share on climate.</p>\r\n<p>We are a small organization of 2 full-time staff, and 3 part-time staff.</p>\r\n<p>We campaign for the implementation of community-centred alternatives to fossil fuels, and against dirty energy projects. We roll out educational projects to build the knowledge and skill base of prospective campaigners, and support youth action on environmental justice issues of their choosing.</p>\r\n<p>We are part of Friends of the Earth Europe, which campaigns for sustainable and just societies and for the protection of the environment. It unites 33 national organisations with thousands of local groups and is part of the world\'s largest grassroots environmental network, Friends of the Earth International. Please see www.foeeurope.org for more information.</p>\r\n<p>Within the FoEE network, Young Friends of the Earth Europe (YFoEE) is a grassroots network of young people and youth organisations working collectively on a local, national and European level. It unites member groups from 15 countries across Europe, bringing together and training young people to campaign for and share knowledge and ideas on social and environmental justice.</p>\r\n<p>Young Friends of the Earth Ireland are a grassroots environmental group of volunteers whose mission is to mobilize and inspire people to join the movement for climate justice in Ireland.</p>\r\n<p><strong>What is the role?</strong></p>\r\n<p>You will be directly involved in the Irish implementation of the \'Growing Together\' youth project, of which there are 7 Young Friends of the Earth Europe partners. You will be reporting to the Head of Mobilisation of Friends of the Earth Ireland and working closely together with the YFoEE working groups for Food &amp; Agriculture and Communications.</p>\r\n<p>\'Growing Together\' focuses on building young people\'s capacity and knowledge on Food Sovereignty through innovative communications, political analysis and popular education methodologies. The main objectives of the project are:</p>\r\n<ul>\r\n<li>To build educational and communications capacity of young people, and in-depth analysis on food sovereignty topic and enable effective organising with affected rural communities</li>\r\n<li>To raise awareness and promote critical thinking among young people (and especially young farmers) from rural communities to engage in decision-making that directly impacts their livelihood and their future.</li>\r\n<li>To empower young people to become change makers, including support for young people to have a say in European policy development related to food and agricultural policies.</li>\r\n</ul>\r\n<p><strong>Goals and responsibilities of this position include:</strong></p>\r\n<ul>\r\n<li>Organise and develop content for Ireland-based youth trainings, skill-shares and public events in collaboration with Young FoE Ireland on food sovereignty.</li>\r\n<li>Collect and disseminate tools and methodologies of communications and popular education to support Young FoE Ireland group activities on food sovereignty.</li>\r\n<li>Communicate and strengthen relationships with European YFoEE allies working on topics of food and agriculture.</li>\r\n<li>Ensure visibility and outreach of YFoE group activities on food sovereignty.</li>\r\n<li>Support the development of YFoEE \'Food Sovereignty Manifesto\', which will include the voices of young people in relation to food sovereignty issues</li>\r\n<li>Reach out to young farmers in both rural and urban areas to facilitate enhanced connection between youth involved in the food system in rural and urban areas.</li>\r\n<li>Attend European Level online Food and Agriculture Working Group online meetings at a rate of once every one/two months.</li>\r\n<li>Attend an evening Young FoE meeting at least once every 6 weeks.</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p><strong>Applicants should demonstrate the following attributes:</strong></p>\r\n<ul>\r\n<li>Demonstrable commitment to the values, vision and mission of Young Friends of the Earth Ireland and Friends of the Earth Ireland.</li>\r\n<li>Strong interest in environmental justice issues, ideally through voluntary or work experience as social/environmental activist or within an NGO.</li>\r\n<li>Experience of working with young people.</li>\r\n<li>Previous experience of using non-formal education tools and good facilitation skills.</li>\r\n<li>Event management.</li>\r\n<li>Strong organisational and time management skills.</li>\r\n<li>Excellent written and social media communication skills.</li>\r\n<li>High level of IT literacy (Microsoft Office/Excel &ndash; Photoshop is a plus).</li>\r\n<li>High level of English (written and oral).</li>\r\n<li>Ability to take initiative.</li>\r\n<li>Desire to be a team player and build the capacity and power of grassroots groups.</li>\r\n<li>Capacity to manage a basic budget.</li>\r\n</ul>\r\n<p><strong>The following attributes are also desirable (but not essential):</strong></p>\r\n<ul>\r\n<li>Previous experience with Young Friends of the Earth, Friends of the Earth, or another environmental and social justice group/ organisation.</li>\r\n<li>Graphic design skills.</li>\r\n<li>Experience in the arts and/or theatre.</li>\r\n<li>Photography skills.</li>\r\n<li>Familiarity with the Irish environmental movement.</li>\r\n</ul>\r\n<p><strong>Role details:</strong></p>\r\n<p><strong>Starting date: 15th October 2018</strong></p>\r\n<p><strong>The successful applicant will be expected to travel to Brussels on the 16<sup>th</sup>&nbsp;and 17<sup>th</sup>&nbsp;of October for the kick-off of the project.</strong></p>\r\n<ul>\r\n<li>Remuneration: Gross salary &euro;23,625 FT equivalent salary.</li>\r\n<li>Half time: &euro;11,812.5 gross.</li>\r\n<li>12.5 holiday days, 5 weeks.</li>\r\n<li>Salary and holidays are pro-rata.</li>\r\n</ul>\r\n<p>Conditions are according to Irish legislation including the legal ability to live and work in Ireland.</p>\r\n<p>Friends of the Earth Ireland adheres to Irish law that prohibits discrimination on basis of age, sexual orientation, marital status, birth, fortune, religious, philosophical or political beliefs, language, present or future state of health, disability, physical or genetic characteristics, sex, pregnancy, childbirth, maternity, change of sex, nationality, alleged race, skin colour, ancestry, national, ethnic or social origin.</p>\r\n<p>The working language is English, but participants are not expected to be native speakers.</p>\r\n<p><strong>How to apply?</strong></p>\r\n<p><em>Do you feel you meet our criteria, and feel inspired by the objectives and challenges of the position?</em></p>\r\n<p>Then please send an email with an attached CV and a concise letter (around 1 A4 page, one side) explaining your background and your motivation to:</p>\r\n<p><a href=\"mailto:meaghan@foe.ie\">meaghan@foe.ie</a></p>\r\n<p><br />by October 3rd 17:00 GMT+1, with the subject title:</p>\r\n<p><em>Young FoE Application</em></p>\r\n<p>Only candidates selected for interview will be contacted. Thank you for your understanding.</p>\r\n<p>Interviews will be conducted in person in&nbsp;<strong>Dublin 8<sup>th</sup>&nbsp;and 9th October, 2018</strong>. If you have not been contacted by October 5th please consider that you have not been shortlisted.</p>', '2018-12-25 15:45:27', 1, 4, 'blog-thumbnail.bin-6.jpeg', 'office lady'),
(7, 'The Young FoE Europe Summer Camp', '<p>The Young Friends of the Earth Europe Summer Camp took place in Cyprus this year between the 3rd and 9th of September. High up in the pine forests of the Troodos mountains the international group of 55 young people shared stories of resistance in many different contexts, depicting the differences and commonalities in our struggles. Focusing on a theme of intersectionality, the camp provided a fertile space for both seasoned and new activists to explore this essential component of environmentalism.</p>\r\n<p>We explored how climate change is felt differently along identities of gender, class, ethnicity, sexuality, race and migration status. In turn, this informed our training sessions in popular education, power and privilege and inclusive facilitation, aiming to help us in building a more inclusive movement that engages with diverse people and groups. This is the crucial point if we are serious about environmental justice that leaves no one behind in our struggle.</p>\r\n<p>During the camp we discussed reproductive rights in Ireland and Argentina and why they are part of environmental justice. We heard of struggles from Young Friends of the Earth Africa, including cases from Mozambique, Egypt, South Africa and Nigeria. We learnt about mining in Colombia and visited a community resisting mining in Cyprus. From across the world we shared stories that show the realities of our extractive, profit-driven system. A system rooted in oppressive structures of capitalism, patriarchy, imperialism and white supremacy. If we are to overcome it we must see all struggles against oppression as interrelated. We must listen to the voices and fully engage with those marginalised in society who face the worst impacts of climate change.</p>', '2018-12-25 15:45:27', 2, 3, 'blog-thumbnail.bin-7.jpeg', 'tents');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `catID` int(11) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`catID`, `category`) VALUES
(1, 'Climate'),
(2, 'Waste'),
(3, 'Recycle'),
(4, 'Renewable Energy');

-- --------------------------------------------------------

--
-- Table structure for table `cat_blog`
--

CREATE TABLE `cat_blog` (
  `catID` int(11) NOT NULL,
  `blogID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `ID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `post` int(11) DEFAULT NULL,
  `news` int(11) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `donate_record`
--

CREATE TABLE `donate_record` (
  `record_id` int(10) UNSIGNED NOT NULL,
  `amount` decimal(10,2) UNSIGNED NOT NULL,
  `fName` varchar(20) NOT NULL,
  `lName` varchar(20) NOT NULL,
  `email` varchar(60) NOT NULL,
  `address1` tinytext NOT NULL,
  `address2` tinytext,
  `city` tinytext NOT NULL,
  `country` tinytext NOT NULL,
  `post_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `donate_record`
--

INSERT INTO `donate_record` (`record_id`, `amount`, `fName`, `lName`, `email`, `address1`, `address2`, `city`, `country`, `post_code`) VALUES
(1, '5.00', 'Jimmy', 'Chen', 'jimmychen0123@gmail.com', '86 Reuben Street', '', 'Dublin 8', 'Ireland', 'D08 YD53'),
(2, '15.00', 'Jimmy', 'Chen', 'jimmychen0123@gmail.com', '86 Reuben Street', '', 'Dublin 8', 'Ireland', 'D08 YD53'),
(3, '100.00', 'Jimmy', 'Chen', 'jimmychen0123@gmail.com', '86 Reuben Street', '', 'Dublin 8', 'Ireland', 'D08 YD53'),
(4, '150.00', 'Jimmy', 'Chen', 'jimmychen0123@gmail.com', '86 Reuben Street', '', 'Dublin 8', 'Ireland', 'D08 YD53'),
(5, '30.00', 'Jimmy', 'Chen', 'jimmychen0123@gmail.com', '86 Reuben Street', '', 'Dublin 8', 'Ireland', 'D08 YD53'),
(6, '5.00', 'Jimmy', 'Chen', 'jimmychen0123@gmail.com', '86 Reuben Street', '', 'Dublin 8', 'Ireland', 'D08 YD53'),
(7, '15.00', 'Jimmy', 'Chen', 'jimmychen0123@gmail.com', '86 Reuben Street', '', 'Dublin 8', 'Ireland', 'D08 YD53'),
(8, '5.00', 'Jimmy', 'Chen', 'jimmychen0123@gmail.com', '86 Reuben Street', '', 'Dublin 8', 'Ireland', 'D08 YD53'),
(9, '5.00', 'Jimmy', 'Chen', 'jimmychen0123@gmail.com', '86 Reuben Street', '', 'Dublin 8', 'Ireland', 'D08 YD53'),
(10, '5.00', 'Jimmy', 'Chen', 'jimmychen0123@gmail.com', '86 Reuben Street', '', 'Dublin 8', 'Ireland', 'D08 YD53'),
(11, '5.00', 'Jimmy', 'Chen', 'jimmychen0123@gmail.com', '86 Reuben Street', '', 'Dublin 8', 'Ireland', 'D08 YD53'),
(12, '5.00', 'Jimmy', 'Chen', 'jimmychen0123@gmail.com', '86 Reuben Street', '', 'Dublin 8', 'Ireland', 'D08 YD53'),
(13, '5.00', 'Jimmy', 'Chen', 'jimmychen0123@gmail.com', '86 Reuben Street', '', 'Dublin 8', 'Ireland', 'D08 YD53'),
(14, '23.00', 'Jimmy', 'Chen', 'jimmychen0123@gmail.com', '86 Reuben Street', '', 'Dublin 8', 'Ireland', 'D08 YD53'),
(15, '5.00', 'Jimmy', 'Chen', 'jimmychen0123@gmail.com', '86 Reuben Street', '', 'Dublin 8', 'Ireland', 'D08 YD53'),
(16, '5.00', 'Jimmy', 'Chen', 'jimmychen0123@gmail.com', '86 Reuben Street', '', 'Dublin 8', 'Ireland', 'D08 YD53'),
(17, '5.00', 'jimmy', 'chen', 'jimmychen0123@gmail.com', '86 Reuben Street', '', 'Dublin 8', 'Ireland', 'D08 YD53'),
(18, '5.00', 'Jimmy', 'Chen', 'jimmychen0123@gmail.com', '86 Reuben Street', '', 'Dublin 8', 'Ireland', 'D08 YD53'),
(19, '5.00', 'Jimmy', 'Chen', 'jimmychen0123@gmail.com', '86 Reuben Street', '', 'Dublin 8', 'Ireland', 'D08 YD53'),
(20, '5.00', 'Jimmy', 'Chen', 'jimmychen0123@gmail.com', '86 Reuben Street', '', 'Dublin 8', 'Ireland', 'D08 YD53'),
(21, '5.00', 'Jimmy', 'Chen', 'jimmychen0123@gmail.com', '86 Reuben Street', '', 'Dublin 8', 'Ireland', 'D08 YD53'),
(22, '5.00', 'Jimmy', 'Chen', 'jimmychen0123@gmail.com', '86 Reuben Street', '', 'Dublin 8', 'Ireland', 'D08 YD53'),
(23, '350.00', 'Jimmy', 'Chen', 'jimmychen0123@gmail.com', '86 Reuben Street', '', 'Dublin 8', 'Ireland', 'D08 YD53'),
(24, '666.00', 'Jimmy', 'Chen', 'jimmychen0123@gmail.com', '86 Reuben Street', '', 'Dublin 8', 'Ireland', 'D08 YD53'),
(25, '5.00', 'Jimmy', 'Chen', 'jimmychen0123@gmail.com', '86 Reuben Street', '', 'Dublin 8', 'Ireland', 'D08 YD53'),
(26, '50.00', 'Jimmy', 'Chen', 'jimmychen0123@gmail.com', '86 Reuben Street', '', 'Dublin 8', 'Ireland', 'D08 YD53'),
(27, '700.00', 'Jimmy', 'Chen', 'jimmychen0123@gmail.com', '86 Reuben Street', '', 'Dublin 8', 'Ireland', 'D08 YD53'),
(28, '5.00', 'Jimmy', 'Chen', 'jimmychen0123@gmail.com', '86 Reuben Street', '', 'Dublin 8', 'Ireland', 'D08 YD53'),
(29, '15.00', 'Jimmy', 'Chen', 'jimmychen0123@gmail.com', '86 Reuben Street', '', 'Dublin 8', 'Ireland', 'D08 YD53'),
(30, '15.00', 'Jimmy', 'Chen', 'jimmychen0123@gmail.com', '86 Reuben Street', '', 'Dublin 8', 'Ireland', 'D08 YD53');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(10) UNSIGNED NOT NULL,
  `news_year` date NOT NULL,
  `image` varchar(50) NOT NULL,
  `alt` varchar(60) NOT NULL,
  `news_heading` tinytext NOT NULL,
  `news_sParagraph` text NOT NULL,
  `news_fParagraph` text NOT NULL,
  `news_category` enum('policy','education','event','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_year`, `image`, `alt`, `news_heading`, `news_sParagraph`, `news_fParagraph`, `news_category`) VALUES
(1, '2018-12-07', 'latest_news.png', 'runOnSun', 'Voting is now open in the Solar Schools Competition', 'Do you want your school to be a Solar School? To run on free, clean, renewable energy? Friends of the Earth and a number of energy co-operatives are running a competition to give five lucky schools the opportunity to have solar panels, designed and installed at their school in 2019 with a 90% grant.', 'The winning schools will receive solar electricity panels worth €10,000, and will then be able to power themselves with free renewable electricity generated right from their roof.  They will even make money from selling any extra energy that is generated outside of school hours.  At least 90% of the costs will be covered by a grant, and the schools will only have to provide a contribution of a maximum of €1,000 or 10% of the costs.', 'education'),
(2, '2018-10-09', 'budget2019.jpg', 'budget2019', 'U-turn on carbon tax', 'Budget a key test of Taoiseach\'s credibility on climate change, one day after stark scientific call for action.', 'Reacting to reports that that the Government may drop plans to raise the carbon tax by €10 in today\'s Budget, Friends of the Earth Director, Oisin Coghlan commented: \"Today\'s Budget is a key test of Leo Varadkar\'s credibility on climate change. On the night he was elected Taoiseach he announced he wanted Ireland to have a new ambition on climate change. This January he conceded to the European Parliament that Ireland was a laggard and he wasn\'t proud of our record on climate change. In August the Taoiseach told an interviewer \'if we are going to meet our climate change obligations then we will have to grasp the nettle in increasing the carbon tax\'.\"\r\n\"If Leo Varadkar can\'t even deliver a modest €10 increase in the carbon tax, his credibility will crumble. Were all his fine words of the last 18 months just hot air?\"', 'policy'),
(3, '2018-10-08', 'ipcc.jpg', 'ipcc', 'Friends of the Earth Europe\'s response to Intergovernmental Panel on Climate Change (IPCC) Report', 'New UN climate science review shows Europe must kick fossil fuel addiction.', 'Today\'s sobering Intergovernmental Panel on Climate Change (IPCC) report on the impacts of 1.5°C of global warming shows Europe\'s addiction to fossil fuels must come to an end, according to Friends of the Earth Europe.', 'policy'),
(4, '2018-10-31', 'electric_picnic.jpg', 'electric picnic', 'Electric Picnic-goers to leave no trace', 'Friends of the Earth had a strong presence at Electric Picnic this weekend for the fourth year in a row.', 'Friends of the Earth will be the largest NGO at the Electric Picnic music festival this weekend in Stradbally, Co. Laois. The environmental organization is bringing 160 volunteers to the Picnic as part of their popular “Sick of Plastic” campaign.', 'event');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_Id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_Id`, `username`, `password`) VALUES
(1, 'uche', 'sewa'),
(2, 'jimmy', 'sewa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blogId`),
  ADD KEY `blogBy` (`postedBy`),
  ADD KEY `category` (`category`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`catID`);

--
-- Indexes for table `cat_blog`
--
ALTER TABLE `cat_blog`
  ADD PRIMARY KEY (`catID`,`blogID`),
  ADD KEY `blogID` (`blogID`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `post` (`post`),
  ADD KEY `news` (`news`);

--
-- Indexes for table `donate_record`
--
ALTER TABLE `donate_record`
  ADD PRIMARY KEY (`record_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`),
  ADD KEY `news_year` (`news_year`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blogId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `catID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donate_record`
--
ALTER TABLE `donate_record`
  MODIFY `record_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `blog_ibfk_1` FOREIGN KEY (`postedBy`) REFERENCES `users` (`user_Id`),
  ADD CONSTRAINT `blog_ibfk_2` FOREIGN KEY (`category`) REFERENCES `category` (`catID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
