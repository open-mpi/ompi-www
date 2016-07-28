<?
$subject_val = "Re: [OMPI devel] OpenMPI rpm build 1.3rc3r20226 build failed";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 20 09:17:41 2009" -->
<!-- isoreceived="20090120141741" -->
<!-- sent="Tue, 20 Jan 2009 09:17:37 -0500" -->
<!-- isosent="20090120141737" -->
<!-- name="Jonathan Billings" -->
<!-- email="jsbillin_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenMPI rpm build 1.3rc3r20226 build failed" -->
<!-- id="20090120141737.GR20654_at_umich.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI devel] OpenMPI rpm build 1.3rc3r20226 build failed" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OpenMPI rpm build 1.3rc3r20226 build failed<br>
<strong>From:</strong> Jonathan Billings (<em>jsbillin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-20 09:17:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5231.php">Ralph Castain: "Re: [OMPI devel] -display-map"</a>
<li><strong>Previous message:</strong> <a href="5229.php">Graham, Richard L.: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>Maybe in reply to:</strong> <a href="5102.php">Lenny Verkhovsky: "[OMPI devel] OpenMPI rpm build 1.3rc3r20226 build failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5233.php">Jeff Squyres: "Re: [OMPI devel] OpenMPI rpm build 1.3rc3r20226 build failed"</a>
<li><strong>Reply:</strong> <a href="5233.php">Jeff Squyres: "Re: [OMPI devel] OpenMPI rpm build 1.3rc3r20226 build failed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I believe the situation that is causing the error has to do with GCC's
<br>
FORTIFY_SOURCE.  I'm building under CentOS 5.2 using the 1.3 src.rpm
<br>
available on the website:
<br>
<p>% gcc -DHAVE_CONFIG_H -I. -I.. -I../tools/opari/lib -I../extlib/otf/otflib -I../extlib/otf/otflib -D_GNU_SOURCE -DBINDIR=\&quot;/usr/bin\&quot; -DDATADIR=\&quot;/usr/share\&quot; -DRFG  -DVT_MEMHOOK -DVT_IOWRAP -O2 -g -pipe -Wall -Wp,-D_FORTIFY_SOURCE=2 -fexceptions -fstack-protector --param=ssp-buffer-size=4 -m64 -mtune=generic -MT vt_iowrap.o -MD -MP -MF .deps/vt_iowrap.Tpo -c -o vt_iowrap.o vt_iowrap.c 
<br>
vt_iowrap.c:1242: error: expected declaration specifiers or &#226;&#128;&#152;...&#226;&#128;&#153;
<br>
before numeric constant
<br>
vt_iowrap.c:1243: error: conflicting types for &#226;&#128;&#152;__fprintf_chk&#226;&#128;&#153;
<br>
<p>% 
<br>
(compile fails)
<br>
<p>I cd into the appropriate area, and re-run the gcc without
<br>
-D_FORTIFY_SOURCE=2:
<br>
<p>% gcc -DHAVE_CONFIG_H -I. -I.. -I../tools/opari/lib -I../extlib/otf/otflib -I../extlib/otf/otflib -D_GNU_SOURCE -DBINDIR=\&quot;/usr/bin\&quot; -DDATADIR=\&quot;/usr/share\&quot; -DRFG  -DVT_MEMHOOK -DVT_IOWRAP -O2 -g -pipe -Wall -fexceptions -fstack-protector --param=ssp-buffer-size=4 -m64 -mtune=generic -MT vt_iowrap.o -MD -MP -MF .deps/vt_iowrap.Tpo -c -o vt_iowrap.o vt_iowrap.c
<br>
<p>% 
<br>
(compile succeeds)
<br>
<p>If I change the spec file to remove the -D_FORTIFY_SOURCE define from
<br>
RPM_OPT_FLAGS (like what is done for non-gcc compilers) the build
<br>
succeeds.
<br>
<p>It appears that the additional define is more strict and causes
<br>
problems when the default RPM build environment is kept intact.
<br>
<p><pre>
-- 
Jonathan Billings &lt;jonathan.billings_at_[hidden]&gt;
The College of Language, Science, and the Arts
LS&amp;A IT - Research Systems and Support
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5231.php">Ralph Castain: "Re: [OMPI devel] -display-map"</a>
<li><strong>Previous message:</strong> <a href="5229.php">Graham, Richard L.: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>Maybe in reply to:</strong> <a href="5102.php">Lenny Verkhovsky: "[OMPI devel] OpenMPI rpm build 1.3rc3r20226 build failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5233.php">Jeff Squyres: "Re: [OMPI devel] OpenMPI rpm build 1.3rc3r20226 build failed"</a>
<li><strong>Reply:</strong> <a href="5233.php">Jeff Squyres: "Re: [OMPI devel] OpenMPI rpm build 1.3rc3r20226 build failed"</a>
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
