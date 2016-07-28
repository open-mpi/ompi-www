<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 13 00:06:04 2005" -->
<!-- isoreceived="20051013050604" -->
<!-- sent="Wed, 12 Oct 2005 22:05:32 -0700" -->
<!-- isosent="20051013050532" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Fwd: Fwd: [Beowulf] MorphMPI based on fortran itf" -->
<!-- id="1129179932.434deb1cd5933_at_mymail.pacificu.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[O-MPI users] Fwd: Fwd: [Beowulf] MorphMPI based on fortran itf" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-10-13 00:05:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0196.php">Allan Menezes: "[O-MPI users] Hpl Bench mark and Openmpi rc3"</a>
<li><strong>Previous message:</strong> <a href="0194.php">Ken Mighell: "Re: [O-MPI users] Building 1.0rc3 on Mac OSX Tiger with macosx-pkg/buildpackage.sh fails on Apple dual G5 tower"</a>
<li><strong>Maybe in reply to:</strong> <a href="0186.php">Toon Knapen: "Re: [O-MPI users] Fwd: Fwd: [Beowulf] MorphMPI based on fortran itf"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Quoting Toon Knapen &lt;toon.knapen_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Tim Prins wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am in the process of developing MorphMPI and have designed my
</span><br>
<span class="quotelev2">&gt; &gt; implementation a bit different than what you propose (my apologies
</span><br>
<span class="quotelev1">&gt; if I
</span><br>
<span class="quotelev2">&gt; &gt; misunderstood what you have said). I am creating one main library,
</span><br>
<span class="quotelev1">&gt; which
</span><br>
<span class="quotelev2">&gt; &gt; users will compile and run against, and which should not need to
</span><br>
<span class="quotelev1">&gt; be
</span><br>
<span class="quotelev2">&gt; &gt; recompiled. This library will then open a plugin depending on what
</span><br>
<span class="quotelev1">&gt; MPI
</span><br>
<span class="quotelev2">&gt; &gt; the user would like to use. Then, it will dynamically open the
</span><br>
<span class="quotelev1">&gt; actual
</span><br>
<span class="quotelev2">&gt; &gt; MPI implementation. In other words, to add support for another MPI
</span><br>
<span class="quotelev1">&gt; one
</span><br>
<span class="quotelev2">&gt; &gt; would just need to drop the appropriate plugin into the right
</span><br>
<span class="quotelev1">&gt; directory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thus IIUC, the app calls your lib and your lib on its turn calls a
</span><br>
<span class="quotelev1">&gt; plugin?
</span><br>
Not quite. The plugin will merely consist of a data table, which will
<br>
tell me all I need to know about the MPI and how to call its functions.
<br>
Thus the app will call a function in MorphMPI which will in turn call a
<br>
function in the actual MPI.
<br>
<p><span class="quotelev1">&gt; This involves two dereferences. My idea was to (be able to)
</span><br>
<span class="quotelev1">&gt; recompile the MorphMPI for each of the MPI lib's and plug this one
</span><br>
<span class="quotelev1">&gt; between the app and the MPI. AFACIT this approach has the same set
</span><br>
<span class="quotelev1">&gt; of
</span><br>
<span class="quotelev1">&gt; features but is more lightweight.
</span><br>
However, if you have to recompile MorphMPI for each mpi, you loose a lot
<br>
of the benefits of having an ABI, i.e. being able to easily run with
<br>
multiple implementations without recompiling. In this project I am
<br>
really going for easy extensibility and ease of use for the user.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is your project open-source? If so, can I check it out?
</span><br>
It will be open-source, but right now this project is still in its early
<br>
stages so there is nothing to release yet.
<br>
<p>Tim
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0196.php">Allan Menezes: "[O-MPI users] Hpl Bench mark and Openmpi rc3"</a>
<li><strong>Previous message:</strong> <a href="0194.php">Ken Mighell: "Re: [O-MPI users] Building 1.0rc3 on Mac OSX Tiger with macosx-pkg/buildpackage.sh fails on Apple dual G5 tower"</a>
<li><strong>Maybe in reply to:</strong> <a href="0186.php">Toon Knapen: "Re: [O-MPI users] Fwd: Fwd: [Beowulf] MorphMPI based on fortran itf"</a>
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
