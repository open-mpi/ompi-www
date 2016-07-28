<?
$subject_val = "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 20 17:36:38 2013" -->
<!-- isoreceived="20130920213638" -->
<!-- sent="Fri, 20 Sep 2013 14:36:35 -0700" -->
<!-- isosent="20130920213635" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64" -->
<!-- id="4C26A048-7290-471C-A0CD-2488B4D9E125_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="523CA9DA.3080209_at_debian.org" -->
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
<strong>Date:</strong> 2013-09-20 17:36:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12955.php">Sylvestre Ledru: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<li><strong>Previous message:</strong> <a href="12953.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Neighborhood collective support"</a>
<li><strong>In reply to:</strong> <a href="12951.php">Sylvestre Ledru: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12955.php">Sylvestre Ledru: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<li><strong>Reply:</strong> <a href="12955.php">Sylvestre Ledru: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nothing leaps to mind - not seeing that anywhere else. If that's all you saw, then it doesn't look like it even got to the point of trying to launch something. You might set the following:
<br>
<p>mpirun -mca plm_base_verbose 5 -mca ras_base_verbose 5 -mca rmaps_base_verbose 5 -mca ess_base_verbose 5 foo
<br>
<p>Will generate (hopefully) a lot of output, but might get some idea as to where it is stuck.
<br>
<p>On Sep 20, 2013, at 1:02 PM, Sylvestre Ledru &lt;sylvestre_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On 20/09/2013 21:49, Sylvestre Ledru wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In Debian, we are in the process of switching the default MPI
</span><br>
<span class="quotelev2">&gt;&gt; implementation from version 1.4 to 1.6.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Every architectures are fine beside ia64. Any program based on OpenMPI
</span><br>
<span class="quotelev2">&gt;&gt; 1.6.5 is freezing.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; With a basic test case:
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Init(NULL, NULL);
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -c 4 foo
</span><br>
<span class="quotelev2">&gt;&gt; =&gt; freeze
</span><br>
<span class="quotelev2">&gt;&gt; The backtrace does not show anything.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun --mca plm_base_verbose 5 foo
</span><br>
<span class="quotelev1">&gt; returns:
</span><br>
<span class="quotelev1">&gt; [merulo:26555] mca:base:select:(  plm) Querying component [rsh]
</span><br>
<span class="quotelev1">&gt; [merulo:26555] mca:base:select:(  plm) Query of component [rsh] set
</span><br>
<span class="quotelev1">&gt; priority to 10
</span><br>
<span class="quotelev1">&gt; [merulo:26555] mca:base:select:(  plm) Querying component [slurm]
</span><br>
<span class="quotelev1">&gt; [merulo:26555] mca:base:select:(  plm) Skipping component [slurm]. Query
</span><br>
<span class="quotelev1">&gt; failed to return a module
</span><br>
<span class="quotelev1">&gt; [merulo:26555] mca:base:select:(  plm) Querying component [tm]
</span><br>
<span class="quotelev1">&gt; [merulo:26555] mca:base:select:(  plm) Skipping component [tm]. Query
</span><br>
<span class="quotelev1">&gt; failed to return a module
</span><br>
<span class="quotelev1">&gt; [merulo:26555] mca:base:select:(  plm) Selected component [rsh]
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="12955.php">Sylvestre Ledru: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<li><strong>Previous message:</strong> <a href="12953.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Neighborhood collective support"</a>
<li><strong>In reply to:</strong> <a href="12951.php">Sylvestre Ledru: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12955.php">Sylvestre Ledru: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<li><strong>Reply:</strong> <a href="12955.php">Sylvestre Ledru: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
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
