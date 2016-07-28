<?
$subject_val = "Re: [OMPI users] Configuring openmpi-1.3.2 with &quot;--without-rte-support&quot;FLAG.";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 11 08:20:52 2009" -->
<!-- isoreceived="20090511122052" -->
<!-- sent="Mon, 11 May 2009 08:20:48 -0400" -->
<!-- isosent="20090511122048" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Configuring openmpi-1.3.2 with &amp;quot;--without-rte-support&amp;quot;FLAG." -->
<!-- id="3541DDB4-3D1D-4C51-B5F0-303C8C5CC53C_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20090511021213.dut83ljdccskcg4w_at_cubmail.cc.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Configuring openmpi-1.3.2 with &quot;--without-rte-support&quot;FLAG.<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-11 08:20:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9287.php">Jeff Squyres: "Re: [OMPI users] Please help me with this simple setup. i am stuck"</a>
<li><strong>Previous message:</strong> <a href="9285.php">Jeff Squyres: "Re: [OMPI users] Wrapping MPI program in a script"</a>
<li><strong>In reply to:</strong> <a href="9283.php">ms3770_at_[hidden]: "[OMPI users] Configuring openmpi-1.3.2 with &quot;--without-rte-support&quot; FLAG."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This message was cross-posted to devel and answered there.
<br>
<p>On May 11, 2009, at 2:12 AM, &lt;ms3770_at_[hidden]&gt;  
<br>
&lt;ms3770_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello All,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to build openmpi-1.3.2 with &quot;--without-rte-support&quot;. I am
</span><br>
<span class="quotelev1">&gt; getting bunch of errors. Is this support fully functioning or not?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I was trying to reduce the time OMPI takes to load on a homogenous
</span><br>
<span class="quotelev1">&gt; system by removing the Resource Discovery/Allocation/mapping stuff by
</span><br>
<span class="quotelev1">&gt; giving all these as static inputs but then I saw this FLAG and tried
</span><br>
<span class="quotelev1">&gt; to build using it.
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
<span class="quotelev1">&gt; errors :
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ess_slurm_module.c:63: error: ?orte_ess_base_app_abort? undeclared
</span><br>
<span class="quotelev1">&gt; here (not in a function)
</span><br>
<span class="quotelev1">&gt; ess_slurm_module.c: In function ?rte_init?:
</span><br>
<span class="quotelev1">&gt; ess_slurm_module.c:82: error: ?orte_jmap_t? undeclared (first use in
</span><br>
<span class="quotelev1">&gt; this function)
</span><br>
<span class="quotelev1">&gt; ess_slurm_module.c:82: error: (Each undeclared identifier is reported
</span><br>
<span class="quotelev1">&gt; only once
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
<span class="quotelev1">&gt; ess_slurm_module.c:153: error: ?orte_jmap_t? undeclared (first use in
</span><br>
<span class="quotelev1">&gt; this function)
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
<span class="quotelev1">&gt; ess_slurm_module.c:274: error: ?orte_pmap_t? undeclared (first use in
</span><br>
<span class="quotelev1">&gt; this function)
</span><br>
<span class="quotelev1">&gt; ess_slurm_module.c:274: error: ?pmap? undeclared (first use in this  
</span><br>
<span class="quotelev1">&gt; function)
</span><br>
<span class="quotelev1">&gt; ess_slurm_module.c: In function ?proc_get_node_rank?:
</span><br>
<span class="quotelev1">&gt; ess_slurm_module.c:292: error: ?orte_pmap_t? undeclared (first use in
</span><br>
<span class="quotelev1">&gt; this function)
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
<span class="quotelev1">&gt; make[1]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/home/NotRoot/Documents/DES/OMPI/openmpi-1.3.2/orte'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9287.php">Jeff Squyres: "Re: [OMPI users] Please help me with this simple setup. i am stuck"</a>
<li><strong>Previous message:</strong> <a href="9285.php">Jeff Squyres: "Re: [OMPI users] Wrapping MPI program in a script"</a>
<li><strong>In reply to:</strong> <a href="9283.php">ms3770_at_[hidden]: "[OMPI users] Configuring openmpi-1.3.2 with &quot;--without-rte-support&quot; FLAG."</a>
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
