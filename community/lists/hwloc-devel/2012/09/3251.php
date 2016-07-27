<?
$subject_val = "Re: [hwloc-devel] -lhwloc in components.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  5 11:13:40 2012" -->
<!-- isoreceived="20120905151340" -->
<!-- sent="Wed, 5 Sep 2012 11:13:36 -0400" -->
<!-- isosent="20120905151336" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] -lhwloc in components." -->
<!-- id="AC11502E-388B-4634-946E-6B64B60DDA00_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20120905150829.GA14606_at_type.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] -lhwloc in components.<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-05 11:13:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3252.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<li><strong>Previous message:</strong> <a href="3250.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<li><strong>In reply to:</strong> <a href="3249.php">Samuel Thibault: "Re: [hwloc-devel] -lhwloc in components."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3255.php">Samuel Thibault: "Re: [hwloc-devel] -lhwloc in components."</a>
<li><strong>Reply:</strong> <a href="3255.php">Samuel Thibault: "Re: [hwloc-devel] -lhwloc in components."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 5, 2012, at 11:08 AM, Samuel Thibault wrote:
<br>
<p><span class="quotelev2">&gt;&gt; No.  It's not really an ltdl issue.  ltdl is just a portable wrapper around OS-specific dlopen-like mechanisms.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I understand that, but dlopen is usually used for plugins, and plugins
</span><br>
<span class="quotelev1">&gt; usually need such kind of calling back into what loaded the plugin.
</span><br>
<p>Sure.  It's really a matter of the linker scopes. 
<br>
<p>IIRC, in a somewhat-recent version of ltdl (I don't remember the version offhand -- perhaps somewhere in the 2.2 series?), they changed the default of lt_dlopen to start opening plugins in private scopes, not the global scope.  That's what has contributed to this hubaloo -- by default, plugins can no longer see the global scope, which is typically where the symbols are that they need to resolve (e.g., in the libhwloc.so that is linked in to lstopo).
<br>
<p><span class="quotelev3">&gt;&gt;&gt; One way would be to pass to the component a structure with all the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; useful function pointers (using #define to keep the same source code).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We thought about this in OMPI and decided it would be a nightmare in the source code.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The source code shouldn't need to be modified:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #define hwloc_foo_bar(arg1, arg2) hwloc_funcs-&gt;foo_bar(arg1, arg2)
</span><br>
<p><p>You need to make sure that #define is only effected in certain places in the code.  And you need to ensure that hwloc_funcs-&gt;[foo] isn't attempted to be used before it has been filled in.  And unless there is a very fixed set of functions that can be called by plugins, you'll probably need to grow hwloc_funcs over time, which may lead to ABI issues...?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3252.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<li><strong>Previous message:</strong> <a href="3250.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<li><strong>In reply to:</strong> <a href="3249.php">Samuel Thibault: "Re: [hwloc-devel] -lhwloc in components."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3255.php">Samuel Thibault: "Re: [hwloc-devel] -lhwloc in components."</a>
<li><strong>Reply:</strong> <a href="3255.php">Samuel Thibault: "Re: [hwloc-devel] -lhwloc in components."</a>
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
