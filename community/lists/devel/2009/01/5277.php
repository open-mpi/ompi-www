<?
$subject_val = "Re: [OMPI devel] RFC: sm Latency";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 22 12:47:37 2009" -->
<!-- isoreceived="20090122174737" -->
<!-- sent="Thu, 22 Jan 2009 09:51:54 -0800" -->
<!-- isosent="20090122175154" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: sm Latency" -->
<!-- id="4978B23A.8020901_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C59DFB19.2D73F%rlgraham_at_ornl.gov" -->
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
<strong>Date:</strong> 2009-01-22 12:51:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5278.php">Richard Graham: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>Previous message:</strong> <a href="5276.php">Scott Atchley: "Re: [OMPI devel] Still troubles with 1.3 and MX"</a>
<li><strong>In reply to:</strong> <a href="5274.php">Richard Graham: "Re: [OMPI devel] RFC: sm Latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5278.php">Richard Graham: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>Reply:</strong> <a href="5278.php">Richard Graham: "Re: [OMPI devel] RFC: sm Latency"</a>
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
Richard Graham wrote:
<blockquote cite="midC59DFB19.2D73F%25rlgraham@ornl.gov" type="cite">
  <title>Re: [OMPI devel] RFC: sm Latency</title>
  <font face="Calibri, Verdana, Helvetica, Arial"><span
 style="font-size: 11pt;">In the recvi function, do you first try to
match off the unexpected list before you try and match data in the
fifo&#8217;s?<br>
  </span></font></blockquote>
Within the proposed approach, a variety of things are possible.<br>
<br>
Within the specific code I've put back so far, I happen to check the
unexpected list.&nbsp; If it has something on it, the "immediate" receive
reverts to the traditional code path.&nbsp; If the unexpected list is empty,
I proceed on to the FIFO.&nbsp; Again, that's just how the code works that
I've put back so far to the workspace mentioned in the RFC.<br>
<br>
You can let me know why you ask and what behavior you recommend.<br>
<br>
Again, to be quite honest, a lot of my interest here is motivated by
(ping-pong style) benchmarks.&nbsp; I feel dirty just admitting that, but
then I remind myself of all the reports I see of people getting really
bad latencies using OMPI.<br>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5278.php">Richard Graham: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>Previous message:</strong> <a href="5276.php">Scott Atchley: "Re: [OMPI devel] Still troubles with 1.3 and MX"</a>
<li><strong>In reply to:</strong> <a href="5274.php">Richard Graham: "Re: [OMPI devel] RFC: sm Latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5278.php">Richard Graham: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>Reply:</strong> <a href="5278.php">Richard Graham: "Re: [OMPI devel] RFC: sm Latency"</a>
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
