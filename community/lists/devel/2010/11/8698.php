<?
$subject_val = "[OMPI devel] Warning on fork() disappears if I use MPI threads!!";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 23 15:23:51 2010" -->
<!-- isoreceived="20101123202351" -->
<!-- sent="Tue, 23 Nov 2010 12:23:36 -0800" -->
<!-- isosent="20101123202336" -->
<!-- name="ananda.mudar_at_[hidden]" -->
<!-- email="ananda.mudar_at_[hidden]" -->
<!-- subject="[OMPI devel] Warning on fork() disappears if I use MPI threads!!" -->
<!-- id="1E3BF6B8D1243842A175F7C7069EB0E717D75A_at_usa-mv-msg.wipro.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] Warning on fork() disappears if I use MPI threads!!<br>
<strong>From:</strong> <a href="mailto:ananda.mudar_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20Warning%20on%20fork()%20disappears%20if%20I%20use%20MPI%20threads!!"><em>ananda.mudar_at_[hidden]</em></a><br>
<strong>Date:</strong> 2010-11-23 15:23:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8699.php">Eugene Loh: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>Previous message:</strong> <a href="8697.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8728.php">ananda.mudar_at_[hidden]: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<li><strong>Reply:</strong> <a href="8728.php">ananda.mudar_at_[hidden]: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<li><strong>Reply:</strong> <a href="8730.php">Jeff Squyres: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<li><strong>Maybe reply:</strong> <a href="8732.php">ananda.mudar_at_[hidden]: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<li><strong>Maybe reply:</strong> <a href="8733.php">ananda.mudar_at_[hidden]: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
&nbsp;
<br>
I am running into a very wierd problem.
<br>
&nbsp;
<br>
If I initialize MPI normally ie; with MPI_Init(), and make one of the MPI process to do &quot;popen()&quot; call, I get the following warning/error message:
<br>
&nbsp;
<br>
== Message start ===
<br>
An MPI process has executed an operation involving a call to the
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
== Message end ====
<br>
&nbsp;
<br>
However this error message goes away, if I initialize MPI with threads ie; MPI_Init_thread(). Can anyone explain this discrepancy?
<br>
<p>I am giving a snippet of the program that causes this problem:
<br>
&nbsp;
<br>
== Code snippet start ======
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if ( rank == 0) {
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
&nbsp;
<br>
If this is a design constraint, how can I overcome this problem.
<br>
&nbsp;
<br>
Thanks
<br>
Ananda
<br>
&nbsp;
<br>
Ananda B Mudar, PMP 
<br>
Senior Technical Architect 
<br>
Wipro Technologies 
<br>
Ph: 972 765 8093 
<br>
<p>Please do not print this email unless it is absolutely necessary. 

The information contained in this electronic message and any attachments to this message are intended for the exclusive use of the addressee(s) and may contain proprietary, confidential or privileged information. If you are not the intended recipient, you should not disseminate, distribute or copy this e-mail. Please notify the sender immediately and destroy all copies of this message and any attachments. 

WARNING: Computer viruses can be transmitted via email. The recipient should check this email and any attachments for the presence of viruses. The company accepts no liability for any damage caused by any virus transmitted by this email. 

www.wipro.com
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8698/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8699.php">Eugene Loh: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>Previous message:</strong> <a href="8697.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8728.php">ananda.mudar_at_[hidden]: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<li><strong>Reply:</strong> <a href="8728.php">ananda.mudar_at_[hidden]: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<li><strong>Reply:</strong> <a href="8730.php">Jeff Squyres: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<li><strong>Maybe reply:</strong> <a href="8732.php">ananda.mudar_at_[hidden]: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<li><strong>Maybe reply:</strong> <a href="8733.php">ananda.mudar_at_[hidden]: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
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
