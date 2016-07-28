<?
$subject_val = "[OMPI users] CPU binding";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  2 19:32:28 2013" -->
<!-- isoreceived="20131002233228" -->
<!-- sent="Thu, 3 Oct 2013 01:32:26 +0200" -->
<!-- isosent="20131002233226" -->
<!-- name="Panos Labropoulos" -->
<!-- email="panos.labropoulos_at_[hidden]" -->
<!-- subject="[OMPI users] CPU binding" -->
<!-- id="CAGj8tX_ZyTo0QGjXgKue1ucL+ttijqxYBwFwY+8XmQ=YAsvEOg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] CPU binding<br>
<strong>From:</strong> Panos Labropoulos (<em>panos.labropoulos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-02 19:32:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22756.php">Jeff Squyres (jsquyres): "Re: [OMPI users] CPU binding"</a>
<li><strong>Previous message:</strong> <a href="22754.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Deprecated parameter: orte_rsh_agent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22756.php">Jeff Squyres (jsquyres): "Re: [OMPI users] CPU binding"</a>
<li><strong>Reply:</strong> <a href="22756.php">Jeff Squyres (jsquyres): "Re: [OMPI users] CPU binding"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hallo,
<br>
<p>We seem to be unable to to set the cpu binding on a cluster consisting of
<br>
Dell M420/M610 systems:
<br>
<p>[jallan_at_hpc21 ~]$ cat report-bindings.sh #!/bin/sh
<br>
<p>bitmap=`hwloc-bind --get -p`
<br>
friendly=`hwloc-calc -p -H socket.core.pu $bitmap`
<br>
<p>echo &quot;MCW rank $OMPI_COMM_WORLD_RANK (`hostname`): $friendly&quot;
<br>
exit 0
<br>
<p><p>[jallan_at_hpc27 ~]$ hwloc-bind -v  socket:0.core:0 -l ./report-bindings.sh
<br>
using object #0 depth 2 below cpuset 0x000000ff
<br>
using object #0 depth 6 below cpuset 0x00000080
<br>
adding 0x00000080 to 0x0
<br>
adding 0x00000080 to 0x0
<br>
assuming the command starts at ./report-bindings.sh
<br>
binding on cpu set 0x00000080
<br>
MCW rank  (hpc27): Socket:0.Core:10.PU:7
<br>
[jallan_at_hpc27 ~]$ hwloc-bind -v  socket:1.core:0 -l ./report-bindings.sh
<br>
object #1 depth 2 (type socket) below cpuset 0x000000ff does not exist
<br>
adding 0x0 to 0x0
<br>
assuming the command starts at ./report-bindings.sh
<br>
MCW rank  (hpc27): Socket:0.Core:10.PU:7
<br>
<p><p>The topology of this system looks a bit strange:
<br>
<p>[jallan_at_hpc21 ~]$ lstopo --no-io
<br>
Machine (24GB)
<br>
&nbsp;NUMANode L#0 (P#0 24GB)
<br>
&nbsp;NUMANode L#1 (P#1) + Socket L#0 + L3 L#0 (15MB) + L2 L#0 (256KB) + L1
<br>
L#0 (32KB) + Core L#0 + PU L#0 (P#11)
<br>
[jallan_at_hpc21 ~]$
<br>
<p><p>Using Open MPI 1.4.4:
<br>
<p><a href="http://pastebin.com/VsZS2q3R">http://pastebin.com/VsZS2q3R</a>
<br>
<p>For some reason the binding cannot be set. We also tried Open MPI 1.6.5 and
<br>
1.7.3 with similar results.
<br>
<p>This is the output from a local SMP system:
<br>
<p>[panos_at_demo ~]$ hwloc-bind -v  socket:1.core:0 -l ./report-bindings.sh
<br>
using object #1 depth 2 below cpuset 0x00000003 using object #0 depth 6
<br>
below cpuset 0x00000002 adding 0x00000002 to 0x0 adding 0x00000002 to 0x0
<br>
assuming the command starts at ./report-bindings.sh binding on cpu set
<br>
0x00000002 MCW rank  (demo): Socket:1.Core:0.PU:1 [panos_at_demo ~]$
<br>
hwloc-bind -v  socket:0.core:0 -l ./report-bindings.sh using object #0
<br>
depth 2 below cpuset 0x00000003 using object #0 depth 6 below cpuset
<br>
0x00000001 adding 0x00000001 to 0x0 adding 0x00000001 to 0x0 assuming the
<br>
command starts at ./report-bindings.sh binding on cpu set 0x00000001 MCW
<br>
rank  (demo): Socket:0.Core:0.PU:0
<br>
<p><p>The MPI binding output is formatted a bit different as this nodes runs Open
<br>
MPI 1.6.5:
<br>
<p>[panos_at_demo ~]$ `which  mpiexec` --report-bindings --bind-to-core
<br>
--bycore -mca btl ^openib -np 4   -hostfile ./hplnodes2 -x
<br>
LD_LIBRARY_PATH -x PATH    /cm/shared/apps/hpl/2.1/xhpl
<br>
[demo:25615] MCW rank 0 bound to socket 0[core 0]: [B][.] [demo:25615] MCW
<br>
rank 2 bound to socket 1[core 0]: [.][B] [node003:08454] MCW rank 1 bound
<br>
to socket 0[core 0]: [B .] [node003:08454] MCW rank 3 bound to socket
<br>
0[core 1]: [. B] [panos_at_demo ~]$ module load hwloc
<br>
<p><p><p>[panos_at_demo ~]$ lstopo -l
<br>
Machine (4095MB)
<br>
&nbsp;NUMANode L#0 (P#0 2048MB) + Socket L#0 + L2 L#0 (1024KB) + L1d L#0
<br>
(64KB) + L1i L#0 (64KB) + Core L#0 + PU L#0 (P#0)
<br>
&nbsp;NUMANode L#1 (P#1 2048MB) + Socket L#1 + L2 L#1 (1024KB) + L1d L#1
<br>
(64KB) + L1i L#1 (64KB) + Core L#1 + PU L#1 (P#1)
<br>
<p>Any help will be appreciated.
<br>
<p>Kind Regards,
<br>
&nbsp;&nbsp;Panos Labropoulos
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22755/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22756.php">Jeff Squyres (jsquyres): "Re: [OMPI users] CPU binding"</a>
<li><strong>Previous message:</strong> <a href="22754.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Deprecated parameter: orte_rsh_agent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22756.php">Jeff Squyres (jsquyres): "Re: [OMPI users] CPU binding"</a>
<li><strong>Reply:</strong> <a href="22756.php">Jeff Squyres (jsquyres): "Re: [OMPI users] CPU binding"</a>
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
