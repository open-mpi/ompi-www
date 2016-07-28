<?
$subject_val = "Re: [OMPI users] mmaped memory and openib btl.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  2 15:32:27 2014" -->
<!-- isoreceived="20141202203227" -->
<!-- sent="Tue, 2 Dec 2014 20:32:25 +0000" -->
<!-- isosent="20141202203225" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mmaped memory and openib btl." -->
<!-- id="78C4A76C-2619-4402-B341-E3C46CA9B623_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAPLAFj6h+M6foC2K25jQiv8s0GV-WUrpL6-yopSzAF8g6Yz7nw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mmaped memory and openib btl.<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-02 15:32:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25909.php">Wildes Andrew: "Re: [OMPI users] Noob installation problem"</a>
<li><strong>Previous message:</strong> <a href="25907.php">Emmanuel Thom&#195;&#169;: "Re: [OMPI users] mmaped memory and openib btl."</a>
<li><strong>In reply to:</strong> <a href="25907.php">Emmanuel Thom&#195;&#169;: "Re: [OMPI users] mmaped memory and openib btl."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 2, 2014, at 3:15 PM, Emmanuel Thom&#233; &lt;emmanuel.thome_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for pointing me to ummunotify, this sounds much more robust
</span><br>
<span class="quotelev1">&gt; than the fragile hook-based approach. I'll try this out.
</span><br>
<p>It is -- see:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://github.com/open-mpi/ompi/blob/master/README#L665-L682">https://github.com/open-mpi/ompi/blob/master/README#L665-L682</a>
<br>
<p>ummunotify is distributed as part of MOFED, but not community OFED.  It's also available (via source) at the URL cited in the README.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25909.php">Wildes Andrew: "Re: [OMPI users] Noob installation problem"</a>
<li><strong>Previous message:</strong> <a href="25907.php">Emmanuel Thom&#195;&#169;: "Re: [OMPI users] mmaped memory and openib btl."</a>
<li><strong>In reply to:</strong> <a href="25907.php">Emmanuel Thom&#195;&#169;: "Re: [OMPI users] mmaped memory and openib btl."</a>
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
