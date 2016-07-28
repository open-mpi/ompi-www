<?
$subject_val = "Re: [OMPI users] mpicc, mpif90, ... not created during installation";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  1 09:38:48 2012" -->
<!-- isoreceived="20120601133848" -->
<!-- sent="Fri, 1 Jun 2012 09:38:44 -0400" -->
<!-- isosent="20120601133844" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpicc, mpif90, ... not created during installation" -->
<!-- id="FFB73ABB-F76D-4952-8D04-F848B51B556B_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAKf_S2Ki5f4gEBkHtVCv-yr6OLA=FsC4ugxUCNX+mf80bp04nQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2012-06-01 09:38:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19413.php">Aurélien Bouteiller: "Re: [OMPI users] mpicc, mpif90, ... not created during installation"</a>
<li><strong>Previous message:</strong> <a href="19411.php">denis cohen: "Re: [OMPI users] mpicc, mpif90, ... not created during installation"</a>
<li><strong>In reply to:</strong> <a href="19411.php">denis cohen: "Re: [OMPI users] mpicc, mpif90, ... not created during installation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19413.php">Aurélien Bouteiller: "Re: [OMPI users] mpicc, mpif90, ... not created during installation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you could send all the info from your original build (or re-do it again without --enable-binaries) listed here, that would be helpful:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p>Thanks!
<br>
<p><p>On Jun 1, 2012, at 9:32 AM, denis cohen wrote:
<br>
<p><span class="quotelev1">&gt; I have not tried separating the two options. the --help in configure
</span><br>
<span class="quotelev1">&gt; indicates that --enable-binaries is enabled by default;
</span><br>
<span class="quotelev1">&gt; --with-devel-headers isn't. Not a specialist myself so don't know the
</span><br>
<span class="quotelev1">&gt; innards of openmpi. Only thing I know is that it's now working for me.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can try something is that would help the community. Just let me know.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Denis
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Jun 1, 2012 at 3:27 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 1, 2012, at 8:20 AM, Aur&#233;lien Bouteiller wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You need to pass the following option to configure:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --with-devel-headers --enable-binaries
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I don't know exactly why the default is not to build them anymore, this is a bit confusing.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; That is not correct -- the default is to build and install all OMPI binaries (including mpicc and friends).  If using --enable-binaries fixed the issue for you, then there's something else going on.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --with-devel-headers has never been the default; it's a developer-working-with-OMPI-internals kind of feature (which &lt;1% of our users), so you have to specifically enable it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="19413.php">Aurélien Bouteiller: "Re: [OMPI users] mpicc, mpif90, ... not created during installation"</a>
<li><strong>Previous message:</strong> <a href="19411.php">denis cohen: "Re: [OMPI users] mpicc, mpif90, ... not created during installation"</a>
<li><strong>In reply to:</strong> <a href="19411.php">denis cohen: "Re: [OMPI users] mpicc, mpif90, ... not created during installation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19413.php">Aurélien Bouteiller: "Re: [OMPI users] mpicc, mpif90, ... not created during installation"</a>
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
