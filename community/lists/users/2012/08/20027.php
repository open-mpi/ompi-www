<?
$subject_val = "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 28 04:46:13 2012" -->
<!-- isoreceived="20120828084613" -->
<!-- sent="Tue, 28 Aug 2012 10:48:17 +0200" -->
<!-- isosent="20120828084817" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7" -->
<!-- id="503C85D1.6070606_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201208271402.q7RE2VLi011730_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Date:</strong> 2012-08-28 04:48:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20028.php">清风: "[OMPI users] &#215;&#170;&#183;&#162;&#163;&#186;lwkmpi"</a>
<li><strong>Previous message:</strong> <a href="20026.php">&#199;&#229;&#183;&#231;: "Re: [OMPI users] Application with mxm hangs on startup"</a>
<li><strong>In reply to:</strong> <a href="20018.php">Siegmar Gross: "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20055.php">Siegmar Gross: "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Siegmar,
<br>
<p>It seems that the runtime environment is messed up with the different 
<br>
versions of Open MPI. I suggest you completely remove all the 
<br>
installations and install 1.6.1 again (just build the installation 
<br>
project again). It should work without any problem under Cygwin too.
<br>
<p>Shiqing
<br>
<p>On 2012-08-27 4:02 PM, Siegmar Gross wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thank you very much for your reply. I compiled and installed
</span><br>
<span class="quotelev1">&gt; openmpi-1.6.1. Unfortunately I cannot compile programs because
</span><br>
<span class="quotelev1">&gt; &quot;mpicc&quot; uses wrong path names. I have set an environment for
</span><br>
<span class="quotelev1">&gt; openmpi-1.6.1 as you can see from the following output.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; D:\...prog\mpi\small_prog&gt;set | c:\cygwin\bin\grep openmpi
</span><br>
<span class="quotelev1">&gt; LIB=C:\Program Files (x86)\Microsoft Visual Studio 10.0\VC\lib\amd64;
</span><br>
<span class="quotelev1">&gt;    C:\Program Files (x86)\Microsoft Visual Studio 10.0\VC\atlmfc\lib\amd64;
</span><br>
<span class="quotelev1">&gt;    C:\Program Files (x86)\Microsoft SDKs\Windows\v7.0A\Lib\x64;
</span><br>
<span class="quotelev1">&gt;    C:\Program Files\openmpi-1.6.1\lib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; LIBPATH=C:\Program Files (x86)\Microsoft Visual Studio 10.0\VC\lib\amd64;
</span><br>
<span class="quotelev1">&gt;    C:\Program Files (x86)\Microsoft Visual Studio 10.0\VC\atlmfc\lib\amd64;
</span><br>
<span class="quotelev1">&gt;    C:\Program Files\openmpi-1.6.1\lib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Path=C:\Program Files (x86)\Microsoft Visual Studio 10.0\VC\bin\amd64;
</span><br>
<span class="quotelev1">&gt;    C:\Program Files (x86)\Microsoft Visual Studio 10.0\VC\vcpackages;
</span><br>
<span class="quotelev1">&gt;    C:\Program Files (x86)\Microsoft Visual Studio 10.0\Common7\IDE\;
</span><br>
<span class="quotelev1">&gt;    C:\Program Files (x86)\Microsoft Visual Studio 10.0\Common7\Tools\;
</span><br>
<span class="quotelev1">&gt;    C:\Program Files (x86)\Microsoft SDKs\Windows\v7.0A\Bin\NETFX 4.0 Tools\x64;
</span><br>
<span class="quotelev1">&gt;    C:\Program Files (x86)\Microsoft SDKs\Windows\v7.0A\Bin\x64;
</span><br>
<span class="quotelev1">&gt;    C:\Program Files (x86)\Microsoft SDKs\Windows\v7.0A\Bin\;
</span><br>
<span class="quotelev1">&gt;    C:\Windows\System32;
</span><br>
<span class="quotelev1">&gt;    C:\Windows;
</span><br>
<span class="quotelev1">&gt;    C:\Windows\System32\Wbem;
</span><br>
<span class="quotelev1">&gt;    C:\Program Files\openmpi-1.6.1\bin;
</span><br>
<span class="quotelev1">&gt;    C:\cmd;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I get the following error when I try to compile my program
</span><br>
<span class="quotelev1">&gt; because of &quot;/LIBPATH:C:\Program Files (x86)\openmpi-1.6/lib&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; D:\...\prog\mpi\small_prog&gt;mpicc init_finalize.c
</span><br>
<span class="quotelev1">&gt; Microsoft (R) C/C++-Optimierungscompiler Version 16.00.40219.01 f&#252;r x64
</span><br>
<span class="quotelev1">&gt; Copyright (C) Microsoft Corporation. Alle Rechte vorbehalten.
</span><br>
<span class="quotelev1">&gt; init_finalize.c
</span><br>
<span class="quotelev1">&gt; Microsoft (R) Incremental Linker Version 10.00.40219.01
</span><br>
<span class="quotelev1">&gt; Copyright (C) Microsoft Corporation.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; /out:init_finalize.exe
</span><br>
<span class="quotelev1">&gt; &quot;/LIBPATH:C:\Program Files (x86)\openmpi-1.6/lib&quot;
</span><br>
<span class="quotelev1">&gt; libmpi.lib
</span><br>
<span class="quotelev1">&gt; libopen-pal.lib
</span><br>
<span class="quotelev1">&gt; libopen-rte.lib
</span><br>
<span class="quotelev1">&gt; advapi32.lib
</span><br>
<span class="quotelev1">&gt; Ws2_32.lib
</span><br>
<span class="quotelev1">&gt; shlwapi.lib
</span><br>
<span class="quotelev1">&gt; init_finalize.obj
</span><br>
<span class="quotelev1">&gt; init_finalize.obj : error LNK2019: Verweis auf nicht aufgel&#246;stes externes Symbol &quot;__imp_MP
</span><br>
<span class="quotelev1">&gt; I_Finalize&quot; in Funktion &quot;main&quot;.
</span><br>
<span class="quotelev1">&gt; init_finalize.obj : error LNK2019: Verweis auf nicht aufgel&#246;stes externes Symbol &quot;__imp_MP
</span><br>
<span class="quotelev1">&gt; I_Init&quot; in Funktion &quot;main&quot;.
</span><br>
<span class="quotelev1">&gt; init_finalize.exe : fatal error LNK1120: 2 nicht aufgel&#246;ste externe Verweise.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I start in a new command shell without my MPI environment,
</span><br>
<span class="quotelev1">&gt; I get the following outputs for &quot;mpicc -show&quot;. The first one
</span><br>
<span class="quotelev1">&gt; is OK, but both others are wrong because they point to 32-bit
</span><br>
<span class="quotelev1">&gt; libraries instead of 64-bit ones. Why do both versions point
</span><br>
<span class="quotelev1">&gt; to openmpi-1.6? I downloaded and installed the precompiled
</span><br>
<span class="quotelev1">&gt; 32- and 64-bit version 1.6 from open-mpi.org.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; C:\Program Files&gt;openmpi-1.5.1\bin\mpicc -show
</span><br>
<span class="quotelev1">&gt; cl.exe /I&quot;C:/Program Files/openmpi-1.5.1/include&quot; /TC /D &quot;OMPI_IMPORTS&quot; /D &quot;OPAL_IMPORTS&quot;
</span><br>
<span class="quotelev1">&gt; /D &quot;ORTE_IMPORTS&quot; /link /LIBPATH:&quot;C:/Program Files/openmpi-1.5.1/lib&quot; libmpi.lib libopen-p
</span><br>
<span class="quotelev1">&gt; al.lib libopen-rte.lib advapi32.lib Ws2_32.lib shlwapi.lib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; C:\Program Files&gt;openmpi-1.6\bin\mpicc -show
</span><br>
<span class="quotelev1">&gt; cl.exe /I&quot;C:\Program Files (x86)\openmpi-1.6/include&quot; /TC /DOMPI_IMPORTS /DOPAL_IMPORTS /D
</span><br>
<span class="quotelev1">&gt; ORTE_IMPORTS /link /LIBPATH:&quot;C:\Program Files (x86)\openmpi-1.6/lib&quot; libmpi.lib libopen-pa
</span><br>
<span class="quotelev1">&gt; l.lib libopen-rte.lib advapi32.lib Ws2_32.lib shlwapi.lib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; C:\Program Files&gt;openmpi-1.6.1\bin\mpicc -show
</span><br>
<span class="quotelev1">&gt; cl.exe /I&quot;C:\Program Files (x86)\openmpi-1.6/include&quot; /TC /DOMPI_IMPORTS /DOPAL_IMPORTS /D
</span><br>
<span class="quotelev1">&gt; ORTE_IMPORTS /link /LIBPATH:&quot;C:\Program Files (x86)\openmpi-1.6/lib&quot; libmpi.lib libopen-pa
</span><br>
<span class="quotelev1">&gt; l.lib libopen-rte.lib advapi32.lib Ws2_32.lib shlwapi.lib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you have any idea what I have done wrong? Thank you very
</span><br>
<span class="quotelev1">&gt; much for any help in advance.
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev2">&gt;&gt; I didn't have this problem when building the binary release.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But to solve the problem is very easy. You can just open
</span><br>
<span class="quotelev2">&gt;&gt; \openmpi-1.6.1\ompi\mca\osc\rdma\osc_rdma_data_move.c, and go
</span><br>
<span class="quotelev2">&gt;&gt; to line 1099, change &quot;void*&quot; to &quot;void**&quot;. This will get rid of the error.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For the warnings, they are just some redefinitions that cannot
</span><br>
<span class="quotelev2">&gt;&gt; be avoided, they are totally harmless.
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 2012-08-27 1:02 PM, Siegmar Gross wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I tried to compile openmpi-1.6.1 with CMake-2.8.3 and Visual Studio
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2010 on Windows 7. All service packs and patches from Microsoft are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; installed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I changed the following options:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CMAKE_BUILD_TYPE: &quot;Debug&quot; modified to &quot;Release&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CMAKE_INSTALL_PREFIX: modified to &quot;c:/Program Files (x86)/openmpi-1.6.1&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_ENABLE_THREAD_MULTIPLE: &quot;no&quot; changed to &quot;yes&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_RELEASE_BUILD: &quot;no&quot; changed to &quot;yes&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OPAL_ENABLE_HETEREOGENEOUS:SUPPORT: &quot;no&quot; changed to &quot;yes&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OPAL_ENABLE_IPV6:  &quot;yes&quot; changed to &quot;no&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OPAL_ENABLE_MULTI_THREADS: &quot;no&quot; changed to &quot;yes&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I also selected &quot;Release&quot; in &quot;Visual Studio&quot;. Unfortunately I got the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; following error (&quot;void *&quot; cannot be converted to &quot;void **&quot;).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fehler	77	error C2440: '=': 'void *' kann nicht in 'void **'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     konvertiert werden
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     ...\openmpi-1.6.1\ompi\mca\osc\rdma\osc_rdma_data_move.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     1099	1	libmpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fehler	90	error LNK1181: Eingabedatei &quot;..\..\..\Release\libmpi.lib&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     kann nicht ge&#246;ffnet werden.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     ...\openmpi-1.6.1-Windows_VS2010_x32\ompi\tools\ompi-server\LINK
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     ompi-server
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fehler	94	error LNK1181: Eingabedatei &quot;..\..\..\Release\libmpi.lib&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     kann nicht ge&#246;ffnet werden.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     ...\openmpi-1.6.1-Windows_VS2010_x32\ompi\tools\ompi_info\LINK
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     ompi_info
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fehler	162	error LNK1181: Eingabedatei &quot;..\..\..\Release\libmpi.lib&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     kann nicht ge&#246;ffnet werden.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     ...\openmpi-1.6.1-Windows_VS2010_x32\ompi\mpi\cxx\LINK
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     libmpi_cxx
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I get also a lot of warnings, from wich I have listed a few.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Warnung	1	warning C4005: 'PACKAGE_BUGREPORT': Makro-Neudefinition
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     ...\openmpi-1.6.1\opal\event\win32-code\config.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     185	1	libopen-pal
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Warnung	2	warning C4005: 'PACKAGE_NAME': Makro-Neudefinition
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     ...\openmpi-1.6.1\opal\event\win32-code\config.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     188	1	libopen-pal
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Warnung	3	warning C4005: 'PACKAGE_STRING': Makro-Neudefinition
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     ...\openmpi-1.6.1\opal\event\win32-code\config.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     191	1	libopen-pal
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Warnung	4	warning C4005: 'PACKAGE_TARNAME': Makro-Neudefinition
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     ...\openmpi-1.6.1\opal\event\win32-code\config.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     194	1	libopen-pal
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Warnung	5	warning C4005: 'PACKAGE_VERSION': Makro-Neudefinition
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     ...\openmpi-1.6.1\opal\event\win32-code\config.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     197	1	libopen-pal
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Warnung	6	warning C4005: '__func__': Makro-Neudefinition
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     ...\openmpi-1.6.1\opal\event\win32-code\config.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     212	1	libopen-pal
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Warnung	7	warning C4013: 'opal_event_warn' undefiniert;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Annahme: extern mit R&#252;ckgabetyp int
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     ...\openmpi-1.6.1\opal\event\WIN32-Code\win32.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     170	1	libopen-pal
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Warnung	8	warning C4005: 'INT8_MIN': Makro-Neudefinition
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     C:\Program Files (x86)\Microsoft Visual Studio 10.0\VC\include\stdint.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     72	1	libopen-pal
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Warnung	9	warning C4005: 'INT16_MIN': Makro-Neudefinition
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     C:\Program Files (x86)\Microsoft Visual Studio 10.0\VC\include\stdint.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     73	1	libopen-pal
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Warnung	10	warning C4005: 'INT32_MIN': Makro-Neudefinition
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     C:\Program Files (x86)\Microsoft Visual Studio 10.0\VC\include\stdint.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     74	1	libopen-pal
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Warnung	11	warning C4005: 'INT8_MAX': Makro-Neudefinition
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     C:\Program Files (x86)\Microsoft Visual Studio 10.0\VC\include\stdint.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     76	1	libopen-pal
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Warnung	12	warning C4005: 'INT16_MAX': Makro-Neudefinition
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     C:\Program Files (x86)\Microsoft Visual Studio 10.0\VC\include\stdint.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     77	1	libopen-pal
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Warnung	13	warning C4005: 'INT32_MAX': Makro-Neudefinition
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     C:\Program Files (x86)\Microsoft Visual Studio 10.0\VC\include\stdint.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     78	1	libopen-pal
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Warnung	14	warning C4005: 'UINT8_MAX': Makro-Neudefinition
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     C:\Program Files (x86)\Microsoft Visual Studio 10.0\VC\include\stdint.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     79	1	libopen-pal
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Warnung	15	warning C4005: 'UINT16_MAX': Makro-Neudefinition
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     C:\Program Files (x86)\Microsoft Visual Studio 10.0\VC\include\stdint.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     80	1	libopen-pal
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Warnung	16	warning C4005: 'UINT32_MAX': Makro-Neudefinition
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     C:\Program Files (x86)\Microsoft Visual Studio 10.0\VC\include\stdint.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     81	1	libopen-pal
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Warnung	17	warning C4018: '&lt;': Konflikt zwischen 'signed' und 'unsigned'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     ...\openmpi-1.6.1-Windows_VS2010_x32\opal\keyval_lex.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     libopen-pal
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Warnung	18	warning C4273: '_isatty': Inkonsistente DLL-Bindung.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     ...\openmpi-1.6.1-Windows_VS2010_x32\opal\keyval_lex.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     libopen-pal
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What can I do to get around the error so that I can compile Open MPI?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you very much for any suggestions in advance.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Kind regards
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Siegmar
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<li><strong>Next message:</strong> <a href="20028.php">清风: "[OMPI users] &#215;&#170;&#183;&#162;&#163;&#186;lwkmpi"</a>
<li><strong>Previous message:</strong> <a href="20026.php">&#199;&#229;&#183;&#231;: "Re: [OMPI users] Application with mxm hangs on startup"</a>
<li><strong>In reply to:</strong> <a href="20018.php">Siegmar Gross: "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20055.php">Siegmar Gross: "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
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
