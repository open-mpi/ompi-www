<?
$subject_val = "[OMPI users] RDMA over IB between heterogenous processors with different endianness";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 25 13:38:53 2008" -->
<!-- isoreceived="20080825173853" -->
<!-- sent="Mon, 25 Aug 2008 13:38:47 -0400" -->
<!-- isosent="20080825173847" -->
<!-- name="Mi Yan" -->
<!-- email="miyan_at_[hidden]" -->
<!-- subject="[OMPI users] RDMA over IB between heterogenous processors with different endianness" -->
<!-- id="OF62ECAB58.F3835EFE-ON852574B0.005857E3-852574B0.0060EEF6_at_us.ibm.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] RDMA over IB between heterogenous processors with different endianness<br>
<strong>From:</strong> Mi Yan (<em>miyan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-25 13:38:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6423.php">Brian W. Barrett: "Re: [OMPI users] RDMA over IB between heterogenous processors with different endianness"</a>
<li><strong>Previous message:</strong> <a href="6421.php">Gabriele Fatigati: "Re: [OMPI users] Checkpoint problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6423.php">Brian W. Barrett: "Re: [OMPI users] RDMA over IB between heterogenous processors with different endianness"</a>
<li><strong>Reply:</strong> <a href="6423.php">Brian W. Barrett: "Re: [OMPI users] RDMA over IB between heterogenous processors with different endianness"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;Does OpenMPI always  use SEND/RECV protocol  between heterogeneous
<br>
processors with different endianness?
<br>
<p>I tried  btl_openib_flags to be 2 , 4 and 6 respectively to allowe RDMA,
<br>
but the bandwidth between the two heterogeneous nodes is slow,  same as
<br>
the bandwidth when btl_openib_flags to be 1.  Seems to me SEND/RECV  is
<br>
always used no matter btl_openib_flags is.   Can I force  OpenMPI to use
<br>
RDMA between x86 and PPC?     I only transfer MPI_BYTE, so we do not need
<br>
the support for endianness.
<br>
<p>thanks,
<br>
Mi  Yan
<br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6422/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6423.php">Brian W. Barrett: "Re: [OMPI users] RDMA over IB between heterogenous processors with different endianness"</a>
<li><strong>Previous message:</strong> <a href="6421.php">Gabriele Fatigati: "Re: [OMPI users] Checkpoint problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6423.php">Brian W. Barrett: "Re: [OMPI users] RDMA over IB between heterogenous processors with different endianness"</a>
<li><strong>Reply:</strong> <a href="6423.php">Brian W. Barrett: "Re: [OMPI users] RDMA over IB between heterogenous processors with different endianness"</a>
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
