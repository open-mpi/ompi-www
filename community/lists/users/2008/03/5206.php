<?
$subject_val = "Re: [OMPI users] openmpi-1.2.5 and globus-4.0.5";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar 15 03:41:37 2008" -->
<!-- isoreceived="20080315074137" -->
<!-- sent="Sat, 15 Mar 2008 01:41:20 -0600" -->
<!-- isosent="20080315074120" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-1.2.5 and globus-4.0.5" -->
<!-- id="C400D9C0.4A14%rhc_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C400981F.4A09%rhc_at_lanl.gov" -->
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
<strong>Date:</strong> 2008-03-15 03:41:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5207.php">Jeff Squyres: "Re: [OMPI users] Please help &quot;orte_init failed error&quot; running simple MPI code"</a>
<li><strong>Previous message:</strong> <a href="5205.php">Rolly Ng: "Re: [OMPI users] Please help &quot;orte_init failed error&quot; running simple MPI code"</a>
<li><strong>In reply to:</strong> <a href="5204.php">Ralph Castain: "Re: [OMPI users] openmpi-1.2.5 and globus-4.0.5"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My apologies - I should have read the note more closely. Still trying to
<br>
leaf through the umpteen emails that arrived during my vacation. ;-)
<br>
<p>I take it that &quot;globus-job-run&quot; is executing some script that eventually
<br>
calls our mpirun? Your script must be doing some command-line parsing as I
<br>
do not recognize some of those options - it would help to see the eventual
<br>
command line being given to mpirun.
<br>
<p>The problem here is that mpirun looks at all its available launchers to see
<br>
what can work. In this case, it duly noted that launchers for the managed
<br>
environments (e.g., Torque and slurm) will not work.
<br>
<p>This leaves only the rsh launcher. The rsh launcher looks for &quot;ssh&quot; or (if
<br>
that isn't found) &quot;rsh&quot; to be in the path by default. In your case, it
<br>
clearly didn't find either one, so the rsh launcher indicated that it also
<br>
would not work.
<br>
<p>As a result, mpirun aborts because no mechanism to launch processes could be
<br>
found.
<br>
<p>Your choices remain the same as what I previously described, however. IIRC,
<br>
launching on the grid requires communication with the Globus daemons on each
<br>
of the target machines, possibly interaction with the Globus security
<br>
manager, etc. ORTE doesn't know how to do any of these things, so you will
<br>
either have to tell it how to do so, or use the &quot;standalone&quot; launch method.
<br>
<p>Alternatively, if you believe you can use some ssh-like variant, then you
<br>
can provide that command to ORTE in place of the default &quot;ssh&quot;. The
<br>
parameter would be -mca pls_rsh_agent my_ssh_replacement. Be sure this
<br>
replacement command is in your path, or provide the absolute pathname of it.
<br>
Note that the replacement command -must- accept command line options similar
<br>
to those of ssh - ORTE will replace &quot;ssh&quot; with whatever you give it, but the
<br>
rest of the command line will be built as if the command was &quot;ssh&quot;.
<br>
<p>FWIW, there are people working on integrating a Globus-aware launcher into
<br>
ORTE. I'm not entirely sure when that will be completed (it will not be
<br>
back-ported to the 1.2.x series), nor if/when that code would become part of
<br>
the OMPI distribution.
<br>
<p>Hope that helps.
<br>
Ralph
<br>
<p><p><p>On 3/14/08 9:01 PM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; The problem here is that you are attempting to start the application
</span><br>
<span class="quotelev1">&gt; processes without using our mpirun.  We call this a &quot;standalone&quot; launch.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Unfortunately, OMPI doesn't currently understand how to do a standalone
</span><br>
<span class="quotelev1">&gt; launch - ORTE will get confused and abort, as you experienced. There are two
</span><br>
<span class="quotelev1">&gt; ways to fix this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. someone could write a Globus launcher for ORTE. I don't think this would
</span><br>
<span class="quotelev1">&gt; be terribly hard. You would then use our mpirun to start the job after
</span><br>
<span class="quotelev1">&gt; getting an allocation via some grid-compatible resource manager.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. once we get standalone operations working, you could do what you tried.
</span><br>
<span class="quotelev1">&gt; You will likely have to write an ESS component for Globus so the processes
</span><br>
<span class="quotelev1">&gt; can figure out their rank.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have done some prototyping for standalone launch, and expect to have at
</span><br>
<span class="quotelev1">&gt; least one working example in our development trunk later this month.
</span><br>
<span class="quotelev1">&gt; However, we currently don't plan to release standalone support until
</span><br>
<span class="quotelev1">&gt; probably 1.3.2, which likely won't come out for a few months.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hope that helps
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 3/14/08 5:40 PM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I don't know if anyone has tried to run Open MPI with globus before.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; One requirement that Open MPI currently has is that all nodes must be
</span><br>
<span class="quotelev2">&gt;&gt; reachable to each other via TCP.  Is that true in your globus
</span><br>
<span class="quotelev2">&gt;&gt; environment?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 10, 2008, at 11:01 AM, Christoph Spielmann wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi everybody!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I try to get OpenMPI and Globus to cooperate. These are the steps i
</span><br>
<span class="quotelev3">&gt;&gt;&gt; executed in order to get OpenMPI working:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#128; export PATH=/opt/openmpi/bin/:$PATH
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#128; /opt/globus/setup/globus/setup-globus-job-manager-fork
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for mpiexec... /opt/openmpi/bin//mpiexec
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for mpirun... /opt/openmpi/bin//mpirun
</span><br>
<span class="quotelev3">&gt;&gt;&gt; find-fork-tools: creating ./config.status
</span><br>
<span class="quotelev3">&gt;&gt;&gt; config.status: creating fork.pm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#128; restart VDT (includes GRAM, WSGRAM, mysql, rls...)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As you can see the necessary OpenMPI-executables are recognized
</span><br>
<span class="quotelev3">&gt;&gt;&gt; correctly by setup-globus-job-manager-fork. But when i actually try
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to execute a simple mpi-program using globus-job-run i get this:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; globus-job-run localhost -x '(jobType=mpi)' -np 2 -s ./hypercube 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [hydra:10168] [0,0,0] ORTE_ERROR_LOG: Error in file runtime/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_init_stage1.c at line 312
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It looks like orte_init failed for some reason; your parallel
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   orte_pls_base_select failed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   --&gt; Returned value -1 instead of ORTE_SUCCESS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [hydra:10168] [0,0,0] ORTE_ERROR_LOG: Error in file runtime/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_system_init.c at line 42
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [hydra:10168] [0,0,0] ORTE_ERROR_LOG: Error in file runtime/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_init.c at line 52
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open RTE was unable to initialize properly.  The error occured while
</span><br>
<span class="quotelev3">&gt;&gt;&gt; attempting to orte_init().  Returned value -1 instead of ORTE_SUCCESS.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The MPI-program itself is okey:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; which mpirun &amp;&amp; mpirun -np 2 hypercube 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/openmpi/bin/mpirun
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process 0 received broadcast message 'MPI_Broadcast with hypercube
</span><br>
<span class="quotelev3">&gt;&gt;&gt; topology' from Process 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process 1 received broadcast message 'MPI_Broadcast with hypercube
</span><br>
<span class="quotelev3">&gt;&gt;&gt; topology' from Process 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; From what i read in the mailing list i think that something is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrong with the pls and globus. But i have no idea what could be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrong not to speak of how it could be fixed ;). so if someone would
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have an idea how this could be fixed, i'd be glad to hear it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Christoph
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5207.php">Jeff Squyres: "Re: [OMPI users] Please help &quot;orte_init failed error&quot; running simple MPI code"</a>
<li><strong>Previous message:</strong> <a href="5205.php">Rolly Ng: "Re: [OMPI users] Please help &quot;orte_init failed error&quot; running simple MPI code"</a>
<li><strong>In reply to:</strong> <a href="5204.php">Ralph Castain: "Re: [OMPI users] openmpi-1.2.5 and globus-4.0.5"</a>
<!-- nextthread="start" -->
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
