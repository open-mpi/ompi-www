<?
$subject_val = "Re: [OMPI users] orted unknown option &quot;--daemonize&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 15 07:14:57 2010" -->
<!-- isoreceived="20100715111457" -->
<!-- sent="Thu, 15 Jul 2010 07:15:17 -0400" -->
<!-- isosent="20100715111517" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orted unknown option &amp;quot;--daemonize&amp;quot;" -->
<!-- id="4430EDAE-7E01-4138-AE57-267D290DCBC0_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTil81haV_sOEfS3VBAsr3pJF7CHWjRCXzktTkvsU_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] orted unknown option &quot;--daemonize&quot;<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-15 07:15:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13647.php">Gabriele Fatigati: "[OMPI users] OpenMPI flags conditions"</a>
<li><strong>Previous message:</strong> <a href="13645.php">Lydia Heck: "[OMPI users] error in (Open MPI) 1.3.3r21324-ct8.2-b09b-r31"</a>
<li><strong>In reply to:</strong> <a href="13644.php">TH Chew: "[OMPI users] orted unknown option &quot;--daemonize&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13666.php">TH Chew: "Re: [OMPI users] orted unknown option &quot;--daemonize&quot;"</a>
<li><strong>Reply:</strong> <a href="13666.php">TH Chew: "Re: [OMPI users] orted unknown option &quot;--daemonize&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This usually means that you have mis-matched versions of Open MPI across your machines.  Double check that you have the same version of Open MPI installed on all the machines that you'll be running (e.g., perhaps birg-desktop-10 has a different version?).
<br>
<p><p>On Jul 15, 2010, at 5:18 AM, TH Chew wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am setting up a 7+1 nodes cluster for MD simulation, specifically using GROMACS. I am using Ubuntu Lucid 64-bit on all machines. Installed gromacs, gromacs-openmpi, and gromacs-mpich from the repository. MPICH version of gromacs runs fine without any error. However, when I ran OpenMPI version of gromacs by
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ###########################################################################
</span><br>
<span class="quotelev1">&gt; mpirun.openmpi -np 8 -wdir /home/birg/Desktop/nfs/ -hostfile ~/Desktop/mpi_settings/hostfile mdrun_mpi.openmpi -v
</span><br>
<span class="quotelev1">&gt; ###########################################################################
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; an error occur, something like this
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ###########################################################################
</span><br>
<span class="quotelev1">&gt; [birg-desktop-10:02101] Error: unknown option &quot;--daemonize&quot;
</span><br>
<span class="quotelev1">&gt; Usage: orted [OPTION]...
</span><br>
<span class="quotelev1">&gt; Start an Open RTE Daemon
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    --bootproxy &lt;arg0&gt;    Run as boot proxy for &lt;job-id&gt;
</span><br>
<span class="quotelev1">&gt; -d|--debug               Debug the OpenRTE
</span><br>
<span class="quotelev1">&gt; -d|--spin                Have the orted spin until we can connect a debugger
</span><br>
<span class="quotelev1">&gt;                          to it
</span><br>
<span class="quotelev1">&gt;    --debug-daemons       Enable debugging of OpenRTE daemons
</span><br>
<span class="quotelev1">&gt;    --debug-daemons-file  Enable debugging of OpenRTE daemons, storing output
</span><br>
<span class="quotelev1">&gt;                          in files
</span><br>
<span class="quotelev1">&gt;    --gprreplica &lt;arg0&gt;   Registry contact information.
</span><br>
<span class="quotelev1">&gt; -h|--help                This help message
</span><br>
<span class="quotelev1">&gt;    --mpi-call-yield &lt;arg0&gt;  
</span><br>
<span class="quotelev1">&gt;                          Have MPI (or similar) applications call yield when
</span><br>
<span class="quotelev1">&gt;                          idle
</span><br>
<span class="quotelev1">&gt;    --name &lt;arg0&gt;         Set the orte process name
</span><br>
<span class="quotelev1">&gt;    --no-daemonize        Don't daemonize into the background
</span><br>
<span class="quotelev1">&gt;    --nodename &lt;arg0&gt;     Node name as specified by host/resource
</span><br>
<span class="quotelev1">&gt;                          description.
</span><br>
<span class="quotelev1">&gt;    --ns-nds &lt;arg0&gt;       set sds/nds component to use for daemon (normally
</span><br>
<span class="quotelev1">&gt;                          not needed)
</span><br>
<span class="quotelev1">&gt;    --nsreplica &lt;arg0&gt;    Name service contact information.
</span><br>
<span class="quotelev1">&gt;    --num_procs &lt;arg0&gt;    Set the number of process in this job
</span><br>
<span class="quotelev1">&gt;    --persistent          Remain alive after the application process
</span><br>
<span class="quotelev1">&gt;                          completes
</span><br>
<span class="quotelev1">&gt;    --report-uri &lt;arg0&gt;   Report this process' uri on indicated pipe
</span><br>
<span class="quotelev1">&gt;    --scope &lt;arg0&gt;        Set restrictions on who can connect to this
</span><br>
<span class="quotelev1">&gt;                          universe
</span><br>
<span class="quotelev1">&gt;    --seed                Host replicas for the core universe services
</span><br>
<span class="quotelev1">&gt;    --set-sid             Direct the orted to separate from the current
</span><br>
<span class="quotelev1">&gt;                          session
</span><br>
<span class="quotelev1">&gt;    --tmpdir &lt;arg0&gt;       Set the root for the session directory tree
</span><br>
<span class="quotelev1">&gt;    --universe &lt;arg0&gt;     Set the universe name as
</span><br>
<span class="quotelev1">&gt;                          username_at_hostname:universe_name for this
</span><br>
<span class="quotelev1">&gt;                          application
</span><br>
<span class="quotelev1">&gt;    --vpid_start &lt;arg0&gt;   Set the starting vpid for this job
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A daemon (pid 5598) died unexpectedly with status 251 while attempting
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
<span class="quotelev1">&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
</span><br>
<span class="quotelev1">&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev1">&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun.openmpi noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun.openmpi was unable to cleanly terminate the daemons on the nodes shown
</span><br>
<span class="quotelev1">&gt; below. Additional manual cleanup may be required - please refer to
</span><br>
<span class="quotelev1">&gt; the &quot;orte-clean&quot; tool for assistance.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;     birg-desktop-04 - daemon did not report back when launched
</span><br>
<span class="quotelev1">&gt;     birg-desktop-07 - daemon did not report back when launched
</span><br>
<span class="quotelev1">&gt;     birg-desktop-10 - daemon did not report back when launched
</span><br>
<span class="quotelev1">&gt; ###########################################################################
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It is strange that it only happen on one of the compute node (birg-desktop-10). If I remove birg-desktop-10 from the hostfile, I can run OpenMPI gromacs successfully. Any idea?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; THChew
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
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13647.php">Gabriele Fatigati: "[OMPI users] OpenMPI flags conditions"</a>
<li><strong>Previous message:</strong> <a href="13645.php">Lydia Heck: "[OMPI users] error in (Open MPI) 1.3.3r21324-ct8.2-b09b-r31"</a>
<li><strong>In reply to:</strong> <a href="13644.php">TH Chew: "[OMPI users] orted unknown option &quot;--daemonize&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13666.php">TH Chew: "Re: [OMPI users] orted unknown option &quot;--daemonize&quot;"</a>
<li><strong>Reply:</strong> <a href="13666.php">TH Chew: "Re: [OMPI users] orted unknown option &quot;--daemonize&quot;"</a>
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
