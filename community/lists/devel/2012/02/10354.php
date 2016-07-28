<?
$subject_val = "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  9 06:18:25 2012" -->
<!-- isoreceived="20120209111825" -->
<!-- sent="Thu, 9 Feb 2012 06:18:20 -0500" -->
<!-- isosent="20120209111820" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun" -->
<!-- id="7838293B-BE87-4C6B-A926-D2D88D14F1FF_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1327682314.23830.45.camel_at_B014522" -->
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
<strong>Subject:</strong> Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-09 06:18:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10355.php">Brice Goglin: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see	processes as bound if the job has been launched by srun"</a>
<li><strong>Previous message:</strong> <a href="10353.php">Y.MATSUMOTO: "[OMPI devel] [PATCH]Segmentation Fault occurs when the function called from MPI_Comm_spawn_multiple fails"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/01/10266.php">nadia.derbey: "[OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10355.php">Brice Goglin: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see	processes as bound if the job has been launched by srun"</a>
<li><strong>Reply:</strong> <a href="10355.php">Brice Goglin: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see	processes as bound if the job has been launched by srun"</a>
<li><strong>Reply:</strong> <a href="10356.php">nadia.derbey_at_[hidden]: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see	processes as bound if the job has been launched by srun"</a>
<li><strong>Reply:</strong> <a href="10360.php">Chris Samuel: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just so that I understand this better -- if a process is bound in a cpuset, will tools like hwloc's lstopo only show the Linux processors *in that cpuset*?  I.e., does it not have any visibility of the processors outside of its cpuset?
<br>
<p><p>On Jan 27, 2012, at 11:38 AM, nadia.derbey wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If a job is launched using &quot;srun --resv-ports --cpu_bind:...&quot; and slurm
</span><br>
<span class="quotelev1">&gt; is configured with:
</span><br>
<span class="quotelev1">&gt;   TaskPlugin=task/affinity
</span><br>
<span class="quotelev1">&gt;   TaskPluginParam=Cpusets
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; each rank of that job is in a cpuset that contains a single CPU.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now, if we use carto on top of this, the following happens in
</span><br>
<span class="quotelev1">&gt; get_ib_dev_distance() (in btl/openib/btl_openib_component.c):
</span><br>
<span class="quotelev1">&gt;   . opal_paffinity_base_get_processor_info() is called to get the
</span><br>
<span class="quotelev1">&gt;     number of logical processors (we get 1 due to the singleton cpuset)
</span><br>
<span class="quotelev1">&gt;   . we loop over that # of processors to check whether our process is
</span><br>
<span class="quotelev1">&gt;     bound to one of them. In our case the loop will be executed only
</span><br>
<span class="quotelev1">&gt;     once and we will never get the correct binding information.
</span><br>
<span class="quotelev1">&gt;   . if the process is bound actually get the distance to the device.
</span><br>
<span class="quotelev1">&gt;     in our case we won't execute that part of the code.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The attached patch is a proposal to fix the issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Nadia
</span><br>
<span class="quotelev1">&gt; &lt;get_ib_dev_distance.patch&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
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
<li><strong>Next message:</strong> <a href="10355.php">Brice Goglin: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see	processes as bound if the job has been launched by srun"</a>
<li><strong>Previous message:</strong> <a href="10353.php">Y.MATSUMOTO: "[OMPI devel] [PATCH]Segmentation Fault occurs when the function called from MPI_Comm_spawn_multiple fails"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/01/10266.php">nadia.derbey: "[OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10355.php">Brice Goglin: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see	processes as bound if the job has been launched by srun"</a>
<li><strong>Reply:</strong> <a href="10355.php">Brice Goglin: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see	processes as bound if the job has been launched by srun"</a>
<li><strong>Reply:</strong> <a href="10356.php">nadia.derbey_at_[hidden]: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see	processes as bound if the job has been launched by srun"</a>
<li><strong>Reply:</strong> <a href="10360.php">Chris Samuel: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun"</a>
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
