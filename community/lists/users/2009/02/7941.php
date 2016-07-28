<?
$subject_val = "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  2 16:55:11 2009" -->
<!-- isoreceived="20090202215511" -->
<!-- sent="Mon, 02 Feb 2009 16:55:07 -0500" -->
<!-- isosent="20090202215507" -->
<!-- name="Prentice Bisbal" -->
<!-- email="prentice_at_[hidden]" -->
<!-- subject="Re: [OMPI users] v1.3: mca_common_sm_mmap_init error" -->
<!-- id="49876BBB.20901_at_ias.edu" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Prentice Bisbal (<em>prentice_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-02 16:55:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7942.php">Rainer Keller: "Re: [OMPI users] Open mpi 123 install error for BLACS"</a>
<li><strong>Previous message:</strong> <a href="7940.php">Prentice Bisbal: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
<li><strong>In reply to:</strong> <a href="7940.php">Prentice Bisbal: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7946.php">Jeff Squyres: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is there anyone else who experienced this problem with a HEL-based
<br>
distro that can upgrade to 5.3 to confirm my experience?
<br>
<p><pre>
--
Prentice
Prentice Bisbal wrote:
&gt; No. I was running just a simple &quot;Hello, world&quot; program to test v1.3 when
&gt; these errors occured. And as soon as I reverted to 1.2.8, the errors
&gt; disappeared.
&gt; 
&gt; Interestingly enough, I just upgraded my cluster to PU_IAS 5.3, and now
&gt; I can't reproduce the problem but HPL fails with a segfault, which I'll
&gt; report in a separate e-mail to start a new thread for that problem.
&gt; 
&gt; --
&gt; Prentice
&gt; 
&gt; Jeff Squyres wrote:
&gt;&gt; Could the nodes be running out of shared memory and/or temp filesystem
&gt;&gt; space?
&gt;&gt;
&gt;&gt;
&gt;&gt; On Jan 29, 2009, at 3:05 PM, Rolf vandeVaart wrote:
&gt;&gt;
&gt;&gt;&gt; I have not seen this before.  I assume that for some reason, the
&gt;&gt;&gt; shared memory transport layer cannot create the file it uses for
&gt;&gt;&gt; communicating within a node.  Open MPI then selects some other
&gt;&gt;&gt; transport (TCP, openib) to communicate within the node so the program
&gt;&gt;&gt; runs fine.
&gt;&gt;&gt;
&gt;&gt;&gt; The code has not changed that much from 1.2 to 1.3, but it is a little
&gt;&gt;&gt; different.  Let me see if I can reproduce the problem.
&gt;&gt;&gt;
&gt;&gt;&gt; Rolf
&gt;&gt;&gt;
&gt;&gt;&gt; Mostyn Lewis wrote:
&gt;&gt;&gt;&gt; Sort of ditto but with SVN release at 20123 (and earlier):
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; e.g.
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; [r2250_46:30018] mca_common_sm_mmap_init: open
&gt;&gt;&gt;&gt; /tmp/45139.1.all.q/openmpi-sessions-mostyn_at_r2250_46_0/25682/1/shared_mem_pool.r2250_46
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; failed with errno=2
&gt;&gt;&gt;&gt; [r2250_63:05292] mca_common_sm_mmap_init: open
&gt;&gt;&gt;&gt; /tmp/45139.1.all.q/openmpi-sessions-mostyn_at_r2250_63_0/25682/1/shared_mem_pool.r2250_63
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; failed with errno=2
&gt;&gt;&gt;&gt; [r2250_57:17527] mca_common_sm_mmap_init: open
&gt;&gt;&gt;&gt; /tmp/45139.1.all.q/openmpi-sessions-mostyn_at_r2250_57_0/25682/1/shared_mem_pool.r2250_57
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; failed with errno=2
&gt;&gt;&gt;&gt; [r2250_68:13553] mca_common_sm_mmap_init: open
&gt;&gt;&gt;&gt; /tmp/45139.1.all.q/openmpi-sessions-mostyn_at_r2250_68_0/25682/1/shared_mem_pool.r2250_68
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; failed with errno=2
&gt;&gt;&gt;&gt; [r2250_50:06541] mca_common_sm_mmap_init: open
&gt;&gt;&gt;&gt; /tmp/45139.1.all.q/openmpi-sessions-mostyn_at_r2250_50_0/25682/1/shared_mem_pool.r2250_50
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; failed with errno=2
&gt;&gt;&gt;&gt; [r2250_49:29237] mca_common_sm_mmap_init: open
&gt;&gt;&gt;&gt; /tmp/45139.1.all.q/openmpi-sessions-mostyn_at_r2250_49_0/25682/1/shared_mem_pool.r2250_49
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; failed with errno=2
&gt;&gt;&gt;&gt; [r2250_66:19066] mca_common_sm_mmap_init: open
&gt;&gt;&gt;&gt; /tmp/45139.1.all.q/openmpi-sessions-mostyn_at_r2250_66_0/25682/1/shared_mem_pool.r2250_66
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; failed with errno=2
&gt;&gt;&gt;&gt; [r2250_58:24902] mca_common_sm_mmap_init: open
&gt;&gt;&gt;&gt; /tmp/45139.1.all.q/openmpi-sessions-mostyn_at_r2250_58_0/25682/1/shared_mem_pool.r2250_58
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; failed with errno=2
&gt;&gt;&gt;&gt; [r2250_69:27426] mca_common_sm_mmap_init: open
&gt;&gt;&gt;&gt; /tmp/45139.1.all.q/openmpi-sessions-mostyn_at_r2250_69_0/25682/1/shared_mem_pool.r2250_69
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; failed with errno=2
&gt;&gt;&gt;&gt; [r2250_60:30560] mca_common_sm_mmap_init: open
&gt;&gt;&gt;&gt; /tmp/45139.1.all.q/openmpi-sessions-mostyn_at_r2250_60_0/25682/1/shared_mem_pool.r2250_60
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; failed with errno=2
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; File not found in sm.
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; 10 of them across 32 nodes (8 cores per node (2 sockets x quad-core))
&gt;&gt;&gt;&gt; &quot;Apparently harmless&quot;?
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; DM
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; On Tue, 27 Jan 2009, Prentice Bisbal wrote:
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; I just installed OpenMPI 1.3 with tight integration for SGE. Version
&gt;&gt;&gt;&gt;&gt; 1.2.8 was working just fine for several months in the same arrangement.
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; Now that I've upgraded to 1.3, I get the following errors in my
&gt;&gt;&gt;&gt;&gt; standard
&gt;&gt;&gt;&gt;&gt; error file:
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; mca_common_sm_mmap_init: open /tmp/968.1.all.q/openmpi-sessions-prent
&gt;&gt;&gt;&gt;&gt; ice_at_node09.aurora_0/21400/1/shared_mem_pool.node09.aurora failed with
&gt;&gt;&gt;&gt;&gt; errno=2
&gt;&gt;&gt;&gt;&gt; [node23.aurora:20601] mca_common_sm_mmap_init: open
&gt;&gt;&gt;&gt;&gt; /tmp/968.1.all.q/openmpi-sessions-prent
&gt;&gt;&gt;&gt;&gt; ice_at_node23.aurora_0/21400/1/shared_mem_pool.node23.aurora failed with
&gt;&gt;&gt;&gt;&gt; errno=2
&gt;&gt;&gt;&gt;&gt; [node46.aurora:12118] mca_common_sm_mmap_init: open
&gt;&gt;&gt;&gt;&gt; /tmp/968.1.all.q/openmpi-sessions-prent
&gt;&gt;&gt;&gt;&gt; ice_at_node46.aurora_0/21400/1/shared_mem_pool.node46.aurora failed with
&gt;&gt;&gt;&gt;&gt; errno=2
&gt;&gt;&gt;&gt;&gt; [node15.aurora:12421] mca_common_sm_mmap_init: open
&gt;&gt;&gt;&gt;&gt; /tmp/968.1.all.q/openmpi-sessions-prent
&gt;&gt;&gt;&gt;&gt; ice_at_node15.aurora_0/21400/1/shared_mem_pool.node15.aurora failed with
&gt;&gt;&gt;&gt;&gt; errno=2
&gt;&gt;&gt;&gt;&gt; [node20.aurora:12534] mca_common_sm_mmap_init: open
&gt;&gt;&gt;&gt;&gt; /tmp/968.1.all.q/openmpi-sessions-prent
&gt;&gt;&gt;&gt;&gt; ice_at_node20.aurora_0/21400/1/shared_mem_pool.node20.aurora failed with
&gt;&gt;&gt;&gt;&gt; errno=2
&gt;&gt;&gt;&gt;&gt; [node16.aurora:12573] mca_common_sm_mmap_init: open
&gt;&gt;&gt;&gt;&gt; /tmp/968.1.all.q/openmpi-sessions-prent
&gt;&gt;&gt;&gt;&gt; ice_at_node16.aurora_0/21400/1/shared_mem_pool.node16.aurora failed with
&gt;&gt;&gt;&gt;&gt; errno=2
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; I've tested 3-4 different times, and the number of hosts that produces
&gt;&gt;&gt;&gt;&gt; this error varies, as well as which hosts produce this error. My
&gt;&gt;&gt;&gt;&gt; program
&gt;&gt;&gt;&gt;&gt; seems to run fun, but it's just a simple &quot;Hello, World!&quot; program. Any
&gt;&gt;&gt;&gt;&gt; ideas? Is this a bug in 1.3?
&gt;&gt;&gt;&gt;&gt;
&gt; 
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; 
-- 
Prentice
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7942.php">Rainer Keller: "Re: [OMPI users] Open mpi 123 install error for BLACS"</a>
<li><strong>Previous message:</strong> <a href="7940.php">Prentice Bisbal: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
<li><strong>In reply to:</strong> <a href="7940.php">Prentice Bisbal: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7946.php">Jeff Squyres: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
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
