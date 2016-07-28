<?
$subject_val = "Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 23 11:27:35 2010" -->
<!-- isoreceived="20100323152735" -->
<!-- sent="Tue, 23 Mar 2010 10:27:31 -0500" -->
<!-- isosent="20100323152731" -->
<!-- name="fengguang tian" -->
<!-- email="fernyabc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI" -->
<!-- id="958403f51003230827od0ffbc2w35a07926df39adb2_at_mail.gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="9108753b1003230823p6edb3c14g3d5fdd6b5c86677_at_mail.gmail.com" -->
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
<strong>From:</strong> fengguang tian (<em>fernyabc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-23 11:27:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12404.php">Fernando Lemos: "Re: [OMPI users] problem with opal_net_private_ipv4"</a>
<li><strong>Previous message:</strong> <a href="12402.php">fengguang tian: "[OMPI users] ompi-checkpoint hangs when using in multiple clusters"</a>
<li><strong>In reply to:</strong> <a href="12401.php">Fernando Lemos: "Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12405.php">Fernando Lemos: "Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI"</a>
<li><strong>Reply:</strong> <a href="12405.php">Fernando Lemos: "Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have created the shared file system. but I created a /mirror at root
<br>
directory,not at the $HOME directory,is that the
<br>
problem? thank you
<br>
<p>cheers
<br>
fengguang
<br>
<p>On Tue, Mar 23, 2010 at 10:23 AM, Fernando Lemos &lt;fernandotcl_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; On Mon, Mar 22, 2010 at 8:20 PM, fengguang tian &lt;fernyabc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I set up a cluster of 18 nodes using Open MPI and BLCR library, and the
</span><br>
<span class="quotelev1">&gt; MPI
</span><br>
<span class="quotelev2">&gt; &gt; program runs well on the clusters,
</span><br>
<span class="quotelev2">&gt; &gt; but how to checkpoint the MPI program on this clusters?
</span><br>
<span class="quotelev2">&gt; &gt; for example:
</span><br>
<span class="quotelev2">&gt; &gt; here is what I do for a test:
</span><br>
<span class="quotelev2">&gt; &gt; mpiu_at_nimbus: /mirror$ mpirun -np 50 --hostfile .mpihostfile -am
</span><br>
<span class="quotelev1">&gt; ft-enable-cr
</span><br>
<span class="quotelev2">&gt; &gt; hellompi
</span><br>
<span class="quotelev2">&gt; &gt;  the program will run on the clusters
</span><br>
<span class="quotelev2">&gt; &gt; then ,I enter:
</span><br>
<span class="quotelev2">&gt; &gt; mpiu_at_nimbus: /mirror$ ompi-checkpoint -term $(pidof mpirun)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; but the MPI program are not terminated as what happaned on single
</span><br>
<span class="quotelev2">&gt; &gt; machine,although it created a checkpoint file&#147;ompi_global_snapshot_
</span><br>
<span class="quotelev2">&gt; &gt; 14030.ckpt&#147; in the home directory on master node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are you using OpenMPI 1.4 without a shared file system mounted at
</span><br>
<span class="quotelev1">&gt; $HOME? If yes, then take a look here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2010/03/12246.php">http://www.open-mpi.org/community/lists/users/2010/03/12246.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12403/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12404.php">Fernando Lemos: "Re: [OMPI users] problem with opal_net_private_ipv4"</a>
<li><strong>Previous message:</strong> <a href="12402.php">fengguang tian: "[OMPI users] ompi-checkpoint hangs when using in multiple clusters"</a>
<li><strong>In reply to:</strong> <a href="12401.php">Fernando Lemos: "Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12405.php">Fernando Lemos: "Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI"</a>
<li><strong>Reply:</strong> <a href="12405.php">Fernando Lemos: "Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI"</a>
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
