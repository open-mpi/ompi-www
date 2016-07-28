<?
$subject_val = "Re: [OMPI users] mpool_sm_max_size disappeared ?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 29 13:51:10 2010" -->
<!-- isoreceived="20101129185110" -->
<!-- sent="Mon, 29 Nov 2010 10:50:41 -0800" -->
<!-- isosent="20101129185041" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpool_sm_max_size disappeared ?" -->
<!-- id="4CF3F601.8060409_at_oracle.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4CF3CBBB.8000606_at_cern.ch" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpool_sm_max_size disappeared ?<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-29 13:50:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14911.php">Jeff Squyres: "Re: [OMPI users] MPI-IO Lustre driver update?"</a>
<li><strong>Previous message:</strong> <a href="14909.php">Maur&#237;cio Rodrigues: "Re: [OMPI users] Help!!!!!!!!!!!!Openmpi instal for ubuntu 64 bits"</a>
<li><strong>In reply to:</strong> <a href="14897.php">Gilbert Grosdidier: "Re: [OMPI users] mpool_sm_max_size disappeared ?"</a>
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
Gilbert Grosdidier wrote:
<blockquote cite="mid4CF3CBBB.8000606@cern.ch" type="cite">
  <meta content="text/html; charset=ISO-8859-1"
 http-equiv="Content-Type">
  <div
 style="direction: ltr; font-family: Tahoma; color: rgb(0, 0, 0); font-size: 10pt;">
  <div>I found this parameter mpool_sm_max_size in this post:</div>
  <div><a moz-do-not-send="true"
 href="http://www.open-mpi.org/community/lists/devel/2008/11/4883.php"
 target="_blank">http://www.open-mpi.org/community/lists/devel/2008/11/4883.php</a></div>
  <div><br>
  </div>
  <div>But I was unable to spot it back into the 'ompi_info -all'
output for v 1.4.3.</div>
  <div>Is it still existing ?</div>
  </div>
</blockquote>
No.<br>
<blockquote cite="mid4CF3CBBB.8000606@cern.ch" type="cite">
  <div
 style="direction: ltr; font-family: Tahoma; color: rgb(0, 0, 0); font-size: 10pt;">
  <div>&nbsp;If not, which other one is replacing it, please ?</div>
  </div>
</blockquote>
It no longer makes any sense.<br>
<br>
Up through OMPI 1.3.1, OMPI made crude estimates of how large the sm
backing file should be.&nbsp; You could limit the actual size with min and
max parameters.&nbsp; The problem was that the estimate was so crude that
often the allocated size was excessively large while in other cases the
size was insufficient to allow the job to start up.&nbsp; After 1.3.1, the
estimate of the size needed to start the job became much more precise.&nbsp;
So, the job should always at least start.&nbsp; You might still want to
employ a "minimum" (to give the sm area some extra room for performance
reasons), but there is no longer any point in have a "maximum" size.&nbsp;
If you were to set a maximum that is smaller than what OMPI needs, the
job wouldn't start anyhow.<br>
<br>
You may find the FAQ useful.&nbsp; Check
<a class="moz-txt-link-freetext" href="http://www.open-mpi.org/faq/?category=sm">http://www.open-mpi.org/faq/?category=sm</a> .&nbsp; There are discussions of
these issues, plus ways of estimating how much room OMPI needs,
therefore also ways of tuning OMPI so that it will need less.&nbsp; E.g., if
you think the sm area is taking up too much space, the FAQ tells you
what parameters to use to make OMPI less space hungry.<br>
<blockquote cite="mid4CF3CBBB.8000606@cern.ch" type="cite">
  <div
 style="direction: ltr; font-family: Tahoma; color: rgb(0, 0, 0); font-size: 10pt;">
  <div>Also, is it possible to specify to OpenMPI</div>
  <div>which filesystem to use for the SM backing file, please ?</div>
  </div>
</blockquote>
Again, check the FAQ.<br>
<a class="moz-txt-link-freetext" href="http://www.open-mpi.org/faq/?category=sm#where-sm-file">http://www.open-mpi.org/faq/?category=sm#where-sm-file</a><br>
<blockquote cite="mid4CF3CBBB.8000606@cern.ch" type="cite">
  <div
 style="direction: ltr; font-family: Tahoma; color: rgb(0, 0, 0); font-size: 10pt;">
  <div>Thanks in advance for any help, &nbsp; Regards, &nbsp; G.</div>
  </div>
  <blockquote
 cite="mid:E7948F0E78136F4EB27B41E5F6B3EE000F9D7E30@PLOXCHG04.cern.ch"
 type="cite">
    <div
 style="direction: ltr; font-family: Tahoma; color: rgb(0, 0, 0); font-size: 10pt;">
    </div>
  </blockquote>
</blockquote>
De rien.<br>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14911.php">Jeff Squyres: "Re: [OMPI users] MPI-IO Lustre driver update?"</a>
<li><strong>Previous message:</strong> <a href="14909.php">Maur&#237;cio Rodrigues: "Re: [OMPI users] Help!!!!!!!!!!!!Openmpi instal for ubuntu 64 bits"</a>
<li><strong>In reply to:</strong> <a href="14897.php">Gilbert Grosdidier: "Re: [OMPI users] mpool_sm_max_size disappeared ?"</a>
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
