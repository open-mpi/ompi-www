<?
$subject_val = "[OMPI devel] MPI_Recv_init_null_c from intel test suite fails vs ompi trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 24 00:14:04 2014" -->
<!-- isoreceived="20140424041404" -->
<!-- sent="Thu, 24 Apr 2014 13:14:01 +0900" -->
<!-- isosent="20140424041401" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="[OMPI devel] MPI_Recv_init_null_c from intel test suite fails vs ompi trunk" -->
<!-- id="53588F89.8090408_at_iferc.org" -->
<!-- charset="windows-1252" -->
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
<strong>Subject:</strong> [OMPI devel] MPI_Recv_init_null_c from intel test suite fails vs ompi trunk<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-24 00:14:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14590.php">Mike Dubman: "[OMPI devel] RFC: Well-known mca parameters"</a>
<li><strong>Previous message:</strong> <a href="14588.php">George Bosilca: "Re: [OMPI devel] Bug report: non-blocking allreduce with user-defined operation gives segfault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14596.php">George Bosilca: "Re: [OMPI devel] MPI_Recv_init_null_c from intel test suite fails vs ompi trunk"</a>
<li><strong>Reply:</strong> <a href="14596.php">George Bosilca: "Re: [OMPI devel] MPI_Recv_init_null_c from intel test suite fails vs ompi trunk"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15072.php">Gilles Gouaillardet: "Re: [OMPI devel] MPI_Recv_init_null_c from intel test suite fails vs ompi trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Folks,
<br>
<p>Here is attached an oversimplified version of the MPI_Recv_init_null_c
<br>
test from the
<br>
intel test suite.
<br>
<p>the test works fine with v1.6, v1.7 and v1.8 branches but fails with the
<br>
trunk.
<br>
<p>i wonder wether the bug is in OpenMPI or the test itself.
<br>
<p>on one hand, we could consider there is a bug in OpenMPI :
<br>
status.MPI_SOURCE should be MPI_PROC_NULL since we explicitly posted a
<br>
recv request with MPI_PROC_NULL.
<br>
<p>on the other hand, (mpi specs, chapter 3.7.3 and
<br>
<a href="https://svn.open-mpi.org/trac/ompi/ticket/3475">https://svn.open-mpi.org/trac/ompi/ticket/3475</a>)
<br>
we could consider the returned value is not significant, and hence
<br>
MPI_Wait should return an
<br>
empty status (and empty status has source=MPI_ANY_SOURCE per the MPI specs).
<br>
<p>for what it's worth, this test is a success with mpich (e.g.
<br>
status.MPI_SOURCE is MPI_PROC_NULL).
<br>
<p><p>what is the correct interpretation of the MPI specs and what should be
<br>
done ?
<br>
(e.g. fix OpenMPI or fix/skip the test ?)
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14589/test_recv_init_null.c">test_recv_init_null.c</a>
</ul>
<!-- attachment="test_recv_init_null.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14590.php">Mike Dubman: "[OMPI devel] RFC: Well-known mca parameters"</a>
<li><strong>Previous message:</strong> <a href="14588.php">George Bosilca: "Re: [OMPI devel] Bug report: non-blocking allreduce with user-defined operation gives segfault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14596.php">George Bosilca: "Re: [OMPI devel] MPI_Recv_init_null_c from intel test suite fails vs ompi trunk"</a>
<li><strong>Reply:</strong> <a href="14596.php">George Bosilca: "Re: [OMPI devel] MPI_Recv_init_null_c from intel test suite fails vs ompi trunk"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15072.php">Gilles Gouaillardet: "Re: [OMPI devel] MPI_Recv_init_null_c from intel test suite fails vs ompi trunk"</a>
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
