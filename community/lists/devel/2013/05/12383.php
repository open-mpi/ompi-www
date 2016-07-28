<?
$subject_val = "[OMPI devel] Build warnings in trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 14 17:30:23 2013" -->
<!-- isoreceived="20130514213023" -->
<!-- sent="Tue, 14 May 2013 14:30:17 -0700" -->
<!-- isosent="20130514213017" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="[OMPI devel] Build warnings in trunk" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F35E981D4160_at_HQMAIL02.nvidia.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] Build warnings in trunk<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-14 17:30:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12384.php">Nathan Hjelm: "Re: [OMPI devel] Build warnings in trunk"</a>
<li><strong>Previous message:</strong> <a href="12382.php">Jeff Squyres (jsquyres): "[OMPI devel] Openib + common/verbs CPC consolidation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12384.php">Nathan Hjelm: "Re: [OMPI devel] Build warnings in trunk"</a>
<li><strong>Reply:</strong> <a href="12384.php">Nathan Hjelm: "Re: [OMPI devel] Build warnings in trunk"</a>
<li><strong>Reply:</strong> <a href="12385.php">Ralph Castain: "Re: [OMPI devel] Build warnings in trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have noticed several warnings while building the trunk.   Feel free to fix anything that you are familiar with.  
<br>
<p>CC     sys_limits.lo
<br>
../../../opal/util/sys_limits.c: In function 'opal_util_init_sys_limits':
<br>
../../../opal/util/sys_limits.c:107:20: warning: 'lim' may be used uninitialized in this function
<br>
<p>&nbsp;&nbsp;CC     mca_base_param.lo
<br>
../../../../opal/mca/base/mca_base_param.c: In function 'register_param':
<br>
../../../../opal/mca/base/mca_base_param.c:113:25: warning: 'var_type' may be used uninitialized in this function
<br>
<p>&nbsp;&nbsp;CC     mca_base_var.lo
<br>
../../../../opal/mca/base/mca_base_var.c: In function 'var_set_from_string':
<br>
../../../../opal/mca/base/mca_base_var.c:797:14: warning: 'int_value' may be used uninitialized in this function
<br>
../../../../opal/mca/base/mca_base_var.c: In function 'mca_base_var_dump':
<br>
../../../../opal/mca/base/mca_base_var.c:2016:27: warning: 'original' may be used uninitialized in this function
<br>
../../../../opal/mca/base/mca_base_var.c:2015:30: warning: 'synonyms' may be used uninitialized in this function
<br>
../../../../opal/mca/base/mca_base_var.c:2018:17: warning: 'type_string' may be used uninitialized in this function
<br>
<p>&nbsp;&nbsp;CC     runtime/opal_info_support.lo
<br>
../../opal/runtime/opal_info_support.c: In function 'opal_info_register_project_frameworks':
<br>
../../opal/runtime/opal_info_support.c:241:12: warning: 'rc' may be used uninitialized in this function
<br>
<p>&nbsp;&nbsp;CC     base/oob_base_init.lo
<br>
../../../../orte/mca/oob/base/oob_base_init.c: In function 'mca_oob_base_init':
<br>
../../../../orte/mca/oob/base/oob_base_init.c:55:43: warning: 's_component' may be used uninitialized in this function
<br>
<p>&nbsp;&nbsp;CC     ras_slurm_module.lo
<br>
../../../../../orte/mca/ras/slurm/ras_slurm_module.c: In function 'init':
<br>
../../../../../orte/mca/ras/slurm/ras_slurm_module.c:143:11: warning: 'slurm_host' may be used uninitialized in this function
<br>
../../../../../orte/mca/ras/slurm/ras_slurm_module.c:144:14: warning: 'port' may be used uninitialized in this function
<br>
../../../../../orte/mca/ras/slurm/ras_slurm_module.c: In function 'recv_data':
<br>
../../../../../orte/mca/ras/slurm/ras_slurm_module.c:742:31: warning: 'jtrk' may be used uninitialized in this function
<br>
../../../../../orte/mca/ras/slurm/ras_slurm_module.c:740:17: warning: 'idx' may be used uninitialized in this function
<br>
../../../../../orte/mca/ras/slurm/ras_slurm_module.c:740:22: warning: 'sjob' may be used uninitialized in this function
<br>
../../../../../orte/mca/ras/slurm/ras_slurm_module.c:741:20: warning: 'nodelist' may be used uninitialized in this function
<br>
<p>&nbsp;&nbsp;CC     rmaps_lama_params.lo
<br>
../../../../../orte/mca/rmaps/lama/rmaps_lama_params.c: In function 'rmaps_lama_ok_to_prune_level':
<br>
../../../../../orte/mca/rmaps/lama/rmaps_lama_params.c:789:19: warning: comparison between 'rmaps_lama_order_type_t' and 'rmaps_lama_level_type_t'
<br>
-----------------------------------------------------------------------------------
<br>
This email message is for the sole use of the intended recipient(s) and may contain
<br>
confidential information.  Any unauthorized review, use, disclosure or distribution
<br>
is prohibited.  If you are not the intended recipient, please contact the sender by
<br>
reply email and destroy all copies of the original message.
<br>
-----------------------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12384.php">Nathan Hjelm: "Re: [OMPI devel] Build warnings in trunk"</a>
<li><strong>Previous message:</strong> <a href="12382.php">Jeff Squyres (jsquyres): "[OMPI devel] Openib + common/verbs CPC consolidation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12384.php">Nathan Hjelm: "Re: [OMPI devel] Build warnings in trunk"</a>
<li><strong>Reply:</strong> <a href="12384.php">Nathan Hjelm: "Re: [OMPI devel] Build warnings in trunk"</a>
<li><strong>Reply:</strong> <a href="12385.php">Ralph Castain: "Re: [OMPI devel] Build warnings in trunk"</a>
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
