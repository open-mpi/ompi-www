<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 24 03:00:45 2007" -->
<!-- isoreceived="20071024070045" -->
<!-- sent="Wed, 24 Oct 2007 09:00:31 +0200" -->
<!-- isosent="20071024070031" -->
<!-- name="&#197;ke Sandgren" -->
<!-- email="ake.sandgren_at_[hidden]" -->
<!-- subject="[OMPI users] Bug in common_mx.c (1.2.5a0r16522)" -->
<!-- id="1193209231.2424.8.camel_at_y-boda.ydc.se" -->
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
<strong>From:</strong> &#197;ke Sandgren (<em>ake.sandgren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-24 03:00:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4293.php">Amit Kumar Saha: "Re: [OMPI users] Parallel Genetic Algorithms - Open MPI Implementation"</a>
<li><strong>Previous message:</strong> <a href="4291.php">Neeraj Chourasia: "[OMPI users] OpenMPI 1.2.4 vs 1.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4294.php">흆e Sandgren: "Re: [OMPI users] Bug in common_mx.c (1.2.5a0r16522)"</a>
<li><strong>Reply:</strong> <a href="4294.php">흆e Sandgren: "Re: [OMPI users] Bug in common_mx.c (1.2.5a0r16522)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi!
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
In common_mx.c the following looks wrong.
<br>
ompi_common_mx_finalize(void)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mx_return_t mx_return;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ompi_common_mx_initialize_ref_cnt--;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if(ompi_common_mx_initialize == 0) {
<br>
<p>That should be
<br>
if(ompi_common_mx_initialize_ref_cnt == 0)
<br>
right?
<br>
<p><pre>
-- 
Ake Sandgren, HPC2N, Umea University, S-90187 Umea, Sweden
Internet: ake_at_[hidden]   Phone: +46 90 7866134 Fax: +46 90 7866126
Mobile: +46 70 7716134 WWW: <a href="http://www.hpc2n.umu.se">http://www.hpc2n.umu.se</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4293.php">Amit Kumar Saha: "Re: [OMPI users] Parallel Genetic Algorithms - Open MPI Implementation"</a>
<li><strong>Previous message:</strong> <a href="4291.php">Neeraj Chourasia: "[OMPI users] OpenMPI 1.2.4 vs 1.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4294.php">흆e Sandgren: "Re: [OMPI users] Bug in common_mx.c (1.2.5a0r16522)"</a>
<li><strong>Reply:</strong> <a href="4294.php">흆e Sandgren: "Re: [OMPI users] Bug in common_mx.c (1.2.5a0r16522)"</a>
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
