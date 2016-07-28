<?
$subject_val = "Re: [OMPI devel] Master won't build";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Nov  8 08:11:21 2015" -->
<!-- isoreceived="20151108131121" -->
<!-- sent="Sun, 8 Nov 2015 07:12:34 -0600 (CST)" -->
<!-- isosent="20151108131234" -->
<!-- name="gabriel_at_[hidden]" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Master won't build" -->
<!-- id="58464.73.232.71.25.1446988354.squirrel_at_mail.cs.uh.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="[OMPI devel] Master won't build" -->
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
<strong>From:</strong> <a href="mailto:gabriel_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20Master%20won't%20build"><em>gabriel_at_[hidden]</em></a><br>
<strong>Date:</strong> 2015-11-08 08:12:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18340.php">George Bosilca: "Re: [OMPI devel] PMIX deadlock"</a>
<li><strong>Previous message:</strong> <a href="18338.php">Ralph Castain: "[OMPI devel] Master won't build"</a>
<li><strong>Maybe in reply to:</strong> <a href="18338.php">Ralph Castain: "[OMPI devel] Master won't build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18342.php">Ralph Castain: "Re: [OMPI devel] Master won't build"</a>
<li><strong>Reply:</strong> <a href="18342.php">Ralph Castain: "Re: [OMPI devel] Master won't build"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
agh. My guess is that the IU cluster has an old lustre
<br>
installation/header files that does not define the correct structure but
<br>
would require what we had before the fix in july. We will probably need
<br>
configure logic for lustre version, at the minimum to disable the
<br>
component if we cannot find the right header files and structures. Not
<br>
sure whether my IU account still works for testing that however.
<br>
<p>Thanks
<br>
Edgar
<br>
<p>On 11/7/2015 10:01 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; I'm trying to build on the IU cluster, but hit this problem:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; fs_lustre.c: In function 'mca_fs_lustre_component_file_query':
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; fs_lustre.c:101: warning: passing argument 1 of
</span><br>
<span class="quotelev1">&gt; 'mca_fs_base_get_parent_dir' discards qualifiers from pointer target type
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; fs_lustre_file_open.c:36: warning: function declaration isn't a prototype
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; fs_lustre_file_open.c:39: warning: function declaration isn't a prototype
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; fs_lustre_file_open.c: In function 'alloc_lum':
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; fs_lustre_file_open.c:44: error: invalid application of 'sizeof' to
</span><br>
<span class="quotelev1">&gt; incomplete type 'struct lov_user_md_v3'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; fs_lustre_file_open.c:40: warning: unused variable 'join'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyone know the origin of the problem?
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Edgar Gabriel
Associate Professor
Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
Department of Computer Science          University of Houston
Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
--
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18340.php">George Bosilca: "Re: [OMPI devel] PMIX deadlock"</a>
<li><strong>Previous message:</strong> <a href="18338.php">Ralph Castain: "[OMPI devel] Master won't build"</a>
<li><strong>Maybe in reply to:</strong> <a href="18338.php">Ralph Castain: "[OMPI devel] Master won't build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18342.php">Ralph Castain: "Re: [OMPI devel] Master won't build"</a>
<li><strong>Reply:</strong> <a href="18342.php">Ralph Castain: "Re: [OMPI devel] Master won't build"</a>
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
