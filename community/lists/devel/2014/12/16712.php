<?
$subject_val = "[OMPI devel] ompi master, libfabric and static libraries";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 22 12:15:01 2014" -->
<!-- isoreceived="20141222171501" -->
<!-- sent="Mon, 22 Dec 2014 20:16:06 +0900" -->
<!-- isosent="20141222111606" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="[OMPI devel] ompi master, libfabric and static libraries" -->
<!-- id="5497FD76.5000505_at_iferc.org" -->
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
<strong>Subject:</strong> [OMPI devel] ompi master, libfabric and static libraries<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-22 06:16:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16713.php">Dave Goodell (dgoodell): "Re: [OMPI devel] ompi-master build error : make can require autotools"</a>
<li><strong>Previous message:</strong> <a href="16711.php">Gilles Gouaillardet: "[OMPI devel] ompi-master build error : make can require autotools"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16714.php">Dave Goodell (dgoodell): "Re: [OMPI devel] ompi master, libfabric and static libraries"</a>
<li><strong>Reply:</strong> <a href="16714.php">Dave Goodell (dgoodell): "Re: [OMPI devel] ompi master, libfabric and static libraries"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>MTT reported some errors when building some test suites :
<br>
<a href="http://mtt.open-mpi.org/index.php?do_redir=2219">http://mtt.open-mpi.org/index.php?do_redir=2219</a>
<br>
<p>the root cause was some missing flags in the wrappers.
<br>
i fixed that in 8976dcf6101412f6bd0080764d19a3e9d4edf570
<br>
<p>there is now a second issue :
<br>
libfabric requires libnl, but the -lnl flag is not passed to the mpi
<br>
wrappers.
<br>
could you please have a look at this ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16713.php">Dave Goodell (dgoodell): "Re: [OMPI devel] ompi-master build error : make can require autotools"</a>
<li><strong>Previous message:</strong> <a href="16711.php">Gilles Gouaillardet: "[OMPI devel] ompi-master build error : make can require autotools"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16714.php">Dave Goodell (dgoodell): "Re: [OMPI devel] ompi master, libfabric and static libraries"</a>
<li><strong>Reply:</strong> <a href="16714.php">Dave Goodell (dgoodell): "Re: [OMPI devel] ompi master, libfabric and static libraries"</a>
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
