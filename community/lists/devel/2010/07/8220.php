<?
$subject_val = "Re: [OMPI devel] Can OpenMPI be compiled with Visual Studio 2010?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 26 10:39:46 2010" -->
<!-- isoreceived="20100726143946" -->
<!-- sent="Mon, 26 Jul 2010 08:39:49 -0600" -->
<!-- isosent="20100726143949" -->
<!-- name="Kelly Thompson" -->
<!-- email="kgt_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Can OpenMPI be compiled with Visual Studio 2010?" -->
<!-- id="001901cb2cd0$6694f950$33beebf0$_at_gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8BF621E3-6757-4486-82A9-4D85EA95BF75_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Can OpenMPI be compiled with Visual Studio 2010?<br>
<strong>From:</strong> Kelly Thompson (<em>kgt_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-26 10:39:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8221.php">Jeff Squyres: "Re: [OMPI devel] [OMPI users] Debug info on Darwin"</a>
<li><strong>Previous message:</strong> <a href="8219.php">Sylvain Jeaugey: "Re: [OMPI devel] Committing to release branches"</a>
<li><strong>In reply to:</strong> <a href="8216.php">George Bosilca: "Re: [OMPI devel] Can OpenMPI be compiled with Visual Studio 2010?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8239.php">Shiqing Fan: "Re: [OMPI devel] Can OpenMPI be compiled with Visual Studio 2010?"</a>
<li><strong>Reply:</strong> <a href="8239.php">Shiqing Fan: "Re: [OMPI devel] Can OpenMPI be compiled with Visual Studio 2010?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi George,
<br>
<p>I have the source for 1.3.3 checked out.  The CMake step completes without
<br>
reporting any errors or failures, but the compile under Visual Studio 2010
<br>
fails with various bad things:
<br>
<p>This looks like a problem with CMake.  Either the config file was not
<br>
generated correctly or the CMake files aren't looking in the correct
<br>
locations...
<br>
<p>1&gt;ClCompile:
<br>
1&gt;  win32.c
<br>
1&gt;..\..\opal\event\WIN32-Code\win32.c(28): fatal error C1083: Cannot open
<br>
include file: 'opal_config.h': No such file or directory
<br>
1&gt;  event.c
<br>
1&gt;..\..\opal\event\event.c(28): fatal error C1083: Cannot open include file:
<br>
'opal_config.h': No such file or directory
<br>
1&gt;  evutil.c
<br>
1&gt;..\..\opal\event\evutil.c(27): fatal error C1083: Cannot open include
<br>
file: 'opal_config.h': No such file or directory
<br>
1&gt;  log.c
<br>
1&gt;..\..\opal\event\log.c(40): fatal error C1083: Cannot open include file:
<br>
'opal_config.h': No such file or directory
<br>
1&gt;  select.c
<br>
1&gt;..\..\opal\event\select.c(29): fatal error C1083: Cannot open include
<br>
file: 'opal_config.h': No such file or directory
<br>
1&gt;  signal.c
<br>
1&gt;..\..\opal\event\signal.c(29): fatal error C1083: Cannot open include
<br>
file: 'opal_config.h': No such file or directory
<br>
1&gt;  compat
<br>
<p><p>I think the stdint.h file included with Visual Studio 2010 is different than
<br>
the one provided with 2008.  I am seeing thousands of warnings like this:
<br>
<p>2&gt;ClCompile:
<br>
2&gt;  orted_comm.c
<br>
4&gt;C:\Program Files (x86)\Microsoft Visual Studio
<br>
10.0\VC\include\stdint.h(73): warning C4005: 'INT16_MIN' : macro
<br>
redefinition
<br>
4&gt;          C:\a\openmpi-1.3.3\opal/win32/win_compat.h(169) : see previous
<br>
definition of 'INT16_MIN'
<br>
4&gt;C:\Program Files (x86)\Microsoft Visual Studio
<br>
10.0\VC\include\stdint.h(74): warning C4005: 'INT32_MIN' : macro
<br>
redefinition
<br>
4&gt;          C:\a\openmpi-1.3.3\opal/win32/win_compat.h(160) : see previous
<br>
definition of 'INT32_MIN'
<br>
4&gt;C:\Program Files (x86)\Microsoft Visual Studio
<br>
10.0\VC\include\stdint.h(77): warning C4005: 'INT16_MAX' : macro
<br>
redefinition
<br>
4&gt;          C:\a\openmpi-1.3.3\opal/win32/win_compat.h(172) : see previous
<br>
definition of 'INT16_MAX'
<br>
3&gt;C:\Program Files (x86)\Microsoft Visual Studio
<br>
10.0\VC\include\stdint.h(73): warning C4005: 'INT16_MIN' : macro
<br>
redefinition
<br>
3&gt;          C:\a\openmpi-1.3.3\opal/win32/win_compat.h(169) : see previous
<br>
definition of 'INT16_MIN'
<br>
3&gt;C:\Program Files (x86)\Microsoft Visual Studio
<br>
10.0\VC\include\stdint.h(74): warning C4005: 'INT32_MIN' : macro
<br>
redefinition
<br>
3&gt;          C:\a\openmpi-1.3.3\opal/win32/win_compat.h(160) : see previous
<br>
definition of 'INT32_MIN'
<br>
3&gt;C:\Program Files (x86)\Microsoft Visual Studio
<br>
10.0\VC\include\stdint.h(77): warning C4005: 'INT16_MAX' : macro
<br>
redefinition
<br>
3&gt;          C:\a\openmpi-1.3.3\opal/win32/win_compat.h(172) : see previous
<br>
definition of 'INT16_MAX'
<br>
2&gt;C:\Program Files (x86)\Microsoft Visual Studio
<br>
10.0\VC\include\stdint.h(73): warning C4005: 'INT16_MIN' : macro
<br>
redefinition
<br>
2&gt;          C:\a\openmpi-1.3.3\opal/win32/win_compat.h(169) : see previous
<br>
definition of 'INT16_MIN'
<br>
2&gt;C:\Program Files (x86)\Microsoft Visual Studio
<br>
10.0\VC\include\stdint.h(74): warning C4005: 'INT32_MIN' : macro
<br>
redefinition
<br>
2&gt;          C:\a\openmpi-1.3.3\opal/win32/win_compat.h(160) : see previous
<br>
definition of 'INT32_MIN'
<br>
2&gt;C:\Program Files (x86)\Microsoft Visual Studio
<br>
10.0\VC\include\stdint.h(77): warning C4005: 'INT16_MAX' : macro
<br>
redefinition
<br>
2&gt;          C:\a\openmpi-1.3.3\opal/win32/win_compat.h(172) : see previous
<br>
definition of 'INT16_MAX'
<br>
2&gt;C:\Program Files (x86)\Microsoft Visual Studio
<br>
10.0\VC\include\stdint.h(78): warning C4005: 'INT32_MAX' : macro
<br>
redefinition
<br>
2&gt;          C:\a\openmpi-1.3.3\opal/win32/win_compat.h(157) : see previous
<br>
definition of 'INT32_MAX'
<br>
2&gt;C:\Program Files (x86)\Microsoft Visual Studio
<br>
10.0\VC\include\stdint.h(79): warning C4005: 'UINT8_MAX' : macro
<br>
redefinition
<br>
2&gt;          C:\a\openmpi-1.3.3\opal/win32/win_compat.h(175) : see previous
<br>
definition of 'UINT8_MAX'
<br>
2&gt;C:\Program Files (x86)\Microsoft Visual Studio
<br>
10.0\VC\include\stdint.h(80): warning C4005: 'UINT16_MAX' : macro
<br>
redefinition
<br>
2&gt;          C:\a\openmpi-1.3.3\opal/win32/win_compat.h(166) : see previous
<br>
definition of 'UINT16_MAX'
<br>
2&gt;C:\Program Files (x86)\Microsoft Visual Studio
<br>
10.0\VC\include\stdint.h(81): warning C4005: 'UINT32_MAX' : macro
<br>
redefinition
<br>
2&gt;          C:\a\openmpi-1.3.3\opal/win32/win_compat.h(151) : see previous
<br>
definition of 'UINT32_MAX'
<br>
<p>Any thoughts?
<br>
<p>-kt
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: George Bosilca [mailto:bosilca_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Friday, July 23, 2010 10:55 AM
</span><br>
<span class="quotelev1">&gt; To: kgt_at_[hidden]; Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] Can OpenMPI be compiled with Visual Studio 2010?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kelly,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Windows is still a target platform for Open MPI which is supposed to build
</span><br>
<span class="quotelev1">&gt; nicely with all versions of Visual Studio. Personally I didn't test the
</span><br>
2010
<br>
<span class="quotelev1">&gt; version, but if you provide us with the compilation output file we might
</span><br>
be
<br>
<span class="quotelev1">&gt; able to help.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Thanks,
</span><br>
<span class="quotelev1">&gt;     george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 23, 2010, at 12:40 , Kelly Thompson wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I would like to know if anyone is trying to build Open-MPI under Visual
</span><br>
<span class="quotelev1">&gt; Studio 2010?  I see that 1.3.3 was built under VS 2008, but I would like
</span><br>
to
<br>
<span class="quotelev1">&gt; build under the 2010 version and have been unsuccessful so far.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Can someone tell me if MSVC continues to be a target platform?  Is there
</span><br>
a
<br>
<span class="quotelev1">&gt; wiki or other collaborative development site that deals with compiling
</span><br>
<span class="quotelev1">&gt; OpenMPI for the Windows platform?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -kt
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8221.php">Jeff Squyres: "Re: [OMPI devel] [OMPI users] Debug info on Darwin"</a>
<li><strong>Previous message:</strong> <a href="8219.php">Sylvain Jeaugey: "Re: [OMPI devel] Committing to release branches"</a>
<li><strong>In reply to:</strong> <a href="8216.php">George Bosilca: "Re: [OMPI devel] Can OpenMPI be compiled with Visual Studio 2010?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8239.php">Shiqing Fan: "Re: [OMPI devel] Can OpenMPI be compiled with Visual Studio 2010?"</a>
<li><strong>Reply:</strong> <a href="8239.php">Shiqing Fan: "Re: [OMPI devel] Can OpenMPI be compiled with Visual Studio 2010?"</a>
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
