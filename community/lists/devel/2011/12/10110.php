<?
$subject_val = "Re: [OMPI devel] 1.5.5rc1 tested: VT check failures on *BSD (with patch).";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 14 06:41:24 2011" -->
<!-- isoreceived="20111214114124" -->
<!-- sent="Wed, 14 Dec 2011 12:41:17 +0100" -->
<!-- isosent="20111214114117" -->
<!-- name="Matthias Jurenz" -->
<!-- email="matthias.jurenz_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.5.5rc1 tested: VT check failures on *BSD (with patch)." -->
<!-- id="201112141241.18043.matthias.jurenz_at_tu-dresden.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4EE845E0.1010102_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.5.5rc1 tested: VT check failures on *BSD (with patch).<br>
<strong>From:</strong> Matthias Jurenz (<em>matthias.jurenz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-14 06:41:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10111.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25627"</a>
<li><strong>Previous message:</strong> <a href="10109.php">Shiqing Fan: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25627"</a>
<li><strong>In reply to:</strong> <a href="10095.php">Paul H. Hargrove: "[OMPI devel] 1.5.5rc1 tested: VT check failures on *BSD (with patch)."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10099.php">Paul H. Hargrove: "[OMPI devel] 1.5.5rc1 tested: elan"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the hint, Paul.
<br>
This build issue is fixed by CMR #2938.
<br>
<p>Matthias
<br>
<p>On Wednesday 14 December 2011 07:44:48 Paul H. Hargrove wrote:
<br>
<span class="quotelev1">&gt; OK, Jeff probably wants to choke me for all these emails, but here comes
</span><br>
<span class="quotelev1">&gt; another...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am now configuring my 5 BSD systems with &quot;--without-hwloc
</span><br>
<span class="quotelev1">&gt; --disable-io-romio&quot;.
</span><br>
<span class="quotelev1">&gt; The systems (all using /usr/bin/gcc) are:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FreeBSD-8.2-RELEASE on amd64:
</span><br>
<span class="quotelev1">&gt;     gcc (GCC) 4.2.1 20070719  [FreeBSD]
</span><br>
<span class="quotelev1">&gt; FreeBSD-7.2-RELEASE on amd64:
</span><br>
<span class="quotelev1">&gt;     gcc (GCC) 4.2.1 20070719  [FreeBSD]
</span><br>
<span class="quotelev1">&gt; FreeBSD-6.3-RELEASE on amd64:
</span><br>
<span class="quotelev1">&gt;     gcc (GCC) 3.4.6 [FreeBSD] 20060305
</span><br>
<span class="quotelev1">&gt; NetBSD-5.1 on amd64:
</span><br>
<span class="quotelev1">&gt;     gcc (GCC) 4.1.3 20080704 prerelease (NetBSD nb2 20081120)
</span><br>
<span class="quotelev1">&gt; OpenBSD-5.0 on amd64:
</span><br>
<span class="quotelev1">&gt;     gcc (GCC) 4.2.1 20070719
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Running &quot;gmake check&quot; terminates on ALL FIVE systems with:
</span><br>
<span class="quotelev2">&gt; &gt; gmake[8]: Entering directory
</span><br>
<span class="quotelev2">&gt; &gt; `/usr/home/phargrov/openmpi-1.5.5rc1/BUILD-nohwloc/ompi/contrib/vt/vt/ext
</span><br>
<span class="quotelev2">&gt; &gt; lib/otf/tools/otfprofile'
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;   CXX    otfprofile-clustering.o
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../../../../../ompi/contrib/vt/vt/extlib/otf/tools/otfprofile
</span><br>
<span class="quotelev2">&gt; &gt; /clustering.cpp: In function 'bool ProcessClustering(AllData&amp;)':
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../../../../../ompi/contrib/vt/vt/extlib/otf/tools/otfprofile
</span><br>
<span class="quotelev2">&gt; &gt; /clustering.cpp:138: error: 'WEXITSTATUS' was not declared in this scope
</span><br>
<span class="quotelev2">&gt; &gt; gmake[8]: *** [otfprofile-clustering.o] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As I mentioned in another message, 1.5.4 passed &quot;gmake all install
</span><br>
<span class="quotelev1">&gt; check&quot; on at least the FreeBSD-8.2 system when configured with just
</span><br>
<span class="quotelev1">&gt; &quot;--disable-io-romio&quot;, making this a REGRESSION.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Applying the 2-line patch below resolved the problem on ALL FIVE systems.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -cut here-
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; openmpi-1.5.5rc1-orig/ompi/contrib/vt/vt/extlib/otf/tools/otfprofile/cluste
</span><br>
<span class="quotelev1">&gt; ring.cpp 2011-12-13 22:24:10.000000000 -0800
</span><br>
<span class="quotelev1">&gt; +++
</span><br>
<span class="quotelev1">&gt; openmpi-1.5.5rc1/ompi/contrib/vt/vt/extlib/otf/tools/otfprofile/clustering.
</span><br>
<span class="quotelev1">&gt; cpp 2011-12-13 22:25:24.000000000 -0800
</span><br>
<span class="quotelev1">&gt; @@ -10,6 +10,8 @@
</span><br>
<span class="quotelev1">&gt;   #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt;   #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt;   #include &lt;string.h&gt;
</span><br>
<span class="quotelev1">&gt; +#include &lt;sys/types.h&gt;
</span><br>
<span class="quotelev1">&gt; +#include &lt;sys/wait.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   #include &quot;OTF_Platform.h&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -cut here-
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 12/13/2011 8:36 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt; In the usual place:
</span><br>
<span class="quotelev2">&gt; &gt;      <a href="http://www.open-mpi.org/software/ompi/v1.5/">http://www.open-mpi.org/software/ompi/v1.5/</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Please test!  I would really like to get this out by the end of the week.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Two issues *might* still be considered for this release:
</span><br>
<span class="quotelev2">&gt; &gt;      Putting back the openib minor fixes
</span><br>
<span class="quotelev2">&gt; &gt;      <a href="https://svn.open-mpi.org/trac/ompi/ticket/2930">https://svn.open-mpi.org/trac/ompi/ticket/2930</a>
</span><br>
<span class="quotelev2">&gt; &gt;      
</span><br>
<span class="quotelev2">&gt; &gt;      Making the &quot;your SM file is on an NFS!&quot; warning disable-able
</span><br>
<span class="quotelev2">&gt; &gt;      (this is the v1.4 ticket)
</span><br>
<span class="quotelev2">&gt; &gt;      <a href="https://svn.open-mpi.org/trac/ompi/ticket/2937">https://svn.open-mpi.org/trac/ompi/ticket/2937</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; They would both need to be fixed in the *immediate future* to be
</span><br>
<span class="quotelev2">&gt; &gt; considered.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10111.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25627"</a>
<li><strong>Previous message:</strong> <a href="10109.php">Shiqing Fan: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25627"</a>
<li><strong>In reply to:</strong> <a href="10095.php">Paul H. Hargrove: "[OMPI devel] 1.5.5rc1 tested: VT check failures on *BSD (with patch)."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10099.php">Paul H. Hargrove: "[OMPI devel] 1.5.5rc1 tested: elan"</a>
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
