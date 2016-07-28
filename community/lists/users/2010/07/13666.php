<?
$subject_val = "Re: [OMPI users] orted unknown option &quot;--daemonize&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 16 04:41:22 2010" -->
<!-- isoreceived="20100716084122" -->
<!-- sent="Fri, 16 Jul 2010 16:41:17 +0800" -->
<!-- isosent="20100716084117" -->
<!-- name="TH Chew" -->
<!-- email="teonghan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orted unknown option &amp;quot;--daemonize&amp;quot;" -->
<!-- id="AANLkTim035y7Na42LnzyEjiLJTCscz3YwkZj-Qc3_plP_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4430EDAE-7E01-4138-AE57-267D290DCBC0_at_cisco.com" -->
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
<strong>From:</strong> TH Chew (<em>teonghan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-16 04:41:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13667.php">TH Chew: "Re: [OMPI users] orted unknown option &quot;--daemonize&quot;"</a>
<li><strong>Previous message:</strong> <a href="13665.php">Douglas Guptill: "Re: [OMPI users] first cluster"</a>
<li><strong>In reply to:</strong> <a href="13646.php">Jeff Squyres: "Re: [OMPI users] orted unknown option &quot;--daemonize&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13667.php">TH Chew: "Re: [OMPI users] orted unknown option &quot;--daemonize&quot;"</a>
<li><strong>Reply:</strong> <a href="13667.php">TH Chew: "Re: [OMPI users] orted unknown option &quot;--daemonize&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>Thanks for the suggestion. Been looking into it and although, I installed
<br>
the same OpenMPI version. But somehow, another software (Discovery Studio)
<br>
was installed on birg-desktop-10, causing the mpirun to be messed up (since
<br>
Discovery Studio also install some kind of mpirun/mpiexec). I type
<br>
&quot;mpirun.openmpi --version&quot; on birg-desktop-10, the output is:
<br>
<p>####################################################
<br>
birg_at_birg-desktop-10:~$ mpirun.openmpi --version
<br>
mpirun.openmpi: symbol lookup error: mpirun.openmpi: undefined symbol:
<br>
orted_cmd_line
<br>
####################################################
<br>
<p>and when I type on other machine
<br>
<p>####################################################
<br>
birg_at_birg-frontnode:~/Desktop/nfs_shared$ mpirun.openmpi --version
<br>
mpirun.openmpi (OpenRTE) 1.4.1
<br>
<p>Report bugs to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
####################################################
<br>
<p>I am now uninstalling Discovery Studio and see whether it works or not.
<br>
<p>Thanks again.
<br>
<p>On Thu, Jul 15, 2010 at 7:15 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; This usually means that you have mis-matched versions of Open MPI across
</span><br>
<span class="quotelev1">&gt; your machines.  Double check that you have the same version of Open MPI
</span><br>
<span class="quotelev1">&gt; installed on all the machines that you'll be running (e.g., perhaps
</span><br>
<span class="quotelev1">&gt; birg-desktop-10 has a different version?).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 15, 2010, at 5:18 AM, TH Chew wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi all,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am setting up a 7+1 nodes cluster for MD simulation, specifically using
</span><br>
<span class="quotelev1">&gt; GROMACS. I am using Ubuntu Lucid 64-bit on all machines. Installed gromacs,
</span><br>
<span class="quotelev1">&gt; gromacs-openmpi, and gromacs-mpich from the repository. MPICH version of
</span><br>
<span class="quotelev1">&gt; gromacs runs fine without any error. However, when I ran OpenMPI version of
</span><br>
<span class="quotelev1">&gt; gromacs by
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ###########################################################################
</span><br>
<span class="quotelev2">&gt; &gt; mpirun.openmpi -np 8 -wdir /home/birg/Desktop/nfs/ -hostfile
</span><br>
<span class="quotelev1">&gt; ~/Desktop/mpi_settings/hostfile mdrun_mpi.openmpi -v
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ###########################################################################
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; an error occur, something like this
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ###########################################################################
</span><br>
<span class="quotelev2">&gt; &gt; [birg-desktop-10:02101] Error: unknown option &quot;--daemonize&quot;
</span><br>
<span class="quotelev2">&gt; &gt; Usage: orted [OPTION]...
</span><br>
<span class="quotelev2">&gt; &gt; Start an Open RTE Daemon
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    --bootproxy &lt;arg0&gt;    Run as boot proxy for &lt;job-id&gt;
</span><br>
<span class="quotelev2">&gt; &gt; -d|--debug               Debug the OpenRTE
</span><br>
<span class="quotelev2">&gt; &gt; -d|--spin                Have the orted spin until we can connect a
</span><br>
<span class="quotelev1">&gt; debugger
</span><br>
<span class="quotelev2">&gt; &gt;                          to it
</span><br>
<span class="quotelev2">&gt; &gt;    --debug-daemons       Enable debugging of OpenRTE daemons
</span><br>
<span class="quotelev2">&gt; &gt;    --debug-daemons-file  Enable debugging of OpenRTE daemons, storing
</span><br>
<span class="quotelev1">&gt; output
</span><br>
<span class="quotelev2">&gt; &gt;                          in files
</span><br>
<span class="quotelev2">&gt; &gt;    --gprreplica &lt;arg0&gt;   Registry contact information.
</span><br>
<span class="quotelev2">&gt; &gt; -h|--help                This help message
</span><br>
<span class="quotelev2">&gt; &gt;    --mpi-call-yield &lt;arg0&gt;
</span><br>
<span class="quotelev2">&gt; &gt;                          Have MPI (or similar) applications call yield
</span><br>
<span class="quotelev1">&gt; when
</span><br>
<span class="quotelev2">&gt; &gt;                          idle
</span><br>
<span class="quotelev2">&gt; &gt;    --name &lt;arg0&gt;         Set the orte process name
</span><br>
<span class="quotelev2">&gt; &gt;    --no-daemonize        Don't daemonize into the background
</span><br>
<span class="quotelev2">&gt; &gt;    --nodename &lt;arg0&gt;     Node name as specified by host/resource
</span><br>
<span class="quotelev2">&gt; &gt;                          description.
</span><br>
<span class="quotelev2">&gt; &gt;    --ns-nds &lt;arg0&gt;       set sds/nds component to use for daemon
</span><br>
<span class="quotelev1">&gt; (normally
</span><br>
<span class="quotelev2">&gt; &gt;                          not needed)
</span><br>
<span class="quotelev2">&gt; &gt;    --nsreplica &lt;arg0&gt;    Name service contact information.
</span><br>
<span class="quotelev2">&gt; &gt;    --num_procs &lt;arg0&gt;    Set the number of process in this job
</span><br>
<span class="quotelev2">&gt; &gt;    --persistent          Remain alive after the application process
</span><br>
<span class="quotelev2">&gt; &gt;                          completes
</span><br>
<span class="quotelev2">&gt; &gt;    --report-uri &lt;arg0&gt;   Report this process' uri on indicated pipe
</span><br>
<span class="quotelev2">&gt; &gt;    --scope &lt;arg0&gt;        Set restrictions on who can connect to this
</span><br>
<span class="quotelev2">&gt; &gt;                          universe
</span><br>
<span class="quotelev2">&gt; &gt;    --seed                Host replicas for the core universe services
</span><br>
<span class="quotelev2">&gt; &gt;    --set-sid             Direct the orted to separate from the current
</span><br>
<span class="quotelev2">&gt; &gt;                          session
</span><br>
<span class="quotelev2">&gt; &gt;    --tmpdir &lt;arg0&gt;       Set the root for the session directory tree
</span><br>
<span class="quotelev2">&gt; &gt;    --universe &lt;arg0&gt;     Set the universe name as
</span><br>
<span class="quotelev2">&gt; &gt;                          username_at_hostname:universe_name for this
</span><br>
<span class="quotelev2">&gt; &gt;                          application
</span><br>
<span class="quotelev2">&gt; &gt;    --vpid_start &lt;arg0&gt;   Set the starting vpid for this job
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; A daemon (pid 5598) died unexpectedly with status 251 while attempting
</span><br>
<span class="quotelev2">&gt; &gt; to launch so we are aborting.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev2">&gt; &gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev2">&gt; &gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev2">&gt; &gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; mpirun.openmpi noticed that the job aborted, but has no info as to the
</span><br>
<span class="quotelev1">&gt; process
</span><br>
<span class="quotelev2">&gt; &gt; that caused that situation.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; mpirun.openmpi was unable to cleanly terminate the daemons on the nodes
</span><br>
<span class="quotelev1">&gt; shown
</span><br>
<span class="quotelev2">&gt; &gt; below. Additional manual cleanup may be required - please refer to
</span><br>
<span class="quotelev2">&gt; &gt; the &quot;orte-clean&quot; tool for assistance.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;     birg-desktop-04 - daemon did not report back when launched
</span><br>
<span class="quotelev2">&gt; &gt;     birg-desktop-07 - daemon did not report back when launched
</span><br>
<span class="quotelev2">&gt; &gt;     birg-desktop-10 - daemon did not report back when launched
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ###########################################################################
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; It is strange that it only happen on one of the compute node
</span><br>
<span class="quotelev1">&gt; (birg-desktop-10). If I remove birg-desktop-10 from the hostfile, I can run
</span><br>
<span class="quotelev1">&gt; OpenMPI gromacs successfully. Any idea?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt; THChew
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
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Regards,
THChew
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13666/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13667.php">TH Chew: "Re: [OMPI users] orted unknown option &quot;--daemonize&quot;"</a>
<li><strong>Previous message:</strong> <a href="13665.php">Douglas Guptill: "Re: [OMPI users] first cluster"</a>
<li><strong>In reply to:</strong> <a href="13646.php">Jeff Squyres: "Re: [OMPI users] orted unknown option &quot;--daemonize&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13667.php">TH Chew: "Re: [OMPI users] orted unknown option &quot;--daemonize&quot;"</a>
<li><strong>Reply:</strong> <a href="13667.php">TH Chew: "Re: [OMPI users] orted unknown option &quot;--daemonize&quot;"</a>
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
