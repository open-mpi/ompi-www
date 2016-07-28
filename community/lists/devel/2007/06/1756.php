<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jun 25 08:28:33 2007" -->
<!-- isoreceived="20070625122833" -->
<!-- sent="Mon, 25 Jun 2007 15:28:27 +0300" -->
<!-- isosent="20070625122827" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="[OMPI devel] Improve OB1 performance when multiple NICs are available" -->
<!-- id="20070625122827.GZ1164_at_minantech.com" -->
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
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-25 08:28:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1757.php">Pak Lui: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>Previous message:</strong> <a href="1755.php">Bogdan Costescu: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1771.php">George Bosilca: "Re: [OMPI devel] Improve OB1 performance when multiple NICs are available"</a>
<li><strong>Reply:</strong> <a href="1771.php">George Bosilca: "Re: [OMPI devel] Improve OB1 performance when multiple NICs are available"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>&nbsp;Attached patch improves OB1 scheduling algorithm between multiple
<br>
links. Current algorithm perform very poorly if interconnects with very
<br>
different bandwidth values are used. For big message sizes it always
<br>
divide traffic equally between all available interconnects. Attached
<br>
patch change this. It calculates for each message how much data should be
<br>
send via each link according to relative weight of the link. This is
<br>
done for RDMAed part of the message as well as for the part that is send
<br>
by send/recv in the case of pipeline protocol. As a side effect
<br>
send_schedule/recv_schedule functions are greatly simplified.
<br>
<p>&nbsp;Surprisingly (at least for me) this patch is also greatly improves some
<br>
benchmarks results when multiple links with the same bandwidth are in use.
<br>
Attached postscript shows some benchmark results with and without the
<br>
patch. I used two computers connected with 4 DDR HCAs for this benchmark.
<br>
Each HCA is capable of ~1600MB on its own.
<br>
<p><pre>
--
			Gleb.


</pre>
<hr>
<ul>
<li>text/x-diff attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1756/ob1_multi_nic_scheduling.diff">ob1_multi_nic_scheduling.diff</a>
</ul>
<!-- attachment="ob1_multi_nic_scheduling.diff" -->
<hr>
<ul>
<li>application/postscript attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1756/openib_mulihca_bw.ps">openib_mulihca_bw.ps</a>
</ul>
<!-- attachment="openib_mulihca_bw.ps" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1757.php">Pak Lui: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>Previous message:</strong> <a href="1755.php">Bogdan Costescu: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1771.php">George Bosilca: "Re: [OMPI devel] Improve OB1 performance when multiple NICs are available"</a>
<li><strong>Reply:</strong> <a href="1771.php">George Bosilca: "Re: [OMPI devel] Improve OB1 performance when multiple NICs are available"</a>
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
