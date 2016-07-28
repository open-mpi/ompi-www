<?
$subject_val = "Re: [OMPI users] Segmentation fault in mca_btl_tcp";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 15 07:19:35 2010" -->
<!-- isoreceived="20100415111935" -->
<!-- sent="Thu, 15 Apr 2010 20:18:10 +0900" -->
<!-- isosent="20100415111810" -->
<!-- name="Werner Van Geit" -->
<!-- email="werner.vangeit.spam_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault in mca_btl_tcp" -->
<!-- id="5C52CE6A-959E-48BB-9D25-15EFC68177AE_at_gmail.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="58D723FE08DC6A4398E6596E38F3FA1705675D_at_XMB-RCD-205.cisco.com" -->
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
<strong>Date:</strong> 2010-04-15 07:18:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12639.php">Shiqing Fan: "Re: [OMPI users] import/export issues on Windows"</a>
<li><strong>Previous message:</strong> <a href="12637.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Segmentation fault in mca_btl_tcp"</a>
<li><strong>In reply to:</strong> <a href="12637.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Segmentation fault in mca_btl_tcp"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
Yeah, I understand that would be handy, but it's a bit difficult, but I'll see if I could make a simple test case. 
<br>
The problem is, sorry that I forgot to mention that, that this segmentation fault only seems to happen after running the code for a couple of hours (on 10-20 8-core nodes). And for 'exactly' the same code (there are also no different random seed or something), it sometimes gives a segmentation fault, sometimes not (after resubmission). 
<br>
<p>Thx,
<br>
Werner Van Geit
<br>
<p>On 15 Apr 2010, at 19:41, Jeff Squyres (jsquyres) wrote:
<br>
<p><span class="quotelev1">&gt; Can you send a small program that reproduces the problem, perchance?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -jms
</span><br>
<span class="quotelev1">&gt; Sent from my PDA.  No type good.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----- Original Message -----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] &lt;users-bounces_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden] &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Sent: Thu Apr 15 01:57:10 2010
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] Segmentation fault in mca_btl_tcp
</span><br>
<span class="quotelev1">&gt; 
</span><br>
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (for more info about the system see attachments)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thx,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Werner Van Geit
</span><br>
<span class="quotelev1">&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12639.php">Shiqing Fan: "Re: [OMPI users] import/export issues on Windows"</a>
<li><strong>Previous message:</strong> <a href="12637.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Segmentation fault in mca_btl_tcp"</a>
<li><strong>In reply to:</strong> <a href="12637.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Segmentation fault in mca_btl_tcp"</a>
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
