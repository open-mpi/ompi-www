<?
$subject_val = "Re: [OMPI users] How to use Multiple links withOpenMPI??????????????????";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  1 21:18:24 2009" -->
<!-- isoreceived="20090602011824" -->
<!-- sent="Mon, 1 Jun 2009 21:18:14 -0400" -->
<!-- isosent="20090602011814" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to use Multiple links withOpenMPI??????????????????" -->
<!-- id="30C6AF9E-D279-4A85-AE18-C6A7DE19D084_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="86052.45785.qm_at_web62005.mail.re1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to use Multiple links withOpenMPI??????????????????<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-01 21:18:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9493.php">jacob Balthazor: "[OMPI users] Fedora install problem"</a>
<li><strong>Previous message:</strong> <a href="9491.php">Jeff Squyres: "Re: [OMPI users] How to use Multiple links withOpenMPI??????????????????"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/05/9463.php">shan axida: "Re: [OMPI users] How to use Multiple links with OpenMPI??????????????????"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/05/9403.php">Peter Kjellstrom: "Re: [OMPI users] scaling problem with openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 29, 2009, at 12:31 AM, shan axida wrote:
<br>
<p><span class="quotelev1">&gt; Is it true to use bidirectianal communication with MPI in ethernet  
</span><br>
<span class="quotelev1">&gt; Cluster?
</span><br>
<p>Are you asking if Open MPI uses bi-direction TCP sockets?  Yes, it  
<br>
does: we open one TCP socket between the MPI sender and receiver, and  
<br>
if the order is reversed (receiver becomes sender), we'll use the same  
<br>
socket.
<br>
<p><span class="quotelev1">&gt; I have tried once (I thought, it is possible because of fully duplex  
</span><br>
<span class="quotelev1">&gt; swithes).
</span><br>
<span class="quotelev1">&gt;  However, I could not get bandwidth improvement as I was expecting.
</span><br>
<p>If you really are using hubs, then if you have processes A and B both  
<br>
sending to each other simultaneously across the same link, you're  
<br>
going to have contention and one of them will have to wait.
<br>
<p>Even if you do have switches, there is a *wide* performance variation  
<br>
of low-quality switches.  Most low-cost ethernet 1GB switches perform  
<br>
correctly, but do not necessarily provide the same high performance  
<br>
that you can get with higher-cost switches (i.e., you get what you pay  
<br>
for).
<br>
<p><span class="quotelev1">&gt; If you answer is YES, would you please tell me about pseudocode for
</span><br>
<span class="quotelev1">&gt; bidirectional communication ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you.
</span><br>
<span class="quotelev1">&gt; Axida
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, May 27, 2009 11:28:42 PM
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] How to use Multiple links with  
</span><br>
<span class="quotelev1">&gt; OpenMPI??????????????????
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI considers hosts differently than network links.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So you should only list the actual hostname in the hostfile, with  
</span><br>
<span class="quotelev1">&gt; slots equal to the number of processors (4 in your case, I think?).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Once the MPI processes are launched, they each look around on the  
</span><br>
<span class="quotelev1">&gt; host that they're running and find network paths to each of their  
</span><br>
<span class="quotelev1">&gt; peers.  If they are multiple paths between pairs of peers, Open MPI  
</span><br>
<span class="quotelev1">&gt; will round-robin stripe messages across each of the links.  We don't  
</span><br>
<span class="quotelev1">&gt; really have an easy setting for each peer pair only using 1 link.   
</span><br>
<span class="quotelev1">&gt; Indeed, since connectivity is bidirectional, the traffic patterns  
</span><br>
<span class="quotelev1">&gt; become less obvious if you want MPI_COMM_WORLD rank X to only use  
</span><br>
<span class="quotelev1">&gt; link Y -- what does that mean to the other 4 MPI processes on the  
</span><br>
<span class="quotelev1">&gt; other host (with whom you have assumedly assigned their own  
</span><br>
<span class="quotelev1">&gt; individual links as well)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 26, 2009, at 12:24 AM, shan axida wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi everyone,
</span><br>
<span class="quotelev2">&gt; &gt; I want to ask how to use multiple links (multiple NICs) with  
</span><br>
<span class="quotelev1">&gt; OpenMPI.
</span><br>
<span class="quotelev2">&gt; &gt; For example, how can I assign a link to each process, if there are  
</span><br>
<span class="quotelev1">&gt; 4 links
</span><br>
<span class="quotelev2">&gt; &gt; and 4 processors on each node in our cluster?
</span><br>
<span class="quotelev2">&gt; &gt; Is this a correct way?
</span><br>
<span class="quotelev2">&gt; &gt; hostfile:
</span><br>
<span class="quotelev2">&gt; &gt; ----------------------
</span><br>
<span class="quotelev2">&gt; &gt; host1-eth0 slots=1
</span><br>
<span class="quotelev2">&gt; &gt; host1-eth1 slots=1
</span><br>
<span class="quotelev2">&gt; &gt; host1-eth2 slots=1
</span><br>
<span class="quotelev2">&gt; &gt; host1-eth3 slots=1
</span><br>
<span class="quotelev2">&gt; &gt; host2-eth0 slots=1
</span><br>
<span class="quotelev2">&gt; &gt; host2-eth1 slots=1
</span><br>
<span class="quotelev2">&gt; &gt; host2-eth2 slots=1
</span><br>
<span class="quotelev2">&gt; &gt; host2-eth3 slots=1
</span><br>
<span class="quotelev2">&gt; &gt; ...            ...
</span><br>
<span class="quotelev2">&gt; &gt; ...          ...
</span><br>
<span class="quotelev2">&gt; &gt; host16-eth0 slots=1
</span><br>
<span class="quotelev2">&gt; &gt; host16-eth1 slots=1
</span><br>
<span class="quotelev2">&gt; &gt; host16-eth2 slots=1
</span><br>
<span class="quotelev2">&gt; &gt; host16-eth3 slots=1
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9493.php">jacob Balthazor: "[OMPI users] Fedora install problem"</a>
<li><strong>Previous message:</strong> <a href="9491.php">Jeff Squyres: "Re: [OMPI users] How to use Multiple links withOpenMPI??????????????????"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/05/9463.php">shan axida: "Re: [OMPI users] How to use Multiple links with OpenMPI??????????????????"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/05/9403.php">Peter Kjellstrom: "Re: [OMPI users] scaling problem with openmpi"</a>
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
