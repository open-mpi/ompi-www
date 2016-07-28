<?
$subject_val = "Re: [OMPI users] EXTERNAL: Re:  MPI_GET beyond 2 GB displacement";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  8 09:52:58 2010" -->
<!-- isoreceived="20100708135258" -->
<!-- sent="Thu, 8 Jul 2010 09:53:11 -0400" -->
<!-- isosent="20100708135311" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] EXTERNAL: Re:  MPI_GET beyond 2 GB displacement" -->
<!-- id="09B6A689-1751-4873-889F-035BA7211460_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8739vurce8.fsf_at_59A2.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] EXTERNAL: Re:  MPI_GET beyond 2 GB displacement<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-08 09:53:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13540.php">Gus Correa: "Re: [OMPI users] configure options"</a>
<li><strong>Previous message:</strong> <a href="13538.php">Gus Correa: "Re: [OMPI users] trouble using openmpi under slurm"</a>
<li><strong>In reply to:</strong> <a href="13527.php">Jed Brown: "Re: [OMPI users] EXTERNAL: Re:  MPI_GET beyond 2 GB displacement"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13541.php">Jed Brown: "Re: [OMPI users] EXTERNAL: Re:  MPI_GET beyond 2 GB displacement"</a>
<li><strong>Reply:</strong> <a href="13541.php">Jed Brown: "Re: [OMPI users] EXTERNAL: Re:  MPI_GET beyond 2 GB displacement"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 7, 2010, at 9:27 PM, Jed Brown wrote:
<br>
<p><span class="quotelev1">&gt; Sorry, that didn't register.  The displ argument is MPI_Aint which is 8
</span><br>
<span class="quotelev1">&gt; bytes (at least on LP64, probably also on LLP64), so your use of kind=8
</span><br>
<span class="quotelev1">&gt; for that is certainly correct.  The count argument is a plain int, I
</span><br>
<span class="quotelev1">&gt; don't see how your code could be correct if you pass in an 8-byte int
</span><br>
<span class="quotelev1">&gt; there when it expects a 4-byte int (since the upper 4 bytes would be
</span><br>
<span class="quotelev1">&gt; used on a big-endian system).
</span><br>
<p>+1 on what he said.
<br>
<p><span class="quotelev2">&gt; &gt; The test program I'm using is written in Fortran 90 (as stated in my question).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you &quot;use mpi&quot; or the F77 interface?
</span><br>
<p>It shouldn't matter; both the Fortran module and mpif.h interfaces are the same.
<br>
<p><span class="quotelev1">&gt;   <a href="https://svn.open-mpi.org/trac/ompi/ticket/2472">https://svn.open-mpi.org/trac/ompi/ticket/2472</a>
</span><br>
<p>We might be doing something wrong internally; we'll need to dig into it.  George has told me in the past that our internal datatype engine is 64-bit internally, so it should be capable of doing this stuff right.  Perhaps we're doing an intermediate multiplication and truncating it somewhere, as Jed mentioned earlier.
<br>
<p>I took the liberty of adding Brian to the CC of the ticket.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13540.php">Gus Correa: "Re: [OMPI users] configure options"</a>
<li><strong>Previous message:</strong> <a href="13538.php">Gus Correa: "Re: [OMPI users] trouble using openmpi under slurm"</a>
<li><strong>In reply to:</strong> <a href="13527.php">Jed Brown: "Re: [OMPI users] EXTERNAL: Re:  MPI_GET beyond 2 GB displacement"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13541.php">Jed Brown: "Re: [OMPI users] EXTERNAL: Re:  MPI_GET beyond 2 GB displacement"</a>
<li><strong>Reply:</strong> <a href="13541.php">Jed Brown: "Re: [OMPI users] EXTERNAL: Re:  MPI_GET beyond 2 GB displacement"</a>
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
