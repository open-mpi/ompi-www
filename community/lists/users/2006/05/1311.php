<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri May 26 07:01:55 2006" -->
<!-- isoreceived="20060526110155" -->
<!-- sent="Fri, 26 May 2006 07:01:47 -0400" -->
<!-- isosent="20060526110147" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Default configure options" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF8FD5F9_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] Default configure options" -->
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
<strong>Date:</strong> 2006-05-26 07:01:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1312.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Help regarding send/recv code"</a>
<li><strong>Previous message:</strong> <a href="1310.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] getting started with openMPI"</a>
<li><strong>Maybe in reply to:</strong> <a href="1308.php">imran shaik: "[OMPI users] Default configure options"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1318.php">imran shaik: "[OMPI users] mpirun hangs??"</a>
<li><strong>Reply:</strong> <a href="1318.php">imran shaik: "[OMPI users] mpirun hangs??"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Based on your questions from the LAM list, I think you are actually
<br>
asking how to get support for MPI_THREAD_MULTIPLE (which will include
<br>
pthread support on Linux systems).
<br>
&nbsp;
<br>
Use the --enable-mpi-threads option to configure to enable support for
<br>
MPI_THREAD_MULTIPLE (please see the README file for more details).  Per
<br>
the warning from my previous mail
<br>
(<a href="http://www.open-mpi.org/community/lists/users/2006/05/1309.php">http://www.open-mpi.org/community/lists/users/2006/05/1309.php</a>), this
<br>
support is only partially implemented and tested.
<br>
<p><p>________________________________
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;From: users-bounces_at_[hidden]
<br>
[mailto:users-bounces_at_[hidden]] On Behalf Of imran shaik
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sent: Friday, May 26, 2006 2:49 AM
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To: openMPI mailing list
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subject: [OMPI users] Default configure options
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hi,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I want to use phtreads with openmpi.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Does it configure with pthreads enabled by default or what
<br>
options do i need to mention?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Imran
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
________________________________
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Do you Yahoo!?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Everyone is raving about the all-new Yahoo! Mail Beta.
<br>
&lt;<a href="http://us.rd.yahoo.com/evt=40791/*http://advision.webevents.yahoo.com/h">http://us.rd.yahoo.com/evt=40791/*http://advision.webevents.yahoo.com/h</a>
<br>
andraisers&gt; 
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1311/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1312.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Help regarding send/recv code"</a>
<li><strong>Previous message:</strong> <a href="1310.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] getting started with openMPI"</a>
<li><strong>Maybe in reply to:</strong> <a href="1308.php">imran shaik: "[OMPI users] Default configure options"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1318.php">imran shaik: "[OMPI users] mpirun hangs??"</a>
<li><strong>Reply:</strong> <a href="1318.php">imran shaik: "[OMPI users] mpirun hangs??"</a>
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
