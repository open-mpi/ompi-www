<?
$subject_val = "Re: [hwloc-devel] v0.9 branch";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 21 15:57:55 2009" -->
<!-- isoreceived="20091021195755" -->
<!-- sent="Wed, 21 Oct 2009 15:57:50 -0400" -->
<!-- isosent="20091021195750" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] v0.9 branch" -->
<!-- id="C99EBCFE-A7A6-45CD-A83F-60F44F982F73_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4ADF644B.3050809_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] v0.9 branch<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-21 15:57:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0225.php">Brice Goglin: "Re: [hwloc-devel] v0.9 branch"</a>
<li><strong>Previous message:</strong> <a href="0223.php">Brice Goglin: "Re: [hwloc-devel] v0.9 branch"</a>
<li><strong>In reply to:</strong> <a href="0223.php">Brice Goglin: "Re: [hwloc-devel] v0.9 branch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0225.php">Brice Goglin: "Re: [hwloc-devel] v0.9 branch"</a>
<li><strong>Reply:</strong> <a href="0225.php">Brice Goglin: "Re: [hwloc-devel] v0.9 branch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 21, 2009, at 3:43 PM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; Now that I try to implement it, I remember why an inline is  
</span><br>
<span class="quotelev1">&gt; convenient:
</span><br>
<span class="quotelev1">&gt; it doesn't require any build-time/run-time dependency unless you  
</span><br>
<span class="quotelev1">&gt; really
</span><br>
<span class="quotelev1">&gt; use it. If we make this code non-inline, we actually need libibverbs  
</span><br>
<span class="quotelev1">&gt; at
</span><br>
<span class="quotelev1">&gt; build time and runtime. Distro packages will have to depend on
</span><br>
<span class="quotelev1">&gt; libibverbs, and we'll get lots of complaints. Same for linux-libnuma.h
</span><br>
<span class="quotelev1">&gt; and maybe nvidia cuda one day :) So we'll probably end up splitting  
</span><br>
<span class="quotelev1">&gt; this
</span><br>
<span class="quotelev1">&gt; code out of libhwloc.so and make a libhwloc-openfabrics-verbs.so.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Ah, good reason.  Let's leave it as inline for 0.9.1, then.  But we do  
<br>
need to fix the topology parameter, sorry.  :-(
<br>
<p>Should we make a dlopen-like functionality for this kind of stuff for  
<br>
v1.0?  It's not hard to do with libltdl.
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
<li><strong>Next message:</strong> <a href="0225.php">Brice Goglin: "Re: [hwloc-devel] v0.9 branch"</a>
<li><strong>Previous message:</strong> <a href="0223.php">Brice Goglin: "Re: [hwloc-devel] v0.9 branch"</a>
<li><strong>In reply to:</strong> <a href="0223.php">Brice Goglin: "Re: [hwloc-devel] v0.9 branch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0225.php">Brice Goglin: "Re: [hwloc-devel] v0.9 branch"</a>
<li><strong>Reply:</strong> <a href="0225.php">Brice Goglin: "Re: [hwloc-devel] v0.9 branch"</a>
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
