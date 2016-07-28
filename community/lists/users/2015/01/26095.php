<?
$subject_val = "Re: [OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan  2 15:56:54 2015" -->
<!-- isoreceived="20150102205654" -->
<!-- sent="Fri, 2 Jan 2015 21:56:53 +0100" -->
<!-- isosent="20150102205653" -->
<!-- name="Diego Avesani" -->
<!-- email="diego.avesani_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED" -->
<!-- id="CAG8o1y5xkA4=KXMwihRAOM_vbUHZYiHC1_bDRsPTUnjZEds0vA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="d18kmiviap6iyao3ht0tfenv.1420199493433_at_email.android.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED<br>
<strong>From:</strong> Diego Avesani (<em>diego.avesani_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-02 15:56:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26096.php">Gustavo Correa: "Re: [OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
<li><strong>Previous message:</strong> <a href="26094.php">Ralph Castain: "Re: [OMPI users] Help about Open CA"</a>
<li><strong>In reply to:</strong> <a href="26092.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26096.php">Gustavo Correa: "Re: [OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Gilles Dear all,
<br>
<p>I have done all that to avoid to pedding an integer, as suggested by George.
<br>
I define tParticle as a common object.
<br>
I am using Intel fortran compiler.
<br>
<p>George suggests:
<br>
<p>*&quot;&quot; The displacements are relative to the benign of your particle type.
<br>
Thus the first one is not 0 but the displacement of &#226;&#128;&#156;integer :: ip&#226;&#128;&#157; due to
<br>
the fact that the compiler is allowed to introduce gaps in order to better
<br>
align.*
<br>
<p>*  DISPLACEMENTS(1)=MPI_GET_ADDRESS(dummy%ip)*
<br>
*  DISPLACEMENTS(2)=**MPI_GET_ADDRESS(dummy%RP[1])*
<br>
<p>*  DISPLACEMENTS(3)=**MPI_GET_ADDRESS(dummy%QQ[1])*
<br>
<p>*and then remove the MPI_GET_ADDRESS(dummy) from all of them.*
<br>
<p>*3. After creating the structure type you need to resize it in order to
<br>
correctly determine the span of the entire structure, and how an array of
<br>
such structures lays in memory. Something like:*
<br>
*MPI_TYPE_CREATE_RESIZED(old type, DISPLACEMENT(1),*
<br>
*   MPI_GET_ADDRESS(dummy[2]) - MPI_GET_ADDRESS(dummy[1]), newt) &quot;&quot;*
<br>
<p>What do you think?
<br>
George, Did i miss something?
<br>
<p>Thanks a lot
<br>
<p><p><p>Diego
<br>
<p><p>On 2 January 2015 at 12:51, Gilles Gouaillardet &lt;
<br>
gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Diego,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; First, i recommend you redefine tParticle and add a padding integer so
</span><br>
<span class="quotelev1">&gt; everything is aligned.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Before invoking MPI_Type_create_struct, you need to
</span><br>
<span class="quotelev1">&gt; call MPI_Get_address(dummy, base, MPI%err)
</span><br>
<span class="quotelev1">&gt; displacements = displacements - base
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Type_create_resized might be unnecessary if tParticle is aligned
</span><br>
<span class="quotelev1">&gt; And the lower bound should be zero.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BTW, which compiler are you using ?
</span><br>
<span class="quotelev1">&gt; Is tParticle object a common ?
</span><br>
<span class="quotelev1">&gt; iirc, intel compiler aligns types automatically, but not commons, and that
</span><br>
<span class="quotelev1">&gt; means MPI_Type_create_struct is not aligned as it should most of the time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Diego Avesani &lt;diego.avesani_at_[hidden]&gt;&#227;&#129;&#149;&#227;&#130;&#147;&#227;&#129;&#174;&#227;&#131;&#161;&#227;&#131;&#188;&#227;&#131;&#171;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; dear all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a problem with MPI_Type_Create_Struct and MPI_TYPE_CREATE_RESIZED.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have this variable type:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *  TYPE tParticle*
</span><br>
<span class="quotelev1">&gt; *     INTEGER  :: ip*
</span><br>
<span class="quotelev1">&gt; *     REAL     :: RP(2)*
</span><br>
<span class="quotelev1">&gt; *     REAL     :: QQ(2)*
</span><br>
<span class="quotelev1">&gt; *  ENDTYPE tParticle*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then I define:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Nstruct=3
</span><br>
<span class="quotelev1">&gt; *ALLOCATE(TYPES(Nstruct))*
</span><br>
<span class="quotelev1">&gt; *ALLOCATE(LENGTHS(Nstruct))*
</span><br>
<span class="quotelev1">&gt; *ALLOCATE(DISPLACEMENTS(Nstruct))*
</span><br>
<span class="quotelev1">&gt; *!set the types*
</span><br>
<span class="quotelev1">&gt; *TYPES(1) = MPI_INTEGER*
</span><br>
<span class="quotelev1">&gt; *TYPES(2) = MPI_DOUBLE_PRECISION*
</span><br>
<span class="quotelev1">&gt; *TYPES(3) = MPI_DOUBLE_PRECISION*
</span><br>
<span class="quotelev1">&gt; *!set the lengths*
</span><br>
<span class="quotelev1">&gt; *LENGTHS(1) = 1*
</span><br>
<span class="quotelev1">&gt; *LENGTHS(2) = 2*
</span><br>
<span class="quotelev1">&gt; *LENGTHS(3) = 2*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As gently suggested by Nick Papior Andersen and George Bosilca some months
</span><br>
<span class="quotelev1">&gt; ago, I checked the variable adress to resize my struct variable to avoid
</span><br>
<span class="quotelev1">&gt; empty space and
</span><br>
<span class="quotelev1">&gt; to have a more general definition.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * !*
</span><br>
<span class="quotelev1">&gt; * CALL MPI_GET_ADDRESS(dummy%ip,    DISPLACEMENTS(1), MPI%iErr)*
</span><br>
<span class="quotelev1">&gt; * CALL MPI_GET_ADDRESS(dummy%RP(1), DISPLACEMENTS(2), MPI%iErr)*
</span><br>
<span class="quotelev1">&gt; * CALL MPI_GET_ADDRESS(dummy%QQ(1), DISPLACEMENTS(3), MPI%iErr)*
</span><br>
<span class="quotelev1">&gt; * !*
</span><br>
<span class="quotelev1">&gt; * CALL
</span><br>
<span class="quotelev1">&gt; MPI_Type_Create_Struct(Nstruct,LENGTHS,DISPLACEMENTS,TYPES,MPI_PARTICLE_TYPE_OLD,MPI%iErr)*
</span><br>
<span class="quotelev1">&gt; * CALL MPI_Type_Commit(MPI_PARTICLE_TYPE_OLD,MPI%iErr)*
</span><br>
<span class="quotelev1">&gt; * !*
</span><br>
<span class="quotelev1">&gt; * CALL MPI_TYPE_CREATE_RESIZED(MPI_PARTICLE_TYPE_OLD,
</span><br>
<span class="quotelev1">&gt; DISPLACEMENTS(1),DISPLACEMENTS(2) - DISPLACEMENTS(1), MPI_PARTICLE_TYPE)*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This does not work. When my program run, I get an error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *forrtl: severe (174): SIGSEGV, segmentation fault occurred.*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have read the manual but probably I am not able to understand
</span><br>
<span class="quotelev1">&gt; *MPI_TYPE_CREATE_RESIZED. *
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Someone could help me?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks a lot
</span><br>
<span class="quotelev1">&gt; Diego
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Diego
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/01/26092.php">http://www.open-mpi.org/community/lists/users/2015/01/26092.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26095/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26096.php">Gustavo Correa: "Re: [OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
<li><strong>Previous message:</strong> <a href="26094.php">Ralph Castain: "Re: [OMPI users] Help about Open CA"</a>
<li><strong>In reply to:</strong> <a href="26092.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26096.php">Gustavo Correa: "Re: [OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
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
