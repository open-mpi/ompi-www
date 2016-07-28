<?
$subject_val = "Re: [OMPI users] errors testing openmpi1.6.5 ----";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 25 14:34:01 2013" -->
<!-- isoreceived="20130725183401" -->
<!-- sent="Thu, 25 Jul 2013 18:33:45 +0000" -->
<!-- isosent="20130725183345" -->
<!-- name="Yuping Sun" -->
<!-- email="ysun_at_[hidden]" -->
<!-- subject="Re: [OMPI users] errors testing openmpi1.6.5 ----" -->
<!-- id="D26659322AE6E9448EE9F7E692F133BF0B1FC048_at_EXCHANGE2010.fdwt.local" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="48A69166-3ED8-49E4-90AB-0D0659C8F33A_at_open-mpi.org" -->
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
<strong>From:</strong> Yuping Sun (<em>ysun_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-25 14:33:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22386.php">Yuping Sun: "Re: [OMPI users] errors testing openmpi1.6.5 ----"</a>
<li><strong>Previous message:</strong> <a href="22384.php">Jeff Squyres (jsquyres): "Re: [OMPI users] libtool:line1128 gfortran command not found"</a>
<li><strong>In reply to:</strong> <a href="22380.php">Ralph Castain: "Re: [OMPI users] errors testing openmpi1.6.5 ----"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22403.php">Yuping Sun: "Re: [OMPI users] errors testing openmpi1.6.5 ----"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph:
<br>
<p>Here is what I got:
<br>
<p>ls /usr/local/openmpi1.6.5/lib/
<br>
libmca_common_sm.a   libmpi.a      libmpi_cxx.la  libmpi_f77.la  libmpi_f90.la  libompitrace.a   libopen-pal.a   libopen-rte.a   libopen-trace-format.a   libotfaux.a   libvt.a      libvt-hyb.la  libvt-mpi.a   libvt-mpi-unify.a   libvt-mt.a   libvt-pomp.a   mpi.mod  pkgconfig
<br>
libmca_common_sm.la  libmpi_cxx.a  libmpi_f77.a   libmpi_f90.a   libmpi.la      libompitrace.la  libopen-pal.la  libopen-rte.la  libopen-trace-format.la  libotfaux.la  libvt-hyb.a  libvt.la      libvt-mpi.la  libvt-mpi-unify.la  libvt-mt.la  libvt-pomp.la  openmpi
<br>
[root_at_ysunrh usr]#
<br>
<p>Do you think I have all the referenced libraries? If yes, then what I need to do?
<br>
I also try the following to see my libpath:
<br>
<p>[root_at_ysunrh usr]#
<br>
[root_at_ysunrh usr]# echo $LD_LIBRARY_PATH
<br>
<p>[root_at_ysunrh usr]#
<br>
<p>---so I have not set up the library path. What would you suggest me to do?
<br>
<p>However, I have /usr/local/openmpi1.6.5/bin in my PATH.
<br>
<p>By the way, I also see there is rpm package for openmpi below issuing command:
<br>
<p><span class="quotelev1">&gt;yum whatprovides openmpi
</span><br>
<p>openmpi-1.4-4.el5.i386 : Open Message Passing Interface
<br>
Repo        : rhel-x86_64-server-5
<br>
Matched from:
<br>
<p><p><p>openmpi-1.4-4.el5.x86_64 : Open Message Passing Interface
<br>
Repo        : rhel-x86_64-server-5
<br>
Matched from:
<br>
<p><p><p>openmpi-1.4-7.el5.i386 : Open Message Passing Interface
<br>
Repo        : rhel-x86_64-server-5
<br>
Matched from:
<br>
<p><p><p>openmpi-1.4-7.el5.x86_64 : Open Message Passing Interface
<br>
Repo        : rhel-x86_64-server-5
<br>
Matched from:
<br>
<p><p><p><p>would you tell me how to install openmpi using yum or rpm? And how to get a rpm package for openmpi-1.6.5.? I installed openmpi-1.6.5 using tar file downloaded from the openmpi.org website.
<br>
<p>Thank you.
<br>
<p><p><p>Thank you.
<br>
<p><p>From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
<br>
Sent: Wednesday, July 24, 2013 8:35 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] errors testing openmpi1.6.5 ----
<br>
<p>If you list the /usr/local/openmpi1.6.5/lib directory, do you see the referenced libraries?
<br>
<p><p>On Jul 24, 2013, at 5:09 PM, Yuping Sun &lt;ysun_at_[hidden]&lt;mailto:ysun_at_[hidden]&gt;&gt; wrote:
<br>
<p>Dear All:
<br>
<p>I downloaded openmpi1.5.6 and installed on my linux workstation with the help of NASA engineer. Then I tried to test the openmpi installation, but get the following error message:
<br>
<p>[ysun_at_ysunrh mpi]$ which mpiexec
<br>
/usr/local/openmpi1.6.5/bin/mpiexec
<br>
[ysun_at_ysunrh mpi]$ mpiexec utils/MPIcheck/mpicheck
<br>
[ysunrh.fdwt.com&lt;<a href="http://ysunrh.fdwt.com">http://ysunrh.fdwt.com</a>&gt;:24905] mca: base: component_find: unable to open /usr/local/openmpi1.6.5/lib/openmpi/mca_paffinity_hwloc: lt_dlerror() returned NULL! (ignored)
<br>
[ysunrh.fdwt.com&lt;<a href="http://ysunrh.fdwt.com">http://ysunrh.fdwt.com</a>&gt;:24905] mca: base: component_find: unable to open /usr/local/openmpi1.6.5/lib/openmpi/mca_carto_auto_detect: lt_dlerror() returned NULL! (ignored)
<br>
[ysunrh.fdwt.com&lt;<a href="http://ysunrh.fdwt.com">http://ysunrh.fdwt.com</a>&gt;:24905] mca: base: component_find: unable to open /usr/local/openmpi1.6.5/lib/openmpi/mca_carto_file: lt_dlerror() returned NULL! (ignored)
<br>
[ysunrh.fdwt.com&lt;<a href="http://ysunrh.fdwt.com">http://ysunrh.fdwt.com</a>&gt;:24905] mca: base: component_find: unable to open /usr/local/openmpi1.6.5/lib/openmpi/mca_shmem_mmap: lt_dlerror() returned NULL! (ignored)
<br>
[ysunrh.fdwt.com&lt;<a href="http://ysunrh.fdwt.com">http://ysunrh.fdwt.com</a>&gt;:24905] mca: base: component_find: unable to open /usr/local/openmpi1.6.5/lib/openmpi/mca_shmem_posix: lt_dlerror() returned NULL! (ignored)
<br>
[ysunrh.fdwt.com&lt;<a href="http://ysunrh.fdwt.com">http://ysunrh.fdwt.com</a>&gt;:24905] mca: base: component_find: unable to open /usr/local/openmpi1.6.5/lib/openmpi/mca_shmem_sysv: lt_dlerror() returned NULL! (ignored)
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
[ysunrh.fdwt.com&lt;<a href="http://ysunrh.fdwt.com">http://ysunrh.fdwt.com</a>&gt;:24905] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file runtime/orte_init.c at line 79
<br>
[ysunrh.fdwt.com&lt;<a href="http://ysunrh.fdwt.com">http://ysunrh.fdwt.com</a>&gt;:24905] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file orterun.c at line 694
<br>
<p><p>I also try the use ompi_info to get more information, and it give me a lot error messages and I listed some below:
<br>
<p>[ysunrh.fdwt.com&lt;<a href="http://ysunrh.fdwt.com">http://ysunrh.fdwt.com</a>&gt;:24920] mca: base: component_find: unable to open /usr/local/openmpi1.6.5/lib/openmpi/mca_osc_pt2pt: lt_dlerror() returned NULL! (ignored)
<br>
[ysunrh.fdwt.com&lt;<a href="http://ysunrh.fdwt.com">http://ysunrh.fdwt.com</a>&gt;:24920] mca: base: component_find: unable to open /usr/local/openmpi1.6.5/lib/openmpi/mca_osc_rdma: lt_dlerror() returned NULL! (ignored)
<br>
[ysunrh.fdwt.com&lt;<a href="http://ysunrh.fdwt.com">http://ysunrh.fdwt.com</a>&gt;:24920] mca: base: component_find: unable to open /usr/local/openmpi1.6.5/lib/openmpi/mca_btl_self: lt_dlerror() returned NULL! (ignored)
<br>
[ysunrh.fdwt.com&lt;<a href="http://ysunrh.fdwt.com">http://ysunrh.fdwt.com</a>&gt;:24920] mca: base: component_find: unable to open /usr/local/openmpi1.6.5/lib/openmpi/mca_btl_sm: lt_dlerror() returned NULL! (ignored)
<br>
[ysunrh.fdwt.com&lt;<a href="http://ysunrh.fdwt.com">http://ysunrh.fdwt.com</a>&gt;:24920] mca: base: component_find: unable to open /usr/local/openmpi1.6.5/lib/openmpi/mca_btl_tcp: lt_dlerror() returned NULL! (ignored)
<br>
[ysunrh.fdwt.com&lt;<a href="http://ysunrh.fdwt.com">http://ysunrh.fdwt.com</a>&gt;:24920] mca: base: component_find: unable to open /usr/local/openmpi1.6.5/lib/openmpi/mca_topo_unity: lt_dlerror() returned NULL! (ignored)
<br>
[ysunrh.fdwt.com&lt;<a href="http://ysunrh.fdwt.com">http://ysunrh.fdwt.com</a>&gt;:24920] mca: base: component_find: unable to open /usr/local/openmpi1.6.5/lib/openmpi/mca_pubsub_orte: lt_dlerror() returned NULL! (ignored)
<br>
[ysunrh.fdwt.com&lt;<a href="http://ysunrh.fdwt.com">http://ysunrh.fdwt.com</a>&gt;:24920] mca: base: component_find: unable to open /usr/local/openmpi1.6.5/lib/openmpi/mca_dpm_orte: lt_dlerror() returned NULL! (ignored)
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
&lt;image001.jpg&gt;
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22385/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22386.php">Yuping Sun: "Re: [OMPI users] errors testing openmpi1.6.5 ----"</a>
<li><strong>Previous message:</strong> <a href="22384.php">Jeff Squyres (jsquyres): "Re: [OMPI users] libtool:line1128 gfortran command not found"</a>
<li><strong>In reply to:</strong> <a href="22380.php">Ralph Castain: "Re: [OMPI users] errors testing openmpi1.6.5 ----"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22403.php">Yuping Sun: "Re: [OMPI users] errors testing openmpi1.6.5 ----"</a>
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
