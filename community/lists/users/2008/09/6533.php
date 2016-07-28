<?
$subject_val = "Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 14 07:18:25 2008" -->
<!-- isoreceived="20080914111825" -->
<!-- sent="Sun, 14 Sep 2008 13:18:21 +0200" -->
<!-- isosent="20080914111821" -->
<!-- name="Enrico Barausse" -->
<!-- email="enrico.barausse_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?" -->
<!-- id="845f51b10809140418q3277721i9e16547d1dffc60b_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?<br>
<strong>From:</strong> Enrico Barausse (<em>enrico.barausse_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-14 07:18:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6534.php">Josh Hursey: "Re: [OMPI users] dumping checkpoint at customized locations"</a>
<li><strong>Previous message:</strong> <a href="6532.php">Enrico Barausse: "Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?"</a>
<li><strong>Maybe in reply to:</strong> <a href="6525.php">Enrico Barausse: "[OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6543.php">Enrico Barausse: "Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;Hi,
</span><br>
<span class="quotelev1">&gt;I think if you use MPI_Isend it work correctly!
</span><br>
<span class="quotelev1">&gt;test this and write me what happen!
</span><br>
<p>yep, that's the first thought I had myself, but in spite of being
<br>
non-blocking, the Isend routine gets stuck and segmentates exactly
<br>
with the same error message as before.
<br>
<p>I'm just wondering how MPI_sendrecv is implemented. I was expecting it
<br>
to be exactly equivalent to one send + one receive. Does anyone know
<br>
the details of the implementation in openmpi?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6534.php">Josh Hursey: "Re: [OMPI users] dumping checkpoint at customized locations"</a>
<li><strong>Previous message:</strong> <a href="6532.php">Enrico Barausse: "Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?"</a>
<li><strong>Maybe in reply to:</strong> <a href="6525.php">Enrico Barausse: "[OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6543.php">Enrico Barausse: "Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?"</a>
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
