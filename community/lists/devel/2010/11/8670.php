<?
$subject_val = "Re: [OMPI devel] mpirun options in the MPMD model";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  9 10:39:59 2010" -->
<!-- isoreceived="20101109153959" -->
<!-- sent="Tue, 9 Nov 2010 08:39:51 -0700" -->
<!-- isosent="20101109153951" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mpirun options in the MPMD model" -->
<!-- id="B89DF897-7DA4-4275-967B-994A46F39381_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1289316148.1869.5463.camel_at_B014522" -->
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
<strong>Subject:</strong> Re: [OMPI devel] mpirun options in the MPMD model<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-09 10:39:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8671.php">Jeff Squyres: "[OMPI devel] More S/OMPI_/OPAL_/g m4 changes"</a>
<li><strong>Previous message:</strong> <a href="8669.php">nadia.derbey: "[OMPI devel] mpirun options in the MPMD model"</a>
<li><strong>In reply to:</strong> <a href="8669.php">nadia.derbey: "[OMPI devel] mpirun options in the MPMD model"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8676.php">Jeff Squyres: "Re: [OMPI devel] mpirun options in the MPMD model"</a>
<li><strong>Reply:</strong> <a href="8676.php">Jeff Squyres: "Re: [OMPI devel] mpirun options in the MPMD model"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 9, 2010, at 8:22 AM, nadia.derbey wrote:
<br>
<p><span class="quotelev1">&gt; Hi list,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can someone give me an exhaustive list of the options that can be used
</span><br>
<span class="quotelev1">&gt; for any single binary when calling mpirun for the mpmd model, vs those
</span><br>
<span class="quotelev1">&gt; that are global to the job? I couldn't find it anywhere.
</span><br>
<p>I don't think such a list exists.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For example, --hostfile can be specified for each binary in the job,
</span><br>
<span class="quotelev1">&gt; while it looks like --output-filename is global to the job: even if it
</span><br>
<span class="quotelev1">&gt; is given on any single line of an application context, with different
</span><br>
<span class="quotelev1">&gt; values, the last value is the one that is actually taken as an output
</span><br>
<span class="quotelev1">&gt; file prefix.
</span><br>
<p>Yes, but remember that the output-filename value is used as a base, and the rank is appended to it. So each process gets its own file. That is why it is a &quot;global&quot; option.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Nadia
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; nadia.derbey &lt;Nadia.Derbey_at_[hidden]&gt;
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
<li><strong>Next message:</strong> <a href="8671.php">Jeff Squyres: "[OMPI devel] More S/OMPI_/OPAL_/g m4 changes"</a>
<li><strong>Previous message:</strong> <a href="8669.php">nadia.derbey: "[OMPI devel] mpirun options in the MPMD model"</a>
<li><strong>In reply to:</strong> <a href="8669.php">nadia.derbey: "[OMPI devel] mpirun options in the MPMD model"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8676.php">Jeff Squyres: "Re: [OMPI devel] mpirun options in the MPMD model"</a>
<li><strong>Reply:</strong> <a href="8676.php">Jeff Squyres: "Re: [OMPI devel] mpirun options in the MPMD model"</a>
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
