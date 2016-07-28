<?
$subject_val = "Re: [OMPI users] Fwd:  Open MPI v1.4 cant find default hostfile";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 16 13:40:34 2010" -->
<!-- isoreceived="20100416174034" -->
<!-- sent="Fri, 16 Apr 2010 21:40:28 +0400" -->
<!-- isosent="20100416174028" -->
<!-- name="Timur Magomedov" -->
<!-- email="timur.magomedov_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fwd:  Open MPI v1.4 cant find default hostfile" -->
<!-- id="1271439628.1972.7.camel_at_magomedov-desktop" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="p2hfc029d6c1004161010jbdcd01e4t317145fe69ab57dd_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fwd:  Open MPI v1.4 cant find default hostfile<br>
<strong>From:</strong> Timur Magomedov (<em>timur.magomedov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-16 13:40:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12658.php">Mario Ogrizek: "Re: [OMPI users] Fwd: Open MPI v1.4 cant find default hostfile"</a>
<li><strong>Previous message:</strong> <a href="12656.php">Mario Ogrizek: "[OMPI users] Fwd:  Open MPI v1.4 cant find default hostfile"</a>
<li><strong>In reply to:</strong> <a href="12656.php">Mario Ogrizek: "[OMPI users] Fwd:  Open MPI v1.4 cant find default hostfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12658.php">Mario Ogrizek: "Re: [OMPI users] Fwd: Open MPI v1.4 cant find default hostfile"</a>
<li><strong>Reply:</strong> <a href="12658.php">Mario Ogrizek: "Re: [OMPI users] Fwd: Open MPI v1.4 cant find default hostfile"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello.
<br>
It looks that you hostfile path should
<br>
be /usr/local/etc/openmpi-default-hostfile not
<br>
usr/local/etc/openmpi-default-hostfile but somehow Open MPI gets the
<br>
second path.
<br>
<p>&#208;&#146; &#208;&#159;&#209;&#130;&#208;&#189;, 16/04/2010 &#208;&#178; 19:10 +0200, Mario Ogrizek &#208;&#191;&#208;&#184;&#209;&#136;&#208;&#181;&#209;&#130;:
<br>
<span class="quotelev1">&gt; Well, im not sure why should i name it /openmpi-default-hostfile
</span><br>
<span class="quotelev1">&gt; Especially, because mpirun v1.2 executes without any errors.
</span><br>
<span class="quotelev1">&gt; But, i made a copy named /openmpi-default-hostfile, and still, the
</span><br>
<span class="quotelev1">&gt; same result.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is the whole error message for a simple hello world program: 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Open RTE was unable to open the hostfile:
</span><br>
<span class="quotelev1">&gt;     usr/local/etc/openmpi-default-hostfile
</span><br>
<span class="quotelev1">&gt; Check to make sure the path and filename are correct.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [Mario.local:04300] [[114,0],0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev1">&gt; base/ras_base_allocate.c at line 186
</span><br>
<span class="quotelev1">&gt; [Mario.local:04300] [[114,0],0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev1">&gt; base/plm_base_launch_support.c at line 72
</span><br>
<span class="quotelev1">&gt; [Mario.local:04300] [[114,0],0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev1">&gt; plm_rsh_module.c at line 990
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A daemon (pid unknown) died unexpectedly on signal 1  while attempting
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev1">&gt; launch so we are aborting.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This may be because the daemon was unable to find all the needed
</span><br>
<span class="quotelev1">&gt; shared
</span><br>
<span class="quotelev1">&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev1">&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ps. PTP is a parallel tools platform plugin for eclipse 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Mario
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
<p><p><pre>
-- 
Kind regards,
Timur Magomedov
Senior C++ Developer
DevelopOnBox LLC / Zodiac Interactive
<a href="http://www.zodiac.tv/">http://www.zodiac.tv/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12658.php">Mario Ogrizek: "Re: [OMPI users] Fwd: Open MPI v1.4 cant find default hostfile"</a>
<li><strong>Previous message:</strong> <a href="12656.php">Mario Ogrizek: "[OMPI users] Fwd:  Open MPI v1.4 cant find default hostfile"</a>
<li><strong>In reply to:</strong> <a href="12656.php">Mario Ogrizek: "[OMPI users] Fwd:  Open MPI v1.4 cant find default hostfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12658.php">Mario Ogrizek: "Re: [OMPI users] Fwd: Open MPI v1.4 cant find default hostfile"</a>
<li><strong>Reply:</strong> <a href="12658.php">Mario Ogrizek: "Re: [OMPI users] Fwd: Open MPI v1.4 cant find default hostfile"</a>
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
