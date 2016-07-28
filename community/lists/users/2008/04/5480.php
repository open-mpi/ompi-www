<?
$subject_val = "[OMPI users] coll_tuned_decision_fixed.c";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 24 01:41:07 2008" -->
<!-- isoreceived="20080424054107" -->
<!-- sent="Thu, 24 Apr 2008 07:41:35 +0200" -->
<!-- isosent="20080424054135" -->
<!-- name="Andy Georgi" -->
<!-- email="Andy.Georgi_at_[hidden]" -->
<!-- subject="[OMPI users] coll_tuned_decision_fixed.c" -->
<!-- id="48101D8F.6070903_at_zih.tu-dresden.de" -->
<!-- charset="ISO-8859-15" -->
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
<strong>Subject:</strong> [OMPI users] coll_tuned_decision_fixed.c<br>
<strong>From:</strong> Andy Georgi (<em>Andy.Georgi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-24 01:41:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5481.php">Ingo Josopait: "Re: [OMPI users] Busy waiting [was Re:  (no subject)]"</a>
<li><strong>Previous message:</strong> <a href="5479.php">George Bosilca: "Re: [OMPI users] Problem compiling open MPI on cygwin on windows"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>to explain the behavior of MPI_Reduce on our cluster i ran through the
<br>
source of Open MPI 1.2.6. On line 357 i found a mistake (maybe ;-)). It
<br>
should be:
<br>
<p>return ompi_coll_tuned_reduce_intra_binary(sendbuf, recvbuf, count,
<br>
datatype, op, root, comm, segsize);
<br>
<p>instead of
<br>
<p>return ompi_coll_tuned_reduce_intra_pipeline (sendbuf, recvbuf, count,
<br>
datatype, op, root, comm, segsize);
<br>
<p>There are 2 indications:
<br>
- the next branch is doing the same (32K pipelining)
<br>
- the comment /* Binary_32K */ sounds not like &quot;pipeline&quot; ;-)
<br>
<p>Maybe someone is interested in.
<br>
<p>Regards,
<br>
<p>Andy
<br>
<p><pre>
-- 
Dresden University of Technology
Center for Information Services
and High Performance Computing (ZIH)
D-01062 Dresden
Germany
Phone:    (+49) 351/463-38783
Fax:      (+49) 351/463-38245
e-mail: Andy.Georgi_at_[hidden]
WWW:    <a href="http://www.tu-dresden.de/zih">http://www.tu-dresden.de/zih</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5481.php">Ingo Josopait: "Re: [OMPI users] Busy waiting [was Re:  (no subject)]"</a>
<li><strong>Previous message:</strong> <a href="5479.php">George Bosilca: "Re: [OMPI users] Problem compiling open MPI on cygwin on windows"</a>
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
