<?
$subject_val = "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  2 20:39:26 2014" -->
<!-- isoreceived="20141003003926" -->
<!-- sent="Fri, 3 Oct 2014 00:39:20 +0000" -->
<!-- isosent="20141003003920" -->
<!-- name="Kawashima, Takahiro" -->
<!-- email="t-kawashima_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT" -->
<!-- id="20141003093919.09342582f60241929b892764_at_jp.fujitsu.com" -->
<!-- charset="iso-2022-jp" -->
<!-- inreplyto="CAG8o1y5b=LGZr5B3_dQ9G+WYzyeixBcuXOw=M-oUWAE-tAffXQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT<br>
<strong>From:</strong> Kawashima, Takahiro (<em>t-kawashima_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-02 20:39:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25433.php">Nick Papior Andersen: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>Previous message:</strong> <a href="25431.php">XingFENG: "Re: [OMPI users] About valgrind and OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="25427.php">Diego Avesani: "[OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25433.php">Nick Papior Andersen: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>Reply:</strong> <a href="25433.php">Nick Papior Andersen: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Diego,
<br>
<p>I don't know what CPU/compiler you are using and what -r8
<br>
option means, but DISPLACEMENTS(2) and DISPLACEMENTS(3) is
<br>
incorrect if integer is 4 bytes and real is 8 bytes.
<br>
In this case, usually there is a gap between ip and RP.
<br>
See description about datatype alignment in the MPI Standard.
<br>
<p>Regards,
<br>
Takahiro
<br>
<p><span class="quotelev1">&gt; Dear all.
</span><br>
<span class="quotelev1">&gt; I have some problem with MPI_TYPE_CREATE_STRUCT and as a consequence
</span><br>
<span class="quotelev1">&gt; with SENDRECV.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have this variable type
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *type particle*
</span><br>
<span class="quotelev1">&gt; *integer :: ip*
</span><br>
<span class="quotelev1">&gt; * real :: RP(2)*
</span><br>
<span class="quotelev1">&gt; * real :: QQ(4)*
</span><br>
<span class="quotelev1">&gt; *end type particle*
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I compile in double precision with:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *mpif90 -r8 -fpp -DPARALLEL *.f90 *
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So when I create my own variable type for MPI, I have
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *TYPES(1)=MPI_INTEGER                           !We have three variables
</span><br>
<span class="quotelev1">&gt; type in the new varible*
</span><br>
<span class="quotelev1">&gt; *TYPES(2)=MPI_DOUBLE_PRECISION       !Integer and Real and Real*
</span><br>
<span class="quotelev1">&gt; * TYPES(3)=MPI_DOUBLE_PRECISION       !Integer and Real and Real*
</span><br>
<span class="quotelev1">&gt; * nBLOCKS(1)=1                                              !number of
</span><br>
<span class="quotelev1">&gt; element in each block *
</span><br>
<span class="quotelev1">&gt; * nBLOCKS(2)=2*
</span><br>
<span class="quotelev1">&gt; *  nBLOCKS(3)=4*
</span><br>
<span class="quotelev1">&gt; *  !*
</span><br>
<span class="quotelev1">&gt; *  DISPLACEMENTS(1)=0*
</span><br>
<span class="quotelev1">&gt; *  DISPLACEMENTS(2)=sizeof(dummy%ip)*
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; DISPLACEMENTS(3)=sizeof(dummy%ip)+sizeof(dummy%RP(1))+sizeof(dummy%RP(2))*
</span><br>
<span class="quotelev1">&gt; *   !  *
</span><br>
<span class="quotelev1">&gt; *  CALL
</span><br>
<span class="quotelev1">&gt; MPI_TYPE_CREATE_STRUCT(3,nBLOCKS,DISPLACEMENTS,TYPES,MPI_PARTICLE_TYPE,
</span><br>
<span class="quotelev1">&gt; PI%ierr)*
</span><br>
<span class="quotelev1">&gt; *   CALL MPI_TYPE_COMMIT(MPI_PARTICLE_TYPE,MPI%ierr)*
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Am I right?
</span><br>
<span class="quotelev1">&gt; Thanks, in advance, for any kind of help
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25433.php">Nick Papior Andersen: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>Previous message:</strong> <a href="25431.php">XingFENG: "Re: [OMPI users] About valgrind and OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="25427.php">Diego Avesani: "[OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25433.php">Nick Papior Andersen: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>Reply:</strong> <a href="25433.php">Nick Papior Andersen: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
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
