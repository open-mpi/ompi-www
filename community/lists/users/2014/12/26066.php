<?
$subject_val = "Re: [OMPI users] Whether to use the IB BTL or not";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 23 16:04:32 2014" -->
<!-- isoreceived="20141223210432" -->
<!-- sent="Tue, 23 Dec 2014 14:04:31 -0700" -->
<!-- isosent="20141223210431" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Whether to use the IB BTL or not" -->
<!-- id="CAF1Cqj5XKHkiQiOKG9qEBV1DkF0psqX-bndXzLpt4rY2DBmmTA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="5499D0B6.5000900_at_cs.umd.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Whether to use the IB BTL or not<br>
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-23 16:04:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26067.php">Kawashima, Takahiro: "Re: [OMPI users] processes hang with openmpi-dev-602-g82c02b4"</a>
<li><strong>Previous message:</strong> <a href="26065.php">Gary Jackson: "Re: [OMPI users] Whether to use the IB BTL or not"</a>
<li><strong>In reply to:</strong> <a href="26065.php">Gary Jackson: "Re: [OMPI users] Whether to use the IB BTL or not"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/01/26106.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Whether to use the IB BTL or not"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/01/26106.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Whether to use the IB BTL or not"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
HI Gary,
<br>
<p>The decision occurs within the MPI processes themselves (during the call to
<br>
MPI_Init) - so
<br>
after the orte daemons have started on the nodes.
<br>
<p>The BTL's report their &quot;latency&quot; and &quot;bandwidth&quot; - up the stack to the
<br>
PML/BML layer which
<br>
then decides based on these metrics which BTL to use to send/recv messages
<br>
between
<br>
any given pair of MPI ranks.
<br>
<p>Hope this helps,
<br>
<p>Howard
<br>
<p><p><p><p>2014-12-23 13:29 GMT-07:00 Gary Jackson &lt;garyj_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not having any trouble getting it to start, and it's definitely using
</span><br>
<span class="quotelev1">&gt; the openib btl. I was just wondering how it decided whether the openib btl
</span><br>
<span class="quotelev1">&gt; was appropriate before going down the btl list to tcp when all mpirun gets
</span><br>
<span class="quotelev1">&gt; is a hostname and no other information about connectivity on the remote
</span><br>
<span class="quotelev1">&gt; end. For instance, is this determined before or after orted runs on the
</span><br>
<span class="quotelev1">&gt; remote end?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 12/23/14, 2:18 PM, Howard Pritchard wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello Gary,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It depends on how the Open MPI was built, and on mca parameters passed
</span><br>
<span class="quotelev2">&gt;&gt; to the job either via settings in an mca params conf
</span><br>
<span class="quotelev2">&gt;&gt; file or the mpirun command line or env. variables.  If you have mxm
</span><br>
<span class="quotelev2">&gt;&gt; (MLNX) or psm (qlogic/intel) installed on the system
</span><br>
<span class="quotelev2">&gt;&gt; where your open mpi was built, you may actually be using one of those
</span><br>
<span class="quotelev2">&gt;&gt; via the MTL path.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Try
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 2 -H hosta,hostb -mca btl self,vader,openib
</span><br>
<span class="quotelev2">&gt;&gt; ./your_favorite_test
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That should force open mpi to try using openib between the pair of
</span><br>
<span class="quotelev2">&gt;&gt; hosts.  Note you don't need &quot;vader&quot; on the command line
</span><br>
<span class="quotelev2">&gt;&gt; if you are running only one mpi rank/node.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Howard
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2014-12-23 11:48 GMT-07:00 Gary Jackson &lt;garyj_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:garyj_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     How does OpenMPI decide whether to use the IB BTL between a given
</span><br>
<span class="quotelev2">&gt;&gt;     pair of hosts, assuming there is an IB interface available?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     --
</span><br>
<span class="quotelev2">&gt;&gt;     Gary
</span><br>
<span class="quotelev2">&gt;&gt;     _________________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;     users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Subscription: <a href="http://www.open-mpi.org/__mailman/listinfo.cgi/users">http://www.open-mpi.org/__mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/__community/lists/users/2014/12/__26063.php">http://www.open-mpi.org/__community/lists/users/2014/12/__26063.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;<a href="http://www.open-mpi.org/community/lists/users/2014/12/26063.php">http://www.open-mpi.org/community/lists/users/2014/12/26063.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/">http://www.open-mpi.org/community/lists/users/2014/12/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 26064.php
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Gary
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/">http://www.open-mpi.org/community/lists/users/2014/12/</a>
</span><br>
<span class="quotelev1">&gt; 26065.php
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26066/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26067.php">Kawashima, Takahiro: "Re: [OMPI users] processes hang with openmpi-dev-602-g82c02b4"</a>
<li><strong>Previous message:</strong> <a href="26065.php">Gary Jackson: "Re: [OMPI users] Whether to use the IB BTL or not"</a>
<li><strong>In reply to:</strong> <a href="26065.php">Gary Jackson: "Re: [OMPI users] Whether to use the IB BTL or not"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/01/26106.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Whether to use the IB BTL or not"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/01/26106.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Whether to use the IB BTL or not"</a>
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
