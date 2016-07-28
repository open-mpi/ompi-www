<?
$subject_val = "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  3 09:11:01 2014" -->
<!-- isoreceived="20141003131101" -->
<!-- sent="Fri, 3 Oct 2014 13:10:41 +0000" -->
<!-- isosent="20141003131041" -->
<!-- name="Nick Papior Andersen" -->
<!-- email="nickpapior_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT" -->
<!-- id="CAAbhqc4wf_DSGGOpTCfMF8xFun_HA-gKpkHLhj3AuSg5D=vjeA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAG8o1y43KjJouWEQb760uUv_RhEtM9z2ioUcqgv=wjfCL7sH_g_at_mail.gmail.com" -->
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
<strong>From:</strong> Nick Papior Andersen (<em>nickpapior_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-03 09:10:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25438.php">Diego Avesani: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>Previous message:</strong> <a href="25436.php">Diego Avesani: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>In reply to:</strong> <a href="25436.php">Diego Avesani: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25438.php">Diego Avesani: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>Reply:</strong> <a href="25438.php">Diego Avesani: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
2014-10-03 13:00 GMT+00:00 Diego Avesani &lt;diego.avesani_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Dear all, dear Nick,
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
<span class="quotelev1">&gt;
</span><br>
But did it work? :) Remember to tell mpi about the padding (add one more
<br>
type).
<br>
Also, for cosmetic reasons I would do this:
<br>
TYPE tParticle
<br>
sequence
<br>
integer :: ip
<br>
real :: rp(2), qq(4)
<br>
! THIS IS A PADDING VARIABLE (SHOULD NEVER BE USED)
<br>
integer :: pad
<br>
end type
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the point number 2, do you mean to insert some align options?
</span><br>
<span class="quotelev1">&gt;
</span><br>
Search around for your compiler. However, this will be &quot;forcing&quot; your
<br>
program to certain compilers, I would not recommend this (unless you have
<br>
specific reasons anyway).
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For the point number 3, I do not understand where where I am wrong. This
</span><br>
<span class="quotelev1">&gt; is my code
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      TYPES(1)=MPI_INTEGER
</span><br>
<span class="quotelev1">&gt;
</span><br>
Here it is wrong.
<br>
If you compile with -i8 your integer is not an integer, but a long. Your
<br>
displacements should be correct, but not your designation of the data-type
<br>
for mpi.
<br>
<p><span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  DISPLACEMENTS(3)=sizeof(dummy%ip)+sizeof(dummy%fake)+sizeof(dummy%RP(1))+sizeof(dummy%RP(2))
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      CALL
</span><br>
<span class="quotelev1">&gt; MPI_TYPE_CREATE_STRUCT(3,nBLOCKS,DISPLACEMENTS,TYPES,MPI_PARTICLE_TYPE,MPI%ierr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is how I compile
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpif90 -r8 *.f90
</span><br>
<span class="quotelev1">&gt;
</span><br>
No, that was not what you said!
<br>
You said you compiled it using:
<br>
mpif90 -r8 -i8 *.f90
<br>
<p><p><span class="quotelev1">&gt; Again, really really Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Diego
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 3 October 2014 14:30, Nick Papior Andersen &lt;nickpapior_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I would never compile a fortran program relying on a specific compiler
</span><br>
<span class="quotelev2">&gt;&gt; option! I would never use r8/i8!
</span><br>
<span class="quotelev2">&gt;&gt; I would highly encourage you to explicitly set the precision of each
</span><br>
<span class="quotelev2">&gt;&gt; variable if you need specific variable precision. There are plenty of
</span><br>
<span class="quotelev2">&gt;&gt; tutorials around for this (selected_real/int_kind).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Secondly, the warning of mis-alignment is due to the data type not being
</span><br>
<span class="quotelev2">&gt;&gt; a multiple of 8. You can pad it with additional bytes to reach a multiple
</span><br>
<span class="quotelev2">&gt;&gt; of 8 (in this case add a fake integer, or character(len=4)).
</span><br>
<span class="quotelev2">&gt;&gt; I do not know if sequence is needed for the mpi data type (I guess it is
</span><br>
<span class="quotelev2">&gt;&gt; needed when dealing with arrays of types, but again, I am not fully sure
</span><br>
<span class="quotelev2">&gt;&gt; about this...).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A couple of options:
</span><br>
<span class="quotelev2">&gt;&gt; 1) I think sequence should work if you pad it to align with 8 bytes.
</span><br>
<span class="quotelev2">&gt;&gt; 2) add code that is directive specified against the compiler to tell the
</span><br>
<span class="quotelev2">&gt;&gt; exact alignment of the data type
</span><br>
<span class="quotelev2">&gt;&gt; 3) Your compilation of -r8 -i8 does probably not work due to the integer
</span><br>
<span class="quotelev2">&gt;&gt; being long, and hence your data type of MPI_INTEGER (you did not tell us
</span><br>
<span class="quotelev2">&gt;&gt; whether you corrected this)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2014-10-03 11:07 GMT+00:00 Diego Avesani &lt;diego.avesani_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dears,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; First of all. Really really thanks for you help, I am learning a lot.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Second:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I try to study the MPI_TYPE_CREATE_STRUCT and all the things look
</span><br>
<span class="quotelev3">&gt;&gt;&gt; correct.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I use Intel Fortran compiler and when I compile with -r8 means that I am
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compiling in double precision.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; About Nick suggestion:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Coding
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   TYPE tParticle
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     SEQUENCE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     INTEGER :: ip
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     REAL    :: RP(2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     REAL    :: QQ(4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   END TYPE tParticle
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if I compile with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpif90 -r8  *.f90
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I get the following error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; warning #6379: The structure contains one or more misaligned fields.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [TPARTICLE] TYPE tParticle
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I can only compile as:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpif90 -r8 -i8 *.f90
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But I get the same error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; An error occurred in MPI_Cart_create
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [diedroLap:12267] *** reported by process
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [139817172008961,139814070386689]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [diedroLap:12267] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [diedroLap:12267] *** MPI_ERR_OTHER: known error not in list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [diedroLap:12267] *** MPI_ERRORS_ARE_FATAL (processes in this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; communicator will now abort,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [diedroLap:12267] ***    and potentially your MPI job)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What I can do?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks a lot
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 3 October 2014 08:15, Nick Papior Andersen &lt;nickpapior_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; sequence
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/10/25434.php">http://www.open-mpi.org/community/lists/users/2014/10/25434.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Kind regards Nick
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/10/25435.php">http://www.open-mpi.org/community/lists/users/2014/10/25435.php</a>
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/10/25436.php">http://www.open-mpi.org/community/lists/users/2014/10/25436.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Kind regards Nick
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25437/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25438.php">Diego Avesani: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>Previous message:</strong> <a href="25436.php">Diego Avesani: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>In reply to:</strong> <a href="25436.php">Diego Avesani: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25438.php">Diego Avesani: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>Reply:</strong> <a href="25438.php">Diego Avesani: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
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
