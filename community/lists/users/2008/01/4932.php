<?
$subject_val = "Re: [OMPI users] SCALAPACK: Segmentation Fault (11) and Signal	code:Address not mapped (1)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 31 02:10:40 2008" -->
<!-- isoreceived="20080131071040" -->
<!-- sent="Thu, 31 Jan 2008 08:10:28 +0100" -->
<!-- isosent="20080131071028" -->
<!-- name="&#197;ke Sandgren" -->
<!-- email="ake.sandgren_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SCALAPACK: Segmentation Fault (11) and Signal	code:Address not mapped (1)" -->
<!-- id="1201763428.22897.152.camel_at_skalman.hpc2n.umu.se" -->
<!-- inreplyto="2FE28C0766F7274AB44868F97FBF7EBF1A0291_at_CETO.net.ttu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] SCALAPACK: Segmentation Fault (11) and Signal	code:Address not mapped (1)<br>
<strong>From:</strong> &#197;ke Sandgren (<em>ake.sandgren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-31 02:10:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4933.php">Martin Horvat: "Re: [OMPI users] general problems with Open mpi and WRF"</a>
<li><strong>Previous message:</strong> <a href="4931.php">Jeff Squyres: "Re: [OMPI users] general problems with Open mpi and WRF"</a>
<li><strong>In reply to:</strong> <a href="4924.php">Backlund, Daniel: "Re: [OMPI users] SCALAPACK: Segmentation Fault (11) and Signal code:Address not mapped (1)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 2008-01-30 at 10:01 -0600, Backlund, Daniel wrote:
<br>
<span class="quotelev1">&gt; Jeff, thank your for your suggestion, I am sure that the correct mpif.h is being included. One 
</span><br>
<span class="quotelev1">&gt; thing that I did not do in my original message was submit the job to SGE. I did that and the 
</span><br>
<span class="quotelev1">&gt; program still failed with the same seg fault messages.
</span><br>
<p><span class="quotelev1">&gt; Hello all, I am using OMPI 1.2.4 on a Linux cluster (Rocks 4.2). OMPI was configured to use the 
</span><br>
<span class="quotelev1">&gt; Pathscale Compiler Suite installed in the (NFS mounted on nodes) /home/PROGRAMS/pathscale. I am 
</span><br>
<span class="quotelev1">&gt; trying to compile and run the example1.f that comes with the ACML package from AMD, and I am 
</span><br>
<span class="quotelev1">&gt; unable to get it to run. All nodes have the same Opteron processors and 2GB ram per core. OMPI 
</span><br>
<span class="quotelev1">&gt; was configured as below.
</span><br>
<p>- upgrade to latest 3.1 version of Pathscale (3.1-231.14750 or later)
<br>
- upgrade to 1.2.5 of openmpi
<br>
- make sure you are using blacs 1.1.patch3
<br>
- make sure you are using scalapack 1.8.0
<br>
<p>This combo is the first that i have seen pass the blacs and scalapack
<br>
selftests. Any earlier version combo of pathscale/openmpi used to fail
<br>
the blacstests horribly.
<br>
<p><pre>
-- 
Ake Sandgren, HPC2N, Umea University, S-90187 Umea, Sweden
Internet: ake_at_[hidden]   Phone: +46 90 7866134 Fax: +46 90 7866126
Mobile: +46 70 7716134 WWW: <a href="http://www.hpc2n.umu.se">http://www.hpc2n.umu.se</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4933.php">Martin Horvat: "Re: [OMPI users] general problems with Open mpi and WRF"</a>
<li><strong>Previous message:</strong> <a href="4931.php">Jeff Squyres: "Re: [OMPI users] general problems with Open mpi and WRF"</a>
<li><strong>In reply to:</strong> <a href="4924.php">Backlund, Daniel: "Re: [OMPI users] SCALAPACK: Segmentation Fault (11) and Signal code:Address not mapped (1)"</a>
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
