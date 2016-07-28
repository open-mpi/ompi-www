<?
$subject_val = "Re: [OMPI users] EXTERNAL: Re:  MPI_GET beyond 2 GB displacement";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  7 21:25:40 2010" -->
<!-- isoreceived="20100708012540" -->
<!-- sent="Thu, 08 Jul 2010 03:27:27 +0200" -->
<!-- isosent="20100708012727" -->
<!-- name="Jed Brown" -->
<!-- email="jed_at_[hidden]" -->
<!-- subject="Re: [OMPI users] EXTERNAL: Re:  MPI_GET beyond 2 GB displacement" -->
<!-- id="8739vurce8.fsf_at_59A2.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="07E77CF9C426584F8126A762FD1AFEA4147F418785_at_HDXMSPA.us.lmco.com" -->
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
<strong>From:</strong> Jed Brown (<em>jed_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-07 21:27:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13528.php">Jack Bryan: "Re: [OMPI users] Open MPI error MPI_ERR_TRUNCATE: message truncated"</a>
<li><strong>Previous message:</strong> <a href="13526.php">Changsheng Jiang: "Re: [OMPI users] MPI_GET beyond 2 GB displacement"</a>
<li><strong>In reply to:</strong> <a href="13523.php">Price, Brian M (N-KCI): "Re: [OMPI users] EXTERNAL: Re:  MPI_GET beyond 2 GB displacement"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13539.php">Jeff Squyres: "Re: [OMPI users] EXTERNAL: Re:  MPI_GET beyond 2 GB displacement"</a>
<li><strong>Reply:</strong> <a href="13539.php">Jeff Squyres: "Re: [OMPI users] EXTERNAL: Re:  MPI_GET beyond 2 GB displacement"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 07 Jul 2010 17:34:44 -0600, &quot;Price, Brian M (N-KCI)&quot; &lt;brian.m.price_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Jed,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The IBM P5 I'm working on is big endian.
</span><br>
<p>Sorry, that didn't register.  The displ argument is MPI_Aint which is 8
<br>
bytes (at least on LP64, probably also on LLP64), so your use of kind=8
<br>
for that is certainly correct.  The count argument is a plain int, I
<br>
don't see how your code could be correct if you pass in an 8-byte int
<br>
there when it expects a 4-byte int (since the upper 4 bytes would be
<br>
used on a big-endian system).
<br>
<p><span class="quotelev1">&gt; The test program I'm using is written in Fortran 90 (as stated in my question).
</span><br>
<p>Do you &quot;use mpi&quot; or the F77 interface?
<br>
<p><span class="quotelev1">&gt; I imagine this is indeed a library issue, but I still don't understand what I've done wrong here.
</span><br>
<p>I can reproduce this in C on x86-64, even with displ much smaller than
<br>
2^31 (e.g. by setting displ_unit=4).  Apparently Open MPI multiplies
<br>
displ*displ_unit and stuffs the result in an int (somewhere in the
<br>
implementation), MPICH2 works correctly for me with large displacements.
<br>
<p>&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/2472">https://svn.open-mpi.org/trac/ompi/ticket/2472</a>
<br>
<p>Jed
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13528.php">Jack Bryan: "Re: [OMPI users] Open MPI error MPI_ERR_TRUNCATE: message truncated"</a>
<li><strong>Previous message:</strong> <a href="13526.php">Changsheng Jiang: "Re: [OMPI users] MPI_GET beyond 2 GB displacement"</a>
<li><strong>In reply to:</strong> <a href="13523.php">Price, Brian M (N-KCI): "Re: [OMPI users] EXTERNAL: Re:  MPI_GET beyond 2 GB displacement"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13539.php">Jeff Squyres: "Re: [OMPI users] EXTERNAL: Re:  MPI_GET beyond 2 GB displacement"</a>
<li><strong>Reply:</strong> <a href="13539.php">Jeff Squyres: "Re: [OMPI users] EXTERNAL: Re:  MPI_GET beyond 2 GB displacement"</a>
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
