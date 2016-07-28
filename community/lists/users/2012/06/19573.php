<?
$subject_val = "Re: [OMPI users] Building MPI on Windows";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 14 13:36:37 2012" -->
<!-- isoreceived="20120614173637" -->
<!-- sent="Thu, 14 Jun 2012 11:36:28 -0600" -->
<!-- isosent="20120614173628" -->
<!-- name="Damien" -->
<!-- email="damien_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building MPI on Windows" -->
<!-- id="4FDA211C.5010903_at_khubla.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="DE2CB86A93428A408B1E6BE8E73DCCB4018B0913_at_CLEOHSMB13.napa.ad.etn.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Building MPI on Windows<br>
<strong>From:</strong> Damien (<em>damien_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-14 13:36:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19574.php">VimalMathew_at_[hidden]: "Re: [OMPI users] Building MPI on Windows"</a>
<li><strong>Previous message:</strong> <a href="19572.php">Ralph Castain: "Re: [OMPI users] opal_timer_linux_open() setting inexact floating point exception"</a>
<li><strong>In reply to:</strong> <a href="19569.php">VimalMathew_at_[hidden]: "Re: [OMPI users] Building MPI on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19574.php">VimalMathew_at_[hidden]: "Re: [OMPI users] Building MPI on Windows"</a>
<li><strong>Reply:</strong> <a href="19574.php">VimalMathew_at_[hidden]: "Re: [OMPI users] Building MPI on Windows"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah.  You installed the OpenMPI binaries too right?  Those are built with 
<br>
VS2010.  I bet the way your paths are set up it's using the installed 
<br>
version of mpiexec that wants VS2010 runtimes, not the mpiexec you 
<br>
compiled today that will use the VS2008 runtimes that you have.
<br>
<p>OK, here's a quick fix you can try so you don't have to mess with 
<br>
paths.  Go into the installed\bin directory from your OpenMPI version, 
<br>
select everything, and copy it to the directory where your new project 
<br>
puts its executables (probably the Debug directory).  Then run your 
<br>
mpiexec .... from within that Debug directory and it will use all your 
<br>
OpenMPI exes and dlls because it will look there first.
<br>
<p>Welcome to path pain.  Happens on every operating system.
<br>
<p>Damien
<br>
<p>On 14/06/2012 11:19 AM, VimalMathew_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No, it's the VS 2008 Express edition.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Vimal
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *From:*users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] 
</span><br>
<span class="quotelev1">&gt; *On Behalf Of *Damien
</span><br>
<span class="quotelev1">&gt; *Sent:* Thursday, June 14, 2012 1:17 PM
</span><br>
<span class="quotelev1">&gt; *To:* Open MPI Users
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI users] Building MPI on Windows
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That's odd.  That's the standard MS C++ runtime for VS 2010.  I 
</span><br>
<span class="quotelev1">&gt; thought you built with VS 2008 Express though.  Or is your VS Express 
</span><br>
<span class="quotelev1">&gt; the 2010 version?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 14/06/2012 11:10 AM, VimalMathew_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:VimalMathew_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I try to run the program with mpiexec.exe, I get an error message 
</span><br>
<span class="quotelev1">&gt; saying &quot;*The Program can't start because MSVCR100.dll is missing from 
</span><br>
<span class="quotelev1">&gt; your computer*&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What did I miss?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Vimal
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *From:*users-bounces_at_[hidden] &lt;mailto:users-bounces_at_[hidden]&gt; 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] *On Behalf Of *Damien
</span><br>
<span class="quotelev1">&gt; *Sent:* Thursday, June 14, 2012 12:11 PM
</span><br>
<span class="quotelev1">&gt; *To:* Open MPI Users
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI users] Building MPI on Windows
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That goes in Configuration Properties - C/C++ - Preprocessor - 
</span><br>
<span class="quotelev1">&gt; Preprocessor Definitions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Damien
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 14/06/2012 10:07 AM, VimalMathew_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:VimalMathew_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks a lot Damien.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I compile the code that they've used in the link you sent, I get 
</span><br>
<span class="quotelev1">&gt; this error: *error LNK2001: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; _ompi_mpi_comm_world*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I looked this up in the mail archives and Shiqing said &quot;OMPI_IMPORTS&quot; 
</span><br>
<span class="quotelev1">&gt; needs to be added as a preprocessor definition in the project 
</span><br>
<span class="quotelev1">&gt; configuration. Where specifically do I add this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Vimal
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *From:*users-bounces_at_[hidden] &lt;mailto:users-bounces_at_[hidden]&gt; 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] *On Behalf Of *Damien
</span><br>
<span class="quotelev1">&gt; *Sent:* Thursday, June 14, 2012 11:42 AM
</span><br>
<span class="quotelev1">&gt; *To:* Open MPI Users
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI users] Building MPI on Windows
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Vimal,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Start with this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://supercomputingblog.com/mpi/getting-started-with-mpi-using-visual-studio-2008-express/">http://supercomputingblog.com/mpi/getting-started-with-mpi-using-visual-studio-2008-express/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The only difference is that whereever this tutorial says &quot;HPC Pack 
</span><br>
<span class="quotelev1">&gt; 2008 SDK directory&quot; you should go to &quot;c:\ompi\openmpi-1.6\installed&quot; 
</span><br>
<span class="quotelev1">&gt; and use the include, lib and bin directories from there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This will give you a simple VS project that you can use to start 
</span><br>
<span class="quotelev1">&gt; building your own stuff.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Damien
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 14/06/2012 8:55 AM, VimalMathew_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:VimalMathew_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Everything went as you expected.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No errors except that I don't have Fortran compilers so checking 
</span><br>
<span class="quotelev1">&gt; OMPI_WANT_F77_BINDINGS and OMPI_WANT_F90_BINDINGS threw some error 
</span><br>
<span class="quotelev1">&gt; messages.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; One more question -- in which project out of the 16 do I include code 
</span><br>
<span class="quotelev1">&gt; that I want to run?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Vimal
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *From:*users-bounces_at_[hidden] &lt;mailto:users-bounces_at_[hidden]&gt; 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:[mailto:users-bounces_at_[hidden]]&gt; *On Behalf Of *Damien
</span><br>
<span class="quotelev1">&gt; *Sent:* Wednesday, June 13, 2012 5:38 PM
</span><br>
<span class="quotelev1">&gt; *To:* Open MPI Users
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI users] Building MPI on Windows
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Vimal,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's how to build OpenMPI with Visual Studio and CMake.  These are 
</span><br>
<span class="quotelev1">&gt; exact steps.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1)  Download this: 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/software/ompi/v1.6/downloads/openmpi-1.6.tar.gz">http://www.open-mpi.org/software/ompi/v1.6/downloads/openmpi-1.6.tar.gz</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2)  Extract that to somewhere on your hard drive.  My path was 
</span><br>
<span class="quotelev1">&gt; C:\projects6\openmpi-1.6.  I renamed it to 
</span><br>
<span class="quotelev1">&gt; C:\projects6\openmpi-1.6-64.  You can use 7-Zip to extract tgz 
</span><br>
<span class="quotelev1">&gt; archives on Windows.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3)  Start the CMake GUI.  Set the source and build directories.  Mine 
</span><br>
<span class="quotelev1">&gt; were C:/projects6/openmpi-1.6-64 and C:/projects6/openmpi-1.6-64/build
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 4)  Press Configure.  Say Yes if it asks you to create the build 
</span><br>
<span class="quotelev1">&gt; directory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 5)  Look at the generator view that comes up.  I chose Visual Studio 9 
</span><br>
<span class="quotelev1">&gt; 2008 Win64 but you can select whatever you have on your system.  Click 
</span><br>
<span class="quotelev1">&gt; Specify Native Compilers.  This will make sure you get the right 
</span><br>
<span class="quotelev1">&gt; compilers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the C and C++ compiler, I put &quot;C:\Program Files (x86)\Microsoft 
</span><br>
<span class="quotelev1">&gt; Visual Studio 9.0\VC\bin\amd64\cl.exe&quot;.  You can navigate to which one 
</span><br>
<span class="quotelev1">&gt; you have.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the Fortran compiler, I put &quot;C:/Program Files (x86)/Intel/Composer 
</span><br>
<span class="quotelev1">&gt; XE 2011 SP1/bin/intel64/ifort.exe&quot;.  You can navigate to which one you 
</span><br>
<span class="quotelev1">&gt; have.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Press Finish once you have selected the compilers and the config will 
</span><br>
<span class="quotelev1">&gt; start.  Takes a couple of minutes on my laptop.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; First things first.  If you want a Release build, you have to change a 
</span><br>
<span class="quotelev1">&gt; CMake setting.  The 5th line down in the red window will say 
</span><br>
<span class="quotelev1">&gt; CMAKE_BUILD_TYPE.  Change the text (type it in) to say Release if you 
</span><br>
<span class="quotelev1">&gt; want a Release build, otherwise the final install step won't work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, further down the red window there's some options you should 
</span><br>
<span class="quotelev1">&gt; change.  Scroll down through that window, there's a lot to choose 
</span><br>
<span class="quotelev1">&gt; from.  I usually check OMPI_RELEASE_BUILD, OMPI_WANT_F77_BINDINGS and 
</span><br>
<span class="quotelev1">&gt; OMPI_WANT_F90_BINDINGS.  OMPI_WANT_CXX_BINDINGS should already be 
</span><br>
<span class="quotelev1">&gt; checked.  (Note to Jeff &amp; Shiqing: We should probably work out a good 
</span><br>
<span class="quotelev1">&gt; set of standard choices if there are others on top of these).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 6)  Press Configure again, and CMake will go through identifying the 
</span><br>
<span class="quotelev1">&gt; Fortran compiler if you asked for Fortran bindings and a few other 
</span><br>
<span class="quotelev1">&gt; things.  It should work fine with the options above.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 7)  Assuming that it was fine, press Generate.  That produces an 
</span><br>
<span class="quotelev1">&gt; OpenMPI.sln project for Visual Studio, it's in whatever directory you 
</span><br>
<span class="quotelev1">&gt; specified as your build directory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 8)  Open the sln in Visual Studio.  Open the Properties of &quot;Solution 
</span><br>
<span class="quotelev1">&gt; 'OpenMPI'&quot;.  Look at Configuration Properties - Configuration.  Check 
</span><br>
<span class="quotelev1">&gt; the Configuration button at the top, it might say Debug, but it should 
</span><br>
<span class="quotelev1">&gt; say Release if you changed CMAKE_BUILD_TYPE earlier.  If it says 
</span><br>
<span class="quotelev1">&gt; Debug, change the drop-down to Release.  Click OK.  Then open the 
</span><br>
<span class="quotelev1">&gt; Properties again and make sure what you selected is right, otherwise 
</span><br>
<span class="quotelev1">&gt; change it, press OK again.  Visual Studio does that sometimes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 9)  Moment of Truth.  Right-click on &quot;Solution 'OpenMPI'&quot; and select 
</span><br>
<span class="quotelev1">&gt; Build Solution.  The compile should start.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 10)  Wait.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 11)  Wait some more.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 12)  Grab a snack (or a beer.....), this will take a while, 15-20 minutes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 13)  If the build was successful (it should be), there's one last 
</span><br>
<span class="quotelev1">&gt; step.  Right-click on the INSTALL sub-project and click Build.  That 
</span><br>
<span class="quotelev1">&gt; will organise the header files, libraries and binaries into a set of 
</span><br>
<span class="quotelev1">&gt; directories, under whatever directory you said your source is in with 
</span><br>
<span class="quotelev1">&gt; CMake.  On mine it was C:\projects6\openmpi-1.6\installed.  In there 
</span><br>
<span class="quotelev1">&gt; you'll see bin, include, lib and share directories.  That's a complete 
</span><br>
<span class="quotelev1">&gt; OpenMPI build with everything you need.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you'd like to try this and provide feedback, we can tweak the 
</span><br>
<span class="quotelev1">&gt; instructions until they're bulletproof.  I can help you build with 
</span><br>
<span class="quotelev1">&gt; whatever compilers you have on your system, just post back to the 
</span><br>
<span class="quotelev1">&gt; list.  I don't do Cygwin though.  Doing HPC on Windows is weird 
</span><br>
<span class="quotelev1">&gt; enough.....  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Damien
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 13/06/2012 1:35 PM, VimalMathew_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:VimalMathew_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What do I do after I run it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Vimal
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *From:*users-bounces_at_[hidden] &lt;mailto:users-bounces_at_[hidden]&gt; 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] *On Behalf Of *Ralph Castain
</span><br>
<span class="quotelev1">&gt; *Sent:* Wednesday, June 13, 2012 3:32 PM
</span><br>
<span class="quotelev1">&gt; *To:* Open MPI Users
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI users] Building MPI on Windows
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not a Windozer, so I can't speak to the port for that platform. 
</span><br>
<span class="quotelev1">&gt; However, the conversation here seems strange to me. Have you actually 
</span><br>
<span class="quotelev1">&gt; read the instructions on the open-mpi.org &lt;<a href="http://open-mpi.org">http://open-mpi.org</a>&gt; web site?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Looks pretty simple to me. You download the .exe installer for either 
</span><br>
<span class="quotelev1">&gt; 32 or 64 bits, and run it. You don't build OMPI from source - the 
</span><br>
<span class="quotelev1">&gt; distro contains everything you need to just run.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; See:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/software/ompi/v1.6/">http://www.open-mpi.org/software/ompi/v1.6/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; for the software and some Windows notes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 13, 2012, at 1:20 PM, Trent Creekmore wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I just gave up and stuck with Unix/Linux.  Eclipse IDE offers a very 
</span><br>
<span class="quotelev1">&gt; nice plugin for developing and debugging MPI code named Parallel Tools 
</span><br>
<span class="quotelev1">&gt; Platform. Something not available in Visual Studio, except for similar 
</span><br>
<span class="quotelev1">&gt; one made by Intel, but I believe you have to use their compiler.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You could always run Eclipse remotely from any Windows OS using a 
</span><br>
<span class="quotelev1">&gt; Secure Shell client and Xming (A Windows based X Server). That is what 
</span><br>
<span class="quotelev1">&gt; I do, and no more wasting time trying to get OMPI trying to run on 
</span><br>
<span class="quotelev1">&gt; Windows.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *From:*users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:users-bounces_at_[hidden]&gt;[mailto:users-bounces_at_[hidden]] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:[mailto:users-bounces_at_[hidden]]&gt;*On Behalf 
</span><br>
<span class="quotelev1">&gt; Of*VimalMathew_at_[hidden] &lt;mailto:VimalMathew_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; *Sent:*Wednesday, June 13, 2012 2:09 PM
</span><br>
<span class="quotelev1">&gt; *To:*users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;;users_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; *Subject:*Re: [OMPI users] Building MPI on Windows
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've tried the Cygwin way.
</span><br>
<span class="quotelev1">&gt; Been hitting roadblocks for a week now. I've just uninstalled 
</span><br>
<span class="quotelev1">&gt; everything and started from scratch again.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Vimal
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From:users-bounces_at_[hidden] &lt;mailto:users-bounces_at_[hidden]&gt;on 
</span><br>
<span class="quotelev1">&gt; behalf of Trent Creekmore
</span><br>
<span class="quotelev1">&gt; Sent: Wed 6/13/2012 2:47 PM
</span><br>
<span class="quotelev1">&gt; To: 'Open MPI Users'
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Building MPI on Windows
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This may, or may not be helpful, but I have tried the Windows 
</span><br>
<span class="quotelev1">&gt; offerings. I have never gotten anything to function was expected. 
</span><br>
<span class="quotelev1">&gt; Compiling, or the available binaries. I think they just don't work at all.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My suggestion which I feel would be easier, and less headache way 
</span><br>
<span class="quotelev1">&gt; would be to install something like CygWin, which would give you a 
</span><br>
<span class="quotelev1">&gt; Unix/Linux like environment running under Windows.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You would only need to compile it in CygWin just like the Linux/Unix 
</span><br>
<span class="quotelev1">&gt; docs say to do.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't know if anyone else has done it this way or not.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From:users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:users-bounces_at_[hidden]&gt;[mailto:users-bounces_at_[hidden]] 
</span><br>
<span class="quotelev1">&gt; On Behalf OfVimalMathew_at_[hidden] &lt;mailto:VimalMathew_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, June 13, 2012 1:32 PM
</span><br>
<span class="quotelev1">&gt; To:users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] Building MPI on Windows
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm trying to follow the ReadMe file to build OpenMPI on Windows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Step 1: Untar the contrib/platform/win32/ompi-static.tgz tarball in 
</span><br>
<span class="quotelev1">&gt; the root directory of the Open MPI distribution.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I do not have ompi-static.tgz in the mentioned path.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Step 2: Go in the ompi/datatype subdirectory in the Open MPI 
</span><br>
<span class="quotelev1">&gt; distribution and copy the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; datatype_pack.c   to datatype_pack_checksum.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; datatype_unpack.c to datatype_unpack_checksum.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I do not see these files in the mentioned path.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Step 4: Open the Open MPI project (.sln file) from the root directory 
</span><br>
<span class="quotelev1">&gt; of the distribution.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't have a .sln file anywhere
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Help anyone? Shiqing?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Vimal
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From:users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:users-bounces_at_[hidden]&gt;[mailto:users-bounces_at_[hidden]] 
</span><br>
<span class="quotelev1">&gt; On Behalf OfVimalMathew_at_[hidden] &lt;mailto:VimalMathew_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, June 13, 2012 11:21 AM
</span><br>
<span class="quotelev1">&gt; To:fan_at_[hidden] &lt;mailto:fan_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Cc:users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I did make uninstall. I also deleted the folders of the other 
</span><br>
<span class="quotelev1">&gt; implementation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I ran ./configure and make all install.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At the end of the make I saw a bunch of errors for the makefiles. I've 
</span><br>
<span class="quotelev1">&gt; attached the .log and .out files.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please tell me if I'm on the right track.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Vimal
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From: Shiqing Fan [mailto:fan_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, June 13, 2012 9:37 AM
</span><br>
<span class="quotelev1">&gt; To: Mathew, Vimal
</span><br>
<span class="quotelev1">&gt; Cc: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Vimal,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not sure how you can uninstall  the other one, may be 'make 
</span><br>
<span class="quotelev1">&gt; uninstall' from the source? Or you may also ask in their mailing list.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Another solution might use the full path for the executables, like 
</span><br>
<span class="quotelev1">&gt; &quot;c:\Program Files\OpenMPI_v1.6-win32\bin\mpicc hello.c&quot; or under 
</span><br>
<span class="quotelev1">&gt; Cygwin: &quot;/cygdrive/c/Program\ Files/OpenMPI_v1.6-win32/bin/mpicc.exe 
</span><br>
<span class="quotelev1">&gt; hello.c&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Of course, I suggest to get rid of the other MPI implementation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Shiqing
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2012-06-13 3:17 PM,VimalMathew_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:VimalMathew_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Shiqing,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I installed the LAN/MPI implementation first then the Open MPI 
</span><br>
<span class="quotelev1">&gt; implementation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could this be the problem? If yes, how do I get rid of the LAN/MPI 
</span><br>
<span class="quotelev1">&gt; implementation?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Vimal
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From: Shiqing Fan [mailto:fan_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, June 13, 2012 4:49 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Cc: Mathew, Vimal
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Vimal,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The output looks strange. If you use the installer under Cygwin, mpicc 
</span><br>
<span class="quotelev1">&gt; shouldn't try to link with liblammpio.* or any library in 
</span><br>
<span class="quotelev1">&gt; /usr/local/lib. So I guess the mpicc is messed up with some previously 
</span><br>
<span class="quotelev1">&gt; installed MPI implementations. Could you please verify that 'which 
</span><br>
<span class="quotelev1">&gt; mpicc' is the one you installed?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyway, here I sent some screen shots that how it should look like 
</span><br>
<span class="quotelev1">&gt; under Cygwin.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1 - run command 'mpicc chello.c'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2 - run command 'mpicc chello.c -o chello'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Shiqing
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2012-06-12 8:44 PM,VimalMathew_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:VimalMathew_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I ran OpenMPI_v1.6-1_win64.exe.
</span><br>
<span class="quotelev1">&gt;  Now I get this message:
</span><br>
<span class="quotelev1">&gt;         C9995799_at_SOUMIWHP5003567 ~/openmpi-1.6
</span><br>
<span class="quotelev1">&gt;         $ mpicc hello.c -o hello
</span><br>
<span class="quotelev1">&gt;         WARNING: mpicc expected to find liblammpio.* in /usr/local/lib
</span><br>
<span class="quotelev1">&gt;         WARNING: MPI-2 IO support will be disabled
</span><br>
<span class="quotelev1">&gt;         gcc: hello.c: No such file or directory
</span><br>
<span class="quotelev1">&gt;         mpicc: No such file or directory
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Vimal
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From:users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:users-bounces_at_[hidden]&gt;[mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt; Behalf Of Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, June 12, 2012 2:30 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Probably easier to just run the Open MPI binary installer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 12, 2012, at 2:24 PM, &lt;VimalMathew_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:VimalMathew_at_[hidden]&gt;&gt; &lt;mailto:VimalMathew_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         So I simply download and run OpenMPI_v1.6-1_win64.exe?
</span><br>
<span class="quotelev1">&gt;         Or is there a way to fix the Fortran compiler?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         --
</span><br>
<span class="quotelev1">&gt;         Vimal
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         -----Original Message-----
</span><br>
<span class="quotelev1">&gt;         From:users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:users-bounces_at_[hidden]&gt;[mailto:users-bounces_at_[hidden]]
</span><br>
<span class="quotelev1">&gt;         On Behalf Of Jeff Squyres
</span><br>
<span class="quotelev1">&gt;         Sent: Tuesday, June 12, 2012 2:20 PM
</span><br>
<span class="quotelev1">&gt;         To: Open MPI Users
</span><br>
<span class="quotelev1">&gt;         Subject: Re: [OMPI users] Help with buidling MPI(Error: mpi.h not
</span><br>
<span class="quotelev1">&gt;         found)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         It does not look like you successfully built Open MPI -- it 
</span><br>
<span class="quotelev1">&gt; looks like
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Open MPI's configure script aborted because your Fortran compiler
</span><br>
<span class="quotelev1">&gt;         wasn't
</span><br>
<span class="quotelev1">&gt;         behaving:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         -----
</span><br>
<span class="quotelev1">&gt;         checking if Fortran 77 compiler supports COMPLEX*16... yes 
</span><br>
<span class="quotelev1">&gt; checking
</span><br>
<span class="quotelev1">&gt;         size of Fortran 77 COMPLEX*16... 16 checking alignment of Fortran
</span><br>
<span class="quotelev1">&gt;         COMPLEX*16... 8 checking if Fortran 77 compiler supports 
</span><br>
<span class="quotelev1">&gt; COMPLEX*32...
</span><br>
<span class="quotelev1">&gt;         no checking for max Fortran MPI handle index... ( 0x7fffffff &lt;
</span><br>
<span class="quotelev1">&gt;         2147483647 ? 0x7fffffff : 2147483647 ) checking Fortran value for
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; .TRUE.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         logical type... configure: error: Could not determine value of 
</span><br>
<span class="quotelev1">&gt; Fortran
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         .TRUE..  Aborting.
</span><br>
<span class="quotelev1">&gt;         -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Anything that happened after that is somewhat irrelevant 
</span><br>
<span class="quotelev1">&gt; because Open
</span><br>
<span class="quotelev1">&gt;         MPI didn't configure properly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Looking in config.log, I see why:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         -----
</span><br>
<span class="quotelev1">&gt;         configure:44290: checking Fortran value for .TRUE. logical type
</span><br>
<span class="quotelev1">&gt;         configure:44386: gcc -DNDEBUG -g -O2 -finline-functions
</span><br>
<span class="quotelev1">&gt;         -fno-strict-aliasing -I. -c conftest.c
</span><br>
<span class="quotelev1">&gt;         configure:44393: $? = 0
</span><br>
<span class="quotelev1">&gt;         configure:44403: gfortran  -o conftest conftest.o conftestf.f
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt; /usr/lib/gcc/i686-pc-cygwin/4.5.3/../../../../i686-pc-cygwin/bin/ld:
</span><br>
<span class="quotelev1">&gt;         reopening conftest.exe: Device or resource busy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt; /usr/lib/gcc/i686-pc-cygwin/4.5.3/../../../../i686-pc-cygwin/bin/ld:
</span><br>
<span class="quotelev1">&gt;         final link failed: Device or resource busy
</span><br>
<span class="quotelev1">&gt;         collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt;         configure:44410: $? = 1
</span><br>
<span class="quotelev1">&gt;         configure:44427: error: Could not determine value of Fortran 
</span><br>
<span class="quotelev1">&gt; .TRUE..
</span><br>
<span class="quotelev1">&gt;         Aborting.
</span><br>
<span class="quotelev1">&gt;         -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         All this may be irrelevant, though, because it looks like you're
</span><br>
<span class="quotelev1">&gt;         building on Windows.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         In that case, you might well want to just download the OMPI 
</span><br>
<span class="quotelev1">&gt; Windows
</span><br>
<span class="quotelev1">&gt;         binaries.  I don't know offhand if we support building on 
</span><br>
<span class="quotelev1">&gt; Windows with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         the normal configure / make methodology; we normally use cmake to
</span><br>
<span class="quotelev1">&gt;         build from source on Windows.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         On Jun 12, 2012, at 1:25 PM, &lt;VimalMathew_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:VimalMathew_at_[hidden]&gt;&gt; &lt;mailto:VimalMathew_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 I was directed to the OpenMPI website from the Boost 
</span><br>
<span class="quotelev1">&gt; Libraries page
</span><br>
<span class="quotelev1">&gt;                 to
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         install an MPI Installation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 I've followed all the steps in the installation guide 
</span><br>
<span class="quotelev1">&gt; to configure
</span><br>
<span class="quotelev1">&gt;                 and
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         build MPI. When I try to compile the hello.c program which 
</span><br>
<span class="quotelev1">&gt; contains
</span><br>
<span class="quotelev1">&gt; &lt;mpi.h&gt;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 I get an error message saying mpi.h does not exist 
</span><br>
<span class="quotelev1">&gt; I've attached the
</span><br>
<span class="quotelev1">&gt;                 config.log, config.out, make.out , ompi_info all and 
</span><br>
<span class="quotelev1">&gt; make-install.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         files.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 Any help will be greatly appreciated!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 Thanks,
</span><br>
<span class="quotelev1">&gt;                 Vimal Mathew
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;openmpi-1.6.7z&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;                 users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         --
</span><br>
<span class="quotelev1">&gt;         Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         _______________________________________________
</span><br>
<span class="quotelev1">&gt;         users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         _______________________________________________
</span><br>
<span class="quotelev1">&gt;         users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Shiqing Fan
</span><br>
<span class="quotelev1">&gt; High Performance Computing Center Stuttgart (HLRS)
</span><br>
<span class="quotelev1">&gt; Tel: ++49(0)711-685-87234      Nobelstrasse 19
</span><br>
<span class="quotelev1">&gt; Fax: ++49(0)711-685-65832      70569 Stuttgart
</span><br>
<span class="quotelev1">&gt; <a href="http://www.hlrs.de/organization/people/shiqing-fan/">http://www.hlrs.de/organization/people/shiqing-fan/</a>
</span><br>
<span class="quotelev1">&gt; email:fan_at_[hidden] &lt;mailto:fan_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Shiqing Fan
</span><br>
<span class="quotelev1">&gt; High Performance Computing Center Stuttgart (HLRS)
</span><br>
<span class="quotelev1">&gt; Tel: ++49(0)711-685-87234      Nobelstrasse 19
</span><br>
<span class="quotelev1">&gt; Fax: ++49(0)711-685-65832      70569 Stuttgart
</span><br>
<span class="quotelev1">&gt; <a href="http://www.hlrs.de/organization/people/shiqing-fan/">http://www.hlrs.de/organization/people/shiqing-fan/</a>
</span><br>
<span class="quotelev1">&gt; email:fan_at_[hidden] &lt;mailto:fan_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]  &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]  &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]  &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]  &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]  &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19573/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19574.php">VimalMathew_at_[hidden]: "Re: [OMPI users] Building MPI on Windows"</a>
<li><strong>Previous message:</strong> <a href="19572.php">Ralph Castain: "Re: [OMPI users] opal_timer_linux_open() setting inexact floating point exception"</a>
<li><strong>In reply to:</strong> <a href="19569.php">VimalMathew_at_[hidden]: "Re: [OMPI users] Building MPI on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19574.php">VimalMathew_at_[hidden]: "Re: [OMPI users] Building MPI on Windows"</a>
<li><strong>Reply:</strong> <a href="19574.php">VimalMathew_at_[hidden]: "Re: [OMPI users] Building MPI on Windows"</a>
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
