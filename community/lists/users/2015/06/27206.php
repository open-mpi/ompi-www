<?
$subject_val = "[OMPI users] Progress on target of MPI_Win_lock on Infiniband";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jun 28 05:20:01 2015" -->
<!-- isoreceived="20150628092001" -->
<!-- sent="Sun, 28 Jun 2015 11:19:43 +0200" -->
<!-- isosent="20150628091943" -->
<!-- name="Marc-Andre Hermanns" -->
<!-- email="m.a.hermanns_at_[hidden]" -->
<!-- subject="[OMPI users] Progress on target of MPI_Win_lock on Infiniband" -->
<!-- id="558FBC2F.9080501_at_grs-sim.de" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] Progress on target of MPI_Win_lock on Infiniband<br>
<strong>From:</strong> Marc-Andre Hermanns (<em>m.a.hermanns_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-28 05:19:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27207.php">Fedele Stabile: "Re: [OMPI users] SOLVED hybrid programming: cpu load issues"</a>
<li><strong>Previous message:</strong> <a href="27205.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27210.php">Nathan Hjelm: "Re: [OMPI users] Progress on target of MPI_Win_lock on Infiniband"</a>
<li><strong>Reply:</strong> <a href="27210.php">Nathan Hjelm: "Re: [OMPI users] Progress on target of MPI_Win_lock on Infiniband"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>I am currently investigating a microbenchmark with Open MPI 1.8.3 on
<br>
Infiniband and was wondering whether Open MPI provides target-side
<br>
progress for incoming lock requests.
<br>
<p>It seems lock requests are only handled if the target calls into the
<br>
MPI API and I was wondering if that is a configuration issue (and I
<br>
have to set some runtime variable) or if it is the general case.
<br>
<p>Cheers,
<br>
Marc-Andre
<br>
<pre>
-- 
Marc-Andre Hermanns
J&#195;&#188;lich Aachen Research Alliance,
High Performance Computing (JARA-HPC)
German Research School for Simulation Sciences GmbH
Schinkelstrasse 2
52062 Aachen
Germany
Phone: +49 2461 61 2509
Fax: +49 241 80 6 99753
www.grs-sim.de/parallel
email: m.a.hermanns_at_[hidden]

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27206/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27207.php">Fedele Stabile: "Re: [OMPI users] SOLVED hybrid programming: cpu load issues"</a>
<li><strong>Previous message:</strong> <a href="27205.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27210.php">Nathan Hjelm: "Re: [OMPI users] Progress on target of MPI_Win_lock on Infiniband"</a>
<li><strong>Reply:</strong> <a href="27210.php">Nathan Hjelm: "Re: [OMPI users] Progress on target of MPI_Win_lock on Infiniband"</a>
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
