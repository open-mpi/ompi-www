<?
$subject_val = "Re: [OMPI users] reading from a file";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 24 11:13:24 2011" -->
<!-- isoreceived="20110524151324" -->
<!-- sent="Tue, 24 May 2011 10:13:18 -0500" -->
<!-- isosent="20110524151318" -->
<!-- name="Rob Latham" -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] reading from a file" -->
<!-- id="20110524151318.GB8746_at_mcs.anl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BANLkTi=eKUQ2D8KR4xMhR7o0f-5NO9t2dQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] reading from a file<br>
<strong>From:</strong> Rob Latham (<em>robl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-24 11:13:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16614.php">Dave Love: "Re: [OMPI users] Openib with &gt; 32 cores per node"</a>
<li><strong>Previous message:</strong> <a href="16612.php">Rob Latham: "Re: [OMPI users] Trouble with MPI-IO"</a>
<li><strong>In reply to:</strong> <a href="16602.php">sushil samant: "Re: [OMPI users] reading from a file"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sat, May 21, 2011 at 05:15:13PM +0530, sushil samant wrote:
<br>
<span class="quotelev1">&gt; hi all,
</span><br>
<span class="quotelev1">&gt;  i am a new comer in openmpi programing.i have a txt file containing
</span><br>
<span class="quotelev1">&gt; seven column each column contains double type data. What i want to do
</span><br>
<span class="quotelev1">&gt; is to read the file in parallel and find the average value and
</span><br>
<span class="quotelev1">&gt; standard deviation of each column using c++ and openmpi. If someone
</span><br>
<span class="quotelev1">&gt; can provide a sample program with explanation it will be very useful.
</span><br>
<span class="quotelev1">&gt; And if understand it i would like to do it for .h5 file.
</span><br>
<p>MPI-IO does not do formatted I/O. 
<br>
<p>You should just start with the .h5 (HDF5 ? ) file, where decomposing
<br>
the dataset over N processors will be more straightforward.
<br>
<p>==rob
<br>
<p><pre>
-- 
Rob Latham
Mathematics and Computer Science Division
Argonne National Lab, IL USA
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16614.php">Dave Love: "Re: [OMPI users] Openib with &gt; 32 cores per node"</a>
<li><strong>Previous message:</strong> <a href="16612.php">Rob Latham: "Re: [OMPI users] Trouble with MPI-IO"</a>
<li><strong>In reply to:</strong> <a href="16602.php">sushil samant: "Re: [OMPI users] reading from a file"</a>
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
