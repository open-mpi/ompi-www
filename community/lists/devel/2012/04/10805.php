<?
$subject_val = "Re: [OMPI devel] OpenMPI and R";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  3 01:39:29 2012" -->
<!-- isoreceived="20120403053929" -->
<!-- sent="Mon, 2 Apr 2012 22:39:24 -0700" -->
<!-- isosent="20120403053924" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenMPI and R" -->
<!-- id="CAMD57oeovp6e5kp7htDnf_c3zmzKKdKJYqM5Ggov17sZ1peh6Q_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAD+mzoyhPnCRTd-ByoB31TwXPhyjyMsKs+jBPccU5Z4Zhw1K0g_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-03 01:39:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10806.php">George Bosilca: "Re: [OMPI devel] algorithm selection in open mpi"</a>
<li><strong>Previous message:</strong> <a href="10804.php">Rayson Ho: "Re: [OMPI devel] algorithm selection in open mpi"</a>
<li><strong>In reply to:</strong> <a href="10802.php">Benedict Holland: "[OMPI devel] OpenMPI and R"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10833.php">Benedict Holland: "Re: [OMPI devel] OpenMPI and R"</a>
<li><strong>Reply:</strong> <a href="10833.php">Benedict Holland: "Re: [OMPI devel] OpenMPI and R"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Looks like you didn't set your LD_LIBRARY_PATH to point to where OMPI was
<br>
installed, so the individual component libs couldn't be loaded. From the
<br>
below, it looks like you need to add /usr/local to your path.
<br>
<p>On Mon, Apr 2, 2012 at 7:26 PM, Benedict Holland &lt;
<br>
benedict.m.holland_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi All,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am on ubuntu 11.10 and the only package that they have for OpenMPI is
</span><br>
<span class="quotelev1">&gt; 1.4.3 and I noticed the latest was 1.5.5 and I decided to try to use it to
</span><br>
<span class="quotelev1">&gt; get the Rmpi R package compiled against it. I failed. My R version is 2.15,
</span><br>
<span class="quotelev1">&gt; the OpenMPI is 1.5.5. I compiled it and installed it but when I tried to
</span><br>
<span class="quotelev1">&gt; compile Rmpi I get the result below. I can try to run this stuff again but
</span><br>
<span class="quotelev1">&gt; I had to use the base packages because they worked and I need to get some
</span><br>
<span class="quotelev1">&gt; stuff done. I can always recompile though, install and run the Rmpi package
</span><br>
<span class="quotelev1">&gt; against the installed OpenMPI stuff. Any ideas what I need to do? Also, is
</span><br>
<span class="quotelev1">&gt; there an Ubuntu or Debian package available with the latest and greatest
</span><br>
<span class="quotelev1">&gt; and if not, how can I make one?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; ~Ben
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; I am here /usr/local and it is OpenMPI
</span><br>
<span class="quotelev1">&gt; Trying to find mpi.h ...
</span><br>
<span class="quotelev1">&gt; Found in /usr/local/include
</span><br>
<span class="quotelev1">&gt; Trying to find libmpi.so or libmpich.a ...
</span><br>
<span class="quotelev1">&gt; Found libmpi in /usr/local/lib
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
<span class="quotelev1">&gt; -DPACKAGE_BUGREPORT=\&quot;\&quot; -I/usr/local/include  -DMPI2 -DOPENMPI     -fpic
</span><br>
<span class="quotelev1">&gt;  -O3 -pipe  -g  -c RegQuery.c -o RegQuery.o
</span><br>
<span class="quotelev1">&gt; gcc -std=gnu99 -I/usr/share/R/include -DNDEBUG -DPACKAGE_NAME=\&quot;\&quot;
</span><br>
<span class="quotelev1">&gt; -DPACKAGE_TARNAME=\&quot;\&quot; -DPACKAGE_VERSION=\&quot;\&quot; -DPACKAGE_STRING=\&quot;\&quot;
</span><br>
<span class="quotelev1">&gt; -DPACKAGE_BUGREPORT=\&quot;\&quot; -I/usr/local/include  -DMPI2 -DOPENMPI     -fpic
</span><br>
<span class="quotelev1">&gt;  -O3 -pipe  -g  -c Rmpi.c -o Rmpi.o
</span><br>
<span class="quotelev1">&gt; gcc -std=gnu99 -I/usr/share/R/include -DNDEBUG -DPACKAGE_NAME=\&quot;\&quot;
</span><br>
<span class="quotelev1">&gt; -DPACKAGE_TARNAME=\&quot;\&quot; -DPACKAGE_VERSION=\&quot;\&quot; -DPACKAGE_STRING=\&quot;\&quot;
</span><br>
<span class="quotelev1">&gt; -DPACKAGE_BUGREPORT=\&quot;\&quot; -I/usr/local/include  -DMPI2 -DOPENMPI     -fpic
</span><br>
<span class="quotelev1">&gt;  -O3 -pipe  -g  -c conversion.c -o conversion.o
</span><br>
<span class="quotelev1">&gt; gcc -std=gnu99 -I/usr/share/R/include -DNDEBUG -DPACKAGE_NAME=\&quot;\&quot;
</span><br>
<span class="quotelev1">&gt; -DPACKAGE_TARNAME=\&quot;\&quot; -DPACKAGE_VERSION=\&quot;\&quot; -DPACKAGE_STRING=\&quot;\&quot;
</span><br>
<span class="quotelev1">&gt; -DPACKAGE_BUGREPORT=\&quot;\&quot; -I/usr/local/include  -DMPI2 -DOPENMPI     -fpic
</span><br>
<span class="quotelev1">&gt;  -O3 -pipe  -g  -c internal.c -o internal.o
</span><br>
<span class="quotelev1">&gt; gcc -std=gnu99 -shared -o Rmpi.so RegQuery.o Rmpi.o conversion.o
</span><br>
<span class="quotelev1">&gt; internal.o -L/usr/local/lib -lmpi -lutil -lpthread -L/usr/lib/R/lib -lR
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
<span class="quotelev1">&gt; [ben-Inspiron-1764:26048] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /usr/local/lib/openmpi/mca_paffinity_hwloc:
</span><br>
<span class="quotelev1">&gt; /usr/local/lib/openmpi/mca_paffinity_hwloc.so: undefined symbol:
</span><br>
<span class="quotelev1">&gt; opal_hwloc_topology (ignored)
</span><br>
<span class="quotelev1">&gt; [ben-Inspiron-1764:26048] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /usr/local/lib/openmpi/mca_carto_auto_detect:
</span><br>
<span class="quotelev1">&gt; /usr/local/lib/openmpi/mca_carto_auto_detect.so: undefined symbol:
</span><br>
<span class="quotelev1">&gt; opal_carto_base_graph_get_host_graph_fn (ignored)
</span><br>
<span class="quotelev1">&gt; [ben-Inspiron-1764:26048] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /usr/local/lib/openmpi/mca_carto_file:
</span><br>
<span class="quotelev1">&gt; /usr/local/lib/openmpi/mca_carto_file.so: undefined symbol:
</span><br>
<span class="quotelev1">&gt; opal_carto_base_graph_get_host_graph_fn (ignored)
</span><br>
<span class="quotelev1">&gt; [ben-Inspiron-1764:26048] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /usr/local/lib/openmpi/mca_shmem_mmap:
</span><br>
<span class="quotelev1">&gt; /usr/local/lib/openmpi/mca_shmem_mmap.so: undefined symbol: opal_show_help
</span><br>
<span class="quotelev1">&gt; (ignored)
</span><br>
<span class="quotelev1">&gt; [ben-Inspiron-1764:26048] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /usr/local/lib/openmpi/mca_shmem_posix:
</span><br>
<span class="quotelev1">&gt; /usr/local/lib/openmpi/mca_shmem_posix.so: undefined symbol:
</span><br>
<span class="quotelev1">&gt; opal_shmem_base_output (ignored)
</span><br>
<span class="quotelev1">&gt; [ben-Inspiron-1764:26048] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /usr/local/lib/openmpi/mca_shmem_sysv:
</span><br>
<span class="quotelev1">&gt; /usr/local/lib/openmpi/mca_shmem_sysv.so: undefined symbol: opal_show_help
</span><br>
<span class="quotelev1">&gt; (ignored)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like opal_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during opal_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   opal_shmem_base_select failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned value -1 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [ben-Inspiron-1764:26048] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in
</span><br>
<span class="quotelev1">&gt; file runtime/orte_init.c at line 79
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev1">&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt; developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   ompi_mpi_init: orte_init failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** on a NULL communicator
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL: your MPI job will now abort
</span><br>
<span class="quotelev1">&gt; [ben-Inspiron-1764:26048] Local abort before MPI_INIT completed
</span><br>
<span class="quotelev1">&gt; successfully; not able to aggregate error messages, and not able to
</span><br>
<span class="quotelev1">&gt; guarantee that all other processes were killed!
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10805/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10806.php">George Bosilca: "Re: [OMPI devel] algorithm selection in open mpi"</a>
<li><strong>Previous message:</strong> <a href="10804.php">Rayson Ho: "Re: [OMPI devel] algorithm selection in open mpi"</a>
<li><strong>In reply to:</strong> <a href="10802.php">Benedict Holland: "[OMPI devel] OpenMPI and R"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10833.php">Benedict Holland: "Re: [OMPI devel] OpenMPI and R"</a>
<li><strong>Reply:</strong> <a href="10833.php">Benedict Holland: "Re: [OMPI devel] OpenMPI and R"</a>
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
