<?
$subject_val = "[OMPI devel] Trunk is broken";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  1 20:55:13 2013" -->
<!-- isoreceived="20131002005513" -->
<!-- sent="Wed, 2 Oct 2013 00:55:09 +0000" -->
<!-- isosent="20131002005509" -->
<!-- name="Joshua Ladd" -->
<!-- email="joshual_at_[hidden]" -->
<!-- subject="[OMPI devel] Trunk is broken" -->
<!-- id="8EDEBDDE2C39D447A738659597BBB63A2DE45348_at_MTIDAG01.mtl.com" -->
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
<strong>Subject:</strong> [OMPI devel] Trunk is broken<br>
<strong>From:</strong> Joshua Ladd (<em>joshual_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-01 20:55:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13037.php">Ralph Castain: "Re: [OMPI devel] Trunk is broken"</a>
<li><strong>Previous message:</strong> <a href="13035.php">Joshua Ladd: "Re: [OMPI devel] 1.7.3rc2 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13037.php">Ralph Castain: "Re: [OMPI devel] Trunk is broken"</a>
<li><strong>Reply:</strong> <a href="13037.php">Ralph Castain: "Re: [OMPI devel] Trunk is broken"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Also getting a compile failure in the trunk:
<br>
<p>./autogen.pl &amp;&amp; ./configure --prefix=/hpc/home/USERS/joshual/ompi_trunk/really-the-trunk/ompi-install  --with-mxm=/hpc/local/src/mxm2_release --with-fca=/opt/mellanox/fca --with-pmi &amp;&amp; make -j 9 &amp;&amp; make install
<br>
<p>&nbsp;&nbsp;CC       ess_slurm_module.lo
<br>
&nbsp;&nbsp;CCLD     mca_ess_slurm.la
<br>
make[2]: Leaving directory `/hpc/home/USERS/joshual/ompi_trunk/really-shmem-trunk/orte/mca/ess/slurm'
<br>
Making all in mca/ess/pmi
<br>
make[2]: Entering directory `/hpc/home/USERS/joshual/ompi_trunk/really-shmem-trunk/orte/mca/ess/pmi'
<br>
&nbsp;&nbsp;CC       ess_pmi_component.lo
<br>
&nbsp;&nbsp;CC       ess_pmi_module.lo
<br>
ess_pmi_module.c: In function 'rte_init':
<br>
ess_pmi_module.c:285: warning: comparison between signed and unsigned integer expressions
<br>
ess_pmi_module.c:321: error: 'procs' undeclared (first use in this function)
<br>
ess_pmi_module.c:321: error: (Each undeclared identifier is reported only once
<br>
ess_pmi_module.c:321: error: for each function it appears in.)
<br>
make[2]: *** [ess_pmi_module.lo] Error 1
<br>
make[2]: Leaving directory `/hpc/home/USERS/joshual/ompi_trunk/really-shmem-trunk/orte/mca/ess/pmi'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/hpc/home/USERS/joshual/ompi_trunk/really-shmem-trunk/orte'
<br>
make: *** [all-recursive] Error 1
<br>
<p>Joshua S. Ladd, PhD
<br>
HPC Algorithms Engineer
<br>
Mellanox Technologies
<br>
<p>Email: joshual_at_[hidden]&lt;mailto:joshual_at_[hidden]&gt;
<br>
Cell: +1 (865) 258 - 8898
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13036/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13037.php">Ralph Castain: "Re: [OMPI devel] Trunk is broken"</a>
<li><strong>Previous message:</strong> <a href="13035.php">Joshua Ladd: "Re: [OMPI devel] 1.7.3rc2 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13037.php">Ralph Castain: "Re: [OMPI devel] Trunk is broken"</a>
<li><strong>Reply:</strong> <a href="13037.php">Ralph Castain: "Re: [OMPI devel] Trunk is broken"</a>
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
