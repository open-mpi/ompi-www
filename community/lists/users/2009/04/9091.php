<?
$subject_val = "[OMPI users] running problem on Dell blade server, confirm 2d21ce3ce8be64d8104b3ad71b8c59e2514a72eb";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr 25 11:59:31 2009" -->
<!-- isoreceived="20090425155931" -->
<!-- sent="Sat, 25 Apr 2009 17:59:24 +0200" -->
<!-- isosent="20090425155924" -->
<!-- name="Anton Starikov" -->
<!-- email="ant.starikov_at_[hidden]" -->
<!-- subject="[OMPI users] running problem on Dell blade server, confirm 2d21ce3ce8be64d8104b3ad71b8c59e2514a72eb" -->
<!-- id="C4112669-231E-4C71-8CC9-A6FCC8236DE4_at_gmail.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] running problem on Dell blade server, confirm 2d21ce3ce8be64d8104b3ad71b8c59e2514a72eb<br>
<strong>From:</strong> Anton Starikov (<em>ant.starikov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-25 11:59:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9092.php">Alex Margolin: "Re: [OMPI users] Open-MPI Presentation"</a>
<li><strong>Previous message:</strong> <a href="9090.php">Jeff Squyres: "Re: [OMPI users] few Problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9142.php">Jeff Squyres: "Re: [OMPI users] running problem on Dell blade server, confirm 2d21ce3ce8be64d8104b3ad71b8c59e2514a72eb"</a>
<li><strong>Reply:</strong> <a href="9142.php">Jeff Squyres: "Re: [OMPI users] running problem on Dell blade server, confirm 2d21ce3ce8be64d8104b3ad71b8c59e2514a72eb"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I can confirm that I have exactly the same problem, also on Dell  
<br>
system, even with latest openpmpi.
<br>
<p>Our system is:
<br>
<p>Dell M905
<br>
OpenSUSE 11.1
<br>
kernel: 2.6.27.21-0.1-default
<br>
ofed-1.4-21.12 from SUSE repositories.
<br>
OpenMPI-1.3.2
<br>
<p><p>But what I can also add, it not only affect openmpi, if this messages  
<br>
are triggered after mpirun:
<br>
[node032][[9340,1],11][btl_openib_component.c:3002:poll_device] error  
<br>
polling HP CQ with -2 errno says Success
<br>
<p>Then IB stack hangs. You cannot even reload it, have to reboot node.
<br>
<p>Anton.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9092.php">Alex Margolin: "Re: [OMPI users] Open-MPI Presentation"</a>
<li><strong>Previous message:</strong> <a href="9090.php">Jeff Squyres: "Re: [OMPI users] few Problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9142.php">Jeff Squyres: "Re: [OMPI users] running problem on Dell blade server, confirm 2d21ce3ce8be64d8104b3ad71b8c59e2514a72eb"</a>
<li><strong>Reply:</strong> <a href="9142.php">Jeff Squyres: "Re: [OMPI users] running problem on Dell blade server, confirm 2d21ce3ce8be64d8104b3ad71b8c59e2514a72eb"</a>
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
