<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 11 01:17:36 2007" -->
<!-- isoreceived="20071011051736" -->
<!-- sent="11 Oct 2007 05:16:08 -0000" -->
<!-- isosent="20071011051608" -->
<!-- name="Neeraj Chourasia" -->
<!-- email="neeraj_ch1_at_[hidden]" -->
<!-- subject="[OMPI users] Tuning Openmpi with IB Interconnect" -->
<!-- id="20071011051608.29212.qmail_at_webmail17.rediffmail.com" -->
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
<strong>From:</strong> Neeraj Chourasia (<em>neeraj_ch1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-11 01:16:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4197.php">Torsten Hoefler: "Re: [OMPI users] Tuning Openmpi with IB Interconnect"</a>
<li><strong>Previous message:</strong> <a href="4195.php">Stephen Guzik: "[OMPI users] MPI::BOTTOM vs MPI_BOTTOM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4197.php">Torsten Hoefler: "Re: [OMPI users] Tuning Openmpi with IB Interconnect"</a>
<li><strong>Maybe reply:</strong> <a href="4197.php">Torsten Hoefler: "Re: [OMPI users] Tuning Openmpi with IB Interconnect"</a>
<li><strong>Reply:</strong> <a href="4199.php">Matteo Cicuttin: "Re: [OMPI users] Tuning Openmpi with IB Interconnect"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear All,&amp;nbsp;&amp;nbsp;&amp;nbsp; Could anyone tell me the important tuning parameters in openmpi with IB interconnect? I tried setting eager_rdma, min_rdma_size, mpi_leave_pinned parameters from the mpirun command line on 38 nodes cluster (38*2 processors) but in vain. I found simple mpirun with no mca parameters performing better. I conducted test on P2P send/receive with data size of 8MB.&amp;nbsp;&amp;nbsp;&amp;nbsp; Similarly i patched HPL linpack code with libnbc(non blocking collectives) and found no performance benefits. I went through its patch and found that, its probably not overlapping computation with communication.Any help in this direction would be appreciated.-Neeraj
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4196/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4197.php">Torsten Hoefler: "Re: [OMPI users] Tuning Openmpi with IB Interconnect"</a>
<li><strong>Previous message:</strong> <a href="4195.php">Stephen Guzik: "[OMPI users] MPI::BOTTOM vs MPI_BOTTOM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4197.php">Torsten Hoefler: "Re: [OMPI users] Tuning Openmpi with IB Interconnect"</a>
<li><strong>Maybe reply:</strong> <a href="4197.php">Torsten Hoefler: "Re: [OMPI users] Tuning Openmpi with IB Interconnect"</a>
<li><strong>Reply:</strong> <a href="4199.php">Matteo Cicuttin: "Re: [OMPI users] Tuning Openmpi with IB Interconnect"</a>
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
