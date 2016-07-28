<?
$subject_val = "[OMPI users] Problem mpi";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 24 05:48:25 2014" -->
<!-- isoreceived="20140624094825" -->
<!-- sent="Tue, 24 Jun 2014 11:48:24 +0200" -->
<!-- isosent="20140624094824" -->
<!-- name="Diego Sa&#195;&#186;l Carri&#195;&#179; Carri&#195;&#179;" -->
<!-- email="diego.carrio_at_[hidden]" -->
<!-- subject="[OMPI users] Problem mpi" -->
<!-- id="CACrBbZG8vGZtujw6ZvqHKz7rzwqcN8M_LjRzybWxDpU9U2Yc4g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Problem mpi<br>
<strong>From:</strong> Diego Sa&#195;&#186;l Carri&#195;&#179; Carri&#195;&#179; (<em>diego.carrio_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-24 05:48:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24693.php">Ralph Castain: "Re: [OMPI users] affinity issues under cpuset torque 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="24691.php">Maxime Boissonneault: "Re: [OMPI users] affinity issues under cpuset torque 1.8.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24706.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem mpi"</a>
<li><strong>Reply:</strong> <a href="24706.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem mpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>I have problems for a long time related with  mpirun. When I executed
<br>
mpirun (with my program) I obtained the next error after a while:
<br>
<p>.
<br>
.
<br>
.
<br>
.
<br>
.
<br>
<p>&nbsp;mlx4: local QP operation err (QPN c00054, WQE index a0000, vendor syndrome
<br>
6f, opcode = 5e)
<br>
[[64826,1],0][btl_openib_component.c:3497:handle_wc] from foner109 to:
<br>
foner111 error polling LP CQ with status LOCAL QP OPERATION ERROR status
<br>
number 2 for wr_id af58a8 opcode 128  vendor error 111 qp_idx 3
<br>
<p>mpirun has exited due to process rank 0 with PID 51754 on
<br>
node foner109 exiting improperly. There are two reasons this could occur:
<br>
<p>1. this process did not call &quot;init&quot; before exiting, but others in
<br>
the job did. This can cause a job to hang indefinitely while it waits
<br>
for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
<br>
then ALL processes must call &quot;init&quot; prior to termination.
<br>
<p>2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
<br>
By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
<br>
exiting or it will be considered an &quot;abnormal termination&quot;
<br>
<p>This may have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>
<p><p><p>I am using a cluster (42 nodes, with 20 processors and 64 Gb RAM for each
<br>
one). I want to use for example only 20 nodes, so I put:
<br>
<p>salloc -N20 --tasks-per-node=1 --cpus-per-task=20 -p thin(name of the node)
<br>
<p>mpirun -pernode [my_program]
<br>
<p><p>Could you help me to solve this problem?
<br>
<p>Best Regards,
<br>
Diego
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24692/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24693.php">Ralph Castain: "Re: [OMPI users] affinity issues under cpuset torque 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="24691.php">Maxime Boissonneault: "Re: [OMPI users] affinity issues under cpuset torque 1.8.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24706.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem mpi"</a>
<li><strong>Reply:</strong> <a href="24706.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem mpi"</a>
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
