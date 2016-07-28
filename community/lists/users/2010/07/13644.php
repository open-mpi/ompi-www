<?
$subject_val = "[OMPI users] orted unknown option &quot;--daemonize&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 15 05:18:34 2010" -->
<!-- isoreceived="20100715091834" -->
<!-- sent="Thu, 15 Jul 2010 17:18:28 +0800" -->
<!-- isosent="20100715091828" -->
<!-- name="TH Chew" -->
<!-- email="teonghan_at_[hidden]" -->
<!-- subject="[OMPI users] orted unknown option &amp;quot;--daemonize&amp;quot;" -->
<!-- id="AANLkTil81haV_sOEfS3VBAsr3pJF7CHWjRCXzktTkvsU_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] orted unknown option &quot;--daemonize&quot;<br>
<strong>From:</strong> TH Chew (<em>teonghan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-15 05:18:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13645.php">Lydia Heck: "[OMPI users] error in (Open MPI) 1.3.3r21324-ct8.2-b09b-r31"</a>
<li><strong>Previous message:</strong> <a href="13643.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13646.php">Jeff Squyres: "Re: [OMPI users] orted unknown option &quot;--daemonize&quot;"</a>
<li><strong>Reply:</strong> <a href="13646.php">Jeff Squyres: "Re: [OMPI users] orted unknown option &quot;--daemonize&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I am setting up a 7+1 nodes cluster for MD simulation, specifically using
<br>
GROMACS. I am using Ubuntu Lucid 64-bit on all machines. Installed gromacs,
<br>
gromacs-openmpi, and gromacs-mpich from the repository. MPICH version of
<br>
gromacs runs fine without any error. However, when I ran OpenMPI version of
<br>
gromacs by
<br>
<p>###########################################################################
<br>
mpirun.openmpi -np 8 -wdir /home/birg/Desktop/nfs/ -hostfile
<br>
~/Desktop/mpi_settings/hostfile mdrun_mpi.openmpi -v
<br>
###########################################################################
<br>
<p>an error occur, something like this
<br>
<p>###########################################################################
<br>
[birg-desktop-10:02101] Error: unknown option &quot;--daemonize&quot;
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
A daemon (pid 5598) died unexpectedly with status 251 while attempting
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
mpirun.openmpi noticed that the job aborted, but has no info as to the
<br>
process
<br>
that caused that situation.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun.openmpi was unable to cleanly terminate the daemons on the nodes
<br>
shown
<br>
below. Additional manual cleanup may be required - please refer to
<br>
the &quot;orte-clean&quot; tool for assistance.
<br>
--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;birg-desktop-04 - daemon did not report back when launched
<br>
&nbsp;&nbsp;&nbsp;&nbsp;birg-desktop-07 - daemon did not report back when launched
<br>
&nbsp;&nbsp;&nbsp;&nbsp;birg-desktop-10 - daemon did not report back when launched
<br>
###########################################################################
<br>
<p>It is strange that it only happen on one of the compute node
<br>
(birg-desktop-10). If I remove birg-desktop-10 from the hostfile, I can run
<br>
OpenMPI gromacs successfully. Any idea?
<br>
<p>Thanks.
<br>
<p><pre>
-- 
Regards,
THChew
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13644/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13645.php">Lydia Heck: "[OMPI users] error in (Open MPI) 1.3.3r21324-ct8.2-b09b-r31"</a>
<li><strong>Previous message:</strong> <a href="13643.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13646.php">Jeff Squyres: "Re: [OMPI users] orted unknown option &quot;--daemonize&quot;"</a>
<li><strong>Reply:</strong> <a href="13646.php">Jeff Squyres: "Re: [OMPI users] orted unknown option &quot;--daemonize&quot;"</a>
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
