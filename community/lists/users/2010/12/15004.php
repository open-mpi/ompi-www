<?
$subject_val = "[OMPI users] meaning of MPI_THREAD_*";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  6 06:16:27 2010" -->
<!-- isoreceived="20101206111627" -->
<!-- sent="Mon, 06 Dec 2010 06:16:21 -0500" -->
<!-- isosent="20101206111621" -->
<!-- name="Hicham Mouline" -->
<!-- email="hicham_at_[hidden]" -->
<!-- subject="[OMPI users] meaning of MPI_THREAD_*" -->
<!-- id="20101206061621.17852_at_web005.roc2.bluetie.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] meaning of MPI_THREAD_*<br>
<strong>From:</strong> Hicham Mouline (<em>hicham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-06 06:16:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15005.php">Tim Prince: "Re: [OMPI users] meaning of MPI_THREAD_*"</a>
<li><strong>Previous message:</strong> <a href="15003.php">Gustavo Correa: "Re: [OMPI users] Scalability issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15005.php">Tim Prince: "Re: [OMPI users] meaning of MPI_THREAD_*"</a>
<li><strong>Reply:</strong> <a href="15005.php">Tim Prince: "Re: [OMPI users] meaning of MPI_THREAD_*"</a>
<li><strong>Maybe reply:</strong> <a href="15007.php">Hicham Mouline: "Re: [OMPI users] meaning of MPI_THREAD_*"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>1. MPI_THREAD_SINGLE: Only one thread will execute.
<br>
Does this really mean the process cannot have any other threads at all, even if they doen't deal with MPI at all?
<br>
I'm curious as to how this case affects the openmpi implementation?
<br>
Essentially, what is the difference between MPI_THREAD_SINGLE and MPI_THREAD_FUNNELED?
<br>
<p>2. In my case, I'm interested in MPI_THREAD_SERIALIZED. However if it's available, I can use MPI_THREAD_FUNNELED.
<br>
What cmake flags do I need to enable to allow this mode?
<br>
<p>3. Assume I assign only 1 thread in my program to deal with MPI. What is the difference between 
<br>
int MPI::Init_thread(MPI_THREAD_SINGLE)
<br>
int MPI::Init_thread(MPI_THREAD_FUNNELED)
<br>
int MPI::Init()
<br>
<p>regards,
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15005.php">Tim Prince: "Re: [OMPI users] meaning of MPI_THREAD_*"</a>
<li><strong>Previous message:</strong> <a href="15003.php">Gustavo Correa: "Re: [OMPI users] Scalability issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15005.php">Tim Prince: "Re: [OMPI users] meaning of MPI_THREAD_*"</a>
<li><strong>Reply:</strong> <a href="15005.php">Tim Prince: "Re: [OMPI users] meaning of MPI_THREAD_*"</a>
<li><strong>Maybe reply:</strong> <a href="15007.php">Hicham Mouline: "Re: [OMPI users] meaning of MPI_THREAD_*"</a>
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
