<?
$subject_val = "Re: [OMPI users] Bindings not detected with slurm (srun)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 18 08:41:35 2011" -->
<!-- isoreceived="20110818124135" -->
<!-- sent="Thu, 18 Aug 2011 06:41:25 -0600" -->
<!-- isosent="20110818124125" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bindings not detected with slurm (srun)" -->
<!-- id="1D2A90F8-0FD1-482A-BB64-B7156B2B06DC_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="OF1B09D643.B4602DAC-ONC12578F0.002E03DC-C12578F0.002E523D_at_fraz.bull.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] Bindings not detected with slurm (srun)<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-18 08:41:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17070.php">Tom Rosmond: "[OMPI users] MPIIO and EXT3 file systems"</a>
<li><strong>Previous message:</strong> <a href="17068.php">pascal.deveze_at_[hidden]: "[OMPI users] Bindings not detected with slurm (srun)"</a>
<li><strong>In reply to:</strong> <a href="17068.php">pascal.deveze_at_[hidden]: "[OMPI users] Bindings not detected with slurm (srun)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17076.php">pascal.deveze_at_[hidden]: "Re: [OMPI users] Bindings not detected with slurm (srun)"</a>
<li><strong>Reply:</strong> <a href="17076.php">pascal.deveze_at_[hidden]: "Re: [OMPI users] Bindings not detected with slurm (srun)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Afraid I am confused. I assume this refers to the trunk, yes?
<br>
<p>I also assume you are talking about launching an application directly from srun as opposed to using mpirun - yes?
<br>
<p>In that case, I fail to understand what difference it makes regarding this proposed change. The application process is being directly bound by slurm, so what paffinity thinks is irrelevant, except perhaps for some debugging I suppose. Is that what you are concerned about?
<br>
<p>I'd just like to know what problem is actually being solved here. I agree that, if there is only one processor in a system, you are effectively &quot;bound&quot;.
<br>
<p><p>On Aug 18, 2011, at 2:25 AM, pascal.deveze_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When slurm is configured with the following parameters
</span><br>
<span class="quotelev1">&gt;   TaskPlugin=task/affinity
</span><br>
<span class="quotelev1">&gt;   TaskPluginParam=Cpusets
</span><br>
<span class="quotelev1">&gt; srun binds the processes by placing them into different
</span><br>
<span class="quotelev1">&gt; cpusets, each containing a single core.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; e.g. &quot;srun -N 2 -n 4&quot; will create 2 cpusets in each of the two allocated
</span><br>
<span class="quotelev1">&gt; nodes and place the four ranks there, each single rank with a singleton as
</span><br>
<span class="quotelev1">&gt; a cpu constraint.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The issue in that case is in the macro OPAL_PAFFINITY_PROCESS_IS_BOUND (in
</span><br>
<span class="quotelev1">&gt; opal/mca/paffinity/paffinity.h):
</span><br>
<span class="quotelev1">&gt;  . opal_paffinity_base_get_processor_info() fills in num_processors with 1
</span><br>
<span class="quotelev1">&gt; (this is the size of each cpu_set)
</span><br>
<span class="quotelev1">&gt;  . num_bound is set to 1 too
</span><br>
<span class="quotelev1">&gt; and this implies *bound=false
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, the binding is correctly done by slurm and not detected by MPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To support the cpuset binding done by slurm, I propose the following patch:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hg diff  opal/mca/paffinity/paffinity.h
</span><br>
<span class="quotelev1">&gt; diff -r 4d8c8a39b06f opal/mca/paffinity/paffinity.h
</span><br>
<span class="quotelev1">&gt; --- a/opal/mca/paffinity/paffinity.h    Thu Apr 21 17:38:00 2011 +0200
</span><br>
<span class="quotelev1">&gt; +++ b/opal/mca/paffinity/paffinity.h    Tue Jul 12 15:44:59 2011 +0200
</span><br>
<span class="quotelev1">&gt; @@ -218,7 +218,8 @@
</span><br>
<span class="quotelev1">&gt;                     num_bound++;                                    \
</span><br>
<span class="quotelev1">&gt;                 }                                                   \
</span><br>
<span class="quotelev1">&gt;             }                                                       \
</span><br>
<span class="quotelev1">&gt; -            if (0 &lt; num_bound &amp;&amp; num_bound &lt; num_processors) {      \
</span><br>
<span class="quotelev1">&gt; +            if (0 &lt; num_bound &amp;&amp; ((num_processors == 1) ||          \
</span><br>
<span class="quotelev1">&gt; +                                  (num_bound &lt; num_processors))) {  \
</span><br>
<span class="quotelev1">&gt;                 *(bound) = true;                                    \
</span><br>
<span class="quotelev1">&gt;             }                                                       \
</span><br>
<span class="quotelev1">&gt;         }                                                           \
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17070.php">Tom Rosmond: "[OMPI users] MPIIO and EXT3 file systems"</a>
<li><strong>Previous message:</strong> <a href="17068.php">pascal.deveze_at_[hidden]: "[OMPI users] Bindings not detected with slurm (srun)"</a>
<li><strong>In reply to:</strong> <a href="17068.php">pascal.deveze_at_[hidden]: "[OMPI users] Bindings not detected with slurm (srun)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17076.php">pascal.deveze_at_[hidden]: "Re: [OMPI users] Bindings not detected with slurm (srun)"</a>
<li><strong>Reply:</strong> <a href="17076.php">pascal.deveze_at_[hidden]: "Re: [OMPI users] Bindings not detected with slurm (srun)"</a>
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
