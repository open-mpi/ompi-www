<?
$subject_val = "Re: [hwloc-devel] 0.9.1rc2 failures";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 23 09:07:58 2009" -->
<!-- isoreceived="20091023130758" -->
<!-- sent="Fri, 23 Oct 2009 09:07:52 -0400" -->
<!-- isosent="20091023130752" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] 0.9.1rc2 failures" -->
<!-- id="9B165B16-CA4F-4818-8ADD-DC5C0044E2CF_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20091023124604.GK4686_at_const.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] 0.9.1rc2 failures<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-23 09:07:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0259.php">Samuel Thibault: "Re: [hwloc-devel] 0.9.1rc2 failures"</a>
<li><strong>Previous message:</strong> <a href="0257.php">Brice Goglin: "Re: [hwloc-devel] 0.9.1rc2 failures"</a>
<li><strong>In reply to:</strong> <a href="0256.php">Samuel Thibault: "Re: [hwloc-devel] 0.9.1rc2 failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0259.php">Samuel Thibault: "Re: [hwloc-devel] 0.9.1rc2 failures"</a>
<li><strong>Reply:</strong> <a href="0259.php">Samuel Thibault: "Re: [hwloc-devel] 0.9.1rc2 failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 23, 2009, at 8:46 AM, Samuel Thibault wrote:
<br>
<p><span class="quotelev2">&gt; &gt; PGC-W-0006-Empty translation unit (lstopo-cairo.c: 6)
</span><br>
<span class="quotelev2">&gt; &gt; PGC-W-0006-Empty translation unit (lstopo-xml.c: 6)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; These are expected.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Do you think we should use AM_CONDITIONAL's to conditionally add those  
<br>
source files to the SOURCES list rather than using #if's to  
<br>
effectively zero out the .c file?
<br>
<p>FWIW: we do this for the topology-* files in src/.
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
<li><strong>Next message:</strong> <a href="0259.php">Samuel Thibault: "Re: [hwloc-devel] 0.9.1rc2 failures"</a>
<li><strong>Previous message:</strong> <a href="0257.php">Brice Goglin: "Re: [hwloc-devel] 0.9.1rc2 failures"</a>
<li><strong>In reply to:</strong> <a href="0256.php">Samuel Thibault: "Re: [hwloc-devel] 0.9.1rc2 failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0259.php">Samuel Thibault: "Re: [hwloc-devel] 0.9.1rc2 failures"</a>
<li><strong>Reply:</strong> <a href="0259.php">Samuel Thibault: "Re: [hwloc-devel] 0.9.1rc2 failures"</a>
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
