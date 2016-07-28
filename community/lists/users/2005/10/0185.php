<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 12 10:06:42 2005" -->
<!-- isoreceived="20051012150642" -->
<!-- sent="Wed, 12 Oct 2005 08:30:39 -0700" -->
<!-- isosent="20051012153039" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="[O-MPI users] Fwd: Fwd:  [Beowulf] MorphMPI based on fortran itf" -->
<!-- id="1129131039.434d2c1fe2737_at_mymail.pacificu.edu" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Date:</strong> 2005-10-12 10:30:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0186.php">Toon Knapen: "Re: [O-MPI users] Fwd: Fwd: [Beowulf] MorphMPI based on fortran itf"</a>
<li><strong>Previous message:</strong> <a href="0184.php">Toon Knapen: "Re: [O-MPI users] [Beowulf] MorphMPI based on fortran itf"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0186.php">Toon Knapen: "Re: [O-MPI users] Fwd: Fwd: [Beowulf] MorphMPI based on fortran itf"</a>
<li><strong>Reply:</strong> <a href="0186.php">Toon Knapen: "Re: [O-MPI users] Fwd: Fwd: [Beowulf] MorphMPI based on fortran itf"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Toon,
<br>
<p><span class="quotelev1">&gt; We are planning to develop a MorphMPI library. As explained a bit
</span><br>
<span class="quotelev1">&gt; higher
</span><br>
<span class="quotelev1">&gt; up in this thread, the MorphMPI library will be used while *compiling*
</span><br>
<span class="quotelev1">&gt; the app. The library that implements the MorphMPI calls will be linked
</span><br>
<span class="quotelev1">&gt; with dynamically. The MorphMPI on its turn links with some specific
</span><br>
MPI
<br>
<span class="quotelev1">&gt; library. To take into account the (binary incompatible) difference in
</span><br>
<span class="quotelev1">&gt; the MPI libraries, the MorphMPI can be recompiled to be compatible
</span><br>
with
<br>
<span class="quotelev1">&gt; any other MPI implementation (without having to recompile the app).
</span><br>
<p>I am in the process of developing MorphMPI and have designed my
<br>
implementation a bit different than what you propose (my apologies if I
<br>
misunderstood what you have said). I am creating one main library, which
<br>
users will compile and run against, and which should not need to be
<br>
recompiled. This library will then open a plugin depending on what MPI
<br>
the user would like to use. Then, it will dynamically open the actual
<br>
MPI implementation. In other words, to add support for another MPI one
<br>
would just need to drop the appropriate plugin into the right directory.
<br>
<p>As far as overhead is concerned, it appears that it will be minimal. In
<br>
the 32 bit world most conversions can be optimized away, and in the
<br>
64bit world it looks like only minimal conversions will need to be made.
<br>
The main exception to this is defined structures (aka MPI_Status) and
<br>
any cases where a user can pass an array to an MPI function. These will
<br>
require a bit more work, but it still looks like the overhead will be
<br>
small.
<br>
<p>Tim
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0186.php">Toon Knapen: "Re: [O-MPI users] Fwd: Fwd: [Beowulf] MorphMPI based on fortran itf"</a>
<li><strong>Previous message:</strong> <a href="0184.php">Toon Knapen: "Re: [O-MPI users] [Beowulf] MorphMPI based on fortran itf"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0186.php">Toon Knapen: "Re: [O-MPI users] Fwd: Fwd: [Beowulf] MorphMPI based on fortran itf"</a>
<li><strong>Reply:</strong> <a href="0186.php">Toon Knapen: "Re: [O-MPI users] Fwd: Fwd: [Beowulf] MorphMPI based on fortran itf"</a>
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
