<?
$subject_val = "Re: [OMPI devel] btl/openib: get_ib_dev_distance	doesn't	see	processes as bound if the job has been launched by srun";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 17 02:37:02 2012" -->
<!-- isoreceived="20120217073702" -->
<!-- sent="Fri, 17 Feb 2012 08:36:54 +0100" -->
<!-- isosent="20120217073654" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] btl/openib: get_ib_dev_distance	doesn't	see	processes as bound if the job has been launched by srun" -->
<!-- id="4F3E0396.4000701_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="OF04892C1D.E4916560-ONC12579A6.00356ADA-C12579A6.004953AA_at_bull.net" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-17 02:36:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10469.php">Paul Hargrove: "[OMPI devel] trunk build failure on NetBSD-5.0"</a>
<li><strong>Previous message:</strong> <a href="10467.php">Paul H. Hargrove: "[OMPI devel] OPAL_ENABLE_FT_CR build broken in 1.5 branch"</a>
<li><strong>In reply to:</strong> <a href="10451.php">nadia.derbey_at_[hidden]: "Re: [OMPI devel] btl/openib: get_ib_dev_distance	doesn't	see	processes as bound if the job has been launched by srun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10473.php">nadia.derbey_at_[hidden]: "Re: [OMPI devel] btl/openib: get_ib_dev_distance	doesn't	see	processes as bound if the job has been launched by srun"</a>
<li><strong>Reply:</strong> <a href="10473.php">nadia.derbey_at_[hidden]: "Re: [OMPI devel] btl/openib: get_ib_dev_distance	doesn't	see	processes as bound if the job has been launched by srun"</a>
<li><strong>Reply:</strong> <a href="10474.php">Ralph Castain: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 16/02/2012 14:16, nadia.derbey_at_[hidden] a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry for the delay, but my victim with 2 ib devices had been stolen ;-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, I ported the patch on the v1.5 branch and finally could test it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Actually, there is no opal_hwloc_base_get_topology() in v1.5 so I had
</span><br>
<span class="quotelev1">&gt; to set
</span><br>
<span class="quotelev1">&gt; the hwloc flags in ompi_mpi_init() and orte_odls_base_open() (i.e. the
</span><br>
<span class="quotelev1">&gt; places
</span><br>
<span class="quotelev1">&gt; where opal_hwloc_topology is initialized).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With the new flag set, hwloc_get_nbobjs_by_type(opal_hwloc_topology,
</span><br>
<span class="quotelev1">&gt; HWLOC_OBJ_CORE)
</span><br>
<span class="quotelev1">&gt; is now seeing the actual number of cores on the node (instead of 1
</span><br>
<span class="quotelev1">&gt; when our
</span><br>
<span class="quotelev1">&gt; cpuset is a singleton).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Since opal_paffinity_base_get_processor_info() calls
</span><br>
<span class="quotelev1">&gt; module_get_processor_info()
</span><br>
<span class="quotelev1">&gt; (in hwloc/paffinity_hwloc_module.c), which in turn calls
</span><br>
<span class="quotelev1">&gt; hwloc_get_nbobjs_by_type(),
</span><br>
<span class="quotelev1">&gt; we are now getting the right number of cores in get_ib_dev_distance().
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So we are looping over the exact number of cores, looking for a
</span><br>
<span class="quotelev1">&gt; potential binding.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So as a conclusion, there's no need for any other patch: the fix you
</span><br>
<span class="quotelev1">&gt; committed
</span><br>
<span class="quotelev1">&gt; was the only one needed to fix the issue.
</span><br>
<p>I didn't follow this entire thread in details, but I am feeling that
<br>
something is wrong here. The flag fixes your problem indeed, but I think
<br>
it may break binding too. It's basically making all &quot;unavailable
<br>
resources&quot; available. So the binding code may end up trying to bind
<br>
processes on cores that it can't actually use.
<br>
<p>If srun gives you the first cores of the machine, it works fine because
<br>
OMPI tries to use the first cores and those are available. But did you
<br>
ever try when srun gives the second socket only for instance? Or
<br>
whichever part of the machine that does not contain the first cores ? I
<br>
think OMPI will still try to bind on the first cores if the flag is set,
<br>
but those are not available for binding.
<br>
<p>Unless I am missing something, the proper fix would be to have two
<br>
instances of the topology. One with the entire machine (for people that
<br>
really want to consult all physical resources), and one for the really
<br>
available part of machine (mostly used for binding).
<br>
<p>Brice
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10468/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10469.php">Paul Hargrove: "[OMPI devel] trunk build failure on NetBSD-5.0"</a>
<li><strong>Previous message:</strong> <a href="10467.php">Paul H. Hargrove: "[OMPI devel] OPAL_ENABLE_FT_CR build broken in 1.5 branch"</a>
<li><strong>In reply to:</strong> <a href="10451.php">nadia.derbey_at_[hidden]: "Re: [OMPI devel] btl/openib: get_ib_dev_distance	doesn't	see	processes as bound if the job has been launched by srun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10473.php">nadia.derbey_at_[hidden]: "Re: [OMPI devel] btl/openib: get_ib_dev_distance	doesn't	see	processes as bound if the job has been launched by srun"</a>
<li><strong>Reply:</strong> <a href="10473.php">nadia.derbey_at_[hidden]: "Re: [OMPI devel] btl/openib: get_ib_dev_distance	doesn't	see	processes as bound if the job has been launched by srun"</a>
<li><strong>Reply:</strong> <a href="10474.php">Ralph Castain: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun"</a>
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
