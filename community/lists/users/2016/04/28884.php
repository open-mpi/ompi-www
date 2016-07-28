<?
$subject_val = "Re: [OMPI users] libfabric verb provider for iWARP RNIC";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  4 07:29:41 2016" -->
<!-- isoreceived="20160404112941" -->
<!-- sent="Mon, 4 Apr 2016 05:29:39 -0600" -->
<!-- isosent="20160404112939" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] libfabric verb provider for iWARP RNIC" -->
<!-- id="CAF1Cqj54Tw8r3FppQTX8qCwO99EDMJEQTOfO_0XiRftTW94dQg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAHXxYDiK=tszWLa4q+AWnjK-U6PYbp2iDHNFmOGNiE2VHquUyg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] libfabric verb provider for iWARP RNIC<br>
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-04 07:29:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28885.php">Xavier Besseron: "Re: [OMPI users] Fault tolerant feature in Open MPI"</a>
<li><strong>Previous message:</strong> <a href="28883.php">Brock Palen: "Re: [OMPI users] Building against XLC XLF"</a>
<li><strong>In reply to:</strong> <a href="28870.php">dpchoudh .: "[OMPI users] libfabric verb provider for iWARP RNIC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28886.php">dpchoudh .: "Re: [OMPI users] libfabric verb provider for iWARP RNIC"</a>
<li><strong>Reply:</strong> <a href="28886.php">dpchoudh .: "Re: [OMPI users] libfabric verb provider for iWARP RNIC"</a>
<li><strong>Reply:</strong> <a href="28920.php">dpchoudh .: "Re: [OMPI users] libfabric verb provider for iWARP RNIC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Durga,
<br>
<p>I'd suggest reposting this to the libfabric-users mail list.
<br>
You can join that list at
<br>
<a href="http://lists.openfabrics.org/mailman/listinfo/libfabric-users">http://lists.openfabrics.org/mailman/listinfo/libfabric-users</a>
<br>
<p>I'd suggest including the output of config.log.  If you installed
<br>
ofed in non-canonical location, you may need to give an explicit
<br>
path as an argument to the --enable-verbs configury option.
<br>
<p>Note if you're trying to use libfabric with the Open MPI ofi
<br>
mtl, you will need to get literally the freshest version of
<br>
libfabric, either at github or the 1.3rc2 tarball at
<br>
<p><a href="http://www.openfabrics.org/downloads/ofi/">http://www.openfabrics.org/downloads/ofi/</a>
<br>
<p>Good luck,
<br>
<p>Howard
<br>
<p><p>2016-04-02 13:41 GMT-06:00 dpchoudh . &lt;dpchoudh_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Hello all
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My machine has 3 network cards:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. Broadcom GbE (vanilla type, with some offload capability)
</span><br>
<span class="quotelev1">&gt; 2. Chelsion S310 10Gb iWARP
</span><br>
<span class="quotelev1">&gt; 3. Qlogic DDR 4X Infiniband.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With this setup, I built libfabric like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --enable-udp=auto --enable-gni=auto --enable-mxm=auto
</span><br>
<span class="quotelev1">&gt; --enable-usnic=auto --enable-verbs=auto --enable-sockets=auto
</span><br>
<span class="quotelev1">&gt; --enable-psm2=auto --enable-psm=auto &amp;&amp; make &amp;&amp; sudo make install
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, in the built libfabric, I do not see a verb provider, which I'd
</span><br>
<span class="quotelev1">&gt; expect for the iWARP card, at least.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [durga_at_smallMPI libfabric]$ fi_info
</span><br>
<span class="quotelev1">&gt; psm: psm
</span><br>
<span class="quotelev1">&gt;     version: 0.9
</span><br>
<span class="quotelev1">&gt;     type: FI_EP_RDM
</span><br>
<span class="quotelev1">&gt;     protocol: FI_PROTO_PSMX
</span><br>
<span class="quotelev1">&gt; UDP: UDP-IP
</span><br>
<span class="quotelev1">&gt;     version: 1.0
</span><br>
<span class="quotelev1">&gt;     type: FI_EP_DGRAM
</span><br>
<span class="quotelev1">&gt;     protocol: FI_PROTO_UDP
</span><br>
<span class="quotelev1">&gt; sockets: IP
</span><br>
<span class="quotelev1">&gt;     version: 1.0
</span><br>
<span class="quotelev1">&gt;     type: FI_EP_MSG
</span><br>
<span class="quotelev1">&gt;     protocol: FI_PROTO_SOCK_TCP
</span><br>
<span class="quotelev1">&gt; sockets: IP
</span><br>
<span class="quotelev1">&gt;     version: 1.0
</span><br>
<span class="quotelev1">&gt;     type: FI_EP_DGRAM
</span><br>
<span class="quotelev1">&gt;     protocol: FI_PROTO_SOCK_TCP
</span><br>
<span class="quotelev1">&gt; sockets: IP
</span><br>
<span class="quotelev1">&gt;     version: 1.0
</span><br>
<span class="quotelev1">&gt;     type: FI_EP_RDM
</span><br>
<span class="quotelev1">&gt;     protocol: FI_PROTO_SOCK_TCP
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am I doing something wrong or misunderstanding how libfabric works?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance
</span><br>
<span class="quotelev1">&gt; Durga
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We learn from history that we never learn from history.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/04/28870.php">http://www.open-mpi.org/community/lists/users/2016/04/28870.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28884/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28885.php">Xavier Besseron: "Re: [OMPI users] Fault tolerant feature in Open MPI"</a>
<li><strong>Previous message:</strong> <a href="28883.php">Brock Palen: "Re: [OMPI users] Building against XLC XLF"</a>
<li><strong>In reply to:</strong> <a href="28870.php">dpchoudh .: "[OMPI users] libfabric verb provider for iWARP RNIC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28886.php">dpchoudh .: "Re: [OMPI users] libfabric verb provider for iWARP RNIC"</a>
<li><strong>Reply:</strong> <a href="28886.php">dpchoudh .: "Re: [OMPI users] libfabric verb provider for iWARP RNIC"</a>
<li><strong>Reply:</strong> <a href="28920.php">dpchoudh .: "Re: [OMPI users] libfabric verb provider for iWARP RNIC"</a>
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
