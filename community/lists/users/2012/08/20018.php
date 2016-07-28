<?
$subject_val = "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 27 10:15:40 2012" -->
<!-- isoreceived="20120827141540" -->
<!-- sent="Mon, 27 Aug 2012 16:02:31 +0200 (CEST)" -->
<!-- isosent="20120827140231" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7" -->
<!-- id="201208271402.q7RE2VLi011730_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI users] error compiling openmpi-1.6.1 on Windows 7" -->
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
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-27 10:02:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20019.php">Jeff Squyres: "Re: [OMPI users] ORTE_ERROR: orte_ess_base_open failed"</a>
<li><strong>Previous message:</strong> <a href="20017.php">Shiqing Fan: "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
<li><strong>Maybe in reply to:</strong> <a href="20014.php">Siegmar Gross: "[OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20027.php">Shiqing Fan: "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
<li><strong>Reply:</strong> <a href="20027.php">Shiqing Fan: "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>thank you very much for your reply. I compiled and installed
<br>
openmpi-1.6.1. Unfortunately I cannot compile programs because
<br>
&quot;mpicc&quot; uses wrong path names. I have set an environment for
<br>
openmpi-1.6.1 as you can see from the following output.
<br>
<p>D:\...prog\mpi\small_prog&gt;set | c:\cygwin\bin\grep openmpi
<br>
LIB=C:\Program Files (x86)\Microsoft Visual Studio 10.0\VC\lib\amd64;
<br>
&nbsp;&nbsp;C:\Program Files (x86)\Microsoft Visual Studio 10.0\VC\atlmfc\lib\amd64;
<br>
&nbsp;&nbsp;C:\Program Files (x86)\Microsoft SDKs\Windows\v7.0A\Lib\x64;
<br>
&nbsp;&nbsp;C:\Program Files\openmpi-1.6.1\lib
<br>
<p>LIBPATH=C:\Program Files (x86)\Microsoft Visual Studio 10.0\VC\lib\amd64;
<br>
&nbsp;&nbsp;C:\Program Files (x86)\Microsoft Visual Studio 10.0\VC\atlmfc\lib\amd64;
<br>
&nbsp;&nbsp;C:\Program Files\openmpi-1.6.1\lib
<br>
<p>Path=C:\Program Files (x86)\Microsoft Visual Studio 10.0\VC\bin\amd64;
<br>
&nbsp;&nbsp;C:\Program Files (x86)\Microsoft Visual Studio 10.0\VC\vcpackages;
<br>
&nbsp;&nbsp;C:\Program Files (x86)\Microsoft Visual Studio 10.0\Common7\IDE\;
<br>
&nbsp;&nbsp;C:\Program Files (x86)\Microsoft Visual Studio 10.0\Common7\Tools\;
<br>
&nbsp;&nbsp;C:\Program Files (x86)\Microsoft SDKs\Windows\v7.0A\Bin\NETFX 4.0 Tools\x64;
<br>
&nbsp;&nbsp;C:\Program Files (x86)\Microsoft SDKs\Windows\v7.0A\Bin\x64;
<br>
&nbsp;&nbsp;C:\Program Files (x86)\Microsoft SDKs\Windows\v7.0A\Bin\;
<br>
&nbsp;&nbsp;C:\Windows\System32;
<br>
&nbsp;&nbsp;C:\Windows;
<br>
&nbsp;&nbsp;C:\Windows\System32\Wbem;
<br>
&nbsp;&nbsp;C:\Program Files\openmpi-1.6.1\bin;
<br>
&nbsp;&nbsp;C:\cmd;.
<br>
<p><p><p>I get the following error when I try to compile my program
<br>
because of &quot;/LIBPATH:C:\Program Files (x86)\openmpi-1.6/lib&quot;.
<br>
<p>D:\...\prog\mpi\small_prog&gt;mpicc init_finalize.c
<br>
Microsoft (R) C/C++-Optimierungscompiler Version 16.00.40219.01 f&#252;r x64
<br>
Copyright (C) Microsoft Corporation. Alle Rechte vorbehalten.
<br>
init_finalize.c
<br>
Microsoft (R) Incremental Linker Version 10.00.40219.01
<br>
Copyright (C) Microsoft Corporation.  All rights reserved.
<br>
/out:init_finalize.exe
<br>
&quot;/LIBPATH:C:\Program Files (x86)\openmpi-1.6/lib&quot;
<br>
libmpi.lib
<br>
libopen-pal.lib
<br>
libopen-rte.lib
<br>
advapi32.lib
<br>
Ws2_32.lib
<br>
shlwapi.lib
<br>
init_finalize.obj
<br>
init_finalize.obj : error LNK2019: Verweis auf nicht aufgel&#246;stes externes Symbol &quot;__imp_MP
<br>
I_Finalize&quot; in Funktion &quot;main&quot;.
<br>
init_finalize.obj : error LNK2019: Verweis auf nicht aufgel&#246;stes externes Symbol &quot;__imp_MP
<br>
I_Init&quot; in Funktion &quot;main&quot;.
<br>
init_finalize.exe : fatal error LNK1120: 2 nicht aufgel&#246;ste externe Verweise.
<br>
<p><p><p>When I start in a new command shell without my MPI environment,
<br>
I get the following outputs for &quot;mpicc -show&quot;. The first one
<br>
is OK, but both others are wrong because they point to 32-bit
<br>
libraries instead of 64-bit ones. Why do both versions point
<br>
to openmpi-1.6? I downloaded and installed the precompiled
<br>
32- and 64-bit version 1.6 from open-mpi.org.
<br>
<p>C:\Program Files&gt;openmpi-1.5.1\bin\mpicc -show
<br>
cl.exe /I&quot;C:/Program Files/openmpi-1.5.1/include&quot; /TC /D &quot;OMPI_IMPORTS&quot; /D &quot;OPAL_IMPORTS&quot;
<br>
/D &quot;ORTE_IMPORTS&quot; /link /LIBPATH:&quot;C:/Program Files/openmpi-1.5.1/lib&quot; libmpi.lib libopen-p
<br>
al.lib libopen-rte.lib advapi32.lib Ws2_32.lib shlwapi.lib
<br>
<p>C:\Program Files&gt;openmpi-1.6\bin\mpicc -show
<br>
cl.exe /I&quot;C:\Program Files (x86)\openmpi-1.6/include&quot; /TC /DOMPI_IMPORTS /DOPAL_IMPORTS /D
<br>
ORTE_IMPORTS /link /LIBPATH:&quot;C:\Program Files (x86)\openmpi-1.6/lib&quot; libmpi.lib libopen-pa
<br>
l.lib libopen-rte.lib advapi32.lib Ws2_32.lib shlwapi.lib
<br>
<p>C:\Program Files&gt;openmpi-1.6.1\bin\mpicc -show
<br>
cl.exe /I&quot;C:\Program Files (x86)\openmpi-1.6/include&quot; /TC /DOMPI_IMPORTS /DOPAL_IMPORTS /D
<br>
ORTE_IMPORTS /link /LIBPATH:&quot;C:\Program Files (x86)\openmpi-1.6/lib&quot; libmpi.lib libopen-pa
<br>
l.lib libopen-rte.lib advapi32.lib Ws2_32.lib shlwapi.lib
<br>
<p><p>Do you have any idea what I have done wrong? Thank you very
<br>
much for any help in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<p><p><span class="quotelev1">&gt; I didn't have this problem when building the binary release.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But to solve the problem is very easy. You can just open
</span><br>
<span class="quotelev1">&gt; \openmpi-1.6.1\ompi\mca\osc\rdma\osc_rdma_data_move.c, and go
</span><br>
<span class="quotelev1">&gt; to line 1099, change &quot;void*&quot; to &quot;void**&quot;. This will get rid of the error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For the warnings, they are just some redefinitions that cannot
</span><br>
<span class="quotelev1">&gt; be avoided, they are totally harmless.
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 2012-08-27 1:02 PM, Siegmar Gross wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I tried to compile openmpi-1.6.1 with CMake-2.8.3 and Visual Studio
</span><br>
<span class="quotelev2">&gt; &gt; 2010 on Windows 7. All service packs and patches from Microsoft are
</span><br>
<span class="quotelev2">&gt; &gt; installed.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I changed the following options:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; CMAKE_BUILD_TYPE: &quot;Debug&quot; modified to &quot;Release&quot;
</span><br>
<span class="quotelev2">&gt; &gt; CMAKE_INSTALL_PREFIX: modified to &quot;c:/Program Files (x86)/openmpi-1.6.1&quot;
</span><br>
<span class="quotelev2">&gt; &gt; OMPI_ENABLE_THREAD_MULTIPLE: &quot;no&quot; changed to &quot;yes&quot;
</span><br>
<span class="quotelev2">&gt; &gt; OMPI_RELEASE_BUILD: &quot;no&quot; changed to &quot;yes&quot;
</span><br>
<span class="quotelev2">&gt; &gt; OPAL_ENABLE_HETEREOGENEOUS:SUPPORT: &quot;no&quot; changed to &quot;yes&quot;
</span><br>
<span class="quotelev2">&gt; &gt; OPAL_ENABLE_IPV6:  &quot;yes&quot; changed to &quot;no&quot;
</span><br>
<span class="quotelev2">&gt; &gt; OPAL_ENABLE_MULTI_THREADS: &quot;no&quot; changed to &quot;yes&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I also selected &quot;Release&quot; in &quot;Visual Studio&quot;. Unfortunately I got the
</span><br>
<span class="quotelev2">&gt; &gt; following error (&quot;void *&quot; cannot be converted to &quot;void **&quot;).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Fehler	77	error C2440: '=': 'void *' kann nicht in 'void **'
</span><br>
<span class="quotelev2">&gt; &gt;    konvertiert werden
</span><br>
<span class="quotelev2">&gt; &gt;    ...\openmpi-1.6.1\ompi\mca\osc\rdma\osc_rdma_data_move.c
</span><br>
<span class="quotelev2">&gt; &gt;    1099	1	libmpi
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Fehler	90	error LNK1181: Eingabedatei &quot;..\..\..\Release\libmpi.lib&quot;
</span><br>
<span class="quotelev2">&gt; &gt;    kann nicht ge&#246;ffnet werden.
</span><br>
<span class="quotelev2">&gt; &gt;    ...\openmpi-1.6.1-Windows_VS2010_x32\ompi\tools\ompi-server\LINK
</span><br>
<span class="quotelev2">&gt; &gt;    ompi-server
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Fehler	94	error LNK1181: Eingabedatei &quot;..\..\..\Release\libmpi.lib&quot;
</span><br>
<span class="quotelev2">&gt; &gt;    kann nicht ge&#246;ffnet werden.
</span><br>
<span class="quotelev2">&gt; &gt;    ...\openmpi-1.6.1-Windows_VS2010_x32\ompi\tools\ompi_info\LINK
</span><br>
<span class="quotelev2">&gt; &gt;    ompi_info
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Fehler	162	error LNK1181: Eingabedatei &quot;..\..\..\Release\libmpi.lib&quot;
</span><br>
<span class="quotelev2">&gt; &gt;    kann nicht ge&#246;ffnet werden.
</span><br>
<span class="quotelev2">&gt; &gt;    ...\openmpi-1.6.1-Windows_VS2010_x32\ompi\mpi\cxx\LINK
</span><br>
<span class="quotelev2">&gt; &gt;    libmpi_cxx
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I get also a lot of warnings, from wich I have listed a few.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Warnung	1	warning C4005: 'PACKAGE_BUGREPORT': Makro-Neudefinition
</span><br>
<span class="quotelev2">&gt; &gt;    ...\openmpi-1.6.1\opal\event\win32-code\config.h
</span><br>
<span class="quotelev2">&gt; &gt;    185	1	libopen-pal
</span><br>
<span class="quotelev2">&gt; &gt; Warnung	2	warning C4005: 'PACKAGE_NAME': Makro-Neudefinition
</span><br>
<span class="quotelev2">&gt; &gt;    ...\openmpi-1.6.1\opal\event\win32-code\config.h
</span><br>
<span class="quotelev2">&gt; &gt;    188	1	libopen-pal
</span><br>
<span class="quotelev2">&gt; &gt; Warnung	3	warning C4005: 'PACKAGE_STRING': Makro-Neudefinition
</span><br>
<span class="quotelev2">&gt; &gt;    ...\openmpi-1.6.1\opal\event\win32-code\config.h
</span><br>
<span class="quotelev2">&gt; &gt;    191	1	libopen-pal
</span><br>
<span class="quotelev2">&gt; &gt; Warnung	4	warning C4005: 'PACKAGE_TARNAME': Makro-Neudefinition
</span><br>
<span class="quotelev2">&gt; &gt;    ...\openmpi-1.6.1\opal\event\win32-code\config.h
</span><br>
<span class="quotelev2">&gt; &gt;    194	1	libopen-pal
</span><br>
<span class="quotelev2">&gt; &gt; Warnung	5	warning C4005: 'PACKAGE_VERSION': Makro-Neudefinition
</span><br>
<span class="quotelev2">&gt; &gt;    ...\openmpi-1.6.1\opal\event\win32-code\config.h
</span><br>
<span class="quotelev2">&gt; &gt;    197	1	libopen-pal
</span><br>
<span class="quotelev2">&gt; &gt; Warnung	6	warning C4005: '__func__': Makro-Neudefinition
</span><br>
<span class="quotelev2">&gt; &gt;    ...\openmpi-1.6.1\opal\event\win32-code\config.h
</span><br>
<span class="quotelev2">&gt; &gt;    212	1	libopen-pal
</span><br>
<span class="quotelev2">&gt; &gt; Warnung	7	warning C4013: 'opal_event_warn' undefiniert;
</span><br>
<span class="quotelev2">&gt; &gt;     Annahme: extern mit R&#252;ckgabetyp int
</span><br>
<span class="quotelev2">&gt; &gt;    ...\openmpi-1.6.1\opal\event\WIN32-Code\win32.c
</span><br>
<span class="quotelev2">&gt; &gt;    170	1	libopen-pal
</span><br>
<span class="quotelev2">&gt; &gt; Warnung	8	warning C4005: 'INT8_MIN': Makro-Neudefinition
</span><br>
<span class="quotelev2">&gt; &gt;    C:\Program Files (x86)\Microsoft Visual Studio 10.0\VC\include\stdint.h
</span><br>
<span class="quotelev2">&gt; &gt;    72	1	libopen-pal
</span><br>
<span class="quotelev2">&gt; &gt; Warnung	9	warning C4005: 'INT16_MIN': Makro-Neudefinition
</span><br>
<span class="quotelev2">&gt; &gt;    C:\Program Files (x86)\Microsoft Visual Studio 10.0\VC\include\stdint.h
</span><br>
<span class="quotelev2">&gt; &gt;    73	1	libopen-pal
</span><br>
<span class="quotelev2">&gt; &gt; Warnung	10	warning C4005: 'INT32_MIN': Makro-Neudefinition
</span><br>
<span class="quotelev2">&gt; &gt;    C:\Program Files (x86)\Microsoft Visual Studio 10.0\VC\include\stdint.h
</span><br>
<span class="quotelev2">&gt; &gt;    74	1	libopen-pal
</span><br>
<span class="quotelev2">&gt; &gt; Warnung	11	warning C4005: 'INT8_MAX': Makro-Neudefinition
</span><br>
<span class="quotelev2">&gt; &gt;    C:\Program Files (x86)\Microsoft Visual Studio 10.0\VC\include\stdint.h
</span><br>
<span class="quotelev2">&gt; &gt;    76	1	libopen-pal
</span><br>
<span class="quotelev2">&gt; &gt; Warnung	12	warning C4005: 'INT16_MAX': Makro-Neudefinition
</span><br>
<span class="quotelev2">&gt; &gt;    C:\Program Files (x86)\Microsoft Visual Studio 10.0\VC\include\stdint.h
</span><br>
<span class="quotelev2">&gt; &gt;    77	1	libopen-pal
</span><br>
<span class="quotelev2">&gt; &gt; Warnung	13	warning C4005: 'INT32_MAX': Makro-Neudefinition
</span><br>
<span class="quotelev2">&gt; &gt;    C:\Program Files (x86)\Microsoft Visual Studio 10.0\VC\include\stdint.h
</span><br>
<span class="quotelev2">&gt; &gt;    78	1	libopen-pal
</span><br>
<span class="quotelev2">&gt; &gt; Warnung	14	warning C4005: 'UINT8_MAX': Makro-Neudefinition
</span><br>
<span class="quotelev2">&gt; &gt;    C:\Program Files (x86)\Microsoft Visual Studio 10.0\VC\include\stdint.h
</span><br>
<span class="quotelev2">&gt; &gt;    79	1	libopen-pal
</span><br>
<span class="quotelev2">&gt; &gt; Warnung	15	warning C4005: 'UINT16_MAX': Makro-Neudefinition
</span><br>
<span class="quotelev2">&gt; &gt;    C:\Program Files (x86)\Microsoft Visual Studio 10.0\VC\include\stdint.h
</span><br>
<span class="quotelev2">&gt; &gt;    80	1	libopen-pal
</span><br>
<span class="quotelev2">&gt; &gt; Warnung	16	warning C4005: 'UINT32_MAX': Makro-Neudefinition
</span><br>
<span class="quotelev2">&gt; &gt;    C:\Program Files (x86)\Microsoft Visual Studio 10.0\VC\include\stdint.h
</span><br>
<span class="quotelev2">&gt; &gt;    81	1	libopen-pal
</span><br>
<span class="quotelev2">&gt; &gt; Warnung	17	warning C4018: '&lt;': Konflikt zwischen 'signed' und 'unsigned'
</span><br>
<span class="quotelev2">&gt; &gt;    ...\openmpi-1.6.1-Windows_VS2010_x32\opal\keyval_lex.c
</span><br>
<span class="quotelev2">&gt; &gt;    libopen-pal
</span><br>
<span class="quotelev2">&gt; &gt; Warnung	18	warning C4273: '_isatty': Inkonsistente DLL-Bindung.
</span><br>
<span class="quotelev2">&gt; &gt;    ...\openmpi-1.6.1-Windows_VS2010_x32\opal\keyval_lex.c
</span><br>
<span class="quotelev2">&gt; &gt;    libopen-pal
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; What can I do to get around the error so that I can compile Open MPI?
</span><br>
<span class="quotelev2">&gt; &gt; Thank you very much for any suggestions in advance.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Kind regards
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Siegmar
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
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
<span class="quotelev1">&gt; email: fan_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20019.php">Jeff Squyres: "Re: [OMPI users] ORTE_ERROR: orte_ess_base_open failed"</a>
<li><strong>Previous message:</strong> <a href="20017.php">Shiqing Fan: "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
<li><strong>Maybe in reply to:</strong> <a href="20014.php">Siegmar Gross: "[OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20027.php">Shiqing Fan: "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
<li><strong>Reply:</strong> <a href="20027.php">Shiqing Fan: "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
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
