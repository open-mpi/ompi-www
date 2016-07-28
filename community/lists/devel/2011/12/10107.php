<?
$subject_val = "Re: [OMPI devel] 1.5.5rc1 is out";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 14 05:14:28 2011" -->
<!-- isoreceived="20111214101428" -->
<!-- sent="Wed, 14 Dec 2011 02:14:05 -0800" -->
<!-- isosent="20111214101405" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.5.5rc1 is out" -->
<!-- id="4EE876ED.5030306_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.5.5rc1 is out<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-14 05:14:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10108.php">Brice Goglin: "Re: [OMPI devel] 1.5.5rc1 is out"</a>
<li><strong>Previous message:</strong> <a href="10106.php">Paul H. Hargrove: "[OMPI devel] 1.5.5rc1: all my hwloc-related failures"</a>
<li><strong>In reply to:</strong> <a href="10089.php">Jeff Squyres: "[OMPI devel] 1.5.5rc1 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10108.php">Brice Goglin: "Re: [OMPI devel] 1.5.5rc1 is out"</a>
<li><strong>Reply:</strong> <a href="10108.php">Brice Goglin: "Re: [OMPI devel] 1.5.5rc1 is out"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Summary of my 1.5.5rc1 testing findings:
<br>
<p>+ generated config.h in tarball breaks hwloc on non-linux platforms:
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2011/12/10106.php">http://www.open-mpi.org/community/lists/devel/2011/12/10106.php</a>
<br>
<p>+ multiply defined symbols problem on MacOS 10.4 (PPC only):
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2011/12/10103.php">http://www.open-mpi.org/community/lists/devel/2011/12/10103.php</a>
<br>
<p>+ WEXITSTATUS not declared in 
<br>
ompi/contrib/vt/vt/extlib/otf/tools/otfprofile/clustering.cpp:
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2011/12/10095.php">http://www.open-mpi.org/community/lists/devel/2011/12/10095.php</a>
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
<li><strong>Next message:</strong> <a href="10108.php">Brice Goglin: "Re: [OMPI devel] 1.5.5rc1 is out"</a>
<li><strong>Previous message:</strong> <a href="10106.php">Paul H. Hargrove: "[OMPI devel] 1.5.5rc1: all my hwloc-related failures"</a>
<li><strong>In reply to:</strong> <a href="10089.php">Jeff Squyres: "[OMPI devel] 1.5.5rc1 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10108.php">Brice Goglin: "Re: [OMPI devel] 1.5.5rc1 is out"</a>
<li><strong>Reply:</strong> <a href="10108.php">Brice Goglin: "Re: [OMPI devel] 1.5.5rc1 is out"</a>
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
