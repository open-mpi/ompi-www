<?
$subject_val = "Re: [OMPI devel] Build warnings in trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 14 17:46:02 2013" -->
<!-- isoreceived="20130514214602" -->
<!-- sent="Tue, 14 May 2013 14:45:55 -0700" -->
<!-- isosent="20130514214555" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Build warnings in trunk" -->
<!-- id="AAF85EED-1A0D-4418-BAAD-EE851CD75F16_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3AF945EBF4D3EC41AFE44EED9B0585F35E981D4160_at_HQMAIL02.nvidia.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Build warnings in trunk<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-14 17:45:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12386.php">Ralph Castain: "Re: [OMPI devel] RFC: rewrite of ORTE OOB"</a>
<li><strong>Previous message:</strong> <a href="12384.php">Nathan Hjelm: "Re: [OMPI devel] Build warnings in trunk"</a>
<li><strong>In reply to:</strong> <a href="12383.php">Rolf vandeVaart: "[OMPI devel] Build warnings in trunk"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I can take a gander at these
<br>
<p>On May 14, 2013, at 2:30 PM, Rolf vandeVaart &lt;rvandevaart_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; CC     base/oob_base_init.lo
</span><br>
<span class="quotelev1">&gt; ../../../../orte/mca/oob/base/oob_base_init.c: In function 'mca_oob_base_init':
</span><br>
<span class="quotelev1">&gt; ../../../../orte/mca/oob/base/oob_base_init.c:55:43: warning: 's_component' may be used uninitialized in this function
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  CC     ras_slurm_module.lo
</span><br>
<span class="quotelev1">&gt; ../../../../../orte/mca/ras/slurm/ras_slurm_module.c: In function 'init':
</span><br>
<span class="quotelev1">&gt; ../../../../../orte/mca/ras/slurm/ras_slurm_module.c:143:11: warning: 'slurm_host' may be used uninitialized in this function
</span><br>
<span class="quotelev1">&gt; ../../../../../orte/mca/ras/slurm/ras_slurm_module.c:144:14: warning: 'port' may be used uninitialized in this function
</span><br>
<span class="quotelev1">&gt; ../../../../../orte/mca/ras/slurm/ras_slurm_module.c: In function 'recv_data':
</span><br>
<span class="quotelev1">&gt; ../../../../../orte/mca/ras/slurm/ras_slurm_module.c:742:31: warning: 'jtrk' may be used uninitialized in this function
</span><br>
<span class="quotelev1">&gt; ../../../../../orte/mca/ras/slurm/ras_slurm_module.c:740:17: warning: 'idx' may be used uninitialized in this function
</span><br>
<span class="quotelev1">&gt; ../../../../../orte/mca/ras/slurm/ras_slurm_module.c:740:22: warning: 'sjob' may be used uninitialized in this function
</span><br>
<span class="quotelev1">&gt; ../../../../../orte/mca/ras/slurm/ras_slurm_module.c:741:20: warning: 'nodelist' may be used uninitialized in this function
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12385/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12386.php">Ralph Castain: "Re: [OMPI devel] RFC: rewrite of ORTE OOB"</a>
<li><strong>Previous message:</strong> <a href="12384.php">Nathan Hjelm: "Re: [OMPI devel] Build warnings in trunk"</a>
<li><strong>In reply to:</strong> <a href="12383.php">Rolf vandeVaart: "[OMPI devel] Build warnings in trunk"</a>
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
