<?
$subject_val = "Re: [OMPI users] Can 2 IB HCAs give twice the bandwidth?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Oct 19 20:28:25 2008" -->
<!-- isoreceived="20081020002825" -->
<!-- sent="Sun, 19 Oct 2008 17:28:17 -0700 (PDT)" -->
<!-- isosent="20081020002817" -->
<!-- name="Mostyn Lewis" -->
<!-- email="Mostyn.Lewis_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can 2 IB HCAs give twice the bandwidth?" -->
<!-- id="Pine.GSO.4.64.0810191720530.13908_at_aragorn.brc.West.Sun.COM" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="7703F586-7A01-4667-9D7A-F8CD37FC590E_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Can 2 IB HCAs give twice the bandwidth?<br>
<strong>From:</strong> Mostyn Lewis (<em>Mostyn.Lewis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-19 20:28:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7039.php">Mostyn Lewis: "Re: [OMPI users] --mca btl_openib_if_include"</a>
<li><strong>Previous message:</strong> <a href="7037.php">Wen Hao Wang: "[OMPI users] Can OpenMPI support multiple compilers?"</a>
<li><strong>In reply to:</strong> <a href="7034.php">Jeff Squyres: "Re: [OMPI users] Can 2 IB HCAs give twice the bandwidth?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7069.php">Mike Dubman: "Re: [OMPI users] Can 2 IB HCAs give twice the bandwidth?"</a>
<li><strong>Reply:</strong> <a href="7069.php">Mike Dubman: "Re: [OMPI users] Can 2 IB HCAs give twice the bandwidth?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, here's what I see with the IMB PingPong test using two ConnectX DDR cards
<br>
in each of 2 machines. I'm just quoting the last line at 10 repetitions of
<br>
the 4194304 bytes.
<br>
<p>Scali_MPI_Connect-5.6.4-59151: (multi rail setup in /etc/dat.conf)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#bytes #repetitions      t[usec]   Mbytes/sec
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4194304           10      2198.24      1819.63
<br>
mvapich2-1.2rc2: (MV2_NUM_HCAS=2 MV2_NUM_PORTS=1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#bytes #repetitions      t[usec]   Mbytes/sec
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4194304           10      2427.24      1647.96
<br>
OpenMPI SVN 19772:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#bytes #repetitions      t[usec]   Mbytes/sec
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4194304           10      3676.35      1088.03
<br>
<p>Repeatable within bounds.
<br>
<p>This is OFED-1.3.1 and I peered at
<br>
/sys/class/infiniband/mlx4_0/ports/1/counters/port_rcv_packets
<br>
and
<br>
/sys/class/infiniband/mlx4_1/ports/1/counters/port_rcv_packets
<br>
on one of the 2 machines and looked at what happened for Scali
<br>
and OpenMPI.
<br>
<p>Scali packets:
<br>
HCA 0 port1 = 115116625 - 114903198 = 213427
<br>
HCA 1 port1 =  78099566 -  77886143 = 213423
<br>
--------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;426850
<br>
OpenMPI packets:
<br>
HCA 0 port1 = 115233624 - 115116625 = 116999
<br>
HCA 1 port1 =  78216425 -  78099566 = 116859
<br>
--------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;233858
<br>
<p>Scali is set up so that data larger than 8192 bytes is striped
<br>
across the 2 HCAs using 8192 bytes per HCA in a round robin fashion.
<br>
<p>So, it seems that OpenMPI is using both ports but strangley ends
<br>
up with a Mbytes/sec rate which is worse than a single HCA only.
<br>
If I use a --mca btl_openib_if_exclude mlx41:1, we get
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#bytes #repetitions      t[usec]   Mbytes/sec
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4194304           10      3080.59      1298.45
<br>
<p>So, what's taking so long? Is this a threading question?
<br>
<p>DM
<br>
<p>On Sun, 19 Oct 2008, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Oct 18, 2008, at 9:19 PM, Mostyn Lewis wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can OpenMPI do like Scali and MVAPICH2 and utilize 2 IB HCAs per machine
</span><br>
<span class="quotelev2">&gt;&gt; to approach double the bandwidth on simple tests such as IMB PingPong?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes.  OMPI will automatically (and aggressively) use as many active ports as 
</span><br>
<span class="quotelev1">&gt; you have.  So you shouldn't need to list devices+ports -- OMPI will simply 
</span><br>
<span class="quotelev1">&gt; use all ports that it finds in the active state.  If your ports are on 
</span><br>
<span class="quotelev1">&gt; physically separate IB networks, then each IB network will require a 
</span><br>
<span class="quotelev1">&gt; different subnet ID so that OMPI can compute reachability properly.
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7039.php">Mostyn Lewis: "Re: [OMPI users] --mca btl_openib_if_include"</a>
<li><strong>Previous message:</strong> <a href="7037.php">Wen Hao Wang: "[OMPI users] Can OpenMPI support multiple compilers?"</a>
<li><strong>In reply to:</strong> <a href="7034.php">Jeff Squyres: "Re: [OMPI users] Can 2 IB HCAs give twice the bandwidth?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7069.php">Mike Dubman: "Re: [OMPI users] Can 2 IB HCAs give twice the bandwidth?"</a>
<li><strong>Reply:</strong> <a href="7069.php">Mike Dubman: "Re: [OMPI users] Can 2 IB HCAs give twice the bandwidth?"</a>
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
