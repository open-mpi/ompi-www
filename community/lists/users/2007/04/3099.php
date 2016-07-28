<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Apr 19 19:42:45 2007" -->
<!-- isoreceived="20070419234245" -->
<!-- sent="Thu, 19 Apr 2007 19:42:31 -0400" -->
<!-- isosent="20070419234231" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to force OpenMPI to use specific interconnect" -->
<!-- id="751850BF-F526-4964-A091-1F518FDDAE63_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4627EC38.1020808_at_aplpi.com" -->
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
<strong>Date:</strong> 2007-04-19 19:42:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3100.php">Babu Bhai: "Re: [OMPI users] new installation problem"</a>
<li><strong>Previous message:</strong> <a href="3098.php">stephen mulcahy: "Re: [OMPI users] How to force OpenMPI to use specific interconnect"</a>
<li><strong>In reply to:</strong> <a href="3098.php">stephen mulcahy: "Re: [OMPI users] How to force OpenMPI to use specific interconnect"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry we couldn't figure out it -- let us know if you resume your  
<br>
Open MPI testing.
<br>
<p><p>On Apr 19, 2007, at 6:24 PM, stephen mulcahy wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I only have access to this test system for another 24 hours or so  
</span><br>
<span class="quotelev1">&gt; so I'm
</span><br>
<span class="quotelev1">&gt; not sure it's worth any more of your efforts. Coupled with the fact  
</span><br>
<span class="quotelev1">&gt; that
</span><br>
<span class="quotelev1">&gt; I don't have root on the system in question it could be more work too
</span><br>
<span class="quotelev1">&gt; figure out whats going on than its worth.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your help so far,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -stephen
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Yes, this is sounding more mysterious.  Please send the output listed
</span><br>
<span class="quotelev2">&gt;&gt; here:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 19, 2007, at 8:15 AM, stephen mulcahy wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; That's truly odd -- I can't imagine why you wouldn't get the TCP
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; transport with the above command line.  But the latencies, as you
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mentioned, are far too low for TCP.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; To be absolutely certain that you're not getting the IB  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; transport, go
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to the $prefix/lib/openmpi directory and make a bogus subdirectory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (e.g., &quot;mkdir foo&quot;).  Then move the *openib* and *mvapi* components
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; into that subdirectory (you'll likely only have either &quot;openib&quot;  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *or*
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;mvapi&quot; -- not both).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Then try running again.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What is stranger still is that I can't find any *openib* or *mvapi*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; components in that subdirectory so I'm left wondering what exactly
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it's
</span><br>
<span class="quotelev3">&gt;&gt;&gt; using to communicate. I don't think it's using shared memory because
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've run a shared memory test aswell and the latencies are lower
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with that.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Perhaps it's interacting with something else installed somewhere on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; system?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -stephen
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Stephen Mulcahy, Applepie Solutions Ltd., Innovation in Business
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Center,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; GMIT, Dublin Rd, Galway, Ireland.  +353.91.751262  http://
</span><br>
<span class="quotelev3">&gt;&gt;&gt; www.aplpi.com
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Registered in Ireland, no. 289353 (5 Woodlands Avenue, Renmore,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Galway)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Stephen Mulcahy, Applepie Solutions Ltd, Innovation in Business  
</span><br>
<span class="quotelev1">&gt; Center,
</span><br>
<span class="quotelev1">&gt;     GMIT, Dublin Rd, Galway, Ireland.      mailto:smulcahy_at_[hidden]
</span><br>
<span class="quotelev1">&gt;    mobile:+353.87.2930252  office:+353.91.751262  <a href="http://www.aplpi.com">http://www.aplpi.com</a>
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
<li><strong>Next message:</strong> <a href="3100.php">Babu Bhai: "Re: [OMPI users] new installation problem"</a>
<li><strong>Previous message:</strong> <a href="3098.php">stephen mulcahy: "Re: [OMPI users] How to force OpenMPI to use specific interconnect"</a>
<li><strong>In reply to:</strong> <a href="3098.php">stephen mulcahy: "Re: [OMPI users] How to force OpenMPI to use specific interconnect"</a>
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
