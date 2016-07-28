<?
$subject_val = "Re: [OMPI devel] btl/openib: get_ib_dev_distance	doesn't	see	processes as bound if the job has been launched by srun";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 17 06:16:00 2012" -->
<!-- isoreceived="20120217111600" -->
<!-- sent="Fri, 17 Feb 2012 12:18:26 +0100" -->
<!-- isosent="20120217111826" -->
<!-- name="nadia.derbey_at_[hidden]" -->
<!-- email="nadia.derbey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] btl/openib: get_ib_dev_distance	doesn't	see	processes as bound if the job has been launched by srun" -->
<!-- id="OFC18C1871.4FA722EC-ONC12579A7.003CFD1C-C12579A7.003E8B4D_at_bull.net" -->
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
<strong>Subject:</strong> Re: [OMPI devel] btl/openib: get_ib_dev_distance	doesn't	see	processes as bound if the job has been launched by srun<br>
<strong>From:</strong> <a href="mailto:nadia.derbey_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20btl/openib:%20get_ib_dev_distance	doesn't	see	processes%20as%20bound%20if%20the%20job%20has%20been%20launched%20by%20srun"><em>nadia.derbey_at_[hidden]</em></a><br>
<strong>Date:</strong> 2012-02-17 06:18:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10474.php">Ralph Castain: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun"</a>
<li><strong>Previous message:</strong> <a href="10472.php">Jeff Squyres: "Re: [OMPI devel] Building otfcompress with binutils-gold fails"</a>
<li><strong>In reply to:</strong> <a href="10468.php">Brice Goglin: "Re: [OMPI devel] btl/openib: get_ib_dev_distance	doesn't	see	processes as bound if the job has been launched by srun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10476.php">Jeff Squyres: "Re: [OMPI devel] btl/openib: get_ib_dev_distance	doesn't	see	processes as bound if the job has been launched by srun"</a>
<li><strong>Reply:</strong> <a href="10476.php">Jeff Squyres: "Re: [OMPI devel] btl/openib: get_ib_dev_distance	doesn't	see	processes as bound if the job has been launched by srun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
devel-bounces_at_[hidden] wrote on 02/17/2012 08:36:54 AM:
<br>
<p><span class="quotelev1">&gt; De : Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; A : devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Date : 02/17/2012 08:37 AM
</span><br>
<span class="quotelev1">&gt; Objet : Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see
</span><br>
<span class="quotelev1">&gt; processes as bound if the job has been launched by srun
</span><br>
<span class="quotelev1">&gt; Envoy&#233; par : devel-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 16/02/2012 14:16, nadia.derbey_at_[hidden] a &#233;crit : 
</span><br>
<span class="quotelev1">&gt; Hi Jeff, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry for the delay, but my victim with 2 ib devices had been stolen ;-) 
</span><br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, I ported the patch on the v1.5 branch and finally could test it. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Actually, there is no opal_hwloc_base_get_topology() in v1.5 so I had to 
</span><br>
set 
<br>
<span class="quotelev1">&gt; the hwloc flags in ompi_mpi_init() and orte_odls_base_open() (i.e. the 
</span><br>
places
<br>
<span class="quotelev1">&gt; where opal_hwloc_topology is initialized). 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With the new flag set, hwloc_get_nbobjs_by_type(opal_hwloc_topology,
</span><br>
<span class="quotelev1">&gt; HWLOC_OBJ_CORE) 
</span><br>
<span class="quotelev1">&gt; is now seeing the actual number of cores on the node (instead of 1 when 
</span><br>
our 
<br>
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
<span class="quotelev1">&gt; So as a conclusion, there's no need for any other patch: the fix 
</span><br>
youcommitted
<br>
<span class="quotelev1">&gt; was the only one needed to fix the issue. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I didn't follow this entire thread in details, but I am feeling that
</span><br>
<span class="quotelev1">&gt; something is wrong here. The flag fixes your problem indeed, but I 
</span><br>
<span class="quotelev1">&gt; think it may break binding too. It's basically making all 
</span><br>
<span class="quotelev1">&gt; &quot;unavailable resources&quot; available. So the binding code may end up 
</span><br>
<span class="quotelev1">&gt; trying to bind processes on cores that it can't actually use.
</span><br>
<p>It's true that if we have a resource manager that can allocate for us
<br>
say a single socket within a node, the binding part OMPI might go out
<br>
of its actual boundaries.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If srun gives you the first cores of the machine, it works fine 
</span><br>
<span class="quotelev1">&gt; because OMPI tries to use the first cores and those are available. 
</span><br>
<span class="quotelev1">&gt; But did you ever try when srun gives the second socket only for 
</span><br>
<span class="quotelev1">&gt; instance? Or whichever part of the machine that does not contain the
</span><br>
<span class="quotelev1">&gt; first cores ?
</span><br>
<p>But I have to look for the proper option in slurm: I don't know if slurm 
<br>
allows for such a fine grained allocation. I have to look for the option
<br>
that enables to allocate socket X (X!=0).
<br>
<p><span class="quotelev1">&gt; I think OMPI will still try to bind on the first cores
</span><br>
<span class="quotelev1">&gt; if the flag is set, but those are not available for binding.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Unless I am missing something, the proper fix would be to have two 
</span><br>
<span class="quotelev1">&gt; instances of the topology. One with the entire machine (for people 
</span><br>
<span class="quotelev1">&gt; that really want to consult all physical resources), and one for the
</span><br>
<span class="quotelev1">&gt; really available part of machine (mostly used for binding).
</span><br>
<p>Agreed! 
<br>
<p>Regards,
<br>
Nadia
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10473/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10474.php">Ralph Castain: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun"</a>
<li><strong>Previous message:</strong> <a href="10472.php">Jeff Squyres: "Re: [OMPI devel] Building otfcompress with binutils-gold fails"</a>
<li><strong>In reply to:</strong> <a href="10468.php">Brice Goglin: "Re: [OMPI devel] btl/openib: get_ib_dev_distance	doesn't	see	processes as bound if the job has been launched by srun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10476.php">Jeff Squyres: "Re: [OMPI devel] btl/openib: get_ib_dev_distance	doesn't	see	processes as bound if the job has been launched by srun"</a>
<li><strong>Reply:</strong> <a href="10476.php">Jeff Squyres: "Re: [OMPI devel] btl/openib: get_ib_dev_distance	doesn't	see	processes as bound if the job has been launched by srun"</a>
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
