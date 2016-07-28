<?
$subject_val = "Re: [OMPI devel] OpenMPI and R";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  6 06:59:22 2012" -->
<!-- isoreceived="20120406105922" -->
<!-- sent="Fri, 06 Apr 2012 06:59:20 -0400" -->
<!-- isosent="20120406105920" -->
<!-- name="TERRY DONTJE" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenMPI and R" -->
<!-- id="4F7ECC88.6090905_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> TERRY DONTJE (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-06 06:59:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10838.php">Kawashima: "Re: [OMPI devel] [patch] Bugs in mpi-f90-interfaces.h and its bridge implementation"</a>
<li><strong>Previous message:</strong> <a href="10836.php">George Bosilca: "Re: [OMPI devel] Using opal_convertor_t for In-place send buffers in a BTL component"</a>
<li><strong>In reply to:</strong> <a href="10833.php">Benedict Holland: "Re: [OMPI devel] OpenMPI and R"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Have you tried to compile and run a simple MPI program with your 
<br>
installed Open MPI?  If that works then you need to figure out what is 
<br>
being done by the Makefile when it is &quot;testing if installed package can 
<br>
be loaded&quot; and try and reproduce the issue manually.
<br>
<p>BTW, I normally configure my OMPI with -enable-orterun-prefix-by-default 
<br>
to get OMPI to pull in the right library paths instead of using ldconfig.
<br>
<p>In the below ldconfig -p you may want to also grep for mca to make sure 
<br>
the plugins being complained about in the R testing are found too, 
<br>
though I suspect they are but it would be good to double check.
<br>
<p>--td
<br>
<p>On 4/5/2012 7:59 PM, Benedict Holland wrote:
<br>
<span class="quotelev1">&gt; So I am now back on this full time as I need this to work. OpenMPI 
</span><br>
<span class="quotelev1">&gt; 1.4.3 is deadlocking with Rmpi and I need the latest code. I still get 
</span><br>
<span class="quotelev1">&gt; the exact same problem. I configured it with a --prefix=/usr to get it 
</span><br>
<span class="quotelev1">&gt; to install everything in default directories and added 
</span><br>
<span class="quotelev1">&gt; /usr/lib/openmpi to my ldconfig. I don't have a LD_LIBRARY_PATH global 
</span><br>
<span class="quotelev1">&gt; variable on ubuntu 11.10.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ldconfig -p |grep mpi
</span><br>
<span class="quotelev1">&gt; libvt-mpi.so.0 (libc6,x86-64) =&gt; /usr/lib/libvt-mpi.so.0
</span><br>
<span class="quotelev1">&gt; libvt-mpi.so (libc6,x86-64) =&gt; /usr/lib/libvt-mpi.so
</span><br>
<span class="quotelev1">&gt; libvt-mpi-unify.so.0 (libc6,x86-64) =&gt; /usr/lib/libvt-mpi-unify.so.0
</span><br>
<span class="quotelev1">&gt; libvt-mpi-unify.so (libc6,x86-64) =&gt; /usr/lib/libvt-mpi-unify.so
</span><br>
<span class="quotelev1">&gt; libopenmpi_malloc.so.0 (libc6,x86-64) =&gt; /usr/lib/libopenmpi_malloc.so.0
</span><br>
<span class="quotelev1">&gt; libompitrace.so.0 (libc6,x86-64) =&gt; /usr/lib/libompitrace.so.0
</span><br>
<span class="quotelev1">&gt; libompitrace.so (libc6,x86-64) =&gt; /usr/lib/libompitrace.so
</span><br>
<span class="quotelev1">&gt; libompi_dbg_msgq.so (libc6,x86-64) =&gt; /usr/lib/openmpi/libompi_dbg_msgq.so
</span><br>
<span class="quotelev1">&gt; libmpi_f90.so.1 (libc6,x86-64) =&gt; /usr/lib/libmpi_f90.so.1
</span><br>
<span class="quotelev1">&gt; libmpi_f90.so.0 (libc6,x86-64) =&gt; /usr/lib/libmpi_f90.so.0
</span><br>
<span class="quotelev1">&gt; libmpi_f90.so (libc6,x86-64) =&gt; /usr/lib/libmpi_f90.so
</span><br>
<span class="quotelev1">&gt; libmpi_f77.so.1 (libc6,x86-64) =&gt; /usr/lib/libmpi_f77.so.1
</span><br>
<span class="quotelev1">&gt; libmpi_f77.so.0 (libc6,x86-64) =&gt; /usr/lib/libmpi_f77.so.0
</span><br>
<span class="quotelev1">&gt; libmpi_f77.so (libc6,x86-64) =&gt; /usr/lib/libmpi_f77.so
</span><br>
<span class="quotelev1">&gt; libmpi_cxx.so.1 (libc6,x86-64) =&gt; /usr/lib/libmpi_cxx.so.1
</span><br>
<span class="quotelev1">&gt; libmpi_cxx.so.0 (libc6,x86-64) =&gt; /usr/lib/libmpi_cxx.so.0
</span><br>
<span class="quotelev1">&gt; libmpi_cxx.so (libc6,x86-64) =&gt; /usr/lib/libmpi_cxx.so
</span><br>
<span class="quotelev1">&gt; libmpi.so.1 (libc6,x86-64) =&gt; /usr/lib/libmpi.so.1
</span><br>
<span class="quotelev1">&gt; libmpi.so.0 (libc6,x86-64) =&gt; /usr/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; libmpi.so (libc6,x86-64) =&gt; /usr/lib/libmpi.so
</span><br>
<span class="quotelev1">&gt; libexempi.so.3 (libc6,x86-64) =&gt; /usr/lib/libexempi.so.3
</span><br>
<span class="quotelev1">&gt; libcompizconfig.so.0 (libc6,x86-64) =&gt; /usr/lib/libcompizconfig.so.0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Compiling Rmpi from inside R gives me:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * installing *source* package 'Rmpi' ...
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
<span class="quotelev1">&gt; -DPACKAGE_BUGREPORT=\&quot;\&quot; -I/usr/include  -DMPI2 -DOPENMPI     -fpic 
</span><br>
<span class="quotelev1">&gt;  -O3 -pipe  -g  -c RegQuery.c -o RegQuery.o
</span><br>
<span class="quotelev1">&gt; gcc -std=gnu99 -I/usr/share/R/include -DNDEBUG -DPACKAGE_NAME=\&quot;\&quot; 
</span><br>
<span class="quotelev1">&gt; -DPACKAGE_TARNAME=\&quot;\&quot; -DPACKAGE_VERSION=\&quot;\&quot; -DPACKAGE_STRING=\&quot;\&quot; 
</span><br>
<span class="quotelev1">&gt; -DPACKAGE_BUGREPORT=\&quot;\&quot; -I/usr/include  -DMPI2 -DOPENMPI     -fpic 
</span><br>
<span class="quotelev1">&gt;  -O3 -pipe  -g  -c Rmpi.c -o Rmpi.o
</span><br>
<span class="quotelev1">&gt; gcc -std=gnu99 -I/usr/share/R/include -DNDEBUG -DPACKAGE_NAME=\&quot;\&quot; 
</span><br>
<span class="quotelev1">&gt; -DPACKAGE_TARNAME=\&quot;\&quot; -DPACKAGE_VERSION=\&quot;\&quot; -DPACKAGE_STRING=\&quot;\&quot; 
</span><br>
<span class="quotelev1">&gt; -DPACKAGE_BUGREPORT=\&quot;\&quot; -I/usr/include  -DMPI2 -DOPENMPI     -fpic 
</span><br>
<span class="quotelev1">&gt;  -O3 -pipe  -g  -c conversion.c -o conversion.o
</span><br>
<span class="quotelev1">&gt; gcc -std=gnu99 -I/usr/share/R/include -DNDEBUG -DPACKAGE_NAME=\&quot;\&quot; 
</span><br>
<span class="quotelev1">&gt; -DPACKAGE_TARNAME=\&quot;\&quot; -DPACKAGE_VERSION=\&quot;\&quot; -DPACKAGE_STRING=\&quot;\&quot; 
</span><br>
<span class="quotelev1">&gt; -DPACKAGE_BUGREPORT=\&quot;\&quot; -I/usr/include  -DMPI2 -DOPENMPI     -fpic 
</span><br>
<span class="quotelev1">&gt;  -O3 -pipe  -g  -c internal.c -o internal.o
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
<span class="quotelev1">&gt; /usr/lib/openmpi/mca_ess_hnp: /usr/lib/openmpi/mca_ess_hnp.so: 
</span><br>
<span class="quotelev1">&gt; undefined symbol: orte_timing_output (ignored)
</span><br>
<span class="quotelev1">&gt; [ben-Inspiron-1764:18216] mca: base: component_find: unable to open 
</span><br>
<span class="quotelev1">&gt; /usr/lib/openmpi/mca_ess_singleton: 
</span><br>
<span class="quotelev1">&gt; /usr/lib/openmpi/mca_ess_singleton.so: undefined symbol: 
</span><br>
<span class="quotelev1">&gt; orte_local_cpu_model (ignored)
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
<span class="quotelev1">&gt; * removing '/usr/local/lib/R/site-library/Rmpi'
</span><br>
<span class="quotelev1">&gt; * restoring previous '/usr/local/lib/R/site-library/Rmpi'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Notice that the libRmpi actually does compile but can't be installed. 
</span><br>
<span class="quotelev1">&gt; Other than the --prefix option I added nothing new to the ./configure 
</span><br>
<span class="quotelev1">&gt; script. It now knows by default where everything should be and I think 
</span><br>
<span class="quotelev1">&gt; I have every required package installed. Anyone have any ideas? Do you 
</span><br>
<span class="quotelev1">&gt; need any other files attached?
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
<span class="quotelev1">&gt; On Tue, Apr 3, 2012 at 1:39 AM, Ralph Castain &lt;rhc_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Looks like you didn't set your LD_LIBRARY_PATH to point to where
</span><br>
<span class="quotelev1">&gt;     OMPI was installed, so the individual component libs couldn't be
</span><br>
<span class="quotelev1">&gt;     loaded. From the below, it looks like you need to add /usr/local
</span><br>
<span class="quotelev1">&gt;     to your path.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On Mon, Apr 2, 2012 at 7:26 PM, Benedict Holland
</span><br>
<span class="quotelev1">&gt;     &lt;benedict.m.holland_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:benedict.m.holland_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Hi All,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         I am on ubuntu 11.10 and the only package that they have for
</span><br>
<span class="quotelev1">&gt;         OpenMPI is 1.4.3 and I noticed the latest was 1.5.5 and
</span><br>
<span class="quotelev1">&gt;         I decided to try to use it to get the Rmpi R package compiled
</span><br>
<span class="quotelev1">&gt;         against it. I failed. My R version is 2.15, the OpenMPI is
</span><br>
<span class="quotelev1">&gt;         1.5.5. I compiled it and installed it but when I tried to
</span><br>
<span class="quotelev1">&gt;         compile Rmpi I get the result below. I can try to run this
</span><br>
<span class="quotelev1">&gt;         stuff again but I had to use the base packages because they
</span><br>
<span class="quotelev1">&gt;         worked and I need to get some stuff done. I can always
</span><br>
<span class="quotelev1">&gt;         recompile though, install and run the Rmpi package against the
</span><br>
<span class="quotelev1">&gt;         installed OpenMPI stuff. Any ideas what I need to do? Also, is
</span><br>
<span class="quotelev1">&gt;         there an Ubuntu or Debian package available with the latest
</span><br>
<span class="quotelev1">&gt;         and greatest and if not, how can I make one?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Thanks,
</span><br>
<span class="quotelev1">&gt;         ~Ben
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         checking for gcc... gcc -std=gnu99
</span><br>
<span class="quotelev1">&gt;         checking for C compiler default output file name... a.out
</span><br>
<span class="quotelev1">&gt;         checking whether the C compiler works... yes
</span><br>
<span class="quotelev1">&gt;         checking whether we are cross compiling... no
</span><br>
<span class="quotelev1">&gt;         checking for suffix of executables...
</span><br>
<span class="quotelev1">&gt;         checking for suffix of object files... o
</span><br>
<span class="quotelev1">&gt;         checking whether we are using the GNU C compiler... yes
</span><br>
<span class="quotelev1">&gt;         checking whether gcc -std=gnu99 accepts -g... yes
</span><br>
<span class="quotelev1">&gt;         checking for gcc -std=gnu99 option to accept ISO C89... none
</span><br>
<span class="quotelev1">&gt;         needed
</span><br>
<span class="quotelev1">&gt;         I am here /usr/local and it is OpenMPI
</span><br>
<span class="quotelev1">&gt;         Trying to find mpi.h ...
</span><br>
<span class="quotelev1">&gt;         Found in /usr/local/include
</span><br>
<span class="quotelev1">&gt;         Trying to find libmpi.so or libmpich.a ...
</span><br>
<span class="quotelev1">&gt;         Found libmpi in /usr/local/lib
</span><br>
<span class="quotelev1">&gt;         checking for openpty in -lutil... yes
</span><br>
<span class="quotelev1">&gt;         checking for main in -lpthread... yes
</span><br>
<span class="quotelev1">&gt;         configure: creating ./config.status
</span><br>
<span class="quotelev1">&gt;         config.status: creating src/Makevars
</span><br>
<span class="quotelev1">&gt;         ** Creating default NAMESPACE file
</span><br>
<span class="quotelev1">&gt;         ** libs
</span><br>
<span class="quotelev1">&gt;         gcc -std=gnu99 -I/usr/share/R/include -DNDEBUG
</span><br>
<span class="quotelev1">&gt;         -DPACKAGE_NAME=\&quot;\&quot; -DPACKAGE_TARNAME=\&quot;\&quot;
</span><br>
<span class="quotelev1">&gt;         -DPACKAGE_VERSION=\&quot;\&quot; -DPACKAGE_STRING=\&quot;\&quot;
</span><br>
<span class="quotelev1">&gt;         -DPACKAGE_BUGREPORT=\&quot;\&quot; -I/usr/local/include  -DMPI2
</span><br>
<span class="quotelev1">&gt;         -DOPENMPI     -fpic  -O3 -pipe  -g  -c RegQuery.c -o RegQuery.o
</span><br>
<span class="quotelev1">&gt;         gcc -std=gnu99 -I/usr/share/R/include -DNDEBUG
</span><br>
<span class="quotelev1">&gt;         -DPACKAGE_NAME=\&quot;\&quot; -DPACKAGE_TARNAME=\&quot;\&quot;
</span><br>
<span class="quotelev1">&gt;         -DPACKAGE_VERSION=\&quot;\&quot; -DPACKAGE_STRING=\&quot;\&quot;
</span><br>
<span class="quotelev1">&gt;         -DPACKAGE_BUGREPORT=\&quot;\&quot; -I/usr/local/include  -DMPI2
</span><br>
<span class="quotelev1">&gt;         -DOPENMPI     -fpic  -O3 -pipe  -g  -c Rmpi.c -o Rmpi.o
</span><br>
<span class="quotelev1">&gt;         gcc -std=gnu99 -I/usr/share/R/include -DNDEBUG
</span><br>
<span class="quotelev1">&gt;         -DPACKAGE_NAME=\&quot;\&quot; -DPACKAGE_TARNAME=\&quot;\&quot;
</span><br>
<span class="quotelev1">&gt;         -DPACKAGE_VERSION=\&quot;\&quot; -DPACKAGE_STRING=\&quot;\&quot;
</span><br>
<span class="quotelev1">&gt;         -DPACKAGE_BUGREPORT=\&quot;\&quot; -I/usr/local/include  -DMPI2
</span><br>
<span class="quotelev1">&gt;         -DOPENMPI     -fpic  -O3 -pipe  -g  -c conversion.c -o
</span><br>
<span class="quotelev1">&gt;         conversion.o
</span><br>
<span class="quotelev1">&gt;         gcc -std=gnu99 -I/usr/share/R/include -DNDEBUG
</span><br>
<span class="quotelev1">&gt;         -DPACKAGE_NAME=\&quot;\&quot; -DPACKAGE_TARNAME=\&quot;\&quot;
</span><br>
<span class="quotelev1">&gt;         -DPACKAGE_VERSION=\&quot;\&quot; -DPACKAGE_STRING=\&quot;\&quot;
</span><br>
<span class="quotelev1">&gt;         -DPACKAGE_BUGREPORT=\&quot;\&quot; -I/usr/local/include  -DMPI2
</span><br>
<span class="quotelev1">&gt;         -DOPENMPI     -fpic  -O3 -pipe  -g  -c internal.c -o internal.o
</span><br>
<span class="quotelev1">&gt;         gcc -std=gnu99 -shared -o Rmpi.so RegQuery.o Rmpi.o
</span><br>
<span class="quotelev1">&gt;         conversion.o internal.o -L/usr/local/lib -lmpi -lutil
</span><br>
<span class="quotelev1">&gt;         -lpthread -L/usr/lib/R/lib -lR
</span><br>
<span class="quotelev1">&gt;         installing to /usr/local/lib/R/site-library/Rmpi/libs
</span><br>
<span class="quotelev1">&gt;         ** R
</span><br>
<span class="quotelev1">&gt;         ** demo
</span><br>
<span class="quotelev1">&gt;         ** inst
</span><br>
<span class="quotelev1">&gt;         ** preparing package for lazy loading
</span><br>
<span class="quotelev1">&gt;         ** help
</span><br>
<span class="quotelev1">&gt;         *** installing help indices
</span><br>
<span class="quotelev1">&gt;         ** building package indices
</span><br>
<span class="quotelev1">&gt;         ** testing if installed package can be loaded
</span><br>
<span class="quotelev1">&gt;         [ben-Inspiron-1764:26048] mca: base: component_find: unable to
</span><br>
<span class="quotelev1">&gt;         open /usr/local/lib/openmpi/mca_paffinity_hwloc:
</span><br>
<span class="quotelev1">&gt;         /usr/local/lib/openmpi/mca_paffinity_hwloc.so: undefined
</span><br>
<span class="quotelev1">&gt;         symbol: opal_hwloc_topology (ignored)
</span><br>
<span class="quotelev1">&gt;         [ben-Inspiron-1764:26048] mca: base: component_find: unable to
</span><br>
<span class="quotelev1">&gt;         open /usr/local/lib/openmpi/mca_carto_auto_detect:
</span><br>
<span class="quotelev1">&gt;         /usr/local/lib/openmpi/mca_carto_auto_detect.so: undefined
</span><br>
<span class="quotelev1">&gt;         symbol: opal_carto_base_graph_get_host_graph_fn (ignored)
</span><br>
<span class="quotelev1">&gt;         [ben-Inspiron-1764:26048] mca: base: component_find: unable to
</span><br>
<span class="quotelev1">&gt;         open /usr/local/lib/openmpi/mca_carto_file:
</span><br>
<span class="quotelev1">&gt;         /usr/local/lib/openmpi/mca_carto_file.so: undefined symbol:
</span><br>
<span class="quotelev1">&gt;         opal_carto_base_graph_get_host_graph_fn (ignored)
</span><br>
<span class="quotelev1">&gt;         [ben-Inspiron-1764:26048] mca: base: component_find: unable to
</span><br>
<span class="quotelev1">&gt;         open /usr/local/lib/openmpi/mca_shmem_mmap:
</span><br>
<span class="quotelev1">&gt;         /usr/local/lib/openmpi/mca_shmem_mmap.so: undefined symbol:
</span><br>
<span class="quotelev1">&gt;         opal_show_help (ignored)
</span><br>
<span class="quotelev1">&gt;         [ben-Inspiron-1764:26048] mca: base: component_find: unable to
</span><br>
<span class="quotelev1">&gt;         open /usr/local/lib/openmpi/mca_shmem_posix:
</span><br>
<span class="quotelev1">&gt;         /usr/local/lib/openmpi/mca_shmem_posix.so: undefined symbol:
</span><br>
<span class="quotelev1">&gt;         opal_shmem_base_output (ignored)
</span><br>
<span class="quotelev1">&gt;         [ben-Inspiron-1764:26048] mca: base: component_find: unable to
</span><br>
<span class="quotelev1">&gt;         open /usr/local/lib/openmpi/mca_shmem_sysv:
</span><br>
<span class="quotelev1">&gt;         /usr/local/lib/openmpi/mca_shmem_sysv.so: undefined symbol:
</span><br>
<span class="quotelev1">&gt;         opal_show_help (ignored)
</span><br>
<span class="quotelev1">&gt;         --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;         It looks like opal_init failed for some reason; your parallel
</span><br>
<span class="quotelev1">&gt;         process is
</span><br>
<span class="quotelev1">&gt;         likely to abort.  There are many reasons that a parallel
</span><br>
<span class="quotelev1">&gt;         process can
</span><br>
<span class="quotelev1">&gt;         fail during opal_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt;         environment problems.  This failure appears to be an internal
</span><br>
<span class="quotelev1">&gt;         failure;
</span><br>
<span class="quotelev1">&gt;         here's some additional information (which may only be relevant
</span><br>
<span class="quotelev1">&gt;         to an
</span><br>
<span class="quotelev1">&gt;         Open MPI developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           opal_shmem_base_select failed
</span><br>
<span class="quotelev1">&gt;           --&gt; Returned value -1 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev1">&gt;         --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;         [ben-Inspiron-1764:26048] [[INVALID],INVALID] ORTE_ERROR_LOG:
</span><br>
<span class="quotelev1">&gt;         Error in file runtime/orte_init.c at line 79
</span><br>
<span class="quotelev1">&gt;         --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;         It looks like MPI_INIT failed for some reason; your parallel
</span><br>
<span class="quotelev1">&gt;         process is
</span><br>
<span class="quotelev1">&gt;         likely to abort.  There are many reasons that a parallel
</span><br>
<span class="quotelev1">&gt;         process can
</span><br>
<span class="quotelev1">&gt;         fail during MPI_INIT; some of which are due to configuration
</span><br>
<span class="quotelev1">&gt;         or environment
</span><br>
<span class="quotelev1">&gt;         problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt;         here's some
</span><br>
<span class="quotelev1">&gt;         additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt;         developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           ompi_mpi_init: orte_init failed
</span><br>
<span class="quotelev1">&gt;           --&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt;         --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;         *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt;         *** on a NULL communicator
</span><br>
<span class="quotelev1">&gt;         *** MPI_ERRORS_ARE_FATAL: your MPI job will now abort
</span><br>
<span class="quotelev1">&gt;         [ben-Inspiron-1764:26048] Local abort before MPI_INIT
</span><br>
<span class="quotelev1">&gt;         completed successfully; not able to aggregate error messages,
</span><br>
<span class="quotelev1">&gt;         and not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         _______________________________________________
</span><br>
<span class="quotelev1">&gt;         devel mailing list
</span><br>
<span class="quotelev1">&gt;         devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     devel mailing list
</span><br>
<span class="quotelev1">&gt;     devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><pre>
-- 
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10837/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10838.php">Kawashima: "Re: [OMPI devel] [patch] Bugs in mpi-f90-interfaces.h and its bridge implementation"</a>
<li><strong>Previous message:</strong> <a href="10836.php">George Bosilca: "Re: [OMPI devel] Using opal_convertor_t for In-place send buffers in a BTL component"</a>
<li><strong>In reply to:</strong> <a href="10833.php">Benedict Holland: "Re: [OMPI devel] OpenMPI and R"</a>
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
