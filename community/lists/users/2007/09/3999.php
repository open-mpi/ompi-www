<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep 13 13:23:23 2007" -->
<!-- isoreceived="20070913172323" -->
<!-- sent="Thu, 13 Sep 2007 12:24:43 -0500" -->
<!-- isosent="20070913172443" -->
<!-- name="Tim Campbell" -->
<!-- email="tim.campbell_at_[hidden]" -->
<!-- subject="Re: [OMPI users] connect failed with errno=111" -->
<!-- id="1F258D8C-C5D2-4C12-8010-05A3E841AAED_at_nrlssc.navy.mil" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="46E96E1A.4070608_at_Sun.COM" -->
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
<strong>From:</strong> Tim Campbell (<em>tim.campbell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-13 13:24:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4000.php">Adrian Knoth: "Re: [OMPI users] connect failed with errno=111"</a>
<li><strong>Previous message:</strong> <a href="3998.php">Pak Lui: "Re: [OMPI users] connect failed with errno=111"</a>
<li><strong>In reply to:</strong> <a href="3998.php">Pak Lui: "Re: [OMPI users] connect failed with errno=111"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4000.php">Adrian Knoth: "Re: [OMPI users] connect failed with errno=111"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks.
<br>
<p>I think I figured out the problem.  I found that in my .ssh/ 
<br>
known_hosts there were several &quot;bad&quot; keys associated with some of the  
<br>
machines in the gridengine pool.  My hypothesis is that when mpirun  
<br>
was establishing the connection topology of the processes there was  
<br>
some process pairs that failed to complete the connection due to the  
<br>
bad ssh keys.  I don't have explicit evidence for this since there  
<br>
was no ssh error output generated.
<br>
<p>I generated new keys for all the amd64 machines in the gridengine  
<br>
pool for which there was an offending key.  Now my job runs with a  
<br>
set of machines that includes ones that had previously failed.  I  
<br>
will assume for now that the problem is fixed.
<br>
<p>~Tim
<br>
<p><p>On Sep 13, 2007, at 12:06 PM, Pak Lui wrote:
<br>
<p><span class="quotelev1">&gt; Hi Tim,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You could try setting -mca pls_gridengine_verbose 1 to show whether  
</span><br>
<span class="quotelev1">&gt; SGE
</span><br>
<span class="quotelev1">&gt; is able to start the ORTE daemons on the remote nodes successfully.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seems you are having the problem previously asked by another user,
</span><br>
<span class="quotelev1">&gt; Perhaps you may want to follow this thread and check your ifconfig
</span><br>
<span class="quotelev1">&gt; settings to see if anything suspicious?
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2007/02/2669.php">http://www.open-mpi.org/community/lists/users/2007/02/2669.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My 2 cents...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tim Campbell wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Greetings,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am using OpenMPI v1.2.3 via SGE on a network of amd64
</span><br>
<span class="quotelev2">&gt;&gt; workstations.  When mpirun tries to start the processes on certain
</span><br>
<span class="quotelev2">&gt;&gt; nodes I get the following error output.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [sr70][0,1,2][btl_tcp_endpoint.c:
</span><br>
<span class="quotelev2">&gt;&gt; 572:mca_btl_tcp_endpoint_complete_connect] connect() failed with
</span><br>
<span class="quotelev2">&gt;&gt; errno=111
</span><br>
<span class="quotelev2">&gt;&gt; [sr71][0,1,3][btl_tcp_endpoint.c:
</span><br>
<span class="quotelev2">&gt;&gt; 572:mca_btl_tcp_endpoint_complete_connect] connect() failed with
</span><br>
<span class="quotelev2">&gt;&gt; errno=111
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Using perl -e 'die$!=111' I see that the error message is &quot;Connection
</span><br>
<span class="quotelev2">&gt;&gt; refused&quot;.  I am able to connect to both nodes in question via ssh  
</span><br>
<span class="quotelev2">&gt;&gt; and/
</span><br>
<span class="quotelev2">&gt;&gt; or rsh.  I changed btl_base_debug to 2, but that did not provide
</span><br>
<span class="quotelev2">&gt;&gt; additional information.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What are some possible issues that might be causing this?  What can I
</span><br>
<span class="quotelev2">&gt;&gt; do to get more information?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; ~Tim
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Pak Lui
</span><br>
<span class="quotelev1">&gt; pak.lui_at_[hidden]
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4000.php">Adrian Knoth: "Re: [OMPI users] connect failed with errno=111"</a>
<li><strong>Previous message:</strong> <a href="3998.php">Pak Lui: "Re: [OMPI users] connect failed with errno=111"</a>
<li><strong>In reply to:</strong> <a href="3998.php">Pak Lui: "Re: [OMPI users] connect failed with errno=111"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4000.php">Adrian Knoth: "Re: [OMPI users] connect failed with errno=111"</a>
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
