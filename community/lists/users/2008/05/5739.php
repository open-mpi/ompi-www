<?
$subject_val = "Re: [OMPI users] (no subject)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 27 15:56:22 2008" -->
<!-- isoreceived="20080527195622" -->
<!-- sent="Tue, 27 May 2008 15:56:11 -0400" -->
<!-- isosent="20080527195611" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] (no subject)" -->
<!-- id="3F48BA90-BACA-4085-B979-8B0F31864450_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080527133340.EB4D42B002_at_list.cineca.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] (no subject)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-27 15:56:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5740.php">Graham Jenkins: "Re: [OMPI users] Open MPI instructional videos"</a>
<li><strong>Previous message:</strong> <a href="5738.php">Jeff Squyres: "Re: [OMPI users] [Open MPI Announce] Open MPI instructional videos"</a>
<li><strong>In reply to:</strong> <a href="5734.php">Gabriele Fatigati: "Re: [OMPI users] (no subject)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 27, 2008, at 9:33 AM, Gabriele Fatigati wrote:
<br>
<p><span class="quotelev1">&gt; Great, it works!
</span><br>
<span class="quotelev1">&gt; Thank you very very much.
</span><br>
<span class="quotelev1">&gt; But, can you explain me how this parameter works?
</span><br>
<p>You might want to have a look at this short video for a little  
<br>
background on some relevant OpenFabrics concepts:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/video/?category=openfabrics#openfabrics-concepts">http://www.open-mpi.org/video/?category=openfabrics#openfabrics-concepts</a>
<br>
<p>In v1.2, for short messages, OMPI will sometimes copy your message to  
<br>
a pre-posted receive buffer, and immediately mark the MPI request as  
<br>
&quot;complete&quot;.  Depending on the timing and current network resource  
<br>
usage, the message may or may not have been given to the network stack  
<br>
yet (e.g., if we're out of flow control credits to send to this  
<br>
particular peer).  If your application keeps dipping down into the MPI  
<br>
layer frequently, this situation will almost certainly resolve itself  
<br>
once the receiver becomes active or other events occur to free up  
<br>
available resources.  As such, the early completion optimization  
<br>
pretty much depends on frequent calls to MPI.  Without them, since  
<br>
OMPI currently has no independent progression (e.g., a progress  
<br>
thread), your message will wait until OMPI's internal progress engine  
<br>
is tripped again.
<br>
<p>Hope that helps.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, 15 May 2008 21:40:45 -0400, Jeff Squyres said:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sorry this message escaped for so long it got buried in my INBOX.   
</span><br>
<span class="quotelev2">&gt;&gt; The
</span><br>
<span class="quotelev2">&gt;&gt; problem you're seeing might be related to one we just answered  
</span><br>
<span class="quotelev2">&gt;&gt; about a
</span><br>
<span class="quotelev2">&gt;&gt; similar situation:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/community/lists/users/2008/05/5657.php">http://www.open-mpi.org/community/lists/users/2008/05/5657.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; See if using the pml_ob1_use_early_completion flag works for you.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 30, 2008, at 7:05 AM, Gabriele FATIGATI wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i tried to run SkaMPI benchmark on IBM-BladeCenterLS21-BCX system
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with 256 processors, but test has stopped on &quot;AlltoAll-length&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; routine, with count=8192  for some reasons.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have launched test with:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --mca btl_openib_eager_limit 1024
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Same tests with 128 processor or less, have finished successful.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Different values of eager limit dont' solve the problem. Thanks in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; advance.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gabriele Fatigati
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CINECA Systems &amp; Tecnologies Department
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Supercomputing  Group
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; www.cineca.it                    Tel:    39 051 6171722
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; g.fatigati_at_[hidden]
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
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing
</span><br>
<span class="quotelev1">&gt; --------------------------
</span><br>
<span class="quotelev1">&gt; Gabriele Fatigati
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CINECA Systems &amp; Tecnologies Department
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Supercomputing  Group
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; www.cineca.it                    Tel:    39 051 6171722
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; g.fatigati_at_[hidden]            
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
<li><strong>Next message:</strong> <a href="5740.php">Graham Jenkins: "Re: [OMPI users] Open MPI instructional videos"</a>
<li><strong>Previous message:</strong> <a href="5738.php">Jeff Squyres: "Re: [OMPI users] [Open MPI Announce] Open MPI instructional videos"</a>
<li><strong>In reply to:</strong> <a href="5734.php">Gabriele Fatigati: "Re: [OMPI users] (no subject)"</a>
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
