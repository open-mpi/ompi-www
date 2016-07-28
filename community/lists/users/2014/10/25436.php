<?
$subject_val = "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  3 09:00:43 2014" -->
<!-- isoreceived="20141003130043" -->
<!-- sent="Fri, 3 Oct 2014 15:00:43 +0200" -->
<!-- isosent="20141003130043" -->
<!-- name="Diego Avesani" -->
<!-- email="diego.avesani_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT" -->
<!-- id="CAG8o1y43KjJouWEQb760uUv_RhEtM9z2ioUcqgv=wjfCL7sH_g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAbhqc6=WfdfKGnYkQ_OxABJJv8_bOJZzPG6xU8cR_PZfHfnvw_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-10-03 09:00:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25437.php">Nick Papior Andersen: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>Previous message:</strong> <a href="25435.php">Nick Papior Andersen: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>In reply to:</strong> <a href="25435.php">Nick Papior Andersen: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25437.php">Nick Papior Andersen: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>Reply:</strong> <a href="25437.php">Nick Papior Andersen: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all, dear Nick,
<br>
thanks lot.
<br>
I have understood something, so I have create this variable type:
<br>
<p>&nbsp;&nbsp;TYPE tParticle
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
&nbsp;&nbsp;END TYPE tParticle
<br>
<p>In the point number 2, do you mean to insert some align options?
<br>
<p>For the point number 3, I do not understand where where I am wrong. This is
<br>
my code
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TYPES(1)=MPI_INTEGER
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TYPES(2)=MPI_DOUBLE_PRECISION
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TYPES(3)=MPI_DOUBLE_PRECISION
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;nBLOCKS(1)=2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;nBLOCKS(2)=2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;nBLOCKS(3)=4
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DISPLACEMENTS(1)=0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DISPLACEMENTS(2)=sizeof(dummy%ip)+sizeof(dummy%fake)
<br>
<p>&nbsp;DISPLACEMENTS(3)=sizeof(dummy%ip)+sizeof(dummy%fake)+sizeof(dummy%RP(1))+sizeof(dummy%RP(2))
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL
<br>
MPI_TYPE_CREATE_STRUCT(3,nBLOCKS,DISPLACEMENTS,TYPES,MPI_PARTICLE_TYPE,MPI%ierr)
<br>
<p>This is how I compile
<br>
<p>mpif90 -r8 *.f90
<br>
<p>Again, really really Thanks
<br>
<p>Diego
<br>
<p><p>On 3 October 2014 14:30, Nick Papior Andersen &lt;nickpapior_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I would never compile a fortran program relying on a specific compiler
</span><br>
<span class="quotelev1">&gt; option! I would never use r8/i8!
</span><br>
<span class="quotelev1">&gt; I would highly encourage you to explicitly set the precision of each
</span><br>
<span class="quotelev1">&gt; variable if you need specific variable precision. There are plenty of
</span><br>
<span class="quotelev1">&gt; tutorials around for this (selected_real/int_kind).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Secondly, the warning of mis-alignment is due to the data type not being a
</span><br>
<span class="quotelev1">&gt; multiple of 8. You can pad it with additional bytes to reach a multiple of
</span><br>
<span class="quotelev1">&gt; 8 (in this case add a fake integer, or character(len=4)).
</span><br>
<span class="quotelev1">&gt; I do not know if sequence is needed for the mpi data type (I guess it is
</span><br>
<span class="quotelev1">&gt; needed when dealing with arrays of types, but again, I am not fully sure
</span><br>
<span class="quotelev1">&gt; about this...).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A couple of options:
</span><br>
<span class="quotelev1">&gt; 1) I think sequence should work if you pad it to align with 8 bytes.
</span><br>
<span class="quotelev1">&gt; 2) add code that is directive specified against the compiler to tell the
</span><br>
<span class="quotelev1">&gt; exact alignment of the data type
</span><br>
<span class="quotelev1">&gt; 3) Your compilation of -r8 -i8 does probably not work due to the integer
</span><br>
<span class="quotelev1">&gt; being long, and hence your data type of MPI_INTEGER (you did not tell us
</span><br>
<span class="quotelev1">&gt; whether you corrected this)
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dears,
</span><br>
<span class="quotelev2">&gt;&gt; First of all. Really really thanks for you help, I am learning a lot.
</span><br>
<span class="quotelev2">&gt;&gt; Second:
</span><br>
<span class="quotelev2">&gt;&gt; I try to study the MPI_TYPE_CREATE_STRUCT and all the things look correct.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I use Intel Fortran compiler and when I compile with -r8 means that I am
</span><br>
<span class="quotelev2">&gt;&gt; compiling in double precision.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; About Nick suggestion:
</span><br>
<span class="quotelev2">&gt;&gt; Coding
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   TYPE tParticle
</span><br>
<span class="quotelev2">&gt;&gt;     SEQUENCE
</span><br>
<span class="quotelev2">&gt;&gt;     INTEGER :: ip
</span><br>
<span class="quotelev2">&gt;&gt;     REAL    :: RP(2)
</span><br>
<span class="quotelev2">&gt;&gt;     REAL    :: QQ(4)
</span><br>
<span class="quotelev2">&gt;&gt;   END TYPE tParticle
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; if I compile with
</span><br>
<span class="quotelev2">&gt;&gt; mpif90 -r8  *.f90
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I get the following error:
</span><br>
<span class="quotelev2">&gt;&gt; warning #6379: The structure contains one or more misaligned fields.
</span><br>
<span class="quotelev2">&gt;&gt; [TPARTICLE] TYPE tParticle
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I can only compile as:
</span><br>
<span class="quotelev2">&gt;&gt; mpif90 -r8 -i8 *.f90
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But I get the same error:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; An error occurred in MPI_Cart_create
</span><br>
<span class="quotelev2">&gt;&gt; [diedroLap:12267] *** reported by process
</span><br>
<span class="quotelev2">&gt;&gt; [139817172008961,139814070386689]
</span><br>
<span class="quotelev2">&gt;&gt; [diedroLap:12267] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt;&gt; [diedroLap:12267] *** MPI_ERR_OTHER: known error not in list
</span><br>
<span class="quotelev2">&gt;&gt; [diedroLap:12267] *** MPI_ERRORS_ARE_FATAL (processes in this
</span><br>
<span class="quotelev2">&gt;&gt; communicator will now abort,
</span><br>
<span class="quotelev2">&gt;&gt; [diedroLap:12267] ***    and potentially your MPI job)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What I can do?
</span><br>
<span class="quotelev2">&gt;&gt; Thanks a lot
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 3 October 2014 08:15, Nick Papior Andersen &lt;nickpapior_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sequence
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Diego
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/10/25434.php">http://www.open-mpi.org/community/lists/users/2014/10/25434.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/10/25435.php">http://www.open-mpi.org/community/lists/users/2014/10/25435.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25436/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25437.php">Nick Papior Andersen: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>Previous message:</strong> <a href="25435.php">Nick Papior Andersen: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>In reply to:</strong> <a href="25435.php">Nick Papior Andersen: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25437.php">Nick Papior Andersen: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>Reply:</strong> <a href="25437.php">Nick Papior Andersen: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
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
