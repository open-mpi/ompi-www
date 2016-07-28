<?
$subject_val = "[OMPI devel] 1.10.3rc1 available for test";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  8 13:27:03 2016" -->
<!-- isoreceived="20160408172703" -->
<!-- sent="Fri, 8 Apr 2016 10:26:59 -0700" -->
<!-- isosent="20160408172659" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.10.3rc1 available for test" -->
<!-- id="B90F7845-00E0-48C3-A5B2-F0E5807B57C5_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI devel] 1.10.3rc1 available for test<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-08 13:26:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18752.php">David Froger: "[OMPI devel] pal_installdirs_base_framework declaration"</a>
<li><strong>Previous message:</strong> <a href="18750.php">dpchoudh .: "Re: [OMPI devel] IP address to verb interface mapping"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks
<br>
<p>We are prepping for release of 1.10.3, so please test the release candidate:
<br>
<p><a href="https://www.open-mpi.org/software/ompi/v1.10/">https://www.open-mpi.org/software/ompi/v1.10/</a> &lt;<a href="https://www.open-mpi.org/software/ompi/v1.10/">https://www.open-mpi.org/software/ompi/v1.10/</a>&gt;
<br>
<p>Changes include:
<br>
<p>1.10.3
<br>
------
<br>
<p>- Minor manpage cleanups
<br>
- Implement atomic support in OSHMEM/UCX
<br>
- Fix support of MPI_COMBINER_RESIZED. Thanks to James Ramsey
<br>
&nbsp;&nbsp;for the report
<br>
- Fix computation of #cpus when --use-hwthread-cpus is used
<br>
- Add entry points for Allgatherv, iAllgatherv, Reduce, and iReduce
<br>
&nbsp;&nbsp;for the HCOLL library
<br>
- Fix an HCOLL integration bug that could signal completion of request
<br>
&nbsp;&nbsp;while still being worked
<br>
- Fix computation of cores when SMT is enabled. Thanks to Ben Menadue
<br>
&nbsp;&nbsp;for the report
<br>
- Various USNIC fixes
<br>
- Create a datafile in the per-proc directory in order to make it
<br>
&nbsp;&nbsp;unique per communicator. Thanks to Peter Wind for the report
<br>
- Fix zero-size malloc in one-sided pt-to-pt code. Thanks to Lisandro
<br>
&nbsp;&nbsp;Dalcin for the report
<br>
- Fix MPI_Get_address when passed MPI_BOTTOM to not return an error.
<br>
&nbsp;&nbsp;Thanks to Lisandro Dalcin for the report
<br>
- Fix MPI_TYPE_SET_ATTR with NULL value. Thanks to Lisandro Dalcin for
<br>
&nbsp;&nbsp;the report
<br>
- Fix various Fortran08 binding issues
<br>
- Fix memchecker no-data case. Thanks to Clinton Stimpson for the report
<br>
- Fix CUDA support under OS-X
<br>
- Fix various OFI/MTL integration issues
<br>
- Add MPI_T man pages
<br>
- Fix one-sided pt-to-pt issue by preventing communication from happening
<br>
&nbsp;&nbsp;before a target enters a fence, even in the no-precede case
<br>
- Fix a bug that disabled Totalview for MPMD use-case
<br>
- Correctly support MPI_UNWEIGHTED in topo-graph-neighbors. Thanks to
<br>
&nbsp;&nbsp;Jun Kudo for the report
<br>
- Fix singleton operations under SLURM when PMI2 is enabled
<br>
- Do not use MPI_IN_PLACE in neighborhood collectives for non-blocking
<br>
&nbsp;&nbsp;collectives (libnbc). Thanks to Jun Kudo for the report
<br>
- Silence autogen deprecation warnings for newer versions of Perl
<br>
- Do not return MPI_ERR_PENDING from collectives
<br>
- Use type int* for MPI_WIN_DISP_UNIT, MPI_WIN_CREATE_FLAVOR, and MPI_WIN_MODEL.
<br>
&nbsp;&nbsp;Thanks to Alastair McKinstry for the report
<br>
- Fix register_datarep stub function in IO/OMPIO. Thanks to Eric
<br>
&nbsp;&nbsp;Chamberland for the report
<br>
- Fix a bus error on MPI_WIN_[POST,START] in the shared memory one-sided component
<br>
- Add several missing MPI_WIN_FLAVOR constants to the Fortran support
<br>
- Enable connecting processes from different subnets using the openib BTL
<br>
- Fix bug in basic/barrier algorithm in OSHMEM
<br>
- Correct process binding for the --map-by node case
<br>
<p><p>Thanks
<br>
Ralph
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18751/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18752.php">David Froger: "[OMPI devel] pal_installdirs_base_framework declaration"</a>
<li><strong>Previous message:</strong> <a href="18750.php">dpchoudh .: "Re: [OMPI devel] IP address to verb interface mapping"</a>
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
