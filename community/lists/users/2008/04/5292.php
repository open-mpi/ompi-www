<?
$subject_val = "[OMPI users] multi-rail failover with IB";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  2 01:14:02 2008" -->
<!-- isoreceived="20080402051402" -->
<!-- sent="Wed, 2 Apr 2008 01:13:52 -0400" -->
<!-- isosent="20080402051352" -->
<!-- name="Robin Humble" -->
<!-- email="rjh+openmpi_at_[hidden]" -->
<!-- subject="[OMPI users] multi-rail failover with IB" -->
<!-- id="20080402051352.GA693_at_porcupine.cita.utoronto.ca" -->
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
<strong>Subject:</strong> [OMPI users] multi-rail failover with IB<br>
<strong>From:</strong> Robin Humble (<em>rjh+openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-02 01:13:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5293.php">Jon Mason: "Re: [OMPI users] remote host not accessible"</a>
<li><strong>Previous message:</strong> <a href="5291.php">Doug Reeder: "Re: [OMPI users] remote host not accessible"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5296.php">Jeff Squyres: "Re: [OMPI users] multi-rail failover with IB"</a>
<li><strong>Reply:</strong> <a href="5296.php">Jeff Squyres: "Re: [OMPI users] multi-rail failover with IB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>from reading the FAQ and this list it seems OpenMPI can use multiple
<br>
InfiniBand rails by round-robining across the ports out of each node (as
<br>
long as they're configured to be on separate subnets (I think)).
<br>
<p>can OpenMPI also deal with one of the subnets failing?
<br>
ie. will OpenMPI automatically fall back to using the last remaining
<br>
working IB port out of a node, or even fallback to GigE if all the IB
<br>
fails?
<br>
<p>the reason I ask is that we're worried about switches failing in the IB
<br>
network and whether OpenMPI can solve all our problems for us if we
<br>
configure up 2 or more independent IB networks out of each node.
<br>
<p>possibly this sort of failover in the MPI isn't needed with ConnectX as
<br>
long as it's adaptive routing works as advertised? If so then I guess
<br>
it's not that important, and I wouldn't want to make you guys do a lot
<br>
of unecessary work :-)
<br>
<p>the FAQ entry here:
<br>
&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=ft#ft-future">http://www.open-mpi.org/faq/?category=ft#ft-future</a>
<br>
says
<br>
&nbsp;&nbsp;- Data Reliability and network fault tolerance. Similar to those
<br>
&nbsp;&nbsp;&nbsp;&nbsp;implemented in LA-MPI
<br>
but I don't actually know what LA-MPI implemented in this area, so that
<br>
doesn't really help me.
<br>
<p>cheers,
<br>
robin
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5293.php">Jon Mason: "Re: [OMPI users] remote host not accessible"</a>
<li><strong>Previous message:</strong> <a href="5291.php">Doug Reeder: "Re: [OMPI users] remote host not accessible"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5296.php">Jeff Squyres: "Re: [OMPI users] multi-rail failover with IB"</a>
<li><strong>Reply:</strong> <a href="5296.php">Jeff Squyres: "Re: [OMPI users] multi-rail failover with IB"</a>
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
