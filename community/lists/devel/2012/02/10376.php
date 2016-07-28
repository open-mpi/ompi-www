<?
$subject_val = "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see	processes as bound if the job has been launched by srun";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  9 16:19:48 2012" -->
<!-- isoreceived="20120209211948" -->
<!-- sent="Thu, 09 Feb 2012 22:19:42 +0100" -->
<!-- isosent="20120209211942" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see	processes as bound if the job has been launched by srun" -->
<!-- id="4F34386E.3080700_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="33523957-47AC-4AE6-A247-5348DF22D448_at_open-mpi.org" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-09 16:19:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10377.php">Brice Goglin: "Re: [OMPI devel] btl/openib:	get_ib_dev_distance	doesn't	see	processes as bound if the job	has been launched by srun"</a>
<li><strong>Previous message:</strong> <a href="10375.php">Ralph Castain: "Re: [OMPI devel] btl/openib: get_ib_dev_distance	doesn't	see	processes as bound if the job has been launched by srun"</a>
<li><strong>In reply to:</strong> <a href="10363.php">Ralph Castain: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10378.php">Paul H. Hargrove: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun"</a>
<li><strong>Reply:</strong> <a href="10378.php">Paul H. Hargrove: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 09/02/2012 14:00, Ralph Castain a &#233;crit :
<br>
<span class="quotelev1">&gt; There is another aspect, though - I had missed it in the thread, but the question Nadia was addressing is: how to tell I am bound? The way we currently do it is to compare our cpuset against the local cpuset - if we are on a subset, then we know we are bound.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So if all hwloc returns to us is our cpuset, then we cannot make that determination. Yet I do see a utility as well in only showing our own cpus.
</span><br>
<p>Each hwloc object has several &quot;cpuset&quot; fields describing whether CPUs
<br>
are online or not, and accessible or not. Here are their meaning when
<br>
the WHOLE_SYSTEM flag is NOT set:
<br>
* &quot;cpuset&quot; only contains CPUs that are online and accessible
<br>
* &quot;online_cpuset&quot; is &quot;cpuset&quot; + CPUs that are online but not accessible
<br>
* &quot;allowed_cpuset&quot; is &quot;cpuset&quot; + CPUs that are accessible but not online
<br>
* &quot;complete_cpuset&quot; is everything
<br>
<p>So you can find out that you are &quot;bound&quot; by a Linux cgroup (I am not
<br>
saying Linux &quot;cpuset&quot; to avoid confusion) by comparing root-&gt;cpuset and
<br>
root-&gt;online_cpuset.
<br>
<p>Brice
<br>
<p><p><span class="quotelev1">&gt; Would it make sense to add a field to the hwloc_obj_t that contains the &quot;accessible&quot; cpus? Or a flag indicating &quot;you are bound to a subset of all available cpus&quot;?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Really, all we need is the flag - but we could compute it ourselves if we had the larger scope info.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10377.php">Brice Goglin: "Re: [OMPI devel] btl/openib:	get_ib_dev_distance	doesn't	see	processes as bound if the job	has been launched by srun"</a>
<li><strong>Previous message:</strong> <a href="10375.php">Ralph Castain: "Re: [OMPI devel] btl/openib: get_ib_dev_distance	doesn't	see	processes as bound if the job has been launched by srun"</a>
<li><strong>In reply to:</strong> <a href="10363.php">Ralph Castain: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10378.php">Paul H. Hargrove: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun"</a>
<li><strong>Reply:</strong> <a href="10378.php">Paul H. Hargrove: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun"</a>
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
