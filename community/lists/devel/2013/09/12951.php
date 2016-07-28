<?
$subject_val = "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 20 16:02:41 2013" -->
<!-- isoreceived="20130920200241" -->
<!-- sent="Fri, 20 Sep 2013 22:02:34 +0200" -->
<!-- isosent="20130920200234" -->
<!-- name="Sylvestre Ledru" -->
<!-- email="sylvestre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64" -->
<!-- id="523CA9DA.3080209_at_debian.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="523CA6C7.6000205_at_debian.org" -->
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
<strong>Date:</strong> 2013-09-20 16:02:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12952.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Neighborhood collective support"</a>
<li><strong>Previous message:</strong> <a href="12950.php">Sylvestre Ledru: "[OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<li><strong>In reply to:</strong> <a href="12950.php">Sylvestre Ledru: "[OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12954.php">Ralph Castain: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<li><strong>Reply:</strong> <a href="12954.php">Ralph Castain: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 20/09/2013 21:49, Sylvestre Ledru wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In Debian, we are in the process of switching the default MPI
</span><br>
<span class="quotelev1">&gt; implementation from version 1.4 to 1.6.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Every architectures are fine beside ia64. Any program based on OpenMPI
</span><br>
<span class="quotelev1">&gt; 1.6.5 is freezing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With a basic test case:
</span><br>
<span class="quotelev1">&gt;   MPI_Init(NULL, NULL);
</span><br>
<span class="quotelev1">&gt;   MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -c 4 foo
</span><br>
<span class="quotelev1">&gt; =&gt; freeze
</span><br>
<span class="quotelev1">&gt; The backtrace does not show anything.
</span><br>
<span class="quotelev1">&gt;
</span><br>
mpirun --mca plm_base_verbose 5 foo
<br>
returns:
<br>
[merulo:26555] mca:base:select:(  plm) Querying component [rsh]
<br>
[merulo:26555] mca:base:select:(  plm) Query of component [rsh] set
<br>
priority to 10
<br>
[merulo:26555] mca:base:select:(  plm) Querying component [slurm]
<br>
[merulo:26555] mca:base:select:(  plm) Skipping component [slurm]. Query
<br>
failed to return a module
<br>
[merulo:26555] mca:base:select:(  plm) Querying component [tm]
<br>
[merulo:26555] mca:base:select:(  plm) Skipping component [tm]. Query
<br>
failed to return a module
<br>
[merulo:26555] mca:base:select:(  plm) Selected component [rsh]
<br>
<p>Sylvestre
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12952.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Neighborhood collective support"</a>
<li><strong>Previous message:</strong> <a href="12950.php">Sylvestre Ledru: "[OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<li><strong>In reply to:</strong> <a href="12950.php">Sylvestre Ledru: "[OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12954.php">Ralph Castain: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<li><strong>Reply:</strong> <a href="12954.php">Ralph Castain: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
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
