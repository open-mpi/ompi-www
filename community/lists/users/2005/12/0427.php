<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Dec  6 15:35:39 2005" -->
<!-- isoreceived="20051206203539" -->
<!-- sent="Tue, 6 Dec 2005 15:35:19 -0500" -->
<!-- isosent="20051206203519" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] error creating high priority cq for mthca0" -->
<!-- id="A7A2E3AF-7C00-47FF-B2D7-0339251C2CEB_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="66FB32D3-A820-42A2-9B14-B39253BA2310_at_cs.unm.edu" -->
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
<strong>Date:</strong> 2005-12-06 15:35:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0428.php">Brian Barrett: "Re: [O-MPI users] error creating high priority cq for mthca0"</a>
<li><strong>Previous message:</strong> <a href="0426.php">Galen M. Shipman: "Re: [O-MPI users] error creating high priority cq for mthca0"</a>
<li><strong>In reply to:</strong> <a href="0426.php">Galen M. Shipman: "Re: [O-MPI users] error creating high priority cq for mthca0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0428.php">Brian Barrett: "Re: [O-MPI users] error creating high priority cq for mthca0"</a>
<li><strong>Reply:</strong> <a href="0428.php">Brian Barrett: "Re: [O-MPI users] error creating high priority cq for mthca0"</a>
<li><strong>Reply:</strong> <a href="0430.php">Bogdan Costescu: "Re: [O-MPI users] error creating high priority cq for mthca0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
With Tim's response to this -- I'm curious (so that we get correct  
<br>
information on the FAQ) -- is the /etc/security/limit.conf method a  
<br>
system-wide way of setting these values, and &quot;ulimit -l&quot; a per-user  
<br>
way of setting it?
<br>
<p>That doesn't sound quite right to me -- I'm assuming that a user  
<br>
can't &quot;ulimit -l X&quot; where X is larger than the numbers in /etc/ 
<br>
security/limits.conf -- can someone confirm if this is Right?
<br>
<p>Also, is each user's default &quot;ulimit -l&quot; value the same as what is  
<br>
in /etc/security/limits.conf?  (what's the difference between &quot;hard&quot;  
<br>
and &quot;soft&quot; limits?)
<br>
<p><p>On Dec 6, 2005, at 2:22 PM, Galen M. Shipman wrote:
<br>
<p><span class="quotelev1">&gt; Hi Daryl,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sounds like this might be a ulimit issue, what do you get when you
</span><br>
<span class="quotelev1">&gt; run ulimit -l?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, check out: <a href="http://www.open-mpi.org/faq/?category=infiniband">http://www.open-mpi.org/faq/?category=infiniband</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Galen
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 6, 2005, at 10:46 AM, Daryl W. Grunau wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi, I'm running OMPI 1.1a1r8378 on 2.6.14 + recent OpenIB stack and
</span><br>
<span class="quotelev2">&gt;&gt; getting
</span><br>
<span class="quotelev2">&gt;&gt; the following runtime error:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,0][btl_openib.c:803:mca_btl_openib_module_init] error creating
</span><br>
<span class="quotelev2">&gt;&gt; high priority cq for mthca0 errno says Cannot allocate memory
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,3][btl_openib.c:803:mca_btl_openib_module_init] error creating
</span><br>
<span class="quotelev2">&gt;&gt; high priority cq for mthca0 errno says Cannot allocate memory
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,1][btl_openib.c:803:mca_btl_openib_module_init] error creating
</span><br>
<span class="quotelev2">&gt;&gt; high priority cq for mthca0 errno says Cannot allocate memory
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,2][btl_openib.c:803:mca_btl_openib_module_init] error creating
</span><br>
<span class="quotelev2">&gt;&gt; high priority cq for mthca0 errno says Cannot allocate memory
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Strange thing is that it works properly when I run as root.  A
</span><br>
<span class="quotelev2">&gt;&gt; permissions
</span><br>
<span class="quotelev2">&gt;&gt; problem on my part?  My devices look like:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    # ls -l /dev/infiniband/*
</span><br>
<span class="quotelev2">&gt;&gt;    crw-------  1 root root 231,  64 Dec  5 17:16 /dev/infiniband/ 
</span><br>
<span class="quotelev2">&gt;&gt; issm0
</span><br>
<span class="quotelev2">&gt;&gt;    crw-------  1 root root 231,  65 Dec  5 17:16 /dev/infiniband/ 
</span><br>
<span class="quotelev2">&gt;&gt; issm1
</span><br>
<span class="quotelev2">&gt;&gt;    crw-------  1 root root 231,   0 Dec  5 17:16 /dev/infiniband/ 
</span><br>
<span class="quotelev2">&gt;&gt; umad0
</span><br>
<span class="quotelev2">&gt;&gt;    crw-------  1 root root 231,   1 Dec  5 17:16 /dev/infiniband/ 
</span><br>
<span class="quotelev2">&gt;&gt; umad1
</span><br>
<span class="quotelev2">&gt;&gt;    crw-rw-rw-  1 root root 231, 192 Dec  5 17:16 /dev/infiniband/
</span><br>
<span class="quotelev2">&gt;&gt; uverbs0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Daryl
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; 			***** Correspondence *****
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
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0428.php">Brian Barrett: "Re: [O-MPI users] error creating high priority cq for mthca0"</a>
<li><strong>Previous message:</strong> <a href="0426.php">Galen M. Shipman: "Re: [O-MPI users] error creating high priority cq for mthca0"</a>
<li><strong>In reply to:</strong> <a href="0426.php">Galen M. Shipman: "Re: [O-MPI users] error creating high priority cq for mthca0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0428.php">Brian Barrett: "Re: [O-MPI users] error creating high priority cq for mthca0"</a>
<li><strong>Reply:</strong> <a href="0428.php">Brian Barrett: "Re: [O-MPI users] error creating high priority cq for mthca0"</a>
<li><strong>Reply:</strong> <a href="0430.php">Bogdan Costescu: "Re: [O-MPI users] error creating high priority cq for mthca0"</a>
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
