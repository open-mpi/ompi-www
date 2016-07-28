<?
$subject_val = "Re: [hwloc-devel] release status";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  2 16:22:51 2009" -->
<!-- isoreceived="20091002202251" -->
<!-- sent="Fri, 2 Oct 2009 16:22:45 -0400" -->
<!-- isosent="20091002202245" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] release status" -->
<!-- id="5DFC06AD-6DDE-4C88-8B25-1DB5E02E2047_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20091002201639.GB9354_at_const" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] release status<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-02 16:22:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0136.php">Samuel Thibault: "Re: [hwloc-devel] release status"</a>
<li><strong>Previous message:</strong> <a href="0134.php">Samuel Thibault: "Re: [hwloc-devel] release status"</a>
<li><strong>In reply to:</strong> <a href="0134.php">Samuel Thibault: "Re: [hwloc-devel] release status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0136.php">Samuel Thibault: "Re: [hwloc-devel] release status"</a>
<li><strong>Reply:</strong> <a href="0136.php">Samuel Thibault: "Re: [hwloc-devel] release status"</a>
<li><strong>Reply:</strong> <a href="0137.php">Fawzi Mohamed: "Re: [hwloc-devel] release status"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 2, 2009, at 4:16 PM, Samuel Thibault wrote:
<br>
<p><span class="quotelev2">&gt; &gt; But it might be worth testing the example I sent before, even with
</span><br>
<span class="quotelev2">&gt; &gt; dynamically allocated handles.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Should work perfectly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I *think* it should, too, but I also thought that pointers to global  
<br>
instances in the shared library wouldn't incur problems, either.
<br>
<p><span class="quotelev2">&gt; &gt; Linkers are deep, dark voodoo with unexpected corner cases in round
</span><br>
<span class="quotelev2">&gt; &gt; rooms. :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sure, but linkers don't have anything to do with malloc().
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>It's not a malloc issue.
<br>
<p>I would *expect* that it works, but I don't know for 100% sure.  I  
<br>
always thought that I understood linkers, but I keep running into  
<br>
whacky corner cases over the years that have convinced me that I don't  
<br>
understand how they work at all.
<br>
<p>It is worth testing before committing to this path, just to *really  
<br>
really be sure* of the consequences.  *If* there is a problem, I'm  
<br>
sure that casting through a neutral type would resolve the problem  
<br>
(e.g., if the public handle type was &quot;unsigned long&quot;).
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0136.php">Samuel Thibault: "Re: [hwloc-devel] release status"</a>
<li><strong>Previous message:</strong> <a href="0134.php">Samuel Thibault: "Re: [hwloc-devel] release status"</a>
<li><strong>In reply to:</strong> <a href="0134.php">Samuel Thibault: "Re: [hwloc-devel] release status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0136.php">Samuel Thibault: "Re: [hwloc-devel] release status"</a>
<li><strong>Reply:</strong> <a href="0136.php">Samuel Thibault: "Re: [hwloc-devel] release status"</a>
<li><strong>Reply:</strong> <a href="0137.php">Fawzi Mohamed: "Re: [hwloc-devel] release status"</a>
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
