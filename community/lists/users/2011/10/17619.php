<?
$subject_val = "[OMPI users] Subnet routing (1.2.x) not working in 1.4.3 anymore";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 25 16:15:17 2011" -->
<!-- isoreceived="20111025201517" -->
<!-- sent="Tue, 25 Oct 2011 22:15:12 +0200" -->
<!-- isosent="20111025201512" -->
<!-- name="Mirco Wahab" -->
<!-- email="mirco.wahab_at_[hidden]" -->
<!-- subject="[OMPI users] Subnet routing (1.2.x) not working in 1.4.3 anymore" -->
<!-- id="4EA718D0.5060005_at_chemie.tu-freiberg.de" -->
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
<strong>Subject:</strong> [OMPI users] Subnet routing (1.2.x) not working in 1.4.3 anymore<br>
<strong>From:</strong> Mirco Wahab (<em>mirco.wahab_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-25 16:15:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17620.php">MM: "Re: [OMPI users] mpirun should run with just the localhost interface on win?"</a>
<li><strong>Previous message:</strong> <a href="17618.php">Josh Hursey: "Re: [OMPI users] Checkpoint from inside MPI program with OpenMPI 1.4.2 ?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In the last few years, it has been very simple to
<br>
set up high-performance (GbE) multiple back-to-back
<br>
connections between three nodes (triangular topology)
<br>
or four nodes (tetrahedral topology).
<br>
<p>The only things you had to do was
<br>
- use 3 (or 4) cheap compute nodes w/Linux and connect
<br>
&nbsp;&nbsp;&nbsp;each of them via standard GbE router (onboard GbE NIC)
<br>
&nbsp;&nbsp;&nbsp;to a file server,
<br>
- put 2 (trigonal topol.) or 3 (tetrahedral topol.)
<br>
&nbsp;&nbsp;&nbsp;$25 PCIe-GbE-NICs into *each* node,
<br>
- connect the nodes with 3 (trigonal) or 4 (tetrahedral)
<br>
&nbsp;&nbsp;&nbsp;short crossover Cat5e cables,
<br>
- configure the extra NICs into different subnets
<br>
&nbsp;&nbsp;&nbsp;according to their &quot;edge index&quot;, eg.
<br>
&nbsp;&nbsp;&nbsp;for 3 nodes (node10, node11, node12)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node10
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;onboard NIC: 192.168.0.10 on eth0 (to router/server)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;extra NIC: 10.0.1.10 on eth1 (edge 1 to 10.0.1.11)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;extra NIC: 10.0.2.10 on eth2 (edge 2 to 10.0.2.12)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node11
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;onboard NIC: 192.168.0.11 on eth0 (to router/server)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;extra NIC: 10.0.1.11 on eth1 (edge 1 to 10.0.1.10)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;extra NIC: 10.0.3.11 on eth3 (edge 3 to 10.0.3.12)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node12
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;onboard NIC: 192.168.0.12 on eth0 (to router/server)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;extra NIC: 10.0.2.12 on eth2 (edge 2 to 10.0.2.10)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;extra NIC: 10.0.3.12 on eth3 (edge 3 to 10.0.3.11)
<br>
- that's it. I mean, that *was* it, with 1.2.x.
<br>
<p>OMPI 1.2.x would then ingeniously discover the routable edges
<br>
and open communication ports accordingly without any additional
<br>
explicit host routing, eg. invoked by
<br>
<p>$&gt; mpirun -np 12 --host c10,c11,c12 --mca btl_tcp_if_exclude lo,eth0  my_mpi_app
<br>
<p>and (measured by iftop) saturate the available edges with
<br>
about 100MB/sec duplex on each of them. It would not stumble
<br>
on the fact, that some interfaces are not reacheable by
<br>
every NIC directly. And this was very convenient over the years.
<br>
<p>With 1.4.3 (which comes out of the box) w/actual Linux distributions,
<br>
this won't work. It would hang and complain after timeout about failed
<br>
endpoint connects, eg:
<br>
<p>[node12][[52378,1],2][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 10.0.1.11 failed: Connection timed out (110)
<br>
<p>* Can the intelligent behaviour of 1.2.x be &quot;configured back&quot;?
<br>
<p>* How should the topology look like to work with 1,4,x painlessly?
<br>
<p>Thanks &amp; regards
<br>
<p>M.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17620.php">MM: "Re: [OMPI users] mpirun should run with just the localhost interface on win?"</a>
<li><strong>Previous message:</strong> <a href="17618.php">Josh Hursey: "Re: [OMPI users] Checkpoint from inside MPI program with OpenMPI 1.4.2 ?"</a>
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
