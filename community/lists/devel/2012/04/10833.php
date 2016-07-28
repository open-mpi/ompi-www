<?
$subject_val = "Re: [OMPI devel] OpenMPI and R";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  5 19:59:09 2012" -->
<!-- isoreceived="20120405235909" -->
<!-- sent="Thu, 5 Apr 2012 19:59:04 -0400" -->
<!-- isosent="20120405235904" -->
<!-- name="Benedict Holland" -->
<!-- email="benedict.m.holland_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenMPI and R" -->
<!-- id="CAD+mzozOEbfVmcCrDgATKA8YLRKMv3LfM0OVkACkzo4fOyr6Vw_at_mail.gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAMD57oeovp6e5kp7htDnf_c3zmzKKdKJYqM5Ggov17sZ1peh6Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OpenMPI and R<br>
<strong>From:</strong> Benedict Holland (<em>benedict.m.holland_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-05 19:59:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10834.php">Alex Margolin: "[OMPI devel] Using opal_convertor_t for In-place send buffers in a BTL component"</a>
<li><strong>Previous message:</strong> <a href="10832.php">Jeffrey Squyres: "Re: [OMPI devel] RFC: New Fortran bindings"</a>
<li><strong>In reply to:</strong> <a href="10805.php">Ralph Castain: "Re: [OMPI devel] OpenMPI and R"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10835.php">Benedict Holland: "Re: [OMPI devel] OpenMPI and R"</a>
<li><strong>Reply:</strong> <a href="10835.php">Benedict Holland: "Re: [OMPI devel] OpenMPI and R"</a>
<li><strong>Reply:</strong> <a href="10837.php">TERRY DONTJE: "Re: [OMPI devel] OpenMPI and R"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So I am now back on this full time as I need this to work. OpenMPI 1.4.3 is
<br>
deadlocking with Rmpi and I need the latest code. I still get the exact
<br>
same problem. I configured it with a --prefix=/usr to get it to install
<br>
everything in default directories and added /usr/lib/openmpi to my
<br>
ldconfig. I don't have a LD_LIBRARY_PATH global variable on ubuntu 11.10.
<br>
<p>ldconfig -p |grep mpi
<br>
libvt-mpi.so.0 (libc6,x86-64) =&gt; /usr/lib/libvt-mpi.so.0
<br>
libvt-mpi.so (libc6,x86-64) =&gt; /usr/lib/libvt-mpi.so
<br>
libvt-mpi-unify.so.0 (libc6,x86-64) =&gt; /usr/lib/libvt-mpi-unify.so.0
<br>
libvt-mpi-unify.so (libc6,x86-64) =&gt; /usr/lib/libvt-mpi-unify.so
<br>
libopenmpi_malloc.so.0 (libc6,x86-64) =&gt; /usr/lib/libopenmpi_malloc.so.0
<br>
libompitrace.so.0 (libc6,x86-64) =&gt; /usr/lib/libompitrace.so.0
<br>
libompitrace.so (libc6,x86-64) =&gt; /usr/lib/libompitrace.so
<br>
libompi_dbg_msgq.so (libc6,x86-64) =&gt; /usr/lib/openmpi/libompi_dbg_msgq.so
<br>
libmpi_f90.so.1 (libc6,x86-64) =&gt; /usr/lib/libmpi_f90.so.1
<br>
libmpi_f90.so.0 (libc6,x86-64) =&gt; /usr/lib/libmpi_f90.so.0
<br>
libmpi_f90.so (libc6,x86-64) =&gt; /usr/lib/libmpi_f90.so
<br>
libmpi_f77.so.1 (libc6,x86-64) =&gt; /usr/lib/libmpi_f77.so.1
<br>
libmpi_f77.so.0 (libc6,x86-64) =&gt; /usr/lib/libmpi_f77.so.0
<br>
libmpi_f77.so (libc6,x86-64) =&gt; /usr/lib/libmpi_f77.so
<br>
libmpi_cxx.so.1 (libc6,x86-64) =&gt; /usr/lib/libmpi_cxx.so.1
<br>
libmpi_cxx.so.0 (libc6,x86-64) =&gt; /usr/lib/libmpi_cxx.so.0
<br>
libmpi_cxx.so (libc6,x86-64) =&gt; /usr/lib/libmpi_cxx.so
<br>
libmpi.so.1 (libc6,x86-64) =&gt; /usr/lib/libmpi.so.1
<br>
libmpi.so.0 (libc6,x86-64) =&gt; /usr/lib/libmpi.so.0
<br>
libmpi.so (libc6,x86-64) =&gt; /usr/lib/libmpi.so
<br>
libexempi.so.3 (libc6,x86-64) =&gt; /usr/lib/libexempi.so.3
<br>
libcompizconfig.so.0 (libc6,x86-64) =&gt; /usr/lib/libcompizconfig.so.0
<br>
<p>Compiling Rmpi from inside R gives me:
<br>
<p>* installing *source* package &#145;Rmpi&#146; ...
<br>
checking for gcc... gcc -std=gnu99
<br>
checking for C compiler default output file name... a.out
<br>
checking whether the C compiler works... yes
<br>
checking whether we are cross compiling... no
<br>
checking for suffix of executables...
<br>
checking for suffix of object files... o
<br>
checking whether we are using the GNU C compiler... yes
<br>
checking whether gcc -std=gnu99 accepts -g... yes
<br>
checking for gcc -std=gnu99 option to accept ISO C89... none needed
<br>
I am here /usr and it is OpenMPI
<br>
Trying to find mpi.h ...
<br>
Found in /usr/include
<br>
Trying to find libmpi.so or libmpich.a ...
<br>
Found libmpi in /usr/lib
<br>
checking for openpty in -lutil... yes
<br>
checking for main in -lpthread... yes
<br>
configure: creating ./config.status
<br>
config.status: creating src/Makevars
<br>
** Creating default NAMESPACE file
<br>
** libs
<br>
gcc -std=gnu99 -I/usr/share/R/include -DNDEBUG -DPACKAGE_NAME=\&quot;\&quot;
<br>
-DPACKAGE_TARNAME=\&quot;\&quot; -DPACKAGE_VERSION=\&quot;\&quot; -DPACKAGE_STRING=\&quot;\&quot;
<br>
-DPACKAGE_BUGREPORT=\&quot;\&quot; -I/usr/include  -DMPI2 -DOPENMPI     -fpic  -O3
<br>
-pipe  -g  -c RegQuery.c -o RegQuery.o
<br>
gcc -std=gnu99 -I/usr/share/R/include -DNDEBUG -DPACKAGE_NAME=\&quot;\&quot;
<br>
-DPACKAGE_TARNAME=\&quot;\&quot; -DPACKAGE_VERSION=\&quot;\&quot; -DPACKAGE_STRING=\&quot;\&quot;
<br>
-DPACKAGE_BUGREPORT=\&quot;\&quot; -I/usr/include  -DMPI2 -DOPENMPI     -fpic  -O3
<br>
-pipe  -g  -c Rmpi.c -o Rmpi.o
<br>
gcc -std=gnu99 -I/usr/share/R/include -DNDEBUG -DPACKAGE_NAME=\&quot;\&quot;
<br>
-DPACKAGE_TARNAME=\&quot;\&quot; -DPACKAGE_VERSION=\&quot;\&quot; -DPACKAGE_STRING=\&quot;\&quot;
<br>
-DPACKAGE_BUGREPORT=\&quot;\&quot; -I/usr/include  -DMPI2 -DOPENMPI     -fpic  -O3
<br>
-pipe  -g  -c conversion.c -o conversion.o
<br>
gcc -std=gnu99 -I/usr/share/R/include -DNDEBUG -DPACKAGE_NAME=\&quot;\&quot;
<br>
-DPACKAGE_TARNAME=\&quot;\&quot; -DPACKAGE_VERSION=\&quot;\&quot; -DPACKAGE_STRING=\&quot;\&quot;
<br>
-DPACKAGE_BUGREPORT=\&quot;\&quot; -I/usr/include  -DMPI2 -DOPENMPI     -fpic  -O3
<br>
-pipe  -g  -c internal.c -o internal.o
<br>
gcc -std=gnu99 -shared -o Rmpi.so RegQuery.o Rmpi.o conversion.o internal.o
<br>
-L/usr/lib -lmpi -lutil -lpthread -L/usr/lib/R/lib -lR
<br>
installing to /usr/local/lib/R/site-library/Rmpi/libs
<br>
** R
<br>
** demo
<br>
** inst
<br>
** preparing package for lazy loading
<br>
** help
<br>
*** installing help indices
<br>
** building package indices
<br>
** testing if installed package can be loaded
<br>
[ben-Inspiron-1764:18216] mca: base: component_find: unable to open
<br>
/usr/lib/openmpi/mca_paffinity_hwloc:
<br>
/usr/lib/openmpi/mca_paffinity_hwloc.so: undefined symbol:
<br>
opal_hwloc_topology (ignored)
<br>
[ben-Inspiron-1764:18216] mca: base: component_find: unable to open
<br>
/usr/lib/openmpi/mca_shmem_posix: /usr/lib/openmpi/mca_shmem_posix.so:
<br>
undefined symbol: opal_shmem_base_output (ignored)
<br>
[ben-Inspiron-1764:18216] mca: base: component_find: unable to open
<br>
/usr/lib/openmpi/mca_ess_hnp: /usr/lib/openmpi/mca_ess_hnp.so: undefined
<br>
symbol: orte_timing_output (ignored)
<br>
[ben-Inspiron-1764:18216] mca: base: component_find: unable to open
<br>
/usr/lib/openmpi/mca_ess_singleton: /usr/lib/openmpi/mca_ess_singleton.so:
<br>
undefined symbol: orte_local_cpu_model (ignored)
<br>
[ben-Inspiron-1764:18216] mca: base: component_find: unable to open
<br>
/usr/lib/openmpi/mca_ess_slurm: /usr/lib/openmpi/mca_ess_slurm.so:
<br>
undefined symbol: orte_orted_exit_with_barrier (ignored)
<br>
[ben-Inspiron-1764:18216] mca: base: component_find: unable to open
<br>
/usr/lib/openmpi/mca_ess_slurmd: /usr/lib/openmpi/mca_ess_slurmd.so:
<br>
undefined symbol: orte_pmap_t_class (ignored)
<br>
[ben-Inspiron-1764:18216] [[INVALID],INVALID] ORTE_ERROR_LOG: Unknown
<br>
error: -1 in file ../../../orte/runtime/orte_globals.c at line 176
<br>
input in flex scanner failed
<br>
ERROR: loading failed
<br>
* removing &#145;/usr/local/lib/R/site-library/Rmpi&#146;
<br>
* restoring previous &#145;/usr/local/lib/R/site-library/Rmpi&#146;
<br>
<p><p>Notice that the libRmpi actually does compile but can't be installed. Other
<br>
than the --prefix option I added nothing new to the ./configure script. It
<br>
now knows by default where everything should be and I think I have every
<br>
required package installed. Anyone have any ideas? Do you need any other
<br>
files attached?
<br>
<p>Thanks,
<br>
~Ben
<br>
<p><p>On Tue, Apr 3, 2012 at 1:39 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Looks like you didn't set your LD_LIBRARY_PATH to point to where OMPI was
</span><br>
<span class="quotelev1">&gt; installed, so the individual component libs couldn't be loaded. From the
</span><br>
<span class="quotelev1">&gt; below, it looks like you need to add /usr/local to your path.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Apr 2, 2012 at 7:26 PM, Benedict Holland &lt;
</span><br>
<span class="quotelev1">&gt; benedict.m.holland_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi All,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am on ubuntu 11.10 and the only package that they have for OpenMPI is
</span><br>
<span class="quotelev2">&gt;&gt; 1.4.3 and I noticed the latest was 1.5.5 and I decided to try to use it to
</span><br>
<span class="quotelev2">&gt;&gt; get the Rmpi R package compiled against it. I failed. My R version is 2.15,
</span><br>
<span class="quotelev2">&gt;&gt; the OpenMPI is 1.5.5. I compiled it and installed it but when I tried to
</span><br>
<span class="quotelev2">&gt;&gt; compile Rmpi I get the result below. I can try to run this stuff again but
</span><br>
<span class="quotelev2">&gt;&gt; I had to use the base packages because they worked and I need to get some
</span><br>
<span class="quotelev2">&gt;&gt; stuff done. I can always recompile though, install and run the Rmpi package
</span><br>
<span class="quotelev2">&gt;&gt; against the installed OpenMPI stuff. Any ideas what I need to do? Also, is
</span><br>
<span class="quotelev2">&gt;&gt; there an Ubuntu or Debian package available with the latest and greatest
</span><br>
<span class="quotelev2">&gt;&gt; and if not, how can I make one?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; ~Ben
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; checking for gcc... gcc -std=gnu99
</span><br>
<span class="quotelev2">&gt;&gt; checking for C compiler default output file name... a.out
</span><br>
<span class="quotelev2">&gt;&gt; checking whether the C compiler works... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking whether we are cross compiling... no
</span><br>
<span class="quotelev2">&gt;&gt; checking for suffix of executables...
</span><br>
<span class="quotelev2">&gt;&gt; checking for suffix of object files... o
</span><br>
<span class="quotelev2">&gt;&gt; checking whether we are using the GNU C compiler... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking whether gcc -std=gnu99 accepts -g... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking for gcc -std=gnu99 option to accept ISO C89... none needed
</span><br>
<span class="quotelev2">&gt;&gt; I am here /usr/local and it is OpenMPI
</span><br>
<span class="quotelev2">&gt;&gt; Trying to find mpi.h ...
</span><br>
<span class="quotelev2">&gt;&gt; Found in /usr/local/include
</span><br>
<span class="quotelev2">&gt;&gt; Trying to find libmpi.so or libmpich.a ...
</span><br>
<span class="quotelev2">&gt;&gt; Found libmpi in /usr/local/lib
</span><br>
<span class="quotelev2">&gt;&gt; checking for openpty in -lutil... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking for main in -lpthread... yes
</span><br>
<span class="quotelev2">&gt;&gt; configure: creating ./config.status
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating src/Makevars
</span><br>
<span class="quotelev2">&gt;&gt; ** Creating default NAMESPACE file
</span><br>
<span class="quotelev2">&gt;&gt; ** libs
</span><br>
<span class="quotelev2">&gt;&gt; gcc -std=gnu99 -I/usr/share/R/include -DNDEBUG -DPACKAGE_NAME=\&quot;\&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -DPACKAGE_TARNAME=\&quot;\&quot; -DPACKAGE_VERSION=\&quot;\&quot; -DPACKAGE_STRING=\&quot;\&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -DPACKAGE_BUGREPORT=\&quot;\&quot; -I/usr/local/include  -DMPI2 -DOPENMPI     -fpic
</span><br>
<span class="quotelev2">&gt;&gt;  -O3 -pipe  -g  -c RegQuery.c -o RegQuery.o
</span><br>
<span class="quotelev2">&gt;&gt; gcc -std=gnu99 -I/usr/share/R/include -DNDEBUG -DPACKAGE_NAME=\&quot;\&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -DPACKAGE_TARNAME=\&quot;\&quot; -DPACKAGE_VERSION=\&quot;\&quot; -DPACKAGE_STRING=\&quot;\&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -DPACKAGE_BUGREPORT=\&quot;\&quot; -I/usr/local/include  -DMPI2 -DOPENMPI     -fpic
</span><br>
<span class="quotelev2">&gt;&gt;  -O3 -pipe  -g  -c Rmpi.c -o Rmpi.o
</span><br>
<span class="quotelev2">&gt;&gt; gcc -std=gnu99 -I/usr/share/R/include -DNDEBUG -DPACKAGE_NAME=\&quot;\&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -DPACKAGE_TARNAME=\&quot;\&quot; -DPACKAGE_VERSION=\&quot;\&quot; -DPACKAGE_STRING=\&quot;\&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -DPACKAGE_BUGREPORT=\&quot;\&quot; -I/usr/local/include  -DMPI2 -DOPENMPI     -fpic
</span><br>
<span class="quotelev2">&gt;&gt;  -O3 -pipe  -g  -c conversion.c -o conversion.o
</span><br>
<span class="quotelev2">&gt;&gt; gcc -std=gnu99 -I/usr/share/R/include -DNDEBUG -DPACKAGE_NAME=\&quot;\&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -DPACKAGE_TARNAME=\&quot;\&quot; -DPACKAGE_VERSION=\&quot;\&quot; -DPACKAGE_STRING=\&quot;\&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -DPACKAGE_BUGREPORT=\&quot;\&quot; -I/usr/local/include  -DMPI2 -DOPENMPI     -fpic
</span><br>
<span class="quotelev2">&gt;&gt;  -O3 -pipe  -g  -c internal.c -o internal.o
</span><br>
<span class="quotelev2">&gt;&gt; gcc -std=gnu99 -shared -o Rmpi.so RegQuery.o Rmpi.o conversion.o
</span><br>
<span class="quotelev2">&gt;&gt; internal.o -L/usr/local/lib -lmpi -lutil -lpthread -L/usr/lib/R/lib -lR
</span><br>
<span class="quotelev2">&gt;&gt; installing to /usr/local/lib/R/site-library/Rmpi/libs
</span><br>
<span class="quotelev2">&gt;&gt; ** R
</span><br>
<span class="quotelev2">&gt;&gt; ** demo
</span><br>
<span class="quotelev2">&gt;&gt; ** inst
</span><br>
<span class="quotelev2">&gt;&gt; ** preparing package for lazy loading
</span><br>
<span class="quotelev2">&gt;&gt; ** help
</span><br>
<span class="quotelev2">&gt;&gt; *** installing help indices
</span><br>
<span class="quotelev2">&gt;&gt; ** building package indices
</span><br>
<span class="quotelev2">&gt;&gt; ** testing if installed package can be loaded
</span><br>
<span class="quotelev2">&gt;&gt; [ben-Inspiron-1764:26048] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/lib/openmpi/mca_paffinity_hwloc:
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/lib/openmpi/mca_paffinity_hwloc.so: undefined symbol:
</span><br>
<span class="quotelev2">&gt;&gt; opal_hwloc_topology (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [ben-Inspiron-1764:26048] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/lib/openmpi/mca_carto_auto_detect:
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/lib/openmpi/mca_carto_auto_detect.so: undefined symbol:
</span><br>
<span class="quotelev2">&gt;&gt; opal_carto_base_graph_get_host_graph_fn (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [ben-Inspiron-1764:26048] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/lib/openmpi/mca_carto_file:
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/lib/openmpi/mca_carto_file.so: undefined symbol:
</span><br>
<span class="quotelev2">&gt;&gt; opal_carto_base_graph_get_host_graph_fn (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [ben-Inspiron-1764:26048] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/lib/openmpi/mca_shmem_mmap:
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/lib/openmpi/mca_shmem_mmap.so: undefined symbol: opal_show_help
</span><br>
<span class="quotelev2">&gt;&gt; (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [ben-Inspiron-1764:26048] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/lib/openmpi/mca_shmem_posix:
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/lib/openmpi/mca_shmem_posix.so: undefined symbol:
</span><br>
<span class="quotelev2">&gt;&gt; opal_shmem_base_output (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [ben-Inspiron-1764:26048] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/lib/openmpi/mca_shmem_sysv:
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/lib/openmpi/mca_shmem_sysv.so: undefined symbol: opal_show_help
</span><br>
<span class="quotelev2">&gt;&gt; (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; It looks like opal_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev2">&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt;&gt; fail during opal_init; some of which are due to configuration or
</span><br>
<span class="quotelev2">&gt;&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev2">&gt;&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   opal_shmem_base_select failed
</span><br>
<span class="quotelev2">&gt;&gt;   --&gt; Returned value -1 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [ben-Inspiron-1764:26048] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in
</span><br>
<span class="quotelev2">&gt;&gt; file runtime/orte_init.c at line 79
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev2">&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt;&gt; fail during MPI_INIT; some of which are due to configuration or
</span><br>
<span class="quotelev2">&gt;&gt; environment
</span><br>
<span class="quotelev2">&gt;&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev2">&gt;&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev2">&gt;&gt; developer):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   ompi_mpi_init: orte_init failed
</span><br>
<span class="quotelev2">&gt;&gt;   --&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev2">&gt;&gt; *** on a NULL communicator
</span><br>
<span class="quotelev2">&gt;&gt; *** MPI_ERRORS_ARE_FATAL: your MPI job will now abort
</span><br>
<span class="quotelev2">&gt;&gt; [ben-Inspiron-1764:26048] Local abort before MPI_INIT completed
</span><br>
<span class="quotelev2">&gt;&gt; successfully; not able to aggregate error messages, and not able to
</span><br>
<span class="quotelev2">&gt;&gt; guarantee that all other processes were killed!
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10833/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10834.php">Alex Margolin: "[OMPI devel] Using opal_convertor_t for In-place send buffers in a BTL component"</a>
<li><strong>Previous message:</strong> <a href="10832.php">Jeffrey Squyres: "Re: [OMPI devel] RFC: New Fortran bindings"</a>
<li><strong>In reply to:</strong> <a href="10805.php">Ralph Castain: "Re: [OMPI devel] OpenMPI and R"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10835.php">Benedict Holland: "Re: [OMPI devel] OpenMPI and R"</a>
<li><strong>Reply:</strong> <a href="10835.php">Benedict Holland: "Re: [OMPI devel] OpenMPI and R"</a>
<li><strong>Reply:</strong> <a href="10837.php">TERRY DONTJE: "Re: [OMPI devel] OpenMPI and R"</a>
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
