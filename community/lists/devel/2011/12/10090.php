<?
$subject_val = "[OMPI devel] 1.5.5rc1 tested: MacOS/ppc (w/ 1 failure and a &quot;CMR&quot;)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 14 00:30:39 2011" -->
<!-- isoreceived="20111214053039" -->
<!-- sent="Tue, 13 Dec 2011 21:30:17 -0800" -->
<!-- isosent="20111214053017" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.5.5rc1 tested: MacOS/ppc (w/ 1 failure and a &amp;quot;CMR&amp;quot;)" -->
<!-- id="4EE83469.2080802_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="A23B6CCA-353C-4E7D-92EB-638DB6C87180_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] 1.5.5rc1 tested: MacOS/ppc (w/ 1 failure and a &quot;CMR&quot;)<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-14 00:30:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10091.php">Paul H. Hargrove: "[OMPI devel] 1.5.5rc1 tested: REGRESSION on FreeBSD"</a>
<li><strong>Previous message:</strong> <a href="10089.php">Jeff Squyres: "[OMPI devel] 1.5.5rc1 is out"</a>
<li><strong>In reply to:</strong> <a href="10089.php">Jeff Squyres: "[OMPI devel] 1.5.5rc1 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10103.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5.5rc1 tested: MacOS/ppc (w/ 1 failure and a &quot;CMR&quot;)"</a>
<li><strong>Reply:</strong> <a href="10103.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5.5rc1 tested: MacOS/ppc (w/ 1 failure and a &quot;CMR&quot;)"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/02/10420.php">Matthias Jurenz: "Re: [OMPI devel] 1.5.5rc1 tested: MacOS/ppc (w/ 1 failure and a &quot;CMR&quot;)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Using the 1.5.5rc1 tarball, I've repeated tests on the following 
<br>
platforms for which I recently reported 1.4.5rc1 results:
<br>
<p>MacOS 10.5 (Leopard) on PPC:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;powerpc-apple-darwin9-gcc-4.0.1 (GCC) 4.0.1 (Apple Inc. build 5488)
<br>
MacOS 10.4 (Tiger) on PPC:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;powerpc-apple-darwin8-gcc-4.0.1 (GCC) 4.0.1 (Apple Computer, Inc. 
<br>
build 5341)
<br>
MacOS 10.3 (Panther) on PPC:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;gcc (GCC) 3.3 20030304 (Apple Computer, Inc. build 1666)
<br>
<p>On MacOS 10.5 &quot;make all install check&quot; completed w/o incident.
<br>
<p>Unfortunately, on MacOS 10.4 (Tiger) I get multiply defined symbols from 
<br>
VT in &quot;make check&quot;:
<br>
<span class="quotelev1">&gt; Making check in vtlib
</span><br>
<span class="quotelev1">&gt;   CCLD   libvt-mpi.la
</span><br>
<span class="quotelev1">&gt; ld: multiple definitions of symbol _MPI_Abort
</span><br>
<span class="quotelev1">&gt; .libs/libvt_mpi_la-vt_mpiwrap.o definition of _MPI_Abort in section 
</span><br>
<span class="quotelev1">&gt; (__TEXT,__text)
</span><br>
<span class="quotelev1">&gt; /Users/phargrov/openmpi-1.5.5rc1/BUILD-dflt/ompi/contrib/vt/vt/../../../.libs/libmpi.dylib(single 
</span><br>
<span class="quotelev1">&gt; module) definition of _MPI_Abort
</span><br>
[...253 more &quot;ld: multiple definitions of symbol&quot; errors...]
<br>
<span class="quotelev1">&gt; ld: multiple definitions of symbol _MPI_Win_wait
</span><br>
<span class="quotelev1">&gt; .libs/libvt_mpi_la-vt_mpiwrap.o definition of _MPI_Win_wait in section 
</span><br>
<span class="quotelev1">&gt; (__TEXT,__text)
</span><br>
<span class="quotelev1">&gt; /Users/phargrov/openmpi-1.5.5rc1/BUILD-dflt/ompi/contrib/vt/vt/../../../.libs/libmpi.dylib(single 
</span><br>
<span class="quotelev1">&gt; module) definition of _MPI_Win_wait
</span><br>
<span class="quotelev1">&gt; /usr/bin/libtool: internal link edit command failed
</span><br>
<span class="quotelev1">&gt; make[4]: *** [libvt-mpi.la] Error 1
</span><br>
<p><p>Unlike the compilation failure for 1.4.5rc1 on MacOS 10.3 (Panther), I 
<br>
got the following at configure time:
<br>
<span class="quotelev1">&gt; configure: WARNING: Open MPI does not support OS X prior to version 
</span><br>
<span class="quotelev1">&gt; 10.4 (Tiger)
</span><br>
<span class="quotelev1">&gt; configure: error: Cannot continue
</span><br>
So I would like to &quot;CMR&quot; this logic to the 1.4 branch.
<br>
<p><p>-Paul
<br>
<p><p>On 12/13/2011 8:36 PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; In the usual place:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/software/ompi/v1.5/">http://www.open-mpi.org/software/ompi/v1.5/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please test!  I would really like to get this out by the end of the week.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Two issues *might* still be considered for this release:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      Putting back the openib minor fixes
</span><br>
<span class="quotelev1">&gt;      <a href="https://svn.open-mpi.org/trac/ompi/ticket/2930">https://svn.open-mpi.org/trac/ompi/ticket/2930</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      Making the &quot;your SM file is on an NFS!&quot; warning disable-able
</span><br>
<span class="quotelev1">&gt;      (this is the v1.4 ticket)
</span><br>
<span class="quotelev1">&gt;      <a href="https://svn.open-mpi.org/trac/ompi/ticket/2937">https://svn.open-mpi.org/trac/ompi/ticket/2937</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; They would both need to be fixed in the *immediate future* to be considered.
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
<li><strong>Next message:</strong> <a href="10091.php">Paul H. Hargrove: "[OMPI devel] 1.5.5rc1 tested: REGRESSION on FreeBSD"</a>
<li><strong>Previous message:</strong> <a href="10089.php">Jeff Squyres: "[OMPI devel] 1.5.5rc1 is out"</a>
<li><strong>In reply to:</strong> <a href="10089.php">Jeff Squyres: "[OMPI devel] 1.5.5rc1 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10103.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5.5rc1 tested: MacOS/ppc (w/ 1 failure and a &quot;CMR&quot;)"</a>
<li><strong>Reply:</strong> <a href="10103.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5.5rc1 tested: MacOS/ppc (w/ 1 failure and a &quot;CMR&quot;)"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/02/10420.php">Matthias Jurenz: "Re: [OMPI devel] 1.5.5rc1 tested: MacOS/ppc (w/ 1 failure and a &quot;CMR&quot;)"</a>
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
