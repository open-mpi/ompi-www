<?
$subject_val = "[OMPI devel] oshmem examples cannot be built";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 11 19:01:06 2015" -->
<!-- isoreceived="20150911230106" -->
<!-- sent="Fri, 11 Sep 2015 16:01:02 -0700" -->
<!-- isosent="20150911230102" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] oshmem examples cannot be built" -->
<!-- id="8BC29B70-3A49-476E-AAF3-ACF41DBCAF9A_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI devel] oshmem examples cannot be built<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-11 19:01:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18011.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] oshmem examples cannot be built"</a>
<li><strong>Previous message:</strong> <a href="18009.php">Shamis, Pavel: "Re: [OMPI devel] New master warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18011.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] oshmem examples cannot be built"</a>
<li><strong>Reply:</strong> <a href="18011.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] oshmem examples cannot be built"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On current master:
<br>
<p>03:57:56  (topic/pmix) /home/common/openmpi/foobar/examples$ make ring_oshmem_c
<br>
mpicc -g    ring_oshmem_c.c   -o ring_oshmem_c
<br>
/tmp/ccfqcVje.o: In function `main':
<br>
/home/common/openmpi/foobar/examples/ring_oshmem_c.c:20: undefined reference to `start_pes'
<br>
/home/common/openmpi/foobar/examples/ring_oshmem_c.c:21: undefined reference to `_my_pe'
<br>
/home/common/openmpi/foobar/examples/ring_oshmem_c.c:22: undefined reference to `_num_pes'
<br>
/home/common/openmpi/foobar/examples/ring_oshmem_c.c:32: undefined reference to `shmem_int_put'
<br>
/home/common/openmpi/foobar/examples/ring_oshmem_c.c:44: undefined reference to `shmem_int_wait_until'
<br>
/home/common/openmpi/foobar/examples/ring_oshmem_c.c:49: undefined reference to `shmem_int_put'
<br>
collect2: error: ld returned 1 exit status
<br>
make: *** [ring_oshmem_c] Error 1
<br>
03:58:51  (topic/pmix) /home/common/openmpi/foobar/examples$ mpicc --showme
<br>
gcc -I/home/common/openmpi/build/foobar/include/openmpi -I/home/common/openmpi/build/foobar/include/openmpi/opal/mca/hwloc/hwloc1110/hwloc/include -I/home/common/openmpi/build/foobar/include/openmpi/opal/mca/event/libevent2022/libevent -I/home/common/openmpi/build/foobar/include/openmpi/opal/mca/event/libevent2022/libevent/include -I/home/common/openmpi/build/foobar/include -pthread -Wl,-rpath -Wl,/home/common/openmpi/build/foobar/lib -Wl,--enable-new-dtags -L/home/common/openmpi/build/foobar/lib -lmpi
<br>
03:59:12  (topic/pmix) /home/common/openmpi/foobar/examples$ 
<br>
<p>None of the oshmem examples can be built - all fail with the same error. My configure:
<br>
<p>enable_orterun_prefix_by_default=yes
<br>
enable_mpi_thread_multiple=no
<br>
enable_mem_debug=no
<br>
enable_mem_profile=no
<br>
enable_debug_symbols=yes
<br>
enable_binaries=yes
<br>
enable_heterogeneous=no
<br>
enable_picky=yes
<br>
enable_debug=yes
<br>
enable_shared=yes
<br>
enable_static=no
<br>
enable_memchecker=no
<br>
enable_ipv6=no
<br>
enable_mpi_fortran=yes
<br>
enable_mpi_cxx=no
<br>
enable_mpi_cxx_seek=no
<br>
enable_cxx_exceptions=no
<br>
enable_mpi_java=no
<br>
enable_io_romio=no
<br>
enable_contrib_no_build=libnbc
<br>
with_memory_manager=no
<br>
with_tm=no
<br>
with_devel_headers=yes
<br>
with_portals=no
<br>
with_valgrind=no
<br>
if [ -n &quot;$SLURMHOME&quot; ] ; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;with_slurm=$SLURMHOME
<br>
&nbsp;&nbsp;&nbsp;&nbsp;with_pmi=$SLURMHOME
<br>
else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;with_slurm=no
<br>
fi
<br>
<p><p>Ralph
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18010/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18011.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] oshmem examples cannot be built"</a>
<li><strong>Previous message:</strong> <a href="18009.php">Shamis, Pavel: "Re: [OMPI devel] New master warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18011.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] oshmem examples cannot be built"</a>
<li><strong>Reply:</strong> <a href="18011.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] oshmem examples cannot be built"</a>
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
