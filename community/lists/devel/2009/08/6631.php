<?
$subject_val = "[OMPI devel] Too many fds per a.out in 1.3";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 14 17:24:12 2009" -->
<!-- isoreceived="20090814212412" -->
<!-- sent="Fri, 14 Aug 2009 17:24:07 -0400" -->
<!-- isosent="20090814212407" -->
<!-- name="Rolf Vandevaart" -->
<!-- email="Rolf.Vandevaart_at_[hidden]" -->
<!-- subject="[OMPI devel] Too many fds per a.out in 1.3" -->
<!-- id="4A85D5F7.3080904_at_Sun.COM" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] Too many fds per a.out in 1.3<br>
<strong>From:</strong> Rolf Vandevaart (<em>Rolf.Vandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-14 17:24:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6632.php">Ralph Castain: "Re: [OMPI devel] Too many fds per a.out in 1.3"</a>
<li><strong>Previous message:</strong> <a href="6630.php">Greg Watson: "[OMPI devel] XML request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6632.php">Ralph Castain: "Re: [OMPI devel] Too many fds per a.out in 1.3"</a>
<li><strong>Reply:</strong> <a href="6632.php">Ralph Castain: "Re: [OMPI devel] Too many fds per a.out in 1.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph:
<br>
(Or anyone else...)
<br>
<p>As was reported on the user's list, we are consuming about 12 fds per 
<br>
a.out.  I have reproduced this with the 1.3 branch.  I also have run 
<br>
with the trunk, and we only consume about 6 fds per a.out.
<br>
<p>&nbsp;From what I can tell, in the 1.3 branch we are opening 3 pipes that we 
<br>
do not need.  I have traced this to the fact that we call 
<br>
orte_iof_base_setup_prefork() twice for each a.out that we fork/exec. 
<br>
The calls occur from odls_default_fork_local_proc().
<br>
<p>In the trunk, we only call the function once.  It looks like we made a 
<br>
change in the trunk version of odls_default_module.c 12 months ago that 
<br>
change the way the trunk behaved.
<br>
<p><a href="https://svn.open-mpi.org/trac/ompi/changeset/19275/trunk/orte/mca/odls/default/odls_default_module.c">https://svn.open-mpi.org/trac/ompi/changeset/19275/trunk/orte/mca/odls/default/odls_default_module.c</a>
<br>
<p>If we fix this problem, then we can reduce the number of fds per a.out 
<br>
from 12 to 6.
<br>
<p>I am looking for some thoughts on this issue as the changeset I refer to 
<br>
was done to fix other issues.  There is no mention about opening pipes 
<br>
unnecessarily.
<br>
<p>Rolf
<br>
<p><pre>
-- 
=========================
rolf.vandevaart_at_[hidden]
781-442-3043
=========================
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6632.php">Ralph Castain: "Re: [OMPI devel] Too many fds per a.out in 1.3"</a>
<li><strong>Previous message:</strong> <a href="6630.php">Greg Watson: "[OMPI devel] XML request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6632.php">Ralph Castain: "Re: [OMPI devel] Too many fds per a.out in 1.3"</a>
<li><strong>Reply:</strong> <a href="6632.php">Ralph Castain: "Re: [OMPI devel] Too many fds per a.out in 1.3"</a>
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
