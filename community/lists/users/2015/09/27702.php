<?
$subject_val = "Re: [OMPI users] Using POSIX shared memory as send buffer";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 28 15:44:45 2015" -->
<!-- isoreceived="20150928194445" -->
<!-- sent="Mon, 28 Sep 2015 19:44:43 +0000" -->
<!-- isosent="20150928194443" -->
<!-- name="Dave Goodell (dgoodell)" -->
<!-- email="dgoodell_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Using POSIX shared memory as send buffer" -->
<!-- id="3A0AF4DC-794B-448C-8B3C-95596F8D27C5_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="560837AD.7070307_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Using POSIX shared memory as send buffer<br>
<strong>From:</strong> Dave Goodell (dgoodell) (<em>dgoodell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-28 15:44:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27703.php">Diego Avesani: "[OMPI users] send_request error with allocate"</a>
<li><strong>Previous message:</strong> <a href="27701.php">Grigory Shamov: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<li><strong>In reply to:</strong> <a href="27685.php">marcin.krotkiewski: "[OMPI users] Using POSIX shared memory as send buffer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27705.php">Marcin Krotkiewski: "Re: [OMPI users] Using POSIX shared memory as send buffer"</a>
<li><strong>Reply:</strong> <a href="27705.php">Marcin Krotkiewski: "Re: [OMPI users] Using POSIX shared memory as send buffer"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/10/27768.php">Brice Goglin: "Re: [OMPI users] Using POSIX shared memory as send buffer"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 27, 2015, at 1:38 PM, marcin.krotkiewski &lt;marcin.krotkiewski_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello, everyone
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am struggling a bit with IB performance when sending data from a POSIX shared memory region (/dev/shm). The memory is shared among many MPI processes within the same compute node. Essentially, I see a bit hectic performance, but it seems that my code it is roughly twice slower than when using a usual, malloced send buffer.
</span><br>
<p>It may have to do with NUMA effects and the way you're allocating/touching your shared memory vs. your private (malloced) memory.  If you have a multi-NUMA-domain system (i.e., any 2+ socket server, and even some single-socket servers) then you are likely to run into this sort of issue.  The PCI bus on which your IB HCA communicates is almost certainly closer to one NUMA domain than the others, and performance will usually be worse if you are sending/receiving from/to a &quot;remote&quot; NUMA domain.
<br>
<p>&quot;lstopo&quot; and other tools can sometimes help you get a handle on the situation, though I don't know if it knows how to show memory affinity.  I think you can find memory affinity for a process via &quot;/proc/&lt;pid&gt;/numa_maps&quot;.  There's lots of info about NUMA affinity here: <a href="https://queue.acm.org/detail.cfm?id=2513149">https://queue.acm.org/detail.cfm?id=2513149</a>
<br>
<p>-Dave
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27703.php">Diego Avesani: "[OMPI users] send_request error with allocate"</a>
<li><strong>Previous message:</strong> <a href="27701.php">Grigory Shamov: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<li><strong>In reply to:</strong> <a href="27685.php">marcin.krotkiewski: "[OMPI users] Using POSIX shared memory as send buffer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27705.php">Marcin Krotkiewski: "Re: [OMPI users] Using POSIX shared memory as send buffer"</a>
<li><strong>Reply:</strong> <a href="27705.php">Marcin Krotkiewski: "Re: [OMPI users] Using POSIX shared memory as send buffer"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/10/27768.php">Brice Goglin: "Re: [OMPI users] Using POSIX shared memory as send buffer"</a>
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
