<?
$subject_val = "Re: [OMPI devel] [OMPI users] OpenMPI with openib partitions";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  7 09:37:31 2008" -->
<!-- isoreceived="20081007133731" -->
<!-- sent="Tue, 7 Oct 2008 15:37:25 +0200" -->
<!-- isosent="20081007133725" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI users] OpenMPI with openib partitions" -->
<!-- id="453d39990810070637gc42ce93r5c50c56a5898b4bd_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2C81FAA3-5BB2-4685-9C0F-B5556022083B_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI users] OpenMPI with openib partitions<br>
<strong>From:</strong> Lenny Verkhovsky (<em>lenny.verkhovsky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-07 09:37:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4741.php">Matt Burgess: "[OMPI devel] Fwd: [OMPI users] OpenMPI with openib partitions"</a>
<li><strong>Previous message:</strong> <a href="4739.php">Ralph Castain: "Re: [OMPI devel] Should visibility and memchecker abort configure?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Matt,
<br>
<p>It seems that the right way to do it is the fallowing:
<br>
<p>-mca btl openib,self -mca btl_openib_ib_pkey_val 33033
<br>
<p>when the value is a decimal number of the pkey, in your case 0x8109 = 33033,
<br>
and no need for btl_openib_ib_pkey_ix value.
<br>
<p>ex.
<br>
<p>mpirun -np 2 -H witch2,witch3 -mca btl openib,self -mca
<br>
btl_openib_ib_pkey_val 32769 ./mpi_p1_4_1_2 -t lt
<br>
LT (2) (size min max avg) 1 3.511429 3.511429 3.511429
<br>
<p>if it's not working check cat /sys/class/infiniband/mthca0/ports/1/pkeys/*
<br>
for pkeys ans SM, maybe it's a setup.
<br>
<p>Pasha is currently checking this issue.
<br>
<p>Best regards,
<br>
<p>Lenny.
<br>
<p><p><p><p><p>On 10/7/08, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW, if this configuration is for all of your users, you might want to
</span><br>
<span class="quotelev1">&gt; specify these MCA params in the default MCA param file, or the environment,
</span><br>
<span class="quotelev1">&gt; ...etc.  Just so that you don't have to specify it on every mpirun command
</span><br>
<span class="quotelev1">&gt; line.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; See <a href="http://www.open-mpi.org/faq/?category=tuning#setting-mca-params">http://www.open-mpi.org/faq/?category=tuning#setting-mca-params</a>.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 7, 2008, at 5:43 AM, Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Sorry, misunderstood the question,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; thanks for Pasha the right command line will be
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -mca btl openib,self -mca btl_openib_of_pkey_val 0x8109 -mca
</span><br>
<span class="quotelev2">&gt;&gt; btl_openib_of_pkey_ix 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ex.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #mpirun -np 2 -H witch2,witch3 -mca btl openib,self -mca
</span><br>
<span class="quotelev2">&gt;&gt; btl_openib_of_pkey_val 0x8001 -mca btl_openib_of_pkey_ix 1 ./mpi_p1_4_TRUNK
</span><br>
<span class="quotelev2">&gt;&gt; -t lt
</span><br>
<span class="quotelev2">&gt;&gt; LT (2) (size min max avg) 1 3.443480 3.443480 3.443480
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best regards
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Lenny.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 10/6/08, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote: On Oct 5, 2008, at
</span><br>
<span class="quotelev2">&gt;&gt; 1:22 PM, Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; you should probably use -mca tcp,self  -mca btl_openib_if_include ib0.8109
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Really?  I thought we only took OpenFabrics device names in the
</span><br>
<span class="quotelev2">&gt;&gt; openib_if_include MCA param...?  It looks like ib0.8109 is an IPoIB device
</span><br>
<span class="quotelev2">&gt;&gt; name.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Lenny.
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
<span class="quotelev2">&gt;&gt;         inet addr:10.21.48.2  Bcast:10.21.255.255  Mask:255.255.0.0
</span><br>
<span class="quotelev2">&gt;&gt;         inet6 addr: fe80::202:c902:26:ca01/64 Scope:Link
</span><br>
<span class="quotelev2">&gt;&gt;         UP BROADCAST RUNNING MULTICAST  MTU:65520  Metric:1
</span><br>
<span class="quotelev2">&gt;&gt;         RX packets:16811 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev2">&gt;&gt;         TX packets:15848 errors:0 dropped:1 overruns:0 carrier:0
</span><br>
<span class="quotelev2">&gt;&gt;         collisions:0 txqueuelen:256
</span><br>
<span class="quotelev2">&gt;&gt;         RX bytes:102229428 (97.4 Mb)  TX bytes:102324172 (97.5 Mb)
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4740/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4741.php">Matt Burgess: "[OMPI devel] Fwd: [OMPI users] OpenMPI with openib partitions"</a>
<li><strong>Previous message:</strong> <a href="4739.php">Ralph Castain: "Re: [OMPI devel] Should visibility and memchecker abort configure?"</a>
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
