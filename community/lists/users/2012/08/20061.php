<?
$subject_val = "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 30 05:31:17 2012" -->
<!-- isoreceived="20120830093117" -->
<!-- sent="Thu, 30 Aug 2012 11:33:26 +0200" -->
<!-- isosent="20120830093326" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7" -->
<!-- id="503F3366.9020507_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201208291033.q7TAXtXe018404_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Date:</strong> 2012-08-30 05:33:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20062.php">Zbigniew Koza: "[OMPI users] what is a &quot;node&quot;?"</a>
<li><strong>Previous message:</strong> <a href="20060.php">Ammar Ahmad Awan: "[OMPI users] Accessing data member of MPI_File struct"</a>
<li><strong>In reply to:</strong> <a href="20055.php">Siegmar Gross: "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20068.php">Siegmar Gross: "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Siegmar,
<br>
<p>Could you please send the output of ompi_info command under you 64 bit 
<br>
env? And could you please also check if you have CCP or HPC pack 
<br>
installed? The incorrect configuration of that might cause Open MPI hanging.
<br>
<p><p>Regards,
<br>
Shiqing
<br>
<p>On 2012-08-29 12:33 PM, Siegmar Gross wrote:
<br>
<span class="quotelev1">&gt; Hi Shiqing,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It seems that the runtime environment is messed up with the different
</span><br>
<span class="quotelev2">&gt;&gt; versions of Open MPI. I suggest you completely remove all the
</span><br>
<span class="quotelev2">&gt;&gt; installations and install 1.6.1 again (just build the installation
</span><br>
<span class="quotelev2">&gt;&gt; project again). It should work without any problem under Cygwin too.
</span><br>
<span class="quotelev1">&gt; I removed openmpi-1.6 und rebuilt openmpi-1.6.1. Now I can compile and
</span><br>
<span class="quotelev1">&gt; run a program in 32-bit mode but have still some problems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; D:\...\prog\mpi\small_prog&gt;mpicc init_finalize.c
</span><br>
<span class="quotelev1">&gt; Microsoft (R) 32-Bit C/C++-Optimierungscompiler Version
</span><br>
<span class="quotelev1">&gt;    16.00.40219.01 f&#252;r 80x86
</span><br>
<span class="quotelev1">&gt; Copyright (C) Microsoft Corporation. Alle Rechte vorbehalten.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; init_finalize.c
</span><br>
<span class="quotelev1">&gt; Microsoft (R) Incremental Linker Version 10.00.40219.01
</span><br>
<span class="quotelev1">&gt; Copyright (C) Microsoft Corporation.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /out:init_finalize.exe
</span><br>
<span class="quotelev1">&gt; &quot;/LIBPATH:C:\Program Files (x86)\openmpi-1.6.1\bin/../lib&quot;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; D:\...\prog\mpi\small_prog&gt;mpiexec init_finalize.exe
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Sorry!  You were supposed to get help about:
</span><br>
<span class="quotelev1">&gt;      invalid if_inexclude
</span><br>
<span class="quotelev1">&gt; But I couldn't open the help file:
</span><br>
<span class="quotelev1">&gt;      D:\...\prog\mpi\small_prog\..\share\openmpi\help-mpi-btl-tcp.txt:
</span><br>
<span class="quotelev1">&gt;      No such file or directory.  Sorry!
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Why does &quot;mpiexec&quot; look for the help file relativ to my current
</span><br>
<span class="quotelev1">&gt; program and not relative to itself? The file is part of the
</span><br>
<span class="quotelev1">&gt; package.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; dir &quot;c:\Program Files (x86)\openmpi-1.6.1\share\openmpi\help-mpi-btl-tcp.txt&quot;
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 03.04.2012  16:30               631 help-mpi-btl-tcp.txt
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Must I change something in the source code or can I set an environment
</span><br>
<span class="quotelev1">&gt; variable for help files? Why does &quot;mpiexec&quot; want to give some help at all?
</span><br>
<span class="quotelev1">&gt; I don't get this message for openmpi-1.5.1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; D:\...\prog\mpi\small_prog&gt;mpicc init_finalize.c
</span><br>
<span class="quotelev1">&gt; Microsoft (R) 32-Bit C/C++-Optimierungscompiler Version 16.00.40219.01
</span><br>
<span class="quotelev1">&gt;    f&#252;r 80x86
</span><br>
<span class="quotelev1">&gt; Copyright (C) Microsoft Corporation. Alle Rechte vorbehalten.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; init_finalize.c
</span><br>
<span class="quotelev1">&gt; Microsoft (R) Incremental Linker Version 10.00.40219.01
</span><br>
<span class="quotelev1">&gt; Copyright (C) Microsoft Corporation.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /out:init_finalize.exe
</span><br>
<span class="quotelev1">&gt; &quot;/LIBPATH:C:/Program Files (x86)/openmpi-1.5.1/lib&quot;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; D:\...\prog\mpi\small_prog&gt;mpiexec init_finalize.exe
</span><br>
<span class="quotelev1">&gt; Hello!
</span><br>
<span class="quotelev1">&gt; D:\...\prog\mpi\small_prog&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can also compile in 64-bit mode but the program hangs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; D:\...\prog\mpi\small_prog&gt;mpicc init_finalize.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Microsoft (R) C/C++-Optimierungscompiler Version 16.00.40219.01 f&#252;r x64
</span><br>
<span class="quotelev1">&gt; Copyright (C) Microsoft Corporation. Alle Rechte vorbehalten.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; init_finalize.c
</span><br>
<span class="quotelev1">&gt; Microsoft (R) Incremental Linker Version 10.00.40219.01
</span><br>
<span class="quotelev1">&gt; Copyright (C) Microsoft Corporation.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /out:init_finalize.exe
</span><br>
<span class="quotelev1">&gt; &quot;/LIBPATH:C:\Program Files\openmpi-1.6.1\bin/../lib&quot;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; D:\...\prog\mpi\small_prog&gt;mpiexec init_finalize.exe
</span><br>
<span class="quotelev1">&gt; ^C
</span><br>
<span class="quotelev1">&gt; D:\...\prog\mpi\small_prog&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It's the same if I compile a 64-bit program with openmpi-1.5.1. The program
</span><br>
<span class="quotelev1">&gt; itself is very small.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main (int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;    MPI_Init (&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;    printf (&quot;Hello!\n&quot;);
</span><br>
<span class="quotelev1">&gt;    MPI_Finalize ();
</span><br>
<span class="quotelev1">&gt;    return EXIT_SUCCESS;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any ideas why the 64-bit version hangs? Thank you very much for any help
</span><br>
<span class="quotelev1">&gt; in advance.
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="20062.php">Zbigniew Koza: "[OMPI users] what is a &quot;node&quot;?"</a>
<li><strong>Previous message:</strong> <a href="20060.php">Ammar Ahmad Awan: "[OMPI users] Accessing data member of MPI_File struct"</a>
<li><strong>In reply to:</strong> <a href="20055.php">Siegmar Gross: "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20068.php">Siegmar Gross: "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
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
