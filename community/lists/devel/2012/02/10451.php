<?
$subject_val = "Re: [OMPI devel] btl/openib: get_ib_dev_distance	doesn't	see	processes as bound if the job has been launched by srun";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 16 08:13:55 2012" -->
<!-- isoreceived="20120216131355" -->
<!-- sent="Thu, 16 Feb 2012 14:16:13 +0100" -->
<!-- isosent="20120216131613" -->
<!-- name="nadia.derbey_at_[hidden]" -->
<!-- email="nadia.derbey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] btl/openib: get_ib_dev_distance	doesn't	see	processes as bound if the job has been launched by srun" -->
<!-- id="OF04892C1D.E4916560-ONC12579A6.00356ADA-C12579A6.004953AA_at_bull.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7464AB18-1C2E-4D21-9D1E-B8CE4C924092_at_cisco.com" -->
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
<strong>From:</strong> <a href="mailto:nadia.derbey_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20btl/openib:%20get_ib_dev_distance	doesn't	see	processes%20as%20bound%20if%20the%20job%20has%20been%20launched%20by%20srun"><em>nadia.derbey_at_[hidden]</em></a><br>
<strong>Date:</strong> 2012-02-16 08:16:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10452.php">Jeff Squyres: "Re: [OMPI devel] svn.open-mpi.org unscheduled downtime"</a>
<li><strong>Previous message:</strong> <a href="10450.php">Jeff Squyres: "Re: [OMPI devel] libevent build fails when configured with --disable-hwloc"</a>
<li><strong>In reply to:</strong> <a href="10373.php">Jeff Squyres: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't	see	processes as bound if the job has been launched by srun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10468.php">Brice Goglin: "Re: [OMPI devel] btl/openib: get_ib_dev_distance	doesn't	see	processes as bound if the job has been launched by srun"</a>
<li><strong>Reply:</strong> <a href="10468.php">Brice Goglin: "Re: [OMPI devel] btl/openib: get_ib_dev_distance	doesn't	see	processes as bound if the job has been launched by srun"</a>
<li><strong>Reply:</strong> <a href="10477.php">Jeff Squyres: "Re: [OMPI devel] btl/openib: get_ib_dev_distance	doesn't	see	processes as bound if the job has been launched by srun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>Sorry for the delay, but my victim with 2 ib devices had been stolen ;-)
<br>
<p>So, I ported the patch on the v1.5 branch and finally could test it.
<br>
<p>Actually, there is no opal_hwloc_base_get_topology() in v1.5 so I had to 
<br>
set
<br>
the hwloc flags in ompi_mpi_init() and orte_odls_base_open() (i.e. the 
<br>
places
<br>
where opal_hwloc_topology is initialized).
<br>
<p>With the new flag set, hwloc_get_nbobjs_by_type(opal_hwloc_topology, 
<br>
HWLOC_OBJ_CORE)
<br>
is now seeing the actual number of cores on the node (instead of 1 when 
<br>
our
<br>
cpuset is a singleton).
<br>
<p>Since opal_paffinity_base_get_processor_info() calls 
<br>
module_get_processor_info()
<br>
(in hwloc/paffinity_hwloc_module.c), which in turn calls 
<br>
hwloc_get_nbobjs_by_type(),
<br>
we are now getting the right number of cores in get_ib_dev_distance().
<br>
<p>So we are looping over the exact number of cores, looking for a potential 
<br>
binding.
<br>
<p>So as a conclusion, there's no need for any other patch: the fix you 
<br>
committed
<br>
was the only one needed to fix the issue.
<br>
<p>Could you please move it to v1.5 (do I need to fill a CMR)?
<br>
<p>Thanks!
<br>
<p>&nbsp;
<br>
<pre>
-- 
Nadia Derbey
 
devel-bounces_at_[hidden] wrote on 02/09/2012 06:00:48 PM:
&gt; De : Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
&gt; A : Open MPI Developers &lt;devel_at_[hidden]&gt;
&gt; Date : 02/09/2012 06:01 PM
&gt; Objet : Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see
&gt; processes as bound if the job has been launched by srun
&gt; Envoy&#233; par : devel-bounces_at_[hidden]
&gt; 
&gt; Nadia --
&gt; 
&gt; I committed the fix in the trunk to use HWLOC_WHOLE_SYSTEM and 
IO_DEVICES.
&gt; 
&gt; Do you want to revise your patch to use hwloc APIs with 
&gt; opal_hwloc_topology (instead of paffinity)?  We could use that as a 
&gt; basis for the other places you identified that are doing similar things.
&gt; 
&gt; 
&gt; On Feb 9, 2012, at 8:34 AM, Ralph Castain wrote:
&gt; 
&gt; &gt; Ah, okay - in that case, having the I/O device attached to the 
&gt; &quot;closest&quot; object at each depth would be ideal from an OMPI perspective.
&gt; &gt; 
&gt; &gt; On Feb 9, 2012, at 6:30 AM, Brice Goglin wrote:
&gt; &gt; 
&gt; &gt;&gt; The bios usually tells you which numa location is close to each 
&gt; host-to-pci bridge. So the answer is yes.
&gt; &gt;&gt; Brice
&gt; &gt;&gt; 
&gt; &gt;&gt; 
&gt; &gt;&gt; Ralph Castain &lt;rhc_at_[hidden]&gt; a &#233;crit :
&gt; &gt;&gt; I'm not sure I understand this comment. A PCI device is attached 
&gt; to the node, not to any specific location within the node, isn't it?
&gt; Can you really say that a PCI device is &quot;attached&quot; to a specific 
&gt; NUMA location, for example?
&gt; &gt;&gt; 
&gt; &gt;&gt; 
&gt; &gt;&gt; On Feb 9, 2012, at 6:15 AM, Jeff Squyres wrote:
&gt; &gt;&gt; 
&gt; &gt;&gt;&gt; That doesn't seem too attractive from an OMPI perspective, 
&gt; though.  We'd want to know where the PCI devices are actually rooted.
&gt; &gt;&gt; 
&gt; &gt;&gt; _______________________________________________
&gt; &gt;&gt; devel mailing list
&gt; &gt;&gt; devel_at_[hidden]
&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt; &gt; 
&gt; &gt; _______________________________________________
&gt; &gt; devel mailing list
&gt; &gt; devel_at_[hidden]
&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt; 
&gt; 
&gt; -- 
&gt; Jeff Squyres
&gt; jsquyres_at_[hidden]
&gt; For corporate legal information go to:
&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt; 
&gt; 
&gt; _______________________________________________
&gt; devel mailing list
&gt; devel_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10451/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10452.php">Jeff Squyres: "Re: [OMPI devel] svn.open-mpi.org unscheduled downtime"</a>
<li><strong>Previous message:</strong> <a href="10450.php">Jeff Squyres: "Re: [OMPI devel] libevent build fails when configured with --disable-hwloc"</a>
<li><strong>In reply to:</strong> <a href="10373.php">Jeff Squyres: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't	see	processes as bound if the job has been launched by srun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10468.php">Brice Goglin: "Re: [OMPI devel] btl/openib: get_ib_dev_distance	doesn't	see	processes as bound if the job has been launched by srun"</a>
<li><strong>Reply:</strong> <a href="10468.php">Brice Goglin: "Re: [OMPI devel] btl/openib: get_ib_dev_distance	doesn't	see	processes as bound if the job has been launched by srun"</a>
<li><strong>Reply:</strong> <a href="10477.php">Jeff Squyres: "Re: [OMPI devel] btl/openib: get_ib_dev_distance	doesn't	see	processes as bound if the job has been launched by srun"</a>
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
