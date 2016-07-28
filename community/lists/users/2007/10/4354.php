<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 31 04:18:28 2007" -->
<!-- isoreceived="20071031081828" -->
<!-- sent="Wed, 31 Oct 2007 09:18:21 +0100" -->
<!-- isosent="20071031081821" -->
<!-- name="Murat Knecht" -->
<!-- email="murat.knecht_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Merge blocks depending on spawn order" -->
<!-- id="47283A4D.6050601_at_student.hpi.uni-potsdam.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="A4FF225C-A0F5-477F-91DB-98B5FC396142_at_cisco.com" -->
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
<strong>From:</strong> Murat Knecht (<em>murat.knecht_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-31 04:18:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4355.php">Mattijs Janssens: "[OMPI users] ETH BTL"</a>
<li><strong>Previous message:</strong> <a href="4353.php">Jeff Squyres: "Re: [OMPI users] Merge blocks depending on spawn order"</a>
<li><strong>In reply to:</strong> <a href="4353.php">Jeff Squyres: "Re: [OMPI users] Merge blocks depending on spawn order"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4356.php">Jeff Squyres: "Re: [OMPI users] Merge blocks depending on spawn order"</a>
<li><strong>Reply:</strong> <a href="4356.php">Jeff Squyres: "Re: [OMPI users] Merge blocks depending on spawn order"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes I am, (master and child 1 running on the same machine).
<br>
But knowing the oversubscribing issue, I am using mpi_yield_when_idle
<br>
which should fix precisely this problem, right?
<br>
Or is the option ignored,when initially there is no second process? I
<br>
did give both machines multiple slots, so OpenMPI
<br>
&quot;knows&quot; that the possibility for more oversubscription may arise.
<br>
Confused,
<br>
Murat
<br>
<p><p>Jeff Squyres schrieb:
<br>
<span class="quotelev1">&gt; Are you perchance oversubscribing your nodes?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI does not currently handle well when you initially  
</span><br>
<span class="quotelev1">&gt; undersubscribe your nodes but then, due to spawning, oversubscribe  
</span><br>
<span class="quotelev1">&gt; your nodes.  In this case, OMPI will be aggressively polling in all  
</span><br>
<span class="quotelev1">&gt; processes, not realizing that the node is now oversubscribed and it  
</span><br>
<span class="quotelev1">&gt; should be yielding the processor so that other processes can run.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 30, 2007, at 10:57 AM, Murat Knecht wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; does someone know whether there is a special requirement on the  
</span><br>
<span class="quotelev2">&gt;&gt; order of
</span><br>
<span class="quotelev2">&gt;&gt; spawning processes and the consequent merge of the intercommunicators?
</span><br>
<span class="quotelev2">&gt;&gt; I have two hosts, let's name them local and remote, and a parent  
</span><br>
<span class="quotelev2">&gt;&gt; process
</span><br>
<span class="quotelev2">&gt;&gt; on local that goes on spawning one process on each one of the two  
</span><br>
<span class="quotelev2">&gt;&gt; nodes.
</span><br>
<span class="quotelev2">&gt;&gt; After each spawn the parent process and all existing childs  
</span><br>
<span class="quotelev2">&gt;&gt; participate
</span><br>
<span class="quotelev2">&gt;&gt; in merging the created Intercommunicator into an Intracommunicator  
</span><br>
<span class="quotelev2">&gt;&gt; that
</span><br>
<span class="quotelev2">&gt;&gt; connects - in the end - alls three processes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The weird thing is though, when I spawn them in the order local,  
</span><br>
<span class="quotelev2">&gt;&gt; remote
</span><br>
<span class="quotelev2">&gt;&gt; at the second, the last spawn all three processes block when
</span><br>
<span class="quotelev2">&gt;&gt; encountering MPI_Merge. Though, when I switch the order around to
</span><br>
<span class="quotelev2">&gt;&gt; spawning first the process on remote and then on local, everything  
</span><br>
<span class="quotelev2">&gt;&gt; works
</span><br>
<span class="quotelev2">&gt;&gt; out: The two processes are spawned and the Intracommunicators created
</span><br>
<span class="quotelev2">&gt;&gt; from the Merge. Everything goes well, too, if I decide to spawn both
</span><br>
<span class="quotelev2">&gt;&gt; processes on either one of the machines. (The existing children are
</span><br>
<span class="quotelev2">&gt;&gt; informed via a message that they shall participate in the Spawn and
</span><br>
<span class="quotelev2">&gt;&gt; Merge since these are collective operations.)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there some implicit developer-level knowledge that explains why the
</span><br>
<span class="quotelev2">&gt;&gt; order defines the outcome? Logically, there ought to be no difference.
</span><br>
<span class="quotelev2">&gt;&gt; Btw, I work with two Linux nodes and an ordinary Ethernet-TCP  
</span><br>
<span class="quotelev2">&gt;&gt; connection
</span><br>
<span class="quotelev2">&gt;&gt; between them.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Murat
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4354/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4355.php">Mattijs Janssens: "[OMPI users] ETH BTL"</a>
<li><strong>Previous message:</strong> <a href="4353.php">Jeff Squyres: "Re: [OMPI users] Merge blocks depending on spawn order"</a>
<li><strong>In reply to:</strong> <a href="4353.php">Jeff Squyres: "Re: [OMPI users] Merge blocks depending on spawn order"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4356.php">Jeff Squyres: "Re: [OMPI users] Merge blocks depending on spawn order"</a>
<li><strong>Reply:</strong> <a href="4356.php">Jeff Squyres: "Re: [OMPI users] Merge blocks depending on spawn order"</a>
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
