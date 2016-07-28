<?
$subject_val = "Re: [OMPI users] Use of __float128 with openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb  1 15:28:02 2014" -->
<!-- isoreceived="20140201202802" -->
<!-- sent="Sat, 01 Feb 2014 15:28:00 -0500" -->
<!-- isosent="20140201202800" -->
<!-- name="Tim Prince" -->
<!-- email="n8tm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Use of __float128 with openmpi" -->
<!-- id="52ED58D0.5070404_at_aol.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3C9B9D09-E30C-4C66-B5C4-C493F51E5F7A_at_physik.uni-muenchen.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Use of __float128 with openmpi<br>
<strong>From:</strong> Tim Prince (<em>n8tm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-01 15:28:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23531.php">Jeff Hammond: "Re: [OMPI users] Use of __float128 with openmpi"</a>
<li><strong>Previous message:</strong> <a href="23529.php">Tim Prince: "Re: [OMPI users] Use of __float128 with openmpi"</a>
<li><strong>In reply to:</strong> <a href="23528.php">Patrick Boehl: "[OMPI users] Use of __float128 with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23531.php">Jeff Hammond: "Re: [OMPI users] Use of __float128 with openmpi"</a>
<li><strong>Reply:</strong> <a href="23531.php">Jeff Hammond: "Re: [OMPI users] Use of __float128 with openmpi"</a>
<li><strong>Reply:</strong> <a href="23534.php">Patrick Boehl: "Re: [OMPI users] Use of __float128 with openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 02/01/2014 12:42 PM, Patrick Boehl wrote:
<br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a question on datatypes in openmpi:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there an (easy?) way to use __float128 variables with openmpi?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Specifically, functions like
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Allreduce
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; seem to give weird results with __float128.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Essentially all I found was
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://beige.ucs.indiana.edu/I590/node100.html">http://beige.ucs.indiana.edu/I590/node100.html</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; where they state
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; MPI_LONG_DOUBLE
</span><br>
<span class="quotelev1">&gt;    This is a quadruple precision, 128-bit long floating point number.
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But as far as I have seen, MPI_LONG_DOUBLE is only used for long doubles.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The Open MPI Version is 1.6.3 and gcc is 4.7.3 on a x86_64 machine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
It seems unlikely that 10 year old course notes on an unspecified MPI 
<br>
implementation (hinted to be IBM power3) would deal with specific 
<br>
details of openmpi on a different architecture.
<br>
Where openmpi refers to &quot;portable C types&quot; I would take long double to 
<br>
be the 80-bit hardware format you would have in a standard build of gcc 
<br>
for x86_64.  You should be able to gain some insight by examining your 
<br>
openmpi build logs to see if it builds for both __float80 and __float128 
<br>
(or neither).  gfortran has a 128-bit data type (software floating point 
<br>
real(16), corresponding to __float128); you should be able to see in the 
<br>
build logs whether that data type was used.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23531.php">Jeff Hammond: "Re: [OMPI users] Use of __float128 with openmpi"</a>
<li><strong>Previous message:</strong> <a href="23529.php">Tim Prince: "Re: [OMPI users] Use of __float128 with openmpi"</a>
<li><strong>In reply to:</strong> <a href="23528.php">Patrick Boehl: "[OMPI users] Use of __float128 with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23531.php">Jeff Hammond: "Re: [OMPI users] Use of __float128 with openmpi"</a>
<li><strong>Reply:</strong> <a href="23531.php">Jeff Hammond: "Re: [OMPI users] Use of __float128 with openmpi"</a>
<li><strong>Reply:</strong> <a href="23534.php">Patrick Boehl: "Re: [OMPI users] Use of __float128 with openmpi"</a>
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
