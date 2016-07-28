<?
$subject_val = "[OMPI users] two problems with openmpi-1.9r28534";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 24 03:35:10 2013" -->
<!-- isoreceived="20130524073510" -->
<!-- sent="Fri, 24 May 2013 09:28:15 +0200 (CEST)" -->
<!-- isosent="20130524072815" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] two problems with openmpi-1.9r28534" -->
<!-- id="201305240728.r4O7SFMN021641_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] two problems with openmpi-1.9r28534<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-24 03:28:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21959.php">Ralph Castain: "Re: [OMPI users] 64-bit version of openmpi-1.6.5a1r28554 hangs"</a>
<li><strong>Previous message:</strong> <a href="21957.php">Siegmar Gross: "[OMPI users] problem with rankfile in openmpi-1.7.2rc3r28550"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21960.php">Ralph Castain: "Re: [OMPI users] two problems with openmpi-1.9r28534"</a>
<li><strong>Reply:</strong> <a href="21960.php">Ralph Castain: "Re: [OMPI users] two problems with openmpi-1.9r28534"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>I installed openmpi-1.9r28534 on &quot;openSuSE Linux 12.1&quot;, &quot;Solaris 10
<br>
x86_64&quot;, and &quot;Solaris 10 sparc&quot; with &quot;Sun C 5.12&quot; in 32- and 64-bit
<br>
versions. Unfortunately I have two problems with this version.
<br>
<p><p>sunpc1 hello_1 104 mpiexec -np 3 -host sunpc1,linpc1,rs0 hostname
<br>
[sunpc1:18681] [[19223,0],0] ORTE_ERROR_LOG: Data unpack had
<br>
&nbsp;&nbsp;inadequate space in file
<br>
&nbsp;&nbsp;../../../../openmpi-1.9r28534/orte/mca/plm/base/plm_base_launch_support.c
<br>
&nbsp;&nbsp;at line 854
<br>
<p>sunpc1 hello_1 105 which mpiexec
<br>
/usr/local/openmpi-1.9_64_cc/bin/mpiexec
<br>
sunpc1 hello_1 106 
<br>
<p><p><p>My second problem is, that &quot;rank_files&quot; don't work as expected.
<br>
<p>sunpc1 rankfiles 108 mpiexec -report-bindings \
<br>
&nbsp;&nbsp;-rf rf_ex_sunpc_linpc hostname
<br>
---------------------------------------------------------------------
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
<p>&nbsp;&nbsp;Host: linpc1
<br>
---------------------------------------------------------------------
<br>
sunpc1 rankfiles 109 [linpc1:03952] [[19223,0],1] ORTE_ERROR_LOG:
<br>
&nbsp;&nbsp;Not found in file ../../openmpi-1.9r28534/orte/runtime/orte_globals.c
<br>
&nbsp;&nbsp;at line 488
<br>
[linpc1:03952] [[19223,0],1] -&gt; [[19223,0],0] (node: NULL) oob-tcp:
<br>
&nbsp;&nbsp;Number of attempts to create TCP connection has been exceeded.
<br>
&nbsp;&nbsp;Can not communicate with peer
<br>
<p>sunpc1 rankfiles 109 
<br>
<p><p><p>I don't have this problem with openmpi-1.6.5a1r28554.
<br>
<p>sunpc1 rankfiles 105 mpiexec -report-bindings \
<br>
&nbsp;&nbsp;-rf rf_ex_sunpc_linpc hostname
<br>
[sunpc1:17968] MCW rank 1 bound to socket 0[core 0-1]:
<br>
&nbsp;&nbsp;[B B][. .] (slot list 0:0-1)
<br>
[sunpc1:17968] MCW rank 2 bound to socket 1[core 0]:
<br>
&nbsp;&nbsp;[. .][B .] (slot list 1:0)
<br>
[sunpc1:17968] MCW rank 3 bound to socket 1[core 1]:
<br>
&nbsp;&nbsp;[. .][. B] (slot list 1:1)
<br>
sunpc1
<br>
sunpc1
<br>
sunpc1
<br>
[linpc1:03246] MCW rank 0 bound to socket 0[core 0-1]
<br>
&nbsp;&nbsp;socket 1[core 0-1]: [B B][B B] (slot list 0:0-1,1:0-1)
<br>
linpc1
<br>
<p>sunpc1 rankfiles 106 which mpiexec
<br>
/usr/local/openmpi-1.6.5_32_cc/bin/mpiexec
<br>
sunpc1 rankfiles 107 
<br>
<p><p><p>I would be grateful, if somebody can fix the problems. Thank you
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
<li><strong>Next message:</strong> <a href="21959.php">Ralph Castain: "Re: [OMPI users] 64-bit version of openmpi-1.6.5a1r28554 hangs"</a>
<li><strong>Previous message:</strong> <a href="21957.php">Siegmar Gross: "[OMPI users] problem with rankfile in openmpi-1.7.2rc3r28550"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21960.php">Ralph Castain: "Re: [OMPI users] two problems with openmpi-1.9r28534"</a>
<li><strong>Reply:</strong> <a href="21960.php">Ralph Castain: "Re: [OMPI users] two problems with openmpi-1.9r28534"</a>
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
