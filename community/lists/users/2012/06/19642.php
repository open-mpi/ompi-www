<?
$subject_val = "[OMPI users] error in osc_rdma_data_mave.c";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 21 07:15:53 2012" -->
<!-- isoreceived="20120621111553" -->
<!-- sent="Thu, 21 Jun 2012 13:15:03 +0200 (CEST)" -->
<!-- isosent="20120621111503" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] error in osc_rdma_data_mave.c" -->
<!-- id="201206211115.q5LBF3Ep009329_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] error in osc_rdma_data_mave.c<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-21 07:15:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19643.php">Peter Soukalopoulos: "[OMPI users] Mpiexec hanging when running &quot;hello world&quot; on 2 EC2 windows instances"</a>
<li><strong>Previous message:</strong> <a href="19641.php">Iliev, Hristo: "Re: [OMPI users] two jobs in a single mpirun command and MPI_COMM_WORLD	issue ..."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>today I tried to compile openmpi-1.6 on Windows 7 with Visual
<br>
Studio 2010. Unfortunately I got the following error in file
<br>
osc_rdma_data_move.c in line 1099.
<br>
<p>error C2440:&quot;=&quot; 'void*' kann nicht in 'void**' konvertiert werden
<br>
<p><p>...
<br>
ompi_osc_rdma_sendreq_recv_accum(..., void** payload)
<br>
{
<br>
&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;payload = (void*) malloc(buflen);
<br>
&nbsp;&nbsp;...
<br>
}
<br>
<p><p>I changed the statement to
<br>
<p>&nbsp;&nbsp;*payload = (void*) malloc(buflen);
<br>
<p>because I found a call of this function with &amp;payload. Did I do
<br>
the right thing? Perhaps somebody can fix it in the official source
<br>
code.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19643.php">Peter Soukalopoulos: "[OMPI users] Mpiexec hanging when running &quot;hello world&quot; on 2 EC2 windows instances"</a>
<li><strong>Previous message:</strong> <a href="19641.php">Iliev, Hristo: "Re: [OMPI users] two jobs in a single mpirun command and MPI_COMM_WORLD	issue ..."</a>
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
