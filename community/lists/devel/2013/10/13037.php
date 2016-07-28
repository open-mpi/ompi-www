<?
$subject_val = "Re: [OMPI devel] Trunk is broken";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  1 20:56:44 2013" -->
<!-- isoreceived="20131002005644" -->
<!-- sent="Tue, 1 Oct 2013 17:56:40 -0700" -->
<!-- isosent="20131002005640" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk is broken" -->
<!-- id="90D3B0B8-69C6-4AD3-8C57-0245ECDC8AF1_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8EDEBDDE2C39D447A738659597BBB63A2DE45348_at_MTIDAG01.mtl.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Trunk is broken<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-01 20:56:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13038.php">Ralph Castain: "Re: [OMPI devel] 1.7.3rc2 is out"</a>
<li><strong>Previous message:</strong> <a href="13036.php">Joshua Ladd: "[OMPI devel] Trunk is broken"</a>
<li><strong>In reply to:</strong> <a href="13036.php">Joshua Ladd: "[OMPI devel] Trunk is broken"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
ya, i'm fixing it now
<br>
<p>On Oct 1, 2013, at 5:55 PM, Joshua Ladd &lt;joshual_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Also getting a compile failure in the trunk:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; ./autogen.pl &amp;&amp; ./configure --prefix=/hpc/home/USERS/joshual/ompi_trunk/really-the-trunk/ompi-install  --with-mxm=/hpc/local/src/mxm2_release --with-fca=/opt/mellanox/fca --with-pmi &amp;&amp; make -j 9 &amp;&amp; make install
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;   CC       ess_slurm_module.lo
</span><br>
<span class="quotelev1">&gt;   CCLD     mca_ess_slurm.la
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/hpc/home/USERS/joshual/ompi_trunk/really-shmem-trunk/orte/mca/ess/slurm'
</span><br>
<span class="quotelev1">&gt; Making all in mca/ess/pmi
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/hpc/home/USERS/joshual/ompi_trunk/really-shmem-trunk/orte/mca/ess/pmi'
</span><br>
<span class="quotelev1">&gt;   CC       ess_pmi_component.lo
</span><br>
<span class="quotelev1">&gt;   CC       ess_pmi_module.lo
</span><br>
<span class="quotelev1">&gt; ess_pmi_module.c: In function 'rte_init':
</span><br>
<span class="quotelev1">&gt; ess_pmi_module.c:285: warning: comparison between signed and unsigned integer expressions
</span><br>
<span class="quotelev1">&gt; ess_pmi_module.c:321: error: 'procs' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; ess_pmi_module.c:321: error: (Each undeclared identifier is reported only once
</span><br>
<span class="quotelev1">&gt; ess_pmi_module.c:321: error: for each function it appears in.)
</span><br>
<span class="quotelev1">&gt; make[2]: *** [ess_pmi_module.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/hpc/home/USERS/joshual/ompi_trunk/really-shmem-trunk/orte/mca/ess/pmi'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/hpc/home/USERS/joshual/ompi_trunk/really-shmem-trunk/orte'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Joshua S. Ladd, PhD
</span><br>
<span class="quotelev1">&gt; HPC Algorithms Engineer
</span><br>
<span class="quotelev1">&gt; Mellanox Technologies
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Email: joshual_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Cell: +1 (865) 258 - 8898
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13037/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13038.php">Ralph Castain: "Re: [OMPI devel] 1.7.3rc2 is out"</a>
<li><strong>Previous message:</strong> <a href="13036.php">Joshua Ladd: "[OMPI devel] Trunk is broken"</a>
<li><strong>In reply to:</strong> <a href="13036.php">Joshua Ladd: "[OMPI devel] Trunk is broken"</a>
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
