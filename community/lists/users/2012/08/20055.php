<?
$subject_val = "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 29 06:40:58 2012" -->
<!-- isoreceived="20120829104058" -->
<!-- sent="Wed, 29 Aug 2012 12:33:55 +0200 (CEST)" -->
<!-- isosent="20120829103355" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7" -->
<!-- id="201208291033.q7TAXtXe018404_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Date:</strong> 2012-08-29 06:33:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20056.php">Paul Edmon: "[OMPI users] OpenMPI 1.6.1 with Intel Cluster Studio 2012"</a>
<li><strong>Previous message:</strong> <a href="20054.php">Craske, John: "[OMPI users] MPI_Cart_sub periods"</a>
<li><strong>Maybe in reply to:</strong> <a href="20014.php">Siegmar Gross: "[OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20061.php">Shiqing Fan: "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
<li><strong>Reply:</strong> <a href="20061.php">Shiqing Fan: "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Shiqing,
<br>
<p><span class="quotelev1">&gt; It seems that the runtime environment is messed up with the different 
</span><br>
<span class="quotelev1">&gt; versions of Open MPI. I suggest you completely remove all the 
</span><br>
<span class="quotelev1">&gt; installations and install 1.6.1 again (just build the installation 
</span><br>
<span class="quotelev1">&gt; project again). It should work without any problem under Cygwin too.
</span><br>
<p>I removed openmpi-1.6 und rebuilt openmpi-1.6.1. Now I can compile and
<br>
run a program in 32-bit mode but have still some problems.
<br>
<p>D:\...\prog\mpi\small_prog&gt;mpicc init_finalize.c
<br>
Microsoft (R) 32-Bit C/C++-Optimierungscompiler Version
<br>
&nbsp;&nbsp;16.00.40219.01 f&#252;r 80x86
<br>
Copyright (C) Microsoft Corporation. Alle Rechte vorbehalten.
<br>
<p>init_finalize.c
<br>
Microsoft (R) Incremental Linker Version 10.00.40219.01
<br>
Copyright (C) Microsoft Corporation.  All rights reserved.
<br>
<p>/out:init_finalize.exe
<br>
&quot;/LIBPATH:C:\Program Files (x86)\openmpi-1.6.1\bin/../lib&quot;
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
<p>D:\...\prog\mpi\small_prog&gt;mpiexec init_finalize.exe
<br>
---------------------------------------------------------------------
<br>
Sorry!  You were supposed to get help about:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;invalid if_inexclude
<br>
But I couldn't open the help file:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;D:\...\prog\mpi\small_prog\..\share\openmpi\help-mpi-btl-tcp.txt:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;No such file or directory.  Sorry!
<br>
---------------------------------------------------------------------
<br>
<p>Hello!
<br>
<p><p>Why does &quot;mpiexec&quot; look for the help file relativ to my current
<br>
program and not relative to itself? The file is part of the
<br>
package.
<br>
<p>dir &quot;c:\Program Files (x86)\openmpi-1.6.1\share\openmpi\help-mpi-btl-tcp.txt&quot;
<br>
...
<br>
03.04.2012  16:30               631 help-mpi-btl-tcp.txt
<br>
<p>Must I change something in the source code or can I set an environment
<br>
variable for help files? Why does &quot;mpiexec&quot; want to give some help at all?
<br>
I don't get this message for openmpi-1.5.1.
<br>
<p><p>D:\...\prog\mpi\small_prog&gt;mpicc init_finalize.c
<br>
Microsoft (R) 32-Bit C/C++-Optimierungscompiler Version 16.00.40219.01
<br>
&nbsp;&nbsp;f&#252;r 80x86
<br>
Copyright (C) Microsoft Corporation. Alle Rechte vorbehalten.
<br>
<p>init_finalize.c
<br>
Microsoft (R) Incremental Linker Version 10.00.40219.01
<br>
Copyright (C) Microsoft Corporation.  All rights reserved.
<br>
<p>/out:init_finalize.exe
<br>
&quot;/LIBPATH:C:/Program Files (x86)/openmpi-1.5.1/lib&quot;
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
<p>D:\...\prog\mpi\small_prog&gt;mpiexec init_finalize.exe
<br>
Hello!
<br>
D:\...\prog\mpi\small_prog&gt;
<br>
<p><p><p><p><p>I can also compile in 64-bit mode but the program hangs.
<br>
<p><p>D:\...\prog\mpi\small_prog&gt;mpicc init_finalize.c
<br>
<p>Microsoft (R) C/C++-Optimierungscompiler Version 16.00.40219.01 f&#252;r x64
<br>
Copyright (C) Microsoft Corporation. Alle Rechte vorbehalten.
<br>
<p>init_finalize.c
<br>
Microsoft (R) Incremental Linker Version 10.00.40219.01
<br>
Copyright (C) Microsoft Corporation.  All rights reserved.
<br>
<p>/out:init_finalize.exe
<br>
&quot;/LIBPATH:C:\Program Files\openmpi-1.6.1\bin/../lib&quot;
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
<p>D:\...\prog\mpi\small_prog&gt;mpiexec init_finalize.exe
<br>
^C
<br>
D:\...\prog\mpi\small_prog&gt;
<br>
<p><p>It's the same if I compile a 64-bit program with openmpi-1.5.1. The program
<br>
itself is very small.
<br>
<p>#include &lt;stdio.h&gt;
<br>
#include &lt;stdlib.h&gt;
<br>
#include &quot;mpi.h&quot;
<br>
<p>int main (int argc, char *argv[])
<br>
{
<br>
&nbsp;&nbsp;MPI_Init (&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;printf (&quot;Hello!\n&quot;);
<br>
&nbsp;&nbsp;MPI_Finalize ();
<br>
&nbsp;&nbsp;return EXIT_SUCCESS;
<br>
}
<br>
<p><p>Any ideas why the 64-bit version hangs? Thank you very much for any help
<br>
in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20056.php">Paul Edmon: "[OMPI users] OpenMPI 1.6.1 with Intel Cluster Studio 2012"</a>
<li><strong>Previous message:</strong> <a href="20054.php">Craske, John: "[OMPI users] MPI_Cart_sub periods"</a>
<li><strong>Maybe in reply to:</strong> <a href="20014.php">Siegmar Gross: "[OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20061.php">Shiqing Fan: "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
<li><strong>Reply:</strong> <a href="20061.php">Shiqing Fan: "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
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
