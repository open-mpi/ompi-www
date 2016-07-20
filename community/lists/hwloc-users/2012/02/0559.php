<?
$subject_val = "Re: [hwloc-users] bind process to built cpuset";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 20 13:10:00 2012" -->
<!-- isoreceived="20120220181000" -->
<!-- sent="Mon, 20 Feb 2012 19:09:55 +0100" -->
<!-- isosent="20120220180955" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] bind process to built cpuset" -->
<!-- id="4F428C73.6030809_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F428BBE.2030807_at_inria.fr" -->
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
<strong>Date:</strong> 2012-02-20 13:09:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0560.php">Albert Solernou: "Re: [hwloc-users] bind process to built cpuset"</a>
<li><strong>Previous message:</strong> <a href="0558.php">Brice Goglin: "Re: [hwloc-users] bind process to built cpuset"</a>
<li><strong>In reply to:</strong> <a href="0558.php">Brice Goglin: "Re: [hwloc-users] bind process to built cpuset"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0560.php">Albert Solernou: "Re: [hwloc-users] bind process to built cpuset"</a>
<li><strong>Reply:</strong> <a href="0560.php">Albert Solernou: "Re: [hwloc-users] bind process to built cpuset"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 20/02/2012 19:06, Brice Goglin a &#233;crit :
<br>
<span class="quotelev1">&gt; Le 20/02/2012 17:41, Albert Solernou a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; I'd like to bind a process to a cpuset, so that when it spawns on
</span><br>
<span class="quotelev2">&gt;&gt; several threads, those are trapped on that cpuset.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In order to do so, I want to define my own cpuset. Let's say I want it
</span><br>
<span class="quotelev2">&gt;&gt; to include HWLOC_OBJ_CORE 2 and 5. How can I create this cpuset? The
</span><br>
<span class="quotelev2">&gt;&gt; bitmap api sounds like the solution to me, but I couldn't relate the
</span><br>
<span class="quotelev2">&gt;&gt; indexes in there into HWLOC_OBJects of any type...
</span><br>
<span class="quotelev1">&gt; If you want to bind to cores #2 and #5, do:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hwloc_bitmap_t cpuset;
</span><br>
<span class="quotelev1">&gt; hwloc_obj_t core1, core2;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; core1 = hwloc_get_obj_by_type(topology, HWLOC_OBJ_CORE, 2);
</span><br>
<span class="quotelev1">&gt; if (!core1)
</span><br>
<span class="quotelev1">&gt;    error...
</span><br>
<span class="quotelev1">&gt; core2 = hwloc_get_obj_by_type(topology, HWLOC_OBJ_CORE, 5);
</span><br>
<span class="quotelev1">&gt; if (!core2)
</span><br>
<span class="quotelev1">&gt;    error...
</span><br>
<span class="quotelev1">&gt; cpuset = hwloc_bitmap_alloc();
</span><br>
<span class="quotelev1">&gt; if (!cpuset);
</span><br>
<span class="quotelev1">&gt;    error...
</span><br>
<span class="quotelev1">&gt; hwloc_bitmap_or(cpuset, cpuset, core1-&gt;cpuset);
</span><br>
<span class="quotelev1">&gt; hwloc_bitmap_or(cpuset, cpuset, core2-&gt;cpuset);
</span><br>
<p>By the way, alloc()+or() can be optimized as dup():
<br>
<p>cpuset = hwloc_bitmap_dup(core1-&gt;cpuset);
<br>
if (!cpuset)
<br>
&nbsp;&nbsp;&nbsp;error...
<br>
hwloc_bitmap_or(cpuset, cpuset, core2-&gt;cpuset);
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0560.php">Albert Solernou: "Re: [hwloc-users] bind process to built cpuset"</a>
<li><strong>Previous message:</strong> <a href="0558.php">Brice Goglin: "Re: [hwloc-users] bind process to built cpuset"</a>
<li><strong>In reply to:</strong> <a href="0558.php">Brice Goglin: "Re: [hwloc-users] bind process to built cpuset"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0560.php">Albert Solernou: "Re: [hwloc-users] bind process to built cpuset"</a>
<li><strong>Reply:</strong> <a href="0560.php">Albert Solernou: "Re: [hwloc-users] bind process to built cpuset"</a>
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
