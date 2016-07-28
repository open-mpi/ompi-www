<?
$subject_val = "Re: [OMPI devel] [petsc-users] OpenMPI 2.0 and Petsc 3.7.2";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 25 15:45:13 2016" -->
<!-- isoreceived="20160725194513" -->
<!-- sent="Mon, 25 Jul 2016 15:44:57 -0400" -->
<!-- isosent="20160725194457" -->
<!-- name="Eric Chamberland" -->
<!-- email="Eric.Chamberland_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [petsc-users] OpenMPI 2.0 and Petsc 3.7.2" -->
<!-- id="33b3cb0d-78f8-fb84-2ad5-a447f5cdce9e_at_giref.ulaval.ca" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAMYG4GkZ7vyBQ0=c1ZZ5GRwPrNa=Jgc04aHki39tYHHYWXyopA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [petsc-users] OpenMPI 2.0 and Petsc 3.7.2<br>
<strong>From:</strong> Eric Chamberland (<em>Eric.Chamberland_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-25 15:44:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19278.php">Gilles Gouaillardet: "[OMPI devel] PGI built Open MPI vs GNU built slurm"</a>
<li><strong>Previous message:</strong> <a href="19276.php">Eric Chamberland: "[OMPI devel] OpenMPI 2.0 and Petsc 3.7.2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok,
<br>
<p>here is the 2 points answered:
<br>
<p>#1) got valgrind output... here is the fatal free operation:
<br>
<p>==107156== Invalid free() / delete / delete[] / realloc()
<br>
==107156==    at 0x4C2A37C: free (in 
<br>
/usr/lib64/valgrind/vgpreload_memcheck-amd64-linux.so)
<br>
==107156==    by 0x1E63CD5F: opal_free (malloc.c:184)
<br>
==107156==    by 0x27622627: mca_pml_ob1_recv_request_fini 
<br>
(pml_ob1_recvreq.h:133)
<br>
==107156==    by 0x27622C4F: mca_pml_ob1_recv_request_free 
<br>
(pml_ob1_recvreq.c:90)
<br>
==107156==    by 0x1D3EF9DC: ompi_request_free (request.h:362)
<br>
==107156==    by 0x1D3EFAD5: PMPI_Request_free (prequest_free.c:59)
<br>
==107156==    by 0x14AE3B9C: VecScatterDestroy_PtoP (vpscat.c:219)
<br>
==107156==    by 0x14ADEB74: VecScatterDestroy (vscat.c:1860)
<br>
==107156==    by 0x14A8D426: VecDestroy_MPI (pdvec.c:25)
<br>
==107156==    by 0x14A33809: VecDestroy (vector.c:432)
<br>
==107156==    by 0x10A2A5AB: GIREFVecDestroy(_p_Vec*&amp;) 
<br>
(girefConfigurationPETSc.h:115)
<br>
==107156==    by 0x10BA9F14: VecteurPETSc::detruitObjetPETSc() 
<br>
(VecteurPETSc.cc:2292)
<br>
==107156==    by 0x10BA9D0D: VecteurPETSc::~VecteurPETSc() 
<br>
(VecteurPETSc.cc:287)
<br>
==107156==    by 0x10BA9F48: VecteurPETSc::~VecteurPETSc() 
<br>
(VecteurPETSc.cc:281)
<br>
==107156==    by 0x1135A57B: 
<br>
PPReactionsAppuiEL3D::~PPReactionsAppuiEL3D() (PPReactionsAppuiEL3D.cc:216)
<br>
==107156==    by 0xCD9A1EA: ProblemeGD::~ProblemeGD() (in 
<br>
/home/mefpp_ericc/depots_prepush/GIREF/lib/libgiref_dev_Formulation.so)
<br>
==107156==    by 0x435702: main (Test.ProblemeGD.icc:381)
<br>
==107156==  Address 0x1d6acbc0 is 0 bytes inside data symbol 
<br>
&quot;ompi_mpi_double&quot;
<br>
--107156-- REDIR: 0x1dda2680 (libc.so.6:__GI_stpcpy) redirected to 
<br>
0x4c2f330 (__GI_stpcpy)
<br>
==107156==
<br>
==107156== Process terminating with default action of signal 6 
<br>
(SIGABRT): dumping core
<br>
==107156==    at 0x1DD520C7: raise (in /lib64/libc-2.19.so)
<br>
==107156==    by 0x1DD53534: abort (in /lib64/libc-2.19.so)
<br>
==107156==    by 0x1DD4B145: __assert_fail_base (in /lib64/libc-2.19.so)
<br>
==107156==    by 0x1DD4B1F1: __assert_fail (in /lib64/libc-2.19.so)
<br>
==107156==    by 0x27626D12: mca_pml_ob1_send_request_fini 
<br>
(pml_ob1_sendreq.h:221)
<br>
==107156==    by 0x276274C9: mca_pml_ob1_send_request_free 
<br>
(pml_ob1_sendreq.c:117)
<br>
==107156==    by 0x1D3EF9DC: ompi_request_free (request.h:362)
<br>
==107156==    by 0x1D3EFAD5: PMPI_Request_free (prequest_free.c:59)
<br>
==107156==    by 0x14AE3C3C: VecScatterDestroy_PtoP (vpscat.c:225)
<br>
==107156==    by 0x14ADEB74: VecScatterDestroy (vscat.c:1860)
<br>
==107156==    by 0x14A8D426: VecDestroy_MPI (pdvec.c:25)
<br>
==107156==    by 0x14A33809: VecDestroy (vector.c:432)
<br>
==107156==    by 0x10A2A5AB: GIREFVecDestroy(_p_Vec*&amp;) 
<br>
(girefConfigurationPETSc.h:115)
<br>
==107156==    by 0x10BA9F14: VecteurPETSc::detruitObjetPETSc() 
<br>
(VecteurPETSc.cc:2292)
<br>
==107156==    by 0x10BA9D0D: VecteurPETSc::~VecteurPETSc() 
<br>
(VecteurPETSc.cc:287)
<br>
==107156==    by 0x10BA9F48: VecteurPETSc::~VecteurPETSc() 
<br>
(VecteurPETSc.cc:281)
<br>
==107156==    by 0x1135A57B: 
<br>
PPReactionsAppuiEL3D::~PPReactionsAppuiEL3D() (PPReactionsAppuiEL3D.cc:216)
<br>
==107156==    by 0xCD9A1EA: ProblemeGD::~ProblemeGD() (in 
<br>
/home/mefpp_ericc/depots_prepush/GIREF/lib/libgiref_dev_Formulation.so)
<br>
==107156==    by 0x435702: main (Test.ProblemeGD.icc:381)
<br>
<p><p>#2) For the run with -vecscatter_alltoall it works...!
<br>
<p>As an &quot;end user&quot;, should I ever modify these VecScatterCreate options? 
<br>
How do they change the performances of the code on large problems?
<br>
<p>Thanks,
<br>
<p>Eric
<br>
<p>On 25/07/16 02:57 PM, Matthew Knepley wrote:
<br>
<span class="quotelev1">&gt; On Mon, Jul 25, 2016 at 11:33 AM, Eric Chamberland
</span><br>
<span class="quotelev1">&gt; &lt;Eric.Chamberland_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:Eric.Chamberland_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     has someone tried OpenMPI 2.0 with Petsc 3.7.2?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I am having some errors with petsc, maybe someone have them too?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Here are the configure logs for PETSc:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.giref.ulaval.ca/~cmpgiref/dernier_ompi/2016.07.25.01h16m02s_configure.log">http://www.giref.ulaval.ca/~cmpgiref/dernier_ompi/2016.07.25.01h16m02s_configure.log</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.giref.ulaval.ca/~cmpgiref/dernier_ompi/2016.07.25.01h16m02s_RDict.log">http://www.giref.ulaval.ca/~cmpgiref/dernier_ompi/2016.07.25.01h16m02s_RDict.log</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     And for OpenMPI:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.giref.ulaval.ca/~cmpgiref/dernier_ompi/2016.07.25.01h16m02s_config.log">http://www.giref.ulaval.ca/~cmpgiref/dernier_ompi/2016.07.25.01h16m02s_config.log</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     (in fact, I am testing the ompi-release branch, a sort of
</span><br>
<span class="quotelev1">&gt;     petsc-master branch, since I need the commit 9ba6678156).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     For a set of parallel tests, I have 104 that works on 124 total tests.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It appears that the fault happens when freeing the VecScatter we build
</span><br>
<span class="quotelev1">&gt; for MatMult, which contains Request structures
</span><br>
<span class="quotelev1">&gt; for the ISends and  IRecvs. These looks like internal OpenMPI errors to
</span><br>
<span class="quotelev1">&gt; me since the Request should be opaque.
</span><br>
<span class="quotelev1">&gt; I would try at least two things:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) Run under valgrind.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) Switch the VecScatter implementation. All the options are here,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   <a href="http://www.mcs.anl.gov/petsc/petsc-current/docs/manualpages/Vec/VecScatterCreate.html#VecScatterCreate">http://www.mcs.anl.gov/petsc/petsc-current/docs/manualpages/Vec/VecScatterCreate.html#VecScatterCreate</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but maybe use alltoall.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      Matt
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     And the typical error:
</span><br>
<span class="quotelev1">&gt;     *** Error in
</span><br>
<span class="quotelev1">&gt;     `/pmi/cmpbib/compilation_BIB_dernier_ompi/COMPILE_AUTO/GIREF/bin/Test.ProblemeGD.dev':
</span><br>
<span class="quotelev1">&gt;     free(): invalid pointer:
</span><br>
<span class="quotelev1">&gt;     ======= Backtrace: =========
</span><br>
<span class="quotelev1">&gt;     /lib64/libc.so.6(+0x7277f)[0x7f80eb11677f]
</span><br>
<span class="quotelev1">&gt;     /lib64/libc.so.6(+0x78026)[0x7f80eb11c026]
</span><br>
<span class="quotelev1">&gt;     /lib64/libc.so.6(+0x78d53)[0x7f80eb11cd53]
</span><br>
<span class="quotelev1">&gt;     /opt/openmpi-2.x_opt/lib/libopen-pal.so.20(opal_free+0x1f)[0x7f80ea8f9d60]
</span><br>
<span class="quotelev1">&gt;     /opt/openmpi-2.x_opt/lib/openmpi/mca_pml_ob1.so(+0x16628)[0x7f80df0ea628]
</span><br>
<span class="quotelev1">&gt;     /opt/openmpi-2.x_opt/lib/openmpi/mca_pml_ob1.so(+0x16c50)[0x7f80df0eac50]
</span><br>
<span class="quotelev1">&gt;     /opt/openmpi-2.x_opt/lib/libmpi.so.20(+0x9f9dd)[0x7f80eb7029dd]
</span><br>
<span class="quotelev1">&gt;     /opt/openmpi-2.x_opt/lib/libmpi.so.20(MPI_Request_free+0xf7)[0x7f80eb702ad6]
</span><br>
<span class="quotelev1">&gt;     /opt/petsc-3.7.2_debug_openmpi_2.x/lib/libpetsc.so.3.7(+0x4adc6d)[0x7f80f2fa6c6d]
</span><br>
<span class="quotelev1">&gt;     /opt/petsc-3.7.2_debug_openmpi_2.x/lib/libpetsc.so.3.7(VecScatterDestroy+0x68d)[0x7f80f2fa1c45]
</span><br>
<span class="quotelev1">&gt;     /opt/petsc-3.7.2_debug_openmpi_2.x/lib/libpetsc.so.3.7(+0xa9d0f5)[0x7f80f35960f5]
</span><br>
<span class="quotelev1">&gt;     /opt/petsc-3.7.2_debug_openmpi_2.x/lib/libpetsc.so.3.7(MatDestroy+0x648)[0x7f80f35c2588]
</span><br>
<span class="quotelev1">&gt;     /opt/petsc-3.7.2_debug_openmpi_2.x/lib/libpetsc.so.3.7(+0x10bf0f4)[0x7f80f3bb80f4]
</span><br>
<span class="quotelev1">&gt;     /opt/petsc-3.7.2_debug_openmpi_2.x/lib/libpetsc.so.3.7(PCReset+0x346)[0x7f80f3a796de]
</span><br>
<span class="quotelev1">&gt;     /opt/petsc-3.7.2_debug_openmpi_2.x/lib/libpetsc.so.3.7(KSPReset+0x502)[0x7f80f3d19779]
</span><br>
<span class="quotelev1">&gt;     /opt/petsc-3.7.2_debug_openmpi_2.x/lib/libpetsc.so.3.7(+0x11707f7)[0x7f80f3c697f7]
</span><br>
<span class="quotelev1">&gt;     /opt/petsc-3.7.2_debug_openmpi_2.x/lib/libpetsc.so.3.7(PCReset+0x346)[0x7f80f3a796de]
</span><br>
<span class="quotelev1">&gt;     /opt/petsc-3.7.2_debug_openmpi_2.x/lib/libpetsc.so.3.7(KSPReset+0x502)[0x7f80f3d19779]
</span><br>
<span class="quotelev1">&gt;     /opt/petsc-3.7.2_debug_openmpi_2.x/lib/libpetsc.so.3.7(+0x11707f7)[0x7f80f3c697f7]
</span><br>
<span class="quotelev1">&gt;     /opt/petsc-3.7.2_debug_openmpi_2.x/lib/libpetsc.so.3.7(PCReset+0x346)[0x7f80f3a796de]
</span><br>
<span class="quotelev1">&gt;     /opt/petsc-3.7.2_debug_openmpi_2.x/lib/libpetsc.so.3.7(KSPReset+0x502)[0x7f80f3d19779]
</span><br>
<span class="quotelev1">&gt;     /opt/petsc-3.7.2_debug_openmpi_2.x/lib/libpetsc.so.3.7(+0x11707f7)[0x7f80f3c697f7]
</span><br>
<span class="quotelev1">&gt;     /opt/petsc-3.7.2_debug_openmpi_2.x/lib/libpetsc.so.3.7(PCReset+0x346)[0x7f80f3a796de]
</span><br>
<span class="quotelev1">&gt;     /opt/petsc-3.7.2_debug_openmpi_2.x/lib/libpetsc.so.3.7(PCDestroy+0x5d1)[0x7f80f3a79fd9]
</span><br>
<span class="quotelev1">&gt;     /opt/petsc-3.7.2_debug_openmpi_2.x/lib/libpetsc.so.3.7(KSPDestroy+0x7b6)[0x7f80f3d1a334]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     a similar one:
</span><br>
<span class="quotelev1">&gt;     *** Error in
</span><br>
<span class="quotelev1">&gt;     `/pmi/cmpbib/compilation_BIB_dernier_ompi/COMPILE_AUTO/GIREF/bin/Test.ProbFluideIncompressible.dev':
</span><br>
<span class="quotelev1">&gt;     free(): invalid pointer: 0x00007f382a7c5bc0 ***
</span><br>
<span class="quotelev1">&gt;     ======= Backtrace: =========
</span><br>
<span class="quotelev1">&gt;     /lib64/libc.so.6(+0x7277f)[0x7f3829f1c77f]
</span><br>
<span class="quotelev1">&gt;     /lib64/libc.so.6(+0x78026)[0x7f3829f22026]
</span><br>
<span class="quotelev1">&gt;     /lib64/libc.so.6(+0x78d53)[0x7f3829f22d53]
</span><br>
<span class="quotelev1">&gt;     /opt/openmpi-2.x_opt/lib/libopen-pal.so.20(opal_free+0x1f)[0x7f38296ffd60]
</span><br>
<span class="quotelev1">&gt;     /opt/openmpi-2.x_opt/lib/openmpi/mca_pml_ob1.so(+0x16628)[0x7f381deab628]
</span><br>
<span class="quotelev1">&gt;     /opt/openmpi-2.x_opt/lib/openmpi/mca_pml_ob1.so(+0x16c50)[0x7f381deabc50]
</span><br>
<span class="quotelev1">&gt;     /opt/openmpi-2.x_opt/lib/libmpi.so.20(+0x9f9dd)[0x7f382a5089dd]
</span><br>
<span class="quotelev1">&gt;     /opt/openmpi-2.x_opt/lib/libmpi.so.20(MPI_Request_free+0xf7)[0x7f382a508ad6]
</span><br>
<span class="quotelev1">&gt;     /opt/petsc-3.7.2_debug_openmpi_2.x/lib/libpetsc.so.3.7(+0x4adc6d)[0x7f3831dacc6d]
</span><br>
<span class="quotelev1">&gt;     /opt/petsc-3.7.2_debug_openmpi_2.x/lib/libpetsc.so.3.7(VecScatterDestroy+0x68d)[0x7f3831da7c45]
</span><br>
<span class="quotelev1">&gt;     /opt/petsc-3.7.2_debug_openmpi_2.x/lib/libpetsc.so.3.7(+0x9f4755)[0x7f38322f3755]
</span><br>
<span class="quotelev1">&gt;     /opt/petsc-3.7.2_debug_openmpi_2.x/lib/libpetsc.so.3.7(MatDestroy+0x648)[0x7f38323c8588]
</span><br>
<span class="quotelev1">&gt;     /opt/petsc-3.7.2_debug_openmpi_2.x/lib/libpetsc.so.3.7(PCReset+0x4e2)[0x7f383287f87a]
</span><br>
<span class="quotelev1">&gt;     /opt/petsc-3.7.2_debug_openmpi_2.x/lib/libpetsc.so.3.7(PCDestroy+0x5d1)[0x7f383287ffd9]
</span><br>
<span class="quotelev1">&gt;     /opt/petsc-3.7.2_debug_openmpi_2.x/lib/libpetsc.so.3.7(KSPDestroy+0x7b6)[0x7f3832b20334]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     another one:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     *** Error in
</span><br>
<span class="quotelev1">&gt;     `/pmi/cmpbib/compilation_BIB_dernier_ompi/COMPILE_AUTO/GIREF/bin/Test.MortierDiffusion.dev':
</span><br>
<span class="quotelev1">&gt;     free(): invalid pointer: 0x00007f67b6d37bc0 ***
</span><br>
<span class="quotelev1">&gt;     ======= Backtrace: =========
</span><br>
<span class="quotelev1">&gt;     /lib64/libc.so.6(+0x7277f)[0x7f67b648e77f]
</span><br>
<span class="quotelev1">&gt;     /lib64/libc.so.6(+0x78026)[0x7f67b6494026]
</span><br>
<span class="quotelev1">&gt;     /lib64/libc.so.6(+0x78d53)[0x7f67b6494d53]
</span><br>
<span class="quotelev1">&gt;     /opt/openmpi-2.x_opt/lib/libopen-pal.so.20(opal_free+0x1f)[0x7f67b5c71d60]
</span><br>
<span class="quotelev1">&gt;     /opt/openmpi-2.x_opt/lib/openmpi/mca_pml_ob1.so(+0x1adae)[0x7f67aa4cddae]
</span><br>
<span class="quotelev1">&gt;     /opt/openmpi-2.x_opt/lib/openmpi/mca_pml_ob1.so(+0x1b4ca)[0x7f67aa4ce4ca]
</span><br>
<span class="quotelev1">&gt;     /opt/openmpi-2.x_opt/lib/libmpi.so.20(+0x9f9dd)[0x7f67b6a7a9dd]
</span><br>
<span class="quotelev1">&gt;     /opt/openmpi-2.x_opt/lib/libmpi.so.20(MPI_Request_free+0xf7)[0x7f67b6a7aad6]
</span><br>
<span class="quotelev1">&gt;     /opt/petsc-3.7.2_debug_openmpi_2.x/lib/libpetsc.so.3.7(+0x4adb09)[0x7f67be31eb09]
</span><br>
<span class="quotelev1">&gt;     /opt/petsc-3.7.2_debug_openmpi_2.x/lib/libpetsc.so.3.7(VecScatterDestroy+0x68d)[0x7f67be319c45]
</span><br>
<span class="quotelev1">&gt;     /opt/petsc-3.7.2_debug_openmpi_2.x/lib/libpetsc.so.3.7(+0x4574f7)[0x7f67be2c84f7]
</span><br>
<span class="quotelev1">&gt;     /opt/petsc-3.7.2_debug_openmpi_2.x/lib/libpetsc.so.3.7(VecDestroy+0x648)[0x7f67be26e8da]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I feel like I should wait until someone else from Petsc have tested
</span><br>
<span class="quotelev1">&gt;     it too...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Eric
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; What most experimenters take for granted before they begin their
</span><br>
<span class="quotelev1">&gt; experiments is infinitely more interesting than any results to which
</span><br>
<span class="quotelev1">&gt; their experiments lead.
</span><br>
<span class="quotelev1">&gt; -- Norbert Wiener
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19278.php">Gilles Gouaillardet: "[OMPI devel] PGI built Open MPI vs GNU built slurm"</a>
<li><strong>Previous message:</strong> <a href="19276.php">Eric Chamberland: "[OMPI devel] OpenMPI 2.0 and Petsc 3.7.2"</a>
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
