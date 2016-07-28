<?
$subject_val = "[OMPI users] openmpi credits for eager messages";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  1 15:05:31 2008" -->
<!-- isoreceived="20080201200531" -->
<!-- sent="Fri, 1 Feb 2008 15:05:27 -0500" -->
<!-- isosent="20080201200527" -->
<!-- name="Sacerdoti, Federico" -->
<!-- email="Federico.Sacerdoti_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi credits for eager messages" -->
<!-- id="A14F91CBBBA3014385A806944C9BEF1BAE7C38_at_maildrd1.nyc.deshaw.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] openmpi credits for eager messages<br>
<strong>From:</strong> Sacerdoti, Federico (<em>Federico.Sacerdoti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-01 15:05:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4948.php">George Bosilca: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Previous message:</strong> <a href="4946.php">Keith Hellman: "[OMPI users] Dynamically changing machine file data"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4948.php">George Bosilca: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Reply:</strong> <a href="4948.php">George Bosilca: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Reply:</strong> <a href="4949.php">8mj6tc902_at_[hidden]: "Re: [OMPI users] openmpi credits for eager messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am readying an openmpi 1.2.5 software stack for use with a
<br>
many-thousand core cluster. I have a question about sending small
<br>
messages that I hope can be answered on this list. 
<br>
<p>I was under the impression that if node A wants to send a small MPI
<br>
message to node B, it must have a credit to do so. The credit assures A
<br>
that B has enough buffer space to accept the message. Credits are
<br>
required by the mpi layer regardless of the BTL transport layer used.
<br>
<p>I have been told by a Voltaire tech that this is not so, the credits are
<br>
used by the infiniband transport layer to reliably send a message, and
<br>
is not an openmpi feature.
<br>
<p>Thanks,
<br>
Federico
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4948.php">George Bosilca: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Previous message:</strong> <a href="4946.php">Keith Hellman: "[OMPI users] Dynamically changing machine file data"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4948.php">George Bosilca: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Reply:</strong> <a href="4948.php">George Bosilca: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Reply:</strong> <a href="4949.php">8mj6tc902_at_[hidden]: "Re: [OMPI users] openmpi credits for eager messages"</a>
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
