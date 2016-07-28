<?
$subject_val = "Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 22 13:32:00 2009" -->
<!-- isoreceived="20090922173200" -->
<!-- sent="Tue, 22 Sep 2009 10:32:50 -0700" -->
<!-- isosent="20090922173250" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?" -->
<!-- id="4AB90A42.9040604_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="COL102-W207D2539603EBE96410309A8DC0_at_phx.gbl" -->
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
<strong>Date:</strong> 2009-09-22 13:32:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10726.php">Pallab Datta: "Re: [OMPI users] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
<li><strong>Previous message:</strong> <a href="10724.php">Pallab Datta: "Re: [OMPI users] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
<li><strong>In reply to:</strong> <a href="10723.php">guosong: "Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10730.php">Terry Frankcombe: "Re: [OMPI users] How to create multi-thread parallel program using	thread-safe send and recv?"</a>
<li><strong>Reply:</strong> <a href="10730.php">Terry Frankcombe: "Re: [OMPI users] How to create multi-thread parallel program using	thread-safe send and recv?"</a>
<li><strong>Reply:</strong> <a href="10787.php">guosong: "Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
  <meta content="text/html;charset=GB2312" http-equiv="Content-Type">
  <title></title>
</head>
<body bgcolor="#ffffff" text="#000000">
guosong wrote:
<blockquote cite="midCOL102-W207D2539603EBE96410309A8DC0@phx.gbl"
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
--></style>Thanks
for responding. I&nbsp;used a&nbsp;linux cluster. I think I would like to create
a model that is&nbsp;multithreaded and each&nbsp;thread can make MPI calls.&nbsp;I
attached&nbsp;test code as follow. It&nbsp;has&nbsp;two pthreads and there are MPI
calls&nbsp;in both of those two threads. In the main function, there&nbsp;are
also&nbsp;MPI calls.&nbsp;Should I&nbsp;use a full multithreading?</blockquote>
I guess so.&nbsp; It seems like the created threads are expected to make
independent/concurrent message-passing calls.&nbsp; Do read the link I
sent.&nbsp; You need to convert from MPI_Init to MPI_Init_thread(), asking
for a full-multithreaded model and checking that you got it.&nbsp; Also note
in main() that the MPI_Isend() calls should be matched with MPI_Wait()
or similar calls.&nbsp; I guess the parent thread will sit in such calls
while the child threads do their own message passing.&nbsp; Good luck.<br>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10726.php">Pallab Datta: "Re: [OMPI users] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
<li><strong>Previous message:</strong> <a href="10724.php">Pallab Datta: "Re: [OMPI users] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
<li><strong>In reply to:</strong> <a href="10723.php">guosong: "Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10730.php">Terry Frankcombe: "Re: [OMPI users] How to create multi-thread parallel program using	thread-safe send and recv?"</a>
<li><strong>Reply:</strong> <a href="10730.php">Terry Frankcombe: "Re: [OMPI users] How to create multi-thread parallel program using	thread-safe send and recv?"</a>
<li><strong>Reply:</strong> <a href="10787.php">guosong: "Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?"</a>
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
