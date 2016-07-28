<?
$subject_val = "Re: [hwloc-devel] thread safety";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 12 11:45:45 2010" -->
<!-- isoreceived="20100312164545" -->
<!-- sent="Fri, 12 Mar 2010 17:45:40 +0100" -->
<!-- isosent="20100312164540" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] thread safety" -->
<!-- id="20100312164540.GB5044_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="E417E5E0-E0B2-4474-9F74-BB6BEFAAB1F6_at_cisco.com" -->
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
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-12 11:45:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0758.php">Jeff Squyres: "Re: [hwloc-devel] thread safety"</a>
<li><strong>Previous message:</strong> <a href="0756.php">Jeff Squyres: "Re: [hwloc-devel] thread safety"</a>
<li><strong>In reply to:</strong> <a href="0756.php">Jeff Squyres: "Re: [hwloc-devel] thread safety"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0758.php">Jeff Squyres: "Re: [hwloc-devel] thread safety"</a>
<li><strong>Reply:</strong> <a href="0758.php">Jeff Squyres: "Re: [hwloc-devel] thread safety"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres, le Fri 12 Mar 2010 08:38:48 -0800, a &#233;crit :
<br>
<span class="quotelev1">&gt; On Mar 12, 2010, at 8:31 AM, Samuel Thibault wrote:
</span><br>
<span class="quotelev2">&gt; &gt; No, because that will not automatically issue hardware memory barriers,
</span><br>
<span class="quotelev2">&gt; &gt; which are needed on basically all architectures but x86 (which has
</span><br>
<span class="quotelev2">&gt; &gt; in-order stores) to ensure seeing writes coherently.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ok, fine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not understanding how this conversation corresponds to one of your prior statements on this thread that you thought hwloc was already thread safe.
</span><br>
<p>It is as thread safe as libc usually is, i.e. it does not have any
<br>
global state, everything is held in the hwloc_topology_t structures, and
<br>
if you work on the same structure in separate threads, unless it is just
<br>
reading there can be issues.
<br>
<p><span class="quotelev1">&gt; The discussion we've had sounds like it's somewhat equivalent to MPI_THREAD_SERIALIZED -- you can do whatever you want as long as you ensure a) there's only writer 1 thread to a given object at a time, and b) the app is responsible for all synchronization and memory consistency.
</span><br>
<p>Yes, except that the structure can also be read concurrently, provided
<br>
that you properly synchronize passing the structure to other threads.
<br>
<p>Just like how e.g. libc's gettimeofday() does.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0758.php">Jeff Squyres: "Re: [hwloc-devel] thread safety"</a>
<li><strong>Previous message:</strong> <a href="0756.php">Jeff Squyres: "Re: [hwloc-devel] thread safety"</a>
<li><strong>In reply to:</strong> <a href="0756.php">Jeff Squyres: "Re: [hwloc-devel] thread safety"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0758.php">Jeff Squyres: "Re: [hwloc-devel] thread safety"</a>
<li><strong>Reply:</strong> <a href="0758.php">Jeff Squyres: "Re: [hwloc-devel] thread safety"</a>
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
