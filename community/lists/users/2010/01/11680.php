<?
$subject_val = "Re: [OMPI users] Dual quad core Opteron hangs on Bcast.";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  4 09:51:45 2010" -->
<!-- isoreceived="20100104145145" -->
<!-- sent="Mon, 04 Jan 2010 06:53:24 -0800" -->
<!-- isosent="20100104145324" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Dual quad core Opteron hangs on Bcast." -->
<!-- id="4B4200E4.3040803_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4B41926A.3040906_at_math.udel.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Dual quad core Opteron hangs on Bcast.<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-04 09:53:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11681.php">Ake Sandgren: "[OMPI users] openmpi 1.4 and pgi 10"</a>
<li><strong>Previous message:</strong> <a href="11679.php">Eugene Loh: "Re: [OMPI users] Dual quad core Opteron hangs on Bcast."</a>
<li><strong>Maybe in reply to:</strong> <a href="11674.php">Louis Rossi: "[OMPI users] Dual quad core Opteron hangs on Bcast."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11684.php">Matthew MacManes: "Re: [OMPI users] Dual quad core Opteron hangs on Bcast."</a>
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
On 01/04/2010 01:23 AM, Eugene Loh wrote:
<blockquote cite="mid:4B418964.9000402@sun.com" type="cite">1) What
about "-mca coll_sync_barrier_before 100"?&nbsp; (The default may be
1000.&nbsp; So, you can try various values less than 1000.&nbsp; I'm suggesting
100.)&nbsp; Note that broadcast has somewhat one-way traffic flow, which can
have some undesirable flow control issues.<br>
  <br>
2) What about "-mca btl_sm_num_fifos 16"?&nbsp; Default is 1.&nbsp; If the
problem is trac ticket 2043, then this suggestion can help.</blockquote>
Louis Rossi wrote:
<blockquote cite="mid4B41926A.3040906@math.udel.edu" type="cite">
  <meta content="text/html; charset=ISO-8859-1"
 http-equiv="Content-Type">
Hi Eugene,<br>
  <br>
&nbsp; Thank you for replying so quickly.&nbsp; You are right that there is a
memory leak.&nbsp; It's not the source of the problem, but I added a
free(pMessage) to remove the issue.&nbsp; (In my defense, I borrowed a
simple broadcast example off the web and wrapped it in a loop.)<br>
  <br>
&nbsp; Anyway, the great news is that suggestion #2 solved the problem for
the example.&nbsp; (At least it has not failed yet.&nbsp; I'm exercising the
solution on the original larger problem now.)&nbsp; Suggestion #1 did not.&nbsp;
Should I post the resolution to the mailing list or is this a well
known solution?&nbsp; I see this parameter listed under performance tuning
on the ompi site, but only in reference to congestion.&nbsp; There is no
comment that bcasts could hang.<br>
  <br>
&nbsp; Thanks again!<br>
</blockquote>
Louis Rossi wrote:
<blockquote cite="mid4B419A63.8090607@math.udel.edu" type="cite">
  <meta content="text/html; charset=ISO-8859-1"
 http-equiv="Content-Type">
Hi Eugene,<br>
  <br>
&nbsp; OK.&nbsp; You nailed it with suggestion #2.<br>
  <br>
&nbsp; Many thanks,<br>
&nbsp;&nbsp;&nbsp; Lou<br>
</blockquote>
Great.&nbsp; Next time, go ahead and respond to the wider mail alias so that
everyone learns that your particular problem was resolved.<br>
<br>
I will update the trac ticket to point to this as another instance of
this problem.<br>
<br>
One signature of the problem is that GCC 4.4.0 or later exposes the
problem, while earlier revs do not.&nbsp; I can't tell for sure, but it
appears to me that this condition is met with Fedora 11.<br>
<br>
Our understanding of trac 2043 has recently improved immensely.&nbsp; It
would be great if you could confirm the fix.&nbsp; The ticket is at
<a class="moz-txt-link-freetext" href="https://svn.open-mpi.org/trac/ompi/ticket/2043">https://svn.open-mpi.org/trac/ompi/ticket/2043</a> .&nbsp; r22324 should fix the
problem.&nbsp; If you could get that version, build with GCC (presumably
4.4.0 or more recent), then the workaround should no longer be needed.<br>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11681.php">Ake Sandgren: "[OMPI users] openmpi 1.4 and pgi 10"</a>
<li><strong>Previous message:</strong> <a href="11679.php">Eugene Loh: "Re: [OMPI users] Dual quad core Opteron hangs on Bcast."</a>
<li><strong>Maybe in reply to:</strong> <a href="11674.php">Louis Rossi: "[OMPI users] Dual quad core Opteron hangs on Bcast."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11684.php">Matthew MacManes: "Re: [OMPI users] Dual quad core Opteron hangs on Bcast."</a>
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
