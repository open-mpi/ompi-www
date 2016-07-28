<?
$subject_val = "Re: [OMPI users] Is there an &quot;flush()&quot;-like function in MPI?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep 26 13:59:34 2009" -->
<!-- isoreceived="20090926175934" -->
<!-- sent="Sat, 26 Sep 2009 11:00:33 -0700" -->
<!-- isosent="20090926180033" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Is there an &amp;quot;flush()&amp;quot;-like function in MPI?" -->
<!-- id="4ABE56C1.9000700_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="COL102-W9338DBC5CD8EA7E4BAE22A8D80_at_phx.gbl" -->
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
<strong>Date:</strong> 2009-09-26 14:00:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10783.php">guosong: "Re: [OMPI users] Is there an &quot;flush()&quot;-like function in MPI?"</a>
<li><strong>Previous message:</strong> <a href="10781.php">guosong: "Re: [OMPI users] Is there an &quot;flush()&quot;-like function in MPI?"</a>
<li><strong>In reply to:</strong> <a href="10781.php">guosong: "Re: [OMPI users] Is there an &quot;flush()&quot;-like function in MPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10783.php">guosong: "Re: [OMPI users] Is there an &quot;flush()&quot;-like function in MPI?"</a>
<li><strong>Reply:</strong> <a href="10783.php">guosong: "Re: [OMPI users] Is there an &quot;flush()&quot;-like function in MPI?"</a>
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
<blockquote cite="midCOL102-W9338DBC5CD8EA7E4BAE22A8D80@phx.gbl"
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
for&nbsp;reply.&nbsp;One more thing I would like to know&nbsp;is that since the
message has already left the sender, how to make sure that the receiver
side receives this message? From the output of my program, it seems
that the receiver side is waiting for the message(MPI_Recv).&nbsp; <br>
</blockquote>
You mean how the sender can be sure to push the message all the way
over to the receiver?&nbsp; In practical terms, if the sender completes its
send, the receiver should be able to poll and (in short order) see the
message.&nbsp; Sounds like you have a bug.<br>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10783.php">guosong: "Re: [OMPI users] Is there an &quot;flush()&quot;-like function in MPI?"</a>
<li><strong>Previous message:</strong> <a href="10781.php">guosong: "Re: [OMPI users] Is there an &quot;flush()&quot;-like function in MPI?"</a>
<li><strong>In reply to:</strong> <a href="10781.php">guosong: "Re: [OMPI users] Is there an &quot;flush()&quot;-like function in MPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10783.php">guosong: "Re: [OMPI users] Is there an &quot;flush()&quot;-like function in MPI?"</a>
<li><strong>Reply:</strong> <a href="10783.php">guosong: "Re: [OMPI users] Is there an &quot;flush()&quot;-like function in MPI?"</a>
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
