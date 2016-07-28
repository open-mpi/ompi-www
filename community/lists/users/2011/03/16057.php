<?
$subject_val = "Re: [OMPI users] Shared Memory Performance Problem.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 30 13:08:15 2011" -->
<!-- isoreceived="20110330170815" -->
<!-- sent="Wed, 30 Mar 2011 09:08:08 -0800" -->
<!-- isosent="20110330170808" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Shared Memory Performance Problem." -->
<!-- id="4D936378.2070702_at_oracle.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTi=zwUGPPEEZ8n1=8iLqmUg=pdE8ex+67miv89xF_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Shared Memory Performance Problem.<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-30 13:08:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16058.php">Tim Prince: "Re: [OMPI users] Shared Memory Performance Problem."</a>
<li><strong>Previous message:</strong> <a href="16056.php">Michele Marena: "Re: [OMPI users] Shared Memory Performance Problem."</a>
<li><strong>In reply to:</strong> <a href="16056.php">Michele Marena: "Re: [OMPI users] Shared Memory Performance Problem."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16058.php">Tim Prince: "Re: [OMPI users] Shared Memory Performance Problem."</a>
<li><strong>Reply:</strong> <a href="16058.php">Tim Prince: "Re: [OMPI users] Shared Memory Performance Problem."</a>
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
Michele Marena wrote:
<blockquote
 cite="midAANLkTi=zwUGPPEEZ8n1=8iLqmUg=pdE8ex+67miv89xF@mail.gmail.com"
 type="cite">I've launched my app with mpiP both when two processes are
on different node and when two processes are on the same node.
  <div><br>
  </div>
  <div>The process 0 is the manager (gathers the results only),
processes 1 and 2 are &nbsp;workers (compute).</div>
  <div><br>
  </div>
  <div>This is the case processes 1 and 2 are on different nodes (runs
in 162s).</div>
  <div>
  <div>@--- MPI Time (seconds)
---------------------------------------------------</div>
  <div>Task &nbsp; &nbsp;AppTime &nbsp; &nbsp;MPITime &nbsp; &nbsp; MPI%</div>
  <div>&nbsp;&nbsp; 0 &nbsp; &nbsp; &nbsp; &nbsp;162 &nbsp; &nbsp; &nbsp; &nbsp;162 &nbsp; &nbsp;99.99</div>
  <div>&nbsp;&nbsp; 1 &nbsp; &nbsp; &nbsp; &nbsp;162 &nbsp; &nbsp; &nbsp; 30.2 &nbsp; &nbsp;18.66</div>
  <div>&nbsp;&nbsp; 2 &nbsp; &nbsp; &nbsp; &nbsp;162 &nbsp; &nbsp; &nbsp; 14.7 &nbsp; &nbsp; 9.04</div>
  <div>&nbsp;&nbsp; * &nbsp; &nbsp; &nbsp; &nbsp;486 &nbsp; &nbsp; &nbsp; &nbsp;207 &nbsp; &nbsp;42.56</div>
  <div><br>
  </div>
  <div>The case when processes 1 and 2 are on the same node (runs in
260s).</div>
  <div>
  <div>@--- MPI Time (seconds)
---------------------------------------------------</div>
  <div>Task &nbsp; &nbsp;AppTime &nbsp; &nbsp;MPITime &nbsp; &nbsp; MPI%</div>
  <div>&nbsp;&nbsp; 0 &nbsp; &nbsp; &nbsp; &nbsp;260 &nbsp; &nbsp; &nbsp; &nbsp;260 &nbsp; &nbsp;99.99</div>
  <div>&nbsp;&nbsp; 1 &nbsp; &nbsp; &nbsp; &nbsp;260 &nbsp; &nbsp; &nbsp; 39.7 &nbsp; &nbsp;15.29</div>
  <div>&nbsp;&nbsp; 2 &nbsp; &nbsp; &nbsp; &nbsp;260 &nbsp; &nbsp; &nbsp; 26.4 &nbsp; &nbsp;10.17</div>
  <div>&nbsp;&nbsp; * &nbsp; &nbsp; &nbsp; &nbsp;779 &nbsp; &nbsp; &nbsp; &nbsp;326 &nbsp; &nbsp;41.82</div>
  </div>
  <div><br>
  </div>
  <div>I think there's a contention problem on the memory bus.</div>
  </div>
</blockquote>
Right.&nbsp; Process 0 spends all its time in MPI, presumably waiting on
workers.&nbsp; The workers spend about the same amount of time on MPI
regardless of whether they're placed together or not.&nbsp; The big
difference is that the workers are much slower in non-MPI tasks when
they're located on the same node.&nbsp; The issue has little to do with
MPI.&nbsp; The workers are hogging local resources and work faster when
placed on different nodes.<br>
<blockquote
 cite="midAANLkTi=zwUGPPEEZ8n1=8iLqmUg=pdE8ex+67miv89xF@mail.gmail.com"
 type="cite">
  <div>
  <div>However, the message size is 4096 * sizeof(double). Maybe I are
wrong in this point. Is the message size too huge for shared memory?</div>
  </div>
</blockquote>
No.&nbsp; That's not very large at all.<br>
<blockquote
 cite="midAANLkTi=zwUGPPEEZ8n1=8iLqmUg=pdE8ex+67miv89xF@mail.gmail.com"
 type="cite">
  <div>
  <div class="gmail_quote">
  <blockquote class="gmail_quote"
 style="border-left: 1px solid rgb(204, 204, 204); margin: 0pt 0pt 0pt 0.8ex; padding-left: 1ex;">
    <div>
    <div class="h5">&gt;&gt;&gt; On Mar 27, 2011, at 10:33 AM, Ralph
Castain wrote:<br>
&gt;&gt;&gt;<br>
&gt;&gt;&gt; &gt;<a
 href="http://www.open-mpi.org/faq/?category=perftools" target="_blank">http://www.open-mpi.org/faq/?category=perftools</a></div>
    </div>
  </blockquote>
  </div>
  </div>
</blockquote>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16058.php">Tim Prince: "Re: [OMPI users] Shared Memory Performance Problem."</a>
<li><strong>Previous message:</strong> <a href="16056.php">Michele Marena: "Re: [OMPI users] Shared Memory Performance Problem."</a>
<li><strong>In reply to:</strong> <a href="16056.php">Michele Marena: "Re: [OMPI users] Shared Memory Performance Problem."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16058.php">Tim Prince: "Re: [OMPI users] Shared Memory Performance Problem."</a>
<li><strong>Reply:</strong> <a href="16058.php">Tim Prince: "Re: [OMPI users] Shared Memory Performance Problem."</a>
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
