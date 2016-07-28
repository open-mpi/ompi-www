<?
$subject_val = "[OMPI users] Using MPI_Type_create_resized is leading to segfault when one-sided communication is used (ungarbled)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 27 11:47:01 2016" -->
<!-- isoreceived="20160127164701" -->
<!-- sent="Wed, 27 Jan 2016 16:46:52 +0000" -->
<!-- isosent="20160127164652" -->
<!-- name="Ramsey, James J CIV USARMY RDECOM ARL (US)" -->
<!-- email="james.j.ramsey14.civ_at_[hidden]" -->
<!-- subject="[OMPI users] Using MPI_Type_create_resized is leading to segfault when one-sided communication is used (ungarbled)" -->
<!-- id="B5E7491E7F72164997C336AA7C85A5FC74C302E1_at_ucolhpkt.easf.csd.disa.mil" -->
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
<strong>Subject:</strong> [OMPI users] Using MPI_Type_create_resized is leading to segfault when one-sided communication is used (ungarbled)<br>
<strong>From:</strong> Ramsey, James J CIV USARMY RDECOM ARL (US) (<em>james.j.ramsey14.civ_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-27 11:46:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28393.php">Ben Menadue: "[OMPI users] Any changes to rmaps in 1.10.2?"</a>
<li><strong>Previous message:</strong> <a href="28391.php">Ramsey, James J CIV USARMY RDECOM ARL (US): "[OMPI users] Using MPI_Type_create_resized is leading to segfault when one-sided communication is used"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28394.php">Gilles Gouaillardet: "Re: [OMPI users] Using MPI_Type_create_resized is leading to segfault when one-sided communication is used (ungarbled)"</a>
<li><strong>Reply:</strong> <a href="28394.php">Gilles Gouaillardet: "Re: [OMPI users] Using MPI_Type_create_resized is leading to segfault when one-sided communication is used (ungarbled)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In case the last message came out garbled because newlines were removed, I've send it again. Anyway,I've been trying to create a derived datatype for use in one-sided communication, and I find that attempting to modify the extents to account for potential alignment issues is making things *worse*, at least when one-sided communication is used. Modifying extents seems to work fine when using the datatype for two-sided communication, however. I also find that the problem seems to occur with the version of OpenMPI on my workstation (which, unfortunately, is a prior stable release, 1.8.5), but not with Cray's MPICH. Mainly, I'm trying to figure out if there's a problem with my code that OpenMPI is catching but Cray is not, or if the problem is at OpenMPI's end. The attached test code that triggers the problem for me when compiled with &quot;-DADJ_EXTENT&quot;.



<br>

<br><hr>
<ul>
<li>text/x-c++src attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28392/testMPI_OneSided_with_derDat_alloc_mem.cpp">testMPI_OneSided_with_derDat_alloc_mem.cpp</a>
</ul>
<!-- attachment="testMPI_OneSided_with_derDat_alloc_mem.cpp" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28393.php">Ben Menadue: "[OMPI users] Any changes to rmaps in 1.10.2?"</a>
<li><strong>Previous message:</strong> <a href="28391.php">Ramsey, James J CIV USARMY RDECOM ARL (US): "[OMPI users] Using MPI_Type_create_resized is leading to segfault when one-sided communication is used"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28394.php">Gilles Gouaillardet: "Re: [OMPI users] Using MPI_Type_create_resized is leading to segfault when one-sided communication is used (ungarbled)"</a>
<li><strong>Reply:</strong> <a href="28394.php">Gilles Gouaillardet: "Re: [OMPI users] Using MPI_Type_create_resized is leading to segfault when one-sided communication is used (ungarbled)"</a>
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
