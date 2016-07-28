<?
$subject_val = "[OMPI users] bindings not reported in openmpi-1.9a1r27359";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 23 06:39:23 2012" -->
<!-- isoreceived="20120923103923" -->
<!-- sent="Sun, 23 Sep 2012 12:32:35 +0200 (CEST)" -->
<!-- isosent="20120923103235" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] bindings not reported in openmpi-1.9a1r27359" -->
<!-- id="201209231032.q8NAWZpt024046_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] bindings not reported in openmpi-1.9a1r27359<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-23 06:32:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20264.php">Ralph Castain: "Re: [OMPI users] static, standalone mpirun"</a>
<li><strong>Previous message:</strong> <a href="20262.php">Siegmar Gross: "[OMPI users] bindings not reported and other problems in openmpi-1.7a1r27358"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20266.php">Ralph Castain: "Re: [OMPI users] bindings not reported in openmpi-1.9a1r27359"</a>
<li><strong>Reply:</strong> <a href="20266.php">Ralph Castain: "Re: [OMPI users] bindings not reported in openmpi-1.9a1r27359"</a>
<li><strong>Maybe reply:</strong> <a href="20277.php">Ralph Castain: "Re: [OMPI users] bindings not reported in openmpi-1.9a1r27359"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>yesterday I installed openmpi-1.9a1r27359 and it doesn't report process
<br>
bindings on Solaris 10 x86_64 and Linux x86_64. As I showed in my previous
<br>
email for openmpi-1.7, it worked for openmpi-1.6.2.
<br>
<p>tyr fd1026 114 mpiexec -np 2 -host sunpc0 -report-bindings \
<br>
&nbsp;&nbsp;-map-by core -bind-to core date
<br>
Sun Sep 23 12:29:25 CEST 2012
<br>
Sun Sep 23 12:29:25 CEST 2012
<br>
<p>tyr fd1026 115 mpiexec -np 2 -host linpc0 -report-bindings \
<br>
&nbsp;&nbsp;-map-by core -bind-to core date
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
Sun Sep 23 12:29:36 CEST 2012
<br>
Sun Sep 23 12:29:36 CEST 2012
<br>
<p>tyr fd1026 116 mpiexec -np 2 -host tyr -report-bindings \
<br>
&nbsp;&nbsp;-map-by core -bind-to core date
<br>
[tyr.informatik.hs-fulda.de:24039] MCW rank 0 bound to socket 0[core 0[hwt 0]]: [B][.]
<br>
[tyr.informatik.hs-fulda.de:24039] MCW rank 1 bound to socket 1[core 1[hwt 0]]: [.][B]
<br>
Sun Sep 23 12:29:48 CEST 2012
<br>
Sun Sep 23 12:29:48 CEST 2012
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20264.php">Ralph Castain: "Re: [OMPI users] static, standalone mpirun"</a>
<li><strong>Previous message:</strong> <a href="20262.php">Siegmar Gross: "[OMPI users] bindings not reported and other problems in openmpi-1.7a1r27358"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20266.php">Ralph Castain: "Re: [OMPI users] bindings not reported in openmpi-1.9a1r27359"</a>
<li><strong>Reply:</strong> <a href="20266.php">Ralph Castain: "Re: [OMPI users] bindings not reported in openmpi-1.9a1r27359"</a>
<li><strong>Maybe reply:</strong> <a href="20277.php">Ralph Castain: "Re: [OMPI users] bindings not reported in openmpi-1.9a1r27359"</a>
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
