<?
$subject_val = "[OMPI devel] OpenMPI and R";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  2 22:26:51 2012" -->
<!-- isoreceived="20120403022651" -->
<!-- sent="Mon, 2 Apr 2012 22:26:45 -0400" -->
<!-- isosent="20120403022645" -->
<!-- name="Benedict Holland" -->
<!-- email="benedict.m.holland_at_[hidden]" -->
<!-- subject="[OMPI devel] OpenMPI and R" -->
<!-- id="CAD+mzoyhPnCRTd-ByoB31TwXPhyjyMsKs+jBPccU5Z4Zhw1K0g_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] OpenMPI and R<br>
<strong>From:</strong> Benedict Holland (<em>benedict.m.holland_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-02 22:26:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10803.php">roswan ismail: "[OMPI devel] algorithm selection in open mpi"</a>
<li><strong>Previous message:</strong> <a href="10801.php">Paul H. Hargrove: "Re: [OMPI devel] Remove Portals support?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10805.php">Ralph Castain: "Re: [OMPI devel] OpenMPI and R"</a>
<li><strong>Reply:</strong> <a href="10805.php">Ralph Castain: "Re: [OMPI devel] OpenMPI and R"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All,
<br>
<p>I am on ubuntu 11.10 and the only package that they have for OpenMPI is
<br>
1.4.3 and I noticed the latest was 1.5.5 and I decided to try to use it to
<br>
get the Rmpi R package compiled against it. I failed. My R version is 2.15,
<br>
the OpenMPI is 1.5.5. I compiled it and installed it but when I tried to
<br>
compile Rmpi I get the result below. I can try to run this stuff again but
<br>
I had to use the base packages because they worked and I need to get some
<br>
stuff done. I can always recompile though, install and run the Rmpi package
<br>
against the installed OpenMPI stuff. Any ideas what I need to do? Also, is
<br>
there an Ubuntu or Debian package available with the latest and greatest
<br>
and if not, how can I make one?
<br>
<p>Thanks,
<br>
~Ben
<br>
<p>checking for gcc... gcc -std=gnu99
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
I am here /usr/local and it is OpenMPI
<br>
Trying to find mpi.h ...
<br>
Found in /usr/local/include
<br>
Trying to find libmpi.so or libmpich.a ...
<br>
Found libmpi in /usr/local/lib
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
-DPACKAGE_BUGREPORT=\&quot;\&quot; -I/usr/local/include  -DMPI2 -DOPENMPI     -fpic
<br>
&nbsp;-O3 -pipe  -g  -c RegQuery.c -o RegQuery.o
<br>
gcc -std=gnu99 -I/usr/share/R/include -DNDEBUG -DPACKAGE_NAME=\&quot;\&quot;
<br>
-DPACKAGE_TARNAME=\&quot;\&quot; -DPACKAGE_VERSION=\&quot;\&quot; -DPACKAGE_STRING=\&quot;\&quot;
<br>
-DPACKAGE_BUGREPORT=\&quot;\&quot; -I/usr/local/include  -DMPI2 -DOPENMPI     -fpic
<br>
&nbsp;-O3 -pipe  -g  -c Rmpi.c -o Rmpi.o
<br>
gcc -std=gnu99 -I/usr/share/R/include -DNDEBUG -DPACKAGE_NAME=\&quot;\&quot;
<br>
-DPACKAGE_TARNAME=\&quot;\&quot; -DPACKAGE_VERSION=\&quot;\&quot; -DPACKAGE_STRING=\&quot;\&quot;
<br>
-DPACKAGE_BUGREPORT=\&quot;\&quot; -I/usr/local/include  -DMPI2 -DOPENMPI     -fpic
<br>
&nbsp;-O3 -pipe  -g  -c conversion.c -o conversion.o
<br>
gcc -std=gnu99 -I/usr/share/R/include -DNDEBUG -DPACKAGE_NAME=\&quot;\&quot;
<br>
-DPACKAGE_TARNAME=\&quot;\&quot; -DPACKAGE_VERSION=\&quot;\&quot; -DPACKAGE_STRING=\&quot;\&quot;
<br>
-DPACKAGE_BUGREPORT=\&quot;\&quot; -I/usr/local/include  -DMPI2 -DOPENMPI     -fpic
<br>
&nbsp;-O3 -pipe  -g  -c internal.c -o internal.o
<br>
gcc -std=gnu99 -shared -o Rmpi.so RegQuery.o Rmpi.o conversion.o internal.o
<br>
-L/usr/local/lib -lmpi -lutil -lpthread -L/usr/lib/R/lib -lR
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
[ben-Inspiron-1764:26048] mca: base: component_find: unable to open
<br>
/usr/local/lib/openmpi/mca_paffinity_hwloc:
<br>
/usr/local/lib/openmpi/mca_paffinity_hwloc.so: undefined symbol:
<br>
opal_hwloc_topology (ignored)
<br>
[ben-Inspiron-1764:26048] mca: base: component_find: unable to open
<br>
/usr/local/lib/openmpi/mca_carto_auto_detect:
<br>
/usr/local/lib/openmpi/mca_carto_auto_detect.so: undefined symbol:
<br>
opal_carto_base_graph_get_host_graph_fn (ignored)
<br>
[ben-Inspiron-1764:26048] mca: base: component_find: unable to open
<br>
/usr/local/lib/openmpi/mca_carto_file:
<br>
/usr/local/lib/openmpi/mca_carto_file.so: undefined symbol:
<br>
opal_carto_base_graph_get_host_graph_fn (ignored)
<br>
[ben-Inspiron-1764:26048] mca: base: component_find: unable to open
<br>
/usr/local/lib/openmpi/mca_shmem_mmap:
<br>
/usr/local/lib/openmpi/mca_shmem_mmap.so: undefined symbol: opal_show_help
<br>
(ignored)
<br>
[ben-Inspiron-1764:26048] mca: base: component_find: unable to open
<br>
/usr/local/lib/openmpi/mca_shmem_posix:
<br>
/usr/local/lib/openmpi/mca_shmem_posix.so: undefined symbol:
<br>
opal_shmem_base_output (ignored)
<br>
[ben-Inspiron-1764:26048] mca: base: component_find: unable to open
<br>
/usr/local/lib/openmpi/mca_shmem_sysv:
<br>
/usr/local/lib/openmpi/mca_shmem_sysv.so: undefined symbol: opal_show_help
<br>
(ignored)
<br>
--------------------------------------------------------------------------
<br>
It looks like opal_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during opal_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;opal_shmem_base_select failed
<br>
&nbsp;&nbsp;--&gt; Returned value -1 instead of OPAL_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
[ben-Inspiron-1764:26048] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file
<br>
runtime/orte_init.c at line 79
<br>
--------------------------------------------------------------------------
<br>
It looks like MPI_INIT failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during MPI_INIT; some of which are due to configuration or environment
<br>
problems.  This failure appears to be an internal failure; here's some
<br>
additional information (which may only be relevant to an Open MPI
<br>
developer):
<br>
<p>&nbsp;&nbsp;ompi_mpi_init: orte_init failed
<br>
&nbsp;&nbsp;--&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
*** An error occurred in MPI_Init
<br>
*** on a NULL communicator
<br>
*** MPI_ERRORS_ARE_FATAL: your MPI job will now abort
<br>
[ben-Inspiron-1764:26048] Local abort before MPI_INIT completed
<br>
successfully; not able to aggregate error messages, and not able to
<br>
guarantee that all other processes were killed!
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10802/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10803.php">roswan ismail: "[OMPI devel] algorithm selection in open mpi"</a>
<li><strong>Previous message:</strong> <a href="10801.php">Paul H. Hargrove: "Re: [OMPI devel] Remove Portals support?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10805.php">Ralph Castain: "Re: [OMPI devel] OpenMPI and R"</a>
<li><strong>Reply:</strong> <a href="10805.php">Ralph Castain: "Re: [OMPI devel] OpenMPI and R"</a>
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
