<?
$subject_val = "Re: [OMPI devel] 1.5.5rc1 is out";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 14 05:19:33 2011" -->
<!-- isoreceived="20111214101933" -->
<!-- sent="Wed, 14 Dec 2011 11:18:27 +0100" -->
<!-- isosent="20111214101827" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.5.5rc1 is out" -->
<!-- id="4EE877F3.6080305_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4EE876ED.5030306_at_lbl.gov" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-14 05:18:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10109.php">Shiqing Fan: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25627"</a>
<li><strong>Previous message:</strong> <a href="10107.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5.5rc1 is out"</a>
<li><strong>In reply to:</strong> <a href="10107.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5.5rc1 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10141.php">Ashley Pittman: "Re: [OMPI devel] 1.5.5rc1 is out"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
And a hwloc problem with very old sched_setaffinity on redhat 8, we're
<br>
looking at it.
<br>
<p>Brice
<br>
<p><p>Le 14/12/2011 11:14, Paul H. Hargrove a &#233;crit :
<br>
<span class="quotelev1">&gt; Summary of my 1.5.5rc1 testing findings:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; + generated config.h in tarball breaks hwloc on non-linux platforms:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2011/12/10106.php">http://www.open-mpi.org/community/lists/devel/2011/12/10106.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; + multiply defined symbols problem on MacOS 10.4 (PPC only):
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2011/12/10103.php">http://www.open-mpi.org/community/lists/devel/2011/12/10103.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; + WEXITSTATUS not declared in
</span><br>
<span class="quotelev1">&gt; ompi/contrib/vt/vt/extlib/otf/tools/otfprofile/clustering.cpp:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2011/12/10095.php">http://www.open-mpi.org/community/lists/devel/2011/12/10095.php</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10109.php">Shiqing Fan: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25627"</a>
<li><strong>Previous message:</strong> <a href="10107.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5.5rc1 is out"</a>
<li><strong>In reply to:</strong> <a href="10107.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5.5rc1 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10141.php">Ashley Pittman: "Re: [OMPI devel] 1.5.5rc1 is out"</a>
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
