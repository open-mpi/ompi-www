<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Dec  6 14:22:19 2005" -->
<!-- isoreceived="20051206192219" -->
<!-- sent="Tue, 6 Dec 2005 12:22:07 -0700" -->
<!-- isosent="20051206192207" -->
<!-- name="Galen M. Shipman" -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] error creating high priority cq for mthca0" -->
<!-- id="66FB32D3-A820-42A2-9B14-B39253BA2310_at_cs.unm.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20051206174640.GA17042_at_lanl.gov" -->
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
<strong>Date:</strong> 2005-12-06 14:22:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0427.php">Jeff Squyres: "Re: [O-MPI users] error creating high priority cq for mthca0"</a>
<li><strong>Previous message:</strong> <a href="0425.php">Tim S. Woodall: "Re: [O-MPI users] error creating high priority cq for mthca0"</a>
<li><strong>In reply to:</strong> <a href="0422.php">Daryl W. Grunau: "[O-MPI users] error creating high priority cq for mthca0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0427.php">Jeff Squyres: "Re: [O-MPI users] error creating high priority cq for mthca0"</a>
<li><strong>Reply:</strong> <a href="0427.php">Jeff Squyres: "Re: [O-MPI users] error creating high priority cq for mthca0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Daryl,
<br>
<p>Sounds like this might be a ulimit issue, what do you get when you  
<br>
run ulimit -l?
<br>
<p>Also, check out: <a href="http://www.open-mpi.org/faq/?category=infiniband">http://www.open-mpi.org/faq/?category=infiniband</a>
<br>
<p>Thanks,
<br>
<p>Galen
<br>
<p>On Dec 6, 2005, at 10:46 AM, Daryl W. Grunau wrote:
<br>
<p><span class="quotelev1">&gt; Hi, I'm running OMPI 1.1a1r8378 on 2.6.14 + recent OpenIB stack and  
</span><br>
<span class="quotelev1">&gt; getting
</span><br>
<span class="quotelev1">&gt; the following runtime error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [0,1,0][btl_openib.c:803:mca_btl_openib_module_init] error creating  
</span><br>
<span class="quotelev1">&gt; high priority cq for mthca0 errno says Cannot allocate memory
</span><br>
<span class="quotelev1">&gt; [0,1,3][btl_openib.c:803:mca_btl_openib_module_init] error creating  
</span><br>
<span class="quotelev1">&gt; high priority cq for mthca0 errno says Cannot allocate memory
</span><br>
<span class="quotelev1">&gt; [0,1,1][btl_openib.c:803:mca_btl_openib_module_init] error creating  
</span><br>
<span class="quotelev1">&gt; high priority cq for mthca0 errno says Cannot allocate memory
</span><br>
<span class="quotelev1">&gt; [0,1,2][btl_openib.c:803:mca_btl_openib_module_init] error creating  
</span><br>
<span class="quotelev1">&gt; high priority cq for mthca0 errno says Cannot allocate memory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Strange thing is that it works properly when I run as root.  A  
</span><br>
<span class="quotelev1">&gt; permissions
</span><br>
<span class="quotelev1">&gt; problem on my part?  My devices look like:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    # ls -l /dev/infiniband/*
</span><br>
<span class="quotelev1">&gt;    crw-------  1 root root 231,  64 Dec  5 17:16 /dev/infiniband/issm0
</span><br>
<span class="quotelev1">&gt;    crw-------  1 root root 231,  65 Dec  5 17:16 /dev/infiniband/issm1
</span><br>
<span class="quotelev1">&gt;    crw-------  1 root root 231,   0 Dec  5 17:16 /dev/infiniband/umad0
</span><br>
<span class="quotelev1">&gt;    crw-------  1 root root 231,   1 Dec  5 17:16 /dev/infiniband/umad1
</span><br>
<span class="quotelev1">&gt;    crw-rw-rw-  1 root root 231, 192 Dec  5 17:16 /dev/infiniband/ 
</span><br>
<span class="quotelev1">&gt; uverbs0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Daryl
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; 			***** Correspondence *****
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
<li><strong>Next message:</strong> <a href="0427.php">Jeff Squyres: "Re: [O-MPI users] error creating high priority cq for mthca0"</a>
<li><strong>Previous message:</strong> <a href="0425.php">Tim S. Woodall: "Re: [O-MPI users] error creating high priority cq for mthca0"</a>
<li><strong>In reply to:</strong> <a href="0422.php">Daryl W. Grunau: "[O-MPI users] error creating high priority cq for mthca0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0427.php">Jeff Squyres: "Re: [O-MPI users] error creating high priority cq for mthca0"</a>
<li><strong>Reply:</strong> <a href="0427.php">Jeff Squyres: "Re: [O-MPI users] error creating high priority cq for mthca0"</a>
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
