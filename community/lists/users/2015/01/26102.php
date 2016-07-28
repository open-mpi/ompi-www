<?
$subject_val = "Re: [OMPI users] OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jan  4 20:44:50 2015" -->
<!-- isoreceived="20150105014450" -->
<!-- sent="Mon, 05 Jan 2015 10:44:38 +0900" -->
<!-- isosent="20150105014438" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED" -->
<!-- id="54A9EC86.2060006_at_iferc.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAG8o1y736R8ZWZwAshe2px=QH59gVeouZmLV2ghOa1-X=HKNag_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-04 20:44:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26103.php">Diego Avesani: "Re: [OMPI users] OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
<li><strong>Previous message:</strong> <a href="26101.php">Diego Avesani: "Re: [OMPI users] OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
<li><strong>In reply to:</strong> <a href="26101.php">Diego Avesani: "Re: [OMPI users] OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26103.php">Diego Avesani: "Re: [OMPI users] OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
<li><strong>Reply:</strong> <a href="26103.php">Diego Avesani: "Re: [OMPI users] OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Diego,
<br>
<p>MPI_Get_address was invoked with parameters in the wrong order
<br>
<p>here is attached a fixed version
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 2015/01/05 2:32, Diego Avesani wrote:
<br>
<span class="quotelev1">&gt; Dear Gilles, Dear all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It works. The only thing that is missed is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *CALL MPI_Finalize(MPI%iErr)*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; at the end of the program.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now, I have to test it sending some data from a processor to another.
</span><br>
<span class="quotelev1">&gt; I would like to ask you if you could explain me what you have done.
</span><br>
<span class="quotelev1">&gt; I wrote in the program:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *   IF(MPI%myrank==1)THEN*
</span><br>
<span class="quotelev1">&gt; *      WRITE(*,*) DISPLACEMENTS*
</span><br>
<span class="quotelev1">&gt; *   ENDIF*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and the results is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        *139835891001320      -139835852218120      -139835852213832*
</span><br>
<span class="quotelev1">&gt; *      -139835852195016   8030673735967299609*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am not able to understand it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks a lot.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the attachment you can find the program
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; On 4 January 2015 at 12:10, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev1">&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Diego,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; here is an updated revision i will double check tomorrow
</span><br>
<span class="quotelev2">&gt;&gt; /* i dit not test it yet, so forgive me it it does not compile/work */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sun, Jan 4, 2015 at 6:48 PM, Diego Avesani &lt;diego.avesani_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear Gilles, Dear all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in the attachment you can find the program.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What do you meam &quot;remove mpi_get_address(dummy) from all displacements&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for all your help
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Diego
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Diego
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 3 January 2015 at 00:45, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Diego,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; George gave you the solution,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The snippet you posted has two mistakes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; You did not remove mpi_get_address(dummy) from all displacements
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (See my previous reply)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; You pass incorrect values to mpi_type_create_resized
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Can you post a trimmed version of your program instead of a snippet ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Gus is right about using double precision vs real and -r8
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Diego Avesani &lt;diego.avesani_at_[hidden]&gt;??????:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Dear Gilles Dear all,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have done all that to avoid to pedding an integer, as suggested by
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; George.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I define tParticle as a common object.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am using Intel fortran compiler.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; George suggests:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *&quot;&quot; The displacements are relative to the benign of your particle type.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thus the first one is not 0 but the displacement of &quot;integer :: ip&quot; due to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the fact that the compiler is allowed to introduce gaps in order to better
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; align.*
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *  DISPLACEMENTS(1)=MPI_GET_ADDRESS(dummy%ip)*
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *  DISPLACEMENTS(2)=**MPI_GET_ADDRESS(dummy%RP[1])*
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *  DISPLACEMENTS(3)=**MPI_GET_ADDRESS(dummy%QQ[1])*
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *and then remove the MPI_GET_ADDRESS(dummy) from all of them.*
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *3. After creating the structure type you need to resize it in order to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; correctly determine the span of the entire structure, and how an array of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; such structures lays in memory. Something like:*
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *MPI_TYPE_CREATE_RESIZED(old type, DISPLACEMENT(1),*
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *   MPI_GET_ADDRESS(dummy[2]) - MPI_GET_ADDRESS(dummy[1]), newt) &quot;&quot;*
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; What do you think?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; George, Did i miss something?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks a lot
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Diego
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 2 January 2015 at 12:51, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Diego,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; First, i recommend you redefine tParticle and add a padding integer so
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; everything is aligned.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Before invoking MPI_Type_create_struct, you need to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; call MPI_Get_address(dummy, base, MPI%err)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; displacements = displacements - base
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_Type_create_resized might be unnecessary if tParticle is aligned
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; And the lower bound should be zero.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; BTW, which compiler are you using ?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Is tParticle object a common ?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; iirc, intel compiler aligns types automatically, but not commons, and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that means MPI_Type_create_struct is not aligned as it should most of the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; time.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Diego Avesani &lt;diego.avesani_at_[hidden]&gt;??????:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; dear all,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I have a problem with MPI_Type_Create_Struct and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_TYPE_CREATE_RESIZED.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I have this variable type:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *  TYPE tParticle*
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *     INTEGER  :: ip*
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *     REAL     :: RP(2)*
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *     REAL     :: QQ(2)*
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *  ENDTYPE tParticle*
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Then I define:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Nstruct=3
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *ALLOCATE(TYPES(Nstruct))*
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *ALLOCATE(LENGTHS(Nstruct))*
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *ALLOCATE(DISPLACEMENTS(Nstruct))*
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *!set the types*
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *TYPES(1) = MPI_INTEGER*
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *TYPES(2) = MPI_DOUBLE_PRECISION*
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *TYPES(3) = MPI_DOUBLE_PRECISION*
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *!set the lengths*
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *LENGTHS(1) = 1*
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *LENGTHS(2) = 2*
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *LENGTHS(3) = 2*
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; As gently suggested by Nick Papior Andersen and George Bosilca some
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; months ago, I checked the variable adress to resize my struct variable to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; avoid empty space and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to have a more general definition.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; * !*
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; * CALL MPI_GET_ADDRESS(dummy%ip,    DISPLACEMENTS(1), MPI%iErr)*
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; * CALL MPI_GET_ADDRESS(dummy%RP(1), DISPLACEMENTS(2), MPI%iErr)*
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; * CALL MPI_GET_ADDRESS(dummy%QQ(1), DISPLACEMENTS(3), MPI%iErr)*
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; * !*
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; * CALL
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_Type_Create_Struct(Nstruct,LENGTHS,DISPLACEMENTS,TYPES,MPI_PARTICLE_TYPE_OLD,MPI%iErr)*
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; * CALL MPI_Type_Commit(MPI_PARTICLE_TYPE_OLD,MPI%iErr)*
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; * !*
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; * CALL MPI_TYPE_CREATE_RESIZED(MPI_PARTICLE_TYPE_OLD,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; DISPLACEMENTS(1),DISPLACEMENTS(2) - DISPLACEMENTS(1), MPI_PARTICLE_TYPE)*
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This does not work. When my program run, I get an error:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *forrtl: severe (174): SIGSEGV, segmentation fault occurred.*
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I have read the manual but probably I am not able to understand
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *MPI_TYPE_CREATE_RESIZED. *
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Someone could help me?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks a lot
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Diego
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Diego
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/01/26092.php">http://www.open-mpi.org/community/lists/users/2015/01/26092.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/01/26097.php">http://www.open-mpi.org/community/lists/users/2015/01/26097.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/01/26099.php">http://www.open-mpi.org/community/lists/users/2015/01/26099.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/01/26100.php">http://www.open-mpi.org/community/lists/users/2015/01/26100.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/01/26101.php">http://www.open-mpi.org/community/lists/users/2015/01/26101.php</a>
</span><br>
<p><p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26102/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26102/test_struct.f90">test_struct.f90</a>
</ul>
<!-- attachment="test_struct.f90" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26103.php">Diego Avesani: "Re: [OMPI users] OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
<li><strong>Previous message:</strong> <a href="26101.php">Diego Avesani: "Re: [OMPI users] OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
<li><strong>In reply to:</strong> <a href="26101.php">Diego Avesani: "Re: [OMPI users] OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26103.php">Diego Avesani: "Re: [OMPI users] OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
<li><strong>Reply:</strong> <a href="26103.php">Diego Avesani: "Re: [OMPI users] OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
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
