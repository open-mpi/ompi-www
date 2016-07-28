<?
$subject_val = "Re: [hwloc-devel] hwloc_alloc_membind";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 24 07:52:24 2012" -->
<!-- isoreceived="20120224125224" -->
<!-- sent="Fri, 24 Feb 2012 13:52:19 +0100" -->
<!-- isosent="20120224125219" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc_alloc_membind" -->
<!-- id="20120224125219.GO4369_at_type.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="21746691.1876.1330085098878.JavaMail.root_at_zmbs5.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc_alloc_membind<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-24 07:52:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2903.php">Brice Goglin: "Re: [hwloc-devel] hwloc_alloc_membind"</a>
<li><strong>Previous message:</strong> <a href="2901.php">Karl Napf: "[hwloc-devel] hwloc_alloc_membind"</a>
<li><strong>Maybe in reply to:</strong> <a href="2901.php">Karl Napf: "[hwloc-devel] hwloc_alloc_membind"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2903.php">Brice Goglin: "Re: [hwloc-devel] hwloc_alloc_membind"</a>
<li><strong>Reply:</strong> <a href="2903.php">Brice Goglin: "Re: [hwloc-devel] hwloc_alloc_membind"</a>
<li><strong>Reply:</strong> <a href="2904.php">Karl Napf: "Re: [hwloc-devel] hwloc_alloc_membind"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Karl Napf, le Fri 24 Feb 2012 13:04:58 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; What surprises me is that the result of the call to
</span><br>
<span class="quotelev1">&gt; hwloc_fix_membind_cpuset in line 534 of bind.c is negated, even though
</span><br>
<span class="quotelev1">&gt; hwloc_fix_membind_cpuset returns 0 on success. Might this be a bug?
</span><br>
<p>Oops, indeed.
<br>
<p><span class="quotelev1">&gt; 2. In another use case I want to allocate memory using the first-touch
</span><br>
<span class="quotelev1">&gt; policy (HWLOC_MEMBIND_FIRSTTOUCH). Does the cpuset passed to
</span><br>
<span class="quotelev1">&gt; hwloc_alloc_membind have any meaning in this case, since the memory is
</span><br>
<span class="quotelev1">&gt; not immediately bound to a node?
</span><br>
<p>It has a meaning when there is not enough memory on the node. Allocation
<br>
may then be done in some node of the given cpuset.  This kind of precise
<br>
detail on the behavior however vary over OSes.  Linux does not take it
<br>
into account for instance.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2903.php">Brice Goglin: "Re: [hwloc-devel] hwloc_alloc_membind"</a>
<li><strong>Previous message:</strong> <a href="2901.php">Karl Napf: "[hwloc-devel] hwloc_alloc_membind"</a>
<li><strong>Maybe in reply to:</strong> <a href="2901.php">Karl Napf: "[hwloc-devel] hwloc_alloc_membind"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2903.php">Brice Goglin: "Re: [hwloc-devel] hwloc_alloc_membind"</a>
<li><strong>Reply:</strong> <a href="2903.php">Brice Goglin: "Re: [hwloc-devel] hwloc_alloc_membind"</a>
<li><strong>Reply:</strong> <a href="2904.php">Karl Napf: "Re: [hwloc-devel] hwloc_alloc_membind"</a>
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
