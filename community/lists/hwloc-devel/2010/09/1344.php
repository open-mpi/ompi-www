<?
$subject_val = "Re: [hwloc-devel] roadmap";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 24 08:35:43 2010" -->
<!-- isoreceived="20100924123543" -->
<!-- sent="Fri, 24 Sep 2010 08:35:35 -0400" -->
<!-- isosent="20100924123535" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] roadmap" -->
<!-- id="1AC5669F-2C4F-4B65-8844-FBB581D4F15B_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4C9C8BD2.4020900_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] roadmap<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-24 08:35:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1345.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2493)"</a>
<li><strong>Previous message:</strong> <a href="1343.php">Brice Goglin: "Re: [hwloc-devel] roadmap"</a>
<li><strong>In reply to:</strong> <a href="1343.php">Brice Goglin: "Re: [hwloc-devel] roadmap"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1348.php">Brice Goglin: "Re: [hwloc-devel] roadmap"</a>
<li><strong>Reply:</strong> <a href="1348.php">Brice Goglin: "Re: [hwloc-devel] roadmap"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sounds good.
<br>
<p>On Sep 24, 2010, at 7:30 AM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; Here's a proposal for the new renamed cpuset API. Non trivial changes
</span><br>
<span class="quotelev1">&gt; include:
</span><br>
<span class="quotelev1">&gt; hwloc_cpuset_from_string -&gt; hwloc_bitmap_sscanf
</span><br>
<span class="quotelev1">&gt; hwloc_cpuset_cpu -&gt; hwloc_bitmap_setonly
</span><br>
<span class="quotelev1">&gt; hwloc_bitmap_all_but_cpu -&gt; hwloc_bitmap_allbut
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My plan would be to:
</span><br>
<span class="quotelev1">&gt; * commit the attached file as hwloc/bitmap.h
</span><br>
<span class="quotelev1">&gt; * drop everything from hwloc/cpuset.h, add a big deprecation warning in
</span><br>
<span class="quotelev1">&gt; the header, make it include bitmap.h, and add typedef/#define for API
</span><br>
<span class="quotelev1">&gt; backward compat
</span><br>
<span class="quotelev1">&gt; * port all the internals to the new API
</span><br>
<span class="quotelev1">&gt; * only #include bitmap.h internally
</span><br>
<span class="quotelev1">&gt; * add ABI aliases at the end of src/cpuset.c (don't know if it's worth
</span><br>
<span class="quotelev1">&gt; renaming this file)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; By the way, what's the proper way to do the latter?
</span><br>
<span class="quotelev1">&gt; #pragma weak hwloc_cpuset_foo = hwloc_bitmap_foo ?
</span><br>
<span class="quotelev1">&gt; use __hwloc_attribute_alias instead ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;cpuset.h&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<p><p><pre>
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
<li><strong>Next message:</strong> <a href="1345.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2493)"</a>
<li><strong>Previous message:</strong> <a href="1343.php">Brice Goglin: "Re: [hwloc-devel] roadmap"</a>
<li><strong>In reply to:</strong> <a href="1343.php">Brice Goglin: "Re: [hwloc-devel] roadmap"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1348.php">Brice Goglin: "Re: [hwloc-devel] roadmap"</a>
<li><strong>Reply:</strong> <a href="1348.php">Brice Goglin: "Re: [hwloc-devel] roadmap"</a>
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
