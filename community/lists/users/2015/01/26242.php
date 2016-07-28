<?
$subject_val = "Re: [OMPI users] 1.8.1 query [SEC=UNCLASSIFIED]";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 28 16:56:01 2015" -->
<!-- isoreceived="20150128215601" -->
<!-- sent="Wed, 28 Jan 2015 15:55:59 -0600" -->
<!-- isosent="20150128215559" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 1.8.1 query [SEC=UNCLASSIFIED]" -->
<!-- id="CAMD57of=d_ujMC9pM7GBPYyh2fusv3-cd6d2rTEWeFq2778ayA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="31AF19C9C3A1AF4FA8FBE7A0E8F3DEB81B08AA79_at_exmbs1-b51.ansto.gov.au" -->
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
<strong>Subject:</strong> Re: [OMPI users] 1.8.1 query [SEC=UNCLASSIFIED]<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-28 16:55:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26243.php">Dave Turner: "[OMPI users] using multiple IB connections between hosts"</a>
<li><strong>Previous message:</strong> <a href="26241.php">DOHERTY, Greg: "[OMPI users] 1.8.1 query [SEC=UNCLASSIFIED]"</a>
<li><strong>In reply to:</strong> <a href="26241.php">DOHERTY, Greg: "[OMPI users] 1.8.1 query [SEC=UNCLASSIFIED]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/02/26331.php">Ralph Castain: "Re: [OMPI users] 1.8.1 query [SEC=UNCLASSIFIED]"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/02/26331.php">Ralph Castain: "Re: [OMPI users] 1.8.1 query [SEC=UNCLASSIFIED]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah, indeed - sounds like we are not correctly picking up the cpuset. Can
<br>
you pass me the environ from the procs, and the contents of the
<br>
$PBS_HOSTFILE? IIRC, Torque isn't going to bind us to those cores, but
<br>
instead sets something into the environ or the allocation that we need to
<br>
correctly parse.
<br>
<p>Thanks
<br>
Ralph
<br>
<p><p>On Wed, Jan 28, 2015 at 3:52 PM, DOHERTY, Greg &lt;gdz_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Thank you Ralph for the advice. I will move on to try 1.8.4 as soon as I
</span><br>
<span class="quotelev1">&gt; can.
</span><br>
<span class="quotelev1">&gt; The first torque job asks for nodes=1:ppn=16:whatever
</span><br>
<span class="quotelev1">&gt; The second job asks for nodes=1:ppn=16:whatever
</span><br>
<span class="quotelev1">&gt; Both jobs happen to finish up on the same 64 core node. Each is running on
</span><br>
<span class="quotelev1">&gt; its own set of 16 cores 0-15, and 16-31 respectively.
</span><br>
<span class="quotelev1">&gt; As soon as the second one starts, core utilisation reported by top drops
</span><br>
<span class="quotelev1">&gt; from 100% to 50% (on both). If I qdel it, the first one recovers
</span><br>
<span class="quotelev1">&gt; immediately to 100%.
</span><br>
<span class="quotelev1">&gt; The behaviour reported by top is an accurate reflection of the progress of
</span><br>
<span class="quotelev1">&gt; the calculations.
</span><br>
<span class="quotelev1">&gt; Greg
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 1
</span><br>
<span class="quotelev1">&gt; Date: Wed, 28 Jan 2015 05:39:49 +0000
</span><br>
<span class="quotelev1">&gt; From: &quot;DOHERTY, Greg&quot; &lt;gdz_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: &quot;users_at_[hidden]&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] 1.8.1 [SEC=UNCLASSIFIED]
</span><br>
<span class="quotelev1">&gt; Message-ID:
</span><br>
<span class="quotelev1">&gt;         &lt;31AF19C9C3A1AF4FA8FBE7A0E8F3DEB81B08A875_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This might or might not be related to openmpi 1.8.1. I have not seen the
</span><br>
<span class="quotelev1">&gt; problem with the same program and previous versions of openmpi We have 64
</span><br>
<span class="quotelev1">&gt; core AMD nodes. I have recently recompiled  a large Monte Carlo program
</span><br>
<span class="quotelev1">&gt; using 1.8.1 version of openmpi. Users start this program using maui/torque
</span><br>
<span class="quotelev1">&gt; asking for a number of cores, usually on only one node. One run of the
</span><br>
<span class="quotelev1">&gt; program asking for any number of cores up to 64 runs with full cpu
</span><br>
<span class="quotelev1">&gt; utilisation on each core. A user might start a run asking for 16 cores -
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
<span class="quotelev1">&gt; to 100%. Any suggestions please, on where
</span><br>
<span class="quotelev1">&gt;  I might start looking for the solution to this problem?
</span><br>
<span class="quotelev1">&gt; Greg Doherty
</span><br>
<span class="quotelev1">&gt; ANSTO
</span><br>
<span class="quotelev1">&gt; -------------- next part --------------
</span><br>
<span class="quotelev1">&gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 2
</span><br>
<span class="quotelev1">&gt; Date: Wed, 28 Jan 2015 06:16:33 -0600
</span><br>
<span class="quotelev1">&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] 1.8.1 [SEC=UNCLASSIFIED]
</span><br>
<span class="quotelev1">&gt; Message-ID:
</span><br>
<span class="quotelev1">&gt;         &lt;CAMD57oeZpQzQX_WZ3B8X5AzdGUG3+RE1nD==
</span><br>
<span class="quotelev1">&gt; 8hgpw3_Ra28ocw_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;utf-8&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not entirely clear on the sequence of commands here. Is the user
</span><br>
<span class="quotelev1">&gt; requesting a new allocation from maui/torque for each run? In this case,
</span><br>
<span class="quotelev1">&gt; it's possible we aren't correctly picking up the external binding from
</span><br>
<span class="quotelev1">&gt; Torque. This would likely be a bug we would need to fix.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Or is the user obtaining a single allocation of the entire node, and then
</span><br>
<span class="quotelev1">&gt; using mpirun to start multiple jobs in parallel? In this case, the issue is
</span><br>
<span class="quotelev1">&gt; that the user needs to tell mpirun which cpus to confine itself to or else
</span><br>
<span class="quotelev1">&gt; it will always assume that all cpus belong to it. This will lead to
</span><br>
<span class="quotelev1">&gt; overloading the lower core numbers. The problem here can be resolved by
</span><br>
<span class="quotelev1">&gt; adding --cpuset 0,1,2 (or whatever pattern you like) to each cmd line.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You might also consider updating to 1.8.4 as we did fix some integration
</span><br>
<span class="quotelev1">&gt; bugs. I don't recall something specific to this question, but it could be
</span><br>
<span class="quotelev1">&gt; my memory at fault.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Jan 27, 2015 at 11:39 PM, DOHERTY, Greg &lt;gdz_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;  This might or might not be related to openmpi 1.8.1. I have not seen
</span><br>
<span class="quotelev2">&gt; &gt; the problem with the same program and previous versions of openmpi
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; We have 64 core AMD nodes. I have recently recompiled  a large Monte
</span><br>
<span class="quotelev2">&gt; &gt; Carlo program using 1.8.1 version of openmpi. Users start this program
</span><br>
<span class="quotelev2">&gt; &gt; using maui/torque asking for a number of cores, usually on only one
</span><br>
<span class="quotelev2">&gt; &gt; node. One run of the program asking for any number of cores up to 64
</span><br>
<span class="quotelev2">&gt; &gt; runs with full cpu utilisation on each core. A user might start a run
</span><br>
<span class="quotelev1">&gt; asking for 16 cores ?
</span><br>
<span class="quotelev2">&gt; &gt; fine. Then he starts a second run on the same node, asking for another
</span><br>
<span class="quotelev2">&gt; &gt; 16 cores. Immediately the cpu utilisation on all cores of the first
</span><br>
<span class="quotelev2">&gt; &gt; job drops to 50%, as it is for the newly starting job. If a different
</span><br>
<span class="quotelev2">&gt; &gt; program were using the remaining 32 cores on the same node at the same
</span><br>
<span class="quotelev2">&gt; &gt; time, the cpu utilisation of its cores is unaffected. If we qdel the
</span><br>
<span class="quotelev2">&gt; &gt; second 16 core job, the cpu utilisation of each core of the first job
</span><br>
<span class="quotelev2">&gt; &gt; immediately climbs back to 100%. Any suggestions please, on where I
</span><br>
<span class="quotelev2">&gt; &gt; might start looking for the solution to this problem?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Greg Doherty
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ANSTO
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/lists/users/2015/01/26239.php">http://www.open-mpi.org/community/lists/users/2015/01/26239.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; -------------- next part --------------
</span><br>
<span class="quotelev1">&gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Digest Footer
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
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; End of users Digest, Vol 3106, Issue 1
</span><br>
<span class="quotelev1">&gt; **************************************
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/01/26241.php">http://www.open-mpi.org/community/lists/users/2015/01/26241.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26242/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26243.php">Dave Turner: "[OMPI users] using multiple IB connections between hosts"</a>
<li><strong>Previous message:</strong> <a href="26241.php">DOHERTY, Greg: "[OMPI users] 1.8.1 query [SEC=UNCLASSIFIED]"</a>
<li><strong>In reply to:</strong> <a href="26241.php">DOHERTY, Greg: "[OMPI users] 1.8.1 query [SEC=UNCLASSIFIED]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/02/26331.php">Ralph Castain: "Re: [OMPI users] 1.8.1 query [SEC=UNCLASSIFIED]"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/02/26331.php">Ralph Castain: "Re: [OMPI users] 1.8.1 query [SEC=UNCLASSIFIED]"</a>
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
