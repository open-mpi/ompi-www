<?
$subject_val = "Re: [MTT devel] More GDS questions";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 12 11:36:47 2010" -->
<!-- isoreceived="20100212163647" -->
<!-- sent="Fri, 12 Feb 2010 19:36:16 +0300" -->
<!-- isosent="20100212163616" -->
<!-- name="Andrew Senin" -->
<!-- email="as_at_[hidden]" -->
<!-- subject="Re: [MTT devel] More GDS questions" -->
<!-- id="00ba01caac01$7fd57200$7f805600$_at_com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B756D85.1010001_at_argus-cv.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] More GDS questions<br>
<strong>From:</strong> Andrew Senin (<em>as_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-12 11:36:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0491.php">Jeff Squyres: "Re: [MTT devel] MTT GDS -- one more..."</a>
<li><strong>Previous message:</strong> <a href="0489.php">Andrew Senin: "Re: [MTT devel] MTT GDS -- one more..."</a>
<li><strong>In reply to:</strong> <a href="0484.php">Igor Ivanov: "Re: [MTT devel] More GDS questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0492.php">Jeff Squyres: "Re: [MTT devel] More GDS questions"</a>
<li><strong>Reply:</strong> <a href="0492.php">Jeff Squyres: "Re: [MTT devel] More GDS questions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Jeff, 
<br>
<p>&nbsp;
<br>
<p>I would also like to add to Igor's comment that CPU time shown by Google is
<br>
a sum of all CPUs of distributed system involved in update operation (and
<br>
who knows how many servers are involved?). Also they &quot;define 'CPU hour' in
<br>
terms of a hypothetical 1.4 GHz processor, whereas the actual processors we
<br>
use in production vary but are generally faster than this&quot; (see comment of
<br>
DonSchwarz:
<br>
<a href="http://groups.google.com/group/google-appengine-java/browse_thread/thread/aa">http://groups.google.com/group/google-appengine-java/browse_thread/thread/aa</a>
<br>
9f18638b7bbea9?pli=1). According to the same topic 6.5 CPU hours is about
<br>
2.3 minutes real time. I think you may try to remove some of indexes which
<br>
need to be updated on each new file upload (see Datastore Indexes on Web
<br>
admin console).
<br>
<p>&nbsp;
<br>
<p>Regards, 
<br>
<p>Andrew Senin.
<br>
<p>&nbsp;
<br>
<p>From: Igor Ivanov [mailto:igor.ivanov_at_[hidden]] 
<br>
Sent: Friday, February 12, 2010 6:02 PM
<br>
To: Jeff Squyres
<br>
Cc: Development list for the MPI Testing Tool; bg_at_[hidden]; Yiftah
<br>
Shahar
<br>
Subject: Re: More GDS questions
<br>
<p>&nbsp;
<br>
<p>Hi Jeff,
<br>
<p>You touched a sore point. App engine forums are in filled  the questions as
<br>
yours. 
<br>
I can not know clear answer now.
<br>
<p>Igor
<br>
<p>Jeff Squyres wrote: 
<br>
<p>Igor et al. -- 
<br>
&nbsp;
<br>
1. I'm not sure you saw Ethan's and my posts from the past day or so about
<br>
GDS on the mtt-devel list; it just occurred to me that I don't know if
<br>
you're members of the list or not.  We've posted a few questions and
<br>
comments that you may not have received if you're not on the list:
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/mtt-devel/2010/02/index.php">http://www.open-mpi.org/community/lists/mtt-devel/2010/02/index.php</a>
<br>
&nbsp;
<br>
2. I'm still looking into the perl syntax error that caused my Big Submit to
<br>
GDS to fail.  But looking at the Google logs, it looks like at least *some*
<br>
of my test run results made it up to GDS.  There was a BIG spike in CPU
<br>
usage (3.2 hours of CPU time!) when it submitted -- see the attached CPU
<br>
usage graph from the apps dashboard.
<br>
&nbsp;
<br>
Does anyone know why it takes so much CPU just to submit data to GDS?  3.2
<br>
CPU hours is a LOT!
<br>
&nbsp;
<br>
It makes me a bit concerned that only part of a single Cisco MTT run submit
<br>
checked through almost half of our daily CPU quota (6.5 CPU hours/day).  Is
<br>
there any way to reduce the amount of CPU necessary just to submit data?
<br>
&nbsp;
<br>
&nbsp;&nbsp;
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;_____  
<br>
<p>&nbsp;
<br>
<p><p><p><p><p>__________ Information from ESET NOD32 Antivirus, version of virus signature
<br>
database 4861 (20100212) __________
<br>
<p>The message was checked by ESET NOD32 Antivirus.
<br>
<p><a href="http://www.esetnod32.ru">http://www.esetnod32.ru</a>
<br>
<p><p><p>
<p>
<br><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/mtt-devel/att-0490/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/mtt-devel/att-0490/image001.png" alt="image001.png">
<!-- attachment="image001.png" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0491.php">Jeff Squyres: "Re: [MTT devel] MTT GDS -- one more..."</a>
<li><strong>Previous message:</strong> <a href="0489.php">Andrew Senin: "Re: [MTT devel] MTT GDS -- one more..."</a>
<li><strong>In reply to:</strong> <a href="0484.php">Igor Ivanov: "Re: [MTT devel] More GDS questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0492.php">Jeff Squyres: "Re: [MTT devel] More GDS questions"</a>
<li><strong>Reply:</strong> <a href="0492.php">Jeff Squyres: "Re: [MTT devel] More GDS questions"</a>
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
