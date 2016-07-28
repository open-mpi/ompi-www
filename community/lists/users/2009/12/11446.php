<?
$subject_val = "Re: [OMPI users] Mimicking timeout for MPI_Wait";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec  6 21:41:23 2009" -->
<!-- isoreceived="20091207024123" -->
<!-- sent="Sun, 06 Dec 2009 18:42:55 -0800" -->
<!-- isosent="20091207024255" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mimicking timeout for MPI_Wait" -->
<!-- id="4B1C6BAF.3070701_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20091206135251.GA27795_at_scram" -->
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
<strong>Subject:</strong> Re: [OMPI users] Mimicking timeout for MPI_Wait<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-06 21:42:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11447.php">Sangamesh B: "Re: [OMPI users] Job fails after hours of running on a specific node"</a>
<li><strong>Previous message:</strong> <a href="11445.php">Ralph Castain: "Re: [OMPI users] How to detect a failure to start-up and MPI_Init()?"</a>
<li><strong>In reply to:</strong> <a href="11438.php">Douglas Guptill: "Re: [OMPI users] Mimicking timeout for MPI_Wait"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11426.php">Tim Prince: "Re: [OMPI users] Mimicking timeout for MPI_Wait"</a>
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
Douglas Guptill wrote:
<blockquote cite="mid20091206135251.GA27795@scram" type="cite">
  <pre wrap="">On Sun, Dec 06, 2009 at 02:29:01PM +0200, Katz, Jacob wrote:
  </pre>
  <blockquote type="cite">
    <pre wrap="">Yes, I meant in the question that I was looking for something creative, both fast responding and not using 100% CPU all the time.
I guess I&#8217;m not the first one to face this question. Have anyone done anything &#8220;better&#8221; than the simple solution?
    </pre>
  </blockquote>
  <pre wrap=""><!---->I got tired of seeing both cpus at 100% load, and based on suggestions
from Jeff Squyres and Eugene Loh, wrote MPI_Recv.c and MPI_Send.c.  I
load these with my application, and bingo!  Only one cpu busy at any
given time.

They use a graduated sleep; the first sleep is short, the second is
twice as long, and so on, up to a maximum sleep time.</pre>
</blockquote>
Another option is to use a condition variable -- e.g.,
pthread_cond_wait() and the like.&nbsp; So, there is a certain wake-up time,
but you don't need to tune sleep times or wait for some long sleep
time, etc.<br>
<br>
There is no magic bullet here.&nbsp; It's a matter of tuning various
trade-offs.&nbsp; Some bullets are better than others, but none of them is
magic.&nbsp; :^)<br>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11447.php">Sangamesh B: "Re: [OMPI users] Job fails after hours of running on a specific node"</a>
<li><strong>Previous message:</strong> <a href="11445.php">Ralph Castain: "Re: [OMPI users] How to detect a failure to start-up and MPI_Init()?"</a>
<li><strong>In reply to:</strong> <a href="11438.php">Douglas Guptill: "Re: [OMPI users] Mimicking timeout for MPI_Wait"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11426.php">Tim Prince: "Re: [OMPI users] Mimicking timeout for MPI_Wait"</a>
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
