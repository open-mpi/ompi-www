<?
$subject_val = "Re: [hwloc-devel] GIT: hwloc branch	master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  7 17:05:33 2014" -->
<!-- isoreceived="20140407210533" -->
<!-- sent="Mon, 07 Apr 2014 23:05:31 +0200" -->
<!-- isosent="20140407210531" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] GIT: hwloc branch	master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec" -->
<!-- id="5343131B.8080308_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B44F8031-7964-4F88-915A-FD2798325137_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] GIT: hwloc branch	master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-07 17:05:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4113.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] GIT: hwloc	branch	master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<li><strong>Previous message:</strong> <a href="4111.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] GIT: hwloc branch	master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<li><strong>In reply to:</strong> <a href="4111.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] GIT: hwloc branch	master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4113.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] GIT: hwloc	branch	master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<li><strong>Reply:</strong> <a href="4113.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] GIT: hwloc	branch	master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So you just broke my make dist :/
<br>
I don't have MacOS to test things. If rsync or tar or whatever can
<br>
dereference symlinks, that'll work for me.
<br>
<p><p>commit 0ebeff689e9414d5eedbf53e7c8697a3af5e4b72
<br>
Author: Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt;
<br>
Date:   Fri Mar 21 18:51:14 2014 +0100
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;dist: fix support for doc/doxygen-doc being a symlink
<br>
&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;make dist works when building out-of-source if $srcdir/doc/doxygen-doc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;is a symlink to builddir/doc/doxygen-doc.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;But it actually fails to copy the doxygen-doc tree because it
<br>
&nbsp;&nbsp;&nbsp;&nbsp;doesn't dereference the symlink. Fix that.
<br>
<p>Brice
<br>
<p><p><p><p>Le 07/04/2014 22:59, Jeff Squyres (jsquyres) a &#233;crit :
<br>
<span class="quotelev1">&gt; On Apr 7, 2014, at 4:33 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So you're (always?) getting tarballs without any doc/doxygen-doc
</span><br>
<span class="quotelev2">&gt;&gt; subdirectories?
</span><br>
<span class="quotelev1">&gt; That's correct -- doc/doxygen-doc is in the source tree, but does not end up in the tarball.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Does &quot;make dist&quot; say that it's copying the doxygen-doc
</span><br>
<span class="quotelev2">&gt;&gt; subdirectory? Any idea who's removing it later?
</span><br>
<span class="quotelev1">&gt; Mmm... good point... 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /me investigates
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ah, I see the issue.  On OS X, this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; doit cp -rpf $srcdir/doc/doxygen-doc/ $distdir/doc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does not actually copy the doxygen-doc directory to $distdir.  If I remove the trailing slash, it works:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; doit cp -rpf $srcdir/doc/doxygen-doc $distdir/doc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (i.e., doxygen-doc ends up in $distdir and distcheck works properly)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There's probably a reason for this, but I'm not too interested in tracking it down.  I just removed the trailing slash...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I note that the OS X man page for cp says:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      Historic versions of the cp utility had a -r option.  This implementation
</span><br>
<span class="quotelev1">&gt;      supports that option; however, its use is strongly discouraged, as it
</span><br>
<span class="quotelev1">&gt;      does not correctly copy special files, symbolic links, or fifo's.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Instead, the OS X cp supports -R (Linux cp does, too).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I guess we should be using something better than cp -r to copy the directory over -- perhaps tar?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I managed to get such a tarball without doc only once, but it
</span><br>
<span class="quotelev2">&gt;&gt; disappeared after I added some debug commands to config/distscript.sh to
</span><br>
<span class="quotelev2">&gt;&gt; see where doc/doxygen-doc was being deleted. Strange.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brice
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Le 07/04/2014 22:05, Jeff Squyres (jsquyres) a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Right -- I've done that (i.e., if I do &quot;make doc&quot; again, it does nothing because it's already done).  And &quot;make dist&quot; works fine.  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But &quot;make distcheck&quot; fails when it runs &quot;make dist&quot; in the subdir of the expanded tarball fails because doc/doxygen-doc doesn't exist in there.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Apr 7, 2014, at 3:57 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In v1.9+, you need make doc before make dist or make distcheck. It may
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; explain your problem?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I changed this a couple weeks ago to make things much easier to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; understand/maintain (but a little bit harder to use :))
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Brice
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Le 07/04/2014 21:37, Jeff Squyres (jsquyres) a &#233;crit :
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I just pushed 143e27248f928797e2e8532747386c67c9f8d873, which converted distscript.csh to distscript.sh.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; If it works well on master, we can pull it to the v1.9 branch.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I notice that &quot;make distcheck&quot; is broken, however -- when it goes to &quot;make dist&quot; in the expanded tarball, I get the following message:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -----
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *** The srcdir does not already have a doxygen-doc tree built.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *** hwloc's config/distscript.csh requires the docs to be built
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *** in the srcdir before executing 'make dist'.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make[3]: *** [dist-hook] Error 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make[2]: *** [distdir] Error 2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make[1]: *** [dist] Error 2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make: *** [distcheck] Error 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -----
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Is this expected / has this been broken for a while?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Mar 31, 2014, at 1:42 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Le 31/03/2014 00:57, Christopher Samuel a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On 30/03/14 02:04, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; turns out that some linux distro's automatically set LS_COLORS in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; your environment when running old versions of csh/tcsh via their
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; default dot files
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; For example RHEL6 does this..
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Looks like it's a 10 years old conflict between csh and coreutils. It's
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; crary hwloc has to work around this very old issue, we should just stop
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; using csh and distros that haven't fixed this :)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Brice
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4113.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] GIT: hwloc	branch	master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<li><strong>Previous message:</strong> <a href="4111.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] GIT: hwloc branch	master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<li><strong>In reply to:</strong> <a href="4111.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] GIT: hwloc branch	master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4113.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] GIT: hwloc	branch	master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<li><strong>Reply:</strong> <a href="4113.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] GIT: hwloc	branch	master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
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
