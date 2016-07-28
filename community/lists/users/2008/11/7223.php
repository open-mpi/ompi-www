<?
$subject_val = "Re: [OMPI users] Progress of the asynchronous messages";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  6 12:05:11 2008" -->
<!-- isoreceived="20081106170511" -->
<!-- sent="Thu, 06 Nov 2008 09:08:26 -0800" -->
<!-- isosent="20081106170826" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Progress of the asynchronous messages" -->
<!-- id="4913248A.4030900_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="558046.34605.qm_at_web24106.mail.ird.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Progress of the asynchronous messages<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-06 12:08:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7224.php">vladimir marjanovic: "Re: [OMPI users] Progress of the asynchronous messages"</a>
<li><strong>Previous message:</strong> <a href="7222.php">vladimir marjanovic: "[OMPI users] Progress of the asynchronous messages"</a>
<li><strong>In reply to:</strong> <a href="7222.php">vladimir marjanovic: "[OMPI users] Progress of the asynchronous messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7224.php">vladimir marjanovic: "Re: [OMPI users] Progress of the asynchronous messages"</a>
<li><strong>Reply:</strong> <a href="7224.php">vladimir marjanovic: "Re: [OMPI users] Progress of the asynchronous messages"</a>
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
vladimir marjanovic wrote:
<blockquote cite="mid558046.34605.qm@web24106.mail.ird.yahoo.com"
 type="cite">
  <style type="text/css"><!-- DIV {margin:0px;} --></style>
  <div
 style="font-family: times new roman,new york,times,serif; font-size: 12pt;">
  <div>I am new user of Open MPI, I've used MPICH before.<br>
  <br>
There is performance bug with the following scenario:<br>
  <br>
proc_B:&nbsp; MPI_Isend(...,proc_A,..,&amp;request)<br>
&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; do{<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; sleep(1);<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; MPI_Test(..,&amp;flag,&amp;request);<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; count++<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; }while(!flag);<br>
  <br>
proc_A: MPI_Recv(...,proc_B);<br>
  <br>
For message size 8MB,&nbsp; proc_B calls MPI_Test 88 times. It means that
point to point communication costs 88 seconds.<br>
Btw, bandwidth isn't the problem (interconnection network: InfiniBand)<br>
  <br>
Obviously, there is the problem with progress of the asynchronous
messages.<br>
  <br>
How can I avoid this problem?<br>
  </div>
  </div>
</blockquote>
I'm no expert, but I think the problem is that the send is being
"progressed" (advanced) only during MPI calls and MPI_Test doesn't
progress/advance the message very aggressively.&nbsp; The message is
probably being decomposed into chunks and MPI_Test will advance the
message at most one chunk at a time.&nbsp; So:<br>
<br>
1) You could decrease the time between MPI_Test calls.<br>
2) You could block (e.g., with MPI_Wait).<br>
<br>
It's a tough tradeoff to make.&nbsp; That's bad news... but do you want OMPI
to be making the tough choices here for you?&nbsp; Let's say the sending
process sends a chunk and it takes a little while for the receiver to
process data and make room for you to send some more.&nbsp; During that
waiting time, should the sender return control to the user application,
or stay blocked inside of MPI_Test?<br>
<br>
Anyhow, I believe that's the issue here.<br>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7224.php">vladimir marjanovic: "Re: [OMPI users] Progress of the asynchronous messages"</a>
<li><strong>Previous message:</strong> <a href="7222.php">vladimir marjanovic: "[OMPI users] Progress of the asynchronous messages"</a>
<li><strong>In reply to:</strong> <a href="7222.php">vladimir marjanovic: "[OMPI users] Progress of the asynchronous messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7224.php">vladimir marjanovic: "Re: [OMPI users] Progress of the asynchronous messages"</a>
<li><strong>Reply:</strong> <a href="7224.php">vladimir marjanovic: "Re: [OMPI users] Progress of the asynchronous messages"</a>
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
