<?
$subject_val = "Re: [OMPI users] Missing init of rc in modex (orte/mca/grpcomm/pmi/grpcomm_pmi_module.c), 1.8.6";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  9 12:35:45 2015" -->
<!-- isoreceived="20150709163545" -->
<!-- sent="Thu, 9 Jul 2015 09:35:40 -0700" -->
<!-- isosent="20150709163540" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Missing init of rc in modex (orte/mca/grpcomm/pmi/grpcomm_pmi_module.c), 1.8.6" -->
<!-- id="1E247FFC-0FA2-40FB-88BD-96F5DDA8715F_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="559D8D55.5080502_at_hpc2n.umu.se" -->
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
<strong>Subject:</strong> Re: [OMPI users] Missing init of rc in modex (orte/mca/grpcomm/pmi/grpcomm_pmi_module.c), 1.8.6<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-09 12:35:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27269.php">Saliya Ekanayake: "Re: [OMPI users] What collective implementation is used when?"</a>
<li><strong>Previous message:</strong> <a href="27267.php">Gilles Gouaillardet: "Re: [OMPI users] What collective implementation is used when?"</a>
<li><strong>In reply to:</strong> <a href="27266.php">&#195;&#133;ke Sandgren: "[OMPI users] Missing init of rc in modex (orte/mca/grpcomm/pmi/grpcomm_pmi_module.c), 1.8.6"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is already fixed in the repo - just awaiting release of 1.8.7
<br>
<p><span class="quotelev1">&gt; On Jul 8, 2015, at 1:51 PM, &#195;&#133;ke Sandgren &lt;ake.sandgren_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rc in modex in orte/mca/grpcomm/pmi/grpcomm_pmi_module.c is not properly initialized and is causing problems at least with the intel compiler.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; diff -ru site/orte/mca/grpcomm/pmi/grpcomm_pmi_module.c intel/orte/mca/grpcomm/pmi/grpcomm_pmi_module.c
</span><br>
<span class="quotelev1">&gt; --- site/orte/mca/grpcomm/pmi/grpcomm_pmi_module.c      2015-06-13 22:34:43.000000002 +0200
</span><br>
<span class="quotelev1">&gt; +++ intel/orte/mca/grpcomm/pmi/grpcomm_pmi_module.c     2015-07-08 22:23:57.000000002 +0200
</span><br>
<span class="quotelev1">&gt; @@ -149,7 +149,7 @@
</span><br>
<span class="quotelev1">&gt;     orte_process_name_t name;
</span><br>
<span class="quotelev1">&gt;     orte_vpid_t v;
</span><br>
<span class="quotelev1">&gt;     bool local;
</span><br>
<span class="quotelev1">&gt; -    int rc, i;
</span><br>
<span class="quotelev1">&gt; +    int rc = ORTE_SUCCESS, i;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     OPAL_OUTPUT_VERBOSE((1, orte_grpcomm_base_framework.framework_output,
</span><br>
<span class="quotelev1">&gt;                          &quot;%s grpcomm:pmi: modex entered&quot;,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Ake Sandgren, HPC2N, Umea University, S-90187 Umea, Sweden
</span><br>
<span class="quotelev1">&gt; Internet: ake_at_[hidden]   Phone: +46 90 7866134 Fax: +46 90-580 14
</span><br>
<span class="quotelev1">&gt; Mobile: +46 70 7716134 WWW: <a href="http://www.hpc2n.umu.se">http://www.hpc2n.umu.se</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/07/27266.php">http://www.open-mpi.org/community/lists/users/2015/07/27266.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27269.php">Saliya Ekanayake: "Re: [OMPI users] What collective implementation is used when?"</a>
<li><strong>Previous message:</strong> <a href="27267.php">Gilles Gouaillardet: "Re: [OMPI users] What collective implementation is used when?"</a>
<li><strong>In reply to:</strong> <a href="27266.php">&#195;&#133;ke Sandgren: "[OMPI users] Missing init of rc in modex (orte/mca/grpcomm/pmi/grpcomm_pmi_module.c), 1.8.6"</a>
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
