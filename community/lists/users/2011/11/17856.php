<?
$subject_val = "Re: [OMPI users] orte_debugger_select and orte_ess_set_name failed";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 29 07:29:35 2011" -->
<!-- isoreceived="20111129122935" -->
<!-- sent="Tue, 29 Nov 2011 12:30:01 -0000" -->
<!-- isosent="20111129123001" -->
<!-- name="MM" -->
<!-- email="finjulhich_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orte_debugger_select and orte_ess_set_name failed" -->
<!-- id="000001ccae92$9e892cb0$db9b8610$_at_com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4ED01451.2090308_at_hlrs.de" -->
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
<strong>From:</strong> MM (<em>finjulhich_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-29 07:30:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17857.php">MM: "Re: [OMPI users] orte_debugger_select and orte_ess_set_name failed"</a>
<li><strong>Previous message:</strong> <a href="17855.php">Martin Santa Mar&#237;a: "[OMPI users] FW:  Problem launching application on windows"</a>
<li><strong>Maybe in reply to:</strong> <a href="17790.php">MM: "[OMPI users] orte_debugger_select and orte_ess_set_name failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17857.php">MM: "Re: [OMPI users] orte_debugger_select and orte_ess_set_name failed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have to admit this is driving me a bit crazy, 
<br>
<p>Trying to debug orterun from vs2010 says &quot;Cannot attach to process&quot;, even if
<br>
I do &quot;Start debugging&quot; from the UI.
<br>
<p>I'll keep digging,
<br>
<p>PS: if anyone has time and can join on a openmpi IRC channel :-) that would
<br>
be great,
<br>
<p>-----Original Message-----
<br>
From: Shiqing Fan [mailto:fan_at_[hidden]] 
<br>
Sent: 25 November 2011 22:19
<br>
To: MM
<br>
Subject: Re: [OMPI users] orte_debugger_select and orte_ess_set_name failed
<br>
<p>Hi MM,
<br>
<p>Do you really want to build Open MPI by yourself? If you only need the 
<br>
libraries, probably you may stick to 1.5.4 binaries, which you said 
<br>
works for you.
<br>
<p>Anyway, if you want to debug mpirun, you can step into orterun project, 
<br>
which generates mpirun executable.
<br>
<p>Which version of Open MPI are you building? I'm not sure whether I'll 
<br>
have time this days to look closely to this problem, but if you can 
<br>
reproduce this problem with a small test program, and send it to me, I 
<br>
would like also help debug it.
<br>
<p><p>Best Regards,
<br>
Shiqing
<br>
<p><p>On 2011-11-25 11:06 PM, MM wrote:
<br>
<span class="quotelev1">&gt; Shiqing,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As I built the mpi libs in debug as well, can I break point somehow when I
</span><br>
<span class="quotelev1">&gt; run
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 1&lt;debugbinary1&gt;  : -np 1&lt;debugbinary2&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and I get those 2 errors.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can I breakpoint somehow inside vs2010? maybe to investigate what's going
</span><br>
<span class="quotelev1">&gt; on?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How do I launch &quot;mpirun&quot; in debug from the openmpi solution. Which project
</span><br>
<span class="quotelev1">&gt; generates the mpirun binary?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am a bit stuck and would appreciate help to progress,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; rds,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: Shiqing Fan [mailto:fan_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: 24 November 2011 16:44
</span><br>
<span class="quotelev1">&gt; To: MM
</span><br>
<span class="quotelev1">&gt; Cc: 'Open MPI Users'
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] orte_debugger_select and orte_ess_set_name
</span><br>
failed
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi MM,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry for the delayed reply, I was busy in a meeting these days.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The log files seem not very helpful to solve the problem. May be your
</span><br>
<span class="quotelev1">&gt; CMakeCache.txt file would help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Currently we don't provided binaries built from trunk. Have you also
</span><br>
<span class="quotelev1">&gt; tried the 1.5.x binaries?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best Regards,
</span><br>
<span class="quotelev1">&gt; Shiqing
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2011-11-23 10:08 PM, MM wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Shiqing,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is the info provided useful to understand what's going on?
</span><br>
<span class="quotelev2">&gt;&gt; Alternatively, is there a way to get the provided binaries for win but
</span><br>
off
<br>
<span class="quotelev2">&gt;&gt; trunk rather than off 1.5.4 as on the website, because I don't have this
</span><br>
<span class="quotelev2">&gt;&gt; problem when I link against those libs,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MM
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev2">&gt;&gt; Behalf Of MM
</span><br>
<span class="quotelev2">&gt;&gt; Sent: 21 November 2011 21:08
</span><br>
<span class="quotelev2">&gt;&gt; To: fan_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Cc: 'Open MPI Users'
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] orte_debugger_select and orte_ess_set_name
</span><br>
<span class="quotelev1">&gt; failed
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have placed the source in \Program Files\openmpi-1.5.4 the build dir in
</span><br>
<span class="quotelev2">&gt;&gt; \Program Files\openmpi.build and the install dir in \Program
</span><br>
Files\openmpi
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I could not find config.log in any of the 3 directories nor in the
</span><br>
<span class="quotelev1">&gt; directory
</span><br>
<span class="quotelev2">&gt;&gt; from which I run mpirun.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The build log attached is a zip of all the .log under \Program
</span><br>
<span class="quotelev2">&gt;&gt; Files\openmpi.build
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; First, I installed the provided binaries on xp32bit, and successfully ran
</span><br>
<span class="quotelev2">&gt;&gt; the program in Release mode.
</span><br>
<span class="quotelev2">&gt;&gt; in debug mode, there was that error of some function missing in kernel,
</span><br>
<span class="quotelev1">&gt; that
</span><br>
<span class="quotelev2">&gt;&gt; you fixed in svn.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Second, I then downloaded the source and built the static libraries w
</span><br>
<span class="quotelev1">&gt; cmake
</span><br>
<span class="quotelev2">&gt;&gt; according to README.windows, and against these home built libs, the same
</span><br>
<span class="quotelev2">&gt;&gt; program run neithers in debug nor in release, because of the error below.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; How can I generate the config.log?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; About Debug/Release, thinking about it at this time, I don't really need
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; debug libs of openmpi.
</span><br>
<span class="quotelev2">&gt;&gt; but to be able to link against vs2010 Release libs of openmpi, I need
</span><br>
them
<br>
<span class="quotelev2">&gt;&gt; to be linked against the Release c runtime, so I might as well link
</span><br>
<span class="quotelev1">&gt; against
</span><br>
<span class="quotelev2">&gt;&gt; the debug version of the openmpi libs.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Your help is very appreciated,
</span><br>
<span class="quotelev2">&gt;&gt; MM
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: Shiqing Fan [mailto:fan_at_[hidden]]
</span><br>
<span class="quotelev2">&gt;&gt; Sent: 21 November 2011 12:48
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Cc: MM
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] orte_debugger_select and orte_ess_set_name
</span><br>
<span class="quotelev1">&gt; failed
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Could you please send your config and build log to me? Have you tried
</span><br>
with
<br>
<span class="quotelev1">&gt; a
</span><br>
<span class="quotelev2">&gt;&gt; simpler program? Does this error always happen?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Shiqing
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 2011-11-19 4:24 PM, MM wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Trying to run my program linked against debug 1.5.4 on vs2010 fails:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mpirun -np 1 .\nhui\Debug\nhui.exe : -np 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; .\nhcomp\Debug\nhcomp.exe
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [PCNAME:04960] [[1282,0],0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; C:\Program Files\openmpi-1.5.4\orte\mca\ess\hnp\ess_hnp_module.c at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; line 536
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---- It looks like orte_init failed for some reason; your parallel
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process is likely to abort.  There are many reasons that a parallel
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process can fail during orte_init; some of which are due to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configuration or environment problems.  This failure appears to be an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; internal failure; here's some additional information (which may only
</span><br>
<span class="quotelev3">&gt;&gt;&gt; be relevant to an Open MPI developer):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      orte_debugger_select failed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      --&gt;    Returned value Not found (-13) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---- [PCNAME:04960] [[1282,0],0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; C:\Program Files\openmpi-1.5.4\orte\runtime\orte_init.c at line 128
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---- It looks like orte_init failed for some reason; your parallel
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process is likely to abort.  There are many reasons that a parallel
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process can fail during orte_init; some of which are due to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configuration or environment problems.  This failure appears to be an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; internal failure; here's some additional information (which may only
</span><br>
<span class="quotelev3">&gt;&gt;&gt; be relevant to an Open MPI developer):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      orte_ess_set_name failed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      --&gt;    Returned value Not found (-13) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---- [LLDNRATDHY9H4J:04960] [[1282,0],0] ORTE_ERROR_LOG: Not found in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file C:\Program Files\openmpi-1.5.4\orte\tools\orterun\orterun.c at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; line 616
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; any help is appreciated,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MM
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
****************************************************************************
<br>
<span class="quotelev2">&gt;&gt; *
</span><br>
<span class="quotelev2">&gt;&gt; **
</span><br>
<span class="quotelev2">&gt;&gt; **
</span><br>
<span class="quotelev2">&gt;&gt; ** WARNING:  This email contains an attachment of a very suspicious type.
</span><br>
<span class="quotelev2">&gt;&gt; **
</span><br>
<span class="quotelev2">&gt;&gt; ** You are urged NOT to open this attachment unless you are absolutely
</span><br>
<span class="quotelev2">&gt;&gt; **
</span><br>
<span class="quotelev2">&gt;&gt; ** sure it is legitimate.  Opening this attachment may cause irreparable
</span><br>
<span class="quotelev2">&gt;&gt; **
</span><br>
<span class="quotelev2">&gt;&gt; ** damage to your computer and your files.  If you have any questions
</span><br>
<span class="quotelev2">&gt;&gt; **
</span><br>
<span class="quotelev2">&gt;&gt; ** about the validity of this message, PLEASE SEEK HELP BEFORE OPENING
</span><br>
IT.
<br>
<span class="quotelev2">&gt;&gt; **
</span><br>
<span class="quotelev2">&gt;&gt; **
</span><br>
<span class="quotelev2">&gt;&gt; **
</span><br>
<span class="quotelev2">&gt;&gt; ** This warning was added by the IU Computer Science Dept. mail scanner.
</span><br>
<span class="quotelev2">&gt;&gt; **
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
****************************************************************************
<br>
<span class="quotelev2">&gt;&gt; *
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="17857.php">MM: "Re: [OMPI users] orte_debugger_select and orte_ess_set_name failed"</a>
<li><strong>Previous message:</strong> <a href="17855.php">Martin Santa Mar&#237;a: "[OMPI users] FW:  Problem launching application on windows"</a>
<li><strong>Maybe in reply to:</strong> <a href="17790.php">MM: "[OMPI users] orte_debugger_select and orte_ess_set_name failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17857.php">MM: "Re: [OMPI users] orte_debugger_select and orte_ess_set_name failed"</a>
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
