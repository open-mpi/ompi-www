<?
$subject_val = "Re: [OMPI devel] new CRS component added (criu)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  7 17:44:13 2014" -->
<!-- isoreceived="20140207224413" -->
<!-- sent="Fri, 7 Feb 2014 16:44:12 -0600" -->
<!-- isosent="20140207224412" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] new CRS component added (criu)" -->
<!-- id="CAANzjE=QmhvYSLaUC0MBOb+Y3rfpPfqOkREGT94YyabWBwAT_g_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20140207214607.GD4981_at_lisas.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] new CRS component added (criu)<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-07 17:44:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14046.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Add an OPAL rand and srand"</a>
<li><strong>Previous message:</strong> <a href="14044.php">Joshua Ladd: "Re: [OMPI devel] RFC: Add an OPAL rand and srand"</a>
<li><strong>In reply to:</strong> <a href="14037.php">Adrian Reber: "[OMPI devel] new CRS component added (criu)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That is fantastic! Thanks for the hard work so far getting the C/R
<br>
infrastructure back in place.
<br>
<p><p>On Fri, Feb 7, 2014 at 3:46 PM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I have created a new CRS component using criu (criu.org) to support
</span><br>
<span class="quotelev1">&gt; checkpoint/restart in Open MPI. My current patch only provides the
</span><br>
<span class="quotelev1">&gt; framework and necessary configure scripts to detect and link against
</span><br>
<span class="quotelev1">&gt; criu. With this patch orte-checkpoint can request a checkpoint and the
</span><br>
<span class="quotelev1">&gt; new CRIU CRS component is used:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [dcbz:13766] orte_cr: init: orte_cr_init()
</span><br>
<span class="quotelev1">&gt; [dcbz:13766] crs:criu: opal_crs_criu_prelaunch
</span><br>
<span class="quotelev1">&gt; [dcbz:13766] crs:criu: opal_crs_criu_prelaunch
</span><br>
<span class="quotelev1">&gt; [dcbz:13771] opal_cr: init: Verbose Level: 30
</span><br>
<span class="quotelev1">&gt; [dcbz:13771] opal_cr: init: FT Enabled: true
</span><br>
<span class="quotelev1">&gt; [dcbz:13771] opal_cr: init: Is a tool program: false
</span><br>
<span class="quotelev1">&gt; [dcbz:13771] opal_cr: init: Debug SIGPIPE: 30 (False)
</span><br>
<span class="quotelev1">&gt; [dcbz:13771] opal_cr: init: Checkpoint Signal: 10
</span><br>
<span class="quotelev1">&gt; [dcbz:13771] opal_cr: init: FT Use thread: true
</span><br>
<span class="quotelev1">&gt; [dcbz:13771] opal_cr: init: FT thread sleep: check = 0, wait = 100
</span><br>
<span class="quotelev1">&gt; [dcbz:13771] opal_cr: init: C/R Debugging Enabled [False]
</span><br>
<span class="quotelev1">&gt; [dcbz:13771] opal_cr: init: Checkpoint Signal (Debug): 20
</span><br>
<span class="quotelev1">&gt; [dcbz:13771] opal_cr: init: Temp Directory: /tmp
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; [dcbz:13772] orte_cr: coord: orte_cr_coord(Checkpoint)
</span><br>
<span class="quotelev1">&gt; [dcbz:13772] orte_cr: coord_pre_ckpt: orte_cr_coord_pre_ckpt()
</span><br>
<span class="quotelev1">&gt; [dcbz:13772] orte_cr: coord_post_ckpt: orte_cr_coord_post_ckpt()
</span><br>
<span class="quotelev1">&gt; [dcbz:13772] ompi_cr: coord_post_ckpt: ompi_cr_coord_post_ckpt()
</span><br>
<span class="quotelev1">&gt; [dcbz:13772] opal_cr: opal_cr_inc_core_ckpt: Take the checkpoint.
</span><br>
<span class="quotelev1">&gt; [dcbz:13772] crs:criu: checkpoint(13772, ---)
</span><br>
<span class="quotelev1">&gt; [dcbz:13772] crs:criu: criu_init_opts() returned 0
</span><br>
<span class="quotelev1">&gt; [dcbz:13771] orte_cr: coord_post_ckpt: orte_cr_coord_post_ckpt()
</span><br>
<span class="quotelev1">&gt; [dcbz:13771] ompi_cr: coord_post_ckpt: ompi_cr_coord_post_ckpt()
</span><br>
<span class="quotelev1">&gt; [dcbz:13771] opal_cr: opal_cr_inc_core_ckpt: Take the checkpoint.
</span><br>
<span class="quotelev1">&gt; [dcbz:13771] crs:criu: checkpoint(13771, ---)
</span><br>
<span class="quotelev1">&gt; [dcbz:13771] crs:criu: criu_init_opts() returned 0
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; [dcbz:13766] 13766: Checkpoint established for process [55729,0].
</span><br>
<span class="quotelev1">&gt; [dcbz:13771] ompi_cr: coord: ompi_cr_coord(Running)
</span><br>
<span class="quotelev1">&gt; [dcbz:13771] orte_cr: coord: orte_cr_coord(Running)
</span><br>
<span class="quotelev1">&gt; [dcbz:13766] 13766: Successfully restarted process [55729,0].
</span><br>
<span class="quotelev1">&gt; [dcbz:13772] ompi_cr: coord: ompi_cr_coord(Running)
</span><br>
<span class="quotelev1">&gt; [dcbz:13772] orte_cr: coord: orte_cr_coord(Running)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seems the C/R code basically works again and now needs to be filled
</span><br>
<span class="quotelev1">&gt; with the actual code to take checkpoints using criu.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The patch I want to check in is available at:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=7e0c7c940705cc572242097ff53f9e0ee6db11ea">https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=7e0c7c940705cc572242097ff53f9e0ee6db11ea</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The patch only creates files in opal/mca/crs/criu and does not touch any
</span><br>
<span class="quotelev1">&gt; other code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 Adrian
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Joshua Hursey
Assistant Professor of Computer Science
University of Wisconsin-La Crosse
<a href="http://cs.uwlax.edu/~jjhursey">http://cs.uwlax.edu/~jjhursey</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14045/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14046.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Add an OPAL rand and srand"</a>
<li><strong>Previous message:</strong> <a href="14044.php">Joshua Ladd: "Re: [OMPI devel] RFC: Add an OPAL rand and srand"</a>
<li><strong>In reply to:</strong> <a href="14037.php">Adrian Reber: "[OMPI devel] new CRS component added (criu)"</a>
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
