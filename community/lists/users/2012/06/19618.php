<?
$subject_val = "Re: [OMPI users] Executions in two different machines";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 18 11:13:38 2012" -->
<!-- isoreceived="20120618151338" -->
<!-- sent="Mon, 18 Jun 2012 17:12:27 +0200" -->
<!-- isosent="20120618151227" -->
<!-- name="Harald Servat" -->
<!-- email="harald.servat_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Executions in two different machines" -->
<!-- id="1340032347.22608.9.camel_at_dell" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="3E65E409-8FD5-4095-BB98-260BAF1AB0BC_at_cisco.com" -->
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
<strong>Date:</strong> 2012-06-18 11:12:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19619.php">Jeff Squyres: "Re: [OMPI users] Executions in two different machines"</a>
<li><strong>Previous message:</strong> <a href="19617.php">Rolf vandeVaart: "Re: [OMPI users] NVCC mpi.h: error: attribute &quot;__deprecated__&quot; does not take arguments"</a>
<li><strong>In reply to:</strong> <a href="19616.php">Jeff Squyres: "Re: [OMPI users] Executions in two different machines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19619.php">Jeff Squyres: "Re: [OMPI users] Executions in two different machines"</a>
<li><strong>Reply:</strong> <a href="19619.php">Jeff Squyres: "Re: [OMPI users] Executions in two different machines"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
El dl 18 de 06 de 2012 a les 10:56 -0400, en/na Jeff Squyres va
<br>
escriure:
<br>
<span class="quotelev1">&gt; On Jun 18, 2012, at 10:45 AM, Harald Servat wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; # $HOME/aplic/openmpi/1.6/bin/mpirun -np 1 -host
</span><br>
<span class="quotelev2">&gt; &gt; localhost ./init_barrier_fini : -x
</span><br>
<span class="quotelev2">&gt; &gt; LD_LIBRARY_PATH=/home/Computational/harald/aplic/openmpi/1.6/lib
</span><br>
<span class="quotelev2">&gt; &gt; -prefix /home/Computational/harald/aplic/openmpi/1.6/ -x
</span><br>
<span class="quotelev2">&gt; &gt; PATH=/home/Computational/harald/aplic/openmpi/1.6/bin -np 1 -host
</span><br>
<span class="quotelev2">&gt; &gt; M2 /home/Computational/harald/tests/mpi/multi-machine/init_barrier_fini
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Try without using the absolute pathname to mpirun -- it reacts differently if you specify the absolute pathname vs. just &quot;mpirun&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also, if you setup your .bashrc's right, then you don't need the -x LD_LIBRARY_PATH... clause.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Thank you Jeff. Now with the following commands starts, but it gets
<br>
blocked before starting. May be this problem of firewalls? Do I need
<br>
both that M1 and M2 can log into the other machine through ssh?
<br>
<p>Thank you!
<br>
<p># mpirun -v -display-map -np 1 -host localhost ./init_barrier_fini : -np
<br>
1 -host
<br>
M2  /home/Computational/harald/tests/mpi/multi-machine/init_barrier_fini
<br>
<p>&nbsp;========================   JOB MAP   ========================
<br>
<p>&nbsp;Data for node: M1	Num procs: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [89,1] Process rank: 0
<br>
<p>&nbsp;Data for node: M2	Num procs: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [89,1] Process rank: 1
<br>
<p>&nbsp;=============================================================
<br>
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
<li><strong>Next message:</strong> <a href="19619.php">Jeff Squyres: "Re: [OMPI users] Executions in two different machines"</a>
<li><strong>Previous message:</strong> <a href="19617.php">Rolf vandeVaart: "Re: [OMPI users] NVCC mpi.h: error: attribute &quot;__deprecated__&quot; does not take arguments"</a>
<li><strong>In reply to:</strong> <a href="19616.php">Jeff Squyres: "Re: [OMPI users] Executions in two different machines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19619.php">Jeff Squyres: "Re: [OMPI users] Executions in two different machines"</a>
<li><strong>Reply:</strong> <a href="19619.php">Jeff Squyres: "Re: [OMPI users] Executions in two different machines"</a>
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
