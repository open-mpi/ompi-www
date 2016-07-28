<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 23 10:23:24 2007" -->
<!-- isoreceived="20071023142324" -->
<!-- sent="Tue, 23 Oct 2007 10:23:11 -0400" -->
<!-- isosent="20071023142311" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 100% CPU load without sm-btl" -->
<!-- id="23DC6B0D-F311-418E-99A7-CC8C4695EE1F_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="471DF478.3000101_at_student.hpi.uni-potsdam.de" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-23 10:23:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4281.php">Troy Telford: "Re: [OMPI users] OMPI &amp; uDAPL"</a>
<li><strong>Previous message:</strong> <a href="4279.php">Murat Knecht: "Re: [OMPI users] 100% CPU load without sm-btl"</a>
<li><strong>In reply to:</strong> <a href="4279.php">Murat Knecht: "Re: [OMPI users] 100% CPU load without sm-btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4283.php">Murat Knecht: "Re: [OMPI users] 100% CPU load without sm-btl"</a>
<li><strong>Reply:</strong> <a href="4283.php">Murat Knecht: "Re: [OMPI users] 100% CPU load without sm-btl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Currently there is no work around this issue. We consider(ed) that  
<br>
when you run an MPI job the cluster is in dedicated mode, so a 100%  
<br>
CPU consumption is acceptable. However, as we discussed at our last  
<br>
meeting, there are others reasons to be able to yield the CPU until a  
<br>
message arrives. Therefore, we plan to have a blocking mode in the  
<br>
near future. The is no timeframe for this, but the discussions  
<br>
already started (that is usually a good sign).
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Oct 23, 2007, at 9:17 AM, Murat Knecht wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; thanks for answering. Unfortunately, I did try that, too. The point  
</span><br>
<span class="quotelev1">&gt; is that i don't understand the ressource consumption. Even if the  
</span><br>
<span class="quotelev1">&gt; processor is yielded, it still is busy waiting, wasting system  
</span><br>
<span class="quotelev1">&gt; resources which could otherwise be used for actual work. Isn't  
</span><br>
<span class="quotelev1">&gt; there some way to activate an interrupt mechanism, so that the wait/ 
</span><br>
<span class="quotelev1">&gt; recv blocks the thread, e.g. puts it to sleep, until notified?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Murat
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tim Mattox schrieb:
</span><br>
<span class="quotelev2">&gt;&gt; You should look at these two FAQ entries: <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a> 
</span><br>
<span class="quotelev2">&gt;&gt; faq/?category=running#oversubscribing <a href="http://www.open-mpi.org/faq/">http://www.open-mpi.org/faq/</a>? 
</span><br>
<span class="quotelev2">&gt;&gt; category=running#force-aggressive-degraded To get what you want,  
</span><br>
<span class="quotelev2">&gt;&gt; you need to force Open MPI to yield the processor rather than be  
</span><br>
<span class="quotelev2">&gt;&gt; aggressively waiting for a message. On 10/23/07, Murat Knecht  
</span><br>
<span class="quotelev2">&gt;&gt; &lt;murat.knecht_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi, Testing a distributed system locally, I couldn't help but  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; notice that a blocking MPI_Recv causes 100% CPU load. I  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; deactivated (at both compile- and run-time) the shared memory bt- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; layer, and specified &quot;tcp, self&quot; to be used. Still one core busy.  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Even on a distributed system I intend to perform work, while  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; waiting for incoming requests. For this purpose having one core  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; busy waiting for requests is uncomfortable to say the least. Does  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenMPI not use some blocking system call to a tcp port  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; internally? Since i deactivated the understandably costly shared- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; memory waits, this seems weird to me. Someone has an explanation  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; or even better a fix / workaround / solution ? thanks, Murat  
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
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4280/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4281.php">Troy Telford: "Re: [OMPI users] OMPI &amp; uDAPL"</a>
<li><strong>Previous message:</strong> <a href="4279.php">Murat Knecht: "Re: [OMPI users] 100% CPU load without sm-btl"</a>
<li><strong>In reply to:</strong> <a href="4279.php">Murat Knecht: "Re: [OMPI users] 100% CPU load without sm-btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4283.php">Murat Knecht: "Re: [OMPI users] 100% CPU load without sm-btl"</a>
<li><strong>Reply:</strong> <a href="4283.php">Murat Knecht: "Re: [OMPI users] 100% CPU load without sm-btl"</a>
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
