<?
$subject_val = "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  3 08:31:15 2014" -->
<!-- isoreceived="20141003123115" -->
<!-- sent="Fri, 3 Oct 2014 12:30:55 +0000" -->
<!-- isosent="20141003123055" -->
<!-- name="Nick Papior Andersen" -->
<!-- email="nickpapior_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT" -->
<!-- id="CAAbhqc6=WfdfKGnYkQ_OxABJJv8_bOJZzPG6xU8cR_PZfHfnvw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAG8o1y7GCmeXJ=2VQGXTDJworu-5oCZay3GAdsRM=0GWS61spg_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-10-03 08:30:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25436.php">Diego Avesani: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>Previous message:</strong> <a href="25434.php">Diego Avesani: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>In reply to:</strong> <a href="25434.php">Diego Avesani: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25436.php">Diego Avesani: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>Reply:</strong> <a href="25436.php">Diego Avesani: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I would never compile a fortran program relying on a specific compiler
<br>
option! I would never use r8/i8!
<br>
I would highly encourage you to explicitly set the precision of each
<br>
variable if you need specific variable precision. There are plenty of
<br>
tutorials around for this (selected_real/int_kind).
<br>
<p>Secondly, the warning of mis-alignment is due to the data type not being a
<br>
multiple of 8. You can pad it with additional bytes to reach a multiple of
<br>
8 (in this case add a fake integer, or character(len=4)).
<br>
I do not know if sequence is needed for the mpi data type (I guess it is
<br>
needed when dealing with arrays of types, but again, I am not fully sure
<br>
about this...).
<br>
<p>A couple of options:
<br>
1) I think sequence should work if you pad it to align with 8 bytes.
<br>
2) add code that is directive specified against the compiler to tell the
<br>
exact alignment of the data type
<br>
3) Your compilation of -r8 -i8 does probably not work due to the integer
<br>
being long, and hence your data type of MPI_INTEGER (you did not tell us
<br>
whether you corrected this)
<br>
<p><p><p><p>2014-10-03 11:07 GMT+00:00 Diego Avesani &lt;diego.avesani_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Dears,
</span><br>
<span class="quotelev1">&gt; First of all. Really really thanks for you help, I am learning a lot.
</span><br>
<span class="quotelev1">&gt; Second:
</span><br>
<span class="quotelev1">&gt; I try to study the MPI_TYPE_CREATE_STRUCT and all the things look correct.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I use Intel Fortran compiler and when I compile with -r8 means that I am
</span><br>
<span class="quotelev1">&gt; compiling in double precision.
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
<span class="quotelev1">&gt; warning #6379: The structure contains one or more misaligned fields.
</span><br>
<span class="quotelev1">&gt; [TPARTICLE] TYPE tParticle
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
<span class="quotelev1">&gt; [diedroLap:12267] *** MPI_ERRORS_ARE_FATAL (processes in this communicator
</span><br>
<span class="quotelev1">&gt; will now abort,
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
<span class="quotelev1">&gt; On 3 October 2014 08:15, Nick Papior Andersen &lt;nickpapior_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; sequence
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/10/25434.php">http://www.open-mpi.org/community/lists/users/2014/10/25434.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Kind regards Nick
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25435/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25436.php">Diego Avesani: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>Previous message:</strong> <a href="25434.php">Diego Avesani: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>In reply to:</strong> <a href="25434.php">Diego Avesani: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25436.php">Diego Avesani: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>Reply:</strong> <a href="25436.php">Diego Avesani: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
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
