<?
$subject_val = "Re: [hwloc-devel] API, and make distcheck failure";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 15 16:06:05 2009" -->
<!-- isoreceived="20090915200605" -->
<!-- sent="Tue, 15 Sep 2009 16:05:59 -0400" -->
<!-- isosent="20090915200559" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] API, and make distcheck failure" -->
<!-- id="D6B5C7D2-8AE2-411D-91C9-AB775950B0B9_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4AAF2F35.7060001_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] API, and make distcheck failure<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-15 16:05:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0045.php">Brice Goglin: "Re: [hwloc-devel] API, and make distcheck failure"</a>
<li><strong>Previous message:</strong> <a href="0043.php">Brice Goglin: "[hwloc-devel] API, and make distcheck failure"</a>
<li><strong>In reply to:</strong> <a href="0043.php">Brice Goglin: "[hwloc-devel] API, and make distcheck failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0045.php">Brice Goglin: "Re: [hwloc-devel] API, and make distcheck failure"</a>
<li><strong>Reply:</strong> <a href="0045.php">Brice Goglin: "Re: [hwloc-devel] API, and make distcheck failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 15, 2009, at 2:07 AM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; I just gave a deep look and fixed several minor things in the API. The
</span><br>
<span class="quotelev1">&gt; biggest thing I am not sure about is:
</span><br>
<span class="quotelev1">&gt; We currently have several functions that may find something by type or
</span><br>
<span class="quotelev1">&gt; by depth (for instance the number of objects, the n-th one, the next
</span><br>
<span class="quotelev1">&gt; one, ...). These functions are currently named
</span><br>
<span class="quotelev1">&gt; &quot;hwloc_get_foo_by_depth(..., depth)&quot; if looking by depth and
</span><br>
<span class="quotelev1">&gt; &quot;hwloc_get_foo(..., type)&quot; if by type. The latter may fail if there  
</span><br>
<span class="quotelev1">&gt; are
</span><br>
<span class="quotelev1">&gt; multiple levels with same types (e.g. Caches), the former always work
</span><br>
<span class="quotelev1">&gt; (unless depth is invalid). Should we keep these function name patterns
</span><br>
<span class="quotelev1">&gt; or change them to something else? like _by_depth/_by_type or
</span><br>
<span class="quotelev1">&gt; &lt;nothing&gt;/_by_type?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I prefer being explicit -- so _by_type / _by_depth.  My $0.02.
<br>
<p><span class="quotelev1">&gt; Also, make distcheck currently fails here. It looks for index.html
</span><br>
<span class="quotelev1">&gt; inside the build dir while it should look inside the source dir.
</span><br>
<span class="quotelev1">&gt; However, it seems that it correctly looks inside the source dir when
</span><br>
<span class="quotelev1">&gt; building outside of make distcheck. Don't know what's going on...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I'm unable to recreate this.  Can you give me a recipe to recreate  
<br>
this problem?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0045.php">Brice Goglin: "Re: [hwloc-devel] API, and make distcheck failure"</a>
<li><strong>Previous message:</strong> <a href="0043.php">Brice Goglin: "[hwloc-devel] API, and make distcheck failure"</a>
<li><strong>In reply to:</strong> <a href="0043.php">Brice Goglin: "[hwloc-devel] API, and make distcheck failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0045.php">Brice Goglin: "Re: [hwloc-devel] API, and make distcheck failure"</a>
<li><strong>Reply:</strong> <a href="0045.php">Brice Goglin: "Re: [hwloc-devel] API, and make distcheck failure"</a>
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
