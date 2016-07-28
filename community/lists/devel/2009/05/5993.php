<?
$subject_val = "[OMPI devel] Configuring openmpi-1.3.2 with &quot;--without-rte-support&quot;. FLAG.";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 11 02:18:05 2009" -->
<!-- isoreceived="20090511061805" -->
<!-- sent="Mon, 11 May 2009 02:18:01 -0400" -->
<!-- isosent="20090511061801" -->
<!-- name="ms3770_at_[hidden]" -->
<!-- email="ms3770_at_[hidden]" -->
<!-- subject="[OMPI devel] Configuring openmpi-1.3.2 with &amp;quot;--without-rte-support&amp;quot;. FLAG." -->
<!-- id="20090511021801.o09u27dwoowo4kww_at_cubmail.cc.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] Configuring openmpi-1.3.2 with &quot;--without-rte-support&quot;. FLAG.<br>
<strong>From:</strong> <a href="mailto:ms3770_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20Configuring%20openmpi-1.3.2%20with%20&amp;amp;quot;--without-rte-support&amp;amp;quot;.%20FLAG."><em>ms3770_at_[hidden]</em></a><br>
<strong>Date:</strong> 2009-05-11 02:18:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5994.php">Ralph Castain: "Re: [OMPI devel] Configuring openmpi-1.3.2 with &quot;--without-rte-support&quot;. FLAG."</a>
<li><strong>Previous message:</strong> <a href="5992.php">Brian Barrett: "Re: [OMPI devel] Revise paffinity method?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5994.php">Ralph Castain: "Re: [OMPI devel] Configuring openmpi-1.3.2 with &quot;--without-rte-support&quot;. FLAG."</a>
<li><strong>Reply:</strong> <a href="5994.php">Ralph Castain: "Re: [OMPI devel] Configuring openmpi-1.3.2 with &quot;--without-rte-support&quot;. FLAG."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello All,
<br>
<p>I am trying to build openmpi-1.3.2 with &quot;--without-rte-support&quot;. I am  
<br>
getting bunch of
<br>
errors. Is this support fully functioning or not?
<br>
<p>I was trying to reduce the time OMPI takes to load on a homogenous  
<br>
system by removing the
<br>
Resource Discovery/Allocation/mapping stuff by giving all these as  
<br>
static inputs but then
<br>
I saw this FLAG and tried to build using it.
<br>
<p>Can anybody with knowledge on this direct me?
<br>
<p>Thanks and Regards,
<br>
Maninder.
<br>
<p>PS : Sorry, I sent this same mail to users group also, if that is not  
<br>
permissible please let me know.
<br>
<p>errors :
<br>
-------------------------------------------------------------------------
<br>
ess_slurm_module.c:63: error: ?orte_ess_base_app_abort? undeclared  
<br>
here (not in a
<br>
function)
<br>
ess_slurm_module.c: In function ?rte_init?:
<br>
ess_slurm_module.c:82: error: ?orte_jmap_t? undeclared (first use in  
<br>
this function)
<br>
ess_slurm_module.c:82: error: (Each undeclared identifier is reported  
<br>
only once
<br>
ess_slurm_module.c:82: error: for each function it appears in.)
<br>
ess_slurm_module.c:82: error: ?jmap? undeclared (first use in this function)
<br>
ess_slurm_module.c:126: error: expected expression before ?)? token
<br>
ess_slurm_module.c: In function ?rte_finalize?:
<br>
ess_slurm_module.c:152: error: ?orte_nid_t? undeclared (first use in  
<br>
this function)
<br>
ess_slurm_module.c:152: error: ?nids? undeclared (first use in this function)
<br>
ess_slurm_module.c:153: error: ?orte_jmap_t? undeclared (first use in  
<br>
this function)
<br>
ess_slurm_module.c:153: error: ?jmaps? undeclared (first use in this function)
<br>
ess_slurm_module.c:170: error: expected expression before ?)? token
<br>
ess_slurm_module.c:175: error: expected expression before ?)? token
<br>
ess_slurm_module.c: In function ?proc_is_local?:
<br>
ess_slurm_module.c:192: error: ?orte_nid_t? undeclared (first use in  
<br>
this function)
<br>
ess_slurm_module.c:192: error: ?nid? undeclared (first use in this function)
<br>
ess_slurm_module.c: In function ?proc_get_hostname?:
<br>
ess_slurm_module.c:218: error: ?orte_nid_t? undeclared (first use in  
<br>
this function)
<br>
ess_slurm_module.c:218: error: ?nid? undeclared (first use in this function)
<br>
ess_slurm_module.c: In function ?proc_get_arch?:
<br>
ess_slurm_module.c:236: error: ?orte_nid_t? undeclared (first use in  
<br>
this function)
<br>
ess_slurm_module.c:236: error: ?nid? undeclared (first use in this function)
<br>
ess_slurm_module.c: In function ?update_arch?:
<br>
ess_slurm_module.c:254: error: ?orte_nid_t? undeclared (first use in  
<br>
this function)
<br>
ess_slurm_module.c:254: error: ?nid? undeclared (first use in this function)
<br>
ess_slurm_module.c: In function ?proc_get_local_rank?:
<br>
ess_slurm_module.c:274: error: ?orte_pmap_t? undeclared (first use in  
<br>
this function)
<br>
ess_slurm_module.c:274: error: ?pmap? undeclared (first use in this function)
<br>
ess_slurm_module.c: In function ?proc_get_node_rank?:
<br>
ess_slurm_module.c:292: error: ?orte_pmap_t? undeclared (first use in  
<br>
this function)
<br>
ess_slurm_module.c:292: error: ?pmap? undeclared (first use in this function)
<br>
make[2]: *** [ess_slurm_module.lo] Error 1
<br>
make[2]: Leaving directory
<br>
`/home/NotRoot/Documents/DES/OMPI/openmpi-1.3.2/orte/mca/ess/slurm'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory  
<br>
`/home/NotRoot/Documents/DES/OMPI/openmpi-1.3.2/orte'
<br>
make: *** [all-recursive] Error 1
<br>
-------------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5994.php">Ralph Castain: "Re: [OMPI devel] Configuring openmpi-1.3.2 with &quot;--without-rte-support&quot;. FLAG."</a>
<li><strong>Previous message:</strong> <a href="5992.php">Brian Barrett: "Re: [OMPI devel] Revise paffinity method?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5994.php">Ralph Castain: "Re: [OMPI devel] Configuring openmpi-1.3.2 with &quot;--without-rte-support&quot;. FLAG."</a>
<li><strong>Reply:</strong> <a href="5994.php">Ralph Castain: "Re: [OMPI devel] Configuring openmpi-1.3.2 with &quot;--without-rte-support&quot;. FLAG."</a>
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
