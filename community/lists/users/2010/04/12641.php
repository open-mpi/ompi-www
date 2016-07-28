<?
$subject_val = "Re: [OMPI users] Segmentation fault in mca_btl_tcp";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 15 07:47:10 2010" -->
<!-- isoreceived="20100415114710" -->
<!-- sent="Thu, 15 Apr 2010 20:47:00 +0900" -->
<!-- isosent="20100415114700" -->
<!-- name="Werner Van Geit" -->
<!-- email="werner.vangeit.spam_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault in mca_btl_tcp" -->
<!-- id="30BFBCEA-0FC1-417A-A482-1E0DEAACA0E4_at_gmail.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1271315912.15915.258.camel_at_skalman.hpc2n.umu.se" -->
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
<strong>From:</strong> Werner Van Geit (<em>werner.vangeit.spam_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-15 07:47:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12642.php">Jeff Squyres: "Re: [OMPI users] libmpi_f90.so.0 problem"</a>
<li><strong>Previous message:</strong> <a href="12640.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault in mca_btl_tcp"</a>
<li><strong>In reply to:</strong> <a href="12635.php">Ake Sandgren: "Re: [OMPI users] Segmentation fault in mca_btl_tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12637.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Segmentation fault in mca_btl_tcp"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We sometimes see mysterious crashes like this one. At least some of them
</span><br>
<span class="quotelev1">&gt; are caused by port scanners, i.e. unexpected non-mpi related packets
</span><br>
<span class="quotelev1">&gt; coming in on the sockets will sometimes cause havoc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Port scanners etc I don't really see happening on our cluster, since the nodes are well shielded from the outside, but of course there might be some internal processes that are causing this. At least I can try it by hand, to see if it generates the same kind of problem.
<br>
<p>Werner Van Geit
<br>
<p><span class="quotelev1">&gt; We've been getting http traffic in the jobs stdout/err sometimes. That
</span><br>
<span class="quotelev1">&gt; really makes the users confused :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And yes, we are going to block this but we haven't had time...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Ake Sandgren, HPC2N, Umea University, S-90187 Umea, Sweden
</span><br>
<span class="quotelev1">&gt; Internet: ake_at_[hidden]   Phone: +46 90 7866134 Fax: +46 90 7866126
</span><br>
<span class="quotelev1">&gt; Mobile: +46 70 7716134 WWW: <a href="http://www.hpc2n.umu.se">http://www.hpc2n.umu.se</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><span class="quotelev1">&gt; On Thu, 2010-04-15 at 15:57 +0900, Werner Van Geit wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We are using openmpi 1.4.1 on our cluster computer (in conjunction with Torque). One of our users has a problem with his jobs generating a segmentation fault on one of the slaves, this is the backtrace:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [cstone-00613:28461] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [cstone-00613:28461] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt; [cstone-00613:28461] Signal code:  (128)
</span><br>
<span class="quotelev2">&gt;&gt; [cstone-00613:28461] Failing at address: (nil)
</span><br>
<span class="quotelev2">&gt;&gt; [cstone-00613:28462] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [cstone-00613:28462] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt; [cstone-00613:28462] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt;&gt; [cstone-00613:28462] Failing at address: (nil)
</span><br>
<span class="quotelev2">&gt;&gt; [cstone-00613:28461] [ 0] /lib64/libc.so.6 [0x2ba1933dce20]
</span><br>
<span class="quotelev2">&gt;&gt; [cstone-00613:28461] [ 1] /opt/openmpi-1.3/lib/openmpi/mca_btl_tcp.so [0x2ba19530ec7a]
</span><br>
<span class="quotelev2">&gt;&gt; [cstone-00613:28461] [ 2] /opt/openmpi-1.3/lib/openmpi/mca_btl_tcp.so [0x2ba19530d860]
</span><br>
<span class="quotelev2">&gt;&gt; [cstone-00613:28461] [ 3] /opt/openmpi/lib/libopen-pal.so.0 [0x2ba1938eb16b]
</span><br>
<span class="quotelev2">&gt;&gt; [cstone-00613:28461] [ 4] /opt/openmpi/lib/libopen-pal.so.0(opal_progress+0x9e) [0x2ba1938e072e]
</span><br>
<span class="quotelev2">&gt;&gt; [cstone-00613:28461] [ 5] /opt/openmpi/lib/libmpi.so.0 [0x2ba193621b38]
</span><br>
<span class="quotelev2">&gt;&gt; [cstone-00613:28461] [ 6] /opt/openmpi/lib/libmpi.so.0(PMPI_Wait+0x5b) [0x2ba19364c63b]
</span><br>
<span class="quotelev2">&gt;&gt; [cstone-00613:28461] [ 7] /opt/openmpi/lib/libmpi_f77.so.0(mpi_wait_+0x3a) [0x2ba192e98b8a]
</span><br>
<span class="quotelev2">&gt;&gt; [cstone-00613:28461] [ 8] ./roms [0x44976c]
</span><br>
<span class="quotelev2">&gt;&gt; [cstone-00613:28461] [ 9] ./roms [0x449d96]
</span><br>
<span class="quotelev2">&gt;&gt; [cstone-00613:28461] [10] ./roms [0x422708]
</span><br>
<span class="quotelev2">&gt;&gt; [cstone-00613:28461] [11] ./roms [0x402908]
</span><br>
<span class="quotelev2">&gt;&gt; [cstone-00613:28461] [12] ./roms [0x402467]
</span><br>
<span class="quotelev2">&gt;&gt; [cstone-00613:28461] [13] ./roms [0x46d20e]
</span><br>
<span class="quotelev2">&gt;&gt; [cstone-00613:28461] [14] /lib64/libc.so.6(__libc_start_main+0xf4) [0x2ba1933ca164]
</span><br>
<span class="quotelev2">&gt;&gt; [cstone-00613:28461] [15] ./roms [0x401dd9]
</span><br>
<span class="quotelev2">&gt;&gt; [cstone-00613:28461] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt; [cstone-00613:28462] [ 0] /lib64/libc.so.6 [0x2b5d57db6e20]
</span><br>
<span class="quotelev2">&gt;&gt; [cstone-00613:28462] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The other slaves crash with:
</span><br>
<span class="quotelev2">&gt;&gt; [cstone-00612][[21785,1],35][btl_tcp_frag.c:216:mca_btl_tcp_frag_recv] mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Since this problem seems to be happening in the network part of MPI my guess is that there is, or something wrong with the network, or a bug in OpenMPI. 
</span><br>
<span class="quotelev2">&gt;&gt; This same problem also appeared at the time that we were using openmpi 1.3
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; How could this problem be solved ?
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12642.php">Jeff Squyres: "Re: [OMPI users] libmpi_f90.so.0 problem"</a>
<li><strong>Previous message:</strong> <a href="12640.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault in mca_btl_tcp"</a>
<li><strong>In reply to:</strong> <a href="12635.php">Ake Sandgren: "Re: [OMPI users] Segmentation fault in mca_btl_tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12637.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Segmentation fault in mca_btl_tcp"</a>
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
