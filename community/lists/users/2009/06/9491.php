<?
$subject_val = "Re: [OMPI users] How to use Multiple links withOpenMPI??????????????????";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  1 21:15:51 2009" -->
<!-- isoreceived="20090602011551" -->
<!-- sent="Mon, 1 Jun 2009 21:15:39 -0400" -->
<!-- isosent="20090602011539" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to use Multiple links withOpenMPI??????????????????" -->
<!-- id="4E226450-9E0B-4A40-854C-63D7C5B142ED_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="899042.8431.qm_at_web62002.mail.re1.yahoo.com" -->
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
<strong>Date:</strong> 2009-06-01 21:15:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9492.php">Jeff Squyres: "Re: [OMPI users] How to use Multiple links withOpenMPI??????????????????"</a>
<li><strong>Previous message:</strong> <a href="9490.php">Eugene Loh: "Re: [OMPI users] mpi trace visualization"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/05/9462.php">shan axida: "Re: [OMPI users] How to use Multiple links with OpenMPI??????????????????"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9536.php">shan axida: "Re: [OMPI users] How to use Multiple links withOpenMPI??????????????????"</a>
<li><strong>Reply:</strong> <a href="9536.php">shan axida: "Re: [OMPI users] How to use Multiple links withOpenMPI??????????????????"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Note that striping doesn't really help you much until data sizes get  
<br>
large.  For example, networks tend to have an elbow in the graph where  
<br>
the size of the message starts to matter (clearly evident on your  
<br>
graphs).
<br>
<p>Additionally, you have your network marked as with &quot;hubs&quot; not  
<br>
&quot;switches&quot; -- if you really do have hubs and not switches, you may run  
<br>
into serious contention issues if you start loading up the network.
<br>
<p>With both of these factors, even though you have 4 links, you likely  
<br>
aren't going to see much of a performance benefit until you send large  
<br>
messages (which will be limited by your bus speeds -- can you feed all  
<br>
4 of your links from a single machine at line rate, or will you be  
<br>
limited by PCI bus speeds and contention?), and you may run into  
<br>
secondary performance issues due to contention on your hubs.
<br>
<p><p>On May 28, 2009, at 11:06 PM, shan axida wrote:
<br>
<p><span class="quotelev1">&gt; Thank you! Mr. Jeff Squyres,
</span><br>
<span class="quotelev1">&gt; I have conducted a simple MPI_Bcast experiment in out cluster.
</span><br>
<span class="quotelev1">&gt; The results are shown in the file attached on this e-mail.
</span><br>
<span class="quotelev1">&gt; The hostfile is :
</span><br>
<span class="quotelev1">&gt; -----------------
</span><br>
<span class="quotelev1">&gt; hostname1 slots=4
</span><br>
<span class="quotelev1">&gt; hostname2 slots=4
</span><br>
<span class="quotelev1">&gt; hostname3 slots=4
</span><br>
<span class="quotelev1">&gt; ....
</span><br>
<span class="quotelev1">&gt; ....
</span><br>
<span class="quotelev1">&gt; hostname16 slots=4
</span><br>
<span class="quotelev1">&gt; -----------------
</span><br>
<span class="quotelev1">&gt; As we can see in the figure, it is little faster than single link
</span><br>
<span class="quotelev1">&gt; when we use 2,3,4 links between nodes.
</span><br>
<span class="quotelev1">&gt; My question is what would be the reason to make almost the same
</span><br>
<span class="quotelev1">&gt; performance when we use 2,3,4 links ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Axida
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; &lt;MPI_Bcast-ypc05xx.pdf&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="9492.php">Jeff Squyres: "Re: [OMPI users] How to use Multiple links withOpenMPI??????????????????"</a>
<li><strong>Previous message:</strong> <a href="9490.php">Eugene Loh: "Re: [OMPI users] mpi trace visualization"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/05/9462.php">shan axida: "Re: [OMPI users] How to use Multiple links with OpenMPI??????????????????"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9536.php">shan axida: "Re: [OMPI users] How to use Multiple links withOpenMPI??????????????????"</a>
<li><strong>Reply:</strong> <a href="9536.php">shan axida: "Re: [OMPI users] How to use Multiple links withOpenMPI??????????????????"</a>
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
