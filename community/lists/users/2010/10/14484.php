<?
$subject_val = "Re: [OMPI users] MPI_STARTALL doesn't compile with mpif90 and a	multi-dimensional request array";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 15 17:52:29 2010" -->
<!-- isoreceived="20101015215229" -->
<!-- sent="Fri, 15 Oct 2010 17:52:25 -0400" -->
<!-- isosent="20101015215225" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_STARTALL doesn't compile with mpif90 and a	multi-dimensional request array" -->
<!-- id="2EE143AE-A49A-43E4-9F2E-E611F6E1939F_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4CB8C78A.2070109_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_STARTALL doesn't compile with mpif90 and a	multi-dimensional request array<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-15 17:52:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14485.php">Gus Correa: "Re: [OMPI users] MPI_STARTALL doesn't compile with mpif90 and	a	multi-dimensional request array"</a>
<li><strong>Previous message:</strong> <a href="14483.php">Gus Correa: "Re: [OMPI users] MPI_STARTALL doesn't compile with mpif90 and a	multi-dimensional request array"</a>
<li><strong>In reply to:</strong> <a href="14483.php">Gus Correa: "Re: [OMPI users] MPI_STARTALL doesn't compile with mpif90 and a	multi-dimensional request array"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14485.php">Gus Correa: "Re: [OMPI users] MPI_STARTALL doesn't compile with mpif90 and	a	multi-dimensional request array"</a>
<li><strong>Reply:</strong> <a href="14485.php">Gus Correa: "Re: [OMPI users] MPI_STARTALL doesn't compile with mpif90 and	a	multi-dimensional request array"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 15, 2010, at 5:28 PM, Gus Correa wrote:
<br>
<p><span class="quotelev1">&gt; Just a note about the MPI documentation and the Fortran90 bindings.
</span><br>
<span class="quotelev1">&gt; It would be helpful if the MPI function man pages, and
</span><br>
<span class="quotelev1">&gt; perhaps any new edition or third volume of the &quot;MPI Complete Reference&quot;,
</span><br>
<span class="quotelev1">&gt; maybe the MPI-3 standard, were more clear about the subroutine
</span><br>
<span class="quotelev1">&gt; arguments in the Fortran90 bindings.
</span><br>
<span class="quotelev1">&gt; Currently they seem to deal only with Fortran77,
</span><br>
<span class="quotelev1">&gt; only mention that a certain argument is an array of some
</span><br>
<span class="quotelev1">&gt; basic/MPI type, and even use the &quot;assumed-size array notation&quot;,
</span><br>
<span class="quotelev1">&gt; e.g.  &quot;ARRAY_OF_REQUESTS(*)&quot; .
</span><br>
<span class="quotelev1">&gt; Nothing is said about array rank/dimensionality
</span><br>
<span class="quotelev1">&gt; restrictions or capabilities,
</span><br>
<span class="quotelev1">&gt; which would be helpful information for those like me
</span><br>
<span class="quotelev1">&gt; who are enchained to Fortran90 like Prometheus to the cliff.
</span><br>
<p>Good point.
<br>
<p>FWIW, the new F08 module in MPI-3 will be much, much mo' betta than the existing MPI F90 bindings.  We plan to prototype the F08 module in OMPI when we finish specifying it in the Forum, and revamp the F90 support in OMPI at more-or-less the same time.
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
<li><strong>Next message:</strong> <a href="14485.php">Gus Correa: "Re: [OMPI users] MPI_STARTALL doesn't compile with mpif90 and	a	multi-dimensional request array"</a>
<li><strong>Previous message:</strong> <a href="14483.php">Gus Correa: "Re: [OMPI users] MPI_STARTALL doesn't compile with mpif90 and a	multi-dimensional request array"</a>
<li><strong>In reply to:</strong> <a href="14483.php">Gus Correa: "Re: [OMPI users] MPI_STARTALL doesn't compile with mpif90 and a	multi-dimensional request array"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14485.php">Gus Correa: "Re: [OMPI users] MPI_STARTALL doesn't compile with mpif90 and	a	multi-dimensional request array"</a>
<li><strong>Reply:</strong> <a href="14485.php">Gus Correa: "Re: [OMPI users] MPI_STARTALL doesn't compile with mpif90 and	a	multi-dimensional request array"</a>
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
