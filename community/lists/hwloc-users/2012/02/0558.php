<?
$subject_val = "Re: [hwloc-users] bind process to built cpuset";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 20 13:07:02 2012" -->
<!-- isoreceived="20120220180702" -->
<!-- sent="Mon, 20 Feb 2012 19:06:54 +0100" -->
<!-- isosent="20120220180654" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] bind process to built cpuset" -->
<!-- id="4F428BBE.2030807_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F4277D6.1010901_at_oerc.ox.ac.uk" -->
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
<strong>Subject:</strong> Re: [hwloc-users] bind process to built cpuset<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-20 13:06:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0559.php">Brice Goglin: "Re: [hwloc-users] bind process to built cpuset"</a>
<li><strong>Previous message:</strong> <a href="0557.php">Albert Solernou: "[hwloc-users] bind process to built cpuset"</a>
<li><strong>In reply to:</strong> <a href="0557.php">Albert Solernou: "[hwloc-users] bind process to built cpuset"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0559.php">Brice Goglin: "Re: [hwloc-users] bind process to built cpuset"</a>
<li><strong>Reply:</strong> <a href="0559.php">Brice Goglin: "Re: [hwloc-users] bind process to built cpuset"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 20/02/2012 17:41, Albert Solernou a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I'd like to bind a process to a cpuset, so that when it spawns on
</span><br>
<span class="quotelev1">&gt; several threads, those are trapped on that cpuset.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In order to do so, I want to define my own cpuset. Let's say I want it
</span><br>
<span class="quotelev1">&gt; to include HWLOC_OBJ_CORE 2 and 5. How can I create this cpuset? The
</span><br>
<span class="quotelev1">&gt; bitmap api sounds like the solution to me, but I couldn't relate the
</span><br>
<span class="quotelev1">&gt; indexes in there into HWLOC_OBJects of any type...
</span><br>
<p>If you want to bind to cores #2 and #5, do:
<br>
<p>hwloc_bitmap_t cpuset;
<br>
hwloc_obj_t core1, core2;
<br>
<p>core1 = hwloc_get_obj_by_type(topology, HWLOC_OBJ_CORE, 2);
<br>
if (!core1)
<br>
&nbsp;&nbsp;&nbsp;error...
<br>
core2 = hwloc_get_obj_by_type(topology, HWLOC_OBJ_CORE, 5);
<br>
if (!core2)
<br>
&nbsp;&nbsp;&nbsp;error...
<br>
cpuset = hwloc_bitmap_alloc();
<br>
if (!cpuset);
<br>
&nbsp;&nbsp;&nbsp;error...
<br>
hwloc_bitmap_or(cpuset, cpuset, core1-&gt;cpuset);
<br>
hwloc_bitmap_or(cpuset, cpuset, core2-&gt;cpuset);
<br>
<p>...
<br>
hwloc_set_cpubind(... cpuset, HWLOC_CPUBIND_PROCESS)
<br>
...
<br>
<p>hwloc_bitmap_free(cpuset);
<br>
<p><p>This uses core logical indexes. If you want physical indexes, let me
<br>
know (but those makes sense for PUs, not really for Cores).
<br>
<p><span class="quotelev1">&gt; On the other hand, I'd like to know if binding a process in there
</span><br>
<span class="quotelev1">&gt; would lock its spawned threads.
</span><br>
<p>Each thread inside the process basically gets the same binding as the
<br>
entire process.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0559.php">Brice Goglin: "Re: [hwloc-users] bind process to built cpuset"</a>
<li><strong>Previous message:</strong> <a href="0557.php">Albert Solernou: "[hwloc-users] bind process to built cpuset"</a>
<li><strong>In reply to:</strong> <a href="0557.php">Albert Solernou: "[hwloc-users] bind process to built cpuset"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0559.php">Brice Goglin: "Re: [hwloc-users] bind process to built cpuset"</a>
<li><strong>Reply:</strong> <a href="0559.php">Brice Goglin: "Re: [hwloc-users] bind process to built cpuset"</a>
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
