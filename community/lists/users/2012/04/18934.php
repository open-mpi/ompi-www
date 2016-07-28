<?
$subject_val = "Re: [OMPI users] Need Performance estimation of MPI_Bcast";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  4 09:11:49 2012" -->
<!-- isoreceived="20120404131149" -->
<!-- sent="Wed, 4 Apr 2012 06:11:44 -0700 (PDT)" -->
<!-- isosent="20120404131144" -->
<!-- name="anas trad" -->
<!-- email="tradat84_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Need Performance estimation of MPI_Bcast" -->
<!-- id="1333545104.58311.YahooMailClassic_at_web161203.mail.bf1.yahoo.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="9C7E34D9-BBD6-4F0A-BC48-33F9CA5491B2_at_eecs.utk.edu" -->
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
<strong>Date:</strong> 2012-04-04 09:11:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18935.php">Shiqing Fan: "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
<li><strong>Previous message:</strong> <a href="18933.php">Aur&#195;&#169;lien Bouteiller: "Re: [OMPI users] Need Performance estimation of MPI_Bcast"</a>
<li><strong>In reply to:</strong> <a href="18933.php">Aur&#195;&#169;lien Bouteiller: "Re: [OMPI users] Need Performance estimation of MPI_Bcast"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18936.php">Jeffrey Squyres: "Re: [OMPI users] Need Performance estimation of MPI_Bcast"</a>
<li><strong>Reply:</strong> <a href="18936.php">Jeffrey Squyres: "Re: [OMPI users] Need Performance estimation of MPI_Bcast"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi&#194;&#160;
Envoy&#195;&#169;&#194;&#160;,
<br>
Thanks for the reply but I want to estimate the time of executing MPI_Bcast function by mathmatics. I found that we can achieve this by using LogGP model with this equation:
<br>
T = ceil(log2p) . (L + 2 &#194;&#183; o + (n &#226;&#136;&#146; 1) &#194;&#183; G
<br>
but that does not give good accuracy for time evaluation.
<br>
<p><p>--- On Wed, 4/4/12, Aur&#195;&#169;lien Bouteiller &lt;bouteill_at_[hidden]&gt; wrote:
<br>
<p>From: Aur&#195;&#169;lien Bouteiller &lt;bouteill_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] Need Performance estimation of MPI_Bcast
<br>
To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Cc: &quot;users_at_[hidden]&quot; &lt;users_at_[hidden]&gt;
<br>
Date: Wednesday, April 4, 2012, 3:50 PM
<br>
<p>You can use the intel mpi benchmark, or skampi. These two programs are designed to evaluate Moi performance.
<br>
<p>Envoy&#195;&#169; de mon iPad
<br>
Le 2012-04-04 &#195;&#160; 08:46, anas trad &lt;tradat84_at_[hidden]&gt; a &#195;&#169;crit&#194;&#160;:
<br>
<p>Hi all,
<br>
I need to know the time estimation of executing MPI_Bcast function on Neolith Cluster. Please, can anyone show me how to achieve that.
<br>
Thanks,Anas
<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
-----Inline Attachment Follows-----
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18934/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18935.php">Shiqing Fan: "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
<li><strong>Previous message:</strong> <a href="18933.php">Aur&#195;&#169;lien Bouteiller: "Re: [OMPI users] Need Performance estimation of MPI_Bcast"</a>
<li><strong>In reply to:</strong> <a href="18933.php">Aur&#195;&#169;lien Bouteiller: "Re: [OMPI users] Need Performance estimation of MPI_Bcast"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18936.php">Jeffrey Squyres: "Re: [OMPI users] Need Performance estimation of MPI_Bcast"</a>
<li><strong>Reply:</strong> <a href="18936.php">Jeffrey Squyres: "Re: [OMPI users] Need Performance estimation of MPI_Bcast"</a>
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
