<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Jan 14 14:10:51 2006" -->
<!-- isoreceived="20060114191051" -->
<!-- sent="Sat, 14 Jan 2006 14:10:48 -0500" -->
<!-- isosent="20060114191048" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Trouble combining OpenMPI and OpenMP" -->
<!-- id="997C4325-36C8-4366-A1B6-866DE9F6359F_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="nqirsnbhnb.fsf_at_iris02.slac.stanford.edu" -->
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
<strong>Date:</strong> 2006-01-14 14:10:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0504.php">Glenn Morris: "Re: [O-MPI users] Trouble combining OpenMPI and OpenMP"</a>
<li><strong>Previous message:</strong> <a href="0502.php">Glenn Morris: "[O-MPI users] Trouble combining OpenMPI and OpenMP"</a>
<li><strong>In reply to:</strong> <a href="0502.php">Glenn Morris: "[O-MPI users] Trouble combining OpenMPI and OpenMP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0504.php">Glenn Morris: "Re: [O-MPI users] Trouble combining OpenMPI and OpenMP"</a>
<li><strong>Reply:</strong> <a href="0504.php">Glenn Morris: "Re: [O-MPI users] Trouble combining OpenMPI and OpenMP"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 13, 2006, at 10:41 PM, Glenn Morris wrote:
<br>
<p><span class="quotelev1">&gt; The combination OpenMP + OpenMPI works fine if I restrict the
</span><br>
<span class="quotelev1">&gt; application to only 1 OpenMP thread per MPI process (in other words
</span><br>
<span class="quotelev1">&gt; the code at least compiles and runs fine with both options on, in this
</span><br>
<span class="quotelev1">&gt; limited sense). If I try to use my desired value of 4 OpenMP threads,
</span><br>
<span class="quotelev1">&gt; it crashes. It works fine, however, if I use MPICH for the MPI
</span><br>
<span class="quotelev1">&gt; implementation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The hostfile specifies &quot;slots=4 max-slots=4&quot; for each host (trying to
</span><br>
<span class="quotelev1">&gt; lie and say &quot;slots=1&quot; die not help), and I use &quot;-np 4 --bynode&quot; to get
</span><br>
<span class="quotelev1">&gt; only one MPI process per host. I'm using ssh over Gbit ethernet
</span><br>
<span class="quotelev1">&gt; between hosts.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is no useful error message that I can see. Watching top, I can
</span><br>
<span class="quotelev1">&gt; see that processes are spawned on the four hosts, split into 4 OpenMP
</span><br>
<span class="quotelev1">&gt; threads, and then crash immediately. The only error message is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     mpirun noticed that job rank 0 with PID 30243 on node &quot;coma006&quot;
</span><br>
<span class="quotelev1">&gt;     exited on signal 11.
</span><br>
<span class="quotelev1">&gt;     Broken pipe
</span><br>
<p>It looks like your application is dying from a segmentation fault.   
<br>
The question is -- did Open MPI cause the segfault or is there  
<br>
something in your application that Open MPI didn't like.  It would be  
<br>
useful to get a stack trace from the process that is causing the  
<br>
segfault.  Since you're only running 4 processes and using ssh to  
<br>
start them, the easiest way is to start your process in gdb in an  
<br>
xterm.  You have to have ssh X forwarding enabled for this trick to  
<br>
work, but then running something like:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun -np 4 --bynode -d xterm -e gdb &lt;myapp&gt;
<br>
<p>should pop up 4 xterm windows, one for each process.  Type &quot;run&quot; in  
<br>
each gdb process in the xterms and it should be off and running.
<br>
<p>If this would be a major pain, the other option is to try the nightly  
<br>
build of Open MPI from the trunk, as it will try to print a stack  
<br>
trace when errors like the one above occur.  But I would start with  
<br>
trying the gdb method.  Of course, if you have TotalView or another  
<br>
parallel debugger, that would be even easier.
<br>
<p>Brian
<br>
<p><p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0504.php">Glenn Morris: "Re: [O-MPI users] Trouble combining OpenMPI and OpenMP"</a>
<li><strong>Previous message:</strong> <a href="0502.php">Glenn Morris: "[O-MPI users] Trouble combining OpenMPI and OpenMP"</a>
<li><strong>In reply to:</strong> <a href="0502.php">Glenn Morris: "[O-MPI users] Trouble combining OpenMPI and OpenMP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0504.php">Glenn Morris: "Re: [O-MPI users] Trouble combining OpenMPI and OpenMP"</a>
<li><strong>Reply:</strong> <a href="0504.php">Glenn Morris: "Re: [O-MPI users] Trouble combining OpenMPI and OpenMP"</a>
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
