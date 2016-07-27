<?
$subject_val = "Re: [hwloc-devel] GIT: hwloc branch master updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  7 15:37:49 2014" -->
<!-- isoreceived="20140407193749" -->
<!-- sent="Mon, 7 Apr 2014 19:37:47 +0000" -->
<!-- isosent="20140407193747" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] GIT: hwloc branch master updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec" -->
<!-- id="E90B506D-F159-44B8-A363-CB2A5BA7AFDB_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="53390061.2010701_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] GIT: hwloc branch master updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-07 15:37:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4108.php">Brice Goglin: "Re: [hwloc-devel] GIT: hwloc branch master updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<li><strong>Previous message:</strong> <a href="4106.php">MPI Team: "[hwloc-devel] Create success (hwloc git 1.9-5-g07c2dd8)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2014/03/4096.php">Brice Goglin: "Re: [hwloc-devel] GIT: hwloc branch master updated. 0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4108.php">Brice Goglin: "Re: [hwloc-devel] GIT: hwloc branch master updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<li><strong>Reply:</strong> <a href="4108.php">Brice Goglin: "Re: [hwloc-devel] GIT: hwloc branch master updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just pushed 143e27248f928797e2e8532747386c67c9f8d873, which converted distscript.csh to distscript.sh.
<br>
<p>If it works well on master, we can pull it to the v1.9 branch.
<br>
<p>I notice that &quot;make distcheck&quot; is broken, however -- when it goes to &quot;make dist&quot; in the expanded tarball, I get the following message:
<br>
<p>-----
<br>
*** The srcdir does not already have a doxygen-doc tree built.
<br>
*** hwloc's config/distscript.csh requires the docs to be built
<br>
*** in the srcdir before executing 'make dist'.
<br>
make[3]: *** [dist-hook] Error 1
<br>
make[2]: *** [distdir] Error 2
<br>
make[1]: *** [dist] Error 2
<br>
make: *** [distcheck] Error 1
<br>
-----
<br>
<p>Is this expected / has this been broken for a while?
<br>
<p><p><p><p>On Mar 31, 2014, at 1:42 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Le 31/03/2014 00:57, Christopher Samuel a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; On 30/03/14 02:04, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; turns out that some linux distro's automatically set LS_COLORS in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; your environment when running old versions of csh/tcsh via their
</span><br>
<span class="quotelev3">&gt;&gt;&gt; default dot files
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; For example RHEL6 does this..
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Looks like it's a 10 years old conflict between csh and coreutils. It's
</span><br>
<span class="quotelev1">&gt; crary hwloc has to work around this very old issue, we should just stop
</span><br>
<span class="quotelev1">&gt; using csh and distros that haven't fixed this :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
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
<li><strong>Next message:</strong> <a href="4108.php">Brice Goglin: "Re: [hwloc-devel] GIT: hwloc branch master updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<li><strong>Previous message:</strong> <a href="4106.php">MPI Team: "[hwloc-devel] Create success (hwloc git 1.9-5-g07c2dd8)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2014/03/4096.php">Brice Goglin: "Re: [hwloc-devel] GIT: hwloc branch master updated. 0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4108.php">Brice Goglin: "Re: [hwloc-devel] GIT: hwloc branch master updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<li><strong>Reply:</strong> <a href="4108.php">Brice Goglin: "Re: [hwloc-devel] GIT: hwloc branch master updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
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
