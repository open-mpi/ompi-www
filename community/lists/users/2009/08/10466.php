<?
$subject_val = "[OMPI users] mca_pml_ob1_send blocks";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 24 14:19:51 2009" -->
<!-- isoreceived="20090824181951" -->
<!-- sent="Mon, 24 Aug 2009 11:18:28 -0700" -->
<!-- isosent="20090824181828" -->
<!-- name="Shaun Jackman" -->
<!-- email="sjackman_at_[hidden]" -->
<!-- subject="[OMPI users] mca_pml_ob1_send blocks" -->
<!-- id="4A92D974.7030706_at_bcgsc.ca" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] mca_pml_ob1_send blocks<br>
<strong>From:</strong> Shaun Jackman (<em>sjackman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-24 14:18:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10467.php">Shaun Jackman: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<li><strong>Previous message:</strong> <a href="10465.php">matthew.piehl_at_[hidden]: "[OMPI users] Bug? openMPI interpretation of SLURM environment variables"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10467.php">Shaun Jackman: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<li><strong>Reply:</strong> <a href="10467.php">Shaun Jackman: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<li><strong>Reply:</strong> <a href="10481.php">Jeff Squyres: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm seeing MPI_Send block in mca_pml_ob1_send. The packet is shorter 
<br>
than the eager transmit limit for shared memory (3300 bytes &lt; 4096 
<br>
bytes). I'm trying to determine if MPI_Send is blocking due to a 
<br>
deadlock. Will MPI_Send block even when sending a packet eagerly?
<br>
<p>Thanks,
<br>
Shaun
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10467.php">Shaun Jackman: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<li><strong>Previous message:</strong> <a href="10465.php">matthew.piehl_at_[hidden]: "[OMPI users] Bug? openMPI interpretation of SLURM environment variables"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10467.php">Shaun Jackman: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<li><strong>Reply:</strong> <a href="10467.php">Shaun Jackman: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<li><strong>Reply:</strong> <a href="10481.php">Jeff Squyres: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
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
