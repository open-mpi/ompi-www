<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri May 26 06:56:05 2006" -->
<!-- isoreceived="20060526105605" -->
<!-- sent="Fri, 26 May 2006 06:55:57 -0400" -->
<!-- isosent="20060526105557" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Thread Safety" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF8FD5F7_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] Thread Safety" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-26 06:55:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1310.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] getting started with openMPI"</a>
<li><strong>Previous message:</strong> <a href="1308.php">imran shaik: "[OMPI users] Default configure options"</a>
<li><strong>Maybe in reply to:</strong> <a href="1306.php">imran shaik: "[OMPI users] Thread Safety"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1316.php">George Bosilca: "Re: [OMPI users] Thread Safety"</a>
<li><strong>Reply:</strong> <a href="1316.php">George Bosilca: "Re: [OMPI users] Thread Safety"</a>
<li><strong>Reply:</strong> <a href="1317.php">imran shaik: "Re: [OMPI users] Thread Safety"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
MPI_THREAD_MULITPLE is &quot;somewhat&quot; supported, meaning that support for it
<br>
was designed in to Open MPI, but it has not been fully stress tested.
<br>
As such, there is likely to still be bugs when using multiple user
<br>
threads with MPI_THREAD_MULTIPLE.
<br>
&nbsp;
<br>
fork() is not technically supported by the MPI standard.  If you *need*
<br>
to fork(), you might want to look at alternate mechanisms if you need to
<br>
move between multiple MPI implementations because support for it is not
<br>
likely to be portable.
<br>
&nbsp;
<br>
Within Open MPI, fork() will almost certainly fail if you use the
<br>
OS-bypass networks (Myrinet, InfiniBand).  The mechanisms that these
<br>
networks use for high-speed/low latency are quite problematic with
<br>
fork().  If you are using tcp or shared memory, fork() *might* work, but
<br>
this is not something that we have extensively tested.
<br>
<p><p>________________________________
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;From: users-bounces_at_[hidden]
<br>
[mailto:users-bounces_at_[hidden]] On Behalf Of imran shaik
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sent: Friday, May 26, 2006 1:50 AM
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To: openMPI mailing list
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subject: [OMPI users] Thread Safety
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hi,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I am a newbie to OpenMPI.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Can anyone say how the support for MPI_THREAD_MULTIPLE is
<br>
implemented in openMPI?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Is thread safety completely provided in openMPI? or does it
<br>
still has some bugs?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I am currently using LAM/MPI.But i need concurrent threads
<br>
making MPI calls. So i am planning to move to another implementation of
<br>
MPI. Can i choose openMPI?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Also, is &quot;fork&quot;(for child preoces creation) still a no-no in
<br>
openMPI too?  Can a child process(forked) make concurrent MPI calls
<br>
along with its parent ? 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;__________________________________________________
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Do You Yahoo!?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tired of spam? Yahoo! Mail has the best spam protection around 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://mail.yahoo.com">http://mail.yahoo.com</a> 
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1309/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1310.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] getting started with openMPI"</a>
<li><strong>Previous message:</strong> <a href="1308.php">imran shaik: "[OMPI users] Default configure options"</a>
<li><strong>Maybe in reply to:</strong> <a href="1306.php">imran shaik: "[OMPI users] Thread Safety"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1316.php">George Bosilca: "Re: [OMPI users] Thread Safety"</a>
<li><strong>Reply:</strong> <a href="1316.php">George Bosilca: "Re: [OMPI users] Thread Safety"</a>
<li><strong>Reply:</strong> <a href="1317.php">imran shaik: "Re: [OMPI users] Thread Safety"</a>
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
