<?
$subject_val = "Re: [OMPI users] problem with openmpi-1.7a1r27338 on Solaris 10";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 14 12:49:42 2012" -->
<!-- isoreceived="20120914164942" -->
<!-- sent="Fri, 14 Sep 2012 09:49:35 -0700" -->
<!-- isosent="20120914164935" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem with openmpi-1.7a1r27338 on Solaris 10" -->
<!-- id="73DA3EE5-1B48-4E15-A861-A80699F54D2C_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201209141232.q8ECWjdc028501_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem with openmpi-1.7a1r27338 on Solaris 10<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-14 12:49:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20217.php">John Chludzinski: "[OMPI users] Newbie question?"</a>
<li><strong>Previous message:</strong> <a href="20215.php">Ralph Castain: "Re: [OMPI users] segmentation fault in openmpi-1.9a1r27285"</a>
<li><strong>In reply to:</strong> <a href="20213.php">Siegmar Gross: "[OMPI users] problem with openmpi-1.7a1r27338 on Solaris 10"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Looks like a CMR was missing a couple of changesets - this should be fixed now.
<br>
<p>Thanks!
<br>
<p>On Sep 14, 2012, at 5:32 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I just installed openmpi-1.7a1r27338 without errors in my log-files.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr small_prog 115 mpicc -showme
</span><br>
<span class="quotelev1">&gt; cc -I/usr/local/openmpi-1.7_64_cc/include -mt -m64 -L/usr/local/openmpi-1.7_64_cc/lib64 -lmpi -lpicl -lm -lkstat -llgrp 
</span><br>
<span class="quotelev1">&gt; -lsocket -lnsl -lrt -lm
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;mpiexec&quot; works without options.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr small_prog 116 mpiexec init_finalize
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;mpiexec&quot; breaks with options.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr small_prog 117 mpiexec -np 2 init_finalize
</span><br>
<span class="quotelev1">&gt; [tyr.informatik.hs-fulda.de:28473] [[19757,0],0] ORTE_ERROR_LOG: Value out of bounds in file 
</span><br>
<span class="quotelev1">&gt; ../../../../openmpi-1.7a1r27338/orte/mca/odls/base/odls_base_default_fns.c at line 847
</span><br>
<span class="quotelev1">&gt; [tyr.informatik.hs-fulda.de:28473] [[19757,0],0] ORTE_ERROR_LOG: Value out of bounds in file 
</span><br>
<span class="quotelev1">&gt; ../../../../openmpi-1.7a1r27338/orte/mca/odls/base/odls_base_default_fns.c at line 1414
</span><br>
<span class="quotelev1">&gt; [tyr.informatik.hs-fulda.de:28473] [[19757,0],0] ORTE_ERROR_LOG: Value out of bounds in file 
</span><br>
<span class="quotelev1">&gt; ../../../../openmpi-1.7a1r27338/orte/mca/odls/base/odls_base_default_fns.c at line 847
</span><br>
<span class="quotelev1">&gt; [tyr.informatik.hs-fulda.de:28473] [[19757,0],0] ORTE_ERROR_LOG: Value out of bounds in file 
</span><br>
<span class="quotelev1">&gt; ../../../../openmpi-1.7a1r27338/orte/mca/odls/base/odls_base_default_fns.c at line 1414
</span><br>
<span class="quotelev1">&gt; tyr small_prog 118 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr small_prog 118 mpiexec -host tyr init_finalize
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; All nodes which are allocated for this job are already filled.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any ideas? Thank you very much for any help in advance.
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20217.php">John Chludzinski: "[OMPI users] Newbie question?"</a>
<li><strong>Previous message:</strong> <a href="20215.php">Ralph Castain: "Re: [OMPI users] segmentation fault in openmpi-1.9a1r27285"</a>
<li><strong>In reply to:</strong> <a href="20213.php">Siegmar Gross: "[OMPI users] problem with openmpi-1.7a1r27338 on Solaris 10"</a>
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
