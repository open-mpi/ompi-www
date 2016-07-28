<?
$subject_val = "Re: [OMPI users] segmentation fault in mpiexec (Linux, Oracle/Sun C)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 21 10:44:06 2010" -->
<!-- isoreceived="20101021144406" -->
<!-- sent="Thu, 21 Oct 2010 10:43:30 -0400" -->
<!-- isosent="20101021144330" -->
<!-- name="Terry Dontje" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] segmentation fault in mpiexec (Linux, Oracle/Sun C)" -->
<!-- id="4CC05192.5050302_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201010211341.o9LDfmmM026197_at_tyr.informatik.hs-fulda.de" -->
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
<strong>From:</strong> Terry Dontje (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-21 10:43:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14535.php">Eugene Loh: "Re: [OMPI users] Question about MPI_Barrier"</a>
<li><strong>Previous message:</strong> <a href="14533.php">Raymond Muno: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
<li><strong>In reply to:</strong> <a href="14530.php">Siegmar Gross: "Re: [OMPI users] segmentation fault in mpiexec (Linux, Oracle/Sun C)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;When you do a make can your add a V=1 to have the actual compile lines 
<br>
printed out.  That will probably show you the line with 
<br>
-fno-directives-only in it.  Which is odd because I think that option is 
<br>
a gcc'ism and don't know why it would show up in a studio build (note my 
<br>
build doesn't show it).
<br>
<p>Maybe a copy of the config.log and config.status might be helpful.  Have 
<br>
you tried to start from square one?  It really seems like the configure 
<br>
or libtool might be setting things up for gcc which is odd with the 
<br>
configure line you show.
<br>
<p>--td
<br>
<p>On 10/21/2010 09:41 AM, Siegmar Gross wrote:
<br>
<span class="quotelev2">&gt;&gt;    I wonder if the error below be due to crap being left over in the
</span><br>
<span class="quotelev2">&gt;&gt; source tree.  Can you do a &quot;make clean&quot;.  Note on a new checkout from
</span><br>
<span class="quotelev2">&gt;&gt; the v1.5 svn branch I was able to build 64 bit with the following
</span><br>
<span class="quotelev2">&gt;&gt; configure line:
</span><br>
<span class="quotelev1">&gt; linpc4 openmpi-1.5-Linux.x86_64.32_cc 123 make clean
</span><br>
<span class="quotelev1">&gt; Making clean in test
</span><br>
<span class="quotelev1">&gt; make[1]: Entering directory
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ../openmpi-1.5/configure \
</span><br>
<span class="quotelev1">&gt;    FC=f95 F77=f77 CC=cc CXX=CC --without-openib --without-udapl \
</span><br>
<span class="quotelev1">&gt;    --enable-heterogeneous --enable-cxx-exceptions --enable-shared \
</span><br>
<span class="quotelev1">&gt;    --enable-orterun-prefix-by-default --with-sge --disable-mpi-threads \
</span><br>
<span class="quotelev1">&gt;    --enable-mpi-f90 --with-mpi-f90-size=small --disable-progress-threads \
</span><br>
<span class="quotelev1">&gt;    --prefix=/usr/local/openmpi-1.5_32_cc CFLAGS=-m64 CXXFLAGS=-m64 \
</span><br>
<span class="quotelev1">&gt;    FFLAGS=-m64 FCFLAGS=-m64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make |&amp;  tee log.make.$SYSTEM_ENV.$MACHINE_ENV.32_cc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/export2/src/openmpi-1.5/openmpi-1.5-Linux.x86_64.32_cc/opal/libltdl'
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/export2/src/openmpi-1.5/openmpi-1.5-Linux.x86_64.32_cc/opal/libltdl'
</span><br>
<span class="quotelev1">&gt; Making all in asm
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory
</span><br>
<span class="quotelev1">&gt; `/export2/src/openmpi-1.5/openmpi-1.5-Linux.x86_64.32_cc/opal/asm'
</span><br>
<span class="quotelev1">&gt;    CC     asm.lo
</span><br>
<span class="quotelev1">&gt; rm -f atomic-asm.S
</span><br>
<span class="quotelev1">&gt; ln -s &quot;.../opal/asm/generated/atomic-ia32-linux-nongas.s&quot; atomic-asm.S
</span><br>
<span class="quotelev1">&gt;    CPPAS  atomic-asm.lo
</span><br>
<span class="quotelev1">&gt; cc1: error: unrecognized command line option &quot;-fno-directives-only&quot;
</span><br>
<span class="quotelev1">&gt; cc: cpp failed for atomic-asm.S
</span><br>
<span class="quotelev1">&gt; make[2]: *** [atomic-asm.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `.../opal/asm'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/.../opal'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you know where I can find &quot;-fno-directives-only&quot;? &quot;grep&quot; didn't
</span><br>
<span class="quotelev1">&gt; show any results. I tried to rebuild the package with my original
</span><br>
<span class="quotelev1">&gt; settings and didn't succeed (same error as above) so that something
</span><br>
<span class="quotelev1">&gt; must have changed in the last two days on &quot;linpc4&quot;. The operator told
</span><br>
<span class="quotelev1">&gt; me that he hasn't changed anything, so I have no idea why I cannot
</span><br>
<span class="quotelev1">&gt; build the package today. The log-files from &quot;configure&quot; are identical,
</span><br>
<span class="quotelev1">&gt; but the log-files from &quot;make&quot; differ (I changed the language with
</span><br>
<span class="quotelev1">&gt; &quot;setenv LC_ALL C&quot; because I have some errors on other machines as well
</span><br>
<span class="quotelev1">&gt; and wanted english messages so that you can read them).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; tyr openmpi-1.5 198 diff
</span><br>
<span class="quotelev1">&gt;    openmpi-1.5-Linux.x86_64.32_cc.old/log.configure.Linux.x86_64.32_cc
</span><br>
<span class="quotelev1">&gt;    openmpi-1.5-Linux.x86_64.32_cc/log.configure.Linux.x86_64.32_cc |more
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; tyr openmpi-1.5 199 diff
</span><br>
<span class="quotelev1">&gt;    openmpi-1.5-Linux.x86_64.32_cc.old/log.make.Linux.x86_64.32_cc
</span><br>
<span class="quotelev1">&gt;    openmpi-1.5-Linux.x86_64.32_cc/log.make.Linux.x86_64.32_cc | more
</span><br>
<span class="quotelev1">&gt; 3c3
</span><br>
<span class="quotelev1">&gt; &lt;  make[1]: F&#195;&#188;r das Ziel &#194;&#187;all&#194;&#171; ist nichts zu tun.
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Nothing to be done for `all'.
</span><br>
<span class="quotelev1">&gt; 7c7
</span><br>
<span class="quotelev1">&gt; &lt;  make[1]: F&#195;&#188;r das Ziel &#194;&#187;all&#194;&#171; ist nichts zu tun.
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Nothing to be done for `all'.
</span><br>
<span class="quotelev1">&gt; 74,76c74,76
</span><br>
<span class="quotelev1">&gt; &lt;  &lt;Kommandozeile&gt;:19:0: Warnung: &#194;&#187;__FLT_EVAL_METHOD__&#194;&#171; redefiniert
</span><br>
<span class="quotelev1">&gt; &lt;  &lt;eingebaut&gt;:93:0: Anmerkung: dies ist die Stelle der vorherigen Definition
</span><br>
<span class="quotelev1">&gt; &lt;    CCLD   libasm.la
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev2">&gt;&gt; cc1: error: unrecognized command line option &quot;-fno-directives-only&quot;
</span><br>
<span class="quotelev2">&gt;&gt; cc: cpp failed for atomic-asm.S
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [atomic-asm.lo] Error 1
</span><br>
<span class="quotelev1">&gt; 78,426c78
</span><br>
<span class="quotelev1">&gt; &lt;  Making all in datatype
</span><br>
<span class="quotelev1">&gt; &lt;  make[2]: Entering directory `/.../opal/datatype'
</span><br>
<span class="quotelev1">&gt; &lt;    CC     libdatatype_reliable_la-opal_datatype_pack.lo
</span><br>
<span class="quotelev1">&gt; &lt;    CC     libdatatype_reliable_la-opal_datatype_unpack.lo
</span><br>
<span class="quotelev1">&gt; &lt;    CCLD   libdatatype_reliable.la
</span><br>
<span class="quotelev1">&gt; &lt;    CC     opal_convertor.lo
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The difference is that two days ago &quot;__FLT_EVAL_METHOD__&quot; was redefined
</span><br>
<span class="quotelev1">&gt; and today it isn't. Obviously the package cannot be build without that
</span><br>
<span class="quotelev1">&gt; redefinition.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/.../opal/libltdl'
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/.../opal/libltdl'
</span><br>
<span class="quotelev1">&gt; Making all in asm
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/.../opal/asm'
</span><br>
<span class="quotelev1">&gt;    CC     asm.lo
</span><br>
<span class="quotelev1">&gt; rm -f atomic-asm.S
</span><br>
<span class="quotelev1">&gt; ln -s &quot;../../../openmpi-1.5/opal/asm/generated/atomic-ia32-linux-nongas.s&quot;
</span><br>
<span class="quotelev1">&gt;    atomic-asm.S
</span><br>
<span class="quotelev1">&gt;    CPPAS  atomic-asm.lo
</span><br>
<span class="quotelev1">&gt; &lt;Kommandozeile&gt;:19:0: Warnung: &#194;&#187;__FLT_EVAL_METHOD__&#194;&#171; redefiniert
</span><br>
<span class="quotelev1">&gt; &lt;eingebaut&gt;:93:0: Anmerkung: dies ist die Stelle der vorherigen Definition
</span><br>
<span class="quotelev1">&gt;    CCLD   libasm.la
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/.../opal/asm'
</span><br>
<span class="quotelev1">&gt; Making all in datatype
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/.../opal/datatype'
</span><br>
<span class="quotelev1">&gt;    CC     libdatatype_reliable_la-opal_datatype_pack.lo
</span><br>
<span class="quotelev1">&gt;    CC     libdatatype_reliable_la-opal_datatype_unpack.lo
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Therefore I removed &quot;setenv LC_ALL C&quot; from my environment and logged in
</span><br>
<span class="quotelev1">&gt; into linpc4 once more. But still no success. The messages are once more
</span><br>
<span class="quotelev1">&gt; in german but &quot;__FLT_EVAL_METHOD__&quot; wasn't redefined.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; tyr openmpi-1.5 205 diff
</span><br>
<span class="quotelev1">&gt;    openmpi-1.5-Linux.x86_64.32_cc.old/log.make.Linux.x86_64.32_cc
</span><br>
<span class="quotelev1">&gt;    openmpi-1.5-Linux.x86_64.32_cc/log.make.Linux.x86_64.32_cc | more
</span><br>
<span class="quotelev1">&gt; 74,76c74,76
</span><br>
<span class="quotelev1">&gt; &lt;  &lt;Kommandozeile&gt;:19:0: Warnung: &#194;&#187;__FLT_EVAL_METHOD__&#194;&#171; redefiniert
</span><br>
<span class="quotelev1">&gt; &lt;  &lt;eingebaut&gt;:93:0: Anmerkung: dies ist die Stelle der vorherigen Definition
</span><br>
<span class="quotelev1">&gt; &lt;    CCLD   libasm.la
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev2">&gt;&gt; cc1: Fehler: nicht erkannte Kommandozeilenoption &#194;&#187;-fno-directives-only&#194;&#171;
</span><br>
<span class="quotelev2">&gt;&gt; cc: cpp failed for atomic-asm.S
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [atomic-asm.lo] Fehler 1
</span><br>
<span class="quotelev1">&gt; 78,426c78
</span><br>
<span class="quotelev1">&gt; &lt;  Making all in datatype
</span><br>
<span class="quotelev1">&gt; &lt;  make[2]: Entering directory `/.../opal/datatype'
</span><br>
<span class="quotelev1">&gt; &lt;    CC     libdatatype_reliable_la-opal_datatype_pack.lo
</span><br>
<span class="quotelev1">&gt; &lt;    CC     libdatatype_reliable_la-opal_datatype_unpack.lo
</span><br>
<span class="quotelev1">&gt; &lt;    CCLD   libdatatype_reliable.la
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have no idea why it happens, but hopefully you know what happens.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kind regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Siegmar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Oracle
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle * - Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14534/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-14534/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14535.php">Eugene Loh: "Re: [OMPI users] Question about MPI_Barrier"</a>
<li><strong>Previous message:</strong> <a href="14533.php">Raymond Muno: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
<li><strong>In reply to:</strong> <a href="14530.php">Siegmar Gross: "Re: [OMPI users] segmentation fault in mpiexec (Linux, Oracle/Sun C)"</a>
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
