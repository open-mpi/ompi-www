<?
$subject_val = "[OMPI users] error compiling openmpi-1.6.1 on Windows 7";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 27 07:15:50 2012" -->
<!-- isoreceived="20120827111550" -->
<!-- sent="Mon, 27 Aug 2012 13:02:23 +0200 (CEST)" -->
<!-- isosent="20120827110223" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] error compiling openmpi-1.6.1 on Windows 7" -->
<!-- id="201208271102.q7RB2N1t011099_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] error compiling openmpi-1.6.1 on Windows 7<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-27 07:02:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20015.php">Siegmar Gross: "[OMPI users] Sun cc problem compiling openmpi-1.6.1 on Solaris 10 sparc"</a>
<li><strong>Previous message:</strong> <a href="20013.php">Ralph Castain: "Re: [OMPI users] ORTE_ERROR: orte_ess_base_open failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20017.php">Shiqing Fan: "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
<li><strong>Reply:</strong> <a href="20017.php">Shiqing Fan: "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
<li><strong>Maybe reply:</strong> <a href="20018.php">Siegmar Gross: "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
<li><strong>Maybe reply:</strong> <a href="20055.php">Siegmar Gross: "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
<li><strong>Maybe reply:</strong> <a href="20068.php">Siegmar Gross: "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/09/20131.php">Siegmar Gross: "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/09/20136.php">Siegmar Gross: "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/09/20166.php">Siegmar Gross: "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I tried to compile openmpi-1.6.1 with CMake-2.8.3 and Visual Studio
<br>
2010 on Windows 7. All service packs and patches from Microsoft are
<br>
installed.
<br>
<p>I changed the following options:
<br>
<p>CMAKE_BUILD_TYPE: &quot;Debug&quot; modified to &quot;Release&quot;
<br>
CMAKE_INSTALL_PREFIX: modified to &quot;c:/Program Files (x86)/openmpi-1.6.1&quot;
<br>
OMPI_ENABLE_THREAD_MULTIPLE: &quot;no&quot; changed to &quot;yes&quot;
<br>
OMPI_RELEASE_BUILD: &quot;no&quot; changed to &quot;yes&quot;
<br>
OPAL_ENABLE_HETEREOGENEOUS:SUPPORT: &quot;no&quot; changed to &quot;yes&quot;
<br>
OPAL_ENABLE_IPV6:  &quot;yes&quot; changed to &quot;no&quot;
<br>
OPAL_ENABLE_MULTI_THREADS: &quot;no&quot; changed to &quot;yes&quot;
<br>
<p>I also selected &quot;Release&quot; in &quot;Visual Studio&quot;. Unfortunately I got the
<br>
following error (&quot;void *&quot; cannot be converted to &quot;void **&quot;).
<br>
<p>Fehler	77	error C2440: '=': 'void *' kann nicht in 'void **'
<br>
&nbsp;&nbsp;konvertiert werden
<br>
&nbsp;&nbsp;...\openmpi-1.6.1\ompi\mca\osc\rdma\osc_rdma_data_move.c
<br>
&nbsp;&nbsp;1099	1	libmpi
<br>
<p>Fehler	90	error LNK1181: Eingabedatei &quot;..\..\..\Release\libmpi.lib&quot;
<br>
&nbsp;&nbsp;kann nicht ge&#246;ffnet werden.
<br>
&nbsp;&nbsp;...\openmpi-1.6.1-Windows_VS2010_x32\ompi\tools\ompi-server\LINK
<br>
&nbsp;&nbsp;ompi-server
<br>
<p>Fehler	94	error LNK1181: Eingabedatei &quot;..\..\..\Release\libmpi.lib&quot;
<br>
&nbsp;&nbsp;kann nicht ge&#246;ffnet werden.
<br>
&nbsp;&nbsp;...\openmpi-1.6.1-Windows_VS2010_x32\ompi\tools\ompi_info\LINK
<br>
&nbsp;&nbsp;ompi_info
<br>
<p>Fehler	162	error LNK1181: Eingabedatei &quot;..\..\..\Release\libmpi.lib&quot;
<br>
&nbsp;&nbsp;kann nicht ge&#246;ffnet werden.
<br>
&nbsp;&nbsp;...\openmpi-1.6.1-Windows_VS2010_x32\ompi\mpi\cxx\LINK
<br>
&nbsp;&nbsp;libmpi_cxx
<br>
<p><p>I get also a lot of warnings, from wich I have listed a few.
<br>
<p><p>Warnung	1	warning C4005: 'PACKAGE_BUGREPORT': Makro-Neudefinition
<br>
&nbsp;&nbsp;...\openmpi-1.6.1\opal\event\win32-code\config.h
<br>
&nbsp;&nbsp;185	1	libopen-pal
<br>
Warnung	2	warning C4005: 'PACKAGE_NAME': Makro-Neudefinition
<br>
&nbsp;&nbsp;...\openmpi-1.6.1\opal\event\win32-code\config.h
<br>
&nbsp;&nbsp;188	1	libopen-pal
<br>
Warnung	3	warning C4005: 'PACKAGE_STRING': Makro-Neudefinition
<br>
&nbsp;&nbsp;...\openmpi-1.6.1\opal\event\win32-code\config.h
<br>
&nbsp;&nbsp;191	1	libopen-pal
<br>
Warnung	4	warning C4005: 'PACKAGE_TARNAME': Makro-Neudefinition
<br>
&nbsp;&nbsp;...\openmpi-1.6.1\opal\event\win32-code\config.h
<br>
&nbsp;&nbsp;194	1	libopen-pal
<br>
Warnung	5	warning C4005: 'PACKAGE_VERSION': Makro-Neudefinition
<br>
&nbsp;&nbsp;...\openmpi-1.6.1\opal\event\win32-code\config.h
<br>
&nbsp;&nbsp;197	1	libopen-pal
<br>
Warnung	6	warning C4005: '__func__': Makro-Neudefinition
<br>
&nbsp;&nbsp;...\openmpi-1.6.1\opal\event\win32-code\config.h
<br>
&nbsp;&nbsp;212	1	libopen-pal
<br>
Warnung	7	warning C4013: 'opal_event_warn' undefiniert;
<br>
&nbsp;&nbsp;&nbsp;Annahme: extern mit R&#252;ckgabetyp int
<br>
&nbsp;&nbsp;...\openmpi-1.6.1\opal\event\WIN32-Code\win32.c
<br>
&nbsp;&nbsp;170	1	libopen-pal
<br>
Warnung	8	warning C4005: 'INT8_MIN': Makro-Neudefinition
<br>
&nbsp;&nbsp;C:\Program Files (x86)\Microsoft Visual Studio 10.0\VC\include\stdint.h
<br>
&nbsp;&nbsp;72	1	libopen-pal
<br>
Warnung	9	warning C4005: 'INT16_MIN': Makro-Neudefinition
<br>
&nbsp;&nbsp;C:\Program Files (x86)\Microsoft Visual Studio 10.0\VC\include\stdint.h
<br>
&nbsp;&nbsp;73	1	libopen-pal
<br>
Warnung	10	warning C4005: 'INT32_MIN': Makro-Neudefinition
<br>
&nbsp;&nbsp;C:\Program Files (x86)\Microsoft Visual Studio 10.0\VC\include\stdint.h
<br>
&nbsp;&nbsp;74	1	libopen-pal
<br>
Warnung	11	warning C4005: 'INT8_MAX': Makro-Neudefinition
<br>
&nbsp;&nbsp;C:\Program Files (x86)\Microsoft Visual Studio 10.0\VC\include\stdint.h
<br>
&nbsp;&nbsp;76	1	libopen-pal
<br>
Warnung	12	warning C4005: 'INT16_MAX': Makro-Neudefinition
<br>
&nbsp;&nbsp;C:\Program Files (x86)\Microsoft Visual Studio 10.0\VC\include\stdint.h
<br>
&nbsp;&nbsp;77	1	libopen-pal
<br>
Warnung	13	warning C4005: 'INT32_MAX': Makro-Neudefinition
<br>
&nbsp;&nbsp;C:\Program Files (x86)\Microsoft Visual Studio 10.0\VC\include\stdint.h
<br>
&nbsp;&nbsp;78	1	libopen-pal
<br>
Warnung	14	warning C4005: 'UINT8_MAX': Makro-Neudefinition
<br>
&nbsp;&nbsp;C:\Program Files (x86)\Microsoft Visual Studio 10.0\VC\include\stdint.h
<br>
&nbsp;&nbsp;79	1	libopen-pal
<br>
Warnung	15	warning C4005: 'UINT16_MAX': Makro-Neudefinition
<br>
&nbsp;&nbsp;C:\Program Files (x86)\Microsoft Visual Studio 10.0\VC\include\stdint.h
<br>
&nbsp;&nbsp;80	1	libopen-pal
<br>
Warnung	16	warning C4005: 'UINT32_MAX': Makro-Neudefinition
<br>
&nbsp;&nbsp;C:\Program Files (x86)\Microsoft Visual Studio 10.0\VC\include\stdint.h
<br>
&nbsp;&nbsp;81	1	libopen-pal
<br>
Warnung	17	warning C4018: '&lt;': Konflikt zwischen 'signed' und 'unsigned'
<br>
&nbsp;&nbsp;...\openmpi-1.6.1-Windows_VS2010_x32\opal\keyval_lex.c
<br>
&nbsp;&nbsp;libopen-pal
<br>
Warnung	18	warning C4273: '_isatty': Inkonsistente DLL-Bindung.
<br>
&nbsp;&nbsp;...\openmpi-1.6.1-Windows_VS2010_x32\opal\keyval_lex.c
<br>
&nbsp;&nbsp;libopen-pal
<br>
...
<br>
<p>What can I do to get around the error so that I can compile Open MPI?
<br>
Thank you very much for any suggestions in advance.
<br>
<p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20015.php">Siegmar Gross: "[OMPI users] Sun cc problem compiling openmpi-1.6.1 on Solaris 10 sparc"</a>
<li><strong>Previous message:</strong> <a href="20013.php">Ralph Castain: "Re: [OMPI users] ORTE_ERROR: orte_ess_base_open failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20017.php">Shiqing Fan: "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
<li><strong>Reply:</strong> <a href="20017.php">Shiqing Fan: "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
<li><strong>Maybe reply:</strong> <a href="20018.php">Siegmar Gross: "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
<li><strong>Maybe reply:</strong> <a href="20055.php">Siegmar Gross: "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
<li><strong>Maybe reply:</strong> <a href="20068.php">Siegmar Gross: "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/09/20131.php">Siegmar Gross: "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/09/20136.php">Siegmar Gross: "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/09/20166.php">Siegmar Gross: "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
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
