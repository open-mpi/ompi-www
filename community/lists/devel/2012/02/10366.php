<?
$subject_val = "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't	see	processes as bound if the job has been launched by srun";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  9 08:14:35 2012" -->
<!-- isoreceived="20120209131435" -->
<!-- sent="Thu, 9 Feb 2012 08:14:29 -0500" -->
<!-- isosent="20120209131429" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't	see	processes as bound if the job has been launched by srun" -->
<!-- id="43520CD7-B514-48EA-BC97-C0F742D9478D_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="ECB93FC1-CE3C-4FE0-89C9-C8F34CAFA8C1_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't	see	processes as bound if the job has been launched by srun<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-09 08:14:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10367.php">Jeff Squyres: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see	processes as bound if the job has been launched by srun"</a>
<li><strong>Previous message:</strong> <a href="10365.php">Brice Goglin: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see	processes as bound if the job has been launched by srun"</a>
<li><strong>In reply to:</strong> <a href="10364.php">Ralph Castain: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't	see	processes as bound if the job has been launched by srun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10368.php">Ralph Castain: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't	see	processes as bound if the job has been launched by srun"</a>
<li><strong>Reply:</strong> <a href="10368.php">Ralph Castain: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't	see	processes as bound if the job has been launched by srun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Should we just do this, then:
<br>
<p>Index: mca/hwloc/base/hwloc_base_util.c
<br>
===================================================================
<br>
--- mca/hwloc/base/hwloc_base_util.c	(revision 25885)
<br>
+++ mca/hwloc/base/hwloc_base_util.c	(working copy)
<br>
@@ -173,6 +173,9 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;hwloc:base:get_topology&quot;));
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (0 != hwloc_topology_init(&amp;opal_hwloc_topology) ||
<br>
+        0 != hwloc_topology_set_flags(opal_hwloc_topology, 
<br>
+                                      (HWLOC_TOPOLOGY_FLAG_WHOLE_SYSTEM |
<br>
+                                       HWLOC_TOPOLOGY_FLAG_WHOLE_IO)) ||
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0 != hwloc_topology_load(opal_hwloc_topology)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return OPAL_ERR_NOT_SUPPORTED;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p><p><p>On Feb 9, 2012, at 8:04 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Yes, I missed that point before - too early in the morning :-/
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As I said in my last note, it would be nice to either have a flag indicating we are bound, or see all the cpu info so we can compute that we are bound. Either way, we still need to have a complete picture of all I/O devices so you can compute the distance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 9, 2012, at 6:01 AM, nadia.derbey_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; devel-bounces_at_[hidden] wrote on 02/09/2012 01:32:31 PM:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; De : Ralph Castain &lt;rhc_at_[hidden]&gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; A : Open MPI Developers &lt;devel_at_[hidden]&gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Date : 02/09/2012 01:32 PM 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Objet : Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see
</span><br>
<span class="quotelev3">&gt;&gt; &gt; processes as bound if the job has been launched by srun 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Envoy&#233; par : devel-bounces_at_[hidden] 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hi Nadia 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I'm wondering what value there is in showing the full topology, or 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; using it in any of our components, if the process is restricted to a
</span><br>
<span class="quotelev3">&gt;&gt; &gt; specific set of cpus? Does it really help to know that there are 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; other cpus out there that are unreachable? 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph, 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The intention here is not to show cpus that are unreachable, but to fix an issue we have at least in get_ib_dev_distance() in the openib btl. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The problem is that if a process is restricted to a single CPU, the algorithm used in get_ib_dev_distance doesn't work at all: 
</span><br>
<span class="quotelev2">&gt;&gt; I have 2 ib interfaces on my victim (say mlx4_0 and mlx4_1), and I want the openib btl to select the one that is the closest to my rank. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; As I said in my first e-mail, here is what is done today: 
</span><br>
<span class="quotelev2">&gt;&gt;    . opal_paffinity_base_get_processor_info() is called to get the number of logical processors (we get 1 due to the singleton cpuset)
</span><br>
<span class="quotelev2">&gt;&gt;   . we loop over that # of processors to check whether our process is bound to one of them. In our case the loop will be executed only once and we will never get the correct binding information.
</span><br>
<span class="quotelev2">&gt;&gt;   . if the process is bound actually get the distance to the device.
</span><br>
<span class="quotelev2">&gt;&gt;        in our case, the distance won't be computed and mlx4_0 will be seen as &quot;equivalent&quot; to mlx4_1 in terms of distances. This is what I definitely want to avoid. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Regards, 
</span><br>
<span class="quotelev2">&gt;&gt; Nadia 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Feb 9, 2012, at 5:15 AM, nadia.derbey_at_[hidden] wrote: 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt;   
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel-bounces_at_[hidden] wrote on 02/09/2012 12:20:41 PM:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; De : Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; A : Open MPI Developers &lt;devel_at_[hidden]&gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Date : 02/09/2012 12:20 PM 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Objet : Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; processes as bound if the job has been launched by srun 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Envoy&#233; par : devel-bounces_at_[hidden] 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; By default, hwloc only shows what's inside the current cpuset. There's
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; an option to show everything instead (topology flag). 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; So may be using that flag inside 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; opal_paffinity_base_get_processor_info() would be a better fix than 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; the one I'm proposing in my patch. 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I found a bunch of other places where things are managed as in 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; get_ib_dev_distance(). 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Just doing a grep in the sources, I could find: 
</span><br>
<span class="quotelev3">&gt;&gt; &gt;   . init_maffinity() in btl/sm/btl_sm.c 
</span><br>
<span class="quotelev3">&gt;&gt; &gt;   . vader_init_maffinity() in btl/vader/btl_vader.c 
</span><br>
<span class="quotelev3">&gt;&gt; &gt;   . get_ib_dev_distance() in btl/wv/btl_wv_component.c 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; So I think the flag Brice is talking about should definitely be the fix. 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Regards, 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Nadia 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Brice
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Le 09/02/2012 12:18, Jeff Squyres a &#233;crit :
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt; Just so that I understand this better -- if a process is bound in 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; a cpuset, will tools like hwloc's lstopo only show the Linux 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; processors *in that cpuset*?  I.e., does it not have any visibility 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; of the processors outside of its cpuset?
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt; On Jan 27, 2012, at 11:38 AM, nadia.derbey wrote:
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt;&gt; If a job is launched using &quot;srun --resv-ports --cpu_bind:...&quot; and slurm
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt;&gt; is configured with:
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt;&gt;   TaskPlugin=task/affinity
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt;&gt;   TaskPluginParam=Cpusets
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt;&gt; each rank of that job is in a cpuset that contains a single CPU.
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt;&gt; Now, if we use carto on top of this, the following happens in
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt;&gt; get_ib_dev_distance() (in btl/openib/btl_openib_component.c):
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt;&gt;   . opal_paffinity_base_get_processor_info() is called to get the
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt;&gt;     number of logical processors (we get 1 due to the singleton cpuset)
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt;&gt;   . we loop over that # of processors to check whether our process is
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt;&gt;     bound to one of them. In our case the loop will be executed only
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt;&gt;     once and we will never get the correct binding information.
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt;&gt;   . if the process is bound actually get the distance to the device.
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt;&gt;     in our case we won't execute that part of the code.
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt;&gt; The attached patch is a proposal to fix the issue.
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt;&gt; Nadia
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &lt;get_ib_dev_distance.patch&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="10367.php">Jeff Squyres: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see	processes as bound if the job has been launched by srun"</a>
<li><strong>Previous message:</strong> <a href="10365.php">Brice Goglin: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see	processes as bound if the job has been launched by srun"</a>
<li><strong>In reply to:</strong> <a href="10364.php">Ralph Castain: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't	see	processes as bound if the job has been launched by srun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10368.php">Ralph Castain: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't	see	processes as bound if the job has been launched by srun"</a>
<li><strong>Reply:</strong> <a href="10368.php">Ralph Castain: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't	see	processes as bound if the job has been launched by srun"</a>
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
