<?
$subject_val = "Re: [hwloc-devel] Solaris visibility issue";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 18 13:23:52 2012" -->
<!-- isoreceived="20120118182352" -->
<!-- sent="Wed, 18 Jan 2012 13:23:40 -0500" -->
<!-- isosent="20120118182340" -->
<!-- name="TERRY DONTJE" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Solaris visibility issue" -->
<!-- id="4F170E2C.5090206_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20120118181723.GV4341_at_type.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Solaris visibility issue<br>
<strong>From:</strong> TERRY DONTJE (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-18 13:23:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2690.php">Samuel Thibault: "Re: [hwloc-devel] Solaris visibility issue"</a>
<li><strong>Previous message:</strong> <a href="2688.php">Samuel Thibault: "[hwloc-devel] Solaris visibility issue"</a>
<li><strong>In reply to:</strong> <a href="2688.php">Samuel Thibault: "[hwloc-devel] Solaris visibility issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2690.php">Samuel Thibault: "Re: [hwloc-devel] Solaris visibility issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 1/18/2012 1:17 PM, Samuel Thibault wrote:
<br>
<span class="quotelev1">&gt; TERRY DONTJE, le Wed 18 Jan 2012 18:52:50 +0100, a &#233;crit :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Also, I tried to build v1.4 and the trunk and I keep getting linkage errors
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; on lstopo-lstopo-draw.o complaining about hwloc_insert_object_by_cpuset
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; being undefined.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It is defined in ./src/topology.c. Please check with make V=1 that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; topology.o is really included in the link. Also paste the whole log
</span><br>
<span class="quotelev3">&gt;&gt;&gt; output, the issue actually come from somewhere.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There must be something screwy with how visibility is done because when I
</span><br>
<span class="quotelev2">&gt;&gt; disabled visibility I got a workable lstopo and friends.
</span><br>
<span class="quotelev1">&gt; Are you building with optimizations disabled?  I notice that
</span><br>
<span class="quotelev1">&gt; hwloc_insert_object_by_cpuset is the only function called in header
</span><br>
<span class="quotelev1">&gt; inlines which is not external. Maybe we can simply ifdef that inline out
</span><br>
<span class="quotelev1">&gt; when not building the library.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Samuel
</span><br>
I didn't specify using optimizations or not on my configure line.  Don't 
<br>
you need the function to make lstopo work?
<br>
<p><pre>
-- 
Oracle
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-2689/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/hwloc-devel/att-2689/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2690.php">Samuel Thibault: "Re: [hwloc-devel] Solaris visibility issue"</a>
<li><strong>Previous message:</strong> <a href="2688.php">Samuel Thibault: "[hwloc-devel] Solaris visibility issue"</a>
<li><strong>In reply to:</strong> <a href="2688.php">Samuel Thibault: "[hwloc-devel] Solaris visibility issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2690.php">Samuel Thibault: "Re: [hwloc-devel] Solaris visibility issue"</a>
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
