<?
$subject_val = "Re: [OMPI devel] cleanup unused btl parameters";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  3 14:25:28 2014" -->
<!-- isoreceived="20140403182528" -->
<!-- sent="Thu, 3 Apr 2014 18:25:26 +0000" -->
<!-- isosent="20140403182526" -->
<!-- name="Hjelm, Nathan T" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] cleanup unused btl parameters" -->
<!-- id="AE45F2F55FE69B4F99BB3455E821D7153A89116F_at_ECS-EXG-P-MB07.win.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AE45F2F55FE69B4F99BB3455E821D7153A89114C_at_ECS-EXG-P-MB07.win.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] cleanup unused btl parameters<br>
<strong>From:</strong> Hjelm, Nathan T (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-03 14:25:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14458.php">Hjelm, Nathan T: "Re: [OMPI devel] cleanup unused btl parameters"</a>
<li><strong>Previous message:</strong> <a href="14456.php">Hjelm, Nathan T: "[OMPI devel] RFC: cleanup unused btl parameters"</a>
<li><strong>In reply to:</strong> <a href="14456.php">Hjelm, Nathan T: "[OMPI devel] RFC: cleanup unused btl parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14458.php">Hjelm, Nathan T: "Re: [OMPI devel] cleanup unused btl parameters"</a>
<li><strong>Reply:</strong> <a href="14458.php">Hjelm, Nathan T: "Re: [OMPI devel] cleanup unused btl parameters"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Bah. Ignore part of that patch. The btl_rdma_pipeline_send_length is used. The other one was not. I will provide an updated patch.
<br>
<p>-Nathan
<br>
________________________________________
<br>
From: devel [devel-bounces_at_[hidden]] on behalf of Hjelm, Nathan T [hjelmn_at_[hidden]]
<br>
Sent: Thursday, April 03, 2014 12:05 PM
<br>
To: devel_at_[hidden]
<br>
Subject: [OMPI devel] RFC: cleanup unused btl parameters
<br>
<p>What: Remove btl parameters that are no longer used. The parameters are btl_min_rdma_pipeline_size and btl_min_rdma_pipeline_size
<br>
<p>Why: I was working on a short talk talking about the various parameters that can be used for tuning Open MPI on infiniband systems and I noticed that several parameters are not used in any way. The existence of these parameters could be confusing to users so now that 1.8 is out the door it might be a good time to remove them. I also took this opportunity to update the various components to use C99 sub-object naming on module struct initialization.
<br>
<p>When: There may be off-trunk components that still use these parameters so lets give this a couple of weeks. Timeout on April 17.
<br>
<p>Patch attached.<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14458.php">Hjelm, Nathan T: "Re: [OMPI devel] cleanup unused btl parameters"</a>
<li><strong>Previous message:</strong> <a href="14456.php">Hjelm, Nathan T: "[OMPI devel] RFC: cleanup unused btl parameters"</a>
<li><strong>In reply to:</strong> <a href="14456.php">Hjelm, Nathan T: "[OMPI devel] RFC: cleanup unused btl parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14458.php">Hjelm, Nathan T: "Re: [OMPI devel] cleanup unused btl parameters"</a>
<li><strong>Reply:</strong> <a href="14458.php">Hjelm, Nathan T: "Re: [OMPI devel] cleanup unused btl parameters"</a>
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
