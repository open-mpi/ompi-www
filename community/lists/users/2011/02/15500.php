<?
$subject_val = "Re: [OMPI users] Calculate time spent on non blocking communication?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  3 01:06:38 2011" -->
<!-- isoreceived="20110203060638" -->
<!-- sent="Wed, 02 Feb 2011 22:05:46 -0800" -->
<!-- isosent="20110203060546" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Calculate time spent on non blocking communication?" -->
<!-- id="4D4A45BA.4060807_at_oracle.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTimtAE0STkuOA8gxy_Y=KByNZyYPXHdYuZHi0EhZ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Calculate time spent on non blocking communication?<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-03 01:05:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15501.php">Page, Andy (UK): "[OMPI users] Windows release 1.5.1"</a>
<li><strong>Previous message:</strong> <a href="15499.php">Bibrak Qamar: "Re: [OMPI users] Calculate time spent on non blocking communication?"</a>
<li><strong>In reply to:</strong> <a href="15499.php">Bibrak Qamar: "Re: [OMPI users] Calculate time spent on non blocking communication?"</a>
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
Okay, so forget about Peruse.<br>
<br>
You can basically figure that your user process will either be inside
an MPI call or else not.&nbsp; If it's inside an MPI call, then that's time
spent in communications (and notably in the synchronization that's
implicit to communication).&nbsp; If it's not inside an MPI call, then
that's time spent in computation.&nbsp; Basically, no time in this model is
attributed to both communication and computation at once.<br>
<br>
There is an OMPI FAQ on performance tools.&nbsp;
<a class="moz-txt-link-freetext" href="http://www.open-mpi.org/faq/?category=perftools">http://www.open-mpi.org/faq/?category=perftools</a>&nbsp; Perhaps something
there will be helpful for you.&nbsp; Specifically, the "Sun Studio
Performance Analyzer" allows you to divide that "communication" time
between "data transfer time" and "synchronization time".&nbsp; But a basic
classification as either communication or else computation is pretty
central to all the tools.<br>
<br>
Bibrak Qamar wrote:
<blockquote
 cite="midAANLkTimtAE0STkuOA8gxy_Y=KByNZyYPXHdYuZHi0EhZ@mail.gmail.com"
 type="cite">
  <div dir="ltr">As asked the reason of such calculation of non
blocking communication, the main reason is that I want to look into the
program as how much it percent time is consumed on communication alone,
computation alone and the intersection of both.<br>
  <br>
  <div class="gmail_quote">On Thu, Feb 3, 2011 at 5:08 AM, Eugene Loh <span
 dir="ltr">&lt;<a href="mailto:eugene.loh@oracle.com">eugene.loh@oracle.com</a>&gt;</span>
wrote:<br>
  <blockquote class="gmail_quote"
 style="border-left: 1px solid rgb(204, 204, 204); margin: 0pt 0pt 0pt 0.8ex; padding-left: 1ex;">Again,
you can try the Peruse instrumentation. &nbsp;Configure OMPI with
--enable-peruse. &nbsp;The instrumentation points might help you decide how
you want to define the time you want to measure. &nbsp;Again, you really
have to spend a bunch of your own time deciding what is meaningful to
measure.<br>
    <br>
Gustavo Correa wrote:<br>
    <br>
    <blockquote class="gmail_quote"
 style="border-left: 1px solid rgb(204, 204, 204); margin: 0pt 0pt 0pt 0.8ex; padding-left: 1ex;">
      <div class="im">However, OpenMPI may give this info, with non-MPI
(hence non-portable) functions, I'd guess.<br>
      <br>
      </div>
      <blockquote class="gmail_quote"
 style="border-left: 1px solid rgb(204, 204, 204); margin: 0pt 0pt 0pt 0.8ex; padding-left: 1ex;">
        <div class="im">From: Eugene Loh &lt;<a
 href="mailto:eugene.loh@oracle.com" target="_blank">eugene.loh@oracle.com</a>&gt;<br>
        <br>
        </div>
        <div class="im">Anyhow, the Peruse instrumentation in OMPI
might help.<br>
        </div>
      </blockquote>
    </blockquote>
  </blockquote>
  </div>
  </div>
</blockquote>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15501.php">Page, Andy (UK): "[OMPI users] Windows release 1.5.1"</a>
<li><strong>Previous message:</strong> <a href="15499.php">Bibrak Qamar: "Re: [OMPI users] Calculate time spent on non blocking communication?"</a>
<li><strong>In reply to:</strong> <a href="15499.php">Bibrak Qamar: "Re: [OMPI users] Calculate time spent on non blocking communication?"</a>
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
