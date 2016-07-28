<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jan 24 13:02:52 2007" -->
<!-- isoreceived="20070124180252" -->
<!-- sent="Wed, 24 Jan 2007 13:02:46 -0500" -->
<!-- isosent="20070124180246" -->
<!-- name="Pak Lui" -->
<!-- email="Pak.Lui_at_[hidden]" -->
<!-- subject="Re: [OMPI users] nodes are oversubscribed in 1.1.1" -->
<!-- id="45B79F46.5090005_at_Sun.COM" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="0900D276-E8BA-4967-9766-3D7B50C3570F_at_galitz.org" -->
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
<strong>From:</strong> Pak Lui (<em>Pak.Lui_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-24 13:02:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2537.php">Reese Faucette: "[OMPI users] coredump in guess_strlen()"</a>
<li><strong>Previous message:</strong> <a href="2535.php">Geoff Galitz: "Re: [OMPI users] nodes are oversubscribed in 1.1.1"</a>
<li><strong>In reply to:</strong> <a href="2535.php">Geoff Galitz: "Re: [OMPI users] nodes are oversubscribed in 1.1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2537.php">Reese Faucette: "[OMPI users] coredump in guess_strlen()"</a>
<li><strong>Reply:</strong> <a href="2537.php">Reese Faucette: "[OMPI users] coredump in guess_strlen()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Geoff Galitz wrote:
<br>
<span class="quotelev1">&gt; On Jan 24, 2007, at 7:03 AM, Pak Lui wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Geoff Galitz wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On the following system:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenMPI 1.1.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SGE 6.0 (with tight integration)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Scientific Linux 4.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dual Dual-Core Opterons
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI jobs are oversubscribing to the nodes.  No matter where jobs  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; are  launched by the scheduler, they always stack up on the first  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node  (node00) and continue to stack even though the system load  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; exceeds 6  (on a 4 processor box).  Eeach node is defined as 4  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; slots with 4 max  slots.  The MPI jobs launch via &quot;mpirun -np  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (some-number-of- processors)&quot; from within the scheduler.
</span><br>
<span class="quotelev2">&gt;&gt; Hi Geoff,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think we first start having SGE support in 1.2, not in 1.1.1.  
</span><br>
<span class="quotelev2">&gt;&gt; Unless you did some modification on your own to include the  
</span><br>
<span class="quotelev2">&gt;&gt; gridengine ras/pls modules from v1.2, you probably are not using  
</span><br>
<span class="quotelev2">&gt;&gt; the SGE tight integration. So even though you start mpirun in the  
</span><br>
<span class="quotelev2">&gt;&gt; SGE parallel environment, ORTE does not have the gridengine modules  
</span><br>
<span class="quotelev2">&gt;&gt; for allocating and launching the jobs, so that could be why all  
</span><br>
<span class="quotelev2">&gt;&gt; processes are launched on the same node. (because there's no node  
</span><br>
<span class="quotelev2">&gt;&gt; list available from gridengine and it defaults to single node)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have used the backport instructions provided by Olli-Pekka Lehto.   
</span><br>
<span class="quotelev1">&gt; Of course, if it is running properly in my case, I can't say as I am  
</span><br>
<span class="quotelev1">&gt; certainly not getting the expected behavior, although the jobs do run.
</span><br>
<p>There are a few things you can try to validate if the gridengine plugin 
<br>
is being used. First, you might want to check ompi_info to see if 
<br>
'gridengine' is in the list. Another thing is to use the mpirun -d flag 
<br>
to show which ras and pls component that mpirun is running through. 
<br>
There are also a few of MCA params you can use to show when the 
<br>
gridengine ras+pls modules are in action. Here's a couple:
<br>
<p>&quot;-mca ras_gridengine_verbose 1&quot; would show the output from SGE as if you 
<br>
are passing in the -verbose flag to qrsh.
<br>
&quot;-mca pls_gridengine_debug 1&quot; would show you the qrsh -inherit command
<br>
that is used to send the job to SGE.
<br>
<p>If you are not able to see those outputs, chances are mpirun is not 
<br>
using the gridengine modules. And that might be a problem with your 
<br>
setup. I would suggest you to either verify the build process, or try 
<br>
out the v1.2 instead.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On a related note, there is a way for SGE to allocate and assign  
</span><br>
<span class="quotelev2">&gt;&gt; slots for launching tasks. It is done by setting the allocation  
</span><br>
<span class="quotelev2">&gt;&gt; rule in the parallel environment (PE). If all of the slots are  
</span><br>
<span class="quotelev2">&gt;&gt; allocated on the same node, it sounds like the allocation rule has  
</span><br>
<span class="quotelev2">&gt;&gt; been set to $fill_up. Maybe you can try with $round_robin instead?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I use $round_robin, one MPI process starts up per node and then  
</span><br>
<span class="quotelev1">&gt; wraps around the cluster.  So if I have 4 process MPI job, it starts  
</span><br>
<span class="quotelev1">&gt; 1 process on 4 nodes which is certainly not the most efficient method.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It seems to me that MPI is not detecting that the nodes are   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; overloaded and that due to the way the job slots are defined and  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; how  mpirun is being called.  If I read the documentation  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; correctly, a  single mpirun run consumes one job slot no matter  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the number of  processes which are launched.  We can chagne the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; number of job slots,  but then we expect to waste processors since  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; only one mpirun job will  run on any node, even if the job is only  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a two processor job.
</span><br>
<span class="quotelev2">&gt;&gt; As for oversubscription, I remember we start having that - 
</span><br>
<span class="quotelev2">&gt;&gt; nooversubscribe option in v1.2 so if you want to limit ORTE from  
</span><br>
<span class="quotelev2">&gt;&gt; oversubscribing because by default oversubscription is allowed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So it seems the real story for me is that there is no logic that  
</span><br>
<span class="quotelev1">&gt; detects the oversubscription condition and re-schedules the job for  
</span><br>
<span class="quotelev1">&gt; another node in the MPI nodelist in OpenMPI 1.1.1?  If so, that would  
</span><br>
<span class="quotelev1">&gt; certainly explain what I am seeing.  Is that correct?
</span><br>
<p>Actually I take back the comment about v1.1.1 doesn't have the 
<br>
-oversubscription option. It just check the source and it's there in 
<br>
orterun, so there is that option available to prevent oversubscription.
<br>
<p>The behavior you are seeing is probably due the resource allocation 
<br>
(RAS) not getting the nodelist (from SGE), so RMAPS does not have the 
<br>
nodelist to map the processes to, and therefore it's using the same node 
<br>
to launch the user processes.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -geoff
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
Thanks,
- Pak Lui
pak.lui_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2537.php">Reese Faucette: "[OMPI users] coredump in guess_strlen()"</a>
<li><strong>Previous message:</strong> <a href="2535.php">Geoff Galitz: "Re: [OMPI users] nodes are oversubscribed in 1.1.1"</a>
<li><strong>In reply to:</strong> <a href="2535.php">Geoff Galitz: "Re: [OMPI users] nodes are oversubscribed in 1.1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2537.php">Reese Faucette: "[OMPI users] coredump in guess_strlen()"</a>
<li><strong>Reply:</strong> <a href="2537.php">Reese Faucette: "[OMPI users] coredump in guess_strlen()"</a>
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
