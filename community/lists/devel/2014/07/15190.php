<?
$subject_val = "Re: [OMPI devel] Onesided failures";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 17 03:36:43 2014" -->
<!-- isoreceived="20140717073643" -->
<!-- sent="Thu, 17 Jul 2014 16:36:43 +0900" -->
<!-- isosent="20140717073643" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Onesided failures" -->
<!-- id="53C77D0B.9070308_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3AF945EBF4D3EC41AFE44EED9B0585F36047583D03_at_HQMAIL02.nvidia.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Onesided failures<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-17 03:36:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15191.php">George Bosilca: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>Previous message:</strong> <a href="15189.php">Bert Wesarg: "Re: [OMPI devel] PkgSrc build of 1.8.1 gives a portability error"</a>
<li><strong>In reply to:</strong> <a href="15165.php">Rolf vandeVaart: "Re: [OMPI devel] Onesided failures"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rolf,
<br>
<p>i commited r2389.
<br>
<p>MPI_Win_allocate_shared is now invoked on a single node communicator
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 2014/07/16 22:59, Rolf vandeVaart wrote:
<br>
<span class="quotelev1">&gt; Sounds like a good plan.  Thanks for looking into this Gilles!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Gilles GOUAILLARDET
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, July 16, 2014 9:53 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] Onesided failures
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Unless I am missing something obvious, I will update the test tomorrow and add a comm split to ensure MPI_Win_allocate_shared is called from single node communicator and skip the test if this impossible
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15191.php">George Bosilca: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>Previous message:</strong> <a href="15189.php">Bert Wesarg: "Re: [OMPI devel] PkgSrc build of 1.8.1 gives a portability error"</a>
<li><strong>In reply to:</strong> <a href="15165.php">Rolf vandeVaart: "Re: [OMPI devel] Onesided failures"</a>
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
