<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 17 11:08:16 2011" -->
<!-- isoreceived="20110717150816" -->
<!-- sent="Sun, 17 Jul 2011 18:08:08 +0300" -->
<!-- isosent="20110717150808" -->
<!-- name="Yevgeny Kliteynik" -->
<!-- email="kliteyn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830" -->
<!-- id="4E22FAD8.6010908_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="FBF4DD68-884B-4862-BC16-3EA7B8BB14C7_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830<br>
<strong>From:</strong> Yevgeny Kliteynik (<em>kliteyn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-17 11:08:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9535.php">Eloi Gaudry: "Re: [OMPI devel] [OMPI users] huge VmRSS on rank 0 after MPI_Init when using &quot;btl_openib_receive_queues&quot; option"</a>
<li><strong>Previous message:</strong> <a href="9533.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830"</a>
<li><strong>In reply to:</strong> <a href="9533.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9522.php">Paul H. Hargrove: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 17-Jul-11 5:50 PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Are you saying that you don't link against symbols from that header file -- you only use struct definitions / #defines ?  If so, then I would agree -- it's not necessary.
</span><br>
<p>I'm using macros, data types and inline functions that work on
<br>
these data types - basically, getters and setters for struct fields.
<br>
<p>-- YK
<br>
&nbsp;
<br>
<span class="quotelev1">&gt; Can you confirm?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 17, 2011, at 9:19 AM, Yevgeny Kliteynik wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Jeff,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 14-Jul-11 5:26 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jul 14, 2011, at 10:16 AM, Yevgeny Kliteynik wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Also, besides checking if compilation works (assuming that I get
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; this file), I have no way checking if linkage also works...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You can AC_LINK_IFELSE to see if the symbols you need are in the libraries.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Er... I'm sorry, I should have noticed this earlier.  :-(  We usually check for types in headers *and* use AC_LINK_IFELSE to ensure that we can actually link against those symbols as well.  You should add this in the ompi_check_openib.m4 testing.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm not sure it's necessary here.
</span><br>
<span class="quotelev2">&gt;&gt; I was talking about Solaris w.r.t. linkage, because I don't know how
</span><br>
<span class="quotelev2">&gt;&gt; IB Management stuff looks there. For Linux, I don't actually do any
</span><br>
<span class="quotelev2">&gt;&gt; linkage - all I need in the header file. If it's there, then I'm OK.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- YK
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9535.php">Eloi Gaudry: "Re: [OMPI devel] [OMPI users] huge VmRSS on rank 0 after MPI_Init when using &quot;btl_openib_receive_queues&quot; option"</a>
<li><strong>Previous message:</strong> <a href="9533.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830"</a>
<li><strong>In reply to:</strong> <a href="9533.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9522.php">Paul H. Hargrove: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830"</a>
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
