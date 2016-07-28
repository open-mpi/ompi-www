<?
$subject_val = "Re: [OMPI users] Running on crashing nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 23 19:24:08 2010" -->
<!-- isoreceived="20100923232408" -->
<!-- sent="Thu, 23 Sep 2010 17:24:02 -0600" -->
<!-- isosent="20100923232402" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running on crashing nodes" -->
<!-- id="AANLkTi=PUd53cYrL_SRbDVshy1ymfqjSA5m7QgLx1_pP_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTin8USh6L75pQ-qx2+czivJwH38xyFeydyX==1fs_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-23 19:24:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14308.php">Ralph Castain: "Re: [OMPI users] How to know which process is running on which core?"</a>
<li><strong>Previous message:</strong> <a href="14306.php">Ralph Castain: "Re: [OMPI users] function fgets hangs a mpi program when it is used ompi-ps command"</a>
<li><strong>In reply to:</strong> <a href="14289.php">Andrei Fokau: "[OMPI users] Running on crashing nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14311.php">Andrei Fokau: "Re: [OMPI users] Running on crashing nodes"</a>
<li><strong>Reply:</strong> <a href="14311.php">Andrei Fokau: "Re: [OMPI users] Running on crashing nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In a word, no. If a node crashes, OMPI will abort the currently-running job
<br>
if it had processes on that node. There is no current ability to &quot;ride-thru&quot;
<br>
such an event.
<br>
<p>That said, there is work being done to support &quot;ride-thru&quot;. Most of that is
<br>
in the current developer's code trunk, and more is coming, but I wouldn't
<br>
consider it production-quality just yet.
<br>
<p>Specifically, the code that does what you specify below is done and works.
<br>
It is recovery of the MPI job itself (collectives, lost messages, etc.) that
<br>
remains to be completed.
<br>
<p><p>On Thu, Sep 23, 2010 at 7:22 AM, Andrei Fokau
<br>
&lt;andrei.fokau_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Dear users,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Our cluster has a number of nodes which have high probability to crash, so
</span><br>
<span class="quotelev1">&gt; it happens quite often that calculations stop due to one node getting down.
</span><br>
<span class="quotelev1">&gt; May be you know if it is possible to block the crashed nodes during run-time
</span><br>
<span class="quotelev1">&gt; when running with OpenMPI? I am asking about principal possibility to
</span><br>
<span class="quotelev1">&gt; program such behavior. Does OpenMPI allow such dynamic checking? The scheme
</span><br>
<span class="quotelev1">&gt; I am curious about is the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. A code starts its tasks via mpirun on several nodes
</span><br>
<span class="quotelev1">&gt; 2. At some moment one node gets down
</span><br>
<span class="quotelev1">&gt; 3. The code realizes that the node is down (the results are lost) and
</span><br>
<span class="quotelev1">&gt; excludes it from the list of nodes to run its tasks on
</span><br>
<span class="quotelev1">&gt; 4. At later moment the user restarts the crashed node
</span><br>
<span class="quotelev1">&gt; 5. The code notices that the node is up again, and puts it back to the list
</span><br>
<span class="quotelev1">&gt; of active nodes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Andrei
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14307/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14308.php">Ralph Castain: "Re: [OMPI users] How to know which process is running on which core?"</a>
<li><strong>Previous message:</strong> <a href="14306.php">Ralph Castain: "Re: [OMPI users] function fgets hangs a mpi program when it is used ompi-ps command"</a>
<li><strong>In reply to:</strong> <a href="14289.php">Andrei Fokau: "[OMPI users] Running on crashing nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14311.php">Andrei Fokau: "Re: [OMPI users] Running on crashing nodes"</a>
<li><strong>Reply:</strong> <a href="14311.php">Andrei Fokau: "Re: [OMPI users] Running on crashing nodes"</a>
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
