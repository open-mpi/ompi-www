<?
$subject_val = "Re: [hwloc-devel] thread safety";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 12 11:05:09 2010" -->
<!-- isoreceived="20100312160509" -->
<!-- sent="Fri, 12 Mar 2010 08:05:04 -0800" -->
<!-- isosent="20100312160504" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] thread safety" -->
<!-- id="DAC8B978-A7D9-4A5C-8018-BF277057A182_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20100312155103.GV5044_at_const.bordeaux.inria.fr" -->
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
<strong>Date:</strong> 2010-03-12 11:05:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0753.php">Samuel Thibault: "Re: [hwloc-devel] thread safety"</a>
<li><strong>Previous message:</strong> <a href="0751.php">Samuel Thibault: "Re: [hwloc-devel] thread safety"</a>
<li><strong>In reply to:</strong> <a href="0751.php">Samuel Thibault: "Re: [hwloc-devel] thread safety"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0753.php">Samuel Thibault: "Re: [hwloc-devel] thread safety"</a>
<li><strong>Reply:</strong> <a href="0753.php">Samuel Thibault: "Re: [hwloc-devel] thread safety"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 12, 2010, at 7:51 AM, Samuel Thibault wrote:
<br>
<p><span class="quotelev2">&gt; &gt; To support that, do we need to make internal variables and fields be volatile?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ?! I fail to see why we would need that.
</span><br>
<span class="quotelev1">&gt; If some threads uses a function that modifies a topology object, no
</span><br>
<span class="quotelev1">&gt; other thread should be reading it of course, since the reader will
</span><br>
<span class="quotelev1">&gt; possibly read incoherent data. A volatile qualifier can not fix that,
</span><br>
<span class="quotelev1">&gt; only mutexes (or transactional memory :) ) can.
</span><br>
<p>Right -- that's not what I'm asking about.
<br>
<p>Even in this scenario:
<br>
<p>1. thread A calls hwloc_topology_init(&amp;a)
<br>
2. thread A calls hwloc_topology_load(a)
<br>
3. thread A launches thread B
<br>
4. thread B calls hwloc_topology_get_*(a...)
<br>
5. threads A and B synchronize
<br>
6. thread A calls hwloc_topology_load(a)
<br>
7. thread B calls hwloc_topology_get_*(a...)
<br>
<p>If the topology struct is not marked volatile (or the fields or whatever), then the compiler *might* assume that all the data in cache/registers from step 4 may still be valid in step 7.
<br>
<p>volatile effectively forces cache misses so that step 7 will guarantee to read from memory again, rather than relying on the compiler's optimizer to know that the data that may still be in registers from step 4 is actually (potentially) invalid.
<br>
<p><span class="quotelev2">&gt; &gt; If we say that applications need to provide their own synchronization
</span><br>
<span class="quotelev2">&gt; &gt; between readers and writers, atomic writes shouldn't be an issue,
</span><br>
<span class="quotelev2">&gt; &gt; right?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I do not understand this either.
</span><br>
<p>Since writes back to memory may be delayed, it could be possible that a write of a value in a topology struct only gets partially written before a read for that same value comes in from another thread (even if the threads *think* they have synchronized, such as above).  Hence, thread A may have written 2 bytes of a 4 byte value when thread B actually reads it.  The value that B gets could then possibly be gibberish (these are the worst kinds of bugs to try and find -- IBM is rooting out some of these in Open MPI right now, for example :-( ).
<br>
<p>And actually, my first mail came out opposite of what I wanted to say (cut-n-paste error).  I meant to say:
<br>
<p>If we say that applications need to provide their own synchronization
<br>
between readers and writers, atomic writes **could still** be an issue,
<br>
right?
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
<li><strong>Next message:</strong> <a href="0753.php">Samuel Thibault: "Re: [hwloc-devel] thread safety"</a>
<li><strong>Previous message:</strong> <a href="0751.php">Samuel Thibault: "Re: [hwloc-devel] thread safety"</a>
<li><strong>In reply to:</strong> <a href="0751.php">Samuel Thibault: "Re: [hwloc-devel] thread safety"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0753.php">Samuel Thibault: "Re: [hwloc-devel] thread safety"</a>
<li><strong>Reply:</strong> <a href="0753.php">Samuel Thibault: "Re: [hwloc-devel] thread safety"</a>
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
