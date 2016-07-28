<?
$subject_val = "Re: [OMPI users] Anyone with Visual Studio + MPI Experience";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  6 15:06:44 2011" -->
<!-- isoreceived="20110706190644" -->
<!-- sent="Wed, 06 Jul 2011 15:06:37 -0400" -->
<!-- isosent="20110706190637" -->
<!-- name="Prentice Bisbal" -->
<!-- email="prentice_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Anyone with Visual Studio + MPI Experience" -->
<!-- id="4E14B23D.5060003_at_ias.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="241688503bd74cb9dd08d0c35d20abe4.squirrel_at_correo.cimat.mx" -->
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
<strong>From:</strong> Prentice Bisbal (<em>prentice_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-06 15:06:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16838.php">Mohan, Ashwin: "[OMPI users] Run error"</a>
<li><strong>Previous message:</strong> <a href="16836.php">Jeff Squyres: "Re: [OMPI users] openmpi-1.5.2 installation problem"</a>
<li><strong>In reply to:</strong> <a href="16813.php">Miguel Vargas Felix: "Re: [OMPI users] Anyone with Visual Studio + MPI Experience"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16845.php">Miguel Vargas Felix: "Re: [OMPI users] Anyone with Visual Studio + MPI Experience"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Miguel,
<br>
<p>I'm using VS 2010 Professional + Intel Visual Fortran. I don't have the
<br>
&quot;Debugger to Launch&quot; option in my version (or I'm looking in the wrong
<br>
place), and don't see MPI options any where. Do you have any additional
<br>
software installed, like the HPC Pack 2008?
<br>
<p>Prentice
<br>
<p>On 07/04/2011 04:32 PM, Miguel Vargas Felix wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; well, I don't have a lot of experience with VS+MPI, but these are the
</span><br>
<span class="quotelev1">&gt; steps taht I followed to make my projects run:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. Select your project from the Solution explorer, right-click and select
</span><br>
<span class="quotelev1">&gt; &quot;Properties&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. From the list on the left, select &quot;Debugging&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3. Set &quot;Debugger to launch&quot; to &quot;MPI Cluster Debugger&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 4. Set &quot;MPIRun Command&quot; to the full path of your &quot;mpiexec&quot; (use quotes at
</span><br>
<span class="quotelev1">&gt; to enclose the path)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 5. Use &quot;MPIRun Arguments&quot; to set the number of processes to start, like
</span><br>
<span class="quotelev1">&gt; &quot;-n 4&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 6. Set &quot;MPIRUN Working Directory&quot; if you need.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 7. &quot;Application Command&quot; normaly is &quot;$(TargetPath)&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 8. &quot;Application Arguments&quot; if you need them.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 9. &quot;MPIShim Location&quot;, this is a triky one, for some reason some times VS
</span><br>
<span class="quotelev1">&gt; needs the full path for this VS tool. It is located at: &quot;C:\Program
</span><br>
<span class="quotelev1">&gt; Files\Microsoft Visual Studio 9.0\Common7\IDE\Remote
</span><br>
<span class="quotelev1">&gt; Debugger\x64\mpishim.exe&quot; or &quot;C:\Program Files\Microsoft Visual Studio
</span><br>
<span class="quotelev1">&gt; 9.0\Common7\IDE\Remote Debugger\x86\mpishim.exe&quot; (use quotes at to enclose
</span><br>
<span class="quotelev1">&gt; the path).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I haven't played with the other options.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 10. Close the dialog box.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 11. Set some breakpoints in your program.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 12. Ready to run.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; These instructions only work to debug MPI processes on the localhost, and
</span><br>
<span class="quotelev1">&gt; I only have tested VS+MPI using MPICH2 for Windows.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To debug on several nodes you should install the Microsoft HPC SDK (I
</span><br>
<span class="quotelev1">&gt; haven't used it).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Good luck.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Miguel
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; PS. I use Visual Studio 2008 professional. Also, I know that MPI debugging
</span><br>
<span class="quotelev1">&gt; is not available in VS Express editions.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Does anyone on this list have experience using MS Visual Studio for MPI
</span><br>
<span class="quotelev2">&gt;&gt; development? I'm supporting a Windows user who has been doing Fortran
</span><br>
<span class="quotelev2">&gt;&gt; programming on Windows using an ANCIENT version of Digital Visual
</span><br>
<span class="quotelev2">&gt;&gt; Fortran (I know, I know - using &quot;ancient&quot; and &quot;Digital&quot; in the same
</span><br>
<span class="quotelev2">&gt;&gt; sentence is redundant.)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Well, we are upgrading his equally ancient laptopa new one with Windows
</span><br>
<span class="quotelev2">&gt;&gt; 7, so we installed Intel Visual Fortran (direct descendent of DVF) and
</span><br>
<span class="quotelev2">&gt;&gt; Visual Studio 2010, and to be honest, I feel like a fish out of water
</span><br>
<span class="quotelev2">&gt;&gt; using VS 2010. It took me a longer than I care to admit to figure out
</span><br>
<span class="quotelev2">&gt;&gt; how to specify the include and linker paths.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Right now, I'm working with the Intel MPI libraries, but plan on
</span><br>
<span class="quotelev2">&gt;&gt; installing OpenMPI, too, once I figure out VS 2010.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can anyone tell me how to configure visual studio so that when you click
</span><br>
<span class="quotelev2">&gt;&gt; on the little &quot;play&quot; icon to build/run the code, it will call mpiexec
</span><br>
<span class="quotelev2">&gt;&gt; automatically? Right now, it compiles fine, but throws errors when the
</span><br>
<span class="quotelev2">&gt;&gt; program executes because it doesn't have the right environment setup
</span><br>
<span class="quotelev2">&gt;&gt; because it's not being executed by mpiexec. It runs fine when I execute
</span><br>
<span class="quotelev2">&gt;&gt; it with mpiexec or wmpiexec.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Prentice
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16838.php">Mohan, Ashwin: "[OMPI users] Run error"</a>
<li><strong>Previous message:</strong> <a href="16836.php">Jeff Squyres: "Re: [OMPI users] openmpi-1.5.2 installation problem"</a>
<li><strong>In reply to:</strong> <a href="16813.php">Miguel Vargas Felix: "Re: [OMPI users] Anyone with Visual Studio + MPI Experience"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16845.php">Miguel Vargas Felix: "Re: [OMPI users] Anyone with Visual Studio + MPI Experience"</a>
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
