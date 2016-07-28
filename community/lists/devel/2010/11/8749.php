<?
$subject_val = "[OMPI devel] confusion between slot and procs on mca/rmaps";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 30 12:39:37 2010" -->
<!-- isoreceived="20101130173937" -->
<!-- sent="Tue, 30 Nov 2010 18:47:24 +0100" -->
<!-- isosent="20101130174724" -->
<!-- name="Damien Guinier" -->
<!-- email="damien.guinier_at_[hidden]" -->
<!-- subject="[OMPI devel] confusion between slot and procs on mca/rmaps" -->
<!-- id="4CF538AC.5090609_at_bull.net" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] confusion between slot and procs on mca/rmaps<br>
<strong>From:</strong> Damien Guinier (<em>damien.guinier_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-30 12:47:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8750.php">Jeff Squyres: "Re: [OMPI devel] Sending large messages over RDMA fails"</a>
<li><strong>Previous message:</strong> <a href="8748.php">Jeff Squyres: "[OMPI devel] 1.5.1rc1 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/12/8752.php">Ralph Castain: "Re: [OMPI devel] confusion between slot and procs on mca/rmaps"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/12/8752.php">Ralph Castain: "Re: [OMPI devel] confusion between slot and procs on mca/rmaps"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
hi all,
<br>
<p>Many time, there are no difference between &quot;proc&quot; and &quot;slot&quot;. But when 
<br>
you use &quot;mpirun -cpus-per-proc X&quot;, slot have X procs.
<br>
On orte/mca/rmaps/base/rmaps_base_common_mappers.c, there are a 
<br>
confusion between proc and slot. this little error impact mapping action:
<br>
<p>On OMPI last version with 32 cores compute node:
<br>
salloc -n 8 -c 8 mpirun -bind-to-core -bycore ./a.out
<br>
[rank:0]&lt;stdout&gt;: host:compute18
<br>
[rank:1]&lt;stdout&gt;: host:compute19
<br>
[rank:2]&lt;stdout&gt;: host:compute18
<br>
[rank:3]&lt;stdout&gt;: host:compute19
<br>
[rank:4]&lt;stdout&gt;: host:compute18
<br>
[rank:5]&lt;stdout&gt;: host:compute19
<br>
[rank:6]&lt;stdout&gt;: host:compute18
<br>
[rank:7]&lt;stdout&gt;: host:compute19
<br>
<p>with patch:
<br>
[rank:0]&lt;stdout&gt;: host:compute18
<br>
[rank:1]&lt;stdout&gt;: host:compute18
<br>
[rank:2]&lt;stdout&gt;: host:compute18
<br>
[rank:3]&lt;stdout&gt;: host:compute18
<br>
[rank:4]&lt;stdout&gt;: host:compute19
<br>
[rank:5]&lt;stdout&gt;: host:compute19
<br>
[rank:6]&lt;stdout&gt;: host:compute19
<br>
[rank:7]&lt;stdout&gt;: host:compute19
<br>
<p>Can you say, if my patch is correct ?
<br>
<p>Thanks you
<br>
<p>Damien
<br>
<p><p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8749/patch_cpu_per_rank">patch_cpu_per_rank</a>
</ul>
<!-- attachment="patch_cpu_per_rank" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8750.php">Jeff Squyres: "Re: [OMPI devel] Sending large messages over RDMA fails"</a>
<li><strong>Previous message:</strong> <a href="8748.php">Jeff Squyres: "[OMPI devel] 1.5.1rc1 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/12/8752.php">Ralph Castain: "Re: [OMPI devel] confusion between slot and procs on mca/rmaps"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/12/8752.php">Ralph Castain: "Re: [OMPI devel] confusion between slot and procs on mca/rmaps"</a>
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
