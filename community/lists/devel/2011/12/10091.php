<?
$subject_val = "[OMPI devel] 1.5.5rc1 tested: REGRESSION on FreeBSD";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 14 00:35:31 2011" -->
<!-- isoreceived="20111214053531" -->
<!-- sent="Tue, 13 Dec 2011 21:35:09 -0800" -->
<!-- isosent="20111214053509" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.5.5rc1 tested: REGRESSION on FreeBSD" -->
<!-- id="4EE8358D.1040301_at_lbl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] 1.5.5rc1 tested: REGRESSION on FreeBSD<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-14 00:35:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10092.php">Paul H. Hargrove: "[OMPI devel] OMPI 1.4.5rc1 tested: gm"</a>
<li><strong>Previous message:</strong> <a href="10090.php">Paul H. Hargrove: "[OMPI devel] 1.5.5rc1 tested: MacOS/ppc (w/ 1 failure and a &quot;CMR&quot;)"</a>
<li><strong>In reply to:</strong> <a href="10089.php">Jeff Squyres: "[OMPI devel] 1.5.5rc1 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10094.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5.5rc1 tested: REGRESSION on FreeBSD"</a>
<li><strong>Reply:</strong> <a href="10094.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5.5rc1 tested: REGRESSION on FreeBSD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am seeing build failures on the following:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FreeBSD-8.2-RELEASE on amd64
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FreeBSD-7.2-RELEASE on amd64
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FreeBSD-6.3-RELEASE on amd64
<br>
<p>All three fail with the same error:
<br>
<span class="quotelev1">&gt;   CCLD   opal_wrapper
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.so: undefined reference to 
</span><br>
<span class="quotelev1">&gt; `opal_hwloc122_hwloc_backend_sysfs_init'
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.so: undefined reference to 
</span><br>
<span class="quotelev1">&gt; `opal_hwloc122_hwloc_set_linux_hooks'
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.so: undefined reference to 
</span><br>
<span class="quotelev1">&gt; `opal_hwloc122_hwloc_backend_sysfs_exit'
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.so: undefined reference to 
</span><br>
<span class="quotelev1">&gt; `opal_hwloc122_hwloc_look_linux'
</span><br>
Apparently something thinks this is Linux.
<br>
<p>I tried 1.5.4 on the FreeBSD-8.2 platform (no patience for the other 2).
<br>
With the addition of --disable-io-romio, I can &quot;gmake all install check&quot; 
<br>
ompi-1.5.4 on FreeBSD-8.2/amd64 w/o incident.
<br>
So, this hwloc122 problem appears to be a REGRESSION relative to the 
<br>
1.5.4 release.
<br>
<p>Jeff, Brian and George have all had accounts on our group's machines at 
<br>
one time or another.
<br>
So, I can probably arrange access to the FreeBSD-8.2 host for somebody 
<br>
if necessary.
<br>
<p>-Paul
<br>
<p>On 12/13/2011 8:36 PM, Jeff Squyres wrote:
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
<li><strong>Next message:</strong> <a href="10092.php">Paul H. Hargrove: "[OMPI devel] OMPI 1.4.5rc1 tested: gm"</a>
<li><strong>Previous message:</strong> <a href="10090.php">Paul H. Hargrove: "[OMPI devel] 1.5.5rc1 tested: MacOS/ppc (w/ 1 failure and a &quot;CMR&quot;)"</a>
<li><strong>In reply to:</strong> <a href="10089.php">Jeff Squyres: "[OMPI devel] 1.5.5rc1 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10094.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5.5rc1 tested: REGRESSION on FreeBSD"</a>
<li><strong>Reply:</strong> <a href="10094.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5.5rc1 tested: REGRESSION on FreeBSD"</a>
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
