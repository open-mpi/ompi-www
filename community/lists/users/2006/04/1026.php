<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Apr 11 19:39:17 2006" -->
<!-- isoreceived="20060411233917" -->
<!-- sent="Tue, 11 Apr 2006 19:39:09 -0400" -->
<!-- isosent="20060411233909" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem running code with OpenMPI-1.0.1" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF6716DD_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] Problem running code with OpenMPI-1.0.1" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-11 19:39:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1027.php">Jeffrey B. Layton: "Re: [OMPI users] Problem running code with OpenMPI-1.0.1"</a>
<li><strong>Previous message:</strong> <a href="1025.php">Troy Telford: "Re: [OMPI users] Intel EM64T Compiler error on Opteron"</a>
<li><strong>Maybe in reply to:</strong> <a href="1014.php">Jeffrey B. Layton: "[OMPI users] Problem running code with OpenMPI-1.0.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1027.php">Jeffrey B. Layton: "Re: [OMPI users] Problem running code with OpenMPI-1.0.1"</a>
<li><strong>Reply:</strong> <a href="1027.php">Jeffrey B. Layton: "Re: [OMPI users] Problem running code with OpenMPI-1.0.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Do you, perchance, have multiple TCP interfaces on at least one of the
<br>
nodes you're running on?
<br>
<p>We had a mistake in the TCP network matching code during startup -- this
<br>
is fixed in v1.0.2.  Can you give that a whirl?
<br>
<p><p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Jeffrey B. Layton
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, April 11, 2006 11:25 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] Problem running code with OpenMPI-1.0.1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Good morning,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    I'm trying to run one of the NAS Parallel Benchmarks (bt) with
</span><br>
<span class="quotelev1">&gt; OpenMPI-1.0.1 that was built with PGI 6.0. The code never
</span><br>
<span class="quotelev1">&gt; starts (at least I don't see any output) until I kill the code. Then
</span><br>
<span class="quotelev1">&gt; I get the following message:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [0,1,2][btl_tcp_endpoint.c:559:mca_btl_tcp_endpoint_complete_connect] 
</span><br>
<span class="quotelev1">&gt; connect() failed with 
</span><br>
<span class="quotelev1">&gt; errno=113[0,1,4][btl_tcp_endpoint.c:559:mca_btl_tcp_endpoint_c
</span><br>
<span class="quotelev1">&gt; omplete_connect] 
</span><br>
<span class="quotelev1">&gt; connect() failed with
</span><br>
<span class="quotelev1">&gt; errno=113[0,1,8][btl_tcp_endpoint.c:559:mca_btl_tcp_endpoint_c
</span><br>
<span class="quotelev1">&gt; omplete_connect] 
</span><br>
<span class="quotelev1">&gt; connect() failed with errno=113mpirun: killing job...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any ideas on this one?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff
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
<li><strong>Next message:</strong> <a href="1027.php">Jeffrey B. Layton: "Re: [OMPI users] Problem running code with OpenMPI-1.0.1"</a>
<li><strong>Previous message:</strong> <a href="1025.php">Troy Telford: "Re: [OMPI users] Intel EM64T Compiler error on Opteron"</a>
<li><strong>Maybe in reply to:</strong> <a href="1014.php">Jeffrey B. Layton: "[OMPI users] Problem running code with OpenMPI-1.0.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1027.php">Jeffrey B. Layton: "Re: [OMPI users] Problem running code with OpenMPI-1.0.1"</a>
<li><strong>Reply:</strong> <a href="1027.php">Jeffrey B. Layton: "Re: [OMPI users] Problem running code with OpenMPI-1.0.1"</a>
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
