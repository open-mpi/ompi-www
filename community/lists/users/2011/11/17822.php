<?
$subject_val = "Re: [OMPI users] orte_debugger_select and orte_ess_set_name failed";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 24 11:44:09 2011" -->
<!-- isoreceived="20111124164409" -->
<!-- sent="Thu, 24 Nov 2011 17:44:05 +0100" -->
<!-- isosent="20111124164405" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orte_debugger_select and orte_ess_set_name failed" -->
<!-- id="4ECE7455.7060006_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="002901ccaa24$00f19a40$02d4cec0$_at_com" -->
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
<strong>Subject:</strong> Re: [OMPI users] orte_debugger_select and orte_ess_set_name failed<br>
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-24 11:44:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17823.php">Paul Kapinos: "Re: [OMPI users] How are the Open MPI processes spawned?"</a>
<li><strong>Previous message:</strong> <a href="17821.php">Reuti: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
<li><strong>In reply to:</strong> <a href="17818.php">MM: "Re: [OMPI users] orte_debugger_select and orte_ess_set_name failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17856.php">MM: "Re: [OMPI users] orte_debugger_select and orte_ess_set_name failed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi MM,
<br>
<p>Sorry for the delayed reply, I was busy in a meeting these days.
<br>
<p>The log files seem not very helpful to solve the problem. May be your 
<br>
CMakeCache.txt file would help.
<br>
<p>Currently we don't provided binaries built from trunk. Have you also 
<br>
tried the 1.5.x binaries?
<br>
<p>Best Regards,
<br>
Shiqing
<br>
<p>On 2011-11-23 10:08 PM, MM wrote:
<br>
<span class="quotelev1">&gt; Hi Shiqing,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is the info provided useful to understand what's going on?
</span><br>
<span class="quotelev1">&gt; Alternatively, is there a way to get the provided binaries for win but off
</span><br>
<span class="quotelev1">&gt; trunk rather than off 1.5.4 as on the website, because I don't have this
</span><br>
<span class="quotelev1">&gt; problem when I link against those libs,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt; Behalf Of MM
</span><br>
<span class="quotelev1">&gt; Sent: 21 November 2011 21:08
</span><br>
<span class="quotelev1">&gt; To: fan_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Cc: 'Open MPI Users'
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] orte_debugger_select and orte_ess_set_name failed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have placed the source in \Program Files\openmpi-1.5.4 the build dir in
</span><br>
<span class="quotelev1">&gt; \Program Files\openmpi.build and the install dir in \Program Files\openmpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I could not find config.log in any of the 3 directories nor in the directory
</span><br>
<span class="quotelev1">&gt; from which I run mpirun.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The build log attached is a zip of all the .log under \Program
</span><br>
<span class="quotelev1">&gt; Files\openmpi.build
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; First, I installed the provided binaries on xp32bit, and successfully ran
</span><br>
<span class="quotelev1">&gt; the program in Release mode.
</span><br>
<span class="quotelev1">&gt; in debug mode, there was that error of some function missing in kernel, that
</span><br>
<span class="quotelev1">&gt; you fixed in svn.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Second, I then downloaded the source and built the static libraries w cmake
</span><br>
<span class="quotelev1">&gt; according to README.windows, and against these home built libs, the same
</span><br>
<span class="quotelev1">&gt; program run neithers in debug nor in release, because of the error below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How can I generate the config.log?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; About Debug/Release, thinking about it at this time, I don't really need the
</span><br>
<span class="quotelev1">&gt; debug libs of openmpi.
</span><br>
<span class="quotelev1">&gt; but to be able to link against vs2010 Release libs of openmpi, I need them
</span><br>
<span class="quotelev1">&gt; to be linked against the Release c runtime, so I might as well link against
</span><br>
<span class="quotelev1">&gt; the debug version of the openmpi libs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Your help is very appreciated,
</span><br>
<span class="quotelev1">&gt; MM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: Shiqing Fan [mailto:fan_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: 21 November 2011 12:48
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Cc: MM
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] orte_debugger_select and orte_ess_set_name failed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could you please send your config and build log to me? Have you tried with a
</span><br>
<span class="quotelev1">&gt; simpler program? Does this error always happen?
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
<span class="quotelev1">&gt; On 2011-11-19 4:24 PM, MM wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Trying to run my program linked against debug 1.5.4 on vs2010 fails:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun -np 1 .\nhui\Debug\nhui.exe : -np 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; .\nhcomp\Debug\nhcomp.exe
</span><br>
<span class="quotelev2">&gt;&gt; [PCNAME:04960] [[1282,0],0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev2">&gt;&gt; C:\Program Files\openmpi-1.5.4\orte\mca\ess\hnp\ess_hnp_module.c at
</span><br>
<span class="quotelev2">&gt;&gt; line 536
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; ---- It looks like orte_init failed for some reason; your parallel
</span><br>
<span class="quotelev2">&gt;&gt; process is likely to abort.  There are many reasons that a parallel
</span><br>
<span class="quotelev2">&gt;&gt; process can fail during orte_init; some of which are due to
</span><br>
<span class="quotelev2">&gt;&gt; configuration or environment problems.  This failure appears to be an
</span><br>
<span class="quotelev2">&gt;&gt; internal failure; here's some additional information (which may only
</span><br>
<span class="quotelev2">&gt;&gt; be relevant to an Open MPI developer):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     orte_debugger_select failed
</span><br>
<span class="quotelev2">&gt;&gt;     --&gt;   Returned value Not found (-13) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; ---- [PCNAME:04960] [[1282,0],0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev2">&gt;&gt; C:\Program Files\openmpi-1.5.4\orte\runtime\orte_init.c at line 128
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; ---- It looks like orte_init failed for some reason; your parallel
</span><br>
<span class="quotelev2">&gt;&gt; process is likely to abort.  There are many reasons that a parallel
</span><br>
<span class="quotelev2">&gt;&gt; process can fail during orte_init; some of which are due to
</span><br>
<span class="quotelev2">&gt;&gt; configuration or environment problems.  This failure appears to be an
</span><br>
<span class="quotelev2">&gt;&gt; internal failure; here's some additional information (which may only
</span><br>
<span class="quotelev2">&gt;&gt; be relevant to an Open MPI developer):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     orte_ess_set_name failed
</span><br>
<span class="quotelev2">&gt;&gt;     --&gt;   Returned value Not found (-13) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; ---- [LLDNRATDHY9H4J:04960] [[1282,0],0] ORTE_ERROR_LOG: Not found in
</span><br>
<span class="quotelev2">&gt;&gt; file C:\Program Files\openmpi-1.5.4\orte\tools\orterun\orterun.c at
</span><br>
<span class="quotelev2">&gt;&gt; line 616
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; any help is appreciated,
</span><br>
<span class="quotelev2">&gt;&gt; MM
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
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; ****************************************************************************
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; **
</span><br>
<span class="quotelev1">&gt; **
</span><br>
<span class="quotelev1">&gt; ** WARNING:  This email contains an attachment of a very suspicious type.
</span><br>
<span class="quotelev1">&gt; **
</span><br>
<span class="quotelev1">&gt; ** You are urged NOT to open this attachment unless you are absolutely
</span><br>
<span class="quotelev1">&gt; **
</span><br>
<span class="quotelev1">&gt; ** sure it is legitimate.  Opening this attachment may cause irreparable
</span><br>
<span class="quotelev1">&gt; **
</span><br>
<span class="quotelev1">&gt; ** damage to your computer and your files.  If you have any questions
</span><br>
<span class="quotelev1">&gt; **
</span><br>
<span class="quotelev1">&gt; ** about the validity of this message, PLEASE SEEK HELP BEFORE OPENING IT.
</span><br>
<span class="quotelev1">&gt; **
</span><br>
<span class="quotelev1">&gt; **
</span><br>
<span class="quotelev1">&gt; **
</span><br>
<span class="quotelev1">&gt; ** This warning was added by the IU Computer Science Dept. mail scanner.
</span><br>
<span class="quotelev1">&gt; **
</span><br>
<span class="quotelev1">&gt; ****************************************************************************
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="17823.php">Paul Kapinos: "Re: [OMPI users] How are the Open MPI processes spawned?"</a>
<li><strong>Previous message:</strong> <a href="17821.php">Reuti: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
<li><strong>In reply to:</strong> <a href="17818.php">MM: "Re: [OMPI users] orte_debugger_select and orte_ess_set_name failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17856.php">MM: "Re: [OMPI users] orte_debugger_select and orte_ess_set_name failed"</a>
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
