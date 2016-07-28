<?
$subject_val = "Re: [OMPI users] Mixing the FORTRAN and C APIs.";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  6 11:46:01 2011" -->
<!-- isoreceived="20110506154601" -->
<!-- sent="Fri, 6 May 2011 16:45:37 +0100" -->
<!-- isosent="20110506154537" -->
<!-- name="Tim Hutt" -->
<!-- email="tdhutt_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mixing the FORTRAN and C APIs." -->
<!-- id="BANLkTikP+nHnz4xifyznN3=RjD1MDyyT9Q_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BLU0-SMTP16438C74C38CF35A6156F8CB7830_at_phx.gbl" -->
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
<strong>Date:</strong> 2011-05-06 11:45:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16462.php">hi: "[OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<li><strong>Previous message:</strong> <a href="16460.php">Paul Monday (Parallel Scientific): "Re: [OMPI users] SpMV Benchmarks"</a>
<li><strong>In reply to:</strong> <a href="16459.php">Tim Prince: "Re: [OMPI users] Mixing the FORTRAN and C APIs."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16466.php">Tim Hutt: "Re: [OMPI users] Mixing the FORTRAN and C APIs."</a>
<li><strong>Reply:</strong> <a href="16466.php">Tim Hutt: "Re: [OMPI users] Mixing the FORTRAN and C APIs."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 6 May 2011 16:27, Tim Prince &lt;tcprince_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; If you want to use the MPI Fortran library, don't convert your Fortran to C.
</span><br>
<span class="quotelev1">&gt; &#160;It's difficult to understand why you would consider f2c a &quot;simplest way,&quot;
</span><br>
<span class="quotelev1">&gt; but at least it should allow you to use ordinary C MPI function calls.
</span><br>
<p>Sorry, maybe I wasn't clear. Just to clarify, all of *my* code is
<br>
written in C++ (because I don't actually know Fortran), but I want to
<br>
use some function from PARPACK which is written in Fortran. I think I
<br>
originally used f2c because it was a massive pain linking to a Fortran
<br>
library. I suppose I could give it another go, but I don't think it
<br>
affects the problem of mixing APIs (since the f2c version still uses
<br>
the Fortran API).
<br>
<p><span class="quotelev1">&gt; The MPI Fortran library must be built against the same Fortran run-time
</span><br>
<span class="quotelev1">&gt; libraries which you use for your own Fortran code. &#160;The header files for the
</span><br>
<span class="quotelev1">&gt; Fortran MPI calls probably don't work in C. &#160;It would be a big struggle to
</span><br>
<span class="quotelev1">&gt; get them to work with f2c, since f2c doesn't have much ability to deal with
</span><br>
<span class="quotelev1">&gt; headers other than its own.
</span><br>
<p>Yeah I've had to manually recreate C versions of the Fortran headers
<br>
(mpif.h), which is a pain and the main reason I want to try a
<br>
different method.
<br>
<p><span class="quotelev1">&gt; There's no reason you can't make both C and Fortran MPI calls in the same
</span><br>
<span class="quotelev1">&gt; application. &#160;If you mean mixing a send from one language with a receive in
</span><br>
<span class="quotelev1">&gt; another, I think most would avoid that.
</span><br>
<p>I'm fairly sure that there wouldn't ever be a send in one language and
<br>
a receive in another, but I would be doing independent sends/receives
<br>
with different languages (one after another), something like this:
<br>
<p>MPI_Init(argc, argv); // C.
<br>
call mpi_send(..., MPI_DOUBLE_PRECISION, ...); // Fortan.
<br>
// ...
<br>
MPI_AllGatherV(..., MPI_DOUBLE, ...); // C, but completely separate
<br>
from previous communications.
<br>
MPI_Finalize(); // C.
<br>
<p><span class="quotelev1">&gt; Whether someone uses OpenMP has little to do with choice of MPI
</span><br>
<span class="quotelev1">&gt; implementation. &#160;Some of us still may be cursing the choice of OpenMPI for
</span><br>
<span class="quotelev1">&gt; the name of an MPI implementation.
</span><br>
<p>Oops, that was a typo - I meant OpenMPI! I'm not actually using OpenMP at all.
<br>
<p>Thanks for the help!
<br>
<p>Tim
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16462.php">hi: "[OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<li><strong>Previous message:</strong> <a href="16460.php">Paul Monday (Parallel Scientific): "Re: [OMPI users] SpMV Benchmarks"</a>
<li><strong>In reply to:</strong> <a href="16459.php">Tim Prince: "Re: [OMPI users] Mixing the FORTRAN and C APIs."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16466.php">Tim Hutt: "Re: [OMPI users] Mixing the FORTRAN and C APIs."</a>
<li><strong>Reply:</strong> <a href="16466.php">Tim Hutt: "Re: [OMPI users] Mixing the FORTRAN and C APIs."</a>
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
