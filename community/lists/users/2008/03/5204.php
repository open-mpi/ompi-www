<?
$subject_val = "Re: [OMPI users] openmpi-1.2.5 and globus-4.0.5";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 14 23:01:33 2008" -->
<!-- isoreceived="20080315030133" -->
<!-- sent="Fri, 14 Mar 2008 21:01:19 -0600" -->
<!-- isosent="20080315030119" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-1.2.5 and globus-4.0.5" -->
<!-- id="C400981F.4A09%rhc_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="F2107172-0F8F-483B-B3E9-7D32C1352FFC_at_cisco.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-14 23:01:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5205.php">Rolly Ng: "Re: [OMPI users] Please help &quot;orte_init failed error&quot; running simple MPI code"</a>
<li><strong>Previous message:</strong> <a href="5203.php">Jeff Squyres: "Re: [OMPI users] RPM build errors when creating multiple rpms"</a>
<li><strong>In reply to:</strong> <a href="5200.php">Jeff Squyres: "Re: [OMPI users] openmpi-1.2.5 and globus-4.0.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5206.php">Ralph Castain: "Re: [OMPI users] openmpi-1.2.5 and globus-4.0.5"</a>
<li><strong>Reply:</strong> <a href="5206.php">Ralph Castain: "Re: [OMPI users] openmpi-1.2.5 and globus-4.0.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The problem here is that you are attempting to start the application
<br>
processes without using our mpirun.  We call this a &quot;standalone&quot; launch.
<br>
<p>Unfortunately, OMPI doesn't currently understand how to do a standalone
<br>
launch - ORTE will get confused and abort, as you experienced. There are two
<br>
ways to fix this:
<br>
<p>1. someone could write a Globus launcher for ORTE. I don't think this would
<br>
be terribly hard. You would then use our mpirun to start the job after
<br>
getting an allocation via some grid-compatible resource manager.
<br>
<p>2. once we get standalone operations working, you could do what you tried.
<br>
You will likely have to write an ESS component for Globus so the processes
<br>
can figure out their rank.
<br>
<p>I have done some prototyping for standalone launch, and expect to have at
<br>
least one working example in our development trunk later this month.
<br>
However, we currently don't plan to release standalone support until
<br>
probably 1.3.2, which likely won't come out for a few months.
<br>
<p>Hope that helps
<br>
Ralph
<br>
<p><p>On 3/14/08 5:40 PM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I don't know if anyone has tried to run Open MPI with globus before.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; One requirement that Open MPI currently has is that all nodes must be
</span><br>
<span class="quotelev1">&gt; reachable to each other via TCP.  Is that true in your globus
</span><br>
<span class="quotelev1">&gt; environment?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 10, 2008, at 11:01 AM, Christoph Spielmann wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi everybody!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I try to get OpenMPI and Globus to cooperate. These are the steps i
</span><br>
<span class="quotelev2">&gt;&gt; executed in order to get OpenMPI working:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &#128; export PATH=/opt/openmpi/bin/:$PATH
</span><br>
<span class="quotelev2">&gt;&gt; &#128; /opt/globus/setup/globus/setup-globus-job-manager-fork
</span><br>
<span class="quotelev2">&gt;&gt; checking for mpiexec... /opt/openmpi/bin//mpiexec
</span><br>
<span class="quotelev2">&gt;&gt; checking for mpirun... /opt/openmpi/bin//mpirun
</span><br>
<span class="quotelev2">&gt;&gt; find-fork-tools: creating ./config.status
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating fork.pm
</span><br>
<span class="quotelev2">&gt;&gt; &#128; restart VDT (includes GRAM, WSGRAM, mysql, rls...)
</span><br>
<span class="quotelev2">&gt;&gt; As you can see the necessary OpenMPI-executables are recognized
</span><br>
<span class="quotelev2">&gt;&gt; correctly by setup-globus-job-manager-fork. But when i actually try
</span><br>
<span class="quotelev2">&gt;&gt; to execute a simple mpi-program using globus-job-run i get this:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; globus-job-run localhost -x '(jobType=mpi)' -np 2 -s ./hypercube 0
</span><br>
<span class="quotelev2">&gt;&gt; [hydra:10168] [0,0,0] ORTE_ERROR_LOG: Error in file runtime/
</span><br>
<span class="quotelev2">&gt;&gt; orte_init_stage1.c at line 312
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; It looks like orte_init failed for some reason; your parallel
</span><br>
<span class="quotelev2">&gt;&gt; process is
</span><br>
<span class="quotelev2">&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt;&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev2">&gt;&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev2">&gt;&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   orte_pls_base_select failed
</span><br>
<span class="quotelev2">&gt;&gt;   --&gt; Returned value -1 instead of ORTE_SUCCESS
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [hydra:10168] [0,0,0] ORTE_ERROR_LOG: Error in file runtime/
</span><br>
<span class="quotelev2">&gt;&gt; orte_system_init.c at line 42
</span><br>
<span class="quotelev2">&gt;&gt; [hydra:10168] [0,0,0] ORTE_ERROR_LOG: Error in file runtime/
</span><br>
<span class="quotelev2">&gt;&gt; orte_init.c at line 52
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Open RTE was unable to initialize properly.  The error occured while
</span><br>
<span class="quotelev2">&gt;&gt; attempting to orte_init().  Returned value -1 instead of ORTE_SUCCESS.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The MPI-program itself is okey:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; which mpirun &amp;&amp; mpirun -np 2 hypercube 0
</span><br>
<span class="quotelev2">&gt;&gt; /opt/openmpi/bin/mpirun
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 received broadcast message 'MPI_Broadcast with hypercube
</span><br>
<span class="quotelev2">&gt;&gt; topology' from Process 0
</span><br>
<span class="quotelev2">&gt;&gt; Process 1 received broadcast message 'MPI_Broadcast with hypercube
</span><br>
<span class="quotelev2">&gt;&gt; topology' from Process 0
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From what i read in the mailing list i think that something is
</span><br>
<span class="quotelev2">&gt;&gt; wrong with the pls and globus. But i have no idea what could be
</span><br>
<span class="quotelev2">&gt;&gt; wrong not to speak of how it could be fixed ;). so if someone would
</span><br>
<span class="quotelev2">&gt;&gt; have an idea how this could be fixed, i'd be glad to hear it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Christoph
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5205.php">Rolly Ng: "Re: [OMPI users] Please help &quot;orte_init failed error&quot; running simple MPI code"</a>
<li><strong>Previous message:</strong> <a href="5203.php">Jeff Squyres: "Re: [OMPI users] RPM build errors when creating multiple rpms"</a>
<li><strong>In reply to:</strong> <a href="5200.php">Jeff Squyres: "Re: [OMPI users] openmpi-1.2.5 and globus-4.0.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5206.php">Ralph Castain: "Re: [OMPI users] openmpi-1.2.5 and globus-4.0.5"</a>
<li><strong>Reply:</strong> <a href="5206.php">Ralph Castain: "Re: [OMPI users] openmpi-1.2.5 and globus-4.0.5"</a>
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
