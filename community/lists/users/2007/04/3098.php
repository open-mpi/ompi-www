<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Apr 19 18:24:52 2007" -->
<!-- isoreceived="20070419222452" -->
<!-- sent="Thu, 19 Apr 2007 23:24:56 +0100" -->
<!-- isosent="20070419222456" -->
<!-- name="stephen mulcahy" -->
<!-- email="smulcahy_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to force OpenMPI to use specific interconnect" -->
<!-- id="4627EC38.1020808_at_aplpi.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="917971C0-0862-4A39-8696-096E7D6740D1_at_cisco.com" -->
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
<strong>From:</strong> stephen mulcahy (<em>smulcahy_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-19 18:24:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3099.php">Jeff Squyres: "Re: [OMPI users] How to force OpenMPI to use specific interconnect"</a>
<li><strong>Previous message:</strong> <a href="3097.php">George Bosilca: "Re: [OMPI users] Datatype construction, serious limitation (was: Signal: Segmentation fault (11) Problem)"</a>
<li><strong>In reply to:</strong> <a href="3092.php">Jeff Squyres: "Re: [OMPI users] How to force OpenMPI to use specific interconnect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3099.php">Jeff Squyres: "Re: [OMPI users] How to force OpenMPI to use specific interconnect"</a>
<li><strong>Reply:</strong> <a href="3099.php">Jeff Squyres: "Re: [OMPI users] How to force OpenMPI to use specific interconnect"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I only have access to this test system for another 24 hours or so so I'm 
<br>
not sure it's worth any more of your efforts. Coupled with the fact that 
<br>
I don't have root on the system in question it could be more work too 
<br>
figure out whats going on than its worth.
<br>
<p>Thanks for your help so far,
<br>
<p>-stephen
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Yes, this is sounding more mysterious.  Please send the output listed  
</span><br>
<span class="quotelev1">&gt; here:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 19, 2007, at 8:15 AM, stephen mulcahy wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; That's truly odd -- I can't imagine why you wouldn't get the TCP
</span><br>
<span class="quotelev3">&gt;&gt;&gt; transport with the above command line.  But the latencies, as you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mentioned, are far too low for TCP.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To be absolutely certain that you're not getting the IB transport, go
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to the $prefix/lib/openmpi directory and make a bogus subdirectory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (e.g., &quot;mkdir foo&quot;).  Then move the *openib* and *mvapi* components
</span><br>
<span class="quotelev3">&gt;&gt;&gt; into that subdirectory (you'll likely only have either &quot;openib&quot; *or*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;mvapi&quot; -- not both).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Then try running again.
</span><br>
<span class="quotelev2">&gt;&gt; What is stranger still is that I can't find any *openib* or *mvapi*
</span><br>
<span class="quotelev2">&gt;&gt; components in that subdirectory so I'm left wondering what exactly  
</span><br>
<span class="quotelev2">&gt;&gt; it's
</span><br>
<span class="quotelev2">&gt;&gt; using to communicate. I don't think it's using shared memory because
</span><br>
<span class="quotelev2">&gt;&gt; I've run a shared memory test aswell and the latencies are lower  
</span><br>
<span class="quotelev2">&gt;&gt; with that.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Perhaps it's interacting with something else installed somewhere on  
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; system?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -stephen
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Stephen Mulcahy, Applepie Solutions Ltd., Innovation in Business  
</span><br>
<span class="quotelev2">&gt;&gt; Center,
</span><br>
<span class="quotelev2">&gt;&gt; GMIT, Dublin Rd, Galway, Ireland.  +353.91.751262  http:// 
</span><br>
<span class="quotelev2">&gt;&gt; www.aplpi.com
</span><br>
<span class="quotelev2">&gt;&gt; Registered in Ireland, no. 289353 (5 Woodlands Avenue, Renmore,  
</span><br>
<span class="quotelev2">&gt;&gt; Galway)
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
-- 
Stephen Mulcahy, Applepie Solutions Ltd, Innovation in Business Center,
    GMIT, Dublin Rd, Galway, Ireland.      mailto:smulcahy_at_[hidden]
   mobile:+353.87.2930252  office:+353.91.751262  <a href="http://www.aplpi.com">http://www.aplpi.com</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3099.php">Jeff Squyres: "Re: [OMPI users] How to force OpenMPI to use specific interconnect"</a>
<li><strong>Previous message:</strong> <a href="3097.php">George Bosilca: "Re: [OMPI users] Datatype construction, serious limitation (was: Signal: Segmentation fault (11) Problem)"</a>
<li><strong>In reply to:</strong> <a href="3092.php">Jeff Squyres: "Re: [OMPI users] How to force OpenMPI to use specific interconnect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3099.php">Jeff Squyres: "Re: [OMPI users] How to force OpenMPI to use specific interconnect"</a>
<li><strong>Reply:</strong> <a href="3099.php">Jeff Squyres: "Re: [OMPI users] How to force OpenMPI to use specific interconnect"</a>
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
