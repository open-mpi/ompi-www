<?
$subject_val = "Re: [OMPI users] libfabric verb provider for iWARP RNIC";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  4 15:20:22 2016" -->
<!-- isoreceived="20160404192022" -->
<!-- sent="Mon, 4 Apr 2016 15:20:21 -0400" -->
<!-- isosent="20160404192021" -->
<!-- name="dpchoudh ." -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] libfabric verb provider for iWARP RNIC" -->
<!-- id="CAHXxYDiBd-3m30Z=C7ovYSBW0XGKAjMMzucx1Z+HJ4OuMYEJHA_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2016-04-04 15:20:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28887.php">Dave Love: "[OMPI users] resolution of MPI_Wtime"</a>
<li><strong>Previous message:</strong> <a href="28885.php">Xavier Besseron: "Re: [OMPI users] Fault tolerant feature in Open MPI"</a>
<li><strong>In reply to:</strong> <a href="28884.php">Howard Pritchard: "Re: [OMPI users] libfabric verb provider for iWARP RNIC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28894.php">dpchoudh .: "Re: [OMPI users] libfabric verb provider for iWARP RNIC"</a>
<li><strong>Reply:</strong> <a href="28894.php">dpchoudh .: "Re: [OMPI users] libfabric verb provider for iWARP RNIC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Howard
<br>
<p>Thank you very much for your suggestions. All the installation location in
<br>
my case are the default ones, so that is likely not the issue.
<br>
<p>What I find a bit confusing is this:
<br>
<p>As I mentioned, my cluster has both Qlogic Infiniband and Chelsio iWARP
<br>
(which are exposed to OpenMPI natively as well as an IP interface)
<br>
<p>With this configuration, if I build libfabric with configure options
<br>
--with-psm=auto --with-verbs=auto, as I mentioned earlier, only the PSM
<br>
interface shows up in the fi_info listing, and OpenMPI programs using ofi
<br>
MTL *do* work. However, I do not know if the traffic is going through the
<br>
Qlogic card or the Chelsio card; it is likely the former.
<br>
<p>I am going to ask this on the libfabric list, but perhaps the following
<br>
question is relevant in the OpenMPI list:
<br>
<p>My understanding about the OFI MTL is the following: please correct me
<br>
where I am wrong:
<br>
As I understand, ANY type of transport that exposes a verbs interface
<br>
(iWARP, RoCE, Infiniband from any manufacturer) can become a libfabric
<br>
provider (when libfabric is compiled with --with-verbs option) and thus
<br>
support the OFI MTL (and thus the cm PML?)
<br>
<p>Is the above true?
<br>
<p>Best regards
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28886/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28887.php">Dave Love: "[OMPI users] resolution of MPI_Wtime"</a>
<li><strong>Previous message:</strong> <a href="28885.php">Xavier Besseron: "Re: [OMPI users] Fault tolerant feature in Open MPI"</a>
<li><strong>In reply to:</strong> <a href="28884.php">Howard Pritchard: "Re: [OMPI users] libfabric verb provider for iWARP RNIC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28894.php">dpchoudh .: "Re: [OMPI users] libfabric verb provider for iWARP RNIC"</a>
<li><strong>Reply:</strong> <a href="28894.php">dpchoudh .: "Re: [OMPI users] libfabric verb provider for iWARP RNIC"</a>
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
