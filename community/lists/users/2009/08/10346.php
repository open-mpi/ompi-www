<?
$subject_val = "Re: [OMPI users] OpenMPI 1.3 Infiniband Hang";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 13 03:11:20 2009" -->
<!-- isoreceived="20090813071120" -->
<!-- sent="Thu, 13 Aug 2009 10:11:13 +0300" -->
<!-- isosent="20090813071113" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.3 Infiniband Hang" -->
<!-- id="453d39990908130011r7d145126q7bf0bc20b31ffdd5_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1250129573.3174.376.camel_at_alpaca.lan" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.3 Infiniband Hang<br>
<strong>From:</strong> Lenny Verkhovsky (<em>lenny.verkhovsky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-13 03:11:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10347.php">Ralph Castain: "Re: [OMPI users] strange IMB runs"</a>
<li><strong>Previous message:</strong> <a href="10345.php">Eugene Loh: "Re: [OMPI users] strange IMB runs"</a>
<li><strong>In reply to:</strong> <a href="10343.php">Allen Barnett: "[OMPI users] OpenMPI 1.3 Infiniband Hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10440.php">Allen Barnett: "Re: [OMPI users] OpenMPI 1.3 Infiniband Hang"</a>
<li><strong>Reply:</strong> <a href="10440.php">Allen Barnett: "Re: [OMPI users] OpenMPI 1.3 Infiniband Hang"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
1.
<br>
The Mellanox has a newer fw for those HCAshttp://
<br>
www.mellanox.com/content/pages.php?pg=firmware_table_IH3Lx
<br>
I am not sure if it will help, but newer fw usually have some bug fixes.
<br>
2.
<br>
try to disable leave_pinned during the run. It's on by default in 1.3.3
<br>
Lenny.
<br>
<p>On Thu, Aug 13, 2009 at 5:12 AM, Allen Barnett &lt;allen_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Hi:
</span><br>
<span class="quotelev1">&gt; I recently tried to build my MPI application against OpenMPI 1.3.3. It
</span><br>
<span class="quotelev1">&gt; worked fine with OMPI 1.2.9, but with OMPI 1.3.3, it hangs part way
</span><br>
<span class="quotelev1">&gt; through. It does a fair amount of comm, but eventually it stops in a
</span><br>
<span class="quotelev1">&gt; Send/Recv point-to-point exchange. If I turn off the openib btl, it runs
</span><br>
<span class="quotelev1">&gt; to completion. Also, I built 1.3.3 with memchecker (which is very nice;
</span><br>
<span class="quotelev1">&gt; thanks to everyone who worked on that!) and it runs to completion, even
</span><br>
<span class="quotelev1">&gt; with openib active.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Our cluster consists of dual dual-core opteron boxes with Mellanox
</span><br>
<span class="quotelev1">&gt; MT25204 (InfiniHost III Lx) HCAs and a Mellanox MT47396 Infiniscale-III
</span><br>
<span class="quotelev1">&gt; switch. We're running RHEL 4.8 which appears to include OFED 1.4. I've
</span><br>
<span class="quotelev1">&gt; built everything using GCC 4.3.2. Here is the output from ibv_devinfo.
</span><br>
<span class="quotelev1">&gt; &quot;ompi_info --all&quot; is attached.
</span><br>
<span class="quotelev1">&gt; $ ibv_devinfo
</span><br>
<span class="quotelev1">&gt; hca_id: mthca0
</span><br>
<span class="quotelev1">&gt;        fw_ver:                         1.1.0
</span><br>
<span class="quotelev1">&gt;        node_guid:                      0002:c902:0024:3284
</span><br>
<span class="quotelev1">&gt;        sys_image_guid:                 0002:c902:0024:3287
</span><br>
<span class="quotelev1">&gt;        vendor_id:                      0x02c9
</span><br>
<span class="quotelev1">&gt;        vendor_part_id:                 25204
</span><br>
<span class="quotelev1">&gt;        hw_ver:                         0xA0
</span><br>
<span class="quotelev1">&gt;        board_id:                       MT_03B0140002
</span><br>
<span class="quotelev1">&gt;        phys_port_cnt:                  1
</span><br>
<span class="quotelev1">&gt;                port:   1
</span><br>
<span class="quotelev1">&gt;                        state:                  active (4)
</span><br>
<span class="quotelev1">&gt;                        max_mtu:                2048 (4)
</span><br>
<span class="quotelev1">&gt;                        active_mtu:             2048 (4)
</span><br>
<span class="quotelev1">&gt;                        sm_lid:                 1
</span><br>
<span class="quotelev1">&gt;                        port_lid:               1
</span><br>
<span class="quotelev1">&gt;                        port_lmc:               0x00
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'd appreciate any tips for debugging this.
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Allen
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Allen Barnett
</span><br>
<span class="quotelev1">&gt; Transpire, Inc
</span><br>
<span class="quotelev1">&gt; E-Mail: allen_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Skype:  allenbarnett
</span><br>
<span class="quotelev1">&gt; Ph:     518-887-2930
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10346/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10347.php">Ralph Castain: "Re: [OMPI users] strange IMB runs"</a>
<li><strong>Previous message:</strong> <a href="10345.php">Eugene Loh: "Re: [OMPI users] strange IMB runs"</a>
<li><strong>In reply to:</strong> <a href="10343.php">Allen Barnett: "[OMPI users] OpenMPI 1.3 Infiniband Hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10440.php">Allen Barnett: "Re: [OMPI users] OpenMPI 1.3 Infiniband Hang"</a>
<li><strong>Reply:</strong> <a href="10440.php">Allen Barnett: "Re: [OMPI users] OpenMPI 1.3 Infiniband Hang"</a>
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
