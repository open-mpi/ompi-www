<?
$subject_val = "[OMPI users] unknown interface on openmpi-1.8.2a1r31742";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 14 10:46:29 2014" -->
<!-- isoreceived="20140514144629" -->
<!-- sent="Wed, 14 May 2014 16:45:30 +0200 (CEST)" -->
<!-- isosent="20140514144530" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] unknown interface on openmpi-1.8.2a1r31742" -->
<!-- id="201405141445.s4EEjUjc008815_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] unknown interface on openmpi-1.8.2a1r31742<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-14 10:45:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24352.php">Ralph Castain: "Re: [OMPI users] unknown interface on openmpi-1.8.2a1r31742"</a>
<li><strong>Previous message:</strong> <a href="24350.php">Siegmar Gross: "[OMPI users] unknown interface on openmpi-1.9a1r31750"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24352.php">Ralph Castain: "Re: [OMPI users] unknown interface on openmpi-1.8.2a1r31742"</a>
<li><strong>Reply:</strong> <a href="24352.php">Ralph Castain: "Re: [OMPI users] unknown interface on openmpi-1.8.2a1r31742"</a>
<li><strong>Maybe reply:</strong> <a href="24355.php">Siegmar Gross: "Re: [OMPI users] unknown interface on openmpi-1.8.2a1r31742"</a>
<li><strong>Maybe reply:</strong> <a href="24357.php">Siegmar Gross: "Re: [OMPI users] unknown interface on openmpi-1.8.2a1r31742"</a>
<li><strong>Maybe reply:</strong> <a href="24375.php">Siegmar Gross: "Re: [OMPI users] unknown interface on openmpi-1.8.2a1r31742"</a>
<li><strong>Maybe reply:</strong> <a href="24414.php">Siegmar Gross: "Re: [OMPI users] unknown interface on openmpi-1.8.2a1r31742"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I just installed openmpi-1.8.2a1r31742 on my machines (Solaris 10
<br>
Sparc, Solaris 10 x86_64, and openSUSE Linux 12.1 x86_64) with
<br>
Sun C5.12 and still have the following problem.
<br>
<p>tyr fd1026 102 which mpiexec
<br>
/usr/local/openmpi-1.8.2_64_cc/bin/mpiexec
<br>
tyr fd1026 103 mpiexec -np 3 --host tyr,sunpc1,linpc1 hostname
<br>
[tyr.informatik.hs-fulda.de:12827] [[37949,0],0] CONNECTION
<br>
&nbsp;&nbsp;REQUEST ON UNKNOWN INTERFACE
<br>
[tyr.informatik.hs-fulda.de:12827] [[37949,0],0] CONNECTION
<br>
&nbsp;&nbsp;REQUEST ON UNKNOWN INTERFACE
<br>
^CKilled by signal 2.
<br>
Killed by signal 2.
<br>
tyr fd1026 104 
<br>
<p><p>The command works fine with openmpi-1.6.6rc1.
<br>
<p>tyr fd1026 102 which mpiexec
<br>
/usr/local/openmpi-1.6.6_64_cc/bin/mpiexec
<br>
tyr fd1026 103 mpiexec -np 3 --host tyr,sunpc1,linpc1 hostname
<br>
tyr.informatik.hs-fulda.de
<br>
linpc1
<br>
sunpc1
<br>
tyr fd1026 104 
<br>
<p><p>I have reported the problem before and I would be grateful, if
<br>
somebody could solve it. Please let me know if I can provide any
<br>
other information.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24352.php">Ralph Castain: "Re: [OMPI users] unknown interface on openmpi-1.8.2a1r31742"</a>
<li><strong>Previous message:</strong> <a href="24350.php">Siegmar Gross: "[OMPI users] unknown interface on openmpi-1.9a1r31750"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24352.php">Ralph Castain: "Re: [OMPI users] unknown interface on openmpi-1.8.2a1r31742"</a>
<li><strong>Reply:</strong> <a href="24352.php">Ralph Castain: "Re: [OMPI users] unknown interface on openmpi-1.8.2a1r31742"</a>
<li><strong>Maybe reply:</strong> <a href="24355.php">Siegmar Gross: "Re: [OMPI users] unknown interface on openmpi-1.8.2a1r31742"</a>
<li><strong>Maybe reply:</strong> <a href="24357.php">Siegmar Gross: "Re: [OMPI users] unknown interface on openmpi-1.8.2a1r31742"</a>
<li><strong>Maybe reply:</strong> <a href="24375.php">Siegmar Gross: "Re: [OMPI users] unknown interface on openmpi-1.8.2a1r31742"</a>
<li><strong>Maybe reply:</strong> <a href="24414.php">Siegmar Gross: "Re: [OMPI users] unknown interface on openmpi-1.8.2a1r31742"</a>
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
