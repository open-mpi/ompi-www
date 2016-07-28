<?
$subject_val = "Re: [OMPI users] best way to ALLREDUCE multi-dimensional arrays in Fortran?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep 26 11:10:53 2009" -->
<!-- isoreceived="20090926151053" -->
<!-- sent="Sat, 26 Sep 2009 08:11:47 -0700" -->
<!-- isosent="20090926151147" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] best way to ALLREDUCE multi-dimensional arrays in Fortran?" -->
<!-- id="4ABE2F33.4020804_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="c615a6650909251912g2b00503ta7475cb6dbb8c349_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2009-09-26 11:11:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10777.php">guosong: "[OMPI users] Is there an &quot;flush()&quot;-like function in MPI?"</a>
<li><strong>Previous message:</strong> <a href="10775.php">Jeff Squyres: "Re: [OMPI users] MPI Parent-Child process query"</a>
<li><strong>In reply to:</strong> <a href="10770.php">Greg Fischer: "Re: [OMPI users] best way to ALLREDUCE multi-dimensional arrays in Fortran?"</a>
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
Martin mentioned that you don't need to un/buffer if those array
sections are already contiguous in memory.&nbsp; Or, if they aren't
contiguous in memory but the "ghost" cells or gaps in memory aren't too
big, maybe it's worth including the gaps in the MPI_Allreduce call so
that the array sections effectively become contiguous.&nbsp; Or, you could
send each 1d "pencil" at a time (im elements) at the cost of having
more MPI calls (possibly wins if im is huge and jm*km is small).&nbsp; Or
construct derived datatypes and hope that the MPI implementation
(presumably OMPI) handles this well.&nbsp; Etc.?&nbsp; I think the short answer
is that there are all sorts of things that one could try, but maybe one
should first look at the 85%.&nbsp; Can you in any way estimate how long the
collective operation *should* take?&nbsp; Then, how is that step performing
in comparison?&nbsp; What's limiting performance -- a laggard process
arriving late at the collective?&nbsp; The bisection bandwidth of your
cluster?&nbsp; The overhead of the operation?&nbsp; A poor algorithm?<br>
<br>
Greg Fischer wrote:
<blockquote
 cite="midc615a6650909251912g2b00503ta7475cb6dbb8c349@mail.gmail.com"
 type="cite">It looks like the buffering operations consume about 15%
as much time as the allreduce operations.&nbsp; Not huge, but not trivial,
all the same.&nbsp; Is there any way to avoid the buffering step?<br>
  <br>
  <div class="gmail_quote">On Thu, Sep 24, 2009 at 6:03 PM, Eugene Loh <span
 dir="ltr">&lt;<a href="mailto:Eugene.Loh@sun.com">Eugene.Loh@sun.com</a>&gt;</span>
wrote:<br>
  <blockquote class="gmail_quote"
 style="border-left: 1px solid rgb(204, 204, 204); margin: 0pt 0pt 0pt 0.8ex; padding-left: 1ex;">
    <div bgcolor="#ffffff" text="#000000">
    <div>
    <div class="h5">Greg Fischer wrote:
    <blockquote
 cite="http://midc615a6650909241444q6116bf7eid334dc9395920a76@mail.gmail.com"
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
      <span style="font-family: courier new,monospace;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; do
ii=1,im</span><br style="font-family: courier new,monospace;">
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
      <span style="font-family: courier new,monospace;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; do
ii=1,im</span><br style="font-family: courier new,monospace;">
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
    </div>
    </div>
There are three steps here:&nbsp; buffering, transmitting, and unbuffering.&nbsp;
Any idea how the run time is distributed among those three steps?&nbsp;
E.g., if most time is spent in the MPI call, then combining all three
steps into one is unlikely to buy you much... and might even hurt.&nbsp; If
most of the time is spent in the MPI call, then there may be some
tuning of collective algorithms to do.&nbsp; I don't have any experience
doing this with OMPI.&nbsp; I'm just saying it makes some sense to isolate
the problem a little bit more.<br>
    </div>
  </blockquote>
  </div>
</blockquote>
<br>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10777.php">guosong: "[OMPI users] Is there an &quot;flush()&quot;-like function in MPI?"</a>
<li><strong>Previous message:</strong> <a href="10775.php">Jeff Squyres: "Re: [OMPI users] MPI Parent-Child process query"</a>
<li><strong>In reply to:</strong> <a href="10770.php">Greg Fischer: "Re: [OMPI users] best way to ALLREDUCE multi-dimensional arrays in Fortran?"</a>
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
