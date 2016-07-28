<?
$subject_val = "[OMPI users] problem with openmpi-1.7a1r27338 on Solaris 10";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 14 08:39:38 2012" -->
<!-- isoreceived="20120914123938" -->
<!-- sent="Fri, 14 Sep 2012 14:32:45 +0200 (CEST)" -->
<!-- isosent="20120914123245" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] problem with openmpi-1.7a1r27338 on Solaris 10" -->
<!-- id="201209141232.q8ECWjdc028501_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] problem with openmpi-1.7a1r27338 on Solaris 10<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-14 08:32:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20214.php">Siegmar Gross: "[OMPI users] segmentation fault in openmpi-1.9a1r27285"</a>
<li><strong>Previous message:</strong> <a href="20212.php">Douglas Eadline: "Re: [OMPI users] [omx-devel] Open-mx issue with ompi 1.6.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20216.php">Ralph Castain: "Re: [OMPI users] problem with openmpi-1.7a1r27338 on Solaris 10"</a>
<li><strong>Reply:</strong> <a href="20216.php">Ralph Castain: "Re: [OMPI users] problem with openmpi-1.7a1r27338 on Solaris 10"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I just installed openmpi-1.7a1r27338 without errors in my log-files.
<br>
<p>tyr small_prog 115 mpicc -showme
<br>
cc -I/usr/local/openmpi-1.7_64_cc/include -mt -m64 -L/usr/local/openmpi-1.7_64_cc/lib64 -lmpi -lpicl -lm -lkstat -llgrp 
<br>
-lsocket -lnsl -lrt -lm
<br>
<p><p>&quot;mpiexec&quot; works without options.
<br>
<p>tyr small_prog 116 mpiexec init_finalize
<br>
<p>Hello!
<br>
<p><p>&quot;mpiexec&quot; breaks with options.
<br>
<p>tyr small_prog 117 mpiexec -np 2 init_finalize
<br>
[tyr.informatik.hs-fulda.de:28473] [[19757,0],0] ORTE_ERROR_LOG: Value out of bounds in file 
<br>
../../../../openmpi-1.7a1r27338/orte/mca/odls/base/odls_base_default_fns.c at line 847
<br>
[tyr.informatik.hs-fulda.de:28473] [[19757,0],0] ORTE_ERROR_LOG: Value out of bounds in file 
<br>
../../../../openmpi-1.7a1r27338/orte/mca/odls/base/odls_base_default_fns.c at line 1414
<br>
[tyr.informatik.hs-fulda.de:28473] [[19757,0],0] ORTE_ERROR_LOG: Value out of bounds in file 
<br>
../../../../openmpi-1.7a1r27338/orte/mca/odls/base/odls_base_default_fns.c at line 847
<br>
[tyr.informatik.hs-fulda.de:28473] [[19757,0],0] ORTE_ERROR_LOG: Value out of bounds in file 
<br>
../../../../openmpi-1.7a1r27338/orte/mca/odls/base/odls_base_default_fns.c at line 1414
<br>
tyr small_prog 118 
<br>
<p><p>tyr small_prog 118 mpiexec -host tyr init_finalize
<br>
--------------------------------------------------------------------------
<br>
All nodes which are allocated for this job are already filled.
<br>
--------------------------------------------------------------------------
<br>
<p><p>Any ideas? Thank you very much for any help in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20214.php">Siegmar Gross: "[OMPI users] segmentation fault in openmpi-1.9a1r27285"</a>
<li><strong>Previous message:</strong> <a href="20212.php">Douglas Eadline: "Re: [OMPI users] [omx-devel] Open-mx issue with ompi 1.6.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20216.php">Ralph Castain: "Re: [OMPI users] problem with openmpi-1.7a1r27338 on Solaris 10"</a>
<li><strong>Reply:</strong> <a href="20216.php">Ralph Castain: "Re: [OMPI users] problem with openmpi-1.7a1r27338 on Solaris 10"</a>
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
