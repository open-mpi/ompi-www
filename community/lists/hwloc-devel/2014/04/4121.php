<?
$subject_val = "Re: [hwloc-devel] GIT:	hwloc	branch	master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  7 18:17:49 2014" -->
<!-- isoreceived="20140407221749" -->
<!-- sent="Tue, 08 Apr 2014 00:17:46 +0200" -->
<!-- isosent="20140407221746" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] GIT:	hwloc	branch	master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec" -->
<!-- id="5343240A.4000605_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="6DF1B378-604F-4DB3-9539-E66112B9567A_at_cisco.com" -->
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
<strong>Date:</strong> 2014-04-07 18:17:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4122.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-154-g4cf1ec7)"</a>
<li><strong>Previous message:</strong> <a href="4120.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] GIT:	hwloc	branch	master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<li><strong>In reply to:</strong> <a href="4120.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] GIT:	hwloc	branch	master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Works fine on Linux and Solaris, thanks!
<br>
<p><p>Le 08/04/2014 00:09, Jeff Squyres (jsquyres) a &#233;crit :
<br>
<span class="quotelev1">&gt; How about this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; diff --git a/config/distscript.sh b/config/distscript.sh
</span><br>
<span class="quotelev1">&gt; index d7bdfa4..9f05a2f 100755
</span><br>
<span class="quotelev1">&gt; --- a/config/distscript.sh
</span><br>
<span class="quotelev1">&gt; +++ b/config/distscript.sh
</span><br>
<span class="quotelev1">&gt; @@ -69,7 +69,7 @@ fi
</span><br>
<span class="quotelev1">&gt;  # Trivial helper function
</span><br>
<span class="quotelev1">&gt;  doit() {
</span><br>
<span class="quotelev1">&gt;      echo $*
</span><br>
<span class="quotelev1">&gt; -    $*
</span><br>
<span class="quotelev1">&gt; +    eval $*
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  echo &quot;*** Copying doxygen-doc tree to dist...&quot;
</span><br>
<span class="quotelev1">&gt; @@ -77,7 +77,26 @@ echo &quot;*** Directory: srcdir: $srcdir, distdir: $distdir, pwd:
</span><br>
<span class="quotelev1">&gt;  doit mkdir -p $distdir/doc/doxygen-doc
</span><br>
<span class="quotelev1">&gt;  doit chmod -R a=rwx $distdir/doc/doxygen-doc
</span><br>
<span class="quotelev1">&gt;  doit rm -rf $distdir/doc/doxygen-doc
</span><br>
<span class="quotelev1">&gt; -doit cp -rpf $srcdir/doc/doxygen-doc $distdir/doc
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +# We want to copy the entire directory tree to the distdir.  In some
</span><br>
<span class="quotelev1">&gt; +# cases, doxygen-doc may be a sym link, so we want the copy to follow
</span><br>
<span class="quotelev1">&gt; +# the sym links.  It's a bit of a portability nightmare, so try a few
</span><br>
<span class="quotelev1">&gt; +# different ways...
</span><br>
<span class="quotelev1">&gt; +# This seems to work on OS X and Linux (but not Solaris)
</span><br>
<span class="quotelev1">&gt; +doit &quot;tar c -C $srcdir -h -f - doc/doxygen-doc | tar x -C $distdir -f -&quot;
</span><br>
<span class="quotelev1">&gt; +if test ! -d $distdir/doc/doxygen-doc; then
</span><br>
<span class="quotelev1">&gt; +    # This seems to work on Linux and Solaris
</span><br>
<span class="quotelev1">&gt; +    doit cp -rpf $srcdir/doc/doxygen-doc/ $distdir/doc
</span><br>
<span class="quotelev1">&gt; +fi
</span><br>
<span class="quotelev1">&gt; +if test ! -d $distdir/doc/doxygen-doc; then
</span><br>
<span class="quotelev1">&gt; +    # This seems to work on OS X (probably redundant, but we know it works)
</span><br>
<span class="quotelev1">&gt; +    doit cp -rpf $srcdir/doc/doxygen-doc $distdir/doc
</span><br>
<span class="quotelev1">&gt; +fi
</span><br>
<span class="quotelev1">&gt; +# If we still failed, just error out
</span><br>
<span class="quotelev1">&gt; +if test ! -d $distdir/doc/doxygen-doc; then
</span><br>
<span class="quotelev1">&gt; +    echo &quot;ERROR: Cannot seem to copy a directory to the distdir :-(&quot;
</span><br>
<span class="quotelev1">&gt; +    exit 1
</span><br>
<span class="quotelev1">&gt; +fi
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  echo &quot;*** Copying new README&quot;
</span><br>
<span class="quotelev1">&gt;  ls -lf $distdir/README
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 7, 2014, at 6:04 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;  wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My jenkins does make distcheck on some Linux and only make check on
</span><br>
<span class="quotelev2">&gt;&gt; others, so it should be fine on my side.
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Le 08/04/2014 00:01, Jeff Squyres (jsquyres) a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Do we care about &quot;make dist&quot; on Solaris?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Apr 7, 2014, at 5:57 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Same error.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Brice
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Le 07/04/2014 23:43, Jeff Squyres (jsquyres) a &#233;crit :
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; How about:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; tar c -C /home/ci/hwloc-gitclone -h -f - doc/doxygen-doc | tar x -C /home/ci/hwloc-gitclone/build/hwloc-gitclone -f -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Apr 7, 2014, at 5:36 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Works on my Linux but fails on Solaris:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; tar -c -C /home/ci/hwloc-gitclone -h -f - doc/doxygen-doc | tar -x -C
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /home/ci/hwloc-gitclone/build/hwloc-gitclone -f -
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; tar: /dev/rmt/0: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Le 07/04/2014 23:29, Jeff Squyres (jsquyres) a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; --- a/config/distscript.sh
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; +++ b/config/distscript.sh
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; @@ -69,7 +69,7 @@ fi
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; # Trivial helper function
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; doit() {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   echo $*
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; -    $*
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; +    eval $*
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; echo &quot;*** Copying doxygen-doc tree to dist...&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; @@ -77,7 +77,7 @@ echo &quot;*** Directory: srcdir: $srcdir, distdir: $distdir, pwd: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; doit mkdir -p $distdir/doc/doxygen-doc
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; doit chmod -R a=rwx $distdir/doc/doxygen-doc
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; doit rm -rf $distdir/doc/doxygen-doc
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; -doit cp -rpf $srcdir/doc/doxygen-doc $distdir/doc
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; +doit &quot;tar -c -C $srcdir -h -f - doc/doxygen-doc | tar -x -C $distdir -f -&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; echo &quot;*** Copying new README&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ls -lf $distdir/README
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
<li><strong>Next message:</strong> <a href="4122.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-154-g4cf1ec7)"</a>
<li><strong>Previous message:</strong> <a href="4120.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] GIT:	hwloc	branch	master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<li><strong>In reply to:</strong> <a href="4120.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] GIT:	hwloc	branch	master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<!-- nextthread="start" -->
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
