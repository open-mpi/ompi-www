<?
$subject_val = "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 15 05:21:36 2013" -->
<!-- isoreceived="20131115102136" -->
<!-- sent="Fri, 15 Nov 2013 11:21:33 +0100" -->
<!-- isosent="20131115102133" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme" -->
<!-- id="6C5DC0DD-ED4D-498F-8456-781F3068BEC2_at_icl.utk.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="20131106152653.GF37395_at_pn1246003.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-15 05:21:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13286.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
<li><strong>Previous message:</strong> <a href="13284.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re:	[OMPI	svn-full]	svn:open-mpi	r29703	-	in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<li><strong>In reply to:</strong> <a href="13204.php">Nathan Hjelm: "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13286.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
<li><strong>Reply:</strong> <a href="13286.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 6, 2013, at 16:26 , Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Wed, Nov 06, 2013 at 02:06:15AM +0000, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 5, 2013, at 2:59 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have a question regarding the extension of this concept to multi-BTL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; runs. Granted we will have to have a local indexing of BTL (I'm not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; concerned about this). But how do we ensure the naming is globally
</span><br>
<span class="quotelev3">&gt;&gt;&gt; consistent (in the sense that all processes in the job will agree that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; usnic0 is index 0) even when we have a heterogeneous environment?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The MPI_T pvars are local-only.  So even if index 0 is usnic_0 in proc A, but index 0 is usnic_3 in proc B, it shouldn't matter.  More specifically: these values only have meaning within the process from which they were gathered.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I guess I'm trying to say that there's no need to ensure globally consistent ordering between processes.  ...unless I'm missing something?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There is no need to ensure global consistency unless you declare the pvar to
</span><br>
<span class="quotelev1">&gt; have a global scope (MCA_BASE_VAR_SCOPE_GROUP, MCA_BASE_VAR_SCOPE_GROUP_EQ,
</span><br>
<span class="quotelev1">&gt; MCA_BASE_VAR_SCOPE_ALL, or MCA_BASE_VAR_SCOPE_ALL_EQ.)
</span><br>
<p>They clearly can&#146;t be of any _EQ scope. After reading the entire chapter in the MPI 3.1 I&#146;m not sure how the defined scope applies to the naming or to the relationship between their values.
<br>
<p>That being said, the consistency I was looking for is somehow different. What I really wanted is a way, not based on the physical naming but based on some logical naming, that will allow a tool to &#147;globally&#148; make sense of the information exposed. Having separate (on each node) local information about the local usnic0 provide little information about any communication inconsistencies. Knowing the fact that there are many pending sends on my local usnic0 is interesting, but being able to link this information with a number of pending receives/other MPI_T on the peers sharing the same network layer will be much more valuable knowledge, providing better insight on what is going on each network layer.
<br>
<p>George.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
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
<li><strong>Next message:</strong> <a href="13286.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
<li><strong>Previous message:</strong> <a href="13284.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re:	[OMPI	svn-full]	svn:open-mpi	r29703	-	in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<li><strong>In reply to:</strong> <a href="13204.php">Nathan Hjelm: "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13286.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
<li><strong>Reply:</strong> <a href="13286.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
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
