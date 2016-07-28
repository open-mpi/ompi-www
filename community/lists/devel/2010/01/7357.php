<?
$subject_val = "Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 25 14:26:29 2010" -->
<!-- isoreceived="20100125192629" -->
<!-- sent="Mon, 25 Jan 2010 11:28:14 -0800" -->
<!-- isosent="20100125192814" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)" -->
<!-- id="4B5DF0CE.3080201_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="E2DAB356-F6BF-484B-A1B4-838CF60C01BB_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-25 14:28:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7358.php">Jeff Squyres: "Re: [OMPI devel] PML csum: checksum for RDMA transfers?"</a>
<li><strong>Previous message:</strong> <a href="7356.php">Jeff Squyres: "Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)"</a>
<li><strong>In reply to:</strong> <a href="7356.php">Jeff Squyres: "Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7324.php">Sylvain Jeaugey: "Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)"</a>
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
Jeff Squyres wrote:
<blockquote cite="midE2DAB356-F6BF-484B-A1B4-838CF60C01BB@cisco.com"
 type="cite">
  <pre wrap="">On Jan 17, 2010, at 12:13 PM, Ashley Pittman wrote:
  </pre>
  <blockquote type="cite">
    <pre wrap="">It is something bear in mind when analysing application performance and diagnosing memory problems with applications, a FAQ entry should be considered the minimum IMHO.
    </pre>
  </blockquote>
  <pre wrap=""><!---->What, specifically, do you think we should put in the FAQ?
(it's easy to add stuff to the FAQ; it's more difficult to decide exactly what should be there)
  </pre>
</blockquote>
One possibility is to have a section that discusses how different MPI
implementations may differ in performance in "non-MPI" kinds of ways.&nbsp;
E.g.,<br>
<br>
*) Some MPI implementations add optimization flags to their
mpicc/mpif90 wrappers by default.&nbsp; So, default compilation with one MPI
gives you optimization, while another does not.<br>
<br>
*) Different MPI implementations have different default process binding
behaviors.<br>
<br>
*) This whole MALLOC issue.<br>
<br>
Arguably, these issues aren't inherent to MPI.&nbsp; They are general HPC
performance tuning considerations.&nbsp; It's a slippery slope to get into
these issues (our users care about performance and these things are
important to performance, therefore we should tell our users about
these things, but where do we stop?).&nbsp; On the other hand, given that
these are knobs that various MPI implementations touch (and touch in
different ways), they may make sense for us to discuss.<br>
<br>
Looking into some such FAQ additions is on one of my "to do" lists, but
I'm not territorial and can't promise if/when I would get to any of
this.<br>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7358.php">Jeff Squyres: "Re: [OMPI devel] PML csum: checksum for RDMA transfers?"</a>
<li><strong>Previous message:</strong> <a href="7356.php">Jeff Squyres: "Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)"</a>
<li><strong>In reply to:</strong> <a href="7356.php">Jeff Squyres: "Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7324.php">Sylvain Jeaugey: "Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)"</a>
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
