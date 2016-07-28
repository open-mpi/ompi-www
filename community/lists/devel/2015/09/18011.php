<?
$subject_val = "Re: [OMPI devel] oshmem examples cannot be built";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 11 19:17:52 2015" -->
<!-- isoreceived="20150911231752" -->
<!-- sent="Fri, 11 Sep 2015 23:17:49 +0000" -->
<!-- isosent="20150911231749" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] oshmem examples cannot be built" -->
<!-- id="58772EFF-258D-4655-9237-9CA46F356C7E_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8BC29B70-3A49-476E-AAF3-ACF41DBCAF9A_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-11 19:17:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18012.php">Ralph Castain: "Re: [OMPI devel] oshmem examples cannot be built"</a>
<li><strong>Previous message:</strong> <a href="18010.php">Ralph Castain: "[OMPI devel] oshmem examples cannot be built"</a>
<li><strong>In reply to:</strong> <a href="18010.php">Ralph Castain: "[OMPI devel] oshmem examples cannot be built"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18012.php">Ralph Castain: "Re: [OMPI devel] oshmem examples cannot be built"</a>
<li><strong>Reply:</strong> <a href="18012.php">Ralph Castain: "Re: [OMPI devel] oshmem examples cannot be built"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Shouldn't you be using shmemcc, not mpicc?
<br>
<p><p><span class="quotelev1">&gt; On Sep 11, 2015, at 7:01 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On current master:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 03:57:56  (topic/pmix) /home/common/openmpi/foobar/examples$ make ring_oshmem_c
</span><br>
<span class="quotelev1">&gt; mpicc -g    ring_oshmem_c.c   -o ring_oshmem_c
</span><br>
<span class="quotelev1">&gt; /tmp/ccfqcVje.o: In function `main':
</span><br>
<span class="quotelev1">&gt; /home/common/openmpi/foobar/examples/ring_oshmem_c.c:20: undefined reference to `start_pes'
</span><br>
<span class="quotelev1">&gt; /home/common/openmpi/foobar/examples/ring_oshmem_c.c:21: undefined reference to `_my_pe'
</span><br>
<span class="quotelev1">&gt; /home/common/openmpi/foobar/examples/ring_oshmem_c.c:22: undefined reference to `_num_pes'
</span><br>
<span class="quotelev1">&gt; /home/common/openmpi/foobar/examples/ring_oshmem_c.c:32: undefined reference to `shmem_int_put'
</span><br>
<span class="quotelev1">&gt; /home/common/openmpi/foobar/examples/ring_oshmem_c.c:44: undefined reference to `shmem_int_wait_until'
</span><br>
<span class="quotelev1">&gt; /home/common/openmpi/foobar/examples/ring_oshmem_c.c:49: undefined reference to `shmem_int_put'
</span><br>
<span class="quotelev1">&gt; collect2: error: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; make: *** [ring_oshmem_c] Error 1
</span><br>
<span class="quotelev1">&gt; 03:58:51  (topic/pmix) /home/common/openmpi/foobar/examples$ mpicc --showme
</span><br>
<span class="quotelev1">&gt; gcc -I/home/common/openmpi/build/foobar/include/openmpi -I/home/common/openmpi/build/foobar/include/openmpi/opal/mca/hwloc/hwloc1110/hwloc/include -I/home/common/openmpi/build/foobar/include/openmpi/opal/mca/event/libevent2022/libevent -I/home/common/openmpi/build/foobar/include/openmpi/opal/mca/event/libevent2022/libevent/include -I/home/common/openmpi/build/foobar/include -pthread -Wl,-rpath -Wl,/home/common/openmpi/build/foobar/lib -Wl,--enable-new-dtags -L/home/common/openmpi/build/foobar/lib -lmpi
</span><br>
<span class="quotelev1">&gt; 03:59:12  (topic/pmix) /home/common/openmpi/foobar/examples$ 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; None of the oshmem examples can be built - all fail with the same error. My configure:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; enable_orterun_prefix_by_default=yes
</span><br>
<span class="quotelev1">&gt; enable_mpi_thread_multiple=no
</span><br>
<span class="quotelev1">&gt; enable_mem_debug=no
</span><br>
<span class="quotelev1">&gt; enable_mem_profile=no
</span><br>
<span class="quotelev1">&gt; enable_debug_symbols=yes
</span><br>
<span class="quotelev1">&gt; enable_binaries=yes
</span><br>
<span class="quotelev1">&gt; enable_heterogeneous=no
</span><br>
<span class="quotelev1">&gt; enable_picky=yes
</span><br>
<span class="quotelev1">&gt; enable_debug=yes
</span><br>
<span class="quotelev1">&gt; enable_shared=yes
</span><br>
<span class="quotelev1">&gt; enable_static=no
</span><br>
<span class="quotelev1">&gt; enable_memchecker=no
</span><br>
<span class="quotelev1">&gt; enable_ipv6=no
</span><br>
<span class="quotelev1">&gt; enable_mpi_fortran=yes
</span><br>
<span class="quotelev1">&gt; enable_mpi_cxx=no
</span><br>
<span class="quotelev1">&gt; enable_mpi_cxx_seek=no
</span><br>
<span class="quotelev1">&gt; enable_cxx_exceptions=no
</span><br>
<span class="quotelev1">&gt; enable_mpi_java=no
</span><br>
<span class="quotelev1">&gt; enable_io_romio=no
</span><br>
<span class="quotelev1">&gt; enable_contrib_no_build=libnbc
</span><br>
<span class="quotelev1">&gt; with_memory_manager=no
</span><br>
<span class="quotelev1">&gt; with_tm=no
</span><br>
<span class="quotelev1">&gt; with_devel_headers=yes
</span><br>
<span class="quotelev1">&gt; with_portals=no
</span><br>
<span class="quotelev1">&gt; with_valgrind=no
</span><br>
<span class="quotelev1">&gt; if [ -n &quot;$SLURMHOME&quot; ] ; then
</span><br>
<span class="quotelev1">&gt;     with_slurm=$SLURMHOME
</span><br>
<span class="quotelev1">&gt;     with_pmi=$SLURMHOME
</span><br>
<span class="quotelev1">&gt; else
</span><br>
<span class="quotelev1">&gt;     with_slurm=no
</span><br>
<span class="quotelev1">&gt; fi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/09/18010.php">http://www.open-mpi.org/community/lists/devel/2015/09/18010.php</a>
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
<li><strong>Next message:</strong> <a href="18012.php">Ralph Castain: "Re: [OMPI devel] oshmem examples cannot be built"</a>
<li><strong>Previous message:</strong> <a href="18010.php">Ralph Castain: "[OMPI devel] oshmem examples cannot be built"</a>
<li><strong>In reply to:</strong> <a href="18010.php">Ralph Castain: "[OMPI devel] oshmem examples cannot be built"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18012.php">Ralph Castain: "Re: [OMPI devel] oshmem examples cannot be built"</a>
<li><strong>Reply:</strong> <a href="18012.php">Ralph Castain: "Re: [OMPI devel] oshmem examples cannot be built"</a>
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
