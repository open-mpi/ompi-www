<?
$subject_val = "Re: [OMPI users] How do I run several mpi jobs in a single allocation?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  9 10:41:23 2012" -->
<!-- isoreceived="20120109154123" -->
<!-- sent="Mon, 9 Jan 2012 08:41:07 -0700" -->
<!-- isosent="20120109154107" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How do I run several mpi jobs in a single allocation?" -->
<!-- id="42454C08-936D-4910-8F44-79F0F02B7F5A_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="0458DF31F610EF42BFC78C497E806C7B039C7217_at_ECS-EXG-P-MB03.win.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] How do I run several mpi jobs in a single allocation?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-09 10:41:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18116.php">Anas Al-Trad: "[OMPI users] SIGV at MPI_Cart_sub"</a>
<li><strong>Previous message:</strong> <a href="18114.php">Thompson, Kelly G: "[OMPI users] How do I run several mpi jobs in a single allocation?"</a>
<li><strong>In reply to:</strong> <a href="18114.php">Thompson, Kelly G: "[OMPI users] How do I run several mpi jobs in a single allocation?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Kelly
<br>
<p>Each instance of mpirun is independent - there is no cross-mpirun coordination. So they will indeed trip over each other as you describe.
<br>
<p>In more recent versions, you can restrict the available cores for each mpirun execution by having the external system &quot;bind&quot; OMPI to some subset of the available cores. However, I don't believe Torque provides that capability.
<br>
<p>You can also set the default cpu set to be used - try adding -mca orte_cpu_set 1,2  where 1,2 are the cores you want that execution to use.
<br>
<p>I can't guarantee it will work as I'm not sure it has been robustly tested, but it is supposed to do what you described (I added it for some other folks at LANL). Let me know and I'll fix it if required.
<br>
<p>Alternatively, you can leave the procs unbound as you are doing and they'll run just fine, albeit a little slower.
<br>
Ralph
<br>
<p>On Jan 9, 2012, at 8:24 AM, Thompson, Kelly G wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I am interested in running a handful of mpirun jobs in a single allocation.  For example, my allocation is 2 nodes with 8 cores on each node (total of 16 cores).  I want to run 2 five-rank jobs and 3 two-rank jobs simultaneously (total of 16 cores) and w/o oversubscribing any single core.  I am currently using &#145;--mca mpi_paffinity_alone 0&#146; and that appears to work, but it looks like recent versions (1.4+) of OpenMPI have better controls for processor affinity.  Is there a better choice of flags for my situation?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; The bigger picture is that I am running 400-600 small unit tests in a single Torque allocation.  My testing framework is aware of total available cores and the cores required per test so that the total simultaneous core count never exceeds my allocation.  However, if I use any option other than &#145;--mca mpi_paffinity_alone 0&#146;, mpirun will place multiple jobs on the same cores and leave many cores with nothing to do.  Is there a good description for how mpirun assigns jobs to cores &#150; particularly in the situation where there are multiple mpirun jobs running on the same allocation?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; TIA
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -kt
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; Kelly Thompson
</span><br>
<span class="quotelev1">&gt; kgt_at_[hidden]
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18115/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18116.php">Anas Al-Trad: "[OMPI users] SIGV at MPI_Cart_sub"</a>
<li><strong>Previous message:</strong> <a href="18114.php">Thompson, Kelly G: "[OMPI users] How do I run several mpi jobs in a single allocation?"</a>
<li><strong>In reply to:</strong> <a href="18114.php">Thompson, Kelly G: "[OMPI users] How do I run several mpi jobs in a single allocation?"</a>
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
