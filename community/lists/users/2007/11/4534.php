<?
$subject_val = "[OMPI users] [openMPI-infiniband] openMPI in IB network when openSM with LASH is running";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 28 05:37:16 2007" -->
<!-- isoreceived="20071128103716" -->
<!-- sent="Wed, 28 Nov 2007 16:07:11 +0530" -->
<!-- isosent="20071128103711" -->
<!-- name="Keshetti Mahesh" -->
<!-- email="keshetti85-student_at_[hidden]" -->
<!-- subject="[OMPI users] [openMPI-infiniband] openMPI in IB network when openSM with LASH is running" -->
<!-- id="829ded920711280237n6bc78128rd90e1f81ac7dbc91_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] [openMPI-infiniband] openMPI in IB network when openSM with LASH is running<br>
<strong>From:</strong> Keshetti Mahesh (<em>keshetti85-student_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-28 05:37:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4535.php">Neeraj Chourasia: "[OMPI users] version 1.3"</a>
<li><strong>Previous message:</strong> <a href="4533.php">Jeff Squyres: "Re: [OMPI users] OpenIB problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4539.php">Jeff Squyres: "Re: [OMPI users] [openMPI-infiniband] openMPI in IB network when openSM with LASH is running"</a>
<li><strong>Reply:</strong> <a href="4539.php">Jeff Squyres: "Re: [OMPI users] [openMPI-infiniband] openMPI in IB network when openSM with LASH is running"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Has anyone in the list ever tested openMPI in infiniband network
<br>
in which openSM is running with LASH routing algorithm enabled?
<br>
<p>I haven't tested the above case but i could foresee a problem
<br>
because LASH routing algorithm in openSM uses virtual
<br>
lanes (VL) which are directly mapped with service levels (SL).
<br>
And LASH routing algorithm assigns different VLs (SLs) to different
<br>
paths in the network. This SL &lt;-&gt; path association is available only
<br>
through the subnet manager (openSM) during connection establishment.
<br>
But AFAIK, openMPI don't use the services of subnet manager for
<br>
connection establishment between nodes. So I want to know whether anyone
<br>
thought about it and working on it or not.
<br>
<p>regards,
<br>
Mahesh
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4535.php">Neeraj Chourasia: "[OMPI users] version 1.3"</a>
<li><strong>Previous message:</strong> <a href="4533.php">Jeff Squyres: "Re: [OMPI users] OpenIB problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4539.php">Jeff Squyres: "Re: [OMPI users] [openMPI-infiniband] openMPI in IB network when openSM with LASH is running"</a>
<li><strong>Reply:</strong> <a href="4539.php">Jeff Squyres: "Re: [OMPI users] [openMPI-infiniband] openMPI in IB network when openSM with LASH is running"</a>
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
