<?
$subject_val = "[OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  2 11:41:57 2014" -->
<!-- isoreceived="20141002154157" -->
<!-- sent="Thu, 2 Oct 2014 17:41:57 +0200" -->
<!-- isosent="20141002154157" -->
<!-- name="Diego Avesani" -->
<!-- email="diego.avesani_at_[hidden]" -->
<!-- subject="[OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT" -->
<!-- id="CAG8o1y5b=LGZr5B3_dQ9G+WYzyeixBcuXOw=M-oUWAE-tAffXQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT<br>
<strong>From:</strong> Diego Avesani (<em>diego.avesani_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-02 11:41:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25428.php">Lee-Ping Wang: "Re: [OMPI users] General question about running single-node jobs."</a>
<li><strong>Previous message:</strong> <a href="25426.php">Ralph Castain: "Re: [OMPI users] About valgrind and OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25432.php">Kawashima, Takahiro: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>Reply:</strong> <a href="25432.php">Kawashima, Takahiro: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all.
<br>
I have some problem with MPI_TYPE_CREATE_STRUCT and as a consequence
<br>
with SENDRECV.
<br>
<p>I have this variable type
<br>
<p>*type particle*
<br>
*integer :: ip*
<br>
* real :: RP(2)*
<br>
* real :: QQ(4)*
<br>
*end type particle*
<br>
<p>When I compile in double precision with:
<br>
<p>*mpif90 -r8 -fpp -DPARALLEL *.f90 *
<br>
<p>So when I create my own variable type for MPI, I have
<br>
<p><p>*TYPES(1)=MPI_INTEGER                           !We have three variables
<br>
type in the new varible*
<br>
*TYPES(2)=MPI_DOUBLE_PRECISION       !Integer and Real and Real*
<br>
* TYPES(3)=MPI_DOUBLE_PRECISION       !Integer and Real and Real*
<br>
* nBLOCKS(1)=1                                              !number of
<br>
element in each block *
<br>
* nBLOCKS(2)=2*
<br>
*  nBLOCKS(3)=4*
<br>
*  !*
<br>
*  DISPLACEMENTS(1)=0*
<br>
*  DISPLACEMENTS(2)=sizeof(dummy%ip)*
<br>
*
<br>
DISPLACEMENTS(3)=sizeof(dummy%ip)+sizeof(dummy%RP(1))+sizeof(dummy%RP(2))*
<br>
*   !  *
<br>
*  CALL
<br>
MPI_TYPE_CREATE_STRUCT(3,nBLOCKS,DISPLACEMENTS,TYPES,MPI_PARTICLE_TYPE,
<br>
PI%ierr)*
<br>
*   CALL MPI_TYPE_COMMIT(MPI_PARTICLE_TYPE,MPI%ierr)*
<br>
<p><p>Am I right?
<br>
Thanks, in advance, for any kind of help
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25427/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25428.php">Lee-Ping Wang: "Re: [OMPI users] General question about running single-node jobs."</a>
<li><strong>Previous message:</strong> <a href="25426.php">Ralph Castain: "Re: [OMPI users] About valgrind and OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25432.php">Kawashima, Takahiro: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>Reply:</strong> <a href="25432.php">Kawashima, Takahiro: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
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
