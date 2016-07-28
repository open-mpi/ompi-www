<?
$subject_val = "Re: [OMPI users] Fortran support on Windows Open-MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 10 16:32:49 2010" -->
<!-- isoreceived="20100510203249" -->
<!-- sent="Mon, 10 May 2010 22:33:53 +0200" -->
<!-- isosent="20100510203353" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fortran support on Windows Open-MPI" -->
<!-- id="4BE86DB1.3060402_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4BE867C0.3050304_at_khubla.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fortran support on Windows Open-MPI<br>
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-10 16:33:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13005.php">Damien: "Re: [OMPI users] Fortran support on Windows Open-MPI"</a>
<li><strong>Previous message:</strong> <a href="13003.php">Damien: "Re: [OMPI users] Fortran support on Windows Open-MPI"</a>
<li><strong>In reply to:</strong> <a href="13003.php">Damien: "Re: [OMPI users] Fortran support on Windows Open-MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13005.php">Damien: "Re: [OMPI users] Fortran support on Windows Open-MPI"</a>
<li><strong>Reply:</strong> <a href="13005.php">Damien: "Re: [OMPI users] Fortran support on Windows Open-MPI"</a>
<li><strong>Reply:</strong> <a href="13006.php">Damien: "Re: [OMPI users] Fortran support on Windows Open-MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Damien,
<br>
<p>That's a known problem. see this ticket 
<br>
<a href="https://svn.open-mpi.org/trac/ompi/ticket/2404">https://svn.open-mpi.org/trac/ompi/ticket/2404</a> . It will be applied into 
<br>
1.5 branch very soon. But if you apply the patch by yourself, it should 
<br>
also work.
<br>
<p>Thanks,
<br>
Shiqing
<br>
<p><p>On 2010-5-10 10:08 PM, Damien wrote:
<br>
<span class="quotelev1">&gt; Interesting.  If I add the Fortran compiler as a new entry through the 
</span><br>
<span class="quotelev1">&gt; GUI, CMake wipes it.  If I use the option to specify the compiler 
</span><br>
<span class="quotelev1">&gt; paths manually on Configure, I can add the Fortran compiler in that 
</span><br>
<span class="quotelev1">&gt; way and it works.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then there's a compiler error.  In 
</span><br>
<span class="quotelev1">&gt; orte\mca\odls\process\odls_process_module.c, right at the top, there's
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; static bool odls_process_child_died( pid_t pid, unsigned int timeout,
</span><br>
<span class="quotelev1">&gt;                                      int* exit_status )
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     int error;
</span><br>
<span class="quotelev1">&gt;     HANDLE handle = OpenProcess( PROCESS_TERMINATE | SYNCHRONIZE, FALSE,
</span><br>
<span class="quotelev1">&gt;                                  (DWORD)pid );
</span><br>
<span class="quotelev1">&gt;     if( 0 == child-&gt;pid || INVALID_HANDLE_VALUE == handle ) {
</span><br>
<span class="quotelev1">&gt;         error = GetLastError();
</span><br>
<span class="quotelev1">&gt;         /* Let's suppose that the process dissapear ... by now */
</span><br>
<span class="quotelev1">&gt;         return true;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;     CloseHandle(handle);
</span><br>
<span class="quotelev1">&gt;     /* The child didn't die, so return false */
</span><br>
<span class="quotelev1">&gt;     return false;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This line &quot;0 == child-&gt;pid&quot; causes a compiler error that tanks the 
</span><br>
<span class="quotelev1">&gt; build, because child doesn't exist in that scope.  Should that just be 
</span><br>
<span class="quotelev1">&gt; &quot;0 == pid&quot;, seeing as pid is the argument passed to the function 
</span><br>
<span class="quotelev1">&gt; anyway?  The build seems fine with this fix.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Finally, there's an installation error on mpi_portable_platform.h.  
</span><br>
<span class="quotelev1">&gt; That file isn't generated as part of the build, and the installation 
</span><br>
<span class="quotelev1">&gt; command is around line 150 of ompi/CMakeLists.txt.  If you comment out 
</span><br>
<span class="quotelev1">&gt; the installation of that file the installation works correctly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I used the 1.5a1r23092 snapshot for this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now to make sure it works...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Damien
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 10/05/2010 4:50 AM, Shiqing Fan wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Normally, that means a wrong path or incompatible compiler version, 
</span><br>
<span class="quotelev2">&gt;&gt; e.g. 32 bit vs 64 bit.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Shiqing
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 2010-5-7 6:54 PM, Damien wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nd 2.8.1.  In the CMake GUI, I checked the OMPI_WANT_F77_BINDINGS 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; option, and added a FilePath for CMAKE_Fortran_COMPILER of 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; C:/Program Files (x86)/Intel/Compiler/11.1/065/bin/ia32/ifort.exe.  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When I re-run the Configure, CMake wipes the CMAKE_Fortran_COMPILER 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; variable and complains about a missing Fortran compiler.  Any 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; suggestions? 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<p><p><pre>
-- 
--------------------------------------------------------------
Shiqing Fan                          <a href="http://www.hlrs.de/people/fan">http://www.hlrs.de/people/fan</a>
High Performance Computing           Tel.: +49 711 685 87234
   Center Stuttgart (HLRS)            Fax.: +49 711 685 65832
Address:Allmandring 30               email: fan_at_[hidden]
70569 Stuttgart
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13005.php">Damien: "Re: [OMPI users] Fortran support on Windows Open-MPI"</a>
<li><strong>Previous message:</strong> <a href="13003.php">Damien: "Re: [OMPI users] Fortran support on Windows Open-MPI"</a>
<li><strong>In reply to:</strong> <a href="13003.php">Damien: "Re: [OMPI users] Fortran support on Windows Open-MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13005.php">Damien: "Re: [OMPI users] Fortran support on Windows Open-MPI"</a>
<li><strong>Reply:</strong> <a href="13005.php">Damien: "Re: [OMPI users] Fortran support on Windows Open-MPI"</a>
<li><strong>Reply:</strong> <a href="13006.php">Damien: "Re: [OMPI users] Fortran support on Windows Open-MPI"</a>
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
