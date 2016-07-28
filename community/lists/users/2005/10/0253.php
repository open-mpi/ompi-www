<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 31 11:24:58 2005" -->
<!-- isoreceived="20051031162458" -->
<!-- sent="Mon, 31 Oct 2005 08:22:09 -0800" -->
<!-- isosent="20051031162209" -->
<!-- name="Mike Houston" -->
<!-- email="mhouston_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Infiniband performance problems (mvapi)" -->
<!-- id="436644B1.4080208_at_graphics.stanford.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="DD8B435B-06F5-4948-B14C-14FA5B38E229_at_cs.utk.edu" -->
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
<strong>From:</strong> Mike Houston (<em>mhouston_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-10-31 11:22:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0254.php">Tim S. Woodall: "Re: [O-MPI users] Infiniband performance problems (mvapi)"</a>
<li><strong>Previous message:</strong> <a href="0252.php">Galen M. Shipman: "Re: [O-MPI users] Infiniband performance problems (mvapi)"</a>
<li><strong>Maybe in reply to:</strong> <a href="0248.php">Mike Houston: "[O-MPI users] Infiniband performance problems (mvapi)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0254.php">Tim S. Woodall: "Re: [O-MPI users] Infiniband performance problems (mvapi)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Same performance problems with that fix.  In fact, if I ever use tcp 
<br>
currently, OpenMPI crashes...
<br>
<p>-Mike
<br>
<p>George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; If there are several networks available between 2 nodes they will get  
</span><br>
<span class="quotelev1">&gt; selected. That can lead to poor performances in the case when the  
</span><br>
<span class="quotelev1">&gt; second network is a high latency one (like TCP). If you want to  
</span><br>
<span class="quotelev1">&gt; insure that only the IB driver is loaded you have to add in  the 
</span><br>
<span class="quotelev1">&gt; .openmpi/mca-params.conf the following line:
</span><br>
<span class="quotelev1">&gt; btl_base_exclude=tcp
</span><br>
<span class="quotelev1">&gt; This will force the TCP driver to be unloaded (always). In order to  
</span><br>
<span class="quotelev1">&gt; use this option you have to have all nodes reacheable via IB.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Thanks,
</span><br>
<span class="quotelev1">&gt;     george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 31, 2005, at 10:50 AM, Mike Houston wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When only sending a few messages, we get reasonably good IB  
</span><br>
<span class="quotelev2">&gt;&gt; performance,
</span><br>
<span class="quotelev2">&gt;&gt; ~500MB/s (MVAPICH is 850MB/s).  However, if I crank the number of
</span><br>
<span class="quotelev2">&gt;&gt; messages up, we drop to 3MB/s(!!!).  This is with the OSU NBCL
</span><br>
<span class="quotelev2">&gt;&gt; mpi_bandwidth test.  We are running Mellanox IB Gold 1.8 with 3.3.3
</span><br>
<span class="quotelev2">&gt;&gt; firmware on PCI-X (Couger) boards.  Everything works with MVAPICH, but
</span><br>
<span class="quotelev2">&gt;&gt; we really need the thread support in OpenMPI.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ideas?  I noticed there are a plethora of runtime options configurable
</span><br>
<span class="quotelev2">&gt;&gt; for mvapi.  Do I need to tweak these to get performacne up?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Mike
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;Half of what I say is meaningless; but I say it so that the other  
</span><br>
<span class="quotelev1">&gt; half may reach you&quot;
</span><br>
<span class="quotelev1">&gt;                                   Kahlil Gibran
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0254.php">Tim S. Woodall: "Re: [O-MPI users] Infiniband performance problems (mvapi)"</a>
<li><strong>Previous message:</strong> <a href="0252.php">Galen M. Shipman: "Re: [O-MPI users] Infiniband performance problems (mvapi)"</a>
<li><strong>Maybe in reply to:</strong> <a href="0248.php">Mike Houston: "[O-MPI users] Infiniband performance problems (mvapi)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0254.php">Tim S. Woodall: "Re: [O-MPI users] Infiniband performance problems (mvapi)"</a>
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
