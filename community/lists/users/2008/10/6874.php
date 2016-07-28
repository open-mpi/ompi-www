<?
$subject_val = "Re: [OMPI users] OpenMPI with openib partitions";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  7 05:43:31 2008" -->
<!-- isoreceived="20081007094331" -->
<!-- sent="Tue, 7 Oct 2008 11:43:23 +0200" -->
<!-- isosent="20081007094323" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI with openib partitions" -->
<!-- id="453d39990810070243i2a66cf62yac050971988fdb85_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="DBE3AAFE-BBB5-4BA6-9AFB-7B0D7615EAEE_at_cisco.com" -->
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
<strong>Date:</strong> 2008-10-07 05:43:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6875.php">Pavel Shamis (Pasha): "Re: [OMPI users] OpenMPI with openib partitions"</a>
<li><strong>Previous message:</strong> <a href="6873.php">Hahn Kim: "Re: [OMPI users] Problem launching onto Bourne shell"</a>
<li><strong>In reply to:</strong> <a href="6867.php">Jeff Squyres: "Re: [OMPI users] OpenMPI with openib partitions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6876.php">Jeff Squyres: "Re: [OMPI users] OpenMPI with openib partitions"</a>
<li><strong>Reply:</strong> <a href="6876.php">Jeff Squyres: "Re: [OMPI users] OpenMPI with openib partitions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry, misunderstood the question,
<br>
<p>thanks for Pasha the right command line will be
<br>
<p>-mca btl openib,self -mca btl_openib_of_pkey_val 0x8109 -mca
<br>
btl_openib_of_pkey_ix 1
<br>
<p>ex.
<br>
<p>#mpirun -np 2 -H witch2,witch3 -mca btl openib,self -mca
<br>
btl_openib_of_pkey_val 0x8001 -mca btl_openib_of_pkey_ix 1 ./mpi_p1_4_TRUNK
<br>
-t lt
<br>
LT (2) (size min max avg) 1 3.443480 3.443480 3.443480
<br>
<p>Best regards
<br>
<p>Lenny.
<br>
<p>On 10/6/08, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 5, 2008, at 1:22 PM, Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  you should probably use -mca tcp,self  -mca btl_openib_if_include ib0.8109
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Really?  I thought we only took OpenFabrics device names in the
</span><br>
<span class="quotelev1">&gt; openib_if_include MCA param...?  It looks like ib0.8109 is an IPoIB device
</span><br>
<span class="quotelev1">&gt; name.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Lenny.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 10/3/08, Matt Burgess &lt;burgess.matt_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm trying to get openmpi working over openib partitions. On this cluster,
</span><br>
<span class="quotelev2">&gt;&gt; the partition number is 0x109. The ib interfaces are pingable over the
</span><br>
<span class="quotelev2">&gt;&gt; appropriate ib0.8109 interface:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; d2:/opt/openmpi-ib # ifconfig ib0.8109
</span><br>
<span class="quotelev2">&gt;&gt; ib0.8109  Link encap:UNSPEC  HWaddr
</span><br>
<span class="quotelev2">&gt;&gt; 80-00-00-4A-FE-80-00-00-00-00-00-00-00-00-00-00
</span><br>
<span class="quotelev2">&gt;&gt;          inet addr:10.21.48.2  Bcast:10.21.255.255  Mask:255.255.0.0
</span><br>
<span class="quotelev2">&gt;&gt;          inet6 addr: fe80::202:c902:26:ca01/64 Scope:Link
</span><br>
<span class="quotelev2">&gt;&gt;          UP BROADCAST RUNNING MULTICAST  MTU:65520  Metric:1
</span><br>
<span class="quotelev2">&gt;&gt;          RX packets:16811 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev2">&gt;&gt;          TX packets:15848 errors:0 dropped:1 overruns:0 carrier:0
</span><br>
<span class="quotelev2">&gt;&gt;          collisions:0 txqueuelen:256
</span><br>
<span class="quotelev2">&gt;&gt;          RX bytes:102229428 (97.4 Mb)  TX bytes:102324172 (97.5 Mb)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have tried the following:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /opt/openmpi-ib/1.2.6/bin/mpirun -np 2 -machinefile machinefile -mca btl
</span><br>
<span class="quotelev2">&gt;&gt; openib,self -mca btl_openib_max_btls 1 -mca btl_openib_ib_pkey_val 0x8109
</span><br>
<span class="quotelev2">&gt;&gt; -mca btl_openib_ib_pkey_ix 1 /cluster/pallas/x86_64-ib/IMB-MPI1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; but I just get a RETRY EXCEEDED ERROR. Is there a MCA parameter I am
</span><br>
<span class="quotelev2">&gt;&gt; missing?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I was successful using tcp only:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /opt/openmpi-ib/1.2.6/bin/mpirun -np 2 -machinefile machinefile -mca btl
</span><br>
<span class="quotelev2">&gt;&gt; tcp,self -mca btl_openib_max_btls 1 -mca btl_openib_ib_pkey_val 0x8109
</span><br>
<span class="quotelev2">&gt;&gt; /cluster/pallas/x86_64-ib/IMB-MPI1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Matt Burgess
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6874/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6875.php">Pavel Shamis (Pasha): "Re: [OMPI users] OpenMPI with openib partitions"</a>
<li><strong>Previous message:</strong> <a href="6873.php">Hahn Kim: "Re: [OMPI users] Problem launching onto Bourne shell"</a>
<li><strong>In reply to:</strong> <a href="6867.php">Jeff Squyres: "Re: [OMPI users] OpenMPI with openib partitions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6876.php">Jeff Squyres: "Re: [OMPI users] OpenMPI with openib partitions"</a>
<li><strong>Reply:</strong> <a href="6876.php">Jeff Squyres: "Re: [OMPI users] OpenMPI with openib partitions"</a>
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
