<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 12 10:26:30 2005" -->
<!-- isoreceived="20051012152630" -->
<!-- sent="Wed, 12 Oct 2005 17:26:05 +0200" -->
<!-- isosent="20051012152605" -->
<!-- name="Toon Knapen" -->
<!-- email="toon.knapen_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Fwd: Fwd: [Beowulf] MorphMPI based on fortran itf" -->
<!-- id="434D2B0D.6090009_at_fft.be" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1129131039.434d2c1fe2737_at_mymail.pacificu.edu" -->
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
<strong>Date:</strong> 2005-10-12 10:26:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0187.php">Greg Lindahl: "Re: [O-MPI users] [Beowulf] MorphMPI based on fortran itf (was: MPI ABI)"</a>
<li><strong>Previous message:</strong> <a href="0185.php">Tim Prins: "[O-MPI users] Fwd: Fwd:  [Beowulf] MorphMPI based on fortran itf"</a>
<li><strong>In reply to:</strong> <a href="0185.php">Tim Prins: "[O-MPI users] Fwd: Fwd:  [Beowulf] MorphMPI based on fortran itf"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0188.php">Toon Knapen: "Re: [O-MPI users] Fwd: Fwd: [Beowulf] MorphMPI based on fortran itf"</a>
<li><strong>Maybe reply:</strong> <a href="0188.php">Toon Knapen: "Re: [O-MPI users] Fwd: Fwd: [Beowulf] MorphMPI based on fortran itf"</a>
<li><strong>Maybe reply:</strong> <a href="0195.php">Tim Prins: "Re: [O-MPI users] Fwd: Fwd: [Beowulf] MorphMPI based on fortran itf"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Tim Prins wrote:
<br>
<p><span class="quotelev1">&gt; I am in the process of developing MorphMPI and have designed my
</span><br>
<span class="quotelev1">&gt; implementation a bit different than what you propose (my apologies if I
</span><br>
<span class="quotelev1">&gt; misunderstood what you have said). I am creating one main library, which
</span><br>
<span class="quotelev1">&gt; users will compile and run against, and which should not need to be
</span><br>
<span class="quotelev1">&gt; recompiled. This library will then open a plugin depending on what MPI
</span><br>
<span class="quotelev1">&gt; the user would like to use. Then, it will dynamically open the actual
</span><br>
<span class="quotelev1">&gt; MPI implementation. In other words, to add support for another MPI one
</span><br>
<span class="quotelev1">&gt; would just need to drop the appropriate plugin into the right directory.
</span><br>
<p><p>Thus IIUC, the app calls your lib and your lib on its turn calls a
<br>
plugin? This involves two dereferences. My idea was to (be able to)
<br>
recompile the MorphMPI for each of the MPI lib's and plug this one
<br>
between the app and the MPI. AFACIT this approach has the same set of
<br>
features but is more lightweight.
<br>
<p>Is your project open-source? If so, can I check it out?
<br>
<p>toon
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0187.php">Greg Lindahl: "Re: [O-MPI users] [Beowulf] MorphMPI based on fortran itf (was: MPI ABI)"</a>
<li><strong>Previous message:</strong> <a href="0185.php">Tim Prins: "[O-MPI users] Fwd: Fwd:  [Beowulf] MorphMPI based on fortran itf"</a>
<li><strong>In reply to:</strong> <a href="0185.php">Tim Prins: "[O-MPI users] Fwd: Fwd:  [Beowulf] MorphMPI based on fortran itf"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0188.php">Toon Knapen: "Re: [O-MPI users] Fwd: Fwd: [Beowulf] MorphMPI based on fortran itf"</a>
<li><strong>Maybe reply:</strong> <a href="0188.php">Toon Knapen: "Re: [O-MPI users] Fwd: Fwd: [Beowulf] MorphMPI based on fortran itf"</a>
<li><strong>Maybe reply:</strong> <a href="0195.php">Tim Prins: "Re: [O-MPI users] Fwd: Fwd: [Beowulf] MorphMPI based on fortran itf"</a>
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
