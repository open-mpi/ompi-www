<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 31 08:24:05 2007" -->
<!-- isoreceived="20071031122405" -->
<!-- sent="Wed, 31 Oct 2007 05:23:55 -0700" -->
<!-- isosent="20071031122355" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Merge blocks depending on spawn order" -->
<!-- id="7A5988D6-DA7F-4074-974A-0127CA88326C_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="47283A4D.6050601_at_student.hpi.uni-potsdam.de" -->
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
<strong>Date:</strong> 2007-10-31 08:23:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4357.php">Jeff Squyres: "Re: [OMPI users] OpenMP and OpenMPI Issue"</a>
<li><strong>Previous message:</strong> <a href="4355.php">Mattijs Janssens: "[OMPI users] ETH BTL"</a>
<li><strong>In reply to:</strong> <a href="4354.php">Murat Knecht: "Re: [OMPI users] Merge blocks depending on spawn order"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4358.php">Murat Knecht: "Re: [OMPI users] Merge blocks depending on spawn order"</a>
<li><strong>Reply:</strong> <a href="4358.php">Murat Knecht: "Re: [OMPI users] Merge blocks depending on spawn order"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 31, 2007, at 1:18 AM, Murat Knecht wrote:
<br>
<p><span class="quotelev1">&gt; Yes I am, (master and child 1 running on the same machine).
</span><br>
<span class="quotelev1">&gt; But knowing the oversubscribing issue, I am using  
</span><br>
<span class="quotelev1">&gt; mpi_yield_when_idle which should fix precisely this problem, right?
</span><br>
<p>It won't *fix* the problem -- you're still oversubscribing the nodes,  
<br>
so things will run slowly.  But it should help, in that the processes  
<br>
will yield regularly.
<br>
<p>What version of OMPI are you using?
<br>
<p><span class="quotelev1">&gt; Or is the option ignored,when initially there is no second process?
</span><br>
<p>No, the option should not be ignored.
<br>
<p><span class="quotelev1">&gt; I did give both machines multiple slots, so OpenMPI
</span><br>
<span class="quotelev1">&gt; &quot;knows&quot; that the possibility for more oversubscription may arise.
</span><br>
<p>I'm not sure what you mean by this -- you should not &quot;lie&quot; to OMPI  
<br>
and tell it that it has more slots than it physically does.  But keep  
<br>
in mind that, as I described in my first mail, OMPI does not  
<br>
currently re-compute the number of processes on a host as you spawn  
<br>
(which can lead to the oversubscription problem).  If you're  
<br>
explicitly setting yield_when_idle, that *may* help, but we may or  
<br>
may not be explicitly propoagating that value to spawned  
<br>
processes...  I'll have to check.
<br>
<p>Another possibility is that you might have something wrong in your  
<br>
algorithm.  E.g., did you ensure to set high/low in the  
<br>
intercomm_merge properly?
<br>
<p>You might want to attach to the &quot;frozen&quot; processes and see where  
<br>
exactly they are stuck.
<br>
<p><span class="quotelev1">&gt; Confused,
</span><br>
<span class="quotelev1">&gt; Murat
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres schrieb:
</span><br>
<span class="quotelev2">&gt;&gt; Are you perchance oversubscribing your nodes? Open MPI does not  
</span><br>
<span class="quotelev2">&gt;&gt; currently handle well when you initially undersubscribe your nodes  
</span><br>
<span class="quotelev2">&gt;&gt; but then, due to spawning, oversubscribe   your nodes. In this  
</span><br>
<span class="quotelev2">&gt;&gt; case, OMPI will be aggressively polling in all processes, not  
</span><br>
<span class="quotelev2">&gt;&gt; realizing that the node is now oversubscribed and it should be  
</span><br>
<span class="quotelev2">&gt;&gt; yielding the processor so that other processes can run. On Oct 30,  
</span><br>
<span class="quotelev2">&gt;&gt; 2007, at 10:57 AM, Murat Knecht wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi, does someone know whether there is a special requirement on  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the order of spawning processes and the consequent merge of the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; intercommunicators? I have two hosts, let's name them local and  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; remote, and a parent process on local that goes on spawning one  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process on each one of the two nodes. After each spawn the parent  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process and all existing childs participate in merging the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; created Intercommunicator into an Intracommunicator that connects  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - in the end - alls three processes. The weird thing is though,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; when I spawn them in the order local, remote at the second, the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; last spawn all three processes block when encountering MPI_Merge.  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Though, when I switch the order around to spawning first the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process on remote and then on local, everything works out: The  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; two processes are spawned and the Intracommunicators created from  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the Merge. Everything goes well, too, if I decide to spawn both  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processes on either one of the machines. (The existing children  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; are informed via a message that they shall participate in the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Spawn and Merge since these are collective operations.) Is there  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; some implicit developer-level knowledge that explains why the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; order defines the outcome? Logically, there ought to be no  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; difference. Btw, I work with two Linux nodes and an ordinary  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ethernet-TCP connection between them. Thanks, Murat  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________ users mailing  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; list users_at_[hidden] <a href="http://www.open-mpi.org/mailman/">http://www.open-mpi.org/mailman/</a> 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; listinfo.cgi/users
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
<li><strong>Next message:</strong> <a href="4357.php">Jeff Squyres: "Re: [OMPI users] OpenMP and OpenMPI Issue"</a>
<li><strong>Previous message:</strong> <a href="4355.php">Mattijs Janssens: "[OMPI users] ETH BTL"</a>
<li><strong>In reply to:</strong> <a href="4354.php">Murat Knecht: "Re: [OMPI users] Merge blocks depending on spawn order"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4358.php">Murat Knecht: "Re: [OMPI users] Merge blocks depending on spawn order"</a>
<li><strong>Reply:</strong> <a href="4358.php">Murat Knecht: "Re: [OMPI users] Merge blocks depending on spawn order"</a>
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
