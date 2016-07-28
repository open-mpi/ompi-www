<?
$subject_val = "Re: [OMPI docs] help me!";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jun 21 14:22:38 2008" -->
<!-- isoreceived="20080621182238" -->
<!-- sent="Sat, 21 Jun 2008 14:22:28 -0400" -->
<!-- isosent="20080621182228" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI docs] help me!" -->
<!-- id="825D1111-6219-4BCB-BA79-22B16C69D112_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="898690.54709.qm_at_web55805.mail.re3.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI docs] help me!<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-21 14:22:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0116.php">Tim Mattox: "Re: [OMPI docs] question about ompi-checkpoint"</a>
<li><strong>Previous message:</strong> <a href="0114.php">Yen Phi: "[OMPI docs] help me!"</a>
<li><strong>In reply to:</strong> <a href="0114.php">Yen Phi: "[OMPI docs] help me!"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is more of a question for the user's list; you probably want to  
<br>
re-post it there.
<br>
<p>Also note that the checkpoint-restart capabilities are in pre-release  
<br>
v1.3 snapshot tarballs only; as such, it's in active development.
<br>
<p><p>On Jun 21, 2008, at 2:16 PM, Yen Phi wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; I run my job with OpenMPI and then checkpint it, it checkpoint when  
</span><br>
<span class="quotelev1">&gt; my job end. When I try to restart it, it notifies me that message. I  
</span><br>
<span class="quotelev1">&gt; don't know why. Please help me.
</span><br>
<span class="quotelev1">&gt;  [root_at_localhost ~]# mpirun -np 4 -am ft-enable-cr hello
</span><br>
<span class="quotelev1">&gt;  [root_at_localhost ~]# ompi-checkpoint  19632
</span><br>
<span class="quotelev1">&gt; Snapshot Ref.:   0 ompi_global_snapshot_19632.ckpt
</span><br>
<span class="quotelev1">&gt; [root_at_localhost ~]# ompi-restart ompi_global_snapshot_19632.ckpt
</span><br>
<span class="quotelev1">&gt; [localhost:19649] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [localhost:19649] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [localhost:19649] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [localhost:19649] Failing at address: 0x1
</span><br>
<span class="quotelev1">&gt; [localhost:19649] [ 0] [0x110440]
</span><br>
<span class="quotelev1">&gt; [localhost:19649] [ 1] /usr/local/lib/libopen-rte.so. 
</span><br>
<span class="quotelev1">&gt; 0(orte_rmaps_base_claim_slot+0x17b) [0x15db1f]
</span><br>
<span class="quotelev1">&gt; [localhost:19649] [ 2] /usr/local/lib/openmpi/ 
</span><br>
<span class="quotelev1">&gt; mca_rmaps_round_robin.so [0x23cb84]
</span><br>
<span class="quotelev1">&gt; [localhost:19649] [ 3] /usr/local/lib/openmpi/ 
</span><br>
<span class="quotelev1">&gt; mca_rmaps_round_robin.so [0x23d3ae]
</span><br>
<span class="quotelev1">&gt; [localhost:19649] [ 4] /usr/local/lib/libopen-rte.so. 
</span><br>
<span class="quotelev1">&gt; 0(orte_rmaps_base_map_job+0x105) [0x15c61d]
</span><br>
<span class="quotelev1">&gt; [localhost:19649] [ 5] /usr/local/lib/libopen-rte.so. 
</span><br>
<span class="quotelev1">&gt; 0(orte_plm_base_setup_job+0xd3) [0x156077]
</span><br>
<span class="quotelev1">&gt; [localhost:19649] [ 6] /usr/local/lib/openmpi/mca_plm_rsh.so  
</span><br>
<span class="quotelev1">&gt; [0x1fecc3]
</span><br>
<span class="quotelev1">&gt; [localhost:19649] [ 7] mpirun [0x804a79d]
</span><br>
<span class="quotelev1">&gt; [localhost:19649] [ 8] mpirun [0x8049e76]
</span><br>
<span class="quotelev1">&gt; [localhost:19649] [ 9] /lib/libc.so.6(__libc_start_main+0xe0)  
</span><br>
<span class="quotelev1">&gt; [0x9a0390]
</span><br>
<span class="quotelev1">&gt; [localhost:19649] [10] mpirun [0x8049da1]
</span><br>
<span class="quotelev1">&gt; [localhost:19649] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; Segmentation fault
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Yen
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; docs mailing list
</span><br>
<span class="quotelev1">&gt; docs_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/docs">http://www.open-mpi.org/mailman/listinfo.cgi/docs</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0116.php">Tim Mattox: "Re: [OMPI docs] question about ompi-checkpoint"</a>
<li><strong>Previous message:</strong> <a href="0114.php">Yen Phi: "[OMPI docs] help me!"</a>
<li><strong>In reply to:</strong> <a href="0114.php">Yen Phi: "[OMPI docs] help me!"</a>
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
