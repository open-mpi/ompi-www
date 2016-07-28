<?
$subject_val = "Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 27 16:59:01 2009" -->
<!-- isoreceived="20090927205901" -->
<!-- sent="Sun, 27 Sep 2009 14:00:00 -0700" -->
<!-- isosent="20090927210000" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?" -->
<!-- id="4ABFD250.5020208_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="COL102-W53595083E63C66A1D18823A8D70_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-27 17:00:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10789.php">guosong: "Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?"</a>
<li><strong>Previous message:</strong> <a href="10787.php">guosong: "Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?"</a>
<li><strong>In reply to:</strong> <a href="10787.php">guosong: "Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10789.php">guosong: "Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?"</a>
<li><strong>Reply:</strong> <a href="10789.php">guosong: "Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?"</a>
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
guosong wrote:
<blockquote cite="midCOL102-W53595083E63C66A1D18823A8D70@phx.gbl"
 type="cite">
  <style><!--
.hmmessage P
{
margin:0px;
padding:0px
}
body.hmmessage
{
font-size: 10pt;
font-family:Verdana
}
--></style>I
used MPI_Init_thread(&amp;argc,&amp;argv, MPI_THREAD_MULTIPLE,
&amp;provided); in my program and got provided = 0 which turns out to
be the MPI_THREAD_SINGLE. Does this mean that I can not use
MPI_THREAD_MULTIPLE model?</blockquote>
Right.&nbsp; I've not done much multithreaded MPI work.&nbsp; Someone else on
this list can advise you better what you need to do to get
provided=MPI_THREAD_MULTIPLE.<br>
<blockquote cite="midCOL102-W53595083E63C66A1D18823A8D70@phx.gbl"
 type="cite">I write a little program to test the multithreading and it
worked sometimes and failed sometimes. It also hang&nbsp;there
sometimes.&nbsp;Does this only because the MPI_THREAD_MULTIPLE is not
supported or&nbsp;there are some bugs in the program?</blockquote>
I don't know if there are bugs in the program, but without the MPI
threads support you can't really test it.&nbsp;
<br>
<blockquote cite="midCOL102-W53595083E63C66A1D18823A8D70@phx.gbl"
 type="cite">BTW, if&nbsp;I want to create a background thread which is&nbsp;sort
of&nbsp;like a deamon&nbsp;thread,&nbsp;how can I&nbsp;achieve that in&nbsp;MPI programs? Thanks.<br>
</blockquote>
I'm not sure I understand the question.&nbsp; Creating a background thread
isn't part of MPI.&nbsp; You would use something else, like POSIX threads or
OpenMP.<br>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10789.php">guosong: "Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?"</a>
<li><strong>Previous message:</strong> <a href="10787.php">guosong: "Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?"</a>
<li><strong>In reply to:</strong> <a href="10787.php">guosong: "Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10789.php">guosong: "Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?"</a>
<li><strong>Reply:</strong> <a href="10789.php">guosong: "Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?"</a>
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
