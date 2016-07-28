<?
$subject_val = "Re: [OMPI devel] bind to interface / address oob_tcp_listener.c:create_listen()";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 28 02:51:39 2015" -->
<!-- isoreceived="20150828065139" -->
<!-- sent="Fri, 28 Aug 2015 08:51:32 +0200" -->
<!-- isosent="20150828065132" -->
<!-- name="Mark Santcroos" -->
<!-- email="mark.santcroos_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] bind to interface / address oob_tcp_listener.c:create_listen()" -->
<!-- id="2497A4E6-E76C-4749-A72F-04540DF586A2_at_rutgers.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="F4EEC110-F655-4787-9A37-93572B4C5237_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] bind to interface / address oob_tcp_listener.c:create_listen()<br>
<strong>From:</strong> Mark Santcroos (<em>mark.santcroos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-28 02:51:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17895.php">Mark Santcroos: "Re: [OMPI devel] bind to interface / address oob_tcp_listener.c:create_listen()"</a>
<li><strong>Previous message:</strong> <a href="17893.php">Gilles Gouaillardet: "Re: [OMPI devel] OpenMPI 1.8 Bug Report"</a>
<li><strong>In reply to:</strong> <a href="17891.php">Ralph Castain: "Re: [OMPI devel] bind to interface / address oob_tcp_listener.c:create_listen()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17884.php">Howard Pritchard: "Re: [OMPI devel] bind to interface / address oob_tcp_listener.c:create_listen()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p><span class="quotelev1">&gt; On 28 Aug 2015, at 2:50 , Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; I committed the change that prevents orte-submit from binding a listener - seems to work fine for me, so please let me know how it works for you.
</span><br>
<p>Great, works indeed!
<br>
<p><span class="quotelev1">&gt; The other issue - binding to all interfaces instead of only the ones specified - is a little more troublesome. If we don&#226;&#128;&#153;t bind to all interfaces, then we have to consume a socket for each interface we are going to bind to - which means we trade-off binding one socket to all interfaces for consuming one socket per interface we are using.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It seems to me that binding to all interfaces doesn&#226;&#128;&#153;t hurt us given that we will only attempt to connect on the specified interfaces, whereas consuming even more file descriptors can be a problem, but maybe I&#226;&#128;&#153;m not seeing something. Anyone have an opinion here?
</span><br>
<p>So while you have fixed my issue by not listening at all, if that would not have been an option, then binding on all interfaces would have remained a problem.
<br>
But I also can see that you dont want to go the multiple sockets route.
<br>
<p>Thanks!
<br>
<p>Mark<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17895.php">Mark Santcroos: "Re: [OMPI devel] bind to interface / address oob_tcp_listener.c:create_listen()"</a>
<li><strong>Previous message:</strong> <a href="17893.php">Gilles Gouaillardet: "Re: [OMPI devel] OpenMPI 1.8 Bug Report"</a>
<li><strong>In reply to:</strong> <a href="17891.php">Ralph Castain: "Re: [OMPI devel] bind to interface / address oob_tcp_listener.c:create_listen()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17884.php">Howard Pritchard: "Re: [OMPI devel] bind to interface / address oob_tcp_listener.c:create_listen()"</a>
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
