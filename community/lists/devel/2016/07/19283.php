<?
$subject_val = "Re: [OMPI devel] OpenMPI 2.0 and Petsc 3.7.2";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 26 00:23:24 2016" -->
<!-- isoreceived="20160726042324" -->
<!-- sent="Tue, 26 Jul 2016 13:23:18 +0900" -->
<!-- isosent="20160726042318" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenMPI 2.0 and Petsc 3.7.2" -->
<!-- id="e434d041-510e-d7c6-ce0e-bba9cec35fbb_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="C6CB81F3-3096-4881-A689-416A5B062201_at_me.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OpenMPI 2.0 and Petsc 3.7.2<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-26 00:23:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19284.php">Sreenidhi Bharathkar Ramesh: "Re: [OMPI devel] tcp btl rendezvous performance question"</a>
<li><strong>Previous message:</strong> <a href="19282.php">Nathan Hjelm: "Re: [OMPI devel] OpenMPI 2.0 and Petsc 3.7.2"</a>
<li><strong>In reply to:</strong> <a href="19282.php">Nathan Hjelm: "Re: [OMPI devel] OpenMPI 2.0 and Petsc 3.7.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19285.php">Eric Chamberland: "Re: [OMPI devel] OpenMPI 2.0 and Petsc 3.7.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nathan and Eric,
<br>
<p><p>there is a know issue of libnbc not correctly retaining datatypes, for 
<br>
example, if you start a non blocking collective operation (MPI_Ibcast 
<br>
for example) and they MPI_Type_destroy() the datatype *before* the non 
<br>
blocking collective completes, then the datatype is free'd by 
<br>
MPI_Type_destroy, and is invalid when required to progress the 
<br>
collective operation.
<br>
<p><p>a patch for v2.x is available at 
<br>
<a href="https://github.com/ggouaillardet/ompi-release/commit/cd30056efeff7d37257ab2bc0dbffb2e05a6170c.patch">https://github.com/ggouaillardet/ompi-release/commit/cd30056efeff7d37257ab2bc0dbffb2e05a6170c.patch</a>
<br>
<p>/* note it only fixes MPI_Ibcast() for now, but if the root cause of the 
<br>
petsc crash is this, i can easily fix other non blocking primitives */
<br>
<p><p>/* ideally, this should be done at the ompi level, and not in the libnbc 
<br>
module, that is why <a href="https://github.com/open-mpi/ompi/pull/1305">https://github.com/open-mpi/ompi/pull/1305</a> has not 
<br>
been merged yet */
<br>
<p><p>Cheers,
<br>
<p><p>Gilles
<br>
<p><p>On 7/26/2016 11:46 AM, Nathan Hjelm wrote:
<br>
<span class="quotelev1">&gt; It looks to me like double free on both send and receive requests. The receive free is an extra OBJ_RELEASE of MPI_DOUBLE which was not malloced (invalid free). The send free is an assert failure in OBJ_RELEASE of an OBJ_NEW() object (invalid magic). I plan to look at in in the next couple of days. Let me know if you figure it out before I get to it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 25, 2016, at 8:38 PM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Eric,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; where can your test case be downloaded ? how many nodes and tasks do you need to reproduce the bug ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; fwiw, currently there are two Open MPI repositories
</span><br>
<span class="quotelev2">&gt;&gt; - <a href="https://github.com/open-mpi/ompi">https://github.com/open-mpi/ompi</a>
</span><br>
<span class="quotelev2">&gt;&gt;   there is only one branch and is the 'master' branch, today, this can be seen as Open MPI 3.0 pre alpha
</span><br>
<span class="quotelev2">&gt;&gt; - <a href="https://github.com/open-mpi/ompi-release">https://github.com/open-mpi/ompi-release</a>
</span><br>
<span class="quotelev2">&gt;&gt;   the default branch is 'v2.x', today, this can be seen as Open MPI 2.0.1 pre alpha
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 7/26/2016 3:33 AM, Eric Chamberland wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; has someone tried OpenMPI 2.0 with Petsc 3.7.2?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am having some errors with petsc, maybe someone have them too?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here are the configure logs for PETSc:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.giref.ulaval.ca/~cmpgiref/dernier_ompi/2016.07.25.01h16m02s_configure.log">http://www.giref.ulaval.ca/~cmpgiref/dernier_ompi/2016.07.25.01h16m02s_configure.log</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.giref.ulaval.ca/~cmpgiref/dernier_ompi/2016.07.25.01h16m02s_RDict.log">http://www.giref.ulaval.ca/~cmpgiref/dernier_ompi/2016.07.25.01h16m02s_RDict.log</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; And for OpenMPI:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.giref.ulaval.ca/~cmpgiref/dernier_ompi/2016.07.25.01h16m02s_config.log">http://www.giref.ulaval.ca/~cmpgiref/dernier_ompi/2016.07.25.01h16m02s_config.log</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (in fact, I am testing the ompi-release branch, a sort of petsc-master branch, since I need the commit 9ba6678156).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For a set of parallel tests, I have 104 that works on 124 total tests.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; And the typical error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** Error in `/pmi/cmpbib/compilation_BIB_dernier_ompi/COMPILE_AUTO/GIREF/bin/Test.ProblemeGD.dev': free(): invalid pointer:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ======= Backtrace: =========
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib64/libc.so.6(+0x7277f)[0x7f80eb11677f]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib64/libc.so.6(+0x78026)[0x7f80eb11c026]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib64/libc.so.6(+0x78d53)[0x7f80eb11cd53]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/openmpi-2.x_opt/lib/libopen-pal.so.20(opal_free+0x1f)[0x7f80ea8f9d60]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/openmpi-2.x_opt/lib/openmpi/mca_pml_ob1.so(+0x16628)[0x7f80df0ea628]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/openmpi-2.x_opt/lib/openmpi/mca_pml_ob1.so(+0x16c50)[0x7f80df0eac50]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/openmpi-2.x_opt/lib/libmpi.so.20(+0x9f9dd)[0x7f80eb7029dd]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/openmpi-2.x_opt/lib/libmpi.so.20(MPI_Request_free+0xf7)[0x7f80eb702ad6]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/petsc-3.7.2_debug_openmpi_2.x/lib/libpetsc.so.3.7(+0x4adc6d)[0x7f80f2fa6c6d]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/petsc-3.7.2_debug_openmpi_2.x/lib/libpetsc.so.3.7(VecScatterDestroy+0x68d)[0x7f80f2fa1c45]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/petsc-3.7.2_debug_openmpi_2.x/lib/libpetsc.so.3.7(+0xa9d0f5)[0x7f80f35960f5]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/petsc-3.7.2_debug_openmpi_2.x/lib/libpetsc.so.3.7(MatDestroy+0x648)[0x7f80f35c2588]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/petsc-3.7.2_debug_openmpi_2.x/lib/libpetsc.so.3.7(+0x10bf0f4)[0x7f80f3bb80f4]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/petsc-3.7.2_debug_openmpi_2.x/lib/libpetsc.so.3.7(PCReset+0x346)[0x7f80f3a796de]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/petsc-3.7.2_debug_openmpi_2.x/lib/libpetsc.so.3.7(KSPReset+0x502)[0x7f80f3d19779]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/petsc-3.7.2_debug_openmpi_2.x/lib/libpetsc.so.3.7(+0x11707f7)[0x7f80f3c697f7]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/petsc-3.7.2_debug_openmpi_2.x/lib/libpetsc.so.3.7(PCReset+0x346)[0x7f80f3a796de]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/petsc-3.7.2_debug_openmpi_2.x/lib/libpetsc.so.3.7(KSPReset+0x502)[0x7f80f3d19779]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/petsc-3.7.2_debug_openmpi_2.x/lib/libpetsc.so.3.7(+0x11707f7)[0x7f80f3c697f7]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/petsc-3.7.2_debug_openmpi_2.x/lib/libpetsc.so.3.7(PCReset+0x346)[0x7f80f3a796de]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/petsc-3.7.2_debug_openmpi_2.x/lib/libpetsc.so.3.7(KSPReset+0x502)[0x7f80f3d19779]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/petsc-3.7.2_debug_openmpi_2.x/lib/libpetsc.so.3.7(+0x11707f7)[0x7f80f3c697f7]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/petsc-3.7.2_debug_openmpi_2.x/lib/libpetsc.so.3.7(PCReset+0x346)[0x7f80f3a796de]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/petsc-3.7.2_debug_openmpi_2.x/lib/libpetsc.so.3.7(PCDestroy+0x5d1)[0x7f80f3a79fd9]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/petsc-3.7.2_debug_openmpi_2.x/lib/libpetsc.so.3.7(KSPDestroy+0x7b6)[0x7f80f3d1a334]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a similar one:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** Error in `/pmi/cmpbib/compilation_BIB_dernier_ompi/COMPILE_AUTO/GIREF/bin/Test.ProbFluideIncompressible.dev': free(): invalid pointer: 0x00007f382a7c5bc0 ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ======= Backtrace: =========
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib64/libc.so.6(+0x7277f)[0x7f3829f1c77f]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib64/libc.so.6(+0x78026)[0x7f3829f22026]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib64/libc.so.6(+0x78d53)[0x7f3829f22d53]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/openmpi-2.x_opt/lib/libopen-pal.so.20(opal_free+0x1f)[0x7f38296ffd60]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/openmpi-2.x_opt/lib/openmpi/mca_pml_ob1.so(+0x16628)[0x7f381deab628]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/openmpi-2.x_opt/lib/openmpi/mca_pml_ob1.so(+0x16c50)[0x7f381deabc50]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/openmpi-2.x_opt/lib/libmpi.so.20(+0x9f9dd)[0x7f382a5089dd]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/openmpi-2.x_opt/lib/libmpi.so.20(MPI_Request_free+0xf7)[0x7f382a508ad6]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/petsc-3.7.2_debug_openmpi_2.x/lib/libpetsc.so.3.7(+0x4adc6d)[0x7f3831dacc6d]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/petsc-3.7.2_debug_openmpi_2.x/lib/libpetsc.so.3.7(VecScatterDestroy+0x68d)[0x7f3831da7c45]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/petsc-3.7.2_debug_openmpi_2.x/lib/libpetsc.so.3.7(+0x9f4755)[0x7f38322f3755]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/petsc-3.7.2_debug_openmpi_2.x/lib/libpetsc.so.3.7(MatDestroy+0x648)[0x7f38323c8588]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/petsc-3.7.2_debug_openmpi_2.x/lib/libpetsc.so.3.7(PCReset+0x4e2)[0x7f383287f87a]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/petsc-3.7.2_debug_openmpi_2.x/lib/libpetsc.so.3.7(PCDestroy+0x5d1)[0x7f383287ffd9]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/petsc-3.7.2_debug_openmpi_2.x/lib/libpetsc.so.3.7(KSPDestroy+0x7b6)[0x7f3832b20334]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; another one:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** Error in `/pmi/cmpbib/compilation_BIB_dernier_ompi/COMPILE_AUTO/GIREF/bin/Test.MortierDiffusion.dev': free(): invalid pointer: 0x00007f67b6d37bc0 ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ======= Backtrace: =========
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib64/libc.so.6(+0x7277f)[0x7f67b648e77f]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib64/libc.so.6(+0x78026)[0x7f67b6494026]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib64/libc.so.6(+0x78d53)[0x7f67b6494d53]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/openmpi-2.x_opt/lib/libopen-pal.so.20(opal_free+0x1f)[0x7f67b5c71d60]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/openmpi-2.x_opt/lib/openmpi/mca_pml_ob1.so(+0x1adae)[0x7f67aa4cddae]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/openmpi-2.x_opt/lib/openmpi/mca_pml_ob1.so(+0x1b4ca)[0x7f67aa4ce4ca]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/openmpi-2.x_opt/lib/libmpi.so.20(+0x9f9dd)[0x7f67b6a7a9dd]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/openmpi-2.x_opt/lib/libmpi.so.20(MPI_Request_free+0xf7)[0x7f67b6a7aad6]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/petsc-3.7.2_debug_openmpi_2.x/lib/libpetsc.so.3.7(+0x4adb09)[0x7f67be31eb09]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/petsc-3.7.2_debug_openmpi_2.x/lib/libpetsc.so.3.7(VecScatterDestroy+0x68d)[0x7f67be319c45]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/petsc-3.7.2_debug_openmpi_2.x/lib/libpetsc.so.3.7(+0x4574f7)[0x7f67be2c84f7]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/petsc-3.7.2_debug_openmpi_2.x/lib/libpetsc.so.3.7(VecDestroy+0x648)[0x7f67be26e8da]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I feel like I should wait until someone else from Petsc have tested it too...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Eric
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19276.php">http://www.open-mpi.org/community/lists/devel/2016/07/19276.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19281.php">http://www.open-mpi.org/community/lists/devel/2016/07/19281.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19282.php">http://www.open-mpi.org/community/lists/devel/2016/07/19282.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19284.php">Sreenidhi Bharathkar Ramesh: "Re: [OMPI devel] tcp btl rendezvous performance question"</a>
<li><strong>Previous message:</strong> <a href="19282.php">Nathan Hjelm: "Re: [OMPI devel] OpenMPI 2.0 and Petsc 3.7.2"</a>
<li><strong>In reply to:</strong> <a href="19282.php">Nathan Hjelm: "Re: [OMPI devel] OpenMPI 2.0 and Petsc 3.7.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19285.php">Eric Chamberland: "Re: [OMPI devel] OpenMPI 2.0 and Petsc 3.7.2"</a>
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
