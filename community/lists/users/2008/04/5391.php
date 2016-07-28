<?
$subject_val = "[OMPI users] Different Interfaces on Different Nodes .. OpenMPI 1.2.3, 1.2.4 ..";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 14 04:24:59 2008" -->
<!-- isoreceived="20080414082459" -->
<!-- sent="Mon, 14 Apr 2008 18:21:47 +1000" -->
<!-- isosent="20080414082147" -->
<!-- name="Graham Jenkins" -->
<!-- email="Graham.Jenkins_at_[hidden]" -->
<!-- subject="[OMPI users] Different Interfaces on Different Nodes .. OpenMPI 1.2.3, 1.2.4 .." -->
<!-- id="4803141B.1000603_at_its.monash.edu.au" -->
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
<strong>Subject:</strong> [OMPI users] Different Interfaces on Different Nodes .. OpenMPI 1.2.3, 1.2.4 ..<br>
<strong>From:</strong> Graham Jenkins (<em>Graham.Jenkins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-14 04:21:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5392.php">Ralph H Castain: "[OMPI users] FW:  problems with hostfile when doing MPMD"</a>
<li><strong>Previous message:</strong> <a href="5390.php">&#197;ke Sandgren: "Re: [OMPI users] Problems using Intel MKL with OpenMPI and	Pathscale"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5411.php">Tim Prins: "Re: [OMPI users] Different Interfaces on Different Nodes .. OpenMPI 1.2.3, 1.2.4 .."</a>
<li><strong>Reply:</strong> <a href="5411.php">Tim Prins: "Re: [OMPI users] Different Interfaces on Different Nodes .. OpenMPI 1.2.3, 1.2.4 .."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We're moving from using a single (eth0) interface on our execute nodes
<br>
to using a bond interface (bond0) for resilience.
<br>
And what we're seeing on those nodes which have been upgraded is:
<br>
<pre>
--
[0,1,1][btl_tcp_component.c:349:mca_btl_tcp_component_create_instances]
invalid interface &quot;eth0&quot;
--
This of course, is because all nodes share a common copy of
openmpi-mca-params.conf .. in which its says:
--
btl_tcp_if_include=eth0
--
So .. does anybody have a suggestion for a way around this during our
migration/upgrade period?
If we place &quot;bond0&quot; in there as well, then we get error messages about
whichever one is absent on the node where execution is happening.
Regards ..
-- 
Graham Jenkins
Senior Software Specialist, eResearch
Monash University (Clayton Campus, Bldg 11, Rm S503)
Email: Graham.Jenkins_at_[hidden]
Tel:   +613 9905-5942 (office)   +614 4850-2491 (mobile)
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5392.php">Ralph H Castain: "[OMPI users] FW:  problems with hostfile when doing MPMD"</a>
<li><strong>Previous message:</strong> <a href="5390.php">&#197;ke Sandgren: "Re: [OMPI users] Problems using Intel MKL with OpenMPI and	Pathscale"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5411.php">Tim Prins: "Re: [OMPI users] Different Interfaces on Different Nodes .. OpenMPI 1.2.3, 1.2.4 .."</a>
<li><strong>Reply:</strong> <a href="5411.php">Tim Prins: "Re: [OMPI users] Different Interfaces on Different Nodes .. OpenMPI 1.2.3, 1.2.4 .."</a>
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
