<?
$subject_val = "[OMPI devel] MPI_Group_intersection: malloc(0) warning with 2.0.0rc3";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 16 10:03:34 2016" -->
<!-- isoreceived="20160616140334" -->
<!-- sent="Thu, 16 Jun 2016 17:03:09 +0300" -->
<!-- isosent="20160616140309" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="[OMPI devel] MPI_Group_intersection: malloc(0) warning with 2.0.0rc3" -->
<!-- id="CAEcYPwA-axoPbKGijWZyRVxNZy6Tvx0FQzhRhqx0XWEjNXs2SQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] MPI_Group_intersection: malloc(0) warning with 2.0.0rc3<br>
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-16 10:03:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19118.php">Howard Pritchard: "Re: [OMPI devel] Issue with 2.0.0rc3, singleton init"</a>
<li><strong>Previous message:</strong> <a href="19116.php">Lisandro Dalcin: "[OMPI devel] Issue with 2.0.0rc3, singleton init"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Trivial Python code checking the intersection of the empty group with itself.
<br>
<p>$ cat tmp.py
<br>
from mpi4py import MPI
<br>
empty = MPI.Group.Intersection(MPI.GROUP_EMPTY, MPI.GROUP_EMPTY)
<br>
assert MPI.Group.Compare(empty, MPI.GROUP_EMPTY) in [MPI.IDENT, MPI.CONGRUENT]
<br>
<p>$ mpiexec -n 1 python tmp.py
<br>
malloc debug: Request for 0 bytes (group/group.c, 456)
<br>
<p><pre>
-- 
Lisandro Dalcin
============
Research Scientist
Computer, Electrical and Mathematical Sciences &amp; Engineering (CEMSE)
Extreme Computing Research Center (ECRC)
King Abdullah University of Science and Technology (KAUST)
<a href="http://ecrc.kaust.edu.sa/">http://ecrc.kaust.edu.sa/</a>
4700 King Abdullah University of Science and Technology
al-Khawarizmi Bldg (Bldg 1), Office # 0109
Thuwal 23955-6900, Kingdom of Saudi Arabia
<a href="http://www.kaust.edu.sa">http://www.kaust.edu.sa</a>
Office Phone: +966 12 808-0459
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19118.php">Howard Pritchard: "Re: [OMPI devel] Issue with 2.0.0rc3, singleton init"</a>
<li><strong>Previous message:</strong> <a href="19116.php">Lisandro Dalcin: "[OMPI devel] Issue with 2.0.0rc3, singleton init"</a>
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
