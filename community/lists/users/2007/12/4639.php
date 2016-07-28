<?
$subject_val = "Re: [OMPI users] Does MPI_Bsend always use the buffer?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 11 11:09:40 2007" -->
<!-- isoreceived="20071211160940" -->
<!-- sent="Tue, 11 Dec 2007 11:10:02 -0500" -->
<!-- isosent="20071211161002" -->
<!-- name="Bradley, Peter C. (MIS/CFD)" -->
<!-- email="peter.c.bradley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Does MPI_Bsend always use the buffer?" -->
<!-- id="3EE2ABBCFEA761449CF76DF1BB73E1C50E5E8283_at_pusehe0o.eh.pweh.com" -->
<!-- inreplyto="[OMPI users] Does MPI_Bsend always use the buffer?" -->
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
<strong>Subject:</strong> Re: [OMPI users] Does MPI_Bsend always use the buffer?<br>
<strong>From:</strong> Bradley, Peter C. (MIS/CFD) (<em>peter.c.bradley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-11 11:10:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4640.php">Aurelien Bouteiller: "Re: [OMPI users] error with Vprotocol pessimist"</a>
<li><strong>Previous message:</strong> <a href="4638.php">George Bosilca: "Re: [OMPI users] Does MPI_Bsend always use the buffer?"</a>
<li><strong>Maybe in reply to:</strong> <a href="4636.php">Bradley, Peter C. (MIS/CFD): "[OMPI users] Does MPI_Bsend always use the buffer?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;This is an implementation details. You should avoid relying on such 
</span><br>
<span class="quotelev1">&gt;things in a portable MPI applications. The safe assumption here is 
</span><br>
<span class="quotelev1">&gt;that MPI_Bsend always copy the buffer, as described in the MPI standard. 
</span><br>
<p>I'm fully aware of the MPI standard, and the program will be
<br>
standard-compliant.  However, since performance is somewhat important even
<br>
in this emulated mode I want to understand what the OpenMPI implementation
<br>
is likely to do.
<br>
<p>Pete
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4640.php">Aurelien Bouteiller: "Re: [OMPI users] error with Vprotocol pessimist"</a>
<li><strong>Previous message:</strong> <a href="4638.php">George Bosilca: "Re: [OMPI users] Does MPI_Bsend always use the buffer?"</a>
<li><strong>Maybe in reply to:</strong> <a href="4636.php">Bradley, Peter C. (MIS/CFD): "[OMPI users] Does MPI_Bsend always use the buffer?"</a>
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
