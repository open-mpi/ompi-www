<?
$subject_val = "Re: [OMPI users] Porting MPI-3 C-program to Fortran";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 22 12:12:44 2016" -->
<!-- isoreceived="20160422161244" -->
<!-- sent="Fri, 22 Apr 2016 17:12:33 +0100" -->
<!-- isosent="20160422161233" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Porting MPI-3 C-program to Fortran" -->
<!-- id="871t5xoc5q.fsf_at_pc102091.liv.ac.uk" -->
<!-- inreplyto="2062D402-8D2E-47E1-923B-DC29DC668D40_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Porting MPI-3 C-program to Fortran<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-22 12:12:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28997.php">Tom Rosmond: "Re: [OMPI users] Porting MPI-3 C-program to Fortran"</a>
<li><strong>Previous message:</strong> <a href="28995.php">Dave Love: "Re: [OMPI users] MPI_Bcast implementations in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="28962.php">Jeff Hammond: "Re: [OMPI users] Porting MPI-3 C-program to Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28997.php">Tom Rosmond: "Re: [OMPI users] Porting MPI-3 C-program to Fortran"</a>
<li><strong>Reply:</strong> <a href="28997.php">Tom Rosmond: "Re: [OMPI users] Porting MPI-3 C-program to Fortran"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Hammond &lt;jeff.science_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; MPI uses void** arguments to pass pointer by reference so it can be
</span><br>
<span class="quotelev1">&gt; updated. In Fortran, you always pass by reference so you don't need
</span><br>
<span class="quotelev1">&gt; this.
</span><br>
<p>I don't know if it's relevant in this case, but that's not generally
<br>
true (even for Fortran 77, for which I used to know the standard
<br>
more-or-less by heart).  It definitely isn't true for gfortran, and I'm
<br>
confident not for the Intel compiler, or it would miss optimizations.
<br>
You may get away with assuming call-by-reference, but you're likely to
<br>
get bitten if you don't obey the argument association rules.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28997.php">Tom Rosmond: "Re: [OMPI users] Porting MPI-3 C-program to Fortran"</a>
<li><strong>Previous message:</strong> <a href="28995.php">Dave Love: "Re: [OMPI users] MPI_Bcast implementations in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="28962.php">Jeff Hammond: "Re: [OMPI users] Porting MPI-3 C-program to Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28997.php">Tom Rosmond: "Re: [OMPI users] Porting MPI-3 C-program to Fortran"</a>
<li><strong>Reply:</strong> <a href="28997.php">Tom Rosmond: "Re: [OMPI users] Porting MPI-3 C-program to Fortran"</a>
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
