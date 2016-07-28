<?
$subject_val = "Re: [hwloc-devel] last API possible changes";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 21 08:22:11 2009" -->
<!-- isoreceived="20090921122211" -->
<!-- sent="Mon, 21 Sep 2009 08:22:06 -0400" -->
<!-- isosent="20090921122206" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] last API possible changes" -->
<!-- id="4E80A2BD-FD66-4370-8A72-5581435B859B_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20090920221207.GV7131_at_const.famille.thibault.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] last API possible changes<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-21 08:22:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0055.php">Samuel Thibault: "Re: [hwloc-devel] last API possible changes"</a>
<li><strong>Previous message:</strong> <a href="0053.php">Samuel Thibault: "Re: [hwloc-devel] last API possible changes"</a>
<li><strong>In reply to:</strong> <a href="0053.php">Samuel Thibault: "Re: [hwloc-devel] last API possible changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0055.php">Samuel Thibault: "Re: [hwloc-devel] last API possible changes"</a>
<li><strong>Reply:</strong> <a href="0055.php">Samuel Thibault: "Re: [hwloc-devel] last API possible changes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 20, 2009, at 6:12 PM, Samuel Thibault wrote:
<br>
<p><span class="quotelev2">&gt; &gt; Also, we have __hwloc_restrict everywhere in the public API, but  
</span><br>
<span class="quotelev1">&gt; also in
</span><br>
<span class="quotelev2">&gt; &gt; the manpages? Should we convert the latter into a regular &quot;restrict&quot;
</span><br>
<span class="quotelev2">&gt; &gt; keyword ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I had tried before already through the .cfg and that didn't work.   
</span><br>
<span class="quotelev1">&gt; Since
</span><br>
<span class="quotelev1">&gt; we now have our own Makefile rules, I've just added a sed call, which
</span><br>
<span class="quotelev1">&gt; also does the same for inline btw.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>FWIW, is there a reason we're not using AC_C_RESTRICT in  
<br>
configure.ac?  This allows you to use &quot;restrict&quot; in C code everywhere;  
<br>
it'll be #defined to something acceptable by the compiler if  
<br>
&quot;restrict&quot; itself is not.
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
<li><strong>Next message:</strong> <a href="0055.php">Samuel Thibault: "Re: [hwloc-devel] last API possible changes"</a>
<li><strong>Previous message:</strong> <a href="0053.php">Samuel Thibault: "Re: [hwloc-devel] last API possible changes"</a>
<li><strong>In reply to:</strong> <a href="0053.php">Samuel Thibault: "Re: [hwloc-devel] last API possible changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0055.php">Samuel Thibault: "Re: [hwloc-devel] last API possible changes"</a>
<li><strong>Reply:</strong> <a href="0055.php">Samuel Thibault: "Re: [hwloc-devel] last API possible changes"</a>
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
