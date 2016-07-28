<?
$subject_val = "[OMPI devel] mpirun hang (regression in bffb2b7a4bb49c9188d942201b8a8f04872ff63c)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 24 02:26:14 2014" -->
<!-- isoreceived="20141224072614" -->
<!-- sent="Wed, 24 Dec 2014 16:26:20 +0900" -->
<!-- isosent="20141224072620" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="[OMPI devel] mpirun hang (regression in bffb2b7a4bb49c9188d942201b8a8f04872ff63c)" -->
<!-- id="549A6A9C.1020908_at_iferc.org" -->
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
<strong>Subject:</strong> [OMPI devel] mpirun hang (regression in bffb2b7a4bb49c9188d942201b8a8f04872ff63c)<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-24 02:26:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16721.php">Ralph Castain: "Re: [OMPI devel] mpirun hang (regression in bffb2b7a4bb49c9188d942201b8a8f04872ff63c)"</a>
<li><strong>Previous message:</strong> <a href="16719.php">Gilles Gouaillardet: "Re: [OMPI devel] Different behaviour with MPI_IN_PLACE in MPI_Reduce_scatter() and MPI_Ireduce_scatter()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16721.php">Ralph Castain: "Re: [OMPI devel] mpirun hang (regression in bffb2b7a4bb49c9188d942201b8a8f04872ff63c)"</a>
<li><strong>Reply:</strong> <a href="16721.php">Ralph Castain: "Re: [OMPI devel] mpirun hang (regression in bffb2b7a4bb49c9188d942201b8a8f04872ff63c)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>i tried to debug the issue reported by Siegmar at
<br>
<a href="http://www.open-mpi.org/community/lists/users/2014/12/26052.php">http://www.open-mpi.org/community/lists/users/2014/12/26052.php</a>
<br>
<p>i have not been able to try this on an heterogeneous cluster yet, but i
<br>
could
<br>
reproduce a hang with 2 nodes and 3 tasks :
<br>
<p>mpirun -host node0,node1 -np 3 --mca btl tcp,self --mca coll ^ml
<br>
./helloworld
<br>
<p>git bisect pointed to commit
<br>
<a href="https://github.com/hppritcha/ompi/commit/bffb2b7a4bb49c9188d942201b8a8f04872ff63c">https://github.com/hppritcha/ompi/commit/bffb2b7a4bb49c9188d942201b8a8f04872ff63c</a>,
<br>
and reverting a subpart of this commit &quot;fixes&quot; the hang
<br>
(see attached patch)
<br>
<p>your change correctly prevents the use of uninitialized data (worst case
<br>
scenario is a crash),
<br>
but has some undesired side effects that eventually causes a hang.
<br>
<p><p>could you please have a look at it ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>
<br><hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16720/pmix_server.patch">pmix_server.patch</a>
</ul>
<!-- attachment="pmix_server.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16721.php">Ralph Castain: "Re: [OMPI devel] mpirun hang (regression in bffb2b7a4bb49c9188d942201b8a8f04872ff63c)"</a>
<li><strong>Previous message:</strong> <a href="16719.php">Gilles Gouaillardet: "Re: [OMPI devel] Different behaviour with MPI_IN_PLACE in MPI_Reduce_scatter() and MPI_Ireduce_scatter()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16721.php">Ralph Castain: "Re: [OMPI devel] mpirun hang (regression in bffb2b7a4bb49c9188d942201b8a8f04872ff63c)"</a>
<li><strong>Reply:</strong> <a href="16721.php">Ralph Castain: "Re: [OMPI devel] mpirun hang (regression in bffb2b7a4bb49c9188d942201b8a8f04872ff63c)"</a>
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
