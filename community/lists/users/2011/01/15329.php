<?
$subject_val = "[OMPI users] CQ errors";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 10 09:06:12 2011" -->
<!-- isoreceived="20110110140612" -->
<!-- sent="Mon, 10 Jan 2011 14:06:06 +0000" -->
<!-- isosent="20110110140606" -->
<!-- name="Michael Di Domenico" -->
<!-- email="mdidomenico4_at_[hidden]" -->
<!-- subject="[OMPI users] CQ errors" -->
<!-- id="AANLkTimxv7Vu=AH9=KSgo04+icOC07ssuRCFvJ9gaUGU_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] CQ errors<br>
<strong>From:</strong> Michael Di Domenico (<em>mdidomenico4_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-10 09:06:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15330.php">Peter Kjellström: "Re: [OMPI users] CQ errors"</a>
<li><strong>Previous message:</strong> <a href="15328.php">Ashley Pittman: "Re: [OMPI users] mixing send and bcast"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15330.php">Peter Kjellström: "Re: [OMPI users] CQ errors"</a>
<li><strong>Reply:</strong> <a href="15330.php">Peter Kjellström: "Re: [OMPI users] CQ errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm not sure if these are being reported from OpenMPI or through
<br>
OpenMPI from OpenFabrics, but i figured this would be a good place to
<br>
start
<br>
<p>On one node we received the below errors, i'm not sure i under the
<br>
error sequence, hopefully someone can shed some light on what
<br>
happened.
<br>
<p>[[5691,1],49][btl_openib_component.c:3294:handle_wc] from node27 to:
<br>
node28 error polling HP CQ with status WORK_REQUEST FLUSHED ERROR
<br>
status number 5 for wr_id c30b100 opcode 128 vendor error 0 qp_idx 0
<br>
[[5691,1],49][btl_openib_component.c:3294:handle_wc] from node26 to:
<br>
node28 error polling LP CQ with status RETRY EXCEEDED ERROR status
<br>
number 12 for wr_id 1755c900 opcode 1 vendor error 0 qp_idx 0
<br>
[[5691,1],49][btl_openib_component.c:3294:handle_wc] from (null) to:
<br>
node28 error polling HP CQ with status WORK_REQUEST FLUSHED ERROR
<br>
status number 5 for wr_id 1779b180 opcode 128 vendor error 0 qp_idx 0
<br>
[[5691,1],49][btl_openib_component.c:3294:handle_wc] from node20 to:
<br>
node28 error polling HP CQ with status WORK_REQUEST FLUSHED ERROR
<br>
status number 5 for wr_id 8e1aa80 opcode 128 vendor error 0 qp_idx 0
<br>
[[5691,1],49][btl_openib_component.c:3294:handle_wc] from node24 to:
<br>
node28 error polling LP CQ with status RETRY EXCEEDED ERROR status
<br>
number 12 for wr_id 1164b600 opcode 1 vendor error 0 qp_idx 0
<br>
[[5691,1],49][btl_openib_component.c:3294:handle_wc] from (null) to:
<br>
node28 error polling HP CQ with status WORK_REQUEST FLUSHED ERROR
<br>
status number 5 for wr_id 118c3f80 opcode 128 vendor error 0 qp_idx 0
<br>
[[5691,1],49][btl_openib_component.c:3294:handle_wc] from node12 to:
<br>
node28 error polling HP CQ with status WORK_REQUEST FLUSHED ERROR
<br>
status number 5 for wr_id 1b8f0080 opcode 128 vendor error 0 qp_idx 0
<br>
<p>It was the only node out of a 75 node run that spit out the error.  I
<br>
rechecked the node, no symbol/link recovery errors on the network and
<br>
ran Pallas between it and several other machines with no errors
<br>
<p>network is qlogic qdr end to end, openmpi 1.5 and ofed 1.5.2 (q stack)
<br>
<p>thanks
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15330.php">Peter Kjellström: "Re: [OMPI users] CQ errors"</a>
<li><strong>Previous message:</strong> <a href="15328.php">Ashley Pittman: "Re: [OMPI users] mixing send and bcast"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15330.php">Peter Kjellström: "Re: [OMPI users] CQ errors"</a>
<li><strong>Reply:</strong> <a href="15330.php">Peter Kjellström: "Re: [OMPI users] CQ errors"</a>
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
