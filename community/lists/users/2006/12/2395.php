<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Dec 20 23:01:15 2006" -->
<!-- isoreceived="20061221040115" -->
<!-- sent="Wed, 20 Dec 2006 23:01:03 -0500" -->
<!-- isosent="20061221040103" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Infiniband - Any suggestions on &amp;quot;How can you prove to me that OpenMPI is using it?&amp;quot;" -->
<!-- id="49A5A411-9523-4273-965A-C66652FFDB9F_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="D65BB4F4-2278-4812-8FA2-1BB619003F35_at_cisco.com" -->
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
<strong>Date:</strong> 2006-12-20 23:01:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2396.php">Michael John Hanby: "Re: [OMPI users] Infiniband - Any suggestions on &quot;How can you prove to me that OpenMPI is using it?&quot;"</a>
<li><strong>Previous message:</strong> <a href="2394.php">Andrew J Caird: "Re: [OMPI users] Infiniband - Any suggestions on &quot;How can you proveto me that OpenMPI is using it?&quot;"</a>
<li><strong>In reply to:</strong> <a href="2392.php">Jeff Squyres: "Re: [OMPI users] Infiniband - Any suggestions on &quot;How can you prove to me that OpenMPI is using it?&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2396.php">Michael John Hanby: "Re: [OMPI users] Infiniband - Any suggestions on &quot;How can you prove to me that OpenMPI is using it?&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 20, 2006, at 7:04 PM, Jeff Squyres wrote:
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
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2396.php">Michael John Hanby: "Re: [OMPI users] Infiniband - Any suggestions on &quot;How can you prove to me that OpenMPI is using it?&quot;"</a>
<li><strong>Previous message:</strong> <a href="2394.php">Andrew J Caird: "Re: [OMPI users] Infiniband - Any suggestions on &quot;How can you proveto me that OpenMPI is using it?&quot;"</a>
<li><strong>In reply to:</strong> <a href="2392.php">Jeff Squyres: "Re: [OMPI users] Infiniband - Any suggestions on &quot;How can you prove to me that OpenMPI is using it?&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2396.php">Michael John Hanby: "Re: [OMPI users] Infiniband - Any suggestions on &quot;How can you prove to me that OpenMPI is using it?&quot;"</a>
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
