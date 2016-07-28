<?
$subject_val = "Re: [hwloc-users] hwloc get cpubind function";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 10 05:01:07 2011" -->
<!-- isoreceived="20110810090107" -->
<!-- sent="Wed, 10 Aug 2011 11:01:01 +0200" -->
<!-- isosent="20110810090101" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc get cpubind function" -->
<!-- id="20110810090101.GF23803_at_type.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1849768720.1981668.1312961719635.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Date:</strong> 2011-08-10 05:01:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0381.php">Gabriele Fatigati: "Re: [hwloc-users] hwloc get cpubind function"</a>
<li><strong>Previous message:</strong> <a href="0379.php">Gabriele Fatigati: "Re: [hwloc-users] hwloc get cpubind function"</a>
<li><strong>Maybe in reply to:</strong> <a href="0377.php">Gabriele Fatigati: "[hwloc-users] hwloc get cpubind function"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0381.php">Gabriele Fatigati: "Re: [hwloc-users] hwloc get cpubind function"</a>
<li><strong>Reply:</strong> <a href="0381.php">Gabriele Fatigati: "Re: [hwloc-users] hwloc get cpubind function"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gabriele Fatigati, le Wed 10 Aug 2011 09:35:19 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; these lines, doesn't works:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; set = hwloc_bitmap_alloc();
</span><br>
<span class="quotelev1">&gt; hwloc_get_cpubind(topology, &amp;set, 0);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hwloc_get_cpubind() crash, because I have to pass set, not &amp;set i suppose.
</span><br>
<p>Right, of course.
<br>
<p><span class="quotelev1">&gt; I think&#160;hwloc_get_last_cpu_location() is used coupled with&#160;hwloc_get_cpubind()?
</span><br>
<p>Well, they don't _have_ to. They provide a different information. It
<br>
just happens that get_last_cpu_location usually returns an index withing
<br>
what get_cpubind returns (&quot;always&quot;, if the binding is strict).
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0381.php">Gabriele Fatigati: "Re: [hwloc-users] hwloc get cpubind function"</a>
<li><strong>Previous message:</strong> <a href="0379.php">Gabriele Fatigati: "Re: [hwloc-users] hwloc get cpubind function"</a>
<li><strong>Maybe in reply to:</strong> <a href="0377.php">Gabriele Fatigati: "[hwloc-users] hwloc get cpubind function"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0381.php">Gabriele Fatigati: "Re: [hwloc-users] hwloc get cpubind function"</a>
<li><strong>Reply:</strong> <a href="0381.php">Gabriele Fatigati: "Re: [hwloc-users] hwloc get cpubind function"</a>
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
