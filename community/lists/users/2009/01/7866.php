<?
$subject_val = "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 27 21:00:40 2009" -->
<!-- isoreceived="20090128020040" -->
<!-- sent="Tue, 27 Jan 2009 18:00:31 -0800 (PST)" -->
<!-- isosent="20090128020031" -->
<!-- name="Mostyn Lewis" -->
<!-- email="Mostyn.Lewis_at_[hidden]" -->
<!-- subject="Re: [OMPI users] v1.3: mca_common_sm_mmap_init error" -->
<!-- id="Pine.GSO.4.64.0901271754260.3632_at_aragorn.brc.West.Sun.COM" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="497F8503.6040008_at_ias.edu" -->
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
<strong>From:</strong> Mostyn Lewis (<em>Mostyn.Lewis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-27 21:00:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7867.php">Raymond Wan: "Re: [OMPI users] Compilers"</a>
<li><strong>Previous message:</strong> <a href="7865.php">Prentice Bisbal: "[OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
<li><strong>In reply to:</strong> <a href="7865.php">Prentice Bisbal: "[OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7882.php">Rolf vandeVaart: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
<li><strong>Reply:</strong> <a href="7882.php">Rolf vandeVaart: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sort of ditto but with SVN release at 20123 (and earlier):
<br>
<p>e.g.
<br>
<p>[r2250_46:30018] mca_common_sm_mmap_init: open /tmp/45139.1.all.q/openmpi-sessions-mostyn_at_r2250_46_0/25682/1/shared_mem_pool.r2250_46
<br>
&nbsp;&nbsp;failed with errno=2
<br>
[r2250_63:05292] mca_common_sm_mmap_init: open /tmp/45139.1.all.q/openmpi-sessions-mostyn_at_r2250_63_0/25682/1/shared_mem_pool.r2250_63
<br>
&nbsp;&nbsp;failed with errno=2
<br>
[r2250_57:17527] mca_common_sm_mmap_init: open /tmp/45139.1.all.q/openmpi-sessions-mostyn_at_r2250_57_0/25682/1/shared_mem_pool.r2250_57
<br>
&nbsp;&nbsp;failed with errno=2
<br>
[r2250_68:13553] mca_common_sm_mmap_init: open /tmp/45139.1.all.q/openmpi-sessions-mostyn_at_r2250_68_0/25682/1/shared_mem_pool.r2250_68
<br>
&nbsp;&nbsp;failed with errno=2
<br>
[r2250_50:06541] mca_common_sm_mmap_init: open /tmp/45139.1.all.q/openmpi-sessions-mostyn_at_r2250_50_0/25682/1/shared_mem_pool.r2250_50
<br>
&nbsp;&nbsp;failed with errno=2
<br>
[r2250_49:29237] mca_common_sm_mmap_init: open /tmp/45139.1.all.q/openmpi-sessions-mostyn_at_r2250_49_0/25682/1/shared_mem_pool.r2250_49
<br>
&nbsp;&nbsp;failed with errno=2
<br>
[r2250_66:19066] mca_common_sm_mmap_init: open /tmp/45139.1.all.q/openmpi-sessions-mostyn_at_r2250_66_0/25682/1/shared_mem_pool.r2250_66
<br>
&nbsp;&nbsp;failed with errno=2
<br>
[r2250_58:24902] mca_common_sm_mmap_init: open /tmp/45139.1.all.q/openmpi-sessions-mostyn_at_r2250_58_0/25682/1/shared_mem_pool.r2250_58
<br>
&nbsp;&nbsp;failed with errno=2
<br>
[r2250_69:27426] mca_common_sm_mmap_init: open /tmp/45139.1.all.q/openmpi-sessions-mostyn_at_r2250_69_0/25682/1/shared_mem_pool.r2250_69
<br>
&nbsp;&nbsp;failed with errno=2
<br>
[r2250_60:30560] mca_common_sm_mmap_init: open /tmp/45139.1.all.q/openmpi-sessions-mostyn_at_r2250_60_0/25682/1/shared_mem_pool.r2250_60
<br>
&nbsp;&nbsp;failed with errno=2
<br>
<p>File not found in sm.
<br>
<p>10 of them across 32 nodes (8 cores per node (2 sockets x quad-core))
<br>
&quot;Apparently harmless&quot;?
<br>
<p>DM
<br>
<p>On Tue, 27 Jan 2009, Prentice Bisbal wrote:
<br>
<p><span class="quotelev1">&gt; I just installed OpenMPI 1.3 with tight integration for SGE. Version
</span><br>
<span class="quotelev1">&gt; 1.2.8 was working just fine for several months in the same arrangement.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now that I've upgraded to 1.3, I get the following errors in my standard
</span><br>
<span class="quotelev1">&gt; error file:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mca_common_sm_mmap_init: open /tmp/968.1.all.q/openmpi-sessions-prent
</span><br>
<span class="quotelev1">&gt; ice_at_node09.aurora_0/21400/1/shared_mem_pool.node09.aurora failed with
</span><br>
<span class="quotelev1">&gt; errno=2
</span><br>
<span class="quotelev1">&gt; [node23.aurora:20601] mca_common_sm_mmap_init: open
</span><br>
<span class="quotelev1">&gt; /tmp/968.1.all.q/openmpi-sessions-prent
</span><br>
<span class="quotelev1">&gt; ice_at_node23.aurora_0/21400/1/shared_mem_pool.node23.aurora failed with
</span><br>
<span class="quotelev1">&gt; errno=2
</span><br>
<span class="quotelev1">&gt; [node46.aurora:12118] mca_common_sm_mmap_init: open
</span><br>
<span class="quotelev1">&gt; /tmp/968.1.all.q/openmpi-sessions-prent
</span><br>
<span class="quotelev1">&gt; ice_at_node46.aurora_0/21400/1/shared_mem_pool.node46.aurora failed with
</span><br>
<span class="quotelev1">&gt; errno=2
</span><br>
<span class="quotelev1">&gt; [node15.aurora:12421] mca_common_sm_mmap_init: open
</span><br>
<span class="quotelev1">&gt; /tmp/968.1.all.q/openmpi-sessions-prent
</span><br>
<span class="quotelev1">&gt; ice_at_node15.aurora_0/21400/1/shared_mem_pool.node15.aurora failed with
</span><br>
<span class="quotelev1">&gt; errno=2
</span><br>
<span class="quotelev1">&gt; [node20.aurora:12534] mca_common_sm_mmap_init: open
</span><br>
<span class="quotelev1">&gt; /tmp/968.1.all.q/openmpi-sessions-prent
</span><br>
<span class="quotelev1">&gt; ice_at_node20.aurora_0/21400/1/shared_mem_pool.node20.aurora failed with
</span><br>
<span class="quotelev1">&gt; errno=2
</span><br>
<span class="quotelev1">&gt; [node16.aurora:12573] mca_common_sm_mmap_init: open
</span><br>
<span class="quotelev1">&gt; /tmp/968.1.all.q/openmpi-sessions-prent
</span><br>
<span class="quotelev1">&gt; ice_at_node16.aurora_0/21400/1/shared_mem_pool.node16.aurora failed with
</span><br>
<span class="quotelev1">&gt; errno=2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've tested 3-4 different times, and the number of hosts that produces
</span><br>
<span class="quotelev1">&gt; this error varies, as well as which hosts produce this error. My program
</span><br>
<span class="quotelev1">&gt; seems to run fun, but it's just a simple &quot;Hello, World!&quot; program. Any
</span><br>
<span class="quotelev1">&gt; ideas? Is this a bug in 1.3?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Prentice
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Prentice Bisbal
</span><br>
<span class="quotelev1">&gt; Linux Software Support Specialist/System Administrator
</span><br>
<span class="quotelev1">&gt; School of Natural Sciences
</span><br>
<span class="quotelev1">&gt; Institute for Advanced Study
</span><br>
<span class="quotelev1">&gt; Princeton, NJ
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7867.php">Raymond Wan: "Re: [OMPI users] Compilers"</a>
<li><strong>Previous message:</strong> <a href="7865.php">Prentice Bisbal: "[OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
<li><strong>In reply to:</strong> <a href="7865.php">Prentice Bisbal: "[OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7882.php">Rolf vandeVaart: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
<li><strong>Reply:</strong> <a href="7882.php">Rolf vandeVaart: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
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
