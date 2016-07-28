<?
$subject_val = "Re: [OMPI users] Using POSIX shared memory as send buffer";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  2 04:42:08 2015" -->
<!-- isoreceived="20151002084208" -->
<!-- sent="Fri, 2 Oct 2015 10:42:02 +0200" -->
<!-- isosent="20151002084202" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Using POSIX shared memory as send buffer" -->
<!-- id="560E435A.5030001_at_inria.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="3A0AF4DC-794B-448C-8B3C-95596F8D27C5_at_cisco.com" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-02 04:42:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27769.php">Georg Geiser: "[OMPI users] OpenMPI 1.8.8: Segfault when using non-blocking reduce operations with a user-defined operator"</a>
<li><strong>Previous message:</strong> <a href="27767.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem using mpifort(Intel)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/09/27702.php">Dave Goodell (dgoodell): "Re: [OMPI users] Using POSIX shared memory as send buffer"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 28/09/2015 21:44, Dave Goodell (dgoodell) a &#233;crit :
<br>
<span class="quotelev1">&gt; It may have to do with NUMA effects and the way you're allocating/touching your shared memory vs. your private (malloced) memory.  If you have a multi-NUMA-domain system (i.e., any 2+ socket server, and even some single-socket servers) then you are likely to run into this sort of issue.  The PCI bus on which your IB HCA communicates is almost certainly closer to one NUMA domain than the others, and performance will usually be worse if you are sending/receiving from/to a &quot;remote&quot; NUMA domain.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;lstopo&quot; and other tools can sometimes help you get a handle on the situation, though I don't know if it knows how to show memory affinity.
</span><br>
<p>So, you'd like &quot;lstopo --ps&quot; or &quot;hwloc-ps&quot; for displaying memory binding
<br>
and/or memory location instead of CPU binding? Shouldn't be too hard.
<br>
<p>Brice
<br>
<p><p><p><span class="quotelev1">&gt;   I think you can find memory affinity for a process via &quot;/proc/&lt;pid&gt;/numa_maps&quot;.  There's lots of info about NUMA affinity here: <a href="https://queue.acm.org/detail.cfm?id=2513149">https://queue.acm.org/detail.cfm?id=2513149</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27769.php">Georg Geiser: "[OMPI users] OpenMPI 1.8.8: Segfault when using non-blocking reduce operations with a user-defined operator"</a>
<li><strong>Previous message:</strong> <a href="27767.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem using mpifort(Intel)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/09/27702.php">Dave Goodell (dgoodell): "Re: [OMPI users] Using POSIX shared memory as send buffer"</a>
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
