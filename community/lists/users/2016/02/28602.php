<?
$subject_val = "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb 27 09:00:11 2016" -->
<!-- isoreceived="20160227140011" -->
<!-- sent="Sat, 27 Feb 2016 15:00:10 +0100" -->
<!-- isosent="20160227140010" -->
<!-- name="Emmanuel Thom&#195;&#169;" -->
<!-- email="emmanuel.thome_at_[hidden]" -->
<!-- subject="Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks" -->
<!-- id="CAPLAFj7H6zeQCb6=TQ_mKfRGZJpcL9Tm3_MpjYYd2DULnBxgaA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="15B0ABDE-140C-430B-A912-B4A7877F8F98_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks<br>
<strong>From:</strong> Emmanuel Thom&#195;&#169; (<em>emmanuel.thome_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-27 09:00:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28603.php">Jeff Squyres (jsquyres): "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
<li><strong>Previous message:</strong> <a href="28601.php">Emmanuel Thom&#195;&#169;: "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
<li><strong>In reply to:</strong> <a href="28600.php">Jeff Squyres (jsquyres): "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28603.php">Jeff Squyres (jsquyres): "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here you go.
<br>
<p><a href="http://www.loria.fr/~thome/vrac/logs.tar.bz2">http://www.loria.fr/~thome/vrac/logs.tar.bz2</a>
<br>
<p>E.
<br>
<p><p><p>On Sat, Feb 27, 2016 at 2:56 PM, Jeff Squyres (jsquyres)
<br>
&lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Can you send all the build information listed here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="https://www.open-mpi.org/community/help/">https://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 27, 2016, at 8:48 AM, Emmanuel Thom&#195;&#169; &lt;emmanuel.thome_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I attach both $builddir/ompi/libmpi.la and /usr/lib/libosmcomp.la
</span><br>
<span class="quotelev2">&gt;&gt; (both from a system where I kept that file).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib/libosmcomp.la has no embedded rpath information. FWIW, this
</span><br>
<span class="quotelev2">&gt;&gt; .la file comes from the file
</span><br>
<span class="quotelev2">&gt;&gt; MLNX_OFED_LINUX-3.1-1.0.3-debian8.1-x86_64/DEBS/libopensm_4.6.0.MLNX20150830.c69ebab_amd64.deb
</span><br>
<span class="quotelev2">&gt;&gt; .
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sat, Feb 27, 2016 at 2:22 PM, Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev2">&gt;&gt; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Does /usr/lib/libosmcomp.la contain the -L/usr/lib flag, or rpath it?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; neither, as far as I can tell; but maybe you want to inspect the
</span><br>
<span class="quotelev2">&gt;&gt; attached file if it looks bogus.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I see no explicit tinkering with linker flags in the .la file. It
</span><br>
<span class="quotelev2">&gt;&gt; looks as if libtool, because it gets fed /usr/lib/libosmcomp.la,
</span><br>
<span class="quotelev2">&gt;&gt; decides that it needs to append -L/usr/lib and -losmcomp to the gcc
</span><br>
<span class="quotelev2">&gt;&gt; command line. Which would be fine if we had not -lopen-rte later...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What's the dependency chain which makes libmpi.la pull libosmcomp
</span><br>
<span class="quotelev2">&gt;&gt; among its dependent libs ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; E.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If so, then Open MPI has no way of knowing that a given dependent library's .la file is faulty (i.e., inserting -L / etc. flags that point to linker-default locations).  The real fix would be to fix /usr/lib/libosmcomp.la.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/02/28598.php">http://www.open-mpi.org/community/lists/users/2016/02/28598.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; &lt;libmpi.la&gt;&lt;libosmcomp.la&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/02/28599.php">http://www.open-mpi.org/community/lists/users/2016/02/28599.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/02/28600.php">http://www.open-mpi.org/community/lists/users/2016/02/28600.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28603.php">Jeff Squyres (jsquyres): "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
<li><strong>Previous message:</strong> <a href="28601.php">Emmanuel Thom&#195;&#169;: "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
<li><strong>In reply to:</strong> <a href="28600.php">Jeff Squyres (jsquyres): "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28603.php">Jeff Squyres (jsquyres): "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
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
