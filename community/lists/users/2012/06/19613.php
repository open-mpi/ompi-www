<?
$subject_val = "Re: [OMPI users] Executions in two different machines";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 18 10:46:29 2012" -->
<!-- isoreceived="20120618144629" -->
<!-- sent="Mon, 18 Jun 2012 16:45:15 +0200" -->
<!-- isosent="20120618144515" -->
<!-- name="Harald Servat" -->
<!-- email="harald.servat_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Executions in two different machines" -->
<!-- id="1340030715.22608.2.camel_at_dell" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="E12AD8B7-66B1-4516-BD39-E2038C734D2C_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Executions in two different machines<br>
<strong>From:</strong> Harald Servat (<em>harald.servat_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-18 10:45:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19614.php">Jeff Squyres: "Re: [OMPI users] NVCC mpi.h: error: attribute &quot;__deprecated__&quot; does not take arguments"</a>
<li><strong>Previous message:</strong> <a href="19612.php">Dmitry N. Mikushin: "Re: [OMPI users] NVCC mpi.h: error: attribute &quot;__deprecated__&quot; does not take arguments"</a>
<li><strong>In reply to:</strong> <a href="19607.php">Jeff Squyres: "Re: [OMPI users] Executions in two different machines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19616.php">Jeff Squyres: "Re: [OMPI users] Executions in two different machines"</a>
<li><strong>Reply:</strong> <a href="19616.php">Jeff Squyres: "Re: [OMPI users] Executions in two different machines"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you for your answers. I've tried that but it doesn't seem to work.
<br>
<p>The latest command I've issued is
<br>
<p># $HOME/aplic/openmpi/1.6/bin/mpirun -np 1 -host
<br>
localhost ./init_barrier_fini : -x
<br>
LD_LIBRARY_PATH=/home/Computational/harald/aplic/openmpi/1.6/lib
<br>
-prefix /home/Computational/harald/aplic/openmpi/1.6/ -x
<br>
PATH=/home/Computational/harald/aplic/openmpi/1.6/bin -np 1 -host
<br>
M2 /home/Computational/harald/tests/mpi/multi-machine/init_barrier_fini
<br>
<p>But I get the same error. Please, notice the message 
<br>
bash: /home/harald/aplic/openmpi/1.6/bin/orted: El fitxer o directori no
<br>
existeix
<br>
which means that it cannot find orted. That orted exists in the
<br>
localhost but not in the other machine.
<br>
<p>Additionally, I've tried the following command, but it gets blocked...
<br>
<p># mpirun -display-map -np 1 -host localhost /bin/date : -np 1 -host
<br>
M2  /bin/date
<br>
<p>&nbsp;========================   JOB MAP   ========================
<br>
<p>&nbsp;Data for node: dell	Num procs: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [880,1] Process rank: 0
<br>
<p>&nbsp;Data for node: knights1.bsc.es	Num procs: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [880,1] Process rank: 1
<br>
<p>&nbsp;=============================================================
<br>
<p>Any ideas?
<br>
<p>Thank you.
<br>
<p><p>El dl 18 de 06 de 2012 a les 10:04 -0400, en/na Jeff Squyres va
<br>
escriure:
<br>
<span class="quotelev1">&gt; You might also want to set up your shell startup files on each machine to reflect the proper PATH and LD_LIBRARY_PATH.  E.g., if you have a different .bashrc on each machine, just have it set PATH and LD_LIBARY_PATH properly *for that machine*.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To be clear: it's usually easiest to install OMPI to the same prefix on every machine, but there's no technical requirement from OMPI to do so.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 18, 2012, at 10:00 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Try adding &quot;-x LD_LIBRARY_PATH=&lt;remote-prefix&gt;&quot; to your mpirun cmd line
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Jun 18, 2012, at 7:11 AM, Harald Servat wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hello list,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I'd like to use OpenMPI to execute an MPI application in two different
</span><br>
<span class="quotelev3">&gt; &gt;&gt; machines.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Up to now, I've configured and installed OpenMPI 1.6 in my two systems
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (each on a different directory). When I execute binaries within a system
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (in any) the application works well. However when I try to execute in
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the two systems, it does not work, in fact it complains it cannot find
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &quot;orted&quot;. This is the command I try to run and its output
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #  $HOME/aplic/openmpi/1.6/bin/mpirun -display-map --machinefile hosts
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -np 2 /bin/date
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ========================   JOB MAP   ========================
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Data for node: M1	Num procs: 1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 	Process OMPI jobid: [6021,1] Process rank: 0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Data for node: M2	Num procs: 1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 	Process OMPI jobid: [6021,1] Process rank: 1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; =============================================================
</span><br>
<span class="quotelev3">&gt; &gt;&gt; bash: /home/harald/aplic/openmpi/1.6/bin/orted: El fitxer o directori no
</span><br>
<span class="quotelev3">&gt; &gt;&gt; existeix
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; A daemon (pid 19598) died unexpectedly with status 127 while attempting
</span><br>
<span class="quotelev3">&gt; &gt;&gt; to launch so we are aborting.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev3">&gt; &gt;&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev3">&gt; &gt;&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev3">&gt; &gt;&gt; that caused that situation.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; My guess is that the spawn process cannot find orted in M2 because the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; installation prefix of M1 and M2 differ. Is my guess correct? As I
</span><br>
<span class="quotelev3">&gt; &gt;&gt; cannot change the prefix of the two installation, how can I tell mpirun
</span><br>
<span class="quotelev3">&gt; &gt;&gt; to look for orted in a different place? After looking at the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; documentation, I've tried with --prefix and --launch-agent without
</span><br>
<span class="quotelev3">&gt; &gt;&gt; success.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thank you very much in advance.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; WARNING / LEGAL TEXT: This message is intended only for the use of the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; individual or entity to which it is addressed and may contain
</span><br>
<span class="quotelev3">&gt; &gt;&gt; information which is privileged, confidential, proprietary, or exempt
</span><br>
<span class="quotelev3">&gt; &gt;&gt; from disclosure under applicable law. If you are not the intended
</span><br>
<span class="quotelev3">&gt; &gt;&gt; recipient or the person responsible for delivering the message to the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; intended recipient, you are strictly prohibited from disclosing,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; distributing, copying, or in any way using this message. If you have
</span><br>
<span class="quotelev3">&gt; &gt;&gt; received this communication in error, please notify the sender and
</span><br>
<span class="quotelev3">&gt; &gt;&gt; destroy and delete any copies you may have received.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.bsc.es/disclaimer">http://www.bsc.es/disclaimer</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><p>WARNING / LEGAL TEXT: This message is intended only for the use of the
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
<li><strong>Next message:</strong> <a href="19614.php">Jeff Squyres: "Re: [OMPI users] NVCC mpi.h: error: attribute &quot;__deprecated__&quot; does not take arguments"</a>
<li><strong>Previous message:</strong> <a href="19612.php">Dmitry N. Mikushin: "Re: [OMPI users] NVCC mpi.h: error: attribute &quot;__deprecated__&quot; does not take arguments"</a>
<li><strong>In reply to:</strong> <a href="19607.php">Jeff Squyres: "Re: [OMPI users] Executions in two different machines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19616.php">Jeff Squyres: "Re: [OMPI users] Executions in two different machines"</a>
<li><strong>Reply:</strong> <a href="19616.php">Jeff Squyres: "Re: [OMPI users] Executions in two different machines"</a>
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
