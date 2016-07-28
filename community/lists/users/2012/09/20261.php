<?
$subject_val = "[OMPI users] misleading error message in openmpi-1.6.2rc5r27346";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 23 05:45:09 2012" -->
<!-- isoreceived="20120923094509" -->
<!-- sent="Sun, 23 Sep 2012 11:37:50 +0200 (CEST)" -->
<!-- isosent="20120923093750" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] misleading error message in openmpi-1.6.2rc5r27346" -->
<!-- id="201209230938.q8N9bo1P023602_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] misleading error message in openmpi-1.6.2rc5r27346<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-23 05:37:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20262.php">Siegmar Gross: "[OMPI users] bindings not reported and other problems in openmpi-1.7a1r27358"</a>
<li><strong>Previous message:</strong> <a href="20260.php">Ilias Miroslav: "Re: [OMPI users] static, standalone mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20265.php">Ralph Castain: "Re: [OMPI users] misleading error message in openmpi-1.6.2rc5r27346"</a>
<li><strong>Reply:</strong> <a href="20265.php">Ralph Castain: "Re: [OMPI users] misleading error message in openmpi-1.6.2rc5r27346"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>yesterday I installed openmpi-1.6.2rc5r27346 and it seems to work.
<br>
Unfortunately I get a misleading error message when I call &quot;mpiexec&quot;
<br>
with an unknown option.
<br>
<p>tyr fd1026 112 mpiexec -np 2 -host sunpc0 -report-bindings -bycore \
<br>
&nbsp;&nbsp;-bind-to-core date
<br>
Sun Sep 23 11:28:45 CEST 2012
<br>
[sunpc0:12881] MCW rank 0 bound to socket 0[core 0]: [B .][. .]
<br>
[sunpc0:12881] MCW rank 1 bound to socket 0[core 1]: [. B][. .]
<br>
Sun Sep 23 11:28:45 CEST 2012
<br>
<p>tyr fd1026 113 mpiexec -np 2 -host sunpc0 -report-bindings -map-by core \
<br>
&nbsp;&nbsp;&nbsp;-bind-to-core date
<br>
--------------------------------------------------------------------------
<br>
mpiexec was unable to launch the specified application as it could not find an executable:
<br>
<p>Executable: -map-by
<br>
Node: sunpc0
<br>
<p>while attempting to start process rank 0.
<br>
--------------------------------------------------------------------------
<br>
2 total processes failed to start
<br>
<p><p>Is it possible to display an error message like &quot;unknown option&quot;?
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20262.php">Siegmar Gross: "[OMPI users] bindings not reported and other problems in openmpi-1.7a1r27358"</a>
<li><strong>Previous message:</strong> <a href="20260.php">Ilias Miroslav: "Re: [OMPI users] static, standalone mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20265.php">Ralph Castain: "Re: [OMPI users] misleading error message in openmpi-1.6.2rc5r27346"</a>
<li><strong>Reply:</strong> <a href="20265.php">Ralph Castain: "Re: [OMPI users] misleading error message in openmpi-1.6.2rc5r27346"</a>
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
