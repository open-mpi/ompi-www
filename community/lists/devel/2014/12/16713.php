<?
$subject_val = "Re: [OMPI devel] ompi-master build error : make can require autotools";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 22 12:26:25 2014" -->
<!-- isoreceived="20141222172625" -->
<!-- sent="Mon, 22 Dec 2014 17:26:24 +0000" -->
<!-- isosent="20141222172624" -->
<!-- name="Dave Goodell (dgoodell)" -->
<!-- email="dgoodell_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ompi-master build error : make can require autotools" -->
<!-- id="12224D72-7C1A-455B-8014-B7FEDA831838_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5497D993.8060703_at_iferc.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] ompi-master build error : make can require autotools<br>
<strong>From:</strong> Dave Goodell (dgoodell) (<em>dgoodell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-22 12:26:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16714.php">Dave Goodell (dgoodell): "Re: [OMPI devel] ompi master, libfabric and static libraries"</a>
<li><strong>Previous message:</strong> <a href="16712.php">Gilles Gouaillardet: "[OMPI devel] ompi master, libfabric and static libraries"</a>
<li><strong>In reply to:</strong> <a href="16711.php">Gilles Gouaillardet: "[OMPI devel] ompi-master build error : make can require autotools"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16717.php">Gilles Gouaillardet: "Re: [OMPI devel] ompi-master build error : make can require autotools"</a>
<li><strong>Reply:</strong> <a href="16717.php">Gilles Gouaillardet: "Re: [OMPI devel] ompi-master build error : make can require autotools"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 22, 2014, at 2:42 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Jeff and all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i just found &quot;by accident&quot; that make can require autotools.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; for example:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; from (generated) ompi/include/Makefile :
</span><br>
<span class="quotelev1">&gt; $(srcdir)/mpi.h.in:  $(am__configure_deps)
</span><br>
<span class="quotelev1">&gt;        ($(am__cd) $(top_srcdir) &amp;&amp; $(AUTOHEADER))
</span><br>
<span class="quotelev1">&gt;        rm -f stamp-h2
</span><br>
<span class="quotelev1">&gt;        touch $@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and $(am__configure_deps) is a bunch (all?) of .m4 files.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; from a pragmatic point of view, it means that if update a m4 file, run
</span><br>
<span class="quotelev1">&gt; autogen.pl and configure,
</span><br>
<span class="quotelev1">&gt; then, the first invokation of make will run $(AUTOHEADER)
</span><br>
<p>Gilles,
<br>
<p>Have you actually experienced this exact behavior?  The sequence you mention above shouldn't cause autoheader to be invoked by make.  Running autogen.pl will invoke autoheader after the m4 files were touched, so the mpi.h.in file will be newer than its m4 dependencies, which should mean that this make rule won't be executed.
<br>
<p>-Dave
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16714.php">Dave Goodell (dgoodell): "Re: [OMPI devel] ompi master, libfabric and static libraries"</a>
<li><strong>Previous message:</strong> <a href="16712.php">Gilles Gouaillardet: "[OMPI devel] ompi master, libfabric and static libraries"</a>
<li><strong>In reply to:</strong> <a href="16711.php">Gilles Gouaillardet: "[OMPI devel] ompi-master build error : make can require autotools"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16717.php">Gilles Gouaillardet: "Re: [OMPI devel] ompi-master build error : make can require autotools"</a>
<li><strong>Reply:</strong> <a href="16717.php">Gilles Gouaillardet: "Re: [OMPI devel] ompi-master build error : make can require autotools"</a>
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
