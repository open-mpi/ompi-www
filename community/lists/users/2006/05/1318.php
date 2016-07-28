<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat May 27 01:42:40 2006" -->
<!-- isoreceived="20060527054240" -->
<!-- sent="Fri, 26 May 2006 22:42:34 -0700 (PDT)" -->
<!-- isosent="20060527054234" -->
<!-- name="imran shaik" -->
<!-- email="sk.imran_at_[hidden]" -->
<!-- subject="[OMPI users] mpirun hangs??" -->
<!-- id="20060527054234.72611.qmail_at_web37503.mail.mud.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="C835B9C9CB0F1C4E9DA48913C9E8F8AF8FD5F9_at_xmb-rtp-215.amer.cisco.com" -->
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
<strong>From:</strong> imran shaik (<em>sk.imran_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-27 01:42:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1319.php">Justin Bronder: "[OMPI users] OpenMPI 1.0.3a1r10002 Fails to build with IBM XL Compilers."</a>
<li><strong>Previous message:</strong> <a href="1317.php">imran shaik: "Re: [OMPI users] Thread Safety"</a>
<li><strong>In reply to:</strong> <a href="1311.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Default configure options"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi jeff,
<br>
&nbsp;&nbsp;Thanks, i have installed openMPI with the threads enabled option as per the readme file of openmpi. (alpha 7 of openmpi1.1)
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;Hi have a problem with mpirun.
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;1)When there is no relevant executable present on the remote node where  i want to launch the mpi process, mpirun just hangs without any error  message. Shall i interpret it as no executable present?once i copy the  executable to that node, it proceeds fine. Why no error message is  given by mpirun, as in lam, no file found etc..
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;2)when i launch many processes , oversubscribe a node heavily, it  hangs. Neither error message, nor i cant do kind.  For example a  simple broadcast where each process executes a bcast call, with   110 processes per node.(My p4,256MPB ram,tcp network) ,it just hangs. 
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;3)sometimes, for the same program with 45 process, it says 4 were killed automatically.
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;I am afraid, at times. Anything wrong with my program or mpirun has some problem.?
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;Regards,
<br>
&nbsp;&nbsp;Imran
<br>
<p>&quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; wrote:          Based   on your questions from the LAM list, I think you are actually asking how to get   support for MPI_THREAD_MULTIPLE (which will include pthread support on Linux   systems).
<br>
&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;Use   the --enable-mpi-threads option to configure to enable support for   MPI_THREAD_MULTIPLE (please see the README file for more details).  Per the   warning from my previous mail (<a href="http://www.open-mpi.org/community/lists/users/2006/05/1309.php">http://www.open-mpi.org/community/lists/users/2006/05/1309.php</a>),   this support is only partially implemented and tested.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
---------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;From: users-bounces_at_[hidden]     [mailto:users-bounces_at_[hidden]] On Behalf Of imran     shaik
<br>
Sent: Friday, May 26, 2006 2:49 AM
<br>
To: openMPI     mailing list
<br>
Subject: [OMPI users] Default configure     options
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;
<br>
Hi,
<br>
I want to use phtreads with openmpi.
<br>
Does it configure     with pthreads enabled by default or what options do i need to     mention?
<br>
<p>Thanks,
<br>
Imran
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>---------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Do you Yahoo!?
<br>
Everyone is raving about the all-new     Yahoo! Mail Beta._______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
---------------------------------
<br>
Ring'em or ping'em. Make  PC-to-phone calls as low as 1&#162;/min with Yahoo! Messenger with Voice.
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1318/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1319.php">Justin Bronder: "[OMPI users] OpenMPI 1.0.3a1r10002 Fails to build with IBM XL Compilers."</a>
<li><strong>Previous message:</strong> <a href="1317.php">imran shaik: "Re: [OMPI users] Thread Safety"</a>
<li><strong>In reply to:</strong> <a href="1311.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Default configure options"</a>
<!-- nextthread="start" -->
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
