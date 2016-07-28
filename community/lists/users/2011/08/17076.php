<?
$subject_val = "Re: [OMPI users] Bindings not detected with slurm (srun)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 22 09:20:44 2011" -->
<!-- isoreceived="20110822132044" -->
<!-- sent="Mon, 22 Aug 2011 15:20:39 +0200" -->
<!-- isosent="20110822132039" -->
<!-- name="pascal.deveze_at_[hidden]" -->
<!-- email="pascal.deveze_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bindings not detected with slurm (srun)" -->
<!-- id="OF4C90A9D4.C61EAA23-ONC12578F0.004C97E7-C12578F4.00495CA5_at_fraz.bull.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1D2A90F8-0FD1-482A-BB64-B7156B2B06DC_at_open-mpi.org" -->
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
<strong>From:</strong> <a href="mailto:pascal.deveze_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Bindings%20not%20detected%20with%20slurm%20(srun)"><em>pascal.deveze_at_[hidden]</em></a><br>
<strong>Date:</strong> 2011-08-22 09:20:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17077.php">Ralph Castain: "Re: [OMPI users] Bindings not detected with slurm (srun)"</a>
<li><strong>Previous message:</strong> <a href="17075.php">&#229;&#144;&#149;&#230;&#133;&#167;&#228;&#188;&#159;: "Re: [OMPI users] Open MPI 1.4: [connect/btl_openib_connect_oob.c:463:qp_create_one] error creating qp errno says Cannot allocate memory"</a>
<li><strong>In reply to:</strong> <a href="17069.php">Ralph Castain: "Re: [OMPI users] Bindings not detected with slurm (srun)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17077.php">Ralph Castain: "Re: [OMPI users] Bindings not detected with slurm (srun)"</a>
<li><strong>Reply:</strong> <a href="17077.php">Ralph Castain: "Re: [OMPI users] Bindings not detected with slurm (srun)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
users-bounces_at_[hidden] a &#233;crit sur 18/08/2011 14:41:25 :
<br>
<p><span class="quotelev1">&gt; De : Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; A : Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date : 18/08/2011 14:45
</span><br>
<span class="quotelev1">&gt; Objet : Re: [OMPI users] Bindings not detected with slurm (srun)
</span><br>
<span class="quotelev1">&gt; Envoy&#233; par : users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Afraid I am confused. I assume this refers to the trunk, yes?
</span><br>
<p>I work with V1.5.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I also assume you are talking about launching an application
</span><br>
<span class="quotelev1">&gt; directly from srun as opposed to using mpirun - yes?
</span><br>
<p>Yes
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In that case, I fail to understand what difference it makes
</span><br>
<span class="quotelev1">&gt; regarding this proposed change. The application process is being
</span><br>
<span class="quotelev1">&gt; directly bound by slurm, so what paffinity thinks is irrelevant,
</span><br>
<span class="quotelev1">&gt; except perhaps for some debugging I suppose. Is that what you are
</span><br>
<span class="quotelev1">&gt; concerned about?
</span><br>
<p>I have a framework that has to check if the processes are bound. This
<br>
framework
<br>
uses the macro OPAL_PAFFINITY_PROCESS_IS_BOUND and really needs that all
<br>
processes are bound.
<br>
<p>That runs well except when I use srun with slurm configured to bind
<br>
each single rank with a singleton.
<br>
<p>For exemple, I use nodes with 8 sockets of 4 cores. The command srun
<br>
generates 32 cpusets (one for each core) and binds the 32 processes, one
<br>
on each cpuset.
<br>
Then the macro returns *bound=false, and my framework considers that the
<br>
processes are not bound  and doesn't do the job correctly.
<br>
<p>The patch modifies the macro to return *bound=true when a single
<br>
process is bound to a cpuset of one core.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'd just like to know what problem is actually being solved here. I
</span><br>
<span class="quotelev1">&gt; agree that, if there is only one processor in a system, you are
</span><br>
<span class="quotelev1">&gt; effectively &quot;bound&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 18, 2011, at 2:25 AM, pascal.deveze_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi all,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; When slurm is configured with the following parameters
</span><br>
<span class="quotelev2">&gt; &gt;   TaskPlugin=task/affinity
</span><br>
<span class="quotelev2">&gt; &gt;   TaskPluginParam=Cpusets
</span><br>
<span class="quotelev2">&gt; &gt; srun binds the processes by placing them into different
</span><br>
<span class="quotelev2">&gt; &gt; cpusets, each containing a single core.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; e.g. &quot;srun -N 2 -n 4&quot; will create 2 cpusets in each of the two
</span><br>
allocated
<br>
<span class="quotelev2">&gt; &gt; nodes and place the four ranks there, each single rank with a singleton
</span><br>
as
<br>
<span class="quotelev2">&gt; &gt; a cpu constraint.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The issue in that case is in the macro OPAL_PAFFINITY_PROCESS_IS_BOUND
</span><br>
(in
<br>
<span class="quotelev2">&gt; &gt; opal/mca/paffinity/paffinity.h):
</span><br>
<span class="quotelev2">&gt; &gt;  . opal_paffinity_base_get_processor_info() fills in num_processors
</span><br>
with 1
<br>
<span class="quotelev2">&gt; &gt; (this is the size of each cpu_set)
</span><br>
<span class="quotelev2">&gt; &gt;  . num_bound is set to 1 too
</span><br>
<span class="quotelev2">&gt; &gt; and this implies *bound=false
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; So, the binding is correctly done by slurm and not detected by MPI.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; To support the cpuset binding done by slurm, I propose the following
</span><br>
patch:
<br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; hg diff  opal/mca/paffinity/paffinity.h
</span><br>
<span class="quotelev2">&gt; &gt; diff -r 4d8c8a39b06f opal/mca/paffinity/paffinity.h
</span><br>
<span class="quotelev2">&gt; &gt; --- a/opal/mca/paffinity/paffinity.h    Thu Apr 21 17:38:00 2011 +0200
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/opal/mca/paffinity/paffinity.h    Tue Jul 12 15:44:59 2011 +0200
</span><br>
<span class="quotelev2">&gt; &gt; @@ -218,7 +218,8 @@
</span><br>
<span class="quotelev2">&gt; &gt;                     num_bound++;                                    \
</span><br>
<span class="quotelev2">&gt; &gt;                 }                                                   \
</span><br>
<span class="quotelev2">&gt; &gt;             }                                                       \
</span><br>
<span class="quotelev2">&gt; &gt; -            if (0 &lt; num_bound &amp;&amp; num_bound &lt; num_processors) {      \
</span><br>
<span class="quotelev2">&gt; &gt; +            if (0 &lt; num_bound &amp;&amp; ((num_processors == 1) ||          \
</span><br>
<span class="quotelev2">&gt; &gt; +                                  (num_bound &lt; num_processors))) {  \
</span><br>
<span class="quotelev2">&gt; &gt;                 *(bound) = true;                                    \
</span><br>
<span class="quotelev2">&gt; &gt;             }                                                       \
</span><br>
<span class="quotelev2">&gt; &gt;         }                                                           \
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="17077.php">Ralph Castain: "Re: [OMPI users] Bindings not detected with slurm (srun)"</a>
<li><strong>Previous message:</strong> <a href="17075.php">&#229;&#144;&#149;&#230;&#133;&#167;&#228;&#188;&#159;: "Re: [OMPI users] Open MPI 1.4: [connect/btl_openib_connect_oob.c:463:qp_create_one] error creating qp errno says Cannot allocate memory"</a>
<li><strong>In reply to:</strong> <a href="17069.php">Ralph Castain: "Re: [OMPI users] Bindings not detected with slurm (srun)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17077.php">Ralph Castain: "Re: [OMPI users] Bindings not detected with slurm (srun)"</a>
<li><strong>Reply:</strong> <a href="17077.php">Ralph Castain: "Re: [OMPI users] Bindings not detected with slurm (srun)"</a>
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
