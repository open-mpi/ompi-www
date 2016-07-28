<?
$subject_val = "[OMPI devel] RFC: initial MPI_T support";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  5 14:52:16 2013" -->
<!-- isoreceived="20130405185216" -->
<!-- sent="Fri, 5 Apr 2013 12:52:12 -0600" -->
<!-- isosent="20130405185212" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: initial MPI_T support" -->
<!-- id="20130405185211.GD48939_at_panthera.lanl.gov" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: initial MPI_T support<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-05 14:52:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12252.php">Nathan Hjelm: "Re: [OMPI devel] RFC: initial MPI_T support"</a>
<li><strong>Previous message:</strong> <a href="12250.php">Shamis, Pavel: "Re: [OMPI devel] Trunk: Link Failure -- multiple definition of ib_address_t_class"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12252.php">Nathan Hjelm: "Re: [OMPI devel] RFC: initial MPI_T support"</a>
<li><strong>Reply:</strong> <a href="12252.php">Nathan Hjelm: "Re: [OMPI devel] RFC: initial MPI_T support"</a>
<li><strong>Maybe reply:</strong> <a href="12260.php">Ralph Castain: "Re: [OMPI devel] RFC: initial MPI_T support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What: Add initial support for the MPI 3.0 tools interface (MPI_T). Inital support includes full support for the MPI_T_cvar and MPI_T_category interfaces. No pvars are available at this time. Support for pvars will be added at a later time.
<br>
<p>Why: To be MPI 3.0 compliant the MPI_T interface must be implemented. This RFC implements the complete interface.
<br>
<p>When: Monday April 8, 2013. We can make adjustments to the implementation after it is committed to the trunk. The only changes that really need to be reviewed are: ompi/include/mpi.h.in, and structure of the incomming code.
<br>
<p>The changes can be found @ <a href="https://github.com/hjelmn/ompi-mca-var/tree/mpit-commit">https://github.com/hjelmn/ompi-mca-var/tree/mpit-commit</a>
<br>
<p>Jeff, I added the MPI_T error codes to mpif-values.pl even though they will never be returned by a fortran function. Don't know if that was necessary or not. Please advise.
<br>
<p>Look at:
<br>
<a href="https://github.com/hjelmn/ompi-mca-var/commit/689d7d5d95f982794bcba8afb385cdce80bf75e1">https://github.com/hjelmn/ompi-mca-var/commit/689d7d5d95f982794bcba8afb385cdce80bf75e1</a>
<br>
<a href="https://github.com/hjelmn/ompi-mca-var/commit/80338e741b1749bb235b9cf45e0db579efe4d61d">https://github.com/hjelmn/ompi-mca-var/commit/80338e741b1749bb235b9cf45e0db579efe4d61d</a>
<br>
<p>-Nathan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12252.php">Nathan Hjelm: "Re: [OMPI devel] RFC: initial MPI_T support"</a>
<li><strong>Previous message:</strong> <a href="12250.php">Shamis, Pavel: "Re: [OMPI devel] Trunk: Link Failure -- multiple definition of ib_address_t_class"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12252.php">Nathan Hjelm: "Re: [OMPI devel] RFC: initial MPI_T support"</a>
<li><strong>Reply:</strong> <a href="12252.php">Nathan Hjelm: "Re: [OMPI devel] RFC: initial MPI_T support"</a>
<li><strong>Maybe reply:</strong> <a href="12260.php">Ralph Castain: "Re: [OMPI devel] RFC: initial MPI_T support"</a>
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
