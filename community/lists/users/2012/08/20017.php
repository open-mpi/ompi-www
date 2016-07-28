<?
$subject_val = "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 27 07:49:05 2012" -->
<!-- isoreceived="20120827114905" -->
<!-- sent="Mon, 27 Aug 2012 13:51:10 +0200" -->
<!-- isosent="20120827115110" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7" -->
<!-- id="503B5F2E.604_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201208271102.q7RB2N1t011099_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7<br>
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-27 07:51:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20018.php">Siegmar Gross: "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
<li><strong>Previous message:</strong> <a href="20016.php">Siegmar Gross: "[OMPI users] gcc problem compiling openmpi-1.6.1 on Solaris 10 sparc"</a>
<li><strong>In reply to:</strong> <a href="20014.php">Siegmar Gross: "[OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20018.php">Siegmar Gross: "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Siegmar,
<br>
<p>I didn't have this problem when building the binary release.
<br>
<p>But to solve the problem is very easy. You can just open \openmpi-1.6.1\ompi\mca\osc\rdma\osc_rdma_data_move.c, and go to line 1099, change &quot;void*&quot; to &quot;void**&quot;. This will get rid of the error.
<br>
<p>For the warnings, they are just some redefinitions that cannot be avoided, they are totally harmless.
<br>
<p><p>Regards,
<br>
Shiqing
<br>
&nbsp;&nbsp;
<br>
<p><p><p>On 2012-08-27 1:02 PM, Siegmar Gross wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried to compile openmpi-1.6.1 with CMake-2.8.3 and Visual Studio
</span><br>
<span class="quotelev1">&gt; 2010 on Windows 7. All service packs and patches from Microsoft are
</span><br>
<span class="quotelev1">&gt; installed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I changed the following options:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CMAKE_BUILD_TYPE: &quot;Debug&quot; modified to &quot;Release&quot;
</span><br>
<span class="quotelev1">&gt; CMAKE_INSTALL_PREFIX: modified to &quot;c:/Program Files (x86)/openmpi-1.6.1&quot;
</span><br>
<span class="quotelev1">&gt; OMPI_ENABLE_THREAD_MULTIPLE: &quot;no&quot; changed to &quot;yes&quot;
</span><br>
<span class="quotelev1">&gt; OMPI_RELEASE_BUILD: &quot;no&quot; changed to &quot;yes&quot;
</span><br>
<span class="quotelev1">&gt; OPAL_ENABLE_HETEREOGENEOUS:SUPPORT: &quot;no&quot; changed to &quot;yes&quot;
</span><br>
<span class="quotelev1">&gt; OPAL_ENABLE_IPV6:  &quot;yes&quot; changed to &quot;no&quot;
</span><br>
<span class="quotelev1">&gt; OPAL_ENABLE_MULTI_THREADS: &quot;no&quot; changed to &quot;yes&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I also selected &quot;Release&quot; in &quot;Visual Studio&quot;. Unfortunately I got the
</span><br>
<span class="quotelev1">&gt; following error (&quot;void *&quot; cannot be converted to &quot;void **&quot;).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Fehler	77	error C2440: '=': 'void *' kann nicht in 'void **'
</span><br>
<span class="quotelev1">&gt;    konvertiert werden
</span><br>
<span class="quotelev1">&gt;    ...\openmpi-1.6.1\ompi\mca\osc\rdma\osc_rdma_data_move.c
</span><br>
<span class="quotelev1">&gt;    1099	1	libmpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Fehler	90	error LNK1181: Eingabedatei &quot;..\..\..\Release\libmpi.lib&quot;
</span><br>
<span class="quotelev1">&gt;    kann nicht ge&#246;ffnet werden.
</span><br>
<span class="quotelev1">&gt;    ...\openmpi-1.6.1-Windows_VS2010_x32\ompi\tools\ompi-server\LINK
</span><br>
<span class="quotelev1">&gt;    ompi-server
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Fehler	94	error LNK1181: Eingabedatei &quot;..\..\..\Release\libmpi.lib&quot;
</span><br>
<span class="quotelev1">&gt;    kann nicht ge&#246;ffnet werden.
</span><br>
<span class="quotelev1">&gt;    ...\openmpi-1.6.1-Windows_VS2010_x32\ompi\tools\ompi_info\LINK
</span><br>
<span class="quotelev1">&gt;    ompi_info
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Fehler	162	error LNK1181: Eingabedatei &quot;..\..\..\Release\libmpi.lib&quot;
</span><br>
<span class="quotelev1">&gt;    kann nicht ge&#246;ffnet werden.
</span><br>
<span class="quotelev1">&gt;    ...\openmpi-1.6.1-Windows_VS2010_x32\ompi\mpi\cxx\LINK
</span><br>
<span class="quotelev1">&gt;    libmpi_cxx
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I get also a lot of warnings, from wich I have listed a few.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Warnung	1	warning C4005: 'PACKAGE_BUGREPORT': Makro-Neudefinition
</span><br>
<span class="quotelev1">&gt;    ...\openmpi-1.6.1\opal\event\win32-code\config.h
</span><br>
<span class="quotelev1">&gt;    185	1	libopen-pal
</span><br>
<span class="quotelev1">&gt; Warnung	2	warning C4005: 'PACKAGE_NAME': Makro-Neudefinition
</span><br>
<span class="quotelev1">&gt;    ...\openmpi-1.6.1\opal\event\win32-code\config.h
</span><br>
<span class="quotelev1">&gt;    188	1	libopen-pal
</span><br>
<span class="quotelev1">&gt; Warnung	3	warning C4005: 'PACKAGE_STRING': Makro-Neudefinition
</span><br>
<span class="quotelev1">&gt;    ...\openmpi-1.6.1\opal\event\win32-code\config.h
</span><br>
<span class="quotelev1">&gt;    191	1	libopen-pal
</span><br>
<span class="quotelev1">&gt; Warnung	4	warning C4005: 'PACKAGE_TARNAME': Makro-Neudefinition
</span><br>
<span class="quotelev1">&gt;    ...\openmpi-1.6.1\opal\event\win32-code\config.h
</span><br>
<span class="quotelev1">&gt;    194	1	libopen-pal
</span><br>
<span class="quotelev1">&gt; Warnung	5	warning C4005: 'PACKAGE_VERSION': Makro-Neudefinition
</span><br>
<span class="quotelev1">&gt;    ...\openmpi-1.6.1\opal\event\win32-code\config.h
</span><br>
<span class="quotelev1">&gt;    197	1	libopen-pal
</span><br>
<span class="quotelev1">&gt; Warnung	6	warning C4005: '__func__': Makro-Neudefinition
</span><br>
<span class="quotelev1">&gt;    ...\openmpi-1.6.1\opal\event\win32-code\config.h
</span><br>
<span class="quotelev1">&gt;    212	1	libopen-pal
</span><br>
<span class="quotelev1">&gt; Warnung	7	warning C4013: 'opal_event_warn' undefiniert;
</span><br>
<span class="quotelev1">&gt;     Annahme: extern mit R&#252;ckgabetyp int
</span><br>
<span class="quotelev1">&gt;    ...\openmpi-1.6.1\opal\event\WIN32-Code\win32.c
</span><br>
<span class="quotelev1">&gt;    170	1	libopen-pal
</span><br>
<span class="quotelev1">&gt; Warnung	8	warning C4005: 'INT8_MIN': Makro-Neudefinition
</span><br>
<span class="quotelev1">&gt;    C:\Program Files (x86)\Microsoft Visual Studio 10.0\VC\include\stdint.h
</span><br>
<span class="quotelev1">&gt;    72	1	libopen-pal
</span><br>
<span class="quotelev1">&gt; Warnung	9	warning C4005: 'INT16_MIN': Makro-Neudefinition
</span><br>
<span class="quotelev1">&gt;    C:\Program Files (x86)\Microsoft Visual Studio 10.0\VC\include\stdint.h
</span><br>
<span class="quotelev1">&gt;    73	1	libopen-pal
</span><br>
<span class="quotelev1">&gt; Warnung	10	warning C4005: 'INT32_MIN': Makro-Neudefinition
</span><br>
<span class="quotelev1">&gt;    C:\Program Files (x86)\Microsoft Visual Studio 10.0\VC\include\stdint.h
</span><br>
<span class="quotelev1">&gt;    74	1	libopen-pal
</span><br>
<span class="quotelev1">&gt; Warnung	11	warning C4005: 'INT8_MAX': Makro-Neudefinition
</span><br>
<span class="quotelev1">&gt;    C:\Program Files (x86)\Microsoft Visual Studio 10.0\VC\include\stdint.h
</span><br>
<span class="quotelev1">&gt;    76	1	libopen-pal
</span><br>
<span class="quotelev1">&gt; Warnung	12	warning C4005: 'INT16_MAX': Makro-Neudefinition
</span><br>
<span class="quotelev1">&gt;    C:\Program Files (x86)\Microsoft Visual Studio 10.0\VC\include\stdint.h
</span><br>
<span class="quotelev1">&gt;    77	1	libopen-pal
</span><br>
<span class="quotelev1">&gt; Warnung	13	warning C4005: 'INT32_MAX': Makro-Neudefinition
</span><br>
<span class="quotelev1">&gt;    C:\Program Files (x86)\Microsoft Visual Studio 10.0\VC\include\stdint.h
</span><br>
<span class="quotelev1">&gt;    78	1	libopen-pal
</span><br>
<span class="quotelev1">&gt; Warnung	14	warning C4005: 'UINT8_MAX': Makro-Neudefinition
</span><br>
<span class="quotelev1">&gt;    C:\Program Files (x86)\Microsoft Visual Studio 10.0\VC\include\stdint.h
</span><br>
<span class="quotelev1">&gt;    79	1	libopen-pal
</span><br>
<span class="quotelev1">&gt; Warnung	15	warning C4005: 'UINT16_MAX': Makro-Neudefinition
</span><br>
<span class="quotelev1">&gt;    C:\Program Files (x86)\Microsoft Visual Studio 10.0\VC\include\stdint.h
</span><br>
<span class="quotelev1">&gt;    80	1	libopen-pal
</span><br>
<span class="quotelev1">&gt; Warnung	16	warning C4005: 'UINT32_MAX': Makro-Neudefinition
</span><br>
<span class="quotelev1">&gt;    C:\Program Files (x86)\Microsoft Visual Studio 10.0\VC\include\stdint.h
</span><br>
<span class="quotelev1">&gt;    81	1	libopen-pal
</span><br>
<span class="quotelev1">&gt; Warnung	17	warning C4018: '&lt;': Konflikt zwischen 'signed' und 'unsigned'
</span><br>
<span class="quotelev1">&gt;    ...\openmpi-1.6.1-Windows_VS2010_x32\opal\keyval_lex.c
</span><br>
<span class="quotelev1">&gt;    libopen-pal
</span><br>
<span class="quotelev1">&gt; Warnung	18	warning C4273: '_isatty': Inkonsistente DLL-Bindung.
</span><br>
<span class="quotelev1">&gt;    ...\openmpi-1.6.1-Windows_VS2010_x32\opal\keyval_lex.c
</span><br>
<span class="quotelev1">&gt;    libopen-pal
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What can I do to get around the error so that I can compile Open MPI?
</span><br>
<span class="quotelev1">&gt; Thank you very much for any suggestions in advance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kind regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Siegmar
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
---------------------------------------------------------------
Shiqing Fan
High Performance Computing Center Stuttgart (HLRS)
Tel: ++49(0)711-685-87234      Nobelstrasse 19
Fax: ++49(0)711-685-65832      70569 Stuttgart
<a href="http://www.hlrs.de/organization/people/shiqing-fan/">http://www.hlrs.de/organization/people/shiqing-fan/</a>
email: fan_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20018.php">Siegmar Gross: "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
<li><strong>Previous message:</strong> <a href="20016.php">Siegmar Gross: "[OMPI users] gcc problem compiling openmpi-1.6.1 on Solaris 10 sparc"</a>
<li><strong>In reply to:</strong> <a href="20014.php">Siegmar Gross: "[OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20018.php">Siegmar Gross: "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
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
