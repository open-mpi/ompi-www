<?
$subject_val = "Re: [OMPI devel] RFC: sm Latency";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 21 19:56:21 2009" -->
<!-- isoreceived="20090122005621" -->
<!-- sent="Wed, 21 Jan 2009 17:00:37 -0800" -->
<!-- isosent="20090122010037" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: sm Latency" -->
<!-- id="4977C535.50101_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20090121234923.GE23005_at_ratbert.sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: sm Latency<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-21 20:00:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5269.php">Matthias Jurenz: "Re: [OMPI devel] VT problems on Debian"</a>
<li><strong>Previous message:</strong> <a href="5267.php">Eugene Loh: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>In reply to:</strong> <a href="5266.php">Ron Brightwell: "Re: [OMPI devel] RFC: sm Latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5274.php">Richard Graham: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>Reply:</strong> <a href="5274.php">Richard Graham: "Re: [OMPI devel] RFC: sm Latency"</a>
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
Ron Brightwell wrote:
<blockquote cite="mid20090121234923.GE23005@ratbert.sandia.gov"
 type="cite">
  <blockquote type="cite">
    <pre wrap="">If you poll only the queue that correspond to a posted receive, you only optimize micro-benchmarks, until they start using ANY_SOURCE.
    </pre>
  </blockquote>
  <pre wrap=""><!---->Note that the HPCC RandomAccess benchmark only uses MPI_ANY_SOURCE (and
MPI_ANY_TAG).
  </pre>
</blockquote>
But HPCC RandomAccess also just uses non-blocking receives.&nbsp; So, it's
kind of outside the scope of the original ideas here (bypassing the PML
receive-request data structure).<br>
<br>
It's possibly not even a poster child for the single-queue idea
either.&nbsp; Single queue probably shines best when you have to poll all
connections for a few messages.&nbsp; In contrast, RandomAccess (I think)
loads all connections up randomly (pseudo-evenly).<br>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5269.php">Matthias Jurenz: "Re: [OMPI devel] VT problems on Debian"</a>
<li><strong>Previous message:</strong> <a href="5267.php">Eugene Loh: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>In reply to:</strong> <a href="5266.php">Ron Brightwell: "Re: [OMPI devel] RFC: sm Latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5274.php">Richard Graham: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>Reply:</strong> <a href="5274.php">Richard Graham: "Re: [OMPI devel] RFC: sm Latency"</a>
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
