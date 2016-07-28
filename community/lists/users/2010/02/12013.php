<?
$subject_val = "Re: [OMPI users] INSTALL bug in 64-bit build of OpenMPI Release build on Windows - has workaround";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  4 17:52:44 2010" -->
<!-- isoreceived="20100204225244" -->
<!-- sent="Thu, 04 Feb 2010 15:52:32 -0700" -->
<!-- isosent="20100204225232" -->
<!-- name="Damien Hocking" -->
<!-- email="damien_at_[hidden]" -->
<!-- subject="Re: [OMPI users] INSTALL bug in 64-bit build of OpenMPI Release build on Windows - has workaround" -->
<!-- id="4B6B4FB0.8030707_at_0x544745.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="24234.128.165.0.81.1265294052.squirrel_at_webmail.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] INSTALL bug in 64-bit build of OpenMPI Release build on Windows - has workaround<br>
<strong>From:</strong> Damien Hocking (<em>damien_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-04 17:52:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12014.php">Eugene Loh: "[OMPI users] hostfiles"</a>
<li><strong>Previous message:</strong> <a href="12012.php">Peter C. Lichtner: "[OMPI users] libtool compile error"</a>
<li><strong>In reply to:</strong> <a href="12002.php">Marcus G. Daniels: "Re: [OMPI users] INSTALL bug in 64-bit build of OpenMPI Release build on Windows - has workaround"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12004.php">Marcus G. Daniels: "Re: [OMPI users] INSTALL bug in 64-bit build of OpenMPI Release build on Windows - has workaround"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I started again from the beginning to sort out exactly what was going 
<br>
on.  Here's what I found.
<br>
<p>If I use the CMake GUI, and set CMAKE_BUILD_TYPE to Release, 
<br>
re-configure and then generate, and then do the following build command:
<br>
<p>&quot;devenv OpenMPI.sln /build&quot;
<br>
<p>I get the following:
<br>
<p>1&gt;------ Build started: Project: libopen-pal, Configuration: Debug x64
<br>
<p>etc.  It still builds debug versions, and pdbs.  The install project 
<br>
doesn't try to install the pdbs though.
<br>
<p>If I do a &quot;devenv OpenMPI.sln /build release&quot;, I get a proper release 
<br>
build, no pdbs and the install project works.
<br>
<p>If I use the CMake GUI, and leave CMAKE_BUILD_TYPE at Debug, and do
<br>
&quot;devenv OpenMPI.sln /build release&quot;, I get a release build, but the 
<br>
install fails because it goes looking for pdbs that aren't there.
<br>
<p>So, in order to get a Release build that installs using the CMake GUI, 
<br>
you need to have CMAKE_BUILD_TYPE set to Release *and* do a
<br>
<p>&quot;devenv OpenMPI.sln /build release&quot; at the command line, followed by
<br>
&quot;devenv OpenMPI.sln /build release /project INSTALL&quot;.
<br>
<p>To get a Release build from the command-line without using the CMake 
<br>
GUI, you need to have SET(CMAKE_BUILD_TYPE Release) in the top-level 
<br>
CMakeFiles.txt, and then
<br>
<p>&quot;devenv OpenMPI.sln /build release&quot; at the command-line, followed by 
<br>
&quot;devenv OpenMPI.sln /build release /project INSTALL&quot;
<br>
<p>As Shiquing said in another post, you need to do completely independent 
<br>
setups for 32 and 64-bit builds.  I set mine up with build32 and build64 
<br>
directories, and install32 and install64 directories to keep everything 
<br>
separate.
<br>
<p>HTH,
<br>
<p>Damien
<br>
<p><p><p>On 04/02/2010 7:34 AM, Marcus G. Daniels wrote:
<br>
<span class="quotelev2">&gt;&gt; Hmmm.  I did try setting release and I think I still got pdbs.  I'll try
</span><br>
<span class="quotelev2">&gt;&gt; again from a totally clean source tree and post back.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Another datapoint:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried Cmake's Generate after setting CMAKE_BUILD_TYPE and building.
</span><br>
<span class="quotelev1">&gt; I have the same sort of build problems with setting x64 in the VS 2008
</span><br>
<span class="quotelev1">&gt; configuration manager.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Marcus
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12014.php">Eugene Loh: "[OMPI users] hostfiles"</a>
<li><strong>Previous message:</strong> <a href="12012.php">Peter C. Lichtner: "[OMPI users] libtool compile error"</a>
<li><strong>In reply to:</strong> <a href="12002.php">Marcus G. Daniels: "Re: [OMPI users] INSTALL bug in 64-bit build of OpenMPI Release build on Windows - has workaround"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12004.php">Marcus G. Daniels: "Re: [OMPI users] INSTALL bug in 64-bit build of OpenMPI Release build on Windows - has workaround"</a>
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
