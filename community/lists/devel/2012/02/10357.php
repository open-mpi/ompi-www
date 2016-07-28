<?
$subject_val = "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see	processes as bound if the job has been launched by srun";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  9 07:14:15 2012" -->
<!-- isoreceived="20120209121415" -->
<!-- sent="Thu, 9 Feb 2012 13:15:22 +0100" -->
<!-- isosent="20120209121522" -->
<!-- name="nadia.derbey_at_[hidden]" -->
<!-- email="nadia.derbey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see	processes as bound if the job has been launched by srun" -->
<!-- id="OFA2228C18.C383D616-ONC125799F.0042DFF7-C125799F.0043C1E9_at_bull.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F33AC09.7050600_at_inria.fr" -->
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
<strong>Date:</strong> 2012-02-09 07:15:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10358.php">Ralph Castain: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see	processes as bound if the job has been launched by srun"</a>
<li><strong>Previous message:</strong> <a href="10356.php">nadia.derbey_at_[hidden]: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see	processes as bound if the job has been launched by srun"</a>
<li><strong>In reply to:</strong> <a href="10355.php">Brice Goglin: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see	processes as bound if the job has been launched by srun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10358.php">Ralph Castain: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see	processes as bound if the job has been launched by srun"</a>
<li><strong>Reply:</strong> <a href="10358.php">Ralph Castain: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see	processes as bound if the job has been launched by srun"</a>
<li><strong>Reply:</strong> <a href="10359.php">Jeff Squyres: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see	processes as bound if the job has been launched by srun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;devel-bounces_at_[hidden] wrote on 02/09/2012 12:20:41 PM:
<br>
<p><span class="quotelev1">&gt; De : Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; A : Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date : 02/09/2012 12:20 PM
</span><br>
<span class="quotelev1">&gt; Objet : Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see
</span><br>
<span class="quotelev1">&gt; processes as bound if the job has been launched by srun
</span><br>
<span class="quotelev1">&gt; Envoy&#233; par : devel-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; By default, hwloc only shows what's inside the current cpuset. There's
</span><br>
<span class="quotelev1">&gt; an option to show everything instead (topology flag).
</span><br>
<p>So may be using that flag inside opal_paffinity_base_get_processor_info() 
<br>
would be a better fix than the one I'm proposing in my patch.
<br>
<p>I found a bunch of other places where things are managed as in 
<br>
get_ib_dev_distance().
<br>
<p>Just doing a grep in the sources, I could find:
<br>
&nbsp;&nbsp;. init_maffinity() in btl/sm/btl_sm.c
<br>
&nbsp;&nbsp;. vader_init_maffinity() in btl/vader/btl_vader.c
<br>
&nbsp;&nbsp;. get_ib_dev_distance() in btl/wv/btl_wv_component.c
<br>
<p>So I think the flag Brice is talking about should definitely be the fix.
<br>
<p>Regards,
<br>
Nadia
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 09/02/2012 12:18, Jeff Squyres a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; Just so that I understand this better -- if a process is bound in 
</span><br>
<span class="quotelev1">&gt; a cpuset, will tools like hwloc's lstopo only show the Linux 
</span><br>
<span class="quotelev1">&gt; processors *in that cpuset*?  I.e., does it not have any visibility 
</span><br>
<span class="quotelev1">&gt; of the processors outside of its cpuset?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jan 27, 2012, at 11:38 AM, nadia.derbey wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; If a job is launched using &quot;srun --resv-ports --cpu_bind:...&quot; and 
</span><br>
slurm
<br>
<span class="quotelev3">&gt; &gt;&gt; is configured with:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   TaskPlugin=task/affinity
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   TaskPluginParam=Cpusets
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; each rank of that job is in a cpuset that contains a single CPU.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Now, if we use carto on top of this, the following happens in
</span><br>
<span class="quotelev3">&gt; &gt;&gt; get_ib_dev_distance() (in btl/openib/btl_openib_component.c):
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   . opal_paffinity_base_get_processor_info() is called to get the
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     number of logical processors (we get 1 due to the singleton 
</span><br>
cpuset)
<br>
<span class="quotelev3">&gt; &gt;&gt;   . we loop over that # of processors to check whether our process is
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     bound to one of them. In our case the loop will be executed only
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     once and we will never get the correct binding information.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   . if the process is bound actually get the distance to the device.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     in our case we won't execute that part of the code.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The attached patch is a proposal to fix the issue.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Nadia
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
&lt;get_ib_dev_distance.patch&gt;_______________________________________________
<br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10357/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10358.php">Ralph Castain: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see	processes as bound if the job has been launched by srun"</a>
<li><strong>Previous message:</strong> <a href="10356.php">nadia.derbey_at_[hidden]: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see	processes as bound if the job has been launched by srun"</a>
<li><strong>In reply to:</strong> <a href="10355.php">Brice Goglin: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see	processes as bound if the job has been launched by srun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10358.php">Ralph Castain: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see	processes as bound if the job has been launched by srun"</a>
<li><strong>Reply:</strong> <a href="10358.php">Ralph Castain: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see	processes as bound if the job has been launched by srun"</a>
<li><strong>Reply:</strong> <a href="10359.php">Jeff Squyres: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see	processes as bound if the job has been launched by srun"</a>
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
