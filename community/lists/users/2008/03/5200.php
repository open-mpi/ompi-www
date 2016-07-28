<?
$subject_val = "Re: [OMPI users] openmpi-1.2.5 and globus-4.0.5";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 14 19:41:15 2008" -->
<!-- isoreceived="20080314234115" -->
<!-- sent="Fri, 14 Mar 2008 19:40:45 -0400" -->
<!-- isosent="20080314234045" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-1.2.5 and globus-4.0.5" -->
<!-- id="F2107172-0F8F-483B-B3E9-7D32C1352FFC_at_cisco.com" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="47D54D4C.9030504_at_gup.jku.at" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi-1.2.5 and globus-4.0.5<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-14 19:40:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5201.php">Jeff Squyres: "Re: [OMPI users] Please help &quot;orte_init failed error&quot; running simple MPI code"</a>
<li><strong>Previous message:</strong> <a href="5199.php">Jeff Squyres: "Re: [OMPI users] Problem: openmpi using lam"</a>
<li><strong>In reply to:</strong> <a href="5166.php">Christoph Spielmann: "[OMPI users] openmpi-1.2.5 and globus-4.0.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5204.php">Ralph Castain: "Re: [OMPI users] openmpi-1.2.5 and globus-4.0.5"</a>
<li><strong>Reply:</strong> <a href="5204.php">Ralph Castain: "Re: [OMPI users] openmpi-1.2.5 and globus-4.0.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't know if anyone has tried to run Open MPI with globus before.
<br>
<p>One requirement that Open MPI currently has is that all nodes must be  
<br>
reachable to each other via TCP.  Is that true in your globus  
<br>
environment?
<br>
<p><p><p>On Mar 10, 2008, at 11:01 AM, Christoph Spielmann wrote:
<br>
<p><span class="quotelev1">&gt; Hi everybody!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I try to get OpenMPI and Globus to cooperate. These are the steps i  
</span><br>
<span class="quotelev1">&gt; executed in order to get OpenMPI working:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	&#149; export PATH=/opt/openmpi/bin/:$PATH
</span><br>
<span class="quotelev1">&gt; 	&#149; /opt/globus/setup/globus/setup-globus-job-manager-fork
</span><br>
<span class="quotelev1">&gt; checking for mpiexec... /opt/openmpi/bin//mpiexec
</span><br>
<span class="quotelev1">&gt; checking for mpirun... /opt/openmpi/bin//mpirun
</span><br>
<span class="quotelev1">&gt; find-fork-tools: creating ./config.status
</span><br>
<span class="quotelev1">&gt; config.status: creating fork.pm
</span><br>
<span class="quotelev1">&gt; 	&#149; restart VDT (includes GRAM, WSGRAM, mysql, rls...)
</span><br>
<span class="quotelev1">&gt; As you can see the necessary OpenMPI-executables are recognized  
</span><br>
<span class="quotelev1">&gt; correctly by setup-globus-job-manager-fork. But when i actually try  
</span><br>
<span class="quotelev1">&gt; to execute a simple mpi-program using globus-job-run i get this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; globus-job-run localhost -x '(jobType=mpi)' -np 2 -s ./hypercube 0
</span><br>
<span class="quotelev1">&gt; [hydra:10168] [0,0,0] ORTE_ERROR_LOG: Error in file runtime/ 
</span><br>
<span class="quotelev1">&gt; orte_init_stage1.c at line 312
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel  
</span><br>
<span class="quotelev1">&gt; process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   orte_pls_base_select failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned value -1 instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [hydra:10168] [0,0,0] ORTE_ERROR_LOG: Error in file runtime/ 
</span><br>
<span class="quotelev1">&gt; orte_system_init.c at line 42
</span><br>
<span class="quotelev1">&gt; [hydra:10168] [0,0,0] ORTE_ERROR_LOG: Error in file runtime/ 
</span><br>
<span class="quotelev1">&gt; orte_init.c at line 52
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Open RTE was unable to initialize properly.  The error occured while
</span><br>
<span class="quotelev1">&gt; attempting to orte_init().  Returned value -1 instead of ORTE_SUCCESS.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The MPI-program itself is okey:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; which mpirun &amp;&amp; mpirun -np 2 hypercube 0
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/bin/mpirun
</span><br>
<span class="quotelev1">&gt; Process 0 received broadcast message 'MPI_Broadcast with hypercube  
</span><br>
<span class="quotelev1">&gt; topology' from Process 0
</span><br>
<span class="quotelev1">&gt; Process 1 received broadcast message 'MPI_Broadcast with hypercube  
</span><br>
<span class="quotelev1">&gt; topology' from Process 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;From what i read in the mailing list i think that something is  
</span><br>
<span class="quotelev1">&gt; wrong with the pls and globus. But i have no idea what could be  
</span><br>
<span class="quotelev1">&gt; wrong not to speak of how it could be fixed ;). so if someone would  
</span><br>
<span class="quotelev1">&gt; have an idea how this could be fixed, i'd be glad to hear it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Christoph
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5201.php">Jeff Squyres: "Re: [OMPI users] Please help &quot;orte_init failed error&quot; running simple MPI code"</a>
<li><strong>Previous message:</strong> <a href="5199.php">Jeff Squyres: "Re: [OMPI users] Problem: openmpi using lam"</a>
<li><strong>In reply to:</strong> <a href="5166.php">Christoph Spielmann: "[OMPI users] openmpi-1.2.5 and globus-4.0.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5204.php">Ralph Castain: "Re: [OMPI users] openmpi-1.2.5 and globus-4.0.5"</a>
<li><strong>Reply:</strong> <a href="5204.php">Ralph Castain: "Re: [OMPI users] openmpi-1.2.5 and globus-4.0.5"</a>
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
