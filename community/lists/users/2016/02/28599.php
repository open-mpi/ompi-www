<?
$subject_val = "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb 27 08:48:39 2016" -->
<!-- isoreceived="20160227134839" -->
<!-- sent="Sat, 27 Feb 2016 14:48:38 +0100" -->
<!-- isosent="20160227134838" -->
<!-- name="Emmanuel Thom&#195;&#169;" -->
<!-- email="emmanuel.thome_at_[hidden]" -->
<!-- subject="Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks" -->
<!-- id="CAPLAFj7DyNjrCNzoVBw9xabn87uUXGLVXFK8hrh6RsMXKfJzpQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="BEE600BF-1CEC-49A3-8E1C-D336AC490093_at_cisco.com" -->
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
<strong>Date:</strong> 2016-02-27 08:48:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28600.php">Jeff Squyres (jsquyres): "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
<li><strong>Previous message:</strong> <a href="28598.php">Jeff Squyres (jsquyres): "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
<li><strong>In reply to:</strong> <a href="28598.php">Jeff Squyres (jsquyres): "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28600.php">Jeff Squyres (jsquyres): "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
<li><strong>Reply:</strong> <a href="28600.php">Jeff Squyres (jsquyres): "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I attach both $builddir/ompi/libmpi.la and /usr/lib/libosmcomp.la
<br>
(both from a system where I kept that file).
<br>
<p>/usr/lib/libosmcomp.la has no embedded rpath information. FWIW, this
<br>
.la file comes from the file
<br>
MLNX_OFED_LINUX-3.1-1.0.3-debian8.1-x86_64/DEBS/libopensm_4.6.0.MLNX20150830.c69ebab_amd64.deb
<br>
.
<br>
<p>On Sat, Feb 27, 2016 at 2:22 PM, Jeff Squyres (jsquyres)
<br>
&lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Does /usr/lib/libosmcomp.la contain the -L/usr/lib flag, or rpath it?
</span><br>
<p>neither, as far as I can tell; but maybe you want to inspect the
<br>
attached file if it looks bogus.
<br>
<p>I see no explicit tinkering with linker flags in the .la file. It
<br>
looks as if libtool, because it gets fed /usr/lib/libosmcomp.la,
<br>
decides that it needs to append -L/usr/lib and -losmcomp to the gcc
<br>
command line. Which would be fine if we had not -lopen-rte later...
<br>
<p>What's the dependency chain which makes libmpi.la pull libosmcomp
<br>
among its dependent libs ?
<br>
<p>Best,
<br>
<p>E.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If so, then Open MPI has no way of knowing that a given dependent library's .la file is faulty (i.e., inserting -L / etc. flags that point to linker-default locations).  The real fix would be to fix /usr/lib/libosmcomp.la.
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/02/28598.php">http://www.open-mpi.org/community/lists/users/2016/02/28598.php</a>
</span><br>
<p>

<br><hr>
<ul>
<li>application/x-shared-library-la attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28599/libmpi.la">libmpi.la</a>
</ul>
<!-- attachment="libmpi.la" -->
<hr>
<ul>
<li>application/x-shared-library-la attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28599/libosmcomp.la">libosmcomp.la</a>
</ul>
<!-- attachment="libosmcomp.la" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28600.php">Jeff Squyres (jsquyres): "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
<li><strong>Previous message:</strong> <a href="28598.php">Jeff Squyres (jsquyres): "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
<li><strong>In reply to:</strong> <a href="28598.php">Jeff Squyres (jsquyres): "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28600.php">Jeff Squyres (jsquyres): "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
<li><strong>Reply:</strong> <a href="28600.php">Jeff Squyres (jsquyres): "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
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
