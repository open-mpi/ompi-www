<?
$subject_val = "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 18 12:36:09 2014" -->
<!-- isoreceived="20140818163609" -->
<!-- sent="Mon, 18 Aug 2014 12:36:14 -0400" -->
<!-- isosent="20140818163614" -->
<!-- name="Maxime Boissonneault" -->
<!-- email="maxime.boissonneault_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1" -->
<!-- id="53F22B7E.8030208_at_calculquebec.ca" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAG4F6z8SwvNgrE_vO-7Dy1C__=9aN-B599d0ARz+20f4oFjtVQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1<br>
<strong>From:</strong> Maxime Boissonneault (<em>maxime.boissonneault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-18 12:36:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25053.php">Ralph Castain: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="25051.php">Joshua Ladd: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>In reply to:</strong> <a href="25051.php">Joshua Ladd: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25053.php">Ralph Castain: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>Reply:</strong> <a href="25053.php">Ralph Castain: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here it is
<br>
Le 2014-08-18 12:30, Joshua Ladd a &#233;crit :
<br>
<span class="quotelev1">&gt; mpirun -np 4 --mca plm_base_verbose 10 
</span><br>
[mboisson_at_helios-login1 examples]$ mpirun -np 4 --mca plm_base_verbose 
<br>
10 ring_c
<br>
[helios-login1:27853] mca: base: components_register: registering plm 
<br>
components
<br>
[helios-login1:27853] mca: base: components_register: found loaded 
<br>
component isolated
<br>
[helios-login1:27853] mca: base: components_register: component isolated 
<br>
has no register or open function
<br>
[helios-login1:27853] mca: base: components_register: found loaded 
<br>
component rsh
<br>
[helios-login1:27853] mca: base: components_register: component rsh 
<br>
register function successful
<br>
[helios-login1:27853] mca: base: components_register: found loaded 
<br>
component tm
<br>
[helios-login1:27853] mca: base: components_register: component tm 
<br>
register function successful
<br>
[helios-login1:27853] mca: base: components_open: opening plm components
<br>
[helios-login1:27853] mca: base: components_open: found loaded component 
<br>
isolated
<br>
[helios-login1:27853] mca: base: components_open: component isolated 
<br>
open function successful
<br>
[helios-login1:27853] mca: base: components_open: found loaded component rsh
<br>
[helios-login1:27853] mca: base: components_open: component rsh open 
<br>
function successful
<br>
[helios-login1:27853] mca: base: components_open: found loaded component tm
<br>
[helios-login1:27853] mca: base: components_open: component tm open 
<br>
function successful
<br>
[helios-login1:27853] mca:base:select: Auto-selecting plm components
<br>
[helios-login1:27853] mca:base:select:(  plm) Querying component [isolated]
<br>
[helios-login1:27853] mca:base:select:(  plm) Query of component 
<br>
[isolated] set priority to 0
<br>
[helios-login1:27853] mca:base:select:(  plm) Querying component [rsh]
<br>
[helios-login1:27853] mca:base:select:(  plm) Query of component [rsh] 
<br>
set priority to 10
<br>
[helios-login1:27853] mca:base:select:(  plm) Querying component [tm]
<br>
[helios-login1:27853] mca:base:select:(  plm) Skipping component [tm]. 
<br>
Query failed to return a module
<br>
[helios-login1:27853] mca:base:select:(  plm) Selected component [rsh]
<br>
[helios-login1:27853] mca: base: close: component isolated closed
<br>
[helios-login1:27853] mca: base: close: unloading component isolated
<br>
[helios-login1:27853] mca: base: close: component tm closed
<br>
[helios-login1:27853] mca: base: close: unloading component tm
<br>
[helios-login1:27853] mca: base: close: component rsh closed
<br>
[helios-login1:27853] mca: base: close: unloading component rsh
<br>
[mboisson_at_helios-login1 examples]$ echo $?
<br>
65
<br>
<p><p>Maxime
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25053.php">Ralph Castain: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="25051.php">Joshua Ladd: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>In reply to:</strong> <a href="25051.php">Joshua Ladd: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25053.php">Ralph Castain: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>Reply:</strong> <a href="25053.php">Ralph Castain: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
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
