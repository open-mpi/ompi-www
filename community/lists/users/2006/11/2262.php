<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Nov 30 17:11:01 2006" -->
<!-- isoreceived="20061130221101" -->
<!-- sent="Thu, 30 Nov 2006 15:10:56 -0700" -->
<!-- isosent="20061130221056" -->
<!-- name="Marcus G. Daniels" -->
<!-- email="mdaniels_at_[hidden]" -->
<!-- subject="Re: [OMPI users] For Open MPI + BPROC users" -->
<!-- id="456F56F0.6060906_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B349CF09-CFCF-4F54-A4EB-A004099F0E74_at_lanl.gov" -->
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
<strong>From:</strong> Marcus G. Daniels (<em>mdaniels_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-30 17:10:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/12/2263.php">Peter Kjellstrom: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<li><strong>Previous message:</strong> <a href="2261.php">Dave Grote: "Re: [OMPI users] x11 forwarding"</a>
<li><strong>In reply to:</strong> <a href="2255.php">Galen Shipman: "[OMPI users] For Open MPI + BPROC users"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Galen Shipman wrote:
<br>
<span class="quotelev1">&gt; We have found a potential issue with BPROC that may effect Open MPI.
</span><br>
<span class="quotelev1">&gt; Open MPI by default uses PTYs for I/O forwarding, if PTYs aren't  
</span><br>
<span class="quotelev1">&gt; setup on the compute nodes, Open MPI will revert to using pipes.  
</span><br>
<span class="quotelev1">&gt; Recently (today) we found a potential issue with PTYs and BPROC. A  
</span><br>
<span class="quotelev1">&gt; simple reader/writer using PTYs causes the writer to hang in  
</span><br>
<span class="quotelev1">&gt; uninterruptible sleep. The consistency of the process table from the  
</span><br>
<span class="quotelev1">&gt; head node and the back end nodes is also effected, that is &quot;bps&quot;  
</span><br>
<span class="quotelev1">&gt; shows no writer process, while &quot;bpsh NODE ps aux&quot; shows the writer  
</span><br>
<span class="quotelev1">&gt; process in uninterruptible sleep.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Since Open MPI uses PTYs by default on BPROC this results in ORTED or  
</span><br>
<span class="quotelev1">&gt; MPI processes being orphaned on compute nodes. The workaround for  
</span><br>
<span class="quotelev1">&gt; this issue is to configure Open MPI with --disable-pty-support and  
</span><br>
<span class="quotelev1">&gt; rebuild.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
The mpirun manual says that standard input is redirected from /dev/null, 
<br>
and that standard output of remote nodes will be attached to the node 
<br>
that invoked mpirun.   If this is all caused by some buglet with BPROC 
<br>
I/O forwarding, perhaps it would help of the slave nodes were invoked 
<br>
with the equivalent of &quot;bpsh -N&quot;?  I wonder if some people see the 
<br>
problem and others don't depending on stdout (or its absence) from 
<br>
different applications?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/12/2263.php">Peter Kjellstrom: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<li><strong>Previous message:</strong> <a href="2261.php">Dave Grote: "Re: [OMPI users] x11 forwarding"</a>
<li><strong>In reply to:</strong> <a href="2255.php">Galen Shipman: "[OMPI users] For Open MPI + BPROC users"</a>
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
