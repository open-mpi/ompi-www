<?
$subject_val = "Re: [OMPI devel] VampirTrace and MPI_Init_thread()";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 13 04:22:22 2010" -->
<!-- isoreceived="20100813082222" -->
<!-- sent="Fri, 13 Aug 2010 10:22:12 +0200" -->
<!-- isosent="20100813082212" -->
<!-- name="Matthias Jurenz" -->
<!-- email="matthias.jurenz_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] VampirTrace and MPI_Init_thread()" -->
<!-- id="201008131022.16359.matthias.jurenz_at_tu-dresden.de" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="AANLkTi=PQJB==rOs8bVTgj1peJdsUwjtvLx=MsMeDcEp_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2010-08-13 04:22:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8271.php">Jeff Squyres: "Re: [OMPI devel] How to disable paffinity"</a>
<li><strong>Previous message:</strong> <a href="8269.php">Ralph Castain: "Re: [OMPI devel] How to disable paffinity"</a>
<li><strong>In reply to:</strong> <a href="8260.php">Lisandro Dalcin: "Re: [OMPI devel] VampirTrace and MPI_Init_thread()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8275.php">Lisandro Dalcin: "Re: [OMPI devel] VampirTrace and MPI_Init_thread()"</a>
<li><strong>Reply:</strong> <a href="8275.php">Lisandro Dalcin: "Re: [OMPI devel] VampirTrace and MPI_Init_thread()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wednesday 11 August 2010 23:16:50 Lisandro Dalcin wrote:
<br>
<span class="quotelev1">&gt; On 11 August 2010 03:12, Matthias Jurenz &lt;matthias.jurenz_at_[hidden]&gt; 
</span><br>
wrote:
<br>
<span class="quotelev2">&gt; &gt; Hello Lisandro,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; this problem will be fixed in the next Open MPI release. There was an
</span><br>
<span class="quotelev2">&gt; &gt; obsolete preprocessor condition around the MPI_Init_thread wrapper, so
</span><br>
<span class="quotelev2">&gt; &gt; the source code could never be compiled :-(
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks for the hint.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Matthias
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OK. Many thanks for you clarification.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; BTW, I have and additional issue. I'm trying to build as shared
</span><br>
<span class="quotelev1">&gt; library from libvt*.a using by passing -whole-archive to the linker.
</span><br>
<span class="quotelev1">&gt; The idea behind this is to use that library with LD_PRELOAD to get MPI
</span><br>
<span class="quotelev1">&gt; tracing of a binary compiled with plain mpicc (i.e, not mpicc-vt). For
</span><br>
<span class="quotelev1">&gt; example, I managed to get this trick working with MPE. Moreover, I can
</span><br>
<span class="quotelev1">&gt; enable MPI profiling at runtime in a Python script using mpi4pt by
</span><br>
<span class="quotelev1">&gt; dlopen'ing the shared lib with profiling symbols before loading the
</span><br>
<span class="quotelev1">&gt; mpi4py.MPI Python extension module. Being able to profile without a
</span><br>
<span class="quotelev1">&gt; recompile is nice ;-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, see this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ pwd
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi/1.4.2/lib
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ ll libvt*
</span><br>
<span class="quotelev1">&gt; -rw-r--r--. 1 root root 410784 2010-05-05 20:40 libvt.a
</span><br>
<span class="quotelev1">&gt; -rw-r--r--. 1 root root 197618 2010-05-05 20:40 libvt.fmpi.a
</span><br>
<span class="quotelev1">&gt; -rw-r--r--. 1 root root 569128 2010-05-05 20:40 libvt.mpi.a
</span><br>
<span class="quotelev1">&gt; -rw-r--r--. 1 root root 503514 2010-05-05 20:40 libvt.omp.a
</span><br>
<span class="quotelev1">&gt; -rw-r--r--. 1 root root 661466 2010-05-05 20:40 libvt.ompi.a
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ nm libvt* | grep pomp_rd_table
</span><br>
<span class="quotelev1">&gt;          U pomp_rd_table
</span><br>
<span class="quotelev1">&gt;          U pomp_rd_table
</span><br>
<span class="quotelev1">&gt;          U pomp_rd_table
</span><br>
<span class="quotelev1">&gt;          U pomp_rd_table
</span><br>
<span class="quotelev1">&gt;          U pomp_rd_table
</span><br>
<span class="quotelev1">&gt;          U pomp_rd_table
</span><br>
<span class="quotelev1">&gt;          U pomp_rd_table
</span><br>
<span class="quotelev1">&gt;          U pomp_rd_table
</span><br>
<span class="quotelev1">&gt;          U pomp_rd_table
</span><br>
<span class="quotelev1">&gt;          U pomp_rd_table
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That symbol (and possibly others) are undefined and I cannot found
</span><br>
<span class="quotelev1">&gt; them elsewhere. Is there any easy way to build a shared lib with the
</span><br>
<span class="quotelev1">&gt; MPI_xxx symbols?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Actually, the symbols above will be defined at compile/link time of the 
<br>
application by the OpenMP instrumentor &quot;OPARI&quot;.
<br>
However, while your application doesn't use OpenMP it should work to define the 
<br>
missing symbols in a separate source file (see attachment) when building the 
<br>
shared library:
<br>
<p>gcc -fPIC -I&lt;mpi-includedir&gt;/vampirtrace -shared missing_syms.c -o 
<br>
libvt.mpi.so -Wl,--whole-archive &lt;mpi-libdir&gt;/libvt.mpi.a &lt;mpi-
<br>
libdir&gt;/libotf.a -Wl,--no-whole-archive -ldl -lz -L&lt;mpi-libdir&gt; -lmpi
<br>
<p>FYI, the next Open MPI 1.5 will come with a newer VampirTrace which provides 
<br>
shared libraries by default.
<br>
<p>Matthias
<br>
<p>
<br><p>
<p>
<br><hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8270/missing_syms.c">missing_syms.c</a>
</ul>
<!-- attachment="missing_syms.c" -->
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8270/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8271.php">Jeff Squyres: "Re: [OMPI devel] How to disable paffinity"</a>
<li><strong>Previous message:</strong> <a href="8269.php">Ralph Castain: "Re: [OMPI devel] How to disable paffinity"</a>
<li><strong>In reply to:</strong> <a href="8260.php">Lisandro Dalcin: "Re: [OMPI devel] VampirTrace and MPI_Init_thread()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8275.php">Lisandro Dalcin: "Re: [OMPI devel] VampirTrace and MPI_Init_thread()"</a>
<li><strong>Reply:</strong> <a href="8275.php">Lisandro Dalcin: "Re: [OMPI devel] VampirTrace and MPI_Init_thread()"</a>
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
