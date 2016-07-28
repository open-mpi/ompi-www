<?
$subject_val = "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 29 12:12:04 2010" -->
<!-- isoreceived="20101129171204" -->
<!-- sent="Mon, 29 Nov 2010 09:12:31 -0800" -->
<!-- isosent="20101129171231" -->
<!-- name="ananda.mudar_at_[hidden]" -->
<!-- email="ananda.mudar_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!" -->
<!-- id="1E3BF6B8D1243842A175F7C7069EB0E7092CE915_at_usa-mv-msg.wipro.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1E3BF6B8D1243842A175F7C7069EB0E717D75A_at_usa-mv-msg.wipro.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!<br>
<strong>From:</strong> <a href="mailto:ananda.mudar_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20Warning%20on%20fork()%20disappears%20if%20I%20use%20MPI%20threads!!"><em>ananda.mudar_at_[hidden]</em></a><br>
<strong>Date:</strong> 2010-11-29 12:12:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8729.php">George Bosilca: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<li><strong>Previous message:</strong> <a href="8727.php">Jeff Squyres: "Re: [OMPI devel] RFC: Bring the lastest ROMIO version	from	MPICH2-1.3 into the trunk"</a>
<li><strong>In reply to:</strong> <a href="8698.php">ananda.mudar_at_[hidden]: "[OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8729.php">George Bosilca: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<li><strong>Reply:</strong> <a href="8729.php">George Bosilca: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am posting this question again as it was sent before the long weekend
<br>
and didn't see any responses so far. Can anyone please explain the
<br>
discrepancy I am observing with the scenario explained in the post
<br>
below?
<br>
<p>&nbsp;
<br>
<p>Thanks
<br>
<p>Ananda
<br>
<p>Sent: Tuesday, November 23, 2010 2:24 PM
<br>
To: devel_at_[hidden]
<br>
Subject: Warning on fork() disappears if I use MPI threads!!
<br>
<p>&nbsp;
<br>
<p>Hi
<br>
<p>&nbsp;
<br>
<p>I am running into a very wierd problem.
<br>
<p>&nbsp;
<br>
<p>If I initialize MPI normally ie; with MPI_Init(), and make one of the
<br>
MPI process to do &quot;popen()&quot; call, I get the following warning/error
<br>
message:
<br>
<p>&nbsp;
<br>
<p>== Message start ===
<br>
<p>An MPI process has executed an operation involving a call to the
<br>
&quot;fork()&quot; system call to create a child process.  Open MPI is currently
<br>
operating in a condition that could result in memory corruption or
<br>
other system errors; your MPI job may hang, crash, or produce silent
<br>
data corruption.  The use of fork() (or system() or other calls that
<br>
create child processes) is strongly discouraged.
<br>
<p>== Message end ====
<br>
<p>&nbsp;
<br>
<p>However this error message goes away, if I initialize MPI with threads
<br>
ie; MPI_Init_thread(). Can anyone explain this discrepancy?
<br>
<p><p>I am giving a snippet of the program that causes this problem:
<br>
<p>&nbsp;
<br>
<p>== Code snippet start ======
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if ( rank == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;output = popen(&quot;ls -l&quot;, &quot;r&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while((c=getc(output))!=EOF)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;%c&quot;,c);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pclose(output);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
== Code snippet end ======
<br>
<p>&nbsp;
<br>
<p>If this is a design constraint, how can I overcome this problem.
<br>
<p>&nbsp;
<br>
<p>Thanks
<br>
<p>Ananda
<br>
<p>&nbsp;
<br>
<p>Ananda B Mudar, PMP 
<br>
Senior Technical Architect 
<br>
Wipro Technologies 
<br>
Ph: 972 765 8093 
<br>
<p><p>Please do not print this email unless it is absolutely necessary. 

The information contained in this electronic message and any attachments to this message are intended for the exclusive use of the addressee(s) and may contain proprietary, confidential or privileged information. If you are not the intended recipient, you should not disseminate, distribute or copy this e-mail. Please notify the sender immediately and destroy all copies of this message and any attachments. 

WARNING: Computer viruses can be transmitted via email. The recipient should check this email and any attachments for the presence of viruses. The company accepts no liability for any damage caused by any virus transmitted by this email. 

www.wipro.com
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8728/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8729.php">George Bosilca: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<li><strong>Previous message:</strong> <a href="8727.php">Jeff Squyres: "Re: [OMPI devel] RFC: Bring the lastest ROMIO version	from	MPICH2-1.3 into the trunk"</a>
<li><strong>In reply to:</strong> <a href="8698.php">ananda.mudar_at_[hidden]: "[OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8729.php">George Bosilca: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<li><strong>Reply:</strong> <a href="8729.php">George Bosilca: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
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
