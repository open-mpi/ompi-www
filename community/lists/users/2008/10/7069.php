<?
$subject_val = "Re: [OMPI users] Can 2 IB HCAs give twice the bandwidth?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 22 02:53:18 2008" -->
<!-- isoreceived="20081022065318" -->
<!-- sent="Wed, 22 Oct 2008 08:53:13 +0200" -->
<!-- isosent="20081022065313" -->
<!-- name="Mike Dubman" -->
<!-- email="mike.ompi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can 2 IB HCAs give twice the bandwidth?" -->
<!-- id="b20b52800810212353q261f4ffcg71524663202b42e0_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="Pine.GSO.4.64.0810191720530.13908_at_aragorn.brc.West.Sun.COM" -->
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
<strong>From:</strong> Mike Dubman (<em>mike.ompi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-22 02:53:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7070.php">Jed Brown: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>Previous message:</strong> <a href="7068.php">Adams, Brian M: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>In reply to:</strong> <a href="7038.php">Mostyn Lewis: "Re: [OMPI users] Can 2 IB HCAs give twice the bandwidth?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
using 2 HCAs on the same PCI-Exp bus (as well as 2 ports from the same HCA)
<br>
will not improve performance, PCI-Exp is the bottleneck.
<br>
<p><p>On Mon, Oct 20, 2008 at 2:28 AM, Mostyn Lewis &lt;Mostyn.Lewis_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Well, here's what I see with the IMB PingPong test using two ConnectX DDR
</span><br>
<span class="quotelev1">&gt; cards
</span><br>
<span class="quotelev1">&gt; in each of 2 machines. I'm just quoting the last line at 10 repetitions of
</span><br>
<span class="quotelev1">&gt; the 4194304 bytes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Scali_MPI_Connect-5.6.4-59151: (multi rail setup in /etc/dat.conf)
</span><br>
<span class="quotelev1">&gt;       #bytes #repetitions      t[usec]   Mbytes/sec
</span><br>
<span class="quotelev1">&gt;      4194304           10      2198.24      1819.63
</span><br>
<span class="quotelev1">&gt; mvapich2-1.2rc2: (MV2_NUM_HCAS=2 MV2_NUM_PORTS=1)
</span><br>
<span class="quotelev1">&gt;       #bytes #repetitions      t[usec]   Mbytes/sec
</span><br>
<span class="quotelev1">&gt;      4194304           10      2427.24      1647.96
</span><br>
<span class="quotelev1">&gt; OpenMPI SVN 19772:
</span><br>
<span class="quotelev1">&gt;       #bytes #repetitions      t[usec]   Mbytes/sec
</span><br>
<span class="quotelev1">&gt;      4194304           10      3676.35      1088.03
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Repeatable within bounds.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is OFED-1.3.1 and I peered at
</span><br>
<span class="quotelev1">&gt; /sys/class/infiniband/mlx4_0/ports/1/counters/port_rcv_packets
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt; /sys/class/infiniband/mlx4_1/ports/1/counters/port_rcv_packets
</span><br>
<span class="quotelev1">&gt; on one of the 2 machines and looked at what happened for Scali
</span><br>
<span class="quotelev1">&gt; and OpenMPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Scali packets:
</span><br>
<span class="quotelev1">&gt; HCA 0 port1 = 115116625 - 114903198 = 213427
</span><br>
<span class="quotelev1">&gt; HCA 1 port1 =  78099566 -  77886143 = 213423
</span><br>
<span class="quotelev1">&gt; --------------------------------------------
</span><br>
<span class="quotelev1">&gt;                                      426850
</span><br>
<span class="quotelev1">&gt; OpenMPI packets:
</span><br>
<span class="quotelev1">&gt; HCA 0 port1 = 115233624 - 115116625 = 116999
</span><br>
<span class="quotelev1">&gt; HCA 1 port1 =  78216425 -  78099566 = 116859
</span><br>
<span class="quotelev1">&gt; --------------------------------------------
</span><br>
<span class="quotelev1">&gt;                                      233858
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Scali is set up so that data larger than 8192 bytes is striped
</span><br>
<span class="quotelev1">&gt; across the 2 HCAs using 8192 bytes per HCA in a round robin fashion.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, it seems that OpenMPI is using both ports but strangley ends
</span><br>
<span class="quotelev1">&gt; up with a Mbytes/sec rate which is worse than a single HCA only.
</span><br>
<span class="quotelev1">&gt; If I use a --mca btl_openib_if_exclude mlx41:1, we get
</span><br>
<span class="quotelev1">&gt;       #bytes #repetitions      t[usec]   Mbytes/sec
</span><br>
<span class="quotelev1">&gt;      4194304           10      3080.59      1298.45
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, what's taking so long? Is this a threading question?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; DM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sun, 19 Oct 2008, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  On Oct 18, 2008, at 9:19 PM, Mostyn Lewis wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Can OpenMPI do like Scali and MVAPICH2 and utilize 2 IB HCAs per machine
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to approach double the bandwidth on simple tests such as IMB PingPong?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes.  OMPI will automatically (and aggressively) use as many active ports
</span><br>
<span class="quotelev2">&gt;&gt; as you have.  So you shouldn't need to list devices+ports -- OMPI will
</span><br>
<span class="quotelev2">&gt;&gt; simply use all ports that it finds in the active state.  If your ports are
</span><br>
<span class="quotelev2">&gt;&gt; on physically separate IB networks, then each IB network will require a
</span><br>
<span class="quotelev2">&gt;&gt; different subnet ID so that OMPI can compute reachability properly.
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7069/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7070.php">Jed Brown: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>Previous message:</strong> <a href="7068.php">Adams, Brian M: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>In reply to:</strong> <a href="7038.php">Mostyn Lewis: "Re: [OMPI users] Can 2 IB HCAs give twice the bandwidth?"</a>
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
