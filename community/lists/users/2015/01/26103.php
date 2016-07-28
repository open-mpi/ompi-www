<?
$subject_val = "Re: [OMPI users] OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  5 06:53:41 2015" -->
<!-- isoreceived="20150105115341" -->
<!-- sent="Mon, 5 Jan 2015 12:53:40 +0100" -->
<!-- isosent="20150105115340" -->
<!-- name="Diego Avesani" -->
<!-- email="diego.avesani_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED" -->
<!-- id="CAG8o1y7d+uKbv78OJi5TcfYJmzjpa1piCUxiwRqjV0dGXwMepQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="54A9EC86.2060006_at_iferc.org" -->
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
<strong>From:</strong> Diego Avesani (<em>diego.avesani_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-05 06:53:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26104.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
<li><strong>Previous message:</strong> <a href="26102.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
<li><strong>In reply to:</strong> <a href="26102.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Gilles, Dear all,
<br>
thanks, thanks a lot.
<br>
<p>Could you explain it to me, please?
<br>
<p>I mean, when I print displacements I get:
<br>
<p>displacements(0)= 6922656
<br>
displacements(1)= 0
<br>
displacements(2)= 16
<br>
displacements(3)= 48
<br>
displacements(4)= 112
<br>
<p>Why do I have 16 spaces in displacements(2), I have only an integer in
<br>
dummy%ip?
<br>
Why do you use dummy(1) and dummy(2)?
<br>
<p>Thanks a lot
<br>
<p><p>Diego
<br>
<p><p>On 5 January 2015 at 02:44, Gilles Gouaillardet &lt;
<br>
gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  Diego,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Get_address was invoked with parameters in the wrong order
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; here is attached a fixed version
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
<span class="quotelev1">&gt; On 2015/01/05 2:32, Diego Avesani wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
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
<span class="quotelev1">&gt; On 4 January 2015 at 12:10, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Diego,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; here is an updated revision i will double check tomorrow
</span><br>
<span class="quotelev1">&gt; /* i dit not test it yet, so forgive me it it does not compile/work */
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
<span class="quotelev1">&gt; On Sun, Jan 4, 2015 at 6:48 PM, Diego Avesani &lt;diego.avesani_at_[hidden]&gt; &lt;diego.avesani_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Dear Gilles, Dear all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; in the attachment you can find the program.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What do you meam &quot;remove mpi_get_address(dummy) from all displacements&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for all your help
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Diego
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
<span class="quotelev1">&gt; On 3 January 2015 at 00:45, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Diego,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; George gave you the solution,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The snippet you posted has two mistakes
</span><br>
<span class="quotelev1">&gt; You did not remove mpi_get_address(dummy) from all displacements
</span><br>
<span class="quotelev1">&gt; (See my previous reply)
</span><br>
<span class="quotelev1">&gt; You pass incorrect values to mpi_type_create_resized
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you post a trimmed version of your program instead of a snippet ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gus is right about using double precision vs real and -r8
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
<span class="quotelev1">&gt; Diego Avesani &lt;diego.avesani_at_[hidden]&gt; &lt;diego.avesani_at_[hidden]&gt;&#227;&#129;&#149;&#227;&#130;&#147;&#227;&#129;&#174;&#227;&#131;&#161;&#227;&#131;&#188;
</span><br>
<span class="quotelev1">&gt; &#227;&#131;&#171;:
</span><br>
<span class="quotelev1">&gt; Dear Gilles Dear all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have done all that to avoid to pedding an integer, as suggested by
</span><br>
<span class="quotelev1">&gt; George.
</span><br>
<span class="quotelev1">&gt; I define tParticle as a common object.
</span><br>
<span class="quotelev1">&gt; I am using Intel fortran compiler.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; George suggests:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *&quot;&quot; The displacements are relative to the benign of your particle type.
</span><br>
<span class="quotelev1">&gt; Thus the first one is not 0 but the displacement of &#226;&#128;&#156;integer :: ip&#226;&#128;&#157; due to
</span><br>
<span class="quotelev1">&gt; the fact that the compiler is allowed to introduce gaps in order to better
</span><br>
<span class="quotelev1">&gt; align.*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *  DISPLACEMENTS(1)=MPI_GET_ADDRESS(dummy%ip)*
</span><br>
<span class="quotelev1">&gt; *  DISPLACEMENTS(2)=**MPI_GET_ADDRESS(dummy%RP[1])*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *  DISPLACEMENTS(3)=**MPI_GET_ADDRESS(dummy%QQ[1])*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *and then remove the MPI_GET_ADDRESS(dummy) from all of them.*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *3. After creating the structure type you need to resize it in order to
</span><br>
<span class="quotelev1">&gt; correctly determine the span of the entire structure, and how an array of
</span><br>
<span class="quotelev1">&gt; such structures lays in memory. Something like:*
</span><br>
<span class="quotelev1">&gt; *MPI_TYPE_CREATE_RESIZED(old type, DISPLACEMENT(1),*
</span><br>
<span class="quotelev1">&gt; *   MPI_GET_ADDRESS(dummy[2]) - MPI_GET_ADDRESS(dummy[1]), newt) &quot;&quot;*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What do you think?
</span><br>
<span class="quotelev1">&gt; George, Did i miss something?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks a lot
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
<span class="quotelev1">&gt; On 2 January 2015 at 12:51, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Diego,
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
<span class="quotelev1">&gt; iirc, intel compiler aligns types automatically, but not commons, and
</span><br>
<span class="quotelev1">&gt; that means MPI_Type_create_struct is not aligned as it should most of the
</span><br>
<span class="quotelev1">&gt; time.
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
<span class="quotelev1">&gt; Diego Avesani &lt;diego.avesani_at_[hidden]&gt; &lt;diego.avesani_at_[hidden]&gt;&#227;&#129;&#149;&#227;&#130;&#147;&#227;&#129;&#174;&#227;&#131;&#161;&#227;&#131;&#188;
</span><br>
<span class="quotelev1">&gt; &#227;&#131;&#171;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; dear all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a problem with MPI_Type_Create_Struct and
</span><br>
<span class="quotelev1">&gt; MPI_TYPE_CREATE_RESIZED.
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
<span class="quotelev1">&gt; As gently suggested by Nick Papior Andersen and George Bosilca some
</span><br>
<span class="quotelev1">&gt; months ago, I checked the variable adress to resize my struct variable to
</span><br>
<span class="quotelev1">&gt; avoid empty space and
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
<span class="quotelev1">&gt; Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2015/01/26092.php">http://www.open-mpi.org/community/lists/users/2015/01/26092.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2015/01/26097.php">http://www.open-mpi.org/community/lists/users/2015/01/26097.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2015/01/26099.php">http://www.open-mpi.org/community/lists/users/2015/01/26099.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2015/01/26100.php">http://www.open-mpi.org/community/lists/users/2015/01/26100.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/01/26101.php">http://www.open-mpi.org/community/lists/users/2015/01/26101.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/01/26102.php">http://www.open-mpi.org/community/lists/users/2015/01/26102.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26103/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26104.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
<li><strong>Previous message:</strong> <a href="26102.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
<li><strong>In reply to:</strong> <a href="26102.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
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
