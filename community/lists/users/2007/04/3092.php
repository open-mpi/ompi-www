<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Apr 19 08:17:43 2007" -->
<!-- isoreceived="20070419121743" -->
<!-- sent="Thu, 19 Apr 2007 08:17:07 -0400" -->
<!-- isosent="20070419121707" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to force OpenMPI to use specific interconnect" -->
<!-- id="917971C0-0862-4A39-8696-096E7D6740D1_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="46275D6C.7020009_at_aplpi.com" -->
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
<strong>Date:</strong> 2007-04-19 08:17:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3093.php">Babu Bhai: "[OMPI users] new installation problem"</a>
<li><strong>Previous message:</strong> <a href="3091.php">stephen mulcahy: "Re: [OMPI users] How to force OpenMPI to use specific interconnect"</a>
<li><strong>In reply to:</strong> <a href="3091.php">stephen mulcahy: "Re: [OMPI users] How to force OpenMPI to use specific interconnect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3098.php">stephen mulcahy: "Re: [OMPI users] How to force OpenMPI to use specific interconnect"</a>
<li><strong>Reply:</strong> <a href="3098.php">stephen mulcahy: "Re: [OMPI users] How to force OpenMPI to use specific interconnect"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, this is sounding more mysterious.  Please send the output listed  
<br>
here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p><p>On Apr 19, 2007, at 8:15 AM, stephen mulcahy wrote:
<br>
<p><span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; That's truly odd -- I can't imagine why you wouldn't get the TCP
</span><br>
<span class="quotelev2">&gt;&gt; transport with the above command line.  But the latencies, as you
</span><br>
<span class="quotelev2">&gt;&gt; mentioned, are far too low for TCP.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To be absolutely certain that you're not getting the IB transport, go
</span><br>
<span class="quotelev2">&gt;&gt; to the $prefix/lib/openmpi directory and make a bogus subdirectory
</span><br>
<span class="quotelev2">&gt;&gt; (e.g., &quot;mkdir foo&quot;).  Then move the *openib* and *mvapi* components
</span><br>
<span class="quotelev2">&gt;&gt; into that subdirectory (you'll likely only have either &quot;openib&quot; *or*
</span><br>
<span class="quotelev2">&gt;&gt; &quot;mvapi&quot; -- not both).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Then try running again.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What is stranger still is that I can't find any *openib* or *mvapi*
</span><br>
<span class="quotelev1">&gt; components in that subdirectory so I'm left wondering what exactly  
</span><br>
<span class="quotelev1">&gt; it's
</span><br>
<span class="quotelev1">&gt; using to communicate. I don't think it's using shared memory because
</span><br>
<span class="quotelev1">&gt; I've run a shared memory test aswell and the latencies are lower  
</span><br>
<span class="quotelev1">&gt; with that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Perhaps it's interacting with something else installed somewhere on  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; system?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -stephen
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Stephen Mulcahy, Applepie Solutions Ltd., Innovation in Business  
</span><br>
<span class="quotelev1">&gt; Center,
</span><br>
<span class="quotelev1">&gt; GMIT, Dublin Rd, Galway, Ireland.  +353.91.751262  http:// 
</span><br>
<span class="quotelev1">&gt; www.aplpi.com
</span><br>
<span class="quotelev1">&gt; Registered in Ireland, no. 289353 (5 Woodlands Avenue, Renmore,  
</span><br>
<span class="quotelev1">&gt; Galway)
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
<li><strong>Next message:</strong> <a href="3093.php">Babu Bhai: "[OMPI users] new installation problem"</a>
<li><strong>Previous message:</strong> <a href="3091.php">stephen mulcahy: "Re: [OMPI users] How to force OpenMPI to use specific interconnect"</a>
<li><strong>In reply to:</strong> <a href="3091.php">stephen mulcahy: "Re: [OMPI users] How to force OpenMPI to use specific interconnect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3098.php">stephen mulcahy: "Re: [OMPI users] How to force OpenMPI to use specific interconnect"</a>
<li><strong>Reply:</strong> <a href="3098.php">stephen mulcahy: "Re: [OMPI users] How to force OpenMPI to use specific interconnect"</a>
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
