<?
$subject_val = "Re: [OMPI users] Fortran support on Windows Open-MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 10 16:08:42 2010" -->
<!-- isoreceived="20100510200842" -->
<!-- sent="Mon, 10 May 2010 14:08:32 -0600" -->
<!-- isosent="20100510200832" -->
<!-- name="Damien" -->
<!-- email="damien_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fortran support on Windows Open-MPI" -->
<!-- id="4BE867C0.3050304_at_khubla.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4BE7E4E9.80101_at_hlrs.de" -->
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
<strong>From:</strong> Damien (<em>damien_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-10 16:08:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13004.php">Shiqing Fan: "Re: [OMPI users] Fortran support on Windows Open-MPI"</a>
<li><strong>Previous message:</strong> <a href="13002.php">Prentice Bisbal: "Re: [OMPI users] PGI problems"</a>
<li><strong>In reply to:</strong> <a href="12990.php">Shiqing Fan: "Re: [OMPI users] Fortran support on Windows Open-MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13004.php">Shiqing Fan: "Re: [OMPI users] Fortran support on Windows Open-MPI"</a>
<li><strong>Reply:</strong> <a href="13004.php">Shiqing Fan: "Re: [OMPI users] Fortran support on Windows Open-MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Interesting.  If I add the Fortran compiler as a new entry through the 
<br>
GUI, CMake wipes it.  If I use the option to specify the compiler paths 
<br>
manually on Configure, I can add the Fortran compiler in that way and it 
<br>
works.
<br>
<p>Then there's a compiler error.  In 
<br>
orte\mca\odls\process\odls_process_module.c, right at the top, there's
<br>
<p>static bool odls_process_child_died( pid_t pid, unsigned int timeout,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int* exit_status )
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int error;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HANDLE handle = OpenProcess( PROCESS_TERMINATE | SYNCHRONIZE, FALSE,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(DWORD)pid );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if( 0 == child-&gt;pid || INVALID_HANDLE_VALUE == handle ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;error = GetLastError();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Let's suppose that the process dissapear ... by now */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return true;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CloseHandle(handle);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* The child didn't die, so return false */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return false;
<br>
}
<br>
<p>This line &quot;0 == child-&gt;pid&quot; causes a compiler error that tanks the 
<br>
build, because child doesn't exist in that scope.  Should that just be 
<br>
&quot;0 == pid&quot;, seeing as pid is the argument passed to the function 
<br>
anyway?  The build seems fine with this fix.
<br>
<p>Finally, there's an installation error on mpi_portable_platform.h.  That 
<br>
file isn't generated as part of the build, and the installation command 
<br>
is around line 150 of ompi/CMakeLists.txt.  If you comment out the 
<br>
installation of that file the installation works correctly.
<br>
<p>I used the 1.5a1r23092 snapshot for this.
<br>
<p>Now to make sure it works...
<br>
<p>Damien
<br>
<p>On 10/05/2010 4:50 AM, Shiqing Fan wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Normally, that means a wrong path or incompatible compiler version, 
</span><br>
<span class="quotelev1">&gt; e.g. 32 bit vs 64 bit.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Shiqing
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2010-5-7 6:54 PM, Damien wrote:
</span><br>
<span class="quotelev2">&gt;&gt; nd 2.8.1.  In the CMake GUI, I checked the OMPI_WANT_F77_BINDINGS 
</span><br>
<span class="quotelev2">&gt;&gt; option, and added a FilePath for CMAKE_Fortran_COMPILER of C:/Program 
</span><br>
<span class="quotelev2">&gt;&gt; Files (x86)/Intel/Compiler/11.1/065/bin/ia32/ifort.exe.  When I 
</span><br>
<span class="quotelev2">&gt;&gt; re-run the Configure, CMake wipes the CMAKE_Fortran_COMPILER variable 
</span><br>
<span class="quotelev2">&gt;&gt; and complains about a missing Fortran compiler.  Any suggestions? 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13004.php">Shiqing Fan: "Re: [OMPI users] Fortran support on Windows Open-MPI"</a>
<li><strong>Previous message:</strong> <a href="13002.php">Prentice Bisbal: "Re: [OMPI users] PGI problems"</a>
<li><strong>In reply to:</strong> <a href="12990.php">Shiqing Fan: "Re: [OMPI users] Fortran support on Windows Open-MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13004.php">Shiqing Fan: "Re: [OMPI users] Fortran support on Windows Open-MPI"</a>
<li><strong>Reply:</strong> <a href="13004.php">Shiqing Fan: "Re: [OMPI users] Fortran support on Windows Open-MPI"</a>
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
