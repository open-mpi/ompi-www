<?
$subject_val = "Re: [OMPI devel] 1.5.5rc1 tested: MacOS/ppc (w/ 1 failure and a &quot;CMR&quot;)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 14 02:51:44 2011" -->
<!-- isoreceived="20111214075144" -->
<!-- sent="Tue, 13 Dec 2011 23:51:19 -0800" -->
<!-- isosent="20111214075119" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.5.5rc1 tested: MacOS/ppc (w/ 1 failure and a &amp;quot;CMR&amp;quot;)" -->
<!-- id="4EE85577.9020402_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4EE83469.2080802_at_lbl.gov" -->
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
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-14 02:51:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10104.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5.5rc1 tested: MacOS 10.4 x86-64 hwloc build failure"</a>
<li><strong>Previous message:</strong> <a href="10102.php">Brice Goglin: "Re: [OMPI devel] 1.5.5rc1 tested: MacOS 10.4 x86-64 hwloc build failure"</a>
<li><strong>In reply to:</strong> <a href="10090.php">Paul H. Hargrove: "[OMPI devel] 1.5.5rc1 tested: MacOS/ppc (w/ 1 failure and a &quot;CMR&quot;)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/02/10420.php">Matthias Jurenz: "Re: [OMPI devel] 1.5.5rc1 tested: MacOS/ppc (w/ 1 failure and a &quot;CMR&quot;)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've attempted to reproduce the failure reported below for MacOS 10.4 
<br>
for PPC on an X86-64 system.
<br>
First, I've realized that while I reported &quot;make check&quot; as the source of 
<br>
the problem, it occurs at &quot;make&quot;.
<br>
<p>Regardless of that mistake in my reporting, I was unable to reproduce 
<br>
the problem, making this a PPC-specific problem as far as I can tell.
<br>
Instead of 255 instances of &quot;ld: multiple definitions of symbol _MPI_*&quot; 
<br>
I get instances of &quot;ld: warning multiple definitions of symbol _MPI*&quot;, 
<br>
where the only difference is the addition of the word &quot;warning&quot;.  
<br>
However, this is apparently non-fatal on the x86-64 but fatal by default 
<br>
on PPC.
<br>
<p>-Paul
<br>
<p>On 12/13/2011 9:30 PM, Paul H. Hargrove wrote:
<br>
<span class="quotelev1">&gt; Using the 1.5.5rc1 tarball, I've repeated tests on the following 
</span><br>
<span class="quotelev1">&gt; platforms for which I recently reported 1.4.5rc1 results:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MacOS 10.5 (Leopard) on PPC:
</span><br>
<span class="quotelev1">&gt;    powerpc-apple-darwin9-gcc-4.0.1 (GCC) 4.0.1 (Apple Inc. build 5488)
</span><br>
<span class="quotelev1">&gt; MacOS 10.4 (Tiger) on PPC:
</span><br>
<span class="quotelev1">&gt;    powerpc-apple-darwin8-gcc-4.0.1 (GCC) 4.0.1 (Apple Computer, Inc. 
</span><br>
<span class="quotelev1">&gt; build 5341)
</span><br>
<span class="quotelev1">&gt; MacOS 10.3 (Panther) on PPC:
</span><br>
<span class="quotelev1">&gt;    gcc (GCC) 3.3 20030304 (Apple Computer, Inc. build 1666)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On MacOS 10.5 &quot;make all install check&quot; completed w/o incident.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Unfortunately, on MacOS 10.4 (Tiger) I get multiply defined symbols 
</span><br>
<span class="quotelev1">&gt; from VT in &quot;make check&quot;:
</span><br>
<span class="quotelev2">&gt;&gt; Making check in vtlib
</span><br>
<span class="quotelev2">&gt;&gt;   CCLD   libvt-mpi.la
</span><br>
<span class="quotelev2">&gt;&gt; ld: multiple definitions of symbol _MPI_Abort
</span><br>
<span class="quotelev2">&gt;&gt; .libs/libvt_mpi_la-vt_mpiwrap.o definition of _MPI_Abort in section 
</span><br>
<span class="quotelev2">&gt;&gt; (__TEXT,__text)
</span><br>
<span class="quotelev2">&gt;&gt; /Users/phargrov/openmpi-1.5.5rc1/BUILD-dflt/ompi/contrib/vt/vt/../../../.libs/libmpi.dylib(single 
</span><br>
<span class="quotelev2">&gt;&gt; module) definition of _MPI_Abort
</span><br>
<span class="quotelev1">&gt; [...253 more &quot;ld: multiple definitions of symbol&quot; errors...]
</span><br>
<span class="quotelev2">&gt;&gt; ld: multiple definitions of symbol _MPI_Win_wait
</span><br>
<span class="quotelev2">&gt;&gt; .libs/libvt_mpi_la-vt_mpiwrap.o definition of _MPI_Win_wait in 
</span><br>
<span class="quotelev2">&gt;&gt; section (__TEXT,__text)
</span><br>
<span class="quotelev2">&gt;&gt; /Users/phargrov/openmpi-1.5.5rc1/BUILD-dflt/ompi/contrib/vt/vt/../../../.libs/libmpi.dylib(single 
</span><br>
<span class="quotelev2">&gt;&gt; module) definition of _MPI_Win_wait
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/libtool: internal link edit command failed
</span><br>
<span class="quotelev2">&gt;&gt; make[4]: *** [libvt-mpi.la] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Unlike the compilation failure for 1.4.5rc1 on MacOS 10.3 (Panther), I 
</span><br>
<span class="quotelev1">&gt; got the following at configure time:
</span><br>
<span class="quotelev2">&gt;&gt; configure: WARNING: Open MPI does not support OS X prior to version 
</span><br>
<span class="quotelev2">&gt;&gt; 10.4 (Tiger)
</span><br>
<span class="quotelev2">&gt;&gt; configure: error: Cannot continue
</span><br>
<span class="quotelev1">&gt; So I would like to &quot;CMR&quot; this logic to the 1.4 branch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 12/13/2011 8:36 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; In the usual place:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      <a href="http://www.open-mpi.org/software/ompi/v1.5/">http://www.open-mpi.org/software/ompi/v1.5/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please test!  I would really like to get this out by the end of the 
</span><br>
<span class="quotelev2">&gt;&gt; week.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Two issues *might* still be considered for this release:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      Putting back the openib minor fixes
</span><br>
<span class="quotelev2">&gt;&gt;      <a href="https://svn.open-mpi.org/trac/ompi/ticket/2930">https://svn.open-mpi.org/trac/ompi/ticket/2930</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      Making the &quot;your SM file is on an NFS!&quot; warning disable-able
</span><br>
<span class="quotelev2">&gt;&gt;      (this is the v1.4 ticket)
</span><br>
<span class="quotelev2">&gt;&gt;      <a href="https://svn.open-mpi.org/trac/ompi/ticket/2937">https://svn.open-mpi.org/trac/ompi/ticket/2937</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; They would both need to be fixed in the *immediate future* to be 
</span><br>
<span class="quotelev2">&gt;&gt; considered.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10104.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5.5rc1 tested: MacOS 10.4 x86-64 hwloc build failure"</a>
<li><strong>Previous message:</strong> <a href="10102.php">Brice Goglin: "Re: [OMPI devel] 1.5.5rc1 tested: MacOS 10.4 x86-64 hwloc build failure"</a>
<li><strong>In reply to:</strong> <a href="10090.php">Paul H. Hargrove: "[OMPI devel] 1.5.5rc1 tested: MacOS/ppc (w/ 1 failure and a &quot;CMR&quot;)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/02/10420.php">Matthias Jurenz: "Re: [OMPI devel] 1.5.5rc1 tested: MacOS/ppc (w/ 1 failure and a &quot;CMR&quot;)"</a>
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
