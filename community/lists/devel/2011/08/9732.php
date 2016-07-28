<?
$subject_val = "Re: [OMPI devel] OMPI_MCA_opal_set_max_sys_limits";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 30 22:34:36 2011" -->
<!-- isoreceived="20110831023436" -->
<!-- sent="Tue, 30 Aug 2011 20:34:28 -0600" -->
<!-- isosent="20110831023428" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI_MCA_opal_set_max_sys_limits" -->
<!-- id="66C3E0D3-C85E-4F33-8049-2CBBDC352B09_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4E5C728A.2030201_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OMPI_MCA_opal_set_max_sys_limits<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-30 22:34:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9733.php">Ralph Castain: "Re: [OMPI devel] descriptor limits -- FAQ item"</a>
<li><strong>Previous message:</strong> <a href="9731.php">Wesley Bland: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25093"</a>
<li><strong>In reply to:</strong> <a href="9723.php">Eugene Loh: "[OMPI devel] OMPI_MCA_opal_set_max_sys_limits"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9734.php">Eugene Loh: "Re: [OMPI devel] OMPI_MCA_opal_set_max_sys_limits"</a>
<li><strong>Reply:</strong> <a href="9734.php">Eugene Loh: "Re: [OMPI devel] OMPI_MCA_opal_set_max_sys_limits"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 29, 2011, at 11:18 PM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; Maybe someone can help me from having to think too hard.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Let's say I want to max my system limits.  I can say this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    % mpirun --mca opal_set_max_sys_limits 1 ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cool.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Meanwhile, if I do this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    % setenv OMPI_MCA_opal_set_max_sys_limits 1
</span><br>
<span class="quotelev1">&gt;    % mpirun ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; remote processes don't see the setting.  (Local processes and ompi_info are fine.)
</span><br>
<p>I looked at the 1.5 code, and mpirun is reaping all OMPI_ params from the environ and adding them to the app. So it should be getting set.
<br>
<p>I then ran &quot;mpirun -n 1 printenv&quot; on a slurm machine, and verified that indeed that param was in the environment. Ditto when I told it to use the rsh launcher.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Bug?  Naively, this looks &quot;wrong.&quot;  At least disturbing, in any case.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is with v1.5.
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
<li><strong>Next message:</strong> <a href="9733.php">Ralph Castain: "Re: [OMPI devel] descriptor limits -- FAQ item"</a>
<li><strong>Previous message:</strong> <a href="9731.php">Wesley Bland: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25093"</a>
<li><strong>In reply to:</strong> <a href="9723.php">Eugene Loh: "[OMPI devel] OMPI_MCA_opal_set_max_sys_limits"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9734.php">Eugene Loh: "Re: [OMPI devel] OMPI_MCA_opal_set_max_sys_limits"</a>
<li><strong>Reply:</strong> <a href="9734.php">Eugene Loh: "Re: [OMPI devel] OMPI_MCA_opal_set_max_sys_limits"</a>
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
