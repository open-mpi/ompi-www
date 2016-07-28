<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1330";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 12 11:24:12 2009" -->
<!-- isoreceived="20091112162412" -->
<!-- sent="Thu, 12 Nov 2009 08:24:07 -0800" -->
<!-- isosent="20091112162407" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1330" -->
<!-- id="2B5EB5F9-23B5-4C30-AC44-88DD49DC9A71_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20091111212913.GV4729_at_const.famille.thibault.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1330<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-12 11:24:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0370.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333"</a>
<li><strong>Previous message:</strong> <a href="0368.php">Samuel Thibault: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<li><strong>In reply to:</strong> <a href="0358.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1330"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 11, 2009, at 1:29 PM, Samuel Thibault wrote:
<br>
<p><span class="quotelev2">&gt; &gt; How about HWLOC_UNSUPPORTED_SYS?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't think it's a good idea to make it a compile-time thing rather
</span><br>
<span class="quotelev1">&gt; than a runtime-time thing: if we expose to the application the fact
</span><br>
<span class="quotelev1">&gt; that the OS on which the application is building is not supported, it
</span><br>
<span class="quotelev1">&gt; may disable some parts of its internals, even if later a newer version
</span><br>
<span class="quotelev1">&gt; hwloc that does support the system gets installed, and then the user
</span><br>
<span class="quotelev1">&gt; would have to recompile its application in order to get the  
</span><br>
<span class="quotelev1">&gt; application
</span><br>
<span class="quotelev1">&gt; support compiled.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>I have no strong feelings about that one; dynamically updating .so's  
<br>
behind the scenes is both a curse and a blessing.
<br>
<p>My only objection was to having a name that was not prefixed by HWLOC_*.
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
<li><strong>Next message:</strong> <a href="0370.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333"</a>
<li><strong>Previous message:</strong> <a href="0368.php">Samuel Thibault: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<li><strong>In reply to:</strong> <a href="0358.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1330"</a>
<!-- nextthread="start" -->
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
