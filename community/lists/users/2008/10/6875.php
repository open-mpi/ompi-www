<?
$subject_val = "Re: [OMPI users] OpenMPI with openib partitions";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  7 07:09:11 2008" -->
<!-- isoreceived="20081007110911" -->
<!-- sent="Tue, 07 Oct 2008 13:09:04 +0200" -->
<!-- isosent="20081007110904" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pasha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI with openib partitions" -->
<!-- id="48EB4350.9040209_at_dev.mellanox.co.il" -->
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
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pasha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-07 07:09:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6876.php">Jeff Squyres: "Re: [OMPI users] OpenMPI with openib partitions"</a>
<li><strong>Previous message:</strong> <a href="6874.php">Lenny Verkhovsky: "Re: [OMPI users] OpenMPI with openib partitions"</a>
<li><strong>In reply to:</strong> <a href="6853.php">Matt Burgess: "[OMPI users] OpenMPI with openib partitions"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Matt,
<br>
I guess that you have some problem with partition configuration.
<br>
Can you share with us your partition configuration file (by default 
<br>
opensm use /etc/opensm/partitions.conf) and guid from your machines ( 
<br>
ibstat | grep GUID ) ?
<br>
<p>Regards,
<br>
Pasha
<br>
<p>Matt Burgess wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm trying to get openmpi working over openib partitions. On this 
</span><br>
<span class="quotelev1">&gt; cluster, the partition number is 0x109. The ib interfaces are pingable 
</span><br>
<span class="quotelev1">&gt; over the appropriate ib0.8109 interface:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; d2:/opt/openmpi-ib # ifconfig ib0.8109
</span><br>
<span class="quotelev1">&gt; ib0.8109  Link encap:UNSPEC  HWaddr 
</span><br>
<span class="quotelev1">&gt; 80-00-00-4A-FE-80-00-00-00-00-00-00-00-00-00-00 
</span><br>
<span class="quotelev1">&gt;           inet addr:10.21.48.2 &lt;<a href="http://10.21.48.2">http://10.21.48.2</a>&gt;  
</span><br>
<span class="quotelev1">&gt; Bcast:10.21.255.255 &lt;<a href="http://10.21.255.255">http://10.21.255.255</a>&gt;  Mask:255.255.0.0 
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://255.255.0.0">http://255.255.0.0</a>&gt;
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
<span class="quotelev1">&gt; /opt/openmpi-ib/1.2.6/bin/mpirun -np 2 -machinefile machinefile -mca 
</span><br>
<span class="quotelev1">&gt; btl openib,self -mca btl_openib_max_btls 1 -mca btl_openib_ib_pkey_val 
</span><br>
<span class="quotelev1">&gt; 0x8109 -mca btl_openib_ib_pkey_ix 1 /cluster/pallas/x86_64-ib/IMB-MPI1
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
<span class="quotelev1">&gt; /opt/openmpi-ib/1.2.6/bin/mpirun -np 2 -machinefile machinefile -mca 
</span><br>
<span class="quotelev1">&gt; btl tcp,self -mca btl_openib_max_btls 1 -mca btl_openib_ib_pkey_val 
</span><br>
<span class="quotelev1">&gt; 0x8109 /cluster/pallas/x86_64-ib/IMB-MPI1
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
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
--
Pavel Shamis (Pasha)
Mellanox Technologies LTD.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6876.php">Jeff Squyres: "Re: [OMPI users] OpenMPI with openib partitions"</a>
<li><strong>Previous message:</strong> <a href="6874.php">Lenny Verkhovsky: "Re: [OMPI users] OpenMPI with openib partitions"</a>
<li><strong>In reply to:</strong> <a href="6853.php">Matt Burgess: "[OMPI users] OpenMPI with openib partitions"</a>
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
