<?
$subject_val = "Re: [OMPI devel] debian/ directory";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  6 12:54:19 2013" -->
<!-- isoreceived="20131106175419" -->
<!-- sent="Wed, 06 Nov 2013 18:54:17 +0100" -->
<!-- isosent="20131106175417" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] debian/ directory" -->
<!-- id="527A8249.7000903_at_inria.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="1479916D-D745-4306-9E24-E3974597F11C_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] debian/ directory<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-06 12:54:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13212.php">Nathan Hjelm: "[OMPI devel] RFC: add a context pointer to the base mpool registration"</a>
<li><strong>Previous message:</strong> <a href="13210.php">Mike Dubman: "Re: [OMPI devel] debian/ directory"</a>
<li><strong>In reply to:</strong> <a href="13208.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] debian/ directory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13215.php">Sylvestre Ledru: "Re: [OMPI devel] debian/ directory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<a href="http://anonscm.debian.org/viewvc/pkg-openmpi/openmpi/">http://anonscm.debian.org/viewvc/pkg-openmpi/openmpi/</a>
<br>
svn://svn.debian.org/svn/pkg-openmpi/openmpi/
<br>
<p>FWIW, hwloc debian packaging is maintained by one of the upstream devs,
<br>
but he didn't have to pollute the upstream hwloc repo with debian stuff.
<br>
There's a different repo with only the debian subdirectory. He checks
<br>
both repo out when building debian packages. Looks similar to what
<br>
Sylvestre is doing. Worked fine for years.
<br>
<p>After switching hwloc to git, there's now a debian-specific git repo
<br>
where each debian packaging branch follows a branch of the upstream repo
<br>
and just adds the debian directory. Even easier.
<br>
<p>Brice
<br>
<p><p><p><p>Le 06/11/2013 18:48, Jeff Squyres (jsquyres) a &#233;crit :
<br>
<span class="quotelev1">&gt; (we can consolidate this down to 1 thread, not multiple)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The Debian build stuff is not maintained by us (and is therefore not in our tree); it's maintained by Sylvestre Ledru &lt;sylvestre_at_[hidden]&gt;.  I'm not sure where the original packaging for that is developed / maintained -- Sylvestre?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 6, 2013, at 9:20 AM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; unfortunately, debian/ packaging works only if located in rootDir. :(
</span><br>
<span class="quotelev2">&gt;&gt; If you have better ones - can you put it and we will use it?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Nov 6, 2013 at 4:38 PM, Sylvestre Ledru &lt;sylvestre_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Le 06/11/2013 15:26, Barrett, Brian W a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi all -
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Mike added a debian/ directory to the top-level of the tree this morning,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; which looks to be helping in building a Debian package.  While I don't
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mind helping Debian, I'm really against having a debian/ directory in our
</span><br>
<span class="quotelev3">&gt;&gt;&gt; top-level tree.  We have a place for those things (in contrib/).  If
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Debian can't conform to that requirement, maybe we shouldn't have Debian
</span><br>
<span class="quotelev3">&gt;&gt;&gt; support&#138;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am sorry but it does not help for a few reasons:
</span><br>
<span class="quotelev2">&gt;&gt; * We, in Debian, are doing several uploads of the same upstream version.
</span><br>
<span class="quotelev2">&gt;&gt; So, we always have to modify debian/
</span><br>
<span class="quotelev2">&gt;&gt; * Our tools are removing automatically debian/ in upstream tarballs
</span><br>
<span class="quotelev2">&gt;&gt; * They would have to be in rootDir/debian/, rootDir/contrib/debian would
</span><br>
<span class="quotelev2">&gt;&gt; not work.
</span><br>
<span class="quotelev2">&gt;&gt; * There are already the Debian packages which are a bit more complete
</span><br>
<span class="quotelev2">&gt;&gt; and tested than the one pushed ;)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sylvestre
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13212.php">Nathan Hjelm: "[OMPI devel] RFC: add a context pointer to the base mpool registration"</a>
<li><strong>Previous message:</strong> <a href="13210.php">Mike Dubman: "Re: [OMPI devel] debian/ directory"</a>
<li><strong>In reply to:</strong> <a href="13208.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] debian/ directory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13215.php">Sylvestre Ledru: "Re: [OMPI devel] debian/ directory"</a>
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
