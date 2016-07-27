<?
$subject_val = "Re: [hwloc-devel] GIT:	hwloc	branch	master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  7 17:43:26 2014" -->
<!-- isoreceived="20140407214326" -->
<!-- sent="Mon, 7 Apr 2014 21:43:24 +0000" -->
<!-- isosent="20140407214324" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] GIT:	hwloc	branch	master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec" -->
<!-- id="289A4BDA-9E73-483D-9993-C31DE9F9D621_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="53431A66.8030705_at_inria.fr" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-07 17:43:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4117.php">Brice Goglin: "Re: [hwloc-devel] GIT:	hwloc	branch	master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<li><strong>Previous message:</strong> <a href="4115.php">Brice Goglin: "Re: [hwloc-devel] GIT:	hwloc	branch	master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<li><strong>In reply to:</strong> <a href="4115.php">Brice Goglin: "Re: [hwloc-devel] GIT:	hwloc	branch	master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4117.php">Brice Goglin: "Re: [hwloc-devel] GIT:	hwloc	branch	master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<li><strong>Reply:</strong> <a href="4117.php">Brice Goglin: "Re: [hwloc-devel] GIT:	hwloc	branch	master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
How about:
<br>
<p>tar c -C /home/ci/hwloc-gitclone -h -f - doc/doxygen-doc | tar x -C /home/ci/hwloc-gitclone/build/hwloc-gitclone -f -
<br>
<p><p><p>On Apr 7, 2014, at 5:36 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt;
<br>
&nbsp;wrote:
<br>
<p><span class="quotelev1">&gt; Works on my Linux but fails on Solaris:
</span><br>
<span class="quotelev1">&gt; tar -c -C /home/ci/hwloc-gitclone -h -f - doc/doxygen-doc | tar -x -C
</span><br>
<span class="quotelev1">&gt; /home/ci/hwloc-gitclone/build/hwloc-gitclone -f -
</span><br>
<span class="quotelev1">&gt; tar: /dev/rmt/0: No such file or directory
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 07/04/2014 23:29, Jeff Squyres (jsquyres) a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; --- a/config/distscript.sh
</span><br>
<span class="quotelev2">&gt;&gt; +++ b/config/distscript.sh
</span><br>
<span class="quotelev2">&gt;&gt; @@ -69,7 +69,7 @@ fi
</span><br>
<span class="quotelev2">&gt;&gt; # Trivial helper function
</span><br>
<span class="quotelev2">&gt;&gt; doit() {
</span><br>
<span class="quotelev2">&gt;&gt;     echo $*
</span><br>
<span class="quotelev2">&gt;&gt; -    $*
</span><br>
<span class="quotelev2">&gt;&gt; +    eval $*
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; echo &quot;*** Copying doxygen-doc tree to dist...&quot;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -77,7 +77,7 @@ echo &quot;*** Directory: srcdir: $srcdir, distdir: $distdir, pwd: 
</span><br>
<span class="quotelev2">&gt;&gt; doit mkdir -p $distdir/doc/doxygen-doc
</span><br>
<span class="quotelev2">&gt;&gt; doit chmod -R a=rwx $distdir/doc/doxygen-doc
</span><br>
<span class="quotelev2">&gt;&gt; doit rm -rf $distdir/doc/doxygen-doc
</span><br>
<span class="quotelev2">&gt;&gt; -doit cp -rpf $srcdir/doc/doxygen-doc $distdir/doc
</span><br>
<span class="quotelev2">&gt;&gt; +doit &quot;tar -c -C $srcdir -h -f - doc/doxygen-doc | tar -x -C $distdir -f -&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; echo &quot;*** Copying new README&quot;
</span><br>
<span class="quotelev2">&gt;&gt; ls -lf $distdir/README
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
<li><strong>Next message:</strong> <a href="4117.php">Brice Goglin: "Re: [hwloc-devel] GIT:	hwloc	branch	master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<li><strong>Previous message:</strong> <a href="4115.php">Brice Goglin: "Re: [hwloc-devel] GIT:	hwloc	branch	master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<li><strong>In reply to:</strong> <a href="4115.php">Brice Goglin: "Re: [hwloc-devel] GIT:	hwloc	branch	master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4117.php">Brice Goglin: "Re: [hwloc-devel] GIT:	hwloc	branch	master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<li><strong>Reply:</strong> <a href="4117.php">Brice Goglin: "Re: [hwloc-devel] GIT:	hwloc	branch	master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
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
