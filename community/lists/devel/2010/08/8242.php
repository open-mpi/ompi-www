<?
$subject_val = "Re: [OMPI devel] Can OpenMPI be compiled with Visual Studio 2010?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  2 04:20:29 2010" -->
<!-- isoreceived="20100802082029" -->
<!-- sent="Mon, 02 Aug 2010 10:21:48 +0200" -->
<!-- isosent="20100802082148" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Can OpenMPI be compiled with Visual Studio 2010?" -->
<!-- id="4C56801C.2050908_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTimu+EUbhsS6zfR3YrEv1JjgrvHpwEmhgHqRPGFP_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2010-08-02 04:21:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8243.php">Terry Dontje: "[OMPI devel] RFC:  Add new Solaris sysinfo component"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/07/8241.php">Ralph Castain: "Re: [OMPI devel] RFC: Checkpoint/Restart Advancements and Bug Fixes"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/07/8215.php">Kelly Thompson: "[OMPI devel] Can OpenMPI be compiled with Visual Studio 2010?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Kelly,
<br>
<p>The problem was some properties were overwritten by VS 2010, so that it 
<br>
couldn't find the headers. It seems to be a incompatible between CMake 
<br>
and VS 2010.
<br>
<p>I believe I fixed this in trunk by using other CMake commands which 
<br>
doesn't have such problem. Could you please have a try?
<br>
<p><p>Regards,
<br>
Shiqing
<br>
<p><p>On 2010-8-1 12:18 AM, Kelly Thompson wrote:
<br>
<span class="quotelev1">&gt; That CMake ticket appears to be closed (marked invalid).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've spent a few hours trying to put configured headers in the 
</span><br>
<span class="quotelev1">&gt; expected places, but, so far, I have not been able to build openmpi 
</span><br>
<span class="quotelev1">&gt; with VS 2010.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -kt
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; Kelly (KT) Thompson
</span><br>
<span class="quotelev1">&gt; kt_at_[hidden] &lt;mailto:kt_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Jul 30, 2010 at 3:08 AM, Shiqing Fan &lt;fan_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:fan_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Hi Kelly,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I saw this problem too, but I didn't find a proper solution yet.
</span><br>
<span class="quotelev1">&gt;     It seems like an issue with VS intellisense behavior. See this
</span><br>
<span class="quotelev1">&gt;     CMake ticket: <a href="http://www.itk.org/Bug/view.php?id=10572">http://www.itk.org/Bug/view.php?id=10572</a>.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Have you succeeded with it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Thanks,
</span><br>
<span class="quotelev1">&gt;     Shiqing
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On 2010-7-26 4:39 PM, Kelly Thompson wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Hi George,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         I have the source for 1.3.3 checked out.  The CMake step
</span><br>
<span class="quotelev1">&gt;         completes without
</span><br>
<span class="quotelev1">&gt;         reporting any errors or failures, but the compile under Visual
</span><br>
<span class="quotelev1">&gt;         Studio 2010
</span><br>
<span class="quotelev1">&gt;         fails with various bad things:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         This looks like a problem with CMake.  Either the config file
</span><br>
<span class="quotelev1">&gt;         was not
</span><br>
<span class="quotelev1">&gt;         generated correctly or the CMake files aren't looking in the
</span><br>
<span class="quotelev1">&gt;         correct
</span><br>
<span class="quotelev1">&gt;         locations...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         1&gt;ClCompile:
</span><br>
<span class="quotelev1">&gt;         1&gt;   win32.c
</span><br>
<span class="quotelev1">&gt;         1&gt;..\..\opal\event\WIN32-Code\win32.c(28): fatal error C1083:
</span><br>
<span class="quotelev1">&gt;         Cannot open
</span><br>
<span class="quotelev1">&gt;         include file: 'opal_config.h': No such file or directory
</span><br>
<span class="quotelev1">&gt;         1&gt;   event.c
</span><br>
<span class="quotelev1">&gt;         1&gt;..\..\opal\event\event.c(28): fatal error C1083: Cannot open
</span><br>
<span class="quotelev1">&gt;         include file:
</span><br>
<span class="quotelev1">&gt;         'opal_config.h': No such file or directory
</span><br>
<span class="quotelev1">&gt;         1&gt;   evutil.c
</span><br>
<span class="quotelev1">&gt;         1&gt;..\..\opal\event\evutil.c(27): fatal error C1083: Cannot
</span><br>
<span class="quotelev1">&gt;         open include
</span><br>
<span class="quotelev1">&gt;         file: 'opal_config.h': No such file or directory
</span><br>
<span class="quotelev1">&gt;         1&gt;   log.c
</span><br>
<span class="quotelev1">&gt;         1&gt;..\..\opal\event\log.c(40): fatal error C1083: Cannot open
</span><br>
<span class="quotelev1">&gt;         include file:
</span><br>
<span class="quotelev1">&gt;         'opal_config.h': No such file or directory
</span><br>
<span class="quotelev1">&gt;         1&gt;   select.c
</span><br>
<span class="quotelev1">&gt;         1&gt;..\..\opal\event\select.c(29): fatal error C1083: Cannot
</span><br>
<span class="quotelev1">&gt;         open include
</span><br>
<span class="quotelev1">&gt;         file: 'opal_config.h': No such file or directory
</span><br>
<span class="quotelev1">&gt;         1&gt;   signal.c
</span><br>
<span class="quotelev1">&gt;         1&gt;..\..\opal\event\signal.c(29): fatal error C1083: Cannot
</span><br>
<span class="quotelev1">&gt;         open include
</span><br>
<span class="quotelev1">&gt;         file: 'opal_config.h': No such file or directory
</span><br>
<span class="quotelev1">&gt;         1&gt;   compat
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         I think the stdint.h file included with Visual Studio 2010 is
</span><br>
<span class="quotelev1">&gt;         different than
</span><br>
<span class="quotelev1">&gt;         the one provided with 2008.  I am seeing thousands of warnings
</span><br>
<span class="quotelev1">&gt;         like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         2&gt;ClCompile:
</span><br>
<span class="quotelev1">&gt;         2&gt;   orted_comm.c
</span><br>
<span class="quotelev1">&gt;         4&gt;C:\Program Files (x86)\Microsoft Visual Studio
</span><br>
<span class="quotelev1">&gt;         10.0\VC\include\stdint.h(73): warning C4005: 'INT16_MIN' : macro
</span><br>
<span class="quotelev1">&gt;         redefinition
</span><br>
<span class="quotelev1">&gt;         4&gt;           C:\a\openmpi-1.3.3\opal/win32/win_compat.h(169) :
</span><br>
<span class="quotelev1">&gt;         see previous
</span><br>
<span class="quotelev1">&gt;         definition of 'INT16_MIN'
</span><br>
<span class="quotelev1">&gt;         4&gt;C:\Program Files (x86)\Microsoft Visual Studio
</span><br>
<span class="quotelev1">&gt;         10.0\VC\include\stdint.h(74): warning C4005: 'INT32_MIN' : macro
</span><br>
<span class="quotelev1">&gt;         redefinition
</span><br>
<span class="quotelev1">&gt;         4&gt;           C:\a\openmpi-1.3.3\opal/win32/win_compat.h(160) :
</span><br>
<span class="quotelev1">&gt;         see previous
</span><br>
<span class="quotelev1">&gt;         definition of 'INT32_MIN'
</span><br>
<span class="quotelev1">&gt;         4&gt;C:\Program Files (x86)\Microsoft Visual Studio
</span><br>
<span class="quotelev1">&gt;         10.0\VC\include\stdint.h(77): warning C4005: 'INT16_MAX' : macro
</span><br>
<span class="quotelev1">&gt;         redefinition
</span><br>
<span class="quotelev1">&gt;         4&gt;           C:\a\openmpi-1.3.3\opal/win32/win_compat.h(172) :
</span><br>
<span class="quotelev1">&gt;         see previous
</span><br>
<span class="quotelev1">&gt;         definition of 'INT16_MAX'
</span><br>
<span class="quotelev1">&gt;         3&gt;C:\Program Files (x86)\Microsoft Visual Studio
</span><br>
<span class="quotelev1">&gt;         10.0\VC\include\stdint.h(73): warning C4005: 'INT16_MIN' : macro
</span><br>
<span class="quotelev1">&gt;         redefinition
</span><br>
<span class="quotelev1">&gt;         3&gt;           C:\a\openmpi-1.3.3\opal/win32/win_compat.h(169) :
</span><br>
<span class="quotelev1">&gt;         see previous
</span><br>
<span class="quotelev1">&gt;         definition of 'INT16_MIN'
</span><br>
<span class="quotelev1">&gt;         3&gt;C:\Program Files (x86)\Microsoft Visual Studio
</span><br>
<span class="quotelev1">&gt;         10.0\VC\include\stdint.h(74): warning C4005: 'INT32_MIN' : macro
</span><br>
<span class="quotelev1">&gt;         redefinition
</span><br>
<span class="quotelev1">&gt;         3&gt;           C:\a\openmpi-1.3.3\opal/win32/win_compat.h(160) :
</span><br>
<span class="quotelev1">&gt;         see previous
</span><br>
<span class="quotelev1">&gt;         definition of 'INT32_MIN'
</span><br>
<span class="quotelev1">&gt;         3&gt;C:\Program Files (x86)\Microsoft Visual Studio
</span><br>
<span class="quotelev1">&gt;         10.0\VC\include\stdint.h(77): warning C4005: 'INT16_MAX' : macro
</span><br>
<span class="quotelev1">&gt;         redefinition
</span><br>
<span class="quotelev1">&gt;         3&gt;           C:\a\openmpi-1.3.3\opal/win32/win_compat.h(172) :
</span><br>
<span class="quotelev1">&gt;         see previous
</span><br>
<span class="quotelev1">&gt;         definition of 'INT16_MAX'
</span><br>
<span class="quotelev1">&gt;         2&gt;C:\Program Files (x86)\Microsoft Visual Studio
</span><br>
<span class="quotelev1">&gt;         10.0\VC\include\stdint.h(73): warning C4005: 'INT16_MIN' : macro
</span><br>
<span class="quotelev1">&gt;         redefinition
</span><br>
<span class="quotelev1">&gt;         2&gt;           C:\a\openmpi-1.3.3\opal/win32/win_compat.h(169) :
</span><br>
<span class="quotelev1">&gt;         see previous
</span><br>
<span class="quotelev1">&gt;         definition of 'INT16_MIN'
</span><br>
<span class="quotelev1">&gt;         2&gt;C:\Program Files (x86)\Microsoft Visual Studio
</span><br>
<span class="quotelev1">&gt;         10.0\VC\include\stdint.h(74): warning C4005: 'INT32_MIN' : macro
</span><br>
<span class="quotelev1">&gt;         redefinition
</span><br>
<span class="quotelev1">&gt;         2&gt;           C:\a\openmpi-1.3.3\opal/win32/win_compat.h(160) :
</span><br>
<span class="quotelev1">&gt;         see previous
</span><br>
<span class="quotelev1">&gt;         definition of 'INT32_MIN'
</span><br>
<span class="quotelev1">&gt;         2&gt;C:\Program Files (x86)\Microsoft Visual Studio
</span><br>
<span class="quotelev1">&gt;         10.0\VC\include\stdint.h(77): warning C4005: 'INT16_MAX' : macro
</span><br>
<span class="quotelev1">&gt;         redefinition
</span><br>
<span class="quotelev1">&gt;         2&gt;           C:\a\openmpi-1.3.3\opal/win32/win_compat.h(172) :
</span><br>
<span class="quotelev1">&gt;         see previous
</span><br>
<span class="quotelev1">&gt;         definition of 'INT16_MAX'
</span><br>
<span class="quotelev1">&gt;         2&gt;C:\Program Files (x86)\Microsoft Visual Studio
</span><br>
<span class="quotelev1">&gt;         10.0\VC\include\stdint.h(78): warning C4005: 'INT32_MAX' : macro
</span><br>
<span class="quotelev1">&gt;         redefinition
</span><br>
<span class="quotelev1">&gt;         2&gt;           C:\a\openmpi-1.3.3\opal/win32/win_compat.h(157) :
</span><br>
<span class="quotelev1">&gt;         see previous
</span><br>
<span class="quotelev1">&gt;         definition of 'INT32_MAX'
</span><br>
<span class="quotelev1">&gt;         2&gt;C:\Program Files (x86)\Microsoft Visual Studio
</span><br>
<span class="quotelev1">&gt;         10.0\VC\include\stdint.h(79): warning C4005: 'UINT8_MAX' : macro
</span><br>
<span class="quotelev1">&gt;         redefinition
</span><br>
<span class="quotelev1">&gt;         2&gt;           C:\a\openmpi-1.3.3\opal/win32/win_compat.h(175) :
</span><br>
<span class="quotelev1">&gt;         see previous
</span><br>
<span class="quotelev1">&gt;         definition of 'UINT8_MAX'
</span><br>
<span class="quotelev1">&gt;         2&gt;C:\Program Files (x86)\Microsoft Visual Studio
</span><br>
<span class="quotelev1">&gt;         10.0\VC\include\stdint.h(80): warning C4005: 'UINT16_MAX' : macro
</span><br>
<span class="quotelev1">&gt;         redefinition
</span><br>
<span class="quotelev1">&gt;         2&gt;           C:\a\openmpi-1.3.3\opal/win32/win_compat.h(166) :
</span><br>
<span class="quotelev1">&gt;         see previous
</span><br>
<span class="quotelev1">&gt;         definition of 'UINT16_MAX'
</span><br>
<span class="quotelev1">&gt;         2&gt;C:\Program Files (x86)\Microsoft Visual Studio
</span><br>
<span class="quotelev1">&gt;         10.0\VC\include\stdint.h(81): warning C4005: 'UINT32_MAX' : macro
</span><br>
<span class="quotelev1">&gt;         redefinition
</span><br>
<span class="quotelev1">&gt;         2&gt;           C:\a\openmpi-1.3.3\opal/win32/win_compat.h(151) :
</span><br>
<span class="quotelev1">&gt;         see previous
</span><br>
<span class="quotelev1">&gt;         definition of 'UINT32_MAX'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Any thoughts?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         -kt
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             -----Original Message-----
</span><br>
<span class="quotelev1">&gt;             From: George Bosilca [mailto:bosilca_at_[hidden]
</span><br>
<span class="quotelev1">&gt;             &lt;mailto:bosilca_at_[hidden]&gt;]
</span><br>
<span class="quotelev1">&gt;             Sent: Friday, July 23, 2010 10:55 AM
</span><br>
<span class="quotelev1">&gt;             To: kgt_at_[hidden] &lt;mailto:kgt_at_[hidden]&gt;; Open MPI Developers
</span><br>
<span class="quotelev1">&gt;             Subject: Re: [OMPI devel] Can OpenMPI be compiled with
</span><br>
<span class="quotelev1">&gt;             Visual Studio 2010?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Kelly,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Windows is still a target platform for Open MPI which is
</span><br>
<span class="quotelev1">&gt;             supposed to build
</span><br>
<span class="quotelev1">&gt;             nicely with all versions of Visual Studio. Personally I
</span><br>
<span class="quotelev1">&gt;             didn't test the
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         2010
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             version, but if you provide us with the compilation output
</span><br>
<span class="quotelev1">&gt;             file we might
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         be
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             able to help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;               Thanks,
</span><br>
<span class="quotelev1">&gt;                 george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             On Jul 23, 2010, at 12:40 , Kelly Thompson wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 I would like to know if anyone is trying to build
</span><br>
<span class="quotelev1">&gt;                 Open-MPI under Visual
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Studio 2010?  I see that 1.3.3 was built under VS 2008,
</span><br>
<span class="quotelev1">&gt;             but I would like
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         to
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             build under the 2010 version and have been unsuccessful so
</span><br>
<span class="quotelev1">&gt;             far.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 Can someone tell me if MSVC continues to be a target
</span><br>
<span class="quotelev1">&gt;                 platform?  Is there
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         a
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             wiki or other collaborative development site that deals
</span><br>
<span class="quotelev1">&gt;             with compiling
</span><br>
<span class="quotelev1">&gt;             OpenMPI for the Windows platform?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 -kt
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 _______________________________________________
</span><br>
<span class="quotelev1">&gt;                 devel mailing list
</span><br>
<span class="quotelev1">&gt;                 devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;                 <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         _______________________________________________
</span><br>
<span class="quotelev1">&gt;         devel mailing list
</span><br>
<span class="quotelev1">&gt;         devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     -- 
</span><br>
<span class="quotelev1">&gt;     --------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;     Shiqing Fan <a href="http://www.hlrs.de/people/fan">http://www.hlrs.de/people/fan</a>
</span><br>
<span class="quotelev1">&gt;     High Performance Computing           Tel.: +49 711 685 87234
</span><br>
<span class="quotelev1">&gt;      Center Stuttgart (HLRS)            Fax.: +49 711 685 65832
</span><br>
<span class="quotelev1">&gt;     Address:Allmandring 30               email: fan_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:fan_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     70569 Stuttgart
</span><br>
<span class="quotelev1">&gt;
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
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8242/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8243.php">Terry Dontje: "[OMPI devel] RFC:  Add new Solaris sysinfo component"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/07/8241.php">Ralph Castain: "Re: [OMPI devel] RFC: Checkpoint/Restart Advancements and Bug Fixes"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/07/8215.php">Kelly Thompson: "[OMPI devel] Can OpenMPI be compiled with Visual Studio 2010?"</a>
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
