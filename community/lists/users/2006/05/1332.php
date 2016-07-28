<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue May 30 23:15:13 2006" -->
<!-- isoreceived="20060531031513" -->
<!-- sent="Tue, 30 May 2006 21:14:46 -0600" -->
<!-- isosent="20060531031446" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Thread Safety" -->
<!-- id="69124411-4D22-4800-A880-4AF6672F1B96_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20060527053121.34440.qmail_at_web37515.mail.mud.yahoo.com" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-30 23:14:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1333.php">Brian Barrett: "Re: [OMPI users] openmpi-1.1a7  on solaris10 opteron"</a>
<li><strong>Previous message:</strong> <a href="1331.php">Brian Barrett: "Re: [OMPI users] [PMX:VIRUS] Re: OpenMPI 1.0.3a1r10002 Fails to build with IBM XL Compilers."</a>
<li><strong>In reply to:</strong> <a href="1317.php">imran shaik: "Re: [OMPI users] Thread Safety"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1334.php">imran shaik: "Re: [OMPI users] Few more questions"</a>
<li><strong>Reply:</strong> <a href="1334.php">imran shaik: "Re: [OMPI users] Few more questions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 26, 2006, at 11:31 PM, imran shaik wrote:
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
<p>&lt;snip&gt;
<br>
<p><span class="quotelev1">&gt; Sometimes i get this error message, and sometimes not. I can say in  
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
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1333.php">Brian Barrett: "Re: [OMPI users] openmpi-1.1a7  on solaris10 opteron"</a>
<li><strong>Previous message:</strong> <a href="1331.php">Brian Barrett: "Re: [OMPI users] [PMX:VIRUS] Re: OpenMPI 1.0.3a1r10002 Fails to build with IBM XL Compilers."</a>
<li><strong>In reply to:</strong> <a href="1317.php">imran shaik: "Re: [OMPI users] Thread Safety"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1334.php">imran shaik: "Re: [OMPI users] Few more questions"</a>
<li><strong>Reply:</strong> <a href="1334.php">imran shaik: "Re: [OMPI users] Few more questions"</a>
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
