<?
$subject_val = "Re: [hwloc-users] Bind current thread to a specific cpu";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 18 06:02:39 2011" -->
<!-- isoreceived="20110818100239" -->
<!-- sent="Thu, 18 Aug 2011 12:02:34 +0200" -->
<!-- isosent="20110818100234" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Bind current thread to a specific cpu" -->
<!-- id="20110818100234.GJ18853_at_type.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="557707915.2030053.1313661321097.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Bind current thread to a specific cpu<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-18 06:02:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0426.php">Gabriele Fatigati: "[hwloc-users] Numa availability"</a>
<li><strong>Previous message:</strong> <a href="0424.php">Brice Goglin: "Re: [hwloc-users] Bind current thread to a specific cpu"</a>
<li><strong>Maybe in reply to:</strong> <a href="0421.php">PULVERAIL S&#233;bastien: "[hwloc-users] Bind current thread to a specific cpu"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
PULVERAIL S&#233;bastien, le Thu 18 Aug 2011 11:55:21 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; I use logical ids, so I do this :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; hwloc_obj_t cpu = hwloc_get_obj_by_type(topology, HWLOC_OBJ_PU, i);
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; int err = hwloc_set_cpubind(topology, cpu-&gt;cpuset, HWLOC_CPUBIND_THREAD);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is it correct ?
</span><br>
<p>Yes.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0426.php">Gabriele Fatigati: "[hwloc-users] Numa availability"</a>
<li><strong>Previous message:</strong> <a href="0424.php">Brice Goglin: "Re: [hwloc-users] Bind current thread to a specific cpu"</a>
<li><strong>Maybe in reply to:</strong> <a href="0421.php">PULVERAIL S&#233;bastien: "[hwloc-users] Bind current thread to a specific cpu"</a>
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
