<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Feb 14 19:57:04 2007" -->
<!-- isoreceived="20070215005704" -->
<!-- sent="Wed, 14 Feb 2007 19:56:50 -0500" -->
<!-- isosent="20070215005650" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problems with HPLinpack over myrinet MX-10G" -->
<!-- id="540BD32B-759F-4E3E-A92D-944388D64B31_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="84019A93-EFAD-4E10-854B-2AB3F1133A67_at_myri.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-14 19:56:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2702.php">Eric Thibodeau: "[OMPI users] compiling mpptest using OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="2700.php">Scott Atchley: "Re: [OMPI users] problems with HPLinpack over myrinet MX-10G"</a>
<li><strong>In reply to:</strong> <a href="2700.php">Scott Atchley: "Re: [OMPI users] problems with HPLinpack over myrinet MX-10G"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 14, 2007, at 7:27 PM, Scott Atchley wrote:
<br>
<p><span class="quotelev1">&gt; On Feb 14, 2007, at 12:33 PM, Alex Tumanov wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I recently tried running HPLinpack, compiled with OMPI, over myrinet
</span><br>
<span class="quotelev2">&gt;&gt; MX interconnect. Running a simple hello world program works, but XHPL
</span><br>
<span class="quotelev2">&gt;&gt; fails with an error occurring when it tries to MPI_Send:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # mpirun -np 4 -H l0-0,c0-2 --prefix $MPIHOME --mca btl mx,self
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you are running more than one process per node, you may need to
</span><br>
<span class="quotelev1">&gt; add shmem to mx,self.
</span><br>
<p>The MX BTL version available on the Open MPI trunk (and sooner on the  
<br>
1.2) support shared memory communications as well as self  
<br>
communications via MX. &quot;ompi_info --param btl mx&quot; is your devoted  
<br>
friend for how to set these 2 options. If they are set, the need for  
<br>
&quot;--mca btl mx,sm,self&quot; dissapear.
<br>
<p><span class="quotelev1">&gt; Also, OMPI offers another MX via pml. Performance was better using pml
</span><br>
<span class="quotelev1">&gt; but George may be getting the btl closer.
</span><br>
<p>HPL send large messages around. For such messages the BTL seems to  
<br>
deliver better performances than the default MTL MX version if your  
<br>
network is at most a 2G.
<br>
<p><span class="quotelev2">&gt;&gt; There are several questions. First of all, am I able to initiate OMPI
</span><br>
<span class="quotelev2">&gt;&gt; over MX jobs from the headnode to be executed on 2 compute nodes even
</span><br>
<span class="quotelev2">&gt;&gt; though the headnode does not have MX hardware?
</span><br>
<p>Yes. The networks are detected at runtime, and Open MPI will try to  
<br>
use most of them or fall back over TCP.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2702.php">Eric Thibodeau: "[OMPI users] compiling mpptest using OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="2700.php">Scott Atchley: "Re: [OMPI users] problems with HPLinpack over myrinet MX-10G"</a>
<li><strong>In reply to:</strong> <a href="2700.php">Scott Atchley: "Re: [OMPI users] problems with HPLinpack over myrinet MX-10G"</a>
<!-- nextthread="start" -->
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
