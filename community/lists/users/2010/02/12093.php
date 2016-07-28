<?
$subject_val = "Re: [OMPI users] Segmentation fault with plenty of RAM";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 16 22:40:41 2010" -->
<!-- isoreceived="20100217034041" -->
<!-- sent="Tue, 16 Feb 2010 22:40:35 -0500" -->
<!-- isosent="20100217034035" -->
<!-- name="Christopher O'Brien" -->
<!-- email="cjobrien_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault with plenty of RAM" -->
<!-- id="25DD61BF-1A20-4BAD-861F-07791101886B_at_unity.ncsu.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4925_1266359173_o1GMPtJA015185_COL117-DS2067B73507D41807C7C9E1E9490_at_phx.gbl" -->
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
<strong>From:</strong> Christopher O'Brien (<em>cjobrien_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-16 22:40:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12094.php">Michael Hofmann: "[OMPI users] Bug: non-root processes use receive-type in ompi_coll_tuned_gather_intra_binomial"</a>
<li><strong>Previous message:</strong> <a href="12092.php">Trent Creekmore: "Re: [OMPI users] Segmentation fault with plenty of RAM"</a>
<li><strong>Maybe in reply to:</strong> <a href="12091.php">Christopher O'Brien: "[OMPI users] Segmentation fault with plenty of RAM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12108.php">George Bosilca: "Re: [OMPI users] Segmentation fault with plenty of RAM"</a>
<li><strong>Reply:</strong> <a href="12108.php">George Bosilca: "Re: [OMPI users] Segmentation fault with plenty of RAM"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Trent,
<br>
Thanks for the prompt reply and advice. 
<br>
I had made a similar post similar on the Quantum-Espresso help forum and received some helpful advice. It turns out that the problem is not in libSystem.B.dylib (this a Mac system library); The cause of the error was due to using the Mac system LAPACK and BLAS shared libraries. I had to build my own and link to those. It may have to do with using GFORTRAN to compile the program rather than Mac's GCC (which does not have FORTRAN support). 
<br>
<p>Oh well, I guess I leaned much more about making programs on BSD today...
<br>
<p>Regards,
<br>
Chris
<br>
<p>On Feb 16, 2010, at 5:23 PM, Trent Creekmore wrote:
<br>
<p><span class="quotelev1">&gt; Christopher,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Segmentation faults has nothing to do with amount of memory you have in your
</span><br>
<span class="quotelev1">&gt; system.
</span><br>
<span class="quotelev1">&gt; Rather is has to do with memory access. A segmentation fault occurs as a
</span><br>
<span class="quotelev1">&gt; result of the program trying to access outside the bounds of memory
</span><br>
<span class="quotelev1">&gt; locations that have been set aside for storage at compile time.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; These are usually caused by programmer error in the code. libSystem.B.dylib
</span><br>
<span class="quotelev1">&gt; could possibly have a bug in it, in which the developers of it either know
</span><br>
<span class="quotelev1">&gt; and about and have fixed it, in the process of fixing it, or need to know
</span><br>
<span class="quotelev1">&gt; about it. You may want to try to get the latest version of it before you
</span><br>
<span class="quotelev1">&gt; look further. Though I am new to OpenMPI myself and really have not had a
</span><br>
<span class="quotelev1">&gt; chance to really dig into it yet, the problem could be elsewhere besides in
</span><br>
<span class="quotelev1">&gt; libSystem.B.dylib.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But hopefully someone else here has had similar experience and knows exactly
</span><br>
<span class="quotelev1">&gt; what to do. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you had a shortage of memory, the OS would start doing more and page
</span><br>
<span class="quotelev1">&gt; swaps on the &quot;swap drive&quot; and you would notice this by the system getting
</span><br>
<span class="quotelev1">&gt; painfully slow.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Trent
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt; Behalf Of Christopher O'Brien
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, February 16, 2010 8:33 AM
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] Segmentation fault with plenty of RAM
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To all,
</span><br>
<span class="quotelev1">&gt; I am trying to start work with Quantum Espresso (www.quantum_espresso.org)
</span><br>
<span class="quotelev1">&gt; on my MacBook Pro (running 10.6.2 with 64-bit kernel extensions enabled)
</span><br>
<span class="quotelev1">&gt; using 2GB of ram and an Intel Core2 Duo. Keep in mind that I am not really
</span><br>
<span class="quotelev1">&gt; an expert and I have a very bad track record in compiling applications.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I received no errors when compiling the latest versions of FFTW, openmpi,
</span><br>
<span class="quotelev1">&gt; and lapack (which were found by QE's configure program). I ran the basic
</span><br>
<span class="quotelev1">&gt; Openmpi tests included with the distribution, and found no problems. I have
</span><br>
<span class="quotelev1">&gt; modified my path to use the MPI compiler wrappers that I compiled, as Mac's
</span><br>
<span class="quotelev1">&gt; built in openmpi does not have F90/F77 support.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Someone reported a similar problem to the error reported below on this forum
</span><br>
<span class="quotelev1">&gt; (<a href="http://www.open-mpi.org/community/lists/users/2008/08/6348.php">http://www.open-mpi.org/community/lists/users/2008/08/6348.php</a>) but it may
</span><br>
<span class="quotelev1">&gt; or not be relevant. The problem does not seem to be in one executable of the
</span><br>
<span class="quotelev1">&gt; package ('bands.x') exclusively, but libSystem.B.dylib always seems to be in
</span><br>
<span class="quotelev1">&gt; the middle of things.  However, I tracked the memory usage but the example
</span><br>
<span class="quotelev1">&gt; never used more than 40MB.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The error message resulting from &quot;example01&quot; follows:
</span><br>
<span class="quotelev1">&gt; running the symmetry analysis for Si bands...[schrodingersdog:00322] ***
</span><br>
<span class="quotelev1">&gt; Process received signal ***
</span><br>
<span class="quotelev1">&gt; [schrodingersdog:00322] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [schrodingersdog:00322] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [schrodingersdog:00322] Failing at address: 0x698d3230
</span><br>
<span class="quotelev1">&gt; [schrodingersdog:00322] [ 0] 2   libSystem.B.dylib
</span><br>
<span class="quotelev1">&gt; 0x00007fff87248eaa _sigtramp + 26
</span><br>
<span class="quotelev1">&gt; [schrodingersdog:00322] [ 1] 3   ???
</span><br>
<span class="quotelev1">&gt; 0x00000001013fc080 0x0 + 4315922560
</span><br>
<span class="quotelev1">&gt; [schrodingersdog:00322] [ 2] 4   bands.x
</span><br>
<span class="quotelev1">&gt; 0x000000010003d3ed sym_band_ + 7597
</span><br>
<span class="quotelev1">&gt; [schrodingersdog:00322] [ 3] 5   bands.x
</span><br>
<span class="quotelev1">&gt; 0x00000001000014f5 MAIN__ + 1317
</span><br>
<span class="quotelev1">&gt; [schrodingersdog:00322] [ 4] 6   bands.x
</span><br>
<span class="quotelev1">&gt; 0x0000000100001a01 main + 33
</span><br>
<span class="quotelev1">&gt; [schrodingersdog:00322] [ 5] 7   bands.x
</span><br>
<span class="quotelev1">&gt; 0x0000000100000fa4 start + 52
</span><br>
<span class="quotelev1">&gt; [schrodingersdog:00322] [ 6] 8   ???
</span><br>
<span class="quotelev1">&gt; 0x0000000000000001 0x0 + 1
</span><br>
<span class="quotelev1">&gt; [schrodingersdog:00322] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; ./run_example: line 77:   322 Segmentation fault      $BANDS_COMMAND &lt;
</span><br>
<span class="quotelev1">&gt; si.bands.in &gt; si.bands.out
</span><br>
<span class="quotelev1">&gt; done
</span><br>
<span class="quotelev1">&gt; cleaning /Users/ChrisOBrien/tmp... done
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance,
</span><br>
<span class="quotelev1">&gt; Chris
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; Christopher J. O'Brien
</span><br>
<span class="quotelev1">&gt; cjobrien_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www4.ncsu.edu/~cjobrien/index.html">http://www4.ncsu.edu/~cjobrien/index.html</a>
</span><br>
<span class="quotelev1">&gt; See what I'm citing at <a href="http://www.citeulike.org/cjo123">http://www.citeulike.org/cjo123</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Graduate Research Assistant
</span><br>
<span class="quotelev1">&gt; Computational Materials Group
</span><br>
<span class="quotelev1">&gt; Department of Materials Science &amp; Engineering
</span><br>
<span class="quotelev1">&gt; North Carolina State University
</span><br>
<span class="quotelev1">&gt; _______________________________________________________________________
</span><br>
<span class="quotelev1">&gt; Please send all attachments in PDF, HTML, RTF, TXT, ODF, DVI or PS. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For Word documents: Please use the 'Save as PDF' option before sending.
</span><br>
<span class="quotelev1">&gt; =======================================================================
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
<li><strong>Next message:</strong> <a href="12094.php">Michael Hofmann: "[OMPI users] Bug: non-root processes use receive-type in ompi_coll_tuned_gather_intra_binomial"</a>
<li><strong>Previous message:</strong> <a href="12092.php">Trent Creekmore: "Re: [OMPI users] Segmentation fault with plenty of RAM"</a>
<li><strong>Maybe in reply to:</strong> <a href="12091.php">Christopher O'Brien: "[OMPI users] Segmentation fault with plenty of RAM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12108.php">George Bosilca: "Re: [OMPI users] Segmentation fault with plenty of RAM"</a>
<li><strong>Reply:</strong> <a href="12108.php">George Bosilca: "Re: [OMPI users] Segmentation fault with plenty of RAM"</a>
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
