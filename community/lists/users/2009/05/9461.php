<?
$subject_val = "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 28 14:44:46 2009" -->
<!-- isoreceived="20090528184446" -->
<!-- sent="Thu, 28 May 2009 11:44:39 -0700" -->
<!-- isosent="20090528184439" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] &amp;quot;An error occurred in MPI_Recv&amp;quot; with more than 2 CPU" -->
<!-- id="4A1EDB97.204_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200905281030.06381.gkanis_at_ipta.demokritos.gr" -->
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
<strong>Date:</strong> 2009-05-28 14:44:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9462.php">shan axida: "Re: [OMPI users] How to use Multiple links with OpenMPI??????????????????"</a>
<li><strong>Previous message:</strong> <a href="9460.php">&#214;&#239;&#223;&#226;&#239;&#242; &#202;&#239;&#245;&#234;&#239;&#245;&#226;&#223;&#237;&#231;&#242;: "Re: [OMPI users] OpenMPI installation"</a>
<li><strong>In reply to:</strong> <a href="9455.php">vasilis: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9464.php">vasilis: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<li><strong>Reply:</strong> <a href="9464.php">vasilis: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
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
<blockquote cite="mid200905281030.06381.gkanis@ipta.demokritos.gr"
 type="cite">
  <pre wrap="">On Wednesday 27 of May 2009 8:35:49 pm Eugene Loh wrote:
  </pre>
  <blockquote type="cite">
    <pre wrap="">At the level of this particular e-mail thread, the issue seems to me to
be different.  Results are added together in some arbitrary order and
there are variations on order of 10^-10.  This is not an issue of
numerical stability, but just of bitwise floating-point reproducibility.

And, given that one could fix the order (by using explicit source
processes instead of MPI_ANY_SOURCE), one could "fix" this particular
problem in MPI.
    </pre>
  </blockquote>
  <pre wrap=""><!---->Eugene,
I really do not understand why you insist on the order. Maybe there is 
something subtle about the order that I do not understand. Anyhow, I changed 
the code according to your suggestion.
  </pre>
</blockquote>
The original issue, still reflected by the subject heading of this
e-mail, was that a message overran its receive buffer.&nbsp; That was fixed
by using tags to distinguish different kinds of messages (res, jacob,
row, and col).<br>
<br>
I thought the next problem was the small (10^-10) variations in results
when np&gt;2.&nbsp; In my mind, a plausible explanation for this is that
you're adding the "res_cpu" contributions from all the various
processes to the "res" array in some arbitrary order.&nbsp; The contribution
from rank 0 is added in first, but all the others come in in some
nondeterministic order.&nbsp; Since you're using finite-precision
arithmetic, this can lead to tiny round-off variations.<br>
<br>
If you want to get rid of those minor variations, you have to perform
floating-point arithmetic in a particular order.<br>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9462.php">shan axida: "Re: [OMPI users] How to use Multiple links with OpenMPI??????????????????"</a>
<li><strong>Previous message:</strong> <a href="9460.php">&#214;&#239;&#223;&#226;&#239;&#242; &#202;&#239;&#245;&#234;&#239;&#245;&#226;&#223;&#237;&#231;&#242;: "Re: [OMPI users] OpenMPI installation"</a>
<li><strong>In reply to:</strong> <a href="9455.php">vasilis: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9464.php">vasilis: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<li><strong>Reply:</strong> <a href="9464.php">vasilis: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
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
