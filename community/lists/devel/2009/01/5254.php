<?
$subject_val = "Re: [OMPI devel] RFC: sm Latency";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 21 01:30:50 2009" -->
<!-- isoreceived="20090121063050" -->
<!-- sent="Tue, 20 Jan 2009 22:35:01 -0800" -->
<!-- isosent="20090121063501" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: sm Latency" -->
<!-- id="4976C215.1080005_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C59BF3A0.2D637%rlgraham_at_ornl.gov" -->
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
<strong>Date:</strong> 2009-01-21 01:35:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5255.php">Eugene Loh: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>Previous message:</strong> <a href="5253.php">Eugene Loh: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>In reply to:</strong> <a href="5250.php">Richard Graham: "Re: [OMPI devel] RFC: sm Latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5229.php">Graham, Richard L.: "Re: [OMPI devel] RFC: sm Latency"</a>
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
<blockquote cite="midC59BF3A0.2D637%25rlgraham@ornl.gov" type="cite">
  <title>Re: [OMPI devel] RFC: sm Latency</title>
  <font face="Calibri, Verdana, Helvetica, Arial"><span
 style="font-size: 11pt;">On 1/20/09 2:08 PM, "Eugene Loh" &lt;<a
 href="Eugene.Loh@sun.com">Eugene.Loh@sun.com</a>&gt; wrote:<br>
  </span></font>
  <blockquote><font face="Calibri, Verdana, Helvetica, Arial"><span
 style="font-size: 11pt;">Richard Graham wrote: <br>
    </span></font>
    <blockquote><font face="Calibri, Verdana, Helvetica, Arial"><span
 style="font-size: 11pt;"> Re: [OMPI devel] RFC: sm Latency First, the
performance improvements look really nice.<br>
A few questions:<br>
&nbsp;&nbsp;- How much of an abstraction violation does this introduce?<br>
      </span></font></blockquote>
    <font face="Calibri, Verdana, Helvetica, Arial"><span
 style="font-size: 11pt;">Doesn't need to be much of an abstraction
violation at all if, by that, we mean teaching the BTL about the match
header. &nbsp;Just need to make some choices and I flagged that one for
better visibility.<br>
    <br>
&gt;&gt; I really don&#8217;t see how teaching the btl about matching will
help much (it will save a subroutine call). &nbsp;As I understand<br>
&gt;&gt; the proposal you aim to selectively pull items out of the
fifo&#8217;s &#8211; this will break the fifo&#8217;s, as they assume contiguous<br>
&gt;&gt; entries. &nbsp;Logic to manage holes will need to be added.<br>
    </span></font></blockquote>
</blockquote>
No.&nbsp; It's still a FIFO.&nbsp; You look at the tail of the FIFO.&nbsp; If you can
handle what you see there, you pop that item off and handle it.&nbsp; If you
can't, you punt and return control to the ULP, who handles things the
traditional (and heavier-weight) method.&nbsp; If the item of interest isn't
at the tail, you won't see it.<br>
<blockquote cite="midC59BF3A0.2D637%25rlgraham@ornl.gov" type="cite">
  <blockquote><font face="Calibri, Verdana, Helvetica, Arial"><span
 style="font-size: 11pt;"></span></font><font
 face="Calibri, Verdana, Helvetica, Arial"><span
 style="font-size: 11pt;">This looks like the btl needs to start
&#8220;knowing&#8221; about MPI level semantics.<br>
    </span></font><font face="Calibri, Verdana, Helvetica, Arial"><span
 style="font-size: 11pt;">That's one option. &nbsp;There are other options.<br>
    <br>
&gt;&gt; Such as ?<br>
    </span></font></blockquote>
</blockquote>
PML callback.&nbsp; Jeff's question about how much performance (if any) one
loses with callback is a good one.&nbsp; If I were less lazy (and had more
infinite time), I would have tested that before sending out the RFC.&nbsp;
As it was, I wanted to see how much pushback there would be on the
"abstract violation" issue.&nbsp; Enough, it turns out, to try the
experiment.&nbsp; I'll try to test it out and report back.<font
 face="Calibri, Verdana, Helvetica, Arial"><span
 style="font-size: 11pt;"></span></font><font
 face="Calibri, Verdana, Helvetica, Arial"><span
 style="font-size: 11pt;"></span></font><br>
<blockquote cite="midC59BF3A0.2D637%25rlgraham@ornl.gov" type="cite">
  <blockquote><font face="Calibri, Verdana, Helvetica, Arial"><span
 style="font-size: 11pt;"></span></font>
    <blockquote><font face="Calibri, Verdana, Helvetica, Arial"><span
 style="font-size: 11pt;">If you replace the fifo&#8217;s with a single link
list per process in shared memory, with senders to this process adding
match envelopes atomically, with each process reading its own link list
(multiple writers and single reader in non-threaded situation) there
will be only one place to poll, regardless of the number of procs
involved in the run.</span></font></blockquote>
    <font face="Calibri, Verdana, Helvetica, Arial"><span
 style="font-size: 11pt;">
*) Doesn't strike me as a "simple" change.<br>
    </span></font></blockquote>
</blockquote>
Let me be clear that I can see many benefits to this approach and don't
think it's prohibitively hard.&nbsp; So, I'm not trying to shoot this
approach down entirely.&nbsp; I do have the proposed approach implemented,
though, and it seems like a smaller change in behavior from what we
have today, and many of the optimizations are unrelated to polling (and
hence to the "single queue" proposal).<br>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5255.php">Eugene Loh: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>Previous message:</strong> <a href="5253.php">Eugene Loh: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>In reply to:</strong> <a href="5250.php">Richard Graham: "Re: [OMPI devel] RFC: sm Latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5229.php">Graham, Richard L.: "Re: [OMPI devel] RFC: sm Latency"</a>
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
