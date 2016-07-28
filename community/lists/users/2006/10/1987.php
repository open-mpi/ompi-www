<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 16 08:29:11 2006" -->
<!-- isoreceived="20061016122911" -->
<!-- sent="Mon, 16 Oct 2006 14:29:03 +0200" -->
<!-- isosent="20061016122903" -->
<!-- name="&#197;ke Sandgren" -->
<!-- email="ake.sandgren_at_[hidden]" -->
<!-- subject="Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp;amp; 1.3" -->
<!-- id="1161001743.12245.58.camel_at_skalman.hpc2n.umu.se" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1160986404.12245.51.camel_at_skalman.hpc2n.umu.se" -->
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
<strong>From:</strong> &#197;ke Sandgren (<em>ake.sandgren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-16 08:29:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1988.php">Maestas, Christopher Daniel: "[OMPI users] Question on mpi collectives"</a>
<li><strong>Previous message:</strong> <a href="1986.php">&#197;ke Sandgren: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<li><strong>In reply to:</strong> <a href="1986.php">&#197;ke Sandgren: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2077.php">Jeff Squyres: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<li><strong>Reply:</strong> <a href="2077.php">Jeff Squyres: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 2006-10-16 at 10:13 +0200, &#197;ke Sandgren wrote:
<br>
<span class="quotelev1">&gt; On Fri, 2006-10-06 at 00:04 -0400, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On 10/5/06 2:42 PM, &quot;Michael Kluskens&quot; &lt;mklus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; System: BLACS 1.1p3 on Debian Linux 3.1r3 on dual-opteron, gcc 3.3.5,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Intel ifort 9.0.32 all tests with 4 processors (comments below)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; OpenMPi 1.1.1 patched and OpenMPI 1.1.2 patched:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    C &amp; F tests: no errors with default data set.  F test slowed down
</span><br>
<span class="quotelev3">&gt; &gt; &gt; in the middle of the tests.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Good.  Can you expand on what you mean by &quot;slowed down&quot;?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Lets add some more data to this...
</span><br>
<span class="quotelev1">&gt; BLACS 1.1p3
</span><br>
<span class="quotelev1">&gt; Ubuntu Dapper 6.06
</span><br>
<span class="quotelev1">&gt; dual opteron
</span><br>
<span class="quotelev1">&gt; gcc 4.0
</span><br>
<span class="quotelev1">&gt; gfortran 4.0 (for both f77 and f90)
</span><br>
<span class="quotelev1">&gt; standard tests with 4 tasks on one node (i.e. 2 tasks per cpu)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OpenMPI 1.1.2rc3
</span><br>
<span class="quotelev1">&gt; The tests comes to a complete standstill at the integer bsbr tests
</span><br>
<span class="quotelev1">&gt; It consumes cpu all the time but nothing happens.
</span><br>
<p>Actually if i'm not too inpatient i will progress but VERY slowly.
<br>
A complete run of the blacstest takes +30min cpu-time...
<br>
<span class="quotelev1">&gt;From the bsbr tests and onwards everything takes &quot;forever&quot;.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1988.php">Maestas, Christopher Daniel: "[OMPI users] Question on mpi collectives"</a>
<li><strong>Previous message:</strong> <a href="1986.php">&#197;ke Sandgren: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<li><strong>In reply to:</strong> <a href="1986.php">&#197;ke Sandgren: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2077.php">Jeff Squyres: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<li><strong>Reply:</strong> <a href="2077.php">Jeff Squyres: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
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
