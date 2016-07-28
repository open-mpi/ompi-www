<?
$subject_val = "[OMPI devel] 2.0.0rc3 MPI_Comm_split_type()";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 16 16:19:15 2016" -->
<!-- isoreceived="20160616201915" -->
<!-- sent="Thu, 16 Jun 2016 23:18:54 +0300" -->
<!-- isosent="20160616201854" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="[OMPI devel] 2.0.0rc3 MPI_Comm_split_type()" -->
<!-- id="CAEcYPwDOh8m3KinzDDayQrY0rb1CAQaHCRJGMJ2UtcDN1XqXtA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] 2.0.0rc3 MPI_Comm_split_type()<br>
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-16 16:18:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19124.php">Nathan Hjelm: "Re: [OMPI devel] 2.0.0rc3 MPI_Comm_split_type()"</a>
<li><strong>Previous message:</strong> <a href="19122.php">Ralph Castain: "Re: [OMPI devel] Issue with 2.0.0rc3, singleton init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19124.php">Nathan Hjelm: "Re: [OMPI devel] 2.0.0rc3 MPI_Comm_split_type()"</a>
<li><strong>Maybe reply:</strong> <a href="19124.php">Nathan Hjelm: "Re: [OMPI devel] 2.0.0rc3 MPI_Comm_split_type()"</a>
<li><strong>Maybe reply:</strong> <a href="19125.php">Nathan Hjelm: "Re: [OMPI devel] 2.0.0rc3 MPI_Comm_split_type()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Could you please check/confirm you are supporting passing
<br>
split_type=MPI_UNDEFINED to MPI_Comm_split_type() ? IIRC, this is a
<br>
regression from 2.0.0rc2.
<br>
<p>$ cat test-comm-split-type.py
<br>
from mpi4py import MPI
<br>
subcomm = MPI.COMM_WORLD.Split_type(MPI.UNDEFINED)
<br>
assert subcomm == MPI.COMM_NULL
<br>
<p>$ mpiexec -n 1 python test-comm-split-type.py
<br>
Traceback (most recent call last):
<br>
&nbsp;&nbsp;File &quot;test-comm-split-type.py&quot;, line 2, in &lt;module&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;subcomm = MPI.COMM_WORLD.Split_type(MPI.UNDEFINED)
<br>
&nbsp;&nbsp;File &quot;MPI/Comm.pyx&quot;, line 214, in mpi4py.MPI.Comm.Split_type
<br>
(src/mpi4py.MPI.c:95252)
<br>
mpi4py.MPI.Exception: MPI_ERR_ARG: invalid argument of some other kind
<br>
<p><p><pre>
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
<li><strong>Next message:</strong> <a href="19124.php">Nathan Hjelm: "Re: [OMPI devel] 2.0.0rc3 MPI_Comm_split_type()"</a>
<li><strong>Previous message:</strong> <a href="19122.php">Ralph Castain: "Re: [OMPI devel] Issue with 2.0.0rc3, singleton init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19124.php">Nathan Hjelm: "Re: [OMPI devel] 2.0.0rc3 MPI_Comm_split_type()"</a>
<li><strong>Maybe reply:</strong> <a href="19124.php">Nathan Hjelm: "Re: [OMPI devel] 2.0.0rc3 MPI_Comm_split_type()"</a>
<li><strong>Maybe reply:</strong> <a href="19125.php">Nathan Hjelm: "Re: [OMPI devel] 2.0.0rc3 MPI_Comm_split_type()"</a>
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
