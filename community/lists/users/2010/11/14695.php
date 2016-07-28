<?
$subject_val = "[OMPI users] Infiniband error";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  4 19:39:28 2010" -->
<!-- isoreceived="20101104233928" -->
<!-- sent="Fri, 5 Nov 2010 00:39:23 +0100" -->
<!-- isosent="20101104233923" -->
<!-- name="Ondrej Marsalek" -->
<!-- email="ondrej.marsalek_at_[hidden]" -->
<!-- subject="[OMPI users] Infiniband error" -->
<!-- id="AANLkTim16LV_akYct0HumYaowAtxAE-Mbc=MJqmFRtOu_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Infiniband error<br>
<strong>From:</strong> Ondrej Marsalek (<em>ondrej.marsalek_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-04 19:39:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14696.php">Jack Bryan: "[OMPI users] Open MPI data transfer error"</a>
<li><strong>Previous message:</strong> <a href="14694.php">Sai Sudheesh: "[OMPI users] OpenMPI checkpoint/restart"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14742.php">Jeff Squyres: "Re: [OMPI users] Infiniband error"</a>
<li><strong>Reply:</strong> <a href="14742.php">Jeff Squyres: "Re: [OMPI users] Infiniband error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>I would like to ask for help with understanding an error message I get
<br>
when communication using Open MPI 1.4.1 over Infiniband fails. After
<br>
several hours of operation, communication with one particular node
<br>
(f24) fails with something like:
<br>
<p>[[20265,1],79][btl_openib_component.c:2951:handle_wc] from f05 to: f24
<br>
error polling LP CQ with status INVALID REQUEST ERROR status number 9
<br>
for wr_id 309134592 opcode 1  vendor error 138 qp_idx 2
<br>
[[20265,1],39][btl_openib_component.c:2951:handle_wc] from f24 to: f05
<br>
error polling LP CQ with status WORK REQUEST FLUSHED ERROR status
<br>
number 5 for wr_id 313731584 opcode 1  vendor error 249 qp_idx 2
<br>
<p>This is reproducible in the sense that it happens repeatedly, but so
<br>
far I was not able to create a test case that would trigger the
<br>
problem. It happens after hours of smooth operation. One of the nodes
<br>
involved is always f24. When I leave it out of the job, I get stable a
<br>
run with no trouble. Is this a hardware error or something else? Is
<br>
there something I can do try to locate the problem better? Where can I
<br>
find what the error codes mean?
<br>
<p>Thanks,
<br>
Ondrej Marsalek
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14696.php">Jack Bryan: "[OMPI users] Open MPI data transfer error"</a>
<li><strong>Previous message:</strong> <a href="14694.php">Sai Sudheesh: "[OMPI users] OpenMPI checkpoint/restart"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14742.php">Jeff Squyres: "Re: [OMPI users] Infiniband error"</a>
<li><strong>Reply:</strong> <a href="14742.php">Jeff Squyres: "Re: [OMPI users] Infiniband error"</a>
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
