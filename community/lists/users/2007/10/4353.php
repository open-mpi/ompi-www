<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 31 01:24:57 2007" -->
<!-- isoreceived="20071031052457" -->
<!-- sent="Tue, 30 Oct 2007 22:24:31 -0700" -->
<!-- isosent="20071031052431" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Merge blocks depending on spawn order" -->
<!-- id="A4FF225C-A0F5-477F-91DB-98B5FC396142_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="47277087.8050709_at_student.hpi.uni-potsdam.de" -->
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
<strong>Date:</strong> 2007-10-31 01:24:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4354.php">Murat Knecht: "Re: [OMPI users] Merge blocks depending on spawn order"</a>
<li><strong>Previous message:</strong> <a href="4352.php">Jeff Squyres: "Re: [OMPI users] Error initializing openMPI"</a>
<li><strong>In reply to:</strong> <a href="4349.php">Murat Knecht: "[OMPI users] Merge blocks depending on spawn order"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4354.php">Murat Knecht: "Re: [OMPI users] Merge blocks depending on spawn order"</a>
<li><strong>Reply:</strong> <a href="4354.php">Murat Knecht: "Re: [OMPI users] Merge blocks depending on spawn order"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Are you perchance oversubscribing your nodes?
<br>
<p>Open MPI does not currently handle well when you initially  
<br>
undersubscribe your nodes but then, due to spawning, oversubscribe  
<br>
your nodes.  In this case, OMPI will be aggressively polling in all  
<br>
processes, not realizing that the node is now oversubscribed and it  
<br>
should be yielding the processor so that other processes can run.
<br>
<p>On Oct 30, 2007, at 10:57 AM, Murat Knecht wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; does someone know whether there is a special requirement on the  
</span><br>
<span class="quotelev1">&gt; order of
</span><br>
<span class="quotelev1">&gt; spawning processes and the consequent merge of the intercommunicators?
</span><br>
<span class="quotelev1">&gt; I have two hosts, let's name them local and remote, and a parent  
</span><br>
<span class="quotelev1">&gt; process
</span><br>
<span class="quotelev1">&gt; on local that goes on spawning one process on each one of the two  
</span><br>
<span class="quotelev1">&gt; nodes.
</span><br>
<span class="quotelev1">&gt; After each spawn the parent process and all existing childs  
</span><br>
<span class="quotelev1">&gt; participate
</span><br>
<span class="quotelev1">&gt; in merging the created Intercommunicator into an Intracommunicator  
</span><br>
<span class="quotelev1">&gt; that
</span><br>
<span class="quotelev1">&gt; connects - in the end - alls three processes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The weird thing is though, when I spawn them in the order local,  
</span><br>
<span class="quotelev1">&gt; remote
</span><br>
<span class="quotelev1">&gt; at the second, the last spawn all three processes block when
</span><br>
<span class="quotelev1">&gt; encountering MPI_Merge. Though, when I switch the order around to
</span><br>
<span class="quotelev1">&gt; spawning first the process on remote and then on local, everything  
</span><br>
<span class="quotelev1">&gt; works
</span><br>
<span class="quotelev1">&gt; out: The two processes are spawned and the Intracommunicators created
</span><br>
<span class="quotelev1">&gt; from the Merge. Everything goes well, too, if I decide to spawn both
</span><br>
<span class="quotelev1">&gt; processes on either one of the machines. (The existing children are
</span><br>
<span class="quotelev1">&gt; informed via a message that they shall participate in the Spawn and
</span><br>
<span class="quotelev1">&gt; Merge since these are collective operations.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there some implicit developer-level knowledge that explains why the
</span><br>
<span class="quotelev1">&gt; order defines the outcome? Logically, there ought to be no difference.
</span><br>
<span class="quotelev1">&gt; Btw, I work with two Linux nodes and an ordinary Ethernet-TCP  
</span><br>
<span class="quotelev1">&gt; connection
</span><br>
<span class="quotelev1">&gt; between them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Murat
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
<li><strong>Next message:</strong> <a href="4354.php">Murat Knecht: "Re: [OMPI users] Merge blocks depending on spawn order"</a>
<li><strong>Previous message:</strong> <a href="4352.php">Jeff Squyres: "Re: [OMPI users] Error initializing openMPI"</a>
<li><strong>In reply to:</strong> <a href="4349.php">Murat Knecht: "[OMPI users] Merge blocks depending on spawn order"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4354.php">Murat Knecht: "Re: [OMPI users] Merge blocks depending on spawn order"</a>
<li><strong>Reply:</strong> <a href="4354.php">Murat Knecht: "Re: [OMPI users] Merge blocks depending on spawn order"</a>
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
