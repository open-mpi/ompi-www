<?
$subject_val = "[OMPI devel] NetBSD regression on master";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  1 09:55:45 2015" -->
<!-- isoreceived="20150701135545" -->
<!-- sent="Wed, 1 Jul 2015 06:55:39 -0700" -->
<!-- isosent="20150701135539" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] NetBSD regression on master" -->
<!-- id="CAAvDA17q9dZtamfeJfjHpp_yYoxdXizixvyopU+6hyfEFMwFcQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] NetBSD regression on master<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-01 09:55:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17583.php">Nathan Hjelm: "Re: [OMPI devel] error in test/threads/opal_condition.c"</a>
<li><strong>Previous message:</strong> <a href="17581.php">Paul Hargrove: "Re: [OMPI devel] Testing of &quot;OMP_PROC_BIND value is invalid&quot; errors"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Open MPI README currently says
<br>
<p>- On NetBSD-6 (at least AMD64 and i386), and possibly on OpenBSD,
<br>
&nbsp;&nbsp;libtool misidentifies properties of f95/g95, leading to obscure
<br>
&nbsp;&nbsp;compile-time failures if used to build Open MPI.  You can work
<br>
&nbsp;&nbsp;around this issue by ensuring that libtool will not use f95/g95
<br>
&nbsp;&nbsp;(e.g., by specifying FC=&lt;some_other_compiler&gt;, or otherwise ensuring
<br>
&nbsp;&nbsp;a different Fortran compiler will be found earlier in the path than
<br>
&nbsp;&nbsp;f95/g95), or by disabling the Fortran MPI bindings with
<br>
&nbsp;&nbsp;--disable-mpi-fortran.
<br>
<p>The work-around of passing &quot;--disable-mpi-fortran&quot; works with 1.8.6.
<br>
However, when I built last night's master tarball this was *not* effective.
<br>
It appears that the Fortran compiler is currently being probed by configure
<br>
even in the presence of --disable-mpi-fortran, leading to the problem
<br>
described in the README (also <a href="https://github.com/open-mpi/ompi/issues/184">https://github.com/open-mpi/ompi/issues/184</a>).
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17582/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17583.php">Nathan Hjelm: "Re: [OMPI devel] error in test/threads/opal_condition.c"</a>
<li><strong>Previous message:</strong> <a href="17581.php">Paul Hargrove: "Re: [OMPI devel] Testing of &quot;OMP_PROC_BIND value is invalid&quot; errors"</a>
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
