<?
$subject_val = "Re: [OMPI users] ScaLAPACK and OpenMPI &gt; 1.3.1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 21 17:19:01 2010" -->
<!-- isoreceived="20100121221901" -->
<!-- sent="Thu, 21 Jan 2010 23:18:55 +0100" -->
<!-- isosent="20100121221855" -->
<!-- name="&#197;ke Sandgren" -->
<!-- email="ake.sandgren_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ScaLAPACK and OpenMPI &amp;gt; 1.3.1" -->
<!-- id="1264112335.7216.14.camel_at_y-boda.ydc.se" -->
<!-- inreplyto="03261C2B265B89439DB2B424167AD3966C761D9403_at_NDJSSCC01.ndc.nasa.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] ScaLAPACK and OpenMPI &gt; 1.3.1<br>
<strong>From:</strong> &#197;ke Sandgren (<em>ake.sandgren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-21 17:18:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11846.php">Champagne, Nathan J. (JSC-EV)[Jacobs Technology]: "Re: [OMPI users] ScaLAPACK and OpenMPI &gt; 1.3.1"</a>
<li><strong>Previous message:</strong> <a href="11844.php">Champagne, Nathan J. (JSC-EV)[Jacobs Technology]: "Re: [OMPI users] ScaLAPACK and OpenMPI &gt; 1.3.1"</a>
<li><strong>In reply to:</strong> <a href="11844.php">Champagne, Nathan J. (JSC-EV)[Jacobs Technology]: "Re: [OMPI users] ScaLAPACK and OpenMPI &gt; 1.3.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11846.php">Champagne, Nathan J. (JSC-EV)[Jacobs Technology]: "Re: [OMPI users] ScaLAPACK and OpenMPI &gt; 1.3.1"</a>
<li><strong>Reply:</strong> <a href="11846.php">Champagne, Nathan J. (JSC-EV)[Jacobs Technology]: "Re: [OMPI users] ScaLAPACK and OpenMPI &gt; 1.3.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 2010-01-21 at 15:40 -0600, Champagne, Nathan J. (JSC-EV)[Jacobs
<br>
Technology] wrote:
<br>
<span class="quotelev2">&gt; &gt;What is a correct result then?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The correct results are output by v1.3.1. The filename in the archive is &quot;sol_1.3.1_96.txt&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;How often do you get junk or NaNs compared to correct result.
</span><br>
<span class="quotelev1">&gt; We haven't been able to quantify it. It almost seems random; similar to using a variable that's unintialized, expecting its initial value to be zero when it may not be.
</span><br>
<p>In that case i wonder what version of scalapack/blacs you are using?
<br>
<p>I have run a bunch of tests with openmpi 1.3.3 and 1.4 all yield the
<br>
correct result.
<br>
Using Intel 10.1 with lapack 3.1.1 built my me + gotoblas, and also
<br>
tried mkl.
<br>
<p>Also tried with Pathscale 3.2 with lapack 3.1.1/gotoblas still ok
<br>
<p>I tried running with 128 cores too but still the same result (except one
<br>
small round-off difference)
<br>
<p>I know that scalapack versions prior to 1.8.0 had a couple of bugs with
<br>
uninitalized vars.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11846.php">Champagne, Nathan J. (JSC-EV)[Jacobs Technology]: "Re: [OMPI users] ScaLAPACK and OpenMPI &gt; 1.3.1"</a>
<li><strong>Previous message:</strong> <a href="11844.php">Champagne, Nathan J. (JSC-EV)[Jacobs Technology]: "Re: [OMPI users] ScaLAPACK and OpenMPI &gt; 1.3.1"</a>
<li><strong>In reply to:</strong> <a href="11844.php">Champagne, Nathan J. (JSC-EV)[Jacobs Technology]: "Re: [OMPI users] ScaLAPACK and OpenMPI &gt; 1.3.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11846.php">Champagne, Nathan J. (JSC-EV)[Jacobs Technology]: "Re: [OMPI users] ScaLAPACK and OpenMPI &gt; 1.3.1"</a>
<li><strong>Reply:</strong> <a href="11846.php">Champagne, Nathan J. (JSC-EV)[Jacobs Technology]: "Re: [OMPI users] ScaLAPACK and OpenMPI &gt; 1.3.1"</a>
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
