<?
$subject_val = "Re: [OMPI users] 1.8.1 [SEC=UNCLASSIFIED]";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 28 07:16:35 2015" -->
<!-- isoreceived="20150128121635" -->
<!-- sent="Wed, 28 Jan 2015 06:16:33 -0600" -->
<!-- isosent="20150128121633" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 1.8.1 [SEC=UNCLASSIFIED]" -->
<!-- id="CAMD57oeZpQzQX_WZ3B8X5AzdGUG3+RE1nD==8hgpw3_Ra28ocw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="31AF19C9C3A1AF4FA8FBE7A0E8F3DEB81B08A875_at_exmbs1-b51.ansto.gov.au" -->
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
<strong>Subject:</strong> Re: [OMPI users] 1.8.1 [SEC=UNCLASSIFIED]<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-28 07:16:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26241.php">DOHERTY, Greg: "[OMPI users] 1.8.1 query [SEC=UNCLASSIFIED]"</a>
<li><strong>Previous message:</strong> <a href="26239.php">DOHERTY, Greg: "[OMPI users] 1.8.1 [SEC=UNCLASSIFIED]"</a>
<li><strong>In reply to:</strong> <a href="26239.php">DOHERTY, Greg: "[OMPI users] 1.8.1 [SEC=UNCLASSIFIED]"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm not entirely clear on the sequence of commands here. Is the user
<br>
requesting a new allocation from maui/torque for each run? In this case,
<br>
it's possible we aren't correctly picking up the external binding from
<br>
Torque. This would likely be a bug we would need to fix.
<br>
<p>Or is the user obtaining a single allocation of the entire node, and then
<br>
using mpirun to start multiple jobs in parallel? In this case, the issue is
<br>
that the user needs to tell mpirun which cpus to confine itself to or else
<br>
it will always assume that all cpus belong to it. This will lead to
<br>
overloading the lower core numbers. The problem here can be resolved by
<br>
adding --cpuset 0,1,2 (or whatever pattern you like) to each cmd line.
<br>
<p>You might also consider updating to 1.8.4 as we did fix some integration
<br>
bugs. I don't recall something specific to this question, but it could be
<br>
my memory at fault.
<br>
<p>Ralph
<br>
<p><p>On Tue, Jan 27, 2015 at 11:39 PM, DOHERTY, Greg &lt;gdz_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  This might or might not be related to openmpi 1.8.1. I have not seen the
</span><br>
<span class="quotelev1">&gt; problem with the same program and previous versions of openmpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have 64 core AMD nodes. I have recently recompiled  a large Monte Carlo
</span><br>
<span class="quotelev1">&gt; program using 1.8.1 version of openmpi. Users start this program using
</span><br>
<span class="quotelev1">&gt; maui/torque asking for a number of cores, usually on only one node. One run
</span><br>
<span class="quotelev1">&gt; of the program asking for any number of cores up to 64 runs with full cpu
</span><br>
<span class="quotelev1">&gt; utilisation on each core. A user might start a run asking for 16 cores &#226;&#128;&#147;
</span><br>
<span class="quotelev1">&gt; fine. Then he starts a second run on the same node, asking for another 16
</span><br>
<span class="quotelev1">&gt; cores. Immediately the cpu utilisation on all cores of the first job drops
</span><br>
<span class="quotelev1">&gt; to 50%, as it is for the newly starting job. If a different program were
</span><br>
<span class="quotelev1">&gt; using the remaining 32 cores on the same node at the same time, the cpu
</span><br>
<span class="quotelev1">&gt; utilisation of its cores is unaffected. If we qdel the second 16 core job,
</span><br>
<span class="quotelev1">&gt; the cpu utilisation of each core of the first job immediately climbs back
</span><br>
<span class="quotelev1">&gt; to 100%. Any suggestions please, on where I might start looking for the
</span><br>
<span class="quotelev1">&gt; solution to this problem?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Greg Doherty
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ANSTO
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/01/26239.php">http://www.open-mpi.org/community/lists/users/2015/01/26239.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26240/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26241.php">DOHERTY, Greg: "[OMPI users] 1.8.1 query [SEC=UNCLASSIFIED]"</a>
<li><strong>Previous message:</strong> <a href="26239.php">DOHERTY, Greg: "[OMPI users] 1.8.1 [SEC=UNCLASSIFIED]"</a>
<li><strong>In reply to:</strong> <a href="26239.php">DOHERTY, Greg: "[OMPI users] 1.8.1 [SEC=UNCLASSIFIED]"</a>
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
