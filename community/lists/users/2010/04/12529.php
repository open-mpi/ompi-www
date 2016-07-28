<?
$subject_val = "Re: [OMPI users] openMPI-1.4.1 on Windows";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  5 04:16:30 2010" -->
<!-- isoreceived="20100405081630" -->
<!-- sent="Mon, 5 Apr 2010 12:16:05 +0400" -->
<!-- isosent="20100405081605" -->
<!-- name="NovA" -->
<!-- email="av.nova_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openMPI-1.4.1 on Windows" -->
<!-- id="t2vd6e391f61004050116h5bf38a92q9757dcb2653f1b00_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4BB77CD8.2050604_at_hlrs.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] openMPI-1.4.1 on Windows<br>
<strong>From:</strong> NovA (<em>av.nova_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-05 04:16:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12530.php">Richard Treumann: "Re: [OMPI users] Hide Abort output"</a>
<li><strong>Previous message:</strong> <a href="12528.php">Shiqing Fan: "Re: [OMPI users] openMPI-1.4.1 on Windows"</a>
<li><strong>In reply to:</strong> <a href="12528.php">Shiqing Fan: "Re: [OMPI users] openMPI-1.4.1 on Windows"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Shiqing,
<br>
<p>2010/4/3 Shiqing Fan &lt;fan_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Andrey,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your feedback.
</span><br>
I'm pleased to help making openMPI better, at least this way.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Problem 1, 2 and 3 has been fixed in trunk and will be available in future
</span><br>
<span class="quotelev1">&gt; release. We'll fix the last two problems as soon as possible.
</span><br>
Glad to hear. Is there any estimation when 1.4.2 will be released?
<br>
<p>Regards,
<br>
&nbsp;&nbsp;Andrey
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2010-4-1 2:11 PM, NovA wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear developers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm attempting to use openMPI 1.4.1 on Windows XP x64. Almost
</span><br>
<span class="quotelev2">&gt;&gt; everything is working fine now, but in the process I've faced several
</span><br>
<span class="quotelev2">&gt;&gt; problems and some of them remains...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (1) There were problems to configure openMPI using latest CMake 2.8.1.
</span><br>
<span class="quotelev2">&gt;&gt; Fortunately this was described in mail-list's posts &quot;[OMPI users]
</span><br>
<span class="quotelev2">&gt;&gt; Windows CMake build problems ... (cont.)&quot;. So I've switched to CMake
</span><br>
<span class="quotelev2">&gt;&gt; 2.6.4 and VC-2005 built everything flawlessly. Looking forward for the
</span><br>
<span class="quotelev2">&gt;&gt; real fix though.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (2) I've build a test program without any faults, but got the
</span><br>
<span class="quotelev2">&gt;&gt; following error trying to run it with mpiexec:
</span><br>
<span class="quotelev2">&gt;&gt; ----------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpiexec -np 1 hello.exe
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cannot open configuration file C:/Program
</span><br>
<span class="quotelev2">&gt;&gt; Files/openMPI-1.4.1/vc-x64/share/openmpi\mpiexec-wrapper-data.txt
</span><br>
<span class="quotelev2">&gt;&gt; Error parsing data file mpiexec: Not found
</span><br>
<span class="quotelev2">&gt;&gt; ----------
</span><br>
<span class="quotelev2">&gt;&gt; I've managed to solve this by creating empty files
</span><br>
<span class="quotelev2">&gt;&gt; &quot;mpiexec-wrapper-data.txt&quot; and &quot;mpiexec.exe-wrapper-data.txt&quot;. This is
</span><br>
<span class="quotelev2">&gt;&gt; a rough fix, that files should contain something useful probably.
</span><br>
<span class="quotelev2">&gt;&gt; Anyway they have to be created automatically I suppose.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (3) Also mpiexec could not report any errors
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpiexec
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Sorry!  You were supposed to get help about:
</span><br>
<span class="quotelev2">&gt;&gt;     no-options-support
</span><br>
<span class="quotelev2">&gt;&gt; But I couldn't open the help file:
</span><br>
<span class="quotelev2">&gt;&gt;     C:\Program
</span><br>
<span class="quotelev2">&gt;&gt; Files\openMPI-1.4.1\icc-x64\share\openmpi\help-opal-wrapper.txt:
</span><br>
<span class="quotelev2">&gt;&gt; No such file or directory.  Sorry!
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The workaround is to rename existing file &quot;help-opal-wrapper.exe.txt&quot;
</span><br>
<span class="quotelev2">&gt;&gt; to the needed one. Unfortunately this leads to another error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpiexec
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Sorry!  You were supposed to get help about:
</span><br>
<span class="quotelev2">&gt;&gt;     no-options-support
</span><br>
<span class="quotelev2">&gt;&gt; from the file:
</span><br>
<span class="quotelev2">&gt;&gt;     help-opal-wrapper.txt
</span><br>
<span class="quotelev2">&gt;&gt; But I couldn't find that topic in the file.  Sorry!
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (4) I've found out that MPI programs can't run without &quot;mpirun&quot; or
</span><br>
<span class="quotelev2">&gt;&gt; &quot;mpiexec&quot;. It is expected that a mpi program should just start as 1
</span><br>
<span class="quotelev2">&gt;&gt; process if mpirun is not used. Instead this leads to the following
</span><br>
<span class="quotelev2">&gt;&gt; error:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; //////////////////////////////////////////////////////////////////////////////////////
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hello.exe
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [nova:14132] [[INVALID],INVALID] ERROR: Failed to identify the local
</span><br>
<span class="quotelev2">&gt;&gt; daemon's URI
</span><br>
<span class="quotelev2">&gt;&gt; [nova:14132] [[INVALID],INVALID] ERROR: This is a fatal condition when
</span><br>
<span class="quotelev2">&gt;&gt; the binomial router
</span><br>
<span class="quotelev2">&gt;&gt; [nova:14132] [[INVALID],INVALID] ERROR: has been selected - either
</span><br>
<span class="quotelev2">&gt;&gt; select the unity router
</span><br>
<span class="quotelev2">&gt;&gt; [nova:14132] [[INVALID],INVALID] ERROR: or ensure that the local
</span><br>
<span class="quotelev2">&gt;&gt; daemon info is provided
</span><br>
<span class="quotelev2">&gt;&gt; [nova:14132] [[INVALID],INVALID] ORTE_ERROR_LOG: Fatal in file
</span><br>
<span class="quotelev2">&gt;&gt; ..\..\..\_src\orte\mca\ess\base\ess_base_std_app.c at line 151
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev2">&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt;&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev2">&gt;&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev2">&gt;&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   orte_routed.init_routes failed
</span><br>
<span class="quotelev2">&gt;&gt;   --&gt;  Returned value Fatal (-6) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [nova:14132] [[INVALID],INVALID] ORTE_ERROR_LOG: Fatal in file
</span><br>
<span class="quotelev2">&gt;&gt; ..\..\..\_src\orte\mca\ess\singleton\ess_singleton_module.c at line
</span><br>
<span class="quotelev2">&gt;&gt; 189
</span><br>
<span class="quotelev2">&gt;&gt; [nova:14132] [[INVALID],INVALID] ORTE_ERROR_LOG: Fatal in file
</span><br>
<span class="quotelev2">&gt;&gt; ..\..\..\_src\orte\runtime\orte_init.c at line 132
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev2">&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt;&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev2">&gt;&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev2">&gt;&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   orte_ess_set_name failed
</span><br>
<span class="quotelev2">&gt;&gt;   --&gt;  Returned value Fatal (-6) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev2">&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt;&gt; fail during MPI_INIT; some of which are due to configuration or
</span><br>
<span class="quotelev2">&gt;&gt; environment
</span><br>
<span class="quotelev2">&gt;&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev2">&gt;&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev2">&gt;&gt; developer):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   ompi_mpi_init: orte_init failed
</span><br>
<span class="quotelev2">&gt;&gt;   --&gt;  Returned &quot;Fatal&quot; (-6) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev2">&gt;&gt; *** before MPI was initialized
</span><br>
<span class="quotelev2">&gt;&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev2">&gt;&gt; [nova:14132] Abort before MPI_INIT completed successfully; not able to
</span><br>
<span class="quotelev2">&gt;&gt; guarantee that all other processes were killed!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; //////////////////////////////////////////////////////////////////////////////////////
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It's rather annoying, especially because the error message says
</span><br>
<span class="quotelev2">&gt;&gt; nothing useful to end user.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (5) And the last my problem concerns a code. I've faced it while
</span><br>
<span class="quotelev2">&gt;&gt; building PETSc-3.1, but there is also the following simplest test
</span><br>
<span class="quotelev2">&gt;&gt; case:
</span><br>
<span class="quotelev2">&gt;&gt; /////////////////////////////   test.c
</span><br>
<span class="quotelev2">&gt;&gt;  /////////////////////////////////////
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Comm c = MPI_COMM_NULL;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int main()
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;     return 0;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; //////////////////////////////////////////////////////////////////////////////////////
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This file can be compiled using C++ compiler, but pure C compiler
</span><br>
<span class="quotelev2">&gt;&gt; produces the following error:
</span><br>
<span class="quotelev2">&gt;&gt; -----------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpicc test.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Microsoft (R) C/C++ Optimizing Compiler Version 14.00.50727.42 for x64
</span><br>
<span class="quotelev2">&gt;&gt; Copyright (C) Microsoft Corporation.  All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; test.c
</span><br>
<span class="quotelev2">&gt;&gt; test.c(3) : error C2099: initializer is not a constant
</span><br>
<span class="quotelev2">&gt;&gt; ------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is this intended behavior for the MPI_COMM_NULL? PETSc developers said
</span><br>
<span class="quotelev2">&gt;&gt; that &quot;this would seem like a violation of the standard...&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; With best regards,
</span><br>
<span class="quotelev2">&gt;&gt;   Andrey
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Shiqing Fan                          <a href="http://www.hlrs.de/people/fan">http://www.hlrs.de/people/fan</a>
</span><br>
<span class="quotelev1">&gt; High Performance Computing           Tel.: +49 711 685 87234
</span><br>
<span class="quotelev1">&gt;  Center Stuttgart (HLRS)            Fax.: +49 711 685 65832
</span><br>
<span class="quotelev1">&gt; Address:Allmandring 30               email: fan_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 70569 Stuttgart
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12530.php">Richard Treumann: "Re: [OMPI users] Hide Abort output"</a>
<li><strong>Previous message:</strong> <a href="12528.php">Shiqing Fan: "Re: [OMPI users] openMPI-1.4.1 on Windows"</a>
<li><strong>In reply to:</strong> <a href="12528.php">Shiqing Fan: "Re: [OMPI users] openMPI-1.4.1 on Windows"</a>
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
