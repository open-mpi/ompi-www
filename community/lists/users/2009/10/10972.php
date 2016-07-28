<?
$subject_val = "Re: [OMPI users] memchecker overhead?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 26 16:08:56 2009" -->
<!-- isoreceived="20091026200856" -->
<!-- sent="Mon, 26 Oct 2009 21:09:07 +0100" -->
<!-- isosent="20091026200907" -->
<!-- name="Jed Brown" -->
<!-- email="jed_at_[hidden]" -->
<!-- subject="Re: [OMPI users] memchecker overhead?" -->
<!-- id="4AE601E3.9020008_at_59A2.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="27F807EB-2CED-4767-AF05-F45BC38BFA2E_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] memchecker overhead?<br>
<strong>From:</strong> Jed Brown (<em>jed_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-26 16:09:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10973.php">Jeff Squyres: "Re: [OMPI users] memchecker overhead?"</a>
<li><strong>Previous message:</strong> <a href="10971.php">Samuel K. Gutierrez: "Re: [OMPI users] memchecker overhead?"</a>
<li><strong>In reply to:</strong> <a href="10971.php">Samuel K. Gutierrez: "Re: [OMPI users] memchecker overhead?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10973.php">Jeff Squyres: "Re: [OMPI users] memchecker overhead?"</a>
<li><strong>Reply:</strong> <a href="10973.php">Jeff Squyres: "Re: [OMPI users] memchecker overhead?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Samuel K. Gutierrez wrote:
<br>
<span class="quotelev1">&gt; Hi Jed,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not sure if this will help, but it's worth a try.  Turn off OMPI's
</span><br>
<span class="quotelev1">&gt; memory wrapper and see what happens.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; c-like shell
</span><br>
<span class="quotelev1">&gt; setenv OMPI_MCA_memory_ptmalloc2_disable 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; bash-like shell
</span><br>
<span class="quotelev1">&gt; export OMPI_MCA_memory_ptmalloc2_disable=1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also add the following MCA parameter to you run command.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --mca mpi_leave_pinned 0
</span><br>
<p>Thanks for the tip, but these make very little difference.
<br>
<p>Jed
<br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10972/signature.asc">OpenPGP digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10973.php">Jeff Squyres: "Re: [OMPI users] memchecker overhead?"</a>
<li><strong>Previous message:</strong> <a href="10971.php">Samuel K. Gutierrez: "Re: [OMPI users] memchecker overhead?"</a>
<li><strong>In reply to:</strong> <a href="10971.php">Samuel K. Gutierrez: "Re: [OMPI users] memchecker overhead?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10973.php">Jeff Squyres: "Re: [OMPI users] memchecker overhead?"</a>
<li><strong>Reply:</strong> <a href="10973.php">Jeff Squyres: "Re: [OMPI users] memchecker overhead?"</a>
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
