<?
$subject_val = "Re: [OMPI users] Bad Infiniband latency with subounce";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 17 17:26:47 2010" -->
<!-- isoreceived="20100217222647" -->
<!-- sent="Wed, 17 Feb 2010 17:26:41 -0500" -->
<!-- isosent="20100217222641" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bad Infiniband latency with subounce" -->
<!-- id="988E967C-A657-4B35-B6F3-768D3A546D85_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="F44D206478A0FF4A9FE422C463171D66267ADFC0_at_XCH-MW-09V.mw.nos.boeing.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Bad Infiniband latency with subounce<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-17 17:26:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12098.php">Jeff Squyres: "Re: [OMPI users] Error while configuring openmpi with pgi"</a>
<li><strong>Previous message:</strong> <a href="12096.php">George Bosilca: "Re: [OMPI users] Bug: non-root processes use receive-type in ompi_coll_tuned_gather_intra_binomial"</a>
<li><strong>In reply to:</strong> <a href="12090.php">Repsher, Stephen J: "Re: [OMPI users] Bad Infiniband latency with subounce"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12100.php">Pavel Shamis (Pasha): "Re: [OMPI users] Bad Infiniband latency with subounce"</a>
<li><strong>Reply:</strong> <a href="12100.php">Pavel Shamis (Pasha): "Re: [OMPI users] Bad Infiniband latency with subounce"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'll defer to the Mellanox guys to reply more in detail, but here's a few thoughts:
<br>
<p>- Is MVAPICH using XRC?  (I never played with XRC much; it would surprise me if it caused instability on the order of up to 100 micros -- I ask just to see if it is an apples-to-apples comparison)
<br>
<p>- The nRepeats value in this code is only 10, meaning that it only seems to be doing 10 iterations on each size.  For small sizes, this might well be not enough to be accurate.  Have you tried increasing it?  Or using a different benchmark app, such as NetPIPE, osu_latency, ...etc.?
<br>
<p><p><p>On Feb 16, 2010, at 8:49 AM, Repsher, Stephen J wrote:
<br>
<p><span class="quotelev1">&gt; Well the &quot;good&quot; news is I can end your debate over binding here...setting mpi_paffinity_alone 1 did nothing. (And personally as a user, I don't care what the default is so long as info is readily apparent in the main docs...and I did see the FAQs on it).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It did lead me to try another parameter though, -mca mpi_preconnect_all 1, which seems to reduce the measured latency reliably of subounce, but it's still sporadic and order ~10-100 microseconds.  It leads me to think that OpenMPI has issues with the method of measurement, which is simply to send progressively larger blocked messages right after calling MPI_Init (starting at 0 bytes which it times as the latency). OpenMPI's lazy connections clearly mess with this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But still not consistently 1-2 microsecs...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Steve
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
</span><br>
<span class="quotelev1">&gt; Sent: Monday, February 15, 2010 11:21 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Bad Infiniband latency with subounce
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 15, 2010, at 8:44 PM, Terry Frankcombe wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Mon, 2010-02-15 at 20:18 -0700, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Did you run it with -mca mpi_paffinity_alone 1? Given this is 1.4.1, you can set the bindings to -bind-to-socket or -bind-to-core. Either will give you improved performance.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; IIRC, MVAPICH defaults to -bind-to-socket. OMPI defaults to no binding.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is this sensible?  Won't most users want processes bound?  OMPI's
</span><br>
<span class="quotelev2">&gt; &gt; supposed to &quot;to the right thing&quot; out of the box, right?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Well, that depends on how you look at it. Been the subject of a lot of debate within the devel community. If you bind by default and it is a shared node cluster, then you can really mess people up. On the other hand, if you don't bind by default, then people that run benchmarks without looking at the options can get bad numbers. Unfortunately, there is no automated way to tell if the cluster is configured for shared use or dedicated nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I honestly don't know that &quot;most users want processes bound&quot;. One installation I was at set binding by default using the system mca param file, and got yelled at by a group of users that had threaded apps - and most definitely did -not- want their processes bound. After a while, it became clear that nothing we could do would make everyone happy :-/
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I doubt there is a right/wrong answer - at least, we sure can't find one. So we don't bind by default so we &quot;do no harm&quot;, and put out FAQs, man pages, mpirun option help messages, etc. that explain the situation and tell you when/how to bind.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12098.php">Jeff Squyres: "Re: [OMPI users] Error while configuring openmpi with pgi"</a>
<li><strong>Previous message:</strong> <a href="12096.php">George Bosilca: "Re: [OMPI users] Bug: non-root processes use receive-type in ompi_coll_tuned_gather_intra_binomial"</a>
<li><strong>In reply to:</strong> <a href="12090.php">Repsher, Stephen J: "Re: [OMPI users] Bad Infiniband latency with subounce"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12100.php">Pavel Shamis (Pasha): "Re: [OMPI users] Bad Infiniband latency with subounce"</a>
<li><strong>Reply:</strong> <a href="12100.php">Pavel Shamis (Pasha): "Re: [OMPI users] Bad Infiniband latency with subounce"</a>
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
