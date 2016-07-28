<?
$subject_val = "Re: [hwloc-devel] roadmap";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 28 02:30:57 2010" -->
<!-- isoreceived="20100928063057" -->
<!-- sent="Tue, 28 Sep 2010 08:30:50 +0200" -->
<!-- isosent="20100928063050" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] roadmap" -->
<!-- id="4CA18B9A.30705_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1AC5669F-2C4F-4B65-8844-FBB581D4F15B_at_cisco.com" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-28 02:30:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1349.php">Ashley Pittman: "Re: [hwloc-devel] tarball growing"</a>
<li><strong>Previous message:</strong> <a href="1347.php">Brice Goglin: "[hwloc-devel] tarball growing"</a>
<li><strong>In reply to:</strong> <a href="1344.php">Jeff Squyres: "Re: [hwloc-devel] roadmap"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1351.php">Samuel Thibault: "Re: [hwloc-devel] roadmap"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The bitmap branch looks good to me. There might still be some
<br>
documentation/comments to update, but nothing big. Given how intrusive
<br>
this branch is, I'd rather merge it early instead of fixing conflicts in
<br>
other branches for a long time :)
<br>
<p>What I need first is somebody to check my pragma at the end of src/cpuset.c
<br>
<a href="https://svn.open-mpi.org/trac/hwloc/browser/branches/bitmap/src/cpuset.c">https://svn.open-mpi.org/trac/hwloc/browser/branches/bitmap/src/cpuset.c</a>
<br>
<p>Brice
<br>
<p><p><p><p>Le 24/09/2010 14:35, Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; Sounds good.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 24, 2010, at 7:30 AM, Brice Goglin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Here's a proposal for the new renamed cpuset API. Non trivial changes
</span><br>
<span class="quotelev2">&gt;&gt; include:
</span><br>
<span class="quotelev2">&gt;&gt; hwloc_cpuset_from_string -&gt; hwloc_bitmap_sscanf
</span><br>
<span class="quotelev2">&gt;&gt; hwloc_cpuset_cpu -&gt; hwloc_bitmap_setonly
</span><br>
<span class="quotelev2">&gt;&gt; hwloc_bitmap_all_but_cpu -&gt; hwloc_bitmap_allbut
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My plan would be to:
</span><br>
<span class="quotelev2">&gt;&gt; * commit the attached file as hwloc/bitmap.h
</span><br>
<span class="quotelev2">&gt;&gt; * drop everything from hwloc/cpuset.h, add a big deprecation warning in
</span><br>
<span class="quotelev2">&gt;&gt; the header, make it include bitmap.h, and add typedef/#define for API
</span><br>
<span class="quotelev2">&gt;&gt; backward compat
</span><br>
<span class="quotelev2">&gt;&gt; * port all the internals to the new API
</span><br>
<span class="quotelev2">&gt;&gt; * only #include bitmap.h internally
</span><br>
<span class="quotelev2">&gt;&gt; * add ABI aliases at the end of src/cpuset.c (don't know if it's worth
</span><br>
<span class="quotelev2">&gt;&gt; renaming this file)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; By the way, what's the proper way to do the latter?
</span><br>
<span class="quotelev2">&gt;&gt; #pragma weak hwloc_cpuset_foo = hwloc_bitmap_foo ?
</span><br>
<span class="quotelev2">&gt;&gt; use __hwloc_attribute_alias instead ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brice
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;cpuset.h&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1349.php">Ashley Pittman: "Re: [hwloc-devel] tarball growing"</a>
<li><strong>Previous message:</strong> <a href="1347.php">Brice Goglin: "[hwloc-devel] tarball growing"</a>
<li><strong>In reply to:</strong> <a href="1344.php">Jeff Squyres: "Re: [hwloc-devel] roadmap"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1351.php">Samuel Thibault: "Re: [hwloc-devel] roadmap"</a>
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
