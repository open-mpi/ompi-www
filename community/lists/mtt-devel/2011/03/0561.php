<?
$subject_val = "[MTT devel] Patch to send MIME email.";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 10 19:20:56 2011" -->
<!-- isoreceived="20110311002056" -->
<!-- sent="Thu, 10 Mar 2011 19:20:51 -0500" -->
<!-- isosent="20110311002051" -->
<!-- name="Abhishek Kulkarni" -->
<!-- email="adkulkar_at_[hidden]" -->
<!-- subject="[MTT devel] Patch to send MIME email." -->
<!-- id="AANLkTinTqXutbVqWuD9c5GmU=NfnaM6bHyJiswCQmq=S_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [MTT devel] Patch to send MIME email.<br>
<strong>From:</strong> Abhishek Kulkarni (<em>adkulkar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-10 19:20:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0562.php">Jeff Squyres: "Re: [MTT devel] Patch to send MIME email."</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2011/02/0560.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1385"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0562.php">Jeff Squyres: "Re: [MTT devel] Patch to send MIME email."</a>
<li><strong>Reply:</strong> <a href="0562.php">Jeff Squyres: "Re: [MTT devel] Patch to send MIME email."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>While working towards setting up MTT to test the CIFTS FTB middleware, we
<br>
resorted to a TextFile + Email reporter; largely because i) the frequency of
<br>
testing is low ii) lesser number of tests and iii) we did not want to deal
<br>
with setting up a centralized infrastructure to host the test results.
<br>
<p>The reporter worked great for us except that we wanted a little more than
<br>
just the summary. The attached patch adds a new boolean flag
<br>
&quot;email_detailed_reports&quot; which sends out the detailed reports of each phase
<br>
as attachments. I have had to use two files from CPAN to encode the email as
<br>
a multipart message. Right now only the *.txt files are attached but it
<br>
could also be extend to send an HTML-formatted email with HTML attachments.
<br>
<p>Do you think it looks okay to go in?
<br>
<p>Thanks,
<br>
Abhishek
<br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/mtt-devel/att-0561/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/mtt-devel/att-0561/mime.patch">mime.patch</a>
</ul>
<!-- attachment="mime.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0562.php">Jeff Squyres: "Re: [MTT devel] Patch to send MIME email."</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2011/02/0560.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1385"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0562.php">Jeff Squyres: "Re: [MTT devel] Patch to send MIME email."</a>
<li><strong>Reply:</strong> <a href="0562.php">Jeff Squyres: "Re: [MTT devel] Patch to send MIME email."</a>
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
