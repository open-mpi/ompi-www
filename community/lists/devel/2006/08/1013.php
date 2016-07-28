<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug 25 16:14:25 2006" -->
<!-- isoreceived="20060825201425" -->
<!-- sent="Fri, 25 Aug 2006 14:14:21 -0600" -->
<!-- isosent="20060825201421" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] OpenRTE and Threads" -->
<!-- id="C114B63D.3A43%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-08-25 16:14:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1014.php">Brian Barrett: "Re: [OMPI devel] OpenRTE and Threads"</a>
<li><strong>Previous message:</strong> <a href="1012.php">Brian Barrett: "[OMPI devel] LANL ORTE todo / milestones"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1014.php">Brian Barrett: "Re: [OMPI devel] OpenRTE and Threads"</a>
<li><strong>Reply:</strong> <a href="1014.php">Brian Barrett: "Re: [OMPI devel] OpenRTE and Threads"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all
<br>
<p>There has been ongoing discussion for some time about the thread safety of
<br>
OpenRTE. This note proposes a solution to that problem that has been kicked
<br>
around for the last several months, and that Jeff and I feel makes a certain
<br>
degree of sense.
<br>
<p>Short description
<br>
-------------------------
<br>
We propose to make OpenRTE appear &quot;single-threaded&quot; to outside users. By
<br>
that we do not mean that OpenRTE may not have some internal threads in
<br>
operation. Instead, we mean that thread locking would be the responsibility
<br>
of anyone calling an OpenRTE function - as opposed to built into the OpenRTE
<br>
system itself.
<br>
<p>Explanation
<br>
-------------------------
<br>
Most of the logic inside of OpenRTE is serial in nature and therefore
<br>
resistant to the use of threads. Accordingly, we find ourselves putting
<br>
giant thread locks around virtually every function in the code base. This
<br>
wastes our time, complicates the code (we all keep forgetting to unlock when
<br>
exiting due to errors), and basically eliminates any benefits from threading
<br>
anyway.
<br>
<p>Those few places where threading is possible are actually involved in
<br>
OpenRTE-internal operations. For example, we now use a thread to accept
<br>
out-of-band communication socket connections. These operations, however, are
<br>
transparent to the user level (i.e., any code that calls OpenRTE).
<br>
<p>It seems, therefore, that the simplest solution is to place the
<br>
responsibility for thread locking onto the calling programs. Unthreaded
<br>
programs need do nothing. Programs utilizing threads, however, would need to
<br>
thread lock prior to calling OpenRTE functions.
<br>
<p>Any comments on this idea? If not, or if there is general consensus on this
<br>
approach, then we would gradually remove the current thread locks as code is
<br>
revised - this isn't a high priority issue requiring an immediate scrub of
<br>
the code.
<br>
<p>Thanks
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1014.php">Brian Barrett: "Re: [OMPI devel] OpenRTE and Threads"</a>
<li><strong>Previous message:</strong> <a href="1012.php">Brian Barrett: "[OMPI devel] LANL ORTE todo / milestones"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1014.php">Brian Barrett: "Re: [OMPI devel] OpenRTE and Threads"</a>
<li><strong>Reply:</strong> <a href="1014.php">Brian Barrett: "Re: [OMPI devel] OpenRTE and Threads"</a>
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
