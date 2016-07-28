<?
$subject_val = "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  9 08:00:24 2012" -->
<!-- isoreceived="20120209130024" -->
<!-- sent="Thu, 9 Feb 2012 06:00:16 -0700" -->
<!-- isosent="20120209130016" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun" -->
<!-- id="33523957-47AC-4AE6-A247-5348DF22D448_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BF4F382F-3FF1-4F24-80E7-55AA394AC8D7_at_cisco.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-09 08:00:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10364.php">Ralph Castain: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't	see	processes as bound if the job has been launched by srun"</a>
<li><strong>Previous message:</strong> <a href="10362.php">nadia.derbey_at_[hidden]: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't	see	processes as bound if the job has been launched by srun"</a>
<li><strong>In reply to:</strong> <a href="10361.php">Jeff Squyres: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10376.php">Brice Goglin: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see	processes as bound if the job has been launched by srun"</a>
<li><strong>Reply:</strong> <a href="10376.php">Brice Goglin: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see	processes as bound if the job has been launched by srun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There is another aspect, though - I had missed it in the thread, but the question Nadia was addressing is: how to tell I am bound? The way we currently do it is to compare our cpuset against the local cpuset - if we are on a subset, then we know we are bound.
<br>
<p>So if all hwloc returns to us is our cpuset, then we cannot make that determination. Yet I do see a utility as well in only showing our own cpus.
<br>
<p>Would it make sense to add a field to the hwloc_obj_t that contains the &quot;accessible&quot; cpus? Or a flag indicating &quot;you are bound to a subset of all available cpus&quot;?
<br>
<p>Really, all we need is the flag - but we could compute it ourselves if we had the larger scope info.
<br>
<p>On Feb 9, 2012, at 5:53 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Feb 9, 2012, at 7:50 AM, Chris Samuel wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Just so that I understand this better -- if a process is bound in a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpuset, will tools like hwloc's lstopo only show the Linux
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processors *in that cpuset*?  I.e., does it not have any
</span><br>
<span class="quotelev3">&gt;&gt;&gt; visibility of the processors outside of its cpuset?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I believe that was the intention - there's no real benefit to knowing 
</span><br>
<span class="quotelev2">&gt;&gt; about resources that you can't access or use (and will likely get an 
</span><br>
<span class="quotelev2">&gt;&gt; error if you do) to my mind.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The real question, however, is how are IO devices represented if you don't do WHOLE_SUBSYSTEM?  I.e., what about IO devices that are not local to the socket of your cpuset, for example?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Take this sample image, for example:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/projects/hwloc/devel09-pci.png">http://www.open-mpi.org/projects/hwloc/devel09-pci.png</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What if my cpuset is only on Socket P#0?  What exactly will be reported via (WHOLE_SUBSYSTEM | HWLOC_TOPOLOGY_FLAG_WHOLE_IO)?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; IO devices is something that we do have an interest in reporting so that we can tell the &quot;distance&quot; to them, for example.
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10364.php">Ralph Castain: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't	see	processes as bound if the job has been launched by srun"</a>
<li><strong>Previous message:</strong> <a href="10362.php">nadia.derbey_at_[hidden]: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't	see	processes as bound if the job has been launched by srun"</a>
<li><strong>In reply to:</strong> <a href="10361.php">Jeff Squyres: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10376.php">Brice Goglin: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see	processes as bound if the job has been launched by srun"</a>
<li><strong>Reply:</strong> <a href="10376.php">Brice Goglin: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see	processes as bound if the job has been launched by srun"</a>
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
