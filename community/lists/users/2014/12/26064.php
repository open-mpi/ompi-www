<?
$subject_val = "Re: [OMPI users] Whether to use the IB BTL or not";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 23 14:18:32 2014" -->
<!-- isoreceived="20141223191832" -->
<!-- sent="Tue, 23 Dec 2014 12:18:31 -0700" -->
<!-- isosent="20141223191831" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Whether to use the IB BTL or not" -->
<!-- id="CAF1Cqj73w9yCuLapGdcqFDqc3aFxuh3CLx7DN8SZyh7PVxaNfQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="5499B8FC.4090709_at_cs.umd.edu" -->
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
<strong>Date:</strong> 2014-12-23 14:18:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26065.php">Gary Jackson: "Re: [OMPI users] Whether to use the IB BTL or not"</a>
<li><strong>Previous message:</strong> <a href="26063.php">Gary Jackson: "[OMPI users] Whether to use the IB BTL or not"</a>
<li><strong>In reply to:</strong> <a href="26063.php">Gary Jackson: "[OMPI users] Whether to use the IB BTL or not"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26065.php">Gary Jackson: "Re: [OMPI users] Whether to use the IB BTL or not"</a>
<li><strong>Reply:</strong> <a href="26065.php">Gary Jackson: "Re: [OMPI users] Whether to use the IB BTL or not"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Gary,
<br>
<p>It depends on how the Open MPI was built, and on mca parameters passed to
<br>
the job either via settings in an mca params conf
<br>
file or the mpirun command line or env. variables.  If you have mxm (MLNX)
<br>
or psm (qlogic/intel) installed on the system
<br>
where your open mpi was built, you may actually be using one of those via
<br>
the MTL path.
<br>
<p>Try
<br>
<p>mpirun -np 2 -H hosta,hostb -mca btl self,vader,openib ./your_favorite_test
<br>
<p>That should force open mpi to try using openib between the pair of hosts.
<br>
Note you don't need &quot;vader&quot; on the command line
<br>
if you are running only one mpi rank/node.
<br>
<p>Howard
<br>
<p><p><p><p>2014-12-23 11:48 GMT-07:00 Gary Jackson &lt;garyj_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How does OpenMPI decide whether to use the IB BTL between a given pair of
</span><br>
<span class="quotelev1">&gt; hosts, assuming there is an IB interface available?
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
<span class="quotelev1">&gt; 26063.php
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26064/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26065.php">Gary Jackson: "Re: [OMPI users] Whether to use the IB BTL or not"</a>
<li><strong>Previous message:</strong> <a href="26063.php">Gary Jackson: "[OMPI users] Whether to use the IB BTL or not"</a>
<li><strong>In reply to:</strong> <a href="26063.php">Gary Jackson: "[OMPI users] Whether to use the IB BTL or not"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26065.php">Gary Jackson: "Re: [OMPI users] Whether to use the IB BTL or not"</a>
<li><strong>Reply:</strong> <a href="26065.php">Gary Jackson: "Re: [OMPI users] Whether to use the IB BTL or not"</a>
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
