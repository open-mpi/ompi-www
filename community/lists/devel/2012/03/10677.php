<?
$subject_val = "[OMPI devel] Collective communications may be abend when it use over 2GiB buffer";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  5 04:02:49 2012" -->
<!-- isoreceived="20120305090249" -->
<!-- sent="Mon, 05 Mar 2012 18:02:38 +0900" -->
<!-- isosent="20120305090238" -->
<!-- name="Y.MATSUMOTO" -->
<!-- email="yuki.matsumoto_at_[hidden]" -->
<!-- subject="[OMPI devel] Collective communications may be abend when it use over 2GiB buffer" -->
<!-- id="4F54812E.2070604_at_jp.fujitsu.com" -->
<!-- charset="ISO-2022-JP" -->
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
<strong>Subject:</strong> [OMPI devel] Collective communications may be abend when it use over 2GiB buffer<br>
<strong>From:</strong> Y.MATSUMOTO (<em>yuki.matsumoto_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-05 04:02:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10678.php">George Bosilca: "Re: [OMPI devel] Collective communications may be abend when it use over 2GiB buffer"</a>
<li><strong>Previous message:</strong> <a href="10676.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10678.php">George Bosilca: "Re: [OMPI devel] Collective communications may be abend when it use over 2GiB buffer"</a>
<li><strong>Reply:</strong> <a href="10678.php">George Bosilca: "Re: [OMPI devel] Collective communications may be abend when it use over 2GiB buffer"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear All,
<br>
<p>Next feedback is about &quot;collective communications&quot;.
<br>
<p>Collective communication may be abend when it use over 2GiB buffer.
<br>
This problem occurs following condition:
<br>
-- communicator_size * count(scount/rcount) &gt;= 2GiB
<br>
It occurs in even small PC cluster.
<br>
<p>The following is one of the suspicious parts.
<br>
(Many similar code in ompi/coll/tuned/*.c)
<br>
<p>--- in ompi/coll/tuned/coll_tuned_allgather.c (V1.4.X's trunk)---
<br>
398    tmprecv = (char*) rbuf + rank * rcount * rext;
<br>
-----------------------------------------------------------------
<br>
<p>if this condition is met, &quot;rank * rcount&quot; is overflowed.
<br>
So, we fixed it tentatively like following:
<br>
(cast int to size_t)
<br>
--- in ompi/coll/tuned/coll_tuned_allgather.c --------------
<br>
398    tmprecv = (char*) rbuf + (size_t)rank * rcount * rext;
<br>
------------------------------------------------------------
<br>
<p>It needs not only &quot;ompi/coll/tuned&quot; but also other codes to fix this problem.
<br>
We try to fix, but following functions have problem (argument may be overflowed):
<br>
-&quot;ompi_coll_tuned_sendrecv&quot; may be called when &quot;scount/rcount&quot; sets over 2GiB.
<br>
-&quot;ompi_datatype_copy_content_same_ddt&quot; may be called when &quot;count&quot; sets over 2GiB.
<br>
-&quot;basic_linear in Allgather&quot;: Bcast may be called when &quot;count&quot; sets over 2GiB.
<br>
<p>Best Regards,
<br>
Yuki Matsumoto
<br>
MPI development team,
<br>
Fujitsu
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10678.php">George Bosilca: "Re: [OMPI devel] Collective communications may be abend when it use over 2GiB buffer"</a>
<li><strong>Previous message:</strong> <a href="10676.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10678.php">George Bosilca: "Re: [OMPI devel] Collective communications may be abend when it use over 2GiB buffer"</a>
<li><strong>Reply:</strong> <a href="10678.php">George Bosilca: "Re: [OMPI devel] Collective communications may be abend when it use over 2GiB buffer"</a>
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
