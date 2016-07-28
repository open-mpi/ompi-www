<?
$subject_val = "[OMPI devel] bind to interface / address oob_tcp_listener.c:create_listen()";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 27 11:42:20 2015" -->
<!-- isoreceived="20150827154220" -->
<!-- sent="Thu, 27 Aug 2015 17:42:16 +0200" -->
<!-- isosent="20150827154216" -->
<!-- name="Mark Santcroos" -->
<!-- email="mark.santcroos_at_[hidden]" -->
<!-- subject="[OMPI devel] bind to interface / address oob_tcp_listener.c:create_listen()" -->
<!-- id="2D4BF221-5AAC-4614-BEB9-9B94C7B1B44D_at_rutgers.edu" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] bind to interface / address oob_tcp_listener.c:create_listen()<br>
<strong>From:</strong> Mark Santcroos (<em>mark.santcroos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-27 11:42:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17883.php">Ralph Castain: "Re: [OMPI devel] bind to interface / address oob_tcp_listener.c:create_listen()"</a>
<li><strong>Previous message:</strong> <a href="17881.php">Gilles Gouaillardet: "Re: [OMPI devel] OpenMPI 1.8 Bug Report"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17883.php">Ralph Castain: "Re: [OMPI devel] bind to interface / address oob_tcp_listener.c:create_listen()"</a>
<li><strong>Reply:</strong> <a href="17883.php">Ralph Castain: "Re: [OMPI devel] bind to interface / address oob_tcp_listener.c:create_listen()"</a>
<li><strong>Reply:</strong> <a href="17884.php">Howard Pritchard: "Re: [OMPI devel] bind to interface / address oob_tcp_listener.c:create_listen()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>For some reason that is currently still beyond me, I can't bind to INADDR_ANY for more than 74 ports on a Cray compute node, without getting EADDRINUSE.
<br>
This impacts my use of the oob_tcp_listener.c:create_listen() code on that machine (through means of orte-submit).
<br>
<p>I've implemented a proof of concept that gets the address from a hardcoded interface and uses that for the binding, and then everything is hunky dory.
<br>
<p>Although I'm interested in the root cause also, that may likely be outside of my control, so I wonder whether the hack can be turned into something more appropriate.
<br>
<p>So some questions:
<br>
<p>- I can't stop to think that somewhere in the codebase there is probably some portable code to extract addresses from an interface.
<br>
- Is there already some MCA parameter that can be (re)used to specify the interface to use for this kind of purpose.
<br>
- (And why is the &quot;client&quot; listening on a socket in the first place?)
<br>
<p>Thanks!
<br>
<p>Mark<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17883.php">Ralph Castain: "Re: [OMPI devel] bind to interface / address oob_tcp_listener.c:create_listen()"</a>
<li><strong>Previous message:</strong> <a href="17881.php">Gilles Gouaillardet: "Re: [OMPI devel] OpenMPI 1.8 Bug Report"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17883.php">Ralph Castain: "Re: [OMPI devel] bind to interface / address oob_tcp_listener.c:create_listen()"</a>
<li><strong>Reply:</strong> <a href="17883.php">Ralph Castain: "Re: [OMPI devel] bind to interface / address oob_tcp_listener.c:create_listen()"</a>
<li><strong>Reply:</strong> <a href="17884.php">Howard Pritchard: "Re: [OMPI devel] bind to interface / address oob_tcp_listener.c:create_listen()"</a>
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
