<?
$subject_val = "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see	processes as bound if the job has been launched by srun";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  9 07:03:54 2012" -->
<!-- isoreceived="20120209120354" -->
<!-- sent="Thu, 9 Feb 2012 13:05:00 +0100" -->
<!-- isosent="20120209120500" -->
<!-- name="nadia.derbey_at_[hidden]" -->
<!-- email="nadia.derbey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see	processes as bound if the job has been launched by srun" -->
<!-- id="OF2F91A8E2.9B58B705-ONC125799F.0042ADA8-C125799F.0042CEDA_at_bull.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7838293B-BE87-4C6B-A926-D2D88D14F1FF_at_cisco.com" -->
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
<strong>From:</strong> <a href="mailto:nadia.derbey_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20btl/openib:%20get_ib_dev_distance%20doesn't%20see	processes%20as%20bound%20if%20the%20job%20has%20been%20launched%20by%20srun"><em>nadia.derbey_at_[hidden]</em></a><br>
<strong>Date:</strong> 2012-02-09 07:05:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10357.php">nadia.derbey_at_[hidden]: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see	processes as bound if the job has been launched by srun"</a>
<li><strong>Previous message:</strong> <a href="10355.php">Brice Goglin: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see	processes as bound if the job has been launched by srun"</a>
<li><strong>In reply to:</strong> <a href="10354.php">Jeff Squyres: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10360.php">Chris Samuel: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;devel-bounces_at_[hidden] wrote on 02/09/2012 12:18:20 PM:
<br>
<p><span class="quotelev1">&gt; De : Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; A : Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date : 02/09/2012 12:18 PM
</span><br>
<span class="quotelev1">&gt; Objet : Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see
</span><br>
<span class="quotelev1">&gt; processes as bound if the job has been launched by srun
</span><br>
<span class="quotelev1">&gt; Envoy&#233; par : devel-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just so that I understand this better -- if a process is bound in a 
</span><br>
<span class="quotelev1">&gt; cpuset, will tools like hwloc's lstopo only show the Linux 
</span><br>
<span class="quotelev1">&gt; processors *in that cpuset*?  I.e., does it not have any visibility 
</span><br>
<span class="quotelev1">&gt; of the processors outside of its cpuset?
</span><br>
<p>Yes, looks like. At least this is what is returned by 
<br>
opal_paffinity_base_get_processor_info().
<br>
<p>Regards,
<br>
Nadia
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 27, 2012, at 11:38 AM, nadia.derbey wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; If a job is launched using &quot;srun --resv-ports --cpu_bind:...&quot; and 
</span><br>
slurm
<br>
<span class="quotelev2">&gt; &gt; is configured with:
</span><br>
<span class="quotelev2">&gt; &gt;   TaskPlugin=task/affinity
</span><br>
<span class="quotelev2">&gt; &gt;   TaskPluginParam=Cpusets
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; each rank of that job is in a cpuset that contains a single CPU.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Now, if we use carto on top of this, the following happens in
</span><br>
<span class="quotelev2">&gt; &gt; get_ib_dev_distance() (in btl/openib/btl_openib_component.c):
</span><br>
<span class="quotelev2">&gt; &gt;   . opal_paffinity_base_get_processor_info() is called to get the
</span><br>
<span class="quotelev2">&gt; &gt;     number of logical processors (we get 1 due to the singleton 
</span><br>
cpuset)
<br>
<span class="quotelev2">&gt; &gt;   . we loop over that # of processors to check whether our process is
</span><br>
<span class="quotelev2">&gt; &gt;     bound to one of them. In our case the loop will be executed only
</span><br>
<span class="quotelev2">&gt; &gt;     once and we will never get the correct binding information.
</span><br>
<span class="quotelev2">&gt; &gt;   . if the process is bound actually get the distance to the device.
</span><br>
<span class="quotelev2">&gt; &gt;     in our case we won't execute that part of the code.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The attached patch is a proposal to fix the issue.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt; Nadia
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
&lt;get_ib_dev_distance.patch&gt;_______________________________________________
<br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10356/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10357.php">nadia.derbey_at_[hidden]: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see	processes as bound if the job has been launched by srun"</a>
<li><strong>Previous message:</strong> <a href="10355.php">Brice Goglin: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see	processes as bound if the job has been launched by srun"</a>
<li><strong>In reply to:</strong> <a href="10354.php">Jeff Squyres: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10360.php">Chris Samuel: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun"</a>
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
