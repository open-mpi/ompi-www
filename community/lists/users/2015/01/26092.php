<?
$subject_val = "Re: [OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan  2 06:51:45 2015" -->
<!-- isoreceived="20150102115145" -->
<!-- sent="Fri, 02 Jan 2015 20:51:33 +0900" -->
<!-- isosent="20150102115133" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED" -->
<!-- id="d18kmiviap6iyao3ht0tfenv.1420199493433_at_email.android.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-02 06:51:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26093.php">Huynh Thuc Cuoc: "[OMPI users] Help about Open CA"</a>
<li><strong>Previous message:</strong> <a href="26091.php">Diego Avesani: "[OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
<li><strong>Maybe in reply to:</strong> <a href="26091.php">Diego Avesani: "[OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26095.php">Diego Avesani: "Re: [OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
<li><strong>Reply:</strong> <a href="26095.php">Diego Avesani: "Re: [OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
<li><strong>Reply:</strong> <a href="26096.php">Gustavo Correa: "Re: [OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Diego,
<br>
<p>First, i recommend you redefine tParticle and add a padding integer so everything is aligned.
<br>
<p><p>Before invoking MPI_Type_create_struct, you need to 
<br>
call MPI_Get_address(dummy, base, MPI%err)
<br>
displacements = displacements - base
<br>
<p>MPI_Type_create_resized might be unnecessary if tParticle is aligned 
<br>
And the lower bound should be zero.
<br>
<p>BTW, which compiler are you using ?
<br>
Is tParticle object a common ?
<br>
iirc, intel compiler aligns types automatically, but not commons, and that means MPI_Type_create_struct is not aligned as it should most of the time.
<br>
<p>Cheers,
<br>
<p>Gilles 
<br>
<p>Diego Avesani &lt;diego.avesani_at_[hidden]&gt;&#227;&#129;&#149;&#227;&#130;&#147;&#227;&#129;&#174;&#227;&#131;&#161;&#227;&#131;&#188;&#227;&#131;&#171;:
<br>
<span class="quotelev1">&gt;dear all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I have a problem with&#194;&#160;MPI_Type_Create_Struct and MPI_TYPE_CREATE_RESIZED.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I have this variable type:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160; TYPE tParticle
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160; &#194;&#160; &#194;&#160;INTEGER &#194;&#160;:: ip
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160; &#194;&#160; &#194;&#160;REAL &#194;&#160; &#194;&#160; :: RP(2)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160; &#194;&#160; &#194;&#160;REAL &#194;&#160; &#194;&#160; :: QQ(2)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160; ENDTYPE tParticle
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Then I define:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Nstruct=3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;ALLOCATE(TYPES(Nstruct))
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;ALLOCATE(LENGTHS(Nstruct))
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;ALLOCATE(DISPLACEMENTS(Nstruct))
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;!set the types
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;TYPES(1) = MPI_INTEGER
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;TYPES(2) = MPI_DOUBLE_PRECISION
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;TYPES(3) = MPI_DOUBLE_PRECISION
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;!set the lengths
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;LENGTHS(1) = 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;LENGTHS(2) = 2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;LENGTHS(3) = 2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;As gently suggested by&#194;&#160;Nick Papior Andersen and George Bosilca some months ago, I checked the variable adress to resize my struct variable to avoid empty space and
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;to have a more general definition.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160;!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160;CALL MPI_GET_ADDRESS(dummy%ip, &#194;&#160; &#194;&#160;DISPLACEMENTS(1), MPI%iErr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160;CALL MPI_GET_ADDRESS(dummy%RP(1), DISPLACEMENTS(2), MPI%iErr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160;CALL MPI_GET_ADDRESS(dummy%QQ(1), DISPLACEMENTS(3), MPI%iErr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160;!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160;CALL MPI_Type_Create_Struct(Nstruct,LENGTHS,DISPLACEMENTS,TYPES,MPI_PARTICLE_TYPE_OLD,MPI%iErr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160;CALL MPI_Type_Commit(MPI_PARTICLE_TYPE_OLD,MPI%iErr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160;!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160;CALL MPI_TYPE_CREATE_RESIZED(MPI_PARTICLE_TYPE_OLD, DISPLACEMENTS(1),DISPLACEMENTS(2) - DISPLACEMENTS(1), MPI_PARTICLE_TYPE)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;This does not work. When my program run, I get an error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;forrtl: severe (174): SIGSEGV, segmentation fault occurred.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I have read the manual but probably I am not able to understand &#194;&#160;MPI_TYPE_CREATE_RESIZED.&#194;&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Someone could help me?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thanks a lot
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Diego
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Diego
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26092/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26093.php">Huynh Thuc Cuoc: "[OMPI users] Help about Open CA"</a>
<li><strong>Previous message:</strong> <a href="26091.php">Diego Avesani: "[OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
<li><strong>Maybe in reply to:</strong> <a href="26091.php">Diego Avesani: "[OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26095.php">Diego Avesani: "Re: [OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
<li><strong>Reply:</strong> <a href="26095.php">Diego Avesani: "Re: [OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
<li><strong>Reply:</strong> <a href="26096.php">Gustavo Correa: "Re: [OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
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
