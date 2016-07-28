<?
$subject_val = "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  2 11:34:03 2015" -->
<!-- isoreceived="20151002153403" -->
<!-- sent="Fri, 2 Oct 2015 15:33:57 +0000" -->
<!-- isosent="20151002153357" -->
<!-- name="Grigory Shamov" -->
<!-- email="Grigory.Shamov_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes" -->
<!-- id="D2340CA5.7DC00%Grigory.Shamov_at_ad.umanitoba.ca" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="560EA1D7.9030406_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes<br>
<strong>From:</strong> Grigory Shamov (<em>Grigory.Shamov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-02 11:33:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27772.php">Nathan Hjelm: "Re: [OMPI users] OpenMPI 1.8.8: Segfault when using non-blocking reduce operations with a user-defined operator"</a>
<li><strong>Previous message:</strong> <a href="27770.php">Marcin Krotkiewski: "[OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<li><strong>In reply to:</strong> <a href="27770.php">Marcin Krotkiewski: "[OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27774.php">Ralph Castain: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All,
<br>
<p>I just got the same behaviour with old Torque (2.5, uses cpusets) we have
<br>
and OpenMPI 1.10.0; when --bind-to core is set, occasionally (not always)
<br>
it fails 
<br>
<p>Open MPI tried to bind a new process, but something went wrong.  The
<br>
process was killed without launching the target application.  Your job
<br>
will now abort.
<br>
<p>&nbsp;&nbsp;Local host:        nXXX
<br>
&nbsp;&nbsp;Application name:
<br>
/global/software/espresso-5.2.1-intel14-ompi110/bin/pw.x
<br>
&nbsp;&nbsp;Error message:     hwloc_set_cpubind returned &quot;Error&quot; for bitmap &quot;0&quot;
<br>
&nbsp;&nbsp;Location:        
<br>
../../../../../openmpi-1.10.0/orte/mca/odls/default/odls_default_module.c:5
<br>
51
<br>
<p><p><p><pre>
-- 
Grigory Shamov
Westgrid/ComputeCanada Site Lead
University of Manitoba
E2-588 EITC Building,
(204) 474-9625
On 15-10-02 10:25 AM, &quot;users on behalf of Marcin Krotkiewski&quot;
&lt;users-bounces_at_[hidden] on behalf of marcin.krotkiewski_at_[hidden]&gt;
wrote:
&gt;Hi,
&gt;
&gt;I fail to make OpenMPI bind to cores correctly when running from within
&gt;SLURM-allocated CPU resources spread over a range of compute nodes in an
&gt;otherwise homogeneous cluster. I have found this thread
&gt;
&gt;<a href="http://www.open-mpi.org/community/lists/users/2014/06/24682.php">http://www.open-mpi.org/community/lists/users/2014/06/24682.php</a>
&gt;
&gt;and did try to use what Ralph suggested there (--hetero-nodes), but it
&gt;does not work (v. 1.10.0). When running with --report-bindings I get
&gt;messages like
&gt;
&gt;[compute-9-11.local:27571] MCW rank 10 is not bound (or bound to all
&gt;available processors)
&gt;
&gt;for all ranks outside of my first physical compute node. Moreover,
&gt;everything works as expected if I ask SLURM to assign entire compute
&gt;nodes. So it does look like Ralph's diagnose presented in that thread is
&gt;correct, just the --hetero-nodes switch does not work for me.
&gt;
&gt;I have written a short code that uses sched_getaffinity to print the
&gt;effective bindings: all MPI ranks except of those on the first node are
&gt;bound to all CPU cores allocated by SLURM.
&gt;
&gt;Do I have to do something except of --hetero-nodes, or is this a problem
&gt;that needs further investigation?
&gt;
&gt;Thanks a lot!
&gt;
&gt;Marcin
&gt;
&gt;_______________________________________________
&gt;users mailing list
&gt;users_at_[hidden]
&gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;Link to this post:
&gt;<a href="http://www.open-mpi.org/community/lists/users/2015/10/27770.php">http://www.open-mpi.org/community/lists/users/2015/10/27770.php</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27772.php">Nathan Hjelm: "Re: [OMPI users] OpenMPI 1.8.8: Segfault when using non-blocking reduce operations with a user-defined operator"</a>
<li><strong>Previous message:</strong> <a href="27770.php">Marcin Krotkiewski: "[OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<li><strong>In reply to:</strong> <a href="27770.php">Marcin Krotkiewski: "[OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27774.php">Ralph Castain: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
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
