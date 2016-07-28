<?
$subject_val = "Re: [OMPI users] openMPI, transfer data from multiple sources to one destination";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  5 12:29:01 2009" -->
<!-- isoreceived="20090105172901" -->
<!-- sent="Mon, 05 Jan 2009 09:32:47 -0800" -->
<!-- isosent="20090105173247" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openMPI, transfer data from multiple sources to one destination" -->
<!-- id="4962443F.60108_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BLU149-W170BC60F18C4C2E0A14AE3CBE60_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] openMPI, transfer data from multiple sources to one destination<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-05 12:32:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7634.php">Ethan Mallove: "Re: [OMPI users] Relocating an Open MPI installation using	OPAL_PREFIX"</a>
<li><strong>Previous message:</strong> <a href="7632.php">Gus Correa: "Re: [OMPI users] question running on heterogeneous systems"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/12/7612.php">Jack Bryan: "[OMPI users] openMPI, transfer data from multiple sources to one destination"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
  <meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
  <title></title>
</head>
<body bgcolor="#ffffff" text="#000000">
Jack Bryan wrote:
<blockquote cite="midBLU149-W170BC60F18C4C2E0A14AE3CBE60@phx.gbl"
 type="cite">
  <style>
.hmmessage P
{
margin:0px;
padding:0px
}
body.hmmessage
{
font-size: 10pt;
font-family:Verdana
}
  </style>I need to transfer data from multiple sources to one
destination. <br>
The requirement is:<br>
  <br>
(1) The sources and destination nodes may work asynchronously.<br>
&nbsp;<br>
(2) Each source node generates data package in their own paces.<br>
&nbsp;&nbsp;&nbsp; And, there may be many packages to send. Whenever, a data package <br>
&nbsp;&nbsp;&nbsp; is generated , it should be sent to the desination node at once.<br>
&nbsp;&nbsp;&nbsp; And then, the source node continue to work on generating the next <br>
&nbsp;&nbsp;&nbsp; package. <br>
  <br>
(3) There is only one destination node , which must receive all data <br>
&nbsp;&nbsp;&nbsp; package generated from the source nodes. <br>
&nbsp;&nbsp;&nbsp; Because the source and destination nodes may work asynchronously,<br>
&nbsp;&nbsp;&nbsp; the destination node should not wait for a specific source node
until <br>
&nbsp;&nbsp;&nbsp; the source node sends out its data. <br>
  <br>
&nbsp;&nbsp;&nbsp; The destination node should be able to receive data package <br>
&nbsp;&nbsp;&nbsp; from anyone source node whenever the data package is available in a
  <br>
&nbsp;&nbsp;&nbsp; source node. <br>
  <br>
My question is :<br>
  <br>
What MPI function should be used to implement the protocol above ? <br>
  <br>
If I use MPI_Send/Recv, they are blocking function. The destination<br>
node have to wait for one node until its data is available. <br>
  <br>
The communication overhead is too high. <br>
  <br>
If I use MPI_Bsend, the destination node has to use MPI_Recv to , <br>
a Blocking receive for a message .<br>
  <br>
This can make the destination node wait for only one source node and <br>
actually other source nodes may have data avaiable. <br>
</blockquote>
You've already gotten a number of suggestions, but I thought I'd add my
$0.02 to help you (hopefully) sort them out.<br>
<br>
I agree with Terry that you should read up on MPI_ANY_SOURCE.&nbsp; With
this, you can listen for any source process and use functions like
MPI_Recv or MPI_Irecv.&nbsp; I further agree that you could consider
functions like MPI_Probe or MPI_Iprobe.<br>
<br>
Win's examples don't seem to apply since they implement gathers (one
input from each process) and you explicitly said that no such
regularity can be assumed.<br>
<br>
Biagio's suggestion might be helpful, but also sounds like it might be
overkill.<br>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7634.php">Ethan Mallove: "Re: [OMPI users] Relocating an Open MPI installation using	OPAL_PREFIX"</a>
<li><strong>Previous message:</strong> <a href="7632.php">Gus Correa: "Re: [OMPI users] question running on heterogeneous systems"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/12/7612.php">Jack Bryan: "[OMPI users] openMPI, transfer data from multiple sources to one destination"</a>
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
