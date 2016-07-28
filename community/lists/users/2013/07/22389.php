<?
$subject_val = "Re: [OMPI users] errors testing openmpi1.6.5 ----";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 25 17:59:07 2013" -->
<!-- isoreceived="20130725215907" -->
<!-- sent="Thu, 25 Jul 2013 21:58:52 +0000" -->
<!-- isosent="20130725215852" -->
<!-- name="Yuping Sun" -->
<!-- email="ysun_at_[hidden]" -->
<!-- subject="Re: [OMPI users] errors testing openmpi1.6.5 ----" -->
<!-- id="D26659322AE6E9448EE9F7E692F133BF0B1FC1BE_at_EXCHANGE2010.fdwt.local" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="51F18F9B.2050107_at_ldeo.columbia.edu" -->
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
<strong>Date:</strong> 2013-07-25 17:58:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22390.php">Gus Correa: "Re: [OMPI users] errors testing openmpi1.6.5 ----"</a>
<li><strong>Previous message:</strong> <a href="22388.php">Gus Correa: "Re: [OMPI users] errors testing openmpi1.6.5 ----"</a>
<li><strong>In reply to:</strong> <a href="22388.php">Gus Correa: "Re: [OMPI users] errors testing openmpi1.6.5 ----"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22390.php">Gus Correa: "Re: [OMPI users] errors testing openmpi1.6.5 ----"</a>
<li><strong>Reply:</strong> <a href="22390.php">Gus Correa: "Re: [OMPI users] errors testing openmpi1.6.5 ----"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gus:
<br>
<p>Thank you. I did these as I use .bash_profile to add the path and LD, but it did not help. Thank you.
<br>
Is there anything else you can think of?
<br>
<p>Best regards,
<br>
<p>Yuping
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Gus Correa
<br>
Sent: Thursday, July 25, 2013 4:51 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] errors testing openmpi1.6.5 ----
<br>
<p>Hi Yuping
<br>
<p>A simple way to do it is to put in your initialization files, which are hidden (&quot;dot files&quot;) in your home directory.
<br>
<p>It depends on the shell you use (do 'echo $SHELL' to see).
<br>
<p>If bash,
<br>
.bashrc
<br>
<p>export PATH=/usr/local/openmpi1.6.5/bin:${PATH}
<br>
export LD_LIBRARY_PATH=/usr/local/openmpi1.6.5/lib:${LD_LIBRARY_PATH}
<br>
<p>If csh/tcsh
<br>
.cshrc/.tcshrc
<br>
<p>setenv PATH  /usr/local/openmpi1.6.5/bin:${PATH}
<br>
setenv LD_LIBRARY_PATH  /usr/local/openmpi1.6.5/lib:${LD_LIBRARY_PATH}
<br>
<p>Are you running the programs in a single machine, or is it a cluster or some farm or networked machines?
<br>
In the second case, you need to make sure your home directory is shared across the machines, or if it is not shared, you need to make the modifications above in each machine.
<br>
<p>I hope this helps.
<br>
<p>Gus Correa
<br>
<p>On 07/25/2013 03:11 PM, Yuping Sun wrote:
<br>
<span class="quotelev1">&gt; Hi Gus:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I went back and set the PATH and LD_LIBRARY_PATH following the FAQ answer. However, it did not change anything.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What else can you suggest?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yuping
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] 
</span><br>
<span class="quotelev1">&gt; On Behalf Of Gus Correa
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, July 24, 2013 8:28 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] errors testing openmpi1.6.5 ----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Yuping
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Did you set your PATH and LD_LIBRARY_PATH?
</span><br>
<span class="quotelev1">&gt; Please, see these FAQ:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=running#run-prereqs">http://www.open-mpi.org/faq/?category=running#run-prereqs</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path">http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope this helps,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 07/24/2013 08:09 PM, Yuping Sun wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Dear All:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I downloaded openmpi1.5.6 and installed on my linux workstation with 
</span><br>
<span class="quotelev2">&gt;&gt; the help of NASA engineer. Then I tried to test the openmpi 
</span><br>
<span class="quotelev2">&gt;&gt; installation, but get the following error message:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [ysun_at_ysunrh mpi]$ which mpiexec
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi1.6.5/bin/mpiexec
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [ysun_at_ysunrh mpi]$ mpiexec utils/MPIcheck/mpicheck
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [ysunrh.fdwt.com:24905] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi1.6.5/lib/openmpi/mca_paffinity_hwloc: lt_dlerror() 
</span><br>
<span class="quotelev2">&gt;&gt; returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [ysunrh.fdwt.com:24905] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi1.6.5/lib/openmpi/mca_carto_auto_detect:
</span><br>
<span class="quotelev2">&gt;&gt; lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [ysunrh.fdwt.com:24905] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi1.6.5/lib/openmpi/mca_carto_file: lt_dlerror() 
</span><br>
<span class="quotelev2">&gt;&gt; returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [ysunrh.fdwt.com:24905] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi1.6.5/lib/openmpi/mca_shmem_mmap: lt_dlerror() 
</span><br>
<span class="quotelev2">&gt;&gt; returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [ysunrh.fdwt.com:24905] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi1.6.5/lib/openmpi/mca_shmem_posix: lt_dlerror() 
</span><br>
<span class="quotelev2">&gt;&gt; returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [ysunrh.fdwt.com:24905] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi1.6.5/lib/openmpi/mca_shmem_sysv: lt_dlerror() 
</span><br>
<span class="quotelev2">&gt;&gt; returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; ----
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It looks like opal_init failed for some reason; your parallel process 
</span><br>
<span class="quotelev2">&gt;&gt; is
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; likely to abort. There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; fail during opal_init; some of which are due to configuration or
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; environment problems. This failure appears to be an internal failure;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; opal_shmem_base_select failed
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --&gt;  Returned value -1 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; ----
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [ysunrh.fdwt.com:24905] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in 
</span><br>
<span class="quotelev2">&gt;&gt; file runtime/orte_init.c at line 79
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [ysunrh.fdwt.com:24905] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in 
</span><br>
<span class="quotelev2">&gt;&gt; file orterun.c at line 694
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I also try the use ompi_info to get more information, and it give me 
</span><br>
<span class="quotelev2">&gt;&gt; a lot error messages and I listed some below:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [ysunrh.fdwt.com:24920] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi1.6.5/lib/openmpi/mca_osc_pt2pt: lt_dlerror() 
</span><br>
<span class="quotelev2">&gt;&gt; returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [ysunrh.fdwt.com:24920] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi1.6.5/lib/openmpi/mca_osc_rdma: lt_dlerror() 
</span><br>
<span class="quotelev2">&gt;&gt; returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [ysunrh.fdwt.com:24920] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi1.6.5/lib/openmpi/mca_btl_self: lt_dlerror() 
</span><br>
<span class="quotelev2">&gt;&gt; returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [ysunrh.fdwt.com:24920] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi1.6.5/lib/openmpi/mca_btl_sm: lt_dlerror() returned 
</span><br>
<span class="quotelev2">&gt;&gt; NULL! (ignored)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [ysunrh.fdwt.com:24920] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi1.6.5/lib/openmpi/mca_btl_tcp: lt_dlerror() 
</span><br>
<span class="quotelev2">&gt;&gt; returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [ysunrh.fdwt.com:24920] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi1.6.5/lib/openmpi/mca_topo_unity: lt_dlerror() 
</span><br>
<span class="quotelev2">&gt;&gt; returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [ysunrh.fdwt.com:24920] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi1.6.5/lib/openmpi/mca_pubsub_orte: lt_dlerror() 
</span><br>
<span class="quotelev2">&gt;&gt; returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [ysunrh.fdwt.com:24920] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi1.6.5/lib/openmpi/mca_dpm_orte: lt_dlerror() 
</span><br>
<span class="quotelev2">&gt;&gt; returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MCA backtrace: execinfo (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MCA memory: linux (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MCA timer: linux (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MCA installdirs: env (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MCA installdirs: config (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MCA hwloc: hwloc132 (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Could anyone of you give me some help, and tell me what I need to do 
</span><br>
<span class="quotelev2">&gt;&gt; to install openmpi correctly or give me some instructions to make it 
</span><br>
<span class="quotelev2">&gt;&gt; working? Thank you.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; */Yuping Sun/*
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; FloDesign Wind Turbine Corp
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 242 Sturbridge Road
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Charlton, MA 01507
</span><br>
<span class="quotelev2">&gt;&gt; Direct: 508-434-1507
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cell: 713-456-9420
</span><br>
<span class="quotelev2">&gt;&gt; ysun_at_[hidden]&lt;mailto:ysun_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Description: cid:3300779197_294562
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22390.php">Gus Correa: "Re: [OMPI users] errors testing openmpi1.6.5 ----"</a>
<li><strong>Previous message:</strong> <a href="22388.php">Gus Correa: "Re: [OMPI users] errors testing openmpi1.6.5 ----"</a>
<li><strong>In reply to:</strong> <a href="22388.php">Gus Correa: "Re: [OMPI users] errors testing openmpi1.6.5 ----"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22390.php">Gus Correa: "Re: [OMPI users] errors testing openmpi1.6.5 ----"</a>
<li><strong>Reply:</strong> <a href="22390.php">Gus Correa: "Re: [OMPI users] errors testing openmpi1.6.5 ----"</a>
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
