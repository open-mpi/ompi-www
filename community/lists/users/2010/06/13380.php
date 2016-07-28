<?
$subject_val = "[OMPI users] subnet specification for MPI when multiple networks are present";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 22 16:43:46 2010" -->
<!-- isoreceived="20100622204346" -->
<!-- sent="Tue, 22 Jun 2010 15:43:41 -0500" -->
<!-- isosent="20100622204341" -->
<!-- name="Rahul Nabar" -->
<!-- email="rpnabar_at_[hidden]" -->
<!-- subject="[OMPI users] subnet specification for MPI when multiple networks are present" -->
<!-- id="AANLkTilfG-68QRaU2PbuMUsStQhZRHNVWVDV_IYVVA2B_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] subnet specification for MPI when multiple networks are present<br>
<strong>From:</strong> Rahul Nabar (<em>rpnabar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-22 16:43:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13381.php">Mihaly Mezei: "[OMPI users] Fortran - MPI_WORLD_COMM"</a>
<li><strong>Previous message:</strong> <a href="13379.php">Riccardo Murri: "Re: [OMPI users] Cannot start (WAS: Segmentation fault / Address not mapped (1) with 2-node job on Rocks 5.2)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have compute-nodes with twin eth interfaces 1GigE and 10GigE. In the
<br>
OpenMPI docs I found an instruction:
<br>
<p>&quot; It is therefore very important that if active ports on the same host
<br>
are on physically separate fabrics, they must have different subnet
<br>
IDs.&quot;
<br>
<p>Is this the same &quot;subnet&quot; that is set via an ifconfig e.g. 192.168.x.x
<br>
or 10.0.x.x that I have for my 10Gig and 1Gig networks? Or is this a
<br>
different usage of the term &quot;subnet&quot;?
<br>
<p>The reason I am confused is that it subsequently discusses setting the
<br>
right subnets by using the subnet-managers &quot;opensm&quot; or &quot;Cisco High
<br>
Performance Subnet Manager&quot;. I don't seem to have either of these on
<br>
my system but I have set the subnets via the usual eth and ifcfg
<br>
framework. Is that sufficient?
<br>
<p>[I am using Chelsio 10GigE cards with the OpenIB framework]
<br>
<p><pre>
-- 
Rahul
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13381.php">Mihaly Mezei: "[OMPI users] Fortran - MPI_WORLD_COMM"</a>
<li><strong>Previous message:</strong> <a href="13379.php">Riccardo Murri: "Re: [OMPI users] Cannot start (WAS: Segmentation fault / Address not mapped (1) with 2-node job on Rocks 5.2)"</a>
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
