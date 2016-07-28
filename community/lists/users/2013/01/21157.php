<?
$subject_val = "[OMPI users] problem with rankfile in openmpi-1.6.4rc2";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 19 04:52:19 2013" -->
<!-- isoreceived="20130119095219" -->
<!-- sent="Sat, 19 Jan 2013 10:45:34 +0100 (CET)" -->
<!-- isosent="20130119094534" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] problem with rankfile in openmpi-1.6.4rc2" -->
<!-- id="201301190945.r0J9jYaA023240_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] problem with rankfile in openmpi-1.6.4rc2<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-19 04:45:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21158.php">Lee Eric: "Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi"</a>
<li><strong>Previous message:</strong> <a href="21156.php">Siegmar Gross: "[OMPI users] problem with groups and communicators in openmpi-1.6.4rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21225.php">Ralph Castain: "Re: [OMPI users] problem with rankfile in openmpi-1.6.4rc2"</a>
<li><strong>Reply:</strong> <a href="21225.php">Ralph Castain: "Re: [OMPI users] problem with rankfile in openmpi-1.6.4rc2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>I have installed openmpi-1.6.4rc2 and have still a problem with my
<br>
rankfile.
<br>
<p>linpc1 rankfiles 113 ompi_info | grep &quot;Open MPI:&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.6.4rc2r27861
<br>
<p>linpc1 rankfiles 114 cat rf_linpc1 
<br>
rank 0=linpc1 slot=0:0-1,1:0-1
<br>
<p>linpc1 rankfiles 115 mpiexec -report-bindings -np 1 \
<br>
&nbsp;&nbsp;-rf rf_linpc1 hostname
<br>
--------------------------------------------------------------------
<br>
We were unable to successfully process/set the requested processor
<br>
affinity settings:
<br>
<p>Specified slot list: 0:0-1,1:0-1
<br>
Error: Error
<br>
<p>This could mean that a non-existent processor was specified, or
<br>
that the specification had improper syntax.
<br>
--------------------------------------------------------------------
<br>
--------------------------------------------------------------------
<br>
mpiexec was unable to start the specified application as it
<br>
&nbsp;&nbsp;encountered an error:
<br>
<p>Error name: Error
<br>
Node: linpc1
<br>
<p>when attempting to start process rank 0.
<br>
--------------------------------------------------------------------
<br>
<p><p>Everything works fine with the following command.
<br>
<p>linpc1 rankfiles 116 mpiexec -report-bindings -np 1 -cpus-per-proc 4 \
<br>
&nbsp;&nbsp;-bycore -bind-to-core hostname
<br>
[linpc1:20140] MCW rank 0 bound to socket 0[core 0-1]
<br>
&nbsp;&nbsp;socket 1[core 0-1]: [B B][B B]
<br>
linpc1
<br>
<p><p>I would be grateful if somebody could fix the problem. Thank you very
<br>
much for any help in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21158.php">Lee Eric: "Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi"</a>
<li><strong>Previous message:</strong> <a href="21156.php">Siegmar Gross: "[OMPI users] problem with groups and communicators in openmpi-1.6.4rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21225.php">Ralph Castain: "Re: [OMPI users] problem with rankfile in openmpi-1.6.4rc2"</a>
<li><strong>Reply:</strong> <a href="21225.php">Ralph Castain: "Re: [OMPI users] problem with rankfile in openmpi-1.6.4rc2"</a>
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
