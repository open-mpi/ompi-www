<?
$subject_val = "[OMPI users] MPI_ALLREDUCE: Segmentation Fault";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  2 15:27:47 2011" -->
<!-- isoreceived="20110602192747" -->
<!-- sent="Thu, 2 Jun 2011 15:27:41 -0400" -->
<!-- isosent="20110602192741" -->
<!-- name="Timothy Stitt" -->
<!-- email="Timothy.Stitt.9_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_ALLREDUCE: Segmentation Fault" -->
<!-- id="9709CE87-B150-4717-A2B9-4B3648EEA445_at_nd.edu" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] MPI_ALLREDUCE: Segmentation Fault<br>
<strong>From:</strong> Timothy Stitt (<em>Timothy.Stitt.9_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-02 15:27:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16673.php">amjad ali: "[OMPI users] difference between MTL and BTL"</a>
<li><strong>Previous message:</strong> <a href="16671.php">Jeff Squyres: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>We have a code built with OpenMPI (v1.4.3) and the Intel v12.0 compiler that has been tested successfully on 10s - 100s of cores on our cluster. We recently ran the same code with 1020 cores and received the following runtime error:
<br>
<p><span class="quotelev1">&gt; [d6cneh042:28543] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [d6cneh061:29839] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [d6cneh061:29839] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [d6cneh061:29839] Failing at address: 0x10
</span><br>
<span class="quotelev1">&gt; [d6cneh030:26800] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [d6cneh030:26800] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [d6cneh030:26800] Failing at address: 0x21
</span><br>
<span class="quotelev1">&gt; [d6cneh042:28543] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [d6cneh042:28543] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [d6cneh042:28543] Failing at address: 0x10
</span><br>
<span class="quotelev1">&gt; [d6cneh021:27646] [ 0] /lib64/libpthread.so.0 [0x39aee0eb10]
</span><br>
<span class="quotelev1">&gt; [d6cneh021:27646] [ 1] /opt/crc/openmpi/1.4.3/intel-12.0/lib/libmpi.so.0 [0x2af8b1c8bca8]
</span><br>
<span class="quotelev1">&gt; [d6cneh021:27646] [ 2] /opt/crc/openmpi/1.4.3/intel-12.0/lib/libmpi.so.0 [0x2af8b1c8a1ef]
</span><br>
<span class="quotelev1">&gt; [d6cneh021:27646] [ 3] /opt/crc/openmpi/1.4.3/intel-12.0/lib/libmpi.so.0 [0x2af8b1c16246]
</span><br>
<span class="quotelev1">&gt; [d6cneh021:27646] [ 4] /opt/crc/openmpi/1.4.3/intel-12.0/lib/libopen-pal.so.0(opal_progress+0x86) [0x2af8b22a6a26]
</span><br>
<span class="quotelev1">&gt; [d6cneh021:27646] [ 5] /opt/crc/openmpi/1.4.3/intel-12.0/lib/libmpi.so.0 [0x2af8b1c879e7]
</span><br>
<span class="quotelev1">&gt; [d6cneh021:27646] [ 6] /opt/crc/openmpi/1.4.3/intel-12.0/lib/libmpi.so.0 [0x2af8b1c1f701]
</span><br>
<span class="quotelev1">&gt; [d6cneh021:27646] [ 7] /opt/crc/openmpi/1.4.3/intel-12.0/lib/libmpi.so.0 [0x2af8b1c1aec9]
</span><br>
<span class="quotelev1">&gt; [d6cneh021:27646] [ 8] /opt/crc/openmpi/1.4.3/intel-12.0/lib/libmpi.so.0(MPI_Allreduce+0x73) [0x2af8b1be6203]
</span><br>
<span class="quotelev1">&gt; [d6cneh021:27646] [ 9] /opt/crc/openmpi/1.4.3/intel-12.0/lib/libmpi_f77.so.0(MPI_ALLREDUCE+0xc5) [0x2af8b1977715]
</span><br>
<span class="quotelev1">&gt; [d6cneh021:27646] [10] openmd_MPI [0x5e0b94]
</span><br>
<span class="quotelev1">&gt; [d6cneh021:27646] [11] openmd_MPI [0x599877]
</span><br>
<span class="quotelev1">&gt; [d6cneh021:27646] [12] openmd_MPI [0x5746e8]
</span><br>
<span class="quotelev1">&gt; [d6cneh021:27646] [13] openmd_MPI [0x4f18b8]
</span><br>
<p>Can anyone give some insight into the issue? I should note (as it may be relevant) that this job was run across a heterogeneous cluster of Intel Nehalem servers with a mixture of Infiniband and Ethernet connections. The OpenMPI compiler was built with no IB libraries (so I am assuming everything defaults to a TCP transport?).
<br>
<p>Thanks in advance for any insight that may help us identify the issue.
<br>
<p>Regards.
<br>
<p>Tim.
<br>
<p>Tim Stitt PhD (User Support Manager).
<br>
Center for Research Computing | University of Notre Dame |
<br>
P.O. Box 539, Notre Dame, IN 46556 | Phone:  574-631-5287 | Email: tstitt_at_[hidden]&lt;mailto:tstitt_at_[hidden]&gt;
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16672/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16673.php">amjad ali: "[OMPI users] difference between MTL and BTL"</a>
<li><strong>Previous message:</strong> <a href="16671.php">Jeff Squyres: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
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
