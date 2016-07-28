<?
$subject_val = "Re: [OMPI users] Install OpenMPI on Win 7 machine";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 12 17:38:31 2010" -->
<!-- isoreceived="20100712213831" -->
<!-- sent="Mon, 12 Jul 2010 15:38:16 -0600" -->
<!-- isosent="20100712213816" -->
<!-- name="Damien" -->
<!-- email="damien_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Install OpenMPI on Win 7 machine" -->
<!-- id="4C3B8B48.0_at_khubla.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTinPmjO8v9AcghUJUqOwyuh8Aujk2XrGfaG5ZPg1_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Install OpenMPI on Win 7 machine<br>
<strong>From:</strong> Damien (<em>damien_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-12 17:38:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13610.php">Alexandru Blidaru: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
<li><strong>Previous message:</strong> <a href="13608.php">Ralph Castain: "Re: [OMPI users] hpw to log output of spawned processes"</a>
<li><strong>In reply to:</strong> <a href="13597.php">Alexandru Blidaru: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13610.php">Alexandru Blidaru: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
<li><strong>Reply:</strong> <a href="13610.php">Alexandru Blidaru: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Alex,
<br>
<p>That red window is what you should see after the first Configure step in 
<br>
CMake.  You need to do the next few steps in CMake and Visual Studio to 
<br>
get a Windows OpenMPI build done.  That's how CMake works.  It's 
<br>
complicated because CMake has to be able to build on multiple OSes so 
<br>
what you do on each OS is different.  Here's what to do:
<br>
<p>As part of your original CMake setup, it will have asked you where to 
<br>
put the CMake binaries.  That's in &quot;Where to build the binaries&quot; line in 
<br>
the main CMake window, at the top.  Note that these binaries aren't the 
<br>
OpenMPI binaries, they're the Visual Studio project files that Visual 
<br>
Studio uses to build the OpenMPI binaries.
<br>
<p>See the CMAKE_BUILD_TYPE line?  It says Debug.  Change Debug to Release 
<br>
if you want a Release build (you probably do).  Press the Configure 
<br>
button again and let it run.  That should be all clean.  Now press the 
<br>
Generate button.  That will build the Visual Studio project files for 
<br>
you.  They'll go to the &quot;Where to build the binaries&quot; directory.  From 
<br>
here you're done with CMake.
<br>
<p>Next you have two options.  You can build from a command line, or from 
<br>
within Visual Studio itself.  For command-line instructions, read this:
<br>
<p><a href="https://www.open-mpi.org/community/lists/users/2010/02/12013.php">https://www.open-mpi.org/community/lists/users/2010/02/12013.php</a>
<br>
<p>Note that you need to execute the devenv commands in that post from 
<br>
within a Visual Studio command prompt: Start, All Programs, Visual 
<br>
Studio 2008, Visual Studio Tools, Visual Studio 2008 Win64 x64 Command 
<br>
Prompt.  I'm assuming you want a 64-bit build.  You need to be in that 
<br>
&quot;Where to build the binaries&quot; directory as well.
<br>
<p>To use Visual Studio directly, start Visual Studio, and open the 
<br>
OpenMPI.sln project file that's in your &quot;Where to build the binaries&quot; 
<br>
directory.  In the Solution Explorer you'll see a list of sub-projects.  
<br>
Right-click the top heading: Solution 'Open MPI' and select 
<br>
Configuration Manager.  You should get a window that says at the top 
<br>
Active Solution Configuration, with Release below it.  If it says Debug, 
<br>
just change that to Release and it will flip all the sub-projects over 
<br>
as well.  Note on the the list of projects the INSTALL project will not 
<br>
be checked.  Check that now and close the window.   Now right-click 
<br>
Solution 'Open MPI' again and hit Build Solution.  It takes a while to 
<br>
compile everything.  If you get errors about error code -31 and mt.exe 
<br>
at the end of the build, that's your virus scanner locking the new 
<br>
exe/dll files and the install project complains.  Keep right-clicking 
<br>
and Build Solution until it goes through.  The final Open MPI include 
<br>
files and binaries are in the C:\Users\Alex's\Downloads......\installed 
<br>
directory.
<br>
<p>HTH
<br>
<p>Damien
<br>
<p>PS OpenMPI 1.4.2 doesn't have Fortran support on Windows.  You need the 
<br>
dev 1.5 series for that and a Fortran compiler.
<br>
<p>On 12/07/2010 11:35 AM, Alexandru Blidaru wrote:
<br>
<span class="quotelev1">&gt; Hey,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I installed a 90 day trial of Visual Studio 2008, and I am pretty sure 
</span><br>
<span class="quotelev1">&gt; I am getting the exact same thing. The log and the picture are 
</span><br>
<span class="quotelev1">&gt; attached just as last time. Any new ideas?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Alex
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13610.php">Alexandru Blidaru: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
<li><strong>Previous message:</strong> <a href="13608.php">Ralph Castain: "Re: [OMPI users] hpw to log output of spawned processes"</a>
<li><strong>In reply to:</strong> <a href="13597.php">Alexandru Blidaru: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13610.php">Alexandru Blidaru: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
<li><strong>Reply:</strong> <a href="13610.php">Alexandru Blidaru: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
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
