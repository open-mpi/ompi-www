<?
$subject_val = "Re: [OMPI users] Open MPI and SLURM_CPUS_PER_TASK";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 30 16:30:35 2011" -->
<!-- isoreceived="20111130213035" -->
<!-- sent="Wed, 30 Nov 2011 14:30:25 -0700" -->
<!-- isosent="20111130213025" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI and SLURM_CPUS_PER_TASK" -->
<!-- id="7164300A-A7EE-4886-8204-74BEBC3C9637_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20111128115021.fbaec476.geier_at_csc.uni-frankfurt.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI and SLURM_CPUS_PER_TASK<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-30 16:30:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17880.php">Patrik Jonsson: "Re: [OMPI users] Asymmetric performance with nonblocking, multithreaded communications"</a>
<li><strong>Previous message:</strong> <a href="17878.php">Ralph Castain: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
<li><strong>In reply to:</strong> <a href="17839.php">Igor Geier: "[OMPI users] Open MPI and SLURM_CPUS_PER_TASK"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/12/17882.php">Igor Geier: "Re: [OMPI users] Open MPI and SLURM_CPUS_PER_TASK"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/12/17882.php">Igor Geier: "Re: [OMPI users] Open MPI and SLURM_CPUS_PER_TASK"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Igor
<br>
<p>As I recall, this eventually traced back to a change in slurm at some point. I believe the latest interpretation is in line with your suggestion. I believe we didn't change it because nobody seemed to care very much, but I have no objection to including it in the next release.
<br>
<p>Thanks
<br>
ralph
<br>
<p>On Nov 28, 2011, at 3:50 AM, Igor Geier wrote:
<br>
<p><span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; there's been some discussions about this already, but the issue is still there (in 1.4.4). When running SLURM jobs with the --cpus-per-task parameter set (e.g. when running Open MPI-OpenMP jobs, so that --cpus-per-tasks corresponds to the number of OpenMP threads per rank), you get the
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;All nodes which are allocated for this job are already filled.&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; error, if SLURM_CPUS_PER_TASK &gt; SLURM_TASKS_PER_NODE. In ras_slurm_module.c, the number of slots is divided by the SLURM_CPUS_PER_TASK value (so that it becomes 0). The following patch seems to work for our cluster:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --- a/orte/mca/ras/slurm/ras_slurm_module.c     2009-12-08 21:36:38.000000000 +0100
</span><br>
<span class="quotelev1">&gt; +++ b/orte/mca/ras/slurm/ras_slurm_module.c     2011-11-25 12:28:55.000000000 +0100
</span><br>
<span class="quotelev1">&gt; @@ -353,7 +353,8 @@
</span><br>
<span class="quotelev1">&gt;         node-&gt;state = ORTE_NODE_STATE_UP;
</span><br>
<span class="quotelev1">&gt;         node-&gt;slots_inuse = 0;
</span><br>
<span class="quotelev1">&gt;         node-&gt;slots_max = 0;
</span><br>
<span class="quotelev1">&gt; -        node-&gt;slots = slots[i] / cpus_per_task;
</span><br>
<span class="quotelev1">&gt; +        /* Don't divide by cpus_per_task */
</span><br>
<span class="quotelev1">&gt; +        node-&gt;slots = slots[i]; 
</span><br>
<span class="quotelev1">&gt;         opal_list_append(nodelist, &amp;node-&gt;super);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;     free(slots);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are there situations where this might not work?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Igor
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Igor Geier
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------
</span><br>
<span class="quotelev1">&gt; Center for Scientific Computing (CSC)
</span><br>
<span class="quotelev1">&gt; University of Frankfurt
</span><br>
<span class="quotelev1">&gt; Max-von-Laue-Stra&#223;e 1
</span><br>
<span class="quotelev1">&gt; 60438 Frankfurt am Main
</span><br>
<span class="quotelev1">&gt; +49(0)69/798-47353
</span><br>
<span class="quotelev1">&gt; geier_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://csc.uni-frankfurt.de/">http://csc.uni-frankfurt.de/</a>
</span><br>
<span class="quotelev1">&gt; --------------------------------------
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17880.php">Patrik Jonsson: "Re: [OMPI users] Asymmetric performance with nonblocking, multithreaded communications"</a>
<li><strong>Previous message:</strong> <a href="17878.php">Ralph Castain: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
<li><strong>In reply to:</strong> <a href="17839.php">Igor Geier: "[OMPI users] Open MPI and SLURM_CPUS_PER_TASK"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/12/17882.php">Igor Geier: "Re: [OMPI users] Open MPI and SLURM_CPUS_PER_TASK"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/12/17882.php">Igor Geier: "Re: [OMPI users] Open MPI and SLURM_CPUS_PER_TASK"</a>
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
