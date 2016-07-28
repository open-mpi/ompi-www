<?
$subject_val = "Re: [OMPI users] SHARED Memory----------------";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 23 01:08:42 2009" -->
<!-- isoreceived="20090423050842" -->
<!-- sent="Wed, 22 Apr 2009 22:08:33 -0700" -->
<!-- isosent="20090423050833" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SHARED Memory----------------" -->
<!-- id="49EFF7D1.80203_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="783934.81376.qm_at_web62007.mail.re1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] SHARED Memory----------------<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-23 01:08:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9047.php">shan axida: "Re: [OMPI users] SHARED Memory----------------"</a>
<li><strong>Previous message:</strong> <a href="9045.php">shan axida: "Re: [OMPI users] SHARED Memory----------------"</a>
<li><strong>In reply to:</strong> <a href="9045.php">shan axida: "Re: [OMPI users] SHARED Memory----------------"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9047.php">shan axida: "Re: [OMPI users] SHARED Memory----------------"</a>
<li><strong>Reply:</strong> <a href="9047.php">shan axida: "Re: [OMPI users] SHARED Memory----------------"</a>
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
shan axida wrote:
<blockquote cite="mid783934.81376.qm@web62007.mail.re1.yahoo.com"
 type="cite">
  <style type="text/css"><!-- DIV {margin:0px;} --></style>
  <div
 style="font-family: 'times new roman','new york',times,serif; font-size: 12pt; color: black;">What
I am asking is if I use MPI_Send and MPI_Recv between processes in&nbsp;
  <div>a node, does it mean using shared memory or not?</div>
  </div>
</blockquote>
It (typically) does.&nbsp; (Some edge cases could occur.)&nbsp; Your question is
addressed by the FAQ I mentioned.<br>
<blockquote cite="mid783934.81376.qm@web62007.mail.re1.yahoo.com"
 type="cite">
  <div
 style="font-family: 'times new roman','new york',times,serif; font-size: 12pt; color: black;">
  <div> if not, how to use&nbsp;</div>
  <div>shared memory among processes which are runing in a node?</div>
________________________________<br>
  <div>From: Eugene Loh <a class="moz-txt-link-rfc2396E" href="mailto:Eugene.Loh@sun.com">&lt;Eugene.Loh@sun.com&gt;</a><br>
To: Open MPI Users <a class="moz-txt-link-rfc2396E" href="mailto:users@open-mpi.org">&lt;users@open-mpi.org&gt;</a><br>
Sent: Thursday, April 23, 2009 1:20:05 PM<br>
Subject: Re: [OMPI users] SHARED Memory----------------<br>
  <br>
Just to clarify (since "send to self" strikes me as confusing)...<br>
  <br>
If you're talking about using shared memory for point-to-point MPI<br>
message passing, OMPI typically uses it automatically between two<br>
processes on the same node.&nbsp; It is *not* used for a process sending to<br>
itself.&nbsp; There is a well-written FAQ (in my arrogant opinion!) at<br>
  <a target="_blank" href="http://www.open-mpi.org/faq/?category=sm">http://www.open-mpi.org/faq/?category=sm</a>
-- e.g.,<br>
  <a target="_blank"
 href="http://www.open-mpi.org/faq/?category=sm#sm-btl">http://www.open-mpi.org/faq/?category=sm#sm-btl</a>
.<br>
  <br>
If you're talking about some other use of shared memory, let us know<br>
what you had in mind.<br>
  <br>
Elvedin Trnjanin wrote: <br>
Shared memory is used for send-to-self scenarios such as if you're<br>
making use of multiple slots on the same machine.<br>
  <br>
shan axida wrote: <br>
Any body know how to make use of shared memory in OpenMPI<br>
implementation?</div>
  </div>
</blockquote>
<br>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9047.php">shan axida: "Re: [OMPI users] SHARED Memory----------------"</a>
<li><strong>Previous message:</strong> <a href="9045.php">shan axida: "Re: [OMPI users] SHARED Memory----------------"</a>
<li><strong>In reply to:</strong> <a href="9045.php">shan axida: "Re: [OMPI users] SHARED Memory----------------"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9047.php">shan axida: "Re: [OMPI users] SHARED Memory----------------"</a>
<li><strong>Reply:</strong> <a href="9047.php">shan axida: "Re: [OMPI users] SHARED Memory----------------"</a>
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
