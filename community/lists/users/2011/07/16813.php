<?
$subject_val = "Re: [OMPI users] Anyone with Visual Studio + MPI Experience";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  4 16:32:30 2011" -->
<!-- isoreceived="20110704203230" -->
<!-- sent="Mon, 4 Jul 2011 15:32:21 -0500" -->
<!-- isosent="20110704203221" -->
<!-- name="Miguel Vargas Felix" -->
<!-- email="miguelvargas_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Anyone with Visual Studio + MPI Experience" -->
<!-- id="241688503bd74cb9dd08d0c35d20abe4.squirrel_at_correo.cimat.mx" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="mailman.14.1309536032.5245.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Anyone with Visual Studio + MPI Experience<br>
<strong>From:</strong> Miguel Vargas Felix (<em>miguelvargas_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-04 16:32:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16814.php">Shiqing Fan: "Re: [OMPI users] Windows: msv*.dll files presence in Release build"</a>
<li><strong>Previous message:</strong> <a href="16812.php">Ning Li: "Re: [OMPI users] OpenMPI with NAG compiler and gcc 4.6"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/06/16793.php">Prentice Bisbal: "[OMPI users] Anyone with Visual Studio + MPI Experience"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16837.php">Prentice Bisbal: "Re: [OMPI users] Anyone with Visual Studio + MPI Experience"</a>
<li><strong>Reply:</strong> <a href="16837.php">Prentice Bisbal: "Re: [OMPI users] Anyone with Visual Studio + MPI Experience"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>well, I don't have a lot of experience with VS+MPI, but these are the
<br>
steps taht I followed to make my projects run:
<br>
<p>1. Select your project from the Solution explorer, right-click and select
<br>
&quot;Properties&quot;
<br>
<p>2. From the list on the left, select &quot;Debugging&quot;
<br>
<p>3. Set &quot;Debugger to launch&quot; to &quot;MPI Cluster Debugger&quot;
<br>
<p>4. Set &quot;MPIRun Command&quot; to the full path of your &quot;mpiexec&quot; (use quotes at
<br>
to enclose the path)
<br>
<p>5. Use &quot;MPIRun Arguments&quot; to set the number of processes to start, like
<br>
&quot;-n 4&quot;
<br>
<p>6. Set &quot;MPIRUN Working Directory&quot; if you need.
<br>
<p>7. &quot;Application Command&quot; normaly is &quot;$(TargetPath)&quot;
<br>
<p>8. &quot;Application Arguments&quot; if you need them.
<br>
<p>9. &quot;MPIShim Location&quot;, this is a triky one, for some reason some times VS
<br>
needs the full path for this VS tool. It is located at: &quot;C:\Program
<br>
Files\Microsoft Visual Studio 9.0\Common7\IDE\Remote
<br>
Debugger\x64\mpishim.exe&quot; or &quot;C:\Program Files\Microsoft Visual Studio
<br>
9.0\Common7\IDE\Remote Debugger\x86\mpishim.exe&quot; (use quotes at to enclose
<br>
the path).
<br>
<p>I haven't played with the other options.
<br>
<p>10. Close the dialog box.
<br>
<p>11. Set some breakpoints in your program.
<br>
<p>12. Ready to run.
<br>
<p>These instructions only work to debug MPI processes on the localhost, and
<br>
I only have tested VS+MPI using MPICH2 for Windows.
<br>
<p>To debug on several nodes you should install the Microsoft HPC SDK (I
<br>
haven't used it).
<br>
<p>Good luck.
<br>
<p>-Miguel
<br>
<p>PS. I use Visual Studio 2008 professional. Also, I know that MPI debugging
<br>
is not available in VS Express editions.
<br>
<p><p><span class="quotelev1">&gt; Does anyone on this list have experience using MS Visual Studio for MPI
</span><br>
<span class="quotelev1">&gt; development? I'm supporting a Windows user who has been doing Fortran
</span><br>
<span class="quotelev1">&gt; programming on Windows using an ANCIENT version of Digital Visual
</span><br>
<span class="quotelev1">&gt; Fortran (I know, I know - using &quot;ancient&quot; and &quot;Digital&quot; in the same
</span><br>
<span class="quotelev1">&gt; sentence is redundant.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Well, we are upgrading his equally ancient laptopa new one with Windows
</span><br>
<span class="quotelev1">&gt; 7, so we installed Intel Visual Fortran (direct descendent of DVF) and
</span><br>
<span class="quotelev1">&gt; Visual Studio 2010, and to be honest, I feel like a fish out of water
</span><br>
<span class="quotelev1">&gt; using VS 2010. It took me a longer than I care to admit to figure out
</span><br>
<span class="quotelev1">&gt; how to specify the include and linker paths.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Right now, I'm working with the Intel MPI libraries, but plan on
</span><br>
<span class="quotelev1">&gt; installing OpenMPI, too, once I figure out VS 2010.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can anyone tell me how to configure visual studio so that when you click
</span><br>
<span class="quotelev1">&gt; on the little &quot;play&quot; icon to build/run the code, it will call mpiexec
</span><br>
<span class="quotelev1">&gt; automatically? Right now, it compiles fine, but throws errors when the
</span><br>
<span class="quotelev1">&gt; program executes because it doesn't have the right environment setup
</span><br>
<span class="quotelev1">&gt; because it's not being executed by mpiexec. It runs fine when I execute
</span><br>
<span class="quotelev1">&gt; it with mpiexec or wmpiexec.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Prentice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16814.php">Shiqing Fan: "Re: [OMPI users] Windows: msv*.dll files presence in Release build"</a>
<li><strong>Previous message:</strong> <a href="16812.php">Ning Li: "Re: [OMPI users] OpenMPI with NAG compiler and gcc 4.6"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/06/16793.php">Prentice Bisbal: "[OMPI users] Anyone with Visual Studio + MPI Experience"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16837.php">Prentice Bisbal: "Re: [OMPI users] Anyone with Visual Studio + MPI Experience"</a>
<li><strong>Reply:</strong> <a href="16837.php">Prentice Bisbal: "Re: [OMPI users] Anyone with Visual Studio + MPI Experience"</a>
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
