<?
$subject_val = "[OMPI devel] OFED 1.4.1-2ofed SRPM";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 24 16:05:12 2010" -->
<!-- isoreceived="20100224210512" -->
<!-- sent="Wed, 24 Feb 2010 16:05:07 -0500" -->
<!-- isosent="20100224210507" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] OFED 1.4.1-2ofed SRPM" -->
<!-- id="24DF9045-FEBA-4398-AB62-F8684D72B011_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] OFED 1.4.1-2ofed SRPM<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-24 16:05:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7479.php">Barrett, Brian W: "Re: [OMPI devel] OFED 1.4.1-2ofed SRPM"</a>
<li><strong>Previous message:</strong> <a href="7477.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] what's the relationship between proc, endpoint and btl?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7479.php">Barrett, Brian W: "Re: [OMPI devel] OFED 1.4.1-2ofed SRPM"</a>
<li><strong>Reply:</strong> <a href="7479.php">Barrett, Brian W: "Re: [OMPI devel] OFED 1.4.1-2ofed SRPM"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As discussed on the call yesterday, Pasha and I are preparing a new SRPM specifically for OFED 1.5.1.
<br>
<p>The reason is because they need some updates to the openib INI file, but we're just not ready for an v1.4.2 release.  Hence, it makes sense to slightly modify the default OMPI spec file, put in some patches for OFED, and call it OMPI 1.4.1-2ofed.  This is fairly common practice, I think.
<br>
<p>So far, I have INI file updates from Mellanox, Intel, and Chelsio (might get another Chelsio update in the next day or three).  
<br>
<p>We should record this specfile somewhere, though, just for posterity.  Two questions:
<br>
<p>1. Should I commit this stuff in the 1.4 contrib/dist/linux branch?  (if I hear nothing back, I assume &quot;yes&quot;)
<br>
2. Should I post this custom SRPM on <a href="http://www.open-mpi.org/software/ompi/v1.4/">http://www.open-mpi.org/software/ompi/v1.4/</a>? (if I hear nothing back, I assume &quot;no&quot; -- treat it like any other downstream packager that has their own custom OMPI package)
<br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="7479.php">Barrett, Brian W: "Re: [OMPI devel] OFED 1.4.1-2ofed SRPM"</a>
<li><strong>Previous message:</strong> <a href="7477.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] what's the relationship between proc, endpoint and btl?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7479.php">Barrett, Brian W: "Re: [OMPI devel] OFED 1.4.1-2ofed SRPM"</a>
<li><strong>Reply:</strong> <a href="7479.php">Barrett, Brian W: "Re: [OMPI devel] OFED 1.4.1-2ofed SRPM"</a>
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
