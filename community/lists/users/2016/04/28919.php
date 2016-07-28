<?
$subject_val = "Re: [OMPI users] resolution of MPI_Wtime";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 11 13:03:40 2016" -->
<!-- isoreceived="20160411170340" -->
<!-- sent="Mon, 11 Apr 2016 18:03:37 +0100" -->
<!-- isosent="20160411170337" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] resolution of MPI_Wtime" -->
<!-- id="8737qsulg6.fsf_at_pc102091.liv.ac.uk" -->
<!-- inreplyto="CAMJJpkWD6tPNFvNB-y-QwjPZ_=RHV_hxZ5O8jBLaX3N=--bw+A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] resolution of MPI_Wtime<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-11 13:03:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28920.php">dpchoudh .: "Re: [OMPI users] libfabric verb provider for iWARP RNIC"</a>
<li><strong>Previous message:</strong> <a href="28918.php">Dave Love: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>In reply to:</strong> <a href="28913.php">George Bosilca: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28918.php">Dave Love: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George Bosilca &lt;bosilca_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; MPI_Wtick is not about the precision but about the resolution of the
</span><br>
<span class="quotelev1">&gt; underlying timer (aka. the best you can hope to get).
</span><br>
<p>What's the distinction here?  (clock_getres(2) says &quot;resolution
<br>
(precision)&quot;.)
<br>
<p>My point (like JH's?) is that it doesn't generally return the interval
<br>
between ticks, so it doesn't either seem very useful or obey the spec --
<br>
whether or not the spec is reasonable or the clock has reasonable
<br>
resolution.
<br>
<p>For instance, on a (particular?) sandybridge system, the interval for
<br>
CLOCK_MONOTONIC is experimentally ~30ns, not 1; clock_getres itself
<br>
isn't accurate.  On a particular core2 system, it appears to be an order
<br>
of magnitude bigger, but the clock ticks at least once per call in that
<br>
case.
<br>
<p><span class="quotelev1">&gt; Thus, the measured
</span><br>
<span class="quotelev1">&gt; time will certainly be larger, but, and this is almost a certainty, it will
</span><br>
<span class="quotelev1">&gt; hardly be smaller.  As a result, I am doubtful that an MPI implementation
</span><br>
<span class="quotelev1">&gt; will provide an MPI_Wtime with a practical resolution smaller that whatever
</span><br>
<span class="quotelev1">&gt; the corresponding MPI_Wtick returns.
</span><br>
<p>I don't think it's an issue not having a lower bound on resolution, but
<br>
isn't that the case with non-Linux high-res timers used by OMPI now?  My
<br>
technique when gettimeofday turns up as a timer is to replace it on
<br>
Linux with clock_gettime via an LD_PRELOAD, which seems legitimate.
<br>
<p>Not understanding this can definitely lead to bogus results on the happy
<br>
occasions when users and others are actually prepared to make
<br>
measurements, and despite the general practice, measurements without
<br>
good error estimates are pretty meaningless.  (No apologies for an
<br>
experimental physics background!)  The example which got me looking at
<br>
current OMPI was link latency tests which suggested there was something
<br>
badly wrong with the fabric.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28920.php">dpchoudh .: "Re: [OMPI users] libfabric verb provider for iWARP RNIC"</a>
<li><strong>Previous message:</strong> <a href="28918.php">Dave Love: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>In reply to:</strong> <a href="28913.php">George Bosilca: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28918.php">Dave Love: "Re: [OMPI users] resolution of MPI_Wtime"</a>
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
