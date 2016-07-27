<?
$subject_val = "[hwloc-devel] WHOLE_SYSTEM and cpusets (was: 1.3.1 and 1.4rc1)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 14 10:03:01 2011" -->
<!-- isoreceived="20111214150301" -->
<!-- sent="Wed, 14 Dec 2011 10:02:56 -0500" -->
<!-- isosent="20111214150256" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[hwloc-devel] WHOLE_SYSTEM and cpusets (was: 1.3.1 and 1.4rc1)" -->
<!-- id="3CB5FAFF-81DB-41C6-A70E-E32BB8D5149F_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4EE792E1.7040403_at_inria.fr" -->
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
<strong>Subject:</strong> [hwloc-devel] WHOLE_SYSTEM and cpusets (was: 1.3.1 and 1.4rc1)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-14 10:02:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2640.php">Samuel Thibault: "Re: [hwloc-devel] WHOLE_SYSTEM and cpusets (was: 1.3.1 and 1.4rc1)"</a>
<li><strong>Previous message:</strong> <a href="2638.php">Samuel Thibault: "Re: [hwloc-devel] very sched_setaffinity support"</a>
<li><strong>In reply to:</strong> <a href="2618.php">Brice Goglin: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2640.php">Samuel Thibault: "Re: [hwloc-devel] WHOLE_SYSTEM and cpusets (was: 1.3.1 and 1.4rc1)"</a>
<li><strong>Maybe reply:</strong> <a href="2640.php">Samuel Thibault: "Re: [hwloc-devel] WHOLE_SYSTEM and cpusets (was: 1.3.1 and 1.4rc1)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Re-subjecting this thread...
<br>
<p>Hmm.  The WHOLE_SYSTEM flag is confusing.  It's only defined in the docs in terms of negative logic.  
<br>
<p>Is it true that if you don't supply WHOLE_SYSTEM, then
<br>
<p>- cpuset may not be equal to complete_cpuset
<br>
- cpuset is comprised only of PUs that you can bind to
<br>
- cpuset is already the logical AND of allowed_cpuset and online_cpuset
<br>
- (ditto for nodeset / complete_nodeset)
<br>
<p>And if you *do* supply WHOLE_SYSTEM, then
<br>
<p>- cpuset will be equal to complete_cpuset
<br>
- cpuset is not necessarily the logical AND of allowed_cpuset and online_cpuset
<br>
<p>Is that correct?
<br>
<p><p><p>On Dec 13, 2011, at 1:01 PM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; Le 13/12/2011 18:47, Samuel Thibault a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; I'd say that some people might want WHOLE_SYSTEM while still needing
</span><br>
<span class="quotelev2">&gt;&gt; the bindable cpuset.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Let's wait for those people to complain before adding a 8th
</span><br>
<span class="quotelev1">&gt; cpuset/nodeset to the object structure. If they do complain and they
</span><br>
<span class="quotelev1">&gt; really don't want to AND the cpusets manually, we'll think about it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2640.php">Samuel Thibault: "Re: [hwloc-devel] WHOLE_SYSTEM and cpusets (was: 1.3.1 and 1.4rc1)"</a>
<li><strong>Previous message:</strong> <a href="2638.php">Samuel Thibault: "Re: [hwloc-devel] very sched_setaffinity support"</a>
<li><strong>In reply to:</strong> <a href="2618.php">Brice Goglin: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2640.php">Samuel Thibault: "Re: [hwloc-devel] WHOLE_SYSTEM and cpusets (was: 1.3.1 and 1.4rc1)"</a>
<li><strong>Maybe reply:</strong> <a href="2640.php">Samuel Thibault: "Re: [hwloc-devel] WHOLE_SYSTEM and cpusets (was: 1.3.1 and 1.4rc1)"</a>
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
