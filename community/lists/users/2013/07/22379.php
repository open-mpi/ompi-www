<?
$subject_val = "Re: [OMPI users] errors testing openmpi1.6.5 ----";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 24 20:27:57 2013" -->
<!-- isoreceived="20130725002757" -->
<!-- sent="Wed, 24 Jul 2013 20:27:42 -0400" -->
<!-- isosent="20130725002742" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] errors testing openmpi1.6.5 ----" -->
<!-- id="51F070FE.3030701_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D26659322AE6E9448EE9F7E692F133BF0B1FBBE0_at_EXCHANGE2010.fdwt.local" -->
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
<strong>Subject:</strong> Re: [OMPI users] errors testing openmpi1.6.5 ----<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-24 20:27:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22380.php">Ralph Castain: "Re: [OMPI users] errors testing openmpi1.6.5 ----"</a>
<li><strong>Previous message:</strong> <a href="22378.php">Yuping Sun: "[OMPI users] errors testing openmpi1.6.5 ----"</a>
<li><strong>In reply to:</strong> <a href="22378.php">Yuping Sun: "[OMPI users] errors testing openmpi1.6.5 ----"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22386.php">Yuping Sun: "Re: [OMPI users] errors testing openmpi1.6.5 ----"</a>
<li><strong>Reply:</strong> <a href="22386.php">Yuping Sun: "Re: [OMPI users] errors testing openmpi1.6.5 ----"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Yuping
<br>
<p>Did you set your PATH and LD_LIBRARY_PATH?
<br>
Please, see these FAQ:
<br>
<a href="http://www.open-mpi.org/faq/?category=running#run-prereqs">http://www.open-mpi.org/faq/?category=running#run-prereqs</a>
<br>
<a href="http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path">http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path</a>
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
<p>On 07/24/2013 08:09 PM, Yuping Sun wrote:
<br>
<span class="quotelev1">&gt; Dear All:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I downloaded openmpi1.5.6 and installed on my linux workstation with the
</span><br>
<span class="quotelev1">&gt; help of NASA engineer. Then I tried to test the openmpi installation,
</span><br>
<span class="quotelev1">&gt; but get the following error message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [ysun_at_ysunrh mpi]$ which mpiexec
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi1.6.5/bin/mpiexec
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [ysun_at_ysunrh mpi]$ mpiexec utils/MPIcheck/mpicheck
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [ysunrh.fdwt.com:24905] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi1.6.5/lib/openmpi/mca_paffinity_hwloc: lt_dlerror()
</span><br>
<span class="quotelev1">&gt; returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [ysunrh.fdwt.com:24905] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi1.6.5/lib/openmpi/mca_carto_auto_detect: lt_dlerror()
</span><br>
<span class="quotelev1">&gt; returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [ysunrh.fdwt.com:24905] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi1.6.5/lib/openmpi/mca_carto_file: lt_dlerror()
</span><br>
<span class="quotelev1">&gt; returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [ysunrh.fdwt.com:24905] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi1.6.5/lib/openmpi/mca_shmem_mmap: lt_dlerror()
</span><br>
<span class="quotelev1">&gt; returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [ysunrh.fdwt.com:24905] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi1.6.5/lib/openmpi/mca_shmem_posix: lt_dlerror()
</span><br>
<span class="quotelev1">&gt; returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [ysunrh.fdwt.com:24905] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi1.6.5/lib/openmpi/mca_shmem_sysv: lt_dlerror()
</span><br>
<span class="quotelev1">&gt; returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It looks like opal_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; likely to abort. There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; fail during opal_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; environment problems. This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; opal_shmem_base_select failed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --&gt; Returned value -1 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [ysunrh.fdwt.com:24905] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in
</span><br>
<span class="quotelev1">&gt; file runtime/orte_init.c at line 79
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [ysunrh.fdwt.com:24905] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in
</span><br>
<span class="quotelev1">&gt; file orterun.c at line 694
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I also try the use ompi_info to get more information, and it give me a
</span><br>
<span class="quotelev1">&gt; lot error messages and I listed some below:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [ysunrh.fdwt.com:24920] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi1.6.5/lib/openmpi/mca_osc_pt2pt: lt_dlerror() returned
</span><br>
<span class="quotelev1">&gt; NULL! (ignored)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [ysunrh.fdwt.com:24920] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi1.6.5/lib/openmpi/mca_osc_rdma: lt_dlerror() returned
</span><br>
<span class="quotelev1">&gt; NULL! (ignored)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [ysunrh.fdwt.com:24920] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi1.6.5/lib/openmpi/mca_btl_self: lt_dlerror() returned
</span><br>
<span class="quotelev1">&gt; NULL! (ignored)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [ysunrh.fdwt.com:24920] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi1.6.5/lib/openmpi/mca_btl_sm: lt_dlerror() returned
</span><br>
<span class="quotelev1">&gt; NULL! (ignored)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [ysunrh.fdwt.com:24920] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi1.6.5/lib/openmpi/mca_btl_tcp: lt_dlerror() returned
</span><br>
<span class="quotelev1">&gt; NULL! (ignored)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [ysunrh.fdwt.com:24920] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi1.6.5/lib/openmpi/mca_topo_unity: lt_dlerror()
</span><br>
<span class="quotelev1">&gt; returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [ysunrh.fdwt.com:24920] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi1.6.5/lib/openmpi/mca_pubsub_orte: lt_dlerror()
</span><br>
<span class="quotelev1">&gt; returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [ysunrh.fdwt.com:24920] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi1.6.5/lib/openmpi/mca_dpm_orte: lt_dlerror() returned
</span><br>
<span class="quotelev1">&gt; NULL! (ignored)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MCA backtrace: execinfo (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MCA memory: linux (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MCA timer: linux (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MCA installdirs: env (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MCA installdirs: config (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MCA hwloc: hwloc132 (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could anyone of you give me some help, and tell me what I need to do to
</span><br>
<span class="quotelev1">&gt; install openmpi correctly or give me some instructions to make it
</span><br>
<span class="quotelev1">&gt; working? Thank you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; */Yuping Sun/*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FloDesign Wind Turbine Corp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 242 Sturbridge Road
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Charlton, MA 01507
</span><br>
<span class="quotelev1">&gt; Direct: 508-434-1507
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cell: 713-456-9420
</span><br>
<span class="quotelev1">&gt; ysun_at_[hidden] &lt;mailto:ysun_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Description: cid:3300779197_294562
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22380.php">Ralph Castain: "Re: [OMPI users] errors testing openmpi1.6.5 ----"</a>
<li><strong>Previous message:</strong> <a href="22378.php">Yuping Sun: "[OMPI users] errors testing openmpi1.6.5 ----"</a>
<li><strong>In reply to:</strong> <a href="22378.php">Yuping Sun: "[OMPI users] errors testing openmpi1.6.5 ----"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22386.php">Yuping Sun: "Re: [OMPI users] errors testing openmpi1.6.5 ----"</a>
<li><strong>Reply:</strong> <a href="22386.php">Yuping Sun: "Re: [OMPI users] errors testing openmpi1.6.5 ----"</a>
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
