<?
$subject_val = "[OMPI users] OpenMPI and SGE";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 23 10:02:15 2009" -->
<!-- isoreceived="20090623140215" -->
<!-- sent="Tue, 23 Jun 2009 09:02:07 -0500" -->
<!-- isosent="20090623140207" -->
<!-- name="Ray Muno" -->
<!-- email="muno_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI and SGE" -->
<!-- id="4A40E05F.5050704_at_aem.umn.edu" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI and SGE<br>
<strong>From:</strong> Ray Muno (<em>muno_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-23 10:02:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9672.php">Ray Muno: "Re: [OMPI users] OpenMPI and SGE"</a>
<li><strong>Previous message:</strong> <a href="9670.php">Pavel Shamis (Pasha): "Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2 forcing all MPI	traffic over Ethernet instead of using Infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9672.php">Ray Muno: "Re: [OMPI users] OpenMPI and SGE"</a>
<li><strong>Reply:</strong> <a href="9672.php">Ray Muno: "Re: [OMPI users] OpenMPI and SGE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We are running a cluster using Rocks 5.0 and OpenMPI 1.2 (primarily).
<br>
Scheduling is done through SGE.  MPI communication is over InfiniBand.
<br>
<p>We have been running with this setup for over 9 months.  Last week, all
<br>
user jobs stopped executing (cluster load dropped to zero).  User can
<br>
schedule jobs but when they try to execute, they get errors of the form:
<br>
<p>-----------------------------------------
<br>
[compute-2-5.local:12321] ERROR: The daemon exited unexpectedly with
<br>
status 1.
<br>
error: commlib error: access denied (client IP resolved to host name &quot;&quot;.
<br>
This is not identical to clients host name &quot;&quot;)
<br>
error: executing task of job 11901 failed: failed sending task to
<br>
execd_at_compute-5-9.local: can't find connection
<br>
[compute-2-5.local:12321] ERROR: A daemon on node compute-5-9.local
<br>
failed to start as expected.
<br>
[compute-2-5.local:12321] ERROR: There may be more information available
<br>
from
<br>
[compute-2-5.local:12321] ERROR: the 'qstat -t' command on the Grid
<br>
Engine tasks.
<br>
[compute-2-5.local:12321] ERROR: If the problem persists, please restart
<br>
the
<br>
[compute-2-5.local:12321] ERROR: Grid Engine PE job
<br>
[compute-2-5.local:12321] ERROR: The daemon exited unexpectedly with
<br>
status 1.
<br>
error: commlib error: access denied (client IP resolved to host name &quot;&quot;.
<br>
This is not identical to clients host name &quot;&quot;)
<br>
<p><p>When run interactively, we see.
<br>
<p>---------------------------------------------
<br>
error: commlib error: access denied (client IP resolved to host name &quot;&quot;.
<br>
This is not identical to clients host name &quot;&quot;)
<br>
error: executing task of job 12094 failed: failed sending task to
<br>
execd_at_compute-4-11.local: can't find connection
<br>
--------------------------------------------------------------------------
<br>
A daemon (pid 4938) died unexpectedly with status 1 while attempting
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
mpirun noticed that the job aborted, but has no info as to the process
<br>
that caused that situation.
<br>
--------------------------------------------------------------------------
<br>
mpirun: clean termination accomplished
<br>
---------------------------------------------
<br>
<p>This seems to be an error with SGE but it is only affecting OpenMPI.
<br>
User can successfully launch and run jobs with MVAPICH.
<br>
<p>Some changes were made to the ROCKS setup that may have caused this but
<br>
I have not found where the actual problems lies.
<br>
<p><pre>
-- 
 Ray Muno
 University of Minnesota
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9672.php">Ray Muno: "Re: [OMPI users] OpenMPI and SGE"</a>
<li><strong>Previous message:</strong> <a href="9670.php">Pavel Shamis (Pasha): "Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2 forcing all MPI	traffic over Ethernet instead of using Infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9672.php">Ray Muno: "Re: [OMPI users] OpenMPI and SGE"</a>
<li><strong>Reply:</strong> <a href="9672.php">Ray Muno: "Re: [OMPI users] OpenMPI and SGE"</a>
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
