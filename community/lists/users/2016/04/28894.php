<?
$subject_val = "Re: [OMPI users] libfabric verb provider for iWARP RNIC";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  5 17:08:06 2016" -->
<!-- isoreceived="20160405210806" -->
<!-- sent="Tue, 5 Apr 2016 17:08:05 -0400" -->
<!-- isosent="20160405210805" -->
<!-- name="dpchoudh ." -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] libfabric verb provider for iWARP RNIC" -->
<!-- id="CAHXxYDgacKL3HZz546GjBELb6FFWVWRFVsi5Ni3c__m72SXvOQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAHXxYDiBd-3m30Z=C7ovYSBW0XGKAjMMzucx1Z+HJ4OuMYEJHA_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2016-04-05 17:08:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28895.php">Dave Love: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>Previous message:</strong> <a href="28893.php">Emani, Murali: "Re: [OMPI users] Question on MPI_Comm_spawn timing"</a>
<li><strong>In reply to:</strong> <a href="28886.php">dpchoudh .: "Re: [OMPI users] libfabric verb provider for iWARP RNIC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28920.php">dpchoudh .: "Re: [OMPI users] libfabric verb provider for iWARP RNIC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
For the sake of completeness, let me put the answer here. I posted the
<br>
question on libfabric mailing list and with their input, installed
<br>
librdmacm-devel. After that and a rebuild, the issue went away.
<br>
<p>Thanks
<br>
Durga
<br>
<p>We learn from history that we never learn from history.
<br>
<p>On Mon, Apr 4, 2016 at 3:20 PM, dpchoudh . &lt;dpchoudh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Howard
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you very much for your suggestions. All the installation location in
</span><br>
<span class="quotelev1">&gt; my case are the default ones, so that is likely not the issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What I find a bit confusing is this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As I mentioned, my cluster has both Qlogic Infiniband and Chelsio iWARP
</span><br>
<span class="quotelev1">&gt; (which are exposed to OpenMPI natively as well as an IP interface)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With this configuration, if I build libfabric with configure options
</span><br>
<span class="quotelev1">&gt; --with-psm=auto --with-verbs=auto, as I mentioned earlier, only the PSM
</span><br>
<span class="quotelev1">&gt; interface shows up in the fi_info listing, and OpenMPI programs using ofi
</span><br>
<span class="quotelev1">&gt; MTL *do* work. However, I do not know if the traffic is going through the
</span><br>
<span class="quotelev1">&gt; Qlogic card or the Chelsio card; it is likely the former.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am going to ask this on the libfabric list, but perhaps the following
</span><br>
<span class="quotelev1">&gt; question is relevant in the OpenMPI list:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My understanding about the OFI MTL is the following: please correct me
</span><br>
<span class="quotelev1">&gt; where I am wrong:
</span><br>
<span class="quotelev1">&gt; As I understand, ANY type of transport that exposes a verbs interface
</span><br>
<span class="quotelev1">&gt; (iWARP, RoCE, Infiniband from any manufacturer) can become a libfabric
</span><br>
<span class="quotelev1">&gt; provider (when libfabric is compiled with --with-verbs option) and thus
</span><br>
<span class="quotelev1">&gt; support the OFI MTL (and thus the cm PML?)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is the above true?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards
</span><br>
<span class="quotelev1">&gt; Durga
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We learn from history that we never learn from history.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Apr 4, 2016 at 7:29 AM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Durga,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'd suggest reposting this to the libfabric-users mail list.
</span><br>
<span class="quotelev2">&gt;&gt; You can join that list at
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://lists.openfabrics.org/mailman/listinfo/libfabric-users">http://lists.openfabrics.org/mailman/listinfo/libfabric-users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'd suggest including the output of config.log.  If you installed
</span><br>
<span class="quotelev2">&gt;&gt; ofed in non-canonical location, you may need to give an explicit
</span><br>
<span class="quotelev2">&gt;&gt; path as an argument to the --enable-verbs configury option.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Note if you're trying to use libfabric with the Open MPI ofi
</span><br>
<span class="quotelev2">&gt;&gt; mtl, you will need to get literally the freshest version of
</span><br>
<span class="quotelev2">&gt;&gt; libfabric, either at github or the 1.3rc2 tarball at
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.openfabrics.org/downloads/ofi/">http://www.openfabrics.org/downloads/ofi/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Good luck,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Howard
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2016-04-02 13:41 GMT-06:00 dpchoudh . &lt;dpchoudh_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello all
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My machine has 3 network cards:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. Broadcom GbE (vanilla type, with some offload capability)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. Chelsion S310 10Gb iWARP
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3. Qlogic DDR 4X Infiniband.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; With this setup, I built libfabric like this:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure --enable-udp=auto --enable-gni=auto --enable-mxm=auto
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --enable-usnic=auto --enable-verbs=auto --enable-sockets=auto
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --enable-psm2=auto --enable-psm=auto &amp;&amp; make &amp;&amp; sudo make install
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, in the built libfabric, I do not see a verb provider, which I'd
</span><br>
<span class="quotelev3">&gt;&gt;&gt; expect for the iWARP card, at least.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [durga_at_smallMPI libfabric]$ fi_info
</span><br>
<span class="quotelev3">&gt;&gt;&gt; psm: psm
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     version: 0.9
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     type: FI_EP_RDM
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     protocol: FI_PROTO_PSMX
</span><br>
<span class="quotelev3">&gt;&gt;&gt; UDP: UDP-IP
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     version: 1.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     type: FI_EP_DGRAM
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     protocol: FI_PROTO_UDP
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sockets: IP
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     version: 1.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     type: FI_EP_MSG
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     protocol: FI_PROTO_SOCK_TCP
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sockets: IP
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     version: 1.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     type: FI_EP_DGRAM
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     protocol: FI_PROTO_SOCK_TCP
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sockets: IP
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     version: 1.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     type: FI_EP_RDM
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     protocol: FI_PROTO_SOCK_TCP
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Am I doing something wrong or misunderstanding how libfabric works?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks in advance
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Durga
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We learn from history that we never learn from history.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/04/28870.php">http://www.open-mpi.org/community/lists/users/2016/04/28870.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/04/28884.php">http://www.open-mpi.org/community/lists/users/2016/04/28884.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28894/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28895.php">Dave Love: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>Previous message:</strong> <a href="28893.php">Emani, Murali: "Re: [OMPI users] Question on MPI_Comm_spawn timing"</a>
<li><strong>In reply to:</strong> <a href="28886.php">dpchoudh .: "Re: [OMPI users] libfabric verb provider for iWARP RNIC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28920.php">dpchoudh .: "Re: [OMPI users] libfabric verb provider for iWARP RNIC"</a>
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
