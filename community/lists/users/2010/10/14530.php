<?
$subject_val = "Re: [OMPI users] segmentation fault in mpiexec (Linux, Oracle/Sun C)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 21 10:20:30 2010" -->
<!-- isoreceived="20101021142030" -->
<!-- sent="Thu, 21 Oct 2010 15:41:48 +0200 (CEST)" -->
<!-- isosent="20101021134148" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] segmentation fault in mpiexec (Linux, Oracle/Sun C)" -->
<!-- id="201010211341.o9LDfmmM026197_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI users] segmentation fault in mpiexec (Linux, Oracle/Sun C)" -->
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
<strong>Subject:</strong> Re: [OMPI users] segmentation fault in mpiexec (Linux, Oracle/Sun C)<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-21 09:41:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14531.php">Jeff Squyres: "Re: [OMPI users] Question about MPI_Barrier"</a>
<li><strong>Previous message:</strong> <a href="14529.php">Jeff Squyres: "Re: [OMPI users] segmentation fault in mpiexec (Linux, Oracle/Sun C)"</a>
<li><strong>Maybe in reply to:</strong> <a href="14506.php">Siegmar Gross: "[OMPI users] segmentation fault in mpiexec (Linux, Oracle/Sun C)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14534.php">Terry Dontje: "Re: [OMPI users] segmentation fault in mpiexec (Linux, Oracle/Sun C)"</a>
<li><strong>Reply:</strong> <a href="14534.php">Terry Dontje: "Re: [OMPI users] segmentation fault in mpiexec (Linux, Oracle/Sun C)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;   I wonder if the error below be due to crap being left over in the 
</span><br>
<span class="quotelev1">&gt; source tree.  Can you do a &quot;make clean&quot;.  Note on a new checkout from 
</span><br>
<span class="quotelev1">&gt; the v1.5 svn branch I was able to build 64 bit with the following 
</span><br>
<span class="quotelev1">&gt; configure line:
</span><br>
<p>linpc4 openmpi-1.5-Linux.x86_64.32_cc 123 make clean
<br>
Making clean in test
<br>
make[1]: Entering directory 
<br>
...
<br>
<p>../openmpi-1.5/configure \
<br>
&nbsp;&nbsp;FC=f95 F77=f77 CC=cc CXX=CC --without-openib --without-udapl \
<br>
&nbsp;&nbsp;--enable-heterogeneous --enable-cxx-exceptions --enable-shared \
<br>
&nbsp;&nbsp;--enable-orterun-prefix-by-default --with-sge --disable-mpi-threads \
<br>
&nbsp;&nbsp;--enable-mpi-f90 --with-mpi-f90-size=small --disable-progress-threads \
<br>
&nbsp;&nbsp;--prefix=/usr/local/openmpi-1.5_32_cc CFLAGS=-m64 CXXFLAGS=-m64 \
<br>
&nbsp;&nbsp;FFLAGS=-m64 FCFLAGS=-m64
<br>
<p>make |&amp; tee log.make.$SYSTEM_ENV.$MACHINE_ENV.32_cc
<br>
<p><p>...
<br>
make[3]: Leaving directory 
<br>
`/export2/src/openmpi-1.5/openmpi-1.5-Linux.x86_64.32_cc/opal/libltdl'
<br>
make[2]: Leaving directory 
<br>
`/export2/src/openmpi-1.5/openmpi-1.5-Linux.x86_64.32_cc/opal/libltdl'
<br>
Making all in asm
<br>
make[2]: Entering directory 
<br>
`/export2/src/openmpi-1.5/openmpi-1.5-Linux.x86_64.32_cc/opal/asm'
<br>
&nbsp;&nbsp;CC     asm.lo
<br>
rm -f atomic-asm.S
<br>
ln -s &quot;.../opal/asm/generated/atomic-ia32-linux-nongas.s&quot; atomic-asm.S
<br>
&nbsp;&nbsp;CPPAS  atomic-asm.lo
<br>
cc1: error: unrecognized command line option &quot;-fno-directives-only&quot;
<br>
cc: cpp failed for atomic-asm.S
<br>
make[2]: *** [atomic-asm.lo] Error 1
<br>
make[2]: Leaving directory `.../opal/asm'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/.../opal'
<br>
make: *** [all-recursive] Error 1
<br>
<p><p>Do you know where I can find &quot;-fno-directives-only&quot;? &quot;grep&quot; didn't
<br>
show any results. I tried to rebuild the package with my original
<br>
settings and didn't succeed (same error as above) so that something
<br>
must have changed in the last two days on &quot;linpc4&quot;. The operator told
<br>
me that he hasn't changed anything, so I have no idea why I cannot
<br>
build the package today. The log-files from &quot;configure&quot; are identical,
<br>
but the log-files from &quot;make&quot; differ (I changed the language with
<br>
&quot;setenv LC_ALL C&quot; because I have some errors on other machines as well
<br>
and wanted english messages so that you can read them).
<br>
<p><p>tyr openmpi-1.5 198 diff 
<br>
&nbsp;&nbsp;openmpi-1.5-Linux.x86_64.32_cc.old/log.configure.Linux.x86_64.32_cc
<br>
&nbsp;&nbsp;openmpi-1.5-Linux.x86_64.32_cc/log.configure.Linux.x86_64.32_cc |more
<br>
<p>tyr openmpi-1.5 199 diff 
<br>
&nbsp;&nbsp;openmpi-1.5-Linux.x86_64.32_cc.old/log.make.Linux.x86_64.32_cc
<br>
&nbsp;&nbsp;openmpi-1.5-Linux.x86_64.32_cc/log.make.Linux.x86_64.32_cc | more
<br>
3c3
<br>
&lt; make[1]: F&#195;&#188;r das Ziel &#194;&#187;all&#194;&#171; ist nichts zu tun.
<br>
<pre>
---
&gt; make[1]: Nothing to be done for `all'.
7c7
&lt; make[1]: F&#195;&#188;r das Ziel &#194;&#187;all&#194;&#171; ist nichts zu tun.
---
&gt; make[1]: Nothing to be done for `all'.
74,76c74,76
&lt; &lt;Kommandozeile&gt;:19:0: Warnung: &#194;&#187;__FLT_EVAL_METHOD__&#194;&#171; redefiniert
&lt; &lt;eingebaut&gt;:93:0: Anmerkung: dies ist die Stelle der vorherigen Definition
&lt;   CCLD   libasm.la
---
&gt; cc1: error: unrecognized command line option &quot;-fno-directives-only&quot;
&gt; cc: cpp failed for atomic-asm.S
&gt; make[2]: *** [atomic-asm.lo] Error 1
78,426c78
&lt; Making all in datatype
&lt; make[2]: Entering directory `/.../opal/datatype'
&lt;   CC     libdatatype_reliable_la-opal_datatype_pack.lo
&lt;   CC     libdatatype_reliable_la-opal_datatype_unpack.lo
&lt;   CCLD   libdatatype_reliable.la
&lt;   CC     opal_convertor.lo
...
The difference is that two days ago &quot;__FLT_EVAL_METHOD__&quot; was redefined
and today it isn't. Obviously the package cannot be build without that
redefinition.
...
make[3]: Leaving directory `/.../opal/libltdl'
make[2]: Leaving directory `/.../opal/libltdl'
Making all in asm
make[2]: Entering directory `/.../opal/asm'
  CC     asm.lo
