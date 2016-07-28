<?
$subject_val = "[OMPI devel] Master won't build";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Nov  7 23:01:52 2015" -->
<!-- isoreceived="20151108040152" -->
<!-- sent="Sat, 7 Nov 2015 20:01:47 -0800" -->
<!-- isosent="20151108040147" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Master won't build" -->
<!-- id="CAMD57of9xTjKq3_a2juRSP_d+cZpGZE09o9tLRO_xK9fx6CCQg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] Master won't build<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-07 23:01:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18339.php">gabriel_at_[hidden]: "Re: [OMPI devel] Master won't build"</a>
<li><strong>Previous message:</strong> <a href="18337.php">Ralph Castain: "Re: [OMPI devel] PMIX deadlock"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18339.php">gabriel_at_[hidden]: "Re: [OMPI devel] Master won't build"</a>
<li><strong>Maybe reply:</strong> <a href="18339.php">gabriel_at_[hidden]: "Re: [OMPI devel] Master won't build"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm trying to build on the IU cluster, but hit this problem:
<br>
<p>fs_lustre.c: In function 'mca_fs_lustre_component_file_query':
<br>
<p>fs_lustre.c:101: warning: passing argument 1 of
<br>
'mca_fs_base_get_parent_dir' discards qualifiers from pointer target type
<br>
<p>fs_lustre_file_open.c:36: warning: function declaration isn't a prototype
<br>
<p>fs_lustre_file_open.c:39: warning: function declaration isn't a prototype
<br>
<p>fs_lustre_file_open.c: In function 'alloc_lum':
<br>
<p>fs_lustre_file_open.c:44: error: invalid application of 'sizeof' to
<br>
incomplete type 'struct lov_user_md_v3'
<br>
<p>fs_lustre_file_open.c:40: warning: unused variable 'join'
<br>
<p><p>Anyone know the origin of the problem?
<br>
Ralph
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18338/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18339.php">gabriel_at_[hidden]: "Re: [OMPI devel] Master won't build"</a>
<li><strong>Previous message:</strong> <a href="18337.php">Ralph Castain: "Re: [OMPI devel] PMIX deadlock"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18339.php">gabriel_at_[hidden]: "Re: [OMPI devel] Master won't build"</a>
<li><strong>Maybe reply:</strong> <a href="18339.php">gabriel_at_[hidden]: "Re: [OMPI devel] Master won't build"</a>
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
