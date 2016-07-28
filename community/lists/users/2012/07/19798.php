<?
$subject_val = "[OMPI users] issue with 2 connected computers";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 20 00:13:08 2012" -->
<!-- isoreceived="20120720041308" -->
<!-- sent="Fri, 20 Jul 2012 06:13:03 +0200" -->
<!-- isosent="20120720041303" -->
<!-- name="christophe petit" -->
<!-- email="christophe.petit09_at_[hidden]" -->
<!-- subject="[OMPI users] issue with 2 connected computers" -->
<!-- id="CAPW4YGJZhVE-Z9SgXOqnGpVvjjTHt1G-t2z_29BevOsu01C8Cg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] issue with 2 connected computers<br>
<strong>From:</strong> christophe petit (<em>christophe.petit09_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-20 00:13:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19799.php">Rolf Riesen: "[OMPI users] AUTO: Rolf Riesen is on vacation (returning 07/08/2012)"</a>
<li><strong>Previous message:</strong> <a href="19797.php">Iliev, Hristo: "Re: [OMPI users] mpirun command gives ERROR"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19800.php">Ralph Castain: "Re: [OMPI users] issue with 2 connected computers"</a>
<li><strong>Reply:</strong> <a href="19800.php">Ralph Castain: "Re: [OMPI users] issue with 2 connected computers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I try to launch an executable on 2 computers ( Debian 6.0 and MacOS snow
<br>
leopard ).
<br>
<p>I have successfully installed on both Open-MPI 1.6 with the option
<br>
&quot;--enable-heterogenous&quot; and
<br>
setup passwordless ssh connection between the 2 computers.
<br>
<p>My issue is that the distributed computing works fine but only when I
<br>
launch the
<br>
&quot;mpirun -np 16 -hostfile hosts.txt program_exec&quot; command from the MacOS
<br>
computer, not from Debian pc.
<br>
<p>However, I have disabled firewall on MacOS with :
<br>
<p>sysctl -w net.inet.ip.fw.enable=0
<br>
<p>When I launched from Debian, I get :
<br>
<p>*~/mpirun -np 16 -hostfile hosts.txt program_exec
<br>
<p>[maco:01498] Error: unknown option &quot;--daemonize&quot;
<br>
Usage: orted [OPTION]...
<br>
Start an Open RTE Daemon
<br>
<p>&nbsp;&nbsp;&nbsp;--bootproxy &lt;arg0&gt;    Run as boot proxy for &lt;job-id&gt;
<br>
-d|--debug               Debug the OpenRTE
<br>
-d|--spin                Have the orted spin until we can connect a debugger
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;to it
<br>
&nbsp;&nbsp;&nbsp;--debug-daemons       Enable debugging of OpenRTE daemons
<br>
&nbsp;&nbsp;&nbsp;--debug-daemons-file  Enable debugging of OpenRTE daemons, storing output
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;in files
<br>
&nbsp;&nbsp;&nbsp;--gprreplica &lt;arg0&gt;   Registry contact information.
<br>
-h|--help                This help message
<br>
&nbsp;&nbsp;&nbsp;--mpi-call-yield &lt;arg0&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Have MPI (or similar) applications call yield when
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;idle
<br>
&nbsp;&nbsp;&nbsp;--name &lt;arg0&gt;         Set the orte process name
<br>
&nbsp;&nbsp;&nbsp;--no-daemonize        Don't daemonize into the background
<br>
&nbsp;&nbsp;&nbsp;--nodename &lt;arg0&gt;     Node name as specified by host/resource
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;description.
<br>
&nbsp;&nbsp;&nbsp;--ns-nds &lt;arg0&gt;       set sds/nds component to use for daemon (normally
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;not needed)
<br>
&nbsp;&nbsp;&nbsp;--nsreplica &lt;arg0&gt;    Name service contact information.
<br>
&nbsp;&nbsp;&nbsp;--num_procs &lt;arg0&gt;    Set the number of process in this job
<br>
&nbsp;&nbsp;&nbsp;--persistent          Remain alive after the application process
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;completes
<br>
&nbsp;&nbsp;&nbsp;--report-uri &lt;arg0&gt;   Report this process' uri on indicated pipe
<br>
&nbsp;&nbsp;&nbsp;--scope &lt;arg0&gt;        Set restrictions on who can connect to this
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;universe
<br>
&nbsp;&nbsp;&nbsp;--seed                Host replicas for the core universe services
<br>
&nbsp;&nbsp;&nbsp;--set-sid             Direct the orted to separate from the current
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;session
<br>
&nbsp;&nbsp;&nbsp;--tmpdir &lt;arg0&gt;       Set the root for the session directory tree
<br>
&nbsp;&nbsp;&nbsp;--universe &lt;arg0&gt;     Set the universe name as
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;username_at_hostname:universe_name for this
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;application
<br>
&nbsp;&nbsp;&nbsp;--vpid_start &lt;arg0&gt;   Set the starting vpid for this job
<br>
--------------------------------------------------------------------------
<br>
A daemon (pid 24370) died unexpectedly with status 251 while attempting
<br>
to launch so we are aborting.
<br>
<p>There may be more information reported by the environment (see above).
<br>
<p>This may be because the daemon was unable to find all the needed shared
<br>
libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
<br>
location of the shared libraries on the remote nodes and this will
<br>
automatically be forwarded to the remote nodes.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that the job aborted, but has no info as to the process
<br>
that caused that situation.
<br>
--------------------------------------------------------------------------
<br>
*
<br>
LD_LIBRARY_PATH and PATH are correctly set on both ( Open-MPI is installed
<br>
on
<br>
&quot;/usr/local/openmpi/&quot; ).
<br>
<p>Apparently, the problem comes from the Debian pc ...
<br>
<p>If anyone sees what's wrong ?
<br>
<p>Thanks.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19798/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19799.php">Rolf Riesen: "[OMPI users] AUTO: Rolf Riesen is on vacation (returning 07/08/2012)"</a>
<li><strong>Previous message:</strong> <a href="19797.php">Iliev, Hristo: "Re: [OMPI users] mpirun command gives ERROR"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19800.php">Ralph Castain: "Re: [OMPI users] issue with 2 connected computers"</a>
<li><strong>Reply:</strong> <a href="19800.php">Ralph Castain: "Re: [OMPI users] issue with 2 connected computers"</a>
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
