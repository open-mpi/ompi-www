<?
$subject_val = "[OMPI users] Building OpenMPI with DevStudio 2010";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 17 13:26:44 2010" -->
<!-- isoreceived="20100817172644" -->
<!-- sent="Tue, 17 Aug 2010 13:26:39 -0400" -->
<!-- isosent="20100817172639" -->
<!-- name="Rick Hullinger" -->
<!-- email="rhullinger_at_[hidden]" -->
<!-- subject="[OMPI users] Building OpenMPI with DevStudio 2010" -->
<!-- id="AANLkTikXp7f7MtPJhEvZ_bkQ7RVqUrhsUx3rnP21MwVC_at_mail.gmail.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] Building OpenMPI with DevStudio 2010<br>
<strong>From:</strong> Rick Hullinger (<em>rhullinger_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-17 13:26:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14065.php">Steve Wise: "[OMPI users] padb and openmpi"</a>
<li><strong>Previous message:</strong> <a href="14063.php">Richard Walsh: "Re: [OMPI users] Does OpenMPI 1.4.1 support the MPI_IN_PLACE designation ..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14068.php">Shiqing Fan: "Re: [OMPI users] Building OpenMPI with DevStudio 2010"</a>
<li><strong>Reply:</strong> <a href="14068.php">Shiqing Fan: "Re: [OMPI users] Building OpenMPI with DevStudio 2010"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am trying to get OpenMPI built on a windows machine using Dev
<br>
Studio, and I'm not having any luck. I'm hoping someone can point me
<br>
in the right direction.
<br>
Here are the details:
<br>
<p>Environment: Windows 7, (64 bit OS, but I&#146;m performing a 32 bit
<br>
build), Attempting to build under Dev Studio 2010
<br>
Steps:
<br>
1)  Download OpenMPI 1.4.2 to E:\&lt;path stuff&gt;\openmpi-1.4.2
<br>
2)  Run the windows installer for CMake 2.8.2
<br>
3) Open a visual studio command prompt and execute cmake-gui from the
<br>
command line
<br>
4) Set the &#147;source code:&#148; directory to: E:\&lt;path stuff&gt;\openmpi-1.4.2
<br>
&nbsp;&nbsp;Set the &#147;Build the binaries:&#148; directory to E:\&lt;path stuff&gt;\MPIBuild
<br>
5) Hit the configure button:
<br>
Select Visual Studio 10 as the generator for this project
<br>
Leave the radio button on the default &#147;use default native compilers&#148;
<br>
Click Finish.
<br>
Output: see file &#147;cmake.output.txt&#148; for the full output (I've added
<br>
&quot;**&quot; to the start of each &quot;error&quot; line)
<br>
<p>Note: it&#146;s my understanding that all of the &#147;not found&#148; messages are
<br>
not necessarily errors, just CMake trying to figure out what is in
<br>
place and what is not&#133;so maybe everything so far is fine.
<br>
<p>7) Hit the configure button again. Output:
<br>
Check for working flex...
<br>
&nbsp;&nbsp;&nbsp;Skipping MPI F77 interface
<br>
&nbsp;&nbsp;&nbsp;looking for ccp...
<br>
&nbsp;&nbsp;&nbsp;looking for ccp...not found.
<br>
&nbsp;&nbsp;&nbsp;looking for ccp...
<br>
&nbsp;&nbsp;&nbsp;looking for ccp...not found.
<br>
&nbsp;&nbsp;&nbsp;Configuring done
<br>
<p>8) Click Generate button. Output: &#147;Generating done.&#148;
<br>
9) Close CMake
<br>
10) Open MS DevStudio 2010, select &#147;Open Project&#148;, navigate to the
<br>
MPIBuild directory and select the &#147;OpenMPI.sln&#148; project
<br>
11) Select &#147;Build solution&#148;
<br>
12) Wait....
<br>
13) Full output is attached in the file DevStudio.Output.txt, but right off the
<br>
bat, there are several of these messages:
<br>
<span class="quotelev1">&gt;..\..\openmpi-1.4.2\opal\event\WIN32-Code\win32.c(28): fatal error C1083: Cannot open include file: 'opal_config.h': No such file or directory
</span><br>
<p>then we get into:
<br>
<p>c1 : fatal error C1083: Cannot open source file:
<br>
'E:/Code/C++/ExternalLibs/openmpi-1.4.2/opal/event/compat': Permission
<br>
denied
<br>
<span class="quotelev1">&gt;  WIN32-Code
</span><br>
<p>(note: compat is not a &quot;source file&quot; it's a directory? seems like an odd error)
<br>
<p><span class="quotelev1">&gt;c1 : fatal error C1083: Cannot open source file: 'E:/Code/C++/ExternalLibs/openmpi-1.4.2/opal/event/WIN32-Code': Permission denied
</span><br>
<span class="quotelev1">&gt;  Generating Code...
</span><br>
<span class="quotelev1">&gt;------ Build started: Project: libopen-rte, Configuration: Debug Win32 ------
</span><br>
<span class="quotelev1">&gt;------ Build started: Project: opal-restart, Configuration: Debug Win32 ------
</span><br>
<span class="quotelev1">&gt;  opal-restart.c
</span><br>
<span class="quotelev1">&gt;  orted_comm.c
</span><br>
<span class="quotelev1">&gt;C:\Program Files (x86)\Microsoft Visual Studio 10.0\VC\include\stdint.h(73): warning C4005: 'INT16_MIN' : macro redefinition
</span><br>
<p>..and a ton of the &#147;macro redefinition&#148; errors after that.
<br>
<p>When all is said and done:
<br>
========== Build: 1 succeeded, 13 failed, 0 up-to-date, 2 skipped ==========
<br>
<p>Anybody have any ideas?
<br>
<p>

<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14064/Cmake.Output.txt">Cmake.Output.txt</a>
</ul>
<!-- attachment="Cmake.Output.txt" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14064/DevStudio.Output.txt">DevStudio.Output.txt</a>
</ul>
<!-- attachment="DevStudio.Output.txt" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14065.php">Steve Wise: "[OMPI users] padb and openmpi"</a>
<li><strong>Previous message:</strong> <a href="14063.php">Richard Walsh: "Re: [OMPI users] Does OpenMPI 1.4.1 support the MPI_IN_PLACE designation ..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14068.php">Shiqing Fan: "Re: [OMPI users] Building OpenMPI with DevStudio 2010"</a>
<li><strong>Reply:</strong> <a href="14068.php">Shiqing Fan: "Re: [OMPI users] Building OpenMPI with DevStudio 2010"</a>
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
