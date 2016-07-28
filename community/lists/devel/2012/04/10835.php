<?
$subject_val = "Re: [OMPI devel] OpenMPI and R";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  5 21:07:36 2012" -->
<!-- isoreceived="20120406010736" -->
<!-- sent="Thu, 5 Apr 2012 21:07:31 -0400" -->
<!-- isosent="20120406010731" -->
<!-- name="Benedict Holland" -->
<!-- email="benedict.m.holland_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenMPI and R" -->
<!-- id="CAD+mzows7kJw_z3aB8QKbfkFKJ+ZjkmaVVPU_Kj2ZVvwXP73Cg_at_mail.gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAD+mzozOEbfVmcCrDgATKA8YLRKMv3LfM0OVkACkzo4fOyr6Vw_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2012-04-05 21:07:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10836.php">George Bosilca: "Re: [OMPI devel] Using opal_convertor_t for In-place send buffers in a BTL component"</a>
<li><strong>Previous message:</strong> <a href="10834.php">Alex Margolin: "[OMPI devel] Using opal_convertor_t for In-place send buffers in a BTL component"</a>
<li><strong>In reply to:</strong> <a href="10833.php">Benedict Holland: "Re: [OMPI devel] OpenMPI and R"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10840.php">Jeffrey Squyres: "Re: [OMPI devel] OpenMPI and R"</a>
<li><strong>Reply:</strong> <a href="10840.php">Jeffrey Squyres: "Re: [OMPI devel] OpenMPI and R"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Oh how interesting and I hope this helps someone. Following another link, I
<br>
had to use:
<br>
<p>./configure --prefix /usr --enable-shared --enable-static
<br>
<p>when compiling this for Rmpi. Just curious, why isn't --enable-static a
<br>
default option?
<br>
<p>~Ben
<br>
<p>On Thu, Apr 5, 2012 at 7:59 PM, Benedict Holland &lt;
<br>
benedict.m.holland_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; So I am now back on this full time as I need this to work. OpenMPI 1.4.3
</span><br>
<span class="quotelev1">&gt; is deadlocking with Rmpi and I need the latest code. I still get the exact
</span><br>
<span class="quotelev1">&gt; same problem. I configured it with a --prefix=/usr to get it to install
</span><br>
<span class="quotelev1">&gt; everything in default directories and added /usr/lib/openmpi to my
</span><br>
<span class="quotelev1">&gt; ldconfig. I don't have a LD_LIBRARY_PATH global variable on ubuntu 11.10.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ldconfig -p |grep mpi
</span><br>
<span class="quotelev1">&gt; libvt-mpi.so.0 (libc6,x86-64) =&gt; /usr/lib/libvt-mpi.so.0
</span><br>
<span class="quotelev1">&gt; libvt-mpi.so (libc6,x86-64) =&gt; /usr/lib/libvt-mpi.so
</span><br>
<span class="quotelev1">&gt;  libvt-mpi-unify.so.0 (libc6,x86-64) =&gt; /usr/lib/libvt-mpi-unify.so.0
</span><br>
<span class="quotelev1">&gt; libvt-mpi-unify.so (libc6,x86-64) =&gt; /usr/lib/libvt-mpi-unify.so
</span><br>
<span class="quotelev1">&gt;  libopenmpi_malloc.so.0 (libc6,x86-64) =&gt; /usr/lib/libopenmpi_malloc.so.0
</span><br>
<span class="quotelev1">&gt; libompitrace.so.0 (libc6,x86-64) =&gt; /usr/lib/libompitrace.so.0
</span><br>
<span class="quotelev1">&gt;  libompitrace.so (libc6,x86-64) =&gt; /usr/lib/libompitrace.so
</span><br>
<span class="quotelev1">&gt; libompi_dbg_msgq.so (libc6,x86-64) =&gt; /usr/lib/openmpi/libompi_dbg_msgq.so
</span><br>
<span class="quotelev1">&gt;  libmpi_f90.so.1 (libc6,x86-64) =&gt; /usr/lib/libmpi_f90.so.1
</span><br>
<span class="quotelev1">&gt; libmpi_f90.so.0 (libc6,x86-64) =&gt; /usr/lib/libmpi_f90.so.0
</span><br>
<span class="quotelev1">&gt;  libmpi_f90.so (libc6,x86-64) =&gt; /usr/lib/libmpi_f90.so
</span><br>
<span class="quotelev1">&gt; libmpi_f77.so.1 (libc6,x86-64) =&gt; /usr/lib/libmpi_f77.so.1
</span><br>
<span class="quotelev1">&gt;  libmpi_f77.so.0 (libc6,x86-64) =&gt; /usr/lib/libmpi_f77.so.0
</span><br>
<span class="quotelev1">&gt; libmpi_f77.so (libc6,x86-64) =&gt; /usr/lib/libmpi_f77.so
</span><br>
<span class="quotelev1">&gt;  libmpi_cxx.so.1 (libc6,x86-64) =&gt; /usr/lib/libmpi_cxx.so.1
</span><br>
<span class="quotelev1">&gt; libmpi_cxx.so.0 (libc6,x86-64) =&gt; /usr/lib/libmpi_cxx.so.0
</span><br>
<span class="quotelev1">&gt;  libmpi_cxx.so (libc6,x86-64) =&gt; /usr/lib/libmpi_cxx.so
</span><br>
<span class="quotelev1">&gt; libmpi.so.1 (libc6,x86-64) =&gt; /usr/lib/libmpi.so.1
</span><br>
<span class="quotelev1">&gt;  libmpi.so.0 (libc6,x86-64) =&gt; /usr/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; libmpi.so (libc6,x86-64) =&gt; /usr/lib/libmpi.so
</span><br>
<span class="quotelev1">&gt;  libexempi.so.3 (libc6,x86-64) =&gt; /usr/lib/libexempi.so.3
</span><br>
<span class="quotelev1">&gt; libcompizconfig.so.0 (libc6,x86-64) =&gt; /usr/lib/libcompizconfig.so.0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Compiling Rmpi from inside R gives me:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * installing *source* package &#145;Rmpi&#146; ...
</span><br>
<span class="quotelev1">&gt; checking for gcc... gcc -std=gnu99
</span><br>
<span class="quotelev1">&gt; checking for C compiler default output file name... a.out
</span><br>
<span class="quotelev1">&gt; checking whether the C compiler works... yes
</span><br>
<span class="quotelev1">&gt; checking whether we are cross compiling... no
</span><br>
<span class="quotelev1">&gt; checking for suffix of executables...
</span><br>
<span class="quotelev1">&gt; checking for suffix of object files... o
</span><br>
<span class="quotelev1">&gt; checking whether we are using the GNU C compiler... yes
</span><br>
<span class="quotelev1">&gt; checking whether gcc -std=gnu99 accepts -g... yes
</span><br>
<span class="quotelev1">&gt; checking for gcc -std=gnu99 option to accept ISO C89... none needed
</span><br>
<span class="quotelev1">&gt; I am here /usr and it is OpenMPI
</span><br>
<span class="quotelev1">&gt; Trying to find mpi.h ...
</span><br>
<span class="quotelev1">&gt; Found in /usr/include
</span><br>
<span class="quotelev1">&gt; Trying to find libmpi.so or libmpich.a ...
</span><br>
<span class="quotelev1">&gt; Found libmpi in /usr/lib
</span><br>
<span class="quotelev1">&gt; checking for openpty in -lutil... yes
</span><br>
<span class="quotelev1">&gt; checking for main in -lpthread... yes
</span><br>
<span class="quotelev1">&gt; configure: creating ./config.status
</span><br>
<span class="quotelev1">&gt; config.status: creating src/Makevars
</span><br>
<span class="quotelev1">&gt; ** Creating default NAMESPACE file
</span><br>
<span class="quotelev1">&gt; ** libs
</span><br>
<span class="quotelev1">&gt; gcc -std=gnu99 -I/usr/share/R/include -DNDEBUG -DPACKAGE_NAME=\&quot;\&quot;
</span><br>
<span class="quotelev1">&gt; -DPACKAGE_TARNAME=\&quot;\&quot; -DPACKAGE_VERSION=\&quot;\&quot; -DPACKAGE_STRING=\&quot;\&quot;
</span><br>
<span class="quotelev1">&gt; -DPACKAGE_BUGREPORT=\&quot;\&quot; -I/usr/include  -DMPI2 -DOPENMPI     -fpic  -O3
</span><br>
<span class="quotelev1">&gt; -pipe  -g  -c RegQuery.c -o RegQuery.o
</span><br>
<span class="quotelev1">&gt; gcc -std=gnu99 -I/usr/share/R/include -DNDEBUG -DPACKAGE_NAME=\&quot;\&quot;
</span><br>
<span class="quotelev1">&gt; -DPACKAGE_TARNAME=\&quot;\&quot; -DPACKAGE_VERSION=\&quot;\&quot; -DPACKAGE_STRING=\&quot;\&quot;
</span><br>
<span class="quotelev1">&gt; -DPACKAGE_BUGREPORT=\&quot;\&quot; -I/usr/include  -DMPI2 -DOPENMPI     -fpic  -O3
</span><br>
<span class="quotelev1">&gt; -pipe  -g  -c Rmpi.c -o Rmpi.o
</span><br>
<span class="quotelev1">&gt; gcc -std=gnu99 -I/usr/share/R/include -DNDEBUG -DPACKAGE_NAME=\&quot;\&quot;
</span><br>
<span class="quotelev1">&gt; -DPACKAGE_TARNAME=\&quot;\&quot; -DPACKAGE_VERSION=\&quot;\&quot; -DPACKAGE_STRING=\&quot;\&quot;
</span><br>
<span class="quotelev1">&gt; -DPACKAGE_BUGREPORT=\&quot;\&quot; -I/usr/include  -DMPI2 -DOPENMPI     -fpic  -O3
</span><br>
<span class="quotelev1">&gt; -pipe  -g  -c conversion.c -o conversion.o
</span><br>
<span class="quotelev1">&gt; gcc -std=gnu99 -I/usr/share/R/include -DNDEBUG -DPACKAGE_NAME=\&quot;\&quot;
</span><br>
<span class="quotelev1">&gt; -DPACKAGE_TARNAME=\&quot;\&quot; -DPACKAGE_VERSION=\&quot;\&quot; -DPACKAGE_STRING=\&quot;\&quot;
</span><br>
<span class="quotelev1">&gt; -DPACKAGE_BUGREPORT=\&quot;\&quot; -I/usr/include  -DMPI2 -DOPENMPI     -fpic  -O3
</span><br>
<span class="quotelev1">&gt; -pipe  -g  -c internal.c -o internal.o
</span><br>
<span class="quotelev1">&gt; gcc -std=gnu99 -shared -o Rmpi.so RegQuery.o Rmpi.o conversion.o
</span><br>
<span class="quotelev1">&gt; internal.o -L/usr/lib -lmpi -lutil -lpthread -L/usr/lib/R/lib -lR
</span><br>
<span class="quotelev1">&gt; installing to /usr/local/lib/R/site-library/Rmpi/libs
</span><br>
<span class="quotelev1">&gt; ** R
</span><br>
<span class="quotelev1">&gt; ** demo
</span><br>
<span class="quotelev1">&gt; ** inst
</span><br>
<span class="quotelev1">&gt; ** preparing package for lazy loading
</span><br>
<span class="quotelev1">&gt; ** help
</span><br>
<span class="quotelev1">&gt; *** installing help indices
</span><br>
<span class="quotelev1">&gt; ** building package indices
</span><br>
<span class="quotelev1">&gt; ** testing if installed package can be loaded
</span><br>
<span class="quotelev1">&gt; [ben-Inspiron-1764:18216] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /usr/lib/openmpi/mca_paffinity_hwloc:
</span><br>
<span class="quotelev1">&gt; /usr/lib/openmpi/mca_paffinity_hwloc.so: undefined symbol:
</span><br>
<span class="quotelev1">&gt; opal_hwloc_topology (ignored)
</span><br>
<span class="quotelev1">&gt; [ben-Inspiron-1764:18216] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /usr/lib/openmpi/mca_shmem_posix: /usr/lib/openmpi/mca_shmem_posix.so:
</span><br>
<span class="quotelev1">&gt; undefined symbol: opal_shmem_base_output (ignored)
</span><br>
<span class="quotelev1">&gt; [ben-Inspiron-1764:18216] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /usr/lib/openmpi/mca_ess_hnp: /usr/lib/openmpi/mca_ess_hnp.so: undefined
</span><br>
<span class="quotelev1">&gt; symbol: orte_timing_output (ignored)
</span><br>
<span class="quotelev1">&gt; [ben-Inspiron-1764:18216] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /usr/lib/openmpi/mca_ess_singleton: /usr/lib/openmpi/mca_ess_singleton.so:
</span><br>
<span class="quotelev1">&gt; undefined symbol: orte_local_cpu_model (ignored)
</span><br>
<span class="quotelev1">&gt; [ben-Inspiron-1764:18216] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /usr/lib/openmpi/mca_ess_slurm: /usr/lib/openmpi/mca_ess_slurm.so:
</span><br>
<span class="quotelev1">&gt; undefined symbol: orte_orted_exit_with_barrier (ignored)
</span><br>
<span class="quotelev1">&gt; [ben-Inspiron-1764:18216] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /usr/lib/openmpi/mca_ess_slurmd: /usr/lib/openmpi/mca_ess_slurmd.so:
</span><br>
<span class="quotelev1">&gt; undefined symbol: orte_pmap_t_class (ignored)
</span><br>
<span class="quotelev1">&gt; [ben-Inspiron-1764:18216] [[INVALID],INVALID] ORTE_ERROR_LOG: Unknown
</span><br>
<span class="quotelev1">&gt; error: -1 in file ../../../orte/runtime/orte_globals.c at line 176
</span><br>
<span class="quotelev1">&gt; input in flex scanner failed
</span><br>
<span class="quotelev1">&gt; ERROR: loading failed
</span><br>
<span class="quotelev1">&gt; * removing &#145;/usr/local/lib/R/site-library/Rmpi&#146;
</span><br>
<span class="quotelev1">&gt; * restoring previous &#145;/usr/local/lib/R/site-library/Rmpi&#146;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Notice that the libRmpi actually does compile but can't be installed.
</span><br>
<span class="quotelev1">&gt; Other than the --prefix option I added nothing new to the ./configure
</span><br>
<span class="quotelev1">&gt; script. It now knows by default where everything should be and I think I
</span><br>
<span class="quotelev1">&gt; have every required package installed. Anyone have any ideas? Do you need
</span><br>
<span class="quotelev1">&gt; any other files attached?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; ~Ben
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Apr 3, 2012 at 1:39 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Looks like you didn't set your LD_LIBRARY_PATH to point to where OMPI was
</span><br>
<span class="quotelev2">&gt;&gt; installed, so the individual component libs couldn't be loaded. From the
</span><br>
<span class="quotelev2">&gt;&gt; below, it looks like you need to add /usr/local to your path.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Apr 2, 2012 at 7:26 PM, Benedict Holland &lt;
</span><br>
<span class="quotelev2">&gt;&gt; benedict.m.holland_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi All,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am on ubuntu 11.10 and the only package that they have for OpenMPI is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1.4.3 and I noticed the latest was 1.5.5 and I decided to try to use it to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; get the Rmpi R package compiled against it. I failed. My R version is 2.15,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the OpenMPI is 1.5.5. I compiled it and installed it but when I tried to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compile Rmpi I get the result below. I can try to run this stuff again but
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I had to use the base packages because they worked and I need to get some
</span><br>
<span class="quotelev3">&gt;&gt;&gt; stuff done. I can always recompile though, install and run the Rmpi package
</span><br>
<span class="quotelev3">&gt;&gt;&gt; against the installed OpenMPI stuff. Any ideas what I need to do? Also, is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; there an Ubuntu or Debian package available with the latest and greatest
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and if not, how can I make one?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ~Ben
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for gcc... gcc -std=gnu99
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for C compiler default output file name... a.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking whether the C compiler works... yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking whether we are cross compiling... no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for suffix of executables...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for suffix of object files... o
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking whether we are using the GNU C compiler... yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking whether gcc -std=gnu99 accepts -g... yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for gcc -std=gnu99 option to accept ISO C89... none needed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am here /usr/local and it is OpenMPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Trying to find mpi.h ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Found in /usr/local/include
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Trying to find libmpi.so or libmpich.a ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Found libmpi in /usr/local/lib
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for openpty in -lutil... yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for main in -lpthread... yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure: creating ./config.status
</span><br>
<span class="quotelev3">&gt;&gt;&gt; config.status: creating src/Makevars
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ** Creating default NAMESPACE file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ** libs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gcc -std=gnu99 -I/usr/share/R/include -DNDEBUG -DPACKAGE_NAME=\&quot;\&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -DPACKAGE_TARNAME=\&quot;\&quot; -DPACKAGE_VERSION=\&quot;\&quot; -DPACKAGE_STRING=\&quot;\&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -DPACKAGE_BUGREPORT=\&quot;\&quot; -I/usr/local/include  -DMPI2 -DOPENMPI     -fpic
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  -O3 -pipe  -g  -c RegQuery.c -o RegQuery.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gcc -std=gnu99 -I/usr/share/R/include -DNDEBUG -DPACKAGE_NAME=\&quot;\&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -DPACKAGE_TARNAME=\&quot;\&quot; -DPACKAGE_VERSION=\&quot;\&quot; -DPACKAGE_STRING=\&quot;\&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -DPACKAGE_BUGREPORT=\&quot;\&quot; -I/usr/local/include  -DMPI2 -DOPENMPI     -fpic
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  -O3 -pipe  -g  -c Rmpi.c -o Rmpi.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gcc -std=gnu99 -I/usr/share/R/include -DNDEBUG -DPACKAGE_NAME=\&quot;\&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -DPACKAGE_TARNAME=\&quot;\&quot; -DPACKAGE_VERSION=\&quot;\&quot; -DPACKAGE_STRING=\&quot;\&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -DPACKAGE_BUGREPORT=\&quot;\&quot; -I/usr/local/include  -DMPI2 -DOPENMPI     -fpic
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  -O3 -pipe  -g  -c conversion.c -o conversion.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gcc -std=gnu99 -I/usr/share/R/include -DNDEBUG -DPACKAGE_NAME=\&quot;\&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -DPACKAGE_TARNAME=\&quot;\&quot; -DPACKAGE_VERSION=\&quot;\&quot; -DPACKAGE_STRING=\&quot;\&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -DPACKAGE_BUGREPORT=\&quot;\&quot; -I/usr/local/include  -DMPI2 -DOPENMPI     -fpic
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  -O3 -pipe  -g  -c internal.c -o internal.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gcc -std=gnu99 -shared -o Rmpi.so RegQuery.o Rmpi.o conversion.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt; internal.o -L/usr/local/lib -lmpi -lutil -lpthread -L/usr/lib/R/lib -lR
</span><br>
<span class="quotelev3">&gt;&gt;&gt; installing to /usr/local/lib/R/site-library/Rmpi/libs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ** R
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ** demo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ** inst
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ** preparing package for lazy loading
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ** help
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** installing help indices
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ** building package indices
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ** testing if installed package can be loaded
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ben-Inspiron-1764:26048] mca: base: component_find: unable to open
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/lib/openmpi/mca_paffinity_hwloc:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/lib/openmpi/mca_paffinity_hwloc.so: undefined symbol:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal_hwloc_topology (ignored)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ben-Inspiron-1764:26048] mca: base: component_find: unable to open
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/lib/openmpi/mca_carto_auto_detect:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/lib/openmpi/mca_carto_auto_detect.so: undefined symbol:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal_carto_base_graph_get_host_graph_fn (ignored)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ben-Inspiron-1764:26048] mca: base: component_find: unable to open
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/lib/openmpi/mca_carto_file:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/lib/openmpi/mca_carto_file.so: undefined symbol:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal_carto_base_graph_get_host_graph_fn (ignored)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ben-Inspiron-1764:26048] mca: base: component_find: unable to open
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/lib/openmpi/mca_shmem_mmap:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/lib/openmpi/mca_shmem_mmap.so: undefined symbol: opal_show_help
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (ignored)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ben-Inspiron-1764:26048] mca: base: component_find: unable to open
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/lib/openmpi/mca_shmem_posix:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/lib/openmpi/mca_shmem_posix.so: undefined symbol:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal_shmem_base_output (ignored)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ben-Inspiron-1764:26048] mca: base: component_find: unable to open
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/lib/openmpi/mca_shmem_sysv:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/lib/openmpi/mca_shmem_sysv.so: undefined symbol: opal_show_help
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (ignored)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It looks like opal_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fail during opal_init; some of which are due to configuration or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   opal_shmem_base_select failed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   --&gt; Returned value -1 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ben-Inspiron-1764:26048] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file runtime/orte_init.c at line 79
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fail during MPI_INIT; some of which are due to configuration or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; environment
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev3">&gt;&gt;&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; developer):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   ompi_mpi_init: orte_init failed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   --&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** on a NULL communicator
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** MPI_ERRORS_ARE_FATAL: your MPI job will now abort
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ben-Inspiron-1764:26048] Local abort before MPI_INIT completed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; successfully; not able to aggregate error messages, and not able to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; guarantee that all other processes were killed!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10835/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10836.php">George Bosilca: "Re: [OMPI devel] Using opal_convertor_t for In-place send buffers in a BTL component"</a>
<li><strong>Previous message:</strong> <a href="10834.php">Alex Margolin: "[OMPI devel] Using opal_convertor_t for In-place send buffers in a BTL component"</a>
<li><strong>In reply to:</strong> <a href="10833.php">Benedict Holland: "Re: [OMPI devel] OpenMPI and R"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10840.php">Jeffrey Squyres: "Re: [OMPI devel] OpenMPI and R"</a>
<li><strong>Reply:</strong> <a href="10840.php">Jeffrey Squyres: "Re: [OMPI devel] OpenMPI and R"</a>
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
