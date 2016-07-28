<?
$subject_val = "Re: [OMPI users] OpenMPI 1.3RC2 job startup issue";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 23 02:25:40 2008" -->
<!-- isoreceived="20081223072540" -->
<!-- sent="Tue, 23 Dec 2008 02:25:34 -0500" -->
<!-- isosent="20081223072534" -->
<!-- name="Aur&#233;lien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.3RC2 job startup issue" -->
<!-- id="726F71C6-EEAC-4171-AF0F-8B2EA85FD8CB_at_eecs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E0B6870A-7011-4653-8A64-0C18EDE043F1_at_lanl.gov" -->
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
<strong>From:</strong> Aur&#233;lien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-23 02:25:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7577.php">Biagio Lucini: "[OMPI users] Problem with openmpi and infiniband"</a>
<li><strong>Previous message:</strong> <a href="7575.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] help with mpi"</a>
<li><strong>In reply to:</strong> <a href="7573.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.3RC2 job startup issue"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
To make sure you don't use any &quot;leftover&quot; from another system install  
<br>
when upgrading, you should specify --enable-prefix-by-default when  
<br>
configuring the source tree for compilation. This will always select  
<br>
the binaries and libs that are part of the mpirun you are using.
<br>
<p>Aurelien
<br>
<p><p><p>Le 22 d&#233;c. 08 &#224; 18:17, Ralph Castain a &#233;crit :
<br>
<p><span class="quotelev1">&gt; Your backend nodes are mistakenly picking up the OMPI 1.2 orted  
</span><br>
<span class="quotelev1">&gt; binary instead of the 1.3 orted. The two are not compatible.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Check your LD_LIBRARY_PATH and PATH on the backend nodes and ensure  
</span><br>
<span class="quotelev1">&gt; they are pointing at the 1.3 installation. There are other ways as  
</span><br>
<span class="quotelev1">&gt; well of pointing to the correct installation - check the OMPI FAQ  
</span><br>
<span class="quotelev1">&gt; pages to find alternatives if this doesn't work for you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 22, 2008, at 2:58 PM, Ray Muno wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We have been happily running under OpenMPI 1.2 on our cluster  
</span><br>
<span class="quotelev2">&gt;&gt; unitil recently.  It is 2200 processors (8 way Opteron) , Qlogic IB  
</span><br>
<span class="quotelev2">&gt;&gt; connected.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We have had issues starting larger jobs (600+ processors).  There  
</span><br>
<span class="quotelev2">&gt;&gt; seemed to be some indication that OpenMPI may solve our problems.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It built with no problem and installed. Users can compile programs.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When they tried to run, they got the attached output.  Are we  
</span><br>
<span class="quotelev2">&gt;&gt; missing something obvious?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is a Rocks cluster with jobs scheduled through SGE.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================
</span><br>
<span class="quotelev2">&gt;&gt; $ mpirun -np 1024 program
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [compute-2-6.local:32580] Error: unknown option &quot;--daemonize&quot;
</span><br>
<span class="quotelev2">&gt;&gt; Usage: orted [OPTION]...
</span><br>
<span class="quotelev2">&gt;&gt; Start an Open RTE Daemon
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  --bootproxy &lt;arg0&gt;    Run as boot proxy for &lt;job-id&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -d|--debug               Debug the OpenRTE
</span><br>
<span class="quotelev2">&gt;&gt; -d|--spin                Have the orted spin until we can connect a  
</span><br>
<span class="quotelev2">&gt;&gt; debugger
</span><br>
<span class="quotelev2">&gt;&gt;                        to it
</span><br>
<span class="quotelev2">&gt;&gt;  --debug-daemons       Enable debugging of OpenRTE daemons
</span><br>
<span class="quotelev2">&gt;&gt;  --debug-daemons-file  Enable debugging of OpenRTE daemons, storing  
</span><br>
<span class="quotelev2">&gt;&gt; output
</span><br>
<span class="quotelev2">&gt;&gt;                        in files
</span><br>
<span class="quotelev2">&gt;&gt;  --gprreplica &lt;arg0&gt;   Registry contact information.
</span><br>
<span class="quotelev2">&gt;&gt; -h|--help                This help message
</span><br>
<span class="quotelev2">&gt;&gt;  --mpi-call-yield &lt;arg0&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                        Have MPI (or similar) applications call  
</span><br>
<span class="quotelev2">&gt;&gt; yield when
</span><br>
<span class="quotelev2">&gt;&gt;                        idle
</span><br>
<span class="quotelev2">&gt;&gt;  --name &lt;arg0&gt;         Set the orte process name
</span><br>
<span class="quotelev2">&gt;&gt;  --no-daemonize        Don't daemonize into the background
</span><br>
<span class="quotelev2">&gt;&gt;  --nodename &lt;arg0&gt;     Node name as specified by host/resource
</span><br>
<span class="quotelev2">&gt;&gt;                        description.
</span><br>
<span class="quotelev2">&gt;&gt;  --ns-nds &lt;arg0&gt;       set sds/nds component to use for daemon  
</span><br>
<span class="quotelev2">&gt;&gt; (normally
</span><br>
<span class="quotelev2">&gt;&gt;                        not needed)
</span><br>
<span class="quotelev2">&gt;&gt;  --nsreplica &lt;arg0&gt;    Name service contact information.
</span><br>
<span class="quotelev2">&gt;&gt;  --num_procs &lt;arg0&gt;    Set the number of process in this job
</span><br>
<span class="quotelev2">&gt;&gt;  --persistent          Remain alive after the application process
</span><br>
<span class="quotelev2">&gt;&gt;                        completes
</span><br>
<span class="quotelev2">&gt;&gt;  --report-uri &lt;arg0&gt;   Report this process' uri on indicated pipe
</span><br>
<span class="quotelev2">&gt;&gt;  --scope &lt;arg0&gt;        Set restrictions on who can connect to this
</span><br>
<span class="quotelev2">&gt;&gt;                        universe
</span><br>
<span class="quotelev2">&gt;&gt;  --seed                Host replicas for the core universe services
</span><br>
<span class="quotelev2">&gt;&gt;  --set-sid             Direct the orted to separate from the current
</span><br>
<span class="quotelev2">&gt;&gt;                        session
</span><br>
<span class="quotelev2">&gt;&gt;  --tmpdir &lt;arg0&gt;       Set the root for the session directory tree
</span><br>
<span class="quotelev2">&gt;&gt;  --universe &lt;arg0&gt;     Set the universe name as
</span><br>
<span class="quotelev2">&gt;&gt;                        username_at_hostname:universe_name for this
</span><br>
<span class="quotelev2">&gt;&gt;                        application
</span><br>
<span class="quotelev2">&gt;&gt;  --vpid_start &lt;arg0&gt;   Set the starting vpid for this job
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; A daemon (pid 4151) died unexpectedly with status 251 while  
</span><br>
<span class="quotelev2">&gt;&gt; attempting
</span><br>
<span class="quotelev2">&gt;&gt; to launch so we are aborting.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There may be more information reported by the environment (see  
</span><br>
<span class="quotelev2">&gt;&gt; above).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This may be because the daemon was unable to find all the needed  
</span><br>
<span class="quotelev2">&gt;&gt; shared
</span><br>
<span class="quotelev2">&gt;&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to  
</span><br>
<span class="quotelev2">&gt;&gt; have the
</span><br>
<span class="quotelev2">&gt;&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev2">&gt;&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that the job aborted, but has no info as to the  
</span><br>
<span class="quotelev2">&gt;&gt; process
</span><br>
<span class="quotelev2">&gt;&gt; that caused that situation.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun was unable to cleanly terminate the daemons on the nodes shown
</span><br>
<span class="quotelev2">&gt;&gt; below. Additional manual cleanup may be required - please refer to
</span><br>
<span class="quotelev2">&gt;&gt; the &quot;orte-clean&quot; tool for assistance.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;       compute-5-15.local - daemon did not report back when launched
</span><br>
<span class="quotelev2">&gt;&gt;       compute-5-35.local - daemon did not report back when launched
</span><br>
<span class="quotelev2">&gt;&gt;       compute-4-8.local - daemon did not report back when launched
</span><br>
<span class="quotelev2">&gt;&gt;       compute-7-2.local - daemon did not report back when launched
</span><br>
<span class="quotelev2">&gt;&gt;       compute-2-6.local - daemon did not report back when launched
</span><br>
<span class="quotelev2">&gt;&gt;       compute-6-28.local - daemon did not report back when launched
</span><br>
<span class="quotelev2">&gt;&gt;       compute-6-35.local - daemon did not report back when launched
</span><br>
<span class="quotelev2">&gt;&gt;       compute-6-25.local
</span><br>
<span class="quotelev2">&gt;&gt;       compute-6-26.local
</span><br>
<span class="quotelev2">&gt;&gt;       compute-2-19.local - daemon did not report back when launched
</span><br>
<span class="quotelev2">&gt;&gt;       compute-6-37.local - daemon did not report back when launched
</span><br>
<span class="quotelev2">&gt;&gt;       compute-6-12.local - daemon did not report back when launched
</span><br>
<span class="quotelev2">&gt;&gt;       compute-2-36.local - daemon did not report back when launched
</span><br>
<span class="quotelev2">&gt;&gt;       compute-7-5.local - daemon did not report back when launched
</span><br>
<span class="quotelev2">&gt;&gt;       compute-7-23.local - daemon did not report back when launched
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ================================================
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ray Muno
</span><br>
<span class="quotelev2">&gt;&gt; University of Minnesota
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><p><pre>
--
* Dr. Aur&#233;lien Bouteiller
* Sr. Research Associate at Innovative Computing Laboratory
* University of Tennessee
* 1122 Volunteer Boulevard, suite 350
* Knoxville, TN 37996
* 865 974 6321
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7577.php">Biagio Lucini: "[OMPI users] Problem with openmpi and infiniband"</a>
<li><strong>Previous message:</strong> <a href="7575.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] help with mpi"</a>
<li><strong>In reply to:</strong> <a href="7573.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.3RC2 job startup issue"</a>
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
