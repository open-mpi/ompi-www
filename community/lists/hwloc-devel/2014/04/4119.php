<?
$subject_val = "Re: [hwloc-devel] GIT:	hwloc	branch	master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  7 18:04:53 2014" -->
<!-- isoreceived="20140407220453" -->
<!-- sent="Tue, 08 Apr 2014 00:04:51 +0200" -->
<!-- isosent="20140407220451" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] GIT:	hwloc	branch	master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec" -->
<!-- id="53432103.9090003_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="518D3C7D-8C81-4718-9A1B-54D16CF702A1_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] GIT:	hwloc	branch	master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-07 18:04:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4120.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] GIT:	hwloc	branch	master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<li><strong>Previous message:</strong> <a href="4118.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] GIT:	hwloc	branch	master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<li><strong>In reply to:</strong> <a href="4118.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] GIT:	hwloc	branch	master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4120.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] GIT:	hwloc	branch	master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<li><strong>Reply:</strong> <a href="4120.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] GIT:	hwloc	branch	master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My jenkins does make distcheck on some Linux and only make check on
<br>
others, so it should be fine on my side.
<br>
<p>Brice
<br>
<p><p><p><p>Le 08/04/2014 00:01, Jeff Squyres (jsquyres) a &#233;crit :
<br>
<span class="quotelev1">&gt; Do we care about &quot;make dist&quot; on Solaris?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 7, 2014, at 5:57 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Same error.
</span><br>
<span class="quotelev2">&gt;&gt; Brice
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Le 07/04/2014 23:43, Jeff Squyres (jsquyres) a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; How about:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tar c -C /home/ci/hwloc-gitclone -h -f - doc/doxygen-doc | tar x -C /home/ci/hwloc-gitclone/build/hwloc-gitclone -f -
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Apr 7, 2014, at 5:36 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Works on my Linux but fails on Solaris:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tar -c -C /home/ci/hwloc-gitclone -h -f - doc/doxygen-doc | tar -x -C
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /home/ci/hwloc-gitclone/build/hwloc-gitclone -f -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tar: /dev/rmt/0: No such file or directory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Le 07/04/2014 23:29, Jeff Squyres (jsquyres) a &#233;crit :
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --- a/config/distscript.sh
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +++ b/config/distscript.sh
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; @@ -69,7 +69,7 @@ fi
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; # Trivial helper function
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; doit() {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    echo $*
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -    $*
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +    eval $*
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; echo &quot;*** Copying doxygen-doc tree to dist...&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; @@ -77,7 +77,7 @@ echo &quot;*** Directory: srcdir: $srcdir, distdir: $distdir, pwd: 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; doit mkdir -p $distdir/doc/doxygen-doc
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; doit chmod -R a=rwx $distdir/doc/doxygen-doc
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; doit rm -rf $distdir/doc/doxygen-doc
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -doit cp -rpf $srcdir/doc/doxygen-doc $distdir/doc
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +doit &quot;tar -c -C $srcdir -h -f - doc/doxygen-doc | tar -x -C $distdir -f -&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; echo &quot;*** Copying new README&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ls -lf $distdir/README
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
<li><strong>Next message:</strong> <a href="4120.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] GIT:	hwloc	branch	master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<li><strong>Previous message:</strong> <a href="4118.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] GIT:	hwloc	branch	master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<li><strong>In reply to:</strong> <a href="4118.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] GIT:	hwloc	branch	master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4120.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] GIT:	hwloc	branch	master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<li><strong>Reply:</strong> <a href="4120.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] GIT:	hwloc	branch	master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
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
