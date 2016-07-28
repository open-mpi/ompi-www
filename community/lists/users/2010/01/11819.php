<?
$subject_val = "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 19 11:36:23 2010" -->
<!-- isoreceived="20100119163623" -->
<!-- sent="Tue, 19 Jan 2010 17:36:30 +0100" -->
<!-- isosent="20100119163630" -->
<!-- name="Eloi Gaudry" -->
<!-- email="eg_at_[hidden]" -->
<!-- subject="Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2" -->
<!-- id="4B55DF8E.3020709_at_fft.be" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="47a831091001190827y2bfe3872m599484d286b23aac_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2<br>
<strong>From:</strong> Eloi Gaudry (<em>eg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-19 11:36:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11820.php">Federico Golfrè Andreasi: "[OMPI users] MPI_Comm_spawn_multiple with MPI_Info object"</a>
<li><strong>Previous message:</strong> <a href="11818.php">Shiqing Fan: "Re: [OMPI users] Win32 compilation broken (MSVC2008, OpenMPI1.4.1)"</a>
<li><strong>In reply to:</strong> <a href="11817.php">Yaakoub El Khamra: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11823.php">Jeff Squyres: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yaakoub El Khamra wrote:
<br>
<span class="quotelev1">&gt; Greetings
</span><br>
<span class="quotelev1">&gt; Can we please verify this problem is with Gotoblas and not with
</span><br>
<span class="quotelev1">&gt; OpenMPI? if I read this correctly, without MPI and with other flavors
</span><br>
<span class="quotelev1">&gt; of MPI, you have normal execution. This would normally indicate the
</span><br>
<span class="quotelev1">&gt; problem is on the OpenMPI side.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am 2 doors away from Kazushige's office. Please do let me know so
</span><br>
<span class="quotelev1">&gt; that I can talk to him about this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; Yaakoub El Khamra
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Jan 19, 2010 at 9:35 AM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Hi Dorian and Eloi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I wonder if this is really a Goto BLAS problem or related to
</span><br>
<span class="quotelev2">&gt;&gt; how OpenMPI was configured.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In a recent sequence of postings on this list
</span><br>
<span class="quotelev2">&gt;&gt; a colleague reported several errors which were fixed
</span><br>
<span class="quotelev2">&gt;&gt; after he removed the (non-default) &quot;--enable-mpi-threads&quot;
</span><br>
<span class="quotelev2">&gt;&gt; flag from his OpenMPI configuration (and built OpenMPI again,
</span><br>
<span class="quotelev2">&gt;&gt; and recompiled).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; See this thread:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2009/12/11640.php">http://www.open-mpi.org/community/lists/users/2009/12/11640.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2010/01/11695.php">http://www.open-mpi.org/community/lists/users/2010/01/11695.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; He was also using BLAS (most likely Goto's) in the HPL benchmark.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Did you configure OpenMPI with &quot;--enable-mpi-threads&quot;?
</span><br>
<span class="quotelev2">&gt;&gt; Have you tried without it?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I hope this helps.
</span><br>
<span class="quotelev2">&gt;&gt; Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Gustavo Correa
</span><br>
<span class="quotelev2">&gt;&gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev2">&gt;&gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Eloi Gaudry wrote:
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dorian Krause wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Eloi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Does the segmentation faults you're facing also happen in a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; sequential environment (i.e. not linked against openmpi libraries) ?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; No, without MPI everything works fine. Also, linking against mvapich
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; doesn't give any errors. I think there is a problem with GotoBLAS and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the shared library infrastructure of OpenMPI. The code doesn't come to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the point to execute the gemm operation at all.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Have you already informed Kazushige Goto (developer of Gotoblas) ?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Not yet. Since the problem only happens with openmpi and the BLAS
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (stand-alone) seems to work, I thought the openmpi mailing list would
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; be the better place to discuss this (to get a grasp of what the error
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; could be before going to the GotoBLAS mailing list).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Eloi
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; PS: Could you post your Makefile.rule here so that we could check the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; different compilation options chosen ?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I didn't make any changes to the Makefile.rules. This is the content
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; of Makefile.conf:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OSNAME=Linux
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ARCH=x86_64
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; C_COMPILER=GCC
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; BINARY32=
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; BINARY64=1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; CEXTRALIB=-L/usr/lib/gcc/x86_64-redhat-linux/4.1.2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -L/usr/lib/gcc/x86_64-redhat-linux/4.1.2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -L/usr/lib/gcc/x86_64-redhat-linux/4.1.2/../../../../lib64
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -L/lib/../lib64 -L/usr/lib/../lib64  -lc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; F_COMPILER=GFORTRAN
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; FC=gfortran
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; BU=_
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; FEXTRALIB=-L/usr/lib/gcc/x86_64-redhat-linux/4.1.2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -L/usr/lib/gcc/x86_64-redhat-linux/4.1.2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -L/usr/lib/gcc/x86_64-redhat-linux/4.1.2/../../../../lib64
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -L/lib/../lib64 -L/usr/lib/../lib64  -lgfortran -lm -lgfortran -lm -lc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; CORE=BARCELONA
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; LIBCORE=barcelona
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; NUM_CORES=8
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; HAVE_MMX=1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; HAVE_SSE=1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; HAVE_SSE2=1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; HAVE_SSE3=1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; HAVE_SSE4A=1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; HAVE_3DNOWEX=1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; HAVE_3DNOW=1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MAKE += -j 8
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; SGEMM_UNROLL_M=8
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; SGEMM_UNROLL_N=4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; DGEMM_UNROLL_M=4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; DGEMM_UNROLL_N=4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; QGEMM_UNROLL_M=2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; QGEMM_UNROLL_N=2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; CGEMM_UNROLL_M=4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; CGEMM_UNROLL_N=2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ZGEMM_UNROLL_M=2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ZGEMM_UNROLL_N=2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; XGEMM_UNROLL_M=1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; XGEMM_UNROLL_N=1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Dorian
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dorian,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've been experiencing similar issue on two different Opteron
</span><br>
<span class="quotelev3">&gt;&gt;&gt; architectures (22xx and 25x), in a sequential environment, when using
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v2-1.10 of GotoBLAS. If you can downgrade to version 2-1.09, I bet you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; will not experience such issues. Anyway, I'm pretty sure Kazushige is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; working on fixing this right now.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Eloi
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<p><p>Hi Gus and Yaakoub,
<br>
<p>I've been able to reproduce similar issue on opteron servers, either 
<br>
using a sequential or parallel binary linked with v2-1.10. With v2-1.09, 
<br>
these segfaults disappear. I've just told Kazushige so.
<br>
<p>I don't think that the segmentation faults experienced by Dorian are due 
<br>
to OpenMPI (I'm myself using a non-mpi-thread-aware built).
<br>
<p>Regards,
<br>
Eloi
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11820.php">Federico Golfrè Andreasi: "[OMPI users] MPI_Comm_spawn_multiple with MPI_Info object"</a>
<li><strong>Previous message:</strong> <a href="11818.php">Shiqing Fan: "Re: [OMPI users] Win32 compilation broken (MSVC2008, OpenMPI1.4.1)"</a>
<li><strong>In reply to:</strong> <a href="11817.php">Yaakoub El Khamra: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11823.php">Jeff Squyres: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
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
