<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jan  4 16:48:49 2006" -->
<!-- isoreceived="20060104214849" -->
<!-- sent="Wed, 04 Jan 2006 16:48:41 -0500" -->
<!-- isosent="20060104214841" -->
<!-- name="Patrick Geoffray" -->
<!-- email="patrick_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] LAM vs OPENMPI performance" -->
<!-- id="43BC42B9.3080407_at_myri.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="mailman.1773.1136409791.2580.users_at_open-mpi.org" -->
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
<strong>From:</strong> Patrick Geoffray (<em>patrick_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-01-04 16:48:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0476.php">Tom Rosmond: "Re: [O-MPI users] LAM vs OPENMPI performance"</a>
<li><strong>Previous message:</strong> <a href="0474.php">Brian Barrett: "Re: [O-MPI users] LAM vs OPENMPI performance"</a>
<li><strong>Maybe in reply to:</strong> <a href="0473.php">Tom Rosmond: "[O-MPI users] LAM vs OPENMPI performance"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Tom,
<br>
<p>users-request_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; I am pretty sure that LAM exploits the fact that the virtual processors 
</span><br>
<span class="quotelev1">&gt; are all
</span><br>
<span class="quotelev1">&gt; sharing the same memory,  so communication is via memory and/or the PCI bus
</span><br>
<span class="quotelev1">&gt; of the system, while my OPENMPI configuration doesn't exploit this.  Is this
</span><br>
<span class="quotelev1">&gt; a reasonable diagnosis of the dramatic difference in performance?  More
</span><br>
<p>It would be more likely that OpenMPI is using shared memory and polling 
<br>
on it whereas LAM is using sockets, or at least blocking on something.
<br>
<p>Polling is a bad thing when oversubscribing processor. When you block on 
<br>
a socket (or any OS handle), the process immediately yield the CPU and 
<br>
is removed from the scheduler. When you poll waiting for a send or 
<br>
receive to complete, you are burning cycles on the CPU and the scheduler 
<br>
will wait for the next quantum of time before running another process.
<br>
<p>So, if you send a message between 2 processes sharing the same 
<br>
processor, the latency will be in the order of half of the scheduler 
<br>
quantum (10ms on Linux) if they are both polling. Things are much faster 
<br>
when processes are polling on different CPUs (1-2 us) but the blocking 
<br>
socket overhead (~20us) is way better than the quantum of time when you 
<br>
don't have several processors.
<br>
<p><span class="quotelev1">&gt; importantly, how to I reconfigure OPENMPI to match the LAM performance.
</span><br>
<p>Try disabling the shared memory device in OpenMPI. Unfortunately, I have 
<br>
no clue how to do it.
<br>
<p>Patrick
<br>
<pre>
-- 
Patrick Geoffray
Myricom, Inc.
<a href="http://www.myri.com">http://www.myri.com</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0476.php">Tom Rosmond: "Re: [O-MPI users] LAM vs OPENMPI performance"</a>
<li><strong>Previous message:</strong> <a href="0474.php">Brian Barrett: "Re: [O-MPI users] LAM vs OPENMPI performance"</a>
<li><strong>Maybe in reply to:</strong> <a href="0473.php">Tom Rosmond: "[O-MPI users] LAM vs OPENMPI performance"</a>
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
