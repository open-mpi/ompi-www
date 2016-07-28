<?
$subject_val = "[OMPI users] OpenIB problems";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 21 15:03:02 2007" -->
<!-- isoreceived="20071121200302" -->
<!-- sent="Wed, 21 Nov 2007 15:01:56 -0500" -->
<!-- isosent="20071121200156" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="[OMPI users] OpenIB problems" -->
<!-- id="FC2C3DF1-A4BE-498A-B7E7-3A206B64F18C_at_umich.edu" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] OpenIB problems<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-21 15:01:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4504.php">Mark Dobossy: "Re: [OMPI users] Problems compiling 1.2.4 using Intel Compiler 10.1.006 on Leopard"</a>
<li><strong>Previous message:</strong> <a href="4502.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] openmpi-sessions-userid directories"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4505.php">Brian Dobbins: "Re: [OMPI users] OpenIB problems"</a>
<li><strong>Reply:</strong> <a href="4505.php">Brian Dobbins: "Re: [OMPI users] OpenIB problems"</a>
<li><strong>Maybe reply:</strong> <a href="4552.php">Neeraj Chourasia: "Re: [OMPI users] OpenIB problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We have a user whos code keep failing at a similar point in the  
<br>
code.  The errors (below) would make me think its a fabric problem,  
<br>
but ibcheckerrors is not returning any issues.  He is using  
<br>
openmpi-1.2.0  With OFED on RHEL4,
<br>
<p>Far field AIM propagators require(MB):    1.441955566406250
<br>
Arranging Communication structures for iterative solver...
<br>
Iteratively solving for incidence,frequency            1            1
<br>
[0,1,28][btl_openib_component.c:1199:btl_openib_component_progress]  
<br>
from nyx452.engin.umich.edu to: nyx440.engin.umich.edu error polling  
<br>
HP CQ with status RETRY EXCEEDED ERROR status number 12 for wr_id  
<br>
57567152 opcode 0
<br>
[0,1,9][btl_openib_component.c:1199:btl_openib_component_progress]  
<br>
from nyx457.engin.umich.edu to: nyx439.engin.umich.edu error polling  
<br>
HP CQ with status RETRY EXCEEDED ERROR status number 12 for wr_id  
<br>
59310768 opcode 0
<br>
[0,1,24][btl_openib_component.c:1199:btl_openib_component_progress]  
<br>
from nyx453.engin.umich.edu to: nyx439.engin.umich.edu error polling  
<br>
HP CQ with status RETRY EXCEEDED ERROR status number 12 for wr_id  
<br>
243416944 opcode 0
<br>
[0,1,55][btl_openib_component.c:1199:btl_openib_component_progress]  
<br>
from nyx446.engin.umich.edu to: nyx439.engin.umich.edu error polling  
<br>
LP CQ with status RETRY EXCEEDED ERROR status number 12 for wr_id  
<br>
54465584 opcode 0
<br>
[0,1,60][btl_openib_component.c:1199:btl_openib_component_progress]  
<br>
from nyx444.engin.umich.edu
<br>
<p>The errors for the other jobs die at the same point with similar  
<br>
messages but different hosts. They do all share the same IB switch.
<br>
<p>Pointers?
<br>
<p><p>Brock Palen
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4504.php">Mark Dobossy: "Re: [OMPI users] Problems compiling 1.2.4 using Intel Compiler 10.1.006 on Leopard"</a>
<li><strong>Previous message:</strong> <a href="4502.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] openmpi-sessions-userid directories"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4505.php">Brian Dobbins: "Re: [OMPI users] OpenIB problems"</a>
<li><strong>Reply:</strong> <a href="4505.php">Brian Dobbins: "Re: [OMPI users] OpenIB problems"</a>
<li><strong>Maybe reply:</strong> <a href="4552.php">Neeraj Chourasia: "Re: [OMPI users] OpenIB problems"</a>
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
