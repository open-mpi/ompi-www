<?
$subject_val = "[OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  2 08:39:04 2015" -->
<!-- isoreceived="20150902123904" -->
<!-- sent="Wed, 2 Sep 2015 14:39:03 +0200" -->
<!-- isosent="20150902123903" -->
<!-- name="Diego Avesani" -->
<!-- email="diego.avesani_at_[hidden]" -->
<!-- subject="[OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)" -->
<!-- id="CAG8o1y66GSgwZjuxF=92LuswhTygeM6vKHL9mX7CHXx4Vuipwg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)<br>
<strong>From:</strong> Diego Avesani (<em>diego.avesani_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-02 08:39:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27523.php">Gilles Gouaillardet: "Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)"</a>
<li><strong>Previous message:</strong> <a href="27521.php">Saliya Ekanayake: "Re: [OMPI users] OpenMPI optimizations for intra-node process communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27523.php">Gilles Gouaillardet: "Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)"</a>
<li><strong>Reply:</strong> <a href="27523.php">Gilles Gouaillardet: "Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>I have notice small difference between OPEN-MPI and intel MPI.
<br>
For example in MPI_ALLREDUCE in intel MPI is not allowed to use the same
<br>
variable in send and receiving Buff.
<br>
<p>I have written my code in OPEN-MPI, but unfortunately I have to run in on a
<br>
intel-MPI cluster.
<br>
Now I have the following error:
<br>
<p>*atal error in MPI_Isend: Invalid communicator, error stack:*
<br>
*MPI_Isend(158): MPI_Isend(buf=0x1dd27b0, count=1, INVALID DATATYPE,
<br>
dest=0, tag=0, comm=0x0, request=0x7fff9d7dd9f0) failed*
<br>
<p><p>This is ho I create my type:
<br>
<p>*  CALL  MPI_TYPE_VECTOR(1, Ncoeff_MLS, Ncoeff_MLS, MPI_DOUBLE_PRECISION,
<br>
coltype, MPIdata%iErr) *
<br>
*  CALL  MPI_TYPE_COMMIT(coltype, MPIdata%iErr)*
<br>
*  !*
<br>
*  CALL  MPI_TYPE_VECTOR(1, nVar, nVar, coltype, MPI_WENO_TYPE,
<br>
MPIdata%iErr) *
<br>
*  CALL  MPI_TYPE_COMMIT(MPI_WENO_TYPE, MPIdata%iErr)*
<br>
<p><p>do you believe that is here the problem?
<br>
Is also this the way how intel MPI create a datatype?
<br>
<p>maybe I could also ask to intel MPI users
<br>
What do you think?
<br>
<p>Diego
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27522/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27523.php">Gilles Gouaillardet: "Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)"</a>
<li><strong>Previous message:</strong> <a href="27521.php">Saliya Ekanayake: "Re: [OMPI users] OpenMPI optimizations for intra-node process communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27523.php">Gilles Gouaillardet: "Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)"</a>
<li><strong>Reply:</strong> <a href="27523.php">Gilles Gouaillardet: "Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)"</a>
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
