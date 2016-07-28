<?
$subject_val = "Re: [hwloc-devel] embedding next step";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 15 15:37:34 2009" -->
<!-- isoreceived="20091215203734" -->
<!-- sent="Tue, 15 Dec 2009 15:37:28 -0500" -->
<!-- isosent="20091215203728" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] embedding next step" -->
<!-- id="2E93AF41-FB75-470D-BC6C-C63C5EAC4E88_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B272FA6.4090706_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] embedding next step<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-15 15:37:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0515.php">Jeff Squyres: "Re: [hwloc-devel] embedding next step"</a>
<li><strong>Previous message:</strong> <a href="0513.php">Brice Goglin: "Re: [hwloc-devel] embedding next step"</a>
<li><strong>In reply to:</strong> <a href="0513.php">Brice Goglin: "Re: [hwloc-devel] embedding next step"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0515.php">Jeff Squyres: "Re: [hwloc-devel] embedding next step"</a>
<li><strong>Reply:</strong> <a href="0515.php">Jeff Squyres: "Re: [hwloc-devel] embedding next step"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 15, 2009, at 1:41 AM, Brice Goglin wrote:
<br>
<p><span class="quotelev2">&gt; &gt; I made a test in tests/embedded/ that has its own configure.ac that includes the hwloc.m4, configures it, builds it with a new prefix (&quot;mytest_&quot; instead of &quot;hwloc_&quot;) and then links against it in a trivial dummy executable.  It all seems to work.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You probably want to use your renaming stuff in tests/embedded/ , right ?
</span><br>
<p>HAH!  I *did* at one point, but ripped it out while testing -- I accidentally committed it without the renaming.  Which means that I probably broke something along the way...
<br>
<p><span class="quotelev2">&gt; &gt; Before I finish the grunt work of the #define's for all the other symbols and macros, can you guys review it and see if there's anything you hate in there?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am not fully comfortable with having our own copy of PKG_CHECK_MODULES
</span><br>
<span class="quotelev1">&gt; or any other standard macro, but I am going to assume they are stable
</span><br>
<span class="quotelev1">&gt; enough and they won't change a lot anymore in the future.
</span><br>
<p>Probably not.  Additionally, I think we *want* our own copy because we can't necessarily rely on forward compatibility of the PKG_ macros for how we're using them.
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
<li><strong>Next message:</strong> <a href="0515.php">Jeff Squyres: "Re: [hwloc-devel] embedding next step"</a>
<li><strong>Previous message:</strong> <a href="0513.php">Brice Goglin: "Re: [hwloc-devel] embedding next step"</a>
<li><strong>In reply to:</strong> <a href="0513.php">Brice Goglin: "Re: [hwloc-devel] embedding next step"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0515.php">Jeff Squyres: "Re: [hwloc-devel] embedding next step"</a>
<li><strong>Reply:</strong> <a href="0515.php">Jeff Squyres: "Re: [hwloc-devel] embedding next step"</a>
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
