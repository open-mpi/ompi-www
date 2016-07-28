<?
$subject_val = "Re: [OMPI devel] openmpi-1.5.1rc1: missing file when running autogen";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 20 18:55:32 2011" -->
<!-- isoreceived="20111220235532" -->
<!-- sent="Tue, 20 Dec 2011 16:55:24 -0700" -->
<!-- isosent="20111220235524" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openmpi-1.5.1rc1: missing file when running autogen" -->
<!-- id="7994C732-1100-42E4-BDF6-5311B891AAD9_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4EF11CDA.6090700_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] openmpi-1.5.1rc1: missing file when running autogen<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-20 18:55:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10180.php">George Bosilca: "Re: [OMPI devel] Fwd: Troubles using MPI_Isend/MPI_Irecv/MPI_Waitany and MPI_Allreduce"</a>
<li><strong>Previous message:</strong> <a href="10178.php">Ralph Castain: "Re: [OMPI devel] openmpi-1.5.1rc1: missing file when running autogen"</a>
<li><strong>In reply to:</strong> <a href="10176.php">Paul H. Hargrove: "Re: [OMPI devel] openmpi-1.5.1rc1: missing file when running autogen"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10182.php">Paul H. Hargrove: "[OMPI devel] missing file when running autogen - ALSO in 1.4.5rc1"</a>
<li><strong>Reply:</strong> <a href="10182.php">Paul H. Hargrove: "[OMPI devel] missing file when running autogen - ALSO in 1.4.5rc1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You are quite correct - it was indeed missing from Makefile.am! Fixed - and thanks!
<br>
<p>On Dec 20, 2011, at 4:40 PM, Paul H. Hargrove wrote:
<br>
<p><span class="quotelev1">&gt; Regardless of any other issues the referenced file does not appear in the tarball at all:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ tar tfj openmpi-1.5.5rc1.tar.bz2 | grep modify-configure-for-sun-fortran.pl || echo NOPE
</span><br>
<span class="quotelev1">&gt; NOPE
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 12/20/2011 3:30 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Yeah, we've known about this one and mostly ignored it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It occurs when autogen.sh is in a non-root directory and tries to run that script in a place where it doesn't exist (it does exist in the root directory).  We hadn't previously bothered to fix it because a) it's in autogen and users won't see it, b) we've revamped autogen on the trunk such that this doesn't happen anyway, and c) it's a non-fatal error (and reflects correct behavior anyway -- we don't need that script run anywhere except the root).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'll add it to the list, but I don't know if it'll actually get fixed.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 20, 2011, at 6:22 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; While trying to resolve the gmake-vs-bmake problem I ran autogen.sh and saw:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/phargrov/OMPI/openmpi-1.5.5rc1/openmpi-1.5.5rc1/autogen.sh: line 701: config/modify-configure-for-sun-fortran.pl: No such file or directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I suspect this just requires an addition to EXTRA_DIST in config/Makefile.am
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HPC Research Department                   Tel: +1-510-495-2352
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10180.php">George Bosilca: "Re: [OMPI devel] Fwd: Troubles using MPI_Isend/MPI_Irecv/MPI_Waitany and MPI_Allreduce"</a>
<li><strong>Previous message:</strong> <a href="10178.php">Ralph Castain: "Re: [OMPI devel] openmpi-1.5.1rc1: missing file when running autogen"</a>
<li><strong>In reply to:</strong> <a href="10176.php">Paul H. Hargrove: "Re: [OMPI devel] openmpi-1.5.1rc1: missing file when running autogen"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10182.php">Paul H. Hargrove: "[OMPI devel] missing file when running autogen - ALSO in 1.4.5rc1"</a>
<li><strong>Reply:</strong> <a href="10182.php">Paul H. Hargrove: "[OMPI devel] missing file when running autogen - ALSO in 1.4.5rc1"</a>
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
