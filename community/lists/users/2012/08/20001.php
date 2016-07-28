<?
$subject_val = "Re: [OMPI users] openmpi 1.6.1 Questions";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 24 10:45:28 2012" -->
<!-- isoreceived="20120824144528" -->
<!-- sent="Fri, 24 Aug 2012 10:45:22 -0400" -->
<!-- isosent="20120824144522" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi 1.6.1 Questions" -->
<!-- id="66A8D099-223D-49DC-BDB7-996F5D101D6F_at_umich.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="01FDB8BA-FCFC-4A11-908A-B2D36B8B2D56_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi 1.6.1 Questions<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-24 10:45:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20002.php">Shanthini Kannan: "[OMPI users] ORTE_ERROR: orte_ess_base_open failed"</a>
<li><strong>Previous message:</strong> <a href="20000.php">Jeff Squyres: "Re: [OMPI users] openmpi 1.6.1 Questions"</a>
<li><strong>In reply to:</strong> <a href="20000.php">Jeff Squyres: "Re: [OMPI users] openmpi 1.6.1 Questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20008.php">Jeff Squyres: "Re: [OMPI users] openmpi 1.6.1 Questions"</a>
<li><strong>Reply:</strong> <a href="20008.php">Jeff Squyres: "Re: [OMPI users] openmpi 1.6.1 Questions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 24, 2012, at 10:38 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Aug 24, 2012, at 10:28 AM, Brock Palen wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I grabbed the new OMPI 1.6.1 and ran my test that would cause a hang with 1.6.0 with low registered memory.  From reading the release notes rather than hang I would expect:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; * lower performance/fall back to send/receive.
</span><br>
<span class="quotelev2">&gt;&gt; * a notice of failed to allocate registered memory
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In my case I still get a hang, is this expected?  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It can still happen, yes.  The short version is that there are cases that can't easily be fixed in the 1.6 series that involve lazy creation of QPs.  Do you see errors about OMPI failing to create CQ's or QP'?
</span><br>
<p>No IMB (my simple test case) just hangs on an Alltoall indefinitely, 
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This is running with default registered memory limits and I do appreciate  the message that I only have 4GB of registered memory of my 48.  We will also be fixing our load to raise this value, which should make this issue moot.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Did you get a warning about being able to register too little memory?
</span><br>
<p>Correct I do and I like the warning at startup.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Honestly I think what I would want is for MPI to blow up saying &quot;can't allocate registered memory, fatal, contact your admin&quot;, rather than fall back to send/receive and just be slower.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Right now we should be just warning if we can't register 3/4 of your physical memory (we can't really test for anything more than that).  But it doesn't abort.
</span><br>
Ok
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We could add a tunable that makes it abort in this case, if you think that would be useful.
</span><br>
I think so, in my case that would mean a node is miss-configured, and rather than running slowly I want it brought to my attention, 
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20002.php">Shanthini Kannan: "[OMPI users] ORTE_ERROR: orte_ess_base_open failed"</a>
<li><strong>Previous message:</strong> <a href="20000.php">Jeff Squyres: "Re: [OMPI users] openmpi 1.6.1 Questions"</a>
<li><strong>In reply to:</strong> <a href="20000.php">Jeff Squyres: "Re: [OMPI users] openmpi 1.6.1 Questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20008.php">Jeff Squyres: "Re: [OMPI users] openmpi 1.6.1 Questions"</a>
<li><strong>Reply:</strong> <a href="20008.php">Jeff Squyres: "Re: [OMPI users] openmpi 1.6.1 Questions"</a>
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
