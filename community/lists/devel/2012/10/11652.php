<?
$subject_val = "[OMPI devel] removal of grpcomm hier in openmpi 1.6.2 ?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 26 09:45:12 2012" -->
<!-- isoreceived="20121026134512" -->
<!-- sent="Fri, 26 Oct 2012 15:45:04 +0200" -->
<!-- isosent="20121026134504" -->
<!-- name="Guillaume.Papaure_at_[hidden]" -->
<!-- email="Guillaume.Papaure_at_[hidden]" -->
<!-- subject="[OMPI devel] removal of grpcomm hier in openmpi 1.6.2 ?" -->
<!-- id="OFEBC82615.FAE6420D-ONC1257AA3.0049859F-C1257AA3.004B8951_at_bull.net" -->
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
<strong>Subject:</strong> [OMPI devel] removal of grpcomm hier in openmpi 1.6.2 ?<br>
<strong>From:</strong> <a href="mailto:Guillaume.Papaure_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20removal%20of%20grpcomm%20hier%20in%20openmpi%201.6.2%20?"><em>Guillaume.Papaure_at_[hidden]</em></a><br>
<strong>Date:</strong> 2012-10-26 09:45:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11653.php">Ralph Castain: "Re: [OMPI devel] removal of grpcomm hier in openmpi 1.6.2 ?"</a>
<li><strong>Previous message:</strong> <a href="11651.php">Lirong Jian: "Re: [OMPI devel] OMPI devel] NIC Failover and Message Stripping of Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11653.php">Ralph Castain: "Re: [OMPI devel] removal of grpcomm hier in openmpi 1.6.2 ?"</a>
<li><strong>Reply:</strong> <a href="11653.php">Ralph Castain: "Re: [OMPI devel] removal of grpcomm hier in openmpi 1.6.2 ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
We've noticed that, since ticket #3260, the grpcomm hier has been deleted. 
<br>
Unfortunatly it is mandatory to use the ess slurmd. Actually we are using 
<br>
this ess to work with slurm when starting mpi jobs with srun (without 
<br>
mpirun).
<br>
In this case the grpcomm hier works fine, even if it is reintroduced in a 
<br>
openmpi 1.6.2.
<br>
Do you plan to reintroduce it in a future release ?
<br>
<p>Thanks,
<br>
Guillaume
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11652/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11653.php">Ralph Castain: "Re: [OMPI devel] removal of grpcomm hier in openmpi 1.6.2 ?"</a>
<li><strong>Previous message:</strong> <a href="11651.php">Lirong Jian: "Re: [OMPI devel] OMPI devel] NIC Failover and Message Stripping of Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11653.php">Ralph Castain: "Re: [OMPI devel] removal of grpcomm hier in openmpi 1.6.2 ?"</a>
<li><strong>Reply:</strong> <a href="11653.php">Ralph Castain: "Re: [OMPI devel] removal of grpcomm hier in openmpi 1.6.2 ?"</a>
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
