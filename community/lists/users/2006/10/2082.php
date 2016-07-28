<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 30 09:25:27 2006" -->
<!-- isoreceived="20061030142527" -->
<!-- sent="Mon, 30 Oct 2006 08:48:35 -0500" -->
<!-- isosent="20061030134835" -->
<!-- name="Michael Kluskens" -->
<!-- email="mklus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp;amp; 1.3" -->
<!-- id="CE64BDBD-6327-40E1-B326-1F89E4A2F843_at_ieee.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B6510006-C984-45B2-8AD8-694C3B333E92_at_cisco.com" -->
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
<strong>From:</strong> Michael Kluskens (<em>mklus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-30 08:48:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2083.php">hpetit_at_[hidden]: "[OMPI users] MPI_Comm_spawn multiple bproc support problem"</a>
<li><strong>Previous message:</strong> <a href="2081.php">Gleb Natapov: "Re: [OMPI users] Fault Tolerance &amp; Behavior"</a>
<li><strong>In reply to:</strong> <a href="2077.php">Jeff Squyres: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have tested for the MPI_ABORT problem I was seeing and it appears  
<br>
to be fixed in the trunk.
<br>
<p>Michael
<br>
<p>On Oct 28, 2006, at 8:45 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Sorry for the delay on this -- is this still the case with the OMPI
</span><br>
<span class="quotelev1">&gt; trunk?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We think we finally have all the issues solved with MPI_ABORT on the
</span><br>
<span class="quotelev1">&gt; trunk.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 16, 2006, at 8:29 AM, &#197;ke Sandgren wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, 2006-10-16 at 10:13 +0200, &#197;ke Sandgren wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Fri, 2006-10-06 at 00:04 -0400, Jeff Squyres wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 10/5/06 2:42 PM, &quot;Michael Kluskens&quot; &lt;mklus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; System: BLACS 1.1p3 on Debian Linux 3.1r3 on dual-opteron, gcc
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 3.3.5,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Intel ifort 9.0.32 all tests with 4 processors (comments below)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; OpenMPi 1.1.1 patched and OpenMPI 1.1.2 patched:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    C &amp; F tests: no errors with default data set.  F test slowed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; down
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; in the middle of the tests.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Good.  Can you expand on what you mean by &quot;slowed down&quot;?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lets add some more data to this...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; BLACS 1.1p3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ubuntu Dapper 6.06
</span><br>
<span class="quotelev3">&gt;&gt;&gt; dual opteron
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gcc 4.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gfortran 4.0 (for both f77 and f90)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; standard tests with 4 tasks on one node (i.e. 2 tasks per cpu)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenMPI 1.1.2rc3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The tests comes to a complete standstill at the integer bsbr tests
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It consumes cpu all the time but nothing happens.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Actually if i'm not too inpatient i will progress but VERY slowly.
</span><br>
<span class="quotelev2">&gt;&gt; A complete run of the blacstest takes +30min cpu-time...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From the bsbr tests and onwards everything takes &quot;forever&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2083.php">hpetit_at_[hidden]: "[OMPI users] MPI_Comm_spawn multiple bproc support problem"</a>
<li><strong>Previous message:</strong> <a href="2081.php">Gleb Natapov: "Re: [OMPI users] Fault Tolerance &amp; Behavior"</a>
<li><strong>In reply to:</strong> <a href="2077.php">Jeff Squyres: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
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
