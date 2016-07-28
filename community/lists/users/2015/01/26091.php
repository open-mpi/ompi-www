<?
$subject_val = "[OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan  2 05:03:08 2015" -->
<!-- isoreceived="20150102100308" -->
<!-- sent="Fri, 2 Jan 2015 11:03:07 +0100" -->
<!-- isosent="20150102100307" -->
<!-- name="Diego Avesani" -->
<!-- email="diego.avesani_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED" -->
<!-- id="CAG8o1y7GYxAEvhxEamktE=Xmhq2cm3Abs_SKUQbsPF6dPc_+rg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED<br>
<strong>From:</strong> Diego Avesani (<em>diego.avesani_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-02 05:03:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26092.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/12/26090.php">Waleed Lotfy: "Re: [OMPI users] Icreasing OFED registerable memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26092.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
<li><strong>Maybe reply:</strong> <a href="26092.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
dear all,
<br>
<p>I have a problem with MPI_Type_Create_Struct and MPI_TYPE_CREATE_RESIZED.
<br>
<p>I have this variable type:
<br>
<p>*  TYPE tParticle*
<br>
*     INTEGER  :: ip*
<br>
*     REAL     :: RP(2)*
<br>
*     REAL     :: QQ(2)*
<br>
*  ENDTYPE tParticle*
<br>
<p>Then I define:
<br>
<p>Nstruct=3
<br>
*ALLOCATE(TYPES(Nstruct))*
<br>
*ALLOCATE(LENGTHS(Nstruct))*
<br>
*ALLOCATE(DISPLACEMENTS(Nstruct))*
<br>
*!set the types*
<br>
*TYPES(1) = MPI_INTEGER*
<br>
*TYPES(2) = MPI_DOUBLE_PRECISION*
<br>
*TYPES(3) = MPI_DOUBLE_PRECISION*
<br>
*!set the lengths*
<br>
*LENGTHS(1) = 1*
<br>
*LENGTHS(2) = 2*
<br>
*LENGTHS(3) = 2*
<br>
<p>As gently suggested by Nick Papior Andersen and George Bosilca some months
<br>
ago, I checked the variable adress to resize my struct variable to avoid
<br>
empty space and
<br>
to have a more general definition.
<br>
<p>* !*
<br>
* CALL MPI_GET_ADDRESS(dummy%ip,    DISPLACEMENTS(1), MPI%iErr)*
<br>
* CALL MPI_GET_ADDRESS(dummy%RP(1), DISPLACEMENTS(2), MPI%iErr)*
<br>
* CALL MPI_GET_ADDRESS(dummy%QQ(1), DISPLACEMENTS(3), MPI%iErr)*
<br>
* !*
<br>
* CALL
<br>
MPI_Type_Create_Struct(Nstruct,LENGTHS,DISPLACEMENTS,TYPES,MPI_PARTICLE_TYPE_OLD,MPI%iErr)*
<br>
* CALL MPI_Type_Commit(MPI_PARTICLE_TYPE_OLD,MPI%iErr)*
<br>
* !*
<br>
* CALL MPI_TYPE_CREATE_RESIZED(MPI_PARTICLE_TYPE_OLD,
<br>
DISPLACEMENTS(1),DISPLACEMENTS(2) - DISPLACEMENTS(1), MPI_PARTICLE_TYPE)*
<br>
<p><p>This does not work. When my program run, I get an error:
<br>
<p>*forrtl: severe (174): SIGSEGV, segmentation fault occurred.*
<br>
<p>I have read the manual but probably I am not able to understand
<br>
*MPI_TYPE_CREATE_RESIZED. *
<br>
<p>Someone could help me?
<br>
<p><p>Thanks a lot
<br>
Diego
<br>
<p><p>Diego
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26091/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26092.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/12/26090.php">Waleed Lotfy: "Re: [OMPI users] Icreasing OFED registerable memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26092.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
<li><strong>Maybe reply:</strong> <a href="26092.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
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
