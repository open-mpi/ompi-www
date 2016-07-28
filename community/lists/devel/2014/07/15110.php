<?
$subject_val = "Re: [OMPI devel] hwloc and pmi";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 11 14:57:13 2014" -->
<!-- isoreceived="20140711185713" -->
<!-- sent="Fri, 11 Jul 2014 21:57:10 +0300" -->
<!-- isosent="20140711185710" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] hwloc and pmi" -->
<!-- id="CAAO1Kya6RoUD0txpEXcEud8NoChU1d7+FkVS6HcgQq1cYp9uMw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="20140710155353.GN64418_at_pn1246003.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] hwloc and pmi<br>
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-11 14:57:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15111.php">Pritchard, Howard P: "Re: [OMPI devel] RFC: Move the Open MPI	communication	infrastructure in OPAL"</a>
<li><strong>Previous message:</strong> <a href="15109.php">Ralph Castain: "[OMPI devel] 1.8.2rc1 available for test"</a>
<li><strong>In reply to:</strong> <a href="15099.php">Nathan Hjelm: "Re: [OMPI devel] hwloc and pmi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15112.php">Ralph Castain: "Re: [OMPI devel] hwloc and pmi"</a>
<li><strong>Reply:</strong> <a href="15112.php">Ralph Castain: "Re: [OMPI devel] hwloc and pmi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think the problem related to new version of SLURM which was upgraded on
<br>
our machines.
<br>
we had 2.6.6 now it is 14.03.4-2
<br>
<p>$make V=1
<br>
/bin/sh ../../../../libtool  --tag=CC   --mode=link gcc -std=gnu99
<br>
&nbsp;-DNDEBUG -O3 -g -finline-functions -fno-strict-aliasing -pthread
<br>
&nbsp;-version-info 2:2:1 -export-dynamic   -o libmca_common_pmi.la -rpath
<br>
/hpc/scrap/mtt/scratch/shmem/
<br>
20140711_210002_6937_8974_sputnik7.vbench.com/installs/vyng/install/lib
<br>
common_pmi.lo -lpmi2 -lpmi  -Wl,-rpath= -lrt -lnsl  -lutil -lm
<br>
libtool: link: gcc -std=gnu99 -shared  -fPIC -DPIC  .libs/common_pmi.o
<br>
/usr/lib64/libpmi2.so /usr/lib64/libpmi.so -L/usr/lib64
<br>
/usr/lib64/libslurm.so -ldl -lhwloc -lpthread -lrt -lnsl -lutil -lm  -O3
<br>
-pthread -Wl,-rpath=   -pthread -Wl,-soname -Wl,libmca_common_pmi.so.1 -o
<br>
.libs/libmca_common_pmi.so.1.1.2
<br>
/usr/bin/ld: cannot find -lhwloc
<br>
collect2: ld returned 1 exit status
<br>
make: *** [libmca_common_pmi.la] Error 1
<br>
<p>The Makefile in opal/mca/common/pmi/Makefile has no references to
<br>
&quot;-lhwloc&quot;, so it comes as dependancy from outside.
<br>
does it make sense?
<br>
<p><p>this is a configure line used:
<br>
&nbsp;&nbsp;$ ./configure --with-platform=contrib/platform/mellanox/optimized
<br>
--with-fca=/opt/mellanox/fca
<br>
--with-mxm=/hpc/local/benchmarks/hpc-stack-gcc/install/mxm --enable-oshmem
<br>
--with-slurm --with-pmi --with-oshmem-param-check
<br>
--with-knem=/opt/knem-1.1.1.90mlnx --prefix=/hpc/scrap/mtt/scratch/shmem/
<br>
20140711_210002_6937_8974_sputnik7.vbench.com/installs/vyng/install
<br>
<p><p>$ldd /usr/lib64/libpmi.so
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;linux-vdso.so.1 =&gt;  (0x00007ffff7ffe000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libslurm.so.27 =&gt; /usr/lib64/libslurm.so.27 (0x00007ffff7ac6000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libpthread.so.0 =&gt; /lib64/libpthread.so.0 (0x00007ffff7897000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libc.so.6 =&gt; /lib64/libc.so.6 (0x00007ffff7504000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libdl.so.2 =&gt; /lib64/libdl.so.2 (0x00007ffff7300000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libhwloc.so.5 =&gt; /usr/lib64/libhwloc.so.5 (0x00007ffff70d7000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/lib64/ld-linux-x86-64.so.2 (0x0000003d9de00000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libm.so.6 =&gt; /lib64/libm.so.6 (0x00007ffff6e53000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libnuma.so.1 =&gt; /usr/lib64/libnuma.so.1 (0x00007ffff6c4a000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libpci.so.3 =&gt; /lib64/libpci.so.3 (0x00007ffff6a3d000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libxml2.so.2 =&gt; /usr/lib64/libxml2.so.2 (0x00007ffff66eb000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libresolv.so.2 =&gt; /lib64/libresolv.so.2 (0x00007ffff64d1000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libz.so.1 =&gt; /lib64/libz.so.1 (0x00007ffff62ba000)
<br>
mtt_at_sputnik7 /hpc/scrap/mtt/scratch/shmem/
<br>
20140711_210002_6937_8974_sputnik7.vbench.com/mpi-install/NoDd/src/ompi-vendor.git
<br>
$ldd /usr/lib64/libslurm.so
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;linux-vdso.so.1 =&gt;  (0x00007ffff7ffe000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libdl.so.2 =&gt; /lib64/libdl.so.2 (0x00007ffff7ab6000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libhwloc.so.5 =&gt; /usr/lib64/libhwloc.so.5 (0x00007ffff788d000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libpthread.so.0 =&gt; /lib64/libpthread.so.0 (0x00007ffff7670000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libc.so.6 =&gt; /lib64/libc.so.6 (0x00007ffff72dd000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/lib64/ld-linux-x86-64.so.2 (0x0000003d9de00000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libm.so.6 =&gt; /lib64/libm.so.6 (0x00007ffff7058000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libnuma.so.1 =&gt; /usr/lib64/libnuma.so.1 (0x00007ffff6e4f000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libpci.so.3 =&gt; /lib64/libpci.so.3 (0x00007ffff6c43000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libxml2.so.2 =&gt; /usr/lib64/libxml2.so.2 (0x00007ffff68f0000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libresolv.so.2 =&gt; /lib64/libresolv.so.2 (0x00007ffff66d6000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libz.so.1 =&gt; /lib64/libz.so.1 (0x00007ffff64c0000)
<br>
<p><p><p><p><p><p>On Thu, Jul 10, 2014 at 6:53 PM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Nope, just added a missing file to the tarball.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Jul 10, 2014 at 06:54:19AM -0700, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt; &gt;    IIRC, I thought I saw a change to that makefile.am flow thru
</span><br>
<span class="quotelev1">&gt; yesterday?
</span><br>
<span class="quotelev2">&gt; &gt;    Could be there was an error in it
</span><br>
<span class="quotelev2">&gt; &gt;    On Jul 10, 2014, at 5:26 AM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt;    wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      Shouldn't be - PMI should be linking against the internal hwloc.
</span><br>
<span class="quotelev2">&gt; &gt;      I'm AFK and can't look at this. Have a look at other components
</span><br>
<span class="quotelev1">&gt; that use
</span><br>
<span class="quotelev2">&gt; &gt;      hwloc and copy their header file setup and make file.am setup.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      Sent from my phone. No type good.
</span><br>
<span class="quotelev2">&gt; &gt;      On Jul 10, 2014, at 8:22 AM, &quot;Mike Dubman&quot; &lt;
</span><br>
<span class="quotelev1">&gt; miked_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt;      wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;        Hi guys,
</span><br>
<span class="quotelev2">&gt; &gt;        jenkins node failing on this.
</span><br>
<span class="quotelev2">&gt; &gt;        is hwloc-devel now required to be available as part of distro?
</span><br>
<span class="quotelev2">&gt; &gt;        Thanks
</span><br>
<span class="quotelev2">&gt; &gt;        M
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  15:14:11 make[3]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/opal'
</span><br>
<span class="quotelev2">&gt; &gt;  15:14:11 make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/opal'
</span><br>
<span class="quotelev2">&gt; &gt;  15:14:11 Making install in mca/common/pmi
</span><br>
<span class="quotelev2">&gt; &gt;  15:14:11 make[2]: Entering directory
</span><br>
<span class="quotelev1">&gt; `/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/opal/mca/common/pmi'
</span><br>
<span class="quotelev2">&gt; &gt;  15:14:11   CC       common_pmi.lo
</span><br>
<span class="quotelev2">&gt; &gt;  15:14:11   CCLD     libmca_common_pmi.la
</span><br>
<span class="quotelev2">&gt; &gt;  15:14:11 /usr/bin/ld: cannot find -lhwloc
</span><br>
<span class="quotelev2">&gt; &gt;  15:14:11 collect2: ld returned 1 exit status
</span><br>
<span class="quotelev2">&gt; &gt;  15:14:11 make[2]: *** [libmca_common_pmi.la] Error 1
</span><br>
<span class="quotelev2">&gt; &gt;  15:14:11 make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/opal/mca/common/pmi'
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;        _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;        devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt;        devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;        Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;        Link to this post:
</span><br>
<span class="quotelev2">&gt; &gt;        <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15090.php">http://www.open-mpi.org/community/lists/devel/2014/07/15090.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;      devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt;      devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;      Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;      Link to this post:
</span><br>
<span class="quotelev2">&gt; &gt;      <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15091.php">http://www.open-mpi.org/community/lists/devel/2014/07/15091.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15096.php">http://www.open-mpi.org/community/lists/devel/2014/07/15096.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15099.php">http://www.open-mpi.org/community/lists/devel/2014/07/15099.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15110/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15111.php">Pritchard, Howard P: "Re: [OMPI devel] RFC: Move the Open MPI	communication	infrastructure in OPAL"</a>
<li><strong>Previous message:</strong> <a href="15109.php">Ralph Castain: "[OMPI devel] 1.8.2rc1 available for test"</a>
<li><strong>In reply to:</strong> <a href="15099.php">Nathan Hjelm: "Re: [OMPI devel] hwloc and pmi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15112.php">Ralph Castain: "Re: [OMPI devel] hwloc and pmi"</a>
<li><strong>Reply:</strong> <a href="15112.php">Ralph Castain: "Re: [OMPI devel] hwloc and pmi"</a>
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
