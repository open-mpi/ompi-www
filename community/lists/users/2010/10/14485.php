<?
$subject_val = "Re: [OMPI users] MPI_STARTALL doesn't compile with mpif90 and	a	multi-dimensional request array";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 15 19:38:23 2010" -->
<!-- isoreceived="20101015233823" -->
<!-- sent="Fri, 15 Oct 2010 19:38:14 -0400" -->
<!-- isosent="20101015233814" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_STARTALL doesn't compile with mpif90 and	a	multi-dimensional request array" -->
<!-- id="4CB8E5E6.3070306_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2EE143AE-A49A-43E4-9F2E-E611F6E1939F_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_STARTALL doesn't compile with mpif90 and	a	multi-dimensional request array<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-15 19:38:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14486.php">Jeremiah Willcock: "[OMPI users] Typo in man page for MPI_File_iwrite_at"</a>
<li><strong>Previous message:</strong> <a href="14484.php">Jeff Squyres: "Re: [OMPI users] MPI_STARTALL doesn't compile with mpif90 and a	multi-dimensional request array"</a>
<li><strong>In reply to:</strong> <a href="14484.php">Jeff Squyres: "Re: [OMPI users] MPI_STARTALL doesn't compile with mpif90 and a	multi-dimensional request array"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Oct 15, 2010, at 5:28 PM, Gus Correa wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Just a note about the MPI documentation and the Fortran90 bindings.
</span><br>
<span class="quotelev2">&gt;&gt; It would be helpful if the MPI function man pages, and
</span><br>
<span class="quotelev2">&gt;&gt; perhaps any new edition or third volume of the &quot;MPI Complete Reference&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; maybe the MPI-3 standard, were more clear about the subroutine
</span><br>
<span class="quotelev2">&gt;&gt; arguments in the Fortran90 bindings.
</span><br>
<span class="quotelev2">&gt;&gt; Currently they seem to deal only with Fortran77,
</span><br>
<span class="quotelev2">&gt;&gt; only mention that a certain argument is an array of some
</span><br>
<span class="quotelev2">&gt;&gt; basic/MPI type, and even use the &quot;assumed-size array notation&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; e.g.  &quot;ARRAY_OF_REQUESTS(*)&quot; .
</span><br>
<span class="quotelev2">&gt;&gt; Nothing is said about array rank/dimensionality
</span><br>
<span class="quotelev2">&gt;&gt; restrictions or capabilities,
</span><br>
<span class="quotelev2">&gt;&gt; which would be helpful information for those like me
</span><br>
<span class="quotelev2">&gt;&gt; who are enchained to Fortran90 like Prometheus to the cliff.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Good point.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FWIW, the new F08 module in MPI-3 will be much, 
</span><br>
<span class="quotelev1">&gt; much mo' betta than the existing MPI F90 bindings.  
</span><br>
<span class="quotelev1">&gt; We plan to prototype the F08 module in OMPI when we finish 
</span><br>
<span class="quotelev1">&gt; specifying it in the Forum, and revamp the F90 support in OMPI 
</span><br>
<span class="quotelev1">&gt; at more-or-less the same time.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I wish my senator listened to me as much as my
<br>
MPI Forum representative does! :)
<br>
<p>Thanks,
<br>
Gus Correa
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14486.php">Jeremiah Willcock: "[OMPI users] Typo in man page for MPI_File_iwrite_at"</a>
<li><strong>Previous message:</strong> <a href="14484.php">Jeff Squyres: "Re: [OMPI users] MPI_STARTALL doesn't compile with mpif90 and a	multi-dimensional request array"</a>
<li><strong>In reply to:</strong> <a href="14484.php">Jeff Squyres: "Re: [OMPI users] MPI_STARTALL doesn't compile with mpif90 and a	multi-dimensional request array"</a>
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
