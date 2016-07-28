<?
$subject_val = "[OMPI users] openmpi+torque: How run job in a subset of the allocation?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 27 08:10:37 2013" -->
<!-- isoreceived="20131127131037" -->
<!-- sent="Wed, 27 Nov 2013 14:10:26 +0100" -->
<!-- isosent="20131127131026" -->
<!-- name="Ola.Widlund_at_[hidden]" -->
<!-- email="Ola.Widlund_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi+torque: How run job in a subset of the allocation?" -->
<!-- id="OFA4E7679F.E4DAF2D4-ONC1257C30.004711A7-C1257C30.0048615B_at_se.abb.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="mailman.4151.1385510060.12083.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI users] openmpi+torque: How run job in a subset of the allocation?<br>
<strong>From:</strong> <a href="mailto:Ola.Widlund_at_[hidden]?Subject=Re:%20[OMPI%20users]%20openmpi%2Btorque:%20How%20run%20job%20in%20a%20subset%20of%20the%20allocation?"><em>Ola.Widlund_at_[hidden]</em></a><br>
<strong>Date:</strong> 2013-11-27 08:10:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23089.php">Daniel Cámpora: "[OMPI users] Multi-threading support for openib"</a>
<li><strong>Previous message:</strong> <a href="23087.php">George Bosilca: "Re: [OMPI users] Bug Iscatterv/Igatherv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23092.php">Ralph Castain: "Re: [OMPI users] openmpi+torque: How run job in a subset of the allocation?"</a>
<li><strong>Reply:</strong> <a href="23092.php">Ralph Castain: "Re: [OMPI users] openmpi+torque: How run job in a subset of the allocation?"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/12/23165.php">Ola.Widlund_at_[hidden]: "Re: [OMPI users] openmpi+torque: How run job in a subset of the allocation?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>We have an in-house application where we run two solvers in a loosely 
<br>
coupled manner: The first solver runs a timestep, then the second solver 
<br>
does work on the same timestep, etc. As the two solvers never execute at 
<br>
the same time, we would like to run the two solvers in the same allocation 
<br>
(launching mpirun once for each of them). RAM is not an issue, so there 
<br>
should not be any risk of excessive swapping degrading performance.
<br>
<p>We use openmpi-1.4.5 compiled with torque integration. The torque 
<br>
integration means we do not give a hostfile to mpirun, it will itself 
<br>
query torque for the allocation info. 
<br>
<p>Question: 
<br>
<p>Can we force one of the solvers to run in a *subset* of the full 
<br>
allocation? How do we do that? I read in the FAQ that providing a hostfile 
<br>
to mpirun in this case (when it's not needed due to torque integration) 
<br>
would cause a lot of problems...
<br>
<p>Thanks in advance,
<br>
<p>Ola
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23088/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23089.php">Daniel Cámpora: "[OMPI users] Multi-threading support for openib"</a>
<li><strong>Previous message:</strong> <a href="23087.php">George Bosilca: "Re: [OMPI users] Bug Iscatterv/Igatherv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23092.php">Ralph Castain: "Re: [OMPI users] openmpi+torque: How run job in a subset of the allocation?"</a>
<li><strong>Reply:</strong> <a href="23092.php">Ralph Castain: "Re: [OMPI users] openmpi+torque: How run job in a subset of the allocation?"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/12/23165.php">Ola.Widlund_at_[hidden]: "Re: [OMPI users] openmpi+torque: How run job in a subset of the allocation?"</a>
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
