<?
$subject_val = "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  5 12:03:36 2012" -->
<!-- isoreceived="20120905160336" -->
<!-- sent="Wed, 5 Sep 2012 17:43:50 +0200 (CEST)" -->
<!-- isosent="20120905154350" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7" -->
<!-- id="201209051543.q85FhoBa021975_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Date:</strong> 2012-09-05 11:43:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20132.php">Yong Qin: "Re: [OMPI users] OMPI 1.6.x Hang on khugepaged 100% CPU time"</a>
<li><strong>Previous message:</strong> <a href="20130.php">Paul Kapinos: "Re: [OMPI users] OMPI 1.6.x Hang on khugepaged 100% CPU time"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/08/20014.php">Siegmar Gross: "[OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20136.php">Siegmar Gross: "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Shiqing,
<br>
<p><span class="quotelev1">&gt; Could you try set OPENMPI_HOME env var to the root of the Open MPI dir? 
</span><br>
<span class="quotelev1">&gt; This env is a backup option for the registry.
</span><br>
<p>It solves one problem but there is a new problem now :-((
<br>
<p><p>Without OPENMPI_HOME: Wrong pathname to help files.
<br>
<p>D:\...\prog\mpi\small_prog&gt;mpiexec init_finalize.exe
<br>
--------------------------------------------------------------------------
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
--------------------------------------------------------------------------
<br>
...
<br>
<p><p><p>With OPENMPI_HOME: It nearly uses the correct directory. Unfortunately
<br>
the pathname contains the character &quot; in the wrong place so that it
<br>
couldn't find the available help file.
<br>
<p>set OPENMPI_HOME=&quot;c:\Program Files (x86)\openmpi-1.6.1&quot;
<br>
<p>D:\...\prog\mpi\small_prog&gt;mpiexec init_finalize.exe
<br>
--------------------------------------------------------------------------
<br>
Sorry!  You were supposed to get help about:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;no-hostfile
<br>
But I couldn't open the help file:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&quot;c:\Program Files (x86)\openmpi-1.6.1&quot;\share\openmpi\help-hostfile.txt: Invalid argument.  Sorry
<br>
!
<br>
--------------------------------------------------------------------------
<br>
[hermes:04964] [[12187,0],0] ORTE_ERROR_LOG: Not found in file ..\..\openmpi-1.6.1\orte\mca\ras\base
<br>
\ras_base_allocate.c at line 200
<br>
[hermes:04964] [[12187,0],0] ORTE_ERROR_LOG: Not found in file ..\..\openmpi-1.6.1\orte\mca\plm\base
<br>
\plm_base_launch_support.c at line 99
<br>
[hermes:04964] [[12187,0],0] ORTE_ERROR_LOG: Not found in file ..\..\openmpi-1.6.1\orte\mca\plm\proc
<br>
ess\plm_process_module.c at line 996
<br>
<p><p><p>It looks like that the environment variable can also solve my
<br>
problem in the 64-bit environment.
<br>
<p>D:\g...\prog\mpi\small_prog&gt;mpicc init_finalize.c
<br>
<p>Microsoft (R) C/C++-Optimierungscompiler Version 16.00.40219.01 f&#252;r x64
<br>
...
<br>
<p><p>The process hangs without OPENMPI_HOME.
<br>
<p>D:\...\prog\mpi\small_prog&gt;mpiexec init_finalize.exe
<br>
^C
<br>
<p><p>With OPENMPI_HOME:
<br>
<p>set OPENMPI_HOME=&quot;c:\Program Files\openmpi-1.6.1&quot;
<br>
<p>D:\...\prog\mpi\small_prog&gt;mpiexec init_finalize.exe
<br>
--------------------------------------------------------------------------
<br>
Sorry!  You were supposed to get help about:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;no-hostfile
<br>
But I couldn't open the help file:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&quot;c:\Program Files\openmpi-1.6.1&quot;\share\openmpi\help-hostfile.txt: Invalid argument.  S
<br>
orry!
<br>
--------------------------------------------------------------------------
<br>
[hermes:05248] [[10367,0],0] ORTE_ERROR_LOG: Not found in file ..\..\openmpi-1.6.1\orte\mc
<br>
a\ras\base\ras_base_allocate.c at line 200
<br>
[hermes:05248] [[10367,0],0] ORTE_ERROR_LOG: Not found in file ..\..\openmpi-1.6.1\orte\mc
<br>
a\plm\base\plm_base_launch_support.c at line 99
<br>
[hermes:05248] [[10367,0],0] ORTE_ERROR_LOG: Not found in file ..\..\openmpi-1.6.1\orte\mc
<br>
a\plm\process\plm_process_module.c at line 996
<br>
<p><p>At least the program doesn't block any longer. Do you have any ideas
<br>
how this new problem can be solved?
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<p><p><p><span class="quotelev1">&gt; On 2012-09-05 1:02 PM, Siegmar Gross wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi Shiqing,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; D:\...\prog\mpi\small_prog&gt;mpiexec init_finalize.exe
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Sorry!  You were supposed to get help about:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;       invalid if_inexclude
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; But I couldn't open the help file:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;       D:\...\prog\mpi\small_prog\..\share\openmpi\help-mpi-btl-tcp.txt:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;       No such file or directory.  Sorry!
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ...
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Why does &quot;mpiexec&quot; look for the help file relativ to my current
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; program and not relative to itself? The file is part of the
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; package.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Do you know how I can solve this problem?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I have similar issue with message from tcp, but it's not finding the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; file, it's something else, which doesn't affect the execution of the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; application. Could you make sure the help-mpi-btl-tcp.txt is actually in
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the path D:\...\prog\mpi\small_prog\..\share\openmpi\?
</span><br>
<span class="quotelev2">&gt; &gt; That wouldn't be a good idea because I have MPI programs in different
</span><br>
<span class="quotelev2">&gt; &gt; directories so that I would have to install all help files in several
</span><br>
<span class="quotelev2">&gt; &gt; places (&lt;my_directory&gt;/../share/openmpi/help*.txt). All help files are
</span><br>
<span class="quotelev2">&gt; &gt; available in the installation directory of Open MPI.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; dir &quot;c:\Program Files (x86)\openmpi-1.6.1\bin\mpiexec.exe&quot;
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt; 29.08.2012  10:59            38.912 mpiexec.exe
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt; dir &quot;c:\Program Files (x86)\openmpi-1.6.1\bin\..\share\openmpi\help-mpi-btl-tcp.txt&quot;
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt; 03.04.2012  16:30               631 help-mpi-btl-tcp.txt
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I don't know if &quot;mpiexec&quot; or my program &quot;init_finilize&quot; is responsible
</span><br>
<span class="quotelev2">&gt; &gt; for the error message but whoever is responsible shouldn't use the path
</span><br>
<span class="quotelev2">&gt; &gt; to my program but the prefix_dir from MPI to find the help files. Perhaps
</span><br>
<span class="quotelev2">&gt; &gt; you can change the behaviour in the Open MPI source code.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I can also compile in 64-bit mode but the program hangs.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Do you have any ideas why the program hangs? Thank you very much for any
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; help in advance.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; To be honest I don't know. I couldn't reproduce it. Did you try
</span><br>
<span class="quotelev3">&gt; &gt;&gt; installing the binary installer, will it also behave the same?
</span><br>
<span class="quotelev2">&gt; &gt; I like to have different versions of Open MPI which I activate via
</span><br>
<span class="quotelev2">&gt; &gt; a batch file so that I can still run my program in an old version if
</span><br>
<span class="quotelev2">&gt; &gt; something goes wrong in a new one. I have no entries in the system
</span><br>
<span class="quotelev2">&gt; &gt; environment or registry so that I can even run different versions in
</span><br>
<span class="quotelev2">&gt; &gt; different command windows without problems (everything is only known
</span><br>
<span class="quotelev2">&gt; &gt; within the command window in which a have run my batch file). It seems
</span><br>
<span class="quotelev2">&gt; &gt; that you put something in the registry when I use your installer.
</span><br>
<span class="quotelev2">&gt; &gt; Perhaps you remember an earlier email where I had to uninstall an old
</span><br>
<span class="quotelev2">&gt; &gt; version because the environment in my own installation was wrong
</span><br>
<span class="quotelev2">&gt; &gt; as long as your installation was active. Nevertheless I can give it
</span><br>
<span class="quotelev2">&gt; &gt; a try. Perhaps I find out if you set more than just the path to your
</span><br>
<span class="quotelev2">&gt; &gt; binaries. Do you know if there is something similar to &quot;truss&quot; or
</span><br>
<span class="quotelev2">&gt; &gt; &quot;strace&quot; in the UNIX world so that I can see where the program hangs?
</span><br>
<span class="quotelev2">&gt; &gt; Thank you very much for your help in advance.
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
<li><strong>Next message:</strong> <a href="20132.php">Yong Qin: "Re: [OMPI users] OMPI 1.6.x Hang on khugepaged 100% CPU time"</a>
<li><strong>Previous message:</strong> <a href="20130.php">Paul Kapinos: "Re: [OMPI users] OMPI 1.6.x Hang on khugepaged 100% CPU time"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/08/20014.php">Siegmar Gross: "[OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20136.php">Siegmar Gross: "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
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
