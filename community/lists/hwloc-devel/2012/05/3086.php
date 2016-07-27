<?
$subject_val = "Re: [hwloc-devel] MPICH2 patches for hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 11 15:10:45 2012" -->
<!-- isoreceived="20120511191045" -->
<!-- sent="Fri, 11 May 2012 15:10:40 -0400" -->
<!-- isosent="20120511191040" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] MPICH2 patches for hwloc" -->
<!-- id="A8EA805A-F9A5-4AE9-A90D-135484D9B511_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-11 15:10:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3087.php">Pavan Balaji: "Re: [hwloc-devel] MPICH2 patches for hwloc"</a>
<li><strong>Previous message:</strong> <a href="3085.php">Brice Goglin: "Re: [hwloc-devel] MPICH2 patches for hwloc"</a>
<li><strong>In reply to:</strong> <a href="3084.php">Pavan Balaji: "[hwloc-devel] MPICH2 patches for hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3087.php">Pavan Balaji: "Re: [hwloc-devel] MPICH2 patches for hwloc"</a>
<li><strong>Reply:</strong> <a href="3087.php">Pavan Balaji: "Re: [hwloc-devel] MPICH2 patches for hwloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 11, 2012, at 2:35 PM, Pavan Balaji wrote:
<br>
<p><span class="quotelev1">&gt; 1. The patch to Makefile.am is an ugly hack to get &quot;make dist&quot; working in hydra.  Specifically, autogen.sh was having trouble running in the tarball created by &quot;make dist&quot;, since it still expects the utils, tests, and doc directories to be available, but they are never included in the embedded builds.  This is definitely *not* something you should include upstream, so please only consider this as a bug report instead.  What are other packages using hwloc in embedded mode doing?
</span><br>
<p><p>Agreed, this is ick.  I haven't really figured out a better way to do it, because the SUBDIRS clause has to be in a Makefile.am -- I couldn't hide it in the configure.ac, for example (where it wouldn't be included by embedding packages that only use the .m4 files).  :-\
<br>
<p>In OMPI, we actually import the whole hwloc tarball *except* for those 3 directories.  BUT: we leave token directories there so that automake will be happy (with a trivial README file in each so that git/hg don't delete the empty directories).  For example:
<br>
<p><a href="https://svn.open-mpi.org/trac/ompi/browser/trunk/opal/mca/hwloc/hwloc132/hwloc/utils">https://svn.open-mpi.org/trac/ompi/browser/trunk/opal/mca/hwloc/hwloc132/hwloc/utils</a>
<br>
<p>Got any better suggestions?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3087.php">Pavan Balaji: "Re: [hwloc-devel] MPICH2 patches for hwloc"</a>
<li><strong>Previous message:</strong> <a href="3085.php">Brice Goglin: "Re: [hwloc-devel] MPICH2 patches for hwloc"</a>
<li><strong>In reply to:</strong> <a href="3084.php">Pavan Balaji: "[hwloc-devel] MPICH2 patches for hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3087.php">Pavan Balaji: "Re: [hwloc-devel] MPICH2 patches for hwloc"</a>
<li><strong>Reply:</strong> <a href="3087.php">Pavan Balaji: "Re: [hwloc-devel] MPICH2 patches for hwloc"</a>
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
