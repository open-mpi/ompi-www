<?
$subject_val = "[OMPI users] Torque+BCLR+OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 11 02:54:37 2010" -->
<!-- isoreceived="20100211075437" -->
<!-- sent="Thu, 11 Feb 2010 08:54:35 +0100" -->
<!-- isosent="20100211075435" -->
<!-- name="Anton Starikov" -->
<!-- email="ant.starikov_at_[hidden]" -->
<!-- subject="[OMPI users] Torque+BCLR+OpenMPI" -->
<!-- id="39B6A0E9-32C9-4618-A532-901511503A72_at_gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Torque+BCLR+OpenMPI<br>
<strong>From:</strong> Anton Starikov (<em>ant.starikov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-11 02:54:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12077.php">Repsher, Stephen J: "[OMPI users] Seg fault with PBS Pro 10.2"</a>
<li><strong>Previous message:</strong> <a href="12075.php">Jeff Squyres: "Re: [OMPI users] parameters for newer IB card on older OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12158.php">Josh Hursey: "Re: [OMPI users] Torque+BCLR+OpenMPI"</a>
<li><strong>Reply:</strong> <a href="12158.php">Josh Hursey: "Re: [OMPI users] Torque+BCLR+OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi!
<br>
I'm trying to implement checkpointing on out cluster, and I have obvious question.
<br>
<p>I guess this was implemented many times by other users, so I would like is someone share experience with me.
<br>
<p>With serial/multithreaded jobs it is kind of clear. But for parallel?
<br>
<p>We have &quot;fat&quot; 16-core nodes, so user use both OpenMP and MPI programs.
<br>
<p>Shell I just do perform some checks in my checkpointing script and call ompi-checkpoint if after tests I figure our that there is MPI job?
<br>
<p>What is &quot;usual&quot; way?
<br>
<p>Best,
<br>
<p>Anton
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12077.php">Repsher, Stephen J: "[OMPI users] Seg fault with PBS Pro 10.2"</a>
<li><strong>Previous message:</strong> <a href="12075.php">Jeff Squyres: "Re: [OMPI users] parameters for newer IB card on older OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12158.php">Josh Hursey: "Re: [OMPI users] Torque+BCLR+OpenMPI"</a>
<li><strong>Reply:</strong> <a href="12158.php">Josh Hursey: "Re: [OMPI users] Torque+BCLR+OpenMPI"</a>
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
