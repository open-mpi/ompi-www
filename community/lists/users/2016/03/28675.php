<?
$subject_val = "Re: [OMPI users] What causes the pingpong bandwidth &quot;hump&quot; on SM?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 10 13:08:26 2016" -->
<!-- isoreceived="20160310180826" -->
<!-- sent="Thu, 10 Mar 2016 18:08:24 +0000" -->
<!-- isosent="20160310180824" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] What causes the pingpong bandwidth &amp;quot;hump&amp;quot; on SM?" -->
<!-- id="092EBBAA-2A33-4E55-891E-ACEA9ABD8185_at_cisco.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="E6B38372B5A4894D811264E60EFF51E82E7E84A8_at_UUSNWE1K.na.utcmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] What causes the pingpong bandwidth &quot;hump&quot; on SM?<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-10 13:08:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28676.php">Vincent Diepeveen: "Re: [OMPI users] What causes the pingpong bandwidth &quot;hump&quot; on SM?"</a>
<li><strong>Previous message:</strong> <a href="28674.php">BRADLEY, PETER C          PW: "Re: [OMPI users] What causes the pingpong bandwidth &quot;hump&quot; on SM?"</a>
<li><strong>In reply to:</strong> <a href="28674.php">BRADLEY, PETER C          PW: "Re: [OMPI users] What causes the pingpong bandwidth &quot;hump&quot; on SM?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28676.php">Vincent Diepeveen: "Re: [OMPI users] What causes the pingpong bandwidth &quot;hump&quot; on SM?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think the information was scattered across a few posts, but the union of which is correct:
<br>
<p>- it depends on the benchmark
<br>
<p>- yes, L1/L2/L3 cache sizes can have a huge effect.  I.e., once the buffer size gets bigger than the cache size, it takes more time to get the message from main RAM
<br>
&nbsp;&nbsp;--&gt; check the output from hwloc's &quot;lstopo&quot; tool to find your cache sizes
<br>
<p>- the specific flavor of shared memory used also has a huge effect.  The default is copy-in/copy-out, but other shared memory mechanisms are also available (e.g., Linux CMA, Linux KNEM, XPMEM)
<br>
<p>Does that help?
<br>
<p><p><span class="quotelev1">&gt; On Mar 10, 2016, at 12:25 PM, BRADLEY, PETER C PW &lt;peter.c.bradley_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is an academic exercise, obviously.  The curve shown comes from one pair of ranks running on the same node alternating between MPI_Send and MPI_Recv.  The most likely suspect is a cache effect, but rather than assuming, I was curious if there might be any other aspects of the implementation at work.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Pete
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Pete, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; how did you measure the bandwidth ? 
</span><br>
<span class="quotelev1">&gt; iirc, IMB benchmark does not reuse send and recv buffers, so the results 
</span><br>
<span class="quotelev1">&gt; could be different. 
</span><br>
<span class="quotelev1">&gt; also, you might want to use a logarithmic scale for the message size, so 
</span><br>
<span class="quotelev1">&gt; information for small messages is easier to read. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thursday, March 10, 2016, BRADLEY, PETER C PW &lt;peter.c.bradley_at_[hidden]&gt; 
</span><br>
<span class="quotelev1">&gt; wrote: 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I&#226;&#128;&#153;m curious what causes the hump in the pingpong bandwidth curve when 
</span><br>
<span class="quotelev2">&gt; &gt; running on shared memory. Here&#226;&#128;&#153;s an example running on a fairly antiquated 
</span><br>
<span class="quotelev2">&gt; &gt; single-socket 4 core laptop with linux (2.6.32 kernel). Is this a cache 
</span><br>
<span class="quotelev2">&gt; &gt; effect? Something in OpenMPI itself, or a combination? 
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
<span class="quotelev2">&gt; &gt; [image: Macintosh HD:Users:up:Pictures:bandwidth_onepair_onenode.png] 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Pete 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/03/28674.php">http://www.open-mpi.org/community/lists/users/2016/03/28674.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28676.php">Vincent Diepeveen: "Re: [OMPI users] What causes the pingpong bandwidth &quot;hump&quot; on SM?"</a>
<li><strong>Previous message:</strong> <a href="28674.php">BRADLEY, PETER C          PW: "Re: [OMPI users] What causes the pingpong bandwidth &quot;hump&quot; on SM?"</a>
<li><strong>In reply to:</strong> <a href="28674.php">BRADLEY, PETER C          PW: "Re: [OMPI users] What causes the pingpong bandwidth &quot;hump&quot; on SM?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28676.php">Vincent Diepeveen: "Re: [OMPI users] What causes the pingpong bandwidth &quot;hump&quot; on SM?"</a>
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
