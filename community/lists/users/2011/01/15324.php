<?
$subject_val = "Re: [OMPI users] mpirun --nice 10 prog ??";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan  7 13:39:41 2011" -->
<!-- isoreceived="20110107183941" -->
<!-- sent="Fri, 07 Jan 2011 10:38:21 -0800" -->
<!-- isosent="20110107183821" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun --nice 10 prog ??" -->
<!-- id="4D275D9D.3030101_at_oracle.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E1PbGLN-0006fT-Gk_at_mendel.bio.caltech.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun --nice 10 prog ??<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-07 13:38:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15325.php">Eugene Loh: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance"</a>
<li><strong>Previous message:</strong> <a href="15323.php">David Mathog: "Re: [OMPI users] mpirun --nice 10 prog ??"</a>
<li><strong>In reply to:</strong> <a href="15323.php">David Mathog: "Re: [OMPI users] mpirun --nice 10 prog ??"</a>
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
David Mathog wrote:
<blockquote cite="midE1PbGLN-0006fT-Gk@mendel.bio.caltech.edu"
 type="cite">
  <pre wrap="">Ralph Castain wrote:
  </pre>
  <blockquote type="cite">
    <pre wrap="">Afraid not - though you could alias your program name to be "nice --10 prog"
    </pre>
  </blockquote>
  <pre wrap=""><!---->Is there an OMPI wish list?  If so, can we please add to it "a method
to tell mpirun  what nice values to use when it starts programs on
nodes"?  Minimally, something like this:

  --nice  12   #nice value used on all nodes
  --mnice 5    #nice value for master (first) node
  --wnice 10   #nice value for worker (worker) nodes

For my purposes that would be enough, as the only distinction is
master/worker.  For more complex environments more flexibility might be
desired, for instance, in a large cluster, where a subset of nodes
integrate data from worker subsets, effectively acting as "local masters".

Obviously for platforms without nice mpirun would try to use whatever
priority scheme was available, and failing that, just run the program as
it does now.

Or are we the only site where quick high priority jobs must run on the
same nodes where long term low priority jobs are also running?
  </pre>
</blockquote>
I'm guessing people might have all sorts of ideas about how they would
want to solve "a problem like this one".<br>
<br>
One is to forbid MPI jobs from competing for the same resources.&nbsp; The
assumption that an MPI process has dedicated use of its resources is
somewhat ingrained into OMPI.<br>
<br>
Checkpoint/restart:&nbsp; if a higher-priority job comes along, kick the
lower-priority job off.<br>
<br>
Yield.&nbsp; This issue comes up often on these lists.&nbsp; That is, don't just
set process priorities high or low, but make them more aggressive when
they're doing useful work and more passive when they're waiting idly.<br>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15325.php">Eugene Loh: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance"</a>
<li><strong>Previous message:</strong> <a href="15323.php">David Mathog: "Re: [OMPI users] mpirun --nice 10 prog ??"</a>
<li><strong>In reply to:</strong> <a href="15323.php">David Mathog: "Re: [OMPI users] mpirun --nice 10 prog ??"</a>
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
