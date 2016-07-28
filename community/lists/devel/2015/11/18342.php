<?
$subject_val = "Re: [OMPI devel] Master won't build";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  9 10:11:03 2015" -->
<!-- isoreceived="20151109151103" -->
<!-- sent="Mon, 9 Nov 2015 07:10:57 -0800" -->
<!-- isosent="20151109151057" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Master won't build" -->
<!-- id="902BDEB3-C311-4E52-815B-EFCA58394AA8_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="58464.73.232.71.25.1446988354.squirrel_at_mail.cs.uh.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Master won't build<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-09 10:10:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18343.php">Ralph Castain: "Re: [OMPI devel] PMIX deadlock"</a>
<li><strong>Previous message:</strong> <a href="18341.php">Nysal Jan K A: "Re: [OMPI devel] PMIX deadlock"</a>
<li><strong>In reply to:</strong> <a href="18339.php">gabriel_at_[hidden]: "Re: [OMPI devel] Master won't build"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yeah, I&#226;&#128;&#153;m sure it does have an ancient lustre install on it - odin has become very long in the tooth. :-/
<br>
<p>I think it would be wise to have that configure logic. I don&#226;&#128;&#153;t know how common it is to have an old install out there, but a little defensive programming would be best.
<br>
<p>If you don&#226;&#128;&#153;t have a working account on odin, I&#226;&#128;&#153;d be happy to test it for you there.
<br>
<p><span class="quotelev1">&gt; On Nov 8, 2015, at 5:12 AM, gabriel_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; agh. My guess is that the IU cluster has an old lustre
</span><br>
<span class="quotelev1">&gt; installation/header files that does not define the correct structure but
</span><br>
<span class="quotelev1">&gt; would require what we had before the fix in july. We will probably need
</span><br>
<span class="quotelev1">&gt; configure logic for lustre version, at the minimum to disable the
</span><br>
<span class="quotelev1">&gt; component if we cannot find the right header files and structures. Not
</span><br>
<span class="quotelev1">&gt; sure whether my IU account still works for testing that however.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Edgar
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 11/7/2015 10:01 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I'm trying to build on the IU cluster, but hit this problem:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; fs_lustre.c: In function 'mca_fs_lustre_component_file_query':
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; fs_lustre.c:101: warning: passing argument 1 of
</span><br>
<span class="quotelev2">&gt;&gt; 'mca_fs_base_get_parent_dir' discards qualifiers from pointer target type
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; fs_lustre_file_open.c:36: warning: function declaration isn't a prototype
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; fs_lustre_file_open.c:39: warning: function declaration isn't a prototype
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; fs_lustre_file_open.c: In function 'alloc_lum':
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; fs_lustre_file_open.c:44: error: invalid application of 'sizeof' to
</span><br>
<span class="quotelev2">&gt;&gt; incomplete type 'struct lov_user_md_v3'
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; fs_lustre_file_open.c:40: warning: unused variable 'join'
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Anyone know the origin of the problem?
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Edgar Gabriel
</span><br>
<span class="quotelev1">&gt; Associate Professor
</span><br>
<span class="quotelev1">&gt; Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
</span><br>
<span class="quotelev1">&gt; Department of Computer Science          University of Houston
</span><br>
<span class="quotelev1">&gt; Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
</span><br>
<span class="quotelev1">&gt; Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/11/18339.php">http://www.open-mpi.org/community/lists/devel/2015/11/18339.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18343.php">Ralph Castain: "Re: [OMPI devel] PMIX deadlock"</a>
<li><strong>Previous message:</strong> <a href="18341.php">Nysal Jan K A: "Re: [OMPI devel] PMIX deadlock"</a>
<li><strong>In reply to:</strong> <a href="18339.php">gabriel_at_[hidden]: "Re: [OMPI devel] Master won't build"</a>
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
