<?
$subject_val = "[OMPI devel] RFC: Neighborhood collective support";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 19 16:07:22 2013" -->
<!-- isoreceived="20130919200722" -->
<!-- sent="Thu, 19 Sep 2013 20:07:20 +0000" -->
<!-- isosent="20130919200720" -->
<!-- name="Hjelm, Nathan T" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: Neighborhood collective support" -->
<!-- id="AE45F2F55FE69B4F99BB3455E821D7153A590D1E_at_ECS-EXG-P-MB07.win.lanl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: Neighborhood collective support<br>
<strong>From:</strong> Hjelm, Nathan T (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-19 16:07:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12941.php">Victor Kocheganov: "[OMPI devel] MPI fails when launched with srun using openib btl."</a>
<li><strong>Previous message:</strong> <a href="12939.php">Ralph Castain: "Re: [OMPI devel] [OMPI users] Error in openmpi-1.9a1r29179"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12949.php">David Goodell (dgoodell): "Re: [OMPI devel] RFC: Neighborhood collective support"</a>
<li><strong>Reply:</strong> <a href="12949.php">David Goodell (dgoodell): "Re: [OMPI devel] RFC: Neighborhood collective support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What: Add neighborhood collective support to the trunk. These operations are required for MPI-3 compliance.
<br>
<p>When: One week: 9/19. This code is targeted for 1.7.4 and should have plenty of time to cook in the trunk.
<br>
<p>The attached patch implements the neighborhood collectives defined in MPI-3. Please pay special attention to the man pages (the wording on buffer ordering is directly copy and pasted from MPI-3), fortran bindings, and MPI standards compliance. I have implemented simple tests for cartesian, graph, and dist graph topologies for the Open MPI/IBM test suite and all tests pass. I will push those tests to MTT tomorrow.
<br>
<p>-Nathan
<br>

<br><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12940/0001-MPI-3-Add-support-for-neighborhood-collectives.patch.gz">0001-MPI-3-Add-support-for-neighborhood-collectives.patch.gz</a>
</ul>
<!-- attachment="0001-MPI-3-Add-support-for-neighborhood-collectives.patch.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12941.php">Victor Kocheganov: "[OMPI devel] MPI fails when launched with srun using openib btl."</a>
<li><strong>Previous message:</strong> <a href="12939.php">Ralph Castain: "Re: [OMPI devel] [OMPI users] Error in openmpi-1.9a1r29179"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12949.php">David Goodell (dgoodell): "Re: [OMPI devel] RFC: Neighborhood collective support"</a>
<li><strong>Reply:</strong> <a href="12949.php">David Goodell (dgoodell): "Re: [OMPI devel] RFC: Neighborhood collective support"</a>
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
