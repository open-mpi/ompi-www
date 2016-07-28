<?
$subject_val = "[OMPI devel] Fwd: [OMPI users] OpenMPI with openib partitions";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  7 09:46:54 2008" -->
<!-- isoreceived="20081007134654" -->
<!-- sent="Tue, 7 Oct 2008 09:46:48 -0400" -->
<!-- isosent="20081007134648" -->
<!-- name="Matt Burgess" -->
<!-- email="burgess.matt_at_[hidden]" -->
<!-- subject="[OMPI devel] Fwd: [OMPI users] OpenMPI with openib partitions" -->
<!-- id="a2f40f560810070646r685706e4n605e3ac87623d6b4_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="a2f40f560810070644g6726897i6fd51e79c7876195_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] Fwd: [OMPI users] OpenMPI with openib partitions<br>
<strong>From:</strong> Matt Burgess (<em>burgess.matt_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-07 09:46:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4742.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Fwd: [OMPI users] OpenMPI with openib partitions"</a>
<li><strong>Previous message:</strong> <a href="4740.php">Lenny Verkhovsky: "Re: [OMPI devel] [OMPI users] OpenMPI with openib partitions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4742.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Fwd: [OMPI users] OpenMPI with openib partitions"</a>
<li><strong>Reply:</strong> <a href="4742.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Fwd: [OMPI users] OpenMPI with openib partitions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Lenny,
<br>
<p>Thanks for the info. It doesn't seem to be be working still. My command line
<br>
is:
<br>
<p>/opt/openmpi-ib/1.2.6/bin/mpirun -np 2 -H d2-ib,d3-ib -mca btl openib,self
<br>
-mca btl_openib_of_pkey_val 33033 /cluster/pallas/x86_64-ib/IMB-MPI1
<br>
<p>I don't have a &quot;/sys/class/infiniband/mthca0/ports/1/pkeys/&quot; but I do have
<br>
&quot;/sys/class/infiniband/mlx4_0/ports/1/pkeys/&quot;. It's contents are:
<br>
<p>0    106  114  122  16   24   32   40   49   57   65   73   81   9    98
<br>
1    107  115  123  17   25   33   41   5    58   66   74   82   90   99
<br>
10   108  116  124  18   26   34   42   50   59   67   75   83   91
<br>
100  109  117  125  19   27   35   43   51   6    68   76   84   92
<br>
101  11   118  126  2    28   36   44   52   60   69   77   85   93
<br>
102  110  119  127  20   29   37   45   53   61   7    78   86   94
<br>
103  111  12   13   21   3    38   46   54   62   70   79   87   95
<br>
104  112  120  14   22   30   39   47   55   63   71   8    88   96
<br>
105  113  121  15   23   31   4    48   56   64   72   80   89   97
<br>
<p>We aren't using the opensm, but voltaire's SM on a 2012 switch.
<br>
<p>Thanks again,
<br>
Matt
<br>
<p><p>On Tue, Oct 7, 2008 at 9:37 AM, Lenny Verkhovsky &lt;lenny.verkhovsky_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; Hi Matt,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seems that the right way to do it is the fallowing:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -mca btl openib,self -mca btl_openib_ib_pkey_val 33033
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; when the value is a decimal number of the pkey, in your case 0x8109 =
</span><br>
<span class="quotelev1">&gt; 33033, and no need for btl_openib_ib_pkey_ix value.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ex.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 -H witch2,witch3 -mca btl openib,self -mca
</span><br>
<span class="quotelev1">&gt; btl_openib_ib_pkey_val 32769 ./mpi_p1_4_1_2 -t lt
</span><br>
<span class="quotelev1">&gt; LT (2) (size min max avg) 1 3.511429 3.511429 3.511429
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if it's not working check cat /sys/class/infiniband/mthca0/ports/1/pkeys/*
</span><br>
<span class="quotelev1">&gt; for pkeys ans SM, maybe it's a setup.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Pasha is currently checking this issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Lenny.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 10/7/08, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; FWIW, if this configuration is for all of your users, you might want to
</span><br>
<span class="quotelev2">&gt;&gt; specify these MCA params in the default MCA param file, or the environment,
</span><br>
<span class="quotelev2">&gt;&gt; ...etc.  Just so that you don't have to specify it on every mpirun command
</span><br>
<span class="quotelev2">&gt;&gt; line.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; See <a href="http://www.open-mpi.org/faq/?category=tuning#setting-mca-params">http://www.open-mpi.org/faq/?category=tuning#setting-mca-params</a>.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 7, 2008, at 5:43 AM, Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Sorry, misunderstood the question,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; thanks for Pasha the right command line will be
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -mca btl openib,self -mca btl_openib_of_pkey_val 0x8109 -mca
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl_openib_of_pkey_ix 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ex.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #mpirun -np 2 -H witch2,witch3 -mca btl openib,self -mca
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl_openib_of_pkey_val 0x8001 -mca btl_openib_of_pkey_ix 1 ./mpi_p1_4_TRUNK
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -t lt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LT (2) (size min max avg) 1 3.443480 3.443480 3.443480
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best regards
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lenny.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 10/6/08, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote: On Oct 5, 2008, at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1:22 PM, Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you should probably use -mca tcp,self  -mca btl_openib_if_include
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ib0.8109
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Really?  I thought we only took OpenFabrics device names in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openib_if_include MCA param...?  It looks like ib0.8109 is an IPoIB device
</span><br>
<span class="quotelev3">&gt;&gt;&gt; name.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lenny.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 10/3/08, Matt Burgess &lt;burgess.matt_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm trying to get openmpi working over openib partitions. On this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cluster, the partition number is 0x109. The ib interfaces are pingable over
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the appropriate ib0.8109 interface:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; d2:/opt/openmpi-ib # ifconfig ib0.8109
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ib0.8109  Link encap:UNSPEC  HWaddr
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 80-00-00-4A-FE-80-00-00-00-00-00-00-00-00-00-00
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         inet addr:10.21.48.2  Bcast:10.21.255.255  Mask:255.255.0.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         inet6 addr: fe80::202:c902:26:ca01/64 Scope:Link
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         UP BROADCAST RUNNING MULTICAST  MTU:65520  Metric:1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         RX packets:16811 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         TX packets:15848 errors:0 dropped:1 overruns:0 carrier:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         collisions:0 txqueuelen:256
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         RX bytes:102229428 (97.4 Mb)  TX bytes:102324172 (97.5 Mb)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have tried the following:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/openmpi-ib/1.2.6/bin/mpirun -np 2 -machinefile machinefile -mca btl
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openib,self -mca btl_openib_max_btls 1 -mca btl_openib_ib_pkey_val 0x8109
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -mca btl_openib_ib_pkey_ix 1 /cluster/pallas/x86_64-ib/IMB-MPI1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but I just get a RETRY EXCEEDED ERROR. Is there a MCA parameter I am
</span><br>
<span class="quotelev3">&gt;&gt;&gt; missing?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I was successful using tcp only:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/openmpi-ib/1.2.6/bin/mpirun -np 2 -machinefile machinefile -mca btl
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tcp,self -mca btl_openib_max_btls 1 -mca btl_openib_ib_pkey_val 0x8109
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /cluster/pallas/x86_64-ib/IMB-MPI1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Matt Burgess
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4741/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4742.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Fwd: [OMPI users] OpenMPI with openib partitions"</a>
<li><strong>Previous message:</strong> <a href="4740.php">Lenny Verkhovsky: "Re: [OMPI devel] [OMPI users] OpenMPI with openib partitions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4742.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Fwd: [OMPI users] OpenMPI with openib partitions"</a>
<li><strong>Reply:</strong> <a href="4742.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Fwd: [OMPI users] OpenMPI with openib partitions"</a>
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
