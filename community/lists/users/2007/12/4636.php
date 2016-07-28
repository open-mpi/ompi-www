<?
$subject_val = "[OMPI users] Does MPI_Bsend always use the buffer?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 11 10:27:11 2007" -->
<!-- isoreceived="20071211152711" -->
<!-- sent="Tue, 11 Dec 2007 10:27:32 -0500" -->
<!-- isosent="20071211152732" -->
<!-- name="Bradley, Peter C. (MIS/CFD)" -->
<!-- email="peter.c.bradley_at_[hidden]" -->
<!-- subject="[OMPI users] Does MPI_Bsend always use the buffer?" -->
<!-- id="3EE2ABBCFEA761449CF76DF1BB73E1C50E5E8080_at_pusehe0o.eh.pweh.com" -->
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
<strong>Subject:</strong> [OMPI users] Does MPI_Bsend always use the buffer?<br>
<strong>From:</strong> Bradley, Peter C. (MIS/CFD) (<em>peter.c.bradley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-11 10:27:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4637.php">Gleb Natapov: "Re: [OMPI users] Does MPI_Bsend always use the buffer?"</a>
<li><strong>Previous message:</strong> <a href="4635.php">Lisandro Dalcin: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4637.php">Gleb Natapov: "Re: [OMPI users] Does MPI_Bsend always use the buffer?"</a>
<li><strong>Reply:</strong> <a href="4637.php">Gleb Natapov: "Re: [OMPI users] Does MPI_Bsend always use the buffer?"</a>
<li><strong>Maybe reply:</strong> <a href="4639.php">Bradley, Peter C. (MIS/CFD): "Re: [OMPI users] Does MPI_Bsend always use the buffer?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In OpenMPI, does MPI_Bsend always copy the message to the user-specified
<br>
buffer, or will it avoid the copy in situations where it knows the send can
<br>
complete?
<br>
<p>I recognize bsend is generally to be avoided, but I have a need to emulate
<br>
an in-house message-passing library that guarantees that writes won't block.
<br>
<p>Pete
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4637.php">Gleb Natapov: "Re: [OMPI users] Does MPI_Bsend always use the buffer?"</a>
<li><strong>Previous message:</strong> <a href="4635.php">Lisandro Dalcin: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4637.php">Gleb Natapov: "Re: [OMPI users] Does MPI_Bsend always use the buffer?"</a>
<li><strong>Reply:</strong> <a href="4637.php">Gleb Natapov: "Re: [OMPI users] Does MPI_Bsend always use the buffer?"</a>
<li><strong>Maybe reply:</strong> <a href="4639.php">Bradley, Peter C. (MIS/CFD): "Re: [OMPI users] Does MPI_Bsend always use the buffer?"</a>
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
