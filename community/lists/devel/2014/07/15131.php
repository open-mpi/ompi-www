<?
$subject_val = "[OMPI devel] Bug report: using static build";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 12 15:21:37 2014" -->
<!-- isoreceived="20140712192137" -->
<!-- sent="Sat, 12 Jul 2014 21:21:35 +0200" -->
<!-- isosent="20140712192135" -->
<!-- name="Andrey Gursky" -->
<!-- email="andrey.gursky_at_[hidden]" -->
<!-- subject="[OMPI devel] Bug report: using static build" -->
<!-- id="CABg52Hk1WcZMOFwe_AXic8jNkZrGj1zbyJT7uLLM3EesA4r6Cg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] Bug report: using static build<br>
<strong>From:</strong> Andrey Gursky (<em>andrey.gursky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-12 15:21:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15132.php">Ralph Castain: "Re: [OMPI devel] Bug report: using static build"</a>
<li><strong>Previous message:</strong> <a href="15130.php">Mike Dubman: "Re: [OMPI devel] hwloc and pmi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15132.php">Ralph Castain: "Re: [OMPI devel] Bug report: using static build"</a>
<li><strong>Reply:</strong> <a href="15132.php">Ralph Castain: "Re: [OMPI devel] Bug report: using static build"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear developers and subscribers,
<br>
<p>I'm not aware of information how open-mpi static build is being
<br>
validated. Is there any documentation about it?
<br>
<p>For now I tested the static build on Debian Jessie (testing) amd64
<br>
with openmpi-1.6.5 and openmpi-1.8.1.
<br>
<p>There are few issues with it.
<br>
<p>- openmpi doesn't depend anymore on libnuma directly but via hwloc.
<br>
-lnuma is missing in *wrapper-data.txt and libmpi.la
<br>
<p>====================&gt; 1.6.5 &lt;==================
<br>
<p>$ ./configure --prefix=/home/gursky/progs/openmpi-1.6-static/usr
<br>
--disable-shared --enable-static --enable-ft-thread --without-ft
<br>
--without-blcr --without-tm --with-libnuma=/usr
<br>
--with-libnuma-libdir=/usr/lib --with-threads=posix
<br>
--enable-opal-multi-threads --disable-silent-rules --with-hwloc=/usr/
<br>
--with-libltdl=external --with-devel-headers --with-slurm --with-sge
<br>
--enable-heterogeneous --disable-vt
<br>
<p>==============================
<br>
<p>- mpicc -static fails
<br>
<p>$ MP=/home/gursky/progs/openmpi-1.6-static/usr PATH=$MP/bin:$PATH
<br>
LD_LIBRARY_PATH=$MP/lib mpicc -static -Wall -g -o simple_spawn
<br>
simple_spawn.c
<br>
/usr//lib/libibverbs.a(src_libibverbs_la-init.o): In function `load_driver':
<br>
(.text+0x387): warning: Using 'dlopen' in statically linked
<br>
applications requires at runtime the shared libraries from the glibc
<br>
version used for linking
<br>
/home/gursky/progs/openmpi-1.6-static/usr/lib/libmpi.a(plm_base_rsh_support.o):
<br>
In function `setup_shell':
<br>
/home/gursky/projects/openmpi/t/openmpi-1.6.5-static/orte/mca/plm/base/plm_base_rsh_support.c:640:
<br>
warning: Using 'getpwuid' in statically linked applications requires
<br>
at runtime the shared libraries from the glibc version used for
<br>
linking
<br>
/usr/lib/gcc/x86_64-linux-gnu/4.9/../../../x86_64-linux-gnu/libnuma.a(affinity.o):
<br>
In function `affinity_ip':
<br>
(.text+0x703): warning: Using 'getaddrinfo' in statically linked
<br>
applications requires at runtime the shared libraries from the glibc
<br>
version used for linking
<br>
/home/gursky/progs/openmpi-1.6-static/usr/lib/libmpi.a(nidmap.o): In
<br>
function `orte_util_build_daemon_nidmap':
<br>
/home/gursky/projects/openmpi/t/openmpi-1.6.5-static/orte/util/nidmap.c:267:
<br>
warning: Using 'gethostbyname' in statically linked applications
<br>
requires at runtime the shared libraries from the glibc version used
<br>
for linking
<br>
/usr/lib/gcc/x86_64-linux-gnu/4.9/../../../x86_64-linux-gnu/libltdl.a(dlopen.o):
<br>
In function `vm_sym':
<br>
(.text+0x18): undefined reference to `dlsym'
<br>
collect2: error: ld returned 1 exit status
<br>
$
<br>
<p>===============================
<br>
<p>$ MP=/home/gursky/progs/openmpi-1.6-static/usr PATH=$MP/bin:$PATH
<br>
LD_LIBRARY_PATH=$MP/lib mpicc -show
<br>
gcc -I/home/gursky/progs/openmpi-1.6-static/usr/include
<br>
-I/home/gursky/progs/openmpi-1.6-static/usr/include/openmpi -pthread
<br>
-L/usr//lib -L/home/gursky/progs/openmpi-1.6-static/usr/lib -lmpi
<br>
-libverbs -lrt -lnsl -lutil -lm -lhwloc -ldl -lltdl -lnuma
<br>
<p>===============================
<br>
<p>- using the output of mpicc -show doesn't reproduce the behavior above:
<br>
<p>$ MP=/home/gursky/progs/openmpi-1.6-static/usr PATH=$MP/bin:$PATH
<br>
LD_LIBRARY_PATH=$MP/lib gcc
<br>
-I/home/gursky/progs/openmpi-1.6-static/usr/include
<br>
-I/home/gursky/progs/openmpi-1.6-static/usr/include/openmpi -pthread
<br>
-L/usr//lib -L/home/gursky/progs/openmpi-1.6-static/usr/lib -lmpi
<br>
-libverbs -lrt -lnsl -lutil -lm -lhwloc -ldl -lltdl -lnuma -static -o
<br>
simple_spawn simple_spawn.c
<br>
/tmp/ccsAzcFn.o: In function `main':
<br>
simple_spawn.c:(.text+0x42): undefined reference to `MPI_Init'
<br>
simple_spawn.c:(.text+0x4e): undefined reference to `ompi_mpi_comm_world'
<br>
simple_spawn.c:(.text+0x53): undefined reference to `MPI_Comm_rank'
<br>
simple_spawn.c:(.text+0x73): undefined reference to `ompi_mpi_comm_world'
<br>
simple_spawn.c:(.text+0x78): undefined reference to `MPI_Comm_size'
<br>
simple_spawn.c:(.text+0x84): undefined reference to `MPI_Comm_get_parent'
<br>
simple_spawn.c:(.text+0x8e): undefined reference to `ompi_mpi_comm_null'
<br>
simple_spawn.c:(.text+0xca): undefined reference to `ompi_mpi_comm_world'
<br>
simple_spawn.c:(.text+0xd5): undefined reference to `ompi_mpi_info_null'
<br>
simple_spawn.c:(.text+0xe7): undefined reference to `MPI_Comm_spawn'
<br>
simple_spawn.c:(.text+0x143): undefined reference to `ompi_mpi_int'
<br>
simple_spawn.c:(.text+0x150): undefined reference to `MPI_Send'
<br>
simple_spawn.c:(.text+0x15c): undefined reference to `MPI_Comm_disconnect'
<br>
simple_spawn.c:(.text+0x177): undefined reference to `ompi_mpi_comm_world'
<br>
simple_spawn.c:(.text+0x17c): undefined reference to `MPI_Comm_rank'
<br>
simple_spawn.c:(.text+0x188): undefined reference to `ompi_mpi_comm_world'
<br>
simple_spawn.c:(.text+0x18d): undefined reference to `MPI_Comm_size'
<br>
simple_spawn.c:(.text+0x1fd): undefined reference to `ompi_mpi_int'
<br>
simple_spawn.c:(.text+0x20a): undefined reference to `MPI_Recv'
<br>
simple_spawn.c:(.text+0x231): undefined reference to `MPI_Comm_disconnect'
<br>
simple_spawn.c:(.text+0x24a): undefined reference to `MPI_Finalize'
<br>
collect2: error: ld returned 1 exit status
<br>
$
<br>
<p>===============================
<br>
<p>- using libtool I've figured out the command successfully compiling a
<br>
test program (orte/test/mpi/simple_spawn.c)
<br>
<p>$ MP=/home/gursky/progs/openmpi-1.6-static/usr PATH=$MP/bin:$PATH
<br>
LD_LIBRARY_PATH=$MP/lib gcc -static -DNDEBUG -pthread -Wall -g -o
<br>
simple_spawn simple_spawn.o
<br>
/home/gursky/progs/openmpi-1.6-static/usr/lib/libmpi.a -libverbs -lrt
<br>
-lnsl -lutil -lm -lhwloc -lnuma /usr/lib/x86_64-linux-gnu/libltdl.a
<br>
-ldl
<br>
/usr//lib/libibverbs.a(src_libibverbs_la-init.o): In function `load_driver':
<br>
(.text+0x387): warning: Using 'dlopen' in statically linked
<br>
applications requires at runtime the shared libraries from the glibc
<br>
version used for linking
<br>
/home/gursky/progs/openmpi-1.6-static/usr/lib/libmpi.a(plm_base_rsh_support.o):
<br>
In function `setup_shell':
<br>
/home/gursky/projects/openmpi/t/openmpi-1.6.5-static/orte/mca/plm/base/plm_base_rsh_support.c:640:
<br>
warning: Using 'getpwuid' in statically linked applications requires
<br>
at runtime the shared libraries from the glibc version used for
<br>
linking
<br>
/usr/lib/gcc/x86_64-linux-gnu/4.9/../../../x86_64-linux-gnu/libnuma.a(affinity.o):
<br>
In function `affinity_ip':
<br>
(.text+0x703): warning: Using 'getaddrinfo' in statically linked
<br>
applications requires at runtime the shared libraries from the glibc
<br>
version used for linking
<br>
/home/gursky/progs/openmpi-1.6-static/usr/lib/libmpi.a(nidmap.o): In
<br>
function `orte_util_build_daemon_nidmap':
<br>
/home/gursky/projects/openmpi/t/openmpi-1.6.5-static/orte/util/nidmap.c:267:
<br>
warning: Using 'gethostbyname' in statically linked applications
<br>
requires at runtime the shared libraries from the glibc version used
<br>
for linking
<br>
$
<br>
<p>===============================
<br>
<p>$ ldd ./simple_spawn
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;not a dynamic executable
<br>
<p>------------------------
<br>
<p>$ ./simple_spawn
<br>
[pid 1629] starting up!
<br>
[hpprobook:01629] [[51099,1],0] ORTE_ERROR_LOG: A message is
<br>
attempting to be sent to a process whose contact information is
<br>
unknown in file rml_oob_send.c at line 104
<br>
[hpprobook:01629] [[51099,1],0] could not get route to [[INVALID],INVALID]
<br>
[hpprobook:01629] [[51099,1],0] ORTE_ERROR_LOG: A message is
<br>
attempting to be sent to a process whose contact information is
<br>
unknown in file util/show_help.c at line 627
<br>
[hpprobook:01629] [[51099,1],0] ORTE_ERROR_LOG: Out of resource in
<br>
file util/session_dir.c at line 390
<br>
[hpprobook:01629] [[51099,1],0] ORTE_ERROR_LOG: Out of resource in
<br>
file base/ess_base_std_app.c at line 130
<br>
[hpprobook:01629] [[51099,1],0] ORTE_ERROR_LOG: A message is
<br>
attempting to be sent to a process whose contact information is
<br>
unknown in file rml_oob_send.c at line 104
<br>
[hpprobook:01629] [[51099,1],0] could not get route to [[INVALID],INVALID]
<br>
[hpprobook:01629] [[51099,1],0] ORTE_ERROR_LOG: A message is
<br>
attempting to be sent to a process whose contact information is
<br>
unknown in file util/show_help.c at line 627
<br>
[hpprobook:01629] [[51099,1],0] ORTE_ERROR_LOG: Out of resource in
<br>
file ess_singleton_module.c at line 163
<br>
[hpprobook:01629] [[51099,1],0] ORTE_ERROR_LOG: Out of resource in
<br>
file runtime/orte_init.c at line 128
<br>
[hpprobook:01629] [[51099,1],0] ORTE_ERROR_LOG: A message is
<br>
attempting to be sent to a process whose contact information is
<br>
unknown in file rml_oob_send.c at line 104
<br>
[hpprobook:01629] [[51099,1],0] could not get route to [[INVALID],INVALID]
<br>
[hpprobook:01629] [[51099,1],0] ORTE_ERROR_LOG: A message is
<br>
attempting to be sent to a process whose contact information is
<br>
unknown in file util/show_help.c at line 627
<br>
[hpprobook:01629] [[51099,1],0] ORTE_ERROR_LOG: A message is
<br>
attempting to be sent to a process whose contact information is
<br>
unknown in file rml_oob_send.c at line 104
<br>
[hpprobook:01629] [[51099,1],0] could not get route to [[INVALID],INVALID]
<br>
[hpprobook:01629] [[51099,1],0] ORTE_ERROR_LOG: A message is
<br>
attempting to be sent to a process whose contact information is
<br>
unknown in file util/show_help.c at line 627
<br>
[hpprobook:01629] [[51099,1],0] ORTE_ERROR_LOG: A message is
<br>
attempting to be sent to a process whose contact information is
<br>
unknown in file rml_oob_send.c at line 104
<br>
[hpprobook:01629] [[51099,1],0] could not get route to [[INVALID],INVALID]
<br>
[hpprobook:01629] [[51099,1],0] ORTE_ERROR_LOG: A message is
<br>
attempting to be sent to a process whose contact information is
<br>
unknown in file util/show_help.c at line 627
<br>
[hpprobook:01629] [[51099,1],0] ORTE_ERROR_LOG: A message is
<br>
attempting to be sent to a process whose contact information is
<br>
unknown in file rml_oob_send.c at line 104
<br>
[hpprobook:01629] [[51099,1],0] could not get route to [[INVALID],INVALID]
<br>
[hpprobook:01629] [[51099,1],0] ORTE_ERROR_LOG: A message is
<br>
attempting to be sent to a process whose contact information is
<br>
unknown in file util/show_help.c at line 627
<br>
$
<br>
<p>- but it seems not to work.
<br>
<p>====================&gt; 1.8.1 &lt;==================
<br>
<p>$ ./configure --prefix=/home/gursky/progs/openmpi-static/usr
<br>
--disable-shared --enable-static --disable-silent-rules
<br>
--with-hwloc=/usr --with-libevent=/usr --with-libltdl=external
<br>
--without-tm --with-devel-headers --enable-heterogeneous --disable-vt
<br>
<p>============================
<br>
<p>- mpicc -static is missing even more libraries:
<br>
<p>$ MP=/home/gursky/progs/openmpi-static/usr PATH=$MP/bin:$PATH
<br>
LD_LIBRARY_PATH=$MP/lib mpicc -Wall -g -static -o simple_spawn
<br>
simple_spawn.c
<br>
/home/gursky/progs/openmpi-static/usr/lib/libopen-rte.a(session_dir.o):
<br>
In function `orte_session_dir_get_name':
<br>
session_dir.c:(.text+0x1b1): warning: Using 'getpwuid' in statically
<br>
linked applications requires at runtime the shared libraries from the
<br>
glibc version used for linking
<br>
/home/gursky/progs/openmpi-static/usr/lib/libopen-pal.a(if.o): In
<br>
function `opal_ifaddrtoname':
<br>
if.c:(.text+0x21a): warning: Using 'getaddrinfo' in statically linked
<br>
applications requires at runtime the shared libraries from the glibc
<br>
version used for linking
<br>
/home/gursky/progs/openmpi-static/usr/lib/libopen-rte.a(ras_slurm_module.o):
<br>
In function `init':
<br>
ras_slurm_module.c:(.text+0x5a8): warning: Using 'gethostbyname' in
<br>
statically linked applications requires at runtime the shared
<br>
libraries from the glibc version used for linking
<br>
/usr/lib/gcc/x86_64-linux-gnu/4.9/../../../x86_64-linux-gnu/libevent.a(evutil.o):
<br>
In function `evutil_getaddrinfo_common':
<br>
(.text+0x14cf): warning: Using 'getprotobynumber' in statically linked
<br>
applications requires at runtime the shared libraries from the glibc
<br>
version used for linking
<br>
/home/gursky/progs/openmpi-static/usr/lib/libopen-pal.a(mca_base_component_find.o):
<br>
In function `open_component':
<br>
mca_base_component_find.c:(.text+0x2aa): undefined reference to
<br>
`lt_dlopenadvise'
<br>
mca_base_component_find.c:(.text+0x36c): undefined reference to `lt_dlsym'
<br>
mca_base_component_find.c:(.text+0x5e4): undefined reference to `lt_dlclose'
<br>
mca_base_component_find.c:(.text+0x63c): undefined reference to `lt_dlclose'
<br>
mca_base_component_find.c:(.text+0x6af): undefined reference to `lt_dlclose'
<br>
mca_base_component_find.c:(.text+0x6d6): undefined reference to `lt_dlerror'
<br>
mca_base_component_find.c:(.text+0x744): undefined reference to `lt_dlerror'
<br>
/home/gursky/progs/openmpi-static/usr/lib/libopen-pal.a(mca_base_component_find.o):
<br>
In function `mca_base_component_find':
<br>
mca_base_component_find.c:(.text+0x1196): undefined reference to
<br>
`lt_dlforeachfile'
<br>
mca_base_component_find.c:(.text+0x11e2): undefined reference to
<br>
`lt_dlforeachfile'
<br>
mca_base_component_find.c:(.text+0x1603): undefined reference to
<br>
`lt_dlforeachfile'
<br>
/home/gursky/progs/openmpi-static/usr/lib/libopen-pal.a(mca_base_component_repository.o):
<br>
In function `ri_destructor':
<br>
mca_base_component_repository.c:(.text+0xd3): undefined reference to
<br>
`lt_dlclose'
<br>
/home/gursky/progs/openmpi-static/usr/lib/libopen-pal.a(mca_base_component_repository.o):
<br>
In function `mca_base_component_repository_init':
<br>
mca_base_component_repository.c:(.text+0x291): undefined reference to
<br>
`lt_dlinit'
<br>
mca_base_component_repository.c:(.text+0x2a3): undefined reference to
<br>
`lt_dladvise_init'
<br>
mca_base_component_repository.c:(.text+0x2b5): undefined reference to
<br>
`lt_dladvise_ext'
<br>
mca_base_component_repository.c:(.text+0x2c7): undefined reference to
<br>
`lt_dladvise_global'
<br>
/home/gursky/progs/openmpi-static/usr/lib/libopen-pal.a(mca_base_component_repository.o):
<br>
In function `mca_base_component_repository_finalize':
<br>
mca_base_component_repository.c:(.text+0x7d2): undefined reference to
<br>
`lt_dladvise_destroy'
<br>
mca_base_component_repository.c:(.text+0x7e6): undefined reference to
<br>
`lt_dlexit'
<br>
/usr/lib/gcc/x86_64-linux-gnu/4.9/../../../../lib/libibverbs.a(src_libibverbs_la-init.o):
<br>
In function `load_driver':
<br>
(.text+0x387): undefined reference to `dlopen'
<br>
/usr/lib/gcc/x86_64-linux-gnu/4.9/../../../../lib/libibverbs.a(src_libibverbs_la-init.o):
<br>
In function `load_driver':
<br>
(.text+0x3c1): undefined reference to `dlerror'
<br>
/usr/lib/gcc/x86_64-linux-gnu/4.9/../../../../lib/libibverbs.a(src_libibverbs_la-init.o):
<br>
In function `ibverbs_init':
<br>
(.text+0xc2f): undefined reference to `dlopen'
<br>
/usr/lib/gcc/x86_64-linux-gnu/4.9/../../../../lib/libibverbs.a(src_libibverbs_la-init.o):
<br>
In function `ibverbs_init':
<br>
(.text+0xc40): undefined reference to `dlclose'
<br>
/usr/lib/gcc/x86_64-linux-gnu/4.9/../../../x86_64-linux-gnu/libhwloc.a(components.o):
<br>
In function `hwloc__dlforeach_cb':
<br>
(.text+0x77): undefined reference to `lt_dlopenext'
<br>
/usr/lib/gcc/x86_64-linux-gnu/4.9/../../../x86_64-linux-gnu/libhwloc.a(components.o):
<br>
In function `hwloc__dlforeach_cb':
<br>
(.text+0x91): undefined reference to `lt_dlerror'
<br>
/usr/lib/gcc/x86_64-linux-gnu/4.9/../../../x86_64-linux-gnu/libhwloc.a(components.o):
<br>
In function `hwloc__dlforeach_cb':
<br>
(.text+0x107): undefined reference to `lt_dlsym'
<br>
/usr/lib/gcc/x86_64-linux-gnu/4.9/../../../x86_64-linux-gnu/libhwloc.a(components.o):
<br>
In function `hwloc__dlforeach_cb':
<br>
(.text+0x3d5): undefined reference to `lt_dlclose'
<br>
/usr/lib/gcc/x86_64-linux-gnu/4.9/../../../x86_64-linux-gnu/libhwloc.a(components.o):
<br>
In function `hwloc_plugins_exit':
<br>
(.text+0x446): undefined reference to `lt_dlclose'
<br>
/usr/lib/gcc/x86_64-linux-gnu/4.9/../../../x86_64-linux-gnu/libhwloc.a(components.o):
<br>
In function `hwloc_plugins_exit':
<br>
(.text+0x490): undefined reference to `lt_dlexit'
<br>
/usr/lib/gcc/x86_64-linux-gnu/4.9/../../../x86_64-linux-gnu/libhwloc.a(components.o):
<br>
In function `hwloc_plugins_init':
<br>
(.text+0x4da): undefined reference to `lt_dlinit'
<br>
/usr/lib/gcc/x86_64-linux-gnu/4.9/../../../x86_64-linux-gnu/libhwloc.a(components.o):
<br>
In function `hwloc_plugins_init':
<br>
(.text+0x556): undefined reference to `lt_dlforeachfile'
<br>
/usr/lib/gcc/x86_64-linux-gnu/4.9/../../../x86_64-linux-gnu/libhwloc.a(topology-linux.o):
<br>
In function `hwloc_linux_set_area_membind':
<br>
(.text+0x1ce2): undefined reference to `mbind'
<br>
/usr/lib/gcc/x86_64-linux-gnu/4.9/../../../x86_64-linux-gnu/libhwloc.a(topology-linux.o):
<br>
In function `hwloc_linux_set_area_membind':
<br>
(.text+0x1d52): undefined reference to `mbind'
<br>
/usr/lib/gcc/x86_64-linux-gnu/4.9/../../../x86_64-linux-gnu/libhwloc.a(topology-linux.o):
<br>
In function `hwloc_linux_set_thisthread_membind':
<br>
(.text+0x1e72): undefined reference to `set_mempolicy'
<br>
/usr/lib/gcc/x86_64-linux-gnu/4.9/../../../x86_64-linux-gnu/libhwloc.a(topology-linux.o):
<br>
In function `hwloc_linux_set_thisthread_membind':
<br>
(.text+0x1f08): undefined reference to `migrate_pages'
<br>
/usr/lib/gcc/x86_64-linux-gnu/4.9/../../../x86_64-linux-gnu/libhwloc.a(topology-linux.o):
<br>
In function `hwloc_linux_set_thisthread_membind':
<br>
(.text+0x1f4b): undefined reference to `set_mempolicy'
<br>
/usr/lib/gcc/x86_64-linux-gnu/4.9/../../../x86_64-linux-gnu/libhwloc.a(topology-linux.o):
<br>
In function `hwloc_linux_find_kernel_max_numnodes':
<br>
(.text+0x1fef): undefined reference to `get_mempolicy'
<br>
/usr/lib/gcc/x86_64-linux-gnu/4.9/../../../x86_64-linux-gnu/libhwloc.a(topology-linux.o):
<br>
In function `hwloc_linux_get_thisthread_membind':
<br>
(.text+0x210b): undefined reference to `get_mempolicy'
<br>
/usr/lib/gcc/x86_64-linux-gnu/4.9/../../../x86_64-linux-gnu/libhwloc.a(topology-linux.o):
<br>
In function `hwloc_linux_get_area_membind':
<br>
(.text+0x2282): undefined reference to `get_mempolicy'
<br>
collect2: error: ld returned 1 exit status
<br>
gursky_at_hpprobook:~/projects/openmpi/test$
<br>
$
<br>
<p>===============================
<br>
<p>$ MP=/home/gursky/progs/openmpi-static/usr PATH=$MP/bin:$PATH
<br>
LD_LIBRARY_PATH=$MP/lib mpicc -show
<br>
gcc -I/home/gursky/progs/openmpi-static/usr/include
<br>
-I/home/gursky/progs/openmpi-static/usr/include/openmpi -pthread
<br>
-Wl,-rpath -Wl,/home/gursky/progs/openmpi-static/usr/lib
<br>
-Wl,--enable-new-dtags -L/home/gursky/progs/openmpi-static/usr/lib
<br>
-lmpi -lopen-rte -lopen-pal -levent -levent_pthreads -ldl -libverbs
<br>
-lrt -lnsl -lutil -lm -lhwloc
<br>
$
<br>
<p>===============================
<br>
<p>- Using output of mpicc still gives another result:
<br>
<p>$ MP=/home/gursky/progs/openmpi-static/usr PATH=$MP/bin:$PATH
<br>
LD_LIBRARY_PATH=$MP/lib gcc
<br>
-I/home/gursky/progs/openmpi-static/usr/include
<br>
-I/home/gursky/progs/openmpi-static/usr/include/openmpi -pthread
<br>
-Wl,-rpath -Wl,/home/gursky/progs/openmpi-static/usr/lib
<br>
-Wl,--enable-new-dtags -L/home/gursky/progs/openmpi-static/usr/lib
<br>
-lmpi -lopen-rte -lopen-pal -levent -levent_pthreads -ldl -libverbs
<br>
-lrt -lnsl -lutil -lm -lhwloc -static -o simple_spawn simple_spawn.o
<br>
simple_spawn.o: In function `main':
<br>
simple_spawn.c:(.text+0x42): undefined reference to `MPI_Init'
<br>
simple_spawn.c:(.text+0x4e): undefined reference to `ompi_mpi_comm_world'
<br>
simple_spawn.c:(.text+0x53): undefined reference to `MPI_Comm_rank'
<br>
simple_spawn.c:(.text+0x73): undefined reference to `ompi_mpi_comm_world'
<br>
simple_spawn.c:(.text+0x78): undefined reference to `MPI_Comm_size'
<br>
simple_spawn.c:(.text+0x84): undefined reference to `MPI_Comm_get_parent'
<br>
simple_spawn.c:(.text+0x8e): undefined reference to `ompi_mpi_comm_null'
<br>
simple_spawn.c:(.text+0xca): undefined reference to `ompi_mpi_comm_world'
<br>
simple_spawn.c:(.text+0xd5): undefined reference to `ompi_mpi_info_null'
<br>
simple_spawn.c:(.text+0xe7): undefined reference to `MPI_Comm_spawn'
<br>
simple_spawn.c:(.text+0x143): undefined reference to `ompi_mpi_int'
<br>
simple_spawn.c:(.text+0x150): undefined reference to `MPI_Send'
<br>
simple_spawn.c:(.text+0x15c): undefined reference to `MPI_Comm_disconnect'
<br>
simple_spawn.c:(.text+0x177): undefined reference to `ompi_mpi_comm_world'
<br>
simple_spawn.c:(.text+0x17c): undefined reference to `MPI_Comm_rank'
<br>
simple_spawn.c:(.text+0x188): undefined reference to `ompi_mpi_comm_world'
<br>
simple_spawn.c:(.text+0x18d): undefined reference to `MPI_Comm_size'
<br>
simple_spawn.c:(.text+0x1fd): undefined reference to `ompi_mpi_int'
<br>
simple_spawn.c:(.text+0x20a): undefined reference to `MPI_Recv'
<br>
simple_spawn.c:(.text+0x231): undefined reference to `MPI_Comm_disconnect'
<br>
simple_spawn.c:(.text+0x24a): undefined reference to `MPI_Finalize'
<br>
collect2: error: ld returned 1 exit status
<br>
$
<br>
<p>===============================
<br>
<p>$ gcc -static -DNDEBUG -pthread -Wall -g -o simple_spawn
<br>
simple_spawn.o  /home/gursky/progs/openmpi-static/usr/lib/libmpi.a
<br>
-libverbs /home/gursky/progs/openmpi-static/usr/lib/libopen-rte.a
<br>
/home/gursky/progs/openmpi-static/usr/lib/libopen-pal.a -lrt -lnsl
<br>
-lutil -lm -lhwloc -lnuma -levent -levent_pthreads -lltdl -ldl
<br>
/usr/lib/gcc/x86_64-linux-gnu/4.9/../../../../lib/libibverbs.a(src_libibverbs_la-init.o):
<br>
In function `load_driver':
<br>
(.text+0x387): warning: Using 'dlopen' in statically linked
<br>
applications requires at runtime the shared libraries from the glibc
<br>
version used for linking
<br>
/home/gursky/progs/openmpi-static/usr/lib/libopen-rte.a(session_dir.o):
<br>
In function `orte_session_dir_get_name':
<br>
session_dir.c:(.text+0x1b1): warning: Using 'getpwuid' in statically
<br>
linked applications requires at runtime the shared libraries from the
<br>
glibc version used for linking
<br>
/home/gursky/progs/openmpi-static/usr/lib/libopen-pal.a(if.o): In
<br>
function `opal_ifaddrtoname':
<br>
if.c:(.text+0x21a): warning: Using 'getaddrinfo' in statically linked
<br>
applications requires at runtime the shared libraries from the glibc
<br>
version used for linking
<br>
/home/gursky/progs/openmpi-static/usr/lib/libopen-rte.a(ras_slurm_module.o):
<br>
In function `init':
<br>
ras_slurm_module.c:(.text+0x5a8): warning: Using 'gethostbyname' in
<br>
statically linked applications requires at runtime the shared
<br>
libraries from the glibc version used for linking
<br>
/usr/lib/gcc/x86_64-linux-gnu/4.9/../../../x86_64-linux-gnu/libevent.a(evutil.o):
<br>
In function `evutil_getaddrinfo_common':
<br>
(.text+0x14cf): warning: Using 'getprotobynumber' in statically linked
<br>
applications requires at runtime the shared libraries from the glibc
<br>
version used for linking
<br>
$
<br>
<p>===============================
<br>
<p>$ ldd ./simple_spawn
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;not a dynamic executable
<br>
$ ./simple_spawn
<br>
[pid 2805] starting up!
<br>
--------------------------------------------------------------------------
<br>
Open MPI was unable to obtain the username in order to create a path
<br>
for its required temporary directories.  This type of error is usually
<br>
caused by a transient failure of network-based authentication services
<br>
(e.g., LDAP or NIS failure due to network congestion), but can also be
<br>
an indication of system misconfiguration.
<br>
<p>Please consult your system administrator about these issues and try
<br>
again.
<br>
--------------------------------------------------------------------------
<br>
0 completed MPI_Init
<br>
Parent [pid 2805] about to spawn!
<br>
[hpprobook:02805] [[52016,1],0] FORKING HNP: orted --hnp --set-sid
<br>
--report-uri 16 --singleton-died-pipe 17 -mca state_novm_select 1 -mca
<br>
ess_base_jobid 3408920576
<br>
[pid 2809] starting up!
<br>
[pid 2810] starting up!
<br>
[pid 2811] starting up!
<br>
[hpprobook:02809] [[52016,2],0] ORTE_ERROR_LOG: Data for specified key
<br>
not found in file runtime/orte_globals.c at line 504
<br>
-------------------------------------------------------
<br>
Child job 2 terminated normally, but 1 process returned
<br>
a non-zero exit code.. Per user-direction, the job has been aborted.
<br>
-------------------------------------------------------
<br>
[hpprobook:02805] 1 more process has sent help message
<br>
help-orte-runtime.txt / orte:session:dir:nopwname
<br>
[hpprobook:02805] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to
<br>
see all help / error messages
<br>
<p><p><p>^C
<br>
$ --------------------------------------------------------------------------
<br>
(null) detected that one or more processes exited with non-zero
<br>
status, thus causing
<br>
the job to be terminated. The first process to do so was:
<br>
<p>&nbsp;&nbsp;Process name: [[52016,2],0]
<br>
&nbsp;&nbsp;Exit code:    64
<br>
--------------------------------------------------------------------------
<br>
<p>- also doesn't work
<br>
<p>=======================================================
<br>
<p><p>Thanks,
<br>
Andrey
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15132.php">Ralph Castain: "Re: [OMPI devel] Bug report: using static build"</a>
<li><strong>Previous message:</strong> <a href="15130.php">Mike Dubman: "Re: [OMPI devel] hwloc and pmi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15132.php">Ralph Castain: "Re: [OMPI devel] Bug report: using static build"</a>
<li><strong>Reply:</strong> <a href="15132.php">Ralph Castain: "Re: [OMPI devel] Bug report: using static build"</a>
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
