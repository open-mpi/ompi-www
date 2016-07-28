<?
$subject_val = "Re: [OMPI users] Whether to use the IB BTL or not";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 23 15:29:44 2014" -->
<!-- isoreceived="20141223202944" -->
<!-- sent="Tue, 23 Dec 2014 15:29:42 -0500" -->
<!-- isosent="20141223202942" -->
<!-- name="Gary Jackson" -->
<!-- email="garyj_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Whether to use the IB BTL or not" -->
<!-- id="5499D0B6.5000900_at_cs.umd.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAF1Cqj73w9yCuLapGdcqFDqc3aFxuh3CLx7DN8SZyh7PVxaNfQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Gary Jackson (<em>garyj_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-23 15:29:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26066.php">Howard Pritchard: "Re: [OMPI users] Whether to use the IB BTL or not"</a>
<li><strong>Previous message:</strong> <a href="26064.php">Howard Pritchard: "Re: [OMPI users] Whether to use the IB BTL or not"</a>
<li><strong>In reply to:</strong> <a href="26064.php">Howard Pritchard: "Re: [OMPI users] Whether to use the IB BTL or not"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26066.php">Howard Pritchard: "Re: [OMPI users] Whether to use the IB BTL or not"</a>
<li><strong>Reply:</strong> <a href="26066.php">Howard Pritchard: "Re: [OMPI users] Whether to use the IB BTL or not"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm not having any trouble getting it to start, and it's definitely 
<br>
using the openib btl. I was just wondering how it decided whether the 
<br>
openib btl was appropriate before going down the btl list to tcp when 
<br>
all mpirun gets is a hostname and no other information about 
<br>
connectivity on the remote end. For instance, is this determined before 
<br>
or after orted runs on the remote end?
<br>
<p>On 12/23/14, 2:18 PM, Howard Pritchard wrote:
<br>
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
<p><p><pre>
-- 
Gary
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26066.php">Howard Pritchard: "Re: [OMPI users] Whether to use the IB BTL or not"</a>
<li><strong>Previous message:</strong> <a href="26064.php">Howard Pritchard: "Re: [OMPI users] Whether to use the IB BTL or not"</a>
<li><strong>In reply to:</strong> <a href="26064.php">Howard Pritchard: "Re: [OMPI users] Whether to use the IB BTL or not"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26066.php">Howard Pritchard: "Re: [OMPI users] Whether to use the IB BTL or not"</a>
<li><strong>Reply:</strong> <a href="26066.php">Howard Pritchard: "Re: [OMPI users] Whether to use the IB BTL or not"</a>
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
