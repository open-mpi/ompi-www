<?
$subject_val = "[OMPI devel] OpenMPI 2.0 and Petsc 3.7.2";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 25 14:34:00 2016" -->
<!-- isoreceived="20160725183400" -->
<!-- sent="Mon, 25 Jul 2016 14:33:45 -0400" -->
<!-- isosent="20160725183345" -->
<!-- name="Eric Chamberland" -->
<!-- email="Eric.Chamberland_at_[hidden]" -->
<!-- subject="[OMPI devel] OpenMPI 2.0 and Petsc 3.7.2" -->
<!-- id="99090192-103a-b58c-8bbb-273b938fb748_at_giref.ulaval.ca" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI devel] OpenMPI 2.0 and Petsc 3.7.2<br>
<strong>From:</strong> Eric Chamberland (<em>Eric.Chamberland_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-25 14:33:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19277.php">Eric Chamberland: "Re: [OMPI devel] [petsc-users] OpenMPI 2.0 and Petsc 3.7.2"</a>
<li><strong>Previous message:</strong> <a href="19275.php">Eric Chamberland: "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19281.php">Gilles Gouaillardet: "Re: [OMPI devel] OpenMPI 2.0 and Petsc 3.7.2"</a>
<li><strong>Reply:</strong> <a href="19281.php">Gilles Gouaillardet: "Re: [OMPI devel] OpenMPI 2.0 and Petsc 3.7.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>has someone tried OpenMPI 2.0 with Petsc 3.7.2?
<br>
<p>I am having some errors with petsc, maybe someone have them too?
<br>
<p>Here are the configure logs for PETSc:
<br>
<p><a href="http://www.giref.ulaval.ca/~cmpgiref/dernier_ompi/2016.07.25.01h16m02s_configure.log">http://www.giref.ulaval.ca/~cmpgiref/dernier_ompi/2016.07.25.01h16m02s_configure.log</a>
<br>
<p><a href="http://www.giref.ulaval.ca/~cmpgiref/dernier_ompi/2016.07.25.01h16m02s_RDict.log">http://www.giref.ulaval.ca/~cmpgiref/dernier_ompi/2016.07.25.01h16m02s_RDict.log</a>
<br>
<p>And for OpenMPI:
<br>
<a href="http://www.giref.ulaval.ca/~cmpgiref/dernier_ompi/2016.07.25.01h16m02s_config.log">http://www.giref.ulaval.ca/~cmpgiref/dernier_ompi/2016.07.25.01h16m02s_config.log</a>
<br>
<p>(in fact, I am testing the ompi-release branch, a sort of petsc-master 
<br>
branch, since I need the commit 9ba6678156).
<br>
<p>For a set of parallel tests, I have 104 that works on 124 total tests.
<br>
<p>And the typical error:
<br>
*** Error in 
<br>
`/pmi/cmpbib/compilation_BIB_dernier_ompi/COMPILE_AUTO/GIREF/bin/Test.ProblemeGD.dev': 
<br>
free(): invalid pointer:
<br>
======= Backtrace: =========
<br>
/lib64/libc.so.6(+0x7277f)[0x7f80eb11677f]
<br>
/lib64/libc.so.6(+0x78026)[0x7f80eb11c026]
<br>
/lib64/libc.so.6(+0x78d53)[0x7f80eb11cd53]
<br>
/opt/openmpi-2.x_opt/lib/libopen-pal.so.20(opal_free+0x1f)[0x7f80ea8f9d60]
<br>
/opt/openmpi-2.x_opt/lib/openmpi/mca_pml_ob1.so(+0x16628)[0x7f80df0ea628]
<br>
/opt/openmpi-2.x_opt/lib/openmpi/mca_pml_ob1.so(+0x16c50)[0x7f80df0eac50]
<br>
/opt/openmpi-2.x_opt/lib/libmpi.so.20(+0x9f9dd)[0x7f80eb7029dd]
<br>
/opt/openmpi-2.x_opt/lib/libmpi.so.20(MPI_Request_free+0xf7)[0x7f80eb702ad6]
<br>
/opt/petsc-3.7.2_debug_openmpi_2.x/lib/libpetsc.so.3.7(+0x4adc6d)[0x7f80f2fa6c6d]
<br>
/opt/petsc-3.7.2_debug_openmpi_2.x/lib/libpetsc.so.3.7(VecScatterDestroy+0x68d)[0x7f80f2fa1c45]
<br>
/opt/petsc-3.7.2_debug_openmpi_2.x/lib/libpetsc.so.3.7(+0xa9d0f5)[0x7f80f35960f5]
<br>
/opt/petsc-3.7.2_debug_openmpi_2.x/lib/libpetsc.so.3.7(MatDestroy+0x648)[0x7f80f35c2588]
<br>
/opt/petsc-3.7.2_debug_openmpi_2.x/lib/libpetsc.so.3.7(+0x10bf0f4)[0x7f80f3bb80f4]
<br>
/opt/petsc-3.7.2_debug_openmpi_2.x/lib/libpetsc.so.3.7(PCReset+0x346)[0x7f80f3a796de]
<br>
/opt/petsc-3.7.2_debug_openmpi_2.x/lib/libpetsc.so.3.7(KSPReset+0x502)[0x7f80f3d19779]
<br>
/opt/petsc-3.7.2_debug_openmpi_2.x/lib/libpetsc.so.3.7(+0x11707f7)[0x7f80f3c697f7]
<br>
/opt/petsc-3.7.2_debug_openmpi_2.x/lib/libpetsc.so.3.7(PCReset+0x346)[0x7f80f3a796de]
<br>
/opt/petsc-3.7.2_debug_openmpi_2.x/lib/libpetsc.so.3.7(KSPReset+0x502)[0x7f80f3d19779]
<br>
/opt/petsc-3.7.2_debug_openmpi_2.x/lib/libpetsc.so.3.7(+0x11707f7)[0x7f80f3c697f7]
<br>
/opt/petsc-3.7.2_debug_openmpi_2.x/lib/libpetsc.so.3.7(PCReset+0x346)[0x7f80f3a796de]
<br>
/opt/petsc-3.7.2_debug_openmpi_2.x/lib/libpetsc.so.3.7(KSPReset+0x502)[0x7f80f3d19779]
<br>
/opt/petsc-3.7.2_debug_openmpi_2.x/lib/libpetsc.so.3.7(+0x11707f7)[0x7f80f3c697f7]
<br>
/opt/petsc-3.7.2_debug_openmpi_2.x/lib/libpetsc.so.3.7(PCReset+0x346)[0x7f80f3a796de]
<br>
/opt/petsc-3.7.2_debug_openmpi_2.x/lib/libpetsc.so.3.7(PCDestroy+0x5d1)[0x7f80f3a79fd9]
<br>
/opt/petsc-3.7.2_debug_openmpi_2.x/lib/libpetsc.so.3.7(KSPDestroy+0x7b6)[0x7f80f3d1a334]
<br>
<p>a similar one:
<br>
*** Error in 
<br>
`/pmi/cmpbib/compilation_BIB_dernier_ompi/COMPILE_AUTO/GIREF/bin/Test.ProbFluideIncompressible.dev': 
<br>
free(): invalid pointer: 0x00007f382a7c5bc0 ***
<br>
======= Backtrace: =========
<br>
/lib64/libc.so.6(+0x7277f)[0x7f3829f1c77f]
<br>
/lib64/libc.so.6(+0x78026)[0x7f3829f22026]
<br>
/lib64/libc.so.6(+0x78d53)[0x7f3829f22d53]
<br>
/opt/openmpi-2.x_opt/lib/libopen-pal.so.20(opal_free+0x1f)[0x7f38296ffd60]
<br>
/opt/openmpi-2.x_opt/lib/openmpi/mca_pml_ob1.so(+0x16628)[0x7f381deab628]
<br>
/opt/openmpi-2.x_opt/lib/openmpi/mca_pml_ob1.so(+0x16c50)[0x7f381deabc50]
<br>
/opt/openmpi-2.x_opt/lib/libmpi.so.20(+0x9f9dd)[0x7f382a5089dd]
<br>
/opt/openmpi-2.x_opt/lib/libmpi.so.20(MPI_Request_free+0xf7)[0x7f382a508ad6]
<br>
/opt/petsc-3.7.2_debug_openmpi_2.x/lib/libpetsc.so.3.7(+0x4adc6d)[0x7f3831dacc6d]
<br>
/opt/petsc-3.7.2_debug_openmpi_2.x/lib/libpetsc.so.3.7(VecScatterDestroy+0x68d)[0x7f3831da7c45]
<br>
/opt/petsc-3.7.2_debug_openmpi_2.x/lib/libpetsc.so.3.7(+0x9f4755)[0x7f38322f3755]
<br>
/opt/petsc-3.7.2_debug_openmpi_2.x/lib/libpetsc.so.3.7(MatDestroy+0x648)[0x7f38323c8588]
<br>
/opt/petsc-3.7.2_debug_openmpi_2.x/lib/libpetsc.so.3.7(PCReset+0x4e2)[0x7f383287f87a]
<br>
/opt/petsc-3.7.2_debug_openmpi_2.x/lib/libpetsc.so.3.7(PCDestroy+0x5d1)[0x7f383287ffd9]
<br>
/opt/petsc-3.7.2_debug_openmpi_2.x/lib/libpetsc.so.3.7(KSPDestroy+0x7b6)[0x7f3832b20334]
<br>
<p>another one:
<br>
<p>*** Error in 
<br>
`/pmi/cmpbib/compilation_BIB_dernier_ompi/COMPILE_AUTO/GIREF/bin/Test.MortierDiffusion.dev': 
<br>
free(): invalid pointer: 0x00007f67b6d37bc0 ***
<br>
======= Backtrace: =========
<br>
/lib64/libc.so.6(+0x7277f)[0x7f67b648e77f]
<br>
/lib64/libc.so.6(+0x78026)[0x7f67b6494026]
<br>
/lib64/libc.so.6(+0x78d53)[0x7f67b6494d53]
<br>
/opt/openmpi-2.x_opt/lib/libopen-pal.so.20(opal_free+0x1f)[0x7f67b5c71d60]
<br>
/opt/openmpi-2.x_opt/lib/openmpi/mca_pml_ob1.so(+0x1adae)[0x7f67aa4cddae]
<br>
/opt/openmpi-2.x_opt/lib/openmpi/mca_pml_ob1.so(+0x1b4ca)[0x7f67aa4ce4ca]
<br>
/opt/openmpi-2.x_opt/lib/libmpi.so.20(+0x9f9dd)[0x7f67b6a7a9dd]
<br>
/opt/openmpi-2.x_opt/lib/libmpi.so.20(MPI_Request_free+0xf7)[0x7f67b6a7aad6]
<br>
/opt/petsc-3.7.2_debug_openmpi_2.x/lib/libpetsc.so.3.7(+0x4adb09)[0x7f67be31eb09]
<br>
/opt/petsc-3.7.2_debug_openmpi_2.x/lib/libpetsc.so.3.7(VecScatterDestroy+0x68d)[0x7f67be319c45]
<br>
/opt/petsc-3.7.2_debug_openmpi_2.x/lib/libpetsc.so.3.7(+0x4574f7)[0x7f67be2c84f7]
<br>
/opt/petsc-3.7.2_debug_openmpi_2.x/lib/libpetsc.so.3.7(VecDestroy+0x648)[0x7f67be26e8da]
<br>
<p>I feel like I should wait until someone else from Petsc have tested it 
<br>
too...
<br>
<p>Thanks,
<br>
<p>Eric
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19277.php">Eric Chamberland: "Re: [OMPI devel] [petsc-users] OpenMPI 2.0 and Petsc 3.7.2"</a>
<li><strong>Previous message:</strong> <a href="19275.php">Eric Chamberland: "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19281.php">Gilles Gouaillardet: "Re: [OMPI devel] OpenMPI 2.0 and Petsc 3.7.2"</a>
<li><strong>Reply:</strong> <a href="19281.php">Gilles Gouaillardet: "Re: [OMPI devel] OpenMPI 2.0 and Petsc 3.7.2"</a>
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
