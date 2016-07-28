<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep 13 13:06:54 2007" -->
<!-- isoreceived="20070913170654" -->
<!-- sent="Thu, 13 Sep 2007 13:06:34 -0400" -->
<!-- isosent="20070913170634" -->
<!-- name="Pak Lui" -->
<!-- email="Pak.Lui_at_[hidden]" -->
<!-- subject="Re: [OMPI users] connect failed with errno=111" -->
<!-- id="46E96E1A.4070608_at_Sun.COM" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="36AA0B11-AA1E-4E8C-BEEF-7E103FD0E787_at_nrlssc.navy.mil" -->
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
<strong>From:</strong> Pak Lui (<em>Pak.Lui_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-13 13:06:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3999.php">Tim Campbell: "Re: [OMPI users] connect failed with errno=111"</a>
<li><strong>Previous message:</strong> <a href="3997.php">Tim Campbell: "[OMPI users] connect failed with errno=111"</a>
<li><strong>In reply to:</strong> <a href="3997.php">Tim Campbell: "[OMPI users] connect failed with errno=111"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3999.php">Tim Campbell: "Re: [OMPI users] connect failed with errno=111"</a>
<li><strong>Reply:</strong> <a href="3999.php">Tim Campbell: "Re: [OMPI users] connect failed with errno=111"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Tim,
<br>
<p>You could try setting -mca pls_gridengine_verbose 1 to show whether SGE 
<br>
is able to start the ORTE daemons on the remote nodes successfully.
<br>
<p>It seems you are having the problem previously asked by another user, 
<br>
Perhaps you may want to follow this thread and check your ifconfig 
<br>
settings to see if anything suspicious?
<br>
<a href="http://www.open-mpi.org/community/lists/users/2007/02/2669.php">http://www.open-mpi.org/community/lists/users/2007/02/2669.php</a>
<br>
<p>My 2 cents...
<br>
<p>Tim Campbell wrote:
<br>
<span class="quotelev1">&gt; Greetings,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am using OpenMPI v1.2.3 via SGE on a network of amd64  
</span><br>
<span class="quotelev1">&gt; workstations.  When mpirun tries to start the processes on certain  
</span><br>
<span class="quotelev1">&gt; nodes I get the following error output.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [sr70][0,1,2][btl_tcp_endpoint.c: 
</span><br>
<span class="quotelev1">&gt; 572:mca_btl_tcp_endpoint_complete_connect] connect() failed with  
</span><br>
<span class="quotelev1">&gt; errno=111
</span><br>
<span class="quotelev1">&gt; [sr71][0,1,3][btl_tcp_endpoint.c: 
</span><br>
<span class="quotelev1">&gt; 572:mca_btl_tcp_endpoint_complete_connect] connect() failed with  
</span><br>
<span class="quotelev1">&gt; errno=111
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Using perl -e 'die$!=111' I see that the error message is &quot;Connection  
</span><br>
<span class="quotelev1">&gt; refused&quot;.  I am able to connect to both nodes in question via ssh and/ 
</span><br>
<span class="quotelev1">&gt; or rsh.  I changed btl_base_debug to 2, but that did not provide  
</span><br>
<span class="quotelev1">&gt; additional information.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What are some possible issues that might be causing this?  What can I  
</span><br>
<span class="quotelev1">&gt; do to get more information?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; ~Tim
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
- Pak Lui
pak.lui_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3999.php">Tim Campbell: "Re: [OMPI users] connect failed with errno=111"</a>
<li><strong>Previous message:</strong> <a href="3997.php">Tim Campbell: "[OMPI users] connect failed with errno=111"</a>
<li><strong>In reply to:</strong> <a href="3997.php">Tim Campbell: "[OMPI users] connect failed with errno=111"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3999.php">Tim Campbell: "Re: [OMPI users] connect failed with errno=111"</a>
<li><strong>Reply:</strong> <a href="3999.php">Tim Campbell: "Re: [OMPI users] connect failed with errno=111"</a>
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
