<?
$subject_val = "Re: [OMPI users] Building MPI on Windows";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 13 19:01:03 2012" -->
<!-- isoreceived="20120613230103" -->
<!-- sent="Wed, 13 Jun 2012 17:00:48 -0600" -->
<!-- isosent="20120613230048" -->
<!-- name="Damien" -->
<!-- email="damien_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building MPI on Windows" -->
<!-- id="4FD91BA0.9090205_at_khubla.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="op.wfu4djbtex4g19_at_home-pc" -->
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
<strong>Date:</strong> 2012-06-13 19:00:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19559.php">Ifeanyi: "[OMPI users] checkpointing"</a>
<li><strong>Previous message:</strong> <a href="19557.php">Shiqing Fan: "Re: [OMPI users] Building MPI on Windows"</a>
<li><strong>In reply to:</strong> <a href="19555.php">Shiqing Fan: "Re: [OMPI users] Building MPI on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19554.php">Shiqing Fan: "Re: [OMPI users] Building MPI on Windows"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Vimal,
<br>
<p>Shiqing is right, that's a bad way to do it.  This is slightly off-topic 
<br>
for the list, but you have to tell VS where header files (.h, .hpp) are, 
<br>
which is in Configuration Properties - C/C++ - General - Additional 
<br>
Include Directories.  You have to tell VS where additional libraries 
<br>
are, which is in Configuration Properties - Linker - General - 
<br>
Additional Library Directories.  You have to tell VS which libraries to 
<br>
link to, which is in Configuration Properties - Linker - Input - 
<br>
Additional Dependencies.  Check out the OpenMPI sln and look at these 
<br>
settings in the sub-projects it contains.
<br>
<p>VS is a project and build system that drives the configuration for the 
<br>
compiler, just like autotools and make are on Linux.  Nothing's done for 
<br>
you, you have to set them up for yourself.
<br>
<p>Damien
<br>
<p>On 13/06/2012 4:21 PM, Shiqing Fan wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is definitely NOT a good solution. Just setting up the VS 
</span><br>
<span class="quotelev1">&gt; properties correctly is the direction people should go.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Shiqing
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, 13 Jun 2012 21:51:48 +0200, Trent Creekmore &lt;tcreek_at_[hidden]&gt; 
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I find the easiest way to know if LIB and DLL function correctly, and 
</span><br>
<span class="quotelev2">&gt;&gt; avoiding  confusion on correct setup is it just drop them all in the 
</span><br>
<span class="quotelev2">&gt;&gt; root directory of your project. VS should see them upon load of that 
</span><br>
<span class="quotelev2">&gt;&gt; project.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] 
</span><br>
<span class="quotelev2">&gt;&gt; On Behalf Of VimalMathew_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Wednesday, June 13, 2012 2:47 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Building MPI on Windows
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes, and then I added the libraries folder in Visual Studio under 
</span><br>
<span class="quotelev2">&gt;&gt; Project Properties&gt;Linker&gt;General&gt;Additional Library Directories.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I tried compiling simple 'Hello World'' code and I get an error 
</span><br>
<span class="quotelev2">&gt;&gt; message saying 'Cannot open &lt;mpi.h&gt;: No such file or directory.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What step am I missing?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Vimal
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] 
</span><br>
<span class="quotelev2">&gt;&gt; On Behalf Of Damien
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Wednesday, June 13, 2012 3:43 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Building MPI on Windows
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Once you've run the installer, you'll have a set of OpenMPI debug and 
</span><br>
<span class="quotelev2">&gt;&gt; release dlls, libraries to link to and the necessary include files.  
</span><br>
<span class="quotelev2">&gt;&gt; If you're installing the 64-bit version, it will end up here by default:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; C:\Program Files (x86)\OpenMPI_v1.6-x64
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Damien
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 13/06/2012 1:35 PM, VimalMathew_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What do I do after I run it?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Vimal
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] 
</span><br>
<span class="quotelev2">&gt;&gt; On Behalf Of Ralph Castain
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Wednesday, June 13, 2012 3:32 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Building MPI on Windows
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm not a Windozer, so I can't speak to the port for that platform. 
</span><br>
<span class="quotelev2">&gt;&gt; However, the conversation here seems strange to me. Have you actually 
</span><br>
<span class="quotelev2">&gt;&gt; read the instructions on the open-mpi.org web site?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Looks pretty simple to me. You download the .exe installer for either 
</span><br>
<span class="quotelev2">&gt;&gt; 32 or 64 bits, and run it. You don't build OMPI from source - the 
</span><br>
<span class="quotelev2">&gt;&gt; distro contains everything you need to just run.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; See:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/software/ompi/v1.6/">http://www.open-mpi.org/software/ompi/v1.6/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; for the software and some Windows notes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 13, 2012, at 1:20 PM, Trent Creekmore wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I just gave up and stuck with Unix/Linux.  Eclipse IDE offers a very 
</span><br>
<span class="quotelev2">&gt;&gt; nice plugin for developing and debugging MPI code named Parallel 
</span><br>
<span class="quotelev2">&gt;&gt; Tools Platform. Something not available in Visual Studio, except for 
</span><br>
<span class="quotelev2">&gt;&gt; similar one made by Intel, but I believe you have to use their compiler.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You could always run Eclipse remotely from any Windows OS using a 
</span><br>
<span class="quotelev2">&gt;&gt; Secure Shell client and Xming (A Windows based X Server). That is 
</span><br>
<span class="quotelev2">&gt;&gt; what I do, and no more wasting time trying to get OMPI trying to run 
</span><br>
<span class="quotelev2">&gt;&gt; on Windows.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] 
</span><br>
<span class="quotelev2">&gt;&gt; On Behalf Of VimalMathew_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Wednesday, June 13, 2012 2:09 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: users_at_[hidden]; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Building MPI on Windows
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've tried the Cygwin way.
</span><br>
<span class="quotelev2">&gt;&gt; Been hitting roadblocks for a week now. I've just uninstalled 
</span><br>
<span class="quotelev2">&gt;&gt; everything and started from scratch again.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Vimal
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden] on behalf of Trent Creekmore
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Wed 6/13/2012 2:47 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: 'Open MPI Users'
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Building MPI on Windows
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This may, or may not be helpful, but I have tried the Windows 
</span><br>
<span class="quotelev2">&gt;&gt; offerings. I have never gotten anything to function was expected. 
</span><br>
<span class="quotelev2">&gt;&gt; Compiling, or the available binaries. I think they just don't work at 
</span><br>
<span class="quotelev2">&gt;&gt; all.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My suggestion which I feel would be easier, and less headache way 
</span><br>
<span class="quotelev2">&gt;&gt; would be to install something like CygWin, which would give you a 
</span><br>
<span class="quotelev2">&gt;&gt; Unix/Linux like environment running under Windows.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You would only need to compile it in CygWin just like the Linux/Unix 
</span><br>
<span class="quotelev2">&gt;&gt; docs say to do.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't know if anyone else has done it this way or not.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] 
</span><br>
<span class="quotelev2">&gt;&gt; On Behalf Of VimalMathew_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Wednesday, June 13, 2012 1:32 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [OMPI users] Building MPI on Windows
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm trying to follow the ReadMe file to build OpenMPI on Windows:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Step 1: Untar the contrib/platform/win32/ompi-static.tgz tarball in 
</span><br>
<span class="quotelev2">&gt;&gt; the root directory of the Open MPI distribution.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I do not have ompi-static.tgz in the mentioned path.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Step 2: Go in the ompi/datatype subdirectory in the Open MPI 
</span><br>
<span class="quotelev2">&gt;&gt; distribution and copy the following:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; datatype_pack.c   to datatype_pack_checksum.c
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; datatype_unpack.c to datatype_unpack_checksum.c
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I do not see these files in the mentioned path.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Step 4: Open the Open MPI project (.sln file) from the root directory 
</span><br>
<span class="quotelev2">&gt;&gt; of the distribution.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't have a .sln file anywhere
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Help anyone? Shiqing?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Vimal
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] 
</span><br>
<span class="quotelev2">&gt;&gt; On Behalf Of VimalMathew_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Wednesday, June 13, 2012 11:21 AM
</span><br>
<span class="quotelev2">&gt;&gt; To: fan_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Cc: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I did make uninstall. I also deleted the folders of the other 
</span><br>
<span class="quotelev2">&gt;&gt; implementation.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I ran ./configure and make all install.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; At the end of the make I saw a bunch of errors for the makefiles. 
</span><br>
<span class="quotelev2">&gt;&gt; I've attached the .log and .out files.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please tell me if I'm on the right track.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Vimal
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; From: Shiqing Fan [mailto:fan_at_[hidden]]
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Wednesday, June 13, 2012 9:37 AM
</span><br>
<span class="quotelev2">&gt;&gt; To: Mathew, Vimal
</span><br>
<span class="quotelev2">&gt;&gt; Cc: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Vimal,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm not sure how you can uninstall  the other one, may be 'make 
</span><br>
<span class="quotelev2">&gt;&gt; uninstall' from the source? Or you may also ask in their mailing list.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Another solution might use the full path for the executables, like 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;c:\Program Files\OpenMPI_v1.6-win32\bin\mpicc hello.c&quot; or under 
</span><br>
<span class="quotelev2">&gt;&gt; Cygwin: &quot;/cygdrive/c/Program\ Files/OpenMPI_v1.6-win32/bin/mpicc.exe 
</span><br>
<span class="quotelev2">&gt;&gt; hello.c&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Of course, I suggest to get rid of the other MPI implementation.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Shiqing
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 2012-06-13 3:17 PM, VimalMathew_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Shiqing,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I installed the LAN/MPI implementation first then the Open MPI 
</span><br>
<span class="quotelev2">&gt;&gt; implementation.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Could this be the problem? If yes, how do I get rid of the LAN/MPI 
</span><br>
<span class="quotelev2">&gt;&gt; implementation?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Vimal
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; From: Shiqing Fan [mailto:fan_at_[hidden]]
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Wednesday, June 13, 2012 4:49 AM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Cc: Mathew, Vimal
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Vimal,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The output looks strange. If you use the installer under Cygwin, 
</span><br>
<span class="quotelev2">&gt;&gt; mpicc shouldn't try to link with liblammpio.* or any library in 
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/lib. So I guess the mpicc is messed up with some 
</span><br>
<span class="quotelev2">&gt;&gt; previously installed MPI implementations. Could you please verify 
</span><br>
<span class="quotelev2">&gt;&gt; that 'which mpicc' is the one you installed?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Anyway, here I sent some screen shots that how it should look like 
</span><br>
<span class="quotelev2">&gt;&gt; under Cygwin.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1 - run command 'mpicc chello.c'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2 - run command 'mpicc chello.c -o chello'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Shiqing
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 2012-06-12 8:44 PM, VimalMathew_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I ran OpenMPI_v1.6-1_win64.exe.
</span><br>
<span class="quotelev2">&gt;&gt;  Now I get this message:
</span><br>
<span class="quotelev2">&gt;&gt;         C9995799_at_SOUMIWHP5003567 ~/openmpi-1.6
</span><br>
<span class="quotelev2">&gt;&gt;         $ mpicc hello.c -o hello
</span><br>
<span class="quotelev2">&gt;&gt;         WARNING: mpicc expected to find liblammpio.* in /usr/local/lib
</span><br>
<span class="quotelev2">&gt;&gt;         WARNING: MPI-2 IO support will be disabled
</span><br>
<span class="quotelev2">&gt;&gt;         gcc: hello.c: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt;         mpicc: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Vimal
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev2">&gt;&gt; Behalf Of Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Tuesday, June 12, 2012 2:30 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Probably easier to just run the Open MPI binary installer.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 12, 2012, at 2:24 PM, &lt;VimalMathew_at_[hidden]&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:VimalMathew_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         So I simply download and run OpenMPI_v1.6-1_win64.exe?
</span><br>
<span class="quotelev2">&gt;&gt;         Or is there a way to fix the Fortran compiler?
</span><br>
<span class="quotelev2">&gt;&gt;        --
</span><br>
<span class="quotelev2">&gt;&gt;         Vimal
</span><br>
<span class="quotelev2">&gt;&gt;        -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt;         From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev2">&gt;&gt; [mailto:users-bounces_at_[hidden]]
</span><br>
<span class="quotelev2">&gt;&gt;         On Behalf Of Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt;         Sent: Tuesday, June 12, 2012 2:20 PM
</span><br>
<span class="quotelev2">&gt;&gt;         To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt;         Subject: Re: [OMPI users] Help with buidling MPI(Error: mpi.h 
</span><br>
<span class="quotelev2">&gt;&gt; not
</span><br>
<span class="quotelev2">&gt;&gt;         found)
</span><br>
<span class="quotelev2">&gt;&gt;        It does not look like you successfully built Open MPI -- it 
</span><br>
<span class="quotelev2">&gt;&gt; looks like
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Open MPI's configure script aborted because your Fortran 
</span><br>
<span class="quotelev2">&gt;&gt; compiler
</span><br>
<span class="quotelev2">&gt;&gt;         wasn't
</span><br>
<span class="quotelev2">&gt;&gt;         behaving:
</span><br>
<span class="quotelev2">&gt;&gt;        -----
</span><br>
<span class="quotelev2">&gt;&gt;         checking if Fortran 77 compiler supports COMPLEX*16... yes 
</span><br>
<span class="quotelev2">&gt;&gt; checking
</span><br>
<span class="quotelev2">&gt;&gt;         size of Fortran 77 COMPLEX*16... 16 checking alignment of 
</span><br>
<span class="quotelev2">&gt;&gt; Fortran
</span><br>
<span class="quotelev2">&gt;&gt;         COMPLEX*16... 8 checking if Fortran 77 compiler supports 
</span><br>
<span class="quotelev2">&gt;&gt; COMPLEX*32...
</span><br>
<span class="quotelev2">&gt;&gt;         no checking for max Fortran MPI handle index... ( 0x7fffffff &lt;
</span><br>
<span class="quotelev2">&gt;&gt;         2147483647 ? 0x7fffffff : 2147483647 ) checking Fortran value 
</span><br>
<span class="quotelev2">&gt;&gt; for
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; .TRUE.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         logical type... configure: error: Could not determine value 
</span><br>
<span class="quotelev2">&gt;&gt; of Fortran
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         .TRUE..  Aborting.
</span><br>
<span class="quotelev2">&gt;&gt;         -----
</span><br>
<span class="quotelev2">&gt;&gt;        Anything that happened after that is somewhat irrelevant 
</span><br>
<span class="quotelev2">&gt;&gt; because Open
</span><br>
<span class="quotelev2">&gt;&gt;         MPI didn't configure properly.
</span><br>
<span class="quotelev2">&gt;&gt;        Looking in config.log, I see why:
</span><br>
<span class="quotelev2">&gt;&gt;        -----
</span><br>
<span class="quotelev2">&gt;&gt;         configure:44290: checking Fortran value for .TRUE. logical type
</span><br>
<span class="quotelev2">&gt;&gt;         configure:44386: gcc -DNDEBUG -g -O2 -finline-functions
</span><br>
<span class="quotelev2">&gt;&gt;         -fno-strict-aliasing -I. -c conftest.c
</span><br>
<span class="quotelev2">&gt;&gt;         configure:44393: $? = 0
</span><br>
<span class="quotelev2">&gt;&gt;         configure:44403: gfortran  -o conftest conftest.o conftestf.f
</span><br>
<span class="quotelev2">&gt;&gt;         
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib/gcc/i686-pc-cygwin/4.5.3/../../../../i686-pc-cygwin/bin/ld:
</span><br>
<span class="quotelev2">&gt;&gt;         reopening conftest.exe: Device or resource busy
</span><br>
<span class="quotelev2">&gt;&gt;        
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib/gcc/i686-pc-cygwin/4.5.3/../../../../i686-pc-cygwin/bin/ld:
</span><br>
<span class="quotelev2">&gt;&gt;         final link failed: Device or resource busy
</span><br>
<span class="quotelev2">&gt;&gt;         collect2: ld returned 1 exit status
</span><br>
<span class="quotelev2">&gt;&gt;         configure:44410: $? = 1
</span><br>
<span class="quotelev2">&gt;&gt;         configure:44427: error: Could not determine value of Fortran 
</span><br>
<span class="quotelev2">&gt;&gt; .TRUE..
</span><br>
<span class="quotelev2">&gt;&gt;         Aborting.
</span><br>
<span class="quotelev2">&gt;&gt;         -----
</span><br>
<span class="quotelev2">&gt;&gt;        All this may be irrelevant, though, because it looks like you're
</span><br>
<span class="quotelev2">&gt;&gt;         building on Windows.
</span><br>
<span class="quotelev2">&gt;&gt;        In that case, you might well want to just download the OMPI 
</span><br>
<span class="quotelev2">&gt;&gt; Windows
</span><br>
<span class="quotelev2">&gt;&gt;         binaries.  I don't know offhand if we support building on 
</span><br>
<span class="quotelev2">&gt;&gt; Windows with
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         the normal configure / make methodology; we normally use 
</span><br>
<span class="quotelev2">&gt;&gt; cmake to
</span><br>
<span class="quotelev2">&gt;&gt;         build from source on Windows.
</span><br>
<span class="quotelev2">&gt;&gt;        On Jun 12, 2012, at 1:25 PM, &lt;VimalMathew_at_[hidden]&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:VimalMathew_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 Hi,
</span><br>
<span class="quotelev2">&gt;&gt;                I was directed to the OpenMPI website from the Boost 
</span><br>
<span class="quotelev2">&gt;&gt; Libraries page
</span><br>
<span class="quotelev2">&gt;&gt;                 to
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         install an MPI Installation.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 I've followed all the steps in the installation guide 
</span><br>
<span class="quotelev2">&gt;&gt; to configure
</span><br>
<span class="quotelev2">&gt;&gt;                 and
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         build MPI. When I try to compile the hello.c program which 
</span><br>
<span class="quotelev2">&gt;&gt; contains
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mpi.h&gt;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 I get an error message saying mpi.h does not exist 
</span><br>
<span class="quotelev2">&gt;&gt; I've attached the
</span><br>
<span class="quotelev2">&gt;&gt;                 config.log, config.out, make.out , ompi_info all and 
</span><br>
<span class="quotelev2">&gt;&gt; make-install.out
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         files.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                Any help will be greatly appreciated!
</span><br>
<span class="quotelev2">&gt;&gt;                Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;                 Vimal Mathew
</span><br>
<span class="quotelev2">&gt;&gt; &lt;openmpi-1.6.7z&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;                 users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;                 users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;                 <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        --
</span><br>
<span class="quotelev2">&gt;&gt;         Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt;         jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;         For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt;         <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;        _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;         users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;         users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;        _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;         users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;         users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Shiqing Fan
</span><br>
<span class="quotelev2">&gt;&gt; High Performance Computing Center Stuttgart (HLRS)
</span><br>
<span class="quotelev2">&gt;&gt; Tel: ++49(0)711-685-87234      Nobelstrasse 19
</span><br>
<span class="quotelev2">&gt;&gt; Fax: ++49(0)711-685-65832      70569 Stuttgart
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.hlrs.de/organization/people/shiqing-fan/">http://www.hlrs.de/organization/people/shiqing-fan/</a>
</span><br>
<span class="quotelev2">&gt;&gt; email: fan_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Shiqing Fan
</span><br>
<span class="quotelev2">&gt;&gt; High Performance Computing Center Stuttgart (HLRS)
</span><br>
<span class="quotelev2">&gt;&gt; Tel: ++49(0)711-685-87234      Nobelstrasse 19
</span><br>
<span class="quotelev2">&gt;&gt; Fax: ++49(0)711-685-65832      70569 Stuttgart
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.hlrs.de/organization/people/shiqing-fan/">http://www.hlrs.de/organization/people/shiqing-fan/</a>
</span><br>
<span class="quotelev2">&gt;&gt; email: fan_at_[hidden]
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19558/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19559.php">Ifeanyi: "[OMPI users] checkpointing"</a>
<li><strong>Previous message:</strong> <a href="19557.php">Shiqing Fan: "Re: [OMPI users] Building MPI on Windows"</a>
<li><strong>In reply to:</strong> <a href="19555.php">Shiqing Fan: "Re: [OMPI users] Building MPI on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19554.php">Shiqing Fan: "Re: [OMPI users] Building MPI on Windows"</a>
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
