<?
$subject_val = "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 17 08:21:16 2012" -->
<!-- isoreceived="20120217132116" -->
<!-- sent="Fri, 17 Feb 2012 05:21:11 -0800" -->
<!-- isosent="20120217132111" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun" -->
<!-- id="CAMD57ocqYG9tqGnQQKD9azox+H8EMf03T1RZ3Lo46ZfEsXqkjw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F3E0396.4000701_at_inria.fr" -->
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
<strong>Date:</strong> 2012-02-17 08:21:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10475.php">Jeff Squyres: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun"</a>
<li><strong>Previous message:</strong> <a href="10473.php">nadia.derbey_at_[hidden]: "Re: [OMPI devel] btl/openib: get_ib_dev_distance	doesn't	see	processes as bound if the job has been launched by srun"</a>
<li><strong>In reply to:</strong> <a href="10468.php">Brice Goglin: "Re: [OMPI devel] btl/openib: get_ib_dev_distance	doesn't	see	processes as bound if the job has been launched by srun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10475.php">Jeff Squyres: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun"</a>
<li><strong>Reply:</strong> <a href="10475.php">Jeff Squyres: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Feb 16, 2012 at 11:36 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; **
</span><br>
<span class="quotelev1">&gt; Le 16/02/2012 14:16, nadia.derbey_at_[hidden] a &#233;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
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
<span class="quotelev1">&gt; Actually, there is no opal_hwloc_base_get_topology() in v1.5 so I had to
</span><br>
<span class="quotelev1">&gt; set
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
<span class="quotelev1">&gt; is now seeing the actual number of cores on the node (instead of 1 when our
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
<span class="quotelev1">&gt; So we are looping over the exact number of cores, looking for a potential
</span><br>
<span class="quotelev1">&gt; binding.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So as a conclusion, there's no need for any other patch: the fix you
</span><br>
<span class="quotelev1">&gt; committed
</span><br>
<span class="quotelev1">&gt; was the only one needed to fix the issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I didn't follow this entire thread in details, but I am feeling that
</span><br>
<span class="quotelev1">&gt; something is wrong here. The flag fixes your problem indeed, but I think it
</span><br>
<span class="quotelev1">&gt; may break binding too. It's basically making all &quot;unavailable resources&quot;
</span><br>
<span class="quotelev1">&gt; available. So the binding code may end up trying to bind processes on cores
</span><br>
<span class="quotelev1">&gt; that it can't actually use.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If srun gives you the first cores of the machine, it works fine because
</span><br>
<span class="quotelev1">&gt; OMPI tries to use the first cores and those are available. But did you ever
</span><br>
<span class="quotelev1">&gt; try when srun gives the second socket only for instance? Or whichever part
</span><br>
<span class="quotelev1">&gt; of the machine that does not contain the first cores ? I think OMPI will
</span><br>
<span class="quotelev1">&gt; still try to bind on the first cores if the flag is set, but those are not
</span><br>
<span class="quotelev1">&gt; available for binding.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Unless I am missing something, the proper fix would be to have two
</span><br>
<span class="quotelev1">&gt; instances of the topology. One with the entire machine (for people that
</span><br>
<span class="quotelev1">&gt; really want to consult all physical resources), and one for the really
</span><br>
<span class="quotelev1">&gt; available part of machine (mostly used for binding).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Hmmm...are you saying that the &quot;allowed&quot; cpuset no longer is accurate when
<br>
this flag is set? That would seem strange. If so, can we ask that hwloc
<br>
instead show the resources, but correctly reflect the allowed cpuset? In
<br>
other words, give us a flag so that hwloc topology includes resources that
<br>
have zero bits in the allowed cpuset?
<br>
<p><p><span class="quotelev1">&gt; Brice
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10474/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10475.php">Jeff Squyres: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun"</a>
<li><strong>Previous message:</strong> <a href="10473.php">nadia.derbey_at_[hidden]: "Re: [OMPI devel] btl/openib: get_ib_dev_distance	doesn't	see	processes as bound if the job has been launched by srun"</a>
<li><strong>In reply to:</strong> <a href="10468.php">Brice Goglin: "Re: [OMPI devel] btl/openib: get_ib_dev_distance	doesn't	see	processes as bound if the job has been launched by srun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10475.php">Jeff Squyres: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun"</a>
<li><strong>Reply:</strong> <a href="10475.php">Jeff Squyres: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun"</a>
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
