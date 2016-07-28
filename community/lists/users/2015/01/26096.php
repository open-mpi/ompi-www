<?
$subject_val = "Re: [OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan  2 17:03:14 2015" -->
<!-- isoreceived="20150102220314" -->
<!-- sent="Fri, 2 Jan 2015 17:02:59 -0500" -->
<!-- isosent="20150102220259" -->
<!-- name="Gustavo Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED" -->
<!-- id="FA00777F-10D1-4207-A218-BD1322CF194D_at_ldeo.columbia.edu" -->
<!-- charset="utf-8" -->
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
<strong>From:</strong> Gustavo Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-02 17:02:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26097.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
<li><strong>Previous message:</strong> <a href="26095.php">Diego Avesani: "Re: [OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
<li><strong>In reply to:</strong> <a href="26092.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Besides Gilles suggestions, wouldn't this:
<br>
<p><span class="quotelev1">&gt;   TYPE tParticle
</span><br>
<span class="quotelev1">&gt;      INTEGER  :: ip
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;INTEGER :: dummy
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DOUBLE PRECISION     :: RP(2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DOUBLE PRECISION     :: QQ(2)
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   ENDTYPE tParticle
</span><br>
<p><p>(instead of making RP and QQ real) 
<br>
match better your declarations of (MPI) TYPES() further down,
<br>
and hopefully have a better chance of correct memory alignment and type consistency?
<br>
Relying on specific compiler or compiler flags (e.g. -r8,  -align) is tricky (and not portable).
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
<p>On Jan 2, 2015, at 6:51 AM, Gilles Gouaillardet wrote:
<br>
<p><span class="quotelev1">&gt; Diego,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; First, i recommend you redefine tParticle and add a padding integer so everything is aligned.
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
<span class="quotelev1">&gt; iirc, intel compiler aligns types automatically, but not commons, and that means MPI_Type_create_struct is not aligned as it should most of the time.
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
<span class="quotelev1">&gt;   TYPE tParticle
</span><br>
<span class="quotelev1">&gt;      INTEGER  :: ip
</span><br>
<span class="quotelev1">&gt;      REAL     :: RP(2)
</span><br>
<span class="quotelev1">&gt;      REAL     :: QQ(2)
</span><br>
<span class="quotelev1">&gt;   ENDTYPE tParticle
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Then I define:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Nstruct=3
</span><br>
<span class="quotelev1">&gt; ALLOCATE(TYPES(Nstruct))
</span><br>
<span class="quotelev1">&gt; ALLOCATE(LENGTHS(Nstruct))
</span><br>
<span class="quotelev1">&gt; ALLOCATE(DISPLACEMENTS(Nstruct))
</span><br>
<span class="quotelev1">&gt; !set the types
</span><br>
<span class="quotelev1">&gt; TYPES(1) = MPI_INTEGER
</span><br>
<span class="quotelev1">&gt; TYPES(2) = MPI_DOUBLE_PRECISION
</span><br>
<span class="quotelev1">&gt; TYPES(3) = MPI_DOUBLE_PRECISION
</span><br>
<span class="quotelev1">&gt; !set the lengths
</span><br>
<span class="quotelev1">&gt; LENGTHS(1) = 1
</span><br>
<span class="quotelev1">&gt; LENGTHS(2) = 2
</span><br>
<span class="quotelev1">&gt; LENGTHS(3) = 2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As gently suggested by Nick Papior Andersen and George Bosilca some months ago, I checked the variable adress to resize my struct variable to avoid empty space and
</span><br>
<span class="quotelev1">&gt; to have a more general definition.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  !
</span><br>
<span class="quotelev1">&gt;  CALL MPI_GET_ADDRESS(dummy%ip,    DISPLACEMENTS(1), MPI%iErr)
</span><br>
<span class="quotelev1">&gt;  CALL MPI_GET_ADDRESS(dummy%RP(1), DISPLACEMENTS(2), MPI%iErr)
</span><br>
<span class="quotelev1">&gt;  CALL MPI_GET_ADDRESS(dummy%QQ(1), DISPLACEMENTS(3), MPI%iErr)
</span><br>
<span class="quotelev1">&gt;  !
</span><br>
<span class="quotelev1">&gt;  CALL MPI_Type_Create_Struct(Nstruct,LENGTHS,DISPLACEMENTS,TYPES,MPI_PARTICLE_TYPE_OLD,MPI%iErr)
</span><br>
<span class="quotelev1">&gt;  CALL MPI_Type_Commit(MPI_PARTICLE_TYPE_OLD,MPI%iErr)
</span><br>
<span class="quotelev1">&gt;  !
</span><br>
<span class="quotelev1">&gt;  CALL MPI_TYPE_CREATE_RESIZED(MPI_PARTICLE_TYPE_OLD, DISPLACEMENTS(1),DISPLACEMENTS(2) - DISPLACEMENTS(1), MPI_PARTICLE_TYPE)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This does not work. When my program run, I get an error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; forrtl: severe (174): SIGSEGV, segmentation fault occurred.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have read the manual but probably I am not able to understand  MPI_TYPE_CREATE_RESIZED. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Someone could help me?
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/01/26092.php">http://www.open-mpi.org/community/lists/users/2015/01/26092.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26097.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
<li><strong>Previous message:</strong> <a href="26095.php">Diego Avesani: "Re: [OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
<li><strong>In reply to:</strong> <a href="26092.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
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
