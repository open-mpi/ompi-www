<?
$subject_val = "[OMPI users] RE : RE : Latency of 250 microseconds with Open-MPI	1.4.3, Mellanox Infiniband and 256 MPI ranks";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 21 16:24:40 2011" -->
<!-- isoreceived="20110921202440" -->
<!-- sent="Wed, 21 Sep 2011 16:24:35 -0400" -->
<!-- isosent="20110921202435" -->
<!-- name="S&#233;bastien Boisvert" -->
<!-- email="sebastien.boisvert.3_at_[hidden]" -->
<!-- subject="[OMPI users] RE : RE : Latency of 250 microseconds with Open-MPI	1.4.3, Mellanox Infiniband and 256 MPI ranks" -->
<!-- id="C4217F2ABFA5D44BA8F3DCD899E5B0C8F267700700_at_EXCH-MBX-F.ulaval.ca" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="15BF67F8-33BE-43C7-9FCF-960F76134720_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI users] RE : RE : Latency of 250 microseconds with Open-MPI	1.4.3, Mellanox Infiniband and 256 MPI ranks<br>
<strong>From:</strong> S&#233;bastien Boisvert (<em>sebastien.boisvert.3_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-21 16:24:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17383.php">Jeff Squyres: "Re: [OMPI users] RE : RE : Latency of 250 microseconds with Open-MPI	1.4.3, Mellanox Infiniband and 256 MPI ranks"</a>
<li><strong>Previous message:</strong> <a href="17381.php">Jeff Squyres: "Re: [OMPI users] Typo in MPI_Cart_coords man page"</a>
<li><strong>In reply to:</strong> <a href="17380.php">Jeff Squyres: "Re: [OMPI users] RE : Latency of 250 microseconds with Open-MPI 1.4.3, Mellanox Infiniband and 256 MPI ranks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17383.php">Jeff Squyres: "Re: [OMPI users] RE : RE : Latency of 250 microseconds with Open-MPI	1.4.3, Mellanox Infiniband and 256 MPI ranks"</a>
<li><strong>Reply:</strong> <a href="17383.php">Jeff Squyres: "Re: [OMPI users] RE : RE : Latency of 250 microseconds with Open-MPI	1.4.3, Mellanox Infiniband and 256 MPI ranks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; What happens if you run 2 ibv_rc_pingpong's on each node?  Or N ibv_rc_pingpongs?
</span><br>
<p>With 11 ibv_rc_pingpong's
<br>
<p><a href="http://pastebin.com/85sPcA47">http://pastebin.com/85sPcA47</a>
<br>
<p>Code to do that =&gt; <a href="https://gist.github.com/1233173">https://gist.github.com/1233173</a>
<br>
<p>Latencies are around 20 microseconds.
<br>
<p><p><p><p>My job seems to do well so far with ofud !
<br>
<p><p>[sboisver12_at_colosse2 ray]$ qstat
<br>
job-ID  prior   name       user         state submit/start at     queue                          slots ja-task-ID 
<br>
-----------------------------------------------------------------------------------------------------------------
<br>
3047460 0.55384 fish-Assem sboisver12   r     09/21/2011 15:02:25 med_at_r104-n58                     256   
<br>
<p><p><p><p><span class="quotelev1">&gt; ________________________________________
</span><br>
<span class="quotelev1">&gt; De : users-bounces_at_[hidden] [users-bounces_at_[hidden]] de la part de Jeff Squyres [jsquyres_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Date d'envoi : 21 septembre 2011 15:28
</span><br>
<span class="quotelev1">&gt; &#192; : Open MPI Users
</span><br>
<span class="quotelev1">&gt; Objet : Re: [OMPI users] RE : Latency of 250 microseconds with Open-MPI 1.4.3, Mellanox Infiniband and 256 MPI ranks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 21, 2011, at 3:17 PM, S&#233;bastien Boisvert wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Meanwhile, I contacted some people at SciNet, which is also part of Compute Canada.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; They told me to try Open-MPI 1.4.3 with the Intel compiler with --mca btl self,ofud to use the ofud BTL instead of openib for OpenFabrics transport.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This worked quite good -- I got a low latency of 35 microseconds. Yay !
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That's still pretty terrible.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Per your comments below, yes, ofud was never finished.  I believe it doesn't have retransmission code in there, so if anything is dropped by the network (which, in a congested/busy network, there will be drops), the job will likely hang.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The ofud and openib BTLs should have similar latencies.  Indeed, openib should actually have slightly lower HRT ping-pong latencies because of protocol and transport differences between the two.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The openib BTL should give about the same latency as the ibv_rc_pingpong, which you cited at about 11 microseconds (I assume there must be multiple hops in that IB network to be that high), which jives with your &quot;only 1 process sends&quot; RAY network test (<a href="http://pastebin.com/dWMXsHpa">http://pastebin.com/dWMXsHpa</a>).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's not uncommon for latency to go up if multiple processes are all banging on the HCA, but it shouldn't go up noticeably if there's only 2 processes on each node doing simple ping-pong tests, for example.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What happens if you run 2 ibv_rc_pingpong's on each node?  Or N ibv_rc_pingpongs?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17383.php">Jeff Squyres: "Re: [OMPI users] RE : RE : Latency of 250 microseconds with Open-MPI	1.4.3, Mellanox Infiniband and 256 MPI ranks"</a>
<li><strong>Previous message:</strong> <a href="17381.php">Jeff Squyres: "Re: [OMPI users] Typo in MPI_Cart_coords man page"</a>
<li><strong>In reply to:</strong> <a href="17380.php">Jeff Squyres: "Re: [OMPI users] RE : Latency of 250 microseconds with Open-MPI 1.4.3, Mellanox Infiniband and 256 MPI ranks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17383.php">Jeff Squyres: "Re: [OMPI users] RE : RE : Latency of 250 microseconds with Open-MPI	1.4.3, Mellanox Infiniband and 256 MPI ranks"</a>
<li><strong>Reply:</strong> <a href="17383.php">Jeff Squyres: "Re: [OMPI users] RE : RE : Latency of 250 microseconds with Open-MPI	1.4.3, Mellanox Infiniband and 256 MPI ranks"</a>
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
