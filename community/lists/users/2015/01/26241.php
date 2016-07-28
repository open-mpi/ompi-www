<?
$subject_val = "[OMPI users] 1.8.1 query [SEC=UNCLASSIFIED]";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 28 16:52:20 2015" -->
<!-- isoreceived="20150128215220" -->
<!-- sent="Wed, 28 Jan 2015 21:52:02 +0000" -->
<!-- isosent="20150128215202" -->
<!-- name="DOHERTY, Greg" -->
<!-- email="gdz_at_[hidden]" -->
<!-- subject="[OMPI users] 1.8.1 query [SEC=UNCLASSIFIED]" -->
<!-- id="31AF19C9C3A1AF4FA8FBE7A0E8F3DEB81B08AA79_at_exmbs1-b51.ansto.gov.au" -->
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
<strong>Subject:</strong> [OMPI users] 1.8.1 query [SEC=UNCLASSIFIED]<br>
<strong>From:</strong> DOHERTY, Greg (<em>gdz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-28 16:52:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26242.php">Ralph Castain: "Re: [OMPI users] 1.8.1 query [SEC=UNCLASSIFIED]"</a>
<li><strong>Previous message:</strong> <a href="26240.php">Ralph Castain: "Re: [OMPI users] 1.8.1 [SEC=UNCLASSIFIED]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26242.php">Ralph Castain: "Re: [OMPI users] 1.8.1 query [SEC=UNCLASSIFIED]"</a>
<li><strong>Reply:</strong> <a href="26242.php">Ralph Castain: "Re: [OMPI users] 1.8.1 query [SEC=UNCLASSIFIED]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you Ralph for the advice. I will move on to try 1.8.4 as soon as I can.
<br>
The first torque job asks for nodes=1:ppn=16:whatever
<br>
The second job asks for nodes=1:ppn=16:whatever
<br>
Both jobs happen to finish up on the same 64 core node. Each is running on its own set of 16 cores 0-15, and 16-31 respectively.
<br>
As soon as the second one starts, core utilisation reported by top drops from 100% to 50% (on both). If I qdel it, the first one recovers immediately to 100%.
<br>
The behaviour reported by top is an accurate reflection of the progress of the calculations.
<br>
Greg
<br>
-------------------------------------------------------------------------------------------------------
<br>
<p>Message: 1
<br>
Date: Wed, 28 Jan 2015 05:39:49 +0000
<br>
From: &quot;DOHERTY, Greg&quot; &lt;gdz_at_[hidden]&gt;
<br>
To: &quot;users_at_[hidden]&quot; &lt;users_at_[hidden]&gt;
<br>
Subject: [OMPI users] 1.8.1 [SEC=UNCLASSIFIED]
<br>
Message-ID:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;31AF19C9C3A1AF4FA8FBE7A0E8F3DEB81B08A875_at_[hidden]&gt;
<br>
Content-Type: text/plain; charset=&quot;us-ascii&quot;
<br>
<p>This might or might not be related to openmpi 1.8.1. I have not seen the problem with the same program and previous versions of openmpi We have 64 core AMD nodes. I have recently recompiled  a large Monte Carlo program using 1.8.1 version of openmpi. Users start this program using maui/torque asking for a number of cores, usually on only one node. One run of the program asking for any number of cores up to 64 runs with full cpu utilisation on each core. A user might start a run asking for 16 cores - fine. Then he starts a second run on the same node, asking for another 16 cores. Immediately the cpu utilisation on all cores of the first job drops to 50%, as it is for the newly starting job. If a different program were using the remaining 32 cores on the same node at the same time, the cpu utilisation of its cores is unaffected. If we qdel the second 16 core job, the cpu utilisation of each core of the first job immediately climbs back to 100%. Any suggestions please, on where I might start looking for the solution to this problem?
<br>
Greg Doherty
<br>
ANSTO
<br>
-------------- next part --------------
<br>
HTML attachment scrubbed and removed
<br>
<p>------------------------------
<br>
<p>Message: 2
<br>
Date: Wed, 28 Jan 2015 06:16:33 -0600
<br>
From: Ralph Castain &lt;rhc_at_[hidden]&gt;
<br>
To: Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] 1.8.1 [SEC=UNCLASSIFIED]
<br>
Message-ID:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;CAMD57oeZpQzQX_WZ3B8X5AzdGUG3+RE1nD==8hgpw3_Ra28ocw_at_[hidden]&gt;
<br>
Content-Type: text/plain; charset=&quot;utf-8&quot;
<br>
<p>I'm not entirely clear on the sequence of commands here. Is the user requesting a new allocation from maui/torque for each run? In this case, it's possible we aren't correctly picking up the external binding from Torque. This would likely be a bug we would need to fix.
<br>
<p>Or is the user obtaining a single allocation of the entire node, and then using mpirun to start multiple jobs in parallel? In this case, the issue is that the user needs to tell mpirun which cpus to confine itself to or else it will always assume that all cpus belong to it. This will lead to overloading the lower core numbers. The problem here can be resolved by adding --cpuset 0,1,2 (or whatever pattern you like) to each cmd line.
<br>
<p>You might also consider updating to 1.8.4 as we did fix some integration bugs. I don't recall something specific to this question, but it could be my memory at fault.
<br>
<p>Ralph
<br>
<p><p>On Tue, Jan 27, 2015 at 11:39 PM, DOHERTY, Greg &lt;gdz_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  This might or might not be related to openmpi 1.8.1. I have not seen 
</span><br>
<span class="quotelev1">&gt; the problem with the same program and previous versions of openmpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have 64 core AMD nodes. I have recently recompiled  a large Monte 
</span><br>
<span class="quotelev1">&gt; Carlo program using 1.8.1 version of openmpi. Users start this program 
</span><br>
<span class="quotelev1">&gt; using maui/torque asking for a number of cores, usually on only one 
</span><br>
<span class="quotelev1">&gt; node. One run of the program asking for any number of cores up to 64 
</span><br>
<span class="quotelev1">&gt; runs with full cpu utilisation on each core. A user might start a run asking for 16 cores ?
</span><br>
<span class="quotelev1">&gt; fine. Then he starts a second run on the same node, asking for another 
</span><br>
<span class="quotelev1">&gt; 16 cores. Immediately the cpu utilisation on all cores of the first 
</span><br>
<span class="quotelev1">&gt; job drops to 50%, as it is for the newly starting job. If a different 
</span><br>
<span class="quotelev1">&gt; program were using the remaining 32 cores on the same node at the same 
</span><br>
<span class="quotelev1">&gt; time, the cpu utilisation of its cores is unaffected. If we qdel the 
</span><br>
<span class="quotelev1">&gt; second 16 core job, the cpu utilisation of each core of the first job 
</span><br>
<span class="quotelev1">&gt; immediately climbs back to 100%. Any suggestions please, on where I 
</span><br>
<span class="quotelev1">&gt; might start looking for the solution to this problem?
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
-------------- next part --------------
<br>
HTML attachment scrubbed and removed
<br>
<p>------------------------------
<br>
<p>Subject: Digest Footer
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>------------------------------
<br>
<p>End of users Digest, Vol 3106, Issue 1
<br>
**************************************
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26242.php">Ralph Castain: "Re: [OMPI users] 1.8.1 query [SEC=UNCLASSIFIED]"</a>
<li><strong>Previous message:</strong> <a href="26240.php">Ralph Castain: "Re: [OMPI users] 1.8.1 [SEC=UNCLASSIFIED]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26242.php">Ralph Castain: "Re: [OMPI users] 1.8.1 query [SEC=UNCLASSIFIED]"</a>
<li><strong>Reply:</strong> <a href="26242.php">Ralph Castain: "Re: [OMPI users] 1.8.1 query [SEC=UNCLASSIFIED]"</a>
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
