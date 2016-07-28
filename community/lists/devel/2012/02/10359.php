<?
$subject_val = "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see	processes as bound if the job has been launched by srun";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  9 07:34:01 2012" -->
<!-- isoreceived="20120209123401" -->
<!-- sent="Thu, 9 Feb 2012 07:33:56 -0500" -->
<!-- isosent="20120209123356" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see	processes as bound if the job has been launched by srun" -->
<!-- id="0F2D4748-AC4A-492F-A773-340ED03D63C1_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="OFA2228C18.C383D616-ONC125799F.0042DFF7-C125799F.0043C1E9_at_bull.net" -->
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
<strong>Subject:</strong> Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see	processes as bound if the job has been launched by srun<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-09 07:33:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10360.php">Chris Samuel: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun"</a>
<li><strong>Previous message:</strong> <a href="10358.php">Ralph Castain: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see	processes as bound if the job has been launched by srun"</a>
<li><strong>In reply to:</strong> <a href="10357.php">nadia.derbey_at_[hidden]: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see	processes as bound if the job has been launched by srun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10356.php">nadia.derbey_at_[hidden]: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see	processes as bound if the job has been launched by srun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 9, 2012, at 7:15 AM, nadia.derbey_at_[hidden] wrote:
<br>
<p><span class="quotelev2">&gt; &gt; By default, hwloc only shows what's inside the current cpuset. There's
</span><br>
<span class="quotelev2">&gt; &gt; an option to show everything instead (topology flag). 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So may be using that flag inside opal_paffinity_base_get_processor_info() would be a better fix than the one I'm proposing in my patch. 
</span><br>
<p>Is this trunk, or v1.5/1.6?  (or both?)
<br>
<p>Perhaps the &quot;good enough&quot; fix for v1.5/1.6 is what you suggested.
<br>
<p>But a better fix for the trunk is to use hwloc directly -- after all, paffinity/maffinity is going to go away in the not-distant future (in favor of 100% using hwloc's API).  
<br>
<p>That being said, it looks like opal_hwloc_topology is *not* loaded with HWLOC_TOPOLOGY_FLAG_WHOLE_SYSTEM.  I think the assumption was that we wanted to look at our little foxhole to see exactly where we were bound.
<br>
<p>I honestly forget -- if we don't set WHOLE_SYSTEM, does the reported tree only include PUs/etc. in the current cpuset?  I.e., some objects may be not in the tree altogether?  The hwloc docs talk about what happens to the cpuset fields in a given object when WHOLE_SYSTEM is set/not set, but it isn't entirely clear on this point.
<br>
<p>FWIW, it looks like we're not setting any topology IO flags, either (most likely due to the fact that we brought in hwloc when it was 1.2.x; i.e., before it supported PCI devices).  I'm guessing we should probably set HWLOC_TOPOLOGY_FLAG_WHOLE_IO in all cases.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10360.php">Chris Samuel: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun"</a>
<li><strong>Previous message:</strong> <a href="10358.php">Ralph Castain: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see	processes as bound if the job has been launched by srun"</a>
<li><strong>In reply to:</strong> <a href="10357.php">nadia.derbey_at_[hidden]: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see	processes as bound if the job has been launched by srun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10356.php">nadia.derbey_at_[hidden]: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see	processes as bound if the job has been launched by srun"</a>
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
