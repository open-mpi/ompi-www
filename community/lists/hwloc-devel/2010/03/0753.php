<?
$subject_val = "Re: [hwloc-devel] thread safety";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 12 11:16:28 2010" -->
<!-- isoreceived="20100312161628" -->
<!-- sent="Fri, 12 Mar 2010 17:16:23 +0100" -->
<!-- isosent="20100312161623" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] thread safety" -->
<!-- id="20100312161623.GW5044_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="DAC8B978-A7D9-4A5C-8018-BF277057A182_at_cisco.com" -->
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
<strong>Date:</strong> 2010-03-12 11:16:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0754.php">Jeff Squyres: "Re: [hwloc-devel] thread safety"</a>
<li><strong>Previous message:</strong> <a href="0752.php">Jeff Squyres: "Re: [hwloc-devel] thread safety"</a>
<li><strong>In reply to:</strong> <a href="0752.php">Jeff Squyres: "Re: [hwloc-devel] thread safety"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0754.php">Jeff Squyres: "Re: [hwloc-devel] thread safety"</a>
<li><strong>Reply:</strong> <a href="0754.php">Jeff Squyres: "Re: [hwloc-devel] thread safety"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres, le Fri 12 Mar 2010 08:05:04 -0800, a &#233;crit :
<br>
<span class="quotelev1">&gt; On Mar 12, 2010, at 7:51 AM, Samuel Thibault wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; To support that, do we need to make internal variables and fields be volatile?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ?! I fail to see why we would need that.
</span><br>
<span class="quotelev2">&gt; &gt; If some threads uses a function that modifies a topology object, no
</span><br>
<span class="quotelev2">&gt; &gt; other thread should be reading it of course, since the reader will
</span><br>
<span class="quotelev2">&gt; &gt; possibly read incoherent data. A volatile qualifier can not fix that,
</span><br>
<span class="quotelev2">&gt; &gt; only mutexes (or transactional memory :) ) can.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Right -- that's not what I'm asking about.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Even in this scenario:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. thread A calls hwloc_topology_init(&amp;a)
</span><br>
<span class="quotelev1">&gt; 2. thread A calls hwloc_topology_load(a)
</span><br>
<span class="quotelev1">&gt; 3. thread A launches thread B
</span><br>
<span class="quotelev1">&gt; 4. thread B calls hwloc_topology_get_*(a...)
</span><br>
<span class="quotelev1">&gt; 5. threads A and B synchronize
</span><br>
<span class="quotelev1">&gt; 6. thread A calls hwloc_topology_load(a)
</span><br>
<span class="quotelev1">&gt; 7. thread B calls hwloc_topology_get_*(a...)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If the topology struct is not marked volatile (or the fields or whatever), then the compiler *might* assume that all the data in cache/registers from step 4 may still be valid in step 7.
</span><br>
<p>This is like with any libc structure that you pass between threads. If
<br>
step 5 (synchronization) does not perform a compiler and hardware
<br>
barrier, you may have incoherencies, yes.
<br>
<p><span class="quotelev1">&gt; volatile effectively forces cache misses so that step 7 will guarantee to read from memory again,
</span><br>
<p>That is not the proper way to deal with it. A full memory barrier at
<br>
step 5 is just enough and much more efficient.
<br>
<p><span class="quotelev3">&gt; &gt; &gt; If we say that applications need to provide their own synchronization
</span><br>
<span class="quotelev3">&gt; &gt; &gt; between readers and writers, atomic writes shouldn't be an issue,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; right?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I do not understand this either.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Since writes back to memory may be delayed, it could be possible that a write of a value in a topology struct only gets partially written before a read for that same value comes in from another thread (even if the threads *think* they have synchronized, such as above).
</span><br>
<p>Ok, same answer: use a memory barrier in the application (semaphores,
<br>
mutexes and spinlocks already do that for you actually).
<br>
<p><span class="quotelev1">&gt; If we say that applications need to provide their own synchronization
</span><br>
<span class="quotelev1">&gt; between readers and writers, atomic writes **could still** be an issue,
</span><br>
<span class="quotelev1">&gt; right?
</span><br>
<p>With a full memory barrier, you do not have any issue.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0754.php">Jeff Squyres: "Re: [hwloc-devel] thread safety"</a>
<li><strong>Previous message:</strong> <a href="0752.php">Jeff Squyres: "Re: [hwloc-devel] thread safety"</a>
<li><strong>In reply to:</strong> <a href="0752.php">Jeff Squyres: "Re: [hwloc-devel] thread safety"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0754.php">Jeff Squyres: "Re: [hwloc-devel] thread safety"</a>
<li><strong>Reply:</strong> <a href="0754.php">Jeff Squyres: "Re: [hwloc-devel] thread safety"</a>
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
