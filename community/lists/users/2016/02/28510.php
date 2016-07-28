<?
$subject_val = "Re: [OMPI users] error openmpi check hdf5";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 11 12:54:23 2016" -->
<!-- isoreceived="20160211175423" -->
<!-- sent="Thu, 11 Feb 2016 11:54:13 -0600" -->
<!-- isosent="20160211175413" -->
<!-- name="Rob Latham" -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error openmpi check hdf5" -->
<!-- id="56BCCAC5.3090401_at_mcs.anl.gov" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="56BB7C7C.6090703_at_central.uh.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] error openmpi check hdf5<br>
<strong>From:</strong> Rob Latham (<em>robl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-11 12:54:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28511.php">Peter Wind: "Re: [OMPI users] shared memory zero size segment"</a>
<li><strong>Previous message:</strong> <a href="28509.php">Rob Latham: "Re: [OMPI users] MX replacement?"</a>
<li><strong>In reply to:</strong> <a href="28499.php">Edgar Gabriel: "Re: [OMPI users] error openmpi check hdf5"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 02/10/2016 12:07 PM, Edgar Gabriel wrote:
<br>
<span class="quotelev1">&gt; yes and no :-) That particular functions was fixed, but there are a few
</span><br>
<span class="quotelev1">&gt; other especially in the shardefp framework that would cause similar
</span><br>
<span class="quotelev1">&gt; problems if compiled without RTLD_GLOBAL.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But more importantly, I can confirm that ompio in the 1.8 and 1.10
</span><br>
<span class="quotelev1">&gt; series does *not* pass the HDF5 tests and should not be used for that
</span><br>
<span class="quotelev1">&gt; (it passes on master and the 2.x series).  ROMIO is the default in 1.7,
</span><br>
<span class="quotelev1">&gt; 1.8 and 1.10 and should be used therefore.
</span><br>
<p>I can definitely confirm that the HDF5 test suite is very good at 
<br>
finding bugs in MPI-IO implementations!
<br>
<p>==rob
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28511.php">Peter Wind: "Re: [OMPI users] shared memory zero size segment"</a>
<li><strong>Previous message:</strong> <a href="28509.php">Rob Latham: "Re: [OMPI users] MX replacement?"</a>
<li><strong>In reply to:</strong> <a href="28499.php">Edgar Gabriel: "Re: [OMPI users] error openmpi check hdf5"</a>
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
