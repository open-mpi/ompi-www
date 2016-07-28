<?
$subject_val = "[OMPI devel] RFC: Finish MPI-3.0 non-blocking collectives + new comm functions";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 26 18:09:03 2013" -->
<!-- isoreceived="20130926220903" -->
<!-- sent="Thu, 26 Sep 2013 16:09:01 -0600" -->
<!-- isosent="20130926220901" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: Finish MPI-3.0 non-blocking collectives + new comm functions" -->
<!-- id="20130926220901.GA64809_at_pn1246003.lanl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: Finish MPI-3.0 non-blocking collectives + new comm functions<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-26 18:09:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12999.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29265 - in trunk/ompi: include mca/coll mca/coll/base mca/coll/basic mca/coll/libnbc mpi/c mpi/c/profile mpi/fortran/base mpi/fortran/mpif-h mpi/fortran/mpif-h/profile mpi/fortran/use-mpi-f08 mpi/fortran/use-mpi-f08/profile mpi/fortran/use-mpi-ignore-tkr mpi/fortran/use-mpi-tkr/scripts mpi/man/man3"</a>
<li><strong>Previous message:</strong> <a href="12997.php">Ralph Castain: "[OMPI devel] v1.7.3rc1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What: Add basic algorithms for the various non-blocking intercommunicator
<br>
collectives and add support for MPI_Comm_dup_with_info, MPI_Comm_create_group,
<br>
and MPI_Comm_idup. These features are targeted for 1.7.4.
<br>
<p>When: Commiting this next Wednesday. This may not give much time for feedback
<br>
but there will be plenty of time for this to soak on the trunk (and be subject
<br>
to MTT) before it goes into 1.7.x.
<br>
<p>Why: MPI-3.0 compliance!
<br>
<p>See the attached patches for additonal details.
<br>
<p>-Nathan
<br>
<p>

<br><hr>
<ul>
<li>application/x-gunzip attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12998/0001-Add-basic-algorithms-for-the-remaining-non-blocking.patch.gz">0001-Add-basic-algorithms-for-the-remaining-non-blocking.patch.gz</a>
</ul>
<!-- attachment="0001-Add-basic-algorithms-for-the-remaining-non-blocking.patch.gz" -->
<hr>
<ul>
<li>application/x-gunzip attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12998/0002-Add-support-for-MPI_Comm_dup_with_info-MPI_Comm_cre.patch.gz">0002-Add-support-for-MPI_Comm_dup_with_info-MPI_Comm_cre.patch.gz</a>
</ul>
<!-- attachment="0002-Add-support-for-MPI_Comm_dup_with_info-MPI_Comm_cre.patch.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12999.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29265 - in trunk/ompi: include mca/coll mca/coll/base mca/coll/basic mca/coll/libnbc mpi/c mpi/c/profile mpi/fortran/base mpi/fortran/mpif-h mpi/fortran/mpif-h/profile mpi/fortran/use-mpi-f08 mpi/fortran/use-mpi-f08/profile mpi/fortran/use-mpi-ignore-tkr mpi/fortran/use-mpi-tkr/scripts mpi/man/man3"</a>
<li><strong>Previous message:</strong> <a href="12997.php">Ralph Castain: "[OMPI devel] v1.7.3rc1"</a>
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
