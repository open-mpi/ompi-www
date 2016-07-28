<?
$subject_val = "[OMPI users] problems with rankfile in openmpi-1.9a1r29097";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep  2 10:18:24 2013" -->
<!-- isoreceived="20130902141824" -->
<!-- sent="Mon, 2 Sep 2013 16:10:43 +0200 (CEST)" -->
<!-- isosent="20130902141043" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] problems with rankfile in openmpi-1.9a1r29097" -->
<!-- id="201309021410.r82EAhiR010057_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] problems with rankfile in openmpi-1.9a1r29097<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-02 10:10:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22586.php">Ralph Castain: "Re: [OMPI users] problems with rankfile in openmpi-1.9a1r29097"</a>
<li><strong>Previous message:</strong> <a href="22584.php">Huangwei: "Re: [OMPI users] mpi_allgatherv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22586.php">Ralph Castain: "Re: [OMPI users] problems with rankfile in openmpi-1.9a1r29097"</a>
<li><strong>Reply:</strong> <a href="22586.php">Ralph Castain: "Re: [OMPI users] problems with rankfile in openmpi-1.9a1r29097"</a>
<li><strong>Maybe reply:</strong> <a href="22589.php">Siegmar Gross: "Re: [OMPI users] problems with rankfile in openmpi-1.9a1r29097"</a>
<li><strong>Maybe reply:</strong> <a href="22590.php">Siegmar Gross: "Re: [OMPI users] problems with rankfile in openmpi-1.9a1r29097"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I installed openmpi-1.9a1r29097 on &quot;openSuSE Linux 12.1&quot;, &quot;Solaris 10
<br>
x86_64&quot;, and &quot;Solaris 10 sparc&quot; with &quot;Sun C 5.12&quot; in 64-bit mode.
<br>
Unfortunately I still have a problem with rankfiles. I reported the
<br>
problems already in May. I show the problems with Linux, although I
<br>
have the same problems on all Solaris machines as well.
<br>
<p>linpc1 rankfiles 99 cat rf_linpc1
<br>
# mpiexec -report-bindings -rf rf_linpc1 hostname
<br>
rank 0=linpc1 slot=0:0-1,1:0-1
<br>
<p>linpc1 rankfiles 100 mpiexec -report-bindings -rf rf_linpc1 hostname
<br>
[linpc1:23413] MCW rank 0 bound to socket 0[core 0[hwt 0]],
<br>
&nbsp;&nbsp;socket 0[core 1[hwt 0]]: [B/B][./.]
<br>
linpc1
<br>
<p><p>linpc1 rankfiles 101 cat rf_ex_linpc
<br>
# mpiexec -report-bindings -rf rf_ex_linpc hostname
<br>
rank 0=linpc0 slot=0:0-1,1:0-1
<br>
rank 1=linpc1 slot=0:0-1
<br>
rank 2=linpc1 slot=1:0
<br>
rank 3=linpc1 slot=1:1
<br>
<p>linpc1 rankfiles 102 mpiexec -report-bindings -rf rf_ex_linpc hostname
<br>
--------------------------------------------------------------------------
<br>
The rankfile that was used claimed that a host was either not
<br>
allocated or oversubscribed its slots.  Please review your rank-slot
<br>
assignments and your host allocation to ensure a proper match.  Also,
<br>
some systems may require using full hostnames, such as
<br>
&quot;host1.example.com&quot; (instead of just plain &quot;host1&quot;).
<br>
<p>&nbsp;&nbsp;Host: linpc0
<br>
--------------------------------------------------------------------------
<br>
linpc1 rankfiles 103 
<br>
<p><p><p>I don't have these problems with openmpi-1.6.5a1r28554.
<br>
<p>linpc1 rankfiles 95 ompi_info | grep &quot;Open MPI:&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.6.5a1r28554
<br>
<p>linpc1 rankfiles 95 mpiexec -report-bindings -rf rf_linpc1 hostname
<br>
[linpc1:23583] MCW rank 0 bound to socket 0[core 0-1]
<br>
&nbsp;&nbsp;socket 1[core 0-1]: [B B][B B] (slot list 0:0-1,1:0-1)
<br>
linpc1
<br>
<p><p>linpc1 rankfiles 96 mpiexec -report-bindings -rf rf_ex_linpc hostname
<br>
[linpc1:23585] MCW rank 1 bound to socket 0[core 0-1]:
<br>
&nbsp;&nbsp;[B B][. .] (slot list 0:0-1)
<br>
[linpc1:23585] MCW rank 2 bound to socket 1[core 0]:
<br>
&nbsp;&nbsp;[. .][B .] (slot list 1:0)
<br>
[linpc1:23585] MCW rank 3 bound to socket 1[core 1]:
<br>
&nbsp;&nbsp;[. .][. B] (slot list 1:1)
<br>
linpc1
<br>
linpc1
<br>
linpc1
<br>
[linpc0:10422] MCW rank 0 bound to socket 0[core 0-1] socket 1[core 0-1]:
<br>
&nbsp;&nbsp;[B B][B B] (slot list 0:0-1,1:0-1)
<br>
linpc0
<br>
<p><p>I would be grateful, if somebody can fix the problem. Thank you
<br>
very much for any help in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22586.php">Ralph Castain: "Re: [OMPI users] problems with rankfile in openmpi-1.9a1r29097"</a>
<li><strong>Previous message:</strong> <a href="22584.php">Huangwei: "Re: [OMPI users] mpi_allgatherv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22586.php">Ralph Castain: "Re: [OMPI users] problems with rankfile in openmpi-1.9a1r29097"</a>
<li><strong>Reply:</strong> <a href="22586.php">Ralph Castain: "Re: [OMPI users] problems with rankfile in openmpi-1.9a1r29097"</a>
<li><strong>Maybe reply:</strong> <a href="22589.php">Siegmar Gross: "Re: [OMPI users] problems with rankfile in openmpi-1.9a1r29097"</a>
<li><strong>Maybe reply:</strong> <a href="22590.php">Siegmar Gross: "Re: [OMPI users] problems with rankfile in openmpi-1.9a1r29097"</a>
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
