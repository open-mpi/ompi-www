<?
$subject_val = "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for	MPI_SIZEOF";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 10 08:27:27 2014" -->
<!-- isoreceived="20141110132727" -->
<!-- sent="Mon, 10 Nov 2014 13:27:15 +0000" -->
<!-- isosent="20141110132715" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for	MPI_SIZEOF" -->
<!-- id="87r3xbnq30.fsf_at_pc102091.liv.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="134C6ACB-7BB5-4CD2-810C-BFFE2CBFF3B4_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for	MPI_SIZEOF<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-10 08:27:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25727.php">maxinator333: "[OMPI users] MPI_Wtime not working with -mno-sse flag"</a>
<li><strong>Previous message:</strong> <a href="25725.php">Reuti: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>In reply to:</strong> <a href="25693.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for	MPI_SIZEOF"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25734.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings	for	MPI_SIZEOF"</a>
<li><strong>Reply:</strong> <a href="25734.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings	for	MPI_SIZEOF"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; There were several commits; this was the first one:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi/commit/d7eaca83fac0d9783d40cac17e71c2b090437a8c">https://github.com/open-mpi/ompi/commit/d7eaca83fac0d9783d40cac17e71c2b090437a8c</a>
</span><br>
<p>I don't have time to follow this properly, but am I reading right that
<br>
that says mpi_sizeof will now _not_ work with gcc &lt; 4.9, i.e. the system
<br>
compiler of the vast majority of HPC GNU/Linux systems, whereas it did
<br>
before (at least in simple cases)?
<br>
<p><span class="quotelev1">&gt; IIRC, it only affected certain configure situations (e.g., only
</span><br>
<span class="quotelev1">&gt; certain fortran compilers).  I'm failing to remember the exact
</span><br>
<span class="quotelev1">&gt; scenario offhand that was problematic right now, but it led to the
</span><br>
<span class="quotelev1">&gt; larger question of: &quot;hey, wait, don't we have to support MPI_SIZEOF in
</span><br>
<span class="quotelev1">&gt; mpif.h, too?&quot;
</span><br>
<p>I'd have said the answer was a clear &quot;no&quot;, without knowing what the
<br>
standard says about mpif.h, but I'd expect that to be deprecated anyhow.
<br>
(The man pages generally don't mention USE, only INCLUDE, which seems
<br>
wrong.)
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't understand how it can work generally with mpif.h (f77?), as
</span><br>
<span class="quotelev2">&gt;&gt; implied by the man page, rather than the module.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; According to discussion in the Forum Fortran working group, it is
</span><br>
<span class="quotelev1">&gt; required that MPI_SIZEOF must be supported in *all* MPI Fortran
</span><br>
<span class="quotelev1">&gt; interfaces, including mpif.h.
</span><br>
<p>Well that's generally impossible if it's meant to include Fortran77
<br>
compilers (which I must say doesn't seem worth it at this stage).
<br>
<p><span class="quotelev1">&gt; Hence, if certain conditions are met by your Fortran compiler (i.e.,
</span><br>
<span class="quotelev1">&gt; it's modern enough), OMPI 1.8.4 will have MPI_SIZEOF prototypes in
</span><br>
<span class="quotelev1">&gt; mpif.h.  If not, then you get the same old mpif.h you've always had
</span><br>
<span class="quotelev1">&gt; (i.e., no MPI_SIZEOF prototypes, and MPI_SIZEOF won't work properly if
</span><br>
<span class="quotelev1">&gt; you use the mpif.h interfaces).
</span><br>
<p>If it's any consolation, it doesn't work in the other MPIs here
<br>
(mp(va)pich and intel), as I'd expect.
<br>
<p><span class="quotelev1">&gt; Keep in mind that MPI does not prohibit having prototypes in mpif.h --
</span><br>
<span class="quotelev1">&gt; it's just that most (all?) MPI implementations don't tend to provide
</span><br>
<span class="quotelev1">&gt; them.  However, in the case of MPI_SIZEOF, it is *required* that
</span><br>
<span class="quotelev1">&gt; prototypes are available because the implementation needs the type
</span><br>
<span class="quotelev1">&gt; information to return the size properly (in mpif.h., mpi module, and
</span><br>
<span class="quotelev1">&gt; mpi_f08 module).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Make sense?
</span><br>
<p>Fortran has interfaces, not prototypes!
<br>
<p>I understand the technicalities -- I hacked on g77 intrinsics -- but I'm
<br>
not sure how much sense it's making if things have effectively gone
<br>
backwards with gfortran.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25727.php">maxinator333: "[OMPI users] MPI_Wtime not working with -mno-sse flag"</a>
<li><strong>Previous message:</strong> <a href="25725.php">Reuti: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>In reply to:</strong> <a href="25693.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for	MPI_SIZEOF"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25734.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings	for	MPI_SIZEOF"</a>
<li><strong>Reply:</strong> <a href="25734.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings	for	MPI_SIZEOF"</a>
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
