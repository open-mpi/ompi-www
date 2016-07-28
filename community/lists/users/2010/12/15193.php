<?
$subject_val = "[OMPI users] Using (or not using) Torque/Moab under PBS Pro as the OpenMPI launcher";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 17 17:29:10 2010" -->
<!-- isoreceived="20101217222910" -->
<!-- sent="Fri, 17 Dec 2010 16:29:03 -0600" -->
<!-- isosent="20101217222903" -->
<!-- name="David Whitaker" -->
<!-- email="whitaker_at_[hidden]" -->
<!-- subject="[OMPI users] Using (or not using) Torque/Moab under PBS Pro as the OpenMPI launcher" -->
<!-- id="4D0BE42F.7080706_at_cray.com" -->
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
<strong>Subject:</strong> [OMPI users] Using (or not using) Torque/Moab under PBS Pro as the OpenMPI launcher<br>
<strong>From:</strong> David Whitaker (<em>whitaker_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-17 17:29:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15194.php">Brock Palen: "Re: [OMPI users] Using (or not using) Torque/Moab under PBS Pro as the OpenMPI launcher"</a>
<li><strong>Previous message:</strong> <a href="15192.php">Rob Latham: "Re: [OMPI users] MPI-IO problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15194.php">Brock Palen: "Re: [OMPI users] Using (or not using) Torque/Moab under PBS Pro as the OpenMPI launcher"</a>
<li><strong>Reply:</strong> <a href="15194.php">Brock Palen: "Re: [OMPI users] Using (or not using) Torque/Moab under PBS Pro as the OpenMPI launcher"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;At Cray, we have a a Cluster Compatibility Mode (CCM)
<br>
&nbsp;&nbsp;&nbsp;which runs under PBSPro. If we do a qsub,
<br>
&nbsp;&nbsp;&nbsp;we get an allocation of compute nodes and the first
<br>
&nbsp;&nbsp;&nbsp;node in the list of allocated nodes is considered the
<br>
&nbsp;&nbsp;&nbsp;&quot;head node&quot; of the &quot;Cluster&quot;.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;The list of allocated nodes is contained in
<br>
&nbsp;&nbsp;&nbsp;the file $PBS_NODEFILE.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To launch a command on the head node we type:
<br>
&nbsp;&nbsp;&nbsp;ccmrun COMMAND
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In the normal PBSPro environment, we launch
<br>
&nbsp;&nbsp;&nbsp;the OpenMPI mpirun as:
<br>
&nbsp;&nbsp;&nbsp;ccmrun ${OpenMPI_Install}/bin/mpirun &lt;options ..&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-hostfile host.list -np $NCPUS ./hello_mpi
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This all works great with the &quot;mpirun&quot; command
<br>
&nbsp;&nbsp;&nbsp;launching on the &quot;head node&quot; and the the mpirun
<br>
&nbsp;&nbsp;&nbsp;command using ssh/rsh to launch other processes
<br>
&nbsp;&nbsp;&nbsp;on the other nodes in the virtual cluster. Everything
<br>
&nbsp;&nbsp;&nbsp;works.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;On Cray sites, that use PBSPro/Torque/Moab, OpenMPI
<br>
&nbsp;&nbsp;&nbsp;detects that Torque/Moab is present and attempts
<br>
&nbsp;&nbsp;&nbsp;to use Torque/Moab to launch on other nodes. Because of
<br>
&nbsp;&nbsp;&nbsp;the way Cray has Torque/moab configured, this doesn't work.
<br>
&nbsp;&nbsp;&nbsp;This is not a problem with OpenMPI.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Is there an option to OpenMPI to tell it to ignore
<br>
&nbsp;&nbsp;&nbsp;Torque/Moab and use rsh/ssh and the -hostfile/hosts
<br>
&nbsp;&nbsp;&nbsp;even if Torque/Moab is detected?? I've looked through
<br>
&nbsp;&nbsp;&nbsp;the README and the FAQ but I haven't seen anything.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Many thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dave
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p><pre>
-- 
CCCCCCCCCCCCCCCCCCCCCCFFFFFFFFFFFFFFFFFFFFFFFFFDDDDDDDDDDDDDDDDDDDDD
David Whitaker, Ph.D.                              whitaker_at_[hidden]
Aerospace CFD Specialist                        phone: (651)605-9078
ISV Applications/Cray Inc                         fax: (651)605-9001
CCCCCCCCCCCCCCCCCCCCCCFFFFFFFFFFFFFFFFFFFFFFFFFDDDDDDDDDDDDDDDDDDDDD
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15194.php">Brock Palen: "Re: [OMPI users] Using (or not using) Torque/Moab under PBS Pro as the OpenMPI launcher"</a>
<li><strong>Previous message:</strong> <a href="15192.php">Rob Latham: "Re: [OMPI users] MPI-IO problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15194.php">Brock Palen: "Re: [OMPI users] Using (or not using) Torque/Moab under PBS Pro as the OpenMPI launcher"</a>
<li><strong>Reply:</strong> <a href="15194.php">Brock Palen: "Re: [OMPI users] Using (or not using) Torque/Moab under PBS Pro as the OpenMPI launcher"</a>
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
