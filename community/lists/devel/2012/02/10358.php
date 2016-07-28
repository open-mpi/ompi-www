<?
$subject_val = "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see	processes as bound if the job has been launched by srun";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  9 07:32:40 2012" -->
<!-- isoreceived="20120209123240" -->
<!-- sent="Thu, 9 Feb 2012 05:32:31 -0700" -->
<!-- isosent="20120209123231" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see	processes as bound if the job has been launched by srun" -->
<!-- id="4C5EF431-ED68-4B99-BB57-352DFEC5DE83_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-09 07:32:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10359.php">Jeff Squyres: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see	processes as bound if the job has been launched by srun"</a>
<li><strong>Previous message:</strong> <a href="10357.php">nadia.derbey_at_[hidden]: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see	processes as bound if the job has been launched by srun"</a>
<li><strong>In reply to:</strong> <a href="10357.php">nadia.derbey_at_[hidden]: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see	processes as bound if the job has been launched by srun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10362.php">nadia.derbey_at_[hidden]: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't	see	processes as bound if the job has been launched by srun"</a>
<li><strong>Reply:</strong> <a href="10362.php">nadia.derbey_at_[hidden]: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't	see	processes as bound if the job has been launched by srun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Nadia
<br>
<p>I'm wondering what value there is in showing the full topology, or using it in any of our components, if the process is restricted to a specific set of cpus? Does it really help to know that there are other cpus out there that are unreachable?
<br>
<p>On Feb 9, 2012, at 5:15 AM, nadia.derbey_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; devel-bounces_at_[hidden] wrote on 02/09/2012 12:20:41 PM:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; De : Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; A : Open MPI Developers &lt;devel_at_[hidden]&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Date : 02/09/2012 12:20 PM 
</span><br>
<span class="quotelev2">&gt; &gt; Objet : Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see
</span><br>
<span class="quotelev2">&gt; &gt; processes as bound if the job has been launched by srun 
</span><br>
<span class="quotelev2">&gt; &gt; Envoy&#233; par : devel-bounces_at_[hidden] 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; By default, hwloc only shows what's inside the current cpuset. There's
</span><br>
<span class="quotelev2">&gt; &gt; an option to show everything instead (topology flag). 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So may be using that flag inside opal_paffinity_base_get_processor_info() would be a better fix than the one I'm proposing in my patch. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I found a bunch of other places where things are managed as in get_ib_dev_distance(). 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just doing a grep in the sources, I could find: 
</span><br>
<span class="quotelev1">&gt;   . init_maffinity() in btl/sm/btl_sm.c 
</span><br>
<span class="quotelev1">&gt;   . vader_init_maffinity() in btl/vader/btl_vader.c 
</span><br>
<span class="quotelev1">&gt;   . get_ib_dev_distance() in btl/wv/btl_wv_component.c 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So I think the flag Brice is talking about should definitely be the fix. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards, 
</span><br>
<span class="quotelev1">&gt; Nadia 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Brice
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Le 09/02/2012 12:18, Jeff Squyres a &#233;crit :
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Just so that I understand this better -- if a process is bound in 
</span><br>
<span class="quotelev2">&gt; &gt; a cpuset, will tools like hwloc's lstopo only show the Linux 
</span><br>
<span class="quotelev2">&gt; &gt; processors *in that cpuset*?  I.e., does it not have any visibility 
</span><br>
<span class="quotelev2">&gt; &gt; of the processors outside of its cpuset?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Jan 27, 2012, at 11:38 AM, nadia.derbey wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; If a job is launched using &quot;srun --resv-ports --cpu_bind:...&quot; and slurm
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; is configured with:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;   TaskPlugin=task/affinity
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;   TaskPluginParam=Cpusets
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; each rank of that job is in a cpuset that contains a single CPU.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Now, if we use carto on top of this, the following happens in
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; get_ib_dev_distance() (in btl/openib/btl_openib_component.c):
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;   . opal_paffinity_base_get_processor_info() is called to get the
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;     number of logical processors (we get 1 due to the singleton cpuset)
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;   . we loop over that # of processors to check whether our process is
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;     bound to one of them. In our case the loop will be executed only
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;     once and we will never get the correct binding information.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;   . if the process is bound actually get the distance to the device.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;     in our case we won't execute that part of the code.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; The attached patch is a proposal to fix the issue.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Regards,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Nadia
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; &lt;get_ib_dev_distance.patch&gt;_______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10358/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10359.php">Jeff Squyres: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see	processes as bound if the job has been launched by srun"</a>
<li><strong>Previous message:</strong> <a href="10357.php">nadia.derbey_at_[hidden]: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see	processes as bound if the job has been launched by srun"</a>
<li><strong>In reply to:</strong> <a href="10357.php">nadia.derbey_at_[hidden]: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see	processes as bound if the job has been launched by srun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10362.php">nadia.derbey_at_[hidden]: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't	see	processes as bound if the job has been launched by srun"</a>
<li><strong>Reply:</strong> <a href="10362.php">nadia.derbey_at_[hidden]: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't	see	processes as bound if the job has been launched by srun"</a>
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
