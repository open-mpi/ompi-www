<?
$subject_val = "Re: [OMPI users] 1.6.2 affinity failures";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 19 21:08:18 2012" -->
<!-- isoreceived="20121220020818" -->
<!-- sent="Wed, 19 Dec 2012 18:08:10 -0800" -->
<!-- isosent="20121220020810" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 1.6.2 affinity failures" -->
<!-- id="40FFB223-12A2-4C20-836A-66D3C6596D22_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="ABBD483E-0252-4758-BD22-78BAFC860C12_at_umich.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] 1.6.2 affinity failures<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-19 21:08:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21020.php">Jeff Squyres: "Re: [OMPI users] Possible memory error"</a>
<li><strong>Previous message:</strong> <a href="21018.php">Brock Palen: "[OMPI users] 1.6.2 affinity failures"</a>
<li><strong>In reply to:</strong> <a href="21018.php">Brock Palen: "[OMPI users] 1.6.2 affinity failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21023.php">Brock Palen: "Re: [OMPI users] 1.6.2 affinity failures"</a>
<li><strong>Reply:</strong> <a href="21023.php">Brock Palen: "Re: [OMPI users] 1.6.2 affinity failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm afraid these are both known problems in the 1.6.2 release. I believe we fixed npersocket in 1.6.3, though you might check to be sure. On the large-scale issue, cpus-per-rank well might fail under those conditions. The algorithm in the 1.6 series hasn't seen much use, especially at scale.
<br>
<p>In fact, cpus-per-rank has somewhat fallen by the wayside recently due to apparent lack of interest. I'm restoring it for the 1.7 series over the holiday (currently doesn't work in 1.7 or trunk).
<br>
<p><p>On Dec 19, 2012, at 4:34 PM, Brock Palen &lt;brockp_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Using openmpi 1.6.2 with intel 13.0  though the problem not specific to the compiler.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Using two 12 core 2 socket nodes, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -np 4 -npersocket 2 uptime
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Your job has requested a conflicting number of processes for the
</span><br>
<span class="quotelev1">&gt; application:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; App: uptime
</span><br>
<span class="quotelev1">&gt; number of procs:  4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is more processes than we can launch under the following
</span><br>
<span class="quotelev1">&gt; additional directives and conditions:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; number of sockets:   0
</span><br>
<span class="quotelev1">&gt; npersocket:   2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any idea why this wouldn't work?  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Another problem the following does what I expect,  two 2 socket 8 core sockets. 16 total cores/node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -np 8 -npernode 4 -bind-to-core -cpus-per-rank 4 hwloc-bind --get
</span><br>
<span class="quotelev1">&gt; 0x0000000f
</span><br>
<span class="quotelev1">&gt; 0x0000000f
</span><br>
<span class="quotelev1">&gt; 0x000000f0
</span><br>
<span class="quotelev1">&gt; 0x000000f0
</span><br>
<span class="quotelev1">&gt; 0x00000f00
</span><br>
<span class="quotelev1">&gt; 0x00000f00
</span><br>
<span class="quotelev1">&gt; 0x0000f000
</span><br>
<span class="quotelev1">&gt; 0x0000f000
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But fails at large scale:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -np 276 -npernode 4 -bind-to-core -cpus-per-rank 4 hwloc-bind --get
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; An invalid physical processor ID was returned when attempting to bind
</span><br>
<span class="quotelev1">&gt; an MPI process to a unique processor.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This usually means that you requested binding to more processors than
</span><br>
<span class="quotelev1">&gt; exist (e.g., trying to bind N MPI processes to M processors, where N &gt;
</span><br>
<span class="quotelev1">&gt; M).  Double check that you have enough unique processors for all the
</span><br>
<span class="quotelev1">&gt; MPI processes that you are launching on this host.
</span><br>
<span class="quotelev1">&gt; You job will now abort.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brock Palen
</span><br>
<span class="quotelev1">&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev1">&gt; CAEN Advanced Computing
</span><br>
<span class="quotelev1">&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev1">&gt; (734)936-1985
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21020.php">Jeff Squyres: "Re: [OMPI users] Possible memory error"</a>
<li><strong>Previous message:</strong> <a href="21018.php">Brock Palen: "[OMPI users] 1.6.2 affinity failures"</a>
<li><strong>In reply to:</strong> <a href="21018.php">Brock Palen: "[OMPI users] 1.6.2 affinity failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21023.php">Brock Palen: "Re: [OMPI users] 1.6.2 affinity failures"</a>
<li><strong>Reply:</strong> <a href="21023.php">Brock Palen: "Re: [OMPI users] 1.6.2 affinity failures"</a>
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
