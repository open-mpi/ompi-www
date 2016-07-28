<?
$subject_val = "[OMPI users] problem with rankfile";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep  3 15:50:39 2012" -->
<!-- isoreceived="20120903195039" -->
<!-- sent="Mon, 3 Sep 2012 21:43:56 +0200 (CEST)" -->
<!-- isosent="20120903194356" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] problem with rankfile" -->
<!-- id="201209031943.q83Jhtve001566_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] problem with rankfile<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-03 15:43:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20103.php">Ralph Castain: "Re: [OMPI users] problem with rankfile"</a>
<li><strong>Previous message:</strong> <a href="20101.php">Siegmar Gross: "[OMPI users] delimiter in appfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20103.php">Ralph Castain: "Re: [OMPI users] problem with rankfile"</a>
<li><strong>Reply:</strong> <a href="20103.php">Ralph Castain: "Re: [OMPI users] problem with rankfile"</a>
<li><strong>Maybe reply:</strong> <a href="20117.php">Siegmar Gross: "Re: [OMPI users] problem with rankfile"</a>
<li><strong>Maybe reply:</strong> <a href="20128.php">Siegmar Gross: "Re: [OMPI users] problem with rankfile"</a>
<li><strong>Maybe reply:</strong> <a href="20152.php">Siegmar Gross: "Re: [OMPI users] problem with rankfile"</a>
<li><strong>Maybe reply:</strong> <a href="20170.php">Siegmar Gross: "Re: [OMPI users] problem with rankfile"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>the man page for &quot;mpiexec&quot; shows the following:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cat myrankfile
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rank 0=aa slot=1:0-2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rank 1=bb slot=0:0,1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rank 2=cc slot=1-2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun -H aa,bb,cc,dd -rf myrankfile ./a.out So that
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rank 0 runs on node aa, bound to socket 1, cores 0-2.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rank 1 runs on node bb, bound to socket 0, cores 0 and 1.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rank 2 runs on node cc, bound to cores 1 and 2.
<br>
<p>Does it mean that the process with rank 0 should be bound to
<br>
core 0, 1, or 2 of socket 1?
<br>
<p>I tried to use a rankfile and have a problem. My rankfile contains
<br>
the following lines.
<br>
<p>rank 0=tyr.informatik.hs-fulda.de slot=0:0
<br>
rank 1=tyr.informatik.hs-fulda.de slot=1:0
<br>
#rank 2=rs0.informatik.hs-fulda.de slot=0:0
<br>
<p><p>Everything is fine if I use the file with just my local machine
<br>
(the first two lines).
<br>
<p>tyr small_prog 115 mpiexec -report-bindings -rf my_rankfile rank_size
<br>
[tyr.informatik.hs-fulda.de:01133] [[9849,0],0]
<br>
&nbsp;&nbsp;odls:default:fork binding child [[9849,1],0] to slot_list 0:0
<br>
[tyr.informatik.hs-fulda.de:01133] [[9849,0],0]
<br>
&nbsp;&nbsp;odls:default:fork binding child [[9849,1],1] to slot_list 1:0
<br>
I'm process 0 of 2 available processes running on tyr.informatik.hs-fulda.de.
<br>
MPI standard 2.1 is supported.
<br>
I'm process 1 of 2 available processes running on tyr.informatik.hs-fulda.de.
<br>
MPI standard 2.1 is supported.
<br>
tyr small_prog 116 
<br>
<p><p>I can also change the socket number and the processes will be attached
<br>
to the correct cores. Unfortunately it doesn't work if I add one
<br>
other machine (third line).
<br>
<p><p>tyr small_prog 112 mpiexec -report-bindings -rf my_rankfile rank_size
<br>
--------------------------------------------------------------------------
<br>
We were unable to successfully process/set the requested processor
<br>
affinity settings:
<br>
<p>Specified slot list: 0:0
<br>
Error: Cross-device link
<br>
<p>This could mean that a non-existent processor was specified, or
<br>
that the specification had improper syntax.
<br>
--------------------------------------------------------------------------
<br>
[tyr.informatik.hs-fulda.de:01520] [[10212,0],0]
<br>
&nbsp;&nbsp;odls:default:fork binding child [[10212,1],0] to slot_list 0:0
<br>
[tyr.informatik.hs-fulda.de:01520] [[10212,0],0]
<br>
&nbsp;&nbsp;odls:default:fork binding child [[10212,1],1] to slot_list 1:0
<br>
[rs0.informatik.hs-fulda.de:12047] [[10212,0],1]
<br>
&nbsp;&nbsp;odls:default:fork binding child [[10212,1],2] to slot_list 0:0
<br>
[tyr.informatik.hs-fulda.de:01520] [[10212,0],0]
<br>
&nbsp;&nbsp;ORTE_ERROR_LOG: A message is attempting to be sent to a process
<br>
&nbsp;&nbsp;whose contact information is unknown in file
<br>
&nbsp;&nbsp;../../../../../openmpi-1.6/orte/mca/rml/oob/rml_oob_send.c at line 145
<br>
[tyr.informatik.hs-fulda.de:01520] [[10212,0],0] attempted to send
<br>
&nbsp;&nbsp;to [[10212,1],0]: tag 20
<br>
[tyr.informatik.hs-fulda.de:01520] [[10212,0],0] ORTE_ERROR_LOG:
<br>
&nbsp;&nbsp;A message is attempting to be sent to a process whose contact
<br>
&nbsp;&nbsp;information is unknown in file
<br>
&nbsp;&nbsp;../../../../openmpi-1.6/orte/mca/odls/base/odls_base_default_fns.c
<br>
&nbsp;&nbsp;at line 2501
<br>
--------------------------------------------------------------------------
<br>
mpiexec was unable to start the specified application as it
<br>
&nbsp;&nbsp;encountered an error:
<br>
<p>Error name: Error 0
<br>
Node: rs0.informatik.hs-fulda.de
<br>
<p>when attempting to start process rank 2.
<br>
--------------------------------------------------------------------------
<br>
tyr small_prog 113 
<br>
<p><p><p>The other machine has two 8 core processors.
<br>
<p>tyr small_prog 121 ssh rs0 psrinfo -v
<br>
Status of virtual processor 0 as of: 09/03/2012 19:51:15
<br>
&nbsp;&nbsp;on-line since 07/26/2012 15:03:14.
<br>
&nbsp;&nbsp;The sparcv9 processor operates at 2400 MHz,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and has a sparcv9 floating point processor.
<br>
Status of virtual processor 1 as of: 09/03/2012 19:51:15
<br>
...
<br>
Status of virtual processor 15 as of: 09/03/2012 19:51:15
<br>
&nbsp;&nbsp;on-line since 07/26/2012 15:03:16.
<br>
&nbsp;&nbsp;The sparcv9 processor operates at 2400 MHz,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and has a sparcv9 floating point processor.
<br>
tyr small_prog 122 
<br>
<p><p><p>Is it necessary to specify another option on the command line or
<br>
is my rankfile faulty? Thank you very much for any suggestions in
<br>
advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20103.php">Ralph Castain: "Re: [OMPI users] problem with rankfile"</a>
<li><strong>Previous message:</strong> <a href="20101.php">Siegmar Gross: "[OMPI users] delimiter in appfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20103.php">Ralph Castain: "Re: [OMPI users] problem with rankfile"</a>
<li><strong>Reply:</strong> <a href="20103.php">Ralph Castain: "Re: [OMPI users] problem with rankfile"</a>
<li><strong>Maybe reply:</strong> <a href="20117.php">Siegmar Gross: "Re: [OMPI users] problem with rankfile"</a>
<li><strong>Maybe reply:</strong> <a href="20128.php">Siegmar Gross: "Re: [OMPI users] problem with rankfile"</a>
<li><strong>Maybe reply:</strong> <a href="20152.php">Siegmar Gross: "Re: [OMPI users] problem with rankfile"</a>
<li><strong>Maybe reply:</strong> <a href="20170.php">Siegmar Gross: "Re: [OMPI users] problem with rankfile"</a>
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
