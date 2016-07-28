<?
$subject_val = "Re: [OMPI users] mpicc, mpif90, ... not created during installation";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  1 09:32:07 2012" -->
<!-- isoreceived="20120601133207" -->
<!-- sent="Fri, 1 Jun 2012 15:32:02 +0200" -->
<!-- isosent="20120601133202" -->
<!-- name="denis cohen" -->
<!-- email="Denis.cohen_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpicc, mpif90, ... not created during installation" -->
<!-- id="CAKf_S2Ki5f4gEBkHtVCv-yr6OLA=FsC4ugxUCNX+mf80bp04nQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="835A8D58-DBFF-420F-9510-AE5718EED3CF_at_cisco.com" -->
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
<strong>From:</strong> denis cohen (<em>Denis.cohen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-01 09:32:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19412.php">Jeff Squyres: "Re: [OMPI users] mpicc, mpif90, ... not created during installation"</a>
<li><strong>Previous message:</strong> <a href="19410.php">Jeff Squyres: "Re: [OMPI users] mpicc, mpif90, ... not created during installation"</a>
<li><strong>In reply to:</strong> <a href="19410.php">Jeff Squyres: "Re: [OMPI users] mpicc, mpif90, ... not created during installation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19412.php">Jeff Squyres: "Re: [OMPI users] mpicc, mpif90, ... not created during installation"</a>
<li><strong>Reply:</strong> <a href="19412.php">Jeff Squyres: "Re: [OMPI users] mpicc, mpif90, ... not created during installation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have not tried separating the two options. the --help in configure
<br>
indicates that --enable-binaries is enabled by default;
<br>
--with-devel-headers isn't. Not a specialist myself so don't know the
<br>
innards of openmpi. Only thing I know is that it's now working for me.
<br>
<p>Can try something is that would help the community. Just let me know.
<br>
<p>Cheers,
<br>
<p>Denis
<br>
<p><p>On Fri, Jun 1, 2012 at 3:27 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Jun 1, 2012, at 8:20 AM, Aur&#233;lien Bouteiller wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You need to pass the following option to configure:
</span><br>
<span class="quotelev2">&gt;&gt; --with-devel-headers --enable-binaries
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't know exactly why the default is not to build them anymore, this is a bit confusing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That is not correct -- the default is to build and install all OMPI binaries (including mpicc and friends). &#160;If using --enable-binaries fixed the issue for you, then there's something else going on.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --with-devel-headers has never been the default; it's a developer-working-with-OMPI-internals kind of feature (which &lt;1% of our users), so you have to specifically enable it.
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19412.php">Jeff Squyres: "Re: [OMPI users] mpicc, mpif90, ... not created during installation"</a>
<li><strong>Previous message:</strong> <a href="19410.php">Jeff Squyres: "Re: [OMPI users] mpicc, mpif90, ... not created during installation"</a>
<li><strong>In reply to:</strong> <a href="19410.php">Jeff Squyres: "Re: [OMPI users] mpicc, mpif90, ... not created during installation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19412.php">Jeff Squyres: "Re: [OMPI users] mpicc, mpif90, ... not created during installation"</a>
<li><strong>Reply:</strong> <a href="19412.php">Jeff Squyres: "Re: [OMPI users] mpicc, mpif90, ... not created during installation"</a>
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
