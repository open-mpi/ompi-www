<?
$subject_val = "Re: [hwloc-devel] last API possible changes";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 21 09:15:15 2009" -->
<!-- isoreceived="20090921131515" -->
<!-- sent="Mon, 21 Sep 2009 15:15:06 +0200" -->
<!-- isosent="20090921131506" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] last API possible changes" -->
<!-- id="20090921131506.GN5753_at_const.bordeaux.inria.fr" -->
<!-- charset="utf-8" -->
<!-- inreplyto="758B1EB5-706A-4376-9809-9B15F504688C_at_cisco.com" -->
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
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-21 09:15:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0058.php">Jeff Squyres: "Re: [hwloc-devel] last API possible changes"</a>
<li><strong>Previous message:</strong> <a href="0056.php">Jeff Squyres: "Re: [hwloc-devel] last API possible changes"</a>
<li><strong>In reply to:</strong> <a href="0056.php">Jeff Squyres: "Re: [hwloc-devel] last API possible changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0058.php">Jeff Squyres: "Re: [hwloc-devel] last API possible changes"</a>
<li><strong>Reply:</strong> <a href="0058.php">Jeff Squyres: "Re: [hwloc-devel] last API possible changes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres, le Mon 21 Sep 2009 08:51:35 -0400, a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt; On Sep 21, 2009, at 8:44 AM, Samuel Thibault wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; FWIW, is there a reason we're not using AC_C_RESTRICT in
</span><br>
<span class="quotelev3">&gt; &gt;&gt; configure.ac?  This allows you to use &quot;restrict&quot; in C code  
</span><br>
<span class="quotelev2">&gt; &gt;everywhere;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; it'll be #defined to something acceptable by the compiler if
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &quot;restrict&quot; itself is not.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Our __hwloc_restrict macro is actually a copy/paste of AC_C_RESTRICT's
</span><br>
<span class="quotelev2">&gt; &gt;tinkering.
</span><br>
<p>Ah, wait, no, I'm mistaking with something else in another project.
<br>
Looking closer, this definition is mine.
<br>
<p>Note btw that the autoconf license makes an exception for code output
<br>
from autoconf scripts, the GPL doesn't apply to them, there is
<br>
&#226;&#128;&#156;unlimited permission to copy, distribute, and modify&#226;&#128;&#157; it.
<br>
<p><span class="quotelev2">&gt; &gt;The problem is precisely that AC_C_RESTRICT provides &quot;restrict&quot;,
</span><br>
<span class="quotelev2">&gt; &gt;and not another keyword, so that using it in installed headers
</span><br>
<span class="quotelev2">&gt; &gt;may conflict with other headers' tinkering about restrict. Yes,
</span><br>
<span class="quotelev2">&gt; &gt;configure is meant to detect such kind of things, but it can not
</span><br>
<span class="quotelev2">&gt; &gt;know which variety of headers the user will want to include from
</span><br>
<span class="quotelev2">&gt; &gt;its application, and any of them could want to define restrict to
</span><br>
<span class="quotelev2">&gt; &gt;something else.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Would it ever be sane to use one value of restrict in hwloc and a  
</span><br>
<span class="quotelev1">&gt; different value in an upper-level application?
</span><br>
<p>That's not a problem since it's just an optimization &amp; validity checking
<br>
qualifier.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0058.php">Jeff Squyres: "Re: [hwloc-devel] last API possible changes"</a>
<li><strong>Previous message:</strong> <a href="0056.php">Jeff Squyres: "Re: [hwloc-devel] last API possible changes"</a>
<li><strong>In reply to:</strong> <a href="0056.php">Jeff Squyres: "Re: [hwloc-devel] last API possible changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0058.php">Jeff Squyres: "Re: [hwloc-devel] last API possible changes"</a>
<li><strong>Reply:</strong> <a href="0058.php">Jeff Squyres: "Re: [hwloc-devel] last API possible changes"</a>
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
