<?
$subject_val = "Re: [OMPI devel] 1.5.5rc1 tested: MacOS/ppc (w/ 1 failure and a &quot;CMR&quot;)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 15 04:02:25 2012" -->
<!-- isoreceived="20120215090225" -->
<!-- sent="Wed, 15 Feb 2012 10:02:15 +0100" -->
<!-- isosent="20120215090215" -->
<!-- name="Matthias Jurenz" -->
<!-- email="matthias.jurenz_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.5.5rc1 tested: MacOS/ppc (w/ 1 failure and a &amp;quot;CMR&amp;quot;)" -->
<!-- id="201202151002.16251.matthias.jurenz_at_tu-dresden.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI devel] 1.5.5rc1 tested: MacOS/ppc (w/ 1 failure and a &amp;quot;CMR&amp;quot;)" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.5.5rc1 tested: MacOS/ppc (w/ 1 failure and a &quot;CMR&quot;)<br>
<strong>From:</strong> Matthias Jurenz (<em>matthias.jurenz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-15 04:02:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10421.php">Paul Hargrove: "Re: [OMPI devel] 1.5.5rc1 tested: MacOS/ppc (w/ 1 failure and a &quot;CMR&quot;)"</a>
<li><strong>Previous message:</strong> <a href="10419.php">Paul Hargrove: "[OMPI devel] VT build failure with Clang++"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/12/10090.php">Paul H. Hargrove: "[OMPI devel] 1.5.5rc1 tested: MacOS/ppc (w/ 1 failure and a &quot;CMR&quot;)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10421.php">Paul Hargrove: "Re: [OMPI devel] 1.5.5rc1 tested: MacOS/ppc (w/ 1 failure and a &quot;CMR&quot;)"</a>
<li><strong>Reply:</strong> <a href="10421.php">Paul Hargrove: "Re: [OMPI devel] 1.5.5rc1 tested: MacOS/ppc (w/ 1 failure and a &quot;CMR&quot;)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Unfortunately, we don't have access to a PPC system with MacOS 10.4 to try to 
<br>
reproduce the error.
<br>
<p>Paul, could you please check for the definition of the macro 
<br>
OPAL_HAVE_WEAK_SYMBOLS in ompi_config.h? I assume that the ancient GNU compiler 
<br>
on PPC/MacOS10.4 does not support weak-symbols which cause the multiply 
<br>
definitions.
<br>
<p>Furthermore, could you please try to build the following code to test whether 
<br>
the PMPI interface of Open MPI works in general?
<br>
<p>#include &lt;stdio.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
<p>int MPI_Finalize() {
<br>
&nbsp;&nbsp;printf( &quot;inside MPI_Finalize() wrapper\n&quot; );
<br>
&nbsp;&nbsp;return PMPI_Finalize();
<br>
}
<br>
<p>int main(int argc, char** argv) {
<br>
&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
}
<br>
<p>Maybe the error occurs only if this code is in a shared library which depends 
<br>
on the MPI library (as does the libvt-mpi). Therefor, run the following:
<br>
<p>$ gcc -fPIC -shared pmpi_test.c -I&lt;mpi-inc-dir&gt; -o libpmpi_test.dylib -L&lt;mpi-
<br>
lib-dir&gt; -lmpi
<br>
<p><p>Thanks!
<br>
<p>Matthias
<br>
<p><span class="quotelev1">&gt; On 12/14/2011 2:51 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev1">&gt; I've attempted to reproduce the failure reported below for MacOS 10.4
</span><br>
<span class="quotelev1">&gt; for PPC on an X86-64 system.
</span><br>
<span class="quotelev1">&gt; First, I've realized that while I reported &quot;make check&quot; as the source of
</span><br>
<span class="quotelev1">&gt; the problem, it occurs at &quot;make&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regardless of that mistake in my reporting, I was unable to reproduce
</span><br>
<span class="quotelev1">&gt; the problem, making this a PPC-specific problem as far as I can tell.
</span><br>
<span class="quotelev1">&gt; Instead of 255 instances of &quot;ld: multiple definitions of symbol _MPI_*&quot;
</span><br>
<span class="quotelev1">&gt; I get instances of &quot;ld: warning multiple definitions of symbol _MPI*&quot;,
</span><br>
<span class="quotelev1">&gt; where the only difference is the addition of the word &quot;warning&quot;.
</span><br>
<span class="quotelev1">&gt; However, this is apparently non-fatal on the x86-64 but fatal by default
</span><br>
<span class="quotelev1">&gt; on PPC.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 12/13/2011 9:30 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Using the 1.5.5rc1 tarball, I've repeated tests on the following
</span><br>
<span class="quotelev2">&gt; &gt; platforms for which I recently reported 1.4.5rc1 results:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; MacOS 10.5 (Leopard) on PPC:
</span><br>
<span class="quotelev2">&gt; &gt; powerpc-apple-darwin9-gcc-4.0.1 (GCC) 4.0.1 (Apple Inc. build 5488)
</span><br>
<span class="quotelev2">&gt; &gt; MacOS 10.4 (Tiger) on PPC:
</span><br>
<span class="quotelev2">&gt; &gt; powerpc-apple-darwin8-gcc-4.0.1 (GCC) 4.0.1 (Apple Computer, Inc.
</span><br>
<span class="quotelev2">&gt; &gt; build 5341)
</span><br>
<span class="quotelev2">&gt; &gt; MacOS 10.3 (Panther) on PPC:
</span><br>
<span class="quotelev2">&gt; &gt; gcc (GCC) 3.3 20030304 (Apple Computer, Inc. build 1666)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On MacOS 10.5 &quot;make all install check&quot; completed w/o incident.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Unfortunately, on MacOS 10.4 (Tiger) I get multiply defined symbols
</span><br>
<span class="quotelev2">&gt; &gt; from VT in &quot;make check&quot;:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Making check in vtlib
</span><br>
<span class="quotelev3">&gt; &gt;&gt; CCLD libvt-mpi.la
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ld: multiple definitions of symbol _MPI_Abort
</span><br>
<span class="quotelev3">&gt; &gt;&gt; .libs/libvt_mpi_la-vt_mpiwrap.o definition of _MPI_Abort in section
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (__TEXT,__text)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; /Users/phargrov/openmpi-1.5.5rc1/BUILD-
</span><br>
dflt/ompi/contrib/vt/vt/../../../.libs/libmpi.dylib(single
<br>
<span class="quotelev3">&gt; &gt;&gt; module) definition of _MPI_Abort
</span><br>
<span class="quotelev2">&gt; &gt; [...253 more &quot;ld: multiple definitions of symbol&quot; errors...]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ld: multiple definitions of symbol _MPI_Win_wait
</span><br>
<span class="quotelev3">&gt; &gt;&gt; .libs/libvt_mpi_la-vt_mpiwrap.o definition of _MPI_Win_wait in
</span><br>
<span class="quotelev3">&gt; &gt;&gt; section (__TEXT,__text)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; /Users/phargrov/openmpi-1.5.5rc1/BUILD-
</span><br>
dflt/ompi/contrib/vt/vt/../../../.libs/libmpi.dylib(single
<br>
<span class="quotelev3">&gt; &gt;&gt; module) definition of _MPI_Win_wait
</span><br>
<span class="quotelev3">&gt; &gt;&gt; /usr/bin/libtool: internal link edit command failed
</span><br>
<span class="quotelev3">&gt; &gt;&gt; make[4]: *** [libvt-mpi.la] Error 1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Unlike the compilation failure for 1.4.5rc1 on MacOS 10.3 (Panther), I
</span><br>
<span class="quotelev2">&gt; &gt; got the following at configure time:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; configure: WARNING: Open MPI does not support OS X prior to version
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 10.4 (Tiger)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; configure: error: Cannot continue
</span><br>
<span class="quotelev2">&gt; &gt; So I would like to &quot;CMR&quot; this logic to the 1.4 branch.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Paul
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 12/13/2011 8:36 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; In the usual place:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/software/ompi/v1.5/">http://www.open-mpi.org/software/ompi/v1.5/</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Please test! I would really like to get this out by the end of the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; week.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Two issues *might* still be considered for this release:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Putting back the openib minor fixes
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/2930">https://svn.open-mpi.org/trac/ompi/ticket/2930</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Making the &quot;your SM file is on an NFS!&quot; warning disable-able
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (this is the v1.4 ticket)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/2937">https://svn.open-mpi.org/trac/ompi/ticket/2937</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; They would both need to be fixed in the *immediate future* to be
</span><br>
<span class="quotelev3">&gt; &gt;&gt; considered.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; HPC Research Department                   Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10421.php">Paul Hargrove: "Re: [OMPI devel] 1.5.5rc1 tested: MacOS/ppc (w/ 1 failure and a &quot;CMR&quot;)"</a>
<li><strong>Previous message:</strong> <a href="10419.php">Paul Hargrove: "[OMPI devel] VT build failure with Clang++"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/12/10090.php">Paul H. Hargrove: "[OMPI devel] 1.5.5rc1 tested: MacOS/ppc (w/ 1 failure and a &quot;CMR&quot;)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10421.php">Paul Hargrove: "Re: [OMPI devel] 1.5.5rc1 tested: MacOS/ppc (w/ 1 failure and a &quot;CMR&quot;)"</a>
<li><strong>Reply:</strong> <a href="10421.php">Paul Hargrove: "Re: [OMPI devel] 1.5.5rc1 tested: MacOS/ppc (w/ 1 failure and a &quot;CMR&quot;)"</a>
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
