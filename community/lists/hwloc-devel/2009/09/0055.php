<?
$subject_val = "Re: [hwloc-devel] last API possible changes";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 21 08:44:22 2009" -->
<!-- isoreceived="20090921124422" -->
<!-- sent="Mon, 21 Sep 2009 14:44:18 +0200" -->
<!-- isosent="20090921124418" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] last API possible changes" -->
<!-- id="20090921124418.GL5753_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4E80A2BD-FD66-4370-8A72-5581435B859B_at_cisco.com" -->
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
<strong>Date:</strong> 2009-09-21 08:44:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0056.php">Jeff Squyres: "Re: [hwloc-devel] last API possible changes"</a>
<li><strong>Previous message:</strong> <a href="0054.php">Jeff Squyres: "Re: [hwloc-devel] last API possible changes"</a>
<li><strong>In reply to:</strong> <a href="0054.php">Jeff Squyres: "Re: [hwloc-devel] last API possible changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0056.php">Jeff Squyres: "Re: [hwloc-devel] last API possible changes"</a>
<li><strong>Reply:</strong> <a href="0056.php">Jeff Squyres: "Re: [hwloc-devel] last API possible changes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres, le Mon 21 Sep 2009 08:22:06 -0400, a &#233;crit :
<br>
<span class="quotelev1">&gt; FWIW, is there a reason we're not using AC_C_RESTRICT in  
</span><br>
<span class="quotelev1">&gt; configure.ac?  This allows you to use &quot;restrict&quot; in C code everywhere;  
</span><br>
<span class="quotelev1">&gt; it'll be #defined to something acceptable by the compiler if  
</span><br>
<span class="quotelev1">&gt; &quot;restrict&quot; itself is not.
</span><br>
<p>Our __hwloc_restrict macro is actually a copy/paste of AC_C_RESTRICT's
<br>
tinkering.
<br>
<p>The problem is precisely that AC_C_RESTRICT provides &quot;restrict&quot;, and
<br>
not another keyword, so that using it in installed headers may conflict
<br>
with other headers' tinkering about restrict. Yes, configure is meant to
<br>
detect such kind of things, but it can not know which variety of headers
<br>
the user will want to include from its application, and any of them
<br>
could want to define restrict to something else.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0056.php">Jeff Squyres: "Re: [hwloc-devel] last API possible changes"</a>
<li><strong>Previous message:</strong> <a href="0054.php">Jeff Squyres: "Re: [hwloc-devel] last API possible changes"</a>
<li><strong>In reply to:</strong> <a href="0054.php">Jeff Squyres: "Re: [hwloc-devel] last API possible changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0056.php">Jeff Squyres: "Re: [hwloc-devel] last API possible changes"</a>
<li><strong>Reply:</strong> <a href="0056.php">Jeff Squyres: "Re: [hwloc-devel] last API possible changes"</a>
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
