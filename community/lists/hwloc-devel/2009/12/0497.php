<?
$subject_val = "Re: [hwloc-devel] embedding m4 code";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  9 14:52:41 2009" -->
<!-- isoreceived="20091209195241" -->
<!-- sent="Wed, 9 Dec 2009 14:52:28 -0500" -->
<!-- isosent="20091209195228" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] embedding m4 code" -->
<!-- id="258938DB-79D3-4A42-972B-7859B8EFBBBA_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20091209165957.GQ5233_at_const.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] embedding m4 code<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-09 14:52:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0498.php">Jeff Squyres: "[hwloc-devel] test failure"</a>
<li><strong>Previous message:</strong> <a href="0496.php">Samuel Thibault: "Re: [hwloc-devel] embedding m4 code"</a>
<li><strong>In reply to:</strong> <a href="0496.php">Samuel Thibault: "Re: [hwloc-devel] embedding m4 code"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 9, 2009, at 11:59 AM, Samuel Thibault wrote:
<br>
<p><span class="quotelev1">&gt; make check failed here:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /bin/sh: line 9: ./test-hwloc-distrib.sh: Permission non accord&#233;e
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It seems you missed the chmod +x call.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Else it seems to be working, at least on AIX and solaris.
</span><br>
<p>Awesome; thanks!
<br>
<p>I added the proper AC_CONFIG_COMMANDS and &quot;make check&quot; seems to work now:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://bitbucket.org/jsquyres/hwloc-embedded/changeset/c4907997c210/">http://bitbucket.org/jsquyres/hwloc-embedded/changeset/c4907997c210/</a>
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
<li><strong>Next message:</strong> <a href="0498.php">Jeff Squyres: "[hwloc-devel] test failure"</a>
<li><strong>Previous message:</strong> <a href="0496.php">Samuel Thibault: "Re: [hwloc-devel] embedding m4 code"</a>
<li><strong>In reply to:</strong> <a href="0496.php">Samuel Thibault: "Re: [hwloc-devel] embedding m4 code"</a>
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
