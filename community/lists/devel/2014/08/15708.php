<?
$subject_val = "[OMPI devel] coll/ml without hwloc (?)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 26 04:38:05 2014" -->
<!-- isoreceived="20140826083805" -->
<!-- sent="Tue, 26 Aug 2014 17:38:09 +0900" -->
<!-- isosent="20140826083809" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="[OMPI devel] coll/ml without hwloc (?)" -->
<!-- id="53FC4771.4060606_at_iferc.org" -->
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
<strong>Subject:</strong> [OMPI devel] coll/ml without hwloc (?)<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-26 04:38:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15709.php">Lisandro Dalcin: "[OMPI devel] Envelope of HINDEXED_BLOCK"</a>
<li><strong>Previous message:</strong> <a href="15707.php">Gilles Gouaillardet: "[OMPI devel] about the test_shmem_zero_get.x test from the openshmem test suite"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15711.php">Shamis, Pavel: "Re: [OMPI devel] coll/ml without hwloc (?)"</a>
<li><strong>Reply:</strong> <a href="15711.php">Shamis, Pavel: "Re: [OMPI devel] coll/ml without hwloc (?)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Folks,
<br>
<p>i just commited r32604 in order to fix compilation (pmix) when ompi is
<br>
configured with --without-hwloc
<br>
<p>now, even a trivial hello world program issues the following output
<br>
(which is a non fatal, and could even be reported as a warning) :
<br>
<p>[soleil][[32389,1],0][../../../../../../src/ompi-trunk/ompi/mca/coll/ml/coll_ml_module.c:1496:ml_discover_hierarchy]
<br>
COLL-ML Error: (size of mca_bcol_base_components_in_use = 3) != (size of
<br>
mca_sbgp_base_components_in_use = 2) or zero.
<br>
[soleil][[32389,1],1][../../../../../../src/ompi-trunk/ompi/mca/coll/ml/coll_ml_module.c:1496:ml_discover_hierarchy]
<br>
COLL-ML Error: (size of mca_bcol_base_components_in_use = 3) != (size of
<br>
mca_sbgp_base_components_in_use = 2) or zero.
<br>
<p><p>in my understanding, coll/ml somehow relies on the topology information
<br>
(reported by hwloc) so i am wondering whether we should simply
<br>
*not* compile coll/ml or set its priority to zero if ompi is configured
<br>
with --without-hwloc
<br>
<p>any thoughts ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15709.php">Lisandro Dalcin: "[OMPI devel] Envelope of HINDEXED_BLOCK"</a>
<li><strong>Previous message:</strong> <a href="15707.php">Gilles Gouaillardet: "[OMPI devel] about the test_shmem_zero_get.x test from the openshmem test suite"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15711.php">Shamis, Pavel: "Re: [OMPI devel] coll/ml without hwloc (?)"</a>
<li><strong>Reply:</strong> <a href="15711.php">Shamis, Pavel: "Re: [OMPI devel] coll/ml without hwloc (?)"</a>
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
