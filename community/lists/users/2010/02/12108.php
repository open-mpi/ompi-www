<?
$subject_val = "Re: [OMPI users] Segmentation fault with plenty of RAM";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 19 09:22:04 2010" -->
<!-- isoreceived="20100219142204" -->
<!-- sent="Fri, 19 Feb 2010 09:21:53 -0500" -->
<!-- isosent="20100219142153" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault with plenty of RAM" -->
<!-- id="7E9BFD42-E29F-442B-93A5-E72804924CAC_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="25DD61BF-1A20-4BAD-861F-07791101886B_at_unity.ncsu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segmentation fault with plenty of RAM<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-19 09:21:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12109.php">Eugene Loh: "[OMPI users] password-less ssh"</a>
<li><strong>Previous message:</strong> <a href="12107.php">Mathieu Gontier: "Re: [OMPI users] random MPI_UNIVERSE_SIZE and inter-commicator	created by MPI_Comm_spawn"</a>
<li><strong>In reply to:</strong> <a href="12093.php">Christopher O'Brien: "Re: [OMPI users] Segmentation fault with plenty of RAM"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Chris,
<br>
<p>I'm puzzled by the fact that the problem might come from the gfortran compiler. I use it daily on my MAC, with LAPACK and BLAS, and so far I didn't has any strange problems. If it can help I use the gfortran precompiler compiler from MAC HPC (<a href="http://hpc.sourceforge.net/">http://hpc.sourceforge.net/</a>).
<br>
<p>I might have another hint on this. I had similar errors in the past, due to a mismatch between the version of Open MPI used for linking and the one used at runtime. The MAC compiler don't play by the same rules as the normal gcc. The order in which the libraries are linked in your application is slightly different (system libraries have priority). As all 10.5 version Leopard contain a version of Open MPI you have to make sure that the Open MPI library you compile against is the one used at runtime. For this purpose you can use the &quot;otool -L&quot; (similar to ldd on Linux) to see which Open MPI library you linked against (the one you compiler or the one provided by the OS), and then check your $PATH to make sure you use the corresponding executables (mpicc, mpirun and orted).
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Feb 16, 2010, at 22:40 , Christopher O'Brien wrote:
<br>
<p><span class="quotelev1">&gt; Trent,
</span><br>
<span class="quotelev1">&gt; Thanks for the prompt reply and advice. 
</span><br>
<span class="quotelev1">&gt; I had made a similar post similar on the Quantum-Espresso help forum and received some helpful advice. It turns out that the problem is not in libSystem.B.dylib (this a Mac system library); The cause of the error was due to using the Mac system LAPACK and BLAS shared libraries. I had to build my own and link to those. It may have to do with using GFORTRAN to compile the program rather than Mac's GCC (which does not have FORTRAN support). 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Oh well, I guess I leaned much more about making programs on BSD today...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Chris
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 16, 2010, at 5:23 PM, Trent Creekmore wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Christopher,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Segmentation faults has nothing to do with amount of memory you have in your
</span><br>
<span class="quotelev2">&gt;&gt; system.
</span><br>
<span class="quotelev2">&gt;&gt; Rather is has to do with memory access. A segmentation fault occurs as a
</span><br>
<span class="quotelev2">&gt;&gt; result of the program trying to access outside the bounds of memory
</span><br>
<span class="quotelev2">&gt;&gt; locations that have been set aside for storage at compile time.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; These are usually caused by programmer error in the code. libSystem.B.dylib
</span><br>
<span class="quotelev2">&gt;&gt; could possibly have a bug in it, in which the developers of it either know
</span><br>
<span class="quotelev2">&gt;&gt; and about and have fixed it, in the process of fixing it, or need to know
</span><br>
<span class="quotelev2">&gt;&gt; about it. You may want to try to get the latest version of it before you
</span><br>
<span class="quotelev2">&gt;&gt; look further. Though I am new to OpenMPI myself and really have not had a
</span><br>
<span class="quotelev2">&gt;&gt; chance to really dig into it yet, the problem could be elsewhere besides in
</span><br>
<span class="quotelev2">&gt;&gt; libSystem.B.dylib.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; But hopefully someone else here has had similar experience and knows exactly
</span><br>
<span class="quotelev2">&gt;&gt; what to do. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If you had a shortage of memory, the OS would start doing more and page
</span><br>
<span class="quotelev2">&gt;&gt; swaps on the &quot;swap drive&quot; and you would notice this by the system getting
</span><br>
<span class="quotelev2">&gt;&gt; painfully slow.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Trent
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev2">&gt;&gt; Behalf Of Christopher O'Brien
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Tuesday, February 16, 2010 8:33 AM
</span><br>
<span class="quotelev2">&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [OMPI users] Segmentation fault with plenty of RAM
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; To all,
</span><br>
<span class="quotelev2">&gt;&gt; I am trying to start work with Quantum Espresso (www.quantum_espresso.org)
</span><br>
<span class="quotelev2">&gt;&gt; on my MacBook Pro (running 10.6.2 with 64-bit kernel extensions enabled)
</span><br>
<span class="quotelev2">&gt;&gt; using 2GB of ram and an Intel Core2 Duo. Keep in mind that I am not really
</span><br>
<span class="quotelev2">&gt;&gt; an expert and I have a very bad track record in compiling applications.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I received no errors when compiling the latest versions of FFTW, openmpi,
</span><br>
<span class="quotelev2">&gt;&gt; and lapack (which were found by QE's configure program). I ran the basic
</span><br>
<span class="quotelev2">&gt;&gt; Openmpi tests included with the distribution, and found no problems. I have
</span><br>
<span class="quotelev2">&gt;&gt; modified my path to use the MPI compiler wrappers that I compiled, as Mac's
</span><br>
<span class="quotelev2">&gt;&gt; built in openmpi does not have F90/F77 support.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Someone reported a similar problem to the error reported below on this forum
</span><br>
<span class="quotelev2">&gt;&gt; (<a href="http://www.open-mpi.org/community/lists/users/2008/08/6348.php">http://www.open-mpi.org/community/lists/users/2008/08/6348.php</a>) but it may
</span><br>
<span class="quotelev2">&gt;&gt; or not be relevant. The problem does not seem to be in one executable of the
</span><br>
<span class="quotelev2">&gt;&gt; package ('bands.x') exclusively, but libSystem.B.dylib always seems to be in
</span><br>
<span class="quotelev2">&gt;&gt; the middle of things.  However, I tracked the memory usage but the example
</span><br>
<span class="quotelev2">&gt;&gt; never used more than 40MB.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The error message resulting from &quot;example01&quot; follows:
</span><br>
<span class="quotelev2">&gt;&gt; running the symmetry analysis for Si bands...[schrodingersdog:00322] ***
</span><br>
<span class="quotelev2">&gt;&gt; Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [schrodingersdog:00322] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt; [schrodingersdog:00322] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt;&gt; [schrodingersdog:00322] Failing at address: 0x698d3230
</span><br>
<span class="quotelev2">&gt;&gt; [schrodingersdog:00322] [ 0] 2   libSystem.B.dylib
</span><br>
<span class="quotelev2">&gt;&gt; 0x00007fff87248eaa _sigtramp + 26
</span><br>
<span class="quotelev2">&gt;&gt; [schrodingersdog:00322] [ 1] 3   ???
</span><br>
<span class="quotelev2">&gt;&gt; 0x00000001013fc080 0x0 + 4315922560
</span><br>
<span class="quotelev2">&gt;&gt; [schrodingersdog:00322] [ 2] 4   bands.x
</span><br>
<span class="quotelev2">&gt;&gt; 0x000000010003d3ed sym_band_ + 7597
</span><br>
<span class="quotelev2">&gt;&gt; [schrodingersdog:00322] [ 3] 5   bands.x
</span><br>
<span class="quotelev2">&gt;&gt; 0x00000001000014f5 MAIN__ + 1317
</span><br>
<span class="quotelev2">&gt;&gt; [schrodingersdog:00322] [ 4] 6   bands.x
</span><br>
<span class="quotelev2">&gt;&gt; 0x0000000100001a01 main + 33
</span><br>
<span class="quotelev2">&gt;&gt; [schrodingersdog:00322] [ 5] 7   bands.x
</span><br>
<span class="quotelev2">&gt;&gt; 0x0000000100000fa4 start + 52
</span><br>
<span class="quotelev2">&gt;&gt; [schrodingersdog:00322] [ 6] 8   ???
</span><br>
<span class="quotelev2">&gt;&gt; 0x0000000000000001 0x0 + 1
</span><br>
<span class="quotelev2">&gt;&gt; [schrodingersdog:00322] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt; ./run_example: line 77:   322 Segmentation fault      $BANDS_COMMAND &lt;
</span><br>
<span class="quotelev2">&gt;&gt; si.bands.in &gt; si.bands.out
</span><br>
<span class="quotelev2">&gt;&gt; done
</span><br>
<span class="quotelev2">&gt;&gt; cleaning /Users/ChrisOBrien/tmp... done
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance,
</span><br>
<span class="quotelev2">&gt;&gt; Chris
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ===================================================================
</span><br>
<span class="quotelev2">&gt;&gt; Christopher J. O'Brien
</span><br>
<span class="quotelev2">&gt;&gt; cjobrien_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www4.ncsu.edu/~cjobrien/index.html">http://www4.ncsu.edu/~cjobrien/index.html</a>
</span><br>
<span class="quotelev2">&gt;&gt; See what I'm citing at <a href="http://www.citeulike.org/cjo123">http://www.citeulike.org/cjo123</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Graduate Research Assistant
</span><br>
<span class="quotelev2">&gt;&gt; Computational Materials Group
</span><br>
<span class="quotelev2">&gt;&gt; Department of Materials Science &amp; Engineering
</span><br>
<span class="quotelev2">&gt;&gt; North Carolina State University
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; Please send all attachments in PDF, HTML, RTF, TXT, ODF, DVI or PS. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; For Word documents: Please use the 'Save as PDF' option before sending.
</span><br>
<span class="quotelev2">&gt;&gt; =======================================================================
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
<li><strong>Next message:</strong> <a href="12109.php">Eugene Loh: "[OMPI users] password-less ssh"</a>
<li><strong>Previous message:</strong> <a href="12107.php">Mathieu Gontier: "Re: [OMPI users] random MPI_UNIVERSE_SIZE and inter-commicator	created by MPI_Comm_spawn"</a>
<li><strong>In reply to:</strong> <a href="12093.php">Christopher O'Brien: "Re: [OMPI users] Segmentation fault with plenty of RAM"</a>
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
