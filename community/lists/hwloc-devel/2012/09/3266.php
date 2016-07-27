<?
$subject_val = "Re: [hwloc-devel] mpich2 maintained patches for hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  6 01:22:09 2012" -->
<!-- isoreceived="20120906052209" -->
<!-- sent="Thu, 06 Sep 2012 07:22:03 +0200" -->
<!-- isosent="20120906052203" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] mpich2 maintained patches for hwloc" -->
<!-- id="504832FB.4080808_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="50481989.1010803_at_mcs.anl.gov" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] mpich2 maintained patches for hwloc<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-06 01:22:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3267.php">Pavan Balaji: "Re: [hwloc-devel] mpich2 maintained patches for hwloc"</a>
<li><strong>Previous message:</strong> <a href="3265.php">Pavan Balaji: "Re: [hwloc-devel] mpich2 maintained patches for hwloc"</a>
<li><strong>In reply to:</strong> <a href="3265.php">Pavan Balaji: "Re: [hwloc-devel] mpich2 maintained patches for hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3267.php">Pavan Balaji: "Re: [hwloc-devel] mpich2 maintained patches for hwloc"</a>
<li><strong>Reply:</strong> <a href="3267.php">Pavan Balaji: "Re: [hwloc-devel] mpich2 maintained patches for hwloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No, we didn't apply anything to v1.5. In trunk, we're using sysconf
<br>
instead of getpagesize when it supports SC_PAGESIZE or SC_PAGE_SIZE
<br>
(very often).
<br>
<p>Brice
<br>
<p><p><p>Le 06/09/2012 05:33, Pavan Balaji a &#233;crit :
<br>
<span class="quotelev1">&gt; Brice,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry, I didn't get to try this patch out.  Did it end up in any of
</span><br>
<span class="quotelev1">&gt; the hwloc releases?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  -- Pavan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 07/24/2012 02:45 PM, Brice Goglin wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Le 24/07/2012 13:39, Brice Goglin a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Le 23/07/2012 18:40, Pavan Balaji a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 3. The changes to config/hwloc.m4 and include/private/private.h are
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; essentially a warning squash when getpagesize() requires an explicit
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; prototype declaration.  But it's not clear how easy it is for you to
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; absorb it as it uses an MPICH2 internal m4 macro.  Maybe there's a
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; cleaner way to integrate this patch.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I will look at this. On which platform/system did you need this
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; patch?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On regular x86_64 machines.  We use strict builds in mpich2.  I can
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; figure out the exact flags that trigger it, but my guess is that -Wall
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; would.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Looking deeper into this, it looks like the right solution is to use
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sysconf(_SC_PAGESIZE) instead of getpagesize(). getpagesize() looks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; deprecated, that's why it's getting disabled when modern features are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; enabled. I'll send a patch to use sysconf when supported and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fallback to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the old getpagesize() otherwise.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can you try this patch of some of your platforms?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think I couldn't reproduce your problem because hwloc's
</span><br>
<span class="quotelev2">&gt;&gt; AC_USE_SYSTEM_EXTENSIONS defines _GNU_SOURCE, which defines _BSD_SOURCE,
</span><br>
<span class="quotelev2">&gt;&gt; which defines __USE_BSD, which makes getpagesize() available without
</span><br>
<span class="quotelev2">&gt;&gt; looking at other XOPEN/POSIX defines.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brice
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brice
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3267.php">Pavan Balaji: "Re: [hwloc-devel] mpich2 maintained patches for hwloc"</a>
<li><strong>Previous message:</strong> <a href="3265.php">Pavan Balaji: "Re: [hwloc-devel] mpich2 maintained patches for hwloc"</a>
<li><strong>In reply to:</strong> <a href="3265.php">Pavan Balaji: "Re: [hwloc-devel] mpich2 maintained patches for hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3267.php">Pavan Balaji: "Re: [hwloc-devel] mpich2 maintained patches for hwloc"</a>
<li><strong>Reply:</strong> <a href="3267.php">Pavan Balaji: "Re: [hwloc-devel] mpich2 maintained patches for hwloc"</a>
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
