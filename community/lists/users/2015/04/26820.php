<?
$subject_val = "Re: [OMPI users] new hwloc error";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 30 12:03:23 2015" -->
<!-- isoreceived="20150430160323" -->
<!-- sent="Thu, 30 Apr 2015 09:03:19 -0700" -->
<!-- isosent="20150430160319" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] new hwloc error" -->
<!-- id="C1447D0A-C2C4-4DB0-B52A-E49E2BDAD823_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="64CDCD88-1594-4718-8491-355B192B0B5E_at_nrl.navy.mil" -->
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
<strong>Subject:</strong> Re: [OMPI users] new hwloc error<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-30 12:03:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26821.php">Jeff Squyres (jsquyres): "Re: [OMPI users] potential bug with MPI_Win_fence() in openmpi-1.8.4"</a>
<li><strong>Previous message:</strong> <a href="26819.php">Noam Bernstein: "Re: [OMPI users] new hwloc error"</a>
<li><strong>In reply to:</strong> <a href="26819.php">Noam Bernstein: "Re: [OMPI users] new hwloc error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/06/27020.php">Noam Bernstein: "Re: [OMPI users] new hwloc error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The planning is pretty simple: at startup, mpirun launches a daemon on each node. If &#151;hetero-nodes is provided, each daemon returns the topology discovered by hwloc - otherwise, only the first daemon does. Mpirun then assigns procs to each node in a round-robin fashion (assuming you haven&#146;t told it something different).
<br>
<p>Once that is done, mpirun looks at each proc that has been assigned to the node, find the next available core on that node, and computes the cpuset that would bind the proc to it. We then pass the cpuset back to the daemon on that node.
<br>
<p>When the daemon spawns the local child process, it takes the cpuset and asks hwloc to bind the proc to that cpuset.
<br>
<p><p><span class="quotelev1">&gt; On Apr 30, 2015, at 5:23 AM, Noam Bernstein &lt;noam.bernstein_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 29, 2015, at 5:59 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Try adding &#151;hetero-nodes to the cmd line and see if that helps resolve the problem. Of course, if all the machines are identical, then it won&#146;t
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; They are identical, and the problem is new.  That&#146;s what&#146;s most mysterious about it.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can anyone give me an explanation, or point me to documentation, of the process by which the binding is planned and executed?  By the way, these jobs are all running with OMPI_MCA_hwloc_base_binding_policy=core.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 											Noam_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26819.php">http://www.open-mpi.org/community/lists/users/2015/04/26819.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26821.php">Jeff Squyres (jsquyres): "Re: [OMPI users] potential bug with MPI_Win_fence() in openmpi-1.8.4"</a>
<li><strong>Previous message:</strong> <a href="26819.php">Noam Bernstein: "Re: [OMPI users] new hwloc error"</a>
<li><strong>In reply to:</strong> <a href="26819.php">Noam Bernstein: "Re: [OMPI users] new hwloc error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/06/27020.php">Noam Bernstein: "Re: [OMPI users] new hwloc error"</a>
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
