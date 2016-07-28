<?
$subject_val = "Re: [OMPI devel] Configuring openmpi-1.3.2 with	&quot;--without-rte-support&quot;. FLAG.";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 11 11:12:22 2009" -->
<!-- isoreceived="20090511151222" -->
<!-- sent="Mon, 11 May 2009 11:12:18 -0400" -->
<!-- isosent="20090511151218" -->
<!-- name="ms3770_at_[hidden]" -->
<!-- email="ms3770_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Configuring openmpi-1.3.2 with	&amp;quot;--without-rte-support&amp;quot;. FLAG." -->
<!-- id="20090511111218.x1782egmm8sk0sos_at_cubmail.cc.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BF490BC8-A4BA-459A-874B-320D4AA1C140_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Configuring openmpi-1.3.2 with	&quot;--without-rte-support&quot;. FLAG.<br>
<strong>From:</strong> <a href="mailto:ms3770_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20Configuring%20openmpi-1.3.2%20with	&amp;amp;quot;--without-rte-support&amp;amp;quot;.%20FLAG."><em>ms3770_at_[hidden]</em></a><br>
<strong>Date:</strong> 2009-05-11 11:12:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5996.php">Ralph Castain: "Re: [OMPI devel] Configuring openmpi-1.3.2 with &quot;--without-rte-support&quot;. FLAG."</a>
<li><strong>Previous message:</strong> <a href="5994.php">Ralph Castain: "Re: [OMPI devel] Configuring openmpi-1.3.2 with &quot;--without-rte-support&quot;. FLAG."</a>
<li><strong>In reply to:</strong> <a href="5994.php">Ralph Castain: "Re: [OMPI devel] Configuring openmpi-1.3.2 with &quot;--without-rte-support&quot;. FLAG."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5996.php">Ralph Castain: "Re: [OMPI devel] Configuring openmpi-1.3.2 with &quot;--without-rte-support&quot;. FLAG."</a>
<li><strong>Reply:</strong> <a href="5996.php">Ralph Castain: "Re: [OMPI devel] Configuring openmpi-1.3.2 with &quot;--without-rte-support&quot;. FLAG."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Thanks for your quick response. I am working on LINUX Cluster, so  
<br>
probably has SLURM installed.
<br>
<p>I am studying to minimise the time to start-up of OMPI on a  
<br>
homogeneous system - like a bunch of embedded devices or even on large  
<br>
number of similar cores - like Bluegene(they say it takes 30 min for  
<br>
OMPI to start on it!!!). I am grad student and am trying to study the  
<br>
ways OMPI can be enhanced for such systems. I thought the  
<br>
initialization process involving the discovery of resources,  
<br>
allocation and forming the registery and then HNP must be taking all  
<br>
that time. I don't have a large number of homogeneous systems at my  
<br>
dispense, so was just trying with my small cluster of Linux boxes.
<br>
<p>If you can direct me to the right direction it will be really greatful.
<br>
<p>Thanks and Regards,
<br>
Maninder Singh.
<br>
<p>Quoting Ralph Castain &lt;rhc_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; That configure option does work, but you appear to be on a system that
</span><br>
<span class="quotelev1">&gt; has SLURM installed - yes? Are you planning on running with SLURM?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Building --without-rte-support will remove a lot more than just the
</span><br>
<span class="quotelev1">&gt; allocator and mapper. You have to be on a system like a Cray that has
</span><br>
<span class="quotelev1">&gt; its own launch, mapping, and MPI wireup support. Unfortunately, 	SLURM
</span><br>
<span class="quotelev1">&gt; doesn't meet all those requirements.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you are trying to improve startup time, then you are probably
</span><br>
<span class="quotelev1">&gt; chasing the wrong areas. The allocation and mapping functions are only
</span><br>
<span class="quotelev1">&gt; loaded by mpirun, not any application process or daemon, and those
</span><br>
<span class="quotelev1">&gt; functions typically take only milliseconds to execute.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What problem are you trying to solve? We have a lot of capability for
</span><br>
<span class="quotelev1">&gt; improved launch times built into 1.3.2, and even more in the OMPI
</span><br>
<span class="quotelev1">&gt; development trunk that will be in future releases. Depending upon the
</span><br>
<span class="quotelev1">&gt; precise problem you are trying to resolve, we can perhaps point you to
</span><br>
<span class="quotelev1">&gt; a better solution.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 11, 2009, at 12:18 AM, ms3770_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello All,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am trying to build openmpi-1.3.2 with &quot;--without-rte-support&quot;. I   
</span><br>
<span class="quotelev2">&gt;&gt; am getting bunch of
</span><br>
<span class="quotelev2">&gt;&gt; errors. Is this support fully functioning or not?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I was trying to reduce the time OMPI takes to load on a homogenous   
</span><br>
<span class="quotelev2">&gt;&gt; system by removing the
</span><br>
<span class="quotelev2">&gt;&gt; Resource Discovery/Allocation/mapping stuff by giving all these as   
</span><br>
<span class="quotelev2">&gt;&gt; static inputs but then
</span><br>
<span class="quotelev2">&gt;&gt; I saw this FLAG and tried to build using it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can anybody with knowledge on this direct me?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks and Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Maninder.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; PS : Sorry, I sent this same mail to users group also, if that is   
</span><br>
<span class="quotelev2">&gt;&gt; not permissible please let me know.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; errors :
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; ess_slurm_module.c:63: error: ?orte_ess_base_app_abort? undeclared   
</span><br>
<span class="quotelev2">&gt;&gt; here (not in a
</span><br>
<span class="quotelev2">&gt;&gt; function)
</span><br>
<span class="quotelev2">&gt;&gt; ess_slurm_module.c: In function ?rte_init?:
</span><br>
<span class="quotelev2">&gt;&gt; ess_slurm_module.c:82: error: ?orte_jmap_t? undeclared (first use   
</span><br>
<span class="quotelev2">&gt;&gt; in this function)
</span><br>
<span class="quotelev2">&gt;&gt; ess_slurm_module.c:82: error: (Each undeclared identifier is   
</span><br>
<span class="quotelev2">&gt;&gt; reported only once
</span><br>
<span class="quotelev2">&gt;&gt; ess_slurm_module.c:82: error: for each function it appears in.)
</span><br>
<span class="quotelev2">&gt;&gt; ess_slurm_module.c:82: error: ?jmap? undeclared (first use in this function)
</span><br>
<span class="quotelev2">&gt;&gt; ess_slurm_module.c:126: error: expected expression before ?)? token
</span><br>
<span class="quotelev2">&gt;&gt; ess_slurm_module.c: In function ?rte_finalize?:
</span><br>
<span class="quotelev2">&gt;&gt; ess_slurm_module.c:152: error: ?orte_nid_t? undeclared (first use   
</span><br>
<span class="quotelev2">&gt;&gt; in this function)
</span><br>
<span class="quotelev2">&gt;&gt; ess_slurm_module.c:152: error: ?nids? undeclared (first use in this  
</span><br>
<span class="quotelev2">&gt;&gt;  function)
</span><br>
<span class="quotelev2">&gt;&gt; ess_slurm_module.c:153: error: ?orte_jmap_t? undeclared (first use   
</span><br>
<span class="quotelev2">&gt;&gt; in this function)
</span><br>
<span class="quotelev2">&gt;&gt; ess_slurm_module.c:153: error: ?jmaps? undeclared (first use in   
</span><br>
<span class="quotelev2">&gt;&gt; this function)
</span><br>
<span class="quotelev2">&gt;&gt; ess_slurm_module.c:170: error: expected expression before ?)? token
</span><br>
<span class="quotelev2">&gt;&gt; ess_slurm_module.c:175: error: expected expression before ?)? token
</span><br>
<span class="quotelev2">&gt;&gt; ess_slurm_module.c: In function ?proc_is_local?:
</span><br>
<span class="quotelev2">&gt;&gt; ess_slurm_module.c:192: error: ?orte_nid_t? undeclared (first use   
</span><br>
<span class="quotelev2">&gt;&gt; in this function)
</span><br>
<span class="quotelev2">&gt;&gt; ess_slurm_module.c:192: error: ?nid? undeclared (first use in this function)
</span><br>
<span class="quotelev2">&gt;&gt; ess_slurm_module.c: In function ?proc_get_hostname?:
</span><br>
<span class="quotelev2">&gt;&gt; ess_slurm_module.c:218: error: ?orte_nid_t? undeclared (first use   
</span><br>
<span class="quotelev2">&gt;&gt; in this function)
</span><br>
<span class="quotelev2">&gt;&gt; ess_slurm_module.c:218: error: ?nid? undeclared (first use in this function)
</span><br>
<span class="quotelev2">&gt;&gt; ess_slurm_module.c: In function ?proc_get_arch?:
</span><br>
<span class="quotelev2">&gt;&gt; ess_slurm_module.c:236: error: ?orte_nid_t? undeclared (first use   
</span><br>
<span class="quotelev2">&gt;&gt; in this function)
</span><br>
<span class="quotelev2">&gt;&gt; ess_slurm_module.c:236: error: ?nid? undeclared (first use in this function)
</span><br>
<span class="quotelev2">&gt;&gt; ess_slurm_module.c: In function ?update_arch?:
</span><br>
<span class="quotelev2">&gt;&gt; ess_slurm_module.c:254: error: ?orte_nid_t? undeclared (first use   
</span><br>
<span class="quotelev2">&gt;&gt; in this function)
</span><br>
<span class="quotelev2">&gt;&gt; ess_slurm_module.c:254: error: ?nid? undeclared (first use in this function)
</span><br>
<span class="quotelev2">&gt;&gt; ess_slurm_module.c: In function ?proc_get_local_rank?:
</span><br>
<span class="quotelev2">&gt;&gt; ess_slurm_module.c:274: error: ?orte_pmap_t? undeclared (first use   
</span><br>
<span class="quotelev2">&gt;&gt; in this function)
</span><br>
<span class="quotelev2">&gt;&gt; ess_slurm_module.c:274: error: ?pmap? undeclared (first use in this  
</span><br>
<span class="quotelev2">&gt;&gt;  function)
</span><br>
<span class="quotelev2">&gt;&gt; ess_slurm_module.c: In function ?proc_get_node_rank?:
</span><br>
<span class="quotelev2">&gt;&gt; ess_slurm_module.c:292: error: ?orte_pmap_t? undeclared (first use   
</span><br>
<span class="quotelev2">&gt;&gt; in this function)
</span><br>
<span class="quotelev2">&gt;&gt; ess_slurm_module.c:292: error: ?pmap? undeclared (first use in this  
</span><br>
<span class="quotelev2">&gt;&gt;  function)
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [ess_slurm_module.lo] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt; `/home/NotRoot/Documents/DES/OMPI/openmpi-1.3.2/orte/mca/ess/slurm'
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Leaving directory   
</span><br>
<span class="quotelev2">&gt;&gt; `/home/NotRoot/Documents/DES/OMPI/openmpi-1.3.2/orte'
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5996.php">Ralph Castain: "Re: [OMPI devel] Configuring openmpi-1.3.2 with &quot;--without-rte-support&quot;. FLAG."</a>
<li><strong>Previous message:</strong> <a href="5994.php">Ralph Castain: "Re: [OMPI devel] Configuring openmpi-1.3.2 with &quot;--without-rte-support&quot;. FLAG."</a>
<li><strong>In reply to:</strong> <a href="5994.php">Ralph Castain: "Re: [OMPI devel] Configuring openmpi-1.3.2 with &quot;--without-rte-support&quot;. FLAG."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5996.php">Ralph Castain: "Re: [OMPI devel] Configuring openmpi-1.3.2 with &quot;--without-rte-support&quot;. FLAG."</a>
<li><strong>Reply:</strong> <a href="5996.php">Ralph Castain: "Re: [OMPI devel] Configuring openmpi-1.3.2 with &quot;--without-rte-support&quot;. FLAG."</a>
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
