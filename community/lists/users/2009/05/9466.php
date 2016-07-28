<?
$subject_val = "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 29 13:58:01 2009" -->
<!-- isoreceived="20090529175801" -->
<!-- sent="Fri, 29 May 2009 10:57:45 -0700" -->
<!-- isosent="20090529175745" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] &amp;quot;An error occurred in MPI_Recv&amp;quot; with more than 2 CPU" -->
<!-- id="4A202219.4010201_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200905291013.00121.gkanis_at_ipta.demokritos.gr" -->
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
<strong>Subject:</strong> Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-29 13:57:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9467.php">Jeff Layton: "Re: [OMPI users] Problem with 1.3.2 - need tips on debugging"</a>
<li><strong>Previous message:</strong> <a href="9465.php">Jeff Layton: "[OMPI users] Problem with 1.3.2 - need tips on debugging"</a>
<li><strong>In reply to:</strong> <a href="9464.php">vasilis: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9453.php">vasilis: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
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
vasilis wrote:
<blockquote cite="mid200905291013.00121.gkanis@ipta.demokritos.gr"
 type="cite">
  <blockquote type="cite">
    <pre wrap=""> The original issue, still reflected by the subject heading of this e-mail,
was that a message overran its receive buffer.  That was fixed by using
tags to distinguish different kinds of messages (res, jacob, row, and col).

 I thought the next problem was the small (10^-10) variations in results
when np&gt;2.  In my mind, a plausible explanation for this is that you're
adding the "res_cpu" contributions from all the various processes to the
"res" array in some arbitrary order.  The contribution from rank 0 is added
in first, but all the others come in in some nondeterministic order.  Since
you're using finite-precision arithmetic, this can lead to tiny round-off
variations.

 If you want to get rid of those minor variations, you have to perform
floating-point arithmetic in a particular order.
    </pre>
  </blockquote>
  <pre wrap=""><!---->Unfortunately it did not work. I replaced the "MPI_ANY_SOURCE"  with "JW" but 
I did not see any difference.
  </pre>
</blockquote>
First, I may not understand what the problem is.&nbsp; I guess at np&gt;2,
you see small (10^-10) variations in results.&nbsp; Is that from run-to-run
or just from np=4 compared to np=2.<br>
<br>
10^-10 variations in floating-point results sounds like floating-point
roundoff.&nbsp; To get bitwise fp reproducibility, you need to execute
arithmetic operations in a fixed order (among other conditions).&nbsp;
That's why I suggested fixing the order of the res += sum(res_cpu)
computation.&nbsp; But that doesn't guarantee you've succeeded.&nbsp; If you
decompose the problem among multiple processes, that could change
results.&nbsp; E.g., if you do sums within each process before summing
results from different processes, then the number of processes will
impact your fp bitwise reproducibility.<br>
<br>
Good luck.&nbsp; You might have to come up with criteria for judging an
answer "correct" or "incorrect" rather than simply comparing bit-by-bit
to a previous fp result.<br>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9467.php">Jeff Layton: "Re: [OMPI users] Problem with 1.3.2 - need tips on debugging"</a>
<li><strong>Previous message:</strong> <a href="9465.php">Jeff Layton: "[OMPI users] Problem with 1.3.2 - need tips on debugging"</a>
<li><strong>In reply to:</strong> <a href="9464.php">vasilis: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9453.php">vasilis: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
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
