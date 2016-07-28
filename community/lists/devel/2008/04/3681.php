<?
$subject_val = "Re: [OMPI devel] mpirun return code problems";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  8 08:30:32 2008" -->
<!-- isoreceived="20080408123032" -->
<!-- sent="Tue, 08 Apr 2008 06:30:22 -0600" -->
<!-- isosent="20080408123022" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mpirun return code problems" -->
<!-- id="C420C17E.CFCD%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="47FB5FBA.9060103_at_cs.indiana.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] mpirun return code problems<br>
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-08 08:30:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3682.php">Richard Graham: "[OMPI devel] Signals"</a>
<li><strong>Previous message:</strong> <a href="3680.php">Tim Prins: "[OMPI devel] mpirun return code problems"</a>
<li><strong>In reply to:</strong> <a href="3680.php">Tim Prins: "[OMPI devel] mpirun return code problems"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm aware - as we discussed on a recent telecon, I put it on my list of
<br>
things to resolve. Solution is known - just busy with other things at the
<br>
moment.
<br>
<p><p>On 4/8/08 6:06 AM, &quot;Tim Prins&quot; &lt;tprins_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I reported this before, but it seems that the report got lost. I have
</span><br>
<span class="quotelev1">&gt; found some situations where mpirun will return a '0' when there is an error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; An easy way to reproduce this is to edit the file
</span><br>
<span class="quotelev1">&gt; 'orte/mca/plm/base/plm_base_launch_support.c' and on line 154 put in
</span><br>
<span class="quotelev1">&gt; 'return ORTE_ERROR;' (or apply the attached diff).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Then recompile and run mpirun. mpirun will indicate there was an error,
</span><br>
<span class="quotelev1">&gt; but will still return 0. The reason this is concerning to me is that MTT
</span><br>
<span class="quotelev1">&gt; only looks at return codes, so our tests may be failing and we wouldn't
</span><br>
<span class="quotelev1">&gt; know it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt; Index: orte/mca/plm/base/plm_base_launch_support.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- orte/mca/plm/base/plm_base_launch_support.c (revision 18092)
</span><br>
<span class="quotelev1">&gt; +++ orte/mca/plm/base/plm_base_launch_support.c (working copy)
</span><br>
<span class="quotelev1">&gt; @@ -151,7 +151,7 @@
</span><br>
<span class="quotelev1">&gt;                               ORTE_JOBID_PRINT(job), ORTE_ERROR_NAME(rc)));
</span><br>
<span class="quotelev1">&gt;          return rc;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; -    
</span><br>
<span class="quotelev1">&gt; +   return ORTE_ERROR;
</span><br>
<span class="quotelev1">&gt;      /* complete wiring up the iof */
</span><br>
<span class="quotelev1">&gt;      OPAL_OUTPUT_VERBOSE((5, orte_plm_globals.output,
</span><br>
<span class="quotelev1">&gt;                           &quot;%s plm:base:launch wiring up iof&quot;,
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
<li><strong>Next message:</strong> <a href="3682.php">Richard Graham: "[OMPI devel] Signals"</a>
<li><strong>Previous message:</strong> <a href="3680.php">Tim Prins: "[OMPI devel] mpirun return code problems"</a>
<li><strong>In reply to:</strong> <a href="3680.php">Tim Prins: "[OMPI devel] mpirun return code problems"</a>
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
