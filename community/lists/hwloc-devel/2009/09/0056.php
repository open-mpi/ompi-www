<?
$subject_val = "Re: [hwloc-devel] last API possible changes";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 21 08:51:40 2009" -->
<!-- isoreceived="20090921125140" -->
<!-- sent="Mon, 21 Sep 2009 08:51:35 -0400" -->
<!-- isosent="20090921125135" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] last API possible changes" -->
<!-- id="758B1EB5-706A-4376-9809-9B15F504688C_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20090921124418.GL5753_at_const.bordeaux.inria.fr" -->
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
<strong>Date:</strong> 2009-09-21 08:51:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0057.php">Samuel Thibault: "Re: [hwloc-devel] last API possible changes"</a>
<li><strong>Previous message:</strong> <a href="0055.php">Samuel Thibault: "Re: [hwloc-devel] last API possible changes"</a>
<li><strong>In reply to:</strong> <a href="0055.php">Samuel Thibault: "Re: [hwloc-devel] last API possible changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0057.php">Samuel Thibault: "Re: [hwloc-devel] last API possible changes"</a>
<li><strong>Reply:</strong> <a href="0057.php">Samuel Thibault: "Re: [hwloc-devel] last API possible changes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 21, 2009, at 8:44 AM, Samuel Thibault wrote:
<br>
<p><span class="quotelev2">&gt; &gt; FWIW, is there a reason we're not using AC_C_RESTRICT in
</span><br>
<span class="quotelev2">&gt; &gt; configure.ac?  This allows you to use &quot;restrict&quot; in C code  
</span><br>
<span class="quotelev1">&gt; everywhere;
</span><br>
<span class="quotelev2">&gt; &gt; it'll be #defined to something acceptable by the compiler if
</span><br>
<span class="quotelev2">&gt; &gt; &quot;restrict&quot; itself is not.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Our __hwloc_restrict macro is actually a copy/paste of AC_C_RESTRICT's
</span><br>
<span class="quotelev1">&gt; tinkering.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Er... that's a license violation, right?  Doesn't that taint hwloc  
<br>
into making it GPL?  (good thing we haven't released yet!)
<br>
<p>:-(
<br>
<p><span class="quotelev1">&gt; The problem is precisely that AC_C_RESTRICT provides &quot;restrict&quot;, and
</span><br>
<span class="quotelev1">&gt; not another keyword, so that using it in installed headers may  
</span><br>
<span class="quotelev1">&gt; conflict
</span><br>
<span class="quotelev1">&gt; with other headers' tinkering about restrict. Yes, configure is  
</span><br>
<span class="quotelev1">&gt; meant to
</span><br>
<span class="quotelev1">&gt; detect such kind of things, but it can not know which variety of  
</span><br>
<span class="quotelev1">&gt; headers
</span><br>
<span class="quotelev1">&gt; the user will want to include from its application, and any of them
</span><br>
<span class="quotelev1">&gt; could want to define restrict to something else.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Would it ever be sane to use one value of restrict in hwloc and a  
<br>
different value in an upper-level application?
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
<li><strong>Next message:</strong> <a href="0057.php">Samuel Thibault: "Re: [hwloc-devel] last API possible changes"</a>
<li><strong>Previous message:</strong> <a href="0055.php">Samuel Thibault: "Re: [hwloc-devel] last API possible changes"</a>
<li><strong>In reply to:</strong> <a href="0055.php">Samuel Thibault: "Re: [hwloc-devel] last API possible changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0057.php">Samuel Thibault: "Re: [hwloc-devel] last API possible changes"</a>
<li><strong>Reply:</strong> <a href="0057.php">Samuel Thibault: "Re: [hwloc-devel] last API possible changes"</a>
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
