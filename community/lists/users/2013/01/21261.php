<?
$subject_val = "[OMPI users] problem with rankfile and openmpi-1.6.4rc3r27923";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 29 14:01:12 2013" -->
<!-- isoreceived="20130129190112" -->
<!-- sent="Tue, 29 Jan 2013 19:54:17 +0100 (CET)" -->
<!-- isosent="20130129185417" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] problem with rankfile and openmpi-1.6.4rc3r27923" -->
<!-- id="201301291854.r0TIsHZT011625_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] problem with rankfile and openmpi-1.6.4rc3r27923<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-29 13:54:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21262.php">Ralph Castain: "Re: [OMPI users] problem with rankfile and openmpi-1.6.4rc3r27923"</a>
<li><strong>Previous message:</strong> <a href="21260.php">Jens Glaser: "Re: [OMPI users] Basic question about MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21262.php">Ralph Castain: "Re: [OMPI users] problem with rankfile and openmpi-1.6.4rc3r27923"</a>
<li><strong>Reply:</strong> <a href="21262.php">Ralph Castain: "Re: [OMPI users] problem with rankfile and openmpi-1.6.4rc3r27923"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>today I have installed openmpi-1.6.4rc3r27923. Unfortunately I
<br>
still have a problem with rankfiles, if I start a process on a
<br>
remote machine.
<br>
<p><p>tyr rankfiles 114  ssh linpc1 ompi_info | grep &quot;Open MPI:&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.6.4rc3r27923
<br>
<p>tyr rankfiles 115 cat rf_linpc1
<br>
rank 0=linpc1 slot=0:0-1,1:0-1
<br>
<p>tyr rankfiles 116 mpiexec -report-bindings -np 1 \
<br>
&nbsp;&nbsp;-rf rf_linpc1 hostname
<br>
------------------------------------------------------------------
<br>
All nodes which are allocated for this job are already filled.
<br>
------------------------------------------------------------------
<br>
<p><p>The following command still works.
<br>
<p>tyr rankfiles 119 mpiexec -report-bindings -np 1 -host linpc1 \
<br>
&nbsp;&nbsp;-cpus-per-proc 4 -bycore -bind-to-core hostname
<br>
[linpc1:32262] MCW rank 0 bound to socket 0[core 0-1]
<br>
&nbsp;&nbsp;socket 1[core 0-1]: [B B][B B]
<br>
linpc1
<br>
tyr rankfiles 120 
<br>
<p><p>Everything is fine, if I use the rankfile on the local machine.
<br>
<p>linpc1 rankfiles 103 ompi_info | grep &quot;Open MPI:&quot;                                              
<br>
&nbsp;Open MPI: 1.6.4rc3r27923
<br>
<p>linpc1 rankfiles 104 cat rf_linpc1
<br>
rank 0=linpc1 slot=0:0-1,1:0-1
<br>
<p>linpc1 rankfiles 105 mpiexec -report-bindings -np 1 \
<br>
&nbsp;&nbsp;-rf rf_linpc1 hostname
<br>
[linpc1:32385] MCW rank 0 bound to socket 0[core 0-1]
<br>
&nbsp;&nbsp;socket 1[core 0-1]: [B B][B B] (slot list 0:0-1,1:0-1)
<br>
linpc1
<br>
linpc1 rankfiles 106
<br>
<p><p>In my opinion it should also work if I start a process on a
<br>
remote machine. Can somebody look once more into this issue?
<br>
Thank you very much for your help in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21262.php">Ralph Castain: "Re: [OMPI users] problem with rankfile and openmpi-1.6.4rc3r27923"</a>
<li><strong>Previous message:</strong> <a href="21260.php">Jens Glaser: "Re: [OMPI users] Basic question about MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21262.php">Ralph Castain: "Re: [OMPI users] problem with rankfile and openmpi-1.6.4rc3r27923"</a>
<li><strong>Reply:</strong> <a href="21262.php">Ralph Castain: "Re: [OMPI users] problem with rankfile and openmpi-1.6.4rc3r27923"</a>
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
