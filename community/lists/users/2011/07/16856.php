<?
$subject_val = "[OMPI users] Error-Open MPI over Infiniband: polling LP CQ with status LOCAL LENGTH ERROR";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  8 09:38:35 2011" -->
<!-- isoreceived="20110708133835" -->
<!-- sent="Fri, 8 Jul 2011 09:38:27 -0400" -->
<!-- isosent="20110708133827" -->
<!-- name="yanyg_at_[hidden]" -->
<!-- email="yanyg_at_[hidden]" -->
<!-- subject="[OMPI users] Error-Open MPI over Infiniband: polling LP CQ with status LOCAL LENGTH ERROR" -->
<!-- id="4E16D013.8290.443E871_at_localhost" -->
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
<strong>Subject:</strong> [OMPI users] Error-Open MPI over Infiniband: polling LP CQ with status LOCAL LENGTH ERROR<br>
<strong>From:</strong> <a href="mailto:yanyg_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Error-Open%20MPI%20over%20Infiniband:%20polling%20LP%20CQ%20with%20status%20LOCAL%20LENGTH%20ERROR"><em>yanyg_at_[hidden]</em></a><br>
<strong>Date:</strong> 2011-07-08 09:38:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16857.php">Vlad Popa: "[OMPI users] Pinning of openmpi to certain defined cores possible"</a>
<li><strong>Previous message:</strong> <a href="16855.php">yanyg_at_[hidden]: "Re: [OMPI users] mpirun does not propagate environment from master node to slave nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16877.php">Yevgeny Kliteynik: "Re: [OMPI users] Error-Open MPI over Infiniband: polling LP CQ with status LOCAL LENGTH ERROR"</a>
<li><strong>Reply:</strong> <a href="16877.php">Yevgeny Kliteynik: "Re: [OMPI users] Error-Open MPI over Infiniband: polling LP CQ with status LOCAL LENGTH ERROR"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>The message says :
<br>
<p>[[17549,1],0][btl_openib_component.c:3224:handle_wc] from 
<br>
gulftown to: gulftown error polling LP CQ with status LOCAL 
<br>
LENGTH ERROR status number 1 for wr_id 492359816 opcode 
<br>
32767  vendor error 105 qp_idx 3
<br>
<p>This is very arcane to me, the same test ran when only one MPI 
<br>
process on each node, but when we switch to two MPI processes 
<br>
on each node, then this error message comes up. Anything I could 
<br>
do? Anything related to infiniband configuration, as guessed form 
<br>
the string &quot;vendor error 105 qp_idx 3&quot;?
<br>
<p>Thanks,
<br>
Yiguang
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16857.php">Vlad Popa: "[OMPI users] Pinning of openmpi to certain defined cores possible"</a>
<li><strong>Previous message:</strong> <a href="16855.php">yanyg_at_[hidden]: "Re: [OMPI users] mpirun does not propagate environment from master node to slave nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16877.php">Yevgeny Kliteynik: "Re: [OMPI users] Error-Open MPI over Infiniband: polling LP CQ with status LOCAL LENGTH ERROR"</a>
<li><strong>Reply:</strong> <a href="16877.php">Yevgeny Kliteynik: "Re: [OMPI users] Error-Open MPI over Infiniband: polling LP CQ with status LOCAL LENGTH ERROR"</a>
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
