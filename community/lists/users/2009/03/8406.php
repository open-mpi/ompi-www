<?
$subject_val = "Re: [OMPI users] Lower performance on a Gigabit node compared toinfiniband node";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 12 08:31:18 2009" -->
<!-- isoreceived="20090312123118" -->
<!-- sent="Thu, 12 Mar 2009 12:31:13 +0000" -->
<!-- isosent="20090312123113" -->
<!-- name="Igor Kozin" -->
<!-- email="i.n.kozin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Lower performance on a Gigabit node compared toinfiniband node" -->
<!-- id="fd21f64d0903120531y52a2210dt2ddeac4526b79794_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="cb60cbc40903112355v59473dacld10ac197a0b9d76f_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Lower performance on a Gigabit node compared toinfiniband node<br>
<strong>From:</strong> Igor Kozin (<em>i.n.kozin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-12 08:31:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8407.php">Mikael Djurfeldt: "[OMPI users] Problem in MPI::Finalize when freeing intercommunicators"</a>
<li><strong>Previous message:</strong> <a href="8405.php">Sangamesh B: "Re: [OMPI users] Lower performance on a Gigabit node compared toinfiniband node"</a>
<li><strong>In reply to:</strong> <a href="8405.php">Sangamesh B: "Re: [OMPI users] Lower performance on a Gigabit node compared toinfiniband node"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Sangamesh,
<br>
I'd look into making sure that the node you are using is not running
<br>
anything in parallel.
<br>
Make sure you allocate a whole node and it is clean from previous jobs.
<br>
Best,
<br>
INK
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8406/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8407.php">Mikael Djurfeldt: "[OMPI users] Problem in MPI::Finalize when freeing intercommunicators"</a>
<li><strong>Previous message:</strong> <a href="8405.php">Sangamesh B: "Re: [OMPI users] Lower performance on a Gigabit node compared toinfiniband node"</a>
<li><strong>In reply to:</strong> <a href="8405.php">Sangamesh B: "Re: [OMPI users] Lower performance on a Gigabit node compared toinfiniband node"</a>
<!-- nextthread="start" -->
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
