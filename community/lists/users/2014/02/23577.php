<?
$subject_val = "[OMPI users] one more problem with process bindings";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb  9 15:42:29 2014" -->
<!-- isoreceived="20140209204229" -->
<!-- sent="Sun, 9 Feb 2014 21:42:06 +0100 (CET)" -->
<!-- isosent="20140209204206" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] one more problem with process bindings" -->
<!-- id="201402092042.s19Kg5GR003963_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] one more problem with process bindings<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-09 15:42:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23578.php">Siegmar Gross: "Re: [OMPI users] warnings and anachronisms in openmpi-1.7.4"</a>
<li><strong>Previous message:</strong> <a href="23576.php">Siegmar Gross: "Re: [OMPI users] rankfiles in openmpi-1.7.4"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have one more problem with process bindings (both machines use
<br>
Solaris 10 with Sparc processors).
<br>
<p>tyr hello_1 149 which mpicc
<br>
/usr/local/openmpi-1.7.4_64_cc/bin/mpicc
<br>
tyr hello_1 150 mpicc environ_mpi.c 
<br>
tyr hello_1 151 mpiexec -np 2 --host rs1 a.out
<br>
tyr hello_1 152 
<br>
<p><p>Do you have any ideas about the reason, why I don't get any output?
<br>
I have no problem with openmpi-1.6.5 as you can see below.
<br>
<p>tyr hello_1 107 which mpicc
<br>
/usr/local/openmpi-1.6.5_64_cc/bin/mpicc
<br>
tyr hello_1 108 mpicc environ_mpi.c 
<br>
tyr hello_1 109 mpiexec -np 2 --host rs1 a.out
<br>
<p>Now 1 slave tasks are sending their environment.
<br>
Environment from task 1:
<br>
&nbsp;&nbsp;message type:        3
<br>
&nbsp;&nbsp;msg length:          3655 characters
<br>
&nbsp;&nbsp;message:             
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hostname:          rs1.informatik.hs-fulda.de
<br>
&nbsp;&nbsp;&nbsp;&nbsp;operating system:  SunOS
<br>
&nbsp;&nbsp;&nbsp;&nbsp;release:           5.10
<br>
&nbsp;&nbsp;&nbsp;&nbsp;processor:         sun4u
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PATH
<br>
...
<br>
<p><p>Thank you very much for any help in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23578.php">Siegmar Gross: "Re: [OMPI users] warnings and anachronisms in openmpi-1.7.4"</a>
<li><strong>Previous message:</strong> <a href="23576.php">Siegmar Gross: "Re: [OMPI users] rankfiles in openmpi-1.7.4"</a>
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
