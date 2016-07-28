<?
$subject_val = "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  3 09:31:33 2009" -->
<!-- isoreceived="20090203143133" -->
<!-- sent="Tue, 3 Feb 2009 09:31:27 -0500" -->
<!-- isosent="20090203143127" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] v1.3: mca_common_sm_mmap_init error" -->
<!-- id="32D29B5A-A251-4884-BEDE-C54337DBB8BD_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49876A2A.3070208_at_ias.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] v1.3: mca_common_sm_mmap_init error<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-03 09:31:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7947.php">Jeff Squyres: "Re: [OMPI users] signal 15 (terminated)"</a>
<li><strong>Previous message:</strong> <a href="7945.php">Jeff Squyres: "Re: [OMPI users] Open MPI error"</a>
<li><strong>In reply to:</strong> <a href="7940.php">Prentice Bisbal: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7951.php">Prentice Bisbal: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
<li><strong>Reply:</strong> <a href="7951.php">Prentice Bisbal: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 2, 2009, at 4:48 PM, Prentice Bisbal wrote:
<br>
<p><span class="quotelev1">&gt; No. I was running just a simple &quot;Hello, world&quot; program to test v1.3  
</span><br>
<span class="quotelev1">&gt; when
</span><br>
<span class="quotelev1">&gt; these errors occured. And as soon as I reverted to 1.2.8, the errors
</span><br>
<span class="quotelev1">&gt; disappeared.
</span><br>
<p>FWIW, OMPI allocates shared memory based on the number of peers on the  
<br>
host.  This allocation is during MPI_INIT, not during the first  
<br>
MPI_SEND/MPI_RECV call.  So even if you're running &quot;hello world&quot;, you  
<br>
could still be running out of shared memory space.
<br>
<p><span class="quotelev1">&gt; Interestingly enough, I just upgraded my cluster to PU_IAS 5.3, and  
</span><br>
<span class="quotelev1">&gt; now
</span><br>
<span class="quotelev1">&gt; I can't reproduce the problem but HPL fails with a segfault, which  
</span><br>
<span class="quotelev1">&gt; I'll
</span><br>
<span class="quotelev1">&gt; report in a separate e-mail to start a new thread for that problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Prentice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Could the nodes be running out of shared memory and/or temp  
</span><br>
<span class="quotelev2">&gt;&gt; filesystem
</span><br>
<span class="quotelev2">&gt;&gt; space?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 29, 2009, at 3:05 PM, Rolf vandeVaart wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have not seen this before.  I assume that for some reason, the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; shared memory transport layer cannot create the file it uses for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; communicating within a node.  Open MPI then selects some other
</span><br>
<span class="quotelev3">&gt;&gt;&gt; transport (TCP, openib) to communicate within the node so the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; program
</span><br>
<span class="quotelev3">&gt;&gt;&gt; runs fine.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The code has not changed that much from 1.2 to 1.3, but it is a  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; little
</span><br>
<span class="quotelev3">&gt;&gt;&gt; different.  Let me see if I can reproduce the problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Rolf
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Mostyn Lewis wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sort of ditto but with SVN release at 20123 (and earlier):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; e.g.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [r2250_46:30018] mca_common_sm_mmap_init: open
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /tmp/45139.1.all.q/openmpi-sessions-mostyn_at_r2250_46_0/25682/1/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; shared_mem_pool.r2250_46
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; failed with errno=2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [r2250_63:05292] mca_common_sm_mmap_init: open
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /tmp/45139.1.all.q/openmpi-sessions-mostyn_at_r2250_63_0/25682/1/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; shared_mem_pool.r2250_63
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; failed with errno=2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [r2250_57:17527] mca_common_sm_mmap_init: open
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /tmp/45139.1.all.q/openmpi-sessions-mostyn_at_r2250_57_0/25682/1/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; shared_mem_pool.r2250_57
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; failed with errno=2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [r2250_68:13553] mca_common_sm_mmap_init: open
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /tmp/45139.1.all.q/openmpi-sessions-mostyn_at_r2250_68_0/25682/1/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; shared_mem_pool.r2250_68
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; failed with errno=2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [r2250_50:06541] mca_common_sm_mmap_init: open
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /tmp/45139.1.all.q/openmpi-sessions-mostyn_at_r2250_50_0/25682/1/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; shared_mem_pool.r2250_50
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; failed with errno=2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [r2250_49:29237] mca_common_sm_mmap_init: open
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /tmp/45139.1.all.q/openmpi-sessions-mostyn_at_r2250_49_0/25682/1/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; shared_mem_pool.r2250_49
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; failed with errno=2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [r2250_66:19066] mca_common_sm_mmap_init: open
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /tmp/45139.1.all.q/openmpi-sessions-mostyn_at_r2250_66_0/25682/1/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; shared_mem_pool.r2250_66
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; failed with errno=2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [r2250_58:24902] mca_common_sm_mmap_init: open
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /tmp/45139.1.all.q/openmpi-sessions-mostyn_at_r2250_58_0/25682/1/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; shared_mem_pool.r2250_58
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; failed with errno=2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [r2250_69:27426] mca_common_sm_mmap_init: open
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /tmp/45139.1.all.q/openmpi-sessions-mostyn_at_r2250_69_0/25682/1/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; shared_mem_pool.r2250_69
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; failed with errno=2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [r2250_60:30560] mca_common_sm_mmap_init: open
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /tmp/45139.1.all.q/openmpi-sessions-mostyn_at_r2250_60_0/25682/1/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; shared_mem_pool.r2250_60
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; failed with errno=2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; File not found in sm.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 10 of them across 32 nodes (8 cores per node (2 sockets x quad- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; core))
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;Apparently harmless&quot;?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; DM
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Tue, 27 Jan 2009, Prentice Bisbal wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I just installed OpenMPI 1.3 with tight integration for SGE.  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Version
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 1.2.8 was working just fine for several months in the same  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; arrangement.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Now that I've upgraded to 1.3, I get the following errors in my
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; standard
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; error file:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mca_common_sm_mmap_init: open /tmp/968.1.all.q/openmpi-sessions- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; prent
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ice_at_node09.aurora_0/21400/1/shared_mem_pool.node09.aurora failed  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; with
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; errno=2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [node23.aurora:20601] mca_common_sm_mmap_init: open
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /tmp/968.1.all.q/openmpi-sessions-prent
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ice_at_node23.aurora_0/21400/1/shared_mem_pool.node23.aurora failed  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; with
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; errno=2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [node46.aurora:12118] mca_common_sm_mmap_init: open
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /tmp/968.1.all.q/openmpi-sessions-prent
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ice_at_node46.aurora_0/21400/1/shared_mem_pool.node46.aurora failed  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; with
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; errno=2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [node15.aurora:12421] mca_common_sm_mmap_init: open
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /tmp/968.1.all.q/openmpi-sessions-prent
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ice_at_node15.aurora_0/21400/1/shared_mem_pool.node15.aurora failed  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; with
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; errno=2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [node20.aurora:12534] mca_common_sm_mmap_init: open
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /tmp/968.1.all.q/openmpi-sessions-prent
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ice_at_node20.aurora_0/21400/1/shared_mem_pool.node20.aurora failed  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; with
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; errno=2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [node16.aurora:12573] mca_common_sm_mmap_init: open
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /tmp/968.1.all.q/openmpi-sessions-prent
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ice_at_node16.aurora_0/21400/1/shared_mem_pool.node16.aurora failed  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; with
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; errno=2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I've tested 3-4 different times, and the number of hosts that  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; produces
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; this error varies, as well as which hosts produce this error. My
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; program
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; seems to run fun, but it's just a simple &quot;Hello, World!&quot;  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; program. Any
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ideas? Is this a bug in 1.3?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
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
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7947.php">Jeff Squyres: "Re: [OMPI users] signal 15 (terminated)"</a>
<li><strong>Previous message:</strong> <a href="7945.php">Jeff Squyres: "Re: [OMPI users] Open MPI error"</a>
<li><strong>In reply to:</strong> <a href="7940.php">Prentice Bisbal: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7951.php">Prentice Bisbal: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
<li><strong>Reply:</strong> <a href="7951.php">Prentice Bisbal: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
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
