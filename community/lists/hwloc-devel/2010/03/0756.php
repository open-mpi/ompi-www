<?
$subject_val = "Re: [hwloc-devel] thread safety";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 12 11:38:53 2010" -->
<!-- isoreceived="20100312163853" -->
<!-- sent="Fri, 12 Mar 2010 08:38:48 -0800" -->
<!-- isosent="20100312163848" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] thread safety" -->
<!-- id="E417E5E0-E0B2-4474-9F74-BB6BEFAAB1F6_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20100312163120.GZ5044_at_const.bordeaux.inria.fr" -->
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
<strong>Date:</strong> 2010-03-12 11:38:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0757.php">Samuel Thibault: "Re: [hwloc-devel] thread safety"</a>
<li><strong>Previous message:</strong> <a href="0755.php">Samuel Thibault: "Re: [hwloc-devel] thread safety"</a>
<li><strong>In reply to:</strong> <a href="0755.php">Samuel Thibault: "Re: [hwloc-devel] thread safety"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0757.php">Samuel Thibault: "Re: [hwloc-devel] thread safety"</a>
<li><strong>Reply:</strong> <a href="0757.php">Samuel Thibault: "Re: [hwloc-devel] thread safety"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 12, 2010, at 8:31 AM, Samuel Thibault wrote:
<br>
<p><span class="quotelev1">&gt; No, because that will not automatically issue hardware memory barriers,
</span><br>
<span class="quotelev1">&gt; which are needed on basically all architectures but x86 (which has
</span><br>
<span class="quotelev1">&gt; in-order stores) to ensure seeing writes coherently.
</span><br>
<p>Ok, fine.
<br>
<p>I'm not understanding how this conversation corresponds to one of your prior statements on this thread that you thought hwloc was already thread safe.
<br>
<p>The discussion we've had sounds like it's somewhat equivalent to MPI_THREAD_SERIALIZED -- you can do whatever you want as long as you ensure a) there's only writer 1 thread to a given object at a time, and b) the app is responsible for all synchronization and memory consistency.
<br>
<p>Am I missing something?
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
<li><strong>Next message:</strong> <a href="0757.php">Samuel Thibault: "Re: [hwloc-devel] thread safety"</a>
<li><strong>Previous message:</strong> <a href="0755.php">Samuel Thibault: "Re: [hwloc-devel] thread safety"</a>
<li><strong>In reply to:</strong> <a href="0755.php">Samuel Thibault: "Re: [hwloc-devel] thread safety"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0757.php">Samuel Thibault: "Re: [hwloc-devel] thread safety"</a>
<li><strong>Reply:</strong> <a href="0757.php">Samuel Thibault: "Re: [hwloc-devel] thread safety"</a>
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
