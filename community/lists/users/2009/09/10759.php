<?
$subject_val = "Re: [OMPI users] best way to ALLREDUCE multi-dimensional arrays in Fortran?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 24 18:02:49 2009" -->
<!-- isoreceived="20090924220249" -->
<!-- sent="Thu, 24 Sep 2009 15:03:43 -0700" -->
<!-- isosent="20090924220343" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] best way to ALLREDUCE multi-dimensional arrays in Fortran?" -->
<!-- id="4ABBECBF.8030506_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="c615a6650909241444q6116bf7eid334dc9395920a76_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] best way to ALLREDUCE multi-dimensional arrays in Fortran?<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-24 18:03:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10760.php">Pallab Datta: "Re: [OMPI users] [OMPI devel] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
<li><strong>Previous message:</strong> <a href="10758.php">Greg Fischer: "[OMPI users] best way to ALLREDUCE multi-dimensional arrays in Fortran?"</a>
<li><strong>In reply to:</strong> <a href="10758.php">Greg Fischer: "[OMPI users] best way to ALLREDUCE multi-dimensional arrays in Fortran?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10770.php">Greg Fischer: "Re: [OMPI users] best way to ALLREDUCE multi-dimensional arrays in Fortran?"</a>
<li><strong>Reply:</strong> <a href="10770.php">Greg Fischer: "Re: [OMPI users] best way to ALLREDUCE multi-dimensional arrays in Fortran?"</a>
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
Greg Fischer wrote:
<blockquote
 cite="midc615a6650909241444q6116bf7eid334dc9395920a76@mail.gmail.com"
 type="cite">(I apologize in advance for the simplistic/newbie
question.)<br>
  <br>
I'm performing an ALLREDUCE operation on a multi-dimensional array.&nbsp;
This operation is the biggest bottleneck in the code, and I'm wondering
if there's a way to do it more efficiently than what I'm doing now.&nbsp;
Here's a representative example of what's happening:<br>
  <br>
  <span style="font-family: courier new,monospace;">&nbsp;&nbsp; ir=1</span><br
 style="font-family: courier new,monospace;">
  <span style="font-family: courier new,monospace;">&nbsp;&nbsp; do ikl=1,km</span><br
 style="font-family: courier new,monospace;">
  <span style="font-family: courier new,monospace;">&nbsp;&nbsp;&nbsp;&nbsp; do ij=1,jm</span><br
 style="font-family: courier new,monospace;">
  <span style="font-family: courier new,monospace;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; do ii=1,im</span><br
 style="font-family: courier new,monospace;">
  <span style="font-family: courier new,monospace;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
albuf(ir)=array(ii,ij,ikl,nl,0,ng)</span><br
 style="font-family: courier new,monospace;">
  <span style="font-family: courier new,monospace;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ir=ir+1</span><br
 style="font-family: courier new,monospace;">
  <span style="font-family: courier new,monospace;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; enddo</span><br
 style="font-family: courier new,monospace;">
  <span style="font-family: courier new,monospace;">&nbsp;&nbsp;&nbsp;&nbsp; enddo</span><br
 style="font-family: courier new,monospace;">
  <span style="font-family: courier new,monospace;">&nbsp;&nbsp; enddo</span><br
 style="font-family: courier new,monospace;">
  <span style="font-family: courier new,monospace;">&nbsp;&nbsp; agbuf=0.0</span><br
 style="font-family: courier new,monospace;">
  <span style="font-family: courier new,monospace;">&nbsp;&nbsp; call
mpi_allreduce(albuf,agbuf,im*jm*kmloc(coords(2)+1),mpi_real,mpi_sum,ang_com,ierr)</span><br
 style="font-family: courier new,monospace;">
  <span style="font-family: courier new,monospace;">&nbsp;&nbsp; ir=1</span><br
 style="font-family: courier new,monospace;">
  <span style="font-family: courier new,monospace;">&nbsp;&nbsp; do ikl=1,km<br>
  </span><span style="font-family: courier new,monospace;">&nbsp;&nbsp;&nbsp;&nbsp; do
ij=1,jm</span><br style="font-family: courier new,monospace;">
  <span style="font-family: courier new,monospace;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; do ii=1,im</span><br
 style="font-family: courier new,monospace;">
  <span style="font-family: courier new,monospace;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
phim(ii,ij,ikl,nl,0,ng)=agbuf(ir)</span><br
 style="font-family: courier new,monospace;">
  <span style="font-family: courier new,monospace;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ir=ir+1</span><br
 style="font-family: courier new,monospace;">
  <span style="font-family: courier new,monospace;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; enddo</span><br
 style="font-family: courier new,monospace;">
  <span style="font-family: courier new,monospace;">&nbsp;&nbsp;&nbsp;&nbsp; enddo</span><br
 style="font-family: courier new,monospace;">
  <span style="font-family: courier new,monospace;">&nbsp;&nbsp; enddo</span><br>
  <br>
Is there any way to just do this in one fell swoop, rather than
buffering, transmitting, and unbuffering?&nbsp; This operation is looped
over many times.&nbsp; Are there savings to be had here?<br>
</blockquote>
There are three steps here:&nbsp; buffering, transmitting, and unbuffering.&nbsp;
Any idea how the run time is distributed among those three steps?&nbsp;
E.g., if most time is spent in the MPI call, then combining all three
steps into one is unlikely to buy you much... and might even hurt.&nbsp; If
most of the time is spent in the MPI call, then there may be some
tuning of collective algorithms to do.&nbsp; I don't have any experience
doing this with OMPI.&nbsp; I'm just saying it makes some sense to isolate
the problem a little bit more.<br>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10760.php">Pallab Datta: "Re: [OMPI users] [OMPI devel] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
<li><strong>Previous message:</strong> <a href="10758.php">Greg Fischer: "[OMPI users] best way to ALLREDUCE multi-dimensional arrays in Fortran?"</a>
<li><strong>In reply to:</strong> <a href="10758.php">Greg Fischer: "[OMPI users] best way to ALLREDUCE multi-dimensional arrays in Fortran?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10770.php">Greg Fischer: "Re: [OMPI users] best way to ALLREDUCE multi-dimensional arrays in Fortran?"</a>
<li><strong>Reply:</strong> <a href="10770.php">Greg Fischer: "Re: [OMPI users] best way to ALLREDUCE multi-dimensional arrays in Fortran?"</a>
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
