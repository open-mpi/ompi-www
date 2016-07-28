<?
$subject_val = "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  3 09:23:35 2014" -->
<!-- isoreceived="20141003132335" -->
<!-- sent="Fri, 3 Oct 2014 15:23:35 +0200" -->
<!-- isosent="20141003132335" -->
<!-- name="Diego Avesani" -->
<!-- email="diego.avesani_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT" -->
<!-- id="CAG8o1y4_E87ZrhvVNzaFy8P+4_wuF99utFHku2JZpw3DOR9SZA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAbhqc4wf_DSGGOpTCfMF8xFun_HA-gKpkHLhj3AuSg5D=vjeA_at_mail.gmail.com" -->
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
<strong>From:</strong> Diego Avesani (<em>diego.avesani_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-03 09:23:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25439.php">Nick Papior Andersen: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>Previous message:</strong> <a href="25437.php">Nick Papior Andersen: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>In reply to:</strong> <a href="25437.php">Nick Papior Andersen: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25439.php">Nick Papior Andersen: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>Reply:</strong> <a href="25439.php">Nick Papior Andersen: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Nick,
<br>
thanks again.
<br>
After reading your post I have thought to compile as
<br>
<p>mpif90 -r8 *.f90
<br>
<p>and to have this type variable
<br>
<p>TYPE tParticle
<br>
&nbsp;&nbsp;&nbsp;&nbsp;SEQUENCE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;INTEGER :: ip
<br>
&nbsp;&nbsp;&nbsp;&nbsp;INTEGER :: fake
<br>
&nbsp;&nbsp;&nbsp;&nbsp;REAL    :: RP(2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;REAL    :: QQ(4)
<br>
END TYPE tParticle
<br>
<p>where I use fake to have 4 + 4 bytes, and then I have
<br>
TYPES(1)=MPI_INTEGER
<br>
TYPES(2)=MPI_DOUBLE_PRECISION
<br>
TYPES(3)=MPI_DOUBLE_PRECISION
<br>
nBLOCKS(1)=2
<br>
nBLOCKS(2)=2
<br>
nBLOCKS(3)=4
<br>
<p>Am I wrong? Do I have correctly understood?
<br>
<p>Really Really thanks
<br>
<p><p>Diego
<br>
<p><p>On 3 October 2014 15:10, Nick Papior Andersen &lt;nickpapior_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2014-10-03 13:00 GMT+00:00 Diego Avesani &lt;diego.avesani_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear all, dear Nick,
</span><br>
<span class="quotelev2">&gt;&gt; thanks lot.
</span><br>
<span class="quotelev2">&gt;&gt; I have understood something, so I have create this variable type:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   TYPE tParticle
</span><br>
<span class="quotelev2">&gt;&gt;     SEQUENCE
</span><br>
<span class="quotelev2">&gt;&gt;     INTEGER :: ip
</span><br>
<span class="quotelev2">&gt;&gt;     INTEGER :: fake
</span><br>
<span class="quotelev2">&gt;&gt;     REAL    :: RP(2)
</span><br>
<span class="quotelev2">&gt;&gt;     REAL    :: QQ(4)
</span><br>
<span class="quotelev2">&gt;&gt;   END TYPE tParticle
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; But did it work? :) Remember to tell mpi about the padding (add one more
</span><br>
<span class="quotelev1">&gt; type).
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In the point number 2, do you mean to insert some align options?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Search around for your compiler. However, this will be &quot;forcing&quot; your
</span><br>
<span class="quotelev1">&gt; program to certain compilers, I would not recommend this (unless you have
</span><br>
<span class="quotelev1">&gt; specific reasons anyway).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For the point number 3, I do not understand where where I am wrong. This
</span><br>
<span class="quotelev2">&gt;&gt; is my code
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      TYPES(1)=MPI_INTEGER
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Here it is wrong.
</span><br>
<span class="quotelev1">&gt; If you compile with -i8 your integer is not an integer, but a long. Your
</span><br>
<span class="quotelev1">&gt; displacements should be correct, but not your designation of the data-type
</span><br>
<span class="quotelev1">&gt; for mpi.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      TYPES(2)=MPI_DOUBLE_PRECISION
</span><br>
<span class="quotelev2">&gt;&gt;      TYPES(3)=MPI_DOUBLE_PRECISION
</span><br>
<span class="quotelev2">&gt;&gt;      nBLOCKS(1)=2
</span><br>
<span class="quotelev2">&gt;&gt;      nBLOCKS(2)=2
</span><br>
<span class="quotelev2">&gt;&gt;      nBLOCKS(3)=4
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      DISPLACEMENTS(1)=0
</span><br>
<span class="quotelev2">&gt;&gt;      DISPLACEMENTS(2)=sizeof(dummy%ip)+sizeof(dummy%fake)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  DISPLACEMENTS(3)=sizeof(dummy%ip)+sizeof(dummy%fake)+sizeof(dummy%RP(1))+sizeof(dummy%RP(2))
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      CALL
</span><br>
<span class="quotelev2">&gt;&gt; MPI_TYPE_CREATE_STRUCT(3,nBLOCKS,DISPLACEMENTS,TYPES,MPI_PARTICLE_TYPE,MPI%ierr)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is how I compile
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpif90 -r8 *.f90
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; Again, really really Thanks
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Diego
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 3 October 2014 14:30, Nick Papior Andersen &lt;nickpapior_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I would never compile a fortran program relying on a specific compiler
</span><br>
<span class="quotelev3">&gt;&gt;&gt; option! I would never use r8/i8!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I would highly encourage you to explicitly set the precision of each
</span><br>
<span class="quotelev3">&gt;&gt;&gt; variable if you need specific variable precision. There are plenty of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tutorials around for this (selected_real/int_kind).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Secondly, the warning of mis-alignment is due to the data type not being
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a multiple of 8. You can pad it with additional bytes to reach a multiple
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of 8 (in this case add a fake integer, or character(len=4)).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I do not know if sequence is needed for the mpi data type (I guess it is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; needed when dealing with arrays of types, but again, I am not fully sure
</span><br>
<span class="quotelev3">&gt;&gt;&gt; about this...).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A couple of options:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1) I think sequence should work if you pad it to align with 8 bytes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2) add code that is directive specified against the compiler to tell the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; exact alignment of the data type
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3) Your compilation of -r8 -i8 does probably not work due to the integer
</span><br>
<span class="quotelev3">&gt;&gt;&gt; being long, and hence your data type of MPI_INTEGER (you did not tell us
</span><br>
<span class="quotelev3">&gt;&gt;&gt; whether you corrected this)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2014-10-03 11:07 GMT+00:00 Diego Avesani &lt;diego.avesani_at_[hidden]&gt;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Dears,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; First of all. Really really thanks for you help, I am learning a lot.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Second:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I try to study the MPI_TYPE_CREATE_STRUCT and all the things look
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; correct.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I use Intel Fortran compiler and when I compile with -r8 means that I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; am compiling in double precision.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; About Nick suggestion:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Coding
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   TYPE tParticle
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     SEQUENCE
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     INTEGER :: ip
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     REAL    :: RP(2)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     REAL    :: QQ(4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   END TYPE tParticle
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; if I compile with
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpif90 -r8  *.f90
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I get the following error:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; warning #6379: The structure contains one or more misaligned fields.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [TPARTICLE] TYPE tParticle
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I can only compile as:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpif90 -r8 -i8 *.f90
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; But I get the same error:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; An error occurred in MPI_Cart_create
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [diedroLap:12267] *** reported by process
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [139817172008961,139814070386689]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [diedroLap:12267] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [diedroLap:12267] *** MPI_ERR_OTHER: known error not in list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [diedroLap:12267] *** MPI_ERRORS_ARE_FATAL (processes in this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; communicator will now abort,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [diedroLap:12267] ***    and potentially your MPI job)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; What I can do?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks a lot
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 3 October 2014 08:15, Nick Papior Andersen &lt;nickpapior_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; sequence
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
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
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/10/25434.php">http://www.open-mpi.org/community/lists/users/2014/10/25434.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Kind regards Nick
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
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/10/25435.php">http://www.open-mpi.org/community/lists/users/2014/10/25435.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/10/25436.php">http://www.open-mpi.org/community/lists/users/2014/10/25436.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/10/25437.php">http://www.open-mpi.org/community/lists/users/2014/10/25437.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25438/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25439.php">Nick Papior Andersen: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>Previous message:</strong> <a href="25437.php">Nick Papior Andersen: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>In reply to:</strong> <a href="25437.php">Nick Papior Andersen: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25439.php">Nick Papior Andersen: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>Reply:</strong> <a href="25439.php">Nick Papior Andersen: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
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
