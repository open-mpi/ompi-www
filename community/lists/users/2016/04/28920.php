<?
$subject_val = "Re: [OMPI users] libfabric verb provider for iWARP RNIC";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 11 14:38:31 2016" -->
<!-- isoreceived="20160411183831" -->
<!-- sent="Mon, 11 Apr 2016 14:38:27 -0400" -->
<!-- isosent="20160411183827" -->
<!-- name="dpchoudh ." -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] libfabric verb provider for iWARP RNIC" -->
<!-- id="CAHXxYDj+oX_Ro7R+MaVmFjTD60KnsHZVU7EeKBBqxNmHBmg2Fw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAF1Cqj54Tw8r3FppQTX8qCwO99EDMJEQTOfO_0XiRftTW94dQg_at_mail.gmail.com" -->
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
<strong>From:</strong> dpchoudh . (<em>dpchoudh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-11 14:38:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28921.php">Jeff Squyres (jsquyres): "Re: [OMPI users] libfabric verb provider for iWARP RNIC"</a>
<li><strong>Previous message:</strong> <a href="28919.php">Dave Love: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>In reply to:</strong> <a href="28884.php">Howard Pritchard: "Re: [OMPI users] libfabric verb provider for iWARP RNIC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28921.php">Jeff Squyres (jsquyres): "Re: [OMPI users] libfabric verb provider for iWARP RNIC"</a>
<li><strong>Reply:</strong> <a href="28921.php">Jeff Squyres (jsquyres): "Re: [OMPI users] libfabric verb provider for iWARP RNIC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Howard and all
<br>
<p>Thank you very much for the information. I have a follow up question:
<br>
<p>If the vendor of a new type of fabric wants to include support for OpenMPI,
<br>
then, as long as they can implement a libfabric provider, they can use the
<br>
OFI MTL without adding any code to the OpenMPI source tree itself.
<br>
<p>Is the above statement correct? Note that I am trying to contrast against
<br>
the other possibility, implementing a BTL, that does not add anything to
<br>
the libfabrics source tree but adds to OpenMPI source tree instead.
<br>
<p>Thanks
<br>
Durga
<br>
<p>We learn from history that we never learn from history.
<br>
<p>On Mon, Apr 4, 2016 at 7:29 AM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Hi Durga,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'd suggest reposting this to the libfabric-users mail list.
</span><br>
<span class="quotelev1">&gt; You can join that list at
</span><br>
<span class="quotelev1">&gt; <a href="http://lists.openfabrics.org/mailman/listinfo/libfabric-users">http://lists.openfabrics.org/mailman/listinfo/libfabric-users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'd suggest including the output of config.log.  If you installed
</span><br>
<span class="quotelev1">&gt; ofed in non-canonical location, you may need to give an explicit
</span><br>
<span class="quotelev1">&gt; path as an argument to the --enable-verbs configury option.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note if you're trying to use libfabric with the Open MPI ofi
</span><br>
<span class="quotelev1">&gt; mtl, you will need to get literally the freshest version of
</span><br>
<span class="quotelev1">&gt; libfabric, either at github or the 1.3rc2 tarball at
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.openfabrics.org/downloads/ofi/">http://www.openfabrics.org/downloads/ofi/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Good luck,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Howard
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2016-04-02 13:41 GMT-06:00 dpchoudh . &lt;dpchoudh_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello all
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My machine has 3 network cards:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. Broadcom GbE (vanilla type, with some offload capability)
</span><br>
<span class="quotelev2">&gt;&gt; 2. Chelsion S310 10Gb iWARP
</span><br>
<span class="quotelev2">&gt;&gt; 3. Qlogic DDR 4X Infiniband.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; With this setup, I built libfabric like this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --enable-udp=auto --enable-gni=auto --enable-mxm=auto
</span><br>
<span class="quotelev2">&gt;&gt; --enable-usnic=auto --enable-verbs=auto --enable-sockets=auto
</span><br>
<span class="quotelev2">&gt;&gt; --enable-psm2=auto --enable-psm=auto &amp;&amp; make &amp;&amp; sudo make install
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, in the built libfabric, I do not see a verb provider, which I'd
</span><br>
<span class="quotelev2">&gt;&gt; expect for the iWARP card, at least.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [durga_at_smallMPI libfabric]$ fi_info
</span><br>
<span class="quotelev2">&gt;&gt; psm: psm
</span><br>
<span class="quotelev2">&gt;&gt;     version: 0.9
</span><br>
<span class="quotelev2">&gt;&gt;     type: FI_EP_RDM
</span><br>
<span class="quotelev2">&gt;&gt;     protocol: FI_PROTO_PSMX
</span><br>
<span class="quotelev2">&gt;&gt; UDP: UDP-IP
</span><br>
<span class="quotelev2">&gt;&gt;     version: 1.0
</span><br>
<span class="quotelev2">&gt;&gt;     type: FI_EP_DGRAM
</span><br>
<span class="quotelev2">&gt;&gt;     protocol: FI_PROTO_UDP
</span><br>
<span class="quotelev2">&gt;&gt; sockets: IP
</span><br>
<span class="quotelev2">&gt;&gt;     version: 1.0
</span><br>
<span class="quotelev2">&gt;&gt;     type: FI_EP_MSG
</span><br>
<span class="quotelev2">&gt;&gt;     protocol: FI_PROTO_SOCK_TCP
</span><br>
<span class="quotelev2">&gt;&gt; sockets: IP
</span><br>
<span class="quotelev2">&gt;&gt;     version: 1.0
</span><br>
<span class="quotelev2">&gt;&gt;     type: FI_EP_DGRAM
</span><br>
<span class="quotelev2">&gt;&gt;     protocol: FI_PROTO_SOCK_TCP
</span><br>
<span class="quotelev2">&gt;&gt; sockets: IP
</span><br>
<span class="quotelev2">&gt;&gt;     version: 1.0
</span><br>
<span class="quotelev2">&gt;&gt;     type: FI_EP_RDM
</span><br>
<span class="quotelev2">&gt;&gt;     protocol: FI_PROTO_SOCK_TCP
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Am I doing something wrong or misunderstanding how libfabric works?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance
</span><br>
<span class="quotelev2">&gt;&gt; Durga
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We learn from history that we never learn from history.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/04/28870.php">http://www.open-mpi.org/community/lists/users/2016/04/28870.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/04/28884.php">http://www.open-mpi.org/community/lists/users/2016/04/28884.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28920/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28921.php">Jeff Squyres (jsquyres): "Re: [OMPI users] libfabric verb provider for iWARP RNIC"</a>
<li><strong>Previous message:</strong> <a href="28919.php">Dave Love: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>In reply to:</strong> <a href="28884.php">Howard Pritchard: "Re: [OMPI users] libfabric verb provider for iWARP RNIC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28921.php">Jeff Squyres (jsquyres): "Re: [OMPI users] libfabric verb provider for iWARP RNIC"</a>
<li><strong>Reply:</strong> <a href="28921.php">Jeff Squyres (jsquyres): "Re: [OMPI users] libfabric verb provider for iWARP RNIC"</a>
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
