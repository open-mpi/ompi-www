<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 10 05:32:46 2005" -->
<!-- isoreceived="20051010103246" -->
<!-- sent="Mon, 10 Oct 2005 12:32:30 +0200" -->
<!-- isosent="20051010103230" -->
<!-- name="Toon Knapen" -->
<!-- email="toon.knapen_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] [Beowulf] MPI ABI" -->
<!-- id="434A433E.1090100_at_fft.be" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="434A32AB.9020506_at_ccrl-nece.de" -->
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
<strong>From:</strong> Toon Knapen (<em>toon.knapen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-10-10 05:32:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0169.php">Patrick Geoffray: "Re: [O-MPI users] [Beowulf] MPI ABI"</a>
<li><strong>Previous message:</strong> <a href="0167.php">Joachim Worringen: "Re: [O-MPI users] [Beowulf] MPI ABI"</a>
<li><strong>In reply to:</strong> <a href="0167.php">Joachim Worringen: "Re: [O-MPI users] [Beowulf] MPI ABI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0169.php">Patrick Geoffray: "Re: [O-MPI users] [Beowulf] MPI ABI"</a>
<li><strong>Reply:</strong> <a href="0169.php">Patrick Geoffray: "Re: [O-MPI users] [Beowulf] MPI ABI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Joachim Worringen wrote:
<br>
<p><span class="quotelev1">&gt; Wrong - i.e., the value of MPI_COMM_WORLD is not defined in Fortran,
</span><br>
<span class="quotelev1">&gt; either. This won't work if one MPI implementation sets
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD to 35 and another expects 626.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Of course, you are right for opaque datatypes like MPI_Group, but this
</span><br>
<span class="quotelev1">&gt; is not sufficient for an ABI.
</span><br>
<p>If only the 'named constants' are a problem: It's very easy to create a
<br>
few functions (like 'int mpi_comm_world()') that will return the correct
<br>
value for a given implementation.
<br>
<p>Any other alternative (cfr. MorphMPI that was discussed some months ago)
<br>
is much more complicated and finally I'm not convinced it provides any
<br>
added value in respect to the solution mentioned above.
<br>
<p>(I've never used the fortran interface of MPI BTW, always the C
<br>
interface. But I was wondering why we do not have the same problem with
<br>
our calls to BLAS: well for BLAS we always call the fortran interface
<br>
from C and C++)
<br>
<p>toon
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0169.php">Patrick Geoffray: "Re: [O-MPI users] [Beowulf] MPI ABI"</a>
<li><strong>Previous message:</strong> <a href="0167.php">Joachim Worringen: "Re: [O-MPI users] [Beowulf] MPI ABI"</a>
<li><strong>In reply to:</strong> <a href="0167.php">Joachim Worringen: "Re: [O-MPI users] [Beowulf] MPI ABI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0169.php">Patrick Geoffray: "Re: [O-MPI users] [Beowulf] MPI ABI"</a>
<li><strong>Reply:</strong> <a href="0169.php">Patrick Geoffray: "Re: [O-MPI users] [Beowulf] MPI ABI"</a>
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
