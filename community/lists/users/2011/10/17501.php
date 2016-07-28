<?
$subject_val = "[OMPI users] OpenMPI with CPU of different speed.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  5 08:05:54 2011" -->
<!-- isoreceived="20111005120554" -->
<!-- sent="Wed, 05 Oct 2011 14:05:21 +0200" -->
<!-- isosent="20111005120521" -->
<!-- name="Micka&#235;l CAN&#201;VET" -->
<!-- email="canevet_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI with CPU of different speed." -->
<!-- id="1317816321.2841.90.camel_at_pc437.embl.fr" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI with CPU of different speed.<br>
<strong>From:</strong> Micka&#235;l CAN&#201;VET (<em>canevet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-05 08:05:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17502.php">Andreas Schäfer: "Re: [OMPI users] OpenMPI with CPU of different speed."</a>
<li><strong>Previous message:</strong> <a href="17500.php">Ralph Castain: "Re: [OMPI users] Private and public IP mixing."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17502.php">Andreas Schäfer: "Re: [OMPI users] OpenMPI with CPU of different speed."</a>
<li><strong>Reply:</strong> <a href="17502.php">Andreas Schäfer: "Re: [OMPI users] OpenMPI with CPU of different speed."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Is there a way to define a weight to the CPUs of the hosts. I have a
<br>
cluster made of machine from different generation and when I run a
<br>
process on it, the whole cluster is slowed down by the slowest node.
<br>
<p>What I'd like to do is something like that in my hostfile:
<br>
<p>oldest slots=4 weight=0.75
<br>
newer slots=8 weight=0.95
<br>
newest slots=12 weight=1
<br>
<p>So that CPUs of oldest (and slowest) machine gets less data to process.
<br>
<p>Thank you
<br>
Micka&#195;&#171;l
<br>
<p>
<br><p>
<p><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17501/signature.asc">This is a digitally signed message part</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17502.php">Andreas Schäfer: "Re: [OMPI users] OpenMPI with CPU of different speed."</a>
<li><strong>Previous message:</strong> <a href="17500.php">Ralph Castain: "Re: [OMPI users] Private and public IP mixing."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17502.php">Andreas Schäfer: "Re: [OMPI users] OpenMPI with CPU of different speed."</a>
<li><strong>Reply:</strong> <a href="17502.php">Andreas Schäfer: "Re: [OMPI users] OpenMPI with CPU of different speed."</a>
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
