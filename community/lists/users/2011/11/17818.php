<?
$subject_val = "Re: [OMPI users] orte_debugger_select and orte_ess_set_name failed";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 23 16:07:42 2011" -->
<!-- isoreceived="20111123210742" -->
<!-- sent="Wed, 23 Nov 2011 21:08:07 -0000" -->
<!-- isosent="20111123210807" -->
<!-- name="MM" -->
<!-- email="finjulhich_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orte_debugger_select and orte_ess_set_name failed" -->
<!-- id="002901ccaa24$00f19a40$02d4cec0$_at_com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="24356_1321909694_pALL89wI015747_007401cca891$afa0d860$0ee28920$_at_com" -->
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
<strong>Date:</strong> 2011-11-23 16:08:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17819.php">Ralph Castain: "Re: [OMPI users] How are the Open MPI processes spawned?"</a>
<li><strong>Previous message:</strong> <a href="17817.php">TERRY DONTJE: "Re: [OMPI users] How are the Open MPI processes spawned?"</a>
<li><strong>In reply to:</strong> <a href="17806.php">MM: "Re: [OMPI users] orte_debugger_select and orte_ess_set_name failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17822.php">Shiqing Fan: "Re: [OMPI users] orte_debugger_select and orte_ess_set_name failed"</a>
<li><strong>Reply:</strong> <a href="17822.php">Shiqing Fan: "Re: [OMPI users] orte_debugger_select and orte_ess_set_name failed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Shiqing,
<br>
<p>Is the info provided useful to understand what's going on?
<br>
Alternatively, is there a way to get the provided binaries for win but off
<br>
trunk rather than off 1.5.4 as on the website, because I don't have this
<br>
problem when I link against those libs,
<br>
<p>Thanks
<br>
<p>MM
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of MM
<br>
Sent: 21 November 2011 21:08
<br>
To: fan_at_[hidden]
<br>
Cc: 'Open MPI Users'
<br>
Subject: Re: [OMPI users] orte_debugger_select and orte_ess_set_name failed
<br>
<p>Hi,
<br>
<p>I have placed the source in \Program Files\openmpi-1.5.4 the build dir in
<br>
\Program Files\openmpi.build and the install dir in \Program Files\openmpi
<br>
<p>I could not find config.log in any of the 3 directories nor in the directory
<br>
from which I run mpirun.
<br>
<p>The build log attached is a zip of all the .log under \Program
<br>
Files\openmpi.build
<br>
<p>First, I installed the provided binaries on xp32bit, and successfully ran
<br>
the program in Release mode.
<br>
in debug mode, there was that error of some function missing in kernel, that
<br>
you fixed in svn.
<br>
<p>Second, I then downloaded the source and built the static libraries w cmake
<br>
according to README.windows, and against these home built libs, the same
<br>
program run neithers in debug nor in release, because of the error below.
<br>
<p>How can I generate the config.log?
<br>
<p>About Debug/Release, thinking about it at this time, I don't really need the
<br>
debug libs of openmpi.
<br>
but to be able to link against vs2010 Release libs of openmpi, I need them
<br>
to be linked against the Release c runtime, so I might as well link against
<br>
the debug version of the openmpi libs.
<br>
<p>Your help is very appreciated,
<br>
MM
<br>
<p>-----Original Message-----
<br>
From: Shiqing Fan [mailto:fan_at_[hidden]]
<br>
Sent: 21 November 2011 12:48
<br>
To: Open MPI Users
<br>
Cc: MM
<br>
Subject: Re: [OMPI users] orte_debugger_select and orte_ess_set_name failed
<br>
<p>Hi,
<br>
<p>Could you please send your config and build log to me? Have you tried with a
<br>
simpler program? Does this error always happen?
<br>
<p>Regards,
<br>
Shiqing
<br>
<p><p>On 2011-11-19 4:24 PM, MM wrote:
<br>
<span class="quotelev1">&gt; Trying to run my program linked against debug 1.5.4 on vs2010 fails:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun -np 1 .\nhui\Debug\nhui.exe : -np 1 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; .\nhcomp\Debug\nhcomp.exe
</span><br>
<span class="quotelev1">&gt; [PCNAME:04960] [[1282,0],0] ORTE_ERROR_LOG: Not found in file 
</span><br>
<span class="quotelev1">&gt; C:\Program Files\openmpi-1.5.4\orte\mca\ess\hnp\ess_hnp_module.c at 
</span><br>
<span class="quotelev1">&gt; line 536
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ---- It looks like orte_init failed for some reason; your parallel 
</span><br>
<span class="quotelev1">&gt; process is likely to abort.  There are many reasons that a parallel 
</span><br>
<span class="quotelev1">&gt; process can fail during orte_init; some of which are due to 
</span><br>
<span class="quotelev1">&gt; configuration or environment problems.  This failure appears to be an 
</span><br>
<span class="quotelev1">&gt; internal failure; here's some additional information (which may only 
</span><br>
<span class="quotelev1">&gt; be relevant to an Open MPI developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    orte_debugger_select failed
</span><br>
<span class="quotelev1">&gt;    --&gt;  Returned value Not found (-13) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ---- [PCNAME:04960] [[1282,0],0] ORTE_ERROR_LOG: Not found in file 
</span><br>
<span class="quotelev1">&gt; C:\Program Files\openmpi-1.5.4\orte\runtime\orte_init.c at line 128
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ---- It looks like orte_init failed for some reason; your parallel 
</span><br>
<span class="quotelev1">&gt; process is likely to abort.  There are many reasons that a parallel 
</span><br>
<span class="quotelev1">&gt; process can fail during orte_init; some of which are due to 
</span><br>
<span class="quotelev1">&gt; configuration or environment problems.  This failure appears to be an 
</span><br>
<span class="quotelev1">&gt; internal failure; here's some additional information (which may only 
</span><br>
<span class="quotelev1">&gt; be relevant to an Open MPI developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    orte_ess_set_name failed
</span><br>
<span class="quotelev1">&gt;    --&gt;  Returned value Not found (-13) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ---- [LLDNRATDHY9H4J:04960] [[1282,0],0] ORTE_ERROR_LOG: Not found in 
</span><br>
<span class="quotelev1">&gt; file C:\Program Files\openmpi-1.5.4\orte\tools\orterun\orterun.c at 
</span><br>
<span class="quotelev1">&gt; line 616
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; any help is appreciated,
</span><br>
<span class="quotelev1">&gt; MM
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
<p><p><pre>
--
---------------------------------------------------------------
Shiqing Fan
High Performance Computing Center Stuttgart (HLRS)
Tel: ++49(0)711-685-87234      Nobelstrasse 19
Fax: ++49(0)711-685-65832      70569 Stuttgart
<a href="http://www.hlrs.de/organization/people/shiqing-fan/">http://www.hlrs.de/organization/people/shiqing-fan/</a>
email: fan_at_[hidden]
****************************************************************************
*
**
**
** WARNING:  This email contains an attachment of a very suspicious type.
**
** You are urged NOT to open this attachment unless you are absolutely
**
** sure it is legitimate.  Opening this attachment may cause irreparable
**
** damage to your computer and your files.  If you have any questions
**
** about the validity of this message, PLEASE SEEK HELP BEFORE OPENING IT.
**
**
**
** This warning was added by the IU Computer Science Dept. mail scanner.
**
****************************************************************************
*
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17819.php">Ralph Castain: "Re: [OMPI users] How are the Open MPI processes spawned?"</a>
<li><strong>Previous message:</strong> <a href="17817.php">TERRY DONTJE: "Re: [OMPI users] How are the Open MPI processes spawned?"</a>
<li><strong>In reply to:</strong> <a href="17806.php">MM: "Re: [OMPI users] orte_debugger_select and orte_ess_set_name failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17822.php">Shiqing Fan: "Re: [OMPI users] orte_debugger_select and orte_ess_set_name failed"</a>
<li><strong>Reply:</strong> <a href="17822.php">Shiqing Fan: "Re: [OMPI users] orte_debugger_select and orte_ess_set_name failed"</a>
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
