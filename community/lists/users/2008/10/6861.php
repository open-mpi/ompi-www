<?
$subject_val = "Re: [OMPI users] OpenMPI with openib partitions";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Oct  5 13:22:37 2008" -->
<!-- isoreceived="20081005172237" -->
<!-- sent="Sun, 5 Oct 2008 19:22:33 +0200" -->
<!-- isosent="20081005172233" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI with openib partitions" -->
<!-- id="453d39990810051022i57e62248yff47f021e502cff2_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="a2f40f560810031423o32132c45nefa06047760a6851_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI with openib partitions<br>
<strong>From:</strong> Lenny Verkhovsky (<em>lenny.verkhovsky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-05 13:22:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6862.php">Ralph Castain: "Re: [OMPI users] Running application with MPI_Comm_spawn() in multithreaded environment"</a>
<li><strong>Previous message:</strong> <a href="6860.php">Doug Reeder: "Re: [OMPI users] segfault issue - possible bug in openmpi"</a>
<li><strong>In reply to:</strong> <a href="6853.php">Matt Burgess: "[OMPI users] OpenMPI with openib partitions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6867.php">Jeff Squyres: "Re: [OMPI users] OpenMPI with openib partitions"</a>
<li><strong>Reply:</strong> <a href="6867.php">Jeff Squyres: "Re: [OMPI users] OpenMPI with openib partitions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>you should probably use -mca tcp,self  -mca btl_openib_if_include ib0.8109
<br>
<p>Lenny.
<br>
<p>On 10/3/08, Matt Burgess &lt;burgess.matt_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm trying to get openmpi working over openib partitions. On this cluster,
</span><br>
<span class="quotelev1">&gt; the partition number is 0x109. The ib interfaces are pingable over the
</span><br>
<span class="quotelev1">&gt; appropriate ib0.8109 interface:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; d2:/opt/openmpi-ib # ifconfig ib0.8109
</span><br>
<span class="quotelev1">&gt; ib0.8109  Link encap:UNSPEC  HWaddr
</span><br>
<span class="quotelev1">&gt; 80-00-00-4A-FE-80-00-00-00-00-00-00-00-00-00-00
</span><br>
<span class="quotelev1">&gt;           inet addr:10.21.48.2  Bcast:10.21.255.255  Mask:255.255.0.0
</span><br>
<span class="quotelev1">&gt;           inet6 addr: fe80::202:c902:26:ca01/64 Scope:Link
</span><br>
<span class="quotelev1">&gt;           UP BROADCAST RUNNING MULTICAST  MTU:65520  Metric:1
</span><br>
<span class="quotelev1">&gt;           RX packets:16811 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;           TX packets:15848 errors:0 dropped:1 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;           collisions:0 txqueuelen:256
</span><br>
<span class="quotelev1">&gt;           RX bytes:102229428 (97.4 Mb)  TX bytes:102324172 (97.5 Mb)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have tried the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-ib/1.2.6/bin/mpirun -np 2 -machinefile machinefile -mca btl
</span><br>
<span class="quotelev1">&gt; openib,self -mca btl_openib_max_btls 1 -mca btl_openib_ib_pkey_val 0x8109
</span><br>
<span class="quotelev1">&gt; -mca btl_openib_ib_pkey_ix 1 /cluster/pallas/x86_64-ib/IMB-MPI1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but I just get a RETRY EXCEEDED ERROR. Is there a MCA parameter I am
</span><br>
<span class="quotelev1">&gt; missing?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I was successful using tcp only:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-ib/1.2.6/bin/mpirun -np 2 -machinefile machinefile -mca btl
</span><br>
<span class="quotelev1">&gt; tcp,self -mca btl_openib_max_btls 1 -mca btl_openib_ib_pkey_val 0x8109
</span><br>
<span class="quotelev1">&gt; /cluster/pallas/x86_64-ib/IMB-MPI1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Matt Burgess
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6861/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6862.php">Ralph Castain: "Re: [OMPI users] Running application with MPI_Comm_spawn() in multithreaded environment"</a>
<li><strong>Previous message:</strong> <a href="6860.php">Doug Reeder: "Re: [OMPI users] segfault issue - possible bug in openmpi"</a>
<li><strong>In reply to:</strong> <a href="6853.php">Matt Burgess: "[OMPI users] OpenMPI with openib partitions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6867.php">Jeff Squyres: "Re: [OMPI users] OpenMPI with openib partitions"</a>
<li><strong>Reply:</strong> <a href="6867.php">Jeff Squyres: "Re: [OMPI users] OpenMPI with openib partitions"</a>
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
