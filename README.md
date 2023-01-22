# PHP_Search_Engine
A search engine which has different searching methods implemented by PHP and MySQL
<br>
<h3>Table of Contents</h3>
<h4><a href="#disc">Description of the question</a></h4>
<h4><a href="#inst">Installation and introduction of required software</a></h4>
<h4><a href="#dataset">data set</a></h4>
<h4><a href="#prep">Preparing the software to run the code</a></h4>
<h4><a href="#soft">Software implementation</a></h4>
<br>
<div id="disc">
<h5>Description of the question</h5>
<br>
Implementation of a search engine that receives the user's query from different documents that have input titles and shows him the best and most relevant results. It should be noted that this search engine must find related documents with the following conditions.
<br>
<ul>
<li>Boolean search function: that is, the user uses AND, OR or NOT conditions in his search.</li>
<li>Biword search function: the user enters two words as a query, and the documents containing these two words (word order and consecutiveness are required) are shown to the user.</li>
<li>Wildcard search function: a user who has forgotten the end of a word, the beginning of a word, or the middle of a word, can search for related documents.</li>
</ul>
</div>
<br>
<div id="inst">
<h5>Installation and introduction of required software</h5>
<br>
Since the programming and implementation of this search engine will be in PHP, we need the following software.
<ol>
<li>WampServer</li><br>
<p>WampServer is the name of a server simulator software from Romain Bourdon for Windows operating system with full support for Apache, OpenSSL, MySQL, PHP, which completely turns your computer system into a computer server to easily host websites. become Set yourself up on localhost. The well-known triangle of web site setup consists of Apache, MySQL, and PHP, installing each of them separately on the user's system is difficult, especially if you are a beginner. In order to avoid this waste of energy and time, with the help of Wamp, you can easily install all three of them at the same time. The new version of Wamp Server also supports Xdebug, XDC, SQLBuddy, PhpMyAdmin, web Grind for web site management and configuration. This software has no graphical interface, just copy the files related to your website to the special folder of this software in c:/wamp, then you can use the System Tray section to change various settings. Access the program icon.</p>
<br>
<h5>Key features of WampServer:</h5>
<ul>
<li>Ability to easily set up a website on a local server</li>
<li>Suitable for web page developers to test designs</li>
<li>Quick and very easy installation</li>
<li>Ability to quickly access different parts of the System Tray</li>
<li>Simple database management of real servers</li>
<li>Support for 32-bit and 64-bit Windows</li>
</ul><br>
<li>JetBrains PHP Storm</li>
<p>We have used JetBrains PHP storm software to implement and write PHP codes. PhpStorm develops a simple and intelligent PHP programming environment that aims to exploit it, deeply understand your code experience and enable intelligent code completion, quick reference and error checking as well. is the face Real-time is one of the features of this software, which is always ready to help you in shaping codes, running unit tests or intuitive debugging. This software contains all the functions of WebStorm (HTML/CSS Editor, JavaScript Editor) and adds comprehensive for PHP.</p><br>
<h5>Key features of JetBrains PhpStorm:</h5>
<ul>
<li>Smart PHP editor</li>
<li>PHP code completion</li>
<li>PHP Doc support</li>
<li>Quick check</li>
<li>Combination of languages (JS/SQL/XML,...)</li>
<li>Advanced JavaScript editor</li>
<li>HTML/CSS editor</li>
<li>Simple programming environment with easy installation and quick startup</li>
<li>Applicable on Windows, Mac OS X, Linux</li>
<li>Convenient project configuration</li>
<li>Smart environment</li>
<li>Graphical debugging</li>
</ul><br>
<li>Navicat Premium</li>
<p>And finally, considering that WampServer installs the MySQL database and is managed by php my admin, the database can be managed, but we use Navicat software to connect to the database and manage it, because this is software. It has a much better UI. Navicat Premium is an ideal solution for managing and working with MySQL, PostgreSQL and Oracle databases. This software provides a powerful graphical user interface for managing and maintaining the database. In fact, the software's easy installation and intuitive user interface make it an indispensable tool for MySQL, SQLite, Oracle, and PostgreSQL on the web or on your local desktop. Store data in databases and rest assured that these processes are safe. By using Navicat Premium, you can connect to local or remote servers and perform operations such as input functions (Import) and output (Export), receive well. Also, this software supports importing data from ODBC, batch classification of tasks (meaning creating time table for production and production, data transfer and stored queries) and printing structure table. This software includes an outstanding graphical manager for setting users and access privileges. Navicat Premium also supports code completion, specification form and email alert services, etc.</p><br>
<h5>Key features of Navicat Premium software:</h5><br>
<ul>
<li>Support for the latest versions of MySQL, PostgreSQL and Oracle</li>
<li>Using the SQL command table in program design</li>
<li>Ability to communicate in an instant</li>
<li>Making backups of databases and restoring them</li>
<li>Support for XLS, CSV, TXT, DBF and XML formats in data input and output</li>
<li>Advanced graphic design</li>
<li>Support for Microsoft Windows</li>
</ul>
</div><br>
<div id="dataset">
<h5>Data Set</h5><br><br>
The dataset we use here, which is used as an input to the search engine, is the news collection of the BBC website in 5 areas of business, entertainment, economy, sports and technology. Each category contains 350 different news. The figure below shows an example of one of these news. Every news has a title and then the text of the news that the search engine does its work on both the news text and its title.<br>
![alt text](https://github.com/mhmdsrjz/PHP_Search_engine/blob/main/images/dataset_001.png)
</div>
<br>
<div id="prep">
<h5>Preparing the software to run the code</h5><br>
<p>First, the said software must be installed. Run Wamp software. Note that the Wamp software must be open and active until the end. The activation of the software can be seen from the green icon in the system tray.
Then put the dataset file named BBC in the C drive. The BBC file contains 5 other folders, each of which has 350 news items. Now we need to connect to the database and create a table in the database with the following specifications. So, open the Navicat software and do the following steps.</p>
<p>Choose the connection name as you like, set the IP value to localhost, leave the username root and the password blank. Now we are connected to MySQL. Now we need to create a database for our search engine.
From the opened window, name the database “data_m” and select ok. Then we create a table in the “data_m” database.</p>
![alt text](https://github.com/mhmdsrjz/PHP_Search_engine/blob/main/images/db_001.png)
<p>According to the figure above, we create three fields for our table. The first field will be the ID of each news, the second field will be the text of the news read from the data file, and finally the third field will be the news text after cleaning and removing the stop words. Then we save the table and name it news.</p>
</div><br>
<div id="soft">
<h5>Software implementation</h5><br>
<p>First, we copy the three files setup.php, search.php and seach_proc.php to the address below.</p><br>
<code>C:\wamp64\www</code><br>
<p>Our software is divided into two parts. The first part, which is called setup, is the job of reading information from the database, saving a copy of them in the database, performing cleaning operations and removing stop words, and finally saving the cleaned version of the data in the database. For this purpose, after running the Wamp server software and preparing the database as mentioned above, we run the setup.php file as localhost/setup.php in one of the system browsers.
In the setup section, first the search engine will enter the BBC folder in the C drive, then it will enter all the folders in order and read the news in each file, perform pre-processing on that news, an original copy of Save the news and a copy of the pre-processed (cleaned) news in the database and go to the next news so that all the news in all folders are checked.
After each news is saved in the database, it shows a message to the user that the operation is successful as below.</p>
<p>After saving all the news, you can start the search operation by entering the search.php page, by entering the address localhost/search.php in one of the system browsers. It should be mentioned that in the search.php file, the user's command is taken and the results are displayed, and in the search_proc.php file, the work of finding documents related to the user's query is done.
Before explaining how to search, here is some setup.php code. First, it connects to the created database and empties the news table. (Maybe there is already information in it) then it enters the c drive and the BBC folder and reads the files one by one and stores them in an array called “fileList”. Moving on the array, we take each house of the array and perform preprocessing operations on it. This operation is as follows:</p><br>
<ul>
<li>Delete numbers</li>
<li>Remove punctuation marks</li>
<li>Removing inters and spaces (provided there are two or more spaces in a row)</li>
<li>Removing stop words from the text</li>
</ul>
<p>At the end, the cleaned news text and the main news text are transferred to the database and the corresponding message is shown to the user.</p>
<p>The next part is the implementation of the main search engine, which, as mentioned, can be seen by entering the search.php page and the search panel.</p>
<p>First, we select the type of search by clicking on the radio button and start the search. Keep in mind that we have 1750 documents (different news texts) in our database.</p>
<br>
<ul>
<li>Boolean search</li>
<p>This type of search is done by applying conditional operators AND, OR or NOT.</p>
<ul>
<li>AND: In this type of search, the user just needs to enter the two words he wants, for example, word1 and word2, and select the AND option from the drop-down menu between the two words. In this way, all news that contain both word1 and word2 are shown to the user.</li>
<li>OR: In this type of search, the user just needs to enter the two words he wants, for example, word1 and word2, and select the OR option from the drop-down menu between the two words. In this way, all news containing word1 or word2 are shown to the user.</li>
<li>NOT: The third and last mode of Boolean search, in this type of search, the user just needs to enter the two words he wants, for example, word1 and word2, and select NOT from the drop-down menu between the two words. In this way, all the news that contain word1 but not word2 are shown to the user.</li>
</ul>
<li>Biword Search</li>
<p>In this type of search, the user can enter two words such as word1 and word2 with a space apart, our search engine will look for documents and news that exactly these two words are entered in the same order in the query and back. together, it happened in the document. Then he will show us these documents.</p>
<li>Wildcard Search</li>
<p>This type of search is also divided into three parts.</p>
<ul>
<li>ABC*: In this case, the user knows the beginning of the desired word but does not know the end of it. It is enough for the user to enter the part he knows and put a * after it. It means "I don't know the ending of the word". The search engine will show the user all the documents that contain a word on the condition that it is the same as the beginning of the word entered by the user. For example, suppose the user enters the word ent*, it will display all documents that contain at least one word that begins with ent.</li>
<li>*XYZ In this case, which is the opposite of the previous case, the user knows the end of the desired word but does not know the beginning of it. It is enough for the user to put a * and then enter the part he knows. It means "I don't know the beginning of the word". The search engine shows the user all the documents that contain a word on the condition that the end of the word entered by the user is the same. For example, suppose the user enters the word *ple, it will display all documents that contain at least one word ending with ple.</li>
<li>ABC*XYZ: In this case, the user knows the beginning and end of the desired word, but does not know the middle of it. It is enough for the user to enter the first part that he knows and then put a * and then enter the last part of the word that he knows. meaning "I don't know the middle of the word". The search engine shows the user all the documents that contain a word on the condition that they start with the beginning of the word entered by the user and end with the end of the word entered by him. For example, suppose the user enters the word ex*re, it will display all documents that contain at least one word that starts with ex and ends with re.</li>
</ul>
</ul>
</div>
