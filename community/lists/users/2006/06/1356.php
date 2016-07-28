<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun  2 00:15:42 2006" -->
<!-- isoreceived="20060602041542" -->
<!-- sent="Thu, 1 Jun 2006 21:15:31 -0700 (PDT)" -->
<!-- isosent="20060602041531" -->
<!-- name="imran shaik" -->
<!-- email="sk.imran_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Few more questions" -->
<!-- id="20060602041531.91263.qmail_at_web37501.mail.mud.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="C835B9C9CB0F1C4E9DA48913C9E8F8AF94C256_at_xmb-rtp-215.amer.cisco.com" -->
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
<strong>Date:</strong> 2006-06-02 00:15:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1357.php">Jan De Laet: "Re: [OMPI users] openmpi-1.1a9r10157 Fails to build with Nag f95"</a>
<li><strong>Previous message:</strong> <a href="1355.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Open MPI and Dual Core (machinefile)"</a>
<li><strong>In reply to:</strong> <a href="1344.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Few more questions"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi jeff,
<br>
&nbsp;&nbsp;I am using open MPI 1.1 alpha 7 release.
<br>
&nbsp;&nbsp;My MPI process with threads was not terminating even when i send SIGINT thru key board. I shall check it agian anyhow and get back to you.
<br>
&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;I am terminating all MPI actions in threads ( my thread waits on MPI::Recv and i send data to the MPI::Recv from the signal handler, to terminate it.I call MPI ::Finalize in the main thread, where  i called MPI::init.
<br>
&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;snippet of code would be,
<br>
&nbsp;&nbsp;Thread
<br>
&nbsp;&nbsp;-------------
<br>
&nbsp;&nbsp;signal(SIGALRM);
<br>
&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;while(flag)
<br>
&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;alarm(3):
<br>
&nbsp;&nbsp;MPI::Recv();
<br>
&nbsp;&nbsp;alarm(0);
<br>
&nbsp;&nbsp;.....
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;signal_handler(int sig)
<br>
&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;MPI::Send(); //to the waiting thread
<br>
&nbsp;&nbsp;flag=flase;
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;------------------
<br>
Main
<br>
&nbsp;&nbsp;---------------------
<br>
&nbsp;&nbsp;Main thread
<br>
&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;MPI:Init();
<br>
&nbsp;&nbsp;Pthread_create();
<br>
&nbsp;&nbsp;MPI::Finalize();
<br>
&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;And there are 25 such processes , with same code as above. Each send and recv to other. But they dont signal each other.
<br>
&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;Is there any way i can terminate all processes on other nodes at a time? Or do i need to write script on my own.?
<br>
&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;Regards,
<br>
&nbsp;&nbsp;Imran
<br>
&nbsp;&nbsp;
<br>
&quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. Starting from scratch is probably easiest.  If you installed Open MPI to its own directory, just remove the installation directory.  If you installed Open MPI to a directory that contains other things, a &quot;make uninstall&quot; in your original Open MPI source tree should completely uninstall it properly.
<br>
&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;2. What specific version of Open MPI are you using?  We just fixed a shared memory threaded issue -- I'm afraid I didn't follow this thread closely enough to remember if you updated before or after that fix.
<br>
&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;3. Are you saying that your processes would not die if you killed them with SIGINT?  This would be extremely strange.
<br>
&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;4. Note that there are issues with signals and threads on Linux -- IIRC, you can't necessarily guarantee which thread will catch which signal.  It depends on what you are doing with your SIGALRM processing -- how are you shutting down MPI?  Are you terminating all MPI actions in threads before calling MPI_FINALIZE?
<br>
&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;5. Open MPI does not have an equivalent of lamclean or lamwipe at this time.  Sorry!
<br>
&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
---------------------------------
<br>
&nbsp;&nbsp;From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of imran shaik
<br>
Sent: Wednesday, May 31, 2006 1:41 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Few more questions
<br>
<p><p>&nbsp;&nbsp;
<br>
Thanks brian,
<br>
I shall download alpha 8 and upgrade. I have few more questions. 
<br>
<p>1)Are there simple ways to upgrade, or shall i start from scratch?
<br>
<p><p>2)Pls look at the following error message.
<br>
<p>P= 14 NA= 0 RF--&gt; 16
<br>
P=10 RN=53
<br>
P= 10 NA= 53 RF--&gt; 8
<br>
Signal:11 info.si_errno:0(Success) si_code:196609()
<br>
Failing at addr:0x2
<br>
[0] func:/usr/local/openmpi/lib/libopal.so.0 [0x40178df4]
<br>
[1] func:/lib/libpthread.so.0 [0x40040e07]
<br>
[2] func:/lib/libc.so.6 [0x402c94f0]
<br>
[3] func:/usr/local/openmpi/lib/openmpi/mca_btl_sm.so(mca_btl_sm_component_progress+0x7e2) [0x4047ded2]
<br>
[4] func:/usr/local/openmpi/lib/openmpi/mca_btl_sm.so(mca_btl_sm_component_event_thread+0x40) [0x4047d6e4]
<br>
[5] func:/lib/libpthread.so.0 [0x4003aae0]
<br>
[6] func:/lib/libc.so.6(__clone+0x57) [0x40383927]
<br>
*** End of error message ***
<br>
P=2 RN=72
<br>
P= 2 NA= 72 RF--&gt; 6
<br>
P=18 RN=34
<br>
P= 18 NA= 34 RF--&gt; 3
<br>
mpirun noticed that job rank 3 with PID 5621 on node &quot;Neelw4&quot; exited on signal 11.
<br>
-----------------------------
<br>
I run the 25 processes, each having a thread that makes MPI calls along with its main thread. I use THREAD_MULTIPLE option. I am registering a function to catch SIGALRM signal in the thread. Each thread catches the signal after some time and terminates normally. This is also as the same problem as the previous one, sometimes error message comes, and some times it wont. 
<br>
What could be the problem??
<br>
<p>3) None of the threads(even main thread) were catching SIGINT.
<br>
<p>4) Is there any way to make the threads catch signal without creating problems, as i faced above?
<br>
<p>5)Is there any tool available to wipe out all process across the nodes.? like lamclean or wipe . Anything will u suggest?
<br>
<p>Thanks and regards,
<br>
<p>Imran
<br>
<p><p><p><p><p>Brian Barrett &lt;brbarret_at_[hidden]&gt; wrote:   On May 26, 2006, at 11:31 PM, imran shaik wrote:
<br>
<p><span class="quotelev1">&gt; I have installed openMPI alpha 7 release. I created an MPI programs 
</span><br>
<span class="quotelev1">&gt; with pthreads. I ran with just 6 process, each thread making MPI 
</span><br>
<span class="quotelev1">&gt; calls concurrently with main thread. Things work fine . I use a TCP 
</span><br>
<span class="quotelev1">&gt; network.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Some times i get a strange error message.
</span><br>
<p><p><p><span class="quotelev1">&gt; Sometimes i get this error message, and sometimes not. I can say in 
</span><br>
<span class="quotelev1">&gt; a run of 7 i get once. But i get the output properly and the 
</span><br>
<span class="quotelev1">&gt; program works fine. I just wanted to know why that occured?
</span><br>
<p>We just released alpha 8, which should include a fix for a problem 
<br>
that sounds very similar to what you are seeing. Can you try 
<br>
upgrading and see if that solves your problem?
<br>
<p><span class="quotelev1">&gt; Another one, i tried to get verbose output from &quot;mpirun&quot;, but 
</span><br>
<span class="quotelev1">&gt; couldnt. Even &quot;mpiexec&quot;. I was using the same command as
</span><br>
<span class="quotelev1">&gt; mpirun -v -np 6 myprogram in lam, i used to get the verbose saying 
</span><br>
<span class="quotelev1">&gt; which process is running where. Here nothing happens.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What is the problem? Otherwise how can i know what process is 
</span><br>
<span class="quotelev1">&gt; running on what node? Any suggestions??
</span><br>
<p>We don't currently have a good way of dealing with this. You can get 
<br>
lots of debugging information from the -d option to mpirun, but it 
<br>
would be difficult to get exactly what you are looking for from the 
<br>
debugging output.
<br>
<p>Your best bet would probably be to use gethostname() and MPI_Comm_rank 
<br>
() inside your MPI application and print the results to stdout / stderr.
<br>
<p><p>Brian
<br>
<p><pre>
-- 
Brian Barrett
Open MPI developer
<a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
  __________________________________________________
Do You Yahoo!?
Tired of spam? Yahoo! Mail has the best spam protection around 
<a href="http://mail.yahoo.com">http://mail.yahoo.com</a> 
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
		
---------------------------------
Yahoo! Messenger with Voice. Make PC-to-Phone Calls to the US (and 30+ countries) for 2&#162;/min or less.
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1356/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1357.php">Jan De Laet: "Re: [OMPI users] openmpi-1.1a9r10157 Fails to build with Nag f95"</a>
<li><strong>Previous message:</strong> <a href="1355.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Open MPI and Dual Core (machinefile)"</a>
<li><strong>In reply to:</strong> <a href="1344.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Few more questions"</a>
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
