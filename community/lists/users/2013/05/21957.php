<?
$subject_val = "[OMPI users] problem with rankfile in openmpi-1.7.2rc3r28550";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 24 03:23:37 2013" -->
<!-- isoreceived="20130524072337" -->
<!-- sent="Fri, 24 May 2013 09:16:52 +0200 (CEST)" -->
<!-- isosent="20130524071652" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] problem with rankfile in openmpi-1.7.2rc3r28550" -->
<!-- id="201305240716.r4O7GqT2021443_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] problem with rankfile in openmpi-1.7.2rc3r28550<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-24 03:16:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21958.php">Siegmar Gross: "[OMPI users] two problems with openmpi-1.9r28534"</a>
<li><strong>Previous message:</strong> <a href="21956.php">Siegmar Gross: "[OMPI users] 64-bit version of openmpi-1.6.5a1r28554 hangs"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>I installed openmpi-1.7.2rc3r28550 on &quot;openSuSE Linux 12.1&quot;, &quot;Solaris 10
<br>
x86_64&quot;, and &quot;Solaris 10 sparc&quot; with &quot;Sun C 5.12&quot; in 32- and 64-bit
<br>
versions. Unfortunately &quot;rank_files&quot; don't work as expected.
<br>
<p><p>sunpc1 rankfiles 109 more rf_ex_sunpc_linpc
<br>
# mpiexec -report-bindings -rf rf_ex_sunpc_linpc hostname
<br>
<p>rank 0=linpc1 slot=0:0-1,1:0-1
<br>
rank 1=sunpc1 slot=0:0-1
<br>
rank 2=sunpc1 slot=1:0
<br>
rank 3=sunpc1 slot=1:1
<br>
<p>sunpc1 rankfiles 110 mpiexec -report-bindings \
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
sunpc1 rankfiles 111 
<br>
<p>sunpc1 rankfiles 111 which mpiexec
<br>
/usr/local/openmpi-1.7_32_cc/bin/mpiexec
<br>
<p><p>I get the same error for my 64-bit version, but I don't have this
<br>
problem with openmpi-1.6.5a1r28554.
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
<p><p><p>I would be grateful, if somebody can fix the problem. Thank you
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
<li><strong>Next message:</strong> <a href="21958.php">Siegmar Gross: "[OMPI users] two problems with openmpi-1.9r28534"</a>
<li><strong>Previous message:</strong> <a href="21956.php">Siegmar Gross: "[OMPI users] 64-bit version of openmpi-1.6.5a1r28554 hangs"</a>
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
