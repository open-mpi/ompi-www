<?
$subject_val = "Re: [hwloc-devel] MPICH2 patches for hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 11 14:44:40 2012" -->
<!-- isoreceived="20120511184440" -->
<!-- sent="Fri, 11 May 2012 20:44:33 +0200" -->
<!-- isosent="20120511184433" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] MPICH2 patches for hwloc" -->
<!-- id="4FAD5E11.2030104_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4FAD5BF4.3040808_at_mcs.anl.gov" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] MPICH2 patches for hwloc<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-11 14:44:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3086.php">Jeff Squyres: "Re: [hwloc-devel] MPICH2 patches for hwloc"</a>
<li><strong>Previous message:</strong> <a href="3084.php">Pavan Balaji: "[hwloc-devel] MPICH2 patches for hwloc"</a>
<li><strong>In reply to:</strong> <a href="3084.php">Pavan Balaji: "[hwloc-devel] MPICH2 patches for hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3086.php">Jeff Squyres: "Re: [hwloc-devel] MPICH2 patches for hwloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
(3) is of course OK, and (2) should be OK too, so I'll apply them to
<br>
v1.4 and trunk.
<br>
(1) is for Jeff.
<br>
<p>Brice
<br>
<p><p><p><p>Le 11/05/2012 20:35, Pavan Balaji a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We just upgraded to hwloc-1.4.2.  We'd like to push upstream some
</span><br>
<span class="quotelev1">&gt; patches that we maintain, if you find them appropriate.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's what we currently maintain:
</span><br>
<span class="quotelev1">&gt; <a href="https://trac.mcs.anl.gov/projects/mpich2/changeset/9851">https://trac.mcs.anl.gov/projects/mpich2/changeset/9851</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There are three pieces in this patch that we want to point out:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. The patch to Makefile.am is an ugly hack to get &quot;make dist&quot; working
</span><br>
<span class="quotelev1">&gt; in hydra.  Specifically, autogen.sh was having trouble running in the
</span><br>
<span class="quotelev1">&gt; tarball created by &quot;make dist&quot;, since it still expects the utils,
</span><br>
<span class="quotelev1">&gt; tests, and doc directories to be available, but they are never
</span><br>
<span class="quotelev1">&gt; included in the embedded builds.  This is definitely *not* something
</span><br>
<span class="quotelev1">&gt; you should include upstream, so please only consider this as a bug
</span><br>
<span class="quotelev1">&gt; report instead.  What are other packages using hwloc in embedded mode
</span><br>
<span class="quotelev1">&gt; doing?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. Within config/hwloc.m4, we moved AC_USE_SYSTEM_EXTENSIONS above as
</span><br>
<span class="quotelev1">&gt; AC_REQUIRE(AC_USE_SYSTEM_EXTENSIONS).  This is cleaner for the cases
</span><br>
<span class="quotelev1">&gt; where a higher-level configure (for embedded builds) does an
</span><br>
<span class="quotelev1">&gt; AC_USE_SYSTEM_EXTENSIONS as well.  For standalone builds, this should
</span><br>
<span class="quotelev1">&gt; not cause any issues, but I haven't tested it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. In src/topology-xml.c, the additional (char *) is to squash a
</span><br>
<span class="quotelev1">&gt; compiler warning, since state.tagname is a char *, while &quot;topology&quot; is
</span><br>
<span class="quotelev1">&gt; a const char *.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  -- Pavan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3086.php">Jeff Squyres: "Re: [hwloc-devel] MPICH2 patches for hwloc"</a>
<li><strong>Previous message:</strong> <a href="3084.php">Pavan Balaji: "[hwloc-devel] MPICH2 patches for hwloc"</a>
<li><strong>In reply to:</strong> <a href="3084.php">Pavan Balaji: "[hwloc-devel] MPICH2 patches for hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3086.php">Jeff Squyres: "Re: [hwloc-devel] MPICH2 patches for hwloc"</a>
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
