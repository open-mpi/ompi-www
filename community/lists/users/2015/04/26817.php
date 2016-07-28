<?
$subject_val = "Re: [OMPI users] new hwloc error";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 29 17:59:36 2015" -->
<!-- isoreceived="20150429215936" -->
<!-- sent="Wed, 29 Apr 2015 14:59:28 -0700" -->
<!-- isosent="20150429215928" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] new hwloc error" -->
<!-- id="1AD8A047-3E67-479E-AC6F-244E247B9611_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="55414270.9090109_at_inria.fr" -->
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
<strong>Date:</strong> 2015-04-29 17:59:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26818.php">Satish Balay: "[OMPI users] potential bug with MPI_Win_fence() in openmpi-1.8.4"</a>
<li><strong>Previous message:</strong> <a href="26816.php">Brice Goglin: "Re: [OMPI users] new hwloc error"</a>
<li><strong>In reply to:</strong> <a href="26816.php">Brice Goglin: "Re: [OMPI users] new hwloc error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26819.php">Noam Bernstein: "Re: [OMPI users] new hwloc error"</a>
<li><strong>Reply:</strong> <a href="26819.php">Noam Bernstein: "Re: [OMPI users] new hwloc error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Try adding &#151;hetero-nodes to the cmd line and see if that helps resolve the problem. Of course, if all the machines are identical, then it won&#146;t
<br>
<p><p><span class="quotelev1">&gt; On Apr 29, 2015, at 1:43 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 29/04/2015 22:25, Noam Bernstein a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Apr 29, 2015, at 4:09 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Nothing wrong in that XML. I don't see what could be happening besides a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node rebooting with hyper-threading enabled for random reasons.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please run &quot;lstopo foo.xml&quot; again on the node next time you get the OMPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; failure (assuming you get a chance to log on the node before it reboots
</span><br>
<span class="quotelev3">&gt;&gt;&gt; etc).
</span><br>
<span class="quotelev2">&gt;&gt; Thanks.  Do you understand why OpenMPI would even try to bind core #16?  I&#146;m pretty sure it was a 16 task job on a 16 (physical) core machine - shouldn&#146;t it try to bind 0-15 only?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I am reading your first error correctly:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hwloc_set_cpubind returned &quot;Error&quot; for bitmap &quot;0,16&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hwloc gave a &quot;bitmap&quot; containing bits 0 and 16 to OMPI, and OMPI just
</span><br>
<span class="quotelev1">&gt; tried to bind on these processors.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Two possible reasons:
</span><br>
<span class="quotelev1">&gt; * OMPI confused some nodes: one node with more than 16 cores/threads got
</span><br>
<span class="quotelev1">&gt; such a bitmap and OMPI ended up using it for binding or another node
</span><br>
<span class="quotelev1">&gt; * hwloc generated this invalid bitmap
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26816.php">http://www.open-mpi.org/community/lists/users/2015/04/26816.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26818.php">Satish Balay: "[OMPI users] potential bug with MPI_Win_fence() in openmpi-1.8.4"</a>
<li><strong>Previous message:</strong> <a href="26816.php">Brice Goglin: "Re: [OMPI users] new hwloc error"</a>
<li><strong>In reply to:</strong> <a href="26816.php">Brice Goglin: "Re: [OMPI users] new hwloc error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26819.php">Noam Bernstein: "Re: [OMPI users] new hwloc error"</a>
<li><strong>Reply:</strong> <a href="26819.php">Noam Bernstein: "Re: [OMPI users] new hwloc error"</a>
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
