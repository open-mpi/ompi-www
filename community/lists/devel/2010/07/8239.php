<?
$subject_val = "Re: [OMPI devel] Can OpenMPI be compiled with Visual Studio 2010?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 30 05:07:37 2010" -->
<!-- isoreceived="20100730090737" -->
<!-- sent="Fri, 30 Jul 2010 11:08:59 +0200" -->
<!-- isosent="20100730090859" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Can OpenMPI be compiled with Visual Studio 2010?" -->
<!-- id="4C5296AB.8060208_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="001901cb2cd0$6694f950$33beebf0$_at_gov" -->
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
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-30 05:08:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8240.php">Joshua Hursey: "[OMPI devel] RFC: Checkpoint/Restart Advancements and Bug Fixes"</a>
<li><strong>Previous message:</strong> <a href="8238.php">Jeff Squyres: "[OMPI devel] 1.5rc5 posted!"</a>
<li><strong>In reply to:</strong> <a href="8220.php">Kelly Thompson: "Re: [OMPI devel] Can OpenMPI be compiled with Visual Studio 2010?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/08/8242.php">Shiqing Fan: "Re: [OMPI devel] Can OpenMPI be compiled with Visual Studio 2010?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Kelly,
<br>
<p>I saw this problem too, but I didn't find a proper solution yet. It 
<br>
seems like an issue with VS intellisense behavior. See this CMake 
<br>
ticket: <a href="http://www.itk.org/Bug/view.php?id=10572">http://www.itk.org/Bug/view.php?id=10572</a>.
<br>
<p>Have you succeeded with it?
<br>
<p><p>Thanks,
<br>
Shiqing
<br>
<p><p>On 2010-7-26 4:39 PM, Kelly Thompson wrote:
<br>
<span class="quotelev1">&gt; Hi George,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have the source for 1.3.3 checked out.  The CMake step completes without
</span><br>
<span class="quotelev1">&gt; reporting any errors or failures, but the compile under Visual Studio 2010
</span><br>
<span class="quotelev1">&gt; fails with various bad things:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This looks like a problem with CMake.  Either the config file was not
</span><br>
<span class="quotelev1">&gt; generated correctly or the CMake files aren't looking in the correct
</span><br>
<span class="quotelev1">&gt; locations...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1&gt;ClCompile:
</span><br>
<span class="quotelev1">&gt; 1&gt;   win32.c
</span><br>
<span class="quotelev1">&gt; 1&gt;..\..\opal\event\WIN32-Code\win32.c(28): fatal error C1083: Cannot open
</span><br>
<span class="quotelev1">&gt; include file: 'opal_config.h': No such file or directory
</span><br>
<span class="quotelev1">&gt; 1&gt;   event.c
</span><br>
<span class="quotelev1">&gt; 1&gt;..\..\opal\event\event.c(28): fatal error C1083: Cannot open include file:
</span><br>
<span class="quotelev1">&gt; 'opal_config.h': No such file or directory
</span><br>
<span class="quotelev1">&gt; 1&gt;   evutil.c
</span><br>
<span class="quotelev1">&gt; 1&gt;..\..\opal\event\evutil.c(27): fatal error C1083: Cannot open include
</span><br>
<span class="quotelev1">&gt; file: 'opal_config.h': No such file or directory
</span><br>
<span class="quotelev1">&gt; 1&gt;   log.c
</span><br>
<span class="quotelev1">&gt; 1&gt;..\..\opal\event\log.c(40): fatal error C1083: Cannot open include file:
</span><br>
<span class="quotelev1">&gt; 'opal_config.h': No such file or directory
</span><br>
<span class="quotelev1">&gt; 1&gt;   select.c
</span><br>
<span class="quotelev1">&gt; 1&gt;..\..\opal\event\select.c(29): fatal error C1083: Cannot open include
</span><br>
<span class="quotelev1">&gt; file: 'opal_config.h': No such file or directory
</span><br>
<span class="quotelev1">&gt; 1&gt;   signal.c
</span><br>
<span class="quotelev1">&gt; 1&gt;..\..\opal\event\signal.c(29): fatal error C1083: Cannot open include
</span><br>
<span class="quotelev1">&gt; file: 'opal_config.h': No such file or directory
</span><br>
<span class="quotelev1">&gt; 1&gt;   compat
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think the stdint.h file included with Visual Studio 2010 is different than
</span><br>
<span class="quotelev1">&gt; the one provided with 2008.  I am seeing thousands of warnings like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2&gt;ClCompile:
</span><br>
<span class="quotelev1">&gt; 2&gt;   orted_comm.c
</span><br>
<span class="quotelev1">&gt; 4&gt;C:\Program Files (x86)\Microsoft Visual Studio
</span><br>
<span class="quotelev1">&gt; 10.0\VC\include\stdint.h(73): warning C4005: 'INT16_MIN' : macro
</span><br>
<span class="quotelev1">&gt; redefinition
</span><br>
<span class="quotelev1">&gt; 4&gt;           C:\a\openmpi-1.3.3\opal/win32/win_compat.h(169) : see previous
</span><br>
<span class="quotelev1">&gt; definition of 'INT16_MIN'
</span><br>
<span class="quotelev1">&gt; 4&gt;C:\Program Files (x86)\Microsoft Visual Studio
</span><br>
<span class="quotelev1">&gt; 10.0\VC\include\stdint.h(74): warning C4005: 'INT32_MIN' : macro
</span><br>
<span class="quotelev1">&gt; redefinition
</span><br>
<span class="quotelev1">&gt; 4&gt;           C:\a\openmpi-1.3.3\opal/win32/win_compat.h(160) : see previous
</span><br>
<span class="quotelev1">&gt; definition of 'INT32_MIN'
</span><br>
<span class="quotelev1">&gt; 4&gt;C:\Program Files (x86)\Microsoft Visual Studio
</span><br>
<span class="quotelev1">&gt; 10.0\VC\include\stdint.h(77): warning C4005: 'INT16_MAX' : macro
</span><br>
<span class="quotelev1">&gt; redefinition
</span><br>
<span class="quotelev1">&gt; 4&gt;           C:\a\openmpi-1.3.3\opal/win32/win_compat.h(172) : see previous
</span><br>
<span class="quotelev1">&gt; definition of 'INT16_MAX'
</span><br>
<span class="quotelev1">&gt; 3&gt;C:\Program Files (x86)\Microsoft Visual Studio
</span><br>
<span class="quotelev1">&gt; 10.0\VC\include\stdint.h(73): warning C4005: 'INT16_MIN' : macro
</span><br>
<span class="quotelev1">&gt; redefinition
</span><br>
<span class="quotelev1">&gt; 3&gt;           C:\a\openmpi-1.3.3\opal/win32/win_compat.h(169) : see previous
</span><br>
<span class="quotelev1">&gt; definition of 'INT16_MIN'
</span><br>
<span class="quotelev1">&gt; 3&gt;C:\Program Files (x86)\Microsoft Visual Studio
</span><br>
<span class="quotelev1">&gt; 10.0\VC\include\stdint.h(74): warning C4005: 'INT32_MIN' : macro
</span><br>
<span class="quotelev1">&gt; redefinition
</span><br>
<span class="quotelev1">&gt; 3&gt;           C:\a\openmpi-1.3.3\opal/win32/win_compat.h(160) : see previous
</span><br>
<span class="quotelev1">&gt; definition of 'INT32_MIN'
</span><br>
<span class="quotelev1">&gt; 3&gt;C:\Program Files (x86)\Microsoft Visual Studio
</span><br>
<span class="quotelev1">&gt; 10.0\VC\include\stdint.h(77): warning C4005: 'INT16_MAX' : macro
</span><br>
<span class="quotelev1">&gt; redefinition
</span><br>
<span class="quotelev1">&gt; 3&gt;           C:\a\openmpi-1.3.3\opal/win32/win_compat.h(172) : see previous
</span><br>
<span class="quotelev1">&gt; definition of 'INT16_MAX'
</span><br>
<span class="quotelev1">&gt; 2&gt;C:\Program Files (x86)\Microsoft Visual Studio
</span><br>
<span class="quotelev1">&gt; 10.0\VC\include\stdint.h(73): warning C4005: 'INT16_MIN' : macro
</span><br>
<span class="quotelev1">&gt; redefinition
</span><br>
<span class="quotelev1">&gt; 2&gt;           C:\a\openmpi-1.3.3\opal/win32/win_compat.h(169) : see previous
</span><br>
<span class="quotelev1">&gt; definition of 'INT16_MIN'
</span><br>
<span class="quotelev1">&gt; 2&gt;C:\Program Files (x86)\Microsoft Visual Studio
</span><br>
<span class="quotelev1">&gt; 10.0\VC\include\stdint.h(74): warning C4005: 'INT32_MIN' : macro
</span><br>
<span class="quotelev1">&gt; redefinition
</span><br>
<span class="quotelev1">&gt; 2&gt;           C:\a\openmpi-1.3.3\opal/win32/win_compat.h(160) : see previous
</span><br>
<span class="quotelev1">&gt; definition of 'INT32_MIN'
</span><br>
<span class="quotelev1">&gt; 2&gt;C:\Program Files (x86)\Microsoft Visual Studio
</span><br>
<span class="quotelev1">&gt; 10.0\VC\include\stdint.h(77): warning C4005: 'INT16_MAX' : macro
</span><br>
<span class="quotelev1">&gt; redefinition
</span><br>
<span class="quotelev1">&gt; 2&gt;           C:\a\openmpi-1.3.3\opal/win32/win_compat.h(172) : see previous
</span><br>
<span class="quotelev1">&gt; definition of 'INT16_MAX'
</span><br>
<span class="quotelev1">&gt; 2&gt;C:\Program Files (x86)\Microsoft Visual Studio
</span><br>
<span class="quotelev1">&gt; 10.0\VC\include\stdint.h(78): warning C4005: 'INT32_MAX' : macro
</span><br>
<span class="quotelev1">&gt; redefinition
</span><br>
<span class="quotelev1">&gt; 2&gt;           C:\a\openmpi-1.3.3\opal/win32/win_compat.h(157) : see previous
</span><br>
<span class="quotelev1">&gt; definition of 'INT32_MAX'
</span><br>
<span class="quotelev1">&gt; 2&gt;C:\Program Files (x86)\Microsoft Visual Studio
</span><br>
<span class="quotelev1">&gt; 10.0\VC\include\stdint.h(79): warning C4005: 'UINT8_MAX' : macro
</span><br>
<span class="quotelev1">&gt; redefinition
</span><br>
<span class="quotelev1">&gt; 2&gt;           C:\a\openmpi-1.3.3\opal/win32/win_compat.h(175) : see previous
</span><br>
<span class="quotelev1">&gt; definition of 'UINT8_MAX'
</span><br>
<span class="quotelev1">&gt; 2&gt;C:\Program Files (x86)\Microsoft Visual Studio
</span><br>
<span class="quotelev1">&gt; 10.0\VC\include\stdint.h(80): warning C4005: 'UINT16_MAX' : macro
</span><br>
<span class="quotelev1">&gt; redefinition
</span><br>
<span class="quotelev1">&gt; 2&gt;           C:\a\openmpi-1.3.3\opal/win32/win_compat.h(166) : see previous
</span><br>
<span class="quotelev1">&gt; definition of 'UINT16_MAX'
</span><br>
<span class="quotelev1">&gt; 2&gt;C:\Program Files (x86)\Microsoft Visual Studio
</span><br>
<span class="quotelev1">&gt; 10.0\VC\include\stdint.h(81): warning C4005: 'UINT32_MAX' : macro
</span><br>
<span class="quotelev1">&gt; redefinition
</span><br>
<span class="quotelev1">&gt; 2&gt;           C:\a\openmpi-1.3.3\opal/win32/win_compat.h(151) : see previous
</span><br>
<span class="quotelev1">&gt; definition of 'UINT32_MAX'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any thoughts?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -kt
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: George Bosilca [mailto:bosilca_at_[hidden]]
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Friday, July 23, 2010 10:55 AM
</span><br>
<span class="quotelev2">&gt;&gt; To: kgt_at_[hidden]; Open MPI Developers
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI devel] Can OpenMPI be compiled with Visual Studio 2010?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Kelly,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Windows is still a target platform for Open MPI which is supposed to build
</span><br>
<span class="quotelev2">&gt;&gt; nicely with all versions of Visual Studio. Personally I didn't test the
</span><br>
<span class="quotelev1">&gt; 2010
</span><br>
<span class="quotelev2">&gt;&gt; version, but if you provide us with the compilation output file we might
</span><br>
<span class="quotelev1">&gt; be
</span><br>
<span class="quotelev2">&gt;&gt; able to help.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;      george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 23, 2010, at 12:40 , Kelly Thompson wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I would like to know if anyone is trying to build Open-MPI under Visual
</span><br>
<span class="quotelev2">&gt;&gt; Studio 2010?  I see that 1.3.3 was built under VS 2008, but I would like
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev2">&gt;&gt; build under the 2010 version and have been unsuccessful so far.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can someone tell me if MSVC continues to be a target platform?  Is there
</span><br>
<span class="quotelev1">&gt; a
</span><br>
<span class="quotelev2">&gt;&gt; wiki or other collaborative development site that deals with compiling
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI for the Windows platform?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -kt
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="8240.php">Joshua Hursey: "[OMPI devel] RFC: Checkpoint/Restart Advancements and Bug Fixes"</a>
<li><strong>Previous message:</strong> <a href="8238.php">Jeff Squyres: "[OMPI devel] 1.5rc5 posted!"</a>
<li><strong>In reply to:</strong> <a href="8220.php">Kelly Thompson: "Re: [OMPI devel] Can OpenMPI be compiled with Visual Studio 2010?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/08/8242.php">Shiqing Fan: "Re: [OMPI devel] Can OpenMPI be compiled with Visual Studio 2010?"</a>
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
