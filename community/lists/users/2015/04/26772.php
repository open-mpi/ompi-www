<?
$subject_val = "Re: [OMPI users] MPI_Finalize not behaving correctly, orphaned processes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 23 12:49:08 2015" -->
<!-- isoreceived="20150423164908" -->
<!-- sent="Thu, 23 Apr 2015 16:49:05 +0000" -->
<!-- isosent="20150423164905" -->
<!-- name="Galloway, Jack D" -->
<!-- email="jackg_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Finalize not behaving correctly, orphaned processes" -->
<!-- id="B2B766770F518A4EA4567774C593969831B00694_at_ECS-EXG-P-MB07.win.lanl.gov" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAF1Cqj4fmGKrNcrpYG=y6ju_qECuP-2r07TjYO=Cw3_8nTCpTw_at_mail.gmail.com" -->
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
<strong>From:</strong> Galloway, Jack D (<em>jackg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-23 12:49:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26773.php">rebonatto_at_[hidden]: "[OMPI users] help in execution mpi"</a>
<li><strong>Previous message:</strong> <a href="26771.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Questions regarding MPI_T performance variables and	Collective tuning"</a>
<li><strong>In reply to:</strong> <a href="26769.php">Howard Pritchard: "Re: [OMPI users] MPI_Finalize not behaving correctly, orphaned processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26775.php">Howard Pritchard: "Re: [OMPI users] MPI_Finalize not behaving correctly, orphaned processes"</a>
<li><strong>Reply:</strong> <a href="26775.php">Howard Pritchard: "Re: [OMPI users] MPI_Finalize not behaving correctly, orphaned processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am using a &#226;&#128;&#156;homecooked&#226;&#128;&#157; cluster at LANL, ~500 cores.  There are a whole bunch of fortran system calls doing the copying and pasting.  The full code is attached here, a bunch of if-then statements for user options.  Thanks for the help.
<br>

<br>
--Jack Galloway
<br>

<br>
From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Howard Pritchard
<br>
Sent: Thursday, April 23, 2015 8:15 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] MPI_Finalize not behaving correctly, orphaned processes
<br>

<br>

<br>
Hi Jack,
<br>

<br>
Are you using a system at LANL? Maybe I could try to reproduce the problem on the system you are using.  The system call stuff adds a certain bit of zest to the problem.  does the app make fortran system calls to do the copying and pasting?
<br>

<br>
Howard
<br>
On Apr 22, 2015 4:24 PM, &quot;Galloway, Jack D&quot; &lt;jackg_at_[hidden]&lt;mailto:jackg_at_[hidden]&gt;&gt; wrote:
<br>
I have an MPI program that is fairly straight forward, essentially &quot;initialize, 2 sends from master to slaves, 2 receives on slaves, do a bunch of system calls for copying/pasting then running a serial code on each mpi task, tidy up and mpi finalize&quot;.
<br>
This seems straightforward, but I'm not getting mpi_finalize to work correctly. Below is a snapshot of the program, without all the system copy/paste/call external code which I've rolled up in &quot;do codish stuff&quot; type statements.
<br>
program mpi_finalize_break
<br>
!&lt;variable declarations&gt;
<br>
call MPI_INIT(ierr)
<br>
icomm = MPI_COMM_WORLD
<br>
call MPI_COMM_SIZE(icomm,nproc,ierr)
<br>
call MPI_COMM_RANK(icomm,rank,ierr)
<br>

