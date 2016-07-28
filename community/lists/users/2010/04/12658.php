<?
$subject_val = "Re: [OMPI users] Fwd: Open MPI v1.4 cant find default hostfile";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 16 13:44:25 2010" -->
<!-- isoreceived="20100416174425" -->
<!-- sent="Fri, 16 Apr 2010 19:44:20 +0200" -->
<!-- isosent="20100416174420" -->
<!-- name="Mario Ogrizek" -->
<!-- email="mario.guardian_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fwd: Open MPI v1.4 cant find default hostfile" -->
<!-- id="t2gfc029d6c1004161044m88480d99le3abac9b98f20434_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="1271439628.1972.7.camel_at_magomedov-desktop" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fwd: Open MPI v1.4 cant find default hostfile<br>
<strong>From:</strong> Mario Ogrizek (<em>mario.guardian_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-16 13:44:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12659.php">Ralph Castain: "Re: [OMPI users] Fwd:  Open MPI v1.4 cant find default hostfile"</a>
<li><strong>Previous message:</strong> <a href="12657.php">Timur Magomedov: "Re: [OMPI users] Fwd:  Open MPI v1.4 cant find default hostfile"</a>
<li><strong>In reply to:</strong> <a href="12657.php">Timur Magomedov: "Re: [OMPI users] Fwd:  Open MPI v1.4 cant find default hostfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12660.php">Ralph Castain: "Re: [OMPI users] Fwd: Open MPI v1.4 cant find default hostfile"</a>
<li><strong>Reply:</strong> <a href="12660.php">Ralph Castain: "Re: [OMPI users] Fwd: Open MPI v1.4 cant find default hostfile"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Any idea how to solve this?
<br>
<p>On Fri, Apr 16, 2010 at 7:40 PM, Timur Magomedov &lt;
<br>
timur.magomedov_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello.
</span><br>
<span class="quotelev1">&gt; It looks that you hostfile path should
</span><br>
<span class="quotelev1">&gt; be /usr/local/etc/openmpi-default-hostfile not
</span><br>
<span class="quotelev1">&gt; usr/local/etc/openmpi-default-hostfile but somehow Open MPI gets the
</span><br>
<span class="quotelev1">&gt; second path.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#208;&#146; &#208;&#159;&#209;&#130;&#208;&#189;, 16/04/2010 &#208;&#178; 19:10 +0200, Mario Ogrizek &#208;&#191;&#208;&#184;&#209;&#136;&#208;&#181;&#209;&#130;:
</span><br>
<span class="quotelev2">&gt; &gt; Well, im not sure why should i name it /openmpi-default-hostfile
</span><br>
<span class="quotelev2">&gt; &gt; Especially, because mpirun v1.2 executes without any errors.
</span><br>
<span class="quotelev2">&gt; &gt; But, i made a copy named /openmpi-default-hostfile, and still, the
</span><br>
<span class="quotelev2">&gt; &gt; same result.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This is the whole error message for a simple hello world program:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Open RTE was unable to open the hostfile:
</span><br>
<span class="quotelev2">&gt; &gt;     usr/local/etc/openmpi-default-hostfile
</span><br>
<span class="quotelev2">&gt; &gt; Check to make sure the path and filename are correct.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; [Mario.local:04300] [[114,0],0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev2">&gt; &gt; base/ras_base_allocate.c at line 186
</span><br>
<span class="quotelev2">&gt; &gt; [Mario.local:04300] [[114,0],0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev2">&gt; &gt; base/plm_base_launch_support.c at line 72
</span><br>
<span class="quotelev2">&gt; &gt; [Mario.local:04300] [[114,0],0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev2">&gt; &gt; plm_rsh_module.c at line 990
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; A daemon (pid unknown) died unexpectedly on signal 1  while attempting
</span><br>
<span class="quotelev2">&gt; &gt; to
</span><br>
<span class="quotelev2">&gt; &gt; launch so we are aborting.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This may be because the daemon was unable to find all the needed
</span><br>
<span class="quotelev2">&gt; &gt; shared
</span><br>
<span class="quotelev2">&gt; &gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have
</span><br>
<span class="quotelev2">&gt; &gt; the
</span><br>
<span class="quotelev2">&gt; &gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev2">&gt; &gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev2">&gt; &gt; that caused that situation.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ps. PTP is a parallel tools platform plugin for eclipse
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Mario
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Kind regards,
</span><br>
<span class="quotelev1">&gt; Timur Magomedov
</span><br>
<span class="quotelev1">&gt; Senior C++ Developer
</span><br>
<span class="quotelev1">&gt; DevelopOnBox LLC / Zodiac Interactive
</span><br>
<span class="quotelev1">&gt; <a href="http://www.zodiac.tv/">http://www.zodiac.tv/</a>
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12658/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12659.php">Ralph Castain: "Re: [OMPI users] Fwd:  Open MPI v1.4 cant find default hostfile"</a>
<li><strong>Previous message:</strong> <a href="12657.php">Timur Magomedov: "Re: [OMPI users] Fwd:  Open MPI v1.4 cant find default hostfile"</a>
<li><strong>In reply to:</strong> <a href="12657.php">Timur Magomedov: "Re: [OMPI users] Fwd:  Open MPI v1.4 cant find default hostfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12660.php">Ralph Castain: "Re: [OMPI users] Fwd: Open MPI v1.4 cant find default hostfile"</a>
<li><strong>Reply:</strong> <a href="12660.php">Ralph Castain: "Re: [OMPI users] Fwd: Open MPI v1.4 cant find default hostfile"</a>
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
