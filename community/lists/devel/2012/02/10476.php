<?
$subject_val = "Re: [OMPI devel] btl/openib: get_ib_dev_distance	doesn't	see	processes as bound if the job has been launched by srun";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 17 09:01:07 2012" -->
<!-- isoreceived="20120217140107" -->
<!-- sent="Fri, 17 Feb 2012 09:01:02 -0500" -->
<!-- isosent="20120217140102" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] btl/openib: get_ib_dev_distance	doesn't	see	processes as bound if the job has been launched by srun" -->
<!-- id="5A98D43A-F0BF-40E2-A4C2-6507951B0164_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="OFC18C1871.4FA722EC-ONC12579A7.003CFD1C-C12579A7.003E8B4D_at_bull.net" -->
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
<strong>Subject:</strong> Re: [OMPI devel] btl/openib: get_ib_dev_distance	doesn't	see	processes as bound if the job has been launched by srun<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-17 09:01:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10477.php">Jeff Squyres: "Re: [OMPI devel] btl/openib: get_ib_dev_distance	doesn't	see	processes as bound if the job has been launched by srun"</a>
<li><strong>Previous message:</strong> <a href="10475.php">Jeff Squyres: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun"</a>
<li><strong>In reply to:</strong> <a href="10473.php">nadia.derbey_at_[hidden]: "Re: [OMPI devel] btl/openib: get_ib_dev_distance	doesn't	see	processes as bound if the job has been launched by srun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10474.php">Ralph Castain: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 17, 2012, at 6:18 AM, nadia.derbey_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; But I have to look for the proper option in slurm: I don't know if slurm 
</span><br>
<span class="quotelev1">&gt; allows for such a fine grained allocation. I have to look for the option 
</span><br>
<span class="quotelev1">&gt; that enables to allocate socket X (X!=0). 
</span><br>
<p>FWIW, you might just want to run a job that allocates a socket on node Z.  Then simultaneously run another job that also allocates a socket on the same node Z.
<br>
<p>One of them will be socket X != 0.
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
<li><strong>Next message:</strong> <a href="10477.php">Jeff Squyres: "Re: [OMPI devel] btl/openib: get_ib_dev_distance	doesn't	see	processes as bound if the job has been launched by srun"</a>
<li><strong>Previous message:</strong> <a href="10475.php">Jeff Squyres: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun"</a>
<li><strong>In reply to:</strong> <a href="10473.php">nadia.derbey_at_[hidden]: "Re: [OMPI devel] btl/openib: get_ib_dev_distance	doesn't	see	processes as bound if the job has been launched by srun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10474.php">Ralph Castain: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun"</a>
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
