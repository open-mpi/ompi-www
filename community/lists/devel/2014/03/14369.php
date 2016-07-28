<?
$subject_val = "[OMPI devel] 1.7.5 and trunk failures";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 18 23:23:27 2014" -->
<!-- isoreceived="20140319032327" -->
<!-- sent="Tue, 18 Mar 2014 20:22:02 -0700" -->
<!-- isosent="20140319032202" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.7.5 and trunk failures" -->
<!-- id="B13ACAAE-36BD-46CD-939E-42CCCEEB1E7E_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI devel] 1.7.5 and trunk failures<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-18 23:22:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14370.php">Adrian Reber: "[OMPI devel] Open MPI and CRIU stdout/stderr"</a>
<li><strong>Previous message:</strong> <a href="14368.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MPIEXEC_TIMEOUT broken in v1.7 branch @ r31103"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14373.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.5 and trunk failures"</a>
<li><strong>Reply:</strong> <a href="14373.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.5 and trunk failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just to be safe, I blew away my existing installations and got completely fresh checkouts. I am doing a vanilla configure, with the only configure options besides prefix being --enable-orterun-prefix-by-default and --enable-mpi-java (so I can test the Java bindings)
<br>
<p>For 1.7.5, running the IBM test suite, I get the following failures on my 2-node cluster, running map-by node:
<br>
<p>*** WARNING: Test: ineighbor_allgatherv, np=2, variant=1: FAILED
<br>
*** WARNING: Test: neighbor_allgatherv, np=2, variant=1: FAILED
<br>
*** WARNING: Test: ineighbor_alltoallv, np=2, variant=1: FAILED
<br>
*** WARNING: Test: ineighbor_alltoall, np=2, variant=1: FAILED
<br>
*** WARNING: Test: neighbor_alltoallw, np=2, variant=1: FAILED
<br>
*** WARNING: Test: neighbor_alltoallv, np=2, variant=1: FAILED
<br>
*** WARNING: Test: neighbor_alltoall, np=2, variant=1: FAILED
<br>
*** WARNING: Test: ineighbor_alltoallw, np=2, variant=1: FAILED
<br>
*** WARNING: Test: ineighbor_allgather, np=2, variant=1: FAILED
<br>
*** WARNING: Test: neighbor_allgather, np=2, variant=1: FAILED
<br>
*** WARNING: Test: create_group_usempi, np=2, variant=1: FAILED
<br>
*** WARNING: Test: create_group_mpifh, np=2, variant=1: FAILED
<br>
*** WARNING: Test: create_group, np=2, variant=1: FAILED
<br>
*** WARNING: Test: idx_null, np=2, variant=1: FAILED
<br>
<p><p>From the Intel test suite:
<br>
<p>*** WARNING: Test: MPI_Keyval3_c, np=6, variant=1: FAILED
<br>
*** WARNING: Test: MPI_Allgatherv_c, np=6, variant=1: TIMED OUT (failed)
<br>
*** WARNING: Test: MPI_Graph_create_undef_c, np=6, variant=1: FAILED
<br>
<p>I subsequently removed the map-by node directive so everything basically ran on the head node with mpirun, just in case having the procs on separate nodes was the cause of the problem. However, the exact same failures were observed again.
<br>
<p>Note that the 1.7.5 branch ran clean (except for idx_null, which we understand) yesterday, so this is caused by something new today. I then tested the trunk and got the identical errors.
<br>
<p>I don't see how we can release with this situation, so we appear to be stuck until someone can figure out what happened and fix it.
<br>
Ralph
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14369/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14370.php">Adrian Reber: "[OMPI devel] Open MPI and CRIU stdout/stderr"</a>
<li><strong>Previous message:</strong> <a href="14368.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MPIEXEC_TIMEOUT broken in v1.7 branch @ r31103"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14373.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.5 and trunk failures"</a>
<li><strong>Reply:</strong> <a href="14373.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.5 and trunk failures"</a>
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
