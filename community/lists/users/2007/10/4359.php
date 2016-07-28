<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 31 11:19:20 2007" -->
<!-- isoreceived="20071031151920" -->
<!-- sent="Wed, 31 Oct 2007 08:19:11 -0700" -->
<!-- isosent="20071031151911" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Merge blocks depending on spawn order" -->
<!-- id="BB9ADA71-8FA3-4B6D-9805-86D995E35E5C_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="47287A59.2010005_at_student.hpi.uni-potsdam.de" -->
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
<strong>Date:</strong> 2007-10-31 11:19:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4360.php">Jorge Parra: "Re: [OMPI users] Error initializing openMPI"</a>
<li><strong>Previous message:</strong> <a href="4358.php">Murat Knecht: "Re: [OMPI users] Merge blocks depending on spawn order"</a>
<li><strong>In reply to:</strong> <a href="4358.php">Murat Knecht: "Re: [OMPI users] Merge blocks depending on spawn order"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I would try attaching to the processes to see where things are  
<br>
getting stuck.
<br>
<p>On Oct 31, 2007, at 5:51 AM, Murat Knecht wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres schrieb:
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 31, 2007, at 1:18 AM, Murat Knecht wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes I am, (master and child 1 running on the same machine). But  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; knowing the oversubscribing issue, I am using mpi_yield_when_idle  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; which should fix precisely this problem, right?
</span><br>
<span class="quotelev2">&gt;&gt; It won't *fix* the problem -- you're still oversubscribing the  
</span><br>
<span class="quotelev2">&gt;&gt; nodes, so things will run slowly. But it should help, in that the  
</span><br>
<span class="quotelev2">&gt;&gt; processes will yield regularly.
</span><br>
<span class="quotelev1">&gt; Yes. I meant &quot;solving the blocking problem by letting others get  
</span><br>
<span class="quotelev1">&gt; some CPU time&quot; by &quot;fix&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What version of OMPI are you using?
</span><br>
<span class="quotelev1">&gt; I am using 1.2.4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I did give both machines multiple slots, so OpenMPI &quot;knows&quot; that  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the possibility for more oversubscription may arise.
</span><br>
<span class="quotelev2">&gt;&gt; I'm not sure what you mean by this -- you should not &quot;lie&quot; to OMPI  
</span><br>
<span class="quotelev2">&gt;&gt; and tell it that it has more slots than it physically does. But  
</span><br>
<span class="quotelev2">&gt;&gt; keep in mind that, as I described in my first mail, OMPI does not  
</span><br>
<span class="quotelev2">&gt;&gt; currently re-compute the number of processes on a host as you  
</span><br>
<span class="quotelev2">&gt;&gt; spawn (which can lead to the oversubscription problem). If you're  
</span><br>
<span class="quotelev2">&gt;&gt; explicitly setting yield_when_idle, that *may* help, but we may or  
</span><br>
<span class="quotelev2">&gt;&gt; may not be explicitly propoagating that value to spawned  
</span><br>
<span class="quotelev2">&gt;&gt; processes... I'll have to check.
</span><br>
<span class="quotelev1">&gt; In the hostfile I specified for each host the number of physically  
</span><br>
<span class="quotelev1">&gt; available cores. Together with the &quot;yield&quot; setting I hoped the  
</span><br>
<span class="quotelev1">&gt; oversubscription would be recognised even if the &quot;oversubscribing&quot;  
</span><br>
<span class="quotelev1">&gt; processes are dynamically started.
</span><br>
<span class="quotelev1">&gt; I re-checked the high/low parameter, but it does seem alright.  
</span><br>
<span class="quotelev1">&gt; Would be kind of awkward for this to be the reason, as the problem  
</span><br>
<span class="quotelev1">&gt; seems to depend on the host and the order.
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
<li><strong>Next message:</strong> <a href="4360.php">Jorge Parra: "Re: [OMPI users] Error initializing openMPI"</a>
<li><strong>Previous message:</strong> <a href="4358.php">Murat Knecht: "Re: [OMPI users] Merge blocks depending on spawn order"</a>
<li><strong>In reply to:</strong> <a href="4358.php">Murat Knecht: "Re: [OMPI users] Merge blocks depending on spawn order"</a>
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
