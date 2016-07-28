<?
$subject_val = "Re: [OMPI devel] [OMPI bugs] [Open MPI] #3885: Move r29608 to v1.7 branch (Fix C++11 issue identified by)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  5 16:48:24 2013" -->
<!-- isoreceived="20131105214824" -->
<!-- sent="Tue, 5 Nov 2013 14:48:24 -0700" -->
<!-- isosent="20131105214824" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI bugs] [Open MPI] #3885: Move r29608 to v1.7 branch (Fix C++11 issue identified by)" -->
<!-- id="20131105214824.GC37395_at_pn1246003.lanl.gov" -->
<!-- charset="utf-8" -->
<!-- inreplyto="6276D8F9-A0C8-4897-BCC1-8334BAFE347E_at_icl.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI bugs] [Open MPI] #3885: Move r29608 to v1.7 branch (Fix C++11 issue identified by)<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-05 16:48:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13188.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
<li><strong>Previous message:</strong> <a href="13186.php">George Bosilca: "Re: [OMPI devel] [OMPI bugs] [Open MPI] #3885: Move r29608 to v1.7 branch (Fix C++11 issue identified by)"</a>
<li><strong>In reply to:</strong> <a href="13186.php">George Bosilca: "Re: [OMPI devel] [OMPI bugs] [Open MPI] #3885: Move r29608 to v1.7 branch (Fix C++11 issue identified by)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is that related to this patch? I was about to bisect this error:
<br>
<p>checking for compiler familyid... 2
<br>
checking for compiler familyname... INTEL
<br>
checking for compiler version... 1375113743
<br>
checking for compiler version_str... /usr/projects/hpctools/hjelmn/ompi-trunk-git/configure: line 27938: 20130607: No such file or directory
<br>
<p>happening with every compiler now.
<br>
<p>-Nathan Hjelm
<br>
HPC-5, LANL
<br>
<p>On Tue, Nov 05, 2013 at 10:43:59PM +0100, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; Excellent, we must be one of the most reactive communities out there. This patch went all the way from trunk into the stable in a blazing 6 hours interval. Didn&#226;&#128;&#153;t even got a chance of getting one good-old nightly test.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Unfortunately the patch might have some issues, our configure bails out with gcc 4.8.2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 5, 2013, at 21:32 , Open MPI &lt;bugs_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; #3885: Move r29608 to v1.7 branch (Fix C++11 issue identified by)
</span><br>
<span class="quotelev2">&gt; &gt; -----------------------------------+-----------------------------
</span><br>
<span class="quotelev2">&gt; &gt; Reporter:  jsquyres                |       Owner:  ompi-gk1.7
</span><br>
<span class="quotelev2">&gt; &gt;    Type:  changeset move request  |      Status:  assigned
</span><br>
<span class="quotelev2">&gt; &gt; Priority:  major                   |   Milestone:  Open MPI 1.7.4
</span><br>
<span class="quotelev2">&gt; &gt; Version:  trunk                   |  Resolution:
</span><br>
<span class="quotelev2">&gt; &gt; Keywords:                          |
</span><br>
<span class="quotelev2">&gt; &gt; -----------------------------------+-----------------------------
</span><br>
<span class="quotelev2">&gt; &gt; Changes (by brbarret):
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; * owner:  ompi-rm1.7 =&gt; ompi-gk1.7
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Comment:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; RM approved.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -- 
</span><br>
<span class="quotelev2">&gt; &gt; Ticket URL: &lt;<a href="https://svn.open-mpi.org/trac/ompi/ticket/3885#comment:2">https://svn.open-mpi.org/trac/ompi/ticket/3885#comment:2</a>&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Open MPI &lt;<a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>&gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; bugs mailing list
</span><br>
<span class="quotelev2">&gt; &gt; bugs_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/bugs">http://www.open-mpi.org/mailman/listinfo.cgi/bugs</a>
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
<li><strong>Next message:</strong> <a href="13188.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
<li><strong>Previous message:</strong> <a href="13186.php">George Bosilca: "Re: [OMPI devel] [OMPI bugs] [Open MPI] #3885: Move r29608 to v1.7 branch (Fix C++11 issue identified by)"</a>
<li><strong>In reply to:</strong> <a href="13186.php">George Bosilca: "Re: [OMPI devel] [OMPI bugs] [Open MPI] #3885: Move r29608 to v1.7 branch (Fix C++11 issue identified by)"</a>
<!-- nextthread="start" -->
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
