<?
$subject_val = "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug  3 14:45:27 2011" -->
<!-- isoreceived="20110803184527" -->
<!-- sent="Wed, 03 Aug 2011 20:45:20 +0200" -->
<!-- isosent="20110803184520" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open MPI + HWLOC + Static build  issue" -->
<!-- id="4E399740.8010200_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D83D07C7-5648-4335-9BC6-E8B93EECA08D_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Open MPI + HWLOC + Static build  issue<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-03 14:45:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9604.php">Shamis, Pavel: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<li><strong>Previous message:</strong> <a href="9602.php">Jeff Squyres: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<li><strong>In reply to:</strong> <a href="9602.php">Jeff Squyres: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9597.php">Shamis, Pavel: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 03/08/2011 20:37, Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Shouldn't you pass the same LDFLAGS to configure as to make?  
</span><br>
<p>I'd be happy if it worked :)
<br>
Actually, I'd be even more happy if Pavel didn't have to do this to
<br>
build a fully-static orted.
<br>
<p><span class="quotelev1">&gt; I.e., if you tell configure &quot;configure it &lt;this&gt; way&quot; but then you tell make &quot;build it &lt;that&gt; way&quot;, I'm not surprised that it doesn't work.  Left hand not talking to the right hand and all that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Shouldn't you instead do:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    ./configure --enable-static --disable-shared \
</span><br>
<span class="quotelev1">&gt;       LDFLAGS=&quot;-static -all-static all&quot;
</span><br>
<span class="quotelev1">&gt;    make -j 8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That being said, I don't seem to have a version of gcc that supports -all-static, so I can't test this myself...
</span><br>
<p><span class="quotelev1">&gt;From what I understand, -all-static is a libtool option only. Passing
</span><br>
LDFLAGS=-all-static to configure makes it pass -all-static to gcc, which
<br>
fails here too.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9604.php">Shamis, Pavel: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<li><strong>Previous message:</strong> <a href="9602.php">Jeff Squyres: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<li><strong>In reply to:</strong> <a href="9602.php">Jeff Squyres: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9597.php">Shamis, Pavel: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
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
