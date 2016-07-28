<?
$subject_val = "Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 18 10:20:01 2009" -->
<!-- isoreceived="20091118152001" -->
<!-- sent="Wed, 18 Nov 2009 07:20:44 -0800" -->
<!-- isosent="20091118152044" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0" -->
<!-- id="4B0410CC.9020002_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="E1NAhuo-0003Lx-PJ_at_gauvain.u-strasbg.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-18 10:20:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11234.php">Laurin Müller: "Re: [OMPI users] Antw: Re: mpirun not working on more than	 one	 node"</a>
<li><strong>Previous message:</strong> <a href="11232.php">Ralph Castain: "Re: [OMPI users] Antw: Re: mpirun not working on more than one	 node"</a>
<li><strong>In reply to:</strong> <a href="11231.php">Vincent Loechner: "Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11236.php">Ashley Pittman: "Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0"</a>
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
Vincent Loechner wrote:
<blockquote cite="midE1NAhuo-0003Lx-PJ@gauvain.u-strasbg.fr" type="cite">
  <pre wrap="">Bill,
  </pre>
  <blockquote type="cite">
    <pre wrap="">A rather stable production code that has worked with various versions of MPI
on various architectures started hanging with gcc-4.4.2 and openmpi 1.3.33
    </pre>
  </blockquote>
  <pre wrap=""><!---->
Probably this bug :
<a class="moz-txt-link-freetext" href="https://svn.open-mpi.org/trac/ompi/ticket/2043">https://svn.open-mpi.org/trac/ompi/ticket/2043</a>

Waiting for a correction, try adding this option to mpirun :
-mca btl_sm_num_fifos 5</pre>
</blockquote>
Bill, I noticed you updated the ticket.&nbsp; Thank you.&nbsp; I've been working
on this in earnest.&nbsp; Something funny is going on as far as the "memory
model" goes:&nbsp; values when writing to the shared-memory FIFOs go goofy.&nbsp;
Like a FIFO slot that was initialized to be free and still "should be"
free, looks occupied when a writer checks, but it's empty immediately
thereafter even though no one "presumably" has accessed that location.&nbsp;
I almost have a stand-alone program (C only, no OMPI infrastructure)
that demonstrates the problem, but I'm not quite there.&nbsp; Then, it'll
either become evident to me what's wrong or I'll be able to show other
people more easily why I think something is wrong.&nbsp; At this point, I
really have no idea if the problem is GCC 4.4.x or OMPI 1.3.x.<br>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11234.php">Laurin Müller: "Re: [OMPI users] Antw: Re: mpirun not working on more than	 one	 node"</a>
<li><strong>Previous message:</strong> <a href="11232.php">Ralph Castain: "Re: [OMPI users] Antw: Re: mpirun not working on more than one	 node"</a>
<li><strong>In reply to:</strong> <a href="11231.php">Vincent Loechner: "Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11236.php">Ashley Pittman: "Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0"</a>
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
