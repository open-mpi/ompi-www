<?
$subject_val = "Re: [OMPI users] Segmentation fault in mca_btl_tcp";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 15 03:18:38 2010" -->
<!-- isoreceived="20100415071838" -->
<!-- sent="Thu, 15 Apr 2010 09:18:32 +0200" -->
<!-- isosent="20100415071832" -->
<!-- name="Ake Sandgren" -->
<!-- email="ake.sandgren_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault in mca_btl_tcp" -->
<!-- id="1271315912.15915.258.camel_at_skalman.hpc2n.umu.se" -->
<!-- inreplyto="6E02A2A5-3088-4872-B459-A9892E269DC4_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segmentation fault in mca_btl_tcp<br>
<strong>From:</strong> Ake Sandgren (<em>ake.sandgren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-15 03:18:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12636.php">Ben.Kuppers_at_[hidden]: "[OMPI users] import/export issues on Windows"</a>
<li><strong>Previous message:</strong> <a href="12634.php">Werner Van Geit: "[OMPI users] Segmentation fault in mca_btl_tcp"</a>
<li><strong>In reply to:</strong> <a href="12634.php">Werner Van Geit: "[OMPI users] Segmentation fault in mca_btl_tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12640.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault in mca_btl_tcp"</a>
<li><strong>Reply:</strong> <a href="12640.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault in mca_btl_tcp"</a>
<li><strong>Reply:</strong> <a href="12641.php">Werner Van Geit: "Re: [OMPI users] Segmentation fault in mca_btl_tcp"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 2010-04-15 at 15:57 +0900, Werner Van Geit wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We are using openmpi 1.4.1 on our cluster computer (in conjunction with Torque). One of our users has a problem with his jobs generating a segmentation fault on one of the slaves, this is the backtrace:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [cstone-00613:28461] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [cstone-00613:28461] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [cstone-00613:28461] Signal code:  (128)
</span><br>
<span class="quotelev1">&gt; [cstone-00613:28461] Failing at address: (nil)
</span><br>
<span class="quotelev1">&gt; [cstone-00613:28462] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [cstone-00613:28462] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [cstone-00613:28462] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [cstone-00613:28462] Failing at address: (nil)
</span><br>
<span class="quotelev1">&gt; [cstone-00613:28461] [ 0] /lib64/libc.so.6 [0x2ba1933dce20]
</span><br>
<span class="quotelev1">&gt; [cstone-00613:28461] [ 1] /opt/openmpi-1.3/lib/openmpi/mca_btl_tcp.so [0x2ba19530ec7a]
</span><br>
<span class="quotelev1">&gt; [cstone-00613:28461] [ 2] /opt/openmpi-1.3/lib/openmpi/mca_btl_tcp.so [0x2ba19530d860]
</span><br>
<span class="quotelev1">&gt; [cstone-00613:28461] [ 3] /opt/openmpi/lib/libopen-pal.so.0 [0x2ba1938eb16b]
</span><br>
<span class="quotelev1">&gt; [cstone-00613:28461] [ 4] /opt/openmpi/lib/libopen-pal.so.0(opal_progress+0x9e) [0x2ba1938e072e]
</span><br>
<span class="quotelev1">&gt; [cstone-00613:28461] [ 5] /opt/openmpi/lib/libmpi.so.0 [0x2ba193621b38]
</span><br>
<span class="quotelev1">&gt; [cstone-00613:28461] [ 6] /opt/openmpi/lib/libmpi.so.0(PMPI_Wait+0x5b) [0x2ba19364c63b]
</span><br>
<span class="quotelev1">&gt; [cstone-00613:28461] [ 7] /opt/openmpi/lib/libmpi_f77.so.0(mpi_wait_+0x3a) [0x2ba192e98b8a]
</span><br>
<span class="quotelev1">&gt; [cstone-00613:28461] [ 8] ./roms [0x44976c]
</span><br>
<span class="quotelev1">&gt; [cstone-00613:28461] [ 9] ./roms [0x449d96]
</span><br>
<span class="quotelev1">&gt; [cstone-00613:28461] [10] ./roms [0x422708]
</span><br>
<span class="quotelev1">&gt; [cstone-00613:28461] [11] ./roms [0x402908]
</span><br>
<span class="quotelev1">&gt; [cstone-00613:28461] [12] ./roms [0x402467]
</span><br>
<span class="quotelev1">&gt; [cstone-00613:28461] [13] ./roms [0x46d20e]
</span><br>
<span class="quotelev1">&gt; [cstone-00613:28461] [14] /lib64/libc.so.6(__libc_start_main+0xf4) [0x2ba1933ca164]
</span><br>
<span class="quotelev1">&gt; [cstone-00613:28461] [15] ./roms [0x401dd9]
</span><br>
<span class="quotelev1">&gt; [cstone-00613:28461] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; [cstone-00613:28462] [ 0] /lib64/libc.so.6 [0x2b5d57db6e20]
</span><br>
<span class="quotelev1">&gt; [cstone-00613:28462] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The other slaves crash with:
</span><br>
<span class="quotelev1">&gt; [cstone-00612][[21785,1],35][btl_tcp_frag.c:216:mca_btl_tcp_frag_recv] mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Since this problem seems to be happening in the network part of MPI my guess is that there is, or something wrong with the network, or a bug in OpenMPI. 
</span><br>
<span class="quotelev1">&gt; This same problem also appeared at the time that we were using openmpi 1.3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How could this problem be solved ?
</span><br>
<p>We sometimes see mysterious crashes like this one. At least some of them
<br>
are caused by port scanners, i.e. unexpected non-mpi related packets
<br>
coming in on the sockets will sometimes cause havoc.
<br>
<p>We've been getting http traffic in the jobs stdout/err sometimes. That
<br>
really makes the users confused :-)
<br>
<p>And yes, we are going to block this but we haven't had time...
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
<li><strong>Next message:</strong> <a href="12636.php">Ben.Kuppers_at_[hidden]: "[OMPI users] import/export issues on Windows"</a>
<li><strong>Previous message:</strong> <a href="12634.php">Werner Van Geit: "[OMPI users] Segmentation fault in mca_btl_tcp"</a>
<li><strong>In reply to:</strong> <a href="12634.php">Werner Van Geit: "[OMPI users] Segmentation fault in mca_btl_tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12640.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault in mca_btl_tcp"</a>
<li><strong>Reply:</strong> <a href="12640.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault in mca_btl_tcp"</a>
<li><strong>Reply:</strong> <a href="12641.php">Werner Van Geit: "Re: [OMPI users] Segmentation fault in mca_btl_tcp"</a>
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
