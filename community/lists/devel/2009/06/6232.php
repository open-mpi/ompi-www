<?
$subject_val = "Re: [OMPI devel] Multi-rail on openib";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jun 14 15:18:02 2009" -->
<!-- isoreceived="20090614191802" -->
<!-- sent="Sun, 14 Jun 2009 22:17:54 +0300" -->
<!-- isosent="20090614191754" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pashash_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Multi-rail on openib" -->
<!-- id="4A354CE2.9060905_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20090612205308.GA12666_at_compegg.wr.niftyegg.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Multi-rail on openib<br>
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pashash_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-14 15:17:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6233.php">Leo P.: "Re: [OMPI devel] complete newbie question regarding --enable-mpi-profile option"</a>
<li><strong>Previous message:</strong> <a href="6231.php">Leo P.: "[OMPI devel] complete newbie question regarding --enable-mpi-profile option"</a>
<li><strong>In reply to:</strong> <a href="6230.php">Nifty Tom Mitchell: "Re: [OMPI devel] Multi-rail on openib"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nifty Tom Mitchell wrote:
<br>
<span class="quotelev1">&gt; On Tue, Jun 09, 2009 at 04:33:51PM +0300, Pavel Shamis (Pasha) wrote:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open MPI currently needs to have connected fabrics, but maybe that's  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; something we will like to change in the future, having two separate  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rails. (Btw Pasha, will your current work enable this ?)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; I do not completely understand what do you mean here under two separate  
</span><br>
<span class="quotelev2">&gt;&gt; rails ...
</span><br>
<span class="quotelev2">&gt;&gt; Already today you may connect each port to different subnet, and ports  
</span><br>
<span class="quotelev2">&gt;&gt; in the same
</span><br>
<span class="quotelev2">&gt;&gt; subnet may talk to each other.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Subnet?  (subnet .vs. fabric)
</span><br>
<span class="quotelev1">&gt;   
</span><br>
About subnet id definition you may read here.
<br>
<a href="http://www.open-mpi.org/faq/?category=openfabrics#ofa-set-subnet-id">http://www.open-mpi.org/faq/?category=openfabrics#ofa-set-subnet-id</a>
<br>
<p><span class="quotelev1">&gt; Does this imply tcp/ip
</span><br>
<span class="quotelev1">&gt; What IB protocols are involved and
</span><br>
<span class="quotelev1">&gt; Is there any agent that notices the disconnect and will trigger the switch?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
In Open MPI we use RC (connected) protocol. On connection failure we get 
<br>
error
<br>
and handle it. If APM is enabled, Open MPI will try to migrate to other 
<br>
path , otherway we will fail.
<br>
<p>Pasha.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6233.php">Leo P.: "Re: [OMPI devel] complete newbie question regarding --enable-mpi-profile option"</a>
<li><strong>Previous message:</strong> <a href="6231.php">Leo P.: "[OMPI devel] complete newbie question regarding --enable-mpi-profile option"</a>
<li><strong>In reply to:</strong> <a href="6230.php">Nifty Tom Mitchell: "Re: [OMPI devel] Multi-rail on openib"</a>
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
