<?
$subject_val = "Re: [OMPI users] building the 1.4.1 rpm under RHEL 5";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 20 17:56:53 2010" -->
<!-- isoreceived="20100120225653" -->
<!-- sent="Wed, 20 Jan 2010 22:56:35 +0000" -->
<!-- isosent="20100120225635" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] building the 1.4.1 rpm under RHEL 5" -->
<!-- id="877hrcidwc.fsf_at_liv.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="D71801B4-FAF3-472E-8AB9-388829FF76DB_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] building the 1.4.1 rpm under RHEL 5<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-20 17:56:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11836.php">Dorian Krause: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<li><strong>Previous message:</strong> <a href="11834.php">Daniel Sp&#229;ngberg: "Re: [OMPI users] dynamic rules"</a>
<li><strong>In reply to:</strong> <a href="11833.php">Jeff Squyres: "Re: [OMPI users] building the 1.4.1 rpm under RHEL 5"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres &lt;jsquyres_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; Is it related to FORTIFY_SOURCE?
</span><br>
<p>Apparently so.  Thanks.  The problem seems to be only in that routine.
<br>
It's obviously somewhat subtle as it doesn't fail on Ubuntu, which
<br>
defaults to FORTIFY_SOURCE.
<br>
<p>Perhaps defaulting to on is the wrong choice, as I'd guess RH5-ish is
<br>
the most likely target for the rpm; alternatively, maybe it could be
<br>
disabled in the one place if it's enough of a benefit generally.  I
<br>
think it could at least benefit from a prominent note in the
<br>
instructions to try turning it off in case of such problems.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11836.php">Dorian Krause: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<li><strong>Previous message:</strong> <a href="11834.php">Daniel Sp&#229;ngberg: "Re: [OMPI users] dynamic rules"</a>
<li><strong>In reply to:</strong> <a href="11833.php">Jeff Squyres: "Re: [OMPI users] building the 1.4.1 rpm under RHEL 5"</a>
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
