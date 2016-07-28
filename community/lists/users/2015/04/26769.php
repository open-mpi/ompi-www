<?
$subject_val = "Re: [OMPI users] MPI_Finalize not behaving correctly, orphaned processes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 23 10:14:43 2015" -->
<!-- isoreceived="20150423141443" -->
<!-- sent="Thu, 23 Apr 2015 08:14:41 -0600" -->
<!-- isosent="20150423141441" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Finalize not behaving correctly, orphaned processes" -->
<!-- id="CAF1Cqj4fmGKrNcrpYG=y6ju_qECuP-2r07TjYO=Cw3_8nTCpTw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-23 10:14:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26770.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_Finalize not behaving correctly, orphaned processes"</a>
<li><strong>Previous message:</strong> <a href="26768.php">Mike Dubman: "Re: [OMPI users] MPI_THREAD_MULTIPLE and openib btl"</a>
<li><strong>In reply to:</strong> <a href="26765.php">Galloway, Jack D: "[OMPI users] MPI_Finalize not behaving correctly, orphaned processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26772.php">Galloway, Jack D: "Re: [OMPI users] MPI_Finalize not behaving correctly, orphaned processes"</a>
<li><strong>Reply:</strong> <a href="26772.php">Galloway, Jack D: "Re: [OMPI users] MPI_Finalize not behaving correctly, orphaned processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jack,
<br>
<p>Are you using a system at LANL? Maybe I could try to reproduce the problem
<br>
on the system you are using.  The system call stuff adds a certain bit of
<br>
zest to the problem.  does the app make fortran system calls to do the
<br>
copying and pasting?
<br>
<p>Howard
<br>
On Apr 22, 2015 4:24 PM, &quot;Galloway, Jack D&quot; &lt;jackg_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;   I have an MPI program that is fairly straight forward, essentially
</span><br>
<span class="quotelev1">&gt; &quot;initialize, 2 sends from master to slaves, 2 receives on slaves, do a
</span><br>
<span class="quotelev1">&gt; bunch of system calls for copying/pasting then running a serial code on
</span><br>
<span class="quotelev1">&gt; each mpi task, tidy up and mpi finalize&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This seems straightforward, but I'm not getting mpi_finalize to work
</span><br>
<span class="quotelev1">&gt; correctly. Below is a snapshot of the program, without all the system
</span><br>
<span class="quotelev1">&gt; copy/paste/call external code which I've rolled up in &quot;do codish stuff&quot;
</span><br>
<span class="quotelev1">&gt; type statements.
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
<span class="quotelev1">&gt; Now the problem I am seeing occurs around the &quot;got here4&quot;, &quot;got here5&quot; and
</span><br>
<span class="quotelev1">&gt; &quot;got here6&quot; statements. I get the appropriate number of print statements
</span><br>
<span class="quotelev1">&gt; with corresponding ranks for &quot;got here4&quot;, as well as &quot;got here5&quot;. Meaning,
</span><br>
<span class="quotelev1">&gt; the master and all the slaves (rank 0, and all other ranks) got to the
</span><br>
<span class="quotelev1">&gt; barrier call, through the barrier call, and to MPI_FINALIZE, reporting 0
</span><br>
<span class="quotelev1">&gt; for ierr on all of them. However, when it gets to &quot;got here6&quot;, after the
</span><br>
<span class="quotelev1">&gt; MPI_FINALIZE I'll get all kinds of weird behavior. Sometimes I'll get one
</span><br>
<span class="quotelev1">&gt; less &quot;got here6&quot; than I expect, or sometimes I'll get eight less (it
</span><br>
<span class="quotelev1">&gt; varies), however the program hangs forever, never closing and leaves an
</span><br>
<span class="quotelev1">&gt; orphaned process on one (or more) of the compute nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am running this on an infiniband backbone machine, with the NFS server
</span><br>
<span class="quotelev1">&gt; shared over infiniband (nfs-rdma). I'm trying to determine how the
</span><br>
<span class="quotelev1">&gt; MPI_BARRIER call works fine, yet MPI_FINALIZE ends up with random orphaned
</span><br>
<span class="quotelev1">&gt; runs (not the same node, nor the same number of orphans every time). I'm
</span><br>
<span class="quotelev1">&gt; guessing it is related to the various system calls to cp, mv,
</span><br>
<span class="quotelev1">&gt; ./run_some_code, cp, mv but wasn't sure if it may be related to the speed
</span><br>
<span class="quotelev1">&gt; of infiniband too, as all this happens fairly quickly. I could have wrong
</span><br>
<span class="quotelev1">&gt; intuition as well. Anybody have thoughts? I could put the whole code if
</span><br>
<span class="quotelev1">&gt; helpful, but this condensed version I believe captures it. I'm running
</span><br>
<span class="quotelev1">&gt; openmpi1.8.4 compiled against ifort 15.0.2 , with Mellanox adapters running
</span><br>
<span class="quotelev1">&gt; firmware 2.9.1000.  This is the mellanox firmware available through yum
</span><br>
<span class="quotelev1">&gt; with centos 6.5, 2.6.32-504.8.1.el6.x86_64.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ib0       Link encap:InfiniBand  HWaddr
</span><br>
<span class="quotelev1">&gt; 80:00:00:48:FE:80:00:00:00:00:00:00:00:00:00:00:00:00:00:00
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
<span class="quotelev1">&gt; This problem only occurs in this simple implementation, thus my thinking
</span><br>
<span class="quotelev1">&gt; it is tied to the system calls.  I run several other, much larger, much
</span><br>
<span class="quotelev1">&gt; more robust MPI codes without issue on the machine.  Thanks for the help.
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/04/26765.php">http://www.open-mpi.org/community/lists/users/2015/04/26765.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26769/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26770.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_Finalize not behaving correctly, orphaned processes"</a>
<li><strong>Previous message:</strong> <a href="26768.php">Mike Dubman: "Re: [OMPI users] MPI_THREAD_MULTIPLE and openib btl"</a>
<li><strong>In reply to:</strong> <a href="26765.php">Galloway, Jack D: "[OMPI users] MPI_Finalize not behaving correctly, orphaned processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26772.php">Galloway, Jack D: "Re: [OMPI users] MPI_Finalize not behaving correctly, orphaned processes"</a>
<li><strong>Reply:</strong> <a href="26772.php">Galloway, Jack D: "Re: [OMPI users] MPI_Finalize not behaving correctly, orphaned processes"</a>
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
