<?
$subject_val = "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 20 17:41:33 2013" -->
<!-- isoreceived="20130920214133" -->
<!-- sent="Fri, 20 Sep 2013 23:41:30 +0200" -->
<!-- isosent="20130920214130" -->
<!-- name="Sylvestre Ledru" -->
<!-- email="sylvestre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64" -->
<!-- id="523CC10A.60003_at_debian.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4C26A048-7290-471C-A0CD-2488B4D9E125_at_open-mpi.org" -->
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
<strong>From:</strong> Sylvestre Ledru (<em>sylvestre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-20 17:41:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12956.php">Ralph Castain: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<li><strong>Previous message:</strong> <a href="12954.php">Ralph Castain: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<li><strong>In reply to:</strong> <a href="12954.php">Ralph Castain: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12956.php">Ralph Castain: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<li><strong>Reply:</strong> <a href="12956.php">Ralph Castain: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 20/09/2013 23:36, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Nothing leaps to mind - not seeing that anywhere else. If that's all you saw, then it doesn't look like it even got to the point of trying to launch something. You might set the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -mca plm_base_verbose 5 -mca ras_base_verbose 5 -mca rmaps_base_verbose 5 -mca ess_base_verbose 5 foo
</span><br>
<span class="quotelev1">&gt;
</span><br>
Sure, here it is:
<br>
[merulo:31097] mca:base:select:(  ess) Querying component [env]
<br>
[merulo:31097] mca:base:select:(  ess) Skipping component [env]. Query
<br>
failed to return a module
<br>
[merulo:31097] mca:base:select:(  ess) Querying component [hnp]
<br>
[merulo:31097] mca:base:select:(  ess) Query of component [hnp] set
<br>
priority to 100
<br>
[merulo:31097] mca:base:select:(  ess) Querying component [singleton]
<br>
[merulo:31097] mca:base:select:(  ess) Skipping component [singleton].
<br>
Query failed to return a module
<br>
[merulo:31097] mca:base:select:(  ess) Querying component [slave]
<br>
[merulo:31097] mca:base:select:(  ess) Query of component [slave] set
<br>
priority to 0
<br>
[merulo:31097] mca:base:select:(  ess) Querying component [slurm]
<br>
[merulo:31097] mca:base:select:(  ess) Skipping component [slurm]. Query
<br>
failed to return a module
<br>
[merulo:31097] mca:base:select:(  ess) Querying component [slurmd]
<br>
[merulo:31097] mca:base:select:(  ess) Skipping component [slurmd].
<br>
Query failed to return a module
<br>
[merulo:31097] mca:base:select:(  ess) Querying component [tm]
<br>
[merulo:31097] mca:base:select:(  ess) Skipping component [tm]. Query
<br>
failed to return a module
<br>
[merulo:31097] mca:base:select:(  ess) Querying component [tool]
<br>
[merulo:31097] mca:base:select:(  ess) Skipping component [tool]. Query
<br>
failed to return a module
<br>
[merulo:31097] mca:base:select:(  ess) Selected component [hnp]
<br>
[merulo:31097] mca:base:select:(  plm) Querying component [rsh]
<br>
[merulo:31097] mca:base:select:(  plm) Query of component [rsh] set
<br>
priority to 10
<br>
[merulo:31097] mca:base:select:(  plm) Querying component [slurm]
<br>
[merulo:31097] mca:base:select:(  plm) Skipping component [slurm]. Query
<br>
failed to return a module
<br>
[merulo:31097] mca:base:select:(  plm) Querying component [tm]
<br>
[merulo:31097] mca:base:select:(  plm) Skipping component [tm]. Query
<br>
failed to return a module
<br>
[merulo:31097] mca:base:select:(  plm) Selected component [rsh]
<br>
[merulo:31097] mca:base:select:(  ras) Querying component [cm]
<br>
[merulo:31097] mca:base:select:(  ras) Skipping component [cm]. Query
<br>
failed to return a module
<br>
[merulo:31097] mca:base:select:(  ras) Querying component [gridengine]
<br>
[merulo:31097] mca:base:select:(  ras) Skipping component [gridengine].
<br>
Query failed to return a module
<br>
[merulo:31097] mca:base:select:(  ras) Querying component [loadleveler]
<br>
[merulo:31097] mca:base:select:(  ras) Skipping component [loadleveler].
<br>
Query failed to return a module
<br>
[merulo:31097] mca:base:select:(  ras) Querying component [slurm]
<br>
[merulo:31097] mca:base:select:(  ras) Skipping component [slurm]. Query
<br>
failed to return a module
<br>
[merulo:31097] mca:base:select:(  ras) Querying component [tm]
<br>
[merulo:31097] mca:base:select:(  ras) Skipping component [tm]. Query
<br>
failed to return a module
<br>
[merulo:31097] mca:base:select:(  ras) No component selected!
<br>
[merulo:31097] mca:base:select:(rmaps) Querying component [load_balance]
<br>
[merulo:31097] mca:base:select:(rmaps) Skipping component
<br>
[load_balance]. Query failed to return a module
<br>
[merulo:31097] mca:base:select:(rmaps) Querying component [rank_file]
<br>
[merulo:31097] mca:base:select:(rmaps) Query of component [rank_file]
<br>
set priority to 0
<br>
[merulo:31097] mca:base:select:(rmaps) Querying component [resilient]
<br>
[merulo:31097] mca:base:select:(rmaps) Query of component [resilient]
<br>
set priority to 0
<br>
[merulo:31097] mca:base:select:(rmaps) Querying component [round_robin]
<br>
[merulo:31097] mca:base:select:(rmaps) Query of component [round_robin]
<br>
set priority to 70
<br>
[merulo:31097] mca:base:select:(rmaps) Querying component [seq]
<br>
[merulo:31097] mca:base:select:(rmaps) Query of component [seq] set
<br>
priority to 0
<br>
[merulo:31097] mca:base:select:(rmaps) Querying component [topo]
<br>
[merulo:31097] mca:base:select:(rmaps) Query of component [topo] set
<br>
priority to 0
<br>
[merulo:31097] mca:base:select:(rmaps) Selected component [round_robin]
<br>
[merulo:31098] mca:base:select:(  ess) Querying component [env]
<br>
[merulo:31098] mca:base:select:(  ess) Query of component [env] set
<br>
priority to 20
<br>
[merulo:31098] mca:base:select:(  ess) Selected component [env]
<br>
<p>Thanks,
<br>
Sylvestre
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12956.php">Ralph Castain: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<li><strong>Previous message:</strong> <a href="12954.php">Ralph Castain: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<li><strong>In reply to:</strong> <a href="12954.php">Ralph Castain: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12956.php">Ralph Castain: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<li><strong>Reply:</strong> <a href="12956.php">Ralph Castain: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
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
