<?
$subject_val = "Re: [hwloc-devel] thread safety";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 12 11:52:09 2010" -->
<!-- isoreceived="20100312165209" -->
<!-- sent="Fri, 12 Mar 2010 08:52:04 -0800" -->
<!-- isosent="20100312165204" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] thread safety" -->
<!-- id="7720D510-9A4A-4C04-A9BA-ECCE52EF8B3B_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20100312164540.GB5044_at_const.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] thread safety<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-12 11:52:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0759.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1828)"</a>
<li><strong>Previous message:</strong> <a href="0757.php">Samuel Thibault: "Re: [hwloc-devel] thread safety"</a>
<li><strong>In reply to:</strong> <a href="0757.php">Samuel Thibault: "Re: [hwloc-devel] thread safety"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0747.php">Samuel Thibault: "Re: [hwloc-devel] thread safety"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 12, 2010, at 8:45 AM, Samuel Thibault wrote:
<br>
<p><span class="quotelev2">&gt; &gt; The discussion we've had sounds like it's somewhat equivalent to MPI_THREAD_SERIALIZED -- you can do whatever you want as long as you ensure a) there's only writer 1 thread to a given object at a time, and b) the app is responsible for all synchronization and memory consistency.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, except that the structure can also be read concurrently, provided
</span><br>
<span class="quotelev1">&gt; that you properly synchronize passing the structure to other threads.
</span><br>
<p>Ok.  All this should be listed in a threading section in the docs.
<br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="0759.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1828)"</a>
<li><strong>Previous message:</strong> <a href="0757.php">Samuel Thibault: "Re: [hwloc-devel] thread safety"</a>
<li><strong>In reply to:</strong> <a href="0757.php">Samuel Thibault: "Re: [hwloc-devel] thread safety"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0747.php">Samuel Thibault: "Re: [hwloc-devel] thread safety"</a>
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
