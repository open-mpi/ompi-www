<?
$subject_val = "Re: [OMPI users] OMPI users] OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  5 07:13:28 2015" -->
<!-- isoreceived="20150105121328" -->
<!-- sent="Mon, 05 Jan 2015 21:13:19 +0900" -->
<!-- isosent="20150105121319" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI users] OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED" -->
<!-- id="63ujt59a0qje33vsgwp71o17.1420459999914_at_email.android.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI users] OMPI users] OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED" -->
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
<strong>Subject:</strong> Re: [OMPI users] OMPI users] OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-05 07:13:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26105.php">Diego Avesani: "Re: [OMPI users] OMPI users] OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
<li><strong>Previous message:</strong> <a href="26103.php">Diego Avesani: "Re: [OMPI users] OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26105.php">Diego Avesani: "Re: [OMPI users] OMPI users] OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
<li><strong>Reply:</strong> <a href="26105.php">Diego Avesani: "Re: [OMPI users] OMPI users] OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Diego,
<br>
<p>The compiler likely added some padding after %ip to have data aligned on 128 bits.
<br>
<p>You need two dummies in case the compiler adds some padding at the end of the type.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>Diego Avesani &lt;diego.avesani_at_[hidden]&gt;&#227;&#129;&#149;&#227;&#130;&#147;&#227;&#129;&#174;&#227;&#131;&#161;&#227;&#131;&#188;&#227;&#131;&#171;:
<br>
<span class="quotelev1">&gt;Dear Gilles, Dear all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;thanks, thanks a lot.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Could you explain it to me, please?&#194;&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I mean, when I print displacements I get:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;displacements(0)= 6922656
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;displacements(1)= 0 &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;&#194;&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;displacements(2)= 16
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;displacements(3)= 48
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;displacements(4)= 112
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Why do I have 16 spaces in displacements(2), I have only an integer in dummy%ip?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Why do you use dummy(1) and dummy(2)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thanks a lot &#194;&#160; &#194;&#160;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On 5 January 2015 at 02:44, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Diego,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;MPI_Get_address was invoked with parameters in the wrong order
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;here is attached a fixed version
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On 2015/01/05 2:32, Diego Avesani wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Dear Gilles, Dear all, It works. The only thing that is missed is: *CALL MPI_Finalize(MPI%iErr)* at the end of the program. Now, I have to test it sending some data from a processor to another. I would like to ask you if you could explain me what you have done. I wrote in the program: * IF(MPI%myrank==1)THEN* * WRITE(*,*) DISPLACEMENTS* * ENDIF* and the results is: *139835891001320 -139835852218120 -139835852213832* * -139835852195016 8030673735967299609* I am not able to understand it. Thanks a lot. In the attachment you can find the program Diego On 4 January 2015 at 12:10, Gilles Gouaillardet &lt; gilles.gouaillardet_at_[hidden]&gt; wrote: 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Diego, here is an updated revision i will double check tomorrow /* i dit not test it yet, so forgive me it it does not compile/work */ Cheers, Gilles On Sun, Jan 4, 2015 at 6:48 PM, Diego Avesani &lt;diego.avesani_at_[hidden]&gt; wrote: 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Dear Gilles, Dear all, in the attachment you can find the program. What do you meam &quot;remove mpi_get_address(dummy) from all displacements&quot;. Thanks for all your help Diego Diego On 3 January 2015 at 00:45, Gilles Gouaillardet &lt; gilles.gouaillardet_at_[hidden]&gt; wrote: 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Diego, George gave you the solution, The snippet you posted has two mistakes You did not remove mpi_get_address(dummy) from all displacements (See my previous reply) You pass incorrect values to mpi_type_create_resized Can you post a trimmed version of your program instead of a snippet ? Gus is right about using double precision vs real and -r8 Cheers, Gilles Diego Avesani &lt;diego.avesani_at_[hidden]&gt;&#227;&#129;&#149;&#227;&#130;&#147;&#227;&#129;&#174;&#227;&#131;&#161;&#227;&#131;&#188;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#227;&#131;&#171;: Dear Gilles Dear all, I have done all that to avoid to pedding an integer, as suggested by George. I define tParticle as a common object. I am using Intel fortran compiler. George suggests: *&quot;&quot; The displacements are relative to the benign of your particle type. Thus the first one is not 0 but the displacement of &#226;&#128;&#156;integer :: ip&#226;&#128;&#157; due to the fact that the compiler is allowed to introduce gaps in order to better align.* * DISPLACEMENTS(1)=MPI_GET_ADDRESS(dummy%ip)* * DISPLACEMENTS(2)=**MPI_GET_ADDRESS(dummy%RP[1])* * DISPLACEMENTS(3)=**MPI_GET_ADDRESS(dummy%QQ[1])* *and then remove the MPI_GET_ADDRESS(dummy) from all of them.* *3. After creating the structure type you need to resize it in order to correctly determine the span of the entire structure, and how an array of such structures lays in memory. Something like:* *MPI_TYPE_CREATE_RESIZED(old type, DISPLACEMENT(1),* * MPI_GET_ADDRESS(dummy[2]) - MPI_GET_ADDRESS(dummy[1]), newt) &quot;&quot;* What do you think? George, Did i miss something? Thanks a lot Diego On 2 January 2015 at 12:51, Gilles Gouaillardet &lt; gilles.gouaillardet_at_[hidden]&gt; wrote: 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Diego, First, i recommend you redefine tParticle and add a padding integer so everything is aligned. Before invoking MPI_Type_create_struct, you need to call MPI_Get_address(dummy, base, MPI%err) displacements = displacements - base MPI_Type_create_resized might be unnecessary if tParticle is aligned And the lower bound should be zero. BTW, which compiler are you using ? Is tParticle object a common ? iirc, intel compiler aligns types automatically, but not commons, and that means MPI_Type_create_struct is not aligned as it should most of the time. Cheers, Gilles Diego Avesani &lt;diego.avesani_at_[hidden]&gt;&#227;&#129;&#149;&#227;&#130;&#147;&#227;&#129;&#174;&#227;&#131;&#161;&#227;&#131;&#188;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#227;&#131;&#171;: dear all, I have a problem with MPI_Type_Create_Struct and MPI_TYPE_CREATE_RESIZED. I have this variable type: * TYPE tParticle* * INTEGER :: ip* * REAL :: RP(2)* * REAL :: QQ(2)* * ENDTYPE tParticle* Then I define: Nstruct=3 *ALLOCATE(TYPES(Nstruct))* *ALLOCATE(LENGTHS(Nstruct))* *ALLOCATE(DISPLACEMENTS(Nstruct))* *!set the types* *TYPES(1) = MPI_INTEGER* *TYPES(2) = MPI_DOUBLE_PRECISION* *TYPES(3) = MPI_DOUBLE_PRECISION* *!set the lengths* *LENGTHS(1) = 1* *LENGTHS(2) = 2* *LENGTHS(3) = 2* As gently suggested by Nick Papior Andersen and George Bosilca some months ago, I checked the variable adress to resize my struct variable to avoid empty space and to have a more general definition. * !* * CALL MPI_GET_ADDRESS(dummy%ip, DISPLACEMENTS(1), MPI%iErr)* * CALL MPI_GET_ADDRESS(dummy%RP(1), DISPLACEMENTS(2), MPI%iErr)* * CALL MPI_GET_ADDRESS(dummy%QQ(1), DISPLACEMENTS(3), MPI%iErr)* * !* * CALL MPI_Type_Create_Struct(Nstruct,LENGTHS,DISPLACEMENTS,TYPES,MPI_PARTICLE_TYPE_OLD,MPI%iErr)* * CALL MPI_Type_Commit(MPI_PARTICLE_TYPE_OLD,MPI%iErr)* * !* * CALL MPI_TYPE_CREATE_RESIZED(MPI_PARTICLE_TYPE_OLD, DISPLACEMENTS(1),DISPLACEMENTS(2) - DISPLACEMENTS(1), MPI_PARTICLE_TYPE)* This does not work. When my program run, I get an error: *forrtl: severe (174): SIGSEGV, segmentation fault occurred.* I have read the manual but probably I am not able to understand *MPI_TYPE_CREATE_RESIZED. * Someone could help me? Thanks a lot Diego Diego _______________________________________________ users mailing list 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;users_at_[hidden] Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/01/26092.php">http://www.open-mpi.org/community/lists/users/2015/01/26092.php</a> 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________ users mailing list users_at_[hidden] Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/01/26097.php">http://www.open-mpi.org/community/lists/users/2015/01/26097.php</a> 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________ users mailing list users_at_[hidden] Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/01/26099.php">http://www.open-mpi.org/community/lists/users/2015/01/26099.php</a> 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________ users mailing list users_at_[hidden] Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/01/26100.php">http://www.open-mpi.org/community/lists/users/2015/01/26100.php</a> 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________ users mailing list users_at_[hidden] Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/01/26101.php">http://www.open-mpi.org/community/lists/users/2015/01/26101.php</a> 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/01/26102.php">http://www.open-mpi.org/community/lists/users/2015/01/26102.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26104/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26105.php">Diego Avesani: "Re: [OMPI users] OMPI users] OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
<li><strong>Previous message:</strong> <a href="26103.php">Diego Avesani: "Re: [OMPI users] OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26105.php">Diego Avesani: "Re: [OMPI users] OMPI users] OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
<li><strong>Reply:</strong> <a href="26105.php">Diego Avesani: "Re: [OMPI users] OMPI users] OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
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
