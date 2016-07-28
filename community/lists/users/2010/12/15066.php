<?
$subject_val = "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a	single machine?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 10 10:38:47 2010" -->
<!-- isoreceived="20101210153847" -->
<!-- sent="Fri, 10 Dec 2010 07:38:30 -0800" -->
<!-- isosent="20101210153830" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Method for worker to determine its &amp;quot;rank&amp;quot; on a	single machine?" -->
<!-- id="4D024976.7030408_at_oracle.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D0245A7.8050806_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a	single machine?<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-10 10:38:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15067.php">Prentice Bisbal: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a	single machine?"</a>
<li><strong>Previous message:</strong> <a href="15065.php">Terry Dontje: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a	single machine?"</a>
<li><strong>In reply to:</strong> <a href="15065.php">Terry Dontje: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a	single machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15069.php">David Mathog: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a	single machine?"</a>
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
Terry Dontje wrote:
<blockquote cite="mid4D0245A7.8050806@oracle.com" type="cite">
  <meta content="text/html; charset=ISO-8859-1"
 http-equiv="Content-Type">
On 12/10/2010 09:19 AM, Richard Treumann wrote:
  <blockquote
 cite="mid:OFA1F8548A.6D7883EF-ON852577F5.004DDA51-852577F5.004EBB0B@us.ibm.com"
 type="cite"> <font face="sans-serif" size="2">It seems to me the </font><font
 size="3">MPI_Get_processor_name</font><font face="sans-serif" size="2">
description is too ambiguous to make this 100% portable. &nbsp;I assume most
MPI implementations simply use the hostname so all processes on the
same host will return the same string. &nbsp;The suggestion would work then.</font>
    <br>
    <br>
    <font face="sans-serif" size="2">However, it would also be
reasonable for an MPI &nbsp;that did processor binding to return "
hostname.socket#.core#" so every rank would have a unique processor
name.</font> <br>
  </blockquote>
Fair enough.&nbsp; However, I think it is a lot more stable then grabbing
information from the bowels of the runtime environment.&nbsp; Of course one
could just call the appropriate system call to get the hostname, if you
are on the right type of OS/Architecture :-).<br>
  <blockquote
 cite="mid:OFA1F8548A.6D7883EF-ON852577F5.004DDA51-852577F5.004EBB0B@us.ibm.com"
 type="cite"> <font face="sans-serif" size="2">The extension idea is a
bit at odds with the idea that MPI is an architecture independent API.
&nbsp;That does not rule out the option if there is a good use case but it
does raise the bar just a bit.</font> <br>
  </blockquote>
Yeah, that is kind of the rub isn't it.&nbsp; There is enough architectural
differences out there that it might be difficult to come to an
agreement on the elements of locality you should focus on.&nbsp; It would be
nice if there was some sort of distance value that would be assigned to
each peer a process has.&nbsp; Of course then you still have the problem
trying to figure out what distance you really want to base your
grouping on.<br>
</blockquote>
Similar issues within a node (e.g., hwloc, shared caches, sockets,
boards, etc.) as outside a node (same/different hosts, number of switch
hops, number of torus hops, etc.).&nbsp; Lots of potential complexity, but
the main difference inside/outside a node is that nodal boundaries
present "hard" process-migration boundaries.<br>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15067.php">Prentice Bisbal: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a	single machine?"</a>
<li><strong>Previous message:</strong> <a href="15065.php">Terry Dontje: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a	single machine?"</a>
<li><strong>In reply to:</strong> <a href="15065.php">Terry Dontje: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a	single machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15069.php">David Mathog: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a	single machine?"</a>
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
