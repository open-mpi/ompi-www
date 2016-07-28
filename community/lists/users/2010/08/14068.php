<?
$subject_val = "Re: [OMPI users] Building OpenMPI with DevStudio 2010";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 18 05:33:51 2010" -->
<!-- isoreceived="20100818093351" -->
<!-- sent="Wed, 18 Aug 2010 11:35:16 +0200" -->
<!-- isosent="20100818093516" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building OpenMPI with DevStudio 2010" -->
<!-- id="4C6BA954.5080107_at_hlrs.de" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="AANLkTikXp7f7MtPJhEvZ_bkQ7RVqUrhsUx3rnP21MwVC_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Building OpenMPI with DevStudio 2010<br>
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-18 05:35:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14069.php">Alberto Canestrelli: "Re: [OMPI users] Accessing to the send buffer"</a>
<li><strong>Previous message:</strong> <a href="14067.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>In reply to:</strong> <a href="14064.php">Rick Hullinger: "[OMPI users] Building OpenMPI with DevStudio 2010"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;Hi Rick,
<br>
<p>All the steps you've done were absolutely correct. The CMake output 
<br>
messages are not errors but the feature check results; if a real error 
<br>
occurs, CMake will just stop and pop up an error message window.
<br>
<p>Unfortunately, 1.4.2 doesn't have the VS 2010 support yet, it will be 
<br>
added in the upcoming releases (1.4.3 and 1.5).  So the solution for the 
<br>
moment could be using the svn trunk or 1.5 branch. (1.4 branch will also 
<br>
have this very soon, see <a href="https://svn.open-mpi.org/trac/ompi/ticket/2521">https://svn.open-mpi.org/trac/ompi/ticket/2521</a>)
<br>
<p><p>Regards,
<br>
Shiqing
<br>
<p>On 2010-8-17 7:26 PM, Rick Hullinger wrote:
<br>
<span class="quotelev1">&gt; I am trying to get OpenMPI built on a windows machine using Dev
</span><br>
<span class="quotelev1">&gt; Studio, and I'm not having any luck. I'm hoping someone can point me
</span><br>
<span class="quotelev1">&gt; in the right direction.
</span><br>
<span class="quotelev1">&gt; Here are the details:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Environment: Windows 7, (64 bit OS, but I&#146;m performing a 32 bit
</span><br>
<span class="quotelev1">&gt; build), Attempting to build under Dev Studio 2010
</span><br>
<span class="quotelev1">&gt; Steps:
</span><br>
<span class="quotelev1">&gt; 1)  Download OpenMPI 1.4.2 to E:\&lt;path stuff&gt;\openmpi-1.4.2
</span><br>
<span class="quotelev1">&gt; 2)  Run the windows installer for CMake 2.8.2
</span><br>
<span class="quotelev1">&gt; 3) Open a visual studio command prompt and execute cmake-gui from the
</span><br>
<span class="quotelev1">&gt; command line
</span><br>
<span class="quotelev1">&gt; 4) Set the &#147;source code:&#148; directory to: E:\&lt;path stuff&gt;\openmpi-1.4.2
</span><br>
<span class="quotelev1">&gt;    Set the &#147;Build the binaries:&#148; directory to E:\&lt;path stuff&gt;\MPIBuild
</span><br>
<span class="quotelev1">&gt; 5) Hit the configure button:
</span><br>
<span class="quotelev1">&gt; Select Visual Studio 10 as the generator for this project
</span><br>
<span class="quotelev1">&gt; Leave the radio button on the default &#147;use default native compilers&#148;
</span><br>
<span class="quotelev1">&gt; Click Finish.
</span><br>
<span class="quotelev1">&gt; Output: see file &#147;cmake.output.txt&#148; for the full output (I've added
</span><br>
<span class="quotelev1">&gt; &quot;**&quot; to the start of each &quot;error&quot; line)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note: it&#146;s my understanding that all of the &#147;not found&#148; messages are
</span><br>
<span class="quotelev1">&gt; not necessarily errors, just CMake trying to figure out what is in
</span><br>
<span class="quotelev1">&gt; place and what is not&#133;so maybe everything so far is fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 7) Hit the configure button again. Output:
</span><br>
<span class="quotelev1">&gt; Check for working flex...
</span><br>
<span class="quotelev1">&gt;     Skipping MPI F77 interface
</span><br>
<span class="quotelev1">&gt;     looking for ccp...
</span><br>
<span class="quotelev1">&gt;     looking for ccp...not found.
</span><br>
<span class="quotelev1">&gt;     looking for ccp...
</span><br>
<span class="quotelev1">&gt;     looking for ccp...not found.
</span><br>
<span class="quotelev1">&gt;     Configuring done
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 8) Click Generate button. Output: &#147;Generating done.&#148;
</span><br>
<span class="quotelev1">&gt; 9) Close CMake
</span><br>
<span class="quotelev1">&gt; 10) Open MS DevStudio 2010, select &#147;Open Project&#148;, navigate to the
</span><br>
<span class="quotelev1">&gt; MPIBuild directory and select the &#147;OpenMPI.sln&#148; project
</span><br>
<span class="quotelev1">&gt; 11) Select &#147;Build solution&#148;
</span><br>
<span class="quotelev1">&gt; 12) Wait....
</span><br>
<span class="quotelev1">&gt; 13) Full output is attached in the file DevStudio.Output.txt, but right off the
</span><br>
<span class="quotelev1">&gt; bat, there are several of these messages:
</span><br>
<span class="quotelev2">&gt;&gt; ..\..\openmpi-1.4.2\opal\event\WIN32-Code\win32.c(28): fatal error C1083: Cannot open include file: 'opal_config.h': No such file or directory
</span><br>
<span class="quotelev1">&gt; then we get into:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; c1 : fatal error C1083: Cannot open source file:
</span><br>
<span class="quotelev1">&gt; 'E:/Code/C++/ExternalLibs/openmpi-1.4.2/opal/event/compat': Permission
</span><br>
<span class="quotelev1">&gt; denied
</span><br>
<span class="quotelev2">&gt;&gt;   WIN32-Code
</span><br>
<span class="quotelev1">&gt; (note: compat is not a &quot;source file&quot; it's a directory? seems like an odd error)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; c1 : fatal error C1083: Cannot open source file: 'E:/Code/C++/ExternalLibs/openmpi-1.4.2/opal/event/WIN32-Code': Permission denied
</span><br>
<span class="quotelev2">&gt;&gt;   Generating Code...
</span><br>
<span class="quotelev2">&gt;&gt; ------ Build started: Project: libopen-rte, Configuration: Debug Win32 ------
</span><br>
<span class="quotelev2">&gt;&gt; ------ Build started: Project: opal-restart, Configuration: Debug Win32 ------
</span><br>
<span class="quotelev2">&gt;&gt;   opal-restart.c
</span><br>
<span class="quotelev2">&gt;&gt;   orted_comm.c
</span><br>
<span class="quotelev2">&gt;&gt; C:\Program Files (x86)\Microsoft Visual Studio 10.0\VC\include\stdint.h(73): warning C4005: 'INT16_MIN' : macro redefinition
</span><br>
<span class="quotelev1">&gt; ..and a ton of the &#147;macro redefinition&#148; errors after that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When all is said and done:
</span><br>
<span class="quotelev1">&gt; ========== Build: 1 succeeded, 13 failed, 0 up-to-date, 2 skipped ==========
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anybody have any ideas?
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
<p><p><pre>
-- 
--------------------------------------------------------------
Shiqing Fan                          <a href="http://www.hlrs.de/people/fan">http://www.hlrs.de/people/fan</a>
High Performance Computing           Tel.: +49 711 685 87234
   Center Stuttgart (HLRS)            Fax.: +49 711 685 65832
Address:Allmandring 30               email: fan_at_[hidden]
70569 Stuttgart
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14068/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14069.php">Alberto Canestrelli: "Re: [OMPI users] Accessing to the send buffer"</a>
<li><strong>Previous message:</strong> <a href="14067.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>In reply to:</strong> <a href="14064.php">Rick Hullinger: "[OMPI users] Building OpenMPI with DevStudio 2010"</a>
<!-- nextthread="start" -->
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
