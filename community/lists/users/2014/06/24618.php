<?
$subject_val = "Re: [OMPI users] Bug in OpenMPI-1.8.1: missing routines mpi_win_allocate_shared, mpi_win_shared_query  called from Ftn95-code";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  9 20:44:30 2014" -->
<!-- isoreceived="20140610004430" -->
<!-- sent="Tue, 10 Jun 2014 00:44:29 +0000" -->
<!-- isosent="20140610004429" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bug in OpenMPI-1.8.1: missing routines mpi_win_allocate_shared, mpi_win_shared_query  called from Ftn95-code" -->
<!-- id="1123ADD2-6810-4F3E-9A74-D9B0562585A3_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8337B490252F0944BF1D38541059627E17347171_at_DLREXMBX01.intra.dlr.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Bug in OpenMPI-1.8.1: missing routines mpi_win_allocate_shared, mpi_win_shared_query  called from Ftn95-code<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-09 20:44:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24619.php">Nathan Hjelm: "Re: [OMPI users] openib segfaults with Torque"</a>
<li><strong>Previous message:</strong> <a href="24617.php">Jeff Squyres (jsquyres): "Re: [OMPI users] intermittent segfaults with openib on ring_c.c"</a>
<li><strong>In reply to:</strong> <a href="24544.php">Michael.Rachner_at_[hidden]: "[OMPI users] Bug in OpenMPI-1.8.1: missing routines mpi_win_allocate_shared, mpi_win_shared_query  called from Ftn95-code"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Oops.  Looks like we missed these in the Fortran interfaces.
<br>
<p>I'll file a bug; we'll get this fixed in OMPI 1.8.2.  Many thanks for reporting this.
<br>
<p><p>On Jun 5, 2014, at 5:41 AM, Michael.Rachner_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Dear developers of OpenMPI,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I found that when building an executable from a Fortran95-code on a LINUX cluster with OpenMPI-1.8.1 (and INTEL-14.0.2 Ftn-compiler)
</span><br>
<span class="quotelev1">&gt; the following two MPI-3 routines do not exist:  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; /dat/KERNEL/mpi3_sharedmem.f90:176: undefined reference to `mpi_win_allocate_shared_'
</span><br>
<span class="quotelev1">&gt; /dat/KERNEL/mpi3_sharedmem.f90:198: undefined reference to `mpi_win_shared_query_'  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; It is just these 2 routines, which are  necessary for the MPI3- shared memory access of the same Fortran array from different processes on same node.
</span><br>
<span class="quotelev1">&gt; This is a breakthrough enabled by MPI-3, and for me the most important new feature of MPI-3,
</span><br>
<span class="quotelev1">&gt; because it allows saving much storage in the Ftn-code  and reduces a lot of MPI-data transmission required otherwise.  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Can you tell  me, when these 2 important MPI-routines will be available?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thank You
</span><br>
<span class="quotelev1">&gt; Michael Rachner
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Details:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Version of MPI library used in this run:
</span><br>
<span class="quotelev1">&gt; [1,0]&lt;stdout&gt;:  Open MPI v1.8.1, package: Open MPI hpcoft14_at_cl3fr4 Distribution, ident: 1.8.1, Apr 22, 2014
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; d0000000 cl3fr1 230$mpif90 -show
</span><br>
<span class="quotelev1">&gt; ifort -I/opt/mpi/openmpi/1.8.1-intel-14.0.2/include -I/opt/mpi/openmpi/1.8.1-intel-14.0.2/lib -L/opt/system/torque/4.2.7/lib -Wl,-rpath -Wl,/opt/system/torque/4.2.7/lib -Wl,-rpath -Wl,/opt/system/torque/4.2.7/lib -Wl,-rpath -Wl,/opt/system/torque/4.2.7/lib -Wl,-rpath -Wl,/opt/system/torque/4.2.7/lib -Wl,-rpath -Wl,/opt/mpi/openmpi/1.8.1-intel-14.0.2/lib -Wl,--enable-new-dtags -L/opt/mpi/openmpi/1.8.1-intel-14.0.2/lib -lmpi_usempif08 -lmpi_usempi_ignore_tkr -lmpi_mpifh -lmpi
</span><br>
<span class="quotelev1">&gt; d0000000 cl3fr1 231$
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; --end of the email ---
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24619.php">Nathan Hjelm: "Re: [OMPI users] openib segfaults with Torque"</a>
<li><strong>Previous message:</strong> <a href="24617.php">Jeff Squyres (jsquyres): "Re: [OMPI users] intermittent segfaults with openib on ring_c.c"</a>
<li><strong>In reply to:</strong> <a href="24544.php">Michael.Rachner_at_[hidden]: "[OMPI users] Bug in OpenMPI-1.8.1: missing routines mpi_win_allocate_shared, mpi_win_shared_query  called from Ftn95-code"</a>
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
