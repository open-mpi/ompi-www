<?
$subject_val = "[OMPI users] problem with rankfile in openmpi-1.8.2rc3";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  5 03:56:52 2014" -->
<!-- isoreceived="20140805075652" -->
<!-- sent="Tue, 5 Aug 2014 09:56:16 +0200 (CEST)" -->
<!-- isosent="20140805075616" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] problem with rankfile in openmpi-1.8.2rc3" -->
<!-- id="201408050756.s757uGJU027366_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] problem with rankfile in openmpi-1.8.2rc3<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-05 03:56:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24908.php">Siegmar Gross: "Re: [OMPI users] SIGSEGV for Java program in openmpi-1.8.2rc2 onSolaris 10"</a>
<li><strong>Previous message:</strong> <a href="24906.php">Andrew Caird: "Re: [OMPI users] How to keep multiple installations at same time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24914.php">Ralph Castain: "Re: [OMPI users] problem with rankfile in openmpi-1.8.2rc3"</a>
<li><strong>Reply:</strong> <a href="24914.php">Ralph Castain: "Re: [OMPI users] problem with rankfile in openmpi-1.8.2rc3"</a>
<li><strong>Maybe reply:</strong> <a href="24936.php">Siegmar Gross: "Re: [OMPI users] problem with rankfile in openmpi-1.8.2rc3"</a>
<li><strong>Maybe reply:</strong> <a href="24944.php">Siegmar Gross: "Re: [OMPI users] problem with rankfile in openmpi-1.8.2rc3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>yesterday I installed openmpi-1.8.2rc3 on my machines
<br>
(Solaris 10 Sparc, Solaris 10 x86_64, and openSUSE
<br>
Linux 12.1 x86_64) with Sun C 5.12. I get an error,
<br>
if I use a rankfile for all three architectures.
<br>
The error message depends on the local machine, which
<br>
I use to run &quot;mpiexec&quot;. I get a different error, if I
<br>
use two &quot;Sparc64 VII&quot; machines (see below).
<br>
<p>tyr openmpi_1.7.x_or_newer 109 cat rf_linpc_sunpc_tyr
<br>
rank 0=linpc0 slot=0:0-1;1:0-1
<br>
rank 1=linpc1 slot=0:0-1
<br>
rank 2=sunpc1 slot=1:0
<br>
rank 3=tyr slot=1:0
<br>
tyr openmpi_1.7.x_or_newer 110 
<br>
<p><p>I get the following message, if I run &quot;mpiexec&quot; on
<br>
Solaris 10 Sparc.
<br>
<p>tyr openmpi_1.7.x_or_newer 110 mpiexec -report-bindings -np 4 -rf 
<br>
rf_linpc_sunpc_tyr hostname
<br>
--------------------------------------------------------------------------
<br>
An invalid value was supplied for an enum variable.
<br>
<p>&nbsp;&nbsp;Variable     : hwloc_base_report_bindings
<br>
&nbsp;&nbsp;Value        : 1,1
<br>
&nbsp;&nbsp;Valid values : 0: f|false|disabled, 1: t|true|enabled
<br>
--------------------------------------------------------------------------
<br>
[tyr.informatik.hs-fulda.de:26960] MCW rank 3 bound to socket 1[core 1[hwt 0]]: 
<br>
[.][B]
<br>
tyr.informatik.hs-fulda.de
<br>
[linpc1:12109] MCW rank 1 bound to socket 0[core 0[hwt 0]], socket 0[core 1[hwt 
<br>
0]]: [B/B][./.]
<br>
[linpc0:26642] MCW rank 0 is not bound (or bound to all available processors)
<br>
linpc1
<br>
linpc0
<br>
sunpc1
<br>
tyr openmpi_1.7.x_or_newer 111 
<br>
<p><p><p>I get the following message, if I run &quot;mpiexec&quot; on
<br>
Solaris 10 x86_64 or Linux x86_64.
<br>
<p>sunpc1 openmpi_1.7.x_or_newer 109 mpiexec -report-bindings -np 4 -rf 
<br>
rf_linpc_sunpc_tyr hostname
<br>
--------------------------------------------------------------------------
<br>
An invalid value was supplied for an enum variable.
<br>
<p>&nbsp;&nbsp;Variable     : hwloc_base_report_bindings
<br>
&nbsp;&nbsp;Value        : 1,1
<br>
&nbsp;&nbsp;Valid values : 0: f|false|disabled, 1: t|true|enabled
<br>
--------------------------------------------------------------------------
<br>
[sunpc1:02931] MCW rank 2 bound to socket 1[core 2[hwt 0]]: [./.][B/.]
<br>
sunpc1
<br>
[linpc0:26850] MCW rank 0 is not bound (or bound to all available processors)
<br>
[linpc1:12386] MCW rank 1 bound to socket 0[core 0[hwt 0]], socket 0[core 1[hwt 
<br>
0]]: [B/B][./.]
<br>
linpc0
<br>
linpc1
<br>
--------------------------------------------------------------------------
<br>
Open MPI tried to bind a new process, but something went wrong.  The
<br>
process was killed without launching the target application.  Your job
<br>
will now abort.
<br>
<p>&nbsp;&nbsp;Local host:        tyr
<br>
&nbsp;&nbsp;Application name:  /usr/local/bin/hostname
<br>
&nbsp;&nbsp;Error message:     hwloc_set_cpubind returned &quot;Error&quot; for bitmap &quot;2&quot;
<br>
&nbsp;&nbsp;Location:          
<br>
../../../../../openmpi-1.8.2rc3/orte/mca/odls/default/odls_default_module.c:551
<br>
--------------------------------------------------------------------------
<br>
sunpc1 openmpi_1.7.x_or_newer 110 
<br>
<p><p><p><p>The rankfile worked for older versions of Open MPI.
<br>
<p>tyr openmpi_1.7.x_or_newer 139 ompi_info | grep MPI:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.8.2a1r31804
<br>
tyr openmpi_1.7.x_or_newer 140 mpiexec -report-bindings -np 4 -rf 
<br>
rf_linpc_sunpc_tyr hostname
<br>
[tyr.informatik.hs-fulda.de:27171] MCW rank 3 bound to socket 1[core 1[hwt 0]]: 
<br>
[.][B]
<br>
tyr.informatik.hs-fulda.de
<br>
[linpc1:12790] MCW rank 1 bound to socket 0[core 0[hwt 0]], socket 0[core 1[hwt 
<br>
0]]: [B/B][./.]
<br>
[linpc0:27221] MCW rank 0 is not bound (or bound to all available processors)
<br>
linpc1
<br>
linpc0
<br>
[sunpc1:03046] MCW rank 2 bound to socket 1[core 2[hwt 0]]: [./.][B/.]
<br>
sunpc1
<br>
tyr openmpi_1.7.x_or_newer 141 
<br>
<p><p><p><p>I get the following error, if I use two Sparc machines
<br>
(Sun M4000 servers with two quad core Sparc64 VII processors
<br>
and two hardware threads per core). I'm not sure if this
<br>
worked before or if I have to use different options to make
<br>
it working.
<br>
<p>tyr openmpi_1.7.x_or_newer 151 cat rf_rs0_rs1
<br>
rank 0=rs0 slot=0:0-7
<br>
rank 1=rs0 slot=1
<br>
rank 2=rs1 slot=0
<br>
rank 3=rs1 slot=1
<br>
tyr openmpi_1.7.x_or_newer 152 
<br>
<p>rs0 openmpi_1.7.x_or_newer 104 mpiexec --report-bindings --use-hwthread-cpus -np 
<br>
4 -rf rf_rs0_rs1 hostname
<br>
[rs0.informatik.hs-fulda.de:26085] [[28578,0],0] ORTE_ERROR_LOG: Not found in 
<br>
file ../../../../../openmpi-1.8.2rc3/orte/mca/rmaps/rank_file/rmaps_rank_file.c 
<br>
at line 279
<br>
[rs0.informatik.hs-fulda.de:26085] [[28578,0],0] ORTE_ERROR_LOG: Not found in 
<br>
file ../../../../openmpi-1.8.2rc3/orte/mca/rmaps/base/rmaps_base_map_job.c at 
<br>
line 285
<br>
rs0 openmpi_1.7.x_or_newer 105 
<br>
<p><p>It works for the following command.
<br>
<p>rs0 openmpi_1.7.x_or_newer 107 mpiexec --report-bindings -np 4 --host rs0,rs1 
<br>
--bind-to hwthread hostname
<br>
[rs0.informatik.hs-fulda.de:26102] MCW rank 0 bound to socket 0[core 0[hwt 0]]: 
<br>
[B./../../..][../../../..]
<br>
[rs0.informatik.hs-fulda.de:26102] MCW rank 1 bound to socket 1[core 4[hwt 0]]: 
<br>
[../../../..][B./../../..]
<br>
rs0.informatik.hs-fulda.de
<br>
rs0.informatik.hs-fulda.de
<br>
rs1.informatik.hs-fulda.de
<br>
[rs1.informatik.hs-fulda.de:28740] MCW rank 2 bound to socket 0[core 0[hwt 0]]: 
<br>
[B./../../..][../../../..]
<br>
[rs1.informatik.hs-fulda.de:28740] MCW rank 3 bound to socket 1[core 4[hwt 0]]: 
<br>
[../../../..][B./../../..]
<br>
rs1.informatik.hs-fulda.de
<br>
rs0 openmpi_1.7.x_or_newer 108 
<br>
<p><p>I would be grateful if somebody could fix the problem. Please let
<br>
me know if I can provide anything else. Thank you very much for
<br>
any help in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24908.php">Siegmar Gross: "Re: [OMPI users] SIGSEGV for Java program in openmpi-1.8.2rc2 onSolaris 10"</a>
<li><strong>Previous message:</strong> <a href="24906.php">Andrew Caird: "Re: [OMPI users] How to keep multiple installations at same time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24914.php">Ralph Castain: "Re: [OMPI users] problem with rankfile in openmpi-1.8.2rc3"</a>
<li><strong>Reply:</strong> <a href="24914.php">Ralph Castain: "Re: [OMPI users] problem with rankfile in openmpi-1.8.2rc3"</a>
<li><strong>Maybe reply:</strong> <a href="24936.php">Siegmar Gross: "Re: [OMPI users] problem with rankfile in openmpi-1.8.2rc3"</a>
<li><strong>Maybe reply:</strong> <a href="24944.php">Siegmar Gross: "Re: [OMPI users] problem with rankfile in openmpi-1.8.2rc3"</a>
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
