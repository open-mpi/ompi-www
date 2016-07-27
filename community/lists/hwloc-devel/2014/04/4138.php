<?
$subject_val = "Re: [hwloc-devel] PATCH: Mark fd as close-on-exec";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 23 19:14:16 2014" -->
<!-- isoreceived="20140423231416" -->
<!-- sent="Thu, 24 Apr 2014 01:14:10 +0200" -->
<!-- isosent="20140423231410" -->
<!-- name="Brice Goglin" -->
<!-- email="brice.goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] PATCH: Mark fd as close-on-exec" -->
<!-- id="46b5b726-fd40-4126-8289-fb216130b16c_at_email.android.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAAvDA16JjaWoqMOLABYEwa3gfOSmk2Eeie4xRJC5_tW_ORBdcA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] PATCH: Mark fd as close-on-exec<br>
<strong>From:</strong> Brice Goglin (<em>brice.goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-23 19:14:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4139.php">Paul Hargrove: "Re: [hwloc-devel] PATCH: Mark fd as close-on-exec"</a>
<li><strong>Previous message:</strong> <a href="4137.php">Paul Hargrove: "Re: [hwloc-devel] PATCH: Mark fd as close-on-exec"</a>
<li><strong>In reply to:</strong> <a href="4137.php">Paul Hargrove: "Re: [hwloc-devel] PATCH: Mark fd as close-on-exec"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4139.php">Paul Hargrove: "Re: [hwloc-devel] PATCH: Mark fd as close-on-exec"</a>
<li><strong>Reply:</strong> <a href="4139.php">Paul Hargrove: "Re: [hwloc-devel] PATCH: Mark fd as close-on-exec"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This code is only built on Linux so I am not sure we're more portable than OMPI here. The oldest Linux we've tested bwloc on is likely your machines ;)
<br>
Brice
<br>
<p><p>On 24 avril 2014 00:48:46 UTC+02:00, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;Since I suspect hwloc may run on *more* platforms than ompi, I'd
</span><br>
<span class="quotelev1">&gt;recommend
</span><br>
<span class="quotelev1">&gt;the guards.
</span><br>
<span class="quotelev1">&gt;The X11 sources actually go as far as the following (Stevens notes that
</span><br>
<span class="quotelev1">&gt;older systems used '1' before FD_CLOEXEC was specified).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;#ifdef F_SETFD
</span><br>
<span class="quotelev1">&gt;#ifdef FD_CLOEXEC
</span><br>
<span class="quotelev1">&gt;        ret = fcntl (fd, F_SETFD, FD_CLOEXEC);
</span><br>
<span class="quotelev1">&gt;#else
</span><br>
<span class="quotelev1">&gt;        ret = fcntl (fd, F_SETFD, 1);
</span><br>
<span class="quotelev1">&gt;#endif /* FD_CLOEXEC */
</span><br>
<span class="quotelev1">&gt;#endif /* F_SETFD */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;-Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Wed, Apr 23, 2014 at 3:07 PM, Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev1">&gt;&lt;jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Actually, I just checked around: we have some unprotected FD_CLOEXEC
</span><br>
<span class="quotelev1">&gt;code
</span><br>
<span class="quotelev2">&gt;&gt; in OMPI was that committed 2010-08-24 that has never caused a
</span><br>
<span class="quotelev1">&gt;problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So I'm not thinking it should be necessary here, either.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 23, 2014, at 5:55 PM, Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev1">&gt;&lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Will do.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Apr 23, 2014, at 5:52 PM, Samuel Thibault
</span><br>
<span class="quotelev1">&gt;&lt;samuel.thibault_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Jeff Squyres (jsquyres), le Wed 23 Apr 2014 21:05:55 +0000, a
</span><br>
<span class="quotelev1">&gt;&#195;&#169;crit :
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; Any objections to this patch?  In OMPI, we're seeing this fd leak
</span><br>
<span class="quotelev1">&gt;into
</span><br>
<span class="quotelev2">&gt;&gt; child processes.
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; diff --git a/src/topology-linux.c b/src/topology-linux.c
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; index e934d4c..8c5fba1 100644
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; --- a/src/topology-linux.c
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; +++ b/src/topology-linux.c
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; @@ -4601,6 +4601,13 @@ hwloc_linux_component_instantiate(struct
</span><br>
<span class="quotelev2">&gt;&gt; hwloc_disc_compo
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;    data-&gt;is_real_fsroot = 0;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;  }
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; We probably want an #ifdef FD_CLOEXEC here, not all systems have
</span><br>
<span class="quotelev1">&gt;it.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; +  /* Since this fd stays open after hwloc returns, mark it as
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; +     close-on-exec so that children don't inherit it */
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; +  if (fcntl(root, F_SETFD, FD_CLOEXEC) == -1) {
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; +      close(root);
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; +      root = -1;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; +      goto out_with_data;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; +  }
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; #else
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;  if (strcmp(fsroot_path, &quot;/&quot;)) {
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;    errno = ENOSYS;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Samuel
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Je suis maintenant possesseur d'un ordinateur portable Compaq
</span><br>
<span class="quotelev1">&gt;Armada
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; 1592DT avec port infra-rouge. Auriez-vous connaissance de
</span><br>
<span class="quotelev1">&gt;programmes
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; suceptibles d'utiliser ce port afin de servir de t&#195;&#169;l&#195;&#169;commande ?
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; -+- JN in NPC : ben quoi, c'est pas &#195;&#160; &#195;&#167;a que &#195;&#167;a sert ?
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; hwloc-devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;-- 
</span><br>
<span class="quotelev1">&gt;Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Future Technologies Group
</span><br>
<span class="quotelev1">&gt;Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt;Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt;hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-4138/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4139.php">Paul Hargrove: "Re: [hwloc-devel] PATCH: Mark fd as close-on-exec"</a>
<li><strong>Previous message:</strong> <a href="4137.php">Paul Hargrove: "Re: [hwloc-devel] PATCH: Mark fd as close-on-exec"</a>
<li><strong>In reply to:</strong> <a href="4137.php">Paul Hargrove: "Re: [hwloc-devel] PATCH: Mark fd as close-on-exec"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4139.php">Paul Hargrove: "Re: [hwloc-devel] PATCH: Mark fd as close-on-exec"</a>
<li><strong>Reply:</strong> <a href="4139.php">Paul Hargrove: "Re: [hwloc-devel] PATCH: Mark fd as close-on-exec"</a>
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
