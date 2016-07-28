<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun  1 13:51:39 2006" -->
<!-- isoreceived="20060601175139" -->
<!-- sent="Thu, 1 Jun 2006 13:51:25 -0400" -->
<!-- isosent="20060601175125" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Few more questions" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF94C256_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] Few more questions" -->
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
<strong>Date:</strong> 2006-06-01 13:51:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1345.php">Troy Telford: "Re: [OMPI users] Open MPI 1.0.2 and np &gt;=64"</a>
<li><strong>Previous message:</strong> <a href="1343.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] MPI_REDUCE vs. MPI_IN_PLACE vs. F90 Interfaces"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/05/1334.php">imran shaik: "Re: [OMPI users] Few more questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1356.php">imran shaik: "Re: [OMPI users] Few more questions"</a>
<li><strong>Reply:</strong> <a href="1356.php">imran shaik: "Re: [OMPI users] Few more questions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
1. Starting from scratch is probably easiest.  If you installed Open MPI
<br>
to its own directory, just remove the installation directory.  If you
<br>
installed Open MPI to a directory that contains other things, a &quot;make
<br>
uninstall&quot; in your original Open MPI source tree should completely
<br>
uninstall it properly.
<br>
&nbsp;
<br>
2. What specific version of Open MPI are you using?  We just fixed a
<br>
shared memory threaded issue -- I'm afraid I didn't follow this thread
<br>
closely enough to remember if you updated before or after that fix.
<br>
&nbsp;
<br>
3. Are you saying that your processes would not die if you killed them
<br>
with SIGINT?  This would be extremely strange.
<br>
&nbsp;
<br>
4. Note that there are issues with signals and threads on Linux -- IIRC,
<br>
you can't necessarily guarantee which thread will catch which signal.
<br>
It depends on what you are doing with your SIGALRM processing -- how are
<br>
you shutting down MPI?  Are you terminating all MPI actions in threads
<br>
before calling MPI_FINALIZE?
<br>
&nbsp;
<br>
5. Open MPI does not have an equivalent of lamclean or lamwipe at this
<br>
time.  Sorry!
<br>
&nbsp;
<br>
<p><p><p>________________________________
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;From: users-bounces_at_[hidden]
<br>
[mailto:users-bounces_at_[hidden]] On Behalf Of imran shaik
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sent: Wednesday, May 31, 2006 1:41 AM
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To: Open MPI Users
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subject: Re: [OMPI users] Few more questions
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thanks brian,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I shall download alpha 8 and upgrade. I have few more questions.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1)Are there simple ways to upgrade, or shall i start from
<br>
scratch?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2)Pls look at the following error message.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;P= 14 NA= 0 RF--&gt; 16
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;P=10 RN=53
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;P= 10 NA= 53 RF--&gt; 8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Signal:11 info.si_errno:0(Success) si_code:196609()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Failing at addr:0x2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[0] func:/usr/local/openmpi/lib/libopal.so.0 [0x40178df4]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[1] func:/lib/libpthread.so.0 [0x40040e07]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[2] func:/lib/libc.so.6 [0x402c94f0]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[3]
<br>
func:/usr/local/openmpi/lib/openmpi/mca_btl_sm.so(mca_btl_sm_component_p
<br>
rogress+0x7e2) [0x4047ded2]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[4]
<br>
func:/usr/local/openmpi/lib/openmpi/mca_btl_sm.so(mca_btl_sm_component_e
<br>
vent_thread+0x40) [0x4047d6e4]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[5] func:/lib/libpthread.so.0 [0x4003aae0]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[6] func:/lib/libc.so.6(__clone+0x57) [0x40383927]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*** End of error message ***
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;P=2 RN=72
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;P= 2 NA= 72 RF--&gt; 6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;P=18 RN=34
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;P= 18 NA= 34 RF--&gt; 3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun noticed that job rank 3 with PID 5621 on node &quot;Neelw4&quot;
<br>
exited on signal 11.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-----------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I run the 25 processes, each having a thread that makes MPI
<br>
calls along with its main thread. I use THREAD_MULTIPLE option. I am
<br>
registering a function to catch SIGALRM signal in the thread. Each
<br>
thread catches the signal after some time and terminates normally. This
<br>
is also as the same problem as the previous one, sometimes error message
<br>
comes, and some times it wont. 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;What could be the problem??
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3) None of the threads(even main thread) were catching SIGINT.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4) Is there any way to make the threads catch signal without
<br>
creating problems, as i faced above?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5)Is there any tool available to wipe out all process across the
<br>
nodes.? like lamclean or wipe . Anything will u suggest?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thanks and regards,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Imran
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Brian Barrett &lt;brbarret_at_[hidden]&gt; wrote: 
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;On May 26, 2006, at 11:31 PM, imran shaik wrote:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<span class="quotelev1">		&gt; I have installed openMPI alpha 7 release. I created an
</span><br>
MPI programs 
<br>
<span class="quotelev1">		&gt; with pthreads. I ran with just 6 process, each thread
</span><br>
making MPI 
<br>
<span class="quotelev1">		&gt; calls concurrently with main thread. Things work fine
</span><br>
. I use a TCP 
<br>
<span class="quotelev1">		&gt; network.
</span><br>
<span class="quotelev1">		&gt;
</span><br>
<span class="quotelev1">		&gt; Some times i get a strange error message.
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<span class="quotelev1">		&gt; Sometimes i get this error message, and sometimes not.
</span><br>
I can say in 
<br>
<span class="quotelev1">		&gt; a run of 7 i get once. But i get the output properly
</span><br>
and the 
<br>
<span class="quotelev1">		&gt; program works fine. I just wanted to know why that
</span><br>
occured?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;We just released alpha 8, which should include a fix for
<br>
a problem 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;that sounds very similar to what you are seeing. Can you
<br>
try 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;upgrading and see if that solves your problem?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<span class="quotelev1">		&gt; Another one, i tried to get verbose output from
</span><br>
&quot;mpirun&quot;, but 
<br>
<span class="quotelev1">		&gt; couldnt. Even &quot;mpiexec&quot;. I was using the same command
</span><br>
as
<br>
<span class="quotelev1">		&gt; mpirun -v -np 6 myprogram in lam, i used to get the
</span><br>
verbose saying 
<br>
<span class="quotelev1">		&gt; which process is running where. Here nothing happens.
</span><br>
<span class="quotelev1">		&gt;
</span><br>
<span class="quotelev1">		&gt; What is the problem? Otherwise how can i know what
</span><br>
process is 
<br>
<span class="quotelev1">		&gt; running on what node? Any suggestions??
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;We don't currently have a good way of dealing with this.
<br>
You can get 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lots of debugging information from the -d option to
<br>
mpirun, but it 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;would be difficult to get exactly what you are looking
<br>
for from the 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;debugging output.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Your best bet would probably be to use gethostname() and
<br>
MPI_Comm_rank 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;() inside your MPI application and print the results to
<br>
stdout / stderr.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Brian
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Brian Barrett
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI developer
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_______________________________________________
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;users mailing list
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;users_at_[hidden]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;__________________________________________________
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Do You Yahoo!?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tired of spam? Yahoo! Mail has the best spam protection around 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://mail.yahoo.com">http://mail.yahoo.com</a> 
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1344/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1345.php">Troy Telford: "Re: [OMPI users] Open MPI 1.0.2 and np &gt;=64"</a>
<li><strong>Previous message:</strong> <a href="1343.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] MPI_REDUCE vs. MPI_IN_PLACE vs. F90 Interfaces"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/05/1334.php">imran shaik: "Re: [OMPI users] Few more questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1356.php">imran shaik: "Re: [OMPI users] Few more questions"</a>
<li><strong>Reply:</strong> <a href="1356.php">imran shaik: "Re: [OMPI users] Few more questions"</a>
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
