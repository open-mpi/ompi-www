<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 31 08:51:41 2007" -->
<!-- isoreceived="20071031125141" -->
<!-- sent="Wed, 31 Oct 2007 13:51:37 +0100" -->
<!-- isosent="20071031125137" -->
<!-- name="Murat Knecht" -->
<!-- email="murat.knecht_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Merge blocks depending on spawn order" -->
<!-- id="47287A59.2010005_at_student.hpi.uni-potsdam.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7A5988D6-DA7F-4074-974A-0127CA88326C_at_cisco.com" -->
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
<strong>Date:</strong> 2007-10-31 08:51:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4359.php">Jeff Squyres: "Re: [OMPI users] Merge blocks depending on spawn order"</a>
<li><strong>Previous message:</strong> <a href="4357.php">Jeff Squyres: "Re: [OMPI users] OpenMP and OpenMPI Issue"</a>
<li><strong>In reply to:</strong> <a href="4356.php">Jeff Squyres: "Re: [OMPI users] Merge blocks depending on spawn order"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4359.php">Jeff Squyres: "Re: [OMPI users] Merge blocks depending on spawn order"</a>
<li><strong>Reply:</strong> <a href="4359.php">Jeff Squyres: "Re: [OMPI users] Merge blocks depending on spawn order"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres schrieb:
<br>
<span class="quotelev1">&gt; On Oct 31, 2007, at 1:18 AM, Murat Knecht wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Yes I am, (master and child 1 running on the same machine).
</span><br>
<span class="quotelev2">&gt;&gt; But knowing the oversubscribing issue, I am using  
</span><br>
<span class="quotelev2">&gt;&gt; mpi_yield_when_idle which should fix precisely this problem, right?
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It won't *fix* the problem -- you're still oversubscribing the nodes,  
</span><br>
<span class="quotelev1">&gt; so things will run slowly.  But it should help, in that the processes  
</span><br>
<span class="quotelev1">&gt; will yield regularly.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
Yes. I meant &quot;solving the blocking problem by letting others get some
<br>
CPU time&quot; by &quot;fix&quot;.
<br>
<p><span class="quotelev1">&gt; What version of OMPI are you using?
</span><br>
<span class="quotelev1">&gt;   
</span><br>
I am using 1.2.4
<br>
<p><span class="quotelev2">&gt;&gt; I did give both machines multiple slots, so OpenMPI
</span><br>
<span class="quotelev2">&gt;&gt; &quot;knows&quot; that the possibility for more oversubscription may arise.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not sure what you mean by this -- you should not &quot;lie&quot; to OMPI  
</span><br>
<span class="quotelev1">&gt; and tell it that it has more slots than it physically does.  But keep  
</span><br>
<span class="quotelev1">&gt; in mind that, as I described in my first mail, OMPI does not  
</span><br>
<span class="quotelev1">&gt; currently re-compute the number of processes on a host as you spawn  
</span><br>
<span class="quotelev1">&gt; (which can lead to the oversubscription problem).  If you're  
</span><br>
<span class="quotelev1">&gt; explicitly setting yield_when_idle, that *may* help, but we may or  
</span><br>
<span class="quotelev1">&gt; may not be explicitly propoagating that value to spawned  
</span><br>
<span class="quotelev1">&gt; processes...  I'll have to check.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
In the hostfile I specified for each host the number of physically
<br>
available cores. Together with the &quot;yield&quot; setting I hoped the
<br>
oversubscription would be recognised even if the &quot;oversubscribing&quot;
<br>
processes are dynamically started.
<br>
I re-checked the high/low parameter, but it does seem alright. Would be
<br>
kind of awkward for this to be the reason, as the problem seems to
<br>
depend on the host and the order.
<br>
<p>Thanks,
<br>
Murat
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4358/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4359.php">Jeff Squyres: "Re: [OMPI users] Merge blocks depending on spawn order"</a>
<li><strong>Previous message:</strong> <a href="4357.php">Jeff Squyres: "Re: [OMPI users] OpenMP and OpenMPI Issue"</a>
<li><strong>In reply to:</strong> <a href="4356.php">Jeff Squyres: "Re: [OMPI users] Merge blocks depending on spawn order"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4359.php">Jeff Squyres: "Re: [OMPI users] Merge blocks depending on spawn order"</a>
<li><strong>Reply:</strong> <a href="4359.php">Jeff Squyres: "Re: [OMPI users] Merge blocks depending on spawn order"</a>
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
