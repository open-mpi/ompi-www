<?
$subject_val = "[hwloc-devel] Solaris visibility issue";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 18 13:17:28 2012" -->
<!-- isoreceived="20120118181728" -->
<!-- sent="Wed, 18 Jan 2012 19:17:23 +0100" -->
<!-- isosent="20120118181723" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="[hwloc-devel] Solaris visibility issue" -->
<!-- id="20120118181723.GV4341_at_type.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1886960100.440547.1326909170535.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Subject:</strong> [hwloc-devel] Solaris visibility issue<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-18 13:17:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2689.php">TERRY DONTJE: "Re: [hwloc-devel] Solaris visibility issue"</a>
<li><strong>Previous message:</strong> <a href="2687.php">Samuel Thibault: "Re: [hwloc-devel] topology-solaris-chiptype.c bugs on processortype"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2689.php">TERRY DONTJE: "Re: [hwloc-devel] Solaris visibility issue"</a>
<li><strong>Reply:</strong> <a href="2689.php">TERRY DONTJE: "Re: [hwloc-devel] Solaris visibility issue"</a>
<li><strong>Maybe reply:</strong> <a href="2690.php">Samuel Thibault: "Re: [hwloc-devel] Solaris visibility issue"</a>
<li><strong>Maybe reply:</strong> <a href="2692.php">Samuel Thibault: "Re: [hwloc-devel] Solaris visibility issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
TERRY DONTJE, le Wed 18 Jan 2012 18:52:50 +0100, a &#233;crit :
<br>
<span class="quotelev3">&gt; &gt;&gt;Also, I tried to build v1.4 and the trunk and I keep getting linkage errors
</span><br>
<span class="quotelev3">&gt; &gt;&gt;on lstopo-lstopo-draw.o complaining about hwloc_insert_object_by_cpuset
</span><br>
<span class="quotelev3">&gt; &gt;&gt;being undefined.
</span><br>
<span class="quotelev2">&gt; &gt;It is defined in ./src/topology.c. Please check with make V=1 that
</span><br>
<span class="quotelev2">&gt; &gt;topology.o is really included in the link. Also paste the whole log
</span><br>
<span class="quotelev2">&gt; &gt;output, the issue actually come from somewhere.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; There must be something screwy with how visibility is done because when I
</span><br>
<span class="quotelev1">&gt; disabled visibility I got a workable lstopo and friends.
</span><br>
<p>Are you building with optimizations disabled?  I notice that
<br>
hwloc_insert_object_by_cpuset is the only function called in header
<br>
inlines which is not external. Maybe we can simply ifdef that inline out
<br>
when not building the library.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2689.php">TERRY DONTJE: "Re: [hwloc-devel] Solaris visibility issue"</a>
<li><strong>Previous message:</strong> <a href="2687.php">Samuel Thibault: "Re: [hwloc-devel] topology-solaris-chiptype.c bugs on processortype"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2689.php">TERRY DONTJE: "Re: [hwloc-devel] Solaris visibility issue"</a>
<li><strong>Reply:</strong> <a href="2689.php">TERRY DONTJE: "Re: [hwloc-devel] Solaris visibility issue"</a>
<li><strong>Maybe reply:</strong> <a href="2690.php">Samuel Thibault: "Re: [hwloc-devel] Solaris visibility issue"</a>
<li><strong>Maybe reply:</strong> <a href="2692.php">Samuel Thibault: "Re: [hwloc-devel] Solaris visibility issue"</a>
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
