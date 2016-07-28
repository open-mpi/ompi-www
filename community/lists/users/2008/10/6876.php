<?
$subject_val = "Re: [OMPI users] OpenMPI with openib partitions";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  7 08:04:43 2008" -->
<!-- isoreceived="20081007120443" -->
<!-- sent="Tue, 7 Oct 2008 08:04:37 -0400" -->
<!-- isosent="20081007120437" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI with openib partitions" -->
<!-- id="2C81FAA3-5BB2-4685-9C0F-B5556022083B_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="453d39990810070243i2a66cf62yac050971988fdb85_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-07 08:04:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6877.php">Ralph Castain: "Re: [OMPI users] Problem launching onto Bourne shell"</a>
<li><strong>Previous message:</strong> <a href="6875.php">Pavel Shamis (Pasha): "Re: [OMPI users] OpenMPI with openib partitions"</a>
<li><strong>In reply to:</strong> <a href="6874.php">Lenny Verkhovsky: "Re: [OMPI users] OpenMPI with openib partitions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6875.php">Pavel Shamis (Pasha): "Re: [OMPI users] OpenMPI with openib partitions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW, if this configuration is for all of your users, you might want  
<br>
to specify these MCA params in the default MCA param file, or the  
<br>
environment, ...etc.  Just so that you don't have to specify it on  
<br>
every mpirun command line.
<br>
<p>See <a href="http://www.open-mpi.org/faq/?category=tuning#setting-mca-params">http://www.open-mpi.org/faq/?category=tuning#setting-mca-params</a>.
<br>
<p><p>On Oct 7, 2008, at 5:43 AM, Lenny Verkhovsky wrote:
<br>
<p><span class="quotelev1">&gt; Sorry, misunderstood the question,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks for Pasha the right command line will be
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -mca btl openib,self -mca btl_openib_of_pkey_val 0x8109 -mca  
</span><br>
<span class="quotelev1">&gt; btl_openib_of_pkey_ix 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ex.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #mpirun -np 2 -H witch2,witch3 -mca btl openib,self -mca  
</span><br>
<span class="quotelev1">&gt; btl_openib_of_pkey_val 0x8001 -mca btl_openib_of_pkey_ix 1 ./ 
</span><br>
<span class="quotelev1">&gt; mpi_p1_4_TRUNK -t lt
</span><br>
<span class="quotelev1">&gt; LT (2) (size min max avg) 1 3.443480 3.443480 3.443480
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Lenny.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 10/6/08, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote: On Oct 5, 2008,  
</span><br>
<span class="quotelev1">&gt; at 1:22 PM, Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; you should probably use -mca tcp,self  -mca btl_openib_if_include  
</span><br>
<span class="quotelev1">&gt; ib0.8109
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Really?  I thought we only took OpenFabrics device names in the  
</span><br>
<span class="quotelev1">&gt; openib_if_include MCA param...?  It looks like ib0.8109 is an IPoIB  
</span><br>
<span class="quotelev1">&gt; device name.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Lenny.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 10/3/08, Matt Burgess &lt;burgess.matt_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm trying to get openmpi working over openib partitions. On this  
</span><br>
<span class="quotelev1">&gt; cluster, the partition number is 0x109. The ib interfaces are  
</span><br>
<span class="quotelev1">&gt; pingable over the appropriate ib0.8109 interface:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; d2:/opt/openmpi-ib # ifconfig ib0.8109
</span><br>
<span class="quotelev1">&gt; ib0.8109  Link encap:UNSPEC  HWaddr 80-00-00-4A- 
</span><br>
<span class="quotelev1">&gt; FE-80-00-00-00-00-00-00-00-00-00-00
</span><br>
<span class="quotelev1">&gt;          inet addr:10.21.48.2  Bcast:10.21.255.255  Mask:255.255.0.0
</span><br>
<span class="quotelev1">&gt;          inet6 addr: fe80::202:c902:26:ca01/64 Scope:Link
</span><br>
<span class="quotelev1">&gt;          UP BROADCAST RUNNING MULTICAST  MTU:65520  Metric:1
</span><br>
<span class="quotelev1">&gt;          RX packets:16811 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;          TX packets:15848 errors:0 dropped:1 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;          collisions:0 txqueuelen:256
</span><br>
<span class="quotelev1">&gt;          RX bytes:102229428 (97.4 Mb)  TX bytes:102324172 (97.5 Mb)
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
<span class="quotelev1">&gt; btl openib,self -mca btl_openib_max_btls 1 -mca  
</span><br>
<span class="quotelev1">&gt; btl_openib_ib_pkey_val 0x8109 -mca btl_openib_ib_pkey_ix 1 /cluster/ 
</span><br>
<span class="quotelev1">&gt; pallas/x86_64-ib/IMB-MPI1
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6877.php">Ralph Castain: "Re: [OMPI users] Problem launching onto Bourne shell"</a>
<li><strong>Previous message:</strong> <a href="6875.php">Pavel Shamis (Pasha): "Re: [OMPI users] OpenMPI with openib partitions"</a>
<li><strong>In reply to:</strong> <a href="6874.php">Lenny Verkhovsky: "Re: [OMPI users] OpenMPI with openib partitions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6875.php">Pavel Shamis (Pasha): "Re: [OMPI users] OpenMPI with openib partitions"</a>
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
