<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug  6 13:49:24 2007" -->
<!-- isoreceived="20070806174924" -->
<!-- sent="Mon, 06 Aug 2007 11:49:15 -0600" -->
<!-- isosent="20070806174915" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Trunk borked?" -->
<!-- id="C2DCBB3B.A5B3%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-06 13:49:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2086.php">Jeff Squyres: "Re: [OMPI devel] [devel-core] Trunk borked?"</a>
<li><strong>Previous message:</strong> <a href="2084.php">Brian Barrett: "Re: [OMPI devel] Startup failure on mixed IPv4/IPv6 environment (oob tcp bug?)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2086.php">Jeff Squyres: "Re: [OMPI devel] [devel-core] Trunk borked?"</a>
<li><strong>Reply:</strong> <a href="2086.php">Jeff Squyres: "Re: [OMPI devel] [devel-core] Trunk borked?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yo all
<br>
<p>I've been playing with the trunk today and found it appears to be broken for
<br>
comm_spawn. I'm getting two types of errors, perhaps related:
<br>
<p>1. if everything is being done on localhost, I do not see any of the IO from
<br>
the child process. Mpirun executes and completes cleanly, however. Because,
<br>
the spawn'd child terminates so quickly, I haven't been able to positively
<br>
confirm it is actually running - though I have some indication that it is.
<br>
<p>2. if running on multiple hosts, I see the output from the child processes,
<br>
but mpirun &quot;hangs&quot; in MPI_Comm_disconnect. A ctrl-C is able to kill the
<br>
entire job.
<br>
<p>Any ideas on what might have happened? This was all working not that long
<br>
ago...can't swear to an r-level at the moment, but am hoping someone has an
<br>
idea before I start having to blindly work backwards to find out what broke
<br>
it.
<br>
<p>Thanks
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2086.php">Jeff Squyres: "Re: [OMPI devel] [devel-core] Trunk borked?"</a>
<li><strong>Previous message:</strong> <a href="2084.php">Brian Barrett: "Re: [OMPI devel] Startup failure on mixed IPv4/IPv6 environment (oob tcp bug?)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2086.php">Jeff Squyres: "Re: [OMPI devel] [devel-core] Trunk borked?"</a>
<li><strong>Reply:</strong> <a href="2086.php">Jeff Squyres: "Re: [OMPI devel] [devel-core] Trunk borked?"</a>
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
