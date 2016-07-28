<?
$subject_val = "Re: [OMPI devel] VampirTrace and MPI_Init_thread()";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 16 05:10:45 2010" -->
<!-- isoreceived="20100816091045" -->
<!-- sent="Mon, 16 Aug 2010 11:10:33 +0200" -->
<!-- isosent="20100816091033" -->
<!-- name="Matthias Jurenz" -->
<!-- email="matthias.jurenz_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] VampirTrace and MPI_Init_thread()" -->
<!-- id="201008161110.39493.matthias.jurenz_at_tu-dresden.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTi=QABHMLGmMV49X-SghFsRfsGzmxAg3Hoh5Dcmq_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] VampirTrace and MPI_Init_thread()<br>
<strong>From:</strong> Matthias Jurenz (<em>matthias.jurenz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-16 05:10:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8279.php">Jeff Squyres: "[OMPI devel] autogen.sh improvements"</a>
<li><strong>Previous message:</strong> <a href="8277.php">Ralph Castain: "Re: [OMPI devel] How to disable paffinity"</a>
<li><strong>In reply to:</strong> <a href="8275.php">Lisandro Dalcin: "Re: [OMPI devel] VampirTrace and MPI_Init_thread()"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Saturday 14 August 2010 00:10:49 Lisandro Dalcin wrote:
<br>
<span class="quotelev1">&gt; On 13 August 2010 05:22, Matthias Jurenz &lt;matthias.jurenz_at_[hidden]&gt; 
</span><br>
wrote:
<br>
<span class="quotelev2">&gt; &gt; On Wednesday 11 August 2010 23:16:50 Lisandro Dalcin wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On 11 August 2010 03:12, Matthias Jurenz &lt;matthias.jurenz_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Hello Lisandro,
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; this problem will be fixed in the next Open MPI release. There was an
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; obsolete preprocessor condition around the MPI_Init_thread wrapper, so
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; the source code could never be compiled :-(
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Thanks for the hint.
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Matthias
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; OK. Many thanks for you clarification.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; BTW, I have and additional issue. I'm trying to build as shared
</span><br>
<span class="quotelev3">&gt; &gt;&gt; library from libvt*.a using by passing -whole-archive to the linker.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The idea behind this is to use that library with LD_PRELOAD to get MPI
</span><br>
<span class="quotelev3">&gt; &gt;&gt; tracing of a binary compiled with plain mpicc (i.e, not mpicc-vt). For
</span><br>
<span class="quotelev3">&gt; &gt;&gt; example, I managed to get this trick working with MPE. Moreover, I can
</span><br>
<span class="quotelev3">&gt; &gt;&gt; enable MPI profiling at runtime in a Python script using mpi4pt by
</span><br>
<span class="quotelev3">&gt; &gt;&gt; dlopen'ing the shared lib with profiling symbols before loading the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mpi4py.MPI Python extension module. Being able to profile without a
</span><br>
<span class="quotelev3">&gt; &gt;&gt; recompile is nice ;-)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; However, see this:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; $ pwd
</span><br>
<span class="quotelev3">&gt; &gt;&gt; /usr/local/openmpi/1.4.2/lib
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; $ ll libvt*
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -rw-r--r--. 1 root root 410784 2010-05-05 20:40 libvt.a
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -rw-r--r--. 1 root root 197618 2010-05-05 20:40 libvt.fmpi.a
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -rw-r--r--. 1 root root 569128 2010-05-05 20:40 libvt.mpi.a
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -rw-r--r--. 1 root root 503514 2010-05-05 20:40 libvt.omp.a
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -rw-r--r--. 1 root root 661466 2010-05-05 20:40 libvt.ompi.a
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; $ nm libvt* | grep pomp_rd_table
</span><br>
<span class="quotelev3">&gt; &gt;&gt;          U pomp_rd_table
</span><br>
<span class="quotelev3">&gt; &gt;&gt;          U pomp_rd_table
</span><br>
<span class="quotelev3">&gt; &gt;&gt;          U pomp_rd_table
</span><br>
<span class="quotelev3">&gt; &gt;&gt;          U pomp_rd_table
</span><br>
<span class="quotelev3">&gt; &gt;&gt;          U pomp_rd_table
</span><br>
<span class="quotelev3">&gt; &gt;&gt;          U pomp_rd_table
</span><br>
<span class="quotelev3">&gt; &gt;&gt;          U pomp_rd_table
</span><br>
<span class="quotelev3">&gt; &gt;&gt;          U pomp_rd_table
</span><br>
<span class="quotelev3">&gt; &gt;&gt;          U pomp_rd_table
</span><br>
<span class="quotelev3">&gt; &gt;&gt;          U pomp_rd_table
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; That symbol (and possibly others) are undefined and I cannot found
</span><br>
<span class="quotelev3">&gt; &gt;&gt; them elsewhere. Is there any easy way to build a shared lib with the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MPI_xxx symbols?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Actually, the symbols above will be defined at compile/link time of the
</span><br>
<span class="quotelev2">&gt; &gt; application by the OpenMP instrumentor &quot;OPARI&quot;.
</span><br>
<span class="quotelev2">&gt; &gt; However, while your application doesn't use OpenMP it should work to
</span><br>
<span class="quotelev2">&gt; &gt; define the missing symbols in a separate source file (see attachment)
</span><br>
<span class="quotelev2">&gt; &gt; when building the shared library:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; gcc -fPIC -I&lt;mpi-includedir&gt;/vampirtrace -shared missing_syms.c -o
</span><br>
<span class="quotelev2">&gt; &gt; libvt.mpi.so -Wl,--whole-archive &lt;mpi-libdir&gt;/libvt.mpi.a &lt;mpi-
</span><br>
<span class="quotelev2">&gt; &gt; libdir&gt;/libotf.a -Wl,--no-whole-archive -ldl -lz -L&lt;mpi-libdir&gt; -lmpi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OK. Many thanks for the hint.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I was able to build a shared lib, dlopen() it at runtime and get MPI
</span><br>
<span class="quotelev1">&gt; traces from Python scripts without need of recompiles with mpicc-vt.
</span><br>
<span class="quotelev1">&gt; Sweet!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; FYI, the next Open MPI 1.5 will come with a newer VampirTrace which
</span><br>
<span class="quotelev2">&gt; &gt; provides shared libraries by default.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Nice! ... Perhaps Open MPI mpiexec's could gain a -vt flag to enable
</span><br>
<span class="quotelev1">&gt; traces at runtime (should be easy to implement with LD_PRELOAD,
</span><br>
<span class="quotelev1">&gt; right?)...
</span><br>
<p>We plan to provide the script &quot;vtpreload.sh&quot; in future releases of VampirTrace 
<br>
which can be prepended to the application executable, like:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun -np 2 vtpreload.sh &lt;binary&gt;
<br>
<p>In addition to preloading the VT library to get the MPI functions, the 
<br>
script will be capable to instrument almost each other function by using 
<br>
binary instrumentation. Furthermore, it will do some nm/ldd magic to determine 
<br>
the suitable VT library to preload.
<br>
<p>An additional '-vt' flag for mpirun sounds good. This flags could also receive 
<br>
some options for the vtpreload script.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; BTW, I understand Open MPI 1.5 VT will have the MPI_Init_thread()
</span><br>
<span class="quotelev1">&gt; issue fixed. Any chance for v1.4 series?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Yes, it will be fixed in Open MPI 1.4.3, too.
<br>
<p>Matthias
<br>
<p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8278/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8279.php">Jeff Squyres: "[OMPI devel] autogen.sh improvements"</a>
<li><strong>Previous message:</strong> <a href="8277.php">Ralph Castain: "Re: [OMPI devel] How to disable paffinity"</a>
<li><strong>In reply to:</strong> <a href="8275.php">Lisandro Dalcin: "Re: [OMPI devel] VampirTrace and MPI_Init_thread()"</a>
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
