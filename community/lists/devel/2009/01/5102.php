<?
$subject_val = "[OMPI devel] OpenMPI rpm build 1.3rc3r20226 build failed";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  8 08:15:50 2009" -->
<!-- isoreceived="20090108131550" -->
<!-- sent="Thu, 8 Jan 2009 15:15:20 +0200" -->
<!-- isosent="20090108131520" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lennyb_at_[hidden]" -->
<!-- subject="[OMPI devel] OpenMPI rpm build 1.3rc3r20226 build failed" -->
<!-- id="39C75744D164D948A170E9792AF8E7CAE15111_at_exil.voltaire.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] OpenMPI rpm build 1.3rc3r20226 build failed<br>
<strong>From:</strong> Lenny Verkhovsky (<em>lennyb_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-08 08:15:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5103.php">Jeff Squyres: "[OMPI devel] wiki: creating frameworks and components"</a>
<li><strong>Previous message:</strong> <a href="5101.php">Thomas Ropars: "Re: [OMPI devel] problem compiling r20196"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5107.php">Jeff Squyres: "Re: [OMPI devel] OpenMPI rpm build 1.3rc3r20226 build failed"</a>
<li><strong>Reply:</strong> <a href="5107.php">Jeff Squyres: "Re: [OMPI devel] OpenMPI rpm build 1.3rc3r20226 build failed"</a>
<li><strong>Maybe reply:</strong> <a href="5230.php">Jonathan Billings: "Re: [OMPI devel] OpenMPI rpm build 1.3rc3r20226 build failed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am trying to build rpm from nightly snaposhots of 1.3
<br>
<p>with the downloaded buildrpm.sh and ompi.spec file from
<br>
<a href="http://svn.open-mpi.org/svn/ompi/branches/v1.3/contrib/dist/linux/">http://svn.open-mpi.org/svn/ompi/branches/v1.3/contrib/dist/linux/</a>
<br>
<p>I am getting this error
<br>
.....................
<br>
Making all in vtlib
<br>
make[5]: Entering directory
<br>
`/hpc/home/USERS/lennyb/work/svn/release/scripts/dist-1.3--1/OMPI/BUILD/
<br>
openmpi-1.3rc3r20226/ompi/contrib/vt/vt/vtlib'
<br>
gcc  -DHAVE_CONFIG_H -I. -I.. -I../tools/opari/lib
<br>
-I../extlib/otf/otflib -I../extlib/otf/otflib     -D_GNU_SOURCE
<br>
-DBINDIR=\&quot;/opt/openmpi/1.3rc3r20226-V00/gcc/bin\&quot;
<br>
-DDATADIR=\&quot;/opt/openmpi/1.3rc3r20226-V00/gcc/share\&quot; -DRFG
<br>
-DVT_MEMHOOK -DVT_IOWRAP  -O2 -g -pipe -Wall -Wp,-D_FORTIFY_SOURCE=2
<br>
-fexceptions -fstack-protector --param=ssp-buffer-size=4 -m64
<br>
-mtune=generic -MT vt_comp_gnu.o -MD -MP -MF .deps/vt_comp_gnu.Tpo -c -o
<br>
vt_comp_gnu.o vt_comp_gnu.c
<br>
gcc  -DHAVE_CONFIG_H -I. -I.. -I../tools/opari/lib
<br>
-I../extlib/otf/otflib -I../extlib/otf/otflib     -D_GNU_SOURCE
<br>
-DBINDIR=\&quot;/opt/openmpi/1.3rc3r20226-V00/gcc/bin\&quot;
<br>
-DDATADIR=\&quot;/opt/openmpi/1.3rc3r20226-V00/gcc/share\&quot; -DRFG
<br>
-DVT_MEMHOOK -DVT_IOWRAP  -O2 -g -pipe -Wall -Wp,-D_FORTIFY_SOURCE=2
<br>
-fexceptions -fstack-protector --param=ssp-buffer-size=4 -m64
<br>
-mtune=generic -MT vt_memhook.o -MD -MP -MF .deps/vt_memhook.Tpo -c -o
<br>
vt_memhook.o vt_memhook.c
<br>
gcc  -DHAVE_CONFIG_H -I. -I.. -I../tools/opari/lib
<br>
-I../extlib/otf/otflib -I../extlib/otf/otflib     -D_GNU_SOURCE
<br>
-DBINDIR=\&quot;/opt/openmpi/1.3rc3r20226-V00/gcc/bin\&quot;
<br>
-DDATADIR=\&quot;/opt/openmpi/1.3rc3r20226-V00/gcc/share\&quot; -DRFG
<br>
-DVT_MEMHOOK -DVT_IOWRAP  -O2 -g -pipe -Wall -Wp,-D_FORTIFY_SOURCE=2
<br>
-fexceptions -fstack-protector --param=ssp-buffer-size=4 -m64
<br>
-mtune=generic -MT vt_memreg.o -MD -MP -MF .deps/vt_memreg.Tpo -c -o
<br>
vt_memreg.o vt_memreg.c
<br>
gcc  -DHAVE_CONFIG_H -I. -I.. -I../tools/opari/lib
<br>
-I../extlib/otf/otflib -I../extlib/otf/otflib     -D_GNU_SOURCE
<br>
-DBINDIR=\&quot;/opt/openmpi/1.3rc3r20226-V00/gcc/bin\&quot;
<br>
-DDATADIR=\&quot;/opt/openmpi/1.3rc3r20226-V00/gcc/share\&quot; -DRFG
<br>
-DVT_MEMHOOK -DVT_IOWRAP  -O2 -g -pipe -Wall -Wp,-D_FORTIFY_SOURCE=2
<br>
-fexceptions -fstack-protector --param=ssp-buffer-size=4 -m64
<br>
-mtune=generic -MT vt_iowrap.o -MD -MP -MF .deps/vt_iowrap.Tpo -c -o
<br>
vt_iowrap.o vt_iowrap.c
<br>
mv -f .deps/vt_memreg.Tpo .deps/vt_memreg.Po
<br>
gcc  -DHAVE_CONFIG_H -I. -I.. -I../tools/opari/lib
<br>
-I../extlib/otf/otflib -I../extlib/otf/otflib     -D_GNU_SOURCE
<br>
-DBINDIR=\&quot;/opt/openmpi/1.3rc3r20226-V00/gcc/bin\&quot;
<br>
-DDATADIR=\&quot;/opt/openmpi/1.3rc3r20226-V00/gcc/share\&quot; -DRFG
<br>
-DVT_MEMHOOK -DVT_IOWRAP  -O2 -g -pipe -Wall -Wp,-D_FORTIFY_SOURCE=2
<br>
-fexceptions -fstack-protector --param=ssp-buffer-size=4 -m64
<br>
-mtune=generic -MT vt_iowrap_helper.o -MD -MP -MF
<br>
.deps/vt_iowrap_helper.Tpo -c -o vt_iowrap_helper.o vt_iowrap_helper.c
<br>
mv -f .deps/vt_memhook.Tpo .deps/vt_memhook.Po
<br>
gcc  -DHAVE_CONFIG_H -I. -I.. -I../tools/opari/lib
<br>
-I../extlib/otf/otflib -I../extlib/otf/otflib     -D_GNU_SOURCE
<br>
-DBINDIR=\&quot;/opt/openmpi/1.3rc3r20226-V00/gcc/bin\&quot;
<br>
-DDATADIR=\&quot;/opt/openmpi/1.3rc3r20226-V00/gcc/share\&quot; -DRFG
<br>
-DVT_MEMHOOK -DVT_IOWRAP  -O2 -g -pipe -Wall -Wp,-D_FORTIFY_SOURCE=2
<br>
-fexceptions -fstack-protector --param=ssp-buffer-size=4 -m64
<br>
-mtune=generic -MT rfg_regions.o -MD -MP -MF .deps/rfg_regions.Tpo -c -o
<br>
rfg_regions.o rfg_regions.c
<br>
vt_iowrap.c:1242: error: expected declaration specifiers or '...' before
<br>
numeric constant
<br>
vt_iowrap.c:1243: error: conflicting types for '__fprintf_chk'
<br>
mv -f .deps/vt_comp_gnu.Tpo .deps/vt_comp_gnu.Po
<br>
make[5]: *** [vt_iowrap.o] Error 1
<br>
make[5]: *** Waiting for unfinished jobs....
<br>
mv -f .deps/vt_iowrap_helper.Tpo .deps/vt_iowrap_helper.Po
<br>
mv -f .deps/rfg_regions.Tpo .deps/rfg_regions.Po
<br>
make[5]: Leaving directory
<br>
`/hpc/home/USERS/lennyb/work/svn/release/scripts/dist-1.3--1/OMPI/BUILD/
<br>
openmpi-1.3rc3r20226/ompi/contrib/vt/vt/vtlib'
<br>
make[4]: *** [all-recursive] Error 1
<br>
make[4]: Leaving directory
<br>
`/hpc/home/USERS/lennyb/work/svn/release/scripts/dist-1.3--1/OMPI/BUILD/
<br>
openmpi-1.3rc3r20226/ompi/contrib/vt/vt'
<br>
make[3]: *** [all] Error 2
<br>
make[3]: Leaving directory
<br>
`/hpc/home/USERS/lennyb/work/svn/release/scripts/dist-1.3--1/OMPI/BUILD/
<br>
openmpi-1.3rc3r20226/ompi/contrib/vt/vt'
<br>
make[2]: *** [all-recursive] Error 1
<br>
make[2]: Leaving directory
<br>
`/hpc/home/USERS/lennyb/work/svn/release/scripts/dist-1.3--1/OMPI/BUILD/
<br>
openmpi-1.3rc3r20226/ompi/contrib/vt'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory
<br>
`/hpc/home/USERS/lennyb/work/svn/release/scripts/dist-1.3--1/OMPI/BUILD/
<br>
openmpi-1.3rc3r20226/ompi'
<br>
make: *** [all-recursive] Error 1
<br>
error: Bad exit status from /var/tmp/rpm-tmp.32080 (%build)
<br>
<p><p>RPM build errors:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Bad exit status from /var/tmp/rpm-tmp.32080 (%build)
<br>
<p><p><p>RPM build errors:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Bad exit status from /var/tmp/rpm-tmp.32080 (%build)
<br>
<p><p>full error.log attached
<br>
<p><p>thanks,
<br>
Lenny.
<br>
<p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-5102/ompi.ompi_build.31401.log">ompi.ompi_build.31401.log</a>
</ul>
<!-- attachment="ompi.ompi_build.31401.log" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5103.php">Jeff Squyres: "[OMPI devel] wiki: creating frameworks and components"</a>
<li><strong>Previous message:</strong> <a href="5101.php">Thomas Ropars: "Re: [OMPI devel] problem compiling r20196"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5107.php">Jeff Squyres: "Re: [OMPI devel] OpenMPI rpm build 1.3rc3r20226 build failed"</a>
<li><strong>Reply:</strong> <a href="5107.php">Jeff Squyres: "Re: [OMPI devel] OpenMPI rpm build 1.3rc3r20226 build failed"</a>
<li><strong>Maybe reply:</strong> <a href="5230.php">Jonathan Billings: "Re: [OMPI devel] OpenMPI rpm build 1.3rc3r20226 build failed"</a>
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
