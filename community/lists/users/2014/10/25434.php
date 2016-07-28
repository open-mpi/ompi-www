<?
$subject_val = "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  3 07:07:19 2014" -->
<!-- isoreceived="20141003110719" -->
<!-- sent="Fri, 3 Oct 2014 13:07:19 +0200" -->
<!-- isosent="20141003110719" -->
<!-- name="Diego Avesani" -->
<!-- email="diego.avesani_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT" -->
<!-- id="CAG8o1y7GCmeXJ=2VQGXTDJworu-5oCZay3GAdsRM=0GWS61spg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAbhqc7KWrDFTxEXN2dOgOyeerpjOgAqxZnaY1KoaYnfM7MDHA_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-10-03 07:07:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25435.php">Nick Papior Andersen: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>Previous message:</strong> <a href="25433.php">Nick Papior Andersen: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>In reply to:</strong> <a href="25433.php">Nick Papior Andersen: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25435.php">Nick Papior Andersen: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>Reply:</strong> <a href="25435.php">Nick Papior Andersen: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dears,
<br>
First of all. Really really thanks for you help, I am learning a lot.
<br>
Second:
<br>
I try to study the MPI_TYPE_CREATE_STRUCT and all the things look correct.
<br>
<p>I use Intel Fortran compiler and when I compile with -r8 means that I am
<br>
compiling in double precision.
<br>
<p>About Nick suggestion:
<br>
Coding
<br>
<p>&nbsp;&nbsp;TYPE tParticle
<br>
&nbsp;&nbsp;&nbsp;&nbsp;SEQUENCE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;INTEGER :: ip
<br>
&nbsp;&nbsp;&nbsp;&nbsp;REAL    :: RP(2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;REAL    :: QQ(4)
<br>
&nbsp;&nbsp;END TYPE tParticle
<br>
<p><p>if I compile with
<br>
mpif90 -r8  *.f90
<br>
<p>I get the following error:
<br>
warning #6379: The structure contains one or more misaligned fields.
<br>
[TPARTICLE] TYPE tParticle
<br>
<p><p>I can only compile as:
<br>
mpif90 -r8 -i8 *.f90
<br>
<p>But I get the same error:
<br>
<p>An error occurred in MPI_Cart_create
<br>
[diedroLap:12267] *** reported by process [139817172008961,139814070386689]
<br>
[diedroLap:12267] *** on communicator MPI_COMM_WORLD
<br>
[diedroLap:12267] *** MPI_ERR_OTHER: known error not in list
<br>
[diedroLap:12267] *** MPI_ERRORS_ARE_FATAL (processes in this communicator
<br>
will now abort,
<br>
[diedroLap:12267] ***    and potentially your MPI job)
<br>
<p><p><p>What I can do?
<br>
Thanks a lot
<br>
<p><p><p>On 3 October 2014 08:15, Nick Papior Andersen &lt;nickpapior_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; sequence
</span><br>
<p><p><p><p>Diego
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25434/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25435.php">Nick Papior Andersen: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>Previous message:</strong> <a href="25433.php">Nick Papior Andersen: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>In reply to:</strong> <a href="25433.php">Nick Papior Andersen: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25435.php">Nick Papior Andersen: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>Reply:</strong> <a href="25435.php">Nick Papior Andersen: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
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
