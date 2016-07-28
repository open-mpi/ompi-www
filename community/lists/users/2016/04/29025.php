<?
$subject_val = "Re: [OMPI users] Porting MPI-3 C-program to Fortran";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 25 11:35:14 2016" -->
<!-- isoreceived="20160425153514" -->
<!-- sent="Mon, 25 Apr 2016 16:35:12 +0100" -->
<!-- isosent="20160425153512" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Porting MPI-3 C-program to Fortran" -->
<!-- id="87zishln0v.fsf_at_pc102091.liv.ac.uk" -->
<!-- inreplyto="571A5A60.9060801_at_reachone.com" -->
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
<strong>Date:</strong> 2016-04-25 11:35:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29026.php">George Bosilca: "Re: [OMPI users] track progress of a mpi gather"</a>
<li><strong>Previous message:</strong> <a href="29024.php">Dave Love: "Re: [OMPI users] MPI_Bcast implementations in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="28997.php">Tom Rosmond: "Re: [OMPI users] Porting MPI-3 C-program to Fortran"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Tom Rosmond &lt;rosmond_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; Thanks for replying, but the difference between what can be done in C
</span><br>
<span class="quotelev1">&gt; vs fortran is still my problem.  I apologize for my rudimentary
</span><br>
<span class="quotelev1">&gt; understanding of C, but here is a brief summary:
</span><br>
<p>I'm not an expert on this stuff, just cautioning about Fortran semantics
<br>
where I could imagine it's important.
<br>
<p>I guess you'll need to read what the standard says about the routine,
<br>
and use a compiler that supports iso_c_binding, which is the right way
<br>
to interface to C.  (The OMPI man pages don't document the modern
<br>
Fortran interface, unfortunately.)
<br>
<p>If it's not clear how to use it, perhaps one of the Committee can clarify.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29026.php">George Bosilca: "Re: [OMPI users] track progress of a mpi gather"</a>
<li><strong>Previous message:</strong> <a href="29024.php">Dave Love: "Re: [OMPI users] MPI_Bcast implementations in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="28997.php">Tom Rosmond: "Re: [OMPI users] Porting MPI-3 C-program to Fortran"</a>
<!-- nextthread="start" -->
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
