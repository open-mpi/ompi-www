<?
$subject_val = "[OMPI devel] 1.5.5rc1 tested: VT check failures on *BSD (with patch).";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 14 01:45:23 2011" -->
<!-- isoreceived="20111214064523" -->
<!-- sent="Tue, 13 Dec 2011 22:44:48 -0800" -->
<!-- isosent="20111214064448" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.5.5rc1 tested: VT check failures on *BSD (with patch)." -->
<!-- id="4EE845E0.1010102_at_lbl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] 1.5.5rc1 tested: VT check failures on *BSD (with patch).<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-14 01:44:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10096.php">Brice Goglin: "Re: [OMPI devel] 1.5.5rc1 tested: REGRESSION on FreeBSD"</a>
<li><strong>Previous message:</strong> <a href="10094.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5.5rc1 tested: REGRESSION on FreeBSD"</a>
<li><strong>In reply to:</strong> <a href="10089.php">Jeff Squyres: "[OMPI devel] 1.5.5rc1 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10110.php">Matthias Jurenz: "Re: [OMPI devel] 1.5.5rc1 tested: VT check failures on *BSD (with patch)."</a>
<li><strong>Reply:</strong> <a href="10110.php">Matthias Jurenz: "Re: [OMPI devel] 1.5.5rc1 tested: VT check failures on *BSD (with patch)."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OK, Jeff probably wants to choke me for all these emails, but here comes 
<br>
another...
<br>
<p>I am now configuring my 5 BSD systems with &quot;--without-hwloc 
<br>
--disable-io-romio&quot;.
<br>
The systems (all using /usr/bin/gcc) are:
<br>
<p>FreeBSD-8.2-RELEASE on amd64:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;gcc (GCC) 4.2.1 20070719  [FreeBSD]
<br>
FreeBSD-7.2-RELEASE on amd64:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;gcc (GCC) 4.2.1 20070719  [FreeBSD]
<br>
FreeBSD-6.3-RELEASE on amd64:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;gcc (GCC) 3.4.6 [FreeBSD] 20060305
<br>
NetBSD-5.1 on amd64:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;gcc (GCC) 4.1.3 20080704 prerelease (NetBSD nb2 20081120)
<br>
OpenBSD-5.0 on amd64:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;gcc (GCC) 4.2.1 20070719
<br>
<p>Running &quot;gmake check&quot; terminates on ALL FIVE systems with:
<br>
<span class="quotelev1">&gt; gmake[8]: Entering directory 
</span><br>
<span class="quotelev1">&gt; `/usr/home/phargrov/openmpi-1.5.5rc1/BUILD-nohwloc/ompi/contrib/vt/vt/extlib/otf/tools/otfprofile'
</span><br>
<span class="quotelev1">&gt;   CXX    otfprofile-clustering.o
</span><br>
<span class="quotelev1">&gt; ../../../../../../../../../ompi/contrib/vt/vt/extlib/otf/tools/otfprofile/clustering.cpp: 
</span><br>
<span class="quotelev1">&gt; In function 'bool ProcessClustering(AllData&amp;)':
</span><br>
<span class="quotelev1">&gt; ../../../../../../../../../ompi/contrib/vt/vt/extlib/otf/tools/otfprofile/clustering.cpp:138: 
</span><br>
<span class="quotelev1">&gt; error: 'WEXITSTATUS' was not declared in this scope
</span><br>
<span class="quotelev1">&gt; gmake[8]: *** [otfprofile-clustering.o] Error 1
</span><br>
<p>As I mentioned in another message, 1.5.4 passed &quot;gmake all install 
<br>
check&quot; on at least the FreeBSD-8.2 system when configured with just 
<br>
&quot;--disable-io-romio&quot;, making this a REGRESSION.
<br>
<p>Applying the 2-line patch below resolved the problem on ALL FIVE systems.
<br>
<p>-Paul
<br>
<p><p>-cut here-
<br>
--- 
<br>
openmpi-1.5.5rc1-orig/ompi/contrib/vt/vt/extlib/otf/tools/otfprofile/clustering.cpp  
<br>
2011-12-13 22:24:10.000000000 -0800
<br>
+++ 
<br>
openmpi-1.5.5rc1/ompi/contrib/vt/vt/extlib/otf/tools/otfprofile/clustering.cpp       
<br>
2011-12-13 22:25:24.000000000 -0800
<br>
@@ -10,6 +10,8 @@
<br>
&nbsp;&nbsp;#include &lt;stdio.h&gt;
<br>
&nbsp;&nbsp;#include &lt;stdlib.h&gt;
<br>
&nbsp;&nbsp;#include &lt;string.h&gt;
<br>
+#include &lt;sys/types.h&gt;
<br>
+#include &lt;sys/wait.h&gt;
<br>
<p>&nbsp;&nbsp;#include &quot;OTF_Platform.h&quot;
<br>
<p>-cut here-
<br>
<p><p><p><p><p><p><p><p><p><p>On 12/13/2011 8:36 PM, Jeff Squyres wrote:
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
<li><strong>Next message:</strong> <a href="10096.php">Brice Goglin: "Re: [OMPI devel] 1.5.5rc1 tested: REGRESSION on FreeBSD"</a>
<li><strong>Previous message:</strong> <a href="10094.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5.5rc1 tested: REGRESSION on FreeBSD"</a>
<li><strong>In reply to:</strong> <a href="10089.php">Jeff Squyres: "[OMPI devel] 1.5.5rc1 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10110.php">Matthias Jurenz: "Re: [OMPI devel] 1.5.5rc1 tested: VT check failures on *BSD (with patch)."</a>
<li><strong>Reply:</strong> <a href="10110.php">Matthias Jurenz: "Re: [OMPI devel] 1.5.5rc1 tested: VT check failures on *BSD (with patch)."</a>
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
