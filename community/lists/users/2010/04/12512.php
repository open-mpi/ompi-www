<?
$subject_val = "[OMPI users] openMPI-1.4.1 on Windows";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  1 08:11:56 2010" -->
<!-- isoreceived="20100401121156" -->
<!-- sent="Thu, 1 Apr 2010 16:11:30 +0400" -->
<!-- isosent="20100401121130" -->
<!-- name="NovA" -->
<!-- email="av.nova_at_[hidden]" -->
<!-- subject="[OMPI users] openMPI-1.4.1 on Windows" -->
<!-- id="y2nd6e391f61004010511n968a5ef0x23692d40fd4958b3_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] openMPI-1.4.1 on Windows<br>
<strong>From:</strong> NovA (<em>av.nova_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-01 08:11:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12513.php">Oliver Geisler: "Re: [OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Previous message:</strong> <a href="12511.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpiblast only run in one node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12528.php">Shiqing Fan: "Re: [OMPI users] openMPI-1.4.1 on Windows"</a>
<li><strong>Reply:</strong> <a href="12528.php">Shiqing Fan: "Re: [OMPI users] openMPI-1.4.1 on Windows"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear developers,
<br>
<p>I'm attempting to use openMPI 1.4.1 on Windows XP x64. Almost
<br>
everything is working fine now, but in the process I've faced several
<br>
problems and some of them remains...
<br>
<p>(1) There were problems to configure openMPI using latest CMake 2.8.1.
<br>
Fortunately this was described in mail-list's posts &quot;[OMPI users]
<br>
Windows CMake build problems ... (cont.)&quot;. So I've switched to CMake
<br>
2.6.4 and VC-2005 built everything flawlessly. Looking forward for the
<br>
real fix though.
<br>
<p><p>(2) I've build a test program without any faults, but got the
<br>
following error trying to run it with mpiexec:
<br>
----------
<br>
<span class="quotelev1">&gt; mpiexec -np 1 hello.exe
</span><br>
Cannot open configuration file C:/Program
<br>
Files/openMPI-1.4.1/vc-x64/share/openmpi\mpiexec-wrapper-data.txt
<br>
Error parsing data file mpiexec: Not found
<br>
----------
<br>
I've managed to solve this by creating empty files
<br>
&quot;mpiexec-wrapper-data.txt&quot; and &quot;mpiexec.exe-wrapper-data.txt&quot;. This is
<br>
a rough fix, that files should contain something useful probably.
<br>
Anyway they have to be created automatically I suppose.
<br>
<p>(3) Also mpiexec could not report any errors
<br>
<span class="quotelev1">&gt; mpiexec
</span><br>
--------------------------------------------------------------------------
<br>
Sorry!  You were supposed to get help about:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;no-options-support
<br>
But I couldn't open the help file:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;C:\Program Files\openMPI-1.4.1\icc-x64\share\openmpi\help-opal-wrapper.txt:
<br>
No such file or directory.  Sorry!
<br>
--------------------------------------------------------------------------
<br>
<p>The workaround is to rename existing file &quot;help-opal-wrapper.exe.txt&quot;
<br>
to the needed one. Unfortunately this leads to another error:
<br>
<span class="quotelev1">&gt; mpiexec
</span><br>
--------------------------------------------------------------------------
<br>
Sorry!  You were supposed to get help about:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;no-options-support
<br>
from the file:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;help-opal-wrapper.txt
<br>
But I couldn't find that topic in the file.  Sorry!
<br>
--------------------------------------------------------------------------
<br>
<p><p>(4) I've found out that MPI programs can't run without &quot;mpirun&quot; or
<br>
&quot;mpiexec&quot;. It is expected that a mpi program should just start as 1
<br>
process if mpirun is not used. Instead this leads to the following
<br>
error:
<br>
//////////////////////////////////////////////////////////////////////////////////////
<br>
<span class="quotelev1">&gt;hello.exe
</span><br>
[nova:14132] [[INVALID],INVALID] ERROR: Failed to identify the local
<br>
daemon's URI
<br>
[nova:14132] [[INVALID],INVALID] ERROR: This is a fatal condition when
<br>
the binomial router
<br>
[nova:14132] [[INVALID],INVALID] ERROR: has been selected - either
<br>
select the unity router
<br>
[nova:14132] [[INVALID],INVALID] ERROR: or ensure that the local
<br>
daemon info is provided
<br>
[nova:14132] [[INVALID],INVALID] ORTE_ERROR_LOG: Fatal in file
<br>
..\..\..\_src\orte\mca\ess\base\ess_base_std_app.c at line 151
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;orte_routed.init_routes failed
<br>
&nbsp;&nbsp;--&gt; Returned value Fatal (-6) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
[nova:14132] [[INVALID],INVALID] ORTE_ERROR_LOG: Fatal in file
<br>
..\..\..\_src\orte\mca\ess\singleton\ess_singleton_module.c at line
<br>
189
<br>
[nova:14132] [[INVALID],INVALID] ORTE_ERROR_LOG: Fatal in file
<br>
..\..\..\_src\orte\runtime\orte_init.c at line 132
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;orte_ess_set_name failed
<br>
&nbsp;&nbsp;--&gt; Returned value Fatal (-6) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
It looks like MPI_INIT failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during MPI_INIT; some of which are due to configuration or environment
<br>
problems.  This failure appears to be an internal failure; here's some
<br>
additional information (which may only be relevant to an Open MPI
<br>
developer):
<br>
<p>&nbsp;&nbsp;ompi_mpi_init: orte_init failed
<br>
&nbsp;&nbsp;--&gt; Returned &quot;Fatal&quot; (-6) instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[nova:14132] Abort before MPI_INIT completed successfully; not able to
<br>
guarantee that all other processes were killed!
<br>
//////////////////////////////////////////////////////////////////////////////////////
<br>
<p>It's rather annoying, especially because the error message says
<br>
nothing useful to end user.
<br>
<p><p>(5) And the last my problem concerns a code. I've faced it while
<br>
building PETSc-3.1, but there is also the following simplest test
<br>
case:
<br>
/////////////////////////////   test.c  /////////////////////////////////////
<br>
#include &quot;mpi.h&quot;
<br>
<p>MPI_Comm c = MPI_COMM_NULL;
<br>
<p>int main()
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
//////////////////////////////////////////////////////////////////////////////////////
<br>
<p>This file can be compiled using C++ compiler, but pure C compiler
<br>
produces the following error:
<br>
-----------
<br>
<span class="quotelev1">&gt; mpicc test.c
</span><br>
Microsoft (R) C/C++ Optimizing Compiler Version 14.00.50727.42 for x64
<br>
Copyright (C) Microsoft Corporation.  All rights reserved.
<br>
<p>test.c
<br>
test.c(3) : error C2099: initializer is not a constant
<br>
------------
<br>
<p>Is this intended behavior for the MPI_COMM_NULL? PETSc developers said
<br>
that &quot;this would seem like a violation of the standard...&quot;
<br>
<p>With best regards,
<br>
&nbsp;&nbsp;Andrey
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12513.php">Oliver Geisler: "Re: [OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Previous message:</strong> <a href="12511.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpiblast only run in one node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12528.php">Shiqing Fan: "Re: [OMPI users] openMPI-1.4.1 on Windows"</a>
<li><strong>Reply:</strong> <a href="12528.php">Shiqing Fan: "Re: [OMPI users] openMPI-1.4.1 on Windows"</a>
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
