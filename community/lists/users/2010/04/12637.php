<?
$subject_val = "Re: [OMPI users] Segmentation fault in mca_btl_tcp";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 15 06:41:22 2010" -->
<!-- isoreceived="20100415104122" -->
<!-- sent="Thu, 15 Apr 2010 05:41:17 -0500" -->
<!-- isosent="20100415104117" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault in mca_btl_tcp" -->
<!-- id="58D723FE08DC6A4398E6596E38F3FA1705675D_at_XMB-RCD-205.cisco.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-15 06:41:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12638.php">Werner Van Geit: "Re: [OMPI users] Segmentation fault in mca_btl_tcp"</a>
<li><strong>Previous message:</strong> <a href="12636.php">Ben.Kuppers_at_[hidden]: "[OMPI users] import/export issues on Windows"</a>
<li><strong>In reply to:</strong> <a href="12634.php">Werner Van Geit: "[OMPI users] Segmentation fault in mca_btl_tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12638.php">Werner Van Geit: "Re: [OMPI users] Segmentation fault in mca_btl_tcp"</a>
<li><strong>Reply:</strong> <a href="12638.php">Werner Van Geit: "Re: [OMPI users] Segmentation fault in mca_btl_tcp"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you send a small program that reproduces the problem, perchance?
<br>
<p>-jms
<br>
Sent from my PDA.  No type good.
<br>
<p>----- Original Message -----
<br>
From: users-bounces_at_[hidden] &lt;users-bounces_at_[hidden]&gt;
<br>
To: users_at_[hidden] &lt;users_at_[hidden]&gt;
<br>
Sent: Thu Apr 15 01:57:10 2010
<br>
Subject: [OMPI users] Segmentation fault in mca_btl_tcp
<br>
<p>Hi,
<br>
<p>We are using openmpi 1.4.1 on our cluster computer (in conjunction with Torque). One of our users has a problem with his jobs generating a segmentation fault on one of the slaves, this is the backtrace:
<br>
<p>[cstone-00613:28461] *** Process received signal ***
<br>
[cstone-00613:28461] Signal: Segmentation fault (11)
<br>
[cstone-00613:28461] Signal code:  (128)
<br>
[cstone-00613:28461] Failing at address: (nil)
<br>
[cstone-00613:28462] *** Process received signal ***
<br>
[cstone-00613:28462] Signal: Segmentation fault (11)
<br>
[cstone-00613:28462] Signal code: Address not mapped (1)
<br>
[cstone-00613:28462] Failing at address: (nil)
<br>
[cstone-00613:28461] [ 0] /lib64/libc.so.6 [0x2ba1933dce20]
<br>
[cstone-00613:28461] [ 1] /opt/openmpi-1.3/lib/openmpi/mca_btl_tcp.so [0x2ba19530ec7a]
<br>
[cstone-00613:28461] [ 2] /opt/openmpi-1.3/lib/openmpi/mca_btl_tcp.so [0x2ba19530d860]
<br>
[cstone-00613:28461] [ 3] /opt/openmpi/lib/libopen-pal.so.0 [0x2ba1938eb16b]
<br>
[cstone-00613:28461] [ 4] /opt/openmpi/lib/libopen-pal.so.0(opal_progress+0x9e) [0x2ba1938e072e]
<br>
[cstone-00613:28461] [ 5] /opt/openmpi/lib/libmpi.so.0 [0x2ba193621b38]
<br>
[cstone-00613:28461] [ 6] /opt/openmpi/lib/libmpi.so.0(PMPI_Wait+0x5b) [0x2ba19364c63b]
<br>
[cstone-00613:28461] [ 7] /opt/openmpi/lib/libmpi_f77.so.0(mpi_wait_+0x3a) [0x2ba192e98b8a]
<br>
[cstone-00613:28461] [ 8] ./roms [0x44976c]
<br>
[cstone-00613:28461] [ 9] ./roms [0x449d96]
<br>
[cstone-00613:28461] [10] ./roms [0x422708]
<br>
[cstone-00613:28461] [11] ./roms [0x402908]
<br>
[cstone-00613:28461] [12] ./roms [0x402467]
<br>
[cstone-00613:28461] [13] ./roms [0x46d20e]
<br>
[cstone-00613:28461] [14] /lib64/libc.so.6(__libc_start_main+0xf4) [0x2ba1933ca164]
<br>
[cstone-00613:28461] [15] ./roms [0x401dd9]
<br>
[cstone-00613:28461] *** End of error message ***
<br>
[cstone-00613:28462] [ 0] /lib64/libc.so.6 [0x2b5d57db6e20]
<br>
[cstone-00613:28462] *** End of error message ***
<br>
<p>The other slaves crash with:
<br>
[cstone-00612][[21785,1],35][btl_tcp_frag.c:216:mca_btl_tcp_frag_recv] mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)
<br>
<p>Since this problem seems to be happening in the network part of MPI my guess is that there is, or something wrong with the network, or a bug in OpenMPI. 
<br>
This same problem also appeared at the time that we were using openmpi 1.3
<br>
<p>How could this problem be solved ?
<br>
<p>(for more info about the system see attachments)
<br>
<p>Thx,
<br>
<p>Werner Van Geit
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12638.php">Werner Van Geit: "Re: [OMPI users] Segmentation fault in mca_btl_tcp"</a>
<li><strong>Previous message:</strong> <a href="12636.php">Ben.Kuppers_at_[hidden]: "[OMPI users] import/export issues on Windows"</a>
<li><strong>In reply to:</strong> <a href="12634.php">Werner Van Geit: "[OMPI users] Segmentation fault in mca_btl_tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12638.php">Werner Van Geit: "Re: [OMPI users] Segmentation fault in mca_btl_tcp"</a>
<li><strong>Reply:</strong> <a href="12638.php">Werner Van Geit: "Re: [OMPI users] Segmentation fault in mca_btl_tcp"</a>
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
