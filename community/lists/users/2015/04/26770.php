<?
$subject_val = "Re: [OMPI users] MPI_Finalize not behaving correctly, orphaned processes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 23 10:18:48 2015" -->
<!-- isoreceived="20150423141848" -->
<!-- sent="Thu, 23 Apr 2015 14:18:47 +0000" -->
<!-- isosent="20150423141847" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Finalize not behaving correctly, orphaned processes" -->
<!-- id="9E6848C6-BD3D-4079-BEAF-B79942A45760_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="B2B766770F518A4EA4567774C593969831AFF5F5_at_ECS-EXG-P-MB07.win.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Finalize not behaving correctly, orphaned processes<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-23 10:18:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26771.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Questions regarding MPI_T performance variables and	Collective tuning"</a>
<li><strong>Previous message:</strong> <a href="26769.php">Howard Pritchard: "Re: [OMPI users] MPI_Finalize not behaving correctly, orphaned processes"</a>
<li><strong>In reply to:</strong> <a href="26765.php">Galloway, Jack D: "[OMPI users] MPI_Finalize not behaving correctly, orphaned processes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you send your full Fortran test program?
<br>
<p><span class="quotelev1">&gt; On Apr 22, 2015, at 6:24 PM, Galloway, Jack D &lt;jackg_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have an MPI program that is fairly straight forward, essentially &quot;initialize, 2 sends from master to slaves, 2 receives on slaves, do a bunch ofsystem calls for copying/pasting then running a serial code on each mpi task, tidy up and mpi finalize&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This seems straightforward, but I'm not getting mpi_finalize to work correctly. Below is a snapshot of the program, without all the systemcopy/paste/call external code which I've rolled up in &quot;do codish stuff&quot; type statements.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; program mpi_finalize_break
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; !&lt;variable declarations&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; call MPI_INIT(ierr)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; icomm = MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; call MPI_COMM_SIZE(icomm,nproc,ierr)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; call MPI_COMM_RANK(icomm,rank,ierr)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; !&lt;do codish stuff for a while&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; if (rank == 0) then
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     !&lt;set up some stuff then call MPI_SEND in a loop over number of slaves&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     call MPI_SEND(numat,1,MPI_INTEGER,n,0,icomm,ierr)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     call MPI_SEND(n_to_add,1,MPI_INTEGER,n,0,icomm,ierr)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; else
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     call MPI_Recv(begin_mat,1,MPI_INTEGER,0,0,icomm,status,ierr)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     call MPI_Recv(nrepeat,1,MPI_INTEGER,0,0,icomm,status,ierr)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     !&lt;do codish stuff for a while&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; print*, &quot;got here4&quot;, rank
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; call MPI_BARRIER(icomm,ierr)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; print*, &quot;got here5&quot;, rank, ierr
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; call MPI_FINALIZE(ierr)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; print*, &quot;got here6&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; end program mpi_finalize_break
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now the problem I am seeing occurs around the &quot;got here4&quot;, &quot;got here5&quot; and &quot;got here6&quot; statements. I get the appropriate number of print(it varies), however the program hangs forever, never closing and leaves an orphaned process on one (or more) of the compute nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am running this on an infiniband backbone machine, with the NFS server shared over infiniband (nfs-rdma). I'm trying to determine how the running firmware 2.9.1000.  This is the mellanox firmware available through yum with centos 6.5, 2.6.32-504.8.1.el6.x86_64.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ib0       Link encap:InfiniBand  HWaddr 80:00:00:48:FE:80:00:00:00:00:00:00:00:00:00:00:00:00:00:00 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;           inet addr:192.168.6.254  Bcast:192.168.6.255  Mask:255.255.255.0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;           inet6 addr: fe80::202:c903:57:e7fd/64 Scope:Link
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;           UP BROADCAST RUNNING MULTICAST  MTU:2044  Metric:1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;           RX packets:10952 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;           TX packets:9805 errors:0 dropped:625413 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;           collisions:0 txqueuelen:256
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;           RX bytes:830040 (810.5 KiB)  TX bytes:643212 (628.1 KiB)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hca_id: mlx4_0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         transport:                      InfiniBand (0)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         fw_ver:                         2.9.1000
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         node_guid:                      0002:c903:0057:e7fc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         sys_image_guid:                 0002:c903:0057:e7ff
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         vendor_id:                      0x02c9
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         vendor_part_id:                 26428
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         hw_ver:                         0xB0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         board_id:                       MT_0D90110009
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         phys_port_cnt:                  1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                 port:   1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                         state:                  PORT_ACTIVE (4)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                         max_mtu:                4096 (5)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                         active_mtu:             4096 (5)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                         sm_lid:                 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                         port_lid:               2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                         port_lmc:               0x00
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                         link_layer:             InfiniBand
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This problem only occurs in this simple implementation, thus my thinking it is tied to the system calls.  I run several other, much larger, muchmore robust MPI codes without issue on the machine.  Thanks for the help.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --Jack
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26765.php">http://www.open-mpi.org/community/lists/users/2015/04/26765.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26771.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Questions regarding MPI_T performance variables and	Collective tuning"</a>
<li><strong>Previous message:</strong> <a href="26769.php">Howard Pritchard: "Re: [OMPI users] MPI_Finalize not behaving correctly, orphaned processes"</a>
<li><strong>In reply to:</strong> <a href="26765.php">Galloway, Jack D: "[OMPI users] MPI_Finalize not behaving correctly, orphaned processes"</a>
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
