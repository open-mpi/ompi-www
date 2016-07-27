<?
$subject_val = "[hwloc-devel] MPICH2 patches for hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 11 14:35:37 2012" -->
<!-- isoreceived="20120511183537" -->
<!-- sent="Fri, 11 May 2012 13:35:32 -0500" -->
<!-- isosent="20120511183532" -->
<!-- name="Pavan Balaji" -->
<!-- email="balaji_at_[hidden]" -->
<!-- subject="[hwloc-devel] MPICH2 patches for hwloc" -->
<!-- id="4FAD5BF4.3040808_at_mcs.anl.gov" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [hwloc-devel] MPICH2 patches for hwloc<br>
<strong>From:</strong> Pavan Balaji (<em>balaji_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-11 14:35:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3085.php">Brice Goglin: "Re: [hwloc-devel] MPICH2 patches for hwloc"</a>
<li><strong>Previous message:</strong> <a href="3083.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3.3a1r4471)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3085.php">Brice Goglin: "Re: [hwloc-devel] MPICH2 patches for hwloc"</a>
<li><strong>Reply:</strong> <a href="3085.php">Brice Goglin: "Re: [hwloc-devel] MPICH2 patches for hwloc"</a>
<li><strong>Reply:</strong> <a href="3086.php">Jeff Squyres: "Re: [hwloc-devel] MPICH2 patches for hwloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>We just upgraded to hwloc-1.4.2.  We'd like to push upstream some 
<br>
patches that we maintain, if you find them appropriate.
<br>
<p>Here's what we currently maintain: 
<br>
<a href="https://trac.mcs.anl.gov/projects/mpich2/changeset/9851">https://trac.mcs.anl.gov/projects/mpich2/changeset/9851</a>
<br>
<p>There are three pieces in this patch that we want to point out:
<br>
<p>1. The patch to Makefile.am is an ugly hack to get &quot;make dist&quot; working 
<br>
in hydra.  Specifically, autogen.sh was having trouble running in the 
<br>
tarball created by &quot;make dist&quot;, since it still expects the utils, tests, 
<br>
and doc directories to be available, but they are never included in the 
<br>
embedded builds.  This is definitely *not* something you should include 
<br>
upstream, so please only consider this as a bug report instead.  What 
<br>
are other packages using hwloc in embedded mode doing?
<br>
<p>2. Within config/hwloc.m4, we moved AC_USE_SYSTEM_EXTENSIONS above as 
<br>
AC_REQUIRE(AC_USE_SYSTEM_EXTENSIONS).  This is cleaner for the cases 
<br>
where a higher-level configure (for embedded builds) does an 
<br>
AC_USE_SYSTEM_EXTENSIONS as well.  For standalone builds, this should 
<br>
not cause any issues, but I haven't tested it.
<br>
<p>3. In src/topology-xml.c, the additional (char *) is to squash a 
<br>
compiler warning, since state.tagname is a char *, while &quot;topology&quot; is a 
<br>
const char *.
<br>
<p>&nbsp;&nbsp;-- Pavan
<br>
<p><pre>
-- 
Pavan Balaji
<a href="http://www.mcs.anl.gov/~balaji">http://www.mcs.anl.gov/~balaji</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3085.php">Brice Goglin: "Re: [hwloc-devel] MPICH2 patches for hwloc"</a>
<li><strong>Previous message:</strong> <a href="3083.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3.3a1r4471)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3085.php">Brice Goglin: "Re: [hwloc-devel] MPICH2 patches for hwloc"</a>
<li><strong>Reply:</strong> <a href="3085.php">Brice Goglin: "Re: [hwloc-devel] MPICH2 patches for hwloc"</a>
<li><strong>Reply:</strong> <a href="3086.php">Jeff Squyres: "Re: [hwloc-devel] MPICH2 patches for hwloc"</a>
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
