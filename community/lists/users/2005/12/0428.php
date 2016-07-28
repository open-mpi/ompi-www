<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Dec  6 20:27:43 2005" -->
<!-- isoreceived="20051207012743" -->
<!-- sent="Tue, 6 Dec 2005 20:27:35 -0500" -->
<!-- isosent="20051207012735" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] error creating high priority cq for mthca0" -->
<!-- id="11815D57-5CA9-4A38-A48E-B9F9F1B8CB76_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="A7A2E3AF-7C00-47FF-B2D7-0339251C2CEB_at_open-mpi.org" -->
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
<strong>Date:</strong> 2005-12-06 20:27:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0429.php">Jeff Squyres: "Re: [O-MPI users] error creating high priority cq for mthca0"</a>
<li><strong>Previous message:</strong> <a href="0427.php">Jeff Squyres: "Re: [O-MPI users] error creating high priority cq for mthca0"</a>
<li><strong>In reply to:</strong> <a href="0427.php">Jeff Squyres: "Re: [O-MPI users] error creating high priority cq for mthca0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0429.php">Jeff Squyres: "Re: [O-MPI users] error creating high priority cq for mthca0"</a>
<li><strong>Reply:</strong> <a href="0429.php">Jeff Squyres: "Re: [O-MPI users] error creating high priority cq for mthca0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Generally, the user defaults to the soft limit and can use ulimit to  
<br>
set values up to the hard limit.  Tim's suggestion bumps the soft  
<br>
limit up to the hard limit, so all the user could do with ulimit is  
<br>
move the per-user limit back down.
<br>
<p>brian
<br>
<p>On Dec 6, 2005, at 3:35 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; With Tim's response to this -- I'm curious (so that we get correct
</span><br>
<span class="quotelev1">&gt; information on the FAQ) -- is the /etc/security/limit.conf method a
</span><br>
<span class="quotelev1">&gt; system-wide way of setting these values, and &quot;ulimit -l&quot; a per-user
</span><br>
<span class="quotelev1">&gt; way of setting it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That doesn't sound quite right to me -- I'm assuming that a user
</span><br>
<span class="quotelev1">&gt; can't &quot;ulimit -l X&quot; where X is larger than the numbers in /etc/
</span><br>
<span class="quotelev1">&gt; security/limits.conf -- can someone confirm if this is Right?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, is each user's default &quot;ulimit -l&quot; value the same as what is
</span><br>
<span class="quotelev1">&gt; in /etc/security/limits.conf?  (what's the difference between &quot;hard&quot;
</span><br>
<span class="quotelev1">&gt; and &quot;soft&quot; limits?)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 6, 2005, at 2:22 PM, Galen M. Shipman wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Daryl,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sounds like this might be a ulimit issue, what do you get when you
</span><br>
<span class="quotelev2">&gt;&gt; run ulimit -l?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also, check out: <a href="http://www.open-mpi.org/faq/?category=infiniband">http://www.open-mpi.org/faq/?category=infiniband</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Galen
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 6, 2005, at 10:46 AM, Daryl W. Grunau wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi, I'm running OMPI 1.1a1r8378 on 2.6.14 + recent OpenIB stack and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; getting
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the following runtime error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0,1,0][btl_openib.c:803:mca_btl_openib_module_init] error creating
</span><br>
<span class="quotelev3">&gt;&gt;&gt; high priority cq for mthca0 errno says Cannot allocate memory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0,1,3][btl_openib.c:803:mca_btl_openib_module_init] error creating
</span><br>
<span class="quotelev3">&gt;&gt;&gt; high priority cq for mthca0 errno says Cannot allocate memory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0,1,1][btl_openib.c:803:mca_btl_openib_module_init] error creating
</span><br>
<span class="quotelev3">&gt;&gt;&gt; high priority cq for mthca0 errno says Cannot allocate memory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0,1,2][btl_openib.c:803:mca_btl_openib_module_init] error creating
</span><br>
<span class="quotelev3">&gt;&gt;&gt; high priority cq for mthca0 errno says Cannot allocate memory
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Strange thing is that it works properly when I run as root.  A
</span><br>
<span class="quotelev3">&gt;&gt;&gt; permissions
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problem on my part?  My devices look like:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    # ls -l /dev/infiniband/*
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    crw-------  1 root root 231,  64 Dec  5 17:16 /dev/infiniband/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; issm0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    crw-------  1 root root 231,  65 Dec  5 17:16 /dev/infiniband/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; issm1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    crw-------  1 root root 231,   0 Dec  5 17:16 /dev/infiniband/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; umad0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    crw-------  1 root root 231,   1 Dec  5 17:16 /dev/infiniband/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; umad1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    crw-rw-rw-  1 root root 231, 192 Dec  5 17:16 /dev/infiniband/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; uverbs0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Daryl
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 			***** Correspondence *****
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; {+} Jeff Squyres
</span><br>
<span class="quotelev1">&gt; {+} The Open MPI Project
</span><br>
<span class="quotelev1">&gt; {+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0429.php">Jeff Squyres: "Re: [O-MPI users] error creating high priority cq for mthca0"</a>
<li><strong>Previous message:</strong> <a href="0427.php">Jeff Squyres: "Re: [O-MPI users] error creating high priority cq for mthca0"</a>
<li><strong>In reply to:</strong> <a href="0427.php">Jeff Squyres: "Re: [O-MPI users] error creating high priority cq for mthca0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0429.php">Jeff Squyres: "Re: [O-MPI users] error creating high priority cq for mthca0"</a>
<li><strong>Reply:</strong> <a href="0429.php">Jeff Squyres: "Re: [O-MPI users] error creating high priority cq for mthca0"</a>
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
