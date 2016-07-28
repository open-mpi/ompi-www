<?
$subject_val = "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 20 17:46:35 2013" -->
<!-- isoreceived="20130920214635" -->
<!-- sent="Fri, 20 Sep 2013 14:46:31 -0700" -->
<!-- isosent="20130920214631" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64" -->
<!-- id="0F3321F6-89F1-4285-8ABB-E4B301A9F90F_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="523CC10A.60003_at_debian.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-20 17:46:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12957.php">Vallee, Geoffroy R.: "[OMPI devel] Problem with multiple identical entries in ~/.openmpi/mca-params.conf"</a>
<li><strong>Previous message:</strong> <a href="12955.php">Sylvestre Ledru: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<li><strong>In reply to:</strong> <a href="12955.php">Sylvestre Ledru: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12958.php">Sylvestre Ledru: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<li><strong>Reply:</strong> <a href="12958.php">Sylvestre Ledru: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That's it?? Wow, that was useless. Can you attach to mpirun with gdb and tell me where it is sitting?
<br>
<p>On Sep 20, 2013, at 2:41 PM, Sylvestre Ledru &lt;sylvestre_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On 20/09/2013 23:36, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Nothing leaps to mind - not seeing that anywhere else. If that's all you saw, then it doesn't look like it even got to the point of trying to launch something. You might set the following:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -mca plm_base_verbose 5 -mca ras_base_verbose 5 -mca rmaps_base_verbose 5 -mca ess_base_verbose 5 foo
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; Sure, here it is:
</span><br>
<span class="quotelev1">&gt; [merulo:31097] mca:base:select:(  ess) Querying component [env]
</span><br>
<span class="quotelev1">&gt; [merulo:31097] mca:base:select:(  ess) Skipping component [env]. Query
</span><br>
<span class="quotelev1">&gt; failed to return a module
</span><br>
<span class="quotelev1">&gt; [merulo:31097] mca:base:select:(  ess) Querying component [hnp]
</span><br>
<span class="quotelev1">&gt; [merulo:31097] mca:base:select:(  ess) Query of component [hnp] set
</span><br>
<span class="quotelev1">&gt; priority to 100
</span><br>
<span class="quotelev1">&gt; [merulo:31097] mca:base:select:(  ess) Querying component [singleton]
</span><br>
<span class="quotelev1">&gt; [merulo:31097] mca:base:select:(  ess) Skipping component [singleton].
</span><br>
<span class="quotelev1">&gt; Query failed to return a module
</span><br>
<span class="quotelev1">&gt; [merulo:31097] mca:base:select:(  ess) Querying component [slave]
</span><br>
<span class="quotelev1">&gt; [merulo:31097] mca:base:select:(  ess) Query of component [slave] set
</span><br>
<span class="quotelev1">&gt; priority to 0
</span><br>
<span class="quotelev1">&gt; [merulo:31097] mca:base:select:(  ess) Querying component [slurm]
</span><br>
<span class="quotelev1">&gt; [merulo:31097] mca:base:select:(  ess) Skipping component [slurm]. Query
</span><br>
<span class="quotelev1">&gt; failed to return a module
</span><br>
<span class="quotelev1">&gt; [merulo:31097] mca:base:select:(  ess) Querying component [slurmd]
</span><br>
<span class="quotelev1">&gt; [merulo:31097] mca:base:select:(  ess) Skipping component [slurmd].
</span><br>
<span class="quotelev1">&gt; Query failed to return a module
</span><br>
<span class="quotelev1">&gt; [merulo:31097] mca:base:select:(  ess) Querying component [tm]
</span><br>
<span class="quotelev1">&gt; [merulo:31097] mca:base:select:(  ess) Skipping component [tm]. Query
</span><br>
<span class="quotelev1">&gt; failed to return a module
</span><br>
<span class="quotelev1">&gt; [merulo:31097] mca:base:select:(  ess) Querying component [tool]
</span><br>
<span class="quotelev1">&gt; [merulo:31097] mca:base:select:(  ess) Skipping component [tool]. Query
</span><br>
<span class="quotelev1">&gt; failed to return a module
</span><br>
<span class="quotelev1">&gt; [merulo:31097] mca:base:select:(  ess) Selected component [hnp]
</span><br>
<span class="quotelev1">&gt; [merulo:31097] mca:base:select:(  plm) Querying component [rsh]
</span><br>
<span class="quotelev1">&gt; [merulo:31097] mca:base:select:(  plm) Query of component [rsh] set
</span><br>
<span class="quotelev1">&gt; priority to 10
</span><br>
<span class="quotelev1">&gt; [merulo:31097] mca:base:select:(  plm) Querying component [slurm]
</span><br>
<span class="quotelev1">&gt; [merulo:31097] mca:base:select:(  plm) Skipping component [slurm]. Query
</span><br>
<span class="quotelev1">&gt; failed to return a module
</span><br>
<span class="quotelev1">&gt; [merulo:31097] mca:base:select:(  plm) Querying component [tm]
</span><br>
<span class="quotelev1">&gt; [merulo:31097] mca:base:select:(  plm) Skipping component [tm]. Query
</span><br>
<span class="quotelev1">&gt; failed to return a module
</span><br>
<span class="quotelev1">&gt; [merulo:31097] mca:base:select:(  plm) Selected component [rsh]
</span><br>
<span class="quotelev1">&gt; [merulo:31097] mca:base:select:(  ras) Querying component [cm]
</span><br>
<span class="quotelev1">&gt; [merulo:31097] mca:base:select:(  ras) Skipping component [cm]. Query
</span><br>
<span class="quotelev1">&gt; failed to return a module
</span><br>
<span class="quotelev1">&gt; [merulo:31097] mca:base:select:(  ras) Querying component [gridengine]
</span><br>
<span class="quotelev1">&gt; [merulo:31097] mca:base:select:(  ras) Skipping component [gridengine].
</span><br>
<span class="quotelev1">&gt; Query failed to return a module
</span><br>
<span class="quotelev1">&gt; [merulo:31097] mca:base:select:(  ras) Querying component [loadleveler]
</span><br>
<span class="quotelev1">&gt; [merulo:31097] mca:base:select:(  ras) Skipping component [loadleveler].
</span><br>
<span class="quotelev1">&gt; Query failed to return a module
</span><br>
<span class="quotelev1">&gt; [merulo:31097] mca:base:select:(  ras) Querying component [slurm]
</span><br>
<span class="quotelev1">&gt; [merulo:31097] mca:base:select:(  ras) Skipping component [slurm]. Query
</span><br>
<span class="quotelev1">&gt; failed to return a module
</span><br>
<span class="quotelev1">&gt; [merulo:31097] mca:base:select:(  ras) Querying component [tm]
</span><br>
<span class="quotelev1">&gt; [merulo:31097] mca:base:select:(  ras) Skipping component [tm]. Query
</span><br>
<span class="quotelev1">&gt; failed to return a module
</span><br>
<span class="quotelev1">&gt; [merulo:31097] mca:base:select:(  ras) No component selected!
</span><br>
<span class="quotelev1">&gt; [merulo:31097] mca:base:select:(rmaps) Querying component [load_balance]
</span><br>
<span class="quotelev1">&gt; [merulo:31097] mca:base:select:(rmaps) Skipping component
</span><br>
<span class="quotelev1">&gt; [load_balance]. Query failed to return a module
</span><br>
<span class="quotelev1">&gt; [merulo:31097] mca:base:select:(rmaps) Querying component [rank_file]
</span><br>
<span class="quotelev1">&gt; [merulo:31097] mca:base:select:(rmaps) Query of component [rank_file]
</span><br>
<span class="quotelev1">&gt; set priority to 0
</span><br>
<span class="quotelev1">&gt; [merulo:31097] mca:base:select:(rmaps) Querying component [resilient]
</span><br>
<span class="quotelev1">&gt; [merulo:31097] mca:base:select:(rmaps) Query of component [resilient]
</span><br>
<span class="quotelev1">&gt; set priority to 0
</span><br>
<span class="quotelev1">&gt; [merulo:31097] mca:base:select:(rmaps) Querying component [round_robin]
</span><br>
<span class="quotelev1">&gt; [merulo:31097] mca:base:select:(rmaps) Query of component [round_robin]
</span><br>
<span class="quotelev1">&gt; set priority to 70
</span><br>
<span class="quotelev1">&gt; [merulo:31097] mca:base:select:(rmaps) Querying component [seq]
</span><br>
<span class="quotelev1">&gt; [merulo:31097] mca:base:select:(rmaps) Query of component [seq] set
</span><br>
<span class="quotelev1">&gt; priority to 0
</span><br>
<span class="quotelev1">&gt; [merulo:31097] mca:base:select:(rmaps) Querying component [topo]
</span><br>
<span class="quotelev1">&gt; [merulo:31097] mca:base:select:(rmaps) Query of component [topo] set
</span><br>
<span class="quotelev1">&gt; priority to 0
</span><br>
<span class="quotelev1">&gt; [merulo:31097] mca:base:select:(rmaps) Selected component [round_robin]
</span><br>
<span class="quotelev1">&gt; [merulo:31098] mca:base:select:(  ess) Querying component [env]
</span><br>
<span class="quotelev1">&gt; [merulo:31098] mca:base:select:(  ess) Query of component [env] set
</span><br>
<span class="quotelev1">&gt; priority to 20
</span><br>
<span class="quotelev1">&gt; [merulo:31098] mca:base:select:(  ess) Selected component [env]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Sylvestre
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12957.php">Vallee, Geoffroy R.: "[OMPI devel] Problem with multiple identical entries in ~/.openmpi/mca-params.conf"</a>
<li><strong>Previous message:</strong> <a href="12955.php">Sylvestre Ledru: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<li><strong>In reply to:</strong> <a href="12955.php">Sylvestre Ledru: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12958.php">Sylvestre Ledru: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<li><strong>Reply:</strong> <a href="12958.php">Sylvestre Ledru: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
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
