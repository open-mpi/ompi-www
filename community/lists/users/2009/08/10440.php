<?
$subject_val = "Re: [OMPI users] OpenMPI 1.3 Infiniband Hang";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 19 15:57:11 2009" -->
<!-- isoreceived="20090819195711" -->
<!-- sent="Wed, 19 Aug 2009 15:56:55 -0400" -->
<!-- isosent="20090819195655" -->
<!-- name="Allen Barnett" -->
<!-- email="allen_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.3 Infiniband Hang" -->
<!-- id="1250711815.5287.70.camel_at_alpaca.lan" -->
<!-- inreplyto="453d39990908130011r7d145126q7bf0bc20b31ffdd5_at_mail.gmail.com" -->
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
<strong>From:</strong> Allen Barnett (<em>allen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-19 15:56:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10441.php">tomek: "Re: [OMPI users] Problem with linking on OS X"</a>
<li><strong>Previous message:</strong> <a href="10439.php">tomek: "Re: [OMPI users] Problem with linking on OS X"</a>
<li><strong>In reply to:</strong> <a href="10346.php">Lenny Verkhovsky: "Re: [OMPI users] OpenMPI 1.3 Infiniband Hang"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi: Setting mpi_leave_pinned to 0 allows my application to run to
<br>
completion when running with openib active. I realize that it's probably
<br>
not going to help my application's performance, but since &quot;ON&quot; is the
<br>
default, I'd like to understand what's happening. There's definitely a
<br>
dependence on problem size: smaller problems run to completion while
<br>
larger problems hang at different points in the code. Are there buffer
<br>
sizes (or other BTL settings) I can adjust to understand my problem
<br>
better?
<br>
<p>Thanks,
<br>
Allen
<br>
<p>On Thu, 2009-08-13 at 10:11 +0300, Lenny Verkhovsky wrote:
<br>
<span class="quotelev1">&gt; Hi, 
</span><br>
<span class="quotelev1">&gt; 1.
</span><br>
<span class="quotelev1">&gt; The Mellanox has a newer fw for those
</span><br>
<span class="quotelev1">&gt; HCAs<a href="http://www.mellanox.com/content/pages.php?pg=firmware_table_IH3Lx">http://www.mellanox.com/content/pages.php?pg=firmware_table_IH3Lx</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am not sure if it will help, but newer fw usually have some bug
</span><br>
<span class="quotelev1">&gt; fixes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2.
</span><br>
<span class="quotelev1">&gt; try to disable leave_pinned during the run. It's on by default in
</span><br>
<span class="quotelev1">&gt; 1.3.3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Lenny.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Aug 13, 2009 at 5:12 AM, Allen Barnett
</span><br>
<span class="quotelev1">&gt; &lt;allen_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;         Hi:
</span><br>
<span class="quotelev1">&gt;         I recently tried to build my MPI application against OpenMPI
</span><br>
<span class="quotelev1">&gt;         1.3.3. It
</span><br>
<span class="quotelev1">&gt;         worked fine with OMPI 1.2.9, but with OMPI 1.3.3, it hangs
</span><br>
<span class="quotelev1">&gt;         part way
</span><br>
<span class="quotelev1">&gt;         through. It does a fair amount of comm, but eventually it
</span><br>
<span class="quotelev1">&gt;         stops in a
</span><br>
<span class="quotelev1">&gt;         Send/Recv point-to-point exchange. If I turn off the openib
</span><br>
<span class="quotelev1">&gt;         btl, it runs
</span><br>
<span class="quotelev1">&gt;         to completion. Also, I built 1.3.3 with memchecker (which is
</span><br>
<span class="quotelev1">&gt;         very nice;
</span><br>
<span class="quotelev1">&gt;         thanks to everyone who worked on that!) and it runs to
</span><br>
<span class="quotelev1">&gt;         completion, even
</span><br>
<span class="quotelev1">&gt;         with openib active.
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         Our cluster consists of dual dual-core opteron boxes with
</span><br>
<span class="quotelev1">&gt;         Mellanox
</span><br>
<span class="quotelev1">&gt;         MT25204 (InfiniHost III Lx) HCAs and a Mellanox MT47396
</span><br>
<span class="quotelev1">&gt;         Infiniscale-III
</span><br>
<span class="quotelev1">&gt;         switch. We're running RHEL 4.8 which appears to include OFED
</span><br>
<span class="quotelev1">&gt;         1.4. I've
</span><br>
<span class="quotelev1">&gt;         built everything using GCC 4.3.2. Here is the output from
</span><br>
<span class="quotelev1">&gt;         ibv_devinfo.
</span><br>
<span class="quotelev1">&gt;         &quot;ompi_info --all&quot; is attached.
</span><br>
<span class="quotelev1">&gt;         $ ibv_devinfo
</span><br>
<span class="quotelev1">&gt;         hca_id: mthca0
</span><br>
<span class="quotelev1">&gt;                fw_ver:                         1.1.0
</span><br>
<span class="quotelev1">&gt;                node_guid:                      0002:c902:0024:3284
</span><br>
<span class="quotelev1">&gt;                sys_image_guid:                 0002:c902:0024:3287
</span><br>
<span class="quotelev1">&gt;                vendor_id:                      0x02c9
</span><br>
<span class="quotelev1">&gt;                vendor_part_id:                 25204
</span><br>
<span class="quotelev1">&gt;                hw_ver:                         0xA0
</span><br>
<span class="quotelev1">&gt;                board_id:                       MT_03B0140002
</span><br>
<span class="quotelev1">&gt;                phys_port_cnt:                  1
</span><br>
<span class="quotelev1">&gt;                        port:   1
</span><br>
<span class="quotelev1">&gt;                                state:                  active (4)
</span><br>
<span class="quotelev1">&gt;                                max_mtu:                2048 (4)
</span><br>
<span class="quotelev1">&gt;                                active_mtu:             2048 (4)
</span><br>
<span class="quotelev1">&gt;                                sm_lid:                 1
</span><br>
<span class="quotelev1">&gt;                                port_lid:               1
</span><br>
<span class="quotelev1">&gt;                                port_lmc:               0x00
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         I'd appreciate any tips for debugging this.
</span><br>
<span class="quotelev1">&gt;         Thanks,
</span><br>
<span class="quotelev1">&gt;         Allen
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10441.php">tomek: "Re: [OMPI users] Problem with linking on OS X"</a>
<li><strong>Previous message:</strong> <a href="10439.php">tomek: "Re: [OMPI users] Problem with linking on OS X"</a>
<li><strong>In reply to:</strong> <a href="10346.php">Lenny Verkhovsky: "Re: [OMPI users] OpenMPI 1.3 Infiniband Hang"</a>
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
