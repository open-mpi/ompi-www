<?
$subject_val = "Re: [hwloc-devel] GIT: hwloc branch	master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  7 16:59:57 2014" -->
<!-- isoreceived="20140407205957" -->
<!-- sent="Mon, 7 Apr 2014 20:59:56 +0000" -->
<!-- isosent="20140407205956" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] GIT: hwloc branch	master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec" -->
<!-- id="B44F8031-7964-4F88-915A-FD2798325137_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="53430BA2.9080904_at_inria.fr" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-07 16:59:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4112.php">Brice Goglin: "Re: [hwloc-devel] GIT: hwloc branch	master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<li><strong>Previous message:</strong> <a href="4110.php">Brice Goglin: "Re: [hwloc-devel] GIT: hwloc branch master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<li><strong>In reply to:</strong> <a href="4110.php">Brice Goglin: "Re: [hwloc-devel] GIT: hwloc branch master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4112.php">Brice Goglin: "Re: [hwloc-devel] GIT: hwloc branch	master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<li><strong>Reply:</strong> <a href="4112.php">Brice Goglin: "Re: [hwloc-devel] GIT: hwloc branch	master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 7, 2014, at 4:33 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; So you're (always?) getting tarballs without any doc/doxygen-doc
</span><br>
<span class="quotelev1">&gt; subdirectories?
</span><br>
<p>That's correct -- doc/doxygen-doc is in the source tree, but does not end up in the tarball.
<br>
<p><span class="quotelev1">&gt; Does &quot;make dist&quot; say that it's copying the doxygen-doc
</span><br>
<span class="quotelev1">&gt; subdirectory? Any idea who's removing it later?
</span><br>
<p>Mmm... good point... 
<br>
<p>/me investigates
<br>
<p>Ah, I see the issue.  On OS X, this:
<br>
<p>doit cp -rpf $srcdir/doc/doxygen-doc/ $distdir/doc
<br>
<p>Does not actually copy the doxygen-doc directory to $distdir.  If I remove the trailing slash, it works:
<br>
<p>doit cp -rpf $srcdir/doc/doxygen-doc $distdir/doc
<br>
<p>(i.e., doxygen-doc ends up in $distdir and distcheck works properly)
<br>
<p>There's probably a reason for this, but I'm not too interested in tracking it down.  I just removed the trailing slash...
<br>
<p>I note that the OS X man page for cp says:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Historic versions of the cp utility had a -r option.  This implementation
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;supports that option; however, its use is strongly discouraged, as it
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;does not correctly copy special files, symbolic links, or fifo's.
<br>
<p>Instead, the OS X cp supports -R (Linux cp does, too).
<br>
<p>I guess we should be using something better than cp -r to copy the directory over -- perhaps tar?
<br>
<p><span class="quotelev1">&gt; I managed to get such a tarball without doc only once, but it
</span><br>
<span class="quotelev1">&gt; disappeared after I added some debug commands to config/distscript.sh to
</span><br>
<span class="quotelev1">&gt; see where doc/doxygen-doc was being deleted. Strange.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 07/04/2014 22:05, Jeff Squyres (jsquyres) a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Right -- I've done that (i.e., if I do &quot;make doc&quot; again, it does nothing because it's already done).  And &quot;make dist&quot; works fine.  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; But &quot;make distcheck&quot; fails when it runs &quot;make dist&quot; in the subdir of the expanded tarball fails because doc/doxygen-doc doesn't exist in there.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 7, 2014, at 3:57 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In v1.9+, you need make doc before make dist or make distcheck. It may
</span><br>
<span class="quotelev3">&gt;&gt;&gt; explain your problem?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I changed this a couple weeks ago to make things much easier to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; understand/maintain (but a little bit harder to use :))
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brice
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Le 07/04/2014 21:37, Jeff Squyres (jsquyres) a &#233;crit :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I just pushed 143e27248f928797e2e8532747386c67c9f8d873, which converted distscript.csh to distscript.sh.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If it works well on master, we can pull it to the v1.9 branch.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I notice that &quot;make distcheck&quot; is broken, however -- when it goes to &quot;make dist&quot; in the expanded tarball, I get the following message:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -----
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *** The srcdir does not already have a doxygen-doc tree built.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *** hwloc's config/distscript.csh requires the docs to be built
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *** in the srcdir before executing 'make dist'.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[3]: *** [dist-hook] Error 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[2]: *** [distdir] Error 2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[1]: *** [dist] Error 2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make: *** [distcheck] Error 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -----
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is this expected / has this been broken for a while?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Mar 31, 2014, at 1:42 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Le 31/03/2014 00:57, Christopher Samuel a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On 30/03/14 02:04, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; turns out that some linux distro's automatically set LS_COLORS in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; your environment when running old versions of csh/tcsh via their
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; default dot files
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; For example RHEL6 does this..
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Looks like it's a 10 years old conflict between csh and coreutils. It's
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; crary hwloc has to work around this very old issue, we should just stop
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; using csh and distros that haven't fixed this :)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Brice
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
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
<li><strong>Next message:</strong> <a href="4112.php">Brice Goglin: "Re: [hwloc-devel] GIT: hwloc branch	master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<li><strong>Previous message:</strong> <a href="4110.php">Brice Goglin: "Re: [hwloc-devel] GIT: hwloc branch master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<li><strong>In reply to:</strong> <a href="4110.php">Brice Goglin: "Re: [hwloc-devel] GIT: hwloc branch master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4112.php">Brice Goglin: "Re: [hwloc-devel] GIT: hwloc branch	master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<li><strong>Reply:</strong> <a href="4112.php">Brice Goglin: "Re: [hwloc-devel] GIT: hwloc branch	master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
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
