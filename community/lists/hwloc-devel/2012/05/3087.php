<?
$subject_val = "Re: [hwloc-devel] MPICH2 patches for hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 11 15:17:52 2012" -->
<!-- isoreceived="20120511191752" -->
<!-- sent="Fri, 11 May 2012 14:17:47 -0500" -->
<!-- isosent="20120511191747" -->
<!-- name="Pavan Balaji" -->
<!-- email="balaji_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] MPICH2 patches for hwloc" -->
<!-- id="4FAD65DB.402_at_mcs.anl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="A8EA805A-F9A5-4AE9-A90D-135484D9B511_at_cisco.com" -->
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
<strong>From:</strong> Pavan Balaji (<em>balaji_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-11 15:17:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3088.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.5a1r4482)"</a>
<li><strong>Previous message:</strong> <a href="3086.php">Jeff Squyres: "Re: [hwloc-devel] MPICH2 patches for hwloc"</a>
<li><strong>In reply to:</strong> <a href="3086.php">Jeff Squyres: "Re: [hwloc-devel] MPICH2 patches for hwloc"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 05/11/2012 02:10 PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On May 11, 2012, at 2:35 PM, Pavan Balaji wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. The patch to Makefile.am is an ugly hack to get &quot;make dist&quot;
</span><br>
<span class="quotelev2">&gt;&gt; working in hydra. Specifically, autogen.sh was having trouble
</span><br>
<span class="quotelev2">&gt;&gt; running in the tarball created by &quot;make dist&quot;, since it still
</span><br>
<span class="quotelev2">&gt;&gt; expects the utils, tests, and doc directories to be available, but
</span><br>
<span class="quotelev2">&gt;&gt; they are never included in the embedded builds. This is definitely
</span><br>
<span class="quotelev2">&gt;&gt; *not* something you should include upstream, so please only
</span><br>
<span class="quotelev2">&gt;&gt; consider this as a bug report instead. What are other packages
</span><br>
<span class="quotelev2">&gt;&gt; using hwloc in embedded mode doing?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Agreed, this is ick. I haven't really figured out a better way to do
</span><br>
<span class="quotelev1">&gt;  it, because the SUBDIRS clause has to be in a Makefile.am -- I
</span><br>
<span class="quotelev1">&gt; couldn't hide it in the configure.ac, for example (where it wouldn't
</span><br>
<span class="quotelev1">&gt; be included by embedding packages that only use the .m4 files). :-\
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In OMPI, we actually import the whole hwloc tarball *except* for
</span><br>
<span class="quotelev1">&gt; those 3 directories. BUT: we leave token directories there so that
</span><br>
<span class="quotelev1">&gt; automake will be happy (with a trivial README file in each so that
</span><br>
<span class="quotelev1">&gt; git/hg don't delete the empty directories). For example:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/browser/trunk/opal/mca/hwloc/hwloc132/hwloc/utils">https://svn.open-mpi.org/trac/ompi/browser/trunk/opal/mca/hwloc/hwloc132/hwloc/utils</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Got any better suggestions?
</span><br>
<p>I think commenting those directories in Makefile.am like we do is a 
<br>
simpler patch that deleting those directories, though both of them play 
<br>
the same role.  But either way, it's a horrible hack.  I was hoping 
<br>
there was some autotools magic to workaround this that we are missing.
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
<li><strong>Next message:</strong> <a href="3088.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.5a1r4482)"</a>
<li><strong>Previous message:</strong> <a href="3086.php">Jeff Squyres: "Re: [hwloc-devel] MPICH2 patches for hwloc"</a>
<li><strong>In reply to:</strong> <a href="3086.php">Jeff Squyres: "Re: [hwloc-devel] MPICH2 patches for hwloc"</a>
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
