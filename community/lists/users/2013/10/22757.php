<?
$subject_val = "Re: [OMPI users] CPU binding";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  2 20:54:25 2013" -->
<!-- isoreceived="20131003005425" -->
<!-- sent="Thu, 3 Oct 2013 02:54:23 +0200" -->
<!-- isosent="20131003005423" -->
<!-- name="Panos Labropoulos" -->
<!-- email="panos.labropoulos_at_[hidden]" -->
<!-- subject="Re: [OMPI users] CPU binding" -->
<!-- id="CAGj8tX_g8_aMZv=XKXKTC8VNnL2UK6JhKhvuOKR+fDBQ_pNWjg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F918969_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] CPU binding<br>
<strong>From:</strong> Panos Labropoulos (<em>panos.labropoulos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-02 20:54:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22758.php">Oralee Nudson: "Re: [OMPI users] Deprecated parameter: orte_rsh_agent"</a>
<li><strong>Previous message:</strong> <a href="22756.php">Jeff Squyres (jsquyres): "Re: [OMPI users] CPU binding"</a>
<li><strong>In reply to:</strong> <a href="22756.php">Jeff Squyres (jsquyres): "Re: [OMPI users] CPU binding"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Jeff,
<br>
<p>Thanks for the reply.
<br>
<p>I will forward my question there.
<br>
<p>Best Regards,
<br>
&nbsp;&nbsp;Panos Labropoulos
<br>
<p><p>On Thu, Oct 3, 2013 at 2:14 AM, Jeff Squyres (jsquyres)
<br>
&lt;jsquyres_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; This seems to be a question about hwloc, not about Open MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To clarify, hwloc is a sub-project of Open MPI, but it has its own mailing
</span><br>
<span class="quotelev1">&gt; list.  Would you mind re-directing your question over there?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/community/lists/hwloc.php">http://www.open-mpi.org/community/lists/hwloc.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 2, 2013, at 7:32 PM, Panos Labropoulos &lt;
</span><br>
<span class="quotelev1">&gt; panos.labropoulos_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hallo,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; We seem to be unable to to set the cpu binding on a cluster consisting
</span><br>
<span class="quotelev1">&gt; of Dell M420/M610 systems:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [jallan_at_hpc21 ~]$ cat report-bindings.sh #!/bin/sh
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; bitmap=`hwloc-bind --get -p`
</span><br>
<span class="quotelev2">&gt; &gt; friendly=`hwloc-calc -p -H socket.core.pu $bitmap`
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; echo &quot;MCW rank $OMPI_COMM_WORLD_RANK (`hostname`): $friendly&quot;
</span><br>
<span class="quotelev2">&gt; &gt; exit 0
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [jallan_at_hpc27 ~]$ hwloc-bind -v  socket:0.core:0 -l ./report-bindings.sh
</span><br>
<span class="quotelev2">&gt; &gt; using object #0 depth 2 below cpuset 0x000000ff
</span><br>
<span class="quotelev2">&gt; &gt; using object #0 depth 6 below cpuset 0x00000080
</span><br>
<span class="quotelev2">&gt; &gt; adding 0x00000080 to 0x0
</span><br>
<span class="quotelev2">&gt; &gt; adding 0x00000080 to 0x0
</span><br>
<span class="quotelev2">&gt; &gt; assuming the command starts at ./report-bindings.sh
</span><br>
<span class="quotelev2">&gt; &gt; binding on cpu set 0x00000080
</span><br>
<span class="quotelev2">&gt; &gt; MCW rank  (hpc27): Socket:0.Core:10.PU:7
</span><br>
<span class="quotelev2">&gt; &gt; [jallan_at_hpc27 ~]$ hwloc-bind -v  socket:1.core:0 -l ./report-bindings.sh
</span><br>
<span class="quotelev2">&gt; &gt; object #1 depth 2 (type socket) below cpuset 0x000000ff does not exist
</span><br>
<span class="quotelev2">&gt; &gt; adding 0x0 to 0x0
</span><br>
<span class="quotelev2">&gt; &gt; assuming the command starts at ./report-bindings.sh
</span><br>
<span class="quotelev2">&gt; &gt; MCW rank  (hpc27): Socket:0.Core:10.PU:7
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The topology of this system looks a bit strange:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [jallan_at_hpc21 ~]$ lstopo --no-io
</span><br>
<span class="quotelev2">&gt; &gt; Machine (24GB)
</span><br>
<span class="quotelev2">&gt; &gt;  NUMANode L#0 (P#0 24GB)
</span><br>
<span class="quotelev2">&gt; &gt;  NUMANode L#1 (P#1) + Socket L#0 + L3 L#0 (15MB) + L2 L#0 (256KB) + L1
</span><br>
<span class="quotelev2">&gt; &gt; L#0 (32KB) + Core L#0 + PU L#0 (P#11)
</span><br>
<span class="quotelev2">&gt; &gt; [jallan_at_hpc21 ~]$
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Using Open MPI 1.4.4:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://pastebin.com/VsZS2q3R">http://pastebin.com/VsZS2q3R</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; For some reason the binding cannot be set. We also tried Open MPI 1.6.5
</span><br>
<span class="quotelev1">&gt; and 1.7.3 with similar results.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This is the output from a local SMP system:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [panos_at_demo ~]$ hwloc-bind -v  socket:1.core:0 -l ./report-bindings.sh
</span><br>
<span class="quotelev1">&gt; using object #1 depth 2 below cpuset 0x00000003 using object #0 depth 6
</span><br>
<span class="quotelev1">&gt; below cpuset 0x00000002 adding 0x00000002 to 0x0 adding 0x00000002 to 0x0
</span><br>
<span class="quotelev1">&gt; assuming the command starts at ./report-bindings.sh binding on cpu set
</span><br>
<span class="quotelev1">&gt; 0x00000002 MCW rank  (demo): Socket:1.Core:0.PU:1 [panos_at_demo ~]$
</span><br>
<span class="quotelev1">&gt; hwloc-bind -v  socket:0.core:0 -l ./report-bindings.sh using object #0
</span><br>
<span class="quotelev1">&gt; depth 2 below cpuset 0x00000003 using object #0 depth 6 below cpuset
</span><br>
<span class="quotelev1">&gt; 0x00000001 adding 0x00000001 to 0x0 adding 0x00000001 to 0x0 assuming the
</span><br>
<span class="quotelev1">&gt; command starts at ./report-bindings.sh binding on cpu set 0x00000001 MCW
</span><br>
<span class="quotelev1">&gt; rank  (demo): Socket:0.Core:0.PU:0
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The MPI binding output is formatted a bit different as this nodes runs
</span><br>
<span class="quotelev1">&gt; Open MPI 1.6.5:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [panos_at_demo ~]$ `which  mpiexec` --report-bindings --bind-to-core
</span><br>
<span class="quotelev2">&gt; &gt; --bycore -mca btl ^openib -np 4   -hostfile ./hplnodes2 -x
</span><br>
<span class="quotelev2">&gt; &gt; LD_LIBRARY_PATH -x PATH    /cm/shared/apps/hpl/2.1/xhpl
</span><br>
<span class="quotelev2">&gt; &gt; [demo:25615] MCW rank 0 bound to socket 0[core 0]: [B][.] [demo:25615]
</span><br>
<span class="quotelev1">&gt; MCW rank 2 bound to socket 1[core 0]: [.][B] [node003:08454] MCW rank 1
</span><br>
<span class="quotelev1">&gt; bound to socket 0[core 0]: [B .] [node003:08454] MCW rank 3 bound to socket
</span><br>
<span class="quotelev1">&gt; 0[core 1]: [. B] [panos_at_demo ~]$ module load hwloc
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [panos_at_demo ~]$ lstopo -l
</span><br>
<span class="quotelev2">&gt; &gt; Machine (4095MB)
</span><br>
<span class="quotelev2">&gt; &gt;  NUMANode L#0 (P#0 2048MB) + Socket L#0 + L2 L#0 (1024KB) + L1d L#0
</span><br>
<span class="quotelev2">&gt; &gt; (64KB) + L1i L#0 (64KB) + Core L#0 + PU L#0 (P#0)
</span><br>
<span class="quotelev2">&gt; &gt;  NUMANode L#1 (P#1 2048MB) + Socket L#1 + L2 L#1 (1024KB) + L1d L#1
</span><br>
<span class="quotelev2">&gt; &gt; (64KB) + L1i L#1 (64KB) + Core L#1 + PU L#1 (P#1)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Any help will be appreciated.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Kind Regards,
</span><br>
<span class="quotelev2">&gt; &gt;   Panos Labropoulos
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22757/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22758.php">Oralee Nudson: "Re: [OMPI users] Deprecated parameter: orte_rsh_agent"</a>
<li><strong>Previous message:</strong> <a href="22756.php">Jeff Squyres (jsquyres): "Re: [OMPI users] CPU binding"</a>
<li><strong>In reply to:</strong> <a href="22756.php">Jeff Squyres (jsquyres): "Re: [OMPI users] CPU binding"</a>
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
