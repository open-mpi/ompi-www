<?
$subject_val = "Re: [OMPI users] Running on crashing nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 24 03:37:55 2010" -->
<!-- isoreceived="20100924073755" -->
<!-- sent="Fri, 24 Sep 2010 09:37:05 +0200" -->
<!-- isosent="20100924073705" -->
<!-- name="Andrei Fokau" -->
<!-- email="andrei.fokau_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running on crashing nodes" -->
<!-- id="AANLkTim7KMVLQHuJfR1aq4MkA-YN0OkgY9JF0YMjkWUU_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTi=PUd53cYrL_SRbDVshy1ymfqjSA5m7QgLx1_pP_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Running on crashing nodes<br>
<strong>From:</strong> Andrei Fokau (<em>andrei.fokau_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-24 03:37:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14312.php">Andrei Fokau: "[OMPI users] Shared memory"</a>
<li><strong>Previous message:</strong> <a href="14310.php">Olivier Riff: "[OMPI users] Display in terminal of error message using throw std::runtime_error on distant node..."</a>
<li><strong>In reply to:</strong> <a href="14307.php">Ralph Castain: "Re: [OMPI users] Running on crashing nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14318.php">Joshua Hursey: "Re: [OMPI users] Running on crashing nodes"</a>
<li><strong>Reply:</strong> <a href="14318.php">Joshua Hursey: "Re: [OMPI users] Running on crashing nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph, could you tell us when this functionality will be available in the
<br>
stable version? A rough estimate will be fine.
<br>
<p><p>On Fri, Sep 24, 2010 at 01:24, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; In a word, no. If a node crashes, OMPI will abort the currently-running job
</span><br>
<span class="quotelev1">&gt; if it had processes on that node. There is no current ability to &quot;ride-thru&quot;
</span><br>
<span class="quotelev1">&gt; such an event.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That said, there is work being done to support &quot;ride-thru&quot;. Most of that is
</span><br>
<span class="quotelev1">&gt; in the current developer's code trunk, and more is coming, but I wouldn't
</span><br>
<span class="quotelev1">&gt; consider it production-quality just yet.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Specifically, the code that does what you specify below is done and works.
</span><br>
<span class="quotelev1">&gt; It is recovery of the MPI job itself (collectives, lost messages, etc.) that
</span><br>
<span class="quotelev1">&gt; remains to be completed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  On Thu, Sep 23, 2010 at 7:22 AM, Andrei Fokau &lt;
</span><br>
<span class="quotelev1">&gt; andrei.fokau_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Dear users,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Our cluster has a number of nodes which have high probability to crash, so
</span><br>
<span class="quotelev2">&gt;&gt; it happens quite often that calculations stop due to one node getting down.
</span><br>
<span class="quotelev2">&gt;&gt; May be you know if it is possible to block the crashed nodes during run-time
</span><br>
<span class="quotelev2">&gt;&gt; when running with OpenMPI? I am asking about principal possibility to
</span><br>
<span class="quotelev2">&gt;&gt; program such behavior. Does OpenMPI allow such dynamic checking? The scheme
</span><br>
<span class="quotelev2">&gt;&gt; I am curious about is the following:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. A code starts its tasks via mpirun on several nodes
</span><br>
<span class="quotelev2">&gt;&gt; 2. At some moment one node gets down
</span><br>
<span class="quotelev2">&gt;&gt; 3. The code realizes that the node is down (the results are lost) and
</span><br>
<span class="quotelev2">&gt;&gt; excludes it from the list of nodes to run its tasks on
</span><br>
<span class="quotelev2">&gt;&gt; 4. At later moment the user restarts the crashed node
</span><br>
<span class="quotelev2">&gt;&gt; 5. The code notices that the node is up again, and puts it back to the
</span><br>
<span class="quotelev2">&gt;&gt; list of active nodes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Andrei
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14311/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14312.php">Andrei Fokau: "[OMPI users] Shared memory"</a>
<li><strong>Previous message:</strong> <a href="14310.php">Olivier Riff: "[OMPI users] Display in terminal of error message using throw std::runtime_error on distant node..."</a>
<li><strong>In reply to:</strong> <a href="14307.php">Ralph Castain: "Re: [OMPI users] Running on crashing nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14318.php">Joshua Hursey: "Re: [OMPI users] Running on crashing nodes"</a>
<li><strong>Reply:</strong> <a href="14318.php">Joshua Hursey: "Re: [OMPI users] Running on crashing nodes"</a>
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
