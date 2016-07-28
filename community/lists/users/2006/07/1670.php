<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul 20 10:41:26 2006" -->
<!-- isoreceived="20060720144126" -->
<!-- sent="Thu, 20 Jul 2006 10:41:11 -0400" -->
<!-- isosent="20060720144111" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI applicability" -->
<!-- id="C0E50E47.B091%jsquyres_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="591AC401-CCDC-4401-991B-DB8582CDE3D0_at_umich.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-20 10:41:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1671.php">Frank Gruellich: "Re: [OMPI users] SEGV in libopal during MPI_Alltoall"</a>
<li><strong>Previous message:</strong> <a href="1669.php">Brock Palen: "Re: [OMPI users] MPI applicability"</a>
<li><strong>In reply to:</strong> <a href="1669.php">Brock Palen: "Re: [OMPI users] MPI applicability"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think there are two questions here:
<br>
<p>1. Running MPI applications on &quot;slow&quot; networks (e.g., 100mbps).  This is
<br>
very much application-dependent. If your MPI app doesn't communication with
<br>
other processes much, then it probably won't matter.  If you have
<br>
latency/bandwidth-sensitive applications, then using a &quot;slow&quot; network can
<br>
definitely have a negative impact on performance.
<br>
<p>2. Running MPI applications on resources that are being used by others.  In
<br>
this case, your MPI processes will be competing with other processes for
<br>
CPU, RAM, and other resources -- just like any other process.  Hence, your
<br>
overall performance will depend not only on the application, but also on the
<br>
usage patterns of the other resources (e.g., the workstations and the people
<br>
that use them).
<br>
<p>I have certainly heard of bunches of success stories in this kind of
<br>
environment -- small numbers of relatively lightly-loaded workstations
<br>
(typically &lt;= 16) running small to mid-sized MPI applications, etc.  A
<br>
common case for such scenarios is for development and debugging, or even
<br>
running small versions of jobs when you can't get time on larger resources,
<br>
etc.  Specifically: sometimes running a smaller version of your job is
<br>
better than not running anything at all.
<br>
<p>Hope that helps.
<br>
<p><p>On 7/20/06 10:04 AM, &quot;Brock Palen&quot; &lt;brockp_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Its doable, the scaling will not as good, because a network is a
</span><br>
<span class="quotelev1">&gt; network.  If you are using just regular 100Mbit,  you will not scale
</span><br>
<span class="quotelev1">&gt; as far as really good 1gig ethernet, but we are still talking about
</span><br>
<span class="quotelev1">&gt; tcp which incurs a penalty over networks like infiniband and myrinet.
</span><br>
<span class="quotelev1">&gt; Tcp is the largest issue, its going to be really application
</span><br>
<span class="quotelev1">&gt; dependent you are right.
</span><br>
<span class="quotelev1">&gt; On another note though many of the older cluster that are now out of
</span><br>
<span class="quotelev1">&gt; service used just 100Mbit ethernet and worked.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brock Palen
</span><br>
<span class="quotelev1">&gt; Center for Advanced Computing
</span><br>
<span class="quotelev1">&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev1">&gt; (734)936-1985
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 20, 2006, at 9:27 AM, Vladimir Sipos wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is MPI paradigm applicable to the cluster of regular networked
</span><br>
<span class="quotelev2">&gt;&gt; machines.
</span><br>
<span class="quotelev2">&gt;&gt; That is, does the cost of network IO offset benefits of
</span><br>
<span class="quotelev2">&gt;&gt; parallelization?
</span><br>
<span class="quotelev2">&gt;&gt; My guess is that this really depends on the application itself,
</span><br>
<span class="quotelev2">&gt;&gt; however,
</span><br>
<span class="quotelev2">&gt;&gt; I'm wondering if you guys know of any success stories which involve
</span><br>
<span class="quotelev2">&gt;&gt; MPI
</span><br>
<span class="quotelev2">&gt;&gt; running on a set of networked machines (not beowulf cluster or any
</span><br>
<span class="quotelev2">&gt;&gt; SC).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Vladimir Sipos
</span><br>
<span class="quotelev2">&gt;&gt; Software Engineer
</span><br>
<span class="quotelev2">&gt;&gt; Advertising Technology
</span><br>
<span class="quotelev2">&gt;&gt; CNET Networks, Inc.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev2">&gt;&gt; 
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
<p><p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1671.php">Frank Gruellich: "Re: [OMPI users] SEGV in libopal during MPI_Alltoall"</a>
<li><strong>Previous message:</strong> <a href="1669.php">Brock Palen: "Re: [OMPI users] MPI applicability"</a>
<li><strong>In reply to:</strong> <a href="1669.php">Brock Palen: "Re: [OMPI users] MPI applicability"</a>
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
