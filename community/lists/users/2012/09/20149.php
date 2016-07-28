<?
$subject_val = "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  7 05:38:51 2012" -->
<!-- isoreceived="20120907093851" -->
<!-- sent="Fri, 7 Sep 2012 11:38:45 +0200" -->
<!-- isosent="20120907093845" -->
<!-- name="Andrea Negri" -->
<!-- email="negri.andre_at_[hidden]" -->
<!-- subject="Re: [OMPI users] some mpi processes &amp;quot;disappear&amp;quot; on a cluster of servers" -->
<!-- id="CAPUxaiT3pf+-ebMqPv_8LGc6WBzHWTn+FqXUBKi+RBY+66kGaQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI users] some mpi processes &amp;quot;disappear&amp;quot; on a cluster of servers" -->
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
<strong>Subject:</strong> Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers<br>
<strong>From:</strong> Andrea Negri (<em>negri.andre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-07 05:38:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20150.php">Jeff Squyres: "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<li><strong>Previous message:</strong> <a href="20148.php">Randolph Pullen: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
<li><strong>Maybe in reply to:</strong> <a href="20125.php">Andrea Negri: "[OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20150.php">Jeff Squyres: "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George,
<br>
<p>I hace done some modifications to the code, however this is the first
<br>
part my zmp_list:
<br>
!                ZEUSMP2 CONFIGURATION FILE
<br>
&nbsp;&amp;GEOMCONF  LGEOM    = 2,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LDIMEN   = 2 /
<br>
&nbsp;&amp;PHYSCONF  LRAD     = 0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;XHYDRO   = .TRUE.,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;XFORCE   = .TRUE.,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;XMHD     = .false.,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;XTOTNRG  = .false.,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;XGRAV    = .false.,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;XGRVFFT  = .false.,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;XPTMASS  = .false.,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;XISO     = .false.,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;XSUBAV   = .false.,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;XVGRID   = .false.,
<br>
!- - - - - - - - - - - - - - - - - - -
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;XFIXFORCE       = .TRUE.,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;XFIXFORCE2      = .TRUE.,
<br>
!- - - - - - - - - - - - - - - - - - -
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;XSOURCEENERGY   = .TRUE.,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;XSOURCEMASS     = .TRUE.,
<br>
!- - - - - - - - - - - - - - - - - - -
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;XRADCOOL        = .TRUE.,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;XA_RGB_WINDS    = .TRUE.,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;XSNIa           = .TRUE./
<br>
!=====================================
<br>
&nbsp;&amp;IOCONF    XASCII   = .false.,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;XA_MULT  = .false.,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;XHDF     = .TRUE.,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;XHST     = .TRUE.,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;XRESTART = .TRUE.,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;XTSL     = .false.,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;XDPRCHDF = .TRUE.,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;XTTY     = .TRUE. ,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;XAGRID   = .false. /
<br>
&nbsp;&amp;PRECONF   SMALL_NO = 1.0D-307,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LARGE_NO = 1.0D+307 /
<br>
&nbsp;&amp;ARRAYCONF IZONES   = 100,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;JZONES   = 125,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;KZONES   = 1,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MAXIJK   = 125/
<br>
&nbsp;&amp;mpitop ntiles(1)=5,ntiles(2)=2,ntiles(3)=1,periodic=2*.false.,.true. /
<br>
<p>I have done some tests, and currently I'm able to perform a run with
<br>
10 processes on 10 nodes, ie I use only 1 of two CPUs in a node. It
<br>
crashes after 6 hours, and not after 20 minutes!
<br>
<p><p>2012/9/6  &lt;users-request_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; Send users mailing list submissions to
</span><br>
<span class="quotelev1">&gt;         users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To subscribe or unsubscribe via the World Wide Web, visit
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; or, via email, send a message with subject or body 'help' to
</span><br>
<span class="quotelev1">&gt;         users-request_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can reach the person managing the list at
</span><br>
<span class="quotelev1">&gt;         users-owner_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When replying, please edit your Subject line so it is more specific
</span><br>
<span class="quotelev1">&gt; than &quot;Re: Contents of users digest...&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Today's Topics:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    1. Re: error compiling openmpi-1.6.1 on Windows 7 (Siegmar Gross)
</span><br>
<span class="quotelev1">&gt;    2. Re: OMPI 1.6.x Hang on khugepaged 100% CPU time (Yong Qin)
</span><br>
<span class="quotelev1">&gt;    3. Regarding the Pthreads (seshendra seshu)
</span><br>
<span class="quotelev1">&gt;    4. Re: some mpi processes &quot;disappear&quot; on a cluster of        servers
</span><br>
<span class="quotelev1">&gt;       (George Bosilca)
</span><br>
<span class="quotelev1">&gt;    5. SIGSEGV in OMPI 1.6.x (Yong Qin)
</span><br>
<span class="quotelev1">&gt;    6. Re: error compiling openmpi-1.6.1 on Windows 7 (Siegmar Gross)
</span><br>
<span class="quotelev1">&gt;    7. Re: Infiniband performance Problem and stalling
</span><br>
<span class="quotelev1">&gt;       (Yevgeny Kliteynik)
</span><br>
<span class="quotelev1">&gt;    8. Re: SIGSEGV in OMPI 1.6.x (Jeff Squyres)
</span><br>
<span class="quotelev1">&gt;    9. Re: Regarding the Pthreads (Jeff Squyres)
</span><br>
<span class="quotelev1">&gt;   10. Re: python-mrmpi() failed (Jeff Squyres)
</span><br>
<span class="quotelev1">&gt;   11. Re: MPI_Cart_sub periods (Jeff Squyres)
</span><br>
<span class="quotelev1">&gt;   12. Re: error compiling openmpi-1.6.1 on Windows 7 (Shiqing Fan)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 1
</span><br>
<span class="quotelev1">&gt; Date: Wed, 5 Sep 2012 17:43:50 +0200 (CEST)
</span><br>
<span class="quotelev1">&gt; From: Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7
</span><br>
<span class="quotelev1">&gt; To: fan_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Cc: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;201209051543.q85FhoBa021975_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: TEXT/plain; charset=ISO-8859-1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Shiqing,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Could you try set OPENMPI_HOME env var to the root of the Open MPI dir?
</span><br>
<span class="quotelev2">&gt;&gt; This env is a backup option for the registry.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It solves one problem but there is a new problem now :-((
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Without OPENMPI_HOME: Wrong pathname to help files.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; D:\...\prog\mpi\small_prog&gt;mpiexec init_finalize.exe
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Sorry!  You were supposed to get help about:
</span><br>
<span class="quotelev1">&gt;     invalid if_inexclude
</span><br>
<span class="quotelev1">&gt; But I couldn't open the help file:
</span><br>
<span class="quotelev1">&gt;     D:\...\prog\mpi\small_prog\..\share\openmpi\help-mpi-btl-tcp.txt:
</span><br>
<span class="quotelev1">&gt;     No such file or directory.  Sorry!
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With OPENMPI_HOME: It nearly uses the correct directory. Unfortunately
</span><br>
<span class="quotelev1">&gt; the pathname contains the character &quot; in the wrong place so that it
</span><br>
<span class="quotelev1">&gt; couldn't find the available help file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; set OPENMPI_HOME=&quot;c:\Program Files (x86)\openmpi-1.6.1&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; D:\...\prog\mpi\small_prog&gt;mpiexec init_finalize.exe
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Sorry!  You were supposed to get help about:
</span><br>
<span class="quotelev1">&gt;     no-hostfile
</span><br>
<span class="quotelev1">&gt; But I couldn't open the help file:
</span><br>
<span class="quotelev1">&gt;     &quot;c:\Program Files (x86)\openmpi-1.6.1&quot;\share\openmpi\help-hostfile.txt: Invalid argument.  Sorry
</span><br>
<span class="quotelev1">&gt; !
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [hermes:04964] [[12187,0],0] ORTE_ERROR_LOG: Not found in file ..\..\openmpi-1.6.1\orte\mca\ras\base
</span><br>
<span class="quotelev1">&gt; \ras_base_allocate.c at line 200
</span><br>
<span class="quotelev1">&gt; [hermes:04964] [[12187,0],0] ORTE_ERROR_LOG: Not found in file ..\..\openmpi-1.6.1\orte\mca\plm\base
</span><br>
<span class="quotelev1">&gt; \plm_base_launch_support.c at line 99
</span><br>
<span class="quotelev1">&gt; [hermes:04964] [[12187,0],0] ORTE_ERROR_LOG: Not found in file ..\..\openmpi-1.6.1\orte\mca\plm\proc
</span><br>
<span class="quotelev1">&gt; ess\plm_process_module.c at line 996
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It looks like that the environment variable can also solve my
</span><br>
<span class="quotelev1">&gt; problem in the 64-bit environment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; D:\g...\prog\mpi\small_prog&gt;mpicc init_finalize.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Microsoft (R) C/C++-Optimierungscompiler Version 16.00.40219.01 f?r x64
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The process hangs without OPENMPI_HOME.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; D:\...\prog\mpi\small_prog&gt;mpiexec init_finalize.exe
</span><br>
<span class="quotelev1">&gt; ^C
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With OPENMPI_HOME:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; set OPENMPI_HOME=&quot;c:\Program Files\openmpi-1.6.1&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; D:\...\prog\mpi\small_prog&gt;mpiexec init_finalize.exe
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Sorry!  You were supposed to get help about:
</span><br>
<span class="quotelev1">&gt;     no-hostfile
</span><br>
<span class="quotelev1">&gt; But I couldn't open the help file:
</span><br>
<span class="quotelev1">&gt;     &quot;c:\Program Files\openmpi-1.6.1&quot;\share\openmpi\help-hostfile.txt: Invalid argument.  S
</span><br>
<span class="quotelev1">&gt; orry!
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [hermes:05248] [[10367,0],0] ORTE_ERROR_LOG: Not found in file ..\..\openmpi-1.6.1\orte\mc
</span><br>
<span class="quotelev1">&gt; a\ras\base\ras_base_allocate.c at line 200
</span><br>
<span class="quotelev1">&gt; [hermes:05248] [[10367,0],0] ORTE_ERROR_LOG: Not found in file ..\..\openmpi-1.6.1\orte\mc
</span><br>
<span class="quotelev1">&gt; a\plm\base\plm_base_launch_support.c at line 99
</span><br>
<span class="quotelev1">&gt; [hermes:05248] [[10367,0],0] ORTE_ERROR_LOG: Not found in file ..\..\openmpi-1.6.1\orte\mc
</span><br>
<span class="quotelev1">&gt; a\plm\process\plm_process_module.c at line 996
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At least the program doesn't block any longer. Do you have any ideas
</span><br>
<span class="quotelev1">&gt; how this new problem can be solved?
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 2012-09-05 1:02 PM, Siegmar Gross wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hi Shiqing,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; D:\...\prog\mpi\small_prog&gt;mpiexec init_finalize.exe
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; Sorry!  You were supposed to get help about:
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt;       invalid if_inexclude
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; But I couldn't open the help file:
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt;       D:\...\prog\mpi\small_prog\..\share\openmpi\help-mpi-btl-tcp.txt:
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt;       No such file or directory.  Sorry!
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; Why does &quot;mpiexec&quot; look for the help file relativ to my current
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; program and not relative to itself? The file is part of the
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; package.
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; Do you know how I can solve this problem?
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; I have similar issue with message from tcp, but it's not finding the
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; file, it's something else, which doesn't affect the execution of the
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; application. Could you make sure the help-mpi-btl-tcp.txt is actually in
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; the path D:\...\prog\mpi\small_prog\..\share\openmpi\?
</span><br>
<span class="quotelev3">&gt;&gt; &gt; That wouldn't be a good idea because I have MPI programs in different
</span><br>
<span class="quotelev3">&gt;&gt; &gt; directories so that I would have to install all help files in several
</span><br>
<span class="quotelev3">&gt;&gt; &gt; places (&lt;my_directory&gt;/../share/openmpi/help*.txt). All help files are
</span><br>
<span class="quotelev3">&gt;&gt; &gt; available in the installation directory of Open MPI.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; dir &quot;c:\Program Files (x86)\openmpi-1.6.1\bin\mpiexec.exe&quot;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ...
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 29.08.2012  10:59            38.912 mpiexec.exe
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ...
</span><br>
<span class="quotelev3">&gt;&gt; &gt; dir &quot;c:\Program Files (x86)\openmpi-1.6.1\bin\..\share\openmpi\help-mpi-btl-tcp.txt&quot;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ...
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 03.04.2012  16:30               631 help-mpi-btl-tcp.txt
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ...
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I don't know if &quot;mpiexec&quot; or my program &quot;init_finilize&quot; is responsible
</span><br>
<span class="quotelev3">&gt;&gt; &gt; for the error message but whoever is responsible shouldn't use the path
</span><br>
<span class="quotelev3">&gt;&gt; &gt; to my program but the prefix_dir from MPI to find the help files. Perhaps
</span><br>
<span class="quotelev3">&gt;&gt; &gt; you can change the behaviour in the Open MPI source code.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; I can also compile in 64-bit mode but the program hangs.
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; Do you have any ideas why the program hangs? Thank you very much for any
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; help in advance.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; To be honest I don't know. I couldn't reproduce it. Did you try
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; installing the binary installer, will it also behave the same?
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I like to have different versions of Open MPI which I activate via
</span><br>
<span class="quotelev3">&gt;&gt; &gt; a batch file so that I can still run my program in an old version if
</span><br>
<span class="quotelev3">&gt;&gt; &gt; something goes wrong in a new one. I have no entries in the system
</span><br>
<span class="quotelev3">&gt;&gt; &gt; environment or registry so that I can even run different versions in
</span><br>
<span class="quotelev3">&gt;&gt; &gt; different command windows without problems (everything is only known
</span><br>
<span class="quotelev3">&gt;&gt; &gt; within the command window in which a have run my batch file). It seems
</span><br>
<span class="quotelev3">&gt;&gt; &gt; that you put something in the registry when I use your installer.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Perhaps you remember an earlier email where I had to uninstall an old
</span><br>
<span class="quotelev3">&gt;&gt; &gt; version because the environment in my own installation was wrong
</span><br>
<span class="quotelev3">&gt;&gt; &gt; as long as your installation was active. Nevertheless I can give it
</span><br>
<span class="quotelev3">&gt;&gt; &gt; a try. Perhaps I find out if you set more than just the path to your
</span><br>
<span class="quotelev3">&gt;&gt; &gt; binaries. Do you know if there is something similar to &quot;truss&quot; or
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &quot;strace&quot; in the UNIX world so that I can see where the program hangs?
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Thank you very much for your help in advance.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Kind regards
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Siegmar
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 2
</span><br>
<span class="quotelev1">&gt; Date: Wed, 5 Sep 2012 09:07:35 -0700
</span><br>
<span class="quotelev1">&gt; From: Yong Qin &lt;yong.qin_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] OMPI 1.6.x Hang on khugepaged 100% CPU time
</span><br>
<span class="quotelev1">&gt; To: kliteyn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Cc: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID:
</span><br>
<span class="quotelev1">&gt;         &lt;CADEJBEWq0Rzfi_uKx8U4Uz4tjz=vJzn1=RDtPhPYuL04cv9T7A_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=ISO-8859-1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, so far this has only been observed in VASP and a specific dataset.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Sep 5, 2012 at 4:52 AM, Yevgeny Kliteynik
</span><br>
<span class="quotelev1">&gt; &lt;kliteyn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On 9/4/2012 7:21 PM, Yong Qin wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Tue, Sep 4, 2012 at 5:42 AM, Yevgeny Kliteynik
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;kliteyn_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 8/30/2012 10:28 PM, Yong Qin wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Thu, Aug 30, 2012 at 5:12 AM, Jeff Squyres&lt;jsquyres_at_[hidden]&gt;   wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Aug 29, 2012, at 2:25 PM, Yong Qin wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; This issue has been observed on OMPI 1.6 and 1.6.1 with openib btl but
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; not on 1.4.5 (tcp btl is always fine). The application is VASP and
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; only one specific dataset is identified during the testing, and the OS
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; is SL 6.2 with kernel 2.6.32-220.23.1.el6.x86_64. The issue is that
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; when a certain type of load is put on OMPI 1.6.x, khugepaged thread
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; always runs with 100% CPU load, and it looks to me like that OMPI is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; waiting for some memory to be available thus appears to be hung.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Reducing the per node processes would sometimes ease the problem a bit
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; but not always. So I did some further testing by playing around with
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; the kernel transparent hugepage support.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 1. Disable transparent hugepage support completely (echo never
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /sys/kernel/mm/redhat_transparent_hugepage/enabled). This would allow
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; the program to progress as normal (as in 1.4.5). Total run time for an
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; iteration is 3036.03 s.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I'll admit that we have not tested using transparent hugepages.  I wonder if there's some kind of bad interaction going on here...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The transparent hugepage is &quot;transparent&quot;, which means it is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; automatically applied to all applications unless it is explicitly told
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; otherwise. I highly suspect that it is not working properly in this
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; case.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Like Jeff said - I don't think we've ever tested OMPI with transparent
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; huge pages.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks. But have you tested OMPI under RHEL 6 or its variants (CentOS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 6, SL 6)? THP is on by default in RHEL 6 so no matter you want it or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not it's there.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Interesting. Indeed, THP is on be default in RHEL 6.x.
</span><br>
<span class="quotelev2">&gt;&gt; I run OMPI 1.6.x constantly on RHEL 6.2, and I've never seen this problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm checking it with OFED folks, but I doubt that there are some dedicated
</span><br>
<span class="quotelev2">&gt;&gt; tests for THP.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So do you see it only with a specific application and only on a specific
</span><br>
<span class="quotelev2">&gt;&gt; data set? Wonder if I can somehow reproduce it in-house...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- YK
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 3
</span><br>
<span class="quotelev1">&gt; Date: Wed, 5 Sep 2012 20:23:05 +0200
</span><br>
<span class="quotelev1">&gt; From: seshendra seshu &lt;seshu199_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] Regarding the Pthreads
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID:
</span><br>
<span class="quotelev1">&gt;         &lt;CAJ_xm3AYtMt22NgjtY67TuwOpZxev0ZYSW4fEYGxKA=2yVdG9Q_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;iso-8859-1&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I am learning pthreads and trying to implement the pthreads in my
</span><br>
<span class="quotelev1">&gt; quicksortprogram.
</span><br>
<span class="quotelev1">&gt; My problem is iam unable to understand how to implement the pthreads at
</span><br>
<span class="quotelev1">&gt; data received at a node from the master (In detail: In my program Master
</span><br>
<span class="quotelev1">&gt; will divide the data and send to the slaves and each slave will do the
</span><br>
<span class="quotelev1">&gt; sorting independently of The received data and send back to master after
</span><br>
<span class="quotelev1">&gt; sorting is done. Now Iam having a problem in Implementing the pthreads at
</span><br>
<span class="quotelev1">&gt; the slaves,i.e how to implement the pthreads in order to share data among
</span><br>
<span class="quotelev1">&gt; the cores in each slave and sort the data and send it back to master.
</span><br>
<span class="quotelev1">&gt; So could anyone help in solving this problem by providing some suggestions
</span><br>
<span class="quotelev1">&gt; and clues.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanking you very much.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;  WITH REGARDS
</span><br>
<span class="quotelev1">&gt; M.L.N.Seshendra
</span><br>
<span class="quotelev1">&gt; -------------- next part --------------
</span><br>
<span class="quotelev1">&gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 4
</span><br>
<span class="quotelev1">&gt; Date: Thu, 6 Sep 2012 02:40:19 +0200
</span><br>
<span class="quotelev1">&gt; From: George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster
</span><br>
<span class="quotelev1">&gt;         of      servers
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;F6F521B2-DF90-4827-8ABF-ABE0F3599CF5_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=us-ascii
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Andrea,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As suggested by the previous answers I guess the size of your problem is too large for the memory available on the nodes. I can runs ZeusMP without any issues up to 64 processes, both over Ethernet and Infiniband. I tried the 1.6 and the current trunk, and both perform as expected.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What is the content of your zmp_inp file?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 1, 2012, at 16:01 , Andrea Negri &lt;negri.andre_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have tried to run with a single process (i.e. the entire grid is
</span><br>
<span class="quotelev2">&gt;&gt; contained by one process) and the the command free -m on the compute
</span><br>
<span class="quotelev2">&gt;&gt; node returns
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             total       used       free     shared    buffers     cached
</span><br>
<span class="quotelev2">&gt;&gt; Mem:          3913       1540       2372          0         49       1234
</span><br>
<span class="quotelev2">&gt;&gt; -/+ buffers/cache:        257       3656
</span><br>
<span class="quotelev2">&gt;&gt; Swap:         1983          0       1983
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; while top returns
</span><br>
<span class="quotelev2">&gt;&gt; top - 16:01:09 up 4 days,  5:56,  1 user,  load average: 0.53, 0.16, 0.10
</span><br>
<span class="quotelev2">&gt;&gt; Tasks:  63 total,   3 running,  60 sleeping,   0 stopped,   0 zombie
</span><br>
<span class="quotelev2">&gt;&gt; Cpu(s): 49.4% us,  0.7% sy,  0.0% ni, 49.9% id,  0.0% wa,  0.0% hi,  0.0% si
</span><br>
<span class="quotelev2">&gt;&gt; Mem:   4007720k total,  1577968k used,  2429752k free,    50664k buffers
</span><br>
<span class="quotelev2">&gt;&gt; Swap:  2031608k total,        0k used,  2031608k free,  1263844k cached
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 5
</span><br>
<span class="quotelev1">&gt; Date: Wed, 5 Sep 2012 21:06:12 -0700
</span><br>
<span class="quotelev1">&gt; From: Yong Qin &lt;yong.qin_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] SIGSEGV in OMPI 1.6.x
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID:
</span><br>
<span class="quotelev1">&gt;         &lt;CADEJBEVFcsyh5WnK=3YJ6w7b2AASrF7YC4uiMCVAqia-J6CDBg_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=ISO-8859-1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; While debugging a mysterious crash of a code, I was able to trace down
</span><br>
<span class="quotelev1">&gt; to a SIGSEGV in OMPI 1.6 and 1.6.1. The offending code is in
</span><br>
<span class="quotelev1">&gt; opal/mca/memory/linux/malloc.c. Please see the following gdb log.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (gdb) c
</span><br>
<span class="quotelev1">&gt; Continuing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Program received signal SIGSEGV, Segmentation fault.
</span><br>
<span class="quotelev1">&gt; opal_memory_ptmalloc2_int_free (av=0x2fd0637, mem=0x203a746f74512000)
</span><br>
<span class="quotelev1">&gt; at malloc.c:4385
</span><br>
<span class="quotelev1">&gt; 4385          nextsize = chunksize(nextchunk);
</span><br>
<span class="quotelev1">&gt; (gdb) l
</span><br>
<span class="quotelev1">&gt; 4380           Consolidate other non-mmapped chunks as they arrive.
</span><br>
<span class="quotelev1">&gt; 4381        */
</span><br>
<span class="quotelev1">&gt; 4382
</span><br>
<span class="quotelev1">&gt; 4383        else if (!chunk_is_mmapped(p)) {
</span><br>
<span class="quotelev1">&gt; 4384          nextchunk = chunk_at_offset(p, size);
</span><br>
<span class="quotelev1">&gt; 4385          nextsize = chunksize(nextchunk);
</span><br>
<span class="quotelev1">&gt; 4386          assert(nextsize &gt; 0);
</span><br>
<span class="quotelev1">&gt; 4387
</span><br>
<span class="quotelev1">&gt; 4388          /* consolidate backward */
</span><br>
<span class="quotelev1">&gt; 4389          if (!prev_inuse(p)) {
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  opal_memory_ptmalloc2_int_free (av=0x2fd0637,
</span><br>
<span class="quotelev1">&gt; mem=0x203a746f74512000) at malloc.c:4385
</span><br>
<span class="quotelev1">&gt; #1  0x00002ae6b18ea0c0 in opal_memory_ptmalloc2_free (mem=0x2fd0637)
</span><br>
<span class="quotelev1">&gt; at malloc.c:3511
</span><br>
<span class="quotelev1">&gt; #2  0x00002ae6b18ea736 in opal_memory_linux_free_hook
</span><br>
<span class="quotelev1">&gt; (__ptr=0x2fd0637, caller=0x203a746f74512000) at hooks.c:705
</span><br>
<span class="quotelev1">&gt; #3  0x0000000001412fcc in for_dealloc_allocatable ()
</span><br>
<span class="quotelev1">&gt; #4  0x00000000007767b1 in ALLOC::dealloc_d2 (array=@0x2fd0647,
</span><br>
<span class="quotelev1">&gt; name=@0x6f6e6f69006f6e78, routine=Cannot access memory at address 0x0
</span><br>
<span class="quotelev1">&gt; ) at alloc.F90:1357
</span><br>
<span class="quotelev1">&gt; #5  0x000000000082628c in M_LDAU::hubbard_term (scell=..., nua=@0xd5,
</span><br>
<span class="quotelev1">&gt; na=@0xd5, isa=..., xa=..., indxua=..., maxnh=@0xcf4ff, maxnd=@0xcf4ff,
</span><br>
<span class="quotelev1">&gt; lasto=..., iphorb=...,
</span><br>
<span class="quotelev1">&gt;     numd=..., listdptr=..., listd=..., numh=..., listhptr=...,
</span><br>
<span class="quotelev1">&gt; listh=..., nspin=@0xcf4ff00000002, dscf=..., eldau=@0x0, deldau=@0x0,
</span><br>
<span class="quotelev1">&gt; fa=..., stress=..., h=...,
</span><br>
<span class="quotelev1">&gt;     first=@0x0, last=@0x0) at ldau.F:752
</span><br>
<span class="quotelev1">&gt; #6  0x00000000006cd532 in M_SETUP_HAMILTONIAN::setup_hamiltonian
</span><br>
<span class="quotelev1">&gt; (first=@0x0, last=@0x0, iscf=@0x2) at setup_hamiltonian.F:199
</span><br>
<span class="quotelev1">&gt; #7  0x000000000070e257 in M_SIESTA_FORCES::siesta_forces
</span><br>
<span class="quotelev1">&gt; (istep=@0xf9a4d07000000000) at siesta_forces.F:90
</span><br>
<span class="quotelev1">&gt; #8  0x000000000070e475 in siesta () at siesta.F:23
</span><br>
<span class="quotelev1">&gt; #9  0x000000000045e47c in main ()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can anybody shed some light here on what could be wrong?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yong Qin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 6
</span><br>
<span class="quotelev1">&gt; Date: Thu, 6 Sep 2012 07:48:34 +0200 (CEST)
</span><br>
<span class="quotelev1">&gt; From: Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7
</span><br>
<span class="quotelev1">&gt; To: fan_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Cc: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;201209060548.q865mYkE023698_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: TEXT/plain; charset=ISO-8859-1
</span><br>
<span class="quotelev1">&gt;
</span><br>
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
<span class="quotelev1">&gt; Microsoft (R) 32-Bit C/C++-Optimierungscompiler Version 16.00.40219.01 f?r 80x86
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
<span class="quotelev1">&gt;   Local host: hermes
</span><br>
<span class="quotelev1">&gt;   Value:      127.0.0.1/8
</span><br>
<span class="quotelev1">&gt;   Message:    Did not find interface matching this subnet
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
<span class="quotelev3">&gt;&gt; &gt; Could you try set OPENMPI_HOME env var to the root of the Open MPI dir?
</span><br>
<span class="quotelev3">&gt;&gt; &gt; This env is a backup option for the registry.
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt;     invalid if_inexclude
</span><br>
<span class="quotelev2">&gt;&gt; But I couldn't open the help file:
</span><br>
<span class="quotelev2">&gt;&gt;     D:\...\prog\mpi\small_prog\..\share\openmpi\help-mpi-btl-tcp.txt:
</span><br>
<span class="quotelev2">&gt;&gt;     No such file or directory.  Sorry!
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
<span class="quotelev2">&gt;&gt;     no-hostfile
</span><br>
<span class="quotelev2">&gt;&gt; But I couldn't open the help file:
</span><br>
<span class="quotelev2">&gt;&gt;     &quot;c:\Program Files (x86)\openmpi-1.6.1&quot;\share\openmpi\help-hostfile.txt: Invalid argument.  Sorry
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
<span class="quotelev2">&gt;&gt; Microsoft (R) C/C++-Optimierungscompiler Version 16.00.40219.01 f?r x64
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
<span class="quotelev2">&gt;&gt;     no-hostfile
</span><br>
<span class="quotelev2">&gt;&gt; But I couldn't open the help file:
</span><br>
<span class="quotelev2">&gt;&gt;     &quot;c:\Program Files\openmpi-1.6.1&quot;\share\openmpi\help-hostfile.txt: Invalid argument.  S
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
<span class="quotelev3">&gt;&gt; &gt; On 2012-09-05 1:02 PM, Siegmar Gross wrote:
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Hi Shiqing,
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &gt;&gt;&gt;&gt; D:\...\prog\mpi\small_prog&gt;mpiexec init_finalize.exe
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &gt;&gt;&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &gt;&gt;&gt;&gt; Sorry!  You were supposed to get help about:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &gt;&gt;&gt;&gt;       invalid if_inexclude
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &gt;&gt;&gt;&gt; But I couldn't open the help file:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &gt;&gt;&gt;&gt;       D:\...\prog\mpi\small_prog\..\share\openmpi\help-mpi-btl-tcp.txt:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &gt;&gt;&gt;&gt;       No such file or directory.  Sorry!
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &gt;&gt;&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &gt;&gt;&gt;&gt; Why does &quot;mpiexec&quot; look for the help file relativ to my current
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &gt;&gt;&gt;&gt; program and not relative to itself? The file is part of the
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &gt;&gt;&gt;&gt; package.
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt;&gt;&gt; Do you know how I can solve this problem?
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; I have similar issue with message from tcp, but it's not finding the
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; file, it's something else, which doesn't affect the execution of the
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; application. Could you make sure the help-mpi-btl-tcp.txt is actually in
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; the path D:\...\prog\mpi\small_prog\..\share\openmpi\?
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; That wouldn't be a good idea because I have MPI programs in different
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; directories so that I would have to install all help files in several
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; places (&lt;my_directory&gt;/../share/openmpi/help*.txt). All help files are
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; available in the installation directory of Open MPI.
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; dir &quot;c:\Program Files (x86)\openmpi-1.6.1\bin\mpiexec.exe&quot;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; ...
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; 29.08.2012  10:59            38.912 mpiexec.exe
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; ...
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; dir &quot;c:\Program Files (x86)\openmpi-1.6.1\bin\..\share\openmpi\help-mpi-btl-tcp.txt&quot;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; ...
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; 03.04.2012  16:30               631 help-mpi-btl-tcp.txt
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; ...
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; I don't know if &quot;mpiexec&quot; or my program &quot;init_finilize&quot; is responsible
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; for the error message but whoever is responsible shouldn't use the path
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; to my program but the prefix_dir from MPI to find the help files. Perhaps
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; you can change the behaviour in the Open MPI source code.
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &gt;&gt;&gt;&gt; I can also compile in 64-bit mode but the program hangs.
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt;&gt;&gt; Do you have any ideas why the program hangs? Thank you very much for any
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt;&gt;&gt; help in advance.
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; To be honest I don't know. I couldn't reproduce it. Did you try
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; installing the binary installer, will it also behave the same?
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; I like to have different versions of Open MPI which I activate via
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; a batch file so that I can still run my program in an old version if
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; something goes wrong in a new one. I have no entries in the system
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; environment or registry so that I can even run different versions in
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; different command windows without problems (everything is only known
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; within the command window in which a have run my batch file). It seems
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; that you put something in the registry when I use your installer.
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Perhaps you remember an earlier email where I had to uninstall an old
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; version because the environment in my own installation was wrong
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; as long as your installation was active. Nevertheless I can give it
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; a try. Perhaps I find out if you set more than just the path to your
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; binaries. Do you know if there is something similar to &quot;truss&quot; or
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; &quot;strace&quot; in the UNIX world so that I can see where the program hangs?
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Thank you very much for your help in advance.
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Kind regards
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Siegmar
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ---------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Shiqing Fan
</span><br>
<span class="quotelev3">&gt;&gt; &gt; High Performance Computing Center Stuttgart (HLRS)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Tel: ++49(0)711-685-87234      Nobelstrasse 19
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Fax: ++49(0)711-685-65832      70569 Stuttgart
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.hlrs.de/organization/people/shiqing-fan/">http://www.hlrs.de/organization/people/shiqing-fan/</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt; email: fan_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 7
</span><br>
<span class="quotelev1">&gt; Date: Thu, 06 Sep 2012 11:03:04 +0300
</span><br>
<span class="quotelev1">&gt; From: Yevgeny Kliteynik &lt;kliteyn_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Infiniband performance Problem and stalling
</span><br>
<span class="quotelev1">&gt; To: Randolph Pullen &lt;randolph_pullen_at_[hidden]&gt;,     OpenMPI Users
</span><br>
<span class="quotelev1">&gt;         &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;504858B8.3050202_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=UTF-8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 9/3/2012 4:14 AM, Randolph Pullen wrote:
</span><br>
<span class="quotelev2">&gt;&gt; No RoCE, Just native IB with TCP over the top.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry, I'm confused - still not clear what is &quot;Melanox III HCA 10G card&quot;.
</span><br>
<span class="quotelev1">&gt; Could you run &quot;ibstat&quot; and post the results?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What is the expected BW on your cards?
</span><br>
<span class="quotelev1">&gt; Could you run &quot;ib_write_bw&quot; between two machines?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, please see below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; No I haven't used 1.6 I was trying to stick with the standards on the mellanox disk.
</span><br>
<span class="quotelev2">&gt;&gt; Is there a known problem with 1.4.3 ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------!
</span><br>
<span class="quotelev1">&gt;  ---
</span><br>
<span class="quotelev2">&gt;&gt; *From:* Yevgeny Kliteynik &lt;kliteyn_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *To:* Randolph Pullen &lt;randolph_pullen_at_[hidden]&gt;; Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *Sent:* Sunday, 2 September 2012 10:54 PM
</span><br>
<span class="quotelev2">&gt;&gt; *Subject:* Re: [OMPI users] Infiniband performance Problem and stalling
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Randolph,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Some clarification on the setup:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &quot;Melanox III HCA 10G cards&quot; - are those ConnectX 3 cards configured to Ethernet?
</span><br>
<span class="quotelev2">&gt;&gt; That is, when you're using openib BTL, you mean RoCE, right?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also, have you had a chance to try some newer OMPI release?
</span><br>
<span class="quotelev2">&gt;&gt; Any 1.6.x would do.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- YK
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 8/31/2012 10:53 AM, Randolph Pullen wrote:
</span><br>
<span class="quotelev3">&gt;&gt;  &gt; (reposted with consolidatedinformation)
</span><br>
<span class="quotelev3">&gt;&gt;  &gt; I have a test rig comprising 2 i7 systems 8GB RAM with Melanox III HCA 10G cards
</span><br>
<span class="quotelev3">&gt;&gt;  &gt; running Centos 5.7 Kernel 2.6.18-274
</span><br>
<span class="quotelev3">&gt;&gt;  &gt; Open MPI 1.4.3
</span><br>
<span class="quotelev3">&gt;&gt;  &gt; MLNX_OFED_LINUX-1.5.3-1.0.0.2 (OFED-1.5.3-1.0.0.2):
</span><br>
<span class="quotelev3">&gt;&gt;  &gt; On a Cisco 24 pt switch
</span><br>
<span class="quotelev3">&gt;&gt;  &gt; Normal performance is:
</span><br>
<span class="quotelev3">&gt;&gt;  &gt; $ mpirun --mca btl openib,self -n 2 -hostfile mpi.hosts PingPong
</span><br>
<span class="quotelev3">&gt;&gt;  &gt; results in:
</span><br>
<span class="quotelev3">&gt;&gt;  &gt; Max rate = 958.388867 MB/sec Min latency = 4.529953 usec
</span><br>
<span class="quotelev3">&gt;&gt;  &gt; and:
</span><br>
<span class="quotelev3">&gt;&gt;  &gt; $ mpirun --mca btl tcp,self -n 2 -hostfile mpi.hosts PingPong
</span><br>
<span class="quotelev3">&gt;&gt;  &gt; Max rate = 653.547293 MB/sec Min latency = 19.550323 usec
</span><br>
<span class="quotelev3">&gt;&gt;  &gt; NetPipeMPI results show a max of 7.4 Gb/s at 8388605 bytes which seems fine.
</span><br>
<span class="quotelev3">&gt;&gt;  &gt; log_num_mtt =20 and log_mtts_per_seg params =2
</span><br>
<span class="quotelev3">&gt;&gt;  &gt; My application exchanges about a gig of data between the processes with 2 sender and 2 consumer processes on each node with 1 additional controller process on the starting node.
</span><br>
<span class="quotelev3">&gt;&gt;  &gt; The program splits the data into 64K blocks and uses non blocking sends and receives with busy/sleep loops to monitor progress until completion.
</span><br>
<span class="quotelev3">&gt;&gt;  &gt; Each process owns a single buffer for these 64K blocks.
</span><br>
<span class="quotelev3">&gt;&gt;  &gt; My problem is I see better performance under IPoIB then I do on native IB (RDMA_CM).
</span><br>
<span class="quotelev3">&gt;&gt;  &gt; My understanding is that IPoIB is limited to about 1G/s so I am at a loss to know why it is faster.
</span><br>
<span class="quotelev3">&gt;&gt;  &gt; These 2 configurations are equivelant (about 8-10 seconds per cycle)
</span><br>
<span class="quotelev3">&gt;&gt;  &gt; mpirun --mca btl_openib_flags 2 --mca mpi_leave_pinned 1 --mca btl tcp,self -H vh2,vh1 -np 9 --bycore prog
</span><br>
<span class="quotelev3">&gt;&gt;  &gt; mpirun --mca btl_openib_flags 3 --mca mpi_leave_pinned 1 --mca btl tcp,self -H vh2,vh1 -np 9 --bycore prog
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When you say &quot;--mca btl tcp,self&quot;, it means that openib btl is not enabled.
</span><br>
<span class="quotelev1">&gt; Hence &quot;--mca btl_openib_flags&quot; is irrelevant.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;  &gt; And this one produces similar run times but seems to degrade with repeated cycles:
</span><br>
<span class="quotelev3">&gt;&gt;  &gt; mpirun --mca btl_openib_eager_limit 64 --mca mpi_leave_pinned 1 --mca btl openib,self -H vh2,vh1 -np 9 --bycore prog
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You're running 9 ranks on two machines, but you're using IB for intra-node communication.
</span><br>
<span class="quotelev1">&gt; Is it intentional? If not, you can add &quot;sm&quot; btl and have performance improved.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- YK
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;  &gt; Other btl_openib_flags settings result in much lower performance.
</span><br>
<span class="quotelev3">&gt;&gt;  &gt; Changing the first of the above configs to use openIB results in a 21 second run time at best. Sometimes it takes up to 5 minutes.
</span><br>
<span class="quotelev3">&gt;&gt;  &gt; In all cases, OpenIB runs in twice the time it takes TCP,except if I push the small message max to 64K and force short messages. Then the openib times are the same as TCP and no faster.
</span><br>
<span class="quotelev3">&gt;&gt;  &gt; With openib:
</span><br>
<span class="quotelev3">&gt;&gt;  &gt; - Repeated cycles during a single run seem to slow down with each cycle
</span><br>
<span class="quotelev3">&gt;&gt;  &gt; (usually by about 10 seconds).
</span><br>
<span class="quotelev3">&gt;&gt;  &gt; - On occasions it seems to stall indefinitely, waiting on a single receive.
</span><br>
<span class="quotelev3">&gt;&gt;  &gt; I'm still at a loss as to why. I can?t find any errors logged during the runs.
</span><br>
<span class="quotelev3">&gt;&gt;  &gt; Any ideas appreciated.
</span><br>
<span class="quotelev3">&gt;&gt;  &gt; Thanks in advance,
</span><br>
<span class="quotelev3">&gt;&gt;  &gt; Randolph
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt;&gt;  &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;  &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;  &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;  &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 8
</span><br>
<span class="quotelev1">&gt; Date: Thu, 6 Sep 2012 08:01:01 -0400
</span><br>
<span class="quotelev1">&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] SIGSEGV in OMPI 1.6.x
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;256DA22F-F9AC-4746-ACD9-501F8208E718_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=us-ascii
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you run into a segv in this code, it almost certainly means that you have heap corruption somewhere.  FWIW, that has *always* been what it meant when I've run into segv's in any code under in opal/mca/memory/linux/.  Meaning: my user code did something wrong, it created heap corruption, and then later some malloc() or free() caused a segv in this area of the code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This code is the same ptmalloc memory allocator that has shipped in glibc for years.  I'll be hard-pressed to say that any code is 100% bug free :-), but I'd be surprised if there is a bug in this particular chunk of code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'd run your code through valgrind or some other memory-checking debugger and see if that can shed any light on what's going on.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 6, 2012, at 12:06 AM, Yong Qin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; While debugging a mysterious crash of a code, I was able to trace down
</span><br>
<span class="quotelev2">&gt;&gt; to a SIGSEGV in OMPI 1.6 and 1.6.1. The offending code is in
</span><br>
<span class="quotelev2">&gt;&gt; opal/mca/memory/linux/malloc.c. Please see the following gdb log.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (gdb) c
</span><br>
<span class="quotelev2">&gt;&gt; Continuing.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Program received signal SIGSEGV, Segmentation fault.
</span><br>
<span class="quotelev2">&gt;&gt; opal_memory_ptmalloc2_int_free (av=0x2fd0637, mem=0x203a746f74512000)
</span><br>
<span class="quotelev2">&gt;&gt; at malloc.c:4385
</span><br>
<span class="quotelev2">&gt;&gt; 4385          nextsize = chunksize(nextchunk);
</span><br>
<span class="quotelev2">&gt;&gt; (gdb) l
</span><br>
<span class="quotelev2">&gt;&gt; 4380           Consolidate other non-mmapped chunks as they arrive.
</span><br>
<span class="quotelev2">&gt;&gt; 4381        */
</span><br>
<span class="quotelev2">&gt;&gt; 4382
</span><br>
<span class="quotelev2">&gt;&gt; 4383        else if (!chunk_is_mmapped(p)) {
</span><br>
<span class="quotelev2">&gt;&gt; 4384          nextchunk = chunk_at_offset(p, size);
</span><br>
<span class="quotelev2">&gt;&gt; 4385          nextsize = chunksize(nextchunk);
</span><br>
<span class="quotelev2">&gt;&gt; 4386          assert(nextsize &gt; 0);
</span><br>
<span class="quotelev2">&gt;&gt; 4387
</span><br>
<span class="quotelev2">&gt;&gt; 4388          /* consolidate backward */
</span><br>
<span class="quotelev2">&gt;&gt; 4389          if (!prev_inuse(p)) {
</span><br>
<span class="quotelev2">&gt;&gt; (gdb) bt
</span><br>
<span class="quotelev2">&gt;&gt; #0  opal_memory_ptmalloc2_int_free (av=0x2fd0637,
</span><br>
<span class="quotelev2">&gt;&gt; mem=0x203a746f74512000) at malloc.c:4385
</span><br>
<span class="quotelev2">&gt;&gt; #1  0x00002ae6b18ea0c0 in opal_memory_ptmalloc2_free (mem=0x2fd0637)
</span><br>
<span class="quotelev2">&gt;&gt; at malloc.c:3511
</span><br>
<span class="quotelev2">&gt;&gt; #2  0x00002ae6b18ea736 in opal_memory_linux_free_hook
</span><br>
<span class="quotelev2">&gt;&gt; (__ptr=0x2fd0637, caller=0x203a746f74512000) at hooks.c:705
</span><br>
<span class="quotelev2">&gt;&gt; #3  0x0000000001412fcc in for_dealloc_allocatable ()
</span><br>
<span class="quotelev2">&gt;&gt; #4  0x00000000007767b1 in ALLOC::dealloc_d2 (array=@0x2fd0647,
</span><br>
<span class="quotelev2">&gt;&gt; name=@0x6f6e6f69006f6e78, routine=Cannot access memory at address 0x0
</span><br>
<span class="quotelev2">&gt;&gt; ) at alloc.F90:1357
</span><br>
<span class="quotelev2">&gt;&gt; #5  0x000000000082628c in M_LDAU::hubbard_term (scell=..., nua=@0xd5,
</span><br>
<span class="quotelev2">&gt;&gt; na=@0xd5, isa=..., xa=..., indxua=..., maxnh=@0xcf4ff, maxnd=@0xcf4ff,
</span><br>
<span class="quotelev2">&gt;&gt; lasto=..., iphorb=...,
</span><br>
<span class="quotelev2">&gt;&gt;    numd=..., listdptr=..., listd=..., numh=..., listhptr=...,
</span><br>
<span class="quotelev2">&gt;&gt; listh=..., nspin=@0xcf4ff00000002, dscf=..., eldau=@0x0, deldau=@0x0,
</span><br>
<span class="quotelev2">&gt;&gt; fa=..., stress=..., h=...,
</span><br>
<span class="quotelev2">&gt;&gt;    first=@0x0, last=@0x0) at ldau.F:752
</span><br>
<span class="quotelev2">&gt;&gt; #6  0x00000000006cd532 in M_SETUP_HAMILTONIAN::setup_hamiltonian
</span><br>
<span class="quotelev2">&gt;&gt; (first=@0x0, last=@0x0, iscf=@0x2) at setup_hamiltonian.F:199
</span><br>
<span class="quotelev2">&gt;&gt; #7  0x000000000070e257 in M_SIESTA_FORCES::siesta_forces
</span><br>
<span class="quotelev2">&gt;&gt; (istep=@0xf9a4d07000000000) at siesta_forces.F:90
</span><br>
<span class="quotelev2">&gt;&gt; #8  0x000000000070e475 in siesta () at siesta.F:23
</span><br>
<span class="quotelev2">&gt;&gt; #9  0x000000000045e47c in main ()
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can anybody shed some light here on what could be wrong?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yong Qin
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 9
</span><br>
<span class="quotelev1">&gt; Date: Thu, 6 Sep 2012 08:03:06 -0400
</span><br>
<span class="quotelev1">&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Regarding the Pthreads
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;7FD0702A-4A29-4FF6-A80A-170D2002F862_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=iso-8859-1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Your question is somewhat outside the scope of this list.  Perhaps people may chime in with some suggestions, but that's more of a threading question than an MPI question.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Be warned that you need to call MPI_Init_thread (not MPI_Init) with MPI_THREAD_MULTIPLE in order to get true multi-threaded support in Open MPI.  And we only support that on the TCP and shared memory transports if you built Open MPI with threading support enabled.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 5, 2012, at 2:23 PM, seshendra seshu wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; I am learning pthreads and trying to implement the pthreads in my quicksort program.
</span><br>
<span class="quotelev2">&gt;&gt; My problem is iam unable to understand how to implement the pthreads at data received at a node from the master (In detail: In my program Master will divide the data and send to the slaves and each slave will do the sorting independently of The received data and send back to master after sorting is done. Now Iam having a problem in Implementing the pthreads at the slaves,i.e how to implement the pthreads in order to share data among the cores in each slave and sort the data and send it back to master.
</span><br>
<span class="quotelev2">&gt;&gt; So could anyone help in solving this problem by providing some suggestions and clues.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanking you very much.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt;  WITH REGARDS
</span><br>
<span class="quotelev2">&gt;&gt; M.L.N.Seshendra
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 10
</span><br>
<span class="quotelev1">&gt; Date: Thu, 6 Sep 2012 08:05:30 -0400
</span><br>
<span class="quotelev1">&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] python-mrmpi() failed
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;E8AEFB84-8702-432C-9FB0-0C34451B02D8_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=us-ascii
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 4, 2012, at 3:09 PM, mariana Vargas wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I 'am new in this, I have some codes that use mpi for python and I
</span><br>
<span class="quotelev2">&gt;&gt; just installed (openmpi, mrmpi, mpi4py) in my home (from a  cluster
</span><br>
<span class="quotelev2">&gt;&gt; account) without apparent errors and I tried to perform this simple
</span><br>
<span class="quotelev2">&gt;&gt; test in python and I get the following error related with openmpi,
</span><br>
<span class="quotelev2">&gt;&gt; could you help to figure out what is going on? I attach as many
</span><br>
<span class="quotelev2">&gt;&gt; informations as possible...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think I know what's happening here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It's a complicated linker issue that we've discussed before -- I'm not sure whether it was on this users list or the OMPI developers list.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The short version is that you should remove your prior Open MPI installation, and then rebuild Open MPI with the --disable-dlopen configure switch.  See if that fixes the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Mariana
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  From a python console
</span><br>
<span class="quotelev1">&gt;&gt;  &gt;&gt;&gt; from mrmpi import mrmpi
</span><br>
<span class="quotelev1">&gt;&gt;  &gt;&gt;&gt; mr=mrmpi()
</span><br>
<span class="quotelev2">&gt;&gt; [ferrari:23417] mca: base: component_find: unable to open /home/
</span><br>
<span class="quotelev2">&gt;&gt; mvargas/lib/openmpi/mca_paffinity_hwloc: /home/mvargas/lib/openmpi/
</span><br>
<span class="quotelev2">&gt;&gt; mca_paffinity_hwloc.so: undefined symbol: opal_hwloc_topology (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [ferrari:23417] mca: base: component_find: unable to open /home/
</span><br>
<span class="quotelev2">&gt;&gt; mvargas/lib/openmpi/mca_carto_auto_detect: /home/mvargas/lib/openmpi/
</span><br>
<span class="quotelev2">&gt;&gt; mca_carto_auto_detect.so: undefined symbol:
</span><br>
<span class="quotelev2">&gt;&gt; opal_carto_base_graph_get_host_graph_fn (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [ferrari:23417] mca: base: component_find: unable to open /home/
</span><br>
<span class="quotelev2">&gt;&gt; mvargas/lib/openmpi/mca_carto_file: /home/mvargas/lib/openmpi/
</span><br>
<span class="quotelev2">&gt;&gt; mca_carto_file.so: undefined symbol:
</span><br>
<span class="quotelev2">&gt;&gt; opal_carto_base_graph_get_host_graph_fn (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [ferrari:23417] mca: base: component_find: unable to open /home/
</span><br>
<span class="quotelev2">&gt;&gt; mvargas/lib/openmpi/mca_shmem_mmap: /home/mvargas/lib/openmpi/
</span><br>
<span class="quotelev2">&gt;&gt; mca_shmem_mmap.so: undefined symbol: opal_show_help (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [ferrari:23417] mca: base: component_find: unable to open /home/
</span><br>
<span class="quotelev2">&gt;&gt; mvargas/lib/openmpi/mca_shmem_posix: /home/mvargas/lib/openmpi/
</span><br>
<span class="quotelev2">&gt;&gt; mca_shmem_posix.so: undefined symbol: opal_show_help (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [ferrari:23417] mca: base: component_find: unable to open /home/
</span><br>
<span class="quotelev2">&gt;&gt; mvargas/lib/openmpi/mca_shmem_sysv: /home/mvargas/lib/openmpi/
</span><br>
<span class="quotelev2">&gt;&gt; mca_shmem_sysv.so: undefined symbol: opal_show_help (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; It looks like opal_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev2">&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt;&gt; fail during opal_init; some of which are due to configuration or
</span><br>
<span class="quotelev2">&gt;&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev2">&gt;&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   opal_shmem_base_select failed
</span><br>
<span class="quotelev2">&gt;&gt;   --&gt; Returned value -1 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [ferrari:23417] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev2">&gt;&gt; runtime/orte_init.c at line 79
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
<span class="quotelev2">&gt;&gt;   --&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev2">&gt;&gt; *** on a NULL communicator
</span><br>
<span class="quotelev2">&gt;&gt; *** MPI_ERRORS_ARE_FATAL: your MPI job will now abort
</span><br>
<span class="quotelev2">&gt;&gt; [ferrari:23417] Local abort before MPI_INIT completed successfully;
</span><br>
<span class="quotelev2">&gt;&gt; not able to aggregate error messages, and not able to guarantee that
</span><br>
<span class="quotelev2">&gt;&gt; all other processes were killed!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; echo $PATH
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/mvargas/idl/pro/LibsSDSSS/idlutilsv5_4_15/bin:/usr/local/itt/
</span><br>
<span class="quotelev2">&gt;&gt; idl70/bin:/opt/local/bin:/home/mvargas/bin:/home/mvargas/lib:/home/
</span><br>
<span class="quotelev2">&gt;&gt; mvargas/lib/openmpi/:/home/mvargas:/home/vargas/bin/:/home/mvargas/idl/
</span><br>
<span class="quotelev2">&gt;&gt; pro/LibsSDSSS/idlutilsv5_4_15/bin:/usr/local/itt/idl70/bin:/opt/local/
</span><br>
<span class="quotelev2">&gt;&gt; bin:/home/mvargas/bin:/home/mvargas/lib:/home/mvargas/lib/openmpi/:/
</span><br>
<span class="quotelev2">&gt;&gt; home/mvargas:/home/vargas/bin/:/usr/lib64/qt3.3/bin:/usr/kerberos/bin:/
</span><br>
<span class="quotelev2">&gt;&gt; usr/local/bin:/bin:/usr/bin:/opt/pbs/bin:/opt/pbs/lib/xpbs/bin:/opt/
</span><br>
<span class="quotelev2">&gt;&gt; envswitcher/bin:/opt/pvm3/lib:/opt/pvm3/lib/LINUX64:/opt/pvm3/bin/
</span><br>
<span class="quotelev2">&gt;&gt; LINUX64:/opt/c3-4/
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; echo $LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/mpich2/lib:/home/mvargas/lib:/home/mvargas/:/home/mvargas/
</span><br>
<span class="quotelev2">&gt;&gt; lib64:/home/mvargas/lib/openmpi/:/usr/lib64/openmpi/1.4-gcc/lib/:/user/
</span><br>
<span class="quotelev2">&gt;&gt; local/:/usr/local/mpich2/lib:/home/mvargas/lib:/home/mvargas/:/home/
</span><br>
<span class="quotelev2">&gt;&gt; mvargas/lib64:/home/mvargas/lib/openmpi/:/usr/lib64/openmpi/1.4-gcc/
</span><br>
<span class="quotelev2">&gt;&gt; lib/:/user/local/:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Version: openmpi-1.6
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --bynode --tag-output ompi_info -v ompi full --parsable
</span><br>
<span class="quotelev2">&gt;&gt; [1,0]&lt;stdout&gt;:package:Open MPI mvargas_at_ferrari Distribution
</span><br>
<span class="quotelev2">&gt;&gt; [1,0]&lt;stdout&gt;:ompi:version:full:1.6
</span><br>
<span class="quotelev2">&gt;&gt; [1,0]&lt;stdout&gt;:ompi:version:svn:r26429
</span><br>
<span class="quotelev2">&gt;&gt; [1,0]&lt;stdout&gt;:ompi:version:release_date:May 10, 2012
</span><br>
<span class="quotelev2">&gt;&gt; [1,0]&lt;stdout&gt;:orte:version:full:1.6
</span><br>
<span class="quotelev2">&gt;&gt; [1,0]&lt;stdout&gt;:orte:version:svn:r26429
</span><br>
<span class="quotelev2">&gt;&gt; [1,0]&lt;stdout&gt;:orte:version:release_date:May 10, 2012
</span><br>
<span class="quotelev2">&gt;&gt; [1,0]&lt;stdout&gt;:opal:version:full:1.6
</span><br>
<span class="quotelev2">&gt;&gt; [1,0]&lt;stdout&gt;:opal:version:svn:r26429
</span><br>
<span class="quotelev2">&gt;&gt; [1,0]&lt;stdout&gt;:opal:version:release_date:May 10, 2012
</span><br>
<span class="quotelev2">&gt;&gt; [1,0]&lt;stdout&gt;:mpi-api:version:full:2.1
</span><br>
<span class="quotelev2">&gt;&gt; [1,0]&lt;stdout&gt;:ident:1.6
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; eth0      Link encap:Ethernet  HWaddr 00:30:48:95:99:CC
</span><br>
<span class="quotelev2">&gt;&gt;          inet addr:192.168.2.1  Bcast:192.168.2.255  Mask:255.255.255.0
</span><br>
<span class="quotelev2">&gt;&gt;          inet6 addr: fe80::230:48ff:fe95:99cc/64 Scope:Link
</span><br>
<span class="quotelev2">&gt;&gt;          UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev2">&gt;&gt;          RX packets:4739875255 errors:0 dropped:1636 overruns:0 frame:0
</span><br>
<span class="quotelev2">&gt;&gt;          TX packets:5196871012 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev2">&gt;&gt;          collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev2">&gt;&gt;          RX bytes:4959384349297 (4.5 TiB)  TX bytes:3933641883577 (3.5
</span><br>
<span class="quotelev2">&gt;&gt; TiB)
</span><br>
<span class="quotelev2">&gt;&gt;          Memory:ef300000-ef320000
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; eth1      Link encap:Ethernet  HWaddr 00:30:48:95:99:CD
</span><br>
<span class="quotelev2">&gt;&gt;          inet addr:128.2.116.104  Bcast:128.2.119.255  Mask:
</span><br>
<span class="quotelev2">&gt;&gt; 255.255.248.0
</span><br>
<span class="quotelev2">&gt;&gt;          inet6 addr: fe80::230:48ff:fe95:99cd/64 Scope:Link
</span><br>
<span class="quotelev2">&gt;&gt;          UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev2">&gt;&gt;          RX packets:2645952109 errors:0 dropped:13353 overruns:0 frame:0
</span><br>
<span class="quotelev2">&gt;&gt;          TX packets:2974763570 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev2">&gt;&gt;          collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev2">&gt;&gt;          RX bytes:2024044043824 (1.8 TiB)  TX bytes:3390935387820 (3.0
</span><br>
<span class="quotelev2">&gt;&gt; TiB)
</span><br>
<span class="quotelev2">&gt;&gt;          Memory:ef400000-ef420000
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; lo        Link encap:Local Loopback
</span><br>
<span class="quotelev2">&gt;&gt;          inet addr:127.0.0.1  Mask:255.0.0.0
</span><br>
<span class="quotelev2">&gt;&gt;          inet6 addr: ::1/128 Scope:Host
</span><br>
<span class="quotelev2">&gt;&gt;          UP LOOPBACK RUNNING  MTU:16436  Metric:1
</span><br>
<span class="quotelev2">&gt;&gt;          RX packets:143359307 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev2">&gt;&gt;          TX packets:143359307 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev2">&gt;&gt;          collisions:0 txqueuelen:0
</span><br>
<span class="quotelev2">&gt;&gt;          RX bytes:80413513464 (74.8 GiB)  TX bytes:80413513464 (74.8
</span><br>
<span class="quotelev2">&gt;&gt; GiB)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; &lt;files.tar.gz&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 11
</span><br>
<span class="quotelev1">&gt; Date: Thu, 6 Sep 2012 10:23:04 -0400
</span><br>
<span class="quotelev1">&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] MPI_Cart_sub periods
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;346C2878-A5A6-4043-B890-09DAB68807F2_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=iso-8859-1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; John --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This cartesian stuff always makes my head hurt.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You seem to have hit on a bona-fide bug.  I have fixed the issue in our SVN trunk and will get the fixed moved over to the v1.6 and v1.7 branches.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the report!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 29, 2012, at 5:32 AM, Craske, John wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We are partitioning a two-dimensional Cartesian communicator into
</span><br>
<span class="quotelev2">&gt;&gt; two one-dimensional subgroups. In this situation we have found
</span><br>
<span class="quotelev2">&gt;&gt; that both one-dimensional communicators inherit the period
</span><br>
<span class="quotelev2">&gt;&gt; logical of the first dimension of the original two-dimensional
</span><br>
<span class="quotelev2">&gt;&gt; communicator when using Open MPI.  Using MPICH each
</span><br>
<span class="quotelev2">&gt;&gt; one-dimensional communicator inherits the period corresponding to
</span><br>
<span class="quotelev2">&gt;&gt; the dimensions specified in REMAIN_DIMS, as expected.  Could this
</span><br>
<span class="quotelev2">&gt;&gt; be a bug, or are we making a mistake? The relevant calls we make in a
</span><br>
<span class="quotelev2">&gt;&gt; Fortran code are
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; CALL MPI_CART_CREATE(MPI_COMM_WORLD, 2, (/ NDIMX, NDIMY /), (/ .True., .False. /), .TRUE.,
</span><br>
<span class="quotelev2">&gt;&gt;                  COMM_CART_2D, IERROR)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; CALL MPI_CART_SUB(COMM_CART_2D, (/ .True., .False. /), COMM_CART_X, IERROR)
</span><br>
<span class="quotelev2">&gt;&gt; CALL MPI_CART_SUB(COMM_CART_2D, (/ .False., .True. /), COMM_CART_Y, IERROR)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Following these requests,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; CALL MPI_CART_GET(COMM_CART_X, MAXDIM_X, DIMS_X, PERIODS_X, COORDS_X, IERROR)
</span><br>
<span class="quotelev2">&gt;&gt; CALL MPI_CART_GET(COMM_CART_Y, MAXDIM_Y, DIMS_Y, PERIODS_Y, COORDS_Y, IERROR)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; will result in
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; PERIODS_X = T
</span><br>
<span class="quotelev2">&gt;&gt; PERIODS_Y = T
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If, on the other hand we define the two-dimensional communicator
</span><br>
<span class="quotelev2">&gt;&gt; using PERIODS = (/ .False., .True. /), we find
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; PERIODS_X = F
</span><br>
<span class="quotelev2">&gt;&gt; PERIODS_Y = F
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Your advice on the matter would be greatly appreciated.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; John.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 12
</span><br>
<span class="quotelev1">&gt; Date: Thu, 06 Sep 2012 16:58:03 +0200
</span><br>
<span class="quotelev1">&gt; From: Shiqing Fan &lt;fan_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7
</span><br>
<span class="quotelev1">&gt; To: Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Cc: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;5048B9FB.3070408_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=ISO-8859-1; format=flowed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Siegmar,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Glad to hear that it's working for you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The warning message is because the loopback adapter is excluded by
</span><br>
<span class="quotelev1">&gt; default, but this adapter is actually not installed on Windows.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; One solution might be installing the loopback adapter on Windows. It
</span><br>
<span class="quotelev1">&gt; very easy, only a few minutes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Or it may be possible to avoid this message from internal Open MPI. But
</span><br>
<span class="quotelev1">&gt; I'm not sure about how this can be done.
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
<span class="quotelev1">&gt; On 2012-09-06 7:48 AM, Siegmar Gross wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Shiqing,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have solved the problem with the double quotes in OPENMPI_HOME but
</span><br>
<span class="quotelev2">&gt;&gt; there is still something wrong.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; set OPENMPI_HOME=&quot;c:\Program Files (x86)\openmpi-1.6.1&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpicc init_finalize.c
</span><br>
<span class="quotelev2">&gt;&gt; Cannot open configuration file &quot;c:\Program Files (x86)\openmpi-1.6.1&quot;/share/openmpi\mpicc-wrapper-data.txt
</span><br>
<span class="quotelev2">&gt;&gt; Error parsing data file mpicc: Not found
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Everything is OK if you remove the double quotes which Windows
</span><br>
<span class="quotelev2">&gt;&gt; automatically adds.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; set OPENMPI_HOME=c:\Program Files (x86)\openmpi-1.6.1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpicc init_finalize.c
</span><br>
<span class="quotelev2">&gt;&gt; Microsoft (R) 32-Bit C/C++-Optimierungscompiler Version 16.00.40219.01 f?r 80x86
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec init_finalize.exe
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; WARNING: An invalid value was given for btl_tcp_if_exclude.  This
</span><br>
<span class="quotelev2">&gt;&gt; value will be ignored.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Local host: hermes
</span><br>
<span class="quotelev2">&gt;&gt;    Value:      127.0.0.1/8
</span><br>
<span class="quotelev2">&gt;&gt;    Message:    Did not find interface matching this subnet
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I get the output from my program but also a warning from Open MPI.
</span><br>
<span class="quotelev2">&gt;&gt; The new value for the loopback device was introduced a short time
</span><br>
<span class="quotelev2">&gt;&gt; ago when I have had problems with the loopback device on Solaris
</span><br>
<span class="quotelev2">&gt;&gt; (it used &quot;lo0&quot; instead of your default &quot;lo&quot;). How can I avoid this
</span><br>
<span class="quotelev2">&gt;&gt; message? The 64-bit version of my program still hangs.
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
<span class="quotelev4">&gt;&gt;&gt;&gt; Could you try set OPENMPI_HOME env var to the root of the Open MPI dir?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This env is a backup option for the registry.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It solves one problem but there is a new problem now :-((
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Without OPENMPI_HOME: Wrong pathname to help files.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; D:\...\prog\mpi\small_prog&gt;mpiexec init_finalize.exe
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sorry!  You were supposed to get help about:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      invalid if_inexclude
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But I couldn't open the help file:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      D:\...\prog\mpi\small_prog\..\share\openmpi\help-mpi-btl-tcp.txt:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      No such file or directory.  Sorry!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; With OPENMPI_HOME: It nearly uses the correct directory. Unfortunately
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the pathname contains the character &quot; in the wrong place so that it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; couldn't find the available help file.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; set OPENMPI_HOME=&quot;c:\Program Files (x86)\openmpi-1.6.1&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; D:\...\prog\mpi\small_prog&gt;mpiexec init_finalize.exe
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sorry!  You were supposed to get help about:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      no-hostfile
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But I couldn't open the help file:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      &quot;c:\Program Files (x86)\openmpi-1.6.1&quot;\share\openmpi\help-hostfile.txt: Invalid argument.  Sorry
</span><br>
<span class="quotelev3">&gt;&gt;&gt; !
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [hermes:04964] [[12187,0],0] ORTE_ERROR_LOG: Not found in file ..\..\openmpi-1.6.1\orte\mca\ras\base
</span><br>
<span class="quotelev3">&gt;&gt;&gt; \ras_base_allocate.c at line 200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [hermes:04964] [[12187,0],0] ORTE_ERROR_LOG: Not found in file ..\..\openmpi-1.6.1\orte\mca\plm\base
</span><br>
<span class="quotelev3">&gt;&gt;&gt; \plm_base_launch_support.c at line 99
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [hermes:04964] [[12187,0],0] ORTE_ERROR_LOG: Not found in file ..\..\openmpi-1.6.1\orte\mca\plm\proc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ess\plm_process_module.c at line 996
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It looks like that the environment variable can also solve my
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problem in the 64-bit environment.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; D:\g...\prog\mpi\small_prog&gt;mpicc init_finalize.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Microsoft (R) C/C++-Optimierungscompiler Version 16.00.40219.01 f?r x64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The process hangs without OPENMPI_HOME.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; D:\...\prog\mpi\small_prog&gt;mpiexec init_finalize.exe
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ^C
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; With OPENMPI_HOME:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; set OPENMPI_HOME=&quot;c:\Program Files\openmpi-1.6.1&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; D:\...\prog\mpi\small_prog&gt;mpiexec init_finalize.exe
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sorry!  You were supposed to get help about:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      no-hostfile
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But I couldn't open the help file:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      &quot;c:\Program Files\openmpi-1.6.1&quot;\share\openmpi\help-hostfile.txt: Invalid argument.  S
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orry!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [hermes:05248] [[10367,0],0] ORTE_ERROR_LOG: Not found in file ..\..\openmpi-1.6.1\orte\mc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a\ras\base\ras_base_allocate.c at line 200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [hermes:05248] [[10367,0],0] ORTE_ERROR_LOG: Not found in file ..\..\openmpi-1.6.1\orte\mc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a\plm\base\plm_base_launch_support.c at line 99
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [hermes:05248] [[10367,0],0] ORTE_ERROR_LOG: Not found in file ..\..\openmpi-1.6.1\orte\mc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a\plm\process\plm_process_module.c at line 996
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; At least the program doesn't block any longer. Do you have any ideas
</span><br>
<span class="quotelev3">&gt;&gt;&gt; how this new problem can be solved?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 2012-09-05 1:02 PM, Siegmar Gross wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi Shiqing,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; D:\...\prog\mpi\small_prog&gt;mpiexec init_finalize.exe
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Sorry!  You were supposed to get help about:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;        invalid if_inexclude
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; But I couldn't open the help file:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;        D:\...\prog\mpi\small_prog\..\share\openmpi\help-mpi-btl-tcp.txt:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;        No such file or directory.  Sorry!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Why does &quot;mpiexec&quot; look for the help file relativ to my current
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; program and not relative to itself? The file is part of the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; package.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Do you know how I can solve this problem?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I have similar issue with message from tcp, but it's not finding the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; file, it's something else, which doesn't affect the execution of the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; application. Could you make sure the help-mpi-btl-tcp.txt is actually in
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the path D:\...\prog\mpi\small_prog\..\share\openmpi\?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; That wouldn't be a good idea because I have MPI programs in different
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; directories so that I would have to install all help files in several
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; places (&lt;my_directory&gt;/../share/openmpi/help*.txt). All help files are
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; available in the installation directory of Open MPI.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; dir &quot;c:\Program Files (x86)\openmpi-1.6.1\bin\mpiexec.exe&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 29.08.2012  10:59            38.912 mpiexec.exe
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; dir &quot;c:\Program Files (x86)\openmpi-1.6.1\bin\..\share\openmpi\help-mpi-btl-tcp.txt&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 03.04.2012  16:30               631 help-mpi-btl-tcp.txt
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I don't know if &quot;mpiexec&quot; or my program &quot;init_finilize&quot; is responsible
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; for the error message but whoever is responsible shouldn't use the path
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to my program but the prefix_dir from MPI to find the help files. Perhaps
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; you can change the behaviour in the Open MPI source code.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I can also compile in 64-bit mode but the program hangs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Do you have any ideas why the program hangs? Thank you very much for any
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; help in advance.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; To be honest I don't know. I couldn't reproduce it. Did you try
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; installing the binary installer, will it also behave the same?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I like to have different versions of Open MPI which I activate via
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; a batch file so that I can still run my program in an old version if
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; something goes wrong in a new one. I have no entries in the system
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; environment or registry so that I can even run different versions in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; different command windows without problems (everything is only known
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; within the command window in which a have run my batch file). It seems
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that you put something in the registry when I use your installer.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Perhaps you remember an earlier email where I had to uninstall an old
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; version because the environment in my own installation was wrong
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; as long as your installation was active. Nevertheless I can give it
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; a try. Perhaps I find out if you set more than just the path to your
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; binaries. Do you know if there is something similar to &quot;truss&quot; or
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;strace&quot; in the UNIX world so that I can see where the program hangs?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thank you very much for your help in advance.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Kind regards
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Siegmar
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ---------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Shiqing Fan
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; High Performance Computing Center Stuttgart (HLRS)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Tel: ++49(0)711-685-87234      Nobelstrasse 19
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Fax: ++49(0)711-685-65832      70569 Stuttgart
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.hlrs.de/organization/people/shiqing-fan/">http://www.hlrs.de/organization/people/shiqing-fan/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; email: fan_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
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
<span class="quotelev1">&gt; End of users Digest, Vol 2345, Issue 1
</span><br>
<span class="quotelev1">&gt; **************************************
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20150.php">Jeff Squyres: "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<li><strong>Previous message:</strong> <a href="20148.php">Randolph Pullen: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
<li><strong>Maybe in reply to:</strong> <a href="20125.php">Andrea Negri: "[OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20150.php">Jeff Squyres: "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
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
