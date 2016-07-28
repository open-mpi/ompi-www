<?
$subject_val = "Re: [OMPI devel] [Open MPI] #2538: PGI compiler issues";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 20 13:02:28 2010" -->
<!-- isoreceived="20100820170228" -->
<!-- sent="Fri, 20 Aug 2010 10:02:23 -0700" -->
<!-- isosent="20100820170223" -->
<!-- name="Larry Baker" -->
<!-- email="baker_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [Open MPI] #2538: PGI compiler issues" -->
<!-- id="B54A8024-597F-4A59-94FA-F79D74587BB9_at_usgs.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="044.0bda47a9f7eeeeb189e803278ca064e5_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [Open MPI] #2538: PGI compiler issues<br>
<strong>From:</strong> Larry Baker (<em>baker_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-20 13:02:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8304.php">Larry Baker: "Re: [OMPI devel] Fixes to OpenMPI-1.4.2 for PGI compilers"</a>
<li><strong>Previous message:</strong> <a href="8302.php">Jeff Squyres: "Re: [OMPI devel] Fixes to OpenMPI-1.4.2 for PGI compilers"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>I have not yet finished finding all the problems I'm seeing in  
<br>
1.5rc5.  All I have done so far is look for the ones that I fixed for  
<br>
OpenMPI 1.4.2.  For example, compiling with PGI 10.3 on Linux fails.   
<br>
(Has anyone else tried PGI 10.x?)  The Intel compiler issues messages  
<br>
I haven't tracked down on Mac OS X, and I haven't even tried PathScale  
<br>
or Intel on Linux yet.
<br>
<p>Larry Baker
<br>
US Geological Survey
<br>
650-329-5608
<br>
baker_at_[hidden]
<br>
<p>On Aug 20, 2010, at 8:23 AM, Open MPI wrote:
<br>
<p><span class="quotelev1">&gt; #2538: PGI compiler issues
</span><br>
<span class="quotelev1">&gt; --------------------- 
</span><br>
<span class="quotelev1">&gt; +------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Reporter:  jsquyres  |       Owner:
</span><br>
<span class="quotelev1">&gt;    Type:  defect    |      Status:  new
</span><br>
<span class="quotelev1">&gt; Priority:  major     |   Milestone:  Open MPI 1.5.1
</span><br>
<span class="quotelev1">&gt; Version:  trunk     |    Keywords:
</span><br>
<span class="quotelev1">&gt; --------------------- 
</span><br>
<span class="quotelev1">&gt; +------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Larry Baker posted a bunch of PGI compiler issues:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  * <a href="http://www.open-mpi.org/community/lists/devel/2010/08/8297.php">http://www.open-mpi.org/community/lists/devel/2010/08/8297.php</a>
</span><br>
<span class="quotelev1">&gt;  * <a href="http://www.open-mpi.org/community/lists/devel/2010/08/8298.php">http://www.open-mpi.org/community/lists/devel/2010/08/8298.php</a>
</span><br>
<span class="quotelev1">&gt;  * <a href="http://www.open-mpi.org/community/lists/devel/2010/08/8299.php">http://www.open-mpi.org/community/lists/devel/2010/08/8299.php</a>
</span><br>
<span class="quotelev1">&gt;  * <a href="http://www.open-mpi.org/community/lists/devel/2010/08/8300.php">http://www.open-mpi.org/community/lists/devel/2010/08/8300.php</a>
</span><br>
<span class="quotelev1">&gt;  * <a href="http://www.open-mpi.org/community/lists/devel/2010/08/8301.php">http://www.open-mpi.org/community/lists/devel/2010/08/8301.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Some of them are Libtool issues, but some of them are OMPI issues.   
</span><br>
<span class="quotelev1">&gt; None
</span><br>
<span class="quotelev1">&gt; appear to be drastic correctness issues (nor are they regressions), so
</span><br>
<span class="quotelev1">&gt; they shouldn't hold up 1.5.0.  But we should fix them nonetheless (and
</span><br>
<span class="quotelev1">&gt; submit upstream to Libtool where appropriate).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Ticket URL: &lt;<a href="https://svn.open-mpi.org/trac/ompi/ticket/2538">https://svn.open-mpi.org/trac/ompi/ticket/2538</a>&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI &lt;<a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8304.php">Larry Baker: "Re: [OMPI devel] Fixes to OpenMPI-1.4.2 for PGI compilers"</a>
<li><strong>Previous message:</strong> <a href="8302.php">Jeff Squyres: "Re: [OMPI devel] Fixes to OpenMPI-1.4.2 for PGI compilers"</a>
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
