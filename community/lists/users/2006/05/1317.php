<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat May 27 01:31:30 2006" -->
<!-- isoreceived="20060527053130" -->
<!-- sent="Fri, 26 May 2006 22:31:21 -0700 (PDT)" -->
<!-- isosent="20060527053121" -->
<!-- name="imran shaik" -->
<!-- email="sk.imran_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Thread Safety" -->
<!-- id="20060527053121.34440.qmail_at_web37515.mail.mud.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="C835B9C9CB0F1C4E9DA48913C9E8F8AF8FD5F7_at_xmb-rtp-215.amer.cisco.com" -->
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
<strong>Date:</strong> 2006-05-27 01:31:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1318.php">imran shaik: "[OMPI users] mpirun hangs??"</a>
<li><strong>Previous message:</strong> <a href="1316.php">George Bosilca: "Re: [OMPI users] Thread Safety"</a>
<li><strong>In reply to:</strong> <a href="1309.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Thread Safety"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1332.php">Brian Barrett: "Re: [OMPI users] Thread Safety"</a>
<li><strong>Reply:</strong> <a href="1332.php">Brian Barrett: "Re: [OMPI users] Thread Safety"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi jeff,
<br>
&nbsp;&nbsp;thanks for your comprehensive reply.
<br>
&nbsp;&nbsp;I have installed openMPI alpha 7 release. I created an MPI programs  with pthreads. I ran with just 6 process, each thread making MPI calls  concurrently with main thread. Things work fine . I use a TCP network.
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;Some times i get a strange error message.
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;I am sending some output of my program.
<br>
&nbsp;&nbsp;-----------------------------------------------------------------
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;mca_btl_sm_send: write fifo failed: errno=9
<br>
&nbsp;&nbsp;P=1 Response sent for 8 to node 2
<br>
&nbsp;&nbsp;P= 1 listen:Itrcnt=3
<br>
&nbsp;&nbsp;RF-&gt; P=5  resrc= 8 origin= 2 Prev node= 3 -&gt; 1
<br>
&nbsp;&nbsp;P= 5 listen:Itrcnt=3
<br>
&nbsp;&nbsp;P= 3Recvd: Source= 5 tag= 5
<br>
&nbsp;&nbsp;RF-&gt; P=3  resrc= 10 origin= 1 Prev node= 5 -&gt; 2
<br>
&nbsp;&nbsp;P= 3 listen:Itrcnt=4
<br>
&nbsp;&nbsp;P= 2Recvd: Source= 3 tag= 4
<br>
&nbsp;&nbsp;P= 1Recvd: Source= 2 tag= 31
<br>
&nbsp;&nbsp;Yahoo! FP=1 Node=2 has 1 matches for 10 Hopcount=5
<br>
&nbsp;&nbsp;P=1 Req for 10 was fwded to 0
<br>
&nbsp;&nbsp;P=1 Index of 0 is 0
<br>
&nbsp;&nbsp;P=1 Updating neighbor index of 0
<br>
&nbsp;&nbsp;P=1 expbase[0]=1
<br>
&nbsp;&nbsp;P= 1 listen:Itrcnt=4
<br>
&nbsp;&nbsp;P=2 Response sent for 10 to node 1
<br>
&nbsp;&nbsp;P= 2 listen:Itrcnt=2
<br>
&nbsp;&nbsp;P= 2Recvd: Source= 1 tag= 31
<br>
&nbsp;&nbsp;Yahoo! FP=2 Node=1 has 1 matches for 8 Hopcount=3
<br>
&nbsp;&nbsp;P=2 Req for 8 was fwded to 3
<br>
&nbsp;&nbsp;P=2 Index of 3 is 1
<br>
&nbsp;&nbsp;P=2 Updating neighbor index of 3
<br>
&nbsp;&nbsp;P=2 expbase[1]=1
<br>
&nbsp;&nbsp;P= 2 listen:Itrcnt=3
<br>
&nbsp;&nbsp;P=5 RN=8
<br>
&nbsp;&nbsp;P=5 NA=8 RF--&gt;3
<br>
&nbsp;&nbsp;P= 3Recvd: Source= 5 tag= 8
<br>
&nbsp;&nbsp;RF-&gt; P=3  resrc= 8 origin= 5 Prev node= 5 -&gt; 4
<br>
&nbsp;&nbsp;P= 3 listen:Itrcnt=5
<br>
&nbsp;&nbsp;P= 4Recvd: Source= 3 tag= 7
<br>
&nbsp;&nbsp;P= 3Recvd: Source= 4 tag= 6
<br>
&nbsp;&nbsp;RF-&gt; P=4  resrc= 8 origin= 5 Prev node= 3 -&gt; 3
<br>
&nbsp;&nbsp;P= 4 listen:Itrcnt=3
<br>
&nbsp;&nbsp;RF-&gt; P=3  resrc= 8 origin= 5 Prev node= 4 -&gt; 2
<br>
&nbsp;&nbsp;P= 3 listen:Itrcnt=6
<br>
&nbsp;&nbsp;P= 2Recvd: Source= 3 tag= 5
<br>
&nbsp;&nbsp;RF-&gt; P=2  resrc= 8 origin= 5 Prev node= 3 -&gt; 1
<br>
&nbsp;&nbsp;P= 2 listen:Itrcnt=4
<br>
&nbsp;&nbsp;P= 1Recvd: Source= 2 tag= 4
<br>
&nbsp;&nbsp;[Neelw5:12103] mca_btl_sm_send: write fifo failed: errno=9
<br>
&nbsp;&nbsp;--------------------------------------------------------------------------------------
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;Sometimes i get this error message,  and sometimes not. I can say in a run of 7 i get once. But i get the  output properly and the program  works fine. I just wanted to know  why that occured?
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;Another one, i tried to get verbose output from &quot;mpirun&quot;, but couldnt. Even &quot;mpiexec&quot;. I was using the same command as
<br>
&nbsp;&nbsp;mpirun -v -np 6 myprogram in lam, i used to get the verbose saying which process is running where. Here nothing happens.
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;What is the problem? Otherwise how can i know what process is running on what node? Any suggestions??
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;Thanks in advance,,
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;Regards,
<br>
&nbsp;&nbsp;Imran
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;
<br>
<p>&quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; wrote:          MPI_THREAD_MULITPLE is &quot;somewhat&quot; supported, meaning that support for it   was designed in to Open MPI, but it has not been fully stress tested.  As   such, there is likely to still be bugs when using multiple user threads with   MPI_THREAD_MULTIPLE.
<br>
&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;fork()   is not technically supported by the MPI standard.  If you *need* to fork(),   you might want to look at alternate mechanisms if you need to move between   multiple MPI implementations because support for it is not likely to be   portable.
<br>
&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;Within   Open MPI, fork() will almost certainly fail if you use the OS-bypass   networks (Myrinet, InfiniBand).  The mechanisms that these networks use for   high-speed/low latency are quite problematic with fork().  If you are using   tcp or shared memory, fork() *might* work, but this is not something that we   have extensively tested.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
---------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;From: users-bounces_at_[hidden]     [mailto:users-bounces_at_[hidden]] On Behalf Of imran     shaik
<br>
Sent: Friday, May 26, 2006 1:50 AM
<br>
To: openMPI     mailing list
<br>
Subject: [OMPI users] Thread   Safety
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;
<br>
Hi,
<br>
I am a newbie to OpenMPI.
<br>
Can anyone say how the support     for MPI_THREAD_MULTIPLE is implemented in openMPI?
<br>
<p>Is thread safety     completely provided in openMPI? or does it still has some bugs?
<br>
I am     currently using LAM/MPI.But i need concurrent threads making MPI calls. So i     am planning to move to another implementation of MPI. Can i choose     openMPI?
<br>
<p><p>Also, is &quot;fork&quot;(for child preoces creation) still a no-no     in  openMPI too?  Can a child process(forked) make concurrent MPI     calls along with its parent ? 
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;__________________________________________________
<br>
Do You     Yahoo!?
<br>
Tired of spam? Yahoo! Mail has the best spam protection around     
<br>
<a href="http://mail.yahoo.com">http://mail.yahoo.com</a> 
<br>
_______________________________________________
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
Yahoo! Messenger with Voice. PC-to-Phone calls for ridiculously low rates.
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1317/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1318.php">imran shaik: "[OMPI users] mpirun hangs??"</a>
<li><strong>Previous message:</strong> <a href="1316.php">George Bosilca: "Re: [OMPI users] Thread Safety"</a>
<li><strong>In reply to:</strong> <a href="1309.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Thread Safety"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1332.php">Brian Barrett: "Re: [OMPI users] Thread Safety"</a>
<li><strong>Reply:</strong> <a href="1332.php">Brian Barrett: "Re: [OMPI users] Thread Safety"</a>
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
