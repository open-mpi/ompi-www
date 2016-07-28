<?
$subject_val = "Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 23 11:23:56 2010" -->
<!-- isoreceived="20100323152356" -->
<!-- sent="Tue, 23 Mar 2010 12:23:50 -0300" -->
<!-- isosent="20100323152350" -->
<!-- name="Fernando Lemos" -->
<!-- email="fernandotcl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI" -->
<!-- id="9108753b1003230823p6edb3c14g3d5fdd6b5c86677_at_mail.gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="958403f51003221620h70a06c8au1c4cc538c88c58e2_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI<br>
<strong>From:</strong> Fernando Lemos (<em>fernandotcl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-23 11:23:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12402.php">fengguang tian: "[OMPI users] ompi-checkpoint hangs when using in multiple clusters"</a>
<li><strong>Previous message:</strong> <a href="12400.php">Nicolas Niclausse: "[OMPI users] problem with  opal_net_private_ipv4"</a>
<li><strong>In reply to:</strong> <a href="12395.php">fengguang tian: "[OMPI users] questions about checkpoint/restart on multiple clusters of MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12403.php">fengguang tian: "Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI"</a>
<li><strong>Reply:</strong> <a href="12403.php">fengguang tian: "Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Mar 22, 2010 at 8:20 PM, fengguang tian &lt;fernyabc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I set up a cluster of 18 nodes using Open MPI and BLCR library, and the MPI
</span><br>
<span class="quotelev1">&gt; program runs well on the clusters,
</span><br>
<span class="quotelev1">&gt; but how to checkpoint the MPI program on this clusters?
</span><br>
<span class="quotelev1">&gt; for example:
</span><br>
<span class="quotelev1">&gt; here is what I do for a test:
</span><br>
<span class="quotelev1">&gt; mpiu_at_nimbus: /mirror$ mpirun -np 50 --hostfile .mpihostfile -am ft-enable-cr
</span><br>
<span class="quotelev1">&gt; hellompi
</span><br>
<span class="quotelev1">&gt; &#160;the program will run on the clusters
</span><br>
<span class="quotelev1">&gt; then ,I enter:
</span><br>
<span class="quotelev1">&gt; mpiu_at_nimbus: /mirror$ ompi-checkpoint -term $(pidof mpirun)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but the MPI program are not terminated as what happaned on single
</span><br>
<span class="quotelev1">&gt; machine,although it created a checkpoint file&#147;ompi_global_snapshot_
</span><br>
<span class="quotelev1">&gt; 14030.ckpt&#147; in the home directory on master node.
</span><br>
<p>Are you using OpenMPI 1.4 without a shared file system mounted at
<br>
$HOME? If yes, then take a look here:
<br>
<p><a href="http://www.open-mpi.org/community/lists/users/2010/03/12246.php">http://www.open-mpi.org/community/lists/users/2010/03/12246.php</a>
<br>
<p>Regards,
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12402.php">fengguang tian: "[OMPI users] ompi-checkpoint hangs when using in multiple clusters"</a>
<li><strong>Previous message:</strong> <a href="12400.php">Nicolas Niclausse: "[OMPI users] problem with  opal_net_private_ipv4"</a>
<li><strong>In reply to:</strong> <a href="12395.php">fengguang tian: "[OMPI users] questions about checkpoint/restart on multiple clusters of MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12403.php">fengguang tian: "Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI"</a>
<li><strong>Reply:</strong> <a href="12403.php">fengguang tian: "Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI"</a>
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
