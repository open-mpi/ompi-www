<?
$subject_val = "Re: [OMPI devel] 1.7.4rc2r30148 - static link failure on NetBSD";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 13 13:49:45 2014" -->
<!-- isoreceived="20140113184945" -->
<!-- sent="Mon, 13 Jan 2014 18:49:43 +0000" -->
<!-- isosent="20140113184943" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4rc2r30148 - static link failure on NetBSD" -->
<!-- id="5A7CE070-9E63-437C-A2C9-9CE753380EF1_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA17xYZdiG1qU2v0Qs-SHixGyd4Lse5Cxq=MV3z+N5qWJuQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7.4rc2r30148 - static link failure on NetBSD<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-13 13:49:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13761.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc1 install failure: NetBSD-6 amd64"</a>
<li><strong>Previous message:</strong> <a href="13759.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc1 install failure: NetBSD-6 amd64"</a>
<li><strong>In reply to:</strong> <a href="13750.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30148 - static link failure on NetBSD"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Works for me -- thanks!
<br>
<p>On Jan 11, 2014, at 7:59 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Digging through my emails I found an issue (in the email quoted below) that I had forgotten about.
</span><br>
<span class="quotelev1">&gt; The basic issue is that NetBSD puts aio support in librt rather than libc, but this is only visible when linking statically.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Fortunately, NetBSD is one of the very few platforms on which I have sufficiently new autotools to run autogen.pl.
</span><br>
<span class="quotelev1">&gt; The patch below resolves the problem for me.
</span><br>
<span class="quotelev1">&gt; However, I am not certain if/how this fits with OMPI's standard practices with regards to configure tests.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --- openmpi-1.9a1r30255/ompi/mca/fbtl/posix/configure.m4~       2014-01-11 15:53:19.000000000 -0800
</span><br>
<span class="quotelev1">&gt; +++ openmpi-1.9a1r30255/ompi/mca/fbtl/posix/configure.m4        2014-01-11 16:25:53.000000000 -0800
</span><br>
<span class="quotelev1">&gt; @@ -25,9 +25,11 @@
</span><br>
<span class="quotelev1">&gt;  AC_DEFUN([MCA_ompi_fbtl_posix_CONFIG],[
</span><br>
<span class="quotelev1">&gt;      AC_CONFIG_FILES([ompi/mca/fbtl/posix/Makefile])
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; +    fbtl_posix_happy=&quot;no&quot;
</span><br>
<span class="quotelev1">&gt;      AC_CHECK_HEADER([aio.h],
</span><br>
<span class="quotelev1">&gt; -                    [fbtl_posix_happy=&quot;yes&quot;],
</span><br>
<span class="quotelev1">&gt; -                    [fbtl_posix_happy=&quot;no&quot;])
</span><br>
<span class="quotelev1">&gt; +        [dnl NetBSD has aio_* in -lrt, usually in libc
</span><br>
<span class="quotelev1">&gt; +         OMPI_CHECK_FUNC_LIB([aio_write], [rt],
</span><br>
<span class="quotelev1">&gt; +             [fbtl_posix_happy=&quot;yes&quot;])])
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;      AS_IF([test &quot;$fbtl_posix_happy&quot; = &quot;yes&quot;],
</span><br>
<span class="quotelev1">&gt;            [$1],
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Jan 8, 2014 at 11:22 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; When I compile the current 1.7.4rc on NetBSD with no configure arguments, I still get the &quot;make install&quot; failure that I have detailed in previous emails.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; HOWEVER, if I configure with &quot;--enable-static --disable-shared&quot; then I get an earlier failure at build time (partial &quot;make V=1&quot; output shown below).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When linking otfmerge-mpi, the aio_* symbols from libmpi.a(ompi/mca/fbtl/posix/fbtl_posix_ipwritev.o) are not resolved.  According to the man pages on this system, those symbols reside in librt, but there is no occurrence of &quot;-lrt&quot; in either the libtool command line or the gcc command line generated by libtool.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; NOTE, however, that this problem does NOT occur when building a default shared library version despite ALSO lacking any explicit &quot;-lrt&quot; in the link command.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /bin/ksh ../../../libtool  --tag=CC    --mode=link gcc -DOTFMERGE_MPI    -g -finline-functions -fno-strict-aliasing -pthread  -L/home/phargrov/OMPI/openmpi-1.7-latest-netbsd6-amd64/BLD/ompi/contrib/vt/vt/../../../.libs -o otfmerge-mpi otfmerge_mpi-handler.o  otfmerge_mpi-otfmerge.o ../../../otflib/libopen-trace-format.la  ../../../otfauxlib/libotfaux.la -lmpi
</span><br>
<span class="quotelev1">&gt; libtool: link: gcc -DOTFMERGE_MPI -g -finline-functions -fno-strict-aliasing -pthread -o otfmerge-mpi otfmerge_mpi-handler.o otfmerge_mpi-otfmerge.o  -L/home/phargrov/OMPI/openmpi-1.7-latest-netbsd6-amd64/BLD/ompi/contrib/vt/vt/../../../.libs ../../../otflib/.libs/libopen-trace-format.a -lz ../../../otfauxlib/.libs/libotfaux.a /home/phargrov/OMPI/openmpi-1.7-latest-netbsd6-amd64/BLD/ompi/contrib/vt/vt/../../../.libs/libmpi.a /home/phargrov/OMPI/openmpi-1.7-latest-netbsd6-amd64/BLD/orte/.libs/libopen-rte.a /home/phargrov/OMPI/openmpi-1.7-latest-netbsd6-amd64/BLD/opal/.libs/libopen-pal.a -lutil -lm -lpthread -pthread
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-1.7-latest-netbsd6-amd64/BLD/ompi/contrib/vt/vt/../../../.libs/libmpi.a(fbtl_posix_ipwritev.o): In function `mca_fbtl_posix_ipwritev':
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-1.7-latest-netbsd6-amd64/openmpi-1.7-latest/ompi/mca/fbtl/posix/fbtl_posix_ipwritev.c:90: undefined reference to `aio_write'
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-1.7-latest-netbsd6-amd64/openmpi-1.7-latest/ompi/mca/fbtl/posix/fbtl_posix_ipwritev.c:112: undefined reference to `aio_write'
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-1.7-latest-netbsd6-amd64/openmpi-1.7-latest/ompi/mca/fbtl/posix/fbtl_posix_ipwritev.c:159: undefined reference to `aio_write'
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-1.7-latest-netbsd6-amd64/openmpi-1.7-latest/ompi/mca/fbtl/posix/fbtl_posix_ipwritev.c:180: undefined reference to `aio_write'
</span><br>
<span class="quotelev1">&gt; *** Error code 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Stop.
</span><br>
<span class="quotelev1">&gt; make: stopped in /home/phargrov/OMPI/openmpi-1.7-latest-netbsd6-amd64/BLD/ompi/contrib/vt/vt/extlib/otf/tools/otfmerge/mpi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
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
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13761.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc1 install failure: NetBSD-6 amd64"</a>
<li><strong>Previous message:</strong> <a href="13759.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc1 install failure: NetBSD-6 amd64"</a>
<li><strong>In reply to:</strong> <a href="13750.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30148 - static link failure on NetBSD"</a>
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
