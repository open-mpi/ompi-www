<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 31 13:22:48 2005" -->
<!-- isoreceived="20051031182248" -->
<!-- sent="Mon, 31 Oct 2005 10:19:57 -0800" -->
<!-- isosent="20051031181957" -->
<!-- name="Mike Houston" -->
<!-- email="mhouston_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Infiniband performance problems (mvapi)" -->
<!-- id="4366604D.8000405_at_graphics.stanford.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4366425A.4060309_at_lanl.gov" -->
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
<strong>Date:</strong> 2005-10-31 13:19:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0257.php">Mike Houston: "Re: [O-MPI users] Infiniband performance problems (mvapi)"</a>
<li><strong>Previous message:</strong> <a href="0255.php">Mike Houston: "Re: [O-MPI users] Infiniband performance problems (mvapi)"</a>
<li><strong>In reply to:</strong> <a href="0254.php">Tim S. Woodall: "Re: [O-MPI users] Infiniband performance problems (mvapi)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0257.php">Mike Houston: "Re: [O-MPI users] Infiniband performance problems (mvapi)"</a>
<li><strong>Reply:</strong> <a href="0257.php">Mike Houston: "Re: [O-MPI users] Infiniband performance problems (mvapi)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That seems to work with the pinning option enabled.  THANKS! 
<br>
<p>Now I'll go back to testing my real code.  I'm getting 700MB/s for 
<br>
messages &gt;=128KB.  This is a little bit lower than MVAPICH, 10-20%, but 
<br>
still pretty darn good.  My guess is that I can play with the setting 
<br>
more to tweak up performance.  Now if I can get the tcp layer working, 
<br>
I'm pretty much good to go.
<br>
<p>Any word on an SDP layer?  I can probably modify the tcp layer quickly 
<br>
to do SDP, but I thought I would ask.
<br>
<p>-Mike
<br>
<p>Tim S. Woodall wrote:
<br>
<p><span class="quotelev1">&gt;Hello Mike,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Mike Houston wrote:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;When only sending a few messages, we get reasonably good IB performance, 
</span><br>
<span class="quotelev2">&gt;&gt;~500MB/s (MVAPICH is 850MB/s).  However, if I crank the number of 
</span><br>
<span class="quotelev2">&gt;&gt;messages up, we drop to 3MB/s(!!!).  This is with the OSU NBCL 
</span><br>
<span class="quotelev2">&gt;&gt;mpi_bandwidth test.  We are running Mellanox IB Gold 1.8 with 3.3.3 
</span><br>
<span class="quotelev2">&gt;&gt;firmware on PCI-X (Couger) boards.  Everything works with MVAPICH, but 
</span><br>
<span class="quotelev2">&gt;&gt;we really need the thread support in OpenMPI.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Ideas?  I noticed there are a plethora of runtime options configurable 
</span><br>
<span class="quotelev2">&gt;&gt;for mvapi.  Do I need to tweak these to get performacne up?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;You might try running w/ the:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;mpirun -mca mpi_leave_pinned 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Which will cause mvapi port to maintain an mru cache of registrations,
</span><br>
<span class="quotelev1">&gt;rather than dynamically pinning/unpinning memory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;If this does not resolve the BW problems, try increasing the
</span><br>
<span class="quotelev1">&gt;resources allocated to each connection:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;-mca btl_mvapi_rd_min 128
</span><br>
<span class="quotelev1">&gt;-mca btl_mvapi_rd_max 256
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Also can you forward me a copy of the test code or a reference to it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thanks,
</span><br>
<span class="quotelev1">&gt;Tim
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0257.php">Mike Houston: "Re: [O-MPI users] Infiniband performance problems (mvapi)"</a>
<li><strong>Previous message:</strong> <a href="0255.php">Mike Houston: "Re: [O-MPI users] Infiniband performance problems (mvapi)"</a>
<li><strong>In reply to:</strong> <a href="0254.php">Tim S. Woodall: "Re: [O-MPI users] Infiniband performance problems (mvapi)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0257.php">Mike Houston: "Re: [O-MPI users] Infiniband performance problems (mvapi)"</a>
<li><strong>Reply:</strong> <a href="0257.php">Mike Houston: "Re: [O-MPI users] Infiniband performance problems (mvapi)"</a>
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
