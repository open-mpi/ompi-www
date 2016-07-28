<?
$subject_val = "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  6 10:55:47 2012" -->
<!-- isoreceived="20120906145547" -->
<!-- sent="Thu, 06 Sep 2012 16:58:03 +0200" -->
<!-- isosent="20120906145803" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7" -->
<!-- id="5048B9FB.3070408_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201209060548.q865mYkE023698_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Date:</strong> 2012-09-06 10:58:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20143.php">Yonghui: "[OMPI users] MPI_Allreduce fail  (minGW gfortran + OpenMPI 1.6.1)"</a>
<li><strong>Previous message:</strong> <a href="20141.php">Jeff Squyres: "Re: [OMPI users] MPI_Cart_sub periods"</a>
<li><strong>In reply to:</strong> <a href="20136.php">Siegmar Gross: "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20166.php">Siegmar Gross: "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Siegmar,
<br>
<p>Glad to hear that it's working for you.
<br>
<p>The warning message is because the loopback adapter is excluded by 
<br>
default, but this adapter is actually not installed on Windows.
<br>
<p>One solution might be installing the loopback adapter on Windows. It 
<br>
very easy, only a few minutes.
<br>
<p>Or it may be possible to avoid this message from internal Open MPI. But 
<br>
I'm not sure about how this can be done.
<br>
<p><p>Regards,
<br>
Shiqing
<br>
<p><p>On 2012-09-06 7:48 AM, Siegmar Gross wrote:
<br>
<span class="quotelev1">&gt; Hi Shiqing,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have solved the problem with the double quotes in OPENMPI_HOME but
</span><br>
<span class="quotelev1">&gt; there is still something wrong.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; set OPENMPI_HOME=&quot;c:\Program Files (x86)\openmpi-1.6.1&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpicc init_finalize.c
</span><br>
<span class="quotelev1">&gt; Cannot open configuration file &quot;c:\Program Files (x86)\openmpi-1.6.1&quot;/share/openmpi\mpicc-wrapper-data.txt
</span><br>
<span class="quotelev1">&gt; Error parsing data file mpicc: Not found
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Everything is OK if you remove the double quotes which Windows
</span><br>
<span class="quotelev1">&gt; automatically adds.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; set OPENMPI_HOME=c:\Program Files (x86)\openmpi-1.6.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpicc init_finalize.c
</span><br>
<span class="quotelev1">&gt; Microsoft (R) 32-Bit C/C++-Optimierungscompiler Version 16.00.40219.01 f&#252;r 80x86
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpiexec init_finalize.exe
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WARNING: An invalid value was given for btl_tcp_if_exclude.  This
</span><br>
<span class="quotelev1">&gt; value will be ignored.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Local host: hermes
</span><br>
<span class="quotelev1">&gt;    Value:      127.0.0.1/8
</span><br>
<span class="quotelev1">&gt;    Message:    Did not find interface matching this subnet
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I get the output from my program but also a warning from Open MPI.
</span><br>
<span class="quotelev1">&gt; The new value for the loopback device was introduced a short time
</span><br>
<span class="quotelev1">&gt; ago when I have had problems with the loopback device on Solaris
</span><br>
<span class="quotelev1">&gt; (it used &quot;lo0&quot; instead of your default &quot;lo&quot;). How can I avoid this
</span><br>
<span class="quotelev1">&gt; message? The 64-bit version of my program still hangs.
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
<span class="quotelev3">&gt;&gt;&gt; Could you try set OPENMPI_HOME env var to the root of the Open MPI dir?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This env is a backup option for the registry.
</span><br>
<span class="quotelev2">&gt;&gt; It solves one problem but there is a new problem now :-((
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Without OPENMPI_HOME: Wrong pathname to help files.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; D:\...\prog\mpi\small_prog&gt;mpiexec init_finalize.exe
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Sorry!  You were supposed to get help about:
</span><br>
<span class="quotelev2">&gt;&gt;      invalid if_inexclude
</span><br>
<span class="quotelev2">&gt;&gt; But I couldn't open the help file:
</span><br>
<span class="quotelev2">&gt;&gt;      D:\...\prog\mpi\small_prog\..\share\openmpi\help-mpi-btl-tcp.txt:
</span><br>
<span class="quotelev2">&gt;&gt;      No such file or directory.  Sorry!
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; With OPENMPI_HOME: It nearly uses the correct directory. Unfortunately
</span><br>
<span class="quotelev2">&gt;&gt; the pathname contains the character &quot; in the wrong place so that it
</span><br>
<span class="quotelev2">&gt;&gt; couldn't find the available help file.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; set OPENMPI_HOME=&quot;c:\Program Files (x86)\openmpi-1.6.1&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; D:\...\prog\mpi\small_prog&gt;mpiexec init_finalize.exe
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Sorry!  You were supposed to get help about:
</span><br>
<span class="quotelev2">&gt;&gt;      no-hostfile
</span><br>
<span class="quotelev2">&gt;&gt; But I couldn't open the help file:
</span><br>
<span class="quotelev2">&gt;&gt;      &quot;c:\Program Files (x86)\openmpi-1.6.1&quot;\share\openmpi\help-hostfile.txt: Invalid argument.  Sorry
</span><br>
<span class="quotelev2">&gt;&gt; !
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [hermes:04964] [[12187,0],0] ORTE_ERROR_LOG: Not found in file ..\..\openmpi-1.6.1\orte\mca\ras\base
</span><br>
<span class="quotelev2">&gt;&gt; \ras_base_allocate.c at line 200
</span><br>
<span class="quotelev2">&gt;&gt; [hermes:04964] [[12187,0],0] ORTE_ERROR_LOG: Not found in file ..\..\openmpi-1.6.1\orte\mca\plm\base
</span><br>
<span class="quotelev2">&gt;&gt; \plm_base_launch_support.c at line 99
</span><br>
<span class="quotelev2">&gt;&gt; [hermes:04964] [[12187,0],0] ORTE_ERROR_LOG: Not found in file ..\..\openmpi-1.6.1\orte\mca\plm\proc
</span><br>
<span class="quotelev2">&gt;&gt; ess\plm_process_module.c at line 996
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It looks like that the environment variable can also solve my
</span><br>
<span class="quotelev2">&gt;&gt; problem in the 64-bit environment.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; D:\g...\prog\mpi\small_prog&gt;mpicc init_finalize.c
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Microsoft (R) C/C++-Optimierungscompiler Version 16.00.40219.01 f&#252;r x64
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The process hangs without OPENMPI_HOME.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; D:\...\prog\mpi\small_prog&gt;mpiexec init_finalize.exe
</span><br>
<span class="quotelev2">&gt;&gt; ^C
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; With OPENMPI_HOME:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; set OPENMPI_HOME=&quot;c:\Program Files\openmpi-1.6.1&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; D:\...\prog\mpi\small_prog&gt;mpiexec init_finalize.exe
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Sorry!  You were supposed to get help about:
</span><br>
<span class="quotelev2">&gt;&gt;      no-hostfile
</span><br>
<span class="quotelev2">&gt;&gt; But I couldn't open the help file:
</span><br>
<span class="quotelev2">&gt;&gt;      &quot;c:\Program Files\openmpi-1.6.1&quot;\share\openmpi\help-hostfile.txt: Invalid argument.  S
</span><br>
<span class="quotelev2">&gt;&gt; orry!
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [hermes:05248] [[10367,0],0] ORTE_ERROR_LOG: Not found in file ..\..\openmpi-1.6.1\orte\mc
</span><br>
<span class="quotelev2">&gt;&gt; a\ras\base\ras_base_allocate.c at line 200
</span><br>
<span class="quotelev2">&gt;&gt; [hermes:05248] [[10367,0],0] ORTE_ERROR_LOG: Not found in file ..\..\openmpi-1.6.1\orte\mc
</span><br>
<span class="quotelev2">&gt;&gt; a\plm\base\plm_base_launch_support.c at line 99
</span><br>
<span class="quotelev2">&gt;&gt; [hermes:05248] [[10367,0],0] ORTE_ERROR_LOG: Not found in file ..\..\openmpi-1.6.1\orte\mc
</span><br>
<span class="quotelev2">&gt;&gt; a\plm\process\plm_process_module.c at line 996
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; At least the program doesn't block any longer. Do you have any ideas
</span><br>
<span class="quotelev2">&gt;&gt; how this new problem can be solved?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Kind regards
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Siegmar
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 2012-09-05 1:02 PM, Siegmar Gross wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Shiqing,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; D:\...\prog\mpi\small_prog&gt;mpiexec init_finalize.exe
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Sorry!  You were supposed to get help about:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;        invalid if_inexclude
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; But I couldn't open the help file:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;        D:\...\prog\mpi\small_prog\..\share\openmpi\help-mpi-btl-tcp.txt:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;        No such file or directory.  Sorry!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Why does &quot;mpiexec&quot; look for the help file relativ to my current
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; program and not relative to itself? The file is part of the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; package.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Do you know how I can solve this problem?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I have similar issue with message from tcp, but it's not finding the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; file, it's something else, which doesn't affect the execution of the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; application. Could you make sure the help-mpi-btl-tcp.txt is actually in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the path D:\...\prog\mpi\small_prog\..\share\openmpi\?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; That wouldn't be a good idea because I have MPI programs in different
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; directories so that I would have to install all help files in several
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; places (&lt;my_directory&gt;/../share/openmpi/help*.txt). All help files are
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available in the installation directory of Open MPI.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; dir &quot;c:\Program Files (x86)\openmpi-1.6.1\bin\mpiexec.exe&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 29.08.2012  10:59            38.912 mpiexec.exe
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; dir &quot;c:\Program Files (x86)\openmpi-1.6.1\bin\..\share\openmpi\help-mpi-btl-tcp.txt&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 03.04.2012  16:30               631 help-mpi-btl-tcp.txt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I don't know if &quot;mpiexec&quot; or my program &quot;init_finilize&quot; is responsible
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; for the error message but whoever is responsible shouldn't use the path
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to my program but the prefix_dir from MPI to find the help files. Perhaps
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; you can change the behaviour in the Open MPI source code.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I can also compile in 64-bit mode but the program hangs.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Do you have any ideas why the program hangs? Thank you very much for any
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; help in advance.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; To be honest I don't know. I couldn't reproduce it. Did you try
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; installing the binary installer, will it also behave the same?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I like to have different versions of Open MPI which I activate via
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; a batch file so that I can still run my program in an old version if
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; something goes wrong in a new one. I have no entries in the system
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; environment or registry so that I can even run different versions in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; different command windows without problems (everything is only known
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; within the command window in which a have run my batch file). It seems
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that you put something in the registry when I use your installer.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Perhaps you remember an earlier email where I had to uninstall an old
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; version because the environment in my own installation was wrong
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; as long as your installation was active. Nevertheless I can give it
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; a try. Perhaps I find out if you set more than just the path to your
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; binaries. Do you know if there is something similar to &quot;truss&quot; or
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;strace&quot; in the UNIX world so that I can see where the program hangs?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thank you very much for your help in advance.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Kind regards
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Siegmar
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Shiqing Fan
</span><br>
<span class="quotelev3">&gt;&gt;&gt; High Performance Computing Center Stuttgart (HLRS)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tel: ++49(0)711-685-87234      Nobelstrasse 19
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fax: ++49(0)711-685-65832      70569 Stuttgart
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.hlrs.de/organization/people/shiqing-fan/">http://www.hlrs.de/organization/people/shiqing-fan/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; email: fan_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="20143.php">Yonghui: "[OMPI users] MPI_Allreduce fail  (minGW gfortran + OpenMPI 1.6.1)"</a>
<li><strong>Previous message:</strong> <a href="20141.php">Jeff Squyres: "Re: [OMPI users] MPI_Cart_sub periods"</a>
<li><strong>In reply to:</strong> <a href="20136.php">Siegmar Gross: "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20166.php">Siegmar Gross: "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
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
