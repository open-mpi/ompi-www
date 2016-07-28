<?
$subject_val = "Re: [OMPI users] libfabric/usnic does not compile in 2.x";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 30 15:13:55 2015" -->
<!-- isoreceived="20150930191355" -->
<!-- sent="Wed, 30 Sep 2015 21:13:51 +0200" -->
<!-- isosent="20150930191351" -->
<!-- name="marcin.krotkiewski" -->
<!-- email="marcin.krotkiewski_at_[hidden]" -->
<!-- subject="Re: [OMPI users] libfabric/usnic does not compile in 2.x" -->
<!-- id="560C346F.8050602_at_gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAF1Cqj4eriNZ1WD05_qf5oOLrZ_=pvL5jyDHMeS+A6RH0-gx4w_at_mail.gmail.com" -->
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
<strong>From:</strong> marcin.krotkiewski (<em>marcin.krotkiewski_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-30 15:13:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27752.php">Diego Avesani: "Re: [OMPI users] send_request error with allocate"</a>
<li><strong>Previous message:</strong> <a href="27750.php">Howard Pritchard: "Re: [OMPI users] libfabric/usnic does not compile in 2.x"</a>
<li><strong>In reply to:</strong> <a href="27750.php">Howard Pritchard: "Re: [OMPI users] libfabric/usnic does not compile in 2.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27755.php">Jeff Squyres (jsquyres): "Re: [OMPI users] libfabric/usnic does not compile in 2.x"</a>
<li><strong>Reply:</strong> <a href="27755.php">Jeff Squyres (jsquyres): "Re: [OMPI users] libfabric/usnic does not compile in 2.x"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you for this clear explanation. I do not have True Scale on 'my' 
<br>
machine, so unless Mellanox gets involved - no juice for me.
<br>
<p>Makes me wonder. libfabric is marketed as a next-generation solution. 
<br>
Clearly it has some reported advantage for Cisco usnic, but since you 
<br>
claim no improvement over psm, then I guess it is nothing to look 
<br>
forward to, is it?
<br>
<p>Anyway, thanks a lot for clearing this up
<br>
<p>Marcin
<br>
<p><p>On 09/30/2015 08:13 PM, Howard Pritchard wrote:
<br>
<span class="quotelev1">&gt; Hi Marcin,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2015-09-30 9:19 GMT-06:00 marcin.krotkiewski 
</span><br>
<span class="quotelev1">&gt; &lt;marcin.krotkiewski_at_[hidden] &lt;mailto:marcin.krotkiewski_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Thank you, and Jeff, for clarification.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Before I bother you all more without the need, I should probably
</span><br>
<span class="quotelev1">&gt;     say I was hoping to use libfabric/OpenMPI on an InfiniBand
</span><br>
<span class="quotelev1">&gt;     cluster. Somehow now I feel I have confused this altogether, so
</span><br>
<span class="quotelev1">&gt;     maybe I should go one step back:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      1. libfabric is hardware independent, and does support
</span><br>
<span class="quotelev1">&gt;     Infiniband, right?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The short answer is yes libfabric is hardware independent (and does 
</span><br>
<span class="quotelev1">&gt; work on goods days on os-x as well as linux).
</span><br>
<span class="quotelev1">&gt; The longer answer is that there has been more/less work on 
</span><br>
<span class="quotelev1">&gt; implementing providers (the plugins in to libfabric
</span><br>
<span class="quotelev1">&gt; to interface to different networks) for different networks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is a socket provider.  That gets a good amount of attention 
</span><br>
<span class="quotelev1">&gt; because its a base reference provider.
</span><br>
<span class="quotelev1">&gt; psm/psm2 providers are available.  I have used the psm provider some 
</span><br>
<span class="quotelev1">&gt; on a truescale cluster.  It doesn't
</span><br>
<span class="quotelev1">&gt; offer better performance than just using psm directly, but it does 
</span><br>
<span class="quotelev1">&gt; appear to work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is an mxm provider but it was not implemented by mellanox, and I 
</span><br>
<span class="quotelev1">&gt; can't get it to compile on my
</span><br>
<span class="quotelev1">&gt; connectx3 system using mxm 1.5.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is a vanilla verbs provider but it doesn't support FI_EP_RDM 
</span><br>
<span class="quotelev1">&gt; endpoint type, which is used by
</span><br>
<span class="quotelev1">&gt; the non-cisco component of Open MPI (ofi mtl) which is available.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When you build and install libfabric, there should be an fi_info 
</span><br>
<span class="quotelev1">&gt; binary installed in $(LIBFABRIC_INSTALL_DIR)/bin
</span><br>
<span class="quotelev1">&gt; On my truescale cluster the output is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; psm: psm
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     version: 0.9
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     type: FI_EP_RDM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     protocol: FI_PROTO_PSMX
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; verbs: IB-0x80fe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     version: 1.0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     type: FI_EP_MSG
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     protocol: FI_PROTO_RDMA_CM_IB_RC
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; sockets: IP
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     version: 1.0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     type: FI_EP_MSG
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     protocol: FI_PROTO_SOCK_TCP
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; sockets: IP
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     version: 1.0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     type: FI_EP_DGRAM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     protocol: FI_PROTO_SOCK_TCP
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; sockets: IP
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     version: 1.0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     type: FI_EP_RDM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     protocol: FI_PROTO_SOCK_TCP
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In order to use the mtl/ofi, at a minimum a provider needs to support 
</span><br>
<span class="quotelev1">&gt; FI_EP_RDM type (see above).  Note that on the truescale
</span><br>
<span class="quotelev1">&gt; cluster the verbs provider is built, but it only supports FI_EP_MSG 
</span><br>
<span class="quotelev1">&gt; endpoint types.  So mtl/ofi can't use that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      2. I read that OpenMPI provides interface to libfabric through
</span><br>
<span class="quotelev1">&gt;     btl/usnic and mtl/ofi.  can any of those use libfabric on
</span><br>
<span class="quotelev1">&gt;     Infiniband networks?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if you have intel truescale or its follow-on then the answer is yes, 
</span><br>
<span class="quotelev1">&gt; although the default is for Open MPI to use mtl/psm on that network.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Please forgive my ignorance, the amount of different options is
</span><br>
<span class="quotelev1">&gt;     rather overwhelming..
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Marcin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On 09/30/2015 04:26 PM, Howard Pritchard wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Hello Marcin
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     What configure options are you using besides with-libfabric?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Could you post your config.log file tp the list?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Looks like you only install fi_ext_usnic.h if you could build the
</span><br>
<span class="quotelev2">&gt;&gt;     usnic libfab provider.  When you configured libfabric what
</span><br>
<span class="quotelev2">&gt;&gt;     providers were listed at the end of configure run? Maybe attach
</span><br>
<span class="quotelev2">&gt;&gt;     config.log from the libfabric build ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     If your cluster has cisco usnics you should probably be using
</span><br>
<span class="quotelev2">&gt;&gt;     libfabric/cisco openmpi. If you are using intel omnipath you may
</span><br>
<span class="quotelev2">&gt;&gt;     want to try the ofi mtl.  Its not selected by default however.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Howard
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     ----------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     sent from my smart phonr so no good type.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Howard
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     On Sep 30, 2015 5:35 AM, &quot;Marcin Krotkiewski&quot;
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;marcin.krotkiewski_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;mailto:marcin.krotkiewski_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         I am trying to compile the 2.x branch with libfabric support,
</span><br>
<span class="quotelev2">&gt;&gt;         but get this error during configure:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         configure:100708: checking rdma/fi_ext_usnic.h presence
</span><br>
<span class="quotelev2">&gt;&gt;         configure:100708: gcc -E
</span><br>
<span class="quotelev2">&gt;&gt;         -I/cluster/software/VERSIONS/openmpi.gnu.2.x/include
</span><br>
<span class="quotelev2">&gt;&gt;         -I/usit/abel/u1/marcink/software/ompi-release-2.x/opal/mca/hwloc/hwloc1110/hwloc/include
</span><br>
<span class="quotelev2">&gt;&gt;         conftest.c
</span><br>
<span class="quotelev2">&gt;&gt;         conftest.c:688:31: fatal error: rdma/fi_ext_usnic.h: No such
</span><br>
<span class="quotelev2">&gt;&gt;         file or directory
</span><br>
<span class="quotelev2">&gt;&gt;         [...]
</span><br>
<span class="quotelev2">&gt;&gt;         configure:100708: checking for rdma/fi_ext_usnic.h
</span><br>
<span class="quotelev2">&gt;&gt;         configure:100708: result: no
</span><br>
<span class="quotelev2">&gt;&gt;         configure:101253: checking if MCA component btl:usnic can compile
</span><br>
<span class="quotelev2">&gt;&gt;         configure:101255: result: no
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Which is correct - the file is not there. I have downloaded
</span><br>
<span class="quotelev2">&gt;&gt;         fresh libfabric-1.1.0.tar.bz2 and it does not have this file.
</span><br>
<span class="quotelev2">&gt;&gt;         Probably OpenMPI needs some updates?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         I am also wondering what is the state of libfabric support in
</span><br>
<span class="quotelev2">&gt;&gt;         OpenMPI nowadays. I have seen recent (March) presentation
</span><br>
<span class="quotelev2">&gt;&gt;         about it, so it seems to be an actively developed feature. Is
</span><br>
<span class="quotelev2">&gt;&gt;         this correct? It seemed from the presentation that there are
</span><br>
<span class="quotelev2">&gt;&gt;         benefits to this approach, but is it mature enough in
</span><br>
<span class="quotelev2">&gt;&gt;         OpenMPI, or it will yet take some time?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Thanks!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Marcin
</span><br>
<span class="quotelev2">&gt;&gt;         _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;         users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;         users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;         Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;         <a href="http://www.open-mpi.org/community/lists/users/2015/09/27728.php">http://www.open-mpi.org/community/lists/users/2015/09/27728.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;     users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;     Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2015/09/27733.php">http://www.open-mpi.org/community/lists/users/2015/09/27733.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;     Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/users/2015/09/27743.php">http://www.open-mpi.org/community/lists/users/2015/09/27743.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/09/27750.php">http://www.open-mpi.org/community/lists/users/2015/09/27750.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27751/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27752.php">Diego Avesani: "Re: [OMPI users] send_request error with allocate"</a>
<li><strong>Previous message:</strong> <a href="27750.php">Howard Pritchard: "Re: [OMPI users] libfabric/usnic does not compile in 2.x"</a>
<li><strong>In reply to:</strong> <a href="27750.php">Howard Pritchard: "Re: [OMPI users] libfabric/usnic does not compile in 2.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27755.php">Jeff Squyres (jsquyres): "Re: [OMPI users] libfabric/usnic does not compile in 2.x"</a>
<li><strong>Reply:</strong> <a href="27755.php">Jeff Squyres (jsquyres): "Re: [OMPI users] libfabric/usnic does not compile in 2.x"</a>
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