rm -f atomic-asm.S
ln -s &quot;../../../openmpi-1.5/opal/asm/generated/atomic-ia32-linux-nongas.s&quot;
  atomic-asm.S
  CPPAS  atomic-asm.lo
&lt;Kommandozeile&gt;:19:0: Warnung: &#194;&#187;__FLT_EVAL_METHOD__&#194;&#171; redefiniert
&lt;eingebaut&gt;:93:0: Anmerkung: dies ist die Stelle der vorherigen Definition
  CCLD   libasm.la
make[2]: Leaving directory `/.../opal/asm'
Making all in datatype
make[2]: Entering directory `/.../opal/datatype'
  CC     libdatatype_reliable_la-opal_datatype_pack.lo
  CC     libdatatype_reliable_la-opal_datatype_unpack.lo
...
Therefore I removed &quot;setenv LC_ALL C&quot; from my environment and logged in
into linpc4 once more. But still no success. The messages are once more
in german but &quot;__FLT_EVAL_METHOD__&quot; wasn't redefined.
tyr openmpi-1.5 205 diff
  openmpi-1.5-Linux.x86_64.32_cc.old/log.make.Linux.x86_64.32_cc
  openmpi-1.5-Linux.x86_64.32_cc/log.make.Linux.x86_64.32_cc | more
74,76c74,76
&lt; &lt;Kommandozeile&gt;:19:0: Warnung: &#194;&#187;__FLT_EVAL_METHOD__&#194;&#171; redefiniert
&lt; &lt;eingebaut&gt;:93:0: Anmerkung: dies ist die Stelle der vorherigen Definition
&lt;   CCLD   libasm.la
---
&gt; cc1: Fehler: nicht erkannte Kommandozeilenoption &#194;&#187;-fno-directives-only&#194;&#171;
&gt; cc: cpp failed for atomic-asm.S
&gt; make[2]: *** [atomic-asm.lo] Fehler 1
78,426c78
&lt; Making all in datatype
&lt; make[2]: Entering directory `/.../opal/datatype'
&lt;   CC     libdatatype_reliable_la-opal_datatype_pack.lo
&lt;   CC     libdatatype_reliable_la-opal_datatype_unpack.lo
&lt;   CCLD   libdatatype_reliable.la
...
I have no idea why it happens, but hopefully you know what happens.
Kind regards
Siegmar
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14531.php">Jeff Squyres: "Re: [OMPI users] Question about MPI_Barrier"</a>
<li><strong>Previous message:</strong> <a href="14529.php">Jeff Squyres: "Re: [OMPI users] segmentation fault in mpiexec (Linux, Oracle/Sun C)"</a>
<li><strong>Maybe in reply to:</strong> <a href="14506.php">Siegmar Gross: "[OMPI users] segmentation fault in mpiexec (Linux, Oracle/Sun C)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14534.php">Terry Dontje: "Re: [OMPI users] segmentation fault in mpiexec (Linux, Oracle/Sun C)"</a>
<li><strong>Reply:</strong> <a href="14534.php">Terry Dontje: "Re: [OMPI users] segmentation fault in mpiexec (Linux, Oracle/Sun C)"</a>
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
