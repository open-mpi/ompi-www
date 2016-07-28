<?
$subject_val = "Re: [OMPI users] libfabric/usnic does not compile in 2.x";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 30 10:26:59 2015" -->
<!-- isoreceived="20150930142659" -->
<!-- sent="Wed, 30 Sep 2015 08:26:58 -0600" -->
<!-- isosent="20150930142658" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] libfabric/usnic does not compile in 2.x" -->
<!-- id="CAF1Cqj6g5d-rN6p=jKWw3ABkz6dEEYDC_JnsEsp=TmK9GphBhQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="560BC8FA.5040709_at_gmail.com" -->
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
<strong>Date:</strong> 2015-09-30 10:26:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27734.php">Grigory Shamov: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<li><strong>Previous message:</strong> <a href="27732.php">Diego Avesani: "Re: [OMPI users] send_request error with allocate"</a>
<li><strong>In reply to:</strong> <a href="27728.php">Marcin Krotkiewski: "[OMPI users] libfabric/usnic does not compile in 2.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27743.php">marcin.krotkiewski: "Re: [OMPI users] libfabric/usnic does not compile in 2.x"</a>
<li><strong>Reply:</strong> <a href="27743.php">marcin.krotkiewski: "Re: [OMPI users] libfabric/usnic does not compile in 2.x"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Marcin
<br>
<p>What configure options are you using besides with-libfabric?
<br>
<p>Could you post your config.log file tp the list?
<br>
<p>Looks like you only install fi_ext_usnic.h if you could build the usnic
<br>
libfab provider.  When you configured libfabric what providers were listed
<br>
at the end of configure run? Maybe attach config.log from the libfabric
<br>
build ?
<br>
<p>If your cluster has cisco usnics you should probably be using
<br>
libfabric/cisco openmpi.  If you are using intel omnipath you may want to
<br>
try the ofi mtl.  Its not selected by default however.
<br>
<p>Howard
<br>
<p>----------
<br>
<p>sent from my smart phonr so no good type.
<br>
<p>Howard
<br>
On Sep 30, 2015 5:35 AM, &quot;Marcin Krotkiewski&quot; &lt;marcin.krotkiewski_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to compile the 2.x branch with libfabric support, but get this
</span><br>
<span class="quotelev1">&gt; error during configure:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; configure:100708: checking rdma/fi_ext_usnic.h presence
</span><br>
<span class="quotelev1">&gt; configure:100708: gcc -E
</span><br>
<span class="quotelev1">&gt; -I/cluster/software/VERSIONS/openmpi.gnu.2.x/include
</span><br>
<span class="quotelev1">&gt; -I/usit/abel/u1/marcink/software/ompi-release-2.x/opal/mca/hwloc/hwloc1110/hwloc/include
</span><br>
<span class="quotelev1">&gt; conftest.c
</span><br>
<span class="quotelev1">&gt; conftest.c:688:31: fatal error: rdma/fi_ext_usnic.h: No such file or
</span><br>
<span class="quotelev1">&gt; directory
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt; configure:100708: checking for rdma/fi_ext_usnic.h
</span><br>
<span class="quotelev1">&gt; configure:100708: result: no
</span><br>
<span class="quotelev1">&gt; configure:101253: checking if MCA component btl:usnic can compile
</span><br>
<span class="quotelev1">&gt; configure:101255: result: no
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Which is correct - the file is not there. I have downloaded fresh
</span><br>
<span class="quotelev1">&gt; libfabric-1.1.0.tar.bz2 and it does not have this file. Probably OpenMPI
</span><br>
<span class="quotelev1">&gt; needs some updates?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am also wondering what is the state of libfabric support in OpenMPI
</span><br>
<span class="quotelev1">&gt; nowadays. I have seen recent (March) presentation about it, so it seems to
</span><br>
<span class="quotelev1">&gt; be an actively developed feature. Is this correct? It seemed from the
</span><br>
<span class="quotelev1">&gt; presentation that there are benefits to this approach, but is it mature
</span><br>
<span class="quotelev1">&gt; enough in OpenMPI, or it will yet take some time?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Marcin
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/09/27728.php">http://www.open-mpi.org/community/lists/users/2015/09/27728.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27733/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27734.php">Grigory Shamov: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<li><strong>Previous message:</strong> <a href="27732.php">Diego Avesani: "Re: [OMPI users] send_request error with allocate"</a>
<li><strong>In reply to:</strong> <a href="27728.php">Marcin Krotkiewski: "[OMPI users] libfabric/usnic does not compile in 2.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27743.php">marcin.krotkiewski: "Re: [OMPI users] libfabric/usnic does not compile in 2.x"</a>
<li><strong>Reply:</strong> <a href="27743.php">marcin.krotkiewski: "Re: [OMPI users] libfabric/usnic does not compile in 2.x"</a>
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
