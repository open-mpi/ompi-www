<?
$subject_val = "Re: [OMPI users] Whether to use the IB BTL or not";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  5 12:19:58 2015" -->
<!-- isoreceived="20150105171958" -->
<!-- sent="Mon, 5 Jan 2015 17:19:57 +0000" -->
<!-- isosent="20150105171957" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Whether to use the IB BTL or not" -->
<!-- id="886215D0-FBD7-455F-9129-F0F040E96ED3_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAF1Cqj5XKHkiQiOKG9qEBV1DkF0psqX-bndXzLpt4rY2DBmmTA_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-05 12:19:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26107.php">Waleed Lotfy: "Re: [OMPI users] Icreasing OFED registerable memory"</a>
<li><strong>Previous message:</strong> <a href="26105.php">Diego Avesani: "Re: [OMPI users] OMPI users] OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/12/26066.php">Howard Pritchard: "Re: [OMPI users] Whether to use the IB BTL or not"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In addition to what Howard said, there's actually two other metrics that are used, as well.  Each BTL exports a priority and an exclusivity value.
<br>
<p>IIRC (it's been a while since I've looked at this code), the PML gathers up all BTL modules that claim that they can communicate between a pair of peers, and uses all the modules that share the same, highest exclusivity rating.
<br>
<p>TCP has a lower exclusivity rating than OS-bypass BTLs (such as usnic and openib).  Hence, even if TCP is available between a pair of peers, OS-bypass transports will be preferred over TCP.
<br>
<p><p><p>On Dec 23, 2014, at 4:04 PM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; HI Gary,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The decision occurs within the MPI processes themselves (during the call to MPI_Init) - so
</span><br>
<span class="quotelev1">&gt; after the orte daemons have started on the nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The BTL's report their &quot;latency&quot; and &quot;bandwidth&quot; - up the stack to the PML/BML layer which
</span><br>
<span class="quotelev1">&gt; then decides based on these metrics which BTL to use to send/recv messages between
</span><br>
<span class="quotelev1">&gt; any given pair of MPI ranks. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hope this helps,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Howard
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2014-12-23 13:29 GMT-07:00 Gary Jackson &lt;garyj_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not having any trouble getting it to start, and it's definitely using the openib btl. I was just wondering how it decided whether the openib btl was appropriate before going down the btl list to tcp when all mpirun gets is a hostname and no other information about connectivity on the remote end. For instance, is this determined before or after orted runs on the remote end?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 12/23/14, 2:18 PM, Howard Pritchard wrote:
</span><br>
<span class="quotelev1">&gt; Hello Gary,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It depends on how the Open MPI was built, and on mca parameters passed
</span><br>
<span class="quotelev1">&gt; to the job either via settings in an mca params conf
</span><br>
<span class="quotelev1">&gt; file or the mpirun command line or env. variables.  If you have mxm
</span><br>
<span class="quotelev1">&gt; (MLNX) or psm (qlogic/intel) installed on the system
</span><br>
<span class="quotelev1">&gt; where your open mpi was built, you may actually be using one of those
</span><br>
<span class="quotelev1">&gt; via the MTL path.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Try
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 -H hosta,hostb -mca btl self,vader,openib ./your_favorite_test
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That should force open mpi to try using openib between the pair of
</span><br>
<span class="quotelev1">&gt; hosts.  Note you don't need &quot;vader&quot; on the command line
</span><br>
<span class="quotelev1">&gt; if you are running only one mpi rank/node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Howard
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2014-12-23 11:48 GMT-07:00 Gary Jackson &lt;garyj_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:garyj_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     How does OpenMPI decide whether to use the IB BTL between a given
</span><br>
<span class="quotelev1">&gt;     pair of hosts, assuming there is an IB interface available?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     --
</span><br>
<span class="quotelev1">&gt;     Gary
</span><br>
<span class="quotelev1">&gt;     _________________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="http://www.open-mpi.org/__mailman/listinfo.cgi/users">http://www.open-mpi.org/__mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;     &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt;     Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/__community/lists/users/2014/12/__26063.php">http://www.open-mpi.org/__community/lists/users/2014/12/__26063.php</a>
</span><br>
<span class="quotelev1">&gt;     &lt;<a href="http://www.open-mpi.org/community/lists/users/2014/12/26063.php">http://www.open-mpi.org/community/lists/users/2014/12/26063.php</a>&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/26064.php">http://www.open-mpi.org/community/lists/users/2014/12/26064.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/26065.php">http://www.open-mpi.org/community/lists/users/2014/12/26065.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/26066.php">http://www.open-mpi.org/community/lists/users/2014/12/26066.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26107.php">Waleed Lotfy: "Re: [OMPI users] Icreasing OFED registerable memory"</a>
<li><strong>Previous message:</strong> <a href="26105.php">Diego Avesani: "Re: [OMPI users] OMPI users] OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/12/26066.php">Howard Pritchard: "Re: [OMPI users] Whether to use the IB BTL or not"</a>
<!-- nextthread="start" -->
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
