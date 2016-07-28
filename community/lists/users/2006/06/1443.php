<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Jun 17 09:44:04 2006" -->
<!-- isoreceived="20060617134404" -->
<!-- sent="Sat, 17 Jun 2006 09:46:37 -0400" -->
<!-- isosent="20060617134637" -->
<!-- name="Tony Ladd" -->
<!-- email="ladd_at_[hidden]" -->
<!-- subject="[OMPI users] mca_btl_tcp_frag_send: writev failed with errno=110" -->
<!-- id="02b601c69214$746f72e0$ca79e30a_at_ladd02" -->
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
<strong>From:</strong> Tony Ladd (<em>ladd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-17 09:46:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1444.php">Owen Stampflee: "[OMPI users] Error Polling HP CQ Status on PPC64 LInux with IB"</a>
<li><strong>Previous message:</strong> <a href="1442.php">Eric Thibodeau: "Re: [OMPI users] pls:rsh: execv failed with errno=2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1498.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] mca_btl_tcp_frag_send: writev failed with errno=110"</a>
<li><strong>Maybe reply:</strong> <a href="1498.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] mca_btl_tcp_frag_send: writev failed with errno=110"</a>
<li><strong>Maybe reply:</strong> <a href="1515.php">Tony Ladd: "Re: [OMPI users] mca_btl_tcp_frag_send: writev failed with errno=110"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am getting the following error with openmpi-1.1b1
<br>
<p>mca_btl_tcp_frag_send: writev failed with errno=110
<br>
<p>1) This does not ever happen with other MPI's I have tried like MPICH and
<br>
LAM
<br>
2) It only seems to happen with large numbers of cpus, 32 and occasionally
<br>
16, and with larger messages sizes. In this case it ws 128K.
<br>
3) It only seems to happen with dual cpus on each node.
<br>
4) My configuration is default with (in openmpi-mca-params.conf): 
<br>
pls_rsh_agent = rsh 
<br>
btl = tcp,self 
<br>
btl_tcp_if_include = eth1 
<br>
I also set --mca btl_tcp_eager_limit 131072 when running the program, though
<br>
leaving this out does not eliminate the problem.
<br>
<p>My program is a communication test; it sends bidirectional point to point
<br>
messages among N cpus. In one test it exchanges messages between pairs of
<br>
cpus, in another it reads from the node on its left and sends to the node on
<br>
its right (a kind of ring), and in a third it uses MPI_ALL_REDUCE.
<br>
<p>Finally: the tcp driver in openmpi seems not nearly as good as the one in
<br>
LAM. I got higher throughput with far fewer dropouts with LAM.
<br>
<p>Tony
<br>
<p><p>-------------------------------
<br>
Tony Ladd
<br>
Professor, Chemical Engineering
<br>
University of Florida
<br>
PO Box 116005
<br>
Gainesville, FL 32611-6005
<br>
<p>Tel: 352-392-6509
<br>
FAX: 352-392-9513
<br>
Email: tladd_at_[hidden]
<br>
Web: <a href="http://ladd.che.ufl.edu">http://ladd.che.ufl.edu</a> 
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1444.php">Owen Stampflee: "[OMPI users] Error Polling HP CQ Status on PPC64 LInux with IB"</a>
<li><strong>Previous message:</strong> <a href="1442.php">Eric Thibodeau: "Re: [OMPI users] pls:rsh: execv failed with errno=2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1498.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] mca_btl_tcp_frag_send: writev failed with errno=110"</a>
<li><strong>Maybe reply:</strong> <a href="1498.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] mca_btl_tcp_frag_send: writev failed with errno=110"</a>
<li><strong>Maybe reply:</strong> <a href="1515.php">Tony Ladd: "Re: [OMPI users] mca_btl_tcp_frag_send: writev failed with errno=110"</a>
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
