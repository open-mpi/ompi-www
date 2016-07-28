<?
$subject_val = "Re: [OMPI users] Is there an &quot;flush()&quot;-like function in MPI?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep 26 11:41:36 2009" -->
<!-- isoreceived="20090926154136" -->
<!-- sent="Sat, 26 Sep 2009 08:42:35 -0700" -->
<!-- isosent="20090926154235" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Is there an &amp;quot;flush()&amp;quot;-like function in MPI?" -->
<!-- id="4ABE366B.50505_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="COL102-W5EEC171A7E39325BFD41AA8D80_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] Is there an &quot;flush()&quot;-like function in MPI?<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-26 11:42:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10780.php">Eugene Loh: "[OMPI users] -slot-list -stride"</a>
<li><strong>Previous message:</strong> <a href="10778.php">Attila B&#246;rcs: "Re: [OMPI users] Is there an &quot;flush()&quot;-like function in MPI?"</a>
<li><strong>In reply to:</strong> <a href="10777.php">guosong: "[OMPI users] Is there an &quot;flush()&quot;-like function in MPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10781.php">guosong: "Re: [OMPI users] Is there an &quot;flush()&quot;-like function in MPI?"</a>
<li><strong>Reply:</strong> <a href="10781.php">guosong: "Re: [OMPI users] Is there an &quot;flush()&quot;-like function in MPI?"</a>
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
<blockquote cite="midCOL102-W5EEC171A7E39325BFD41AA8D80@phx.gbl"
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
--></style>Hi
all,<br>
I am wondering if there is&nbsp;an flush()-like function in MPI. I saw
the&nbsp;output of my program. One sent something but some other process did
not receive it, just sitting there waiting. I used MPI_Isend for
sending and MPI_Recv for receiving. Is it possible the message was lost
or the message&nbsp;was not flushed out and was still in the I/O buffer.
Thanks.<br>
</blockquote>
If you send with MPI_Isend, the send operation is started.&nbsp; In order to
complete the send, you need a corresponding MPI_Wait (or MPI_Test or
variant like MPI_Waitall, etc.).<br>
<br>
Even then, it is possible for the MPI implementation to buffer the
message internally.&nbsp; That is, the completion of the send operation only
means that the message has left the user's send buffer -- not that the
message has been received at the other end.<br>
<br>
There are also synchronous sends such as MPI_Ssend (or the non-blocking
variant MPI_Issend).&nbsp; This guarantees that the send completes not only
once the message has left the user's send buffer but only only once the
receiver has posted a matching receive.&nbsp; It does not, however,
guarantee that the full message has arrived at or been received by the
receiver.<br>
<br>
I think once you've completed the send (e.g., adding an MPI_Wait to
your MPI_Isend), there is nothing more to do on the sender's side to
push the message along.<br>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10780.php">Eugene Loh: "[OMPI users] -slot-list -stride"</a>
<li><strong>Previous message:</strong> <a href="10778.php">Attila B&#246;rcs: "Re: [OMPI users] Is there an &quot;flush()&quot;-like function in MPI?"</a>
<li><strong>In reply to:</strong> <a href="10777.php">guosong: "[OMPI users] Is there an &quot;flush()&quot;-like function in MPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10781.php">guosong: "Re: [OMPI users] Is there an &quot;flush()&quot;-like function in MPI?"</a>
<li><strong>Reply:</strong> <a href="10781.php">guosong: "Re: [OMPI users] Is there an &quot;flush()&quot;-like function in MPI?"</a>
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
