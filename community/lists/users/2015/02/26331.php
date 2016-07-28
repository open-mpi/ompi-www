<?
$subject_val = "Re: [OMPI users] 1.8.1 query [SEC=UNCLASSIFIED]";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 16 23:38:10 2015" -->
<!-- isoreceived="20150217043810" -->
<!-- sent="Mon, 16 Feb 2015 20:38:06 -0800" -->
<!-- isosent="20150217043806" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 1.8.1 query [SEC=UNCLASSIFIED]" -->
<!-- id="EF20644E-3B7A-4C45-9253-1523A4F16508_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAMD57of=d_ujMC9pM7GBPYyh2fusv3-cd6d2rTEWeFq2778ayA_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-02-16 23:38:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26332.php">Tarandeep Kalra: "[OMPI users] mpirun error on MAC OSX 10.6.8"</a>
<li><strong>Previous message:</strong> <a href="26330.php">Mehmet Belgin: "Re: [OMPI users] Is there a way to define a dynamic installation path for OpenMPI?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/01/26242.php">Ralph Castain: "Re: [OMPI users] 1.8.1 query [SEC=UNCLASSIFIED]"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yo Greg
<br>
<p>Is this still an issue for you? If so, could you please provide me with the requested info? I'm getting ready to start the release cycle on 1.8.5, so now would be the time to address this
<br>
<p><p><span class="quotelev1">&gt; On Jan 28, 2015, at 1:55 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ah, indeed - sounds like we are not correctly picking up the cpuset. Can you pass me the environ from the procs, and the contents of the $PBS_HOSTFILE? IIRC, Torque isn't going to bind us to those cores, but instead sets something into the environ or the allocation that we need to correctly parse.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Jan 28, 2015 at 3:52 PM, DOHERTY, Greg &lt;gdz_at_[hidden] &lt;mailto:gdz_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Thank you Ralph for the advice. I will move on to try 1.8.4 as soon as I can.
</span><br>
<span class="quotelev1">&gt; The first torque job asks for nodes=1:ppn=16:whatever
</span><br>
<span class="quotelev1">&gt; The second job asks for nodes=1:ppn=16:whatever
</span><br>
<span class="quotelev1">&gt; Both jobs happen to finish up on the same 64 core node. Each is running on its own set of 16 cores 0-15, and 16-31 respectively.
</span><br>
<span class="quotelev1">&gt; As soon as the second one starts, core utilisation reported by top drops from 100% to 50% (on both). If I qdel it, the first one recovers immediately to 100%.
</span><br>
<span class="quotelev1">&gt; The behaviour reported by top is an accurate reflection of the progress of the calculations.
</span><br>
<span class="quotelev1">&gt; Greg
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Message: 1
</span><br>
<span class="quotelev1">&gt; Date: Wed, 28 Jan 2015 05:39:49 +0000
</span><br>
<span class="quotelev1">&gt; From: &quot;DOHERTY, Greg&quot; &lt;gdz_at_[hidden] &lt;mailto:gdz_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt; To: &quot;users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&quot; &lt;users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] 1.8.1 [SEC=UNCLASSIFIED]
</span><br>
<span class="quotelev1">&gt; Message-ID:
</span><br>
<span class="quotelev1">&gt;         &lt;31AF19C9C3A1AF4FA8FBE7A0E8F3DEB81B08A875_at_[hidden] &lt;mailto:31AF19C9C3A1AF4FA8FBE7A0E8F3DEB81B08A875_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This might or might not be related to openmpi 1.8.1. I have not seen the problem with the same program and previous versions of openmpi We have 64 core AMD nodes. I have recently recompiled  a large Monte Carlo program using 1.8.1 version of openmpi. Users start this program using maui/torque asking for a number of cores, usually on only one node. One run of the program asking for any number of cores up to 64 runs with full cpu utilisation on each core. A user might start a run asking for 16 cores - fine. Then he starts a second run on the same node, asking for another 16 cores. Immediately the cpu utilisation on all cores of the first job drops to 50%, as it is for the newly starting job. If a different program were using the remaining 32 cores on the same node at the same time, the cpu utilisation of its cores is unaffected. If we qdel the second 16 core job, the cpu utilisation of each core of the first job immediately climbs back to 100%. Any suggestions please, on where
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
<span class="quotelev1">&gt; From: Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] 1.8.1 [SEC=UNCLASSIFIED]
</span><br>
<span class="quotelev1">&gt; Message-ID:
</span><br>
<span class="quotelev1">&gt;         &lt;CAMD57oeZpQzQX_WZ3B8X5AzdGUG3+RE1nD==8hgpw3_Ra28ocw_at_[hidden] &lt;mailto:8hgpw3_Ra28ocw_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;utf-8&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not entirely clear on the sequence of commands here. Is the user requesting a new allocation from maui/torque for each run? In this case, it's possible we aren't correctly picking up the external binding from Torque. This would likely be a bug we would need to fix.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Or is the user obtaining a single allocation of the entire node, and then using mpirun to start multiple jobs in parallel? In this case, the issue is that the user needs to tell mpirun which cpus to confine itself to or else it will always assume that all cpus belong to it. This will lead to overloading the lower core numbers. The problem here can be resolved by adding --cpuset 0,1,2 (or whatever pattern you like) to each cmd line.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You might also consider updating to 1.8.4 as we did fix some integration bugs. I don't recall something specific to this question, but it could be my memory at fault.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Jan 27, 2015 at 11:39 PM, DOHERTY, Greg &lt;gdz_at_[hidden] &lt;mailto:gdz_at_[hidden]&gt;&gt; wrote:
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
<span class="quotelev2">&gt; &gt; runs with full cpu utilisation on each core. A user might start a run asking for 16 cores ?
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
<span class="quotelev2">&gt; &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/lists/users/2015/01/26239.php">http://www.open-mpi.org/community/lists/users/2015/01/26239.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/01/26239.php">http://www.open-mpi.org/community/lists/users/2015/01/26239.php</a>&gt;
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
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
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
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/01/26241.php">http://www.open-mpi.org/community/lists/users/2015/01/26241.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/01/26241.php">http://www.open-mpi.org/community/lists/users/2015/01/26241.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26331/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26332.php">Tarandeep Kalra: "[OMPI users] mpirun error on MAC OSX 10.6.8"</a>
<li><strong>Previous message:</strong> <a href="26330.php">Mehmet Belgin: "Re: [OMPI users] Is there a way to define a dynamic installation path for OpenMPI?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/01/26242.php">Ralph Castain: "Re: [OMPI users] 1.8.1 query [SEC=UNCLASSIFIED]"</a>
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
