<?
$subject_val = "Re: [OMPI users] out of memory in io_romio_ad_nfs_read.c";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 22 14:47:24 2010" -->
<!-- isoreceived="20101122194724" -->
<!-- sent="Mon, 22 Nov 2010 13:47:19 -0600" -->
<!-- isosent="20101122194719" -->
<!-- name="Rob Latham" -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] out of memory in io_romio_ad_nfs_read.c" -->
<!-- id="20101122194719.GA20365_at_mcs.anl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTinczHHYWy3b0DgFNubomh1v6unRFU3ONeXYqszj_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] out of memory in io_romio_ad_nfs_read.c<br>
<strong>From:</strong> Rob Latham (<em>robl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-22 14:47:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14868.php">Paul Monday (Parallel Scientific): "Re: [OMPI users] Multiple Subnet MPI Fail"</a>
<li><strong>Previous message:</strong> <a href="14866.php">Hicham Mouline: "Re: [OMPI users] launching the mpi runtime"</a>
<li><strong>In reply to:</strong> <a href="14801.php">Zak: "[OMPI users] out of memory in io_romio_ad_nfs_read.c"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Nov 17, 2010 at 11:23:29AM +0100, Zak wrote:
<br>
<span class="quotelev1">&gt; Dear
</span><br>
<span class="quotelev1">&gt; I m getting the following error, during the I/O
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;out of memory in io_romio_ad_nfs_read.c, line 156&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; do any one knew how I solve this issue during the read of file
</span><br>
<p>that's odd.  How many processors?  can you tell me if it happens with
<br>
other file systems?    If this is a read-only workload, you can prefix
<br>
the file name with 'ufs:' and take a different code path inside the
<br>
library. 
<br>
<p>p.s. i know this won't be very helpful to you but parallel I/O to an
<br>
NFS volume, while supported, is not going to perform very well, and
<br>
will likely, despite the library's best efforts, give you incorrect
<br>
results.
<br>
<p>==rob
<br>
<p><p><pre>
-- 
Rob Latham
Mathematics and Computer Science Division
Argonne National Lab, IL USA
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14868.php">Paul Monday (Parallel Scientific): "Re: [OMPI users] Multiple Subnet MPI Fail"</a>
<li><strong>Previous message:</strong> <a href="14866.php">Hicham Mouline: "Re: [OMPI users] launching the mpi runtime"</a>
<li><strong>In reply to:</strong> <a href="14801.php">Zak: "[OMPI users] out of memory in io_romio_ad_nfs_read.c"</a>
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
