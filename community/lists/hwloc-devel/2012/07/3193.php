<?
$subject_val = "Re: [hwloc-devel] mpich2 maintained patches for hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 24 15:46:06 2012" -->
<!-- isoreceived="20120724194606" -->
<!-- sent="Tue, 24 Jul 2012 21:45:55 +0200" -->
<!-- isosent="20120724194555" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] mpich2 maintained patches for hwloc" -->
<!-- id="500EFB73.9060105_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="500E896E.8090206_at_inria.fr" -->
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
<strong>Date:</strong> 2012-07-24 15:45:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3194.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.6a1r4665)"</a>
<li><strong>Previous message:</strong> <a href="3192.php">Brice Goglin: "Re: [hwloc-devel] mpich2 maintained patches for hwloc"</a>
<li><strong>In reply to:</strong> <a href="3192.php">Brice Goglin: "Re: [hwloc-devel] mpich2 maintained patches for hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/09/3265.php">Pavan Balaji: "Re: [hwloc-devel] mpich2 maintained patches for hwloc"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/09/3265.php">Pavan Balaji: "Re: [hwloc-devel] mpich2 maintained patches for hwloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 24/07/2012 13:39, Brice Goglin a &#233;crit :
<br>
<span class="quotelev1">&gt; Le 23/07/2012 18:40, Pavan Balaji a &#233;crit :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 3. The changes to config/hwloc.m4 and include/private/private.h are
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; essentially a warning squash when getpagesize() requires an explicit
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; prototype declaration.  But it's not clear how easy it is for you to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; absorb it as it uses an MPICH2 internal m4 macro.  Maybe there's a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; cleaner way to integrate this patch.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I will look at this. On which platform/system did you need this patch?
</span><br>
<span class="quotelev2">&gt;&gt; On regular x86_64 machines.  We use strict builds in mpich2.  I can
</span><br>
<span class="quotelev2">&gt;&gt; figure out the exact flags that trigger it, but my guess is that -Wall
</span><br>
<span class="quotelev2">&gt;&gt; would.
</span><br>
<span class="quotelev1">&gt; Looking deeper into this, it looks like the right solution is to use
</span><br>
<span class="quotelev1">&gt; sysconf(_SC_PAGESIZE) instead of getpagesize(). getpagesize() looks
</span><br>
<span class="quotelev1">&gt; deprecated, that's why it's getting disabled when modern features are
</span><br>
<span class="quotelev1">&gt; enabled. I'll send a patch to use sysconf when supported and fallback to
</span><br>
<span class="quotelev1">&gt; the old getpagesize() otherwise.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Can you try this patch of some of your platforms?
<br>
<p>I think I couldn't reproduce your problem because hwloc's
<br>
AC_USE_SYSTEM_EXTENSIONS defines _GNU_SOURCE, which defines _BSD_SOURCE,
<br>
which defines __USE_BSD, which makes getpagesize() available without
<br>
looking at other XOPEN/POSIX defines.
<br>
<p>Brice
<br>
<p><p>Brice
<br>
<p><p>
<br><hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-3193/getpagesize.patch">getpagesize.patch</a>
</ul>
<!-- attachment="getpagesize.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3194.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.6a1r4665)"</a>
<li><strong>Previous message:</strong> <a href="3192.php">Brice Goglin: "Re: [hwloc-devel] mpich2 maintained patches for hwloc"</a>
<li><strong>In reply to:</strong> <a href="3192.php">Brice Goglin: "Re: [hwloc-devel] mpich2 maintained patches for hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/09/3265.php">Pavan Balaji: "Re: [hwloc-devel] mpich2 maintained patches for hwloc"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/09/3265.php">Pavan Balaji: "Re: [hwloc-devel] mpich2 maintained patches for hwloc"</a>
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
