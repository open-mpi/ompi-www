<?
$subject_val = "Re: [hwloc-devel] -lhwloc in components.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  5 11:25:06 2012" -->
<!-- isoreceived="20120905152506" -->
<!-- sent="Wed, 5 Sep 2012 17:25:01 +0200" -->
<!-- isosent="20120905152501" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] -lhwloc in components." -->
<!-- id="20120905152501.GD14606_at_type.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="AC11502E-388B-4634-946E-6B64B60DDA00_at_cisco.com" -->
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
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-05 11:25:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3256.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<li><strong>Previous message:</strong> <a href="3254.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<li><strong>In reply to:</strong> <a href="3251.php">Jeff Squyres: "Re: [hwloc-devel] -lhwloc in components."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3258.php">Jeff Squyres: "Re: [hwloc-devel] -lhwloc in components."</a>
<li><strong>Reply:</strong> <a href="3258.php">Jeff Squyres: "Re: [hwloc-devel] -lhwloc in components."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres, le Wed 05 Sep 2012 17:13:56 +0200, a &#233;crit :
<br>
<span class="quotelev2">&gt; &gt; The source code shouldn't need to be modified:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; #define hwloc_foo_bar(arg1, arg2) hwloc_funcs-&gt;foo_bar(arg1, arg2)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You need to make sure that #define is only effected in certain places in the code.
</span><br>
<p>Well, all the places that will constitute a plugin, no?
<br>
<p><span class="quotelev1">&gt; And you need to ensure that hwloc_funcs-&gt;[foo] isn't attempted to be used before it has been filled in.
</span><br>
<p>As I said in my earlier mail, hwloc_funcs would be provided by the
<br>
loader of the plugin, so it can make sure it's filled in (I forgot to
<br>
mention that what I call hwloc_funcs above is an internal variable of
<br>
the plugin, not a symbol provided by libhwloc.so).
<br>
<p><span class="quotelev1">&gt; And unless there is a very fixed set of functions that can be called by plugins,
</span><br>
<p>Well, I believe we'll have to have that anyway. That was part of the
<br>
whole discussion about plugins a long time ago.
<br>
<p><span class="quotelev1">&gt; you'll probably need to grow hwloc_funcs over time, which may lead to ABI issues...?
</span><br>
<p>Sure.  We can for instance make the plugin check for the size of
<br>
hwloc_funcs provided by the plugin loader vs the size that it was
<br>
compiled against, and thus refuse to get loaded by an older hwloc.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3256.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<li><strong>Previous message:</strong> <a href="3254.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<li><strong>In reply to:</strong> <a href="3251.php">Jeff Squyres: "Re: [hwloc-devel] -lhwloc in components."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3258.php">Jeff Squyres: "Re: [hwloc-devel] -lhwloc in components."</a>
<li><strong>Reply:</strong> <a href="3258.php">Jeff Squyres: "Re: [hwloc-devel] -lhwloc in components."</a>
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
