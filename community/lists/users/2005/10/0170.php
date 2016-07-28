<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 10 08:54:54 2005" -->
<!-- isoreceived="20051010135454" -->
<!-- sent="Mon, 10 Oct 2005 15:54:38 +0200" -->
<!-- isosent="20051010135438" -->
<!-- name="Toon Knapen" -->
<!-- email="toon.knapen_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] [Beowulf] MPI ABI" -->
<!-- id="434A729E.6010300_at_fft.be" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="434A5768.5000404_at_myri.com" -->
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
<strong>Date:</strong> 2005-10-10 08:54:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0171.php">Greg Lindahl: "Re: [O-MPI users] [Beowulf] MPI ABI"</a>
<li><strong>Previous message:</strong> <a href="0169.php">Patrick Geoffray: "Re: [O-MPI users] [Beowulf] MPI ABI"</a>
<li><strong>In reply to:</strong> <a href="0169.php">Patrick Geoffray: "Re: [O-MPI users] [Beowulf] MPI ABI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0171.php">Greg Lindahl: "Re: [O-MPI users] [Beowulf] MPI ABI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Patrick Geoffray wrote:
<br>
<span class="quotelev1">&gt; The Fortran interface is actually worse than the C interface. Instead of
</span><br>
<span class="quotelev1">&gt; using pointers to opaque structures, the Fortran interface may use
</span><br>
<span class="quotelev1">&gt; integers as indexes into array of structures, into array of pointers, as
</span><br>
<span class="quotelev1">&gt; pointers casted to integers, etc.
</span><br>
<p><p>I can imagine that implementors of MPI libraries do not like the Fortran
<br>
interface very much but the standard requires that it's there. As a user
<br>
however I do not care that the MPI implementation of the fortran
<br>
interface is more complicated. That's stuff to worry about for the MPI
<br>
implementors only.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Even if you implement all of the wrappers in a MorphMPI approach,
</span><br>
<span class="quotelev1">&gt; nothing guarantee you that you can take an Fortran MorphMPI compliant
</span><br>
<span class="quotelev1">&gt; application and link it with a MorhMPI compliant MPI library compiled
</span><br>
<span class="quotelev1">&gt; with a different Fortran compiler. Fortran is evil.
</span><br>
<p><p>As long as the calling convention (who and how the arguments are put on
<br>
the stack) is the same the library can be linked with programs compiled
<br>
with a different compilers AFAICT.
<br>
<p>I'm into C++ and do not like Fortran neither very much but I'm just
<br>
being pragmatic here.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0171.php">Greg Lindahl: "Re: [O-MPI users] [Beowulf] MPI ABI"</a>
<li><strong>Previous message:</strong> <a href="0169.php">Patrick Geoffray: "Re: [O-MPI users] [Beowulf] MPI ABI"</a>
<li><strong>In reply to:</strong> <a href="0169.php">Patrick Geoffray: "Re: [O-MPI users] [Beowulf] MPI ABI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0171.php">Greg Lindahl: "Re: [O-MPI users] [Beowulf] MPI ABI"</a>
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
