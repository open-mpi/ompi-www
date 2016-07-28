<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug 25 16:56:45 2006" -->
<!-- isoreceived="20060825205645" -->
<!-- sent="Fri, 25 Aug 2006 14:56:41 -0600" -->
<!-- isosent="20060825205641" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenRTE and Threads" -->
<!-- id="1156539401.21128.30.camel_at_boxtop.lanl.gov" -->
<!-- inreplyto="C114B63D.3A43%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-08-25 16:56:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1015.php">Jeff Squyres: "[OMPI devel] Change in snapshot tarball generation"</a>
<li><strong>Previous message:</strong> <a href="1013.php">Ralph Castain: "[OMPI devel] OpenRTE and Threads"</a>
<li><strong>In reply to:</strong> <a href="1013.php">Ralph Castain: "[OMPI devel] OpenRTE and Threads"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In general, I think making the Public interface to OpenRTE not thread
<br>
safe is a reasonable thing to do.  However, I have some concern over how
<br>
this would work with the event library.  When the project is compiled
<br>
with progress threads, the event library runs in its own thread.  More
<br>
important to this discussion, all callbacks from the event library are
<br>
triggered in the callback thread (not the thread that registered the
<br>
event), meaning that it's very likely the GPR could get a callback from
<br>
a non-blocking OOB receive in a thread that is other than the main
<br>
thread of the application and that it could happen while the main thread
<br>
of the application is already in the GPR.
<br>
<p>Not sure what the best way to handle this would be, but I don't think
<br>
you could do it from the event level without making adjustments that
<br>
would prohibit concurrency at the MPI layer, which is obviously
<br>
sub-optimal.
<br>
<p>Of course, we could modify the code so that non-OMPI applications didn't
<br>
start the event progress thread, but that wouldn't solve the MPI-layer
<br>
issues.
<br>
<p>Brian
<br>
<p>On Fri, 2006-08-25 at 14:14 -0600, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; There has been ongoing discussion for some time about the thread safety of
</span><br>
<span class="quotelev1">&gt; OpenRTE. This note proposes a solution to that problem that has been kicked
</span><br>
<span class="quotelev1">&gt; around for the last several months, and that Jeff and I feel makes a certain
</span><br>
<span class="quotelev1">&gt; degree of sense.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Short description
</span><br>
<span class="quotelev1">&gt; -------------------------
</span><br>
<span class="quotelev1">&gt; We propose to make OpenRTE appear &quot;single-threaded&quot; to outside users. By
</span><br>
<span class="quotelev1">&gt; that we do not mean that OpenRTE may not have some internal threads in
</span><br>
<span class="quotelev1">&gt; operation. Instead, we mean that thread locking would be the responsibility
</span><br>
<span class="quotelev1">&gt; of anyone calling an OpenRTE function - as opposed to built into the OpenRTE
</span><br>
<span class="quotelev1">&gt; system itself.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Explanation
</span><br>
<span class="quotelev1">&gt; -------------------------
</span><br>
<span class="quotelev1">&gt; Most of the logic inside of OpenRTE is serial in nature and therefore
</span><br>
<span class="quotelev1">&gt; resistant to the use of threads. Accordingly, we find ourselves putting
</span><br>
<span class="quotelev1">&gt; giant thread locks around virtually every function in the code base. This
</span><br>
<span class="quotelev1">&gt; wastes our time, complicates the code (we all keep forgetting to unlock when
</span><br>
<span class="quotelev1">&gt; exiting due to errors), and basically eliminates any benefits from threading
</span><br>
<span class="quotelev1">&gt; anyway.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Those few places where threading is possible are actually involved in
</span><br>
<span class="quotelev1">&gt; OpenRTE-internal operations. For example, we now use a thread to accept
</span><br>
<span class="quotelev1">&gt; out-of-band communication socket connections. These operations, however, are
</span><br>
<span class="quotelev1">&gt; transparent to the user level (i.e., any code that calls OpenRTE).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It seems, therefore, that the simplest solution is to place the
</span><br>
<span class="quotelev1">&gt; responsibility for thread locking onto the calling programs. Unthreaded
</span><br>
<span class="quotelev1">&gt; programs need do nothing. Programs utilizing threads, however, would need to
</span><br>
<span class="quotelev1">&gt; thread lock prior to calling OpenRTE functions.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any comments on this idea? If not, or if there is general consensus on this
</span><br>
<span class="quotelev1">&gt; approach, then we would gradually remove the current thread locks as code is
</span><br>
<span class="quotelev1">&gt; revised - this isn't a high priority issue requiring an immediate scrub of
</span><br>
<span class="quotelev1">&gt; the code.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1015.php">Jeff Squyres: "[OMPI devel] Change in snapshot tarball generation"</a>
<li><strong>Previous message:</strong> <a href="1013.php">Ralph Castain: "[OMPI devel] OpenRTE and Threads"</a>
<li><strong>In reply to:</strong> <a href="1013.php">Ralph Castain: "[OMPI devel] OpenRTE and Threads"</a>
<!-- nextthread="start" -->
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
