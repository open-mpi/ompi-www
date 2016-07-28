<?
$subject_val = "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 30 08:12:48 2012" -->
<!-- isoreceived="20120830121248" -->
<!-- sent="Thu, 30 Aug 2012 14:05:58 +0200 (CEST)" -->
<!-- isosent="20120830120558" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7" -->
<!-- id="201208301205.q7UC5wcX007953_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Date:</strong> 2012-08-30 08:05:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20069.php">Tom Rosmond: "[OMPI users] openmpi 1.6.1 and libnuma"</a>
<li><strong>Previous message:</strong> <a href="20067.php">Jeff Squyres: "Re: [OMPI users] OMPI 1.6.x Hang on khugepaged 100% CPU time"</a>
<li><strong>Maybe in reply to:</strong> <a href="20014.php">Siegmar Gross: "[OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/09/20131.php">Siegmar Gross: "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Shiqing,
<br>
<p><span class="quotelev1">&gt; Could you please send the output of ompi_info command under you 64 bit 
</span><br>
<span class="quotelev1">&gt; env? And could you please also check if you have CCP or HPC pack 
</span><br>
<span class="quotelev1">&gt; installed? The incorrect configuration of that might cause Open MPI hanging.
</span><br>
<p>I haven't installed Microsoft's Compute Cluster Pack or High Performance
<br>
Computing Pack. At the moment I'm testing Open MPI on my Acer notebook
<br>
with Windows 7 Professional SP1. &quot;ompi_info&quot; hangs as well before it
<br>
prints any information about mca modules.
<br>
<p><p>C:\Program Files\openmpi-1.6.1\bin&gt;ompi_info
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Package: Open MPI Admin_at_HERMES Distribution
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.6.1
<br>
&nbsp;&nbsp;&nbsp;Open MPI SVN revision: r27106
<br>
&nbsp;&nbsp;&nbsp;Open MPI release date: Aug 22, 2012
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open RTE: 1.6.1
<br>
&nbsp;&nbsp;&nbsp;Open RTE SVN revision: r27106
<br>
&nbsp;&nbsp;&nbsp;Open RTE release date: Aug 22, 2012
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL: 1.6.1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL SVN revision: r27106
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL release date: Aug 22, 2012
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI API: 2.1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ident string: 1.6.1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Prefix: C:\Program Files\openmpi-1.6.1\bin/..
<br>
&nbsp;Configured architecture: Windows-6.1 64 bit
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configure host: HERMES
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configured by: Admin
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configured on: 14:40 27.08.2012
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configure host: HERMES
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built by: Admin
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built on: 14:40 27.08.2012
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built host: HERMES
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C bindings: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ bindings: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 bindings: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 bindings: no
<br>
&nbsp;Fortran90 bindings size: na
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler: cl
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler absolute: cl
<br>
&nbsp;&nbsp;C compiler family name: MICROSOFT
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler version: 1600
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ compiler: cl
<br>
&nbsp;&nbsp;&nbsp;C++ compiler absolute: cl
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 compiler: none
<br>
&nbsp;&nbsp;Fortran77 compiler abs: none
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 compiler: none
<br>
&nbsp;&nbsp;Fortran90 compiler abs: none
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 profiling: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 profiling: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ exceptions: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thread support: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sparse Groups: no
<br>
&nbsp;&nbsp;Internal debug support: no
<br>
&nbsp;&nbsp;MPI interface warnings: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI parameter check: never
<br>
Memory profiling support: no
<br>
Memory debugging support: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libltdl support: no
<br>
&nbsp;&nbsp;&nbsp;Heterogeneous support: yes
<br>
&nbsp;mpirun default --prefix: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI I/O support: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_WTIME support: gettimeofday
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Symbol vis. support: yes
<br>
&nbsp;&nbsp;&nbsp;Host topology support: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI extensions: none
<br>
&nbsp;&nbsp;&nbsp;FT Checkpoint support: yes (checkpoint thread: no)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;VampirTrace support: no
<br>
&nbsp;&nbsp;MPI_MAX_PROCESSOR_NAME: 256
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_MAX_ERROR_STRING: 256
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_MAX_OBJECT_NAME: 64
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_MAX_INFO_KEY: 36
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_MAX_INFO_VAL: 256
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_MAX_PORT_NAME: 1024
<br>
&nbsp;&nbsp;MPI_MAX_DATAREP_STRING: 128
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<p><p><span class="quotelev1">&gt; On 2012-08-29 12:33 PM, Siegmar Gross wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi Shiqing,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; It seems that the runtime environment is messed up with the different
</span><br>
<span class="quotelev3">&gt; &gt;&gt; versions of Open MPI. I suggest you completely remove all the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; installations and install 1.6.1 again (just build the installation
</span><br>
<span class="quotelev3">&gt; &gt;&gt; project again). It should work without any problem under Cygwin too.
</span><br>
<span class="quotelev2">&gt; &gt; I removed openmpi-1.6 und rebuilt openmpi-1.6.1. Now I can compile and
</span><br>
<span class="quotelev2">&gt; &gt; run a program in 32-bit mode but have still some problems.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; D:\...\prog\mpi\small_prog&gt;mpicc init_finalize.c
</span><br>
<span class="quotelev2">&gt; &gt; Microsoft (R) 32-Bit C/C++-Optimierungscompiler Version
</span><br>
<span class="quotelev2">&gt; &gt;    16.00.40219.01 f&#252;r 80x86
</span><br>
<span class="quotelev2">&gt; &gt; Copyright (C) Microsoft Corporation. Alle Rechte vorbehalten.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; init_finalize.c
</span><br>
<span class="quotelev2">&gt; &gt; Microsoft (R) Incremental Linker Version 10.00.40219.01
</span><br>
<span class="quotelev2">&gt; &gt; Copyright (C) Microsoft Corporation.  All rights reserved.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /out:init_finalize.exe
</span><br>
<span class="quotelev2">&gt; &gt; &quot;/LIBPATH:C:\Program Files (x86)\openmpi-1.6.1\bin/../lib&quot;
</span><br>
<span class="quotelev2">&gt; &gt; libmpi.lib
</span><br>
<span class="quotelev2">&gt; &gt; libopen-pal.lib
</span><br>
<span class="quotelev2">&gt; &gt; libopen-rte.lib
</span><br>
<span class="quotelev2">&gt; &gt; advapi32.lib
</span><br>
<span class="quotelev2">&gt; &gt; Ws2_32.lib
</span><br>
<span class="quotelev2">&gt; &gt; shlwapi.lib
</span><br>
<span class="quotelev2">&gt; &gt; init_finalize.obj
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; D:\...\prog\mpi\small_prog&gt;mpiexec init_finalize.exe
</span><br>
<span class="quotelev2">&gt; &gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; Sorry!  You were supposed to get help about:
</span><br>
<span class="quotelev2">&gt; &gt;      invalid if_inexclude
</span><br>
<span class="quotelev2">&gt; &gt; But I couldn't open the help file:
</span><br>
<span class="quotelev2">&gt; &gt;      D:\...\prog\mpi\small_prog\..\share\openmpi\help-mpi-btl-tcp.txt:
</span><br>
<span class="quotelev2">&gt; &gt;      No such file or directory.  Sorry!
</span><br>
<span class="quotelev2">&gt; &gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hello!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Why does &quot;mpiexec&quot; look for the help file relativ to my current
</span><br>
<span class="quotelev2">&gt; &gt; program and not relative to itself? The file is part of the
</span><br>
<span class="quotelev2">&gt; &gt; package.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; dir &quot;c:\Program Files 
</span><br>
(x86)\openmpi-1.6.1\share\openmpi\help-mpi-btl-tcp.txt&quot;
<br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt; 03.04.2012  16:30               631 help-mpi-btl-tcp.txt
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Must I change something in the source code or can I set an environment
</span><br>
<span class="quotelev2">&gt; &gt; variable for help files? Why does &quot;mpiexec&quot; want to give some help at all?
</span><br>
<span class="quotelev2">&gt; &gt; I don't get this message for openmpi-1.5.1.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; D:\...\prog\mpi\small_prog&gt;mpicc init_finalize.c
</span><br>
<span class="quotelev2">&gt; &gt; Microsoft (R) 32-Bit C/C++-Optimierungscompiler Version 16.00.40219.01
</span><br>
<span class="quotelev2">&gt; &gt;    f&#252;r 80x86
</span><br>
<span class="quotelev2">&gt; &gt; Copyright (C) Microsoft Corporation. Alle Rechte vorbehalten.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; init_finalize.c
</span><br>
<span class="quotelev2">&gt; &gt; Microsoft (R) Incremental Linker Version 10.00.40219.01
</span><br>
<span class="quotelev2">&gt; &gt; Copyright (C) Microsoft Corporation.  All rights reserved.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /out:init_finalize.exe
</span><br>
<span class="quotelev2">&gt; &gt; &quot;/LIBPATH:C:/Program Files (x86)/openmpi-1.5.1/lib&quot;
</span><br>
<span class="quotelev2">&gt; &gt; libmpi.lib
</span><br>
<span class="quotelev2">&gt; &gt; libopen-pal.lib
</span><br>
<span class="quotelev2">&gt; &gt; libopen-rte.lib
</span><br>
<span class="quotelev2">&gt; &gt; advapi32.lib
</span><br>
<span class="quotelev2">&gt; &gt; Ws2_32.lib
</span><br>
<span class="quotelev2">&gt; &gt; shlwapi.lib
</span><br>
<span class="quotelev2">&gt; &gt; init_finalize.obj
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; D:\...\prog\mpi\small_prog&gt;mpiexec init_finalize.exe
</span><br>
<span class="quotelev2">&gt; &gt; Hello!
</span><br>
<span class="quotelev2">&gt; &gt; D:\...\prog\mpi\small_prog&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I can also compile in 64-bit mode but the program hangs.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; D:\...\prog\mpi\small_prog&gt;mpicc init_finalize.c
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Microsoft (R) C/C++-Optimierungscompiler Version 16.00.40219.01 f&#252;r x64
</span><br>
<span class="quotelev2">&gt; &gt; Copyright (C) Microsoft Corporation. Alle Rechte vorbehalten.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; init_finalize.c
</span><br>
<span class="quotelev2">&gt; &gt; Microsoft (R) Incremental Linker Version 10.00.40219.01
</span><br>
<span class="quotelev2">&gt; &gt; Copyright (C) Microsoft Corporation.  All rights reserved.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /out:init_finalize.exe
</span><br>
<span class="quotelev2">&gt; &gt; &quot;/LIBPATH:C:\Program Files\openmpi-1.6.1\bin/../lib&quot;
</span><br>
<span class="quotelev2">&gt; &gt; libmpi.lib
</span><br>
<span class="quotelev2">&gt; &gt; libopen-pal.lib
</span><br>
<span class="quotelev2">&gt; &gt; libopen-rte.lib
</span><br>
<span class="quotelev2">&gt; &gt; advapi32.lib
</span><br>
<span class="quotelev2">&gt; &gt; Ws2_32.lib
</span><br>
<span class="quotelev2">&gt; &gt; shlwapi.lib
</span><br>
<span class="quotelev2">&gt; &gt; init_finalize.obj
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; D:\...\prog\mpi\small_prog&gt;mpiexec init_finalize.exe
</span><br>
<span class="quotelev2">&gt; &gt; ^C
</span><br>
<span class="quotelev2">&gt; &gt; D:\...\prog\mpi\small_prog&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; It's the same if I compile a 64-bit program with openmpi-1.5.1. The program
</span><br>
<span class="quotelev2">&gt; &gt; itself is very small.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; int main (int argc, char *argv[])
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt;    MPI_Init (&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt; &gt;    printf (&quot;Hello!\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;    MPI_Finalize ();
</span><br>
<span class="quotelev2">&gt; &gt;    return EXIT_SUCCESS;
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Any ideas why the 64-bit version hangs? Thank you very much for any help
</span><br>
<span class="quotelev2">&gt; &gt; in advance.
</span><br>
<span class="quotelev2">&gt; &gt;
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
<li><strong>Next message:</strong> <a href="20069.php">Tom Rosmond: "[OMPI users] openmpi 1.6.1 and libnuma"</a>
<li><strong>Previous message:</strong> <a href="20067.php">Jeff Squyres: "Re: [OMPI users] OMPI 1.6.x Hang on khugepaged 100% CPU time"</a>
<li><strong>Maybe in reply to:</strong> <a href="20014.php">Siegmar Gross: "[OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/09/20131.php">Siegmar Gross: "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
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
