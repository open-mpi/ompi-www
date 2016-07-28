<?
$subject_val = "Re: [OMPI devel] oshmem examples cannot be built";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 14 04:23:55 2015" -->
<!-- isoreceived="20150914082355" -->
<!-- sent="Mon, 14 Sep 2015 11:23:50 +0300" -->
<!-- isosent="20150914082350" -->
<!-- name="Igor" -->
<!-- email="igor.ivanov_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] oshmem examples cannot be built" -->
<!-- id="55F68416.9050903_at_itseez.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="DB0C348F-268C-483E-A219-45FBA107EB90_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] oshmem examples cannot be built<br>
<strong>From:</strong> Igor (<em>igor.ivanov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-14 04:23:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18033.php">Jeff Squyres (jsquyres): "[OMPI devel] MPI-3.1 books now available"</a>
<li><strong>Previous message:</strong> <a href="18031.php">Gilles Gouaillardet: "Re: [OMPI devel] Remaining MTT errors"</a>
<li><strong>In reply to:</strong> <a href="18030.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] oshmem examples cannot be built"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
Checked on #6a8fad4 and it looks fine.
<br>
$git show -1
<br>
commit 6a8fad49e57007cf8edce4ad8406f724d4e11f8f
<br>
Author: Ralph Castain &lt;rhc_at_[hidden]&gt;
<br>
Date:   Fri Sep 11 02:01:25 2015 -0700
<br>
<p>Configure:
<br>
--disable-vt --enable-orterun-prefix-by-default --enable-oshmem 
<br>
--with-slurm --with-pmi --enable-debug
<br>
Build examples:
<br>
$env PATH=$PWD/../install/bin:$PATH make
<br>
mpicc -g    hello_c.c   -o hello_c
<br>
mpicc -g    ring_c.c   -o ring_c
<br>
mpicc -g    connectivity_c.c   -o connectivity_c
<br>
make[1]: Entering directory 
<br>
`/hpc/home/USERS/ivanovi/prj/ii-ompi-trunk/examples'
<br>
make[2]: Entering directory 
<br>
`/hpc/home/USERS/ivanovi/prj/ii-ompi-trunk/examples'
<br>
mpifort -g hello_mpifh.f -o hello_mpifh
<br>
mpifort -g ring_mpifh.f -o ring_mpifh
<br>
make[2]: Leaving directory 
<br>
`/hpc/home/USERS/ivanovi/prj/ii-ompi-trunk/examples'
<br>
make[1]: Leaving directory 
<br>
`/hpc/home/USERS/ivanovi/prj/ii-ompi-trunk/examples'
<br>
make[1]: Entering directory 
<br>
`/hpc/home/USERS/ivanovi/prj/ii-ompi-trunk/examples'
<br>
make[2]: Entering directory 
<br>
`/hpc/home/USERS/ivanovi/prj/ii-ompi-trunk/examples'
<br>
shmemcc -g hello_oshmem_c.c -o hello_oshmem
<br>
make[2]: Leaving directory 
<br>
`/hpc/home/USERS/ivanovi/prj/ii-ompi-trunk/examples'
<br>
make[2]: Entering directory 
<br>
`/hpc/home/USERS/ivanovi/prj/ii-ompi-trunk/examples'
<br>
shmemcc -g ring_oshmem_c.c -o ring_oshmem
<br>
make[2]: Leaving directory 
<br>
`/hpc/home/USERS/ivanovi/prj/ii-ompi-trunk/examples'
<br>
make[2]: Entering directory 
<br>
`/hpc/home/USERS/ivanovi/prj/ii-ompi-trunk/examples'
<br>
<p>Igor
<br>
<p>On 14.09.2015 2:34, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; I actually tested manually before I replied -- I did a &quot;make&quot; in the examples dir, and it used shmemcc.  So something went wonky in Ralph's build for some reason...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 12, 2015, at 11:52 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Another FYI.
</span><br>
<span class="quotelev2">&gt;&gt; In my Aug 26 build of master (openmpi-dev-2371-gea935df.tar.bz2) running &quot;make&quot; in the examples directory *did* use shmemcc:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/home/phargrov/OMPI/openmpi-master-linux-x86_64-ss12u2/BLD/examples'
</span><br>
<span class="quotelev2">&gt;&gt; shmemcc -g ring_oshmem_c.c -o ring_oshmem
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So, something has changed if mpicc is being used today.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sat, Sep 12, 2015 at 5:58 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 11, 2015, at 9:00 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FWIW: shemcc is just a symlink to mpicc, and I don&#226;&#128;&#153;t see any -loshmem in that &#226;&#128;&#148;showme output
</span><br>
<span class="quotelev2">&gt;&gt; $ shmemcc --showme
</span><br>
<span class="quotelev2">&gt;&gt; gcc -I/home/jsquyres/bogus/include -pthread -Wl,-rpath -Wl,/home/jsquyres/bogus/lib -Wl,--enable-new-dtags -L/home/jsquyres/bogus/lib -loshmem -lmpi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The actual argv[0] of the executable should be determining which data file is used to populate the underlying argv.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Probably best to open a github issue on this and assign to the OSHMEM devs to figure out what is going on here...?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Sep 11, 2015, at 5:43 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I typed &#226;&#128;&#156;make&#226;&#128;&#157; - the Makefile determines what to call. I suspect it isn&#226;&#128;&#153;t calling the right thing
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Sep 11, 2015, at 4:17 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Shouldn't you be using shmemcc, not mpicc?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Sep 11, 2015, at 7:01 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On current master:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 03:57:56  (topic/pmix) /home/common/openmpi/foobar/examples$ make ring_oshmem_c
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mpicc -g    ring_oshmem_c.c   -o ring_oshmem_c
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /tmp/ccfqcVje.o: In function `main':
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /home/common/openmpi/foobar/examples/ring_oshmem_c.c:20: undefined reference to `start_pes'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /home/common/openmpi/foobar/examples/ring_oshmem_c.c:21: undefined reference to `_my_pe'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /home/common/openmpi/foobar/examples/ring_oshmem_c.c:22: undefined reference to `_num_pes'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /home/common/openmpi/foobar/examples/ring_oshmem_c.c:32: undefined reference to `shmem_int_put'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /home/common/openmpi/foobar/examples/ring_oshmem_c.c:44: undefined reference to `shmem_int_wait_until'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /home/common/openmpi/foobar/examples/ring_oshmem_c.c:49: undefined reference to `shmem_int_put'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; collect2: error: ld returned 1 exit status
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; make: *** [ring_oshmem_c] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 03:58:51  (topic/pmix) /home/common/openmpi/foobar/examples$ mpicc --showme
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; gcc -I/home/common/openmpi/build/foobar/include/openmpi -I/home/common/openmpi/build/foobar/include/openmpi/opal/mca/hwloc/hwloc1110/hwloc/include -I/home/common/openmpi/build/foobar/include/openmpi/opal/mca/event/libevent2022/libevent -I/home/common/openmpi/build/foobar/include/openmpi/opal/mca/event/libevent2022/libevent/include -I/home/common/openmpi/build/foobar/include -pthread -Wl,-rpath -Wl,/home/common/openmpi/build/foobar/lib -Wl,--enable-new-dtags -L/home/common/openmpi/build/foobar/lib -lmpi
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 03:59:12  (topic/pmix) /home/common/openmpi/foobar/examples$
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; None of the oshmem examples can be built - all fail with the same error. My configure:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; enable_orterun_prefix_by_default=yes
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; enable_mpi_thread_multiple=no
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; enable_mem_debug=no
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; enable_mem_profile=no
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; enable_debug_symbols=yes
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; enable_binaries=yes
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; enable_heterogeneous=no
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; enable_picky=yes
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; enable_debug=yes
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; enable_shared=yes
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; enable_static=no
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; enable_memchecker=no
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; enable_ipv6=no
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; enable_mpi_fortran=yes
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; enable_mpi_cxx=no
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; enable_mpi_cxx_seek=no
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; enable_cxx_exceptions=no
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; enable_mpi_java=no
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; enable_io_romio=no
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; enable_contrib_no_build=libnbc
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; with_memory_manager=no
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; with_tm=no
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; with_devel_headers=yes
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; with_portals=no
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; with_valgrind=no
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; if [ -n &quot;$SLURMHOME&quot; ] ; then
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   with_slurm=$SLURMHOME
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   with_pmi=$SLURMHOME
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; else
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   with_slurm=no
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; fi
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/09/18010.php">http://www.open-mpi.org/community/lists/devel/2015/09/18010.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/09/18011.php">http://www.open-mpi.org/community/lists/devel/2015/09/18011.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/09/18014.php">http://www.open-mpi.org/community/lists/devel/2015/09/18014.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/09/18017.php">http://www.open-mpi.org/community/lists/devel/2015/09/18017.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev2">&gt;&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/09/18027.php">http://www.open-mpi.org/community/lists/devel/2015/09/18027.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18033.php">Jeff Squyres (jsquyres): "[OMPI devel] MPI-3.1 books now available"</a>
<li><strong>Previous message:</strong> <a href="18031.php">Gilles Gouaillardet: "Re: [OMPI devel] Remaining MTT errors"</a>
<li><strong>In reply to:</strong> <a href="18030.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] oshmem examples cannot be built"</a>
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
