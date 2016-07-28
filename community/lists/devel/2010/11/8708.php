<?
$subject_val = "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 23 17:45:22 2010" -->
<!-- isoreceived="20101123224522" -->
<!-- sent="Tue, 23 Nov 2010 14:45:10 -0800" -->
<!-- isosent="20101123224510" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang" -->
<!-- id="4CEC43F6.1040906_at_oracle.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1290551384.24821.30.camel_at_godzilla" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-23 17:45:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8709.php">Eugene Loh: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>Previous message:</strong> <a href="8707.php">S&#233;bastien Boisvert: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>In reply to:</strong> <a href="8704.php">S&#233;bastien Boisvert: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<!-- nextthread="start" -->
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
S&eacute;bastien Boisvert wrote:
<blockquote cite="mid1290551384.24821.30.camel@godzilla" type="cite">
  <pre wrap="">Le mardi 23 novembre 2010 &agrave; 16:07 -0500, Eugene Loh a &eacute;crit :
  </pre>
  <blockquote type="cite">
    <pre wrap="">S&eacute;bastien Boisvert wrote:
    </pre>
    <blockquote type="cite">
      <pre wrap="">Case 1: 30 MPI ranks, message size is 4096 bytes

File: mpirun-np-30-Program-4096.txt
Outcome: It hangs -- I killed the poor thing after 30 seconds or so.
      </pre>
    </blockquote>
    <pre wrap="">4096 is rendezvous.  For eager, try 4000 or lower.
    </pre>
  </blockquote>
  <pre wrap=""><!---->According to ompi_info, the threshold is 4096, not 4000, right ?
  </pre>
</blockquote>
Right.<br>
<blockquote cite="mid1290551384.24821.30.camel@godzilla" type="cite">
  <pre wrap="">"btl_sm_eager_limit: Below this size, messages are sent "eagerly" --
that is, a sender attempts to write its entire message to shared buffers
without waiting for a receiver to be ready. Above this size, a sender
will only write the first part of a message, then wait for the receiver
to acknowledge its ready before continuing. Eager sends can improve
performance by decoupling senders from receivers."

source:
<span class="moz-txt-citetags"></span><a class="moz-txt-link-freetext"
 href="http://www.open-mpi.org/faq/?category=sm#more-sm">http://www.open-mpi.org/faq/?category=sm#more-sm
</a>
It should say "Below this size or equal to this size" instead of "Below
this size" as ompi_info says. ;)
  </pre>
</blockquote>
Well, I guess it should say:<br>
<br>
If message data plus header information fits within this limit, the
message is sent "eagerly"...<br>
<br>
I guess I'll fix it.&nbsp; (I suspect I wrote it in the first place.&nbsp; Sigh.)<br>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8709.php">Eugene Loh: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>Previous message:</strong> <a href="8707.php">S&#233;bastien Boisvert: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>In reply to:</strong> <a href="8704.php">S&#233;bastien Boisvert: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<!-- nextthread="start" -->
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
