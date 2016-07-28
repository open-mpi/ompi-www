<?
$subject_val = "Re: [OMPI devel] hwloc and pmi";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 12 14:16:06 2014" -->
<!-- isoreceived="20140712181606" -->
<!-- sent="Sat, 12 Jul 2014 21:16:03 +0300" -->
<!-- isosent="20140712181603" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] hwloc and pmi" -->
<!-- id="CAAO1KyZnr00iHjuDEhzc-jnSb9v+E2FtbFxXBuNnZKALddRfSg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="757FDFFE-8B0B-4A2F-8AA6-C454D06B5867_at_open-mpi.org" -->
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
<strong>Date:</strong> 2014-07-12 14:16:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15131.php">Andrey Gursky: "[OMPI devel] Bug report: using static build"</a>
<li><strong>Previous message:</strong> <a href="15129.php">Mike Dubman: "Re: [OMPI devel] 1.8.2rc1 available for test"</a>
<li><strong>In reply to:</strong> <a href="15112.php">Ralph Castain: "Re: [OMPI devel] hwloc and pmi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15133.php">Ralph Castain: "Re: [OMPI devel] hwloc and pmi"</a>
<li><strong>Reply:</strong> <a href="15133.php">Ralph Castain: "Re: [OMPI devel] hwloc and pmi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
okay, seems found the reason:
<br>
<p>slurm-devel-14.03.4-2.el6.x86_64 comes with this:
<br>
<p><p>$grep hwloc /usr/lib64/*la
<br>
<p>/usr/lib64/libpmi.la:dependency_libs=' /usr/lib64/libslurm.la -L/usr/lib64
<br>
-ldl -lhwloc -lpthread'
<br>
<p>/usr/lib64/libslurmdb.la:dependency_libs=' -L/usr/lib64 -ldl -lhwloc
<br>
-lpthread'
<br>
<p>/usr/lib64/libslurm.la:dependency_libs=' -L/usr/lib64 -ldl -lhwloc
<br>
-lpthread'
<br>
<p><p>After removing &quot;-lhwloc&quot; from la files - ompi can compile.
<br>
<p><p>Please suggest.
<br>
<p><p>On Fri, Jul 11, 2014 at 10:32 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; It's probably being picked up from the PMI check and being added to the
</span><br>
<span class="quotelev1">&gt; cppflags for components that call that .m4 (e.g., common/pmi). You might
</span><br>
<span class="quotelev1">&gt; print out the cppflags being created in that script and see if that's the
</span><br>
<span class="quotelev1">&gt; case.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The slurm check shouldn't be throwing anything into the global cppflags,
</span><br>
<span class="quotelev1">&gt; and I don't think common/pmi calls the slurm .m4 check - at least, it
</span><br>
<span class="quotelev1">&gt; probably shouldn't
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 11, 2014, at 11:57 AM, Mike Dubman &lt;miked_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think the problem related to new version of SLURM which was upgraded on
</span><br>
<span class="quotelev1">&gt; our machines.
</span><br>
<span class="quotelev1">&gt; we had 2.6.6 now it is 14.03.4-2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $make V=1
</span><br>
<span class="quotelev1">&gt; /bin/sh ../../../../libtool  --tag=CC   --mode=link gcc -std=gnu99
</span><br>
<span class="quotelev1">&gt;  -DNDEBUG -O3 -g -finline-functions -fno-strict-aliasing -pthread
</span><br>
<span class="quotelev1">&gt;  -version-info 2:2:1 -export-dynamic   -o libmca_common_pmi.la -rpath
</span><br>
<span class="quotelev1">&gt; /hpc/scrap/mtt/scratch/shmem/
</span><br>
<span class="quotelev1">&gt; 20140711_210002_6937_8974_sputnik7.vbench.com/installs/vyng/install/lib
</span><br>
<span class="quotelev1">&gt; common_pmi.lo -lpmi2 -lpmi  -Wl,-rpath= -lrt -lnsl  -lutil -lm
</span><br>
<span class="quotelev1">&gt; libtool: link: gcc -std=gnu99 -shared  -fPIC -DPIC  .libs/common_pmi.o
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libpmi2.so /usr/lib64/libpmi.so -L/usr/lib64
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libslurm.so -ldl -lhwloc -lpthread -lrt -lnsl -lutil -lm  -O3
</span><br>
<span class="quotelev1">&gt; -pthread -Wl,-rpath=   -pthread -Wl,-soname -Wl,libmca_common_pmi.so.1 -o
</span><br>
<span class="quotelev1">&gt; .libs/libmca_common_pmi.so.1.1.2
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: cannot find -lhwloc
</span><br>
<span class="quotelev1">&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; make: *** [libmca_common_pmi.la] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The Makefile in opal/mca/common/pmi/Makefile has no references to
</span><br>
<span class="quotelev1">&gt; &quot;-lhwloc&quot;, so it comes as dependancy from outside.
</span><br>
<span class="quotelev1">&gt; does it make sense?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; this is a configure line used:
</span><br>
<span class="quotelev1">&gt;   $ ./configure --with-platform=contrib/platform/mellanox/optimized
</span><br>
<span class="quotelev1">&gt; --with-fca=/opt/mellanox/fca
</span><br>
<span class="quotelev1">&gt; --with-mxm=/hpc/local/benchmarks/hpc-stack-gcc/install/mxm --enable-oshmem
</span><br>
<span class="quotelev1">&gt; --with-slurm --with-pmi --with-oshmem-param-check
</span><br>
<span class="quotelev1">&gt; --with-knem=/opt/knem-1.1.1.90mlnx --prefix=/hpc/scrap/mtt/scratch/shmem/
</span><br>
<span class="quotelev1">&gt; 20140711_210002_6937_8974_sputnik7.vbench.com/installs/vyng/install
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ldd /usr/lib64/libpmi.so
</span><br>
<span class="quotelev1">&gt;         linux-vdso.so.1 =&gt;  (0x00007ffff7ffe000)
</span><br>
<span class="quotelev1">&gt;         libslurm.so.27 =&gt; /usr/lib64/libslurm.so.27 (0x00007ffff7ac6000)
</span><br>
<span class="quotelev1">&gt;         libpthread.so.0 =&gt; /lib64/libpthread.so.0 (0x00007ffff7897000)
</span><br>
<span class="quotelev1">&gt;         libc.so.6 =&gt; /lib64/libc.so.6 (0x00007ffff7504000)
</span><br>
<span class="quotelev1">&gt;         libdl.so.2 =&gt; /lib64/libdl.so.2 (0x00007ffff7300000)
</span><br>
<span class="quotelev1">&gt;         libhwloc.so.5 =&gt; /usr/lib64/libhwloc.so.5 (0x00007ffff70d7000)
</span><br>
<span class="quotelev1">&gt;         /lib64/ld-linux-x86-64.so.2 (0x0000003d9de00000)
</span><br>
<span class="quotelev1">&gt;         libm.so.6 =&gt; /lib64/libm.so.6 (0x00007ffff6e53000)
</span><br>
<span class="quotelev1">&gt;         libnuma.so.1 =&gt; /usr/lib64/libnuma.so.1 (0x00007ffff6c4a000)
</span><br>
<span class="quotelev1">&gt;         libpci.so.3 =&gt; /lib64/libpci.so.3 (0x00007ffff6a3d000)
</span><br>
<span class="quotelev1">&gt;         libxml2.so.2 =&gt; /usr/lib64/libxml2.so.2 (0x00007ffff66eb000)
</span><br>
<span class="quotelev1">&gt;         libresolv.so.2 =&gt; /lib64/libresolv.so.2 (0x00007ffff64d1000)
</span><br>
<span class="quotelev1">&gt;         libz.so.1 =&gt; /lib64/libz.so.1 (0x00007ffff62ba000)
</span><br>
<span class="quotelev1">&gt; mtt_at_sputnik7 /hpc/scrap/mtt/scratch/shmem/
</span><br>
<span class="quotelev1">&gt; 20140711_210002_6937_8974_sputnik7.vbench.com/mpi-install/NoDd/src/ompi-vendor.git
</span><br>
<span class="quotelev1">&gt; $ldd /usr/lib64/libslurm.so
</span><br>
<span class="quotelev1">&gt;         linux-vdso.so.1 =&gt;  (0x00007ffff7ffe000)
</span><br>
<span class="quotelev1">&gt;         libdl.so.2 =&gt; /lib64/libdl.so.2 (0x00007ffff7ab6000)
</span><br>
<span class="quotelev1">&gt;         libhwloc.so.5 =&gt; /usr/lib64/libhwloc.so.5 (0x00007ffff788d000)
</span><br>
<span class="quotelev1">&gt;         libpthread.so.0 =&gt; /lib64/libpthread.so.0 (0x00007ffff7670000)
</span><br>
<span class="quotelev1">&gt;         libc.so.6 =&gt; /lib64/libc.so.6 (0x00007ffff72dd000)
</span><br>
<span class="quotelev1">&gt;         /lib64/ld-linux-x86-64.so.2 (0x0000003d9de00000)
</span><br>
<span class="quotelev1">&gt;         libm.so.6 =&gt; /lib64/libm.so.6 (0x00007ffff7058000)
</span><br>
<span class="quotelev1">&gt;         libnuma.so.1 =&gt; /usr/lib64/libnuma.so.1 (0x00007ffff6e4f000)
</span><br>
<span class="quotelev1">&gt;         libpci.so.3 =&gt; /lib64/libpci.so.3 (0x00007ffff6c43000)
</span><br>
<span class="quotelev1">&gt;         libxml2.so.2 =&gt; /usr/lib64/libxml2.so.2 (0x00007ffff68f0000)
</span><br>
<span class="quotelev1">&gt;         libresolv.so.2 =&gt; /lib64/libresolv.so.2 (0x00007ffff66d6000)
</span><br>
<span class="quotelev1">&gt;         libz.so.1 =&gt; /lib64/libz.so.1 (0x00007ffff64c0000)
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
<span class="quotelev1">&gt; On Thu, Jul 10, 2014 at 6:53 PM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Nope, just added a missing file to the tarball.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Nathan
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Jul 10, 2014 at 06:54:19AM -0700, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    IIRC, I thought I saw a change to that makefile.am flow thru
</span><br>
<span class="quotelev2">&gt;&gt; yesterday?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    Could be there was an error in it
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    On Jul 10, 2014, at 5:26 AM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      Shouldn't be - PMI should be linking against the internal hwloc.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      I'm AFK and can't look at this. Have a look at other components
</span><br>
<span class="quotelev2">&gt;&gt; that use
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      hwloc and copy their header file setup and make file.am setup.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      Sent from my phone. No type good.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      On Jul 10, 2014, at 8:22 AM, &quot;Mike Dubman&quot; &lt;
</span><br>
<span class="quotelev2">&gt;&gt; miked_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        Hi guys,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        jenkins node failing on this.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        is hwloc-devel now required to be available as part of distro?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        Thanks
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        M
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  15:14:11 make[3]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt; `/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/opal'
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  15:14:11 make[2]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt; `/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/opal'
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  15:14:11 Making install in mca/common/pmi
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  15:14:11 make[2]: Entering directory
</span><br>
<span class="quotelev2">&gt;&gt; `/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/opal/mca/common/pmi'
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  15:14:11   CC       common_pmi.lo
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  15:14:11   CCLD     libmca_common_pmi.la
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  15:14:11 /usr/bin/ld: cannot find -lhwloc
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  15:14:11 collect2: ld returned 1 exit status
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  15:14:11 make[2]: *** [libmca_common_pmi.la] Error 1
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  15:14:11 make[2]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt; `/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/opal/mca/common/pmi'
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15090.php">http://www.open-mpi.org/community/lists/devel/2014/07/15090.php</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15091.php">http://www.open-mpi.org/community/lists/devel/2014/07/15091.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15096.php">http://www.open-mpi.org/community/lists/devel/2014/07/15096.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15099.php">http://www.open-mpi.org/community/lists/devel/2014/07/15099.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15110.php">http://www.open-mpi.org/community/lists/devel/2014/07/15110.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15112.php">http://www.open-mpi.org/community/lists/devel/2014/07/15112.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15130/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15131.php">Andrey Gursky: "[OMPI devel] Bug report: using static build"</a>
<li><strong>Previous message:</strong> <a href="15129.php">Mike Dubman: "Re: [OMPI devel] 1.8.2rc1 available for test"</a>
<li><strong>In reply to:</strong> <a href="15112.php">Ralph Castain: "Re: [OMPI devel] hwloc and pmi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15133.php">Ralph Castain: "Re: [OMPI devel] hwloc and pmi"</a>
<li><strong>Reply:</strong> <a href="15133.php">Ralph Castain: "Re: [OMPI devel] hwloc and pmi"</a>
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
