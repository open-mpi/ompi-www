<?
$subject_val = "Re: [OMPI users] Bindings not detected with slurm (srun)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 22 09:49:50 2011" -->
<!-- isoreceived="20110822134950" -->
<!-- sent="Mon, 22 Aug 2011 07:47:09 -0600" -->
<!-- isosent="20110822134709" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bindings not detected with slurm (srun)" -->
<!-- id="6514B8C1-90BE-4F51-8558-FB12E4FD711C_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="OF4C90A9D4.C61EAA23-ONC12578F0.004C97E7-C12578F4.00495CA5_at_fraz.bull.fr" -->
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
<strong>Date:</strong> 2011-08-22 09:47:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17078.php">Rob Latham: "Re: [OMPI users] MPIIO and EXT3 file systems"</a>
<li><strong>Previous message:</strong> <a href="17076.php">pascal.deveze_at_[hidden]: "Re: [OMPI users] Bindings not detected with slurm (srun)"</a>
<li><strong>In reply to:</strong> <a href="17076.php">pascal.deveze_at_[hidden]: "Re: [OMPI users] Bindings not detected with slurm (srun)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Okay - thx! I'll install in trunk and schedule for 1.5
<br>
<p><p>On Aug 22, 2011, at 7:20 AM, pascal.deveze_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; users-bounces_at_[hidden] a &#233;crit sur 18/08/2011 14:41:25 :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; De : Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A : Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Date : 18/08/2011 14:45
</span><br>
<span class="quotelev2">&gt;&gt; Objet : Re: [OMPI users] Bindings not detected with slurm (srun)
</span><br>
<span class="quotelev2">&gt;&gt; Envoy&#233; par : users-bounces_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Afraid I am confused. I assume this refers to the trunk, yes?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I work with V1.5.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I also assume you are talking about launching an application
</span><br>
<span class="quotelev2">&gt;&gt; directly from srun as opposed to using mpirun - yes?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In that case, I fail to understand what difference it makes
</span><br>
<span class="quotelev2">&gt;&gt; regarding this proposed change. The application process is being
</span><br>
<span class="quotelev2">&gt;&gt; directly bound by slurm, so what paffinity thinks is irrelevant,
</span><br>
<span class="quotelev2">&gt;&gt; except perhaps for some debugging I suppose. Is that what you are
</span><br>
<span class="quotelev2">&gt;&gt; concerned about?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a framework that has to check if the processes are bound. This
</span><br>
<span class="quotelev1">&gt; framework
</span><br>
<span class="quotelev1">&gt; uses the macro OPAL_PAFFINITY_PROCESS_IS_BOUND and really needs that all
</span><br>
<span class="quotelev1">&gt; processes are bound.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That runs well except when I use srun with slurm configured to bind
</span><br>
<span class="quotelev1">&gt; each single rank with a singleton.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For exemple, I use nodes with 8 sockets of 4 cores. The command srun
</span><br>
<span class="quotelev1">&gt; generates 32 cpusets (one for each core) and binds the 32 processes, one
</span><br>
<span class="quotelev1">&gt; on each cpuset.
</span><br>
<span class="quotelev1">&gt; Then the macro returns *bound=false, and my framework considers that the
</span><br>
<span class="quotelev1">&gt; processes are not bound  and doesn't do the job correctly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The patch modifies the macro to return *bound=true when a single
</span><br>
<span class="quotelev1">&gt; process is bound to a cpuset of one core.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'd just like to know what problem is actually being solved here. I
</span><br>
<span class="quotelev2">&gt;&gt; agree that, if there is only one processor in a system, you are
</span><br>
<span class="quotelev2">&gt;&gt; effectively &quot;bound&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 18, 2011, at 2:25 AM, pascal.deveze_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When slurm is configured with the following parameters
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  TaskPlugin=task/affinity
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  TaskPluginParam=Cpusets
</span><br>
<span class="quotelev3">&gt;&gt;&gt; srun binds the processes by placing them into different
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpusets, each containing a single core.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; e.g. &quot;srun -N 2 -n 4&quot; will create 2 cpusets in each of the two
</span><br>
<span class="quotelev1">&gt; allocated
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nodes and place the four ranks there, each single rank with a singleton
</span><br>
<span class="quotelev1">&gt; as
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a cpu constraint.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The issue in that case is in the macro OPAL_PAFFINITY_PROCESS_IS_BOUND
</span><br>
<span class="quotelev1">&gt; (in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal/mca/paffinity/paffinity.h):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; . opal_paffinity_base_get_processor_info() fills in num_processors
</span><br>
<span class="quotelev1">&gt; with 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (this is the size of each cpu_set)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; . num_bound is set to 1 too
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and this implies *bound=false
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So, the binding is correctly done by slurm and not detected by MPI.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To support the cpuset binding done by slurm, I propose the following
</span><br>
<span class="quotelev1">&gt; patch:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hg diff  opal/mca/paffinity/paffinity.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt; diff -r 4d8c8a39b06f opal/mca/paffinity/paffinity.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- a/opal/mca/paffinity/paffinity.h    Thu Apr 21 17:38:00 2011 +0200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ b/opal/mca/paffinity/paffinity.h    Tue Jul 12 15:44:59 2011 +0200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -218,7 +218,8 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    num_bound++;                                    \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                }                                                   \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            }                                                       \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -            if (0 &lt; num_bound &amp;&amp; num_bound &lt; num_processors) {      \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +            if (0 &lt; num_bound &amp;&amp; ((num_processors == 1) ||          \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                                  (num_bound &lt; num_processors))) {  \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                *(bound) = true;                                    \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            }                                                       \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        }                                                           \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17078.php">Rob Latham: "Re: [OMPI users] MPIIO and EXT3 file systems"</a>
<li><strong>Previous message:</strong> <a href="17076.php">pascal.deveze_at_[hidden]: "Re: [OMPI users] Bindings not detected with slurm (srun)"</a>
<li><strong>In reply to:</strong> <a href="17076.php">pascal.deveze_at_[hidden]: "Re: [OMPI users] Bindings not detected with slurm (srun)"</a>
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
