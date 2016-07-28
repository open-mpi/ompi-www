<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 12 09:01:32 2005" -->
<!-- isoreceived="20051012140132" -->
<!-- sent="Wed, 12 Oct 2005 16:01:03 +0200" -->
<!-- isosent="20051012140103" -->
<!-- name="Toon Knapen" -->
<!-- email="toon.knapen_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] [Beowulf] MorphMPI based on fortran itf" -->
<!-- id="434D171F.8070708_at_fft.be" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="cone.1129121621.16504.6346.1337_at_lilith" -->
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
<strong>Date:</strong> 2005-10-12 09:01:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0185.php">Tim Prins: "[O-MPI users] Fwd: Fwd:  [Beowulf] MorphMPI based on fortran itf"</a>
<li><strong>Previous message:</strong> <a href="0183.php">Toon Knapen: "Re: [O-MPI users] [Beowulf] MorphMPI based on fortran itf"</a>
<li><strong>Maybe in reply to:</strong> <a href="0183.php">Toon Knapen: "Re: [O-MPI users] [Beowulf] MorphMPI based on fortran itf"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0199.php">Toon Knapen: "Re: [O-MPI users] [Beowulf] MorphMPI based on fortran itf"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Robert G. Brown wrote:
<br>
<span class="quotelev1">&gt; Ashley Pittman writes:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Personnel I think a MPI ABI would be a good thing however this is not
</span><br>
<span class="quotelev2">&gt;&gt; the way to do it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And this is exactly right.  Futhermore, we all know the right way to do
</span><br>
<span class="quotelev1">&gt; it.  It is for a new governing body or consortium to be established (or
</span><br>
<span class="quotelev1">&gt; more likely the old MPI Forum body promoted) to which all/most of the
</span><br>
<span class="quotelev1">&gt; MPI makers subscribe.  Let's call this imaginary body the &quot;MPIETF&quot; (MPI
</span><br>
<span class="quotelev1">&gt; Engineering Task Force) in homage of sorts, since MPIABITF is a bit
</span><br>
<span class="quotelev1">&gt; long...;-)
</span><br>
<p>Interesting but not very practical/pragmatic. There is a more
<br>
lightweight process IMHO that can attain the same goal (and way faster):
<br>
<p>We are planning to develop a MorphMPI library. As explained a bit higher
<br>
up in this thread, the MorphMPI library will be used while *compiling*
<br>
the app. The library that implements the MorphMPI calls will be linked
<br>
with dynamically. The MorphMPI on its turn links with some specific MPI
<br>
library. To take into account the (binary incompatible) difference in
<br>
the MPI libraries, the MorphMPI can be recompiled to be compatible with
<br>
any other MPI implementation (without having to recompile the app).
<br>
<p>So if it is technically feasable to have an ABI, the interface of the
<br>
MorphMPI library can be the ABI. The MorphMPI ABI will than translate
<br>
the calls to the real MPI in whatever (incompatible) format the MPI
<br>
library is encoded in.
<br>
<p>If the MorphMPI library catches on, MPI vendors *have* an interest in
<br>
matching the ABI as specified by MorphMPI because this would mean that
<br>
MorphMPI would have to do *no* conversion anymore at all (and can thus
<br>
actually be skipped) and thus the translation (read: the MPI library) is
<br>
faster. OTOH vendors that are not convinced of having an ABI can wait if
<br>
the MorphMPI approach becomes popular before taking a decision if they
<br>
want to align with the ABI or not.
<br>
<p>I'm not so much for 'mandating' a standard, de facto standards are way
<br>
more interesting and usually end up in soth. superior imo.
<br>
<p>toon
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0185.php">Tim Prins: "[O-MPI users] Fwd: Fwd:  [Beowulf] MorphMPI based on fortran itf"</a>
<li><strong>Previous message:</strong> <a href="0183.php">Toon Knapen: "Re: [O-MPI users] [Beowulf] MorphMPI based on fortran itf"</a>
<li><strong>Maybe in reply to:</strong> <a href="0183.php">Toon Knapen: "Re: [O-MPI users] [Beowulf] MorphMPI based on fortran itf"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0199.php">Toon Knapen: "Re: [O-MPI users] [Beowulf] MorphMPI based on fortran itf"</a>
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
