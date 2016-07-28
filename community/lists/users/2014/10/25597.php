<?
$subject_val = "Re: [OMPI users] which info is needed for SIGSEGV in Javaforopenmpi-dev-124-g91e9686on Solaris";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 27 02:52:09 2014" -->
<!-- isoreceived="20141027065209" -->
<!-- sent="Mon, 27 Oct 2014 07:51:34 +0100 (CET)" -->
<!-- isosent="20141027065134" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] which info is needed for SIGSEGV in Javaforopenmpi-dev-124-g91e9686on Solaris" -->
<!-- id="201410270651.s9R6pYA0008824_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] which info is needed for SIGSEGV in Javaforopenmpi-dev-124-g91e9686on Solaris" -->
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
<strong>Subject:</strong> Re: [OMPI users] which info is needed for SIGSEGV in Javaforopenmpi-dev-124-g91e9686on Solaris<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-27 02:51:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25598.php">maxinator333: "[OMPI users] Possible Memory Leak in simple PingPong-Routine with OpenMPI 1.8.3?"</a>
<li><strong>Previous message:</strong> <a href="25596.php">Gilles Gouaillardet: "Re: [OMPI users] which info is needed for SIGSEGV in Java foropenmpi-dev-124-g91e9686on Solaris"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gilles, Oscar, Ralph, Takahiro
<br>
<p>thank you very much for all your help and time investigating my
<br>
problems on Sparc systems.
<br>
<p><p><span class="quotelev1">&gt; thanks a lot for the detailled explanation.
</span><br>
<span class="quotelev1">&gt; FWIW, i was previously testing on Solaris 11 that behaves like Linux :
</span><br>
<span class="quotelev1">&gt; printf(&quot;%s&quot;, NULL) outputs '(null)'
</span><br>
<span class="quotelev1">&gt; vs a SIGSEGV on Solaris 10
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i commited a16c1e44189366fbc8e967769e050f517a40f3f8 in order to fix this
</span><br>
<span class="quotelev1">&gt; issue
</span><br>
<span class="quotelev1">&gt; (i moved the call to mca_base_var_register *after* MPI_Init)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; regarding the BUS error reported by Siegmar, i also commited
</span><br>
<span class="quotelev1">&gt; 62bde1fcb554079143030bb305512c236672386f
</span><br>
<span class="quotelev1">&gt; in order to fix it (this is based on code review only, i have no sparc64
</span><br>
<span class="quotelev1">&gt; hardware to test it is enough)
</span><br>
<p>I'll test it, when a new nightly snapshot is available for the trunk.
<br>
<p><p>Kind regards and thank you very much once more
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25598.php">maxinator333: "[OMPI users] Possible Memory Leak in simple PingPong-Routine with OpenMPI 1.8.3?"</a>
<li><strong>Previous message:</strong> <a href="25596.php">Gilles Gouaillardet: "Re: [OMPI users] which info is needed for SIGSEGV in Java foropenmpi-dev-124-g91e9686on Solaris"</a>
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
