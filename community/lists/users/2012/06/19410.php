<?
$subject_val = "Re: [OMPI users] mpicc, mpif90, ... not created during installation";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  1 09:27:12 2012" -->
<!-- isoreceived="20120601132712" -->
<!-- sent="Fri, 1 Jun 2012 09:27:07 -0400" -->
<!-- isosent="20120601132707" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpicc, mpif90, ... not created during installation" -->
<!-- id="835A8D58-DBFF-420F-9510-AE5718EED3CF_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="C6E2523F-805C-46B6-ADAA-160E0E425053_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpicc, mpif90, ... not created during installation<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-01 09:27:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19411.php">denis cohen: "Re: [OMPI users] mpicc, mpif90, ... not created during installation"</a>
<li><strong>Previous message:</strong> <a href="19409.php">denis cohen: "Re: [OMPI users] mpicc, mpif90, ... not created during installation"</a>
<li><strong>In reply to:</strong> <a href="19408.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] mpicc, mpif90, ... not created during installation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19411.php">denis cohen: "Re: [OMPI users] mpicc, mpif90, ... not created during installation"</a>
<li><strong>Reply:</strong> <a href="19411.php">denis cohen: "Re: [OMPI users] mpicc, mpif90, ... not created during installation"</a>
<li><strong>Reply:</strong> <a href="19413.php">Aurélien Bouteiller: "Re: [OMPI users] mpicc, mpif90, ... not created during installation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 1, 2012, at 8:20 AM, Aur&#233;lien Bouteiller wrote:
<br>
<p><span class="quotelev1">&gt; You need to pass the following option to configure: 
</span><br>
<span class="quotelev1">&gt; --with-devel-headers --enable-binaries 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't know exactly why the default is not to build them anymore, this is a bit confusing. 
</span><br>
<p>That is not correct -- the default is to build and install all OMPI binaries (including mpicc and friends).  If using --enable-binaries fixed the issue for you, then there's something else going on.
<br>
<p>--with-devel-headers has never been the default; it's a developer-working-with-OMPI-internals kind of feature (which &lt;1% of our users), so you have to specifically enable it.
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
<li><strong>Next message:</strong> <a href="19411.php">denis cohen: "Re: [OMPI users] mpicc, mpif90, ... not created during installation"</a>
<li><strong>Previous message:</strong> <a href="19409.php">denis cohen: "Re: [OMPI users] mpicc, mpif90, ... not created during installation"</a>
<li><strong>In reply to:</strong> <a href="19408.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] mpicc, mpif90, ... not created during installation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19411.php">denis cohen: "Re: [OMPI users] mpicc, mpif90, ... not created during installation"</a>
<li><strong>Reply:</strong> <a href="19411.php">denis cohen: "Re: [OMPI users] mpicc, mpif90, ... not created during installation"</a>
<li><strong>Reply:</strong> <a href="19413.php">Aurélien Bouteiller: "Re: [OMPI users] mpicc, mpif90, ... not created during installation"</a>
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
