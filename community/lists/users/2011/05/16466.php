<?
$subject_val = "Re: [OMPI users] Mixing the FORTRAN and C APIs.";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  6 13:22:51 2011" -->
<!-- isoreceived="20110506172251" -->
<!-- sent="Fri, 6 May 2011 18:22:27 +0100" -->
<!-- isosent="20110506172227" -->
<!-- name="Tim Hutt" -->
<!-- email="tdhutt_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mixing the FORTRAN and C APIs." -->
<!-- id="BANLkTiminXkp8=LqADkagK6s2oaBvx3o+w_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BANLkTikP+nHnz4xifyznN3=RjD1MDyyT9Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Mixing the FORTRAN and C APIs.<br>
<strong>From:</strong> Tim Hutt (<em>tdhutt_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-06 13:22:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16467.php">Tim Prince: "Re: [OMPI users] Mixing the FORTRAN and C APIs."</a>
<li><strong>Previous message:</strong> <a href="16465.php">hi: "[OMPI users] Fwd: Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<li><strong>In reply to:</strong> <a href="16461.php">Tim Hutt: "Re: [OMPI users] Mixing the FORTRAN and C APIs."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16467.php">Tim Prince: "Re: [OMPI users] Mixing the FORTRAN and C APIs."</a>
<li><strong>Reply:</strong> <a href="16467.php">Tim Prince: "Re: [OMPI users] Mixing the FORTRAN and C APIs."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 6 May 2011 16:45, Tim Hutt &lt;tdhutt_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On 6 May 2011 16:27, Tim Prince &lt;tcprince_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; If you want to use the MPI Fortran library, don't convert your Fortran to C.
</span><br>
<span class="quotelev2">&gt;&gt; &#160;It's difficult to understand why you would consider f2c a &quot;simplest way,&quot;
</span><br>
<span class="quotelev2">&gt;&gt; but at least it should allow you to use ordinary C MPI function calls.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry, maybe I wasn't clear. Just to clarify, all of *my* code is
</span><br>
<span class="quotelev1">&gt; written in C++ (because I don't actually know Fortran), but I want to
</span><br>
<span class="quotelev1">&gt; use some function from PARPACK which is written in Fortran.
</span><br>
<p>Hmm I converted my C++ code to use the C OpenMPI interface instead,
<br>
and now I get link errors (undefined references). I remembered I've
<br>
been linking with -lmpi -lmpi_f77, so maybe I need to also link with
<br>
-lmpi_cxx or -lmpi++  ... what exactly do each of these libraries
<br>
contain?
<br>
<p>Also I have run into the problem that the communicators are of type
<br>
&quot;MPI_Comm&quot; in C, and &quot;integer&quot; in Fortran... I am using MPI_COMM_WORLD
<br>
in each case so I assume that will end up referring to the same
<br>
thing... but maybe you really can't mix Fortran and C. Expert opinion
<br>
would be very very welcome!
<br>
<p>Tim
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16467.php">Tim Prince: "Re: [OMPI users] Mixing the FORTRAN and C APIs."</a>
<li><strong>Previous message:</strong> <a href="16465.php">hi: "[OMPI users] Fwd: Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<li><strong>In reply to:</strong> <a href="16461.php">Tim Hutt: "Re: [OMPI users] Mixing the FORTRAN and C APIs."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16467.php">Tim Prince: "Re: [OMPI users] Mixing the FORTRAN and C APIs."</a>
<li><strong>Reply:</strong> <a href="16467.php">Tim Prince: "Re: [OMPI users] Mixing the FORTRAN and C APIs."</a>
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
