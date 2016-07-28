<?
$subject_val = "[OMPI users] mlx4 error - looking for guidance";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  4 21:34:14 2009" -->
<!-- isoreceived="20090305023414" -->
<!-- sent="Wed, 4 Mar 2009 18:34:10 -0800 (PST)" -->
<!-- isosent="20090305023410" -->
<!-- name="Jeff Layton" -->
<!-- email="laytonjb_at_[hidden]" -->
<!-- subject="[OMPI users] mlx4 error - looking for guidance" -->
<!-- id="453902.14984.qm_at_web80707.mail.mud.yahoo.com" -->
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
<strong>Subject:</strong> [OMPI users] mlx4 error - looking for guidance<br>
<strong>From:</strong> Jeff Layton (<em>laytonjb_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-04 21:34:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8307.php">Shinta Bonnefoy: "[OMPI users] Runtime error only on one node."</a>
<li><strong>Previous message:</strong> <a href="8305.php">Doug Reeder: "Re: [OMPI users] libnuma under ompi 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8310.php">Pavel Shamis (Pasha): "Re: [OMPI users] mlx4 error - looking for guidance"</a>
<li><strong>Reply:</strong> <a href="8310.php">Pavel Shamis (Pasha): "Re: [OMPI users] mlx4 error - looking for guidance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Evening everyone,
<br>
<p>I'm running a CFD code on IB and I've encountered an error I'm not sure about and I'm looking for some guidance on where to start looking. Here's the error:
<br>
<p>mlx4: local QP operation err (QPN 260092, WQE index 9a9e0000, vendor syndrome 6f, opcode = 5e)
<br>
[0,1,6][btl_openib_component.c:1392:btl_openib_component_progress] from compute-2-0.local to: compute-2-0.local erro
<br>
r polling HP CQ with status LOCAL QP OPERATION ERROR status number 2 for wr_id 37742320 opcode 0
<br>
mpirun noticed that job rank 0 with PID 21220 on node compute-2-0.local exited on signal 15 (Terminated).
<br>
78 additional processes aborted (not shown)
<br>
<p><p>This is openmpi-1.2.9rc2 (sorry - need to upgrade to 1.3.0). The code works correctly for smaller cases, but when I run larger cases I get this error.
<br>
<p>I'm heading to bed but I'll check email tomorrow (so to sleep and run but it's been a long day).
<br>
<p>TIA!
<br>
<p>Jeff
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8306/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8307.php">Shinta Bonnefoy: "[OMPI users] Runtime error only on one node."</a>
<li><strong>Previous message:</strong> <a href="8305.php">Doug Reeder: "Re: [OMPI users] libnuma under ompi 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8310.php">Pavel Shamis (Pasha): "Re: [OMPI users] mlx4 error - looking for guidance"</a>
<li><strong>Reply:</strong> <a href="8310.php">Pavel Shamis (Pasha): "Re: [OMPI users] mlx4 error - looking for guidance"</a>
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
