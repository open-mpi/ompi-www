<?
$subject_val = "Re: [OMPI users] Anyone with Visual Studio + MPI Experience";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  7 13:47:49 2011" -->
<!-- isoreceived="20110707174749" -->
<!-- sent="Thu, 7 Jul 2011 12:47:38 -0500" -->
<!-- isosent="20110707174738" -->
<!-- name="Miguel Vargas Felix" -->
<!-- email="miguelvargas_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Anyone with Visual Studio + MPI Experience" -->
<!-- id="f8266058795f51d4fad912312754f38d.squirrel_at_correo.cimat.mx" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="mailman.12.1310054405.18954.users_at_open-mpi.org" -->
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
<strong>Date:</strong> 2011-07-07 13:47:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16846.php">Prentice Bisbal: "Re: [OMPI users] Anyone with Visual Studio + MPI Experience"</a>
<li><strong>Previous message:</strong> <a href="16844.php">Reuti: "Re: [OMPI users] Error using hostfile"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/06/16793.php">Prentice Bisbal: "[OMPI users] Anyone with Visual Studio + MPI Experience"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16846.php">Prentice Bisbal: "Re: [OMPI users] Anyone with Visual Studio + MPI Experience"</a>
<li><strong>Reply:</strong> <a href="16846.php">Prentice Bisbal: "Re: [OMPI users] Anyone with Visual Studio + MPI Experience"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Prentice,
<br>
<p>I didn't have to install the HPC Pack, as far as I know it is only needed
<br>
when you want to develop/debug in a cluster. I'm sorry I can't help you
<br>
with VS 2010 (I hated it, I switched back to VS 2008), but the
<br>
instructions to configure VS 2010 seems to be similar, check the MPICH2
<br>
guide for Windows developers.
<br>
<p><a href="http://www.mcs.anl.gov/research/projects/mpich2/documentation/files/mpich2-1.3.2-windevguide.pdf">http://www.mcs.anl.gov/research/projects/mpich2/documentation/files/mpich2-1.3.2-windevguide.pdf</a>
<br>
<p>May be this option is not available for Visual Fortran.
<br>
<p>-Miguel
<br>
<p><span class="quotelev1">&gt; Miguel,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm using VS 2010 Professional + Intel Visual Fortran. I don't have the
</span><br>
<span class="quotelev1">&gt; &quot;Debugger to Launch&quot; option in my version (or I'm looking in the wrong
</span><br>
<span class="quotelev1">&gt; place), and don't see MPI options any where. Do you have any additional
</span><br>
<span class="quotelev1">&gt; software installed, like the HPC Pack 2008?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Prentice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 07/04/2011 04:32 PM, Miguel Vargas Felix wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; well, I don't have a lot of experience with VS+MPI, but these are the
</span><br>
<span class="quotelev2">&gt;&gt; steps taht I followed to make my projects run:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. Select your project from the Solution explorer, right-click and
</span><br>
<span class="quotelev2">&gt;&gt; select
</span><br>
<span class="quotelev2">&gt;&gt; &quot;Properties&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. From the list on the left, select &quot;Debugging&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 3. Set &quot;Debugger to launch&quot; to &quot;MPI Cluster Debugger&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 4. Set &quot;MPIRun Command&quot; to the full path of your &quot;mpiexec&quot; (use quotes
</span><br>
<span class="quotelev2">&gt;&gt; at
</span><br>
<span class="quotelev2">&gt;&gt; to enclose the path)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 5. Use &quot;MPIRun Arguments&quot; to set the number of processes to start, like
</span><br>
<span class="quotelev2">&gt;&gt; &quot;-n 4&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 6. Set &quot;MPIRUN Working Directory&quot; if you need.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 7. &quot;Application Command&quot; normaly is &quot;$(TargetPath)&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 8. &quot;Application Arguments&quot; if you need them.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 9. &quot;MPIShim Location&quot;, this is a triky one, for some reason some times
</span><br>
<span class="quotelev2">&gt;&gt; VS
</span><br>
<span class="quotelev2">&gt;&gt; needs the full path for this VS tool. It is located at: &quot;C:\Program
</span><br>
<span class="quotelev2">&gt;&gt; Files\Microsoft Visual Studio 9.0\Common7\IDE\Remote
</span><br>
<span class="quotelev2">&gt;&gt; Debugger\x64\mpishim.exe&quot; or &quot;C:\Program Files\Microsoft Visual Studio
</span><br>
<span class="quotelev2">&gt;&gt; 9.0\Common7\IDE\Remote Debugger\x86\mpishim.exe&quot; (use quotes at to
</span><br>
<span class="quotelev2">&gt;&gt; enclose
</span><br>
<span class="quotelev2">&gt;&gt; the path).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I haven't played with the other options.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 10. Close the dialog box.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 11. Set some breakpoints in your program.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 12. Ready to run.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; These instructions only work to debug MPI processes on the localhost,
</span><br>
<span class="quotelev2">&gt;&gt; and
</span><br>
<span class="quotelev2">&gt;&gt; I only have tested VS+MPI using MPICH2 for Windows.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To debug on several nodes you should install the Microsoft HPC SDK (I
</span><br>
<span class="quotelev2">&gt;&gt; haven't used it).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Good luck.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Miguel
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; PS. I use Visual Studio 2008 professional. Also, I know that MPI
</span><br>
<span class="quotelev2">&gt;&gt; debugging
</span><br>
<span class="quotelev2">&gt;&gt; is not available in VS Express editions.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Does anyone on this list have experience using MS Visual Studio for MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; development? I'm supporting a Windows user who has been doing Fortran
</span><br>
<span class="quotelev3">&gt;&gt;&gt; programming on Windows using an ANCIENT version of Digital Visual
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fortran (I know, I know - using &quot;ancient&quot; and &quot;Digital&quot; in the same
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sentence is redundant.)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Well, we are upgrading his equally ancient laptopa new one with Windows
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 7, so we installed Intel Visual Fortran (direct descendent of DVF) and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Visual Studio 2010, and to be honest, I feel like a fish out of water
</span><br>
<span class="quotelev3">&gt;&gt;&gt; using VS 2010. It took me a longer than I care to admit to figure out
</span><br>
<span class="quotelev3">&gt;&gt;&gt; how to specify the include and linker paths.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Right now, I'm working with the Intel MPI libraries, but plan on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; installing OpenMPI, too, once I figure out VS 2010.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can anyone tell me how to configure visual studio so that when you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; click
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on the little &quot;play&quot; icon to build/run the code, it will call mpiexec
</span><br>
<span class="quotelev3">&gt;&gt;&gt; automatically? Right now, it compiles fine, but throws errors when the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; program executes because it doesn't have the right environment setup
</span><br>
<span class="quotelev3">&gt;&gt;&gt; because it's not being executed by mpiexec. It runs fine when I execute
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it with mpiexec or wmpiexec.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Prentice
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>
<br><p>
<p><p><hr>
<img src="http://www.open-mpi.org/community/lists/users/att-16845/properties.png" alt="properties.png">
<!-- attachment="properties.png" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16846.php">Prentice Bisbal: "Re: [OMPI users] Anyone with Visual Studio + MPI Experience"</a>
<li><strong>Previous message:</strong> <a href="16844.php">Reuti: "Re: [OMPI users] Error using hostfile"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/06/16793.php">Prentice Bisbal: "[OMPI users] Anyone with Visual Studio + MPI Experience"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16846.php">Prentice Bisbal: "Re: [OMPI users] Anyone with Visual Studio + MPI Experience"</a>
<li><strong>Reply:</strong> <a href="16846.php">Prentice Bisbal: "Re: [OMPI users] Anyone with Visual Studio + MPI Experience"</a>
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
