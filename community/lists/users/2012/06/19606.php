<?
$subject_val = "Re: [OMPI users] Executions in two different machines";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 18 10:01:00 2012" -->
<!-- isoreceived="20120618140100" -->
<!-- sent="Mon, 18 Jun 2012 08:00:55 -0600" -->
<!-- isosent="20120618140055" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Executions in two different machines" -->
<!-- id="D72C0AD0-8B27-451B-B4B1-BB0819DB3A0E_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1340025100.1879.9.camel_at_dell" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-18 10:00:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19607.php">Jeff Squyres: "Re: [OMPI users] Executions in two different machines"</a>
<li><strong>Previous message:</strong> <a href="19605.php">Harald Servat: "[OMPI users] Executions in two different machines"</a>
<li><strong>In reply to:</strong> <a href="19605.php">Harald Servat: "[OMPI users] Executions in two different machines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19607.php">Jeff Squyres: "Re: [OMPI users] Executions in two different machines"</a>
<li><strong>Reply:</strong> <a href="19607.php">Jeff Squyres: "Re: [OMPI users] Executions in two different machines"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Try adding &quot;-x LD_LIBRARY_PATH=&lt;remote-prefix&gt;&quot; to your mpirun cmd line
<br>
<p><p>On Jun 18, 2012, at 7:11 AM, Harald Servat wrote:
<br>
<p><span class="quotelev1">&gt; Hello list,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  I'd like to use OpenMPI to execute an MPI application in two different
</span><br>
<span class="quotelev1">&gt; machines.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Up to now, I've configured and installed OpenMPI 1.6 in my two systems
</span><br>
<span class="quotelev1">&gt; (each on a different directory). When I execute binaries within a system
</span><br>
<span class="quotelev1">&gt; (in any) the application works well. However when I try to execute in
</span><br>
<span class="quotelev1">&gt; the two systems, it does not work, in fact it complains it cannot find
</span><br>
<span class="quotelev1">&gt; &quot;orted&quot;. This is the command I try to run and its output
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #  $HOME/aplic/openmpi/1.6/bin/mpirun -display-map --machinefile hosts
</span><br>
<span class="quotelev1">&gt; -np 2 /bin/date
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ========================   JOB MAP   ========================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Data for node: M1	Num procs: 1
</span><br>
<span class="quotelev1">&gt; 	Process OMPI jobid: [6021,1] Process rank: 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Data for node: M2	Num procs: 1
</span><br>
<span class="quotelev1">&gt; 	Process OMPI jobid: [6021,1] Process rank: 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; =============================================================
</span><br>
<span class="quotelev1">&gt; bash: /home/harald/aplic/openmpi/1.6/bin/orted: El fitxer o directori no
</span><br>
<span class="quotelev1">&gt; existeix
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A daemon (pid 19598) died unexpectedly with status 127 while attempting
</span><br>
<span class="quotelev1">&gt; to launch so we are aborting.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev1">&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev1">&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  My guess is that the spawn process cannot find orted in M2 because the
</span><br>
<span class="quotelev1">&gt; installation prefix of M1 and M2 differ. Is my guess correct? As I
</span><br>
<span class="quotelev1">&gt; cannot change the prefix of the two installation, how can I tell mpirun
</span><br>
<span class="quotelev1">&gt; to look for orted in a different place? After looking at the
</span><br>
<span class="quotelev1">&gt; documentation, I've tried with --prefix and --launch-agent without
</span><br>
<span class="quotelev1">&gt; success.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you very much in advance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WARNING / LEGAL TEXT: This message is intended only for the use of the
</span><br>
<span class="quotelev1">&gt; individual or entity to which it is addressed and may contain
</span><br>
<span class="quotelev1">&gt; information which is privileged, confidential, proprietary, or exempt
</span><br>
<span class="quotelev1">&gt; from disclosure under applicable law. If you are not the intended
</span><br>
<span class="quotelev1">&gt; recipient or the person responsible for delivering the message to the
</span><br>
<span class="quotelev1">&gt; intended recipient, you are strictly prohibited from disclosing,
</span><br>
<span class="quotelev1">&gt; distributing, copying, or in any way using this message. If you have
</span><br>
<span class="quotelev1">&gt; received this communication in error, please notify the sender and
</span><br>
<span class="quotelev1">&gt; destroy and delete any copies you may have received.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.bsc.es/disclaimer">http://www.bsc.es/disclaimer</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19607.php">Jeff Squyres: "Re: [OMPI users] Executions in two different machines"</a>
<li><strong>Previous message:</strong> <a href="19605.php">Harald Servat: "[OMPI users] Executions in two different machines"</a>
<li><strong>In reply to:</strong> <a href="19605.php">Harald Servat: "[OMPI users] Executions in two different machines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19607.php">Jeff Squyres: "Re: [OMPI users] Executions in two different machines"</a>
<li><strong>Reply:</strong> <a href="19607.php">Jeff Squyres: "Re: [OMPI users] Executions in two different machines"</a>
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
