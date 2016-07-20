<?
$subject_val = "Re: [hwloc-users] hwloc get cpubind function";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  9 12:27:42 2011" -->
<!-- isoreceived="20110809162742" -->
<!-- sent="Tue, 9 Aug 2011 18:27:36 +0200" -->
<!-- isosent="20110809162736" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc get cpubind function" -->
<!-- id="20110809162736.GB23803_at_type.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1322777065.1979352.1312906495975.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] hwloc get cpubind function<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-09 12:27:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0379.php">Gabriele Fatigati: "Re: [hwloc-users] hwloc get cpubind function"</a>
<li><strong>Previous message:</strong> <a href="0377.php">Gabriele Fatigati: "[hwloc-users] hwloc get cpubind function"</a>
<li><strong>Maybe in reply to:</strong> <a href="0377.php">Gabriele Fatigati: "[hwloc-users] hwloc get cpubind function"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0379.php">Gabriele Fatigati: "Re: [hwloc-users] hwloc get cpubind function"</a>
<li><strong>Reply:</strong> <a href="0379.php">Gabriele Fatigati: "Re: [hwloc-users] hwloc get cpubind function"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gabriele Fatigati, le Tue 09 Aug 2011 18:14:55 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; hwloc_get_cpubind() function, return, according to the manual, &quot;current process
</span><br>
<span class="quotelev1">&gt; or thread binding&quot;. What does it means?
</span><br>
<p>The cpuset to which the current process or thread (according to flags)
<br>
was last bound to. That is, the converse of set_cpubind().
<br>
<p><span class="quotelev1">&gt; It return cpu index where process/ thread runs?
</span><br>
<p>No, hwloc_get_last_cpu_location() does that.
<br>
<p><span class="quotelev1">&gt; If yes, which cpuset &#160;I have to use in function arguments?
</span><br>
<p>get_cpubind returns a cpuset, you just provide one you have allocated
<br>
the way you prefer.
<br>
<p><span class="quotelev1">&gt; Could you give me a little example to use it?&#160;
</span><br>
<p>It is really just the converse of hwloc_set_cpubind(), so for instance:
<br>
<p>set = hwloc_bitmap_alloc();
<br>
hwloc_get_cpubind(topology, &amp;set, 0)
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0379.php">Gabriele Fatigati: "Re: [hwloc-users] hwloc get cpubind function"</a>
<li><strong>Previous message:</strong> <a href="0377.php">Gabriele Fatigati: "[hwloc-users] hwloc get cpubind function"</a>
<li><strong>Maybe in reply to:</strong> <a href="0377.php">Gabriele Fatigati: "[hwloc-users] hwloc get cpubind function"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0379.php">Gabriele Fatigati: "Re: [hwloc-users] hwloc get cpubind function"</a>
<li><strong>Reply:</strong> <a href="0379.php">Gabriele Fatigati: "Re: [hwloc-users] hwloc get cpubind function"</a>
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
