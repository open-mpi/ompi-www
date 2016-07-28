<?
$subject_val = "Re: [OMPI users] issue with 2 connected computers";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 20 10:07:41 2012" -->
<!-- isoreceived="20120720140741" -->
<!-- sent="Fri, 20 Jul 2012 07:07:33 -0700" -->
<!-- isosent="20120720140733" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] issue with 2 connected computers" -->
<!-- id="05A77CC1-366A-40D2-89CA-77C3CF17F22D_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAPW4YGJZhVE-Z9SgXOqnGpVvjjTHt1G-t2z_29BevOsu01C8Cg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] issue with 2 connected computers<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-20 10:07:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19801.php">Jack Galloway: "Re: [OMPI users] Re :Re:  OpenMP and OpenMPI Issue"</a>
<li><strong>Previous message:</strong> <a href="19799.php">Rolf Riesen: "[OMPI users] AUTO: Rolf Riesen is on vacation (returning 07/08/2012)"</a>
<li><strong>In reply to:</strong> <a href="19798.php">christophe petit: "[OMPI users] issue with 2 connected computers"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Even though you think you do, you actually don't have the path set correctly on the Mac side. Remember, when executing from ssh, the .cshrc (or whatever shell you use) executes differently. So even though an interactive login gets the right path, the non-interactive execution doesn't.
<br>
<p>See <a href="http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path">http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path</a> for details
<br>
<p><p>On Jul 19, 2012, at 9:13 PM, christophe petit wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I try to launch an executable on 2 computers ( Debian 6.0 and MacOS snow leopard ).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have successfully installed on both Open-MPI 1.6 with the option &quot;--enable-heterogenous&quot; and
</span><br>
<span class="quotelev1">&gt; setup passwordless ssh connection between the 2 computers.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My issue is that the distributed computing works fine but only when I launch the 
</span><br>
<span class="quotelev1">&gt; &quot;mpirun -np 16 -hostfile hosts.txt program_exec&quot; command from the MacOS computer, not from Debian pc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, I have disabled firewall on MacOS with : 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sysctl -w net.inet.ip.fw.enable=0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I launched from Debian, I get :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ~/mpirun -np 16 -hostfile hosts.txt program_exec 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [maco:01498] Error: unknown option &quot;--daemonize&quot;
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
<span class="quotelev1">&gt; A daemon (pid 24370) died unexpectedly with status 251 while attempting
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
<span class="quotelev1">&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH and PATH are correctly set on both ( Open-MPI is installed on
</span><br>
<span class="quotelev1">&gt; &quot;/usr/local/openmpi/&quot; ).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Apparently, the problem comes from the Debian pc ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If anyone sees what's wrong ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks.
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19800/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19801.php">Jack Galloway: "Re: [OMPI users] Re :Re:  OpenMP and OpenMPI Issue"</a>
<li><strong>Previous message:</strong> <a href="19799.php">Rolf Riesen: "[OMPI users] AUTO: Rolf Riesen is on vacation (returning 07/08/2012)"</a>
<li><strong>In reply to:</strong> <a href="19798.php">christophe petit: "[OMPI users] issue with 2 connected computers"</a>
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
