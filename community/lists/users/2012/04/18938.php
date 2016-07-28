<?
$subject_val = "Re: [OMPI users] Need Performance estimation of MPI_Bcast";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  4 10:43:58 2012" -->
<!-- isoreceived="20120404144358" -->
<!-- sent="Wed, 4 Apr 2012 10:43:52 -0400" -->
<!-- isosent="20120404144352" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Need Performance estimation of MPI_Bcast" -->
<!-- id="A2CBF07A-A6CC-40CB-A548-F1451956E240_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="1333547803.31000.YahooMailClassic_at_web161203.mail.bf1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Need Performance estimation of MPI_Bcast<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-04 10:43:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18939.php">Jeffrey Squyres: "Re: [OMPI users] Cluster : received unexpected process identifier"</a>
<li><strong>Previous message:</strong> <a href="18937.php">anas trad: "Re: [OMPI users] Need Performance estimation of MPI_Bcast"</a>
<li><strong>In reply to:</strong> <a href="18937.php">anas trad: "Re: [OMPI users] Need Performance estimation of MPI_Bcast"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18940.php">anas trad: "Re: [OMPI users] Need Performance estimation of MPI_Bcast"</a>
<li><strong>Reply:</strong> <a href="18940.php">anas trad: "Re: [OMPI users] Need Performance estimation of MPI_Bcast"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 4, 2012, at 9:56 AM, anas trad wrote:
<br>
<p><span class="quotelev1">&gt; Thanks Jeffrey, I understand, can you please guide me to such paper that give more accurate estimation for the MPI_Bcast.
</span><br>
<p>I can't cite any specific papers (collectives are not my focus area, and I left academia several years ago); you'll need to do some literature searches.  I know that there have been quite a few papers and research projects over the past 15+ years about algorithms for MPI collective operations (including bcast).  A good starting place would probably be proceedings from Euro MPI (and its predecessor, Euro PVM/MPI).
<br>
<p>I'm guessing that there are probably also some papers/projects that do modeling of collective algorithms in heterogeneous latency environments (e.g., shared memory + network), but this is even farther off my focus area, so I don't even have any general areas to point to.  Sorry!
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --- On Wed, 4/4/12, Jeffrey Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From: Jeffrey Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Need Performance estimation of MPI_Bcast
</span><br>
<span class="quotelev1">&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: Wednesday, April 4, 2012, 4:35 PM
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's a bit more complicated than that; there are many factors involved:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - how many peer MPI processes are involved in the broadcast
</span><br>
<span class="quotelev1">&gt; - how many of those peers are local (and will likely communicate via shared memory, not a network device) and how many are remote
</span><br>
<span class="quotelev1">&gt; - what broadcast algorithm is used (there are many)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So the simplistic logp model won't help you here -- you'll need to be more complicated, and/or dig into the academic papers on these kinds of things.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 4, 2012, at 9:11 AM, anas trad wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi  Envoy&#195;&#169; ,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thanks for the reply but I want to estimate the time of executing MPI_Bcast function by mathmatics. I found that we can achieve this by using LogGP model with this equation:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; T = ceil(log2p) . (L + 2 &#194;&#183; o + (n &#226;&#136;&#146; 1) &#194;&#183; G
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; but that does not give good accuracy for time evaluation.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; --- On Wed, 4/4/12, Aur&#195;&#169;lien Bouteiller &lt;bouteill_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; From: Aur&#195;&#169;lien Bouteiller &lt;bouteill_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] Need Performance estimation of MPI_Bcast
</span><br>
<span class="quotelev2">&gt; &gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Cc: &quot;users_at_[hidden]&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Date: Wednesday, April 4, 2012, 3:50 PM
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; You can use the intel mpi benchmark, or skampi. These two programs are designed to evaluate Moi performance.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Envoy&#195;&#169; de mon iPad
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Le 2012-04-04 &#195;&#160; 08:46, anas trad &lt;tradat84_at_[hidden]&gt; a &#195;&#169;crit :
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi all,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I need to know the time estimation of executing MPI_Bcast function on Neolith Cluster. Please, can anyone show me how to achieve that.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Anas
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -----Inline Attachment Follows-----
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
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18939.php">Jeffrey Squyres: "Re: [OMPI users] Cluster : received unexpected process identifier"</a>
<li><strong>Previous message:</strong> <a href="18937.php">anas trad: "Re: [OMPI users] Need Performance estimation of MPI_Bcast"</a>
<li><strong>In reply to:</strong> <a href="18937.php">anas trad: "Re: [OMPI users] Need Performance estimation of MPI_Bcast"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18940.php">anas trad: "Re: [OMPI users] Need Performance estimation of MPI_Bcast"</a>
<li><strong>Reply:</strong> <a href="18940.php">anas trad: "Re: [OMPI users] Need Performance estimation of MPI_Bcast"</a>
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
