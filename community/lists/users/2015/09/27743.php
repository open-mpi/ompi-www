<?
$subject_val = "Re: [OMPI users] libfabric/usnic does not compile in 2.x";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 30 11:20:36 2015" -->
<!-- isoreceived="20150930152036" -->
<!-- sent="Wed, 30 Sep 2015 17:19:42 +0200" -->
<!-- isosent="20150930151942" -->
<!-- name="marcin.krotkiewski" -->
<!-- email="marcin.krotkiewski_at_[hidden]" -->
<!-- subject="Re: [OMPI users] libfabric/usnic does not compile in 2.x" -->
<!-- id="560BFD8E.5090508_at_gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAF1Cqj6g5d-rN6p=jKWw3ABkz6dEEYDC_JnsEsp=TmK9GphBhQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-09-30 11:19:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27744.php">Grigory Shamov: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<li><strong>Previous message:</strong> <a href="27742.php">Gilles Gouaillardet: "Re: [OMPI users] send_request error with allocate"</a>
<li><strong>In reply to:</strong> <a href="27733.php">Howard Pritchard: "Re: [OMPI users] libfabric/usnic does not compile in 2.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27750.php">Howard Pritchard: "Re: [OMPI users] libfabric/usnic does not compile in 2.x"</a>
<li><strong>Reply:</strong> <a href="27750.php">Howard Pritchard: "Re: [OMPI users] libfabric/usnic does not compile in 2.x"</a>
<li><strong>Reply:</strong> <a href="27754.php">Jeff Squyres (jsquyres): "Re: [OMPI users] libfabric/usnic does not compile in 2.x"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you, and Jeff, for clarification.
<br>
<p>Before I bother you all more without the need, I should probably say I 
<br>
was hoping to use libfabric/OpenMPI on an InfiniBand cluster. Somehow 
<br>
now I feel I have confused this altogether, so maybe I should go one 
<br>
step back:
<br>
<p>&nbsp;&nbsp;1. libfabric is hardware independent, and does support Infiniband, right?
<br>
&nbsp;&nbsp;2. I read that OpenMPI provides interface to libfabric through 
<br>
btl/usnic and mtl/ofi.  can any of those use libfabric on Infiniband 
<br>
networks?
<br>
<p>Please forgive my ignorance, the amount of different options is rather 
<br>
overwhelming..
<br>
<p>Marcin
<br>
<p><p><p>On 09/30/2015 04:26 PM, Howard Pritchard wrote:
<br>
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
<span class="quotelev1">&gt; Looks like you only install fi_ext_usnic.h if you could build the 
</span><br>
<span class="quotelev1">&gt; usnic libfab provider.  When you configured libfabric what providers 
</span><br>
<span class="quotelev1">&gt; were listed at the end of configure run? Maybe attach config.log from 
</span><br>
<span class="quotelev1">&gt; the libfabric build ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If your cluster has cisco usnics you should probably be using 
</span><br>
<span class="quotelev1">&gt; libfabric/cisco openmpi.  If you are using intel omnipath you may want 
</span><br>
<span class="quotelev1">&gt; to try the ofi mtl.  Its not selected by default however.
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 30, 2015 5:35 AM, &quot;Marcin Krotkiewski&quot; 
</span><br>
<span class="quotelev1">&gt; &lt;marcin.krotkiewski_at_[hidden] &lt;mailto:marcin.krotkiewski_at_[hidden]&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I am trying to compile the 2.x branch with libfabric support, but
</span><br>
<span class="quotelev1">&gt;     get this error during configure:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     configure:100708: checking rdma/fi_ext_usnic.h presence
</span><br>
<span class="quotelev1">&gt;     configure:100708: gcc -E
</span><br>
<span class="quotelev1">&gt;     -I/cluster/software/VERSIONS/openmpi.gnu.2.x/include
</span><br>
<span class="quotelev1">&gt;     -I/usit/abel/u1/marcink/software/ompi-release-2.x/opal/mca/hwloc/hwloc1110/hwloc/include
</span><br>
<span class="quotelev1">&gt;     conftest.c
</span><br>
<span class="quotelev1">&gt;     conftest.c:688:31: fatal error: rdma/fi_ext_usnic.h: No such file
</span><br>
<span class="quotelev1">&gt;     or directory
</span><br>
<span class="quotelev1">&gt;     [...]
</span><br>
<span class="quotelev1">&gt;     configure:100708: checking for rdma/fi_ext_usnic.h
</span><br>
<span class="quotelev1">&gt;     configure:100708: result: no
</span><br>
<span class="quotelev1">&gt;     configure:101253: checking if MCA component btl:usnic can compile
</span><br>
<span class="quotelev1">&gt;     configure:101255: result: no
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Which is correct - the file is not there. I have downloaded fresh
</span><br>
<span class="quotelev1">&gt;     libfabric-1.1.0.tar.bz2 and it does not have this file. Probably
</span><br>
<span class="quotelev1">&gt;     OpenMPI needs some updates?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I am also wondering what is the state of libfabric support in
</span><br>
<span class="quotelev1">&gt;     OpenMPI nowadays. I have seen recent (March) presentation about
</span><br>
<span class="quotelev1">&gt;     it, so it seems to be an actively developed feature. Is this
</span><br>
<span class="quotelev1">&gt;     correct? It seemed from the presentation that there are benefits
</span><br>
<span class="quotelev1">&gt;     to this approach, but is it mature enough in OpenMPI, or it will
</span><br>
<span class="quotelev1">&gt;     yet take some time?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Marcin
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
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/users/2015/09/27728.php">http://www.open-mpi.org/community/lists/users/2015/09/27728.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/09/27733.php">http://www.open-mpi.org/community/lists/users/2015/09/27733.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27743/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27744.php">Grigory Shamov: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<li><strong>Previous message:</strong> <a href="27742.php">Gilles Gouaillardet: "Re: [OMPI users] send_request error with allocate"</a>
<li><strong>In reply to:</strong> <a href="27733.php">Howard Pritchard: "Re: [OMPI users] libfabric/usnic does not compile in 2.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27750.php">Howard Pritchard: "Re: [OMPI users] libfabric/usnic does not compile in 2.x"</a>
<li><strong>Reply:</strong> <a href="27750.php">Howard Pritchard: "Re: [OMPI users] libfabric/usnic does not compile in 2.x"</a>
<li><strong>Reply:</strong> <a href="27754.php">Jeff Squyres (jsquyres): "Re: [OMPI users] libfabric/usnic does not compile in 2.x"</a>
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
