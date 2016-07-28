<?
$subject_val = "Re: [OMPI devel] VampirTrace and MPI_Init_thread()";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 11 17:17:08 2010" -->
<!-- isoreceived="20100811211708" -->
<!-- sent="Wed, 11 Aug 2010 18:16:50 -0300" -->
<!-- isosent="20100811211650" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] VampirTrace and MPI_Init_thread()" -->
<!-- id="AANLkTi=PQJB==rOs8bVTgj1peJdsUwjtvLx=MsMeDcEp_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="201008110812.29635.matthias.jurenz_at_tu-dresden.de" -->
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
<strong>Date:</strong> 2010-08-11 17:16:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8261.php">Terry Dontje: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
<li><strong>Previous message:</strong> <a href="8259.php">Samuel K. Gutierrez: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
<li><strong>In reply to:</strong> <a href="8252.php">Matthias Jurenz: "Re: [OMPI devel] VampirTrace and MPI_Init_thread()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8270.php">Matthias Jurenz: "Re: [OMPI devel] VampirTrace and MPI_Init_thread()"</a>
<li><strong>Reply:</strong> <a href="8270.php">Matthias Jurenz: "Re: [OMPI devel] VampirTrace and MPI_Init_thread()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 11 August 2010 03:12, Matthias Jurenz &lt;matthias.jurenz_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hello Lisandro,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; this problem will be fixed in the next Open MPI release. There was an obsolete
</span><br>
<span class="quotelev1">&gt; preprocessor condition around the MPI_Init_thread wrapper, so the source code
</span><br>
<span class="quotelev1">&gt; could never be compiled :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the hint.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Matthias
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>OK. Many thanks for you clarification.
<br>
<p>BTW, I have and additional issue. I'm trying to build as shared
<br>
library from libvt*.a using by passing -whole-archive to the linker.
<br>
The idea behind this is to use that library with LD_PRELOAD to get MPI
<br>
tracing of a binary compiled with plain mpicc (i.e, not mpicc-vt). For
<br>
example, I managed to get this trick working with MPE. Moreover, I can
<br>
enable MPI profiling at runtime in a Python script using mpi4pt by
<br>
dlopen'ing the shared lib with profiling symbols before loading the
<br>
mpi4py.MPI Python extension module. Being able to profile without a
<br>
recompile is nice ;-)
<br>
<p>However, see this:
<br>
<p>$ pwd
<br>
/usr/local/openmpi/1.4.2/lib
<br>
<p>$ ll libvt*
<br>
-rw-r--r--. 1 root root 410784 2010-05-05 20:40 libvt.a
<br>
-rw-r--r--. 1 root root 197618 2010-05-05 20:40 libvt.fmpi.a
<br>
-rw-r--r--. 1 root root 569128 2010-05-05 20:40 libvt.mpi.a
<br>
-rw-r--r--. 1 root root 503514 2010-05-05 20:40 libvt.omp.a
<br>
-rw-r--r--. 1 root root 661466 2010-05-05 20:40 libvt.ompi.a
<br>
<p>$ nm libvt* | grep pomp_rd_table
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;U pomp_rd_table
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;U pomp_rd_table
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;U pomp_rd_table
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;U pomp_rd_table
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;U pomp_rd_table
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;U pomp_rd_table
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;U pomp_rd_table
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;U pomp_rd_table
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;U pomp_rd_table
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;U pomp_rd_table
<br>
<p>That symbol (and possibly others) are undefined and I cannot found
<br>
them elsewhere. Is there any easy way to build a shared lib with the
<br>
MPI_xxx symbols?
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
<li><strong>Next message:</strong> <a href="8261.php">Terry Dontje: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
<li><strong>Previous message:</strong> <a href="8259.php">Samuel K. Gutierrez: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
<li><strong>In reply to:</strong> <a href="8252.php">Matthias Jurenz: "Re: [OMPI devel] VampirTrace and MPI_Init_thread()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8270.php">Matthias Jurenz: "Re: [OMPI devel] VampirTrace and MPI_Init_thread()"</a>
<li><strong>Reply:</strong> <a href="8270.php">Matthias Jurenz: "Re: [OMPI devel] VampirTrace and MPI_Init_thread()"</a>
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
