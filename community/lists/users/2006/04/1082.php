<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Apr 16 16:47:53 2006" -->
<!-- isoreceived="20060416204753" -->
<!-- sent="Sun, 16 Apr 2006 13:47:45 -0700" -->
<!-- isosent="20060416204745" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI Jobs Hang on OS X XServe Cluster" -->
<!-- id="A622A8EA-528C-4AD8-8AFD-19973CA31976_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="8F9FCF3A-D54D-49AD-9FA7-0A2FA0DFDEB8_at_Colorado.EDU" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-16 16:47:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1083.php">Lee D. Peterson: "Re: [OMPI users] MPI Jobs Hang on OS X XServe Cluster"</a>
<li><strong>Previous message:</strong> <a href="1081.php">Lee D. Peterson: "Re: [OMPI users] MPI Jobs Hang on OS X XServe Cluster"</a>
<li><strong>In reply to:</strong> <a href="1081.php">Lee D. Peterson: "Re: [OMPI users] MPI Jobs Hang on OS X XServe Cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1083.php">Lee D. Peterson: "Re: [OMPI users] MPI Jobs Hang on OS X XServe Cluster"</a>
<li><strong>Reply:</strong> <a href="1083.php">Lee D. Peterson: "Re: [OMPI users] MPI Jobs Hang on OS X XServe Cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 16, 2006, at 1:29 PM, Lee D. Peterson wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for your help. The hanging problem came back again a day ago.
</span><br>
<span class="quotelev1">&gt; However, I can now run only if I use either &quot;-mca btl_tcp_if_include
</span><br>
<span class="quotelev1">&gt; en0&quot; or &quot;-mca btl_tcp_if_include en1&quot;. Using btl_tcp_if_exclude on
</span><br>
<span class="quotelev1">&gt; either en0 or en1 doesn't work.
</span><br>
<p>That's very strange.  What happens if you run with &quot;-mca  
<br>
btl_tcp_if_include en0,en1&quot;, which will use both devices.  The fact  
<br>
that the exclude option doesn't work makes me wonder if there isn't  
<br>
another device that appears active somewhere in the cluster.  The  
<br>
most likely suspect on an OS X cluster is a firewire device that  
<br>
somehow has sprouted an address and gotten marked as active.  You  
<br>
might want to run &quot;ifconfig -a&quot; on all your nodes and make sure the  
<br>
output is mostly the same.
<br>
<p><span class="quotelev1">&gt; Regarding the TCP performance, I ran the HPL benchmark again and see
</span><br>
<span class="quotelev1">&gt; typically 85% to 90% of the LAM-MPI speed, provided the problem size
</span><br>
<span class="quotelev1">&gt; isn't too small.
</span><br>
<p>That would make sense - LAM/MPI can exhibit much better latency in  
<br>
very specific situations than Open MPI (on TCP - on other  
<br>
interconnects, Open MPI is much faster).  We're working on optimizing  
<br>
our TCP stack, but up until now, the high-speed interconnects have  
<br>
been the major concern.
<br>
<p><p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1083.php">Lee D. Peterson: "Re: [OMPI users] MPI Jobs Hang on OS X XServe Cluster"</a>
<li><strong>Previous message:</strong> <a href="1081.php">Lee D. Peterson: "Re: [OMPI users] MPI Jobs Hang on OS X XServe Cluster"</a>
<li><strong>In reply to:</strong> <a href="1081.php">Lee D. Peterson: "Re: [OMPI users] MPI Jobs Hang on OS X XServe Cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1083.php">Lee D. Peterson: "Re: [OMPI users] MPI Jobs Hang on OS X XServe Cluster"</a>
<li><strong>Reply:</strong> <a href="1083.php">Lee D. Peterson: "Re: [OMPI users] MPI Jobs Hang on OS X XServe Cluster"</a>
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
