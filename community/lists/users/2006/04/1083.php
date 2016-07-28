<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Apr 16 17:10:22 2006" -->
<!-- isoreceived="20060416211022" -->
<!-- sent="Sun, 16 Apr 2006 15:10:22 -0600" -->
<!-- isosent="20060416211022" -->
<!-- name="Lee D. Peterson" -->
<!-- email="Lee.Peterson_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI Jobs Hang on OS X XServe Cluster" -->
<!-- id="4CEA1EE0-208E-4443-B959-462C36900378_at_Colorado.EDU" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="A622A8EA-528C-4AD8-8AFD-19973CA31976_at_open-mpi.org" -->
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
<strong>From:</strong> Lee D. Peterson (<em>Lee.Peterson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-16 17:10:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1084.php">Brian Barrett: "Re: [OMPI users] MPI Jobs Hang on OS X XServe Cluster"</a>
<li><strong>Previous message:</strong> <a href="1082.php">Brian Barrett: "Re: [OMPI users] MPI Jobs Hang on OS X XServe Cluster"</a>
<li><strong>In reply to:</strong> <a href="1082.php">Brian Barrett: "Re: [OMPI users] MPI Jobs Hang on OS X XServe Cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1084.php">Brian Barrett: "Re: [OMPI users] MPI Jobs Hang on OS X XServe Cluster"</a>
<li><strong>Reply:</strong> <a href="1084.php">Brian Barrett: "Re: [OMPI users] MPI Jobs Hang on OS X XServe Cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian,
<br>
<p>The firewires are all inactive. The only difference from ipconfig is  
<br>
that the cluster head has a ppp0 defined because of a VPN I'm using.  
<br>
I tried -mac btl_tcp_if_exclude ppp0, but that didn't work.
<br>
<p>So I logged off the VPN, and now ifconfig -a on the cluster head does  
<br>
not show the ppp0. However, everything is now fixed: I can use  
<br>
mpiexec without the MCA declaration.
<br>
<p>Lee
<br>
<p>On Apr 16, 2006, at 2:47 PM, Brian Barrett wrote:
<br>
<p><span class="quotelev1">&gt; That's very strange.  What happens if you run with &quot;-mca
</span><br>
<span class="quotelev1">&gt; btl_tcp_if_include en0,en1&quot;, which will use both devices.  The fact
</span><br>
<span class="quotelev1">&gt; that the exclude option doesn't work makes me wonder if there isn't
</span><br>
<span class="quotelev1">&gt; another device that appears active somewhere in the cluster.  The
</span><br>
<span class="quotelev1">&gt; most likely suspect on an OS X cluster is a firewire device that
</span><br>
<span class="quotelev1">&gt; somehow has sprouted an address and gotten marked as active.  You
</span><br>
<span class="quotelev1">&gt; might want to run &quot;ifconfig -a&quot; on all your nodes and make sure the
</span><br>
<span class="quotelev1">&gt; output is mostly the same.
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1083/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1084.php">Brian Barrett: "Re: [OMPI users] MPI Jobs Hang on OS X XServe Cluster"</a>
<li><strong>Previous message:</strong> <a href="1082.php">Brian Barrett: "Re: [OMPI users] MPI Jobs Hang on OS X XServe Cluster"</a>
<li><strong>In reply to:</strong> <a href="1082.php">Brian Barrett: "Re: [OMPI users] MPI Jobs Hang on OS X XServe Cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1084.php">Brian Barrett: "Re: [OMPI users] MPI Jobs Hang on OS X XServe Cluster"</a>
<li><strong>Reply:</strong> <a href="1084.php">Brian Barrett: "Re: [OMPI users] MPI Jobs Hang on OS X XServe Cluster"</a>
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
