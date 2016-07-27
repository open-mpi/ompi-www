<?
$subject_val = "Re: [hwloc-devel] GIT: hwloc branch master updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  7 15:57:25 2014" -->
<!-- isoreceived="20140407195725" -->
<!-- sent="Mon, 07 Apr 2014 21:57:22 +0200" -->
<!-- isosent="20140407195722" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] GIT: hwloc branch master updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec" -->
<!-- id="53430322.20407_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E90B506D-F159-44B8-A363-CB2A5BA7AFDB_at_cisco.com" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-07 15:57:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4109.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] GIT: hwloc branch master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<li><strong>Previous message:</strong> <a href="4107.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] GIT: hwloc branch master updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<li><strong>In reply to:</strong> <a href="4107.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] GIT: hwloc branch master updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4109.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] GIT: hwloc branch master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<li><strong>Reply:</strong> <a href="4109.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] GIT: hwloc branch master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In v1.9+, you need make doc before make dist or make distcheck. It may
<br>
explain your problem?
<br>
I changed this a couple weeks ago to make things much easier to
<br>
understand/maintain (but a little bit harder to use :))
<br>
<p>Brice
<br>
<p><p>Le 07/04/2014 21:37, Jeff Squyres (jsquyres) a &#233;crit :
<br>
<span class="quotelev1">&gt; I just pushed 143e27248f928797e2e8532747386c67c9f8d873, which converted distscript.csh to distscript.sh.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If it works well on master, we can pull it to the v1.9 branch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I notice that &quot;make distcheck&quot; is broken, however -- when it goes to &quot;make dist&quot; in the expanded tarball, I get the following message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; *** The srcdir does not already have a doxygen-doc tree built.
</span><br>
<span class="quotelev1">&gt; *** hwloc's config/distscript.csh requires the docs to be built
</span><br>
<span class="quotelev1">&gt; *** in the srcdir before executing 'make dist'.
</span><br>
<span class="quotelev1">&gt; make[3]: *** [dist-hook] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: *** [distdir] Error 2
</span><br>
<span class="quotelev1">&gt; make[1]: *** [dist] Error 2
</span><br>
<span class="quotelev1">&gt; make: *** [distcheck] Error 1
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this expected / has this been broken for a while?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 31, 2014, at 1:42 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Le 31/03/2014 00:57, Christopher Samuel a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 30/03/14 02:04, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; turns out that some linux distro's automatically set LS_COLORS in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; your environment when running old versions of csh/tcsh via their
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; default dot files
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For example RHEL6 does this..
</span><br>
<span class="quotelev2">&gt;&gt; Looks like it's a 10 years old conflict between csh and coreutils. It's
</span><br>
<span class="quotelev2">&gt;&gt; crary hwloc has to work around this very old issue, we should just stop
</span><br>
<span class="quotelev2">&gt;&gt; using csh and distros that haven't fixed this :)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brice
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4109.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] GIT: hwloc branch master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<li><strong>Previous message:</strong> <a href="4107.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] GIT: hwloc branch master updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<li><strong>In reply to:</strong> <a href="4107.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] GIT: hwloc branch master updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4109.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] GIT: hwloc branch master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<li><strong>Reply:</strong> <a href="4109.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] GIT: hwloc branch master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
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
