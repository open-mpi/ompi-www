<?
$subject_val = "Re: [hwloc-devel] thread safety";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 12 10:51:08 2010" -->
<!-- isoreceived="20100312155108" -->
<!-- sent="Fri, 12 Mar 2010 16:51:03 +0100" -->
<!-- isosent="20100312155103" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] thread safety" -->
<!-- id="20100312155103.GV5044_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="B964A3D0-7742-49F2-B270-800DD2E7EAC6_at_cisco.com" -->
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
<strong>Date:</strong> 2010-03-12 10:51:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0752.php">Jeff Squyres: "Re: [hwloc-devel] thread safety"</a>
<li><strong>Previous message:</strong> <a href="0750.php">Jeff Squyres: "Re: [hwloc-devel] thread safety"</a>
<li><strong>In reply to:</strong> <a href="0750.php">Jeff Squyres: "Re: [hwloc-devel] thread safety"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0752.php">Jeff Squyres: "Re: [hwloc-devel] thread safety"</a>
<li><strong>Reply:</strong> <a href="0752.php">Jeff Squyres: "Re: [hwloc-devel] thread safety"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres, le Fri 12 Mar 2010 07:35:44 -0800, a &#233;crit :
<br>
<span class="quotelev1">&gt; On Mar 11, 2010, at 10:12 PM, Brice Goglin wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I guess we a thread-safety section in hwloc.doxy to document that all
</span><br>
<span class="quotelev2">&gt; &gt; topology modifiers (most of hwloc_topology_* functions, not all of them)
</span><br>
<span class="quotelev2">&gt; &gt; cannot run concurrently.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To support that, do we need to make internal variables and fields be volatile?
</span><br>
<p>?! I fail to see why we would need that.
<br>
If some threads uses a function that modifies a topology object, no
<br>
other thread should be reading it of course, since the reader will
<br>
possibly read incoherent data. A volatile qualifier can not fix that,
<br>
only mutexes (or transactional memory :) ) can.
<br>
<p><span class="quotelev1">&gt; If we say that applications need to provide their own synchronization
</span><br>
<span class="quotelev1">&gt; between readers and writers, atomic writes shouldn't be an issue,
</span><br>
<span class="quotelev1">&gt; right?
</span><br>
<p>I do not understand this either.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0752.php">Jeff Squyres: "Re: [hwloc-devel] thread safety"</a>
<li><strong>Previous message:</strong> <a href="0750.php">Jeff Squyres: "Re: [hwloc-devel] thread safety"</a>
<li><strong>In reply to:</strong> <a href="0750.php">Jeff Squyres: "Re: [hwloc-devel] thread safety"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0752.php">Jeff Squyres: "Re: [hwloc-devel] thread safety"</a>
<li><strong>Reply:</strong> <a href="0752.php">Jeff Squyres: "Re: [hwloc-devel] thread safety"</a>
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
