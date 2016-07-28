<?
$subject_val = "Re: [OMPI devel] VampirTrace and MPI_Init_thread()";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 13 18:10:54 2010" -->
<!-- isoreceived="20100813221054" -->
<!-- sent="Fri, 13 Aug 2010 19:10:49 -0300" -->
<!-- isosent="20100813221049" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] VampirTrace and MPI_Init_thread()" -->
<!-- id="AANLkTi=QABHMLGmMV49X-SghFsRfsGzmxAg3Hoh5Dcmq_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="201008131022.16359.matthias.jurenz_at_tu-dresden.de" -->
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
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-13 18:10:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8276.php">’≈æß: "Re: [OMPI devel] How to disable paffinity"</a>
<li><strong>Previous message:</strong> <a href="8274.php">Paul H. Hargrove: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
<li><strong>In reply to:</strong> <a href="8270.php">Matthias Jurenz: "Re: [OMPI devel] VampirTrace and MPI_Init_thread()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8278.php">Matthias Jurenz: "Re: [OMPI devel] VampirTrace and MPI_Init_thread()"</a>
<li><strong>Reply:</strong> <a href="8278.php">Matthias Jurenz: "Re: [OMPI devel] VampirTrace and MPI_Init_thread()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 13 August 2010 05:22, Matthias Jurenz &lt;matthias.jurenz_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Wednesday 11 August 2010 23:16:50 Lisandro Dalcin wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On 11 August 2010 03:12, Matthias Jurenz &lt;matthias.jurenz_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hello Lisandro,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; this problem will be fixed in the next Open MPI release. There was an
</span><br>
<span class="quotelev3">&gt;&gt; &gt; obsolete preprocessor condition around the MPI_Init_thread wrapper, so
</span><br>
<span class="quotelev3">&gt;&gt; &gt; the source code could never be compiled :-(
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Thanks for the hint.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Matthias
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OK. Many thanks for you clarification.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; BTW, I have and additional issue. I'm trying to build as shared
</span><br>
<span class="quotelev2">&gt;&gt; library from libvt*.a using by passing -whole-archive to the linker.
</span><br>
<span class="quotelev2">&gt;&gt; The idea behind this is to use that library with LD_PRELOAD to get MPI
</span><br>
<span class="quotelev2">&gt;&gt; tracing of a binary compiled with plain mpicc (i.e, not mpicc-vt). For
</span><br>
<span class="quotelev2">&gt;&gt; example, I managed to get this trick working with MPE. Moreover, I can
</span><br>
<span class="quotelev2">&gt;&gt; enable MPI profiling at runtime in a Python script using mpi4pt by
</span><br>
<span class="quotelev2">&gt;&gt; dlopen'ing the shared lib with profiling symbols before loading the
</span><br>
<span class="quotelev2">&gt;&gt; mpi4py.MPI Python extension module. Being able to profile without a
</span><br>
<span class="quotelev2">&gt;&gt; recompile is nice ;-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, see this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ pwd
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi/1.4.2/lib
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ ll libvt*
</span><br>
<span class="quotelev2">&gt;&gt; -rw-r--r--. 1 root root 410784 2010-05-05 20:40 libvt.a
</span><br>
<span class="quotelev2">&gt;&gt; -rw-r--r--. 1 root root 197618 2010-05-05 20:40 libvt.fmpi.a
</span><br>
<span class="quotelev2">&gt;&gt; -rw-r--r--. 1 root root 569128 2010-05-05 20:40 libvt.mpi.a
</span><br>
<span class="quotelev2">&gt;&gt; -rw-r--r--. 1 root root 503514 2010-05-05 20:40 libvt.omp.a
</span><br>
<span class="quotelev2">&gt;&gt; -rw-r--r--. 1 root root 661466 2010-05-05 20:40 libvt.ompi.a
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ nm libvt* | grep pomp_rd_table
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;U pomp_rd_table
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;U pomp_rd_table
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;U pomp_rd_table
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;U pomp_rd_table
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;U pomp_rd_table
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;U pomp_rd_table
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;U pomp_rd_table
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;U pomp_rd_table
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;U pomp_rd_table
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;U pomp_rd_table
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That symbol (and possibly others) are undefined and I cannot found
</span><br>
<span class="quotelev2">&gt;&gt; them elsewhere. Is there any easy way to build a shared lib with the
</span><br>
<span class="quotelev2">&gt;&gt; MPI_xxx symbols?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Actually, the symbols above will be defined at compile/link time of the
</span><br>
<span class="quotelev1">&gt; application by the OpenMP instrumentor &quot;OPARI&quot;.
</span><br>
<span class="quotelev1">&gt; However, while your application doesn't use OpenMP it should work to define the
</span><br>
<span class="quotelev1">&gt; missing symbols in a separate source file (see attachment) when building the
</span><br>
<span class="quotelev1">&gt; shared library:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; gcc -fPIC -I&lt;mpi-includedir&gt;/vampirtrace -shared missing_syms.c -o
</span><br>
<span class="quotelev1">&gt; libvt.mpi.so -Wl,--whole-archive &lt;mpi-libdir&gt;/libvt.mpi.a &lt;mpi-
</span><br>
<span class="quotelev1">&gt; libdir&gt;/libotf.a -Wl,--no-whole-archive -ldl -lz -L&lt;mpi-libdir&gt; -lmpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>OK. Many thanks for the hint.
<br>
<p>I was able to build a shared lib, dlopen() it at runtime and get MPI
<br>
traces from Python scripts without need of recompiles with mpicc-vt.
<br>
Sweet!
<br>
<p><span class="quotelev1">&gt; FYI, the next Open MPI 1.5 will come with a newer VampirTrace which provides
</span><br>
<span class="quotelev1">&gt; shared libraries by default.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Nice! ... Perhaps Open MPI mpiexec's could gain a -vt flag to enable
<br>
traces at runtime (should be easy to implement with LD_PRELOAD,
<br>
right?)...
<br>
<p>BTW, I understand Open MPI 1.5 VT will have the MPI_Init_thread()
<br>
issue fixed. Any chance for v1.4 series?
<br>
<p><p><pre>
-- 
Lisandro Dalcin
---------------
CIMEC (INTEC/CONICET-UNL)
Predio CONICET-Santa Fe
Colectora RN 168 Km 472, Paraje El Pozo
Tel: +54-342-4511594 (ext 1011)
Tel/Fax: +54-342-4511169
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8276.php">’≈æß: "Re: [OMPI devel] How to disable paffinity"</a>
<li><strong>Previous message:</strong> <a href="8274.php">Paul H. Hargrove: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
<li><strong>In reply to:</strong> <a href="8270.php">Matthias Jurenz: "Re: [OMPI devel] VampirTrace and MPI_Init_thread()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8278.php">Matthias Jurenz: "Re: [OMPI devel] VampirTrace and MPI_Init_thread()"</a>
<li><strong>Reply:</strong> <a href="8278.php">Matthias Jurenz: "Re: [OMPI devel] VampirTrace and MPI_Init_thread()"</a>
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
