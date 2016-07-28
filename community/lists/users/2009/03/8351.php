<?
$subject_val = "Re: [OMPI users] threading bug?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  6 06:53:50 2009" -->
<!-- isoreceived="20090306115350" -->
<!-- sent="Fri, 6 Mar 2009 07:52:26 -0400" -->
<!-- isosent="20090306115226" -->
<!-- name="Douglas Guptill" -->
<!-- email="douglas.guptill_at_[hidden]" -->
<!-- subject="Re: [OMPI users] threading bug?" -->
<!-- id="20090306115226.GA14214_at_DOME" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="18B719AE-15A9-4ECA-9562-595244FFF76A_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] threading bug?<br>
<strong>From:</strong> Douglas Guptill (<em>douglas.guptill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-06 06:52:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8352.php">Richard Treumann: "Re: [OMPI users] Any scientific application heavily	using	MPI_Barrier?"</a>
<li><strong>Previous message:</strong> <a href="8350.php">Ashley Pittman: "Re: [OMPI users] Any scientific application heavily using MPI_Barrier?"</a>
<li><strong>In reply to:</strong> <a href="8294.php">Jeff Squyres: "Re: [OMPI users] threading bug?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I once had a crash in libpthread something like the one below.  The
<br>
very un-obvious cause was a stack overflow on subroutine entry - large
<br>
automatic array.
<br>
<p>HTH,
<br>
Douglas.
<br>
<p>On Wed, Mar 04, 2009 at 03:04:20PM -0500, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Feb 27, 2009, at 1:56 PM, Mahmoud Payami wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;I am using intel lc_prof-11 (and its own mkl) and have built  
</span><br>
<span class="quotelev2">&gt; &gt;openmpi-1.3.1 with connfigure options: &quot;FC=ifort F77=ifort CC=icc  
</span><br>
<span class="quotelev2">&gt; &gt;CXX=icpc&quot;. Then I have built my application.
</span><br>
<span class="quotelev2">&gt; &gt;The linux box is 2Xamd64 quad. In the middle of running of my  
</span><br>
<span class="quotelev2">&gt; &gt;application (after some 15 iterations), I receive the message and  
</span><br>
<span class="quotelev2">&gt; &gt;stops.
</span><br>
<span class="quotelev2">&gt; &gt;I tried to configure openmpi using &quot;--disable-mpi-threads&quot; but it  
</span><br>
<span class="quotelev2">&gt; &gt;automatically assumes &quot;posix&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This doesn't sound like a threading problem, thankfully.  Open MPI has  
</span><br>
<span class="quotelev1">&gt; two levels of threading issues:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - whether MPI_THREAD_MULTIPLE is supported or not (which is what -- 
</span><br>
<span class="quotelev1">&gt; enable|disable-mpi-threads does)
</span><br>
<span class="quotelev1">&gt; - whether thread support is present at all on the system (e.g.,  
</span><br>
<span class="quotelev1">&gt; solaris or posix threads)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You see &quot;posix&quot; in the configure output mainly because OMPI still  
</span><br>
<span class="quotelev1">&gt; detects that posix threads are available on the system.  It doesn't  
</span><br>
<span class="quotelev1">&gt; necessarily mean that threads will be used in your application's run.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;This problem does not happen in openmpi-1.2.9.
</span><br>
<span class="quotelev2">&gt; &gt;Any comment is highly appreciated.
</span><br>
<span class="quotelev2">&gt; &gt;Best regards,
</span><br>
<span class="quotelev2">&gt; &gt;                    mahmoud payami
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;[hpc1:25353] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt; &gt;[hpc1:25353] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt; &gt;[hpc1:25353] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt; &gt;[hpc1:25353] Failing at address: 0x51
</span><br>
<span class="quotelev2">&gt; &gt;[hpc1:25353] [ 0] /lib64/libpthread.so.0 [0x303be0dd40]
</span><br>
<span class="quotelev2">&gt; &gt;[hpc1:25353] [ 1] /opt/openmpi131_cc/lib/
</span><br>
<span class="quotelev2">&gt; &gt;openmpi/mca_pml_ob1.so [0x2aaaae350d96]
</span><br>
<span class="quotelev2">&gt; &gt;[hpc1:25353] [ 2] /opt/openmpi131_cc/lib/
</span><br>
<span class="quotelev2">&gt; &gt;openmpi/mca_pml_ob1.so [0x2aaaae3514a8]
</span><br>
<span class="quotelev2">&gt; &gt;[hpc1:25353] [ 3] /opt/openmpi131_cc/lib/openmpi/mca_btl_sm.so  
</span><br>
<span class="quotelev2">&gt; &gt;[0x2aaaaeb7c72a]
</span><br>
<span class="quotelev2">&gt; &gt;[hpc1:25353] [ 4] /opt/openmpi131_cc/lib/libopen-pal.so. 
</span><br>
<span class="quotelev2">&gt; &gt;0(opal_progress+0x89) [0x2aaaab42b7d9]
</span><br>
<span class="quotelev2">&gt; &gt;[hpc1:25353] [ 5] /opt/openmpi131_cc/lib/openmpi/mca_pml_ob1.so  
</span><br>
<span class="quotelev2">&gt; &gt;[0x2aaaae34d27c]
</span><br>
<span class="quotelev2">&gt; &gt;[hpc1:25353] [ 6] /opt/openmpi131_cc/lib/libmpi.so.0(PMPI_Recv 
</span><br>
<span class="quotelev2">&gt; &gt;+0x210) [0x2aaaaaf46010]
</span><br>
<span class="quotelev2">&gt; &gt;[hpc1:25353] [ 7] /opt/openmpi131_cc/lib/libmpi_f77.so.0(mpi_recv 
</span><br>
<span class="quotelev2">&gt; &gt;+0xa4) [0x2aaaaacd6af4]
</span><br>
<span class="quotelev2">&gt; &gt;[hpc1:25353] [ 8] /opt/QE131_cc/bin/pw.x(parallel_toolkit_mp_zsqmred_ 
</span><br>
<span class="quotelev2">&gt; &gt;+0x13da) [0x513d8a]
</span><br>
<span class="quotelev2">&gt; &gt;[hpc1:25353] [ 9] /opt/QE131_cc/bin/pw.x(pcegterg_+0x6c3f) [0x6667ff]
</span><br>
<span class="quotelev2">&gt; &gt;[hpc1:25353] [10] /opt/QE131_cc/bin/pw.x(diag_bands_+0xb9e) [0x65654e]
</span><br>
<span class="quotelev2">&gt; &gt;[hpc1:25353] [11] /opt/QE131_cc/bin/pw.x(c_bands_+0x277) [0x6575a7]
</span><br>
<span class="quotelev2">&gt; &gt;[hpc1:25353] [12] /opt/QE131_cc/bin/pw.x(electrons_+0x53f) [0x58a54f]
</span><br>
<span class="quotelev2">&gt; &gt;[hpc1:25353] [13] /opt/QE131_cc/bin/pw.x(MAIN__+0x1fb) [0x458acb]
</span><br>
<span class="quotelev2">&gt; &gt;[hpc1:25353] [14] /opt/QE131_cc/bin/pw.x(main+0x3c) [0x4588bc]
</span><br>
<span class="quotelev2">&gt; &gt;[hpc1:25353] [15] /lib64/libc.so.6(__libc_start_main+0xf4)  
</span><br>
<span class="quotelev2">&gt; &gt;[0x303b21d8a4]
</span><br>
<span class="quotelev2">&gt; &gt;[hpc1:25353] [16] /opt/QE131_cc/bin/pw.x(realloc+0x1b9) [0x4587e9]
</span><br>
<span class="quotelev2">&gt; &gt;[hpc1:25353] *** End of error message ***
</span><br>
<span class="quotelev2">&gt; &gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;mpirun noticed that process rank 6 with PID 25353 on node hpc1  
</span><br>
<span class="quotelev2">&gt; &gt;exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev2">&gt; &gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What this stack trace tells us is that Open MPI crashed somewhere  
</span><br>
<span class="quotelev1">&gt; while trying to use shared memory for message passing, but it doesn't  
</span><br>
<span class="quotelev1">&gt; really tell us much else.  It's not clear, either, whether this is  
</span><br>
<span class="quotelev1">&gt; OMPI's fault or your app's fault (or something else).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you run your application through a memory-checking debugger to see  
</span><br>
<span class="quotelev1">&gt; if anything obvious pops out?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<li><strong>Next message:</strong> <a href="8352.php">Richard Treumann: "Re: [OMPI users] Any scientific application heavily	using	MPI_Barrier?"</a>
<li><strong>Previous message:</strong> <a href="8350.php">Ashley Pittman: "Re: [OMPI users] Any scientific application heavily using MPI_Barrier?"</a>
<li><strong>In reply to:</strong> <a href="8294.php">Jeff Squyres: "Re: [OMPI users] threading bug?"</a>
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
