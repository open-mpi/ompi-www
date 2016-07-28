<?
$subject_val = "[OMPI devel] errno and reentrance";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 27 05:42:05 2014" -->
<!-- isoreceived="20141027094205" -->
<!-- sent="Mon, 27 Oct 2014 18:42:03 +0900" -->
<!-- isosent="20141027094203" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="[OMPI devel] errno and reentrance" -->
<!-- id="544E136B.2020109_at_iferc.org" -->
<!-- charset="windows-1252" -->
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
<strong>Subject:</strong> [OMPI devel] errno and reentrance<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-27 05:42:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16095.php">Paul Hargrove: "Re: [OMPI devel] errno and reentrance"</a>
<li><strong>Previous message:</strong> <a href="16093.php">Adrian Reber: "[OMPI devel] 1.8.3 and PSM errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16095.php">Paul Hargrove: "Re: [OMPI devel] errno and reentrance"</a>
<li><strong>Reply:</strong> <a href="16095.php">Paul Hargrove: "Re: [OMPI devel] errno and reentrance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Folks,
<br>
<p>While investigating an issue started at
<br>
<a href="http://www.open-mpi.org/community/lists/users/2014/10/25562.php">http://www.open-mpi.org/community/lists/users/2014/10/25562.php</a>
<br>
i found that it is mandatory to compile with -D_REENTRANT on Solaris (10
<br>
and 11)
<br>
(otherwise errno is not per thread specific, and the pmix thread
<br>
silently misinterpret EAGAIN or EWOULDBLOCK and that
<br>
leads to random behaviour, that generally terminates the application)
<br>
<p>This is a bug / unexpected side effect introduced by me in commit
<br>
b1c4daa9567c7647318b9b673698c2251264f22e
<br>
<p>on a RedHat 6 like server, this is not necessary.
<br>
<p>on aix and/or freebsd, it might be necessary to compile with
<br>
-D_THREAD_SAFE in order to get a correct behaviour.
<br>
<p>i wrote the simple attached program in order to check the correct
<br>
behavior with/without -D_REENTRANT or -D_THREAD_SAFE.
<br>
<p>one option is to add automatically test this in
<br>
config/opal_config_pthreads.m4,
<br>
an other option is to hardcode this for the required OS.
<br>
<p>Paul, since you have access to many platforms, could you please run this
<br>
test with and without -D_REENTRANT / -D_THREAD_SAFE
<br>
and tell me where the program produces incorrect behaviour (output is
<br>
KO...) without the flag ?
<br>
<p>Thanks in advance,
<br>
<p>Gilles
<br>
<p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16094/test_errno.c">test_errno.c</a>
</ul>
<!-- attachment="test_errno.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16095.php">Paul Hargrove: "Re: [OMPI devel] errno and reentrance"</a>
<li><strong>Previous message:</strong> <a href="16093.php">Adrian Reber: "[OMPI devel] 1.8.3 and PSM errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16095.php">Paul Hargrove: "Re: [OMPI devel] errno and reentrance"</a>
<li><strong>Reply:</strong> <a href="16095.php">Paul Hargrove: "Re: [OMPI devel] errno and reentrance"</a>
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
