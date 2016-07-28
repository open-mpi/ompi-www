<?
$subject_val = "Re: [OMPI users] Need Performance estimation of MPI_Bcast";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  4 09:56:48 2012" -->
<!-- isoreceived="20120404135648" -->
<!-- sent="Wed, 4 Apr 2012 06:56:43 -0700 (PDT)" -->
<!-- isosent="20120404135643" -->
<!-- name="anas trad" -->
<!-- email="tradat84_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Need Performance estimation of MPI_Bcast" -->
<!-- id="1333547803.31000.YahooMailClassic_at_web161203.mail.bf1.yahoo.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="53C09CEE-C760-4FA7-A192-33710DBD6684_at_cisco.com" -->
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
<strong>From:</strong> anas trad (<em>tradat84_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-04 09:56:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18938.php">Jeffrey Squyres: "Re: [OMPI users] Need Performance estimation of MPI_Bcast"</a>
<li><strong>Previous message:</strong> <a href="18936.php">Jeffrey Squyres: "Re: [OMPI users] Need Performance estimation of MPI_Bcast"</a>
<li><strong>In reply to:</strong> <a href="18936.php">Jeffrey Squyres: "Re: [OMPI users] Need Performance estimation of MPI_Bcast"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18938.php">Jeffrey Squyres: "Re: [OMPI users] Need Performance estimation of MPI_Bcast"</a>
<li><strong>Reply:</strong> <a href="18938.php">Jeffrey Squyres: "Re: [OMPI users] Need Performance estimation of MPI_Bcast"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Jeffrey, I understand, can you please guide me to such paper that give more accurate estimation for the MPI_Bcast.
<br>
<p><p>--- On Wed, 4/4/12, Jeffrey Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p>From: Jeffrey Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] Need Performance estimation of MPI_Bcast
<br>
To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Date: Wednesday, April 4, 2012, 4:35 PM
<br>
<p>It's a bit more complicated than that; there are many factors involved:
<br>
<p>- how many peer MPI processes are involved in the broadcast
<br>
- how many of those peers are local (and will likely communicate via shared memory, not a network device) and how many are remote
<br>
- what broadcast algorithm is used (there are many)
<br>
<p>So the simplistic logp model won't help you here -- you'll need to be more complicated, and/or dig into the academic papers on these kinds of things.
<br>
<p><p>On Apr 4, 2012, at 9:11 AM, anas trad wrote:
<br>
<p><span class="quotelev1">&gt; Hi&#194;&#160; Envoy&#195;&#169; ,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for the reply but I want to estimate the time of executing MPI_Bcast function by mathmatics. I found that we can achieve this by using LogGP model with this equation:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; T = ceil(log2p) . (L + 2 &#194;&#183; o + (n &#226;&#136;&#146; 1) &#194;&#183; G
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; but that does not give good accuracy for time evaluation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --- On Wed, 4/4/12, Aur&#195;&#169;lien Bouteiller &lt;bouteill_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From: Aur&#195;&#169;lien Bouteiller &lt;bouteill_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Need Performance estimation of MPI_Bcast
</span><br>
<span class="quotelev1">&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Cc: &quot;users_at_[hidden]&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: Wednesday, April 4, 2012, 3:50 PM
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can use the intel mpi benchmark, or skampi. These two programs are designed to evaluate Moi performance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Envoy&#195;&#169; de mon iPad
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 2012-04-04 &#195;&#160; 08:46, anas trad &lt;tradat84_at_[hidden]&gt; a &#195;&#169;crit :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi all,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I need to know the time estimation of executing MPI_Bcast function on Neolith Cluster. Please, can anyone show me how to achieve that.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Anas
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev1">&gt; -----Inline Attachment Follows-----
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
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18937/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18938.php">Jeffrey Squyres: "Re: [OMPI users] Need Performance estimation of MPI_Bcast"</a>
<li><strong>Previous message:</strong> <a href="18936.php">Jeffrey Squyres: "Re: [OMPI users] Need Performance estimation of MPI_Bcast"</a>
<li><strong>In reply to:</strong> <a href="18936.php">Jeffrey Squyres: "Re: [OMPI users] Need Performance estimation of MPI_Bcast"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18938.php">Jeffrey Squyres: "Re: [OMPI users] Need Performance estimation of MPI_Bcast"</a>
<li><strong>Reply:</strong> <a href="18938.php">Jeffrey Squyres: "Re: [OMPI users] Need Performance estimation of MPI_Bcast"</a>
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
