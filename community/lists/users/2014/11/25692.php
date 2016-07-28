<?
$subject_val = "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  5 12:23:51 2014" -->
<!-- isoreceived="20141105172351" -->
<!-- sent="Wed, 05 Nov 2014 17:23:49 +0000" -->
<!-- isosent="20141105172349" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF" -->
<!-- id="87fvdxr26y.fsf_at_pc102091.liv.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="F5E97360-CAA8-44FF-B6AC-A2191116977A_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-05 12:23:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25693.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for	MPI_SIZEOF"</a>
<li><strong>Previous message:</strong> <a href="25691.php">Dave Love: "Re: [OMPI users] change in behaviour 1.6 -&gt; 1.8 under sge"</a>
<li><strong>In reply to:</strong> <a href="25685.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25693.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for	MPI_SIZEOF"</a>
<li><strong>Reply:</strong> <a href="25693.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for	MPI_SIZEOF"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; Yes, this is a correct report.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In short, the MPI_SIZEOF situation before the upcoming 1.8.4 was a bit
</span><br>
<span class="quotelev1">&gt; of a mess; it actually triggered a bunch of discussion up in the MPI
</span><br>
<span class="quotelev1">&gt; Forum Fortran working group (because the design of MPI_SIZEOF actually
</span><br>
<span class="quotelev1">&gt; has some unintended consequences that came to light when another OMPI
</span><br>
<span class="quotelev1">&gt; user noted the same thing you did a few months ago).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you download a 1.8.4 nightly tarball (or the rc) and see if
</span><br>
<span class="quotelev1">&gt; MPI_SIZEOF is working for you there?
</span><br>
<p>Is the issue documented publicly?  I'm puzzled, because it certainly
<br>
works in a simple case:
<br>
<p>&nbsp;&nbsp;$ cat x.f90
<br>
&nbsp;&nbsp;use mpi
<br>
&nbsp;&nbsp;integer size, ierror
<br>
&nbsp;&nbsp;double precision d
<br>
&nbsp;&nbsp;call mpi_sizeof (size, size, ierror)
<br>
&nbsp;&nbsp;print *, size
<br>
&nbsp;&nbsp;call mpi_sizeof (d, size, ierror)
<br>
&nbsp;&nbsp;print *, size
<br>
&nbsp;&nbsp;end
<br>
&nbsp;&nbsp;$ mpif90 --showme:version
<br>
&nbsp;&nbsp;mpif90: Open MPI 1.8.3 (Language: Fortran)
<br>
&nbsp;&nbsp;$ mpif90 --showme:command
<br>
&nbsp;&nbsp;gfortran
<br>
&nbsp;&nbsp;$ mpif90 x.f90 &amp;&amp; ./a.out
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8
<br>
<p>The missing routine is in the library for me:
<br>
<p>&nbsp;&nbsp;$ nm -D $MPI_LIB/libmpi_usempi.so | grep mpi_sizeof0di4_
<br>
&nbsp;&nbsp;0000000000001cf0 T mpi_sizeof0di4_
<br>
<p>I don't understand how it can work generally with mpif.h (f77?), as
<br>
implied by the man page, rather than the module.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25693.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for	MPI_SIZEOF"</a>
<li><strong>Previous message:</strong> <a href="25691.php">Dave Love: "Re: [OMPI users] change in behaviour 1.6 -&gt; 1.8 under sge"</a>
<li><strong>In reply to:</strong> <a href="25685.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25693.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for	MPI_SIZEOF"</a>
<li><strong>Reply:</strong> <a href="25693.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for	MPI_SIZEOF"</a>
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
