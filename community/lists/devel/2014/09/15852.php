<?
$subject_val = "Re: [OMPI devel] PSM MTl work with srun launch?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 16 18:10:41 2014" -->
<!-- isoreceived="20140916221041" -->
<!-- sent="Tue, 16 Sep 2014 15:09:40 -0700" -->
<!-- isosent="20140916220940" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] PSM MTl work with srun launch?" -->
<!-- id="0066287F-4031-4E7E-81FB-F05F339A4FA9_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="5F6FB0CDAF4F98419A0D970E1F65ED05B2F0EB_at_ECS-EXG-P-MB05.win.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] PSM MTl work with srun launch?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-16 18:09:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15853.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ompi-tests SVN repo has been moved to Github"</a>
<li><strong>Previous message:</strong> <a href="15851.php">Pritchard Jr., Howard: "[OMPI devel] PSM MTl work with srun launch?"</a>
<li><strong>In reply to:</strong> <a href="15851.php">Pritchard Jr., Howard: "[OMPI devel] PSM MTl work with srun launch?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Odd - it used to do the right thing. Looking at the code, it certainly looks like it is doing the right thing.
<br>
<p>It's using the PMI id as for the first part of the key, and the stepid as the second part. One possibility we've seen with Slurm is that PMI_Init can return true, but actually fail. If that happens, they may not be getting a valid PMI id.
<br>
<p>One easy way to check the setting of the key is just to run a simple program that calls MPI_Init and then does a printenv.
<br>
<p><p>On Sep 16, 2014, at 2:24 PM, Pritchard Jr., Howard &lt;howardp_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Folks,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I&#146;m getting questions about the 1.8.2 and mtl psm and slurm-direct (srun)
</span><br>
<span class="quotelev1">&gt; launch.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; User is hitting the problem that the global id is not being set.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I&#146;ve suggested for now that the user just set the OMPI_MCA_orte_precondition_transports
</span><br>
<span class="quotelev1">&gt; environment variable for now to something like
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; export OMPI_MCA_orte_precondition_transports=&quot;000000000000efa1-0000000000009c43&quot;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; perhaps generating the first field via the value of SLURM_JOBID
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; In older versions is an attempt made to fall back to ibverbs btl when using srun for
</span><br>
<span class="quotelev1">&gt; job launch?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Howard
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Howard Pritchard
</span><br>
<span class="quotelev1">&gt; HPC-5
</span><br>
<span class="quotelev1">&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15851.php">http://www.open-mpi.org/community/lists/devel/2014/09/15851.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15852/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15853.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ompi-tests SVN repo has been moved to Github"</a>
<li><strong>Previous message:</strong> <a href="15851.php">Pritchard Jr., Howard: "[OMPI devel] PSM MTl work with srun launch?"</a>
<li><strong>In reply to:</strong> <a href="15851.php">Pritchard Jr., Howard: "[OMPI devel] PSM MTl work with srun launch?"</a>
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
