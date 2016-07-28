<?
$subject_val = "Re: [OMPI devel] Bug report: using static build";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 12 19:07:39 2014" -->
<!-- isoreceived="20140712230739" -->
<!-- sent="Sat, 12 Jul 2014 16:07:01 -0700" -->
<!-- isosent="20140712230701" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Bug report: using static build" -->
<!-- id="3B1919FA-7001-4EC2-B037-82B8E72E8007_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CABg52Hk1WcZMOFwe_AXic8jNkZrGj1zbyJT7uLLM3EesA4r6Cg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Bug report: using static build<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-12 19:07:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15133.php">Ralph Castain: "Re: [OMPI devel] hwloc and pmi"</a>
<li><strong>Previous message:</strong> <a href="15131.php">Andrey Gursky: "[OMPI devel] Bug report: using static build"</a>
<li><strong>In reply to:</strong> <a href="15131.php">Andrey Gursky: "[OMPI devel] Bug report: using static build"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&lt;snipping the 1.6 stuff as we are no longer supporting the 1.6 series&gt;
<br>
<p>Hmmm... --enable-static works just fine (at least, for the 1.8.2rc) on CentOS, so this may be a Debian thing. We have some protection in there for getpwuid on the Cray, where static builds take similar exception to it, but that requires you configure with --disable-getpwuid. I was unaware of problems regarding the other functions - is that something also specific to Debian? Do you have some preferred workaround to suggest?
<br>
<p>The problem regarding libnuma et al is caused by linking against the external versions of hwloc, libevent, and libltdtl. I'm not sure how we resolve that one as we don't control what those libs were linked against - it may require that you simply include them in an LDFLAGS argument. I can poke at it a bit, but would likely have to defer to 1.8.3 for a solution unless something simple appears.
<br>
<p><p>On Jul 12, 2014, at 12:21 PM, Andrey Gursky &lt;andrey.gursky_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; ====================&gt; 1.8.1 &lt;==================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ ./configure --prefix=/home/gursky/progs/openmpi-static/usr
</span><br>
<span class="quotelev1">&gt; --disable-shared --enable-static --disable-silent-rules
</span><br>
<span class="quotelev1">&gt; --with-hwloc=/usr --with-libevent=/usr --with-libltdl=external
</span><br>
<span class="quotelev1">&gt; --without-tm --with-devel-headers --enable-heterogeneous --disable-vt
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ============================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - mpicc -static is missing even more libraries:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ MP=/home/gursky/progs/openmpi-static/usr PATH=$MP/bin:$PATH
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=$MP/lib mpicc -Wall -g -static -o simple_spawn
</span><br>
<span class="quotelev1">&gt; simple_spawn.c
</span><br>
<span class="quotelev1">&gt; /home/gursky/progs/openmpi-static/usr/lib/libopen-rte.a(session_dir.o):
</span><br>
<span class="quotelev1">&gt; In function `orte_session_dir_get_name':
</span><br>
<span class="quotelev1">&gt; session_dir.c:(.text+0x1b1): warning: Using 'getpwuid' in statically
</span><br>
<span class="quotelev1">&gt; linked applications requires at runtime the shared libraries from the
</span><br>
<span class="quotelev1">&gt; glibc version used for linking
</span><br>
<span class="quotelev1">&gt; /home/gursky/progs/openmpi-static/usr/lib/libopen-pal.a(if.o): In
</span><br>
<span class="quotelev1">&gt; function `opal_ifaddrtoname':
</span><br>
<span class="quotelev1">&gt; if.c:(.text+0x21a): warning: Using 'getaddrinfo' in statically linked
</span><br>
<span class="quotelev1">&gt; applications requires at runtime the shared libraries from the glibc
</span><br>
<span class="quotelev1">&gt; version used for linking
</span><br>
<span class="quotelev1">&gt; /home/gursky/progs/openmpi-static/usr/lib/libopen-rte.a(ras_slurm_module.o):
</span><br>
<span class="quotelev1">&gt; In function `init':
</span><br>
<span class="quotelev1">&gt; ras_slurm_module.c:(.text+0x5a8): warning: Using 'gethostbyname' in
</span><br>
<span class="quotelev1">&gt; statically linked applications requires at runtime the shared
</span><br>
<span class="quotelev1">&gt; libraries from the glibc version used for linking
</span><br>
<span class="quotelev1">&gt; /usr/lib/gcc/x86_64-linux-gnu/4.9/../../../x86_64-linux-gnu/libevent.a(evutil.o):
</span><br>
<span class="quotelev1">&gt; In function `evutil_getaddrinfo_common':
</span><br>
<span class="quotelev1">&gt; (.text+0x14cf): warning: Using 'getprotobynumber' in statically linked
</span><br>
<span class="quotelev1">&gt; applications requires at runtime the shared libraries from the glibc
</span><br>
<span class="quotelev1">&gt; version used for linking
</span><br>
<span class="quotelev1">&gt; /home/gursky/progs/openmpi-static/usr/lib/libopen-pal.a(mca_base_component_find.o):
</span><br>
<span class="quotelev1">&gt; In function `open_component':
</span><br>
<span class="quotelev1">&gt; mca_base_component_find.c:(.text+0x2aa): undefined reference to
</span><br>
<span class="quotelev1">&gt; `lt_dlopenadvise'
</span><br>
<span class="quotelev1">&gt; mca_base_component_find.c:(.text+0x36c): undefined reference to `lt_dlsym'
</span><br>
<span class="quotelev1">&gt; mca_base_component_find.c:(.text+0x5e4): undefined reference to `lt_dlclose'
</span><br>
<span class="quotelev1">&gt; mca_base_component_find.c:(.text+0x63c): undefined reference to `lt_dlclose'
</span><br>
<span class="quotelev1">&gt; mca_base_component_find.c:(.text+0x6af): undefined reference to `lt_dlclose'
</span><br>
<span class="quotelev1">&gt; mca_base_component_find.c:(.text+0x6d6): undefined reference to `lt_dlerror'
</span><br>
<span class="quotelev1">&gt; mca_base_component_find.c:(.text+0x744): undefined reference to `lt_dlerror'
</span><br>
<span class="quotelev1">&gt; /home/gursky/progs/openmpi-static/usr/lib/libopen-pal.a(mca_base_component_find.o):
</span><br>
<span class="quotelev1">&gt; In function `mca_base_component_find':
</span><br>
<span class="quotelev1">&gt; mca_base_component_find.c:(.text+0x1196): undefined reference to
</span><br>
<span class="quotelev1">&gt; `lt_dlforeachfile'
</span><br>
<span class="quotelev1">&gt; mca_base_component_find.c:(.text+0x11e2): undefined reference to
</span><br>
<span class="quotelev1">&gt; `lt_dlforeachfile'
</span><br>
<span class="quotelev1">&gt; mca_base_component_find.c:(.text+0x1603): undefined reference to
</span><br>
<span class="quotelev1">&gt; `lt_dlforeachfile'
</span><br>
<span class="quotelev1">&gt; /home/gursky/progs/openmpi-static/usr/lib/libopen-pal.a(mca_base_component_repository.o):
</span><br>
<span class="quotelev1">&gt; In function `ri_destructor':
</span><br>
<span class="quotelev1">&gt; mca_base_component_repository.c:(.text+0xd3): undefined reference to
</span><br>
<span class="quotelev1">&gt; `lt_dlclose'
</span><br>
<span class="quotelev1">&gt; /home/gursky/progs/openmpi-static/usr/lib/libopen-pal.a(mca_base_component_repository.o):
</span><br>
<span class="quotelev1">&gt; In function `mca_base_component_repository_init':
</span><br>
<span class="quotelev1">&gt; mca_base_component_repository.c:(.text+0x291): undefined reference to
</span><br>
<span class="quotelev1">&gt; `lt_dlinit'
</span><br>
<span class="quotelev1">&gt; mca_base_component_repository.c:(.text+0x2a3): undefined reference to
</span><br>
<span class="quotelev1">&gt; `lt_dladvise_init'
</span><br>
<span class="quotelev1">&gt; mca_base_component_repository.c:(.text+0x2b5): undefined reference to
</span><br>
<span class="quotelev1">&gt; `lt_dladvise_ext'
</span><br>
<span class="quotelev1">&gt; mca_base_component_repository.c:(.text+0x2c7): undefined reference to
</span><br>
<span class="quotelev1">&gt; `lt_dladvise_global'
</span><br>
<span class="quotelev1">&gt; /home/gursky/progs/openmpi-static/usr/lib/libopen-pal.a(mca_base_component_repository.o):
</span><br>
<span class="quotelev1">&gt; In function `mca_base_component_repository_finalize':
</span><br>
<span class="quotelev1">&gt; mca_base_component_repository.c:(.text+0x7d2): undefined reference to
</span><br>
<span class="quotelev1">&gt; `lt_dladvise_destroy'
</span><br>
<span class="quotelev1">&gt; mca_base_component_repository.c:(.text+0x7e6): undefined reference to
</span><br>
<span class="quotelev1">&gt; `lt_dlexit'
</span><br>
<span class="quotelev1">&gt; /usr/lib/gcc/x86_64-linux-gnu/4.9/../../../../lib/libibverbs.a(src_libibverbs_la-init.o):
</span><br>
<span class="quotelev1">&gt; In function `load_driver':
</span><br>
<span class="quotelev1">&gt; (.text+0x387): undefined reference to `dlopen'
</span><br>
<span class="quotelev1">&gt; /usr/lib/gcc/x86_64-linux-gnu/4.9/../../../../lib/libibverbs.a(src_libibverbs_la-init.o):
</span><br>
<span class="quotelev1">&gt; In function `load_driver':
</span><br>
<span class="quotelev1">&gt; (.text+0x3c1): undefined reference to `dlerror'
</span><br>
<span class="quotelev1">&gt; /usr/lib/gcc/x86_64-linux-gnu/4.9/../../../../lib/libibverbs.a(src_libibverbs_la-init.o):
</span><br>
<span class="quotelev1">&gt; In function `ibverbs_init':
</span><br>
<span class="quotelev1">&gt; (.text+0xc2f): undefined reference to `dlopen'
</span><br>
<span class="quotelev1">&gt; /usr/lib/gcc/x86_64-linux-gnu/4.9/../../../../lib/libibverbs.a(src_libibverbs_la-init.o):
</span><br>
<span class="quotelev1">&gt; In function `ibverbs_init':
</span><br>
<span class="quotelev1">&gt; (.text+0xc40): undefined reference to `dlclose'
</span><br>
<span class="quotelev1">&gt; /usr/lib/gcc/x86_64-linux-gnu/4.9/../../../x86_64-linux-gnu/libhwloc.a(components.o):
</span><br>
<span class="quotelev1">&gt; In function `hwloc__dlforeach_cb':
</span><br>
<span class="quotelev1">&gt; (.text+0x77): undefined reference to `lt_dlopenext'
</span><br>
<span class="quotelev1">&gt; /usr/lib/gcc/x86_64-linux-gnu/4.9/../../../x86_64-linux-gnu/libhwloc.a(components.o):
</span><br>
<span class="quotelev1">&gt; In function `hwloc__dlforeach_cb':
</span><br>
<span class="quotelev1">&gt; (.text+0x91): undefined reference to `lt_dlerror'
</span><br>
<span class="quotelev1">&gt; /usr/lib/gcc/x86_64-linux-gnu/4.9/../../../x86_64-linux-gnu/libhwloc.a(components.o):
</span><br>
<span class="quotelev1">&gt; In function `hwloc__dlforeach_cb':
</span><br>
<span class="quotelev1">&gt; (.text+0x107): undefined reference to `lt_dlsym'
</span><br>
<span class="quotelev1">&gt; /usr/lib/gcc/x86_64-linux-gnu/4.9/../../../x86_64-linux-gnu/libhwloc.a(components.o):
</span><br>
<span class="quotelev1">&gt; In function `hwloc__dlforeach_cb':
</span><br>
<span class="quotelev1">&gt; (.text+0x3d5): undefined reference to `lt_dlclose'
</span><br>
<span class="quotelev1">&gt; /usr/lib/gcc/x86_64-linux-gnu/4.9/../../../x86_64-linux-gnu/libhwloc.a(components.o):
</span><br>
<span class="quotelev1">&gt; In function `hwloc_plugins_exit':
</span><br>
<span class="quotelev1">&gt; (.text+0x446): undefined reference to `lt_dlclose'
</span><br>
<span class="quotelev1">&gt; /usr/lib/gcc/x86_64-linux-gnu/4.9/../../../x86_64-linux-gnu/libhwloc.a(components.o):
</span><br>
<span class="quotelev1">&gt; In function `hwloc_plugins_exit':
</span><br>
<span class="quotelev1">&gt; (.text+0x490): undefined reference to `lt_dlexit'
</span><br>
<span class="quotelev1">&gt; /usr/lib/gcc/x86_64-linux-gnu/4.9/../../../x86_64-linux-gnu/libhwloc.a(components.o):
</span><br>
<span class="quotelev1">&gt; In function `hwloc_plugins_init':
</span><br>
<span class="quotelev1">&gt; (.text+0x4da): undefined reference to `lt_dlinit'
</span><br>
<span class="quotelev1">&gt; /usr/lib/gcc/x86_64-linux-gnu/4.9/../../../x86_64-linux-gnu/libhwloc.a(components.o):
</span><br>
<span class="quotelev1">&gt; In function `hwloc_plugins_init':
</span><br>
<span class="quotelev1">&gt; (.text+0x556): undefined reference to `lt_dlforeachfile'
</span><br>
<span class="quotelev1">&gt; /usr/lib/gcc/x86_64-linux-gnu/4.9/../../../x86_64-linux-gnu/libhwloc.a(topology-linux.o):
</span><br>
<span class="quotelev1">&gt; In function `hwloc_linux_set_area_membind':
</span><br>
<span class="quotelev1">&gt; (.text+0x1ce2): undefined reference to `mbind'
</span><br>
<span class="quotelev1">&gt; /usr/lib/gcc/x86_64-linux-gnu/4.9/../../../x86_64-linux-gnu/libhwloc.a(topology-linux.o):
</span><br>
<span class="quotelev1">&gt; In function `hwloc_linux_set_area_membind':
</span><br>
<span class="quotelev1">&gt; (.text+0x1d52): undefined reference to `mbind'
</span><br>
<span class="quotelev1">&gt; /usr/lib/gcc/x86_64-linux-gnu/4.9/../../../x86_64-linux-gnu/libhwloc.a(topology-linux.o):
</span><br>
<span class="quotelev1">&gt; In function `hwloc_linux_set_thisthread_membind':
</span><br>
<span class="quotelev1">&gt; (.text+0x1e72): undefined reference to `set_mempolicy'
</span><br>
<span class="quotelev1">&gt; /usr/lib/gcc/x86_64-linux-gnu/4.9/../../../x86_64-linux-gnu/libhwloc.a(topology-linux.o):
</span><br>
<span class="quotelev1">&gt; In function `hwloc_linux_set_thisthread_membind':
</span><br>
<span class="quotelev1">&gt; (.text+0x1f08): undefined reference to `migrate_pages'
</span><br>
<span class="quotelev1">&gt; /usr/lib/gcc/x86_64-linux-gnu/4.9/../../../x86_64-linux-gnu/libhwloc.a(topology-linux.o):
</span><br>
<span class="quotelev1">&gt; In function `hwloc_linux_set_thisthread_membind':
</span><br>
<span class="quotelev1">&gt; (.text+0x1f4b): undefined reference to `set_mempolicy'
</span><br>
<span class="quotelev1">&gt; /usr/lib/gcc/x86_64-linux-gnu/4.9/../../../x86_64-linux-gnu/libhwloc.a(topology-linux.o):
</span><br>
<span class="quotelev1">&gt; In function `hwloc_linux_find_kernel_max_numnodes':
</span><br>
<span class="quotelev1">&gt; (.text+0x1fef): undefined reference to `get_mempolicy'
</span><br>
<span class="quotelev1">&gt; /usr/lib/gcc/x86_64-linux-gnu/4.9/../../../x86_64-linux-gnu/libhwloc.a(topology-linux.o):
</span><br>
<span class="quotelev1">&gt; In function `hwloc_linux_get_thisthread_membind':
</span><br>
<span class="quotelev1">&gt; (.text+0x210b): undefined reference to `get_mempolicy'
</span><br>
<span class="quotelev1">&gt; /usr/lib/gcc/x86_64-linux-gnu/4.9/../../../x86_64-linux-gnu/libhwloc.a(topology-linux.o):
</span><br>
<span class="quotelev1">&gt; In function `hwloc_linux_get_area_membind':
</span><br>
<span class="quotelev1">&gt; (.text+0x2282): undefined reference to `get_mempolicy'
</span><br>
<span class="quotelev1">&gt; collect2: error: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; gursky_at_hpprobook:~/projects/openmpi/test$
</span><br>
<span class="quotelev1">&gt; $
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ===============================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ MP=/home/gursky/progs/openmpi-static/usr PATH=$MP/bin:$PATH
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=$MP/lib mpicc -show
</span><br>
<span class="quotelev1">&gt; gcc -I/home/gursky/progs/openmpi-static/usr/include
</span><br>
<span class="quotelev1">&gt; -I/home/gursky/progs/openmpi-static/usr/include/openmpi -pthread
</span><br>
<span class="quotelev1">&gt; -Wl,-rpath -Wl,/home/gursky/progs/openmpi-static/usr/lib
</span><br>
<span class="quotelev1">&gt; -Wl,--enable-new-dtags -L/home/gursky/progs/openmpi-static/usr/lib
</span><br>
<span class="quotelev1">&gt; -lmpi -lopen-rte -lopen-pal -levent -levent_pthreads -ldl -libverbs
</span><br>
<span class="quotelev1">&gt; -lrt -lnsl -lutil -lm -lhwloc
</span><br>
<span class="quotelev1">&gt; $
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ===============================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Using output of mpicc still gives another result:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ MP=/home/gursky/progs/openmpi-static/usr PATH=$MP/bin:$PATH
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=$MP/lib gcc
</span><br>
<span class="quotelev1">&gt; -I/home/gursky/progs/openmpi-static/usr/include
</span><br>
<span class="quotelev1">&gt; -I/home/gursky/progs/openmpi-static/usr/include/openmpi -pthread
</span><br>
<span class="quotelev1">&gt; -Wl,-rpath -Wl,/home/gursky/progs/openmpi-static/usr/lib
</span><br>
<span class="quotelev1">&gt; -Wl,--enable-new-dtags -L/home/gursky/progs/openmpi-static/usr/lib
</span><br>
<span class="quotelev1">&gt; -lmpi -lopen-rte -lopen-pal -levent -levent_pthreads -ldl -libverbs
</span><br>
<span class="quotelev1">&gt; -lrt -lnsl -lutil -lm -lhwloc -static -o simple_spawn simple_spawn.o
</span><br>
<span class="quotelev1">&gt; simple_spawn.o: In function `main':
</span><br>
<span class="quotelev1">&gt; simple_spawn.c:(.text+0x42): undefined reference to `MPI_Init'
</span><br>
<span class="quotelev1">&gt; simple_spawn.c:(.text+0x4e): undefined reference to `ompi_mpi_comm_world'
</span><br>
<span class="quotelev1">&gt; simple_spawn.c:(.text+0x53): undefined reference to `MPI_Comm_rank'
</span><br>
<span class="quotelev1">&gt; simple_spawn.c:(.text+0x73): undefined reference to `ompi_mpi_comm_world'
</span><br>
<span class="quotelev1">&gt; simple_spawn.c:(.text+0x78): undefined reference to `MPI_Comm_size'
</span><br>
<span class="quotelev1">&gt; simple_spawn.c:(.text+0x84): undefined reference to `MPI_Comm_get_parent'
</span><br>
<span class="quotelev1">&gt; simple_spawn.c:(.text+0x8e): undefined reference to `ompi_mpi_comm_null'
</span><br>
<span class="quotelev1">&gt; simple_spawn.c:(.text+0xca): undefined reference to `ompi_mpi_comm_world'
</span><br>
<span class="quotelev1">&gt; simple_spawn.c:(.text+0xd5): undefined reference to `ompi_mpi_info_null'
</span><br>
<span class="quotelev1">&gt; simple_spawn.c:(.text+0xe7): undefined reference to `MPI_Comm_spawn'
</span><br>
<span class="quotelev1">&gt; simple_spawn.c:(.text+0x143): undefined reference to `ompi_mpi_int'
</span><br>
<span class="quotelev1">&gt; simple_spawn.c:(.text+0x150): undefined reference to `MPI_Send'
</span><br>
<span class="quotelev1">&gt; simple_spawn.c:(.text+0x15c): undefined reference to `MPI_Comm_disconnect'
</span><br>
<span class="quotelev1">&gt; simple_spawn.c:(.text+0x177): undefined reference to `ompi_mpi_comm_world'
</span><br>
<span class="quotelev1">&gt; simple_spawn.c:(.text+0x17c): undefined reference to `MPI_Comm_rank'
</span><br>
<span class="quotelev1">&gt; simple_spawn.c:(.text+0x188): undefined reference to `ompi_mpi_comm_world'
</span><br>
<span class="quotelev1">&gt; simple_spawn.c:(.text+0x18d): undefined reference to `MPI_Comm_size'
</span><br>
<span class="quotelev1">&gt; simple_spawn.c:(.text+0x1fd): undefined reference to `ompi_mpi_int'
</span><br>
<span class="quotelev1">&gt; simple_spawn.c:(.text+0x20a): undefined reference to `MPI_Recv'
</span><br>
<span class="quotelev1">&gt; simple_spawn.c:(.text+0x231): undefined reference to `MPI_Comm_disconnect'
</span><br>
<span class="quotelev1">&gt; simple_spawn.c:(.text+0x24a): undefined reference to `MPI_Finalize'
</span><br>
<span class="quotelev1">&gt; collect2: error: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; $
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ===============================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ gcc -static -DNDEBUG -pthread -Wall -g -o simple_spawn
</span><br>
<span class="quotelev1">&gt; simple_spawn.o  /home/gursky/progs/openmpi-static/usr/lib/libmpi.a
</span><br>
<span class="quotelev1">&gt; -libverbs /home/gursky/progs/openmpi-static/usr/lib/libopen-rte.a
</span><br>
<span class="quotelev1">&gt; /home/gursky/progs/openmpi-static/usr/lib/libopen-pal.a -lrt -lnsl
</span><br>
<span class="quotelev1">&gt; -lutil -lm -lhwloc -lnuma -levent -levent_pthreads -lltdl -ldl
</span><br>
<span class="quotelev1">&gt; /usr/lib/gcc/x86_64-linux-gnu/4.9/../../../../lib/libibverbs.a(src_libibverbs_la-init.o):
</span><br>
<span class="quotelev1">&gt; In function `load_driver':
</span><br>
<span class="quotelev1">&gt; (.text+0x387): warning: Using 'dlopen' in statically linked
</span><br>
<span class="quotelev1">&gt; applications requires at runtime the shared libraries from the glibc
</span><br>
<span class="quotelev1">&gt; version used for linking
</span><br>
<span class="quotelev1">&gt; /home/gursky/progs/openmpi-static/usr/lib/libopen-rte.a(session_dir.o):
</span><br>
<span class="quotelev1">&gt; In function `orte_session_dir_get_name':
</span><br>
<span class="quotelev1">&gt; session_dir.c:(.text+0x1b1): warning: Using 'getpwuid' in statically
</span><br>
<span class="quotelev1">&gt; linked applications requires at runtime the shared libraries from the
</span><br>
<span class="quotelev1">&gt; glibc version used for linking
</span><br>
<span class="quotelev1">&gt; /home/gursky/progs/openmpi-static/usr/lib/libopen-pal.a(if.o): In
</span><br>
<span class="quotelev1">&gt; function `opal_ifaddrtoname':
</span><br>
<span class="quotelev1">&gt; if.c:(.text+0x21a): warning: Using 'getaddrinfo' in statically linked
</span><br>
<span class="quotelev1">&gt; applications requires at runtime the shared libraries from the glibc
</span><br>
<span class="quotelev1">&gt; version used for linking
</span><br>
<span class="quotelev1">&gt; /home/gursky/progs/openmpi-static/usr/lib/libopen-rte.a(ras_slurm_module.o):
</span><br>
<span class="quotelev1">&gt; In function `init':
</span><br>
<span class="quotelev1">&gt; ras_slurm_module.c:(.text+0x5a8): warning: Using 'gethostbyname' in
</span><br>
<span class="quotelev1">&gt; statically linked applications requires at runtime the shared
</span><br>
<span class="quotelev1">&gt; libraries from the glibc version used for linking
</span><br>
<span class="quotelev1">&gt; /usr/lib/gcc/x86_64-linux-gnu/4.9/../../../x86_64-linux-gnu/libevent.a(evutil.o):
</span><br>
<span class="quotelev1">&gt; In function `evutil_getaddrinfo_common':
</span><br>
<span class="quotelev1">&gt; (.text+0x14cf): warning: Using 'getprotobynumber' in statically linked
</span><br>
<span class="quotelev1">&gt; applications requires at runtime the shared libraries from the glibc
</span><br>
<span class="quotelev1">&gt; version used for linking
</span><br>
<span class="quotelev1">&gt; $
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ===============================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ ldd ./simple_spawn
</span><br>
<span class="quotelev1">&gt; 	not a dynamic executable
</span><br>
<span class="quotelev1">&gt; $ ./simple_spawn
</span><br>
<span class="quotelev1">&gt; [pid 2805] starting up!
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Open MPI was unable to obtain the username in order to create a path
</span><br>
<span class="quotelev1">&gt; for its required temporary directories.  This type of error is usually
</span><br>
<span class="quotelev1">&gt; caused by a transient failure of network-based authentication services
</span><br>
<span class="quotelev1">&gt; (e.g., LDAP or NIS failure due to network congestion), but can also be
</span><br>
<span class="quotelev1">&gt; an indication of system misconfiguration.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please consult your system administrator about these issues and try
</span><br>
<span class="quotelev1">&gt; again.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 0 completed MPI_Init
</span><br>
<span class="quotelev1">&gt; Parent [pid 2805] about to spawn!
</span><br>
<span class="quotelev1">&gt; [hpprobook:02805] [[52016,1],0] FORKING HNP: orted --hnp --set-sid
</span><br>
<span class="quotelev1">&gt; --report-uri 16 --singleton-died-pipe 17 -mca state_novm_select 1 -mca
</span><br>
<span class="quotelev1">&gt; ess_base_jobid 3408920576
</span><br>
<span class="quotelev1">&gt; [pid 2809] starting up!
</span><br>
<span class="quotelev1">&gt; [pid 2810] starting up!
</span><br>
<span class="quotelev1">&gt; [pid 2811] starting up!
</span><br>
<span class="quotelev1">&gt; [hpprobook:02809] [[52016,2],0] ORTE_ERROR_LOG: Data for specified key
</span><br>
<span class="quotelev1">&gt; not found in file runtime/orte_globals.c at line 504
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Child job 2 terminated normally, but 1 process returned
</span><br>
<span class="quotelev1">&gt; a non-zero exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [hpprobook:02805] 1 more process has sent help message
</span><br>
<span class="quotelev1">&gt; help-orte-runtime.txt / orte:session:dir:nopwname
</span><br>
<span class="quotelev1">&gt; [hpprobook:02805] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to
</span><br>
<span class="quotelev1">&gt; see all help / error messages
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ^C
</span><br>
<span class="quotelev1">&gt; $ --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; (null) detected that one or more processes exited with non-zero
</span><br>
<span class="quotelev1">&gt; status, thus causing
</span><br>
<span class="quotelev1">&gt; the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Process name: [[52016,2],0]
</span><br>
<span class="quotelev1">&gt;  Exit code:    64
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - also doesn't work
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; =======================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Andrey
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15131.php">http://www.open-mpi.org/community/lists/devel/2014/07/15131.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15133.php">Ralph Castain: "Re: [OMPI devel] hwloc and pmi"</a>
<li><strong>Previous message:</strong> <a href="15131.php">Andrey Gursky: "[OMPI devel] Bug report: using static build"</a>
<li><strong>In reply to:</strong> <a href="15131.php">Andrey Gursky: "[OMPI devel] Bug report: using static build"</a>
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
