<?
$subject_val = "[OMPI users] busy waiting and oversubscriptions";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 25 23:30:13 2014" -->
<!-- isoreceived="20140326033013" -->
<!-- sent="Tue, 25 Mar 2014 20:30:09 -0700" -->
<!-- isosent="20140326033009" -->
<!-- name="Ross Boylan" -->
<!-- email="ross_at_[hidden]" -->
<!-- subject="[OMPI users] busy waiting and oversubscriptions" -->
<!-- id="1395804609.27857.144.camel_at_localhost" -->
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
<strong>Subject:</strong> [OMPI users] busy waiting and oversubscriptions<br>
<strong>From:</strong> Ross Boylan (<em>ross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-25 23:30:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23969.php">Andreas Schäfer: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<li><strong>Previous message:</strong> <a href="23967.php">Dave Love: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23969.php">Andreas Schäfer: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<li><strong>Reply:</strong> <a href="23969.php">Andreas Schäfer: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Even when &quot;idle&quot;, MPI processes use all the CPU.  I thought I remember
<br>
someone saying that they will be low priority, and so not pose much of
<br>
an obstacle to other uses of the CPU.
<br>
<p>At any rate, my question is whether, if I have processes that spend most
<br>
of their time waiting to receive a message, I can put more of them than
<br>
I have physical cores without much slowdown?
<br>
<p>E.g.  With 8 cores and 8 processes doing real work, can I add a couple
<br>
extra processes that mostly wait?
<br>
<p>Does it make any difference if there's hyperthreading with, e.g., 16
<br>
virtual CPUs based on 8 physical ones?  In general I try to limit to the
<br>
number of physical cores.
<br>
<p>Thanks.
<br>
Ross Boylan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23969.php">Andreas Schäfer: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<li><strong>Previous message:</strong> <a href="23967.php">Dave Love: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23969.php">Andreas Schäfer: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<li><strong>Reply:</strong> <a href="23969.php">Andreas Schäfer: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
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