<br>
!&lt;do codish stuff for a while&gt;
<br>
if (rank == 0) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;!&lt;set up some stuff then call MPI_SEND in a loop over number of slaves&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;call MPI_SEND(numat,1,MPI_INTEGER,n,0,icomm,ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;call MPI_SEND(n_to_add,1,MPI_INTEGER,n,0,icomm,ierr)
<br>
else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;call MPI_Recv(begin_mat,1,MPI_INTEGER,0,0,icomm,status,ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;call MPI_Recv(nrepeat,1,MPI_INTEGER,0,0,icomm,status,ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;!&lt;do codish stuff for a while&gt;
<br>
endif
<br>

<br>
print*, &quot;got here4&quot;, rank
<br>
call MPI_BARRIER(icomm,ierr)
<br>
print*, &quot;got here5&quot;, rank, ierr
<br>
call MPI_FINALIZE(ierr)
<br>

<br>
print*, &quot;got here6&quot;
<br>
end program mpi_finalize_break
<br>
Now the problem I am seeing occurs around the &quot;got here4&quot;, &quot;got here5&quot; and &quot;got here6&quot; statements. I get the appropriate number of print statements with corresponding ranks for &quot;got here4&quot;, as well as &quot;got here5&quot;. Meaning, the master and all the slaves (rank 0, and all other ranks) got to the barrier call, through the barrier call, and to MPI_FINALIZE, reporting 0 for ierr on all of them. However, when it gets to &quot;got here6&quot;, after the MPI_FINALIZE I'll get all kinds of weird behavior. Sometimes I'll get one less &quot;got here6&quot; than I expect, or sometimes I'll get eight less (it varies), however the program hangs forever, never closing and leaves an orphaned process on one (or more) of the compute nodes.
<br>
I am running this on an infiniband backbone machine, with the NFS server shared over infiniband (nfs-rdma). I'm trying to determine how the MPI_BARRIER call works fine, yet MPI_FINALIZE ends up with random orphaned runs (not the same node, nor the same number of orphans every time). I'm guessing it is related to the various system calls to cp, mv, ./run_some_code, cp, mv but wasn't sure if it may be related to the speed of infiniband too, as all this happens fairly quickly. I could have wrong intuition as well. Anybody have thoughts? I could put the whole code if helpful, but this condensed version I believe captures it. I'm running openmpi1.8.4 compiled against ifort 15.0.2 , with Mellanox adapters running firmware 2.9.1000.  This is the mellanox firmware available through yum with centos 6.5, 2.6.32-504.8.1.el6.x86_64.
<br>

<br>
ib0       Link encap:InfiniBand  HWaddr 80:00:00:48:FE:80:00:00:00:00:00:00:00:00:00:00:00:00:00:00
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:192.168.6.254  Bcast:192.168.6.255  Mask:255.255.255.0
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 addr: fe80::202:c903:57:e7fd/64 Scope:Link
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP BROADCAST RUNNING MULTICAST  MTU:2044  Metric:1
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:10952 errors:0 dropped:0 overruns:0 frame:0
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:9805 errors:0 dropped:625413 overruns:0 carrier:0
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:256
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:830040 (810.5 KiB)  TX bytes:643212 (628.1 KiB)
<br>

<br>

<br>

<br>
hca_id: mlx4_0
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;transport:                      InfiniBand (0)
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fw_ver:                         2.9.1000
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node_guid:                      0002:c903:0057:e7fc
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sys_image_guid:                 0002:c903:0057:e7ff
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;vendor_id:                      0x02c9
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;vendor_part_id:                 26428
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hw_ver:                         0xB0
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;board_id:                       MT_0D90110009
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;phys_port_cnt:                  1
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port:   1
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;state:                  PORT_ACTIVE (4)
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_mtu:                4096 (5)
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;active_mtu:             4096 (5)
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sm_lid:                 1
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port_lid:               2
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port_lmc:               0x00
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;link_layer:             InfiniBand
<br>

<br>

<br>
This problem only occurs in this simple implementation, thus my thinking it is tied to the system calls.  I run several other, much larger, much more robust MPI codes without issue on the machine.  Thanks for the help.
<br>
--Jack
<br>

<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26765.php">http://www.open-mpi.org/community/lists/users/2015/04/26765.php</a>
<br>
<p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26772/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26772/parallel_burn.f90">parallel_burn.f90</a>
</ul>
<!-- attachment="parallel_burn.f90" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26773.php">rebonatto_at_[hidden]: "[OMPI users] help in execution mpi"</a>
<li><strong>Previous message:</strong> <a href="26771.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Questions regarding MPI_T performance variables and	Collective tuning"</a>
<li><strong>In reply to:</strong> <a href="26769.php">Howard Pritchard: "Re: [OMPI users] MPI_Finalize not behaving correctly, orphaned processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26775.php">Howard Pritchard: "Re: [OMPI users] MPI_Finalize not behaving correctly, orphaned processes"</a>
<li><strong>Reply:</strong> <a href="26775.php">Howard Pritchard: "Re: [OMPI users] MPI_Finalize not behaving correctly, orphaned processes"</a>
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
