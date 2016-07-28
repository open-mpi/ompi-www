<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Dec 21 12:29:55 2006" -->
<!-- isoreceived="20061221172955" -->
<!-- sent="Thu, 21 Dec 2006 08:53:27 -0600" -->
<!-- isosent="20061221145327" -->
<!-- name="Michael John Hanby" -->
<!-- email="mhanby_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Infiniband - Any suggestions on &amp;quot;How can you prove to me that OpenMPI is using it?&amp;quot;" -->
<!-- id="1783B976DF8DCD49B4463FB606CADB222E0567_at_UABEXMB2.ad.uab.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] Infiniband - Any suggestions on &amp;quot;How can you prove to me that OpenMPI is using it?&amp;quot;" -->
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
<strong>From:</strong> Michael John Hanby (<em>mhanby_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-21 09:53:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2397.php">Dennis McRitchie: "[OMPI users] mpicc problems finding libraries (mostly)"</a>
<li><strong>Previous message:</strong> <a href="2395.php">Jeff Squyres: "Re: [OMPI users] Infiniband - Any suggestions on &quot;How can you prove to me that OpenMPI is using it?&quot;"</a>
<li><strong>Maybe in reply to:</strong> <a href="2391.php">Michael John Hanby: "[OMPI users] Infiniband - Any suggestions on &quot;How can you prove to me that OpenMPI is using it?&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2397.php">Dennis McRitchie: "[OMPI users] mpicc problems finding libraries (mostly)"</a>
<li><strong>Reply:</strong> <a href="2397.php">Dennis McRitchie: "[OMPI users] mpicc problems finding libraries (mostly)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Jeff and Andrew, those responses were well thought out and very
<br>
informative.
<br>
<p>I'll run the same test explicitly using TCP for a couple runs and then
<br>
mvapi a couple times.  The results should give the users a warm fuzzy
<br>
that OpenMPI is in fact using the expensive faster network (rather than
<br>
cheep gig-e).
<br>
<p>Thanks again.
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Jeff Squyres
<br>
Sent: Wednesday, December 20, 2006 10:01 PM
<br>
To: Jeff Squyres
<br>
Cc: Open MPI Users
<br>
Subject: Re: [OMPI users] Infiniband - Any suggestions on &quot;How can you
<br>
proveto me that OpenMPI is using it?&quot;
<br>
<p>On Dec 20, 2006, at 7:04 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev2">&gt;&gt; I've been asked by the owner of the cluster &quot;How can you prove to me
</span><br>
<span class="quotelev2">&gt;&gt; that this openmpi job is using the Infiniband network?&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; At first I thought a simple netstat -an on the compute nodes might  
</span><br>
<span class="quotelev2">&gt;&gt; tell
</span><br>
<span class="quotelev2">&gt;&gt; me, however I don't see the Infiniband IP's in the list so I'm  
</span><br>
<span class="quotelev2">&gt;&gt; thinking
</span><br>
<span class="quotelev2">&gt;&gt; maybe I need to be looking elsewhere.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That's correct.
</span><br>
<p>I completely forgot to explain this comment, sorry.
<br>
<p>Open MPI does not use TCP over IB -- it uses the native &quot;verbs&quot;  
<br>
interface (i.e., a lower lever than TCP over IB), and therefore a)  
<br>
doesn't show up in tcpdump/netstat/etc., and b) gets much better  
<br>
performance (TCP demands much processing on the host CPU, whereas  
<br>
verbs can be offloaded to the processor on the HCA).
<br>
<p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2397.php">Dennis McRitchie: "[OMPI users] mpicc problems finding libraries (mostly)"</a>
<li><strong>Previous message:</strong> <a href="2395.php">Jeff Squyres: "Re: [OMPI users] Infiniband - Any suggestions on &quot;How can you prove to me that OpenMPI is using it?&quot;"</a>
<li><strong>Maybe in reply to:</strong> <a href="2391.php">Michael John Hanby: "[OMPI users] Infiniband - Any suggestions on &quot;How can you prove to me that OpenMPI is using it?&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2397.php">Dennis McRitchie: "[OMPI users] mpicc problems finding libraries (mostly)"</a>
<li><strong>Reply:</strong> <a href="2397.php">Dennis McRitchie: "[OMPI users] mpicc problems finding libraries (mostly)"</a>
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
