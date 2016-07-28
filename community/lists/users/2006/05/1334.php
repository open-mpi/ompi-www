<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May 31 01:41:01 2006" -->
<!-- isoreceived="20060531054101" -->
<!-- sent="Tue, 30 May 2006 22:40:39 -0700 (PDT)" -->
<!-- isosent="20060531054039" -->
<!-- name="imran shaik" -->
<!-- email="sk.imran_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Few more questions" -->
<!-- id="20060531054039.26786.qmail_at_web37515.mail.mud.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="69124411-4D22-4800-A880-4AF6672F1B96_at_open-mpi.org" -->
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
<strong>Date:</strong> 2006-05-31 01:40:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1335.php">Justin Bronder: "Re: [OMPI users] [PMX:VIRUS] Re: OpenMPI 1.0.3a1r10002 Fails to build with IBM XL Compilers."</a>
<li><strong>Previous message:</strong> <a href="1333.php">Brian Barrett: "Re: [OMPI users] openmpi-1.1a7  on solaris10 opteron"</a>
<li><strong>In reply to:</strong> <a href="1332.php">Brian Barrett: "Re: [OMPI users] Thread Safety"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/06/1344.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Few more questions"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/06/1344.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Few more questions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks brian,
<br>
&nbsp;&nbsp;I shall download alpha 8 and upgrade. I have few more questions. 
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;1)Are there simple ways to upgrade, or shall i start from scratch?
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;2)Pls look at the following error message.
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;P= 14 NA= 0 RF--&gt; 16
<br>
&nbsp;&nbsp;P=10 RN=53
<br>
&nbsp;&nbsp;P= 10 NA= 53 RF--&gt; 8
<br>
&nbsp;&nbsp;Signal:11 info.si_errno:0(Success) si_code:196609()
<br>
&nbsp;&nbsp;Failing at addr:0x2
<br>
&nbsp;&nbsp;[0] func:/usr/local/openmpi/lib/libopal.so.0 [0x40178df4]
<br>
&nbsp;&nbsp;[1] func:/lib/libpthread.so.0 [0x40040e07]
<br>
&nbsp;&nbsp;[2] func:/lib/libc.so.6 [0x402c94f0]
<br>
&nbsp;&nbsp;[3] func:/usr/local/openmpi/lib/openmpi/mca_btl_sm.so(mca_btl_sm_component_progress+0x7e2) [0x4047ded2]
<br>
&nbsp;&nbsp;[4] func:/usr/local/openmpi/lib/openmpi/mca_btl_sm.so(mca_btl_sm_component_event_thread+0x40) [0x4047d6e4]
<br>
&nbsp;&nbsp;[5] func:/lib/libpthread.so.0 [0x4003aae0]
<br>
&nbsp;&nbsp;[6] func:/lib/libc.so.6(__clone+0x57) [0x40383927]
<br>
&nbsp;&nbsp;*** End of error message ***
<br>
&nbsp;&nbsp;P=2 RN=72
<br>
&nbsp;&nbsp;P= 2 NA= 72 RF--&gt; 6
<br>
&nbsp;&nbsp;P=18 RN=34
<br>
&nbsp;&nbsp;P= 18 NA= 34 RF--&gt; 3
<br>
&nbsp;&nbsp;mpirun noticed that job rank 3 with PID 5621 on node &quot;Neelw4&quot; exited on signal 11.
<br>
&nbsp;&nbsp;-----------------------------
<br>
&nbsp;&nbsp;I run the 25 processes, each having a thread that makes MPI calls along  with its main thread. I use THREAD_MULTIPLE option. I am registering a  function to catch SIGALRM signal in the thread. Each thread catches the  signal after some time and terminates normally. This is also as the  same problem as the previous one, sometimes error message comes, and  some times it wont. 
<br>
&nbsp;&nbsp;What could be the problem??
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;3) None of the threads(even main thread) were catching SIGINT.
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;4) Is there any way to make the threads catch signal without creating problems, as i faced above?
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;5)Is there any tool available to wipe out all process across the nodes.? like lamclean or wipe . Anything will u suggest?
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;Thanks and regards,
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;Imran
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;
<br>
<p>Brian Barrett &lt;brbarret_at_[hidden]&gt; wrote:  On May 26, 2006, at 11:31 PM, imran shaik wrote:
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
<span class="quotelev1">&gt; program  works fine. I just wanted to know why that occured?
</span><br>
<p>We just released alpha 8, which should include a fix for a problem  
<br>
that sounds very similar to what you are seeing.  Can you try  
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
<p>We don't currently have a good way of dealing with this.  You can get  
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
Tired of spam?  Yahoo! Mail has the best spam protection around 
<a href="http://mail.yahoo.com">http://mail.yahoo.com</a> 
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1334/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1335.php">Justin Bronder: "Re: [OMPI users] [PMX:VIRUS] Re: OpenMPI 1.0.3a1r10002 Fails to build with IBM XL Compilers."</a>
<li><strong>Previous message:</strong> <a href="1333.php">Brian Barrett: "Re: [OMPI users] openmpi-1.1a7  on solaris10 opteron"</a>
<li><strong>In reply to:</strong> <a href="1332.php">Brian Barrett: "Re: [OMPI users] Thread Safety"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/06/1344.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Few more questions"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/06/1344.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Few more questions"</a>
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
