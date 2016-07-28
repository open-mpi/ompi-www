<?
$subject_val = "[OMPI devel] ompi-master build error : make can require autotools";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 22 12:00:01 2014" -->
<!-- isoreceived="20141222170001" -->
<!-- sent="Mon, 22 Dec 2014 17:42:59 +0900" -->
<!-- isosent="20141222084259" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="[OMPI devel] ompi-master build error : make can require autotools" -->
<!-- id="5497D993.8060703_at_iferc.org" -->
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
<strong>Subject:</strong> [OMPI devel] ompi-master build error : make can require autotools<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-22 03:42:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16712.php">Gilles Gouaillardet: "[OMPI devel] ompi master, libfabric and static libraries"</a>
<li><strong>Previous message:</strong> <a href="16710.php">Nathan Hjelm: "Re: [OMPI devel] [Open MPI Announce] Open MPI 1.8.4 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16713.php">Dave Goodell (dgoodell): "Re: [OMPI devel] ompi-master build error : make can require autotools"</a>
<li><strong>Reply:</strong> <a href="16713.php">Dave Goodell (dgoodell): "Re: [OMPI devel] ompi-master build error : make can require autotools"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff and all,
<br>
<p>i just found &quot;by accident&quot; that make can require autotools.
<br>
<p>for example:
<br>
<p>from (generated) ompi/include/Makefile :
<br>
$(srcdir)/mpi.h.in:  $(am__configure_deps)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;($(am__cd) $(top_srcdir) &amp;&amp; $(AUTOHEADER))
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rm -f stamp-h2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;touch $@
<br>
<p>and $(am__configure_deps) is a bunch (all?) of .m4 files.
<br>
<p>from a pragmatic point of view, it means that if update a m4 file, run
<br>
autogen.pl and configure,
<br>
then, the first invokation of make will run $(AUTOHEADER)
<br>
<p>is this a bug (and if yes, is it OMPI related) ?
<br>
or is this just a minor annoyance that impacts only developers anyway ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16712.php">Gilles Gouaillardet: "[OMPI devel] ompi master, libfabric and static libraries"</a>
<li><strong>Previous message:</strong> <a href="16710.php">Nathan Hjelm: "Re: [OMPI devel] [Open MPI Announce] Open MPI 1.8.4 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16713.php">Dave Goodell (dgoodell): "Re: [OMPI devel] ompi-master build error : make can require autotools"</a>
<li><strong>Reply:</strong> <a href="16713.php">Dave Goodell (dgoodell): "Re: [OMPI devel] ompi-master build error : make can require autotools"</a>
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
