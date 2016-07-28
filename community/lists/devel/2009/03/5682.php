<?
$subject_val = "[OMPI devel] OMPI 1.3 - PERUSE peruse_comm_spec_t peer Negative Value";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar 21 20:18:58 2009" -->
<!-- isoreceived="20090322001858" -->
<!-- sent="Sat, 21 Mar 2009 18:18:54 -0600 (MDT)" -->
<!-- isosent="20090322001854" -->
<!-- name="Samuel K. Gutierrez" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="[OMPI devel] OMPI 1.3 - PERUSE peruse_comm_spec_t peer Negative Value" -->
<!-- id="37242.128.165.0.81.1237681134.squirrel_at_webmail.lanl.gov" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] OMPI 1.3 - PERUSE peruse_comm_spec_t peer Negative Value<br>
<strong>From:</strong> Samuel K. Gutierrez (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-21 20:18:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5683.php">Kiril Dichev: "Re: [OMPI devel] OMPI 1.3 - PERUSE peruse_comm_spec_t peer Negative	Value"</a>
<li><strong>Previous message:</strong> <a href="5681.php">Paul H. Hargrove: "Re: [OMPI devel] 1.3.1 fails with GM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5683.php">Kiril Dichev: "Re: [OMPI devel] OMPI 1.3 - PERUSE peruse_comm_spec_t peer Negative	Value"</a>
<li><strong>Reply:</strong> <a href="5683.php">Kiril Dichev: "Re: [OMPI devel] OMPI 1.3 - PERUSE peruse_comm_spec_t peer Negative	Value"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All,
<br>
<p>I'm writing a simple profiling library which utilizes PERUSE.  My callback
<br>
function counts communication events (see example code below).  I noticed
<br>
that in OMPI v1.3 spec-&gt;peer is sometimes a negative value (OMPI v1.2.6
<br>
did not exhibit this behavior).  I added some boundary checks, but it
<br>
seems as if this is a bug?  I hope I'm not missing something...
<br>
<p>The peruse test provided in the OMPI v1.3 source exhibits similar behavior:
<br>
mpirun -np 2 ./mpi_peruse | grep peer:-1
<br>
<p>int callback(peruse_event_h event_h, MPI_Aint unique_id,
<br>
peruse_comm_spec_t *spec, void *param) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (spec-&gt;peer == rank) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return MPI_SUCCESS;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;rrCounts[spec-&gt;peer]++;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return MPI_SUCCESS;
<br>
}
<br>
<p><p>Any insight is greatly appreciated.
<br>
<p>Thanks,
<br>
<p>Samuel K. Gutierrez
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5683.php">Kiril Dichev: "Re: [OMPI devel] OMPI 1.3 - PERUSE peruse_comm_spec_t peer Negative	Value"</a>
<li><strong>Previous message:</strong> <a href="5681.php">Paul H. Hargrove: "Re: [OMPI devel] 1.3.1 fails with GM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5683.php">Kiril Dichev: "Re: [OMPI devel] OMPI 1.3 - PERUSE peruse_comm_spec_t peer Negative	Value"</a>
<li><strong>Reply:</strong> <a href="5683.php">Kiril Dichev: "Re: [OMPI devel] OMPI 1.3 - PERUSE peruse_comm_spec_t peer Negative	Value"</a>
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
