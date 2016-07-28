<?
$subject_val = "Re: [OMPI devel] OpenMPI rpm build 1.3rc3r20226 build failed";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  8 14:43:59 2009" -->
<!-- isoreceived="20090108194359" -->
<!-- sent="Thu, 8 Jan 2009 14:43:52 -0500" -->
<!-- isosent="20090108194352" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenMPI rpm build 1.3rc3r20226 build failed" -->
<!-- id="C3469225-B68F-4A33-9420-496A3A5833D2_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="39C75744D164D948A170E9792AF8E7CAE15111_at_exil.voltaire.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-08 14:43:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5108.php">William Hachfeld: "[OMPI devel] OpenMPI Performance Problem with Open|SpeedShop"</a>
<li><strong>Previous message:</strong> <a href="5106.php">Dirk Eddelbuettel: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Building with rpath disabled"</a>
<li><strong>In reply to:</strong> <a href="5102.php">Lenny Verkhovsky: "[OMPI devel] OpenMPI rpm build 1.3rc3r20226 build failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5112.php">Lenny Verkhovsky: "Re: [OMPI devel] OpenMPI rpm build 1.3rc3r20226 build failed"</a>
<li><strong>Reply:</strong> <a href="5112.php">Lenny Verkhovsky: "Re: [OMPI devel] OpenMPI rpm build 1.3rc3r20226 build failed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This doesn't happen in a normal build of the same tree?
<br>
<p>I ask because both 1.3r20226 builds fine for me manually (i.e., ./ 
<br>
configure;make and buildrpm.sh).
<br>
<p><p>On Jan 8, 2009, at 8:15 AM, Lenny Verkhovsky wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to build rpm from nightly snaposhots of 1.3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; with the downloaded buildrpm.sh and ompi.spec file from
</span><br>
<span class="quotelev1">&gt; <a href="http://svn.open-mpi.org/svn/ompi/branches/v1.3/contrib/dist/linux/">http://svn.open-mpi.org/svn/ompi/branches/v1.3/contrib/dist/linux/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am getting this error
</span><br>
<span class="quotelev1">&gt; .....................
</span><br>
<span class="quotelev1">&gt; Making all in vtlib
</span><br>
<span class="quotelev1">&gt; make[5]: Entering directory
</span><br>
<span class="quotelev1">&gt; `/hpc/home/USERS/lennyb/work/svn/release/scripts/dist-1.3--1/OMPI/ 
</span><br>
<span class="quotelev1">&gt; BUILD/
</span><br>
<span class="quotelev1">&gt; openmpi-1.3rc3r20226/ompi/contrib/vt/vt/vtlib'
</span><br>
<span class="quotelev1">&gt; gcc  -DHAVE_CONFIG_H -I. -I.. -I../tools/opari/lib
</span><br>
<span class="quotelev1">&gt; -I../extlib/otf/otflib -I../extlib/otf/otflib     -D_GNU_SOURCE
</span><br>
<span class="quotelev1">&gt; -DBINDIR=\&quot;/opt/openmpi/1.3rc3r20226-V00/gcc/bin\&quot;
</span><br>
<span class="quotelev1">&gt; -DDATADIR=\&quot;/opt/openmpi/1.3rc3r20226-V00/gcc/share\&quot; -DRFG
</span><br>
<span class="quotelev1">&gt; -DVT_MEMHOOK -DVT_IOWRAP  -O2 -g -pipe -Wall -Wp,-D_FORTIFY_SOURCE=2
</span><br>
<span class="quotelev1">&gt; -fexceptions -fstack-protector --param=ssp-buffer-size=4 -m64
</span><br>
<span class="quotelev1">&gt; -mtune=generic -MT vt_comp_gnu.o -MD -MP -MF .deps/vt_comp_gnu.Tpo - 
</span><br>
<span class="quotelev1">&gt; c -o
</span><br>
<span class="quotelev1">&gt; vt_comp_gnu.o vt_comp_gnu.c
</span><br>
<span class="quotelev1">&gt; gcc  -DHAVE_CONFIG_H -I. -I.. -I../tools/opari/lib
</span><br>
<span class="quotelev1">&gt; -I../extlib/otf/otflib -I../extlib/otf/otflib     -D_GNU_SOURCE
</span><br>
<span class="quotelev1">&gt; -DBINDIR=\&quot;/opt/openmpi/1.3rc3r20226-V00/gcc/bin\&quot;
</span><br>
<span class="quotelev1">&gt; -DDATADIR=\&quot;/opt/openmpi/1.3rc3r20226-V00/gcc/share\&quot; -DRFG
</span><br>
<span class="quotelev1">&gt; -DVT_MEMHOOK -DVT_IOWRAP  -O2 -g -pipe -Wall -Wp,-D_FORTIFY_SOURCE=2
</span><br>
<span class="quotelev1">&gt; -fexceptions -fstack-protector --param=ssp-buffer-size=4 -m64
</span><br>
<span class="quotelev1">&gt; -mtune=generic -MT vt_memhook.o -MD -MP -MF .deps/vt_memhook.Tpo -c -o
</span><br>
<span class="quotelev1">&gt; vt_memhook.o vt_memhook.c
</span><br>
<span class="quotelev1">&gt; gcc  -DHAVE_CONFIG_H -I. -I.. -I../tools/opari/lib
</span><br>
<span class="quotelev1">&gt; -I../extlib/otf/otflib -I../extlib/otf/otflib     -D_GNU_SOURCE
</span><br>
<span class="quotelev1">&gt; -DBINDIR=\&quot;/opt/openmpi/1.3rc3r20226-V00/gcc/bin\&quot;
</span><br>
<span class="quotelev1">&gt; -DDATADIR=\&quot;/opt/openmpi/1.3rc3r20226-V00/gcc/share\&quot; -DRFG
</span><br>
<span class="quotelev1">&gt; -DVT_MEMHOOK -DVT_IOWRAP  -O2 -g -pipe -Wall -Wp,-D_FORTIFY_SOURCE=2
</span><br>
<span class="quotelev1">&gt; -fexceptions -fstack-protector --param=ssp-buffer-size=4 -m64
</span><br>
<span class="quotelev1">&gt; -mtune=generic -MT vt_memreg.o -MD -MP -MF .deps/vt_memreg.Tpo -c -o
</span><br>
<span class="quotelev1">&gt; vt_memreg.o vt_memreg.c
</span><br>
<span class="quotelev1">&gt; gcc  -DHAVE_CONFIG_H -I. -I.. -I../tools/opari/lib
</span><br>
<span class="quotelev1">&gt; -I../extlib/otf/otflib -I../extlib/otf/otflib     -D_GNU_SOURCE
</span><br>
<span class="quotelev1">&gt; -DBINDIR=\&quot;/opt/openmpi/1.3rc3r20226-V00/gcc/bin\&quot;
</span><br>
<span class="quotelev1">&gt; -DDATADIR=\&quot;/opt/openmpi/1.3rc3r20226-V00/gcc/share\&quot; -DRFG
</span><br>
<span class="quotelev1">&gt; -DVT_MEMHOOK -DVT_IOWRAP  -O2 -g -pipe -Wall -Wp,-D_FORTIFY_SOURCE=2
</span><br>
<span class="quotelev1">&gt; -fexceptions -fstack-protector --param=ssp-buffer-size=4 -m64
</span><br>
<span class="quotelev1">&gt; -mtune=generic -MT vt_iowrap.o -MD -MP -MF .deps/vt_iowrap.Tpo -c -o
</span><br>
<span class="quotelev1">&gt; vt_iowrap.o vt_iowrap.c
</span><br>
<span class="quotelev1">&gt; mv -f .deps/vt_memreg.Tpo .deps/vt_memreg.Po
</span><br>
<span class="quotelev1">&gt; gcc  -DHAVE_CONFIG_H -I. -I.. -I../tools/opari/lib
</span><br>
<span class="quotelev1">&gt; -I../extlib/otf/otflib -I../extlib/otf/otflib     -D_GNU_SOURCE
</span><br>
<span class="quotelev1">&gt; -DBINDIR=\&quot;/opt/openmpi/1.3rc3r20226-V00/gcc/bin\&quot;
</span><br>
<span class="quotelev1">&gt; -DDATADIR=\&quot;/opt/openmpi/1.3rc3r20226-V00/gcc/share\&quot; -DRFG
</span><br>
<span class="quotelev1">&gt; -DVT_MEMHOOK -DVT_IOWRAP  -O2 -g -pipe -Wall -Wp,-D_FORTIFY_SOURCE=2
</span><br>
<span class="quotelev1">&gt; -fexceptions -fstack-protector --param=ssp-buffer-size=4 -m64
</span><br>
<span class="quotelev1">&gt; -mtune=generic -MT vt_iowrap_helper.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt; .deps/vt_iowrap_helper.Tpo -c -o vt_iowrap_helper.o vt_iowrap_helper.c
</span><br>
<span class="quotelev1">&gt; mv -f .deps/vt_memhook.Tpo .deps/vt_memhook.Po
</span><br>
<span class="quotelev1">&gt; gcc  -DHAVE_CONFIG_H -I. -I.. -I../tools/opari/lib
</span><br>
<span class="quotelev1">&gt; -I../extlib/otf/otflib -I../extlib/otf/otflib     -D_GNU_SOURCE
</span><br>
<span class="quotelev1">&gt; -DBINDIR=\&quot;/opt/openmpi/1.3rc3r20226-V00/gcc/bin\&quot;
</span><br>
<span class="quotelev1">&gt; -DDATADIR=\&quot;/opt/openmpi/1.3rc3r20226-V00/gcc/share\&quot; -DRFG
</span><br>
<span class="quotelev1">&gt; -DVT_MEMHOOK -DVT_IOWRAP  -O2 -g -pipe -Wall -Wp,-D_FORTIFY_SOURCE=2
</span><br>
<span class="quotelev1">&gt; -fexceptions -fstack-protector --param=ssp-buffer-size=4 -m64
</span><br>
<span class="quotelev1">&gt; -mtune=generic -MT rfg_regions.o -MD -MP -MF .deps/rfg_regions.Tpo - 
</span><br>
<span class="quotelev1">&gt; c -o
</span><br>
<span class="quotelev1">&gt; rfg_regions.o rfg_regions.c
</span><br>
<span class="quotelev1">&gt; vt_iowrap.c:1242: error: expected declaration specifiers or '...'  
</span><br>
<span class="quotelev1">&gt; before
</span><br>
<span class="quotelev1">&gt; numeric constant
</span><br>
<span class="quotelev1">&gt; vt_iowrap.c:1243: error: conflicting types for '__fprintf_chk'
</span><br>
<span class="quotelev1">&gt; mv -f .deps/vt_comp_gnu.Tpo .deps/vt_comp_gnu.Po
</span><br>
<span class="quotelev1">&gt; make[5]: *** [vt_iowrap.o] Error 1
</span><br>
<span class="quotelev1">&gt; make[5]: *** Waiting for unfinished jobs....
</span><br>
<span class="quotelev1">&gt; mv -f .deps/vt_iowrap_helper.Tpo .deps/vt_iowrap_helper.Po
</span><br>
<span class="quotelev1">&gt; mv -f .deps/rfg_regions.Tpo .deps/rfg_regions.Po
</span><br>
<span class="quotelev1">&gt; make[5]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/hpc/home/USERS/lennyb/work/svn/release/scripts/dist-1.3--1/OMPI/ 
</span><br>
<span class="quotelev1">&gt; BUILD/
</span><br>
<span class="quotelev1">&gt; openmpi-1.3rc3r20226/ompi/contrib/vt/vt/vtlib'
</span><br>
<span class="quotelev1">&gt; make[4]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[4]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/hpc/home/USERS/lennyb/work/svn/release/scripts/dist-1.3--1/OMPI/ 
</span><br>
<span class="quotelev1">&gt; BUILD/
</span><br>
<span class="quotelev1">&gt; openmpi-1.3rc3r20226/ompi/contrib/vt/vt'
</span><br>
<span class="quotelev1">&gt; make[3]: *** [all] Error 2
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/hpc/home/USERS/lennyb/work/svn/release/scripts/dist-1.3--1/OMPI/ 
</span><br>
<span class="quotelev1">&gt; BUILD/
</span><br>
<span class="quotelev1">&gt; openmpi-1.3rc3r20226/ompi/contrib/vt/vt'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/hpc/home/USERS/lennyb/work/svn/release/scripts/dist-1.3--1/OMPI/ 
</span><br>
<span class="quotelev1">&gt; BUILD/
</span><br>
<span class="quotelev1">&gt; openmpi-1.3rc3r20226/ompi/contrib/vt'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/hpc/home/USERS/lennyb/work/svn/release/scripts/dist-1.3--1/OMPI/ 
</span><br>
<span class="quotelev1">&gt; BUILD/
</span><br>
<span class="quotelev1">&gt; openmpi-1.3rc3r20226/ompi'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; error: Bad exit status from /var/tmp/rpm-tmp.32080 (%build)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; RPM build errors:
</span><br>
<span class="quotelev1">&gt;    Bad exit status from /var/tmp/rpm-tmp.32080 (%build)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; RPM build errors:
</span><br>
<span class="quotelev1">&gt;    Bad exit status from /var/tmp/rpm-tmp.32080 (%build)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; full error.log attached
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks,
</span><br>
<span class="quotelev1">&gt; Lenny.
</span><br>
<span class="quotelev1">&gt; &lt;ompi.ompi_build.31401.log&gt;&lt;mime-attachment.txt&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5108.php">William Hachfeld: "[OMPI devel] OpenMPI Performance Problem with Open|SpeedShop"</a>
<li><strong>Previous message:</strong> <a href="5106.php">Dirk Eddelbuettel: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Building with rpath disabled"</a>
<li><strong>In reply to:</strong> <a href="5102.php">Lenny Verkhovsky: "[OMPI devel] OpenMPI rpm build 1.3rc3r20226 build failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5112.php">Lenny Verkhovsky: "Re: [OMPI devel] OpenMPI rpm build 1.3rc3r20226 build failed"</a>
<li><strong>Reply:</strong> <a href="5112.php">Lenny Verkhovsky: "Re: [OMPI devel] OpenMPI rpm build 1.3rc3r20226 build failed"</a>
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
