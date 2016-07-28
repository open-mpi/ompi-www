<?
$subject_val = "Re: [OMPI users] [OMPI devel] Configuring openmpi-1.3.2 with &quot;--without-rte-support&quot;. FLAG.";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 11 07:43:39 2009" -->
<!-- isoreceived="20090511114339" -->
<!-- sent="Mon, 11 May 2009 05:43:24 -0600" -->
<!-- isosent="20090511114324" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [OMPI devel] Configuring openmpi-1.3.2 with &amp;quot;--without-rte-support&amp;quot;. FLAG." -->
<!-- id="BF490BC8-A4BA-459A-874B-320D4AA1C140_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20090511021801.o09u27dwoowo4kww_at_cubmail.cc.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] [OMPI devel] Configuring openmpi-1.3.2 with &quot;--without-rte-support&quot;. FLAG.<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-11 07:43:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9285.php">Jeff Squyres: "Re: [OMPI users] Wrapping MPI program in a script"</a>
<li><strong>Previous message:</strong> <a href="9283.php">ms3770_at_[hidden]: "[OMPI users] Configuring openmpi-1.3.2 with &quot;--without-rte-support&quot; FLAG."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That configure option does work, but you appear to be on a system that  
<br>
has SLURM installed - yes? Are you planning on running with SLURM?
<br>
<p>Building --without-rte-support will remove a lot more than just the  
<br>
allocator and mapper. You have to be on a system like a Cray that has  
<br>
its own launch, mapping, and MPI wireup support. Unfortunately, 	SLURM  
<br>
doesn't meet all those requirements.
<br>
<p>If you are trying to improve startup time, then you are probably  
<br>
chasing the wrong areas. The allocation and mapping functions are only  
<br>
loaded by mpirun, not any application process or daemon, and those  
<br>
functions typically take only milliseconds to execute.
<br>
<p>What problem are you trying to solve? We have a lot of capability for  
<br>
improved launch times built into 1.3.2, and even more in the OMPI  
<br>
development trunk that will be in future releases. Depending upon the  
<br>
precise problem you are trying to resolve, we can perhaps point you to  
<br>
a better solution.
<br>
<p>Ralph
<br>
<p>On May 11, 2009, at 12:18 AM, ms3770_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Hello All,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to build openmpi-1.3.2 with &quot;--without-rte-support&quot;. I  
</span><br>
<span class="quotelev1">&gt; am getting bunch of
</span><br>
<span class="quotelev1">&gt; errors. Is this support fully functioning or not?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I was trying to reduce the time OMPI takes to load on a homogenous  
</span><br>
<span class="quotelev1">&gt; system by removing the
</span><br>
<span class="quotelev1">&gt; Resource Discovery/Allocation/mapping stuff by giving all these as  
</span><br>
<span class="quotelev1">&gt; static inputs but then
</span><br>
<span class="quotelev1">&gt; I saw this FLAG and tried to build using it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can anybody with knowledge on this direct me?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks and Regards,
</span><br>
<span class="quotelev1">&gt; Maninder.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PS : Sorry, I sent this same mail to users group also, if that is  
</span><br>
<span class="quotelev1">&gt; not permissible please let me know.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; errors :
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ess_slurm_module.c:63: error: ?orte_ess_base_app_abort? undeclared  
</span><br>
<span class="quotelev1">&gt; here (not in a
</span><br>
<span class="quotelev1">&gt; function)
</span><br>
<span class="quotelev1">&gt; ess_slurm_module.c: In function ?rte_init?:
</span><br>
<span class="quotelev1">&gt; ess_slurm_module.c:82: error: ?orte_jmap_t? undeclared (first use in  
</span><br>
<span class="quotelev1">&gt; this function)
</span><br>
<span class="quotelev1">&gt; ess_slurm_module.c:82: error: (Each undeclared identifier is  
</span><br>
<span class="quotelev1">&gt; reported only once
</span><br>
<span class="quotelev1">&gt; ess_slurm_module.c:82: error: for each function it appears in.)
</span><br>
<span class="quotelev1">&gt; ess_slurm_module.c:82: error: ?jmap? undeclared (first use in this  
</span><br>
<span class="quotelev1">&gt; function)
</span><br>
<span class="quotelev1">&gt; ess_slurm_module.c:126: error: expected expression before ?)? token
</span><br>
<span class="quotelev1">&gt; ess_slurm_module.c: In function ?rte_finalize?:
</span><br>
<span class="quotelev1">&gt; ess_slurm_module.c:152: error: ?orte_nid_t? undeclared (first use in  
</span><br>
<span class="quotelev1">&gt; this function)
</span><br>
<span class="quotelev1">&gt; ess_slurm_module.c:152: error: ?nids? undeclared (first use in this  
</span><br>
<span class="quotelev1">&gt; function)
</span><br>
<span class="quotelev1">&gt; ess_slurm_module.c:153: error: ?orte_jmap_t? undeclared (first use  
</span><br>
<span class="quotelev1">&gt; in this function)
</span><br>
<span class="quotelev1">&gt; ess_slurm_module.c:153: error: ?jmaps? undeclared (first use in this  
</span><br>
<span class="quotelev1">&gt; function)
</span><br>
<span class="quotelev1">&gt; ess_slurm_module.c:170: error: expected expression before ?)? token
</span><br>
<span class="quotelev1">&gt; ess_slurm_module.c:175: error: expected expression before ?)? token
</span><br>
<span class="quotelev1">&gt; ess_slurm_module.c: In function ?proc_is_local?:
</span><br>
<span class="quotelev1">&gt; ess_slurm_module.c:192: error: ?orte_nid_t? undeclared (first use in  
</span><br>
<span class="quotelev1">&gt; this function)
</span><br>
<span class="quotelev1">&gt; ess_slurm_module.c:192: error: ?nid? undeclared (first use in this  
</span><br>
<span class="quotelev1">&gt; function)
</span><br>
<span class="quotelev1">&gt; ess_slurm_module.c: In function ?proc_get_hostname?:
</span><br>
<span class="quotelev1">&gt; ess_slurm_module.c:218: error: ?orte_nid_t? undeclared (first use in  
</span><br>
<span class="quotelev1">&gt; this function)
</span><br>
<span class="quotelev1">&gt; ess_slurm_module.c:218: error: ?nid? undeclared (first use in this  
</span><br>
<span class="quotelev1">&gt; function)
</span><br>
<span class="quotelev1">&gt; ess_slurm_module.c: In function ?proc_get_arch?:
</span><br>
<span class="quotelev1">&gt; ess_slurm_module.c:236: error: ?orte_nid_t? undeclared (first use in  
</span><br>
<span class="quotelev1">&gt; this function)
</span><br>
<span class="quotelev1">&gt; ess_slurm_module.c:236: error: ?nid? undeclared (first use in this  
</span><br>
<span class="quotelev1">&gt; function)
</span><br>
<span class="quotelev1">&gt; ess_slurm_module.c: In function ?update_arch?:
</span><br>
<span class="quotelev1">&gt; ess_slurm_module.c:254: error: ?orte_nid_t? undeclared (first use in  
</span><br>
<span class="quotelev1">&gt; this function)
</span><br>
<span class="quotelev1">&gt; ess_slurm_module.c:254: error: ?nid? undeclared (first use in this  
</span><br>
<span class="quotelev1">&gt; function)
</span><br>
<span class="quotelev1">&gt; ess_slurm_module.c: In function ?proc_get_local_rank?:
</span><br>
<span class="quotelev1">&gt; ess_slurm_module.c:274: error: ?orte_pmap_t? undeclared (first use  
</span><br>
<span class="quotelev1">&gt; in this function)
</span><br>
<span class="quotelev1">&gt; ess_slurm_module.c:274: error: ?pmap? undeclared (first use in this  
</span><br>
<span class="quotelev1">&gt; function)
</span><br>
<span class="quotelev1">&gt; ess_slurm_module.c: In function ?proc_get_node_rank?:
</span><br>
<span class="quotelev1">&gt; ess_slurm_module.c:292: error: ?orte_pmap_t? undeclared (first use  
</span><br>
<span class="quotelev1">&gt; in this function)
</span><br>
<span class="quotelev1">&gt; ess_slurm_module.c:292: error: ?pmap? undeclared (first use in this  
</span><br>
<span class="quotelev1">&gt; function)
</span><br>
<span class="quotelev1">&gt; make[2]: *** [ess_slurm_module.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/home/NotRoot/Documents/DES/OMPI/openmpi-1.3.2/orte/mca/ess/slurm'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/NotRoot/Documents/DES/OMPI/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.3.2/orte'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="9285.php">Jeff Squyres: "Re: [OMPI users] Wrapping MPI program in a script"</a>
<li><strong>Previous message:</strong> <a href="9283.php">ms3770_at_[hidden]: "[OMPI users] Configuring openmpi-1.3.2 with &quot;--without-rte-support&quot; FLAG."</a>
<!-- nextthread="start" -->
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
