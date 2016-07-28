<?
$subject_val = "[OMPI users] One additional (unwanted) process when using dynamical process management";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 21 13:02:53 2009" -->
<!-- isoreceived="20090121180253" -->
<!-- sent="Wed, 21 Jan 2009 19:02:48 +0100" -->
<!-- isosent="20090121180248" -->
<!-- name="Evgeniy Gromov" -->
<!-- email="Evgeniy.Gromov_at_[hidden]" -->
<!-- subject="[OMPI users] One additional (unwanted) process when using dynamical process management" -->
<!-- id="49776348.8000900_at_pci.uni-heidelberg.de" -->
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
<strong>Subject:</strong> [OMPI users] One additional (unwanted) process when using dynamical process management<br>
<strong>From:</strong> Evgeniy Gromov (<em>Evgeniy.Gromov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-21 13:02:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7752.php">Ralph Castain: "Re: [OMPI users] One additional (unwanted) process when using dynamical process management"</a>
<li><strong>Previous message:</strong> <a href="7750.php">Ralph Castain: "Re: [OMPI users] openmpi 1.3 and --wdir problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7752.php">Ralph Castain: "Re: [OMPI users] One additional (unwanted) process when using dynamical process management"</a>
<li><strong>Reply:</strong> <a href="7752.php">Ralph Castain: "Re: [OMPI users] One additional (unwanted) process when using dynamical process management"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear OpenMPI users,
<br>
<p>I have the following (problem) related to OpenMPI:
<br>
I have recently compiled with OPenMPI the new (4-1)
<br>
Global Arrays package using ARMCI_NETWORK=MPI-SPAWN,
<br>
which implies the use of dynamic process management
<br>
realised in MPI2. It got compiled and tested successfully.
<br>
However when it is spawning on different nodes (machine) one
<br>
additional process on each node appears, i.e. if nodes=2:ppn=2
<br>
then on each node there are 3 running processes. In the case
<br>
when it runs just on one pc with a few cores (let say nodes=1:ppn=4),
<br>
the number of processes exactly equals the number of cpus (ppn)
<br>
requested and there is no additional process.
<br>
I am wondering whether it is normal behavior. Thanks!
<br>
<p>Best regards,
<br>
Evgeniy
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7752.php">Ralph Castain: "Re: [OMPI users] One additional (unwanted) process when using dynamical process management"</a>
<li><strong>Previous message:</strong> <a href="7750.php">Ralph Castain: "Re: [OMPI users] openmpi 1.3 and --wdir problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7752.php">Ralph Castain: "Re: [OMPI users] One additional (unwanted) process when using dynamical process management"</a>
<li><strong>Reply:</strong> <a href="7752.php">Ralph Castain: "Re: [OMPI users] One additional (unwanted) process when using dynamical process management"</a>
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
