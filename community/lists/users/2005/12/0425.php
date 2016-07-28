<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Dec  6 14:15:43 2005" -->
<!-- isoreceived="20051206191543" -->
<!-- sent="Tue, 06 Dec 2005 12:15:37 -0700" -->
<!-- isosent="20051206191537" -->
<!-- name="Tim S. Woodall" -->
<!-- email="twoodall_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] error creating high priority cq for mthca0" -->
<!-- id="4395E359.4060903_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Tim S. Woodall (<em>twoodall_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-12-06 14:15:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0426.php">Galen M. Shipman: "Re: [O-MPI users] error creating high priority cq for mthca0"</a>
<li><strong>Previous message:</strong> <a href="0424.php">Jeff Squyres: "Re: [O-MPI users] MCA paffinity_linux warning"</a>
<li><strong>In reply to:</strong> <a href="0422.php">Daryl W. Grunau: "[O-MPI users] error creating high priority cq for mthca0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0426.php">Galen M. Shipman: "Re: [O-MPI users] error creating high priority cq for mthca0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Daryl,
<br>
<p>Try this:
<br>
<p><p>-------- Original Message --------
<br>
Subject: RE: only root running mpi jobs with 1.0.1rc5
<br>
Date: Thu, 01 Dec 2005 18:49:46 -0700
<br>
From: Joshua Aune &lt;luken_at_[hidden]&gt;
<br>
Reply-To: luken_at_[hidden]
<br>
Organization: Linux Networx
<br>
To: Todd Wilde &lt;Todd_at_[hidden]&gt;
<br>
CC: Matthew Finlay &lt;Matt_at_[hidden]&gt;, twoodall_at_[hidden],        Robert Cummins &lt;rcummins_at_[hidden]&gt;, Pat Lindsay &lt;plindsay_at_[hidden]&gt;
<br>
References: &lt;25AE7F432672D511B8DC00B0D0DF11DA05FC26CB_at_MTIEX01&gt;
<br>
<p>Sounds like you were right
<br>
<p>*               soft    memlock         8388608 # 8 GB
<br>
*               hard    memlock         8388608 # 8 GB
<br>
<p><p>and now I get no errors :)  Looks like the limits were propigated to the
<br>
back end nodes.
<br>
<p>Tim, this should fix your problem as well?
<br>
<p>On Thu, 2005-12-01 at 17:26 -0800, Todd Wilde wrote:
<br>
<span class="quotelev1"> &gt; How about this one:
</span><br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1"> &gt; For Redhat AS4.0 and Fedora Core 3 or a newer kernel, edit the
</span><br>
<span class="quotelev1"> &gt; file /etc/security/limits.conf and add the following two lines:
</span><br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1"> &gt; soft memlock &lt;number&gt;
</span><br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1"> &gt; hard memlock &lt;number&gt;
</span><br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1"> &gt; The &lt;number&gt; value denotes the number of kilobytes that may be locked
</span><br>
<span class="quotelev1"> &gt; by a process.
</span><br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev2"> &gt; &gt; -----Original Message-----
</span><br>
<span class="quotelev2"> &gt; &gt; From: Joshua Aune [mailto:luken_at_[hidden]]
</span><br>
<span class="quotelev2"> &gt; &gt; Sent: Thursday, December 01, 2005 3:50 PM
</span><br>
<span class="quotelev2"> &gt; &gt; To: Todd Wilde
</span><br>
<span class="quotelev2"> &gt; &gt; Cc: Matthew Finlay; twoodall_at_[hidden]; Robert Cummins; Pat Lindsay
</span><br>
<span class="quotelev2"> &gt; &gt; Subject: RE: only root running mpi jobs with 1.0.1rc5
</span><br>
<span class="quotelev2"> &gt; &gt;
</span><br>
<span class="quotelev2"> &gt; &gt; On Thu, 2005-12-01 at 15:39 -0800, Todd Wilde wrote:
</span><br>
<span class="quotelev3"> &gt; &gt; &gt; It may be a permissions issue with normal users locking memory.
</span><br>
<span class="quotelev1"> &gt; I've
</span><br>
<span class="quotelev3"> &gt; &gt; &gt; seen this in the past.  Try adding the following command at boot:
</span><br>
<span class="quotelev3"> &gt; &gt; &gt;
</span><br>
<span class="quotelev3"> &gt; &gt; &gt;
</span><br>
<span class="quotelev3"> &gt; &gt; &gt; sysctl -w vm.disable_cap_mlock=1
</span><br>
<span class="quotelev2"> &gt; &gt;
</span><br>
<span class="quotelev2"> &gt; &gt; This doesn't exist in 2.6.14...
</span><br>
<span class="quotelev2"> &gt; &gt;
</span><br>
<span class="quotelev3"> &gt; &gt; &gt;
</span><br>
<span class="quotelev3"> &gt; &gt; &gt;
</span><br>
<span class="quotelev4"> &gt; &gt; &gt; &gt; -----Original Message-----
</span><br>
<span class="quotelev4"> &gt; &gt; &gt; &gt; From: Joshua Aune [mailto:luken_at_[hidden]]
</span><br>
<span class="quotelev4"> &gt; &gt; &gt; &gt; Sent: Thursday, December 01, 2005 1:56 PM
</span><br>
<span class="quotelev4"> &gt; &gt; &gt; &gt; To: Matthew Finlay; Todd Wilde; twoodall_at_[hidden]
</span><br>
<span class="quotelev4"> &gt; &gt; &gt; &gt; Cc: Robert Cummins; Pat Lindsay
</span><br>
<span class="quotelev4"> &gt; &gt; &gt; &gt; Subject: only root running mpi jobs with 1.0.1rc5
</span><br>
<span class="quotelev4"> &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4"> &gt; &gt; &gt; &gt; Root runs jobs fine but users don't.
</span><br>
<span class="quotelev4"> &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4"> &gt; &gt; &gt; &gt; Any thoughts?
</span><br>
<span class="quotelev4"> &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4"> &gt; &gt; &gt; &gt; Thanks,
</span><br>
<span class="quotelev4"> &gt; &gt; &gt; &gt; josh
</span><br>
<span class="quotelev4"> &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4"> &gt; &gt; &gt; &gt; coyote2-compute# module purge
</span><br>
<span class="quotelev4"> &gt; &gt; &gt; &gt; coyote2-compute# module load compiler/gcc mpi/openmpi-1.0.1rc5
</span><br>
<span class="quotelev4"> &gt; &gt; &gt; &gt; coyote2-compute# cd /home/luken/hello
</span><br>
<span class="quotelev4"> &gt; &gt; &gt; &gt; coyote2-compute# mpirun -np 2 -H 201,202 mpi_hello
</span><br>
<span class="quotelev4"> &gt; &gt; &gt; &gt; n201: I am rank 0
</span><br>
<span class="quotelev4"> &gt; &gt; &gt; &gt; n202: I am rank 1
</span><br>
<span class="quotelev4"> &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4"> &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4"> &gt; &gt; &gt; &gt; coyote2-compute$ su - luken
</span><br>
<span class="quotelev4"> &gt; &gt; &gt; &gt; coyote2-compute$ module purge
</span><br>
<span class="quotelev4"> &gt; &gt; &gt; &gt; coyote2-compute$ module load compiler/gcc mpi/openmpi-1.0.1rc5
</span><br>
<span class="quotelev4"> &gt; &gt; &gt; &gt; coyote2-compute$ cd /home/luken/hello
</span><br>
<span class="quotelev4"> &gt; &gt; &gt; &gt; coyote2-compute$ mpirun -np 2 -H 201,202 mpi_hello
</span><br>
<span class="quotelev4"> &gt; &gt; &gt; &gt; [0,1,0][btl_openib.c:803:mca_btl_openib_module_init] error
</span><br>
<span class="quotelev1"> &gt; creating
</span><br>
<span class="quotelev3"> &gt; &gt; &gt; high
</span><br>
<span class="quotelev4"> &gt; &gt; &gt; &gt; priority cq for mthca0 errno says Cannot allocate memory
</span><br>
<span class="quotelev4"> &gt; &gt; &gt; &gt; [0,1,1][btl_openib.c:803:mca_btl_openib_module_init] error
</span><br>
<span class="quotelev1"> &gt; creating
</span><br>
<span class="quotelev3"> &gt; &gt; &gt; high
</span><br>
<span class="quotelev4"> &gt; &gt; &gt; &gt; priority cq for mthca0 errno says Cannot allocate memory
</span><br>
<span class="quotelev4"> &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4"> &gt; &gt; &gt; &gt; n201: I am rank 0
</span><br>
<span class="quotelev4"> &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4"> &gt; &gt; &gt; &gt; n202: I am rank 1
</span><br>
<span class="quotelev3"> &gt; &gt; &gt;
</span><br>
<span class="quotelev1"> &gt;
</span><br>
<p><p><p><p>Daryl W. Grunau wrote:
<br>
<span class="quotelev1">&gt; Hi, I'm running OMPI 1.1a1r8378 on 2.6.14 + recent OpenIB stack and getting
</span><br>
<span class="quotelev1">&gt; the following runtime error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [0,1,0][btl_openib.c:803:mca_btl_openib_module_init] error creating high priority cq for mthca0 errno says Cannot allocate memory
</span><br>
<span class="quotelev1">&gt; [0,1,3][btl_openib.c:803:mca_btl_openib_module_init] error creating high priority cq for mthca0 errno says Cannot allocate memory
</span><br>
<span class="quotelev1">&gt; [0,1,1][btl_openib.c:803:mca_btl_openib_module_init] error creating high priority cq for mthca0 errno says Cannot allocate memory
</span><br>
<span class="quotelev1">&gt; [0,1,2][btl_openib.c:803:mca_btl_openib_module_init] error creating high priority cq for mthca0 errno says Cannot allocate memory
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Strange thing is that it works properly when I run as root.  A permissions
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
<span class="quotelev1">&gt;    crw-rw-rw-  1 root root 231, 192 Dec  5 17:16 /dev/infiniband/uverbs0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Daryl
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0426.php">Galen M. Shipman: "Re: [O-MPI users] error creating high priority cq for mthca0"</a>
<li><strong>Previous message:</strong> <a href="0424.php">Jeff Squyres: "Re: [O-MPI users] MCA paffinity_linux warning"</a>
<li><strong>In reply to:</strong> <a href="0422.php">Daryl W. Grunau: "[O-MPI users] error creating high priority cq for mthca0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0426.php">Galen M. Shipman: "Re: [O-MPI users] error creating high priority cq for mthca0"</a>
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
