<?
$subject_val = "Re: [OMPI devel] OpenMPI rpm build 1.3rc3r20226 build failed";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 13 09:41:03 2009" -->
<!-- isoreceived="20090113144103" -->
<!-- sent="Tue, 13 Jan 2009 09:40:49 -0500" -->
<!-- isosent="20090113144049" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenMPI rpm build 1.3rc3r20226 build failed" -->
<!-- id="80B30B44-CD8D-4BAD-A110-BA38D03464DB_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="453d39990901130335g605ec869vd4b86aaf0747ece9_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2009-01-13 09:40:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5130.php">Lenny Verkhovsky: "Re: [OMPI devel] OpenMPI rpm build 1.3rc3r20226 build failed"</a>
<li><strong>Previous message:</strong> <a href="5128.php">Jeff Squyres: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Building with rpath disabled"</a>
<li><strong>In reply to:</strong> <a href="5124.php">Lenny Verkhovsky: "Re: [OMPI devel] OpenMPI rpm build 1.3rc3r20226 build failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5130.php">Lenny Verkhovsky: "Re: [OMPI devel] OpenMPI rpm build 1.3rc3r20226 build failed"</a>
<li><strong>Reply:</strong> <a href="5130.php">Lenny Verkhovsky: "Re: [OMPI devel] OpenMPI rpm build 1.3rc3r20226 build failed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm still guessing that this is a distro / compiler issue -- I can  
<br>
build with the default flags just fine...?
<br>
<p>Can you specify what distro / compiler you were using?
<br>
<p>Also, if you want to move the changes that have been made to  
<br>
buildrpm.sh to the v1.3 branch, just file a CMR.  That file is not  
<br>
included in release tarballs, so Tim can move it over at any time.
<br>
<p><p><p>On Jan 13, 2009, at 6:35 AM, Lenny Verkhovsky wrote:
<br>
<p><span class="quotelev1">&gt; it seems that setting use_default_rpm_opt_flags to 0 solves the  
</span><br>
<span class="quotelev1">&gt; problem.
</span><br>
<span class="quotelev1">&gt; Maybe vt developers should take a look on it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Lenny.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sun, Jan 11, 2009 at 2:40 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; This sounds like a distro/compiler version issue.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can you narrow down the issue at all?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 11, 2009, at 3:23 AM, Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it doesnt happen if I do autogen, configure and make install,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; only when I try to make an rpm from the tar file.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Thu, Jan 8, 2009 at 9:43 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This doesn't happen in a normal build of the same tree?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I ask because both 1.3r20226 builds fine for me manually (i.e.,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ./configure;make and buildrpm.sh).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jan 8, 2009, at 8:15 AM, Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I am trying to build rpm from nightly snaposhots of 1.3
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; with the downloaded buildrpm.sh and ompi.spec file from
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://svn.open-mpi.org/svn/ompi/branches/v1.3/contrib/dist/linux/">http://svn.open-mpi.org/svn/ompi/branches/v1.3/contrib/dist/linux/</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I am getting this error
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; .....................
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Making all in vtlib
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make[5]: Entering directory
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; `/hpc/home/USERS/lennyb/work/svn/release/scripts/dist-1.3--1/ 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; OMPI/BUILD/
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; openmpi-1.3rc3r20226/ompi/contrib/vt/vt/vtlib'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; gcc  -DHAVE_CONFIG_H -I. -I.. -I../tools/opari/lib
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -I../extlib/otf/otflib -I../extlib/otf/otflib     -D_GNU_SOURCE
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -DBINDIR=\&quot;/opt/openmpi/1.3rc3r20226-V00/gcc/bin\&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -DDATADIR=\&quot;/opt/openmpi/1.3rc3r20226-V00/gcc/share\&quot; -DRFG
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -DVT_MEMHOOK -DVT_IOWRAP  -O2 -g -pipe -Wall -Wp,- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; D_FORTIFY_SOURCE=2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -fexceptions -fstack-protector --param=ssp-buffer-size=4 -m64
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -mtune=generic -MT vt_comp_gnu.o -MD -MP -MF .deps/ 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; vt_comp_gnu.Tpo -c -o
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; vt_comp_gnu.o vt_comp_gnu.c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; gcc  -DHAVE_CONFIG_H -I. -I.. -I../tools/opari/lib
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -I../extlib/otf/otflib -I../extlib/otf/otflib     -D_GNU_SOURCE
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -DBINDIR=\&quot;/opt/openmpi/1.3rc3r20226-V00/gcc/bin\&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -DDATADIR=\&quot;/opt/openmpi/1.3rc3r20226-V00/gcc/share\&quot; -DRFG
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -DVT_MEMHOOK -DVT_IOWRAP  -O2 -g -pipe -Wall -Wp,- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; D_FORTIFY_SOURCE=2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -fexceptions -fstack-protector --param=ssp-buffer-size=4 -m64
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -mtune=generic -MT vt_memhook.o -MD -MP -MF .deps/vt_memhook.Tpo  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -c -o
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; vt_memhook.o vt_memhook.c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; gcc  -DHAVE_CONFIG_H -I. -I.. -I../tools/opari/lib
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -I../extlib/otf/otflib -I../extlib/otf/otflib     -D_GNU_SOURCE
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -DBINDIR=\&quot;/opt/openmpi/1.3rc3r20226-V00/gcc/bin\&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -DDATADIR=\&quot;/opt/openmpi/1.3rc3r20226-V00/gcc/share\&quot; -DRFG
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -DVT_MEMHOOK -DVT_IOWRAP  -O2 -g -pipe -Wall -Wp,- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; D_FORTIFY_SOURCE=2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -fexceptions -fstack-protector --param=ssp-buffer-size=4 -m64
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -mtune=generic -MT vt_memreg.o -MD -MP -MF .deps/vt_memreg.Tpo - 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; c -o
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; vt_memreg.o vt_memreg.c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; gcc  -DHAVE_CONFIG_H -I. -I.. -I../tools/opari/lib
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -I../extlib/otf/otflib -I../extlib/otf/otflib     -D_GNU_SOURCE
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -DBINDIR=\&quot;/opt/openmpi/1.3rc3r20226-V00/gcc/bin\&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -DDATADIR=\&quot;/opt/openmpi/1.3rc3r20226-V00/gcc/share\&quot; -DRFG
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -DVT_MEMHOOK -DVT_IOWRAP  -O2 -g -pipe -Wall -Wp,- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; D_FORTIFY_SOURCE=2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -fexceptions -fstack-protector --param=ssp-buffer-size=4 -m64
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -mtune=generic -MT vt_iowrap.o -MD -MP -MF .deps/vt_iowrap.Tpo - 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; c -o
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; vt_iowrap.o vt_iowrap.c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mv -f .deps/vt_memreg.Tpo .deps/vt_memreg.Po
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; gcc  -DHAVE_CONFIG_H -I. -I.. -I../tools/opari/lib
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -I../extlib/otf/otflib -I../extlib/otf/otflib     -D_GNU_SOURCE
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -DBINDIR=\&quot;/opt/openmpi/1.3rc3r20226-V00/gcc/bin\&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -DDATADIR=\&quot;/opt/openmpi/1.3rc3r20226-V00/gcc/share\&quot; -DRFG
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -DVT_MEMHOOK -DVT_IOWRAP  -O2 -g -pipe -Wall -Wp,- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; D_FORTIFY_SOURCE=2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -fexceptions -fstack-protector --param=ssp-buffer-size=4 -m64
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -mtune=generic -MT vt_iowrap_helper.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; .deps/vt_iowrap_helper.Tpo -c -o vt_iowrap_helper.o  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; vt_iowrap_helper.c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mv -f .deps/vt_memhook.Tpo .deps/vt_memhook.Po
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; gcc  -DHAVE_CONFIG_H -I. -I.. -I../tools/opari/lib
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -I../extlib/otf/otflib -I../extlib/otf/otflib     -D_GNU_SOURCE
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -DBINDIR=\&quot;/opt/openmpi/1.3rc3r20226-V00/gcc/bin\&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -DDATADIR=\&quot;/opt/openmpi/1.3rc3r20226-V00/gcc/share\&quot; -DRFG
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -DVT_MEMHOOK -DVT_IOWRAP  -O2 -g -pipe -Wall -Wp,- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; D_FORTIFY_SOURCE=2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -fexceptions -fstack-protector --param=ssp-buffer-size=4 -m64
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -mtune=generic -MT rfg_regions.o -MD -MP -MF .deps/ 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; rfg_regions.Tpo -c -o
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; rfg_regions.o rfg_regions.c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; vt_iowrap.c:1242: error: expected declaration specifiers or  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; '...' before
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; numeric constant
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; vt_iowrap.c:1243: error: conflicting types for '__fprintf_chk'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mv -f .deps/vt_comp_gnu.Tpo .deps/vt_comp_gnu.Po
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make[5]: *** [vt_iowrap.o] Error 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make[5]: *** Waiting for unfinished jobs....
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mv -f .deps/vt_iowrap_helper.Tpo .deps/vt_iowrap_helper.Po
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mv -f .deps/rfg_regions.Tpo .deps/rfg_regions.Po
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make[5]: Leaving directory
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; `/hpc/home/USERS/lennyb/work/svn/release/scripts/dist-1.3--1/ 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; OMPI/BUILD/
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; openmpi-1.3rc3r20226/ompi/contrib/vt/vt/vtlib'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make[4]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make[4]: Leaving directory
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; `/hpc/home/USERS/lennyb/work/svn/release/scripts/dist-1.3--1/ 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; OMPI/BUILD/
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; openmpi-1.3rc3r20226/ompi/contrib/vt/vt'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make[3]: *** [all] Error 2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make[3]: Leaving directory
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; `/hpc/home/USERS/lennyb/work/svn/release/scripts/dist-1.3--1/ 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; OMPI/BUILD/
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; openmpi-1.3rc3r20226/ompi/contrib/vt/vt'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; `/hpc/home/USERS/lennyb/work/svn/release/scripts/dist-1.3--1/ 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; OMPI/BUILD/
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; openmpi-1.3rc3r20226/ompi/contrib/vt'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make[1]: Leaving directory
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; `/hpc/home/USERS/lennyb/work/svn/release/scripts/dist-1.3--1/ 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; OMPI/BUILD/
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; openmpi-1.3rc3r20226/ompi'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; error: Bad exit status from /var/tmp/rpm-tmp.32080 (%build)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; RPM build errors:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Bad exit status from /var/tmp/rpm-tmp.32080 (%build)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; RPM build errors:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Bad exit status from /var/tmp/rpm-tmp.32080 (%build)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; full error.log attached
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; thanks,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Lenny.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;ompi.ompi_build.31401.log&gt;&lt;mime-attachment.txt&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="5130.php">Lenny Verkhovsky: "Re: [OMPI devel] OpenMPI rpm build 1.3rc3r20226 build failed"</a>
<li><strong>Previous message:</strong> <a href="5128.php">Jeff Squyres: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Building with rpath disabled"</a>
<li><strong>In reply to:</strong> <a href="5124.php">Lenny Verkhovsky: "Re: [OMPI devel] OpenMPI rpm build 1.3rc3r20226 build failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5130.php">Lenny Verkhovsky: "Re: [OMPI devel] OpenMPI rpm build 1.3rc3r20226 build failed"</a>
<li><strong>Reply:</strong> <a href="5130.php">Lenny Verkhovsky: "Re: [OMPI devel] OpenMPI rpm build 1.3rc3r20226 build failed"</a>
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
