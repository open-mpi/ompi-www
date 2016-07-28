<?
$subject_val = "Re: [OMPI users] Multiple Subnet MPI Fail";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 22 18:19:27 2010" -->
<!-- isoreceived="20101122231927" -->
<!-- sent="Mon, 22 Nov 2010 16:19:18 -0700" -->
<!-- isosent="20101122231918" -->
<!-- name="Paul Monday (Parallel Scientific)" -->
<!-- email="paul.monday_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Multiple Subnet MPI Fail" -->
<!-- id="FDCB198C-69D3-48BF-A543-CA1816781080_at_parsci.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4CEA824E.80408_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Multiple Subnet MPI Fail<br>
<strong>From:</strong> Paul Monday (Parallel Scientific) (<em>paul.monday_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-22 18:19:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14869.php">Jeff Squyres: "Re: [OMPI users] launching the mpi runtime"</a>
<li><strong>Previous message:</strong> <a href="14867.php">Rob Latham: "Re: [OMPI users] out of memory in io_romio_ad_nfs_read.c"</a>
<li><strong>In reply to:</strong> <a href="14860.php">Terry Dontje: "Re: [OMPI users] Multiple Subnet MPI Fail"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the quick response ... I've been thinking about this today and tried a few things on my CentOS mini connected cluster ...
<br>
<p>To use tcp btl I will have to set up a bridge on A with ib0 and ib1 participating in the bridge, then tcp btl could be used as you suggest.  Unfortunately, the obvious solution to use bridge-utils on CentOS does not support Infiniband adapters.
<br>
<p>This is now straying out of MPI range to a networking issue ... any ideas would be greatly appreciated on bridging at the IP over IB tier in a cluster.  This must be a solved problem but I'm not having a lot of luck with google and the archives.
<br>
<p>Paul Monday
<br>
<p><p><p>On Nov 22, 2010, at 7:46 AM, Terry Dontje wrote:
<br>
<p><span class="quotelev1">&gt; You're gonna have to use a protocol that can route through a machine, OFED User Verbs (ie openib) does not do this.  The only way I know of to do this via OMPI is with the tcp btl.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 11/22/2010 09:28 AM, Paul Monday (Parallel Scientific) wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We've been using OpenMPI in a switched environment with success, but we've moved to a point to point environment to do some work.  Some of the nodes cannot talk directly to one another, sort of like this with computers A,B, C with A having two ports: 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; A(1)(opensm)------&gt;B 
</span><br>
<span class="quotelev2">&gt;&gt; A(2)(opensm)------&gt;C 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; B is not connected to C in any way. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; When we try to run our OpenMPI program we are receiving: 
</span><br>
<span class="quotelev2">&gt;&gt; At least one pair of MPI processes are unable to reach each other for 
</span><br>
<span class="quotelev2">&gt;&gt; MPI communications.  This means that no Open MPI device has indicated 
</span><br>
<span class="quotelev2">&gt;&gt; that it can be used to communicate between these processes.  This is 
</span><br>
<span class="quotelev2">&gt;&gt; an error; Open MPI requires that all MPI processes be able to reach 
</span><br>
<span class="quotelev2">&gt;&gt; each other.  This error can sometimes be the result of forgetting to 
</span><br>
<span class="quotelev2">&gt;&gt; specify the &quot;self&quot; BTL. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   Process 1 ([[1581,1],5]) is on host: pg-B 
</span><br>
<span class="quotelev2">&gt;&gt;   Process 2 ([[1581,1],0]) is on host: pg-C 
</span><br>
<span class="quotelev2">&gt;&gt;   BTLs attempted: openib self sm 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Your MPI job is now going to abort; sorry. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I hope I'm not being overly naive but, is their a way to join the subnets at the MPI layer?  It seems like IP over IB would be too high up the stack. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Paul Monday 
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
<span class="quotelev1">&gt; &lt;Mail Attachment.gif&gt;
</span><br>
<span class="quotelev1">&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev1">&gt; Developer Tools Engineering | +1.781.442.2631
</span><br>
<span class="quotelev1">&gt; Oracle - Performance Technologies
</span><br>
<span class="quotelev1">&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev1">&gt; Email terry.dontje_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14868/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14869.php">Jeff Squyres: "Re: [OMPI users] launching the mpi runtime"</a>
<li><strong>Previous message:</strong> <a href="14867.php">Rob Latham: "Re: [OMPI users] out of memory in io_romio_ad_nfs_read.c"</a>
<li><strong>In reply to:</strong> <a href="14860.php">Terry Dontje: "Re: [OMPI users] Multiple Subnet MPI Fail"</a>
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
