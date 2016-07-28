<?
$subject_val = "[OMPI users] bindings not reported and other problems in openmpi-1.7a1r27358";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 23 06:27:10 2012" -->
<!-- isoreceived="20120923102710" -->
<!-- sent="Sun, 23 Sep 2012 12:20:11 +0200 (CEST)" -->
<!-- isosent="20120923102011" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] bindings not reported and other problems in openmpi-1.7a1r27358" -->
<!-- id="201209231020.q8NAKB8k023890_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] bindings not reported and other problems in openmpi-1.7a1r27358<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-23 06:20:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20263.php">Siegmar Gross: "[OMPI users] bindings not reported in openmpi-1.9a1r27359"</a>
<li><strong>Previous message:</strong> <a href="20261.php">Siegmar Gross: "[OMPI users] misleading error message in openmpi-1.6.2rc5r27346"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20267.php">Ralph Castain: "Re: [OMPI users] bindings not reported and other problems in openmpi-1.7a1r27358"</a>
<li><strong>Reply:</strong> <a href="20267.php">Ralph Castain: "Re: [OMPI users] bindings not reported and other problems in openmpi-1.7a1r27358"</a>
<li><strong>Maybe reply:</strong> <a href="20276.php">Ralph Castain: "Re: [OMPI users] bindings not reported and other problems in openmpi-1.7a1r27358"</a>
<li><strong>Maybe reply:</strong> <a href="20331.php">Siegmar Gross: "Re: [OMPI users] bindings not reported and other problems in openmpi-1.7a1r27358"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>yesterday I installed openmpi-1.7a1r27358 and it has an improved
<br>
error message compared to openmpi-1.6.2, but doesn't show process bindings
<br>
and has some other problems as well.
<br>
<p><p>&quot;sunpc0&quot; and &quot;linpc0&quot; are equipped with two dual-core processors running
<br>
Solaris 10 x86_64 and Linux x86_64 resp. &quot;tyr&quot; is a dual-processor machine
<br>
running Solaris 10 Sparc.
<br>
<p>tyr fd1026 105 mpiexec -np 2 -host sunpc0 -report-bindings \
<br>
&nbsp;&nbsp;-map-by core -bind-to-core date
<br>
Sun Sep 23 11:46:36 CEST 2012
<br>
Sun Sep 23 11:46:36 CEST 2012
<br>
<p>tyr fd1026 106 mpicc -showme
<br>
cc -I/usr/local/openmpi-1.7_64_cc/include -mt -m64 
<br>
&nbsp;&nbsp;-L/usr/local/openmpi-1.7_64_cc/lib64 -lmpi -lpicl -lm -lkstat -llgrp
<br>
&nbsp;&nbsp;-lsocket -lnsl -lrt -lm
<br>
<p><p>openmpi-1.6.2 shows process bindings.
<br>
<p>tyr fd1026 103 mpiexec -np 2 -host sunpc0 -report-bindings \
<br>
&nbsp;&nbsp;-bycore -bind-to-core date
<br>
Sun Sep 23 12:09:06 CEST 2012
<br>
[sunpc0:13197] MCW rank 0 bound to socket 0[core 0]: [B .][. .]
<br>
[sunpc0:13197] MCW rank 1 bound to socket 0[core 1]: [. B][. .]
<br>
Sun Sep 23 12:09:06 CEST 2012
<br>
<p><p>tyr fd1026 104 mpicc -showme
<br>
cc -I/usr/local/openmpi-1.6.2_64_cc/include -mt -m64
<br>
&nbsp;&nbsp;-L/usr/local/openmpi-1.6.2_64_cc/lib64 -lmpi -lm -lkstat -llgrp
<br>
&nbsp;&nbsp;-lsocket -lnsl -lrt -lm
<br>
<p><p>On my Linux machine I get a warning.
<br>
<p>tyr fd1026 113 mpiexec -np 2 -host linpc0 -report-bindings \
<br>
&nbsp;&nbsp;-map-by core -bind-to-core date
<br>
--------------------------------------------------------------------------
<br>
WARNING: a request was made to bind a process. While the system
<br>
supports binding the process itself, at least one node does NOT
<br>
support binding memory to the process location.
<br>
<p>&nbsp;&nbsp;Node:  linpc0
<br>
<p>This is a warning only; your job will continue, though performance may
<br>
be degraded.
<br>
--------------------------------------------------------------------------
<br>
Sun Sep 23 11:56:04 CEST 2012
<br>
Sun Sep 23 11:56:04 CEST 2012
<br>
<p><p><p>Everything works fine with openmpi-1.6.2.
<br>
<p>tyr fd1026 106 mpiexec -np 2 -host linpc0 -report-bindings \
<br>
&nbsp;&nbsp;-bycore -bind-to-core date
<br>
[linpc0:15808] MCW rank 0 bound to socket 0[core 0]: [B .][. .]
<br>
[linpc0:15808] MCW rank 1 bound to socket 0[core 1]: [. B][. .]
<br>
Sun Sep 23 12:11:47 CEST 2012
<br>
Sun Sep 23 12:11:47 CEST 2012
<br>
<p><p><p><p>Om my Solaris Sparc machine I get the following errors.
<br>
<p><p>tyr fd1026 121 mpiexec -np 2 -report-bindings -map-by core -bind-to-core date
<br>
[tyr.informatik.hs-fulda.de:23773] [[32457,0],0] ORTE_ERROR_LOG: Value out of bounds in file 
<br>
../../../../openmpi-1.7a1r27358/orte/mca/odls/base/odls_base_default_fns.c at line 847
<br>
[tyr.informatik.hs-fulda.de:23773] [[32457,0],0] ORTE_ERROR_LOG: Value out of bounds in file 
<br>
../../../../openmpi-1.7a1r27358/orte/mca/odls/base/odls_base_default_fns.c at line 1414
<br>
[tyr.informatik.hs-fulda.de:23773] [[32457,0],0] ORTE_ERROR_LOG: Value out of bounds in file 
<br>
../../../../openmpi-1.7a1r27358/orte/mca/odls/base/odls_base_default_fns.c at line 847
<br>
[tyr.informatik.hs-fulda.de:23773] [[32457,0],0] ORTE_ERROR_LOG: Value out of bounds in file 
<br>
../../../../openmpi-1.7a1r27358/orte/mca/odls/base/odls_base_default_fns.c at line 1414
<br>
<p><p><p>tyr fd1026 122 mpiexec -np 2 -host tyr -report-bindings -map-by core -bind-to core date
<br>
--------------------------------------------------------------------------
<br>
All nodes which are allocated for this job are already filled.
<br>
--------------------------------------------------------------------------
<br>
<p><p>Once more everything works fine with openmpi-1.6.2.
<br>
<p>tyr fd1026 109 mpiexec -np 2 -report-bindings -bycore -bind-to-core date
<br>
[tyr.informatik.hs-fulda.de:23869] MCW rank 0 bound to socket 0[core 0]: [B][.]
<br>
[tyr.informatik.hs-fulda.de:23869] MCW rank 1 bound to socket 1[core 0]: [.][B]
<br>
Sun Sep 23 12:14:09 CEST 2012
<br>
Sun Sep 23 12:14:09 CEST 2012
<br>
<p>tyr fd1026 110 mpiexec -np 2 -host tyr -report-bindings -bycore -bind-to-core date
<br>
[tyr.informatik.hs-fulda.de:23877] MCW rank 0 bound to socket 0[core 0]: [B][.]
<br>
[tyr.informatik.hs-fulda.de:23877] MCW rank 1 bound to socket 1[core 0]: [.][B]
<br>
Sun Sep 23 12:16:05 CEST 2012
<br>
Sun Sep 23 12:16:05 CEST 2012
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20263.php">Siegmar Gross: "[OMPI users] bindings not reported in openmpi-1.9a1r27359"</a>
<li><strong>Previous message:</strong> <a href="20261.php">Siegmar Gross: "[OMPI users] misleading error message in openmpi-1.6.2rc5r27346"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20267.php">Ralph Castain: "Re: [OMPI users] bindings not reported and other problems in openmpi-1.7a1r27358"</a>
<li><strong>Reply:</strong> <a href="20267.php">Ralph Castain: "Re: [OMPI users] bindings not reported and other problems in openmpi-1.7a1r27358"</a>
<li><strong>Maybe reply:</strong> <a href="20276.php">Ralph Castain: "Re: [OMPI users] bindings not reported and other problems in openmpi-1.7a1r27358"</a>
<li><strong>Maybe reply:</strong> <a href="20331.php">Siegmar Gross: "Re: [OMPI users] bindings not reported and other problems in openmpi-1.7a1r27358"</a>
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
