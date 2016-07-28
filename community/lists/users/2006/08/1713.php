<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug  3 07:48:55 2006" -->
<!-- isoreceived="20060803114855" -->
<!-- sent="Thu, 03 Aug 2006 07:48:40 -0400" -->
<!-- isosent="20060803114840" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI application fails with errno 113" -->
<!-- id="C0F75AD8.15B73%jsquyres_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="c8c0af0607250813y2d2c7a56x59c1eca27f96e38f_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-08-03 07:48:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1714.php">Jeff Squyres: "Re: [OMPI users] error in running openmpi on remote node"</a>
<li><strong>Previous message:</strong> <a href="1712.php">Jeff Squyres: "Re: [OMPI users] How do I debug this?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/07/1677.php">Gunnar Johansson: "[OMPI users] MPI application fails with errno 113"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1715.php">Gunnar Johansson: "Re: [OMPI users] MPI application fails with errno 113"</a>
<li><strong>Reply:</strong> <a href="1715.php">Gunnar Johansson: "Re: [OMPI users] MPI application fails with errno 113"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greetings Gunnar.
<br>
<p>Can you provide all the information listed here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p>For example, what version are you using?  We had some bugs in the TCP
<br>
connection code dealing with multiple networks that were recently fixed.
<br>
Could you try the latest 1.1.1 beta and see if that fixes your problem?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/software/ompi/v1.1/">http://www.open-mpi.org/software/ompi/v1.1/</a>
<br>
<p><p>On 7/25/06 11:13 AM, &quot;Gunnar Johansson&quot; &lt;gunjo81_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We have set up OpenMPI over a set of 5 machines (2 dual CPU) and get this
</span><br>
<span class="quotelev1">&gt; error when trying to start an MPI application with more than 5 processes:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [0,1,2][btl_tcp_endpoint.c:572:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() failed with errno=113
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Anything below 5 proc. works great. We have set the btl_tcp_if_include and
</span><br>
<span class="quotelev1">&gt; and the oob_tcp_include to the correct interface to use on each machine.
</span><br>
<span class="quotelev1">&gt; Anything else we can try / diagnostics to run to provide more info about the
</span><br>
<span class="quotelev1">&gt; problem?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks, Gunnar Johansson
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
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1714.php">Jeff Squyres: "Re: [OMPI users] error in running openmpi on remote node"</a>
<li><strong>Previous message:</strong> <a href="1712.php">Jeff Squyres: "Re: [OMPI users] How do I debug this?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/07/1677.php">Gunnar Johansson: "[OMPI users] MPI application fails with errno 113"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1715.php">Gunnar Johansson: "Re: [OMPI users] MPI application fails with errno 113"</a>
<li><strong>Reply:</strong> <a href="1715.php">Gunnar Johansson: "Re: [OMPI users] MPI application fails with errno 113"</a>
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
