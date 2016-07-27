<?
$subject_val = "Re: [hwloc-devel] thread safety";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 12 03:01:34 2010" -->
<!-- isoreceived="20100312080134" -->
<!-- sent="Fri, 12 Mar 2010 09:01:28 +0100" -->
<!-- isosent="20100312080128" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] thread safety" -->
<!-- id="20100312080128.GC5044_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="21AB62D5-6D16-4594-BED6-187D85A40124_at_cisco.com" -->
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
<strong>Date:</strong> 2010-03-12 03:01:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0748.php">Brice Goglin: "Re: [hwloc-devel] [PATCH 2/2] Provide hwloc_cpuset_next() and use it in	hwloc_cpuset_foreach"</a>
<li><strong>Previous message:</strong> <a href="0746.php">Bert Wesarg: "Re: [hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mounts lines"</a>
<li><strong>In reply to:</strong> <a href="0742.php">Jeff Squyres: "[hwloc-devel] thread safety"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0749.php">Jeff Squyres: "Re: [hwloc-devel] thread safety"</a>
<li><strong>Reply:</strong> <a href="0749.php">Jeff Squyres: "Re: [hwloc-devel] thread safety"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Jeff Squyres, le Thu 11 Mar 2010 17:34:59 -0800, a &#233;crit :
<br>
<span class="quotelev1">&gt; On Mar 11, 2010, at 3:57 PM, Samuel Thibault wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; What *is* hwloc's policy about thread safety, anyway?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; It would be odd to not be threadsafe, considering the target
</span><br>
<span class="quotelev2">&gt; &gt; applications :) and I believe hwloc is already.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hmm.  I'm not so sure.  Consider:
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
<span class="quotelev1">&gt; 5. thread A calls hwloc_topology_load(a)
</span><br>
<p>Well, yes, of course :)
<br>
<p>I mean &quot;thread-safe&quot; like libc is thread-safe: if you call functions
<br>
that modify a buffer concurrently, you're hosed :) But all the reading
<br>
functions, or working on separate topology objects are fine to run in
<br>
parallel.
<br>
<p><span class="quotelev1">&gt; It depends on exactly what you mean by &quot;thread safe&quot; (kinda like MPI's 4 different levels of thread support).
</span><br>
<p>It's between THREAD_MULTIPLE (for read operations) and THREAD_SERIALIZE
<br>
(for write operations on the same object).
<br>
<p>That being said, we could easily add a mutex which we take in write
<br>
operations to become completely THREAD_MULTIPLE-safe, as there aren't so
<br>
many write operations.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0748.php">Brice Goglin: "Re: [hwloc-devel] [PATCH 2/2] Provide hwloc_cpuset_next() and use it in	hwloc_cpuset_foreach"</a>
<li><strong>Previous message:</strong> <a href="0746.php">Bert Wesarg: "Re: [hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mounts lines"</a>
<li><strong>In reply to:</strong> <a href="0742.php">Jeff Squyres: "[hwloc-devel] thread safety"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0749.php">Jeff Squyres: "Re: [hwloc-devel] thread safety"</a>
<li><strong>Reply:</strong> <a href="0749.php">Jeff Squyres: "Re: [hwloc-devel] thread safety"</a>
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
