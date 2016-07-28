<?
$subject_val = "Re: [OMPI users] OpenMPI and SGE";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 23 14:11:11 2009" -->
<!-- isoreceived="20090623181111" -->
<!-- sent="Tue, 23 Jun 2009 13:11:05 -0500" -->
<!-- isosent="20090623181105" -->
<!-- name="Ray Muno" -->
<!-- email="muno_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI and SGE" -->
<!-- id="4A411AB9.4070602_at_aem.umn.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4A4113DB.6030606_at_Sun.COM" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI and SGE<br>
<strong>From:</strong> Ray Muno (<em>muno_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-23 14:11:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9680.php">Jim Kress: "Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2 forcing all MPI	traffic over Ethernet instead of using Infiniband"</a>
<li><strong>Previous message:</strong> <a href="9678.php">Gus Correa: "Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2 forcing all MPI	traffic over Ethernet instead of using Infiniband"</a>
<li><strong>In reply to:</strong> <a href="9677.php">Rolf Vandevaart: "Re: [OMPI users] OpenMPI and SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9716.php">Ray Muno: "Re: [OMPI users] OpenMPI and SGE"</a>
<li><strong>Reply:</strong> <a href="9716.php">Ray Muno: "Re: [OMPI users] OpenMPI and SGE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rolf Vandevaart wrote:
<br>
<p><span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; PMGR_COLLECTIVE ERROR: unitialized MPI task: Missing required
</span><br>
<span class="quotelev2">&gt;&gt; environment variable: MPIRUN_RANK
</span><br>
<span class="quotelev2">&gt;&gt; PMGR_COLLECTIVE ERROR: PMGR_COLLECTIVE ERROR: unitialized MPI task:
</span><br>
<span class="quotelev2">&gt;&gt; Missing required environment variable: MPIRUN_RANK
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev1">&gt; I do not recognize these errors as part of Open MPI.  A google search
</span><br>
<span class="quotelev1">&gt; showed they might be coming from MVAPICH.  Is there a chance we are
</span><br>
<span class="quotelev1">&gt; using Open MPI to launch the jobs (via Open MPI mpirun) but we are
</span><br>
<span class="quotelev1">&gt; actually launching an application that is linked to MVAPICH?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
You are correct. I was trying to run the MVAPICH compiled test program.
<br>
<p>With an OpenMPI compiled test, I do get an extra line of output with the
<br>
verbose flag. The program just hangs at that point.
<br>
<p>[muno_at_compute-6-30 ~]$ which mpirun
<br>
/share/apps/opt/openmpi_pgi/bin/mpirun
<br>
<p><p>[muno_at_compute-6-30 ~]$ldd a.out
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libmpi_f90.so.0 =&gt;
<br>
/share/apps/opt/openmpi_pgi/lib/libmpi_f90.so.0 (0x00002aaaaaaad000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libmpi_f77.so.0 =&gt;
<br>
/share/apps/opt/openmpi_pgi/lib/libmpi_f77.so.0 (0x00002aaaaacb0000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libmpi.so.0 =&gt; /share/apps/opt/openmpi_pgi/lib/libmpi.so.0
<br>
(0x00002aaaaaee0000)
<br>
...
<br>
<p><p>&nbsp;mpirun -np $NSLOTS -mca pls_gridengine_verbose 1 a.out
<br>
Starting server daemon at host &quot;compute-6-25.local&quot;
<br>
Starting server daemon at host &quot;compute-1-1.local&quot;
<br>
Server daemon successfully started with task id &quot;1.compute-6-25&quot;
<br>
error: commlib error: access denied (client IP resolved to host name &quot;&quot;.
<br>
This is not identical to clients host name &quot;&quot;)
<br>
error: executing task of job 12144 failed: failed sending task to
<br>
execd_at_compute-1-1.local: can't find connection
<br>
[compute-6-25.local:10810] ERROR: A daemon on node compute-1-1.local
<br>
failed to start as expected.
<br>
[compute-6-25.local:10810] ERROR: There may be more information
<br>
available from
<br>
[compute-6-25.local:10810] ERROR: the 'qstat -t' command on the Grid
<br>
Engine tasks.
<br>
[compute-6-25.local:10810] ERROR: If the problem persists, please
<br>
restart the
<br>
[compute-6-25.local:10810] ERROR: Grid Engine PE job
<br>
[compute-6-25.local:10810] ERROR: The daemon exited unexpectedly with
<br>
status 1.
<br>
Establishing /usr/bin/ssh session to host compute-6-25.local ...
<br>
<p><p><p><pre>
-- 
 Ray Muno
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9680.php">Jim Kress: "Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2 forcing all MPI	traffic over Ethernet instead of using Infiniband"</a>
<li><strong>Previous message:</strong> <a href="9678.php">Gus Correa: "Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2 forcing all MPI	traffic over Ethernet instead of using Infiniband"</a>
<li><strong>In reply to:</strong> <a href="9677.php">Rolf Vandevaart: "Re: [OMPI users] OpenMPI and SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9716.php">Ray Muno: "Re: [OMPI users] OpenMPI and SGE"</a>
<li><strong>Reply:</strong> <a href="9716.php">Ray Muno: "Re: [OMPI users] OpenMPI and SGE"</a>
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
