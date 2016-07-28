<?
$subject_val = "Re: [OMPI users] cleanup of round robin mappers";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 24 11:19:02 2014" -->
<!-- isoreceived="20140324151902" -->
<!-- sent="Mon, 24 Mar 2014 08:17:00 -0700" -->
<!-- isosent="20140324151700" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] cleanup of round robin mappers" -->
<!-- id="6A96B9FA-0799-4240-BE33-A9FE2A81B92A_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="OF246BD6A1.AEB382D5-ON49257CA5.0030A438-49257CA5.00419AE7_at_jcity.maeda.co.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] cleanup of round robin mappers<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-24 11:17:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23947.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fwd: problem for multiple clusters using mpirun"</a>
<li><strong>Previous message:</strong> <a href="23945.php">Ralph Castain: "Re: [OMPI users] another corner case hangup in openmpi-1.7.5rc3"</a>
<li><strong>In reply to:</strong> <a href="23941.php">tmishima_at_[hidden]: "[OMPI users] cleanup of round robin mappers"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Looks good - thanks!
<br>
<p>On Mar 24, 2014, at 4:55 AM, tmishima_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried to improve checking for mapping-too-low and fixed a minor
</span><br>
<span class="quotelev1">&gt; problem in rmaps_rr.c file. Please see attached patch file.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1) Regarding mapping-too-low, in future we'll have a lager size of
</span><br>
<span class="quotelev1">&gt; l1,2,3cache or other architectuers, and in that case, the needs to
</span><br>
<span class="quotelev1">&gt; map by a lower object level will increase. So, it's better/exact to
</span><br>
<span class="quotelev1">&gt; compare cpus_per_rank with ncpus of the mapping object in detecting
</span><br>
<span class="quotelev1">&gt; it. How do you think?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2) When orte_rmaps_rr_byobj returns with ORTE_ERR_NOT_FOUND,
</span><br>
<span class="quotelev1">&gt; we should change mapping policy to ORTE_MAPPING_BYSLOT
</span><br>
<span class="quotelev1">&gt; so that binding direction can be exactly evaluated in
</span><br>
<span class="quotelev1">&gt; rmaps_base_binding.c file.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tetsuya
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (See attached file: patch.rmaps)&lt;patch.rmaps&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23947.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fwd: problem for multiple clusters using mpirun"</a>
<li><strong>Previous message:</strong> <a href="23945.php">Ralph Castain: "Re: [OMPI users] another corner case hangup in openmpi-1.7.5rc3"</a>
<li><strong>In reply to:</strong> <a href="23941.php">tmishima_at_[hidden]: "[OMPI users] cleanup of round robin mappers"</a>
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
