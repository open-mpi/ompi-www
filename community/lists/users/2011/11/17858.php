<?
$subject_val = "Re: [OMPI users] orte_debugger_select and orte_ess_set_name failed";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 29 09:10:34 2011" -->
<!-- isoreceived="20111129141034" -->
<!-- sent="Tue, 29 Nov 2011 15:10:20 +0100" -->
<!-- isosent="20111129141020" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orte_debugger_select and orte_ess_set_name failed" -->
<!-- id="4ED4E7CC.2040309_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="000701ccae9f$207a97c0$616fc740$_at_com" -->
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
<strong>Date:</strong> 2011-11-29 09:10:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17859.php">MM: "Re: [OMPI users] orte_debugger_select and orte_ess_set_name failed"</a>
<li><strong>Previous message:</strong> <a href="17857.php">MM: "Re: [OMPI users] orte_debugger_select and orte_ess_set_name failed"</a>
<li><strong>In reply to:</strong> <a href="17857.php">MM: "Re: [OMPI users] orte_debugger_select and orte_ess_set_name failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17859.php">MM: "Re: [OMPI users] orte_debugger_select and orte_ess_set_name failed"</a>
<li><strong>Reply:</strong> <a href="17859.php">MM: "Re: [OMPI users] orte_debugger_select and orte_ess_set_name failed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi MM,
<br>
<p>That doesn't really help.
<br>
<p>Do you need a debug version on your 32 bit Windows XP? Maybe I can build 
<br>
one for you. Will send it to you off the mailing list.
<br>
<p>Regards,
<br>
Shiqing
<br>
<p>On 2011-11-29 2:59 PM, MM wrote:
<br>
<span class="quotelev1">&gt; debugging mpirund arrives to
</span><br>
<span class="quotelev1">&gt; openmpi-1.5.4\opal\mca\base\mca_base_components_select.c:
</span><br>
<span class="quotelev1">&gt; function mca_base_select
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; components_available list appears to be empty, ie
</span><br>
<span class="quotelev1">&gt; orte_debugger_base_components_available appears to be empty (opal list
</span><br>
<span class="quotelev1">&gt; length=0)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this an indication of something meaningful?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note, I built opnempi static libs (with dll c/c++ runtime)
</span><br>
<span class="quotelev1">&gt; OMPI_IMPORTS is __not__ defined, that's how I got it to compile
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MM
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: Shiqing Fan [mailto:fan_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: 25 November 2011 22:19
</span><br>
<span class="quotelev1">&gt; To: MM
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] orte_debugger_select and orte_ess_set_name failed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi MM,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you really want to build Open MPI by yourself? If you only need the
</span><br>
<span class="quotelev1">&gt; libraries, probably you may stick to 1.5.4 binaries, which you said
</span><br>
<span class="quotelev1">&gt; works for you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyway, if you want to debug mpirun, you can step into orterun project,
</span><br>
<span class="quotelev1">&gt; which generates mpirun executable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Which version of Open MPI are you building? I'm not sure whether I'll
</span><br>
<span class="quotelev1">&gt; have time this days to look closely to this problem, but if you can
</span><br>
<span class="quotelev1">&gt; reproduce this problem with a small test program, and send it to me, I
</span><br>
<span class="quotelev1">&gt; would like also help debug it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best Regards,
</span><br>
<span class="quotelev1">&gt; Shiqing
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2011-11-25 11:06 PM, MM wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Shiqing,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As I built the mpi libs in debug as well, can I break point somehow when I
</span><br>
<span class="quotelev2">&gt;&gt; run
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 1&lt;debugbinary1&gt;   : -np 1&lt;debugbinary2&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and I get those 2 errors.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can I breakpoint somehow inside vs2010? maybe to investigate what's going
</span><br>
<span class="quotelev2">&gt;&gt; on?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; How do I launch &quot;mpirun&quot; in debug from the openmpi solution. Which project
</span><br>
<span class="quotelev2">&gt;&gt; generates the mpirun binary?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am a bit stuck and would appreciate help to progress,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; rds,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MM
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: Shiqing Fan [mailto:fan_at_[hidden]]
</span><br>
<span class="quotelev2">&gt;&gt; Sent: 24 November 2011 16:44
</span><br>
<span class="quotelev2">&gt;&gt; To: MM
</span><br>
<span class="quotelev2">&gt;&gt; Cc: 'Open MPI Users'
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] orte_debugger_select and orte_ess_set_name
</span><br>
<span class="quotelev1">&gt; failed
</span><br>
<span class="quotelev2">&gt;&gt; Hi MM,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sorry for the delayed reply, I was busy in a meeting these days.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The log files seem not very helpful to solve the problem. May be your
</span><br>
<span class="quotelev2">&gt;&gt; CMakeCache.txt file would help.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Currently we don't provided binaries built from trunk. Have you also
</span><br>
<span class="quotelev2">&gt;&gt; tried the 1.5.x binaries?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Shiqing
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 2011-11-23 10:08 PM, MM wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Shiqing,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is the info provided useful to understand what's going on?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Alternatively, is there a way to get the provided binaries for win but
</span><br>
<span class="quotelev1">&gt; off
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trunk rather than off 1.5.4 as on the website, because I don't have this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problem when I link against those libs,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MM
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Behalf Of MM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: 21 November 2011 21:08
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: fan_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cc: 'Open MPI Users'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] orte_debugger_select and orte_ess_set_name
</span><br>
<span class="quotelev2">&gt;&gt; failed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have placed the source in \Program Files\openmpi-1.5.4 the build dir in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; \Program Files\openmpi.build and the install dir in \Program
</span><br>
<span class="quotelev1">&gt; Files\openmpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I could not find config.log in any of the 3 directories nor in the
</span><br>
<span class="quotelev2">&gt;&gt; directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from which I run mpirun.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The build log attached is a zip of all the .log under \Program
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Files\openmpi.build
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; First, I installed the provided binaries on xp32bit, and successfully ran
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the program in Release mode.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in debug mode, there was that error of some function missing in kernel,
</span><br>
<span class="quotelev2">&gt;&gt; that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you fixed in svn.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Second, I then downloaded the source and built the static libraries w
</span><br>
<span class="quotelev2">&gt;&gt; cmake
</span><br>
<span class="quotelev3">&gt;&gt;&gt; according to README.windows, and against these home built libs, the same
</span><br>
<span class="quotelev3">&gt;&gt;&gt; program run neithers in debug nor in release, because of the error below.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; How can I generate the config.log?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; About Debug/Release, thinking about it at this time, I don't really need
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; debug libs of openmpi.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but to be able to link against vs2010 Release libs of openmpi, I need
</span><br>
<span class="quotelev1">&gt; them
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to be linked against the Release c runtime, so I might as well link
</span><br>
<span class="quotelev2">&gt;&gt; against
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the debug version of the openmpi libs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Your help is very appreciated,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MM
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: Shiqing Fan [mailto:fan_at_[hidden]]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: 21 November 2011 12:48
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cc: MM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] orte_debugger_select and orte_ess_set_name
</span><br>
<span class="quotelev2">&gt;&gt; failed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Could you please send your config and build log to me? Have you tried
</span><br>
<span class="quotelev1">&gt; with
</span><br>
<span class="quotelev2">&gt;&gt; a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; simpler program? Does this error always happen?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Shiqing
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 2011-11-19 4:24 PM, MM wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Trying to run my program linked against debug 1.5.4 on vs2010 fails:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpirun -np 1 .\nhui\Debug\nhui.exe : -np 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; .\nhcomp\Debug\nhcomp.exe
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [PCNAME:04960] [[1282,0],0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; C:\Program Files\openmpi-1.5.4\orte\mca\ess\hnp\ess_hnp_module.c at
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; line 536
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ---- It looks like orte_init failed for some reason; your parallel
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; process is likely to abort.  There are many reasons that a parallel
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; process can fail during orte_init; some of which are due to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configuration or environment problems.  This failure appears to be an
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; internal failure; here's some additional information (which may only
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; be relevant to an Open MPI developer):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       orte_debugger_select failed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       --&gt;     Returned value Not found (-13) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ---- [PCNAME:04960] [[1282,0],0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; C:\Program Files\openmpi-1.5.4\orte\runtime\orte_init.c at line 128
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ---- It looks like orte_init failed for some reason; your parallel
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; process is likely to abort.  There are many reasons that a parallel
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; process can fail during orte_init; some of which are due to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configuration or environment problems.  This failure appears to be an
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; internal failure; here's some additional information (which may only
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; be relevant to an Open MPI developer):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       orte_ess_set_name failed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       --&gt;     Returned value Not found (-13) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ---- [LLDNRATDHY9H4J:04960] [[1282,0],0] ORTE_ERROR_LOG: Not found in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; file C:\Program Files\openmpi-1.5.4\orte\tools\orterun\orterun.c at
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; line 616
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; any help is appreciated,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MM
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
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
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; ****************************************************************************
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *
</span><br>
<span class="quotelev3">&gt;&gt;&gt; **
</span><br>
<span class="quotelev3">&gt;&gt;&gt; **
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ** WARNING:  This email contains an attachment of a very suspicious type.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; **
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ** You are urged NOT to open this attachment unless you are absolutely
</span><br>
<span class="quotelev3">&gt;&gt;&gt; **
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ** sure it is legitimate.  Opening this attachment may cause irreparable
</span><br>
<span class="quotelev3">&gt;&gt;&gt; **
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ** damage to your computer and your files.  If you have any questions
</span><br>
<span class="quotelev3">&gt;&gt;&gt; **
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ** about the validity of this message, PLEASE SEEK HELP BEFORE OPENING
</span><br>
<span class="quotelev1">&gt; IT.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; **
</span><br>
<span class="quotelev3">&gt;&gt;&gt; **
</span><br>
<span class="quotelev3">&gt;&gt;&gt; **
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ** This warning was added by the IU Computer Science Dept. mail scanner.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; **
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; ****************************************************************************
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<li><strong>Next message:</strong> <a href="17859.php">MM: "Re: [OMPI users] orte_debugger_select and orte_ess_set_name failed"</a>
<li><strong>Previous message:</strong> <a href="17857.php">MM: "Re: [OMPI users] orte_debugger_select and orte_ess_set_name failed"</a>
<li><strong>In reply to:</strong> <a href="17857.php">MM: "Re: [OMPI users] orte_debugger_select and orte_ess_set_name failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17859.php">MM: "Re: [OMPI users] orte_debugger_select and orte_ess_set_name failed"</a>
<li><strong>Reply:</strong> <a href="17859.php">MM: "Re: [OMPI users] orte_debugger_select and orte_ess_set_name failed"</a>
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
