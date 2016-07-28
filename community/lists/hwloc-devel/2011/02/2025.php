<?
$subject_val = "Re: [hwloc-devel] Memory affinity";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 28 17:20:31 2011" -->
<!-- isoreceived="20110228222031" -->
<!-- sent="Mon, 28 Feb 2011 17:20:26 -0500" -->
<!-- isosent="20110228222026" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Memory affinity" -->
<!-- id="C67666E9-7725-400A-A219-545ADA228978_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D6C17A4.8090703_at_anu.edu.au" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Memory affinity<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-28 17:20:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2011/03/2026.php">Bernd Kallies: "Re: [hwloc-devel] multiple simultaneous topology inits?"</a>
<li><strong>Previous message:</strong> <a href="2024.php">David Singleton: "Re: [hwloc-devel] Memory affinity"</a>
<li><strong>In reply to:</strong> <a href="2023.php">David Singleton: "Re: [hwloc-devel] Memory affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2024.php">David Singleton: "Re: [hwloc-devel] Memory affinity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 28, 2011, at 4:46 PM, David Singleton wrote:
<br>
<p><span class="quotelev2">&gt;&gt; So: binding + pinning = binding (as long as you can ensure that the binding + pinning was atomic!).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Atomicity should not be a problem.  Setting memory binding and pinning (eg mlock) are
</span><br>
<span class="quotelev1">&gt; both actions on vma properties.  They would normally happen before any physical pages
</span><br>
<span class="quotelev1">&gt; are allocated.
</span><br>
<p>Ah -- good to know!
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
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2011/03/2026.php">Bernd Kallies: "Re: [hwloc-devel] multiple simultaneous topology inits?"</a>
<li><strong>Previous message:</strong> <a href="2024.php">David Singleton: "Re: [hwloc-devel] Memory affinity"</a>
<li><strong>In reply to:</strong> <a href="2023.php">David Singleton: "Re: [hwloc-devel] Memory affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2024.php">David Singleton: "Re: [hwloc-devel] Memory affinity"</a>
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
