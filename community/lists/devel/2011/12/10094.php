<?
$subject_val = "Re: [OMPI devel] 1.5.5rc1 tested: REGRESSION on FreeBSD";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 14 01:18:11 2011" -->
<!-- isoreceived="20111214061811" -->
<!-- sent="Tue, 13 Dec 2011 22:17:50 -0800" -->
<!-- isosent="20111214061750" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.5.5rc1 tested: REGRESSION on FreeBSD" -->
<!-- id="4EE83F8E.6010106_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4EE8358D.1040301_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.5.5rc1 tested: REGRESSION on FreeBSD<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-14 01:17:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10095.php">Paul H. Hargrove: "[OMPI devel] 1.5.5rc1 tested: VT check failures on *BSD (with patch)."</a>
<li><strong>Previous message:</strong> <a href="10093.php">Paul H. Hargrove: "[OMPI devel] 1.5.5rc1 tested: hwloc build failure on Red Hat Linux 8"</a>
<li><strong>In reply to:</strong> <a href="10091.php">Paul H. Hargrove: "[OMPI devel] 1.5.5rc1 tested: REGRESSION on FreeBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10096.php">Brice Goglin: "Re: [OMPI devel] 1.5.5rc1 tested: REGRESSION on FreeBSD"</a>
<li><strong>Reply:</strong> <a href="10096.php">Brice Goglin: "Re: [OMPI devel] 1.5.5rc1 tested: REGRESSION on FreeBSD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My OpenBSD and NetBSD testers have the same behavior, but now I see that 
<br>
I was at warned...
<br>
<p>On all the affected systems I found the following (modulo the system 
<br>
tuple) in the configure output:
<br>
<span class="quotelev1">&gt; checking which OS support to include... Unsupported! 
</span><br>
<span class="quotelev1">&gt; (x86_64-unknown-openbsd5.0)
</span><br>
<span class="quotelev1">&gt; configure: WARNING: 
</span><br>
<span class="quotelev1">&gt; ***********************************************************
</span><br>
<span class="quotelev1">&gt; configure: WARNING: *** hwloc does not support this system.
</span><br>
<span class="quotelev1">&gt; configure: WARNING: *** hwloc will *attempt* to build (but it may not 
</span><br>
<span class="quotelev1">&gt; work).
</span><br>
<span class="quotelev1">&gt; configure: WARNING: *** hwloc run-time results may be reduced to 
</span><br>
<span class="quotelev1">&gt; showing just one processor.
</span><br>
<span class="quotelev1">&gt; configure: WARNING: *** You have been warned.
</span><br>
<span class="quotelev1">&gt; configure: WARNING: *** Pausing to give you time to read this message...
</span><br>
<span class="quotelev1">&gt; configure: WARNING: 
</span><br>
<span class="quotelev1">&gt; ***********************************************************
</span><br>
<p>Clearly my failures are &quot;known&quot; to somebody.
<br>
<p>However, I have multiple &quot;issues&quot; with the current behavior.
<br>
1) At an minimum the WARNING mention --without-hwloc
<br>
2) Is this &quot;build and pray&quot; approach to unknown platforms really wise?
<br>
3) Shouldn't something appear in the README about this?  The 
<br>
--without-hwloc option doesn't even appear in README.
<br>
<p>Even configured using  --without-hwloc I cannot build on FreeBSD, but 
<br>
I'll start another thread for that.
<br>
<p>-Paul
<br>
<p>On 12/13/2011 9:35 PM, Paul H. Hargrove wrote:
<br>
<span class="quotelev1">&gt; I am seeing build failures on the following:
</span><br>
<span class="quotelev1">&gt;     FreeBSD-8.2-RELEASE on amd64
</span><br>
<span class="quotelev1">&gt;     FreeBSD-7.2-RELEASE on amd64
</span><br>
<span class="quotelev1">&gt;     FreeBSD-6.3-RELEASE on amd64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All three fail with the same error:
</span><br>
<span class="quotelev2">&gt;&gt;   CCLD   opal_wrapper
</span><br>
<span class="quotelev2">&gt;&gt; ../../../opal/.libs/libopen-pal.so: undefined reference to 
</span><br>
<span class="quotelev2">&gt;&gt; `opal_hwloc122_hwloc_backend_sysfs_init'
</span><br>
<span class="quotelev2">&gt;&gt; ../../../opal/.libs/libopen-pal.so: undefined reference to 
</span><br>
<span class="quotelev2">&gt;&gt; `opal_hwloc122_hwloc_set_linux_hooks'
</span><br>
<span class="quotelev2">&gt;&gt; ../../../opal/.libs/libopen-pal.so: undefined reference to 
</span><br>
<span class="quotelev2">&gt;&gt; `opal_hwloc122_hwloc_backend_sysfs_exit'
</span><br>
<span class="quotelev2">&gt;&gt; ../../../opal/.libs/libopen-pal.so: undefined reference to 
</span><br>
<span class="quotelev2">&gt;&gt; `opal_hwloc122_hwloc_look_linux'
</span><br>
<span class="quotelev1">&gt; Apparently something thinks this is Linux.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried 1.5.4 on the FreeBSD-8.2 platform (no patience for the other 2).
</span><br>
<span class="quotelev1">&gt; With the addition of --disable-io-romio, I can &quot;gmake all install 
</span><br>
<span class="quotelev1">&gt; check&quot; ompi-1.5.4 on FreeBSD-8.2/amd64 w/o incident.
</span><br>
<span class="quotelev1">&gt; So, this hwloc122 problem appears to be a REGRESSION relative to the 
</span><br>
<span class="quotelev1">&gt; 1.5.4 release.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff, Brian and George have all had accounts on our group's machines 
</span><br>
<span class="quotelev1">&gt; at one time or another.
</span><br>
<span class="quotelev1">&gt; So, I can probably arrange access to the FreeBSD-8.2 host for somebody 
</span><br>
<span class="quotelev1">&gt; if necessary.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
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
<li><strong>Next message:</strong> <a href="10095.php">Paul H. Hargrove: "[OMPI devel] 1.5.5rc1 tested: VT check failures on *BSD (with patch)."</a>
<li><strong>Previous message:</strong> <a href="10093.php">Paul H. Hargrove: "[OMPI devel] 1.5.5rc1 tested: hwloc build failure on Red Hat Linux 8"</a>
<li><strong>In reply to:</strong> <a href="10091.php">Paul H. Hargrove: "[OMPI devel] 1.5.5rc1 tested: REGRESSION on FreeBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10096.php">Brice Goglin: "Re: [OMPI devel] 1.5.5rc1 tested: REGRESSION on FreeBSD"</a>
<li><strong>Reply:</strong> <a href="10096.php">Brice Goglin: "Re: [OMPI devel] 1.5.5rc1 tested: REGRESSION on FreeBSD"</a>
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
