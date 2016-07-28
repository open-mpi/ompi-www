<?
$subject_val = "Re: [OMPI users] OpenMPI 1.3RC2 job startup issue";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 22 18:17:47 2008" -->
<!-- isoreceived="20081222231747" -->
<!-- sent="Mon, 22 Dec 2008 16:17:36 -0700" -->
<!-- isosent="20081222231736" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.3RC2 job startup issue" -->
<!-- id="E0B6870A-7011-4653-8A64-0C18EDE043F1_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49500D85.9090105_at_aem.umn.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.3RC2 job startup issue<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-22 18:17:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7574.php">Win Than Aung: "[OMPI users] help with mpi"</a>
<li><strong>Previous message:</strong> <a href="7572.php">Ray Muno: "[OMPI users] OpenMPI 1.3RC2 job startup issue"</a>
<li><strong>In reply to:</strong> <a href="7572.php">Ray Muno: "[OMPI users] OpenMPI 1.3RC2 job startup issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7576.php">Aurélien Bouteiller: "Re: [OMPI users] OpenMPI 1.3RC2 job startup issue"</a>
<li><strong>Reply:</strong> <a href="7576.php">Aurélien Bouteiller: "Re: [OMPI users] OpenMPI 1.3RC2 job startup issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Your backend nodes are mistakenly picking up the OMPI 1.2 orted binary  
<br>
instead of the 1.3 orted. The two are not compatible.
<br>
<p>Check your LD_LIBRARY_PATH and PATH on the backend nodes and ensure  
<br>
they are pointing at the 1.3 installation. There are other ways as  
<br>
well of pointing to the correct installation - check the OMPI FAQ  
<br>
pages to find alternatives if this doesn't work for you.
<br>
<p>Ralph
<br>
<p><p>On Dec 22, 2008, at 2:58 PM, Ray Muno wrote:
<br>
<p><span class="quotelev1">&gt; We have been happily running under OpenMPI 1.2 on our cluster unitil  
</span><br>
<span class="quotelev1">&gt; recently.  It is 2200 processors (8 way Opteron) , Qlogic IB  
</span><br>
<span class="quotelev1">&gt; connected.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have had issues starting larger jobs (600+ processors).  There  
</span><br>
<span class="quotelev1">&gt; seemed to be some indication that OpenMPI may solve our problems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It built with no problem and installed. Users can compile programs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When they tried to run, they got the attached output.  Are we  
</span><br>
<span class="quotelev1">&gt; missing something obvious?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is a Rocks cluster with jobs scheduled through SGE.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; =====================================================
</span><br>
<span class="quotelev1">&gt; $ mpirun -np 1024 program
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [compute-2-6.local:32580] Error: unknown option &quot;--daemonize&quot;
</span><br>
<span class="quotelev1">&gt; Usage: orted [OPTION]...
</span><br>
<span class="quotelev1">&gt; Start an Open RTE Daemon
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   --bootproxy &lt;arg0&gt;    Run as boot proxy for &lt;job-id&gt;
</span><br>
<span class="quotelev1">&gt; -d|--debug               Debug the OpenRTE
</span><br>
<span class="quotelev1">&gt; -d|--spin                Have the orted spin until we can connect a  
</span><br>
<span class="quotelev1">&gt; debugger
</span><br>
<span class="quotelev1">&gt;                         to it
</span><br>
<span class="quotelev1">&gt;   --debug-daemons       Enable debugging of OpenRTE daemons
</span><br>
<span class="quotelev1">&gt;   --debug-daemons-file  Enable debugging of OpenRTE daemons, storing  
</span><br>
<span class="quotelev1">&gt; output
</span><br>
<span class="quotelev1">&gt;                         in files
</span><br>
<span class="quotelev1">&gt;   --gprreplica &lt;arg0&gt;   Registry contact information.
</span><br>
<span class="quotelev1">&gt; -h|--help                This help message
</span><br>
<span class="quotelev1">&gt;   --mpi-call-yield &lt;arg0&gt;
</span><br>
<span class="quotelev1">&gt;                         Have MPI (or similar) applications call  
</span><br>
<span class="quotelev1">&gt; yield when
</span><br>
<span class="quotelev1">&gt;                         idle
</span><br>
<span class="quotelev1">&gt;   --name &lt;arg0&gt;         Set the orte process name
</span><br>
<span class="quotelev1">&gt;   --no-daemonize        Don't daemonize into the background
</span><br>
<span class="quotelev1">&gt;   --nodename &lt;arg0&gt;     Node name as specified by host/resource
</span><br>
<span class="quotelev1">&gt;                         description.
</span><br>
<span class="quotelev1">&gt;   --ns-nds &lt;arg0&gt;       set sds/nds component to use for daemon  
</span><br>
<span class="quotelev1">&gt; (normally
</span><br>
<span class="quotelev1">&gt;                         not needed)
</span><br>
<span class="quotelev1">&gt;   --nsreplica &lt;arg0&gt;    Name service contact information.
</span><br>
<span class="quotelev1">&gt;   --num_procs &lt;arg0&gt;    Set the number of process in this job
</span><br>
<span class="quotelev1">&gt;   --persistent          Remain alive after the application process
</span><br>
<span class="quotelev1">&gt;                         completes
</span><br>
<span class="quotelev1">&gt;   --report-uri &lt;arg0&gt;   Report this process' uri on indicated pipe
</span><br>
<span class="quotelev1">&gt;   --scope &lt;arg0&gt;        Set restrictions on who can connect to this
</span><br>
<span class="quotelev1">&gt;                         universe
</span><br>
<span class="quotelev1">&gt;   --seed                Host replicas for the core universe services
</span><br>
<span class="quotelev1">&gt;   --set-sid             Direct the orted to separate from the current
</span><br>
<span class="quotelev1">&gt;                         session
</span><br>
<span class="quotelev1">&gt;   --tmpdir &lt;arg0&gt;       Set the root for the session directory tree
</span><br>
<span class="quotelev1">&gt;   --universe &lt;arg0&gt;     Set the universe name as
</span><br>
<span class="quotelev1">&gt;                         username_at_hostname:universe_name for this
</span><br>
<span class="quotelev1">&gt;                         application
</span><br>
<span class="quotelev1">&gt;   --vpid_start &lt;arg0&gt;   Set the starting vpid for this job
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A daemon (pid 4151) died unexpectedly with status 251 while attempting
</span><br>
<span class="quotelev1">&gt; to launch so we are aborting.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This may be because the daemon was unable to find all the needed  
</span><br>
<span class="quotelev1">&gt; shared
</span><br>
<span class="quotelev1">&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to  
</span><br>
<span class="quotelev1">&gt; have the
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
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun was unable to cleanly terminate the daemons on the nodes shown
</span><br>
<span class="quotelev1">&gt; below. Additional manual cleanup may be required - please refer to
</span><br>
<span class="quotelev1">&gt; the &quot;orte-clean&quot; tool for assistance.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;        compute-5-15.local - daemon did not report back when launched
</span><br>
<span class="quotelev1">&gt;        compute-5-35.local - daemon did not report back when launched
</span><br>
<span class="quotelev1">&gt;        compute-4-8.local - daemon did not report back when launched
</span><br>
<span class="quotelev1">&gt;        compute-7-2.local - daemon did not report back when launched
</span><br>
<span class="quotelev1">&gt;        compute-2-6.local - daemon did not report back when launched
</span><br>
<span class="quotelev1">&gt;        compute-6-28.local - daemon did not report back when launched
</span><br>
<span class="quotelev1">&gt;        compute-6-35.local - daemon did not report back when launched
</span><br>
<span class="quotelev1">&gt;        compute-6-25.local
</span><br>
<span class="quotelev1">&gt;        compute-6-26.local
</span><br>
<span class="quotelev1">&gt;        compute-2-19.local - daemon did not report back when launched
</span><br>
<span class="quotelev1">&gt;        compute-6-37.local - daemon did not report back when launched
</span><br>
<span class="quotelev1">&gt;        compute-6-12.local - daemon did not report back when launched
</span><br>
<span class="quotelev1">&gt;        compute-2-36.local - daemon did not report back when launched
</span><br>
<span class="quotelev1">&gt;        compute-7-5.local - daemon did not report back when launched
</span><br>
<span class="quotelev1">&gt;        compute-7-23.local - daemon did not report back when launched
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ray Muno
</span><br>
<span class="quotelev1">&gt; University of Minnesota
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
<li><strong>Next message:</strong> <a href="7574.php">Win Than Aung: "[OMPI users] help with mpi"</a>
<li><strong>Previous message:</strong> <a href="7572.php">Ray Muno: "[OMPI users] OpenMPI 1.3RC2 job startup issue"</a>
<li><strong>In reply to:</strong> <a href="7572.php">Ray Muno: "[OMPI users] OpenMPI 1.3RC2 job startup issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7576.php">Aurélien Bouteiller: "Re: [OMPI users] OpenMPI 1.3RC2 job startup issue"</a>
<li><strong>Reply:</strong> <a href="7576.php">Aurélien Bouteiller: "Re: [OMPI users] OpenMPI 1.3RC2 job startup issue"</a>
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
