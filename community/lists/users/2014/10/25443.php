<?
$subject_val = "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  3 10:01:17 2014" -->
<!-- isoreceived="20141003140117" -->
<!-- sent="Fri, 3 Oct 2014 14:01:15 +0000" -->
<!-- isosent="20141003140115" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT" -->
<!-- id="79423DD2-E4F3-48D8-B169-A23D342ED308_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAG8o1y6Gz-AY0gUnMQq4UJO_hO7PoBpXSuXp45qhFK2z12LSsQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-03 10:01:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25444.php">Diego Avesani: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>Previous message:</strong> <a href="25442.php">Diego Avesani: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>In reply to:</strong> <a href="25442.php">Diego Avesani: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25444.php">Diego Avesani: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>Reply:</strong> <a href="25444.php">Diego Avesani: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Some random notes:
<br>
<p>1. I see that you're compiling your program with &quot;-r8 -fpp&quot;.  Did you compile/install OMPI with those same options?
<br>
<p>2. You haven't shown your full program; I would suggest using &quot;use mpi&quot; instead of &quot;include 'mpif.h'&quot;, if possible.  This will help catch compile-time errors.  And if you have a new-enough compiler (e.g., ifort or gcc 4.9.x), you should use update to the new &quot;use mpi_f08&quot; Fortran interface, if possible.
<br>
<p><p><p>On Oct 3, 2014, at 9:57 AM, Diego Avesani &lt;diego.avesani_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear Nick,
</span><br>
<span class="quotelev1">&gt; thank you, 
</span><br>
<span class="quotelev1">&gt; The important things is that the MPI_TYPE_CREATE_STRUCT works.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now I will proceed with the debug by myself, I will check MPI_TYPE_CREATE_STRUCT ierr output and other part of my program.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Again thanks you
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Diego
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 3 October 2014 15:45, Nick Papior Andersen &lt;nickpapior_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Well it says 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_ERR_TYPE: invalid datatype
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; so I guess you have done something wrong. ;)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You should debug as much as you can your self. 
</span><br>
<span class="quotelev1">&gt; 1) Check that your type-creation calls actually proceed as expected
</span><br>
<span class="quotelev1">&gt; 2) Check that your type-commit actually proceed as expected
</span><br>
<span class="quotelev1">&gt; 3) Telling us that &quot;it is not working&quot; does not tell us anything! You have probably changed the code several times since you started with some corrections, hence we cannot see if you have introduced other errors.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2014-10-03 13:38 GMT+00:00 Diego Avesani &lt;diego.avesani_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt; Dear Nick,
</span><br>
<span class="quotelev1">&gt; after that I call:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  CALL MPI_Sendrecv(P_SEND,nptSend,MPI_PARTICLE_TYPE,BCPU,201,&amp;
</span><br>
<span class="quotelev1">&gt;                                     P_RECV,nptSend,MPI_PARTICLE_TYPE,TCPU,201,&amp;
</span><br>
<span class="quotelev1">&gt;                                    MPI_COMM_WORLD,MPI_STATUS_IGNORE,MPI%iErr)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; but I have the following error
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [diedroLap:16824] *** An error occurred in MPI_Sendrecv
</span><br>
<span class="quotelev1">&gt; [diedroLap:16824] *** reported by process [139856324001793,139852725092354]
</span><br>
<span class="quotelev1">&gt; [diedroLap:16824] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [diedroLap:16824] *** MPI_ERR_TYPE: invalid datatype
</span><br>
<span class="quotelev1">&gt; [diedroLap:16824] *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev1">&gt; [diedroLap:16824] ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you know something about this errors?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks again
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Diego
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 3 October 2014 15:29, Nick Papior Andersen &lt;nickpapior_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Yes, I guess this is correct. Testing is easy! Try testing!
</span><br>
<span class="quotelev1">&gt; As I stated, I do not know enough about the custom type in MPI, this was my hunch feeling...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2014-10-03 13:23 GMT+00:00 Diego Avesani &lt;diego.avesani_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt; Dear Nick,
</span><br>
<span class="quotelev1">&gt; thanks again. 
</span><br>
<span class="quotelev1">&gt; After reading your post I have thought to compile as
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpif90 -r8 *.f90
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and to have this type variable
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; TYPE tParticle
</span><br>
<span class="quotelev1">&gt;     SEQUENCE
</span><br>
<span class="quotelev1">&gt;     INTEGER :: ip
</span><br>
<span class="quotelev1">&gt;     INTEGER :: fake
</span><br>
<span class="quotelev1">&gt;     REAL    :: RP(2)
</span><br>
<span class="quotelev1">&gt;     REAL    :: QQ(4)
</span><br>
<span class="quotelev1">&gt; END TYPE tParticle
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; where I use fake to have 4 + 4 bytes, and then I have
</span><br>
<span class="quotelev1">&gt; TYPES(1)=MPI_INTEGER
</span><br>
<span class="quotelev1">&gt; TYPES(2)=MPI_DOUBLE_PRECISION      
</span><br>
<span class="quotelev1">&gt; TYPES(3)=MPI_DOUBLE_PRECISION     
</span><br>
<span class="quotelev1">&gt; nBLOCKS(1)=2                
</span><br>
<span class="quotelev1">&gt; nBLOCKS(2)=2
</span><br>
<span class="quotelev1">&gt; nBLOCKS(3)=4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Am I wrong? Do I have correctly understood?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Really Really thanks
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
<span class="quotelev1">&gt; On 3 October 2014 15:10, Nick Papior Andersen &lt;nickpapior_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2014-10-03 13:00 GMT+00:00 Diego Avesani &lt;diego.avesani_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt; Dear all, dear Nick,
</span><br>
<span class="quotelev1">&gt; thanks lot.
</span><br>
<span class="quotelev1">&gt; I have understood something, so I have create this variable type:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   TYPE tParticle
</span><br>
<span class="quotelev1">&gt;     SEQUENCE
</span><br>
<span class="quotelev1">&gt;     INTEGER :: ip
</span><br>
<span class="quotelev1">&gt;     INTEGER :: fake
</span><br>
<span class="quotelev1">&gt;     REAL    :: RP(2)
</span><br>
<span class="quotelev1">&gt;     REAL    :: QQ(4)
</span><br>
<span class="quotelev1">&gt;   END TYPE tParticle
</span><br>
<span class="quotelev1">&gt; But did it work? :) Remember to tell mpi about the padding (add one more type).
</span><br>
<span class="quotelev1">&gt; Also, for cosmetic reasons I would do this:
</span><br>
<span class="quotelev1">&gt; TYPE tParticle
</span><br>
<span class="quotelev1">&gt; sequence
</span><br>
<span class="quotelev1">&gt; integer :: ip
</span><br>
<span class="quotelev1">&gt; real :: rp(2), qq(4)
</span><br>
<span class="quotelev1">&gt; ! THIS IS A PADDING VARIABLE (SHOULD NEVER BE USED)
</span><br>
<span class="quotelev1">&gt; integer :: pad
</span><br>
<span class="quotelev1">&gt; end type
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In the point number 2, do you mean to insert some align options?
</span><br>
<span class="quotelev1">&gt; Search around for your compiler. However, this will be &quot;forcing&quot; your program to certain compilers, I would not recommend this (unless you have specific reasons anyway).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For the point number 3, I do not understand where where I am wrong. This is my code
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt;      TYPES(1)=MPI_INTEGER
</span><br>
<span class="quotelev1">&gt; Here it is wrong.
</span><br>
<span class="quotelev1">&gt; If you compile with -i8 your integer is not an integer, but a long. Your displacements should be correct, but not your designation of the data-type for mpi.
</span><br>
<span class="quotelev1">&gt;             
</span><br>
<span class="quotelev1">&gt;      TYPES(2)=MPI_DOUBLE_PRECISION      
</span><br>
<span class="quotelev1">&gt;      TYPES(3)=MPI_DOUBLE_PRECISION     
</span><br>
<span class="quotelev1">&gt;      nBLOCKS(1)=2                
</span><br>
<span class="quotelev1">&gt;      nBLOCKS(2)=2
</span><br>
<span class="quotelev1">&gt;      nBLOCKS(3)=4
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;      DISPLACEMENTS(1)=0
</span><br>
<span class="quotelev1">&gt;      DISPLACEMENTS(2)=sizeof(dummy%ip)+sizeof(dummy%fake)
</span><br>
<span class="quotelev1">&gt;      DISPLACEMENTS(3)=sizeof(dummy%ip)+sizeof(dummy%fake)+sizeof(dummy%RP(1))+sizeof(dummy%RP(2))
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;      CALL MPI_TYPE_CREATE_STRUCT(3,nBLOCKS,DISPLACEMENTS,TYPES,MPI_PARTICLE_TYPE,MPI%ierr)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is how I compile
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpif90 -r8 *.f90
</span><br>
<span class="quotelev1">&gt; No, that was not what you said! 
</span><br>
<span class="quotelev1">&gt; You said you compiled it using:
</span><br>
<span class="quotelev1">&gt; mpif90 -r8 -i8 *.f90
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Again, really really Thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Diego
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 3 October 2014 14:30, Nick Papior Andersen &lt;nickpapior_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; I would never compile a fortran program relying on a specific compiler option! I would never use r8/i8!
</span><br>
<span class="quotelev1">&gt; I would highly encourage you to explicitly set the precision of each variable if you need specific variable precision. There are plenty of tutorials around for this (selected_real/int_kind).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Secondly, the warning of mis-alignment is due to the data type not being a multiple of 8. You can pad it with additional bytes to reach a multiple of 8 (in this case add a fake integer, or character(len=4)).
</span><br>
<span class="quotelev1">&gt; I do not know if sequence is needed for the mpi data type (I guess it is needed when dealing with arrays of types, but again, I am not fully sure about this...).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A couple of options:
</span><br>
<span class="quotelev1">&gt; 1) I think sequence should work if you pad it to align with 8 bytes.
</span><br>
<span class="quotelev1">&gt; 2) add code that is directive specified against the compiler to tell the exact alignment of the data type
</span><br>
<span class="quotelev1">&gt; 3) Your compilation of -r8 -i8 does probably not work due to the integer being long, and hence your data type of MPI_INTEGER (you did not tell us whether you corrected this)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2014-10-03 11:07 GMT+00:00 Diego Avesani &lt;diego.avesani_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt; Dears,
</span><br>
<span class="quotelev1">&gt; First of all. Really really thanks for you help, I am learning a lot.
</span><br>
<span class="quotelev1">&gt; Second:
</span><br>
<span class="quotelev1">&gt; I try to study the MPI_TYPE_CREATE_STRUCT and all the things look correct.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I use Intel Fortran compiler and when I compile with -r8 means that I am compiling in double precision.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; About Nick suggestion:
</span><br>
<span class="quotelev1">&gt; Coding
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   TYPE tParticle
</span><br>
<span class="quotelev1">&gt;     SEQUENCE
</span><br>
<span class="quotelev1">&gt;     INTEGER :: ip
</span><br>
<span class="quotelev1">&gt;     REAL    :: RP(2)
</span><br>
<span class="quotelev1">&gt;     REAL    :: QQ(4)
</span><br>
<span class="quotelev1">&gt;   END TYPE tParticle
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; if I compile with
</span><br>
<span class="quotelev1">&gt; mpif90 -r8  *.f90 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I get the following error:
</span><br>
<span class="quotelev1">&gt; warning #6379: The structure contains one or more misaligned fields.   [TPARTICLE] TYPE tParticle
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can only compile as:
</span><br>
<span class="quotelev1">&gt; mpif90 -r8 -i8 *.f90 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But I get the same error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; An error occurred in MPI_Cart_create
</span><br>
<span class="quotelev1">&gt; [diedroLap:12267] *** reported by process [139817172008961,139814070386689]
</span><br>
<span class="quotelev1">&gt; [diedroLap:12267] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [diedroLap:12267] *** MPI_ERR_OTHER: known error not in list
</span><br>
<span class="quotelev1">&gt; [diedroLap:12267] *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev1">&gt; [diedroLap:12267] ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What I can do? 
</span><br>
<span class="quotelev1">&gt; Thanks a lot
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 3 October 2014 08:15, Nick Papior Andersen &lt;nickpapior_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; sequence
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/10/25434.php">http://www.open-mpi.org/community/lists/users/2014/10/25434.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Kind regards Nick
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/10/25435.php">http://www.open-mpi.org/community/lists/users/2014/10/25435.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/10/25436.php">http://www.open-mpi.org/community/lists/users/2014/10/25436.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Kind regards Nick
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/10/25437.php">http://www.open-mpi.org/community/lists/users/2014/10/25437.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/10/25438.php">http://www.open-mpi.org/community/lists/users/2014/10/25438.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Kind regards Nick
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/10/25439.php">http://www.open-mpi.org/community/lists/users/2014/10/25439.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/10/25440.php">http://www.open-mpi.org/community/lists/users/2014/10/25440.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Kind regards Nick
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/10/25441.php">http://www.open-mpi.org/community/lists/users/2014/10/25441.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/10/25442.php">http://www.open-mpi.org/community/lists/users/2014/10/25442.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25444.php">Diego Avesani: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>Previous message:</strong> <a href="25442.php">Diego Avesani: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>In reply to:</strong> <a href="25442.php">Diego Avesani: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25444.php">Diego Avesani: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>Reply:</strong> <a href="25444.php">Diego Avesani: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
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
