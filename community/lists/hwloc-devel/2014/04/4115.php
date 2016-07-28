<?
$subject_val = "Re: [hwloc-devel] GIT:	hwloc	branch	master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  7 17:36:42 2014" -->
<!-- isoreceived="20140407213642" -->
<!-- sent="Mon, 07 Apr 2014 23:36:38 +0200" -->
<!-- isosent="20140407213638" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] GIT:	hwloc	branch	master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec" -->
<!-- id="53431A66.8030705_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C8FE2C98-A067-4DA5-868B-5DB4850BF17A_at_cisco.com" -->
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
<strong>Date:</strong> 2014-04-07 17:36:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4116.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] GIT:	hwloc	branch	master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<li><strong>Previous message:</strong> <a href="4114.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] GIT:	hwloc	branch	master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<li><strong>In reply to:</strong> <a href="4114.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] GIT:	hwloc	branch	master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4116.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] GIT:	hwloc	branch	master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<li><strong>Reply:</strong> <a href="4116.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] GIT:	hwloc	branch	master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Works on my Linux but fails on Solaris:
<br>
tar -c -C /home/ci/hwloc-gitclone -h -f - doc/doxygen-doc | tar -x -C
<br>
/home/ci/hwloc-gitclone/build/hwloc-gitclone -f -
<br>
tar: /dev/rmt/0: No such file or directory
<br>
<p><p><p>Le 07/04/2014 23:29, Jeff Squyres (jsquyres) a &#233;crit :
<br>
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
<span class="quotelev1">&gt; @@ -77,7 +77,7 @@ echo &quot;*** Directory: srcdir: $srcdir, distdir: $distdir, pwd: 
</span><br>
<span class="quotelev1">&gt;  doit mkdir -p $distdir/doc/doxygen-doc
</span><br>
<span class="quotelev1">&gt;  doit chmod -R a=rwx $distdir/doc/doxygen-doc
</span><br>
<span class="quotelev1">&gt;  doit rm -rf $distdir/doc/doxygen-doc
</span><br>
<span class="quotelev1">&gt; -doit cp -rpf $srcdir/doc/doxygen-doc $distdir/doc
</span><br>
<span class="quotelev1">&gt; +doit &quot;tar -c -C $srcdir -h -f - doc/doxygen-doc | tar -x -C $distdir -f -&quot;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  echo &quot;*** Copying new README&quot;
</span><br>
<span class="quotelev1">&gt;  ls -lf $distdir/README
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4116.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] GIT:	hwloc	branch	master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<li><strong>Previous message:</strong> <a href="4114.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] GIT:	hwloc	branch	master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<li><strong>In reply to:</strong> <a href="4114.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] GIT:	hwloc	branch	master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4116.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] GIT:	hwloc	branch	master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<li><strong>Reply:</strong> <a href="4116.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] GIT:	hwloc	branch	master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
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
