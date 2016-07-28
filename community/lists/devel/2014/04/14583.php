<?
$subject_val = "[OMPI devel] openmpi and XRC API from ofed-3.12";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 23 08:56:38 2014" -->
<!-- isoreceived="20140423125638" -->
<!-- sent="Wed, 23 Apr 2014 14:58:49 +0200" -->
<!-- isosent="20140423125849" -->
<!-- name="Piotr Lesnicki" -->
<!-- email="piotr.lesnicki_at_[hidden]" -->
<!-- subject="[OMPI devel] openmpi and XRC API from ofed-3.12" -->
<!-- id="5357B909.2010105_at_ext.bull.net" -->
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
<strong>Subject:</strong> [OMPI devel] openmpi and XRC API from ofed-3.12<br>
<strong>From:</strong> Piotr Lesnicki (<em>piotr.lesnicki_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-23 08:58:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14584.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: Remove heterogeneous support"</a>
<li><strong>Previous message:</strong> <a href="14582.php">Gilles Gouaillardet: "Re: [OMPI devel] coll/tuned MPI_Bcast can crash or silently fail when using distinct datatypes across tasks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14585.php">Nathan Hjelm: "Re: [OMPI devel] openmpi and XRC API from ofed-3.12"</a>
<li><strong>Reply:</strong> <a href="14585.php">Nathan Hjelm: "Re: [OMPI devel] openmpi and XRC API from ofed-3.12"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16445.php">Gilles Gouaillardet: "Re: [OMPI devel] openmpi and XRC API from ofed-3.12"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>In OFED-3.12 the API for XRC has changed. I did not find
<br>
corresponding changes in Open MPI: for example the function
<br>
'ibv_create_xrc_rcv_qp()' queried in openmpi configure script no
<br>
longer exists in ofed-3.12-rc1.
<br>
<p>Are there any plans to support the new XRC API ?
<br>
<p><p><pre>
--
Piotr
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14584.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: Remove heterogeneous support"</a>
<li><strong>Previous message:</strong> <a href="14582.php">Gilles Gouaillardet: "Re: [OMPI devel] coll/tuned MPI_Bcast can crash or silently fail when using distinct datatypes across tasks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14585.php">Nathan Hjelm: "Re: [OMPI devel] openmpi and XRC API from ofed-3.12"</a>
<li><strong>Reply:</strong> <a href="14585.php">Nathan Hjelm: "Re: [OMPI devel] openmpi and XRC API from ofed-3.12"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16445.php">Gilles Gouaillardet: "Re: [OMPI devel] openmpi and XRC API from ofed-3.12"</a>
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
