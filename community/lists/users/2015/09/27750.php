<?
$subject_val = "Re: [OMPI users] libfabric/usnic does not compile in 2.x";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 30 14:13:15 2015" -->
<!-- isoreceived="20150930181315" -->
<!-- sent="Wed, 30 Sep 2015 12:13:09 -0600" -->
<!-- isosent="20150930181309" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] libfabric/usnic does not compile in 2.x" -->
<!-- id="CAF1Cqj4eriNZ1WD05_qf5oOLrZ_=pvL5jyDHMeS+A6RH0-gx4w_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="560BFD8E.5090508_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] libfabric/usnic does not compile in 2.x<br>
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-30 14:13:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27751.php">marcin.krotkiewski: "Re: [OMPI users] libfabric/usnic does not compile in 2.x"</a>
<li><strong>Previous message:</strong> <a href="27749.php">George Bosilca: "Re: [OMPI users] about MPI communication complexity"</a>
<li><strong>In reply to:</strong> <a href="27743.php">marcin.krotkiewski: "Re: [OMPI users] libfabric/usnic does not compile in 2.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27751.php">marcin.krotkiewski: "Re: [OMPI users] libfabric/usnic does not compile in 2.x"</a>
<li><strong>Reply:</strong> <a href="27751.php">marcin.krotkiewski: "Re: [OMPI users] libfabric/usnic does not compile in 2.x"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Marcin,
<br>
<p><p>2015-09-30 9:19 GMT-06:00 marcin.krotkiewski &lt;marcin.krotkiewski_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Thank you, and Jeff, for clarification.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Before I bother you all more without the need, I should probably say I was
</span><br>
<span class="quotelev1">&gt; hoping to use libfabric/OpenMPI on an InfiniBand cluster. Somehow now I
</span><br>
<span class="quotelev1">&gt; feel I have confused this altogether, so maybe I should go one step back:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  1. libfabric is hardware independent, and does support Infiniband, right?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>The short answer is yes libfabric is hardware independent (and does work on
<br>
goods days on os-x as well as linux).
<br>
The longer answer is that there has been more/less work on implementing
<br>
providers (the plugins in to libfabric
<br>
to interface to different networks) for different networks.
<br>
<p>There is a socket provider.  That gets a good amount of attention because
<br>
its a base reference provider.
<br>
psm/psm2 providers are available.  I have used the psm provider some on a
<br>
truescale cluster.  It doesn't
<br>
offer better performance than just using psm directly, but it does appear
<br>
to work.
<br>
<p>There is an mxm provider but it was not implemented by mellanox, and I
<br>
can't get it to compile on my
<br>
connectx3 system using mxm 1.5.
<br>
<p>There is a vanilla verbs provider but it doesn't support FI_EP_RDM endpoint
<br>
type, which is used by
<br>
the non-cisco component of Open MPI (ofi mtl) which is available.
<br>
<p>When you build and install libfabric, there should be an fi_info binary
<br>
installed in $(LIBFABRIC_INSTALL_DIR)/bin
<br>
On my truescale cluster the output is:
<br>
<p>psm: psm
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;version: 0.9
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;type: FI_EP_RDM
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;protocol: FI_PROTO_PSMX
<br>
<p>verbs: IB-0x80fe
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;version: 1.0
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;type: FI_EP_MSG
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;protocol: FI_PROTO_RDMA_CM_IB_RC
<br>
<p>sockets: IP
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;version: 1.0
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;type: FI_EP_MSG
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;protocol: FI_PROTO_SOCK_TCP
<br>
<p>sockets: IP
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;version: 1.0
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;type: FI_EP_DGRAM
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;protocol: FI_PROTO_SOCK_TCP
<br>
<p>sockets: IP
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;version: 1.0
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;type: FI_EP_RDM
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;protocol: FI_PROTO_SOCK_TCP
<br>
<p>In order to use the mtl/ofi, at a minimum a provider needs to support
<br>
FI_EP_RDM type (see above).  Note that on the truescale
<br>
cluster the verbs provider is built, but it only supports FI_EP_MSG
<br>
endpoint types.  So mtl/ofi can't use that.
<br>
<p><p><p><span class="quotelev1">&gt;  2. I read that OpenMPI provides interface to libfabric through btl/usnic
</span><br>
<span class="quotelev1">&gt; and mtl/ofi.  can any of those use libfabric on Infiniband networks?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>if you have intel truescale or its follow-on then the answer is yes,
<br>
although the default is for Open MPI to use mtl/psm on that network.
<br>
<p><p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please forgive my ignorance, the amount of different options is rather
</span><br>
<span class="quotelev1">&gt; overwhelming..
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Marcin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 09/30/2015 04:26 PM, Howard Pritchard wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello Marcin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What configure options are you using besides with-libfabric?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could you post your config.log file tp the list?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Looks like you only install fi_ext_usnic.h if you could build the usnic
</span><br>
<span class="quotelev1">&gt; libfab provider.  When you configured libfabric what providers were listed
</span><br>
<span class="quotelev1">&gt; at the end of configure run? Maybe attach config.log from the libfabric
</span><br>
<span class="quotelev1">&gt; build ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If your cluster has cisco usnics you should probably be using
</span><br>
<span class="quotelev1">&gt; libfabric/cisco openmpi.  If you are using intel omnipath you may want to
</span><br>
<span class="quotelev1">&gt; try the ofi mtl.  Its not selected by default however.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Howard
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; sent from my smart phonr so no good type.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Howard
</span><br>
<span class="quotelev1">&gt; On Sep 30, 2015 5:35 AM, &quot;Marcin Krotkiewski&quot; &lt;
</span><br>
<span class="quotelev1">&gt; marcin.krotkiewski_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am trying to compile the 2.x branch with libfabric support, but get
</span><br>
<span class="quotelev2">&gt;&gt; this error during configure:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; configure:100708: checking rdma/fi_ext_usnic.h presence
</span><br>
<span class="quotelev2">&gt;&gt; configure:100708: gcc -E
</span><br>
<span class="quotelev2">&gt;&gt; -I/cluster/software/VERSIONS/openmpi.gnu.2.x/include
</span><br>
<span class="quotelev2">&gt;&gt; -I/usit/abel/u1/marcink/software/ompi-release-2.x/opal/mca/hwloc/hwloc1110/hwloc/include
</span><br>
<span class="quotelev2">&gt;&gt; conftest.c
</span><br>
<span class="quotelev2">&gt;&gt; conftest.c:688:31: fatal error: rdma/fi_ext_usnic.h: No such file or
</span><br>
<span class="quotelev2">&gt;&gt; directory
</span><br>
<span class="quotelev2">&gt;&gt; [...]
</span><br>
<span class="quotelev2">&gt;&gt; configure:100708: checking for rdma/fi_ext_usnic.h
</span><br>
<span class="quotelev2">&gt;&gt; configure:100708: result: no
</span><br>
<span class="quotelev2">&gt;&gt; configure:101253: checking if MCA component btl:usnic can compile
</span><br>
<span class="quotelev2">&gt;&gt; configure:101255: result: no
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Which is correct - the file is not there. I have downloaded fresh
</span><br>
<span class="quotelev2">&gt;&gt; libfabric-1.1.0.tar.bz2 and it does not have this file. Probably OpenMPI
</span><br>
<span class="quotelev2">&gt;&gt; needs some updates?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am also wondering what is the state of libfabric support in OpenMPI
</span><br>
<span class="quotelev2">&gt;&gt; nowadays. I have seen recent (March) presentation about it, so it seems to
</span><br>
<span class="quotelev2">&gt;&gt; be an actively developed feature. Is this correct? It seemed from the
</span><br>
<span class="quotelev2">&gt;&gt; presentation that there are benefits to this approach, but is it mature
</span><br>
<span class="quotelev2">&gt;&gt; enough in OpenMPI, or it will yet take some time?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Marcin
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/09/27728.php">http://www.open-mpi.org/community/lists/users/2015/09/27728.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/09/27733.php">http://www.open-mpi.org/community/lists/users/2015/09/27733.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/09/27743.php">http://www.open-mpi.org/community/lists/users/2015/09/27743.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27750/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27751.php">marcin.krotkiewski: "Re: [OMPI users] libfabric/usnic does not compile in 2.x"</a>
<li><strong>Previous message:</strong> <a href="27749.php">George Bosilca: "Re: [OMPI users] about MPI communication complexity"</a>
<li><strong>In reply to:</strong> <a href="27743.php">marcin.krotkiewski: "Re: [OMPI users] libfabric/usnic does not compile in 2.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27751.php">marcin.krotkiewski: "Re: [OMPI users] libfabric/usnic does not compile in 2.x"</a>
<li><strong>Reply:</strong> <a href="27751.php">marcin.krotkiewski: "Re: [OMPI users] libfabric/usnic does not compile in 2.x"</a>
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
