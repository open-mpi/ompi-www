<?
$subject_val = "[OMPI devel] configure.m4 for pmix/s1 and pmix/s2 question";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 28 14:16:52 2014" -->
<!-- isoreceived="20141028181652" -->
<!-- sent="Tue, 28 Oct 2014 12:16:50 -0600" -->
<!-- isosent="20141028181650" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="[OMPI devel] configure.m4 for pmix/s1 and pmix/s2 question" -->
<!-- id="CAF1Cqj5iQP22a7F-xXi7Sbp8Nc0siUji44bCfGUO5kDnarzp0w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] configure.m4 for pmix/s1 and pmix/s2 question<br>
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-28 14:16:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16111.php">Ralph Castain: "Re: [OMPI devel] configure.m4 for pmix/s1 and pmix/s2 question"</a>
<li><strong>Previous message:</strong> <a href="16109.php">Rob Latham: "Re: [OMPI devel] [mpich-discuss] ROMIO+Lustre problems in OpenMPI 1.8.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16111.php">Ralph Castain: "Re: [OMPI devel] configure.m4 for pmix/s1 and pmix/s2 question"</a>
<li><strong>Reply:</strong> <a href="16111.php">Ralph Castain: "Re: [OMPI devel] configure.m4 for pmix/s1 and pmix/s2 question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Folks,
<br>
<p>I'm trying to figure out what broke for pmi configure since now the
<br>
pmix/cray component
<br>
doesn't compile any longer in master.
<br>
<p>I was happening to look in the s1 and s2 configure.m4's and noticed a
<br>
AC_REQUIRE
<br>
for OPAL_CHECK_UGNI.  This doesn't make sense to me.  Maybe these were
<br>
accidentally copied from the configure.m4 for the cray pmi?
<br>
<p>Howard
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16110/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16111.php">Ralph Castain: "Re: [OMPI devel] configure.m4 for pmix/s1 and pmix/s2 question"</a>
<li><strong>Previous message:</strong> <a href="16109.php">Rob Latham: "Re: [OMPI devel] [mpich-discuss] ROMIO+Lustre problems in OpenMPI 1.8.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16111.php">Ralph Castain: "Re: [OMPI devel] configure.m4 for pmix/s1 and pmix/s2 question"</a>
<li><strong>Reply:</strong> <a href="16111.php">Ralph Castain: "Re: [OMPI devel] configure.m4 for pmix/s1 and pmix/s2 question"</a>
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
