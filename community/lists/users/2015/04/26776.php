<?
$subject_val = "Re: [OMPI users] MPI_Finalize not behaving correctly, orphaned processes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 23 21:37:53 2015" -->
<!-- isoreceived="20150424013753" -->
<!-- sent="Fri, 24 Apr 2015 01:37:45 +0000" -->
<!-- isosent="20150424013745" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Finalize not behaving correctly, orphaned processes" -->
<!-- id="1772D3CC-0012-4040-9B8D-4140DC0D8299_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAF1Cqj7J7kqKCVC_JxpBvWescYNSiQZ2+0et5SmH-ZxAMH7eiw_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-04-23 21:37:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26777.php">Subhra Mazumdar: "Re: [OMPI users] MPI_THREAD_MULTIPLE and openib btl"</a>
<li><strong>Previous message:</strong> <a href="26775.php">Howard Pritchard: "Re: [OMPI users] MPI_Finalize not behaving correctly, orphaned processes"</a>
<li><strong>In reply to:</strong> <a href="26775.php">Howard Pritchard: "Re: [OMPI users] MPI_Finalize not behaving correctly, orphaned processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26778.php">Mike Dubman: "Re: [OMPI users] MPI_Finalize not behaving correctly, orphaned processes"</a>
<li><strong>Reply:</strong> <a href="26778.php">Mike Dubman: "Re: [OMPI users] MPI_Finalize not behaving correctly, orphaned processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Disable the memory manager / don't use leave pinned.  Then you can fork/exec without fear (because only MPI will have registered memory -- it'll never leave user buffers registered after MPI communications finish).
<br>

<br>

<br>
<span class="quotelev1">&gt; On Apr 23, 2015, at 9:25 PM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; this is kind of a lanl thing. Jack and I are working offline.  any suggestions about openib and fork/exec may be useful however...and don't say no to fork/exec not at least if you dream of mpi in the data center.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 23, 2015 10:49 AM, &quot;Galloway, Jack D&quot; &lt;jackg_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; I am using a &#226;&#128;&#156;homecooked&#226;&#128;&#157; cluster at LANL, ~500 cores.  There are a whole bunch of fortran system calls doing the copying and pasting.  The full code is attached here, a bunch of if-then statements for user options.  Thanks for the help.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --Jack Galloway
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Howard Pritchard
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, April 23, 2015 8:15 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] MPI_Finalize not behaving correctly, orphaned processes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Jack,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are you using a system at LANL? Maybe I could try to reproduce the problem on the system you are using.  The system call stuff adds a certain bit of zest to the problem.  does the app make fortran system calls to do the copying and pasting?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Howard
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 22, 2015 4:24 PM, &quot;Galloway, Jack D&quot; &lt;jackg_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have an MPI program that is fairly straight forward, essentially &quot;initialize, 2 sends from master to slaves, 2 receives on slaves, do a bunch of system calls for copying/pasting then running a serial code on each mpi task, tidy up and mpi finalize&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This seems straightforward, but I'm not getting mpi_finalize to work correctly. Below is a snapshot of the program, without all the system copy/paste/call external code which I've rolled up in &quot;do codish stuff&quot; type statements.
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
<span class="quotelev1">&gt; Now the problem I am seeing occurs around the &quot;got here4&quot;, &quot;got here5&quot; and &quot;got here6&quot; statements. I get the appropriate number of print statements with corresponding ranks for &quot;got here4&quot;, as well as &quot;got here5&quot;. Meaning, the master and all the slaves (rank 0, and all other ranks) got to the barrier call, through the barrier call, and to MPI_FINALIZE, reporting 0 for ierr on all of them. However, when it gets to &quot;got here6&quot;, after the MPI_FINALIZE I'll get all kinds of weird behavior. Sometimes I'll get one less &quot;got here6&quot; than I expect, or sometimes I'll get eight less (it varies), however the program hangs forever, never closing and leaves an orphaned process on one (or more) of the compute nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am running this on an infiniband backbone machine, with the NFS server shared over infiniband (nfs-rdma). I'm trying to determine how the MPI_BARRIER call works fine, yet MPI_FINALIZE ends up with random orphaned runs (not the same node, nor the same number of orphans every time). I'm guessing it is related to the various system calls to cp, mv, ./run_some_code, cp, mv but wasn't sure if it may be related to the speed of infiniband too, as all this happens fairly quickly. I could have wrong intuition as well. Anybody have thoughts? I could put the whole code if helpful, but this condensed version I believe captures it. I'm running openmpi1.8.4 compiled against ifort 15.0.2 , with Mellanox adapters running firmware 2.9.1000.  This is the mellanox firmware available through yum with centos 6.5, 2.6.32-504.8.1.el6.x86_64.
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
<span class="quotelev1">&gt; This problem only occurs in this simple implementation, thus my thinking it is tied to the system calls.  I run several other, much larger, much more robust MPI codes without issue on the machine.  Thanks for the help.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --Jack
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26765.php">http://www.open-mpi.org/community/lists/users/2015/04/26765.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26772.php">http://www.open-mpi.org/community/lists/users/2015/04/26772.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26775.php">http://www.open-mpi.org/community/lists/users/2015/04/26775.php</a>
</span><br>

<br>

<br>
-- 
<br>
Jeff Squyres
<br>
jsquyres_at_[hidden]
<br>
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>

<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26777.php">Subhra Mazumdar: "Re: [OMPI users] MPI_THREAD_MULTIPLE and openib btl"</a>
<li><strong>Previous message:</strong> <a href="26775.php">Howard Pritchard: "Re: [OMPI users] MPI_Finalize not behaving correctly, orphaned processes"</a>
<li><strong>In reply to:</strong> <a href="26775.php">Howard Pritchard: "Re: [OMPI users] MPI_Finalize not behaving correctly, orphaned processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26778.php">Mike Dubman: "Re: [OMPI users] MPI_Finalize not behaving correctly, orphaned processes"</a>
<li><strong>Reply:</strong> <a href="26778.php">Mike Dubman: "Re: [OMPI users] MPI_Finalize not behaving correctly, orphaned processes"</a>
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
