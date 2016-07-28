<?
$subject_val = "Re: [OMPI devel] MPI_Recv_init_null_c from intel test suite fails vs ompi trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  4 03:49:54 2014" -->
<!-- isoreceived="20140704074954" -->
<!-- sent="Fri, 04 Jul 2014 16:50:09 +0900" -->
<!-- isosent="20140704075009" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Recv_init_null_c from intel test suite fails vs ompi trunk" -->
<!-- id="53B65CB1.3020907_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="d7652fc7b5964672baea7adaafd9531c_at_DB3PR05MB427.eurprd05.prod.outlook.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI_Recv_init_null_c from intel test suite fails vs ompi trunk<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-04 03:50:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15073.php">olivier.lahaye1_at_[hidden]: "[OMPI devel] centos-7 / rhel-7 build fail (configure fails to recognize g++)"</a>
<li><strong>Previous message:</strong> <a href="15071.php">Greg Thomsen: "Re: [OMPI devel] mpirun Produces Extraneous Output"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14589.php">Gilles Gouaillardet: "[OMPI devel] MPI_Recv_init_null_c from intel test suite fails vs ompi trunk"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yossi,
<br>
<p>thanks for reporting this issue.
<br>
<p>i commited r32139 and r32140 to trunk in order to fix this issue (with
<br>
MPI_Startall)
<br>
and some misc extra bugs.
<br>
<p>i also made CMR #4764 for the v1.8 branch (and asked George to review it)
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 2014/07/03 22:25, Yossi Etigin wrote:
<br>
<span class="quotelev1">&gt; Looks like this has to be fixed also for MPI_Startall, right?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15073.php">olivier.lahaye1_at_[hidden]: "[OMPI devel] centos-7 / rhel-7 build fail (configure fails to recognize g++)"</a>
<li><strong>Previous message:</strong> <a href="15071.php">Greg Thomsen: "Re: [OMPI devel] mpirun Produces Extraneous Output"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14589.php">Gilles Gouaillardet: "[OMPI devel] MPI_Recv_init_null_c from intel test suite fails vs ompi trunk"</a>
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
