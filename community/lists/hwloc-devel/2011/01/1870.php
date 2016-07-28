<?
$subject_val = "Re: [hwloc-devel] Picky compiler options in hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 20 16:59:59 2011" -->
<!-- isoreceived="20110120215959" -->
<!-- sent="Thu, 20 Jan 2011 16:59:54 -0500" -->
<!-- isosent="20110120215954" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Picky compiler options in hwloc" -->
<!-- id="DC81F727-6F60-4DDD-810B-002D92D215A1_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D38AE83.40608_at_mcs.anl.gov" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Picky compiler options in hwloc<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-20 16:59:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1871.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.2a1r3119)"</a>
<li><strong>Previous message:</strong> <a href="1869.php">Pavan Balaji: "Re: [hwloc-devel] Picky compiler options in hwloc"</a>
<li><strong>In reply to:</strong> <a href="1869.php">Pavan Balaji: "Re: [hwloc-devel] Picky compiler options in hwloc"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 20, 2011, at 4:52 PM, Pavan Balaji wrote:
<br>
<p><span class="quotelev2">&gt;&gt; I'd rather keep it. Maybe Jeff can add a m4 macro that your m4 would
</span><br>
<span class="quotelev2">&gt;&gt; call to disable it? Something that would force the default value of
</span><br>
<span class="quotelev2">&gt;&gt; hwloc_want_picky to 0.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ok, that's fine.
</span><br>
<p>You should be able to use --disable-picky.
<br>
<p><span class="quotelev2">&gt;&gt; What's surprising is that this code is in HWLOC_SETUP_DOCS. Do you call
</span><br>
<span class="quotelev2">&gt;&gt; HWLOC_SETUP_DOCS in MPICH2?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Not by default. That's why it's not a major concern.
</span><br>
<p>Are you using --enable-embedded-mode?  That should disable a bunch of stuff and basically only build libembedded_hwloc.la.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1871.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.2a1r3119)"</a>
<li><strong>Previous message:</strong> <a href="1869.php">Pavan Balaji: "Re: [hwloc-devel] Picky compiler options in hwloc"</a>
<li><strong>In reply to:</strong> <a href="1869.php">Pavan Balaji: "Re: [hwloc-devel] Picky compiler options in hwloc"</a>
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
