<?
$subject_val = "Re: [OMPI users] INSTALL bug in 64-bit build of OpenMPI Release build on Windows - has workaround";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  4 12:20:47 2010" -->
<!-- isoreceived="20100204172047" -->
<!-- sent="Thu, 04 Feb 2010 18:18:45 +0100" -->
<!-- isosent="20100204171845" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] INSTALL bug in 64-bit build of OpenMPI Release build on Windows - has workaround" -->
<!-- id="4B6B0175.7020704_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="49254.130.55.116.53.1265302739.squirrel_at_webmail.lanl.gov" -->
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
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-04 12:18:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12008.php">Dorian Krause: "Re: [OMPI users] Progress in MPI_Win_unlock"</a>
<li><strong>Previous message:</strong> <a href="12006.php">Dave Goodell: "Re: [OMPI users] Progress in MPI_Win_unlock"</a>
<li><strong>In reply to:</strong> <a href="12004.php">Marcus G. Daniels: "Re: [OMPI users] INSTALL bug in 64-bit build of OpenMPI Release build on Windows - has workaround"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12018.php">Marcus G. Daniels: "Re: [OMPI users] INSTALL bug in 64-bit build of OpenMPI Release build on Windows - has workaround"</a>
<li><strong>Reply:</strong> <a href="12018.php">Marcus G. Daniels: "Re: [OMPI users] INSTALL bug in 64-bit build of OpenMPI Release build on Windows - has workaround"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Marcus,
<br>
<p>I don't think it's correct to set CMAKE_CL_64 explicitly in CMake-GUI, 
<br>
it's a variable describing the system.
<br>
<p>And it's not a good idea to use &quot;Configuration Manager&quot; to adapt another 
<br>
configuration, if you really want to do so, you have to also adjust each 
<br>
project property to fit the new configuration, e.g. from x86 to x64 
<br>
settings. If you already have an x86 solution, and you want to have 
<br>
another for x64, you have to start over from the CMake-GUI, select the 
<br>
64 bit generator, i.e. &quot;Visual Studio 9 2008 64bit&quot;, so that to generate 
<br>
the a new solution in a different directory.
<br>
<p><p>Regards,
<br>
Shiqing
<br>
<p><p><p>Marcus G. Daniels wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have another problem with building x86_64 on 64 bit Windows 7.  I set
</span><br>
<span class="quotelev1">&gt; CMAKE_CL_64 to true in cmake-gui, and and set the VS2008 config to x64
</span><br>
<span class="quotelev1">&gt; (`New' platform adapted from WIN32).   However, I get this during the
</span><br>
<span class="quotelev1">&gt; build:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1&gt;------ Build started: Project: libopen-pal, Configuration: Debug x64 ------
</span><br>
<span class="quotelev1">&gt; 1&gt;Linking...
</span><br>
<span class="quotelev1">&gt; 1&gt;.\x64\Debug\keyval_lex.obj : fatal error LNK1112: module machine type
</span><br>
<span class="quotelev1">&gt; 'x64' conflicts with target machine type 'X86'
</span><br>
<span class="quotelev1">&gt; 1&gt;Build log was saved at
</span><br>
<span class="quotelev1">&gt; &quot;file://c:\cygwin\home\mdaniels\build\ompi-trunk-cmake\opal\x64\Debug\BuildLog.htm&quot;
</span><br>
<span class="quotelev1">&gt; 1&gt;libopen-pal - 1 error(s), 0 warning(s)
</span><br>
<span class="quotelev1">&gt; ========== Build: 0 succeeded, 1 failed, 0 up-to-date, 0 skipped ==========
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It's not obvious where X86 enters the picture..
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Marcus
</span><br>
<span class="quotelev1">&gt;   
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12008.php">Dorian Krause: "Re: [OMPI users] Progress in MPI_Win_unlock"</a>
<li><strong>Previous message:</strong> <a href="12006.php">Dave Goodell: "Re: [OMPI users] Progress in MPI_Win_unlock"</a>
<li><strong>In reply to:</strong> <a href="12004.php">Marcus G. Daniels: "Re: [OMPI users] INSTALL bug in 64-bit build of OpenMPI Release build on Windows - has workaround"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12018.php">Marcus G. Daniels: "Re: [OMPI users] INSTALL bug in 64-bit build of OpenMPI Release build on Windows - has workaround"</a>
<li><strong>Reply:</strong> <a href="12018.php">Marcus G. Daniels: "Re: [OMPI users] INSTALL bug in 64-bit build of OpenMPI Release build on Windows - has workaround"</a>
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
