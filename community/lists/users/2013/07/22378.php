<?
$subject_val = "[OMPI users] errors testing openmpi1.6.5 ----";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 24 20:09:40 2013" -->
<!-- isoreceived="20130725000940" -->
<!-- sent="Thu, 25 Jul 2013 00:09:25 +0000" -->
<!-- isosent="20130725000925" -->
<!-- name="Yuping Sun" -->
<!-- email="ysun_at_[hidden]" -->
<!-- subject="[OMPI users] errors testing openmpi1.6.5 ----" -->
<!-- id="D26659322AE6E9448EE9F7E692F133BF0B1FBBE0_at_EXCHANGE2010.fdwt.local" -->
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
<strong>Subject:</strong> [OMPI users] errors testing openmpi1.6.5 ----<br>
<strong>From:</strong> Yuping Sun (<em>ysun_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-24 20:09:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22379.php">Gus Correa: "Re: [OMPI users] errors testing openmpi1.6.5 ----"</a>
<li><strong>Previous message:</strong> <a href="22377.php">Zhubq: "[OMPI users] Fwd: MPI error in a loop"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22379.php">Gus Correa: "Re: [OMPI users] errors testing openmpi1.6.5 ----"</a>
<li><strong>Reply:</strong> <a href="22379.php">Gus Correa: "Re: [OMPI users] errors testing openmpi1.6.5 ----"</a>
<li><strong>Reply:</strong> <a href="22380.php">Ralph Castain: "Re: [OMPI users] errors testing openmpi1.6.5 ----"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear All:
<br>
<p>I downloaded openmpi1.5.6 and installed on my linux workstation with the help of NASA engineer. Then I tried to test the openmpi installation, but get the following error message:
<br>
<p>[ysun_at_ysunrh mpi]$ which mpiexec
<br>
/usr/local/openmpi1.6.5/bin/mpiexec
<br>
[ysun_at_ysunrh mpi]$ mpiexec utils/MPIcheck/mpicheck
<br>
[ysunrh.fdwt.com:24905] mca: base: component_find: unable to open /usr/local/openmpi1.6.5/lib/openmpi/mca_paffinity_hwloc: lt_dlerror() returned NULL! (ignored)
<br>
[ysunrh.fdwt.com:24905] mca: base: component_find: unable to open /usr/local/openmpi1.6.5/lib/openmpi/mca_carto_auto_detect: lt_dlerror() returned NULL! (ignored)
<br>
[ysunrh.fdwt.com:24905] mca: base: component_find: unable to open /usr/local/openmpi1.6.5/lib/openmpi/mca_carto_file: lt_dlerror() returned NULL! (ignored)
<br>
[ysunrh.fdwt.com:24905] mca: base: component_find: unable to open /usr/local/openmpi1.6.5/lib/openmpi/mca_shmem_mmap: lt_dlerror() returned NULL! (ignored)
<br>
[ysunrh.fdwt.com:24905] mca: base: component_find: unable to open /usr/local/openmpi1.6.5/lib/openmpi/mca_shmem_posix: lt_dlerror() returned NULL! (ignored)
<br>
[ysunrh.fdwt.com:24905] mca: base: component_find: unable to open /usr/local/openmpi1.6.5/lib/openmpi/mca_shmem_sysv: lt_dlerror() returned NULL! (ignored)
<br>
--------------------------------------------------------------------------
<br>
It looks like opal_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during opal_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;opal_shmem_base_select failed
<br>
&nbsp;&nbsp;--&gt; Returned value -1 instead of OPAL_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
[ysunrh.fdwt.com:24905] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file runtime/orte_init.c at line 79
<br>
[ysunrh.fdwt.com:24905] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file orterun.c at line 694
<br>
<p><p>I also try the use ompi_info to get more information, and it give me a lot error messages and I listed some below:
<br>
<p>[ysunrh.fdwt.com:24920] mca: base: component_find: unable to open /usr/local/openmpi1.6.5/lib/openmpi/mca_osc_pt2pt: lt_dlerror() returned NULL! (ignored)
<br>
[ysunrh.fdwt.com:24920] mca: base: component_find: unable to open /usr/local/openmpi1.6.5/lib/openmpi/mca_osc_rdma: lt_dlerror() returned NULL! (ignored)
<br>
[ysunrh.fdwt.com:24920] mca: base: component_find: unable to open /usr/local/openmpi1.6.5/lib/openmpi/mca_btl_self: lt_dlerror() returned NULL! (ignored)
<br>
[ysunrh.fdwt.com:24920] mca: base: component_find: unable to open /usr/local/openmpi1.6.5/lib/openmpi/mca_btl_sm: lt_dlerror() returned NULL! (ignored)
<br>
[ysunrh.fdwt.com:24920] mca: base: component_find: unable to open /usr/local/openmpi1.6.5/lib/openmpi/mca_btl_tcp: lt_dlerror() returned NULL! (ignored)
<br>
[ysunrh.fdwt.com:24920] mca: base: component_find: unable to open /usr/local/openmpi1.6.5/lib/openmpi/mca_topo_unity: lt_dlerror() returned NULL! (ignored)
<br>
[ysunrh.fdwt.com:24920] mca: base: component_find: unable to open /usr/local/openmpi1.6.5/lib/openmpi/mca_pubsub_orte: lt_dlerror() returned NULL! (ignored)
<br>
[ysunrh.fdwt.com:24920] mca: base: component_find: unable to open /usr/local/openmpi1.6.5/lib/openmpi/mca_dpm_orte: lt_dlerror() returned NULL! (ignored)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA backtrace: execinfo (MCA v2.0, API v2.0, Component v1.6.5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA memory: linux (MCA v2.0, API v2.0, Component v1.6.5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA timer: linux (MCA v2.0, API v2.0, Component v1.6.5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA installdirs: env (MCA v2.0, API v2.0, Component v1.6.5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA installdirs: config (MCA v2.0, API v2.0, Component v1.6.5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA hwloc: hwloc132 (MCA v2.0, API v2.0, Component v1.6.5)
<br>
<p><p>Could anyone of you give me some help, and tell me what I need to do to install openmpi correctly or give me some instructions to make it working? Thank you.
<br>
<p><p>Yuping Sun
<br>
<p>FloDesign Wind Turbine Corp
<br>
242 Sturbridge Road
<br>
Charlton, MA  01507
<br>
Direct: 508-434-1507
<br>
Cell: 713-456-9420
<br>
ysun_at_[hidden]&lt;mailto:ysun_at_[hidden]&gt;
<br>
[Description: cid:3300779197_294562]
<br>
<p><p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22378/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-22378/image001.jpg" alt="image001.jpg
">
<!-- attachment="image001.jpg" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22379.php">Gus Correa: "Re: [OMPI users] errors testing openmpi1.6.5 ----"</a>
<li><strong>Previous message:</strong> <a href="22377.php">Zhubq: "[OMPI users] Fwd: MPI error in a loop"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22379.php">Gus Correa: "Re: [OMPI users] errors testing openmpi1.6.5 ----"</a>
<li><strong>Reply:</strong> <a href="22379.php">Gus Correa: "Re: [OMPI users] errors testing openmpi1.6.5 ----"</a>
<li><strong>Reply:</strong> <a href="22380.php">Ralph Castain: "Re: [OMPI users] errors testing openmpi1.6.5 ----"</a>
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
