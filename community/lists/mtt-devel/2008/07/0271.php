<?
$subject_val = "[MTT devel] bogus timestamps in database";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 17 16:35:43 2008" -->
<!-- isoreceived="20080717203543" -->
<!-- sent="Thu, 17 Jul 2008 16:35:38 -0400" -->
<!-- isosent="20080717203538" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[MTT devel] bogus timestamps in database" -->
<!-- id="3451C468-9E99-4A6A-97D7-2A611E5334B5_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> [MTT devel] bogus timestamps in database<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-17 16:35:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0272.php">Ethan Mallove: "Re: [MTT devel] bogus timestamps in database"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2008/04/0270.php">Jeff Squyres: "Re: [MTT devel] Tracking process stats"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0272.php">Ethan Mallove: "Re: [MTT devel] bogus timestamps in database"</a>
<li><strong>Reply:</strong> <a href="0272.php">Ethan Mallove: "Re: [MTT devel] bogus timestamps in database"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here's a fun report (as of 17 July 2008):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/mtt/index.php?do_redir=775">http://www.open-mpi.org/mtt/index.php?do_redir=775</a>
<br>
<p>Note that two of the rows are in the future.  :-)  (Absoft has since  
<br>
fixed the problem; ntp accidentally got turned off)
<br>
<p>Ethan and I talked about this a bit, and then Josh and I talked about  
<br>
it.  Posting here to summarize everything:
<br>
<p>- It seems like a good solution for the moment is for submit.php to  
<br>
examine all the timestamps in a given submit and compare them to  
<br>
now().  Find the timestamp that latest in time, and compute  
<br>
x=latest_timestamp - now().  If x&gt;0, then subtract x from *all*  
<br>
timestamps in the submitted data.  Then print a Big Hairy Warning on  
<br>
the client that their time is not coordinated with the server.
<br>
<p>- Josh thinks that we should have a larger conversation about how to  
<br>
have some values be regulated (e.g., MPI name, test suite name,  
<br>
etc.).  I agree -- classic case: some people call it &quot;intel&quot;, others  
<br>
call it &quot;intel suite&quot;.  They show up differently in the DB.  My $0.02  
<br>
is that we should allow people to call it whatever they want in  
<br>
the .ini file, but then somehow ensure to submit the names all  
<br>
consistently (e.g., ini file has a map of &quot;this ini section is  
<br>
reported as 'intel'&quot;), and if the name is invalid, reject the data  
<br>
from the DB (or maybe put it in &quot;quarrantine&quot; so that it can be  
<br>
cleaned up and put in the main DB)?
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0272.php">Ethan Mallove: "Re: [MTT devel] bogus timestamps in database"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2008/04/0270.php">Jeff Squyres: "Re: [MTT devel] Tracking process stats"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0272.php">Ethan Mallove: "Re: [MTT devel] bogus timestamps in database"</a>
<li><strong>Reply:</strong> <a href="0272.php">Ethan Mallove: "Re: [MTT devel] bogus timestamps in database"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
