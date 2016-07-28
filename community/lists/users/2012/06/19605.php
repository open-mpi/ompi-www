<?
$subject_val = "[OMPI users] Executions in two different machines";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 18 09:12:51 2012" -->
<!-- isoreceived="20120618131251" -->
<!-- sent="Mon, 18 Jun 2012 15:11:40 +0200" -->
<!-- isosent="20120618131140" -->
<!-- name="Harald Servat" -->
<!-- email="harald.servat_at_[hidden]" -->
<!-- subject="[OMPI users] Executions in two different machines" -->
<!-- id="1340025100.1879.9.camel_at_dell" -->
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
<strong>Subject:</strong> [OMPI users] Executions in two different machines<br>
<strong>From:</strong> Harald Servat (<em>harald.servat_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-18 09:11:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19606.php">Ralph Castain: "Re: [OMPI users] Executions in two different machines"</a>
<li><strong>Previous message:</strong> <a href="19604.php">TERRY DONTJE: "Re: [OMPI users] MPI_Comm_spawn and exit of parent process."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19606.php">Ralph Castain: "Re: [OMPI users] Executions in two different machines"</a>
<li><strong>Reply:</strong> <a href="19606.php">Ralph Castain: "Re: [OMPI users] Executions in two different machines"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello list,
<br>
<p>&nbsp;&nbsp;I'd like to use OpenMPI to execute an MPI application in two different
<br>
machines.
<br>
<p>&nbsp;&nbsp;Up to now, I've configured and installed OpenMPI 1.6 in my two systems
<br>
(each on a different directory). When I execute binaries within a system
<br>
(in any) the application works well. However when I try to execute in
<br>
the two systems, it does not work, in fact it complains it cannot find
<br>
&quot;orted&quot;. This is the command I try to run and its output
<br>
<p>#  $HOME/aplic/openmpi/1.6/bin/mpirun -display-map --machinefile hosts
<br>
-np 2 /bin/date
<br>
<p>&nbsp;========================   JOB MAP   ========================
<br>
<p>&nbsp;Data for node: M1	Num procs: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [6021,1] Process rank: 0
<br>
<p>&nbsp;Data for node: M2	Num procs: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [6021,1] Process rank: 1
<br>
<p>&nbsp;=============================================================
<br>
bash: /home/harald/aplic/openmpi/1.6/bin/orted: El fitxer o directori no
<br>
existeix
<br>
--------------------------------------------------------------------------
<br>
A daemon (pid 19598) died unexpectedly with status 127 while attempting
<br>
to launch so we are aborting.
<br>
<p>There may be more information reported by the environment (see above).
<br>
<p>This may be because the daemon was unable to find all the needed shared
<br>
libraries on the remote node. You may set your LD_LIBRARY_PATH to have
<br>
the
<br>
location of the shared libraries on the remote nodes and this will
<br>
automatically be forwarded to the remote nodes.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that the job aborted, but has no info as to the process
<br>
that caused that situation.
<br>
--------------------------------------------------------------------------
<br>
<p>&nbsp;&nbsp;My guess is that the spawn process cannot find orted in M2 because the
<br>
installation prefix of M1 and M2 differ. Is my guess correct? As I
<br>
cannot change the prefix of the two installation, how can I tell mpirun
<br>
to look for orted in a different place? After looking at the
<br>
documentation, I've tried with --prefix and --launch-agent without
<br>
success.
<br>
<p>Thank you very much in advance.
<br>
<p><p><p><p><p>WARNING / LEGAL TEXT: This message is intended only for the use of the
<br>
individual or entity to which it is addressed and may contain
<br>
information which is privileged, confidential, proprietary, or exempt
<br>
from disclosure under applicable law. If you are not the intended
<br>
recipient or the person responsible for delivering the message to the
<br>
intended recipient, you are strictly prohibited from disclosing,
<br>
distributing, copying, or in any way using this message. If you have
<br>
received this communication in error, please notify the sender and
<br>
destroy and delete any copies you may have received.
<br>
<p><a href="http://www.bsc.es/disclaimer">http://www.bsc.es/disclaimer</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19606.php">Ralph Castain: "Re: [OMPI users] Executions in two different machines"</a>
<li><strong>Previous message:</strong> <a href="19604.php">TERRY DONTJE: "Re: [OMPI users] MPI_Comm_spawn and exit of parent process."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19606.php">Ralph Castain: "Re: [OMPI users] Executions in two different machines"</a>
<li><strong>Reply:</strong> <a href="19606.php">Ralph Castain: "Re: [OMPI users] Executions in two different machines"</a>
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
