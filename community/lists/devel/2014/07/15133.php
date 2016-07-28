<?
$subject_val = "Re: [OMPI devel] hwloc and pmi";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 12 19:14:17 2014" -->
<!-- isoreceived="20140712231417" -->
<!-- sent="Sat, 12 Jul 2014 16:13:39 -0700" -->
<!-- isosent="20140712231339" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] hwloc and pmi" -->
<!-- id="02E7FCCB-4861-484E-A0FD-592C7F96A5AD_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAO1KyZnr00iHjuDEhzc-jnSb9v+E2FtbFxXBuNnZKALddRfSg_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-12 19:13:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15134.php">Bert Wesarg: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r32225 - in trunk: contrib/build-mca-comps-outside-of-tree ompi/contrib/vt/vt	ompi/contrib/vt/vt/extlib/otf opal/mca/event/libevent2021/libevent"</a>
<li><strong>Previous message:</strong> <a href="15132.php">Ralph Castain: "Re: [OMPI devel] Bug report: using static build"</a>
<li><strong>In reply to:</strong> <a href="15130.php">Mike Dubman: "Re: [OMPI devel] hwloc and pmi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The only one of those we link against is libpmi. Why they chose to link libpmi against libslurm and libhwloc is beyond belief - not only are those libs irrelevant to pmi, but they also contain fully GPL code.
<br>
<p>Afraid you'll have to take it up with them. This isn't something we can solve.
<br>
<p>NOTE: for anyone configuring --with-pmi under SLURM. Our configure code emits a warning about this, but sometimes that flies by and folks may not notice it. We've put it out there several times on mailing lists as well, but not recently.
<br>
<p>IANAL, but based on what we have been told, IF YOU CONFIGURE --with-pmi UNDER SLURM, YOUR BINARY IS QUITE LIKELY COVERED UNDER GPL. This is due to the linkage shown by Mike below, and is totally outside our control.
<br>
<p><p><p>On Jul 12, 2014, at 11:16 AM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; okay, seems found the reason:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; slurm-devel-14.03.4-2.el6.x86_64 comes with this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $grep hwloc /usr/lib64/*la
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libpmi.la:dependency_libs=' /usr/lib64/libslurm.la -L/usr/lib64 -ldl -lhwloc -lpthread'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libslurmdb.la:dependency_libs=' -L/usr/lib64 -ldl -lhwloc -lpthread'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libslurm.la:dependency_libs=' -L/usr/lib64 -ldl -lhwloc -lpthread'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; After removing &quot;-lhwloc&quot; from la files - ompi can compile.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please suggest.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Jul 11, 2014 at 10:32 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; It's probably being picked up from the PMI check and being added to the cppflags for components that call that .m4 (e.g., common/pmi). You might print out the cppflags being created in that script and see if that's the case.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The slurm check shouldn't be throwing anything into the global cppflags, and I don't think common/pmi calls the slurm .m4 check - at least, it probably shouldn't
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 11, 2014, at 11:57 AM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I think the problem related to new version of SLURM which was upgraded on our machines.
</span><br>
<span class="quotelev2">&gt;&gt; we had 2.6.6 now it is 14.03.4-2
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; $make V=1
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ../../../../libtool  --tag=CC   --mode=link gcc -std=gnu99  -DNDEBUG -O3 -g -finline-functions -fno-strict-aliasing -pthread  -version-info 2:2:1 -export-dynamic   -o libmca_common_pmi.la -rpath /hpc/scrap/mtt/scratch/shmem/20140711_210002_6937_8974_sputnik7.vbench.com/installs/vyng/install/lib common_pmi.lo -lpmi2 -lpmi  -Wl,-rpath= -lrt -lnsl  -lutil -lm
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: gcc -std=gnu99 -shared  -fPIC -DPIC  .libs/common_pmi.o   /usr/lib64/libpmi2.so /usr/lib64/libpmi.so -L/usr/lib64 /usr/lib64/libslurm.so -ldl -lhwloc -lpthread -lrt -lnsl -lutil -lm  -O3 -pthread -Wl,-rpath=   -pthread -Wl,-soname -Wl,libmca_common_pmi.so.1 -o .libs/libmca_common_pmi.so.1.1.2
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/ld: cannot find -lhwloc
</span><br>
<span class="quotelev2">&gt;&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [libmca_common_pmi.la] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The Makefile in opal/mca/common/pmi/Makefile has no references to &quot;-lhwloc&quot;, so it comes as dependancy from outside.
</span><br>
<span class="quotelev2">&gt;&gt; does it make sense?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; this is a configure line used:
</span><br>
<span class="quotelev2">&gt;&gt;   $ ./configure --with-platform=contrib/platform/mellanox/optimized --with-fca=/opt/mellanox/fca --with-mxm=/hpc/local/benchmarks/hpc-stack-gcc/install/mxm --enable-oshmem --with-slurm --with-pmi --with-oshmem-param-check --with-knem=/opt/knem-1.1.1.90mlnx --prefix=/hpc/scrap/mtt/scratch/shmem/20140711_210002_6937_8974_sputnik7.vbench.com/installs/vyng/install
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; $ldd /usr/lib64/libpmi.so
</span><br>
<span class="quotelev2">&gt;&gt;         linux-vdso.so.1 =&gt;  (0x00007ffff7ffe000)
</span><br>
<span class="quotelev2">&gt;&gt;         libslurm.so.27 =&gt; /usr/lib64/libslurm.so.27 (0x00007ffff7ac6000)
</span><br>
<span class="quotelev2">&gt;&gt;         libpthread.so.0 =&gt; /lib64/libpthread.so.0 (0x00007ffff7897000)
</span><br>
<span class="quotelev2">&gt;&gt;         libc.so.6 =&gt; /lib64/libc.so.6 (0x00007ffff7504000)
</span><br>
<span class="quotelev2">&gt;&gt;         libdl.so.2 =&gt; /lib64/libdl.so.2 (0x00007ffff7300000)
</span><br>
<span class="quotelev2">&gt;&gt;         libhwloc.so.5 =&gt; /usr/lib64/libhwloc.so.5 (0x00007ffff70d7000)
</span><br>
<span class="quotelev2">&gt;&gt;         /lib64/ld-linux-x86-64.so.2 (0x0000003d9de00000)
</span><br>
<span class="quotelev2">&gt;&gt;         libm.so.6 =&gt; /lib64/libm.so.6 (0x00007ffff6e53000)
</span><br>
<span class="quotelev2">&gt;&gt;         libnuma.so.1 =&gt; /usr/lib64/libnuma.so.1 (0x00007ffff6c4a000)
</span><br>
<span class="quotelev2">&gt;&gt;         libpci.so.3 =&gt; /lib64/libpci.so.3 (0x00007ffff6a3d000)
</span><br>
<span class="quotelev2">&gt;&gt;         libxml2.so.2 =&gt; /usr/lib64/libxml2.so.2 (0x00007ffff66eb000)
</span><br>
<span class="quotelev2">&gt;&gt;         libresolv.so.2 =&gt; /lib64/libresolv.so.2 (0x00007ffff64d1000)
</span><br>
<span class="quotelev2">&gt;&gt;         libz.so.1 =&gt; /lib64/libz.so.1 (0x00007ffff62ba000)
</span><br>
<span class="quotelev2">&gt;&gt; mtt_at_sputnik7 /hpc/scrap/mtt/scratch/shmem/20140711_210002_6937_8974_sputnik7.vbench.com/mpi-install/NoDd/src/ompi-vendor.git
</span><br>
<span class="quotelev2">&gt;&gt; $ldd /usr/lib64/libslurm.so
</span><br>
<span class="quotelev2">&gt;&gt;         linux-vdso.so.1 =&gt;  (0x00007ffff7ffe000)
</span><br>
<span class="quotelev2">&gt;&gt;         libdl.so.2 =&gt; /lib64/libdl.so.2 (0x00007ffff7ab6000)
</span><br>
<span class="quotelev2">&gt;&gt;         libhwloc.so.5 =&gt; /usr/lib64/libhwloc.so.5 (0x00007ffff788d000)
</span><br>
<span class="quotelev2">&gt;&gt;         libpthread.so.0 =&gt; /lib64/libpthread.so.0 (0x00007ffff7670000)
</span><br>
<span class="quotelev2">&gt;&gt;         libc.so.6 =&gt; /lib64/libc.so.6 (0x00007ffff72dd000)
</span><br>
<span class="quotelev2">&gt;&gt;         /lib64/ld-linux-x86-64.so.2 (0x0000003d9de00000)
</span><br>
<span class="quotelev2">&gt;&gt;         libm.so.6 =&gt; /lib64/libm.so.6 (0x00007ffff7058000)
</span><br>
<span class="quotelev2">&gt;&gt;         libnuma.so.1 =&gt; /usr/lib64/libnuma.so.1 (0x00007ffff6e4f000)
</span><br>
<span class="quotelev2">&gt;&gt;         libpci.so.3 =&gt; /lib64/libpci.so.3 (0x00007ffff6c43000)
</span><br>
<span class="quotelev2">&gt;&gt;         libxml2.so.2 =&gt; /usr/lib64/libxml2.so.2 (0x00007ffff68f0000)
</span><br>
<span class="quotelev2">&gt;&gt;         libresolv.so.2 =&gt; /lib64/libresolv.so.2 (0x00007ffff66d6000)
</span><br>
<span class="quotelev2">&gt;&gt;         libz.so.1 =&gt; /lib64/libz.so.1 (0x00007ffff64c0000)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Jul 10, 2014 at 6:53 PM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
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
<span class="quotelev3">&gt;&gt; &gt;    IIRC, I thought I saw a change to that makefile.am flow thru yesterday?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    Could be there was an error in it
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    On Jul 10, 2014, at 5:26 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      Shouldn't be - PMI should be linking against the internal hwloc.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      I'm AFK and can't look at this. Have a look at other components that use
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      hwloc and copy their header file setup and make file.am setup.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      Sent from my phone. No type good.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      On Jul 10, 2014, at 8:22 AM, &quot;Mike Dubman&quot; &lt;miked_at_[hidden]&gt;
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
<span class="quotelev3">&gt;&gt; &gt;  15:14:11 make[3]: Leaving directory `/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/opal'
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  15:14:11 make[2]: Leaving directory `/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/opal'
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  15:14:11 Making install in mca/common/pmi
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  15:14:11 make[2]: Entering directory `/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/opal/mca/common/pmi'
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
<span class="quotelev3">&gt;&gt; &gt;  15:14:11 make[2]: Leaving directory `/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/opal/mca/common/pmi'
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
<span class="quotelev3">&gt;&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15096.php">http://www.open-mpi.org/community/lists/devel/2014/07/15096.php</a>
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
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15099.php">http://www.open-mpi.org/community/lists/devel/2014/07/15099.php</a>
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
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15110.php">http://www.open-mpi.org/community/lists/devel/2014/07/15110.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15112.php">http://www.open-mpi.org/community/lists/devel/2014/07/15112.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15130.php">http://www.open-mpi.org/community/lists/devel/2014/07/15130.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15133/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15134.php">Bert Wesarg: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r32225 - in trunk: contrib/build-mca-comps-outside-of-tree ompi/contrib/vt/vt	ompi/contrib/vt/vt/extlib/otf opal/mca/event/libevent2021/libevent"</a>
<li><strong>Previous message:</strong> <a href="15132.php">Ralph Castain: "Re: [OMPI devel] Bug report: using static build"</a>
<li><strong>In reply to:</strong> <a href="15130.php">Mike Dubman: "Re: [OMPI devel] hwloc and pmi"</a>
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
