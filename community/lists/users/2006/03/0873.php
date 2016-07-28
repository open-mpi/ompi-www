<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar 16 12:56:15 2006" -->
<!-- isoreceived="20060316175615" -->
<!-- sent="Thu, 16 Mar 2006 10:56:11 -0700" -->
<!-- isosent="20060316175611" -->
<!-- name="Galen M. Shipman" -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Performance of ping-pong using OpenMPI over Infiniband" -->
<!-- id="7FA5E5D4-F07A-4CB2-B30E-BFFED452718E_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4419A1AD.9040805_at_fujitsu.fr" -->
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
<strong>From:</strong> Galen M. Shipman (<em>gshipman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-16 12:56:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0874.php">George Bosilca: "Re: [OMPI users] Performance of ping-pong using OpenMPI over Infiniband"</a>
<li><strong>Previous message:</strong> <a href="0872.php">Jean Latour: "[OMPI users] Performance of ping-pong using OpenMPI over Infiniband"</a>
<li><strong>In reply to:</strong> <a href="0872.php">Jean Latour: "[OMPI users] Performance of ping-pong using OpenMPI over Infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0874.php">George Bosilca: "Re: [OMPI users] Performance of ping-pong using OpenMPI over Infiniband"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jean,
<br>
<p>Take a look here: <a href="http://www.open-mpi.org/faq/?category=infiniband#ib">http://www.open-mpi.org/faq/?category=infiniband#ib</a>- 
<br>
leave-pinned
<br>
<p>This should improve performance for micro-benchmarks and some  
<br>
applications.
<br>
<p>Please let mw know if this doesn't solve the issue.
<br>
<p>Thanks,
<br>
Galen
<br>
On Mar 16, 2006, at 10:34 AM, Jean Latour wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Testing performance of OpenMPI over Infiniband I have the following  
</span><br>
<span class="quotelev1">&gt; result :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) Hardware is  : SilversStorm interface
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) Openmpi version is : (from ompi_info)
</span><br>
<span class="quotelev1">&gt;               Open MPI: 1.0.2a9r9159
</span><br>
<span class="quotelev1">&gt;   Open MPI SVN revision: r9159
</span><br>
<span class="quotelev1">&gt;                Open RTE: 1.0.2a9r9159
</span><br>
<span class="quotelev1">&gt;   Open RTE SVN revision: r9159
</span><br>
<span class="quotelev1">&gt;                    OPAL: 1.0.2a9r9159
</span><br>
<span class="quotelev1">&gt;       OPAL SVN revision: r9159
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3) Cluster with Bi-processors Opteron 248   2.2 GHz
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Configure has been run with option --with-mvapi=path-to-mvapi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 4) a C coded pinpong gives the following values :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; LOOPS: 1000 BYTES: 4096 SECONDS: 0.085557  MBytes/sec: 95.749051
</span><br>
<span class="quotelev1">&gt; LOOPS: 1000 BYTES: 8192 SECONDS: 0.050657  MBytes/sec: 323.429912
</span><br>
<span class="quotelev1">&gt; LOOPS: 1000 BYTES: 16384 SECONDS: 0.084038  MBytes/sec: 389.918757
</span><br>
<span class="quotelev1">&gt; LOOPS: 1000 BYTES: 32768 SECONDS: 0.163161  MBytes/sec: 401.665104
</span><br>
<span class="quotelev1">&gt; LOOPS: 1000 BYTES: 65536 SECONDS: 0.306694  MBytes/sec: 427.370561
</span><br>
<span class="quotelev1">&gt; LOOPS: 1000 BYTES: 131072 SECONDS: 0.529589  MBytes/sec: 494.995011
</span><br>
<span class="quotelev1">&gt; LOOPS: 1000 BYTES: 262144 SECONDS: 0.952616  MBytes/sec: 550.366583
</span><br>
<span class="quotelev1">&gt; LOOPS: 1000 BYTES: 524288 SECONDS: 1.927987  MBytes/sec: 543.870859
</span><br>
<span class="quotelev1">&gt; LOOPS: 1000 BYTES: 1048576 SECONDS: 3.673732  MBytes/sec: 570.850562
</span><br>
<span class="quotelev1">&gt; LOOPS: 1000 BYTES: 2097152 SECONDS: 9.993185  MBytes/sec: 419.716435
</span><br>
<span class="quotelev1">&gt; LOOPS: 1000 BYTES: 4194304 SECONDS: 18.211958  MBytes/sec: 460.609893
</span><br>
<span class="quotelev1">&gt; LOOPS: 1000 BYTES: 8388608 SECONDS: 35.421490  MBytes/sec: 473.645124
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My questions are :
</span><br>
<span class="quotelev1">&gt; a)  Is OpenMPI doing in this case TCP/IP over IB ? (I guess so)
</span><br>
<span class="quotelev1">&gt; b) Is it possible to improve significantly these values by changing  
</span><br>
<span class="quotelev1">&gt; the defaults ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    I have used several mca btl parameters but without improving the  
</span><br>
<span class="quotelev1">&gt; maximum bandwith.
</span><br>
<span class="quotelev1">&gt;   For example :  --mca btl mvapi   --mca btl_mvapi_max_send_size  
</span><br>
<span class="quotelev1">&gt; 8388608
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; c) Is it possible that other IB hardware implementations  have better
</span><br>
<span class="quotelev1">&gt;    performances with OpenMPI ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; d) Is it possible to use specific IB drivers  for optimal  
</span><br>
<span class="quotelev1">&gt; performance  ? (should reach almost 800 MB/sec)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you very much for your help
</span><br>
<span class="quotelev1">&gt; Best Regards,
</span><br>
<span class="quotelev1">&gt; Jean Latour
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;latour.vcf&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0874.php">George Bosilca: "Re: [OMPI users] Performance of ping-pong using OpenMPI over Infiniband"</a>
<li><strong>Previous message:</strong> <a href="0872.php">Jean Latour: "[OMPI users] Performance of ping-pong using OpenMPI over Infiniband"</a>
<li><strong>In reply to:</strong> <a href="0872.php">Jean Latour: "[OMPI users] Performance of ping-pong using OpenMPI over Infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0874.php">George Bosilca: "Re: [OMPI users] Performance of ping-pong using OpenMPI over Infiniband"</a>
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
