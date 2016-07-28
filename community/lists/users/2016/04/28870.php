<?
$subject_val = "[OMPI users] libfabric verb provider for iWARP RNIC";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr  2 15:41:11 2016" -->
<!-- isoreceived="20160402194111" -->
<!-- sent="Sat, 2 Apr 2016 15:41:09 -0400" -->
<!-- isosent="20160402194109" -->
<!-- name="dpchoudh ." -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="[OMPI users] libfabric verb provider for iWARP RNIC" -->
<!-- id="CAHXxYDiK=tszWLa4q+AWnjK-U6PYbp2iDHNFmOGNiE2VHquUyg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] libfabric verb provider for iWARP RNIC<br>
<strong>From:</strong> dpchoudh . (<em>dpchoudh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-02 15:41:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28871.php">Emani, Murali: "[OMPI users] Question on MPI_Comm_spawn timing"</a>
<li><strong>Previous message:</strong> <a href="28869.php">Ralph Castain: "Re: [OMPI users] error for openmpi-dev-3762-gf2e33c7 with Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28884.php">Howard Pritchard: "Re: [OMPI users] libfabric verb provider for iWARP RNIC"</a>
<li><strong>Reply:</strong> <a href="28884.php">Howard Pritchard: "Re: [OMPI users] libfabric verb provider for iWARP RNIC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all
<br>
<p>My machine has 3 network cards:
<br>
<p>1. Broadcom GbE (vanilla type, with some offload capability)
<br>
2. Chelsion S310 10Gb iWARP
<br>
3. Qlogic DDR 4X Infiniband.
<br>
<p>With this setup, I built libfabric like this:
<br>
<p>./configure --enable-udp=auto --enable-gni=auto --enable-mxm=auto
<br>
--enable-usnic=auto --enable-verbs=auto --enable-sockets=auto
<br>
--enable-psm2=auto --enable-psm=auto &amp;&amp; make &amp;&amp; sudo make install
<br>
<p>However, in the built libfabric, I do not see a verb provider, which I'd
<br>
expect for the iWARP card, at least.
<br>
<p>[durga_at_smallMPI libfabric]$ fi_info
<br>
psm: psm
<br>
&nbsp;&nbsp;&nbsp;&nbsp;version: 0.9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;type: FI_EP_RDM
<br>
&nbsp;&nbsp;&nbsp;&nbsp;protocol: FI_PROTO_PSMX
<br>
UDP: UDP-IP
<br>
&nbsp;&nbsp;&nbsp;&nbsp;version: 1.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;type: FI_EP_DGRAM
<br>
&nbsp;&nbsp;&nbsp;&nbsp;protocol: FI_PROTO_UDP
<br>
sockets: IP
<br>
&nbsp;&nbsp;&nbsp;&nbsp;version: 1.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;type: FI_EP_MSG
<br>
&nbsp;&nbsp;&nbsp;&nbsp;protocol: FI_PROTO_SOCK_TCP
<br>
sockets: IP
<br>
&nbsp;&nbsp;&nbsp;&nbsp;version: 1.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;type: FI_EP_DGRAM
<br>
&nbsp;&nbsp;&nbsp;&nbsp;protocol: FI_PROTO_SOCK_TCP
<br>
sockets: IP
<br>
&nbsp;&nbsp;&nbsp;&nbsp;version: 1.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;type: FI_EP_RDM
<br>
&nbsp;&nbsp;&nbsp;&nbsp;protocol: FI_PROTO_SOCK_TCP
<br>
<p><p>Am I doing something wrong or misunderstanding how libfabric works?
<br>
<p>Thanks in advance
<br>
Durga
<br>
<p>We learn from history that we never learn from history.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28870/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28871.php">Emani, Murali: "[OMPI users] Question on MPI_Comm_spawn timing"</a>
<li><strong>Previous message:</strong> <a href="28869.php">Ralph Castain: "Re: [OMPI users] error for openmpi-dev-3762-gf2e33c7 with Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28884.php">Howard Pritchard: "Re: [OMPI users] libfabric verb provider for iWARP RNIC"</a>
<li><strong>Reply:</strong> <a href="28884.php">Howard Pritchard: "Re: [OMPI users] libfabric verb provider for iWARP RNIC"</a>
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
