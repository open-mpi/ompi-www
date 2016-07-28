<?
$subject_val = "Re: [OMPI users] Using MPI_Put/Get correctly?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 16 10:09:17 2010" -->
<!-- isoreceived="20101216150917" -->
<!-- sent="Thu, 16 Dec 2010 09:09:12 -0600" -->
<!-- isosent="20101216150912" -->
<!-- name="James Dinan" -->
<!-- email="dinan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Using MPI_Put/Get correctly?" -->
<!-- id="4D0A2B98.1070002_at_mcs.anl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4B017A66-2933-4E1D-B37B-80846176F778_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Using MPI_Put/Get correctly?<br>
<strong>From:</strong> James Dinan (<em>dinan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-16 10:09:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15177.php">Gus Correa: "Re: [OMPI users] segmentation fault"</a>
<li><strong>Previous message:</strong> <a href="15175.php">Jeff Squyres: "Re: [OMPI users] Using MPI_Put/Get correctly?"</a>
<li><strong>In reply to:</strong> <a href="15175.php">Jeff Squyres: "Re: [OMPI users] Using MPI_Put/Get correctly?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15227.php">Grismer, Matthew J Civ USAF AFMC AFRL/RBAT: "Re: [OMPI users] Using MPI_Put/Get correctly?"</a>
<li><strong>Reply:</strong> <a href="15227.php">Grismer, Matthew J Civ USAF AFMC AFRL/RBAT: "Re: [OMPI users] Using MPI_Put/Get correctly?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 12/16/2010 08:34 AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Additionally, since MPI-3 is updating the semantics of the one-sided
</span><br>
<span class="quotelev1">&gt; stuff, it might be worth waiting for all those clarifications before
</span><br>
<span class="quotelev1">&gt; venturing into the MPI one-sided realm.  One-sided semantics are much
</span><br>
<span class="quotelev1">&gt; more subtle and complex than two-sided semantics.
</span><br>
<p>Hi Jeff,
<br>
<p>I don't think we should give users the hope that MPI-3 RMA will be out
<br>
tomorrow.  The RMA revisions are still in proposal form and need work.
<br>
Realistically speaking, we might be able to get this accepted into the
<br>
standard within a year and it will be another year before
<br>
implementations catch up.  If users need one-sided now, they should use
<br>
the MPI-2 one-sided API.
<br>
<p>MPI-3 RMA extends MPI-2 RMA and will be backward compatible, so anything
<br>
you write now will still work.  It's still unclear to me whether MPI-3's
<br>
RMA semantics will be the leap forward in usability we have hoped for.
<br>
We are trying to make it more flexible, but there will likely still be
<br>
tricky parts due to portability and performance concerns.
<br>
<p>So, my advice: don't be scared of MPI-2.  I agree, it's complicated, but
<br>
once you get acclimated it's not that bad.  Really.  :)
<br>
<p>Best,
<br>
&nbsp;~Jim.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15177.php">Gus Correa: "Re: [OMPI users] segmentation fault"</a>
<li><strong>Previous message:</strong> <a href="15175.php">Jeff Squyres: "Re: [OMPI users] Using MPI_Put/Get correctly?"</a>
<li><strong>In reply to:</strong> <a href="15175.php">Jeff Squyres: "Re: [OMPI users] Using MPI_Put/Get correctly?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15227.php">Grismer, Matthew J Civ USAF AFMC AFRL/RBAT: "Re: [OMPI users] Using MPI_Put/Get correctly?"</a>
<li><strong>Reply:</strong> <a href="15227.php">Grismer, Matthew J Civ USAF AFMC AFRL/RBAT: "Re: [OMPI users] Using MPI_Put/Get correctly?"</a>
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
