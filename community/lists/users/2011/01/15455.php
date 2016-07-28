<?
$subject_val = "Re: [OMPI users] maximising bandwidth";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 31 12:27:00 2011" -->
<!-- isoreceived="20110131172700" -->
<!-- sent="Mon, 31 Jan 2011 09:26:33 -0800" -->
<!-- isosent="20110131172633" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] maximising bandwidth" -->
<!-- id="4D46F0C9.5040801_at_oracle.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTinmDQD9a+qGurjGhk2wqKifChX4mR+UH0e+s=HP_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] maximising bandwidth<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-31 12:26:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15456.php">Toon Knapen: "Re: [OMPI users] maximising bandwidth"</a>
<li><strong>Previous message:</strong> <a href="15454.php">Bill Rankin: "Re: [OMPI users] maximising bandwidth"</a>
<li><strong>In reply to:</strong> <a href="15452.php">David Zhang: "Re: [OMPI users] maximising bandwidth"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15456.php">Toon Knapen: "Re: [OMPI users] maximising bandwidth"</a>
<li><strong>Reply:</strong> <a href="15456.php">Toon Knapen: "Re: [OMPI users] maximising bandwidth"</a>
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
David Zhang wrote:
<blockquote
 cite="midAANLkTinmDQD9a+qGurjGhk2wqKifChX4mR+UH0e+s=HP@mail.gmail.com"
 type="cite">Blocking send/recv, as the name suggest, stop processing
your master and slave code until the data is received on the slave side.<br>
</blockquote>
Just to clarify...<br>
<br>
If you use point-to-point send and receive calls, you can make the
block/nonblock decision independently on the send and receive sides.&nbsp;
E.g., use blocking send and nonblocking receive.&nbsp; Or nonblocking send
and blocking receive.&nbsp; You get the idea.<br>
<br>
Blocking on the send side only means blocking until the message has
left the user's buffer on the send side.&nbsp; It does not guarantee that
the data has been received on the other end.<br>
<br>
I agree with Bill that performance portability is an issue.&nbsp; That is,
the MPI standard itself doesn't really provide any guarantees here
about what is fastest.&nbsp; Perhaps polling this mailing list will be
helpful, but if you are looking for "the fastest" solution regardless
of which MPI implementation you use (and which interconnect you use...
which might be determined at run time) you will probably be
disappointed.<br>
<br>
Using a collective call like MPI_Gather may be worthwhile, but it
doesn't deploy additional threads, and additional threads could indeed
help in certain cases.<br>
<br>
In addition to MPI implementation and which interconnect (or BTL) one
uses, another important variable is message length.&nbsp; Short messages may
be sent "eagerly" while long messages may involve more synchronization
between master and slaves.<br>
<blockquote
 cite="midAANLkTinmDQD9a+qGurjGhk2wqKifChX4mR+UH0e+s=HP@mail.gmail.com"
 type="cite">Nonblocking send/recv wouldn't stop, instead you must
check the status on the slave side to see if data has been sent.</blockquote>
Yes and no.&nbsp; Again, data can be sent from the master but not yet
received by the slave (if the MPI implementation buffers the data
somewhere in-between).<br>
<blockquote
 cite="midAANLkTinmDQD9a+qGurjGhk2wqKifChX4mR+UH0e+s=HP@mail.gmail.com"
 type="cite">Nonblocking is faster on the master side because the
master doesn't need to wait for the slave to receive the data to
continue.<br>
</blockquote>
???&nbsp; For most sends, the master has to wait only on the data to leave
the user send buffer.<br>
<blockquote
 cite="midAANLkTinmDQD9a+qGurjGhk2wqKifChX4mR+UH0e+s=HP@mail.gmail.com"
 type="cite">So when you say you want your master to send "as fast as
possible", I suppose you meant get back to running your code as soon as
possible.&nbsp; In that case you would want nonblocking.&nbsp; However when you
say you want the slaves to receive data faster, it seems you're
implying the actual data transmission across the network.&nbsp; I believe
the data transmission speed is not dependent on whether the it is
blocking or nonblocking.<br>
  <br>
  <div class="gmail_quote">On Sun, Jan 30, 2011 at 11:09 AM, Toon
Knapen <span dir="ltr">&lt;<a href="mailto:toon.knapen@gmail.com">toon.knapen@gmail.com</a>&gt;</span>
wrote:<br>
  <blockquote class="gmail_quote"
 style="border-left: 1px solid rgb(204, 204, 204); margin: 0pt 0pt 0pt 0.8ex; padding-left: 1ex;">Hi
all,<br>
    <br>
If I have a master-process that needs to send a chunk of (different)
data to each of my N slave processes as fast as possible, would I
receive the chunk in each of the slaves faster if the master would
launch N threads each doing a blocking send or would it be better to
launch N nonblocking sends in the master.<br>
    <br>
I'm currently using OpenMPI on ethernet but might the approach be
different with different types of networks ?<br>
    <br>
thanks in advance,<br>
  </blockquote>
  </div>
</blockquote>
<br>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15456.php">Toon Knapen: "Re: [OMPI users] maximising bandwidth"</a>
<li><strong>Previous message:</strong> <a href="15454.php">Bill Rankin: "Re: [OMPI users] maximising bandwidth"</a>
<li><strong>In reply to:</strong> <a href="15452.php">David Zhang: "Re: [OMPI users] maximising bandwidth"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15456.php">Toon Knapen: "Re: [OMPI users] maximising bandwidth"</a>
<li><strong>Reply:</strong> <a href="15456.php">Toon Knapen: "Re: [OMPI users] maximising bandwidth"</a>
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
