<?
$subject_val = "Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 23 21:20:55 2015" -->
<!-- isoreceived="20150624012055" -->
<!-- sent="Tue, 23 Jun 2015 18:20:32 -0700" -->
<!-- isosent="20150624012032" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash" -->
<!-- id="CAMD57oeat2h7FMNFPZmWSD2A7=fDNhgF_JvUNQ09sB_ENaJ58Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="434F2BB0AF80484CA04DE0D8C0738BF293EDEE2C_at_cshsmsgmbx02.CSMC.EDU" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-23 21:20:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27182.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem getting job to start"</a>
<li><strong>Previous message:</strong> <a href="27180.php">Lane, William: "Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash"</a>
<li><strong>In reply to:</strong> <a href="27179.php">Lane, William: "Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27184.php">Lane, William: "Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash"</a>
<li><strong>Reply:</strong> <a href="27184.php">Lane, William: "Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Wow - that is one sick puppy! I see that some nodes are reporting not-bound
<br>
for their procs, and the rest are binding to socket (as they should). Some
<br>
of your nodes clearly do not have hyper threads enabled (or only have
<br>
single-thread cores on them), and have 2 cores/socket. Other nodes have 8
<br>
cores/socket with hyper threads enabled, while still others have 6
<br>
cores/socket and HT enabled.
<br>
<p>I don't see anyone binding to a single HT if multiple HTs/core are
<br>
available. I think you are being fooled by those nodes that either don't
<br>
have HT enabled, or have only 1 HT/core.
<br>
<p>In both cases, it is node 13 that is the node that fails. I also note that
<br>
you said everything works okay with &lt; 132 ranks, and node 13 hosts ranks
<br>
127-131. So node 13 would host ranks even if you reduced the number in the
<br>
job to 131. This would imply that it probably isn't something wrong with
<br>
the node itself.
<br>
<p>Is there any way you could run a job of this size on a homogeneous cluster?
<br>
The procs all show bindings that look right, but I'm wondering if the
<br>
heterogeneity is the source of the trouble here. We may be communicating
<br>
the binding pattern incorrectly and giving bad info to the backend daemon.
<br>
<p>Also, rather than --report-bindings, use &quot;--display-devel-map&quot; on the
<br>
command line and let's see what the mapper thinks it did. If there is a
<br>
problem with placement, that is where it would exist.
<br>
<p><p>On Tue, Jun 23, 2015 at 5:12 PM, Lane, William &lt;William.Lane_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt;  Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is something funny going on, the trace from the
</span><br>
<span class="quotelev1">&gt; runs w/the debug build aren't showing any differences from
</span><br>
<span class="quotelev1">&gt; what I got earlier. However, I did do a run w/the --bind-to core
</span><br>
<span class="quotelev1">&gt; switch and was surprised to see that hyperthreading cores were
</span><br>
<span class="quotelev1">&gt; sometimes being used.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's the traces that I have:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 132 -report-bindings --prefix /hpc/apps/mpi/openmpi/1.8.6/
</span><br>
<span class="quotelev1">&gt; --hostfile hostfile-noslots --mca btl_tcp_if_include eth0 --hetero-nodes
</span><br>
<span class="quotelev1">&gt; /hpc/home/lanew/mpi/openmpi/ProcessColors3
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-5:16802] MCW rank 44 is not bound (or bound to all available
</span><br>
<span class="quotelev1">&gt; processors)
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-5:16802] MCW rank 45 is not bound (or bound to all available
</span><br>
<span class="quotelev1">&gt; processors)
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-5:16802] MCW rank 46 is not bound (or bound to all available
</span><br>
<span class="quotelev1">&gt; processors)
</span><br>
<span class="quotelev1">&gt; [csclprd3-6-5:12480] MCW rank 4 bound to socket 0[core 0[hwt 0]], socket
</span><br>
<span class="quotelev1">&gt; 0[core 1[hwt 0]]: [B/B][./.]
</span><br>
<span class="quotelev1">&gt; [csclprd3-6-5:12480] MCW rank 5 bound to socket 1[core 2[hwt 0]], socket
</span><br>
<span class="quotelev1">&gt; 1[core 3[hwt 0]]: [./.][B/B]
</span><br>
<span class="quotelev1">&gt; [csclprd3-6-5:12480] MCW rank 6 bound to socket 0[core 0[hwt 0]], socket
</span><br>
<span class="quotelev1">&gt; 0[core 1[hwt 0]]: [B/B][./.]
</span><br>
<span class="quotelev1">&gt; [csclprd3-6-5:12480] MCW rank 7 bound to socket 1[core 2[hwt 0]], socket
</span><br>
<span class="quotelev1">&gt; 1[core 3[hwt 0]]: [./.][B/B]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-5:16802] MCW rank 47 is not bound (or bound to all available
</span><br>
<span class="quotelev1">&gt; processors)
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-5:16802] MCW rank 48 is not bound (or bound to all available
</span><br>
<span class="quotelev1">&gt; processors)
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-5:16802] MCW rank 49 is not bound (or bound to all available
</span><br>
<span class="quotelev1">&gt; processors)
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-1:14318] MCW rank 22 is not bound (or bound to all available
</span><br>
<span class="quotelev1">&gt; processors)
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-1:14318] MCW rank 23 is not bound (or bound to all available
</span><br>
<span class="quotelev1">&gt; processors)
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-1:14318] MCW rank 24 is not bound (or bound to all available
</span><br>
<span class="quotelev1">&gt; processors)
</span><br>
<span class="quotelev1">&gt; [csclprd3-6-1:24682] MCW rank 3 bound to socket 1[core 2[hwt 0]], socket
</span><br>
<span class="quotelev1">&gt; 1[core 3[hwt 0]]: [./.][B/B]
</span><br>
<span class="quotelev1">&gt; [csclprd3-6-1:24682] MCW rank 0 bound to socket 0[core 0[hwt 0]], socket
</span><br>
<span class="quotelev1">&gt; 0[core 1[hwt 0]]: [B/B][./.]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-1:14318] MCW rank 25 is not bound (or bound to all available
</span><br>
<span class="quotelev1">&gt; processors)
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-1:14318] MCW rank 20 is not bound (or bound to all available
</span><br>
<span class="quotelev1">&gt; processors)
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-3:13827] MCW rank 34 is not bound (or bound to all available
</span><br>
<span class="quotelev1">&gt; processors)
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-1:14318] MCW rank 21 is not bound (or bound to all available
</span><br>
<span class="quotelev1">&gt; processors)
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-3:13827] MCW rank 35 is not bound (or bound to all available
</span><br>
<span class="quotelev1">&gt; processors)
</span><br>
<span class="quotelev1">&gt; [csclprd3-6-1:24682] MCW rank 1 bound to socket 1[core 2[hwt 0]], socket
</span><br>
<span class="quotelev1">&gt; 1[core 3[hwt 0]]: [./.][B/B]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-3:13827] MCW rank 36 is not bound (or bound to all available
</span><br>
<span class="quotelev1">&gt; processors)
</span><br>
<span class="quotelev1">&gt; [csclprd3-6-1:24682] MCW rank 2 bound to socket 0[core 0[hwt 0]], socket
</span><br>
<span class="quotelev1">&gt; 0[core 1[hwt 0]]: [B/B][./.]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-6:30371] MCW rank 51 is not bound (or bound to all available
</span><br>
<span class="quotelev1">&gt; processors)
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-6:30371] MCW rank 52 is not bound (or bound to all available
</span><br>
<span class="quotelev1">&gt; processors)
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-6:30371] MCW rank 53 is not bound (or bound to all available
</span><br>
<span class="quotelev1">&gt; processors)
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-2:05825] MCW rank 30 is not bound (or bound to all available
</span><br>
<span class="quotelev1">&gt; processors)
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-6:30371] MCW rank 54 is not bound (or bound to all available
</span><br>
<span class="quotelev1">&gt; processors)
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-3:13827] MCW rank 37 is not bound (or bound to all available
</span><br>
<span class="quotelev1">&gt; processors)
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-2:05825] MCW rank 31 is not bound (or bound to all available
</span><br>
<span class="quotelev1">&gt; processors)
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-3:13827] MCW rank 32 is not bound (or bound to all available
</span><br>
<span class="quotelev1">&gt; processors)
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-6:30371] MCW rank 55 is not bound (or bound to all available
</span><br>
<span class="quotelev1">&gt; processors)
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-3:13827] MCW rank 33 is not bound (or bound to all available
</span><br>
<span class="quotelev1">&gt; processors)
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-6:30371] MCW rank 50 is not bound (or bound to all available
</span><br>
<span class="quotelev1">&gt; processors)
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-2:05825] MCW rank 26 is not bound (or bound to all available
</span><br>
<span class="quotelev1">&gt; processors)
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-2:05825] MCW rank 27 is not bound (or bound to all available
</span><br>
<span class="quotelev1">&gt; processors)
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-2:05825] MCW rank 28 is not bound (or bound to all available
</span><br>
<span class="quotelev1">&gt; processors)
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-2:05825] MCW rank 29 is not bound (or bound to all available
</span><br>
<span class="quotelev1">&gt; processors)
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-12:12383] MCW rank 121 is not bound (or bound to all available
</span><br>
<span class="quotelev1">&gt; processors)
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-12:12383] MCW rank 122 is not bound (or bound to all available
</span><br>
<span class="quotelev1">&gt; processors)
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-12:12383] MCW rank 123 is not bound (or bound to all available
</span><br>
<span class="quotelev1">&gt; processors)
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-12:12383] MCW rank 124 is not bound (or bound to all available
</span><br>
<span class="quotelev1">&gt; processors)
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-12:12383] MCW rank 125 is not bound (or bound to all available
</span><br>
<span class="quotelev1">&gt; processors)
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-12:12383] MCW rank 120 is not bound (or bound to all available
</span><br>
<span class="quotelev1">&gt; processors)
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-0:31079] MCW rank 13 bound to socket 1[core 6[hwt 0]], socket
</span><br>
<span class="quotelev1">&gt; 1[core 7[hwt 0]], socket 1[core 8[hwt 0]], socket 1[core 9[hwt 0]], socket
</span><br>
<span class="quotelev1">&gt; 1[core 10[hwt 0]], socket 1[core 11[hwt 0]]: [./././././.][B/B/B/B/B/B]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-0:31079] MCW rank 14 bound to socket 0[core 0[hwt 0]], socket
</span><br>
<span class="quotelev1">&gt; 0[core 1[hwt 0]], socket 0[core 2[hwt 0]], socket 0[core 3[hwt 0]], socket
</span><br>
<span class="quotelev1">&gt; 0[core 4[hwt 0]], socket 0[core 5[hwt 0]]: [B/B/B/B/B/B][./././././.]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-0:31079] MCW rank 15 bound to socket 1[core 6[hwt 0]], socket
</span><br>
<span class="quotelev1">&gt; 1[core 7[hwt 0]], socket 1[core 8[hwt 0]], socket 1[core 9[hwt 0]], socket
</span><br>
<span class="quotelev1">&gt; 1[core 10[hwt 0]], socket 1[core 11[hwt 0]]: [./././././.][B/B/B/B/B/B]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-0:31079] MCW rank 16 bound to socket 0[core 0[hwt 0]], socket
</span><br>
<span class="quotelev1">&gt; 0[core 1[hwt 0]], socket 0[core 2[hwt 0]], socket 0[core 3[hwt 0]], socket
</span><br>
<span class="quotelev1">&gt; 0[core 4[hwt 0]], socket 0[core 5[hwt 0]]: [B/B/B/B/B/B][./././././.]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-7:20515] MCW rank 68 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev1">&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev1">&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core
</span><br>
<span class="quotelev1">&gt; 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-10:19096] MCW rank 100 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev1">&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev1">&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core
</span><br>
<span class="quotelev1">&gt; 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-7:20515] MCW rank 69 bound to socket 1[core 8[hwt 0-1]],
</span><br>
<span class="quotelev1">&gt; socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt
</span><br>
<span class="quotelev1">&gt; 0-1]], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket
</span><br>
<span class="quotelev1">&gt; 1[core 14[hwt 0-1]], socket 1[core 15[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-10:19096] MCW rank 101 bound to socket 1[core 8[hwt 0-1]],
</span><br>
<span class="quotelev1">&gt; socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt
</span><br>
<span class="quotelev1">&gt; 0-1]], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket
</span><br>
<span class="quotelev1">&gt; 1[core 14[hwt 0-1]], socket 1[core 15[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-0:31079] MCW rank 17 bound to socket 1[core 6[hwt 0]], socket
</span><br>
<span class="quotelev1">&gt; 1[core 7[hwt 0]], socket 1[core 8[hwt 0]], socket 1[core 9[hwt 0]], socket
</span><br>
<span class="quotelev1">&gt; 1[core 10[hwt 0]], socket 1[core 11[hwt 0]]: [./././././.][B/B/B/B/B/B]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-7:20515] MCW rank 70 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev1">&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev1">&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core
</span><br>
<span class="quotelev1">&gt; 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-10:19096] MCW rank 102 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev1">&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev1">&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core
</span><br>
<span class="quotelev1">&gt; 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-11:31636] MCW rank 116 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev1">&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev1">&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core
</span><br>
<span class="quotelev1">&gt; 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-11:31636] MCW rank 117 bound to socket 1[core 8[hwt 0-1]],
</span><br>
<span class="quotelev1">&gt; socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt
</span><br>
<span class="quotelev1">&gt; 0-1]], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket
</span><br>
<span class="quotelev1">&gt; 1[core 14[hwt 0-1]], socket 1[core 15[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-0:31079] MCW rank 18 bound to socket 0[core 0[hwt 0]], socket
</span><br>
<span class="quotelev1">&gt; 0[core 1[hwt 0]], socket 0[core 2[hwt 0]], socket 0[core 3[hwt 0]], socket
</span><br>
<span class="quotelev1">&gt; 0[core 4[hwt 0]], socket 0[core 5[hwt 0]]: [B/B/B/B/B/B][./././././.]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-11:31636] MCW rank 118 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev1">&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev1">&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core
</span><br>
<span class="quotelev1">&gt; 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-0:31079] MCW rank 19 bound to socket 1[core 6[hwt 0]], socket
</span><br>
<span class="quotelev1">&gt; 1[core 7[hwt 0]], socket 1[core 8[hwt 0]], socket 1[core 9[hwt 0]], socket
</span><br>
<span class="quotelev1">&gt; 1[core 10[hwt 0]], socket 1[core 11[hwt 0]]: [./././././.][B/B/B/B/B/B]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-7:20515] MCW rank 71 bound to socket 1[core 8[hwt 0-1]],
</span><br>
<span class="quotelev1">&gt; socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt
</span><br>
<span class="quotelev1">&gt; 0-1]], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket
</span><br>
<span class="quotelev1">&gt; 1[core 14[hwt 0-1]], socket 1[core 15[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-10:19096] MCW rank 103 bound to socket 1[core 8[hwt 0-1]],
</span><br>
<span class="quotelev1">&gt; socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt
</span><br>
<span class="quotelev1">&gt; 0-1]], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket
</span><br>
<span class="quotelev1">&gt; 1[core 14[hwt 0-1]], socket 1[core 15[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-0:31079] MCW rank 8 bound to socket 0[core 0[hwt 0]], socket
</span><br>
<span class="quotelev1">&gt; 0[core 1[hwt 0]], socket 0[core 2[hwt 0]], socket 0[core 3[hwt 0]], socket
</span><br>
<span class="quotelev1">&gt; 0[core 4[hwt 0]], socket 0[core 5[hwt 0]]: [B/B/B/B/B/B][./././././.]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-0:31079] MCW rank 9 bound to socket 1[core 6[hwt 0]], socket
</span><br>
<span class="quotelev1">&gt; 1[core 7[hwt 0]], socket 1[core 8[hwt 0]], socket 1[core 9[hwt 0]], socket
</span><br>
<span class="quotelev1">&gt; 1[core 10[hwt 0]], socket 1[core 11[hwt 0]]: [./././././.][B/B/B/B/B/B]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-10:19096] MCW rank 88 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev1">&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev1">&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core
</span><br>
<span class="quotelev1">&gt; 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-11:31636] MCW rank 119 bound to socket 1[core 8[hwt 0-1]],
</span><br>
<span class="quotelev1">&gt; socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt
</span><br>
<span class="quotelev1">&gt; 0-1]], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket
</span><br>
<span class="quotelev1">&gt; 1[core 14[hwt 0-1]], socket 1[core 15[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-7:20515] MCW rank 56 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev1">&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev1">&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core
</span><br>
<span class="quotelev1">&gt; 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-0:31079] MCW rank 10 bound to socket 0[core 0[hwt 0]], socket
</span><br>
<span class="quotelev1">&gt; 0[core 1[hwt 0]], socket 0[core 2[hwt 0]], socket 0[core 3[hwt 0]], socket
</span><br>
<span class="quotelev1">&gt; 0[core 4[hwt 0]], socket 0[core 5[hwt 0]]: [B/B/B/B/B/B][./././././.]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-7:20515] MCW rank 57 bound to socket 1[core 8[hwt 0-1]],
</span><br>
<span class="quotelev1">&gt; socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt
</span><br>
<span class="quotelev1">&gt; 0-1]], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket
</span><br>
<span class="quotelev1">&gt; 1[core 14[hwt 0-1]], socket 1[core 15[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-10:19096] MCW rank 89 bound to socket 1[core 8[hwt 0-1]],
</span><br>
<span class="quotelev1">&gt; socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt
</span><br>
<span class="quotelev1">&gt; 0-1]], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket
</span><br>
<span class="quotelev1">&gt; 1[core 14[hwt 0-1]], socket 1[core 15[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-11:31636] MCW rank 104 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev1">&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev1">&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core
</span><br>
<span class="quotelev1">&gt; 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-0:31079] MCW rank 11 bound to socket 1[core 6[hwt 0]], socket
</span><br>
<span class="quotelev1">&gt; 1[core 7[hwt 0]], socket 1[core 8[hwt 0]], socket 1[core 9[hwt 0]], socket
</span><br>
<span class="quotelev1">&gt; 1[core 10[hwt 0]], socket 1[core 11[hwt 0]]: [./././././.][B/B/B/B/B/B]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-0:31079] MCW rank 12 bound to socket 0[core 0[hwt 0]], socket
</span><br>
<span class="quotelev1">&gt; 0[core 1[hwt 0]], socket 0[core 2[hwt 0]], socket 0[core 3[hwt 0]], socket
</span><br>
<span class="quotelev1">&gt; 0[core 4[hwt 0]], socket 0[core 5[hwt 0]]: [B/B/B/B/B/B][./././././.]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-4:30348] MCW rank 42 is not bound (or bound to all available
</span><br>
<span class="quotelev1">&gt; processors)
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-4:30348] MCW rank 43 is not bound (or bound to all available
</span><br>
<span class="quotelev1">&gt; processors)
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-10:19096] MCW rank 90 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev1">&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev1">&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core
</span><br>
<span class="quotelev1">&gt; 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-4:30348] MCW rank 38 is not bound (or bound to all available
</span><br>
<span class="quotelev1">&gt; processors)
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-7:20515] MCW rank 58 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev1">&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev1">&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core
</span><br>
<span class="quotelev1">&gt; 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-4:30348] MCW rank 39 is not bound (or bound to all available
</span><br>
<span class="quotelev1">&gt; processors)
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-4:30348] MCW rank 40 is not bound (or bound to all available
</span><br>
<span class="quotelev1">&gt; processors)
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-4:30348] MCW rank 41 is not bound (or bound to all available
</span><br>
<span class="quotelev1">&gt; processors)
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-11:31636] MCW rank 105 bound to socket 1[core 8[hwt 0-1]],
</span><br>
<span class="quotelev1">&gt; socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt
</span><br>
<span class="quotelev1">&gt; 0-1]], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket
</span><br>
<span class="quotelev1">&gt; 1[core 14[hwt 0-1]], socket 1[core 15[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29118] MCW rank 127 bound to socket 1[core 6[hwt 0-1]],
</span><br>
<span class="quotelev1">&gt; socket 1[core 7[hwt 0-1]], socket 1[core 8[hwt 0-1]], socket 1[core 9[hwt
</span><br>
<span class="quotelev1">&gt; 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../../../..][BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29118] MCW rank 128 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev1">&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev1">&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [BB/BB/BB/BB/BB/BB][../../../../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29118] MCW rank 129 bound to socket 1[core 6[hwt 0-1]],
</span><br>
<span class="quotelev1">&gt; socket 1[core 7[hwt 0-1]], socket 1[core 8[hwt 0-1]], socket 1[core 9[hwt
</span><br>
<span class="quotelev1">&gt; 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../../../..][BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29118] MCW rank 130 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev1">&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev1">&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [BB/BB/BB/BB/BB/BB][../../../../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-8:15542] MCW rank 84 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev1">&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev1">&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core
</span><br>
<span class="quotelev1">&gt; 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29118] MCW rank 131 bound to socket 1[core 6[hwt 0-1]],
</span><br>
<span class="quotelev1">&gt; socket 1[core 7[hwt 0-1]], socket 1[core 8[hwt 0-1]], socket 1[core 9[hwt
</span><br>
<span class="quotelev1">&gt; 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../../../..][BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-8:15542] MCW rank 85 bound to socket 1[core 8[hwt 0-1]],
</span><br>
<span class="quotelev1">&gt; socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt
</span><br>
<span class="quotelev1">&gt; 0-1]], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket
</span><br>
<span class="quotelev1">&gt; 1[core 14[hwt 0-1]], socket 1[core 15[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29118] MCW rank 126 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev1">&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev1">&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [BB/BB/BB/BB/BB/BB][../../../../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-8:15542] MCW rank 86 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev1">&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev1">&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core
</span><br>
<span class="quotelev1">&gt; 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-8:15542] MCW rank 87 bound to socket 1[core 8[hwt 0-1]],
</span><br>
<span class="quotelev1">&gt; socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt
</span><br>
<span class="quotelev1">&gt; 0-1]], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket
</span><br>
<span class="quotelev1">&gt; 1[core 14[hwt 0-1]], socket 1[core 15[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-7:20515] MCW rank 59 bound to socket 1[core 8[hwt 0-1]],
</span><br>
<span class="quotelev1">&gt; socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt
</span><br>
<span class="quotelev1">&gt; 0-1]], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket
</span><br>
<span class="quotelev1">&gt; 1[core 14[hwt 0-1]], socket 1[core 15[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-10:19096] MCW rank 91 bound to socket 1[core 8[hwt 0-1]],
</span><br>
<span class="quotelev1">&gt; socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt
</span><br>
<span class="quotelev1">&gt; 0-1]], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket
</span><br>
<span class="quotelev1">&gt; 1[core 14[hwt 0-1]], socket 1[core 15[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-11:31636] MCW rank 106 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev1">&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev1">&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core
</span><br>
<span class="quotelev1">&gt; 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-8:15542] MCW rank 72 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev1">&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev1">&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core
</span><br>
<span class="quotelev1">&gt; 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-7:20515] MCW rank 60 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev1">&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev1">&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core
</span><br>
<span class="quotelev1">&gt; 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-10:19096] MCW rank 92 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev1">&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev1">&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core
</span><br>
<span class="quotelev1">&gt; 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-11:31636] MCW rank 107 bound to socket 1[core 8[hwt 0-1]],
</span><br>
<span class="quotelev1">&gt; socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt
</span><br>
<span class="quotelev1">&gt; 0-1]], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket
</span><br>
<span class="quotelev1">&gt; 1[core 14[hwt 0-1]], socket 1[core 15[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-7:20515] MCW rank 61 bound to socket 1[core 8[hwt 0-1]],
</span><br>
<span class="quotelev1">&gt; socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt
</span><br>
<span class="quotelev1">&gt; 0-1]], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket
</span><br>
<span class="quotelev1">&gt; 1[core 14[hwt 0-1]], socket 1[core 15[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-11:31636] MCW rank 108 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev1">&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev1">&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core
</span><br>
<span class="quotelev1">&gt; 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-10:19096] MCW rank 93 bound to socket 1[core 8[hwt 0-1]],
</span><br>
<span class="quotelev1">&gt; socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt
</span><br>
<span class="quotelev1">&gt; 0-1]], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket
</span><br>
<span class="quotelev1">&gt; 1[core 14[hwt 0-1]], socket 1[core 15[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-8:15542] MCW rank 73 bound to socket 1[core 8[hwt 0-1]],
</span><br>
<span class="quotelev1">&gt; socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt
</span><br>
<span class="quotelev1">&gt; 0-1]], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket
</span><br>
<span class="quotelev1">&gt; 1[core 14[hwt 0-1]], socket 1[core 15[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-7:20515] MCW rank 62 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev1">&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev1">&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core
</span><br>
<span class="quotelev1">&gt; 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-10:19096] MCW rank 94 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev1">&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev1">&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core
</span><br>
<span class="quotelev1">&gt; 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-11:31636] MCW rank 109 bound to socket 1[core 8[hwt 0-1]],
</span><br>
<span class="quotelev1">&gt; socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt
</span><br>
<span class="quotelev1">&gt; 0-1]], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket
</span><br>
<span class="quotelev1">&gt; 1[core 14[hwt 0-1]], socket 1[core 15[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-7:20515] MCW rank 63 bound to socket 1[core 8[hwt 0-1]],
</span><br>
<span class="quotelev1">&gt; socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt
</span><br>
<span class="quotelev1">&gt; 0-1]], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket
</span><br>
<span class="quotelev1">&gt; 1[core 14[hwt 0-1]], socket 1[core 15[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-10:19096] MCW rank 95 bound to socket 1[core 8[hwt 0-1]],
</span><br>
<span class="quotelev1">&gt; socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt
</span><br>
<span class="quotelev1">&gt; 0-1]], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket
</span><br>
<span class="quotelev1">&gt; 1[core 14[hwt 0-1]], socket 1[core 15[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-11:31636] MCW rank 110 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev1">&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev1">&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core
</span><br>
<span class="quotelev1">&gt; 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-8:15542] MCW rank 74 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev1">&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev1">&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core
</span><br>
<span class="quotelev1">&gt; 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-7:20515] MCW rank 64 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev1">&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev1">&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core
</span><br>
<span class="quotelev1">&gt; 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-10:19096] MCW rank 96 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev1">&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev1">&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core
</span><br>
<span class="quotelev1">&gt; 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-11:31636] MCW rank 111 bound to socket 1[core 8[hwt 0-1]],
</span><br>
<span class="quotelev1">&gt; socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt
</span><br>
<span class="quotelev1">&gt; 0-1]], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket
</span><br>
<span class="quotelev1">&gt; 1[core 14[hwt 0-1]], socket 1[core 15[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-7:20515] MCW rank 65 bound to socket 1[core 8[hwt 0-1]],
</span><br>
<span class="quotelev1">&gt; socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt
</span><br>
<span class="quotelev1">&gt; 0-1]], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket
</span><br>
<span class="quotelev1">&gt; 1[core 14[hwt 0-1]], socket 1[core 15[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-10:19096] MCW rank 97 bound to socket 1[core 8[hwt 0-1]],
</span><br>
<span class="quotelev1">&gt; socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt
</span><br>
<span class="quotelev1">&gt; 0-1]], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket
</span><br>
<span class="quotelev1">&gt; 1[core 14[hwt 0-1]], socket 1[core 15[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-11:31636] MCW rank 112 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev1">&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev1">&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core
</span><br>
<span class="quotelev1">&gt; 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-8:15542] MCW rank 75 bound to socket 1[core 8[hwt 0-1]],
</span><br>
<span class="quotelev1">&gt; socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt
</span><br>
<span class="quotelev1">&gt; 0-1]], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket
</span><br>
<span class="quotelev1">&gt; 1[core 14[hwt 0-1]], socket 1[core 15[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-7:20515] MCW rank 66 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev1">&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev1">&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core
</span><br>
<span class="quotelev1">&gt; 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-10:19096] MCW rank 98 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev1">&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev1">&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core
</span><br>
<span class="quotelev1">&gt; 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-11:31636] MCW rank 113 bound to socket 1[core 8[hwt 0-1]],
</span><br>
<span class="quotelev1">&gt; socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt
</span><br>
<span class="quotelev1">&gt; 0-1]], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket
</span><br>
<span class="quotelev1">&gt; 1[core 14[hwt 0-1]], socket 1[core 15[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-7:20515] MCW rank 67 bound to socket 1[core 8[hwt 0-1]],
</span><br>
<span class="quotelev1">&gt; socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt
</span><br>
<span class="quotelev1">&gt; 0-1]], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket
</span><br>
<span class="quotelev1">&gt; 1[core 14[hwt 0-1]], socket 1[core 15[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-10:19096] MCW rank 99 bound to socket 1[core 8[hwt 0-1]],
</span><br>
<span class="quotelev1">&gt; socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt
</span><br>
<span class="quotelev1">&gt; 0-1]], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket
</span><br>
<span class="quotelev1">&gt; 1[core 14[hwt 0-1]], socket 1[core 15[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-11:31636] MCW rank 114 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev1">&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev1">&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core
</span><br>
<span class="quotelev1">&gt; 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-8:15542] MCW rank 76 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev1">&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev1">&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core
</span><br>
<span class="quotelev1">&gt; 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-11:31636] MCW rank 115 bound to socket 1[core 8[hwt 0-1]],
</span><br>
<span class="quotelev1">&gt; socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt
</span><br>
<span class="quotelev1">&gt; 0-1]], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket
</span><br>
<span class="quotelev1">&gt; 1[core 14[hwt 0-1]], socket 1[core 15[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-8:15542] MCW rank 77 bound to socket 1[core 8[hwt 0-1]],
</span><br>
<span class="quotelev1">&gt; socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt
</span><br>
<span class="quotelev1">&gt; 0-1]], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket
</span><br>
<span class="quotelev1">&gt; 1[core 14[hwt 0-1]], socket 1[core 15[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-8:15542] MCW rank 78 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev1">&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev1">&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core
</span><br>
<span class="quotelev1">&gt; 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-8:15542] MCW rank 79 bound to socket 1[core 8[hwt 0-1]],
</span><br>
<span class="quotelev1">&gt; socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt
</span><br>
<span class="quotelev1">&gt; 0-1]], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket
</span><br>
<span class="quotelev1">&gt; 1[core 14[hwt 0-1]], socket 1[core 15[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-8:15542] MCW rank 80 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev1">&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev1">&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core
</span><br>
<span class="quotelev1">&gt; 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-8:15542] MCW rank 81 bound to socket 1[core 8[hwt 0-1]],
</span><br>
<span class="quotelev1">&gt; socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt
</span><br>
<span class="quotelev1">&gt; 0-1]], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket
</span><br>
<span class="quotelev1">&gt; 1[core 14[hwt 0-1]], socket 1[core 15[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-8:15542] MCW rank 82 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev1">&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev1">&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core
</span><br>
<span class="quotelev1">&gt; 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-8:15542] MCW rank 83 bound to socket 1[core 8[hwt 0-1]],
</span><br>
<span class="quotelev1">&gt; socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt
</span><br>
<span class="quotelev1">&gt; 0-1]], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket
</span><br>
<span class="quotelev1">&gt; 1[core 14[hwt 0-1]], socket 1[core 15[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29120] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29120] Signal: Bus error (7)
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29120] Signal code: Non-existant physical address (2)
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29120] Failing at address: 0x7f181832ba80
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29121] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29121] Signal: Bus error (7)
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29121] Signal code: Non-existant physical address (2)
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29121] Failing at address: 0x7f5ca82a7980
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29122] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29122] Signal: Bus error (7)
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29122] Signal code: Non-existant physical address (2)
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29122] Failing at address: 0x7fac6ba24980
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29123] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29123] Signal: Bus error (7)
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29123] Signal code: Non-existant physical address (2)
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29123] Failing at address: 0x7faa24267a00
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29125] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29125] Signal: Bus error (7)
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29125] Signal code: Non-existant physical address (2)
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29125] Failing at address: 0x7fa493ae7a00
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29119] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29119] Signal: Bus error (7)
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29119] Signal code: Non-existant physical address (2)
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29119] Failing at address: 0x7fed7436ba80
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29120] [ 0] /lib64/libpthread.so.0(+0xf500)[0x7f182913e500]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29120] [ 1]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x167f61)[0x7f18294b3f61]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29120] [ 2] [csclprd3-0-13:29121] [ 0]
</span><br>
<span class="quotelev1">&gt; /lib64/libpthread.so.0(+0xf500)[0x7f5cb8803500]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29121] [ 1]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x167f61)[0x7f5cb8b78f61]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29121] [ 2] [csclprd3-0-13:29122] [ 0]
</span><br>
<span class="quotelev1">&gt; /lib64/libpthread.so.0(+0xf500)[0x7fac7b20c500]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29122] [ 1]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x167f61)[0x7fac7b581f61]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29122] [ 2] [csclprd3-0-13:29123] [ 0]
</span><br>
<span class="quotelev1">&gt; /lib64/libpthread.so.0(+0xf500)[0x7faa33edd500]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29123] [ 1]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x167f61)[0x7faa34252f61]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29123] [ 2] [csclprd3-0-13:29125] [ 0]
</span><br>
<span class="quotelev1">&gt; /lib64/libpthread.so.0(+0xf500)[0x7fa4a3097500]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29125] [ 1]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x167f61)[0x7fa4a340cf61]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29125] [ 2] [csclprd3-0-13:29119] [ 0]
</span><br>
<span class="quotelev1">&gt; /lib64/libpthread.so.0(+0xf500)[0x7fed85c95500]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29119] [ 1]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x167f61)[0x7fed8600af61]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29119] [ 2]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x168047)[0x7fa4a340d047]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29125] [ 3]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x55670)[0x7fa4a32fa670]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29125] [ 4]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_free_list_grow+0x3b9)[0x7fa4a32fb5ab]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29125] [ 5]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_free_list_resize_mt+0xfb)[0x7fa4a32fb751]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29125] [ 6]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x168047)[0x7f18294b4047]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29120] [ 3]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x55670)[0x7f18293a1670]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29120] [ 4]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_free_list_grow+0x3b9)[0x7f18293a25ab]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29120] [ 5]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_free_list_resize_mt+0xfb)[0x7f18293a2751]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29120] [ 6]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x168047)[0x7f5cb8b79047]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29121] [ 3]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x55670)[0x7f5cb8a66670]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29121] [ 4]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_free_list_grow+0x3b9)[0x7f5cb8a675ab]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29121] [ 5]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_free_list_resize_mt+0xfb)[0x7f5cb8a67751]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29121] [ 6]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x168047)[0x7fac7b582047]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29122] [ 3]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x55670)[0x7fac7b46f670]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29122] [ 4]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_free_list_grow+0x3b9)[0x7fac7b4705ab]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29122] [ 5]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_free_list_resize_mt+0xfb)[0x7fac7b470751]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29122] [ 6]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x168047)[0x7faa34253047]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29123] [ 3]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x55670)[0x7faa34140670]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29123] [ 4]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_free_list_grow+0x3b9)[0x7faa341415ab]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29123] [ 5]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_free_list_resize_mt+0xfb)[0x7faa34141751]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29123] [ 6]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x168047)[0x7fed8600b047]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29119] [ 3]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x55670)[0x7fed85ef8670]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29119] [ 4]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_free_list_grow+0x3b9)[0x7fed85ef95ab]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29119] [ 5]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_free_list_resize_mt+0xfb)[0x7fed85ef9751]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29119] [ 6]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(mca_btl_sm_add_procs+0x671)[0x7fed860071c9]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29119] [ 7]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x14a628)[0x7fed85fed628]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29119] [ 8]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(mca_pml_ob1_add_procs+0xff)[0x7fed86160d61]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29119] [ 9]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(mca_btl_sm_add_procs+0x671)[0x7faa3424f1c9]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29123] [ 7]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x14a628)[0x7faa34235628]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29123] [ 8]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(mca_pml_ob1_add_procs+0xff)[0x7faa343a8d61]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29123] [ 9]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(mca_btl_sm_add_procs+0x671)[0x7fa4a34091c9]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29125] [ 7]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x14a628)[0x7fa4a33ef628]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29125] [ 8]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(mca_pml_ob1_add_procs+0xff)[0x7fa4a3562d61]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29125] [ 9]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(mca_btl_sm_add_procs+0x671)[0x7f18294b01c9]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29120] [ 7]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x14a628)[0x7f1829496628]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29120] [ 8]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(mca_btl_sm_add_procs+0x671)[0x7f5cb8b751c9]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29121] [ 7]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x14a628)[0x7f5cb8b5b628]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29121] [ 8]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(mca_pml_ob1_add_procs+0xff)[0x7f5cb8cced61]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29121] [ 9]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_mpi_init+0xbda)[0x7f5cb8a96747]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29121] [10]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(mca_btl_sm_add_procs+0x671)[0x7fac7b57e1c9]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29122] [ 7]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x14a628)[0x7fac7b564628]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29122] [ 8]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(mca_pml_ob1_add_procs+0xff)[0x7fac7b6d7d61]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29122] [ 9]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_mpi_init+0xbda)[0x7fac7b49f747]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29122] [10]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_mpi_init+0xbda)[0x7fed85f28747]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29119] [10]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(MPI_Init+0x185)[0x7fed85f6850b]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29119] [11]
</span><br>
<span class="quotelev1">&gt; /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400ad0]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29119] [12]
</span><br>
<span class="quotelev1">&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x7fed85912cdd]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29119] [13]
</span><br>
<span class="quotelev1">&gt; /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400999]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29119] *** End of error message ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_mpi_init+0xbda)[0x7faa34170747]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29123] [10]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(MPI_Init+0x185)[0x7faa341b050b]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29123] [11]
</span><br>
<span class="quotelev1">&gt; /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400ad0]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29123] [12]
</span><br>
<span class="quotelev1">&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x7faa33b5acdd]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29123] [13]
</span><br>
<span class="quotelev1">&gt; /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400999]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29123] *** End of error message ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_mpi_init+0xbda)[0x7fa4a332a747]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29125] [10]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(MPI_Init+0x185)[0x7fa4a336a50b]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29125] [11]
</span><br>
<span class="quotelev1">&gt; /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400ad0]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29125] [12]
</span><br>
<span class="quotelev1">&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x7fa4a2d14cdd]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29125] [13]
</span><br>
<span class="quotelev1">&gt; /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400999]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29125] *** End of error message ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(mca_pml_ob1_add_procs+0xff)[0x7f1829609d61]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29120] [ 9]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_mpi_init+0xbda)[0x7f18293d1747]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29120] [10]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(MPI_Init+0x185)[0x7f182941150b]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29120] [11]
</span><br>
<span class="quotelev1">&gt; /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400ad0]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29120] [12]
</span><br>
<span class="quotelev1">&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x7f1828dbbcdd]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29120] [13]
</span><br>
<span class="quotelev1">&gt; /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400999]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29120] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(MPI_Init+0x185)[0x7f5cb8ad650b]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29121] [11]
</span><br>
<span class="quotelev1">&gt; /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400ad0]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29121] [12]
</span><br>
<span class="quotelev1">&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x7f5cb8480cdd]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29121] [13]
</span><br>
<span class="quotelev1">&gt; /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400999]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29121] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(MPI_Init+0x185)[0x7fac7b4df50b]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29122] [11]
</span><br>
<span class="quotelev1">&gt; /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400ad0]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29122] [12]
</span><br>
<span class="quotelev1">&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x7fac7ae89cdd]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29122] [13]
</span><br>
<span class="quotelev1">&gt; /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400999]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29122] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 126 with PID 0 on node csclprd3-0-13
</span><br>
<span class="quotelev1">&gt; exited on signal 7 (Bus error).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2.  mpirun -np 132 -report-bindings --prefix /hpc/apps/mpi/openmpi/1.8.6/
</span><br>
<span class="quotelev1">&gt; --hostfile hostfile-noslots --mca btl_tcp_if_include eth0 --hetero-nodes
</span><br>
<span class="quotelev1">&gt; --bind-to core /hpc/home/lanew/mpi/openmpi/ProcessColors3
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WARNING: a request was made to bind a process. While the system
</span><br>
<span class="quotelev1">&gt; supports binding the process itself, at least one node does NOT
</span><br>
<span class="quotelev1">&gt; support binding memory to the process location.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Node:  csclprd3-6-1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This usually is due to not having the required NUMA support installed
</span><br>
<span class="quotelev1">&gt; on the node. In some Linux distributions, the required support is
</span><br>
<span class="quotelev1">&gt; contained in the libnumactl and libnumactl-devel packages.
</span><br>
<span class="quotelev1">&gt; This is a warning only; your job will continue, though performance may be
</span><br>
<span class="quotelev1">&gt; degraded.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [csclprd3-6-1:24853] MCW rank 0 bound to socket 0[core 0[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [B/.][./.]
</span><br>
<span class="quotelev1">&gt; [csclprd3-6-1:24853] MCW rank 1 bound to socket 1[core 2[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [./.][B/.]
</span><br>
<span class="quotelev1">&gt; [csclprd3-6-1:24853] MCW rank 2 bound to socket 0[core 1[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [./B][./.]
</span><br>
<span class="quotelev1">&gt; [csclprd3-6-1:24853] MCW rank 3 bound to socket 1[core 3[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [./.][./B]
</span><br>
<span class="quotelev1">&gt; [csclprd3-6-5:12646] MCW rank 4 bound to socket 0[core 0[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [B/.][./.]
</span><br>
<span class="quotelev1">&gt; [csclprd3-6-5:12646] MCW rank 5 bound to socket 1[core 2[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [./.][B/.]
</span><br>
<span class="quotelev1">&gt; [csclprd3-6-5:12646] MCW rank 6 bound to socket 0[core 1[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [./B][./.]
</span><br>
<span class="quotelev1">&gt; [csclprd3-6-5:12646] MCW rank 7 bound to socket 1[core 3[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [./.][./B]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-1:14499] MCW rank 24 bound to socket 0[core 4[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [././././B/.]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-1:14499] MCW rank 25 bound to socket 0[core 5[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [./././././B]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-1:14499] MCW rank 20 bound to socket 0[core 0[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [B/././././.]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-5:16978] MCW rank 44 bound to socket 0[core 0[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [B/././././.]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-5:16978] MCW rank 45 bound to socket 0[core 1[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [./B/./././.]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-1:14499] MCW rank 21 bound to socket 0[core 1[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [./B/./././.]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-5:16978] MCW rank 46 bound to socket 0[core 2[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [././B/././.]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-1:14499] MCW rank 22 bound to socket 0[core 2[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [././B/././.]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-1:14499] MCW rank 23 bound to socket 0[core 3[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [./././B/./.]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-5:16978] MCW rank 47 bound to socket 0[core 3[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [./././B/./.]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-5:16978] MCW rank 48 bound to socket 0[core 4[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [././././B/.]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-5:16978] MCW rank 49 bound to socket 0[core 5[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [./././././B]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-6:30547] MCW rank 51 bound to socket 0[core 1[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [./B/./././.]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-2:06006] MCW rank 30 bound to socket 0[core 4[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [././././B/.]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-6:30547] MCW rank 52 bound to socket 0[core 2[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [././B/././.]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-2:06006] MCW rank 31 bound to socket 0[core 5[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [./././././B]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-6:30547] MCW rank 53 bound to socket 0[core 3[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [./././B/./.]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-2:06006] MCW rank 26 bound to socket 0[core 0[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [B/././././.]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-6:30547] MCW rank 54 bound to socket 0[core 4[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [././././B/.]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-2:06006] MCW rank 27 bound to socket 0[core 1[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [./B/./././.]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-2:06006] MCW rank 28 bound to socket 0[core 2[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [././B/././.]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-6:30547] MCW rank 55 bound to socket 0[core 5[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [./././././B]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-3:14008] MCW rank 34 bound to socket 0[core 2[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [././B/././.]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-6:30547] MCW rank 50 bound to socket 0[core 0[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [B/././././.]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-3:14008] MCW rank 35 bound to socket 0[core 3[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [./././B/./.]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-3:14008] MCW rank 36 bound to socket 0[core 4[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [././././B/.]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-3:14008] MCW rank 37 bound to socket 0[core 5[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [./././././B]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-3:14008] MCW rank 32 bound to socket 0[core 0[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [B/././././.]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-3:14008] MCW rank 33 bound to socket 0[core 1[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [./B/./././.]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-2:06006] MCW rank 29 bound to socket 0[core 3[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [./././B/./.]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-12:12559] MCW rank 120 bound to socket 0[core 0[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [BB/../../../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-12:12559] MCW rank 121 bound to socket 0[core 1[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../BB/../../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-12:12559] MCW rank 122 bound to socket 0[core 2[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../BB/../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-12:12559] MCW rank 123 bound to socket 0[core 3[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../BB/../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-12:12559] MCW rank 124 bound to socket 0[core 4[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../../BB/..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-12:12559] MCW rank 125 bound to socket 0[core 5[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../../../BB]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-0:31325] MCW rank 8 bound to socket 0[core 0[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [B/././././.][./././././.]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-0:31325] MCW rank 9 bound to socket 1[core 6[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [./././././.][B/././././.]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-0:31325] MCW rank 10 bound to socket 0[core 1[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [./B/./././.][./././././.]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-7:20792] MCW rank 68 bound to socket 0[core 6[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../../../../BB/..][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-7:20792] MCW rank 69 bound to socket 1[core 14[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../../../../../..][../../../../../../BB/..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-0:31325] MCW rank 11 bound to socket 1[core 7[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [./././././.][./B/./././.]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-10:19372] MCW rank 100 bound to socket 0[core 6[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../../../../BB/..][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-10:19372] MCW rank 101 bound to socket 1[core 14[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../../../../../..][../../../../../../BB/..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-11:31905] MCW rank 116 bound to socket 0[core 6[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../../../../BB/..][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-11:31905] MCW rank 117 bound to socket 1[core 14[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../../../../../..][../../../../../../BB/..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-7:20792] MCW rank 70 bound to socket 0[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../../../../../BB][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-10:19372] MCW rank 102 bound to socket 0[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../../../../../BB][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-11:31905] MCW rank 118 bound to socket 0[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../../../../../BB][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-7:20792] MCW rank 71 bound to socket 1[core 15[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../../../../../..][../../../../../../../BB]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-10:19372] MCW rank 103 bound to socket 1[core 15[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../../../../../..][../../../../../../../BB]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-0:31325] MCW rank 12 bound to socket 0[core 2[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [././B/././.][./././././.]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-11:31905] MCW rank 119 bound to socket 1[core 15[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../../../../../..][../../../../../../../BB]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-0:31325] MCW rank 13 bound to socket 1[core 8[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [./././././.][././B/././.]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-7:20792] MCW rank 56 bound to socket 0[core 0[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [BB/../../../../../../..][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-10:19372] MCW rank 88 bound to socket 0[core 0[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [BB/../../../../../../..][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-11:31905] MCW rank 104 bound to socket 0[core 0[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [BB/../../../../../../..][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-10:19372] MCW rank 89 bound to socket 1[core 8[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../../../../../..][BB/../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-7:20792] MCW rank 57 bound to socket 1[core 8[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../../../../../..][BB/../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-10:19372] MCW rank 90 bound to socket 0[core 1[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../BB/../../../../../..][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-11:31905] MCW rank 105 bound to socket 1[core 8[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../../../../../..][BB/../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-0:31325] MCW rank 14 bound to socket 0[core 3[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [./././B/./.][./././././.]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-7:20792] MCW rank 58 bound to socket 0[core 1[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../BB/../../../../../..][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-10:19372] MCW rank 91 bound to socket 1[core 9[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../../../../../..][../BB/../../../../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-0:31325] MCW rank 15 bound to socket 1[core 9[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [./././././.][./././B/./.]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-7:20792] MCW rank 59 bound to socket 1[core 9[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../../../../../..][../BB/../../../../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-10:19372] MCW rank 92 bound to socket 0[core 2[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../BB/../../../../..][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-0:31325] MCW rank 16 bound to socket 0[core 4[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [././././B/.][./././././.]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-11:31905] MCW rank 106 bound to socket 0[core 1[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../BB/../../../../../..][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-0:31325] MCW rank 17 bound to socket 1[core 10[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [./././././.][././././B/.]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-7:20792] MCW rank 60 bound to socket 0[core 2[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../BB/../../../../..][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-10:19372] MCW rank 93 bound to socket 1[core 10[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../../../../../..][../../BB/../../../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-0:31325] MCW rank 18 bound to socket 0[core 5[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [./././././B][./././././.]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-11:31905] MCW rank 107 bound to socket 1[core 9[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../../../../../..][../BB/../../../../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-7:20792] MCW rank 61 bound to socket 1[core 10[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../../../../../..][../../BB/../../../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-10:19372] MCW rank 94 bound to socket 0[core 3[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../BB/../../../..][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-11:31905] MCW rank 108 bound to socket 0[core 2[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../BB/../../../../..][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-7:20792] MCW rank 62 bound to socket 0[core 3[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../BB/../../../..][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-11:31905] MCW rank 109 bound to socket 1[core 10[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../../../../../..][../../BB/../../../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-7:20792] MCW rank 63 bound to socket 1[core 11[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../../../../../..][../../../BB/../../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-10:19372] MCW rank 95 bound to socket 1[core 11[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../.../../../../../../..][../../../BB/../../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-11:31905] MCW rank 110 bound to socket 0[core 3[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../BB/../../../..][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-7:20792] MCW rank 64 bound to socket 0[core 4[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../../BB/../../..][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-10:19372] MCW rank 96 bound to socket 0[core 4[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../../BB/../../..][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-11:31905] MCW rank 111 bound to socket 1[core 11[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../../../../../..][../../../BB/../../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-0:31325] MCW rank 19 bound to socket 1[core 11[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [./././././.][./././././B]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-4:30528] MCW rank 42 bound to socket 0[core 4[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [././././B/.]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-4:30528] MCW rank 43 bound to socket 0[core 5[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [./././././B]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-4:30528] MCW rank 38 bound to socket 0[core 0[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [B/././././.]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-4:30528] MCW rank 39 bound to socket 0[core 1[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [./B/./././.]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-4:30528] MCW rank 40 bound to socket 0[core 2[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [././B/././.]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-4:30528] MCW rank 41 bound to socket 0[core 3[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [./././B/./.]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29240] MCW rank 127 bound to socket 1[core 6[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../../../..][BB/../../../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-8:15818] MCW rank 76 bound to socket 0[core 2[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../BB/../../../../..][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29240] MCW rank 128 bound to socket 0[core 1[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../BB/../../../..][../../../../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-8:15818] MCW rank 77 bound to socket 1[core 10[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../../../../../..][../../BB/../../../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29240] MCW rank 129 bound to socket 1[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../../../..][../BB/../../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-8:15818] MCW rank 78 bound to socket 0[core 3[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../BB/../../../..][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29240] MCW rank 130 bound to socket 0[core 2[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../BB/../../..][../../../../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-8:15818] MCW rank 79 bound to socket 1[core 11[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../../../../../..][../../../BB/../../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29240] MCW rank 131 bound to socket 1[core 8[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../../../..][../../BB/../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-8:15818] MCW rank 80 bound to socket 0[core 4[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../../BB/../../..][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29240] MCW rank 126 bound to socket 0[core 0[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [BB/../../../../..][../../../../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-8:15818] MCW rank 81 bound to socket 1[core 12[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../../../../../..][../../../../BB/../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-8:15818] MCW rank 82 bound to socket 0[core 5[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../../../BB/../..][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-8:15818] MCW rank 83 bound to socket 1[core 13[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../../../../../..][../../../../../BB/../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-8:15818] MCW rank 84 bound to socket 0[core 6[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../../../../BB/..][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-8:15818] MCW rank 85 bound to socket 1[core 14[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../../../../../..][../../../../../../BB/..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-8:15818] MCW rank 86 bound to socket 0[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../../../../../BB][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-8:15818] MCW rank 87 bound to socket 1[core 15[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../../../../../..][../../../../../../../BB]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-8:15818] MCW rank 72 bound to socket 0[core 0[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [BB/../../../../../../..][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-10:19372] MCW rank 97 bound to socket 1[core 12[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../../../../../..][../../../../BB/../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-11:31905] MCW rank 112 bound to socket 0[core 4[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../../BB/../../..][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-7:20792] MCW rank 65 bound to socket 1[core 12[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../../../../../..][../../../../BB/../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-8:15818] MCW rank 73 bound to socket 1[core 8[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../../../../../..][BB/../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-10:19372] MCW rank 98 bound to socket 0[core 5[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../../../BB/../..][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-11:31905] MCW rank 113 bound to socket 1[core 12[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../../../../../..][../../../../BB/../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-8:15818] MCW rank 74 bound to socket 0[core 1[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../BB/../../../../../..][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-7:20792] MCW rank 66 bound to socket 0[core 5[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../../../BB/../..][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-10:19372] MCW rank 99 bound to socket 1[core 13[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../../../../../..][../../../../../BB/../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-11:31905] MCW rank 114 bound to socket 0[core 5[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../../../BB/../..][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-11:31905] MCW rank 115 bound to socket 1[core 13[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../../../../../..][../../../../../BB/../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-8:15818] MCW rank 75 bound to socket 1[core 9[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../../../../../..][../BB/../../../../../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-7:20792] MCW rank 67 bound to socket 1[core 13[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../../../../../..][../../../../../BB/../..]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29244] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29244] Signal: Bus error (7)
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29244] Signal code: Non-existant physical address (2)
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29244] Failing at address: 0x7f67c02a7980
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29245] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29245] Signal: Bus error (7)
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29245] Signal code: Non-existant physical address (2)
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29245] Failing at address: 0x7f6390225900
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29247] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29247] Signal: Bus error (7)
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29247] Signal code: Non-existant physical address (2)
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29247] Failing at address: 0x7ff4842e8980
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29241] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29241] Signal: Bus error (7)
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29241] Signal code: Non-existant physical address (2)
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29241] Failing at address: 0x7fbd7c36ba80
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29242] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29242] Signal: Bus error (7)
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29242] Signal code: Non-existant physical address (2)
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29242] Failing at address: 0x7f6773728a80
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29243] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29243] Signal: Bus error (7)
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29243] Signal code: Non-existant physical address (2)
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29243] Failing at address: 0x7fbd7ea60980
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29244] [ 0] /lib64/libpthread.so.0(+0xf500)[0x7f67cfa7b500]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29244] [ 1]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x167f61)[0x7f67cfdf0f61]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29244] [ 2] [csclprd3-0-13:29245] [ 0]
</span><br>
<span class="quotelev1">&gt; /lib64/libpthread.so.0(+0xf500)[0x7f639fac4500]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29245] [ 1]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x167f61)[0x7f639fe39f61]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29245] [ 2] [csclprd3-0-13:29247] [ 0]
</span><br>
<span class="quotelev1">&gt; /lib64/libpthread.so.0(+0xf500)[0x7ff493ea8500]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29247] [ 1]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x167f61)[0x7ff49421df61]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29247] [ 2] [csclprd3-0-13:29243] [ 0]
</span><br>
<span class="quotelev1">&gt; /lib64/libpthread.so.0(+0xf500)[0x7fbd8e1b0500]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29243] [ 1]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x167f61)[0x7fbd8e525f61]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29243] [ 2] [csclprd3-0-13:29241] [ 0]
</span><br>
<span class="quotelev1">&gt; /lib64/libpthread.so.0(+0xf500)[0x7fbd8cd79500]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29241] [ 1]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x167f61)[0x7fbd8d0eef61]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29241] [ 2]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x168047)[0x7fbd8d0ef047]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29241] [ 3]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x55670)[0x7fbd8cfdc670]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29241] [ 4] [csclprd3-0-13:29242] [ 0]
</span><br>
<span class="quotelev1">&gt; /lib64/libpthread.so.0(+0xf500)[0x7f6782cd0500]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29242] [ 1]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x167f61)[0x7f6783045f61]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29242] [ 2]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x168047)[0x7f6783046047]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29242] [ 3]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x168047)[0x7fbd8e526047]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29243] [ 3]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x55670)[0x7fbd8e413670]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29243] [ 4]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_free_list_grow+0x3b9)[0x7fbd8e4145ab]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29243] [ 5]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_free_list_resize_mt+0xfb)[0x7fbd8e414751]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29243] [ 6]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(mca_btl_sm_add_procs+0x671)[0x7fbd8e5221c9]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29243] [ 7]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x14a628)[0x7fbd8e508628]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29243] [ 8]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_free_list_grow+0x3b9)[0x7fbd8cfdd5ab]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29241] [ 5]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_free_list_resize_mt+0xfb)[0x7fbd8cfdd751]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29241] [ 6]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(mca_btl_sm_add_procs+0x671)[0x7fbd8d0eb1c9]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29241] [ 7]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x14a628)[0x7fbd8d0d1628]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29241] [ 8]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(mca_pml_ob1_add_procs+0xff)[0x7fbd8d244d61]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29241] [ 9]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x168047)[0x7ff49421e047]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29247] [ 3]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x55670)[0x7ff49410b670]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29247] [ 4]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_free_list_grow+0x3b9)[0x7ff49410c5ab]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29247] [ 5]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_free_list_resize_mt+0xfb)[0x7ff49410c751]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29247] [ 6]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(mca_btl_sm_add_procs+0x671)[0x7ff49421a1c9]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29247] [ 7]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x14a628)[0x7ff494200628]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29247] [ 8]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(mca_pml_ob1_add_procs+0xff)[0x7ff494373d61]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29247] [ 9]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x168047)[0x7f67cfdf1047]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29244] [ 3]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x55670)[0x7f67cfcde670]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29244] [ 4]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_free_list_grow+0x3b9)[0x7f67cfcdf5ab]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29244] [ 5]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_free_list_resize_mt+0xfb)[0x7f67cfcdf751]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29244] [ 6]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(mca_btl_sm_add_procs+0x671)[0x7f67cfded1c9]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29244] [ 7]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x14a628)[0x7f67cfdd3628]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29244] [ 8]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(mca_pml_ob1_add_procs+0xff)[0x7f67cff46d61]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29244] [ 9]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x168047)[0x7f639fe3a047]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29245] [ 3]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x55670)[0x7f639fd27670]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29245] [ 4]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_free_list_grow+0x3b9)[0x7f639fd285ab]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29245] [ 5]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_free_list_resize_mt+0xfb)[0x7f639fd28751]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29245] [ 6]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(mca_btl_sm_add_procs+0x671)[0x7f639fe361c9]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29245] [ 7]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x14a628)[0x7f639fe1c628]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29245] [ 8]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(mca_pml_ob1_add_procs+0xff)[0x7f639ff8fd61]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29245] [ 9]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x55670)[0x7f6782f33670]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29242] [ 4]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_free_list_grow+0x3b9)[0x7f6782f345ab]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29242] [ 5]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_free_list_resize_mt+0xfb)[0x7f6782f34751]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29242] [ 6]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(mca_btl_sm_add_procs+0x671)[0x7f67830421c9]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29242] [ 7]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x14a628)[0x7f6783028628]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29242] [ 8]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_mpi_init+0xbda)[0x7fbd8d00c747]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29241] [10]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(MPI_Init+0x185)[0x7fbd8d04c50b]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29241] [11]
</span><br>
<span class="quotelev1">&gt; /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400ad0]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29241] [12]
</span><br>
<span class="quotelev1">&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x7fbd8c9f6cdd]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29241] [13]
</span><br>
<span class="quotelev1">&gt; /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400999]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29241] *** End of error message ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_mpi_init+0xbda)[0x7ff49413b747]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29247] [10]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(MPI_Init+0x185)[0x7ff49417b50b]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29247] [11]
</span><br>
<span class="quotelev1">&gt; /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400ad0]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29247] [12]
</span><br>
<span class="quotelev1">&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x7ff493b25cdd]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29247] [13]
</span><br>
<span class="quotelev1">&gt; /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400999]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29247] *** End of error message ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_mpi_init+0xbda)[0x7f67cfd0e747]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29244] [10]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(MPI_Init+0x185)[0x7f67cfd4e50b]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29244] [11]
</span><br>
<span class="quotelev1">&gt; /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400ad0]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29244] [12]
</span><br>
<span class="quotelev1">&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x7f67cf6f8cdd]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29244] [13]
</span><br>
<span class="quotelev1">&gt; /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400999]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29244] *** End of error message ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(mca_pml_ob1_add_procs+0xff)[0x7f678319bd61]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29242] [ 9]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_mpi_init+0xbda)[0x7f6782f63747]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29242] [10]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(MPI_Init+0x185)[0x7f6782fa350b]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29242] [11]
</span><br>
<span class="quotelev1">&gt; /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400ad0]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29242] [12]
</span><br>
<span class="quotelev1">&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x7f678294dcdd]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29242] [13]
</span><br>
<span class="quotelev1">&gt; /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400999]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29242] *** End of error message ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_mpi_init+0xbda)[0x7f639fd57747]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29245] [10]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(MPI_Init+0x185)[0x7f639fd9750b]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29245] [11]
</span><br>
<span class="quotelev1">&gt; /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400ad0]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29245] [12]
</span><br>
<span class="quotelev1">&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x7f639f741cdd]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29245] [13]
</span><br>
<span class="quotelev1">&gt; /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400999]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29245] *** End of error message ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(mca_pml_ob1_add_procs+0xff)[0x7fbd8e67bd61]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29243] [ 9]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_mpi_init+0xbda)[0x7fbd8e443747]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29243] [10]
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(MPI_Init+0x185)[0x7fbd8e48350b]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29243] [11]
</span><br>
<span class="quotelev1">&gt; /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400ad0]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29243] [12]
</span><br>
<span class="quotelev1">&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x7fbd8de2dcdd]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29243] [13]
</span><br>
<span class="quotelev1">&gt; /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400999]
</span><br>
<span class="quotelev1">&gt; [csclprd3-0-13:29243] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 126 with PID 0 on node csclprd3-0-13
</span><br>
<span class="quotelev1">&gt; exited on signal 7 (Bus error).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [lanew_at_csclprd3s1 openmpi]$
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
<span class="quotelev1">&gt;  ------------------------------
</span><br>
<span class="quotelev1">&gt; *From:* users [users-bounces_at_[hidden]] on behalf of Ralph Castain [
</span><br>
<span class="quotelev1">&gt; rhc_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; *Sent:* Tuesday, June 23, 2015 2:54 PM
</span><br>
<span class="quotelev1">&gt; *To:* Open MPI Users
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots =
</span><br>
<span class="quotelev1">&gt; crash
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   You shouldn't need any special flags for mpicc or mpirun to replicate
</span><br>
<span class="quotelev1">&gt; the problem. This will just let us see the line numbers associated with the
</span><br>
<span class="quotelev1">&gt; crash so we can narrow down the problem. Once we get that, we may need to
</span><br>
<span class="quotelev1">&gt; rerun with specific params to narrow it down further.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  BTW: when you get the backtrace, could you check the other threads as
</span><br>
<span class="quotelev1">&gt; well? There are several threads running underneath now, and it would help
</span><br>
<span class="quotelev1">&gt; to get the backtrace for each of them just to ensure there isn't something
</span><br>
<span class="quotelev1">&gt; funny going on.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Jun 23, 2015 at 12:19 PM, Lane, William &lt;William.Lane_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've had OpenMPI 1.8.6 installed on our cluster w/the --enable-debug
</span><br>
<span class="quotelev2">&gt;&gt; option. Here's what I think are the relevant flags returned from
</span><br>
<span class="quotelev2">&gt;&gt; ompi_info:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   openMPI 1.8.6 build info
</span><br>
<span class="quotelev2">&gt;&gt;   Fort MPI_SIZEOF: no
</span><br>
<span class="quotelev2">&gt;&gt;   C profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;   C++ profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;   Fort mpif.h profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;   Fort use mpi profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;   Fort use mpi_f08 prof: no
</span><br>
<span class="quotelev2">&gt;&gt;   C++ exceptions: no
</span><br>
<span class="quotelev2">&gt;&gt;  Thread support: posix (MPI_THREAD_MULTIPLE: no, OPAL support: yes, OMPI
</span><br>
<span class="quotelev2">&gt;&gt; progress: no, ORTE progress: yes, Event lib: yes)
</span><br>
<span class="quotelev2">&gt;&gt;   Sparse Groups: no
</span><br>
<span class="quotelev2">&gt;&gt;   Internal debug support: yes
</span><br>
<span class="quotelev2">&gt;&gt;   MPI interface warnings: yes
</span><br>
<span class="quotelev2">&gt;&gt;   MPI parameter check: runtime
</span><br>
<span class="quotelev2">&gt;&gt;   Memory profiling support: no
</span><br>
<span class="quotelev2">&gt;&gt;   Memory debugging support: no
</span><br>
<span class="quotelev2">&gt;&gt;   dl support: yes
</span><br>
<span class="quotelev2">&gt;&gt;   Heterogeneous support: no
</span><br>
<span class="quotelev2">&gt;&gt;   mpirun default --prefix: no
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Do I need to compile my OpenMPI C test code w/any special
</span><br>
<span class="quotelev2">&gt;&gt; switches passed to mpicc?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Are there any special switches should I use with mpirun to run my job?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for your help w/these issues.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Bill L.
</span><br>
<span class="quotelev2">&gt;&gt;  ------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; *From:* users [users-bounces_at_[hidden]] on behalf of Ralph Castain [
</span><br>
<span class="quotelev2">&gt;&gt; rhc_at_[hidden]]
</span><br>
<span class="quotelev2">&gt;&gt; *Sent:* Friday, June 19, 2015 6:40 AM
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *To:* Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; *Subject:* Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots =
</span><br>
<span class="quotelev2">&gt;&gt; crash
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Good point
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  William: can you rebuild OMPI with &#226;&#128;&#148;enable-debug and run this again so
</span><br>
<span class="quotelev2">&gt;&gt; we can see where the code is breaking?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  On Jun 19, 2015, at 6:11 AM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev2">&gt;&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  I got that, but I cannot read the stack trace (optimized build)
</span><br>
<span class="quotelev2">&gt;&gt; my best bet is to reproduce the issue, and then find how and why
</span><br>
<span class="quotelev2">&gt;&gt; ompi_free_list_t is segfault'ing.
</span><br>
<span class="quotelev2">&gt;&gt; that's why I requested info about the environment
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  iirc, ompi_free_list_t are different between master and v1.8, so an
</span><br>
<span class="quotelev2">&gt;&gt; incorrect back port could be the root cause.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Friday, June 19, 2015, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  I was fooled too, but that isn&#226;&#128;&#153;t the issue. The problem is that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_free_list is segfaulting:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    [csclprd3-0-13:30901] *** Process received signal ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:30901] Signal: Bus error (7)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:30901] Signal code: Non-existant physical address (2)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:30901] Failing at address: 0x7ff404351d80
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:30901] [ 0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /lib64/libpthread.so.0(+0xf500)[0x7ff41453c500]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:30901] [ 1]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0xd4fea)[0x7ff41481efea]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:30901] [ 2]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_free_list_grow+0x219)[0x7ff41479f009]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:30901] [ 3]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_free_list_resize_mt+0x40)[0x7ff41479f110]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:30901] [ 4]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0xc568e)[0x7ff41480f68e]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:30901] [ 5]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(mca_pml_ob1_add_procs+0xd5)[0x7ff4148e3715]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:30901] [ 6]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_mpi_init+0x8d6)[0x7ff4147b9ad6]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:30901] [ 7]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(MPI_Init+0x170)[0x7ff4147d8c60]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:30901] [ 8]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400ad0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:30901] [ 9]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x7ff4141b9cdd]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:30901] [10]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400999]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:30901] *** End of error message ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  On Jun 19, 2015, at 5:52 AM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gilles.gouaillardet_at_[hidden] &lt;<a href="http://UrlBlockedError.aspx">http://UrlBlockedError.aspx</a>&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lane,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  could you please describe your configuration ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  how many sockets per node ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  how many cores per socket ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  how many threads per core ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  what is the minimum number of nodes needed to reproduce the issue ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  do all the nodes have the same configuration ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  if yes, what happens without --hetero-nodes ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Friday, June 19, 2015, Lane, William &lt;William.Lane_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;<a href="http://UrlBlockedError.aspx">http://UrlBlockedError.aspx</a>&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Ralph,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I created a hostfile that just has the names of the hosts while
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; specifying no slot information whatsoever (e.g. csclprd3-0-0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and received the following errors:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun -np 132 -report-bindings --prefix /hpc/apps/mpi/openmpi/1.8.6/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --hostfile hostfile-noslots --mca btl_tcp_if_include eth0 --hetero-nodes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /hpc/home/lanew/mpi/openmpi/ProcessColors3
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-6-5:14770] MCW rank 4 bound to socket 0[core 0[hwt 0]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 0[core 1[hwt 0]]: [B/B][./.]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-6-5:14770] MCW rank 5 bound to socket 1[core 2[hwt 0]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 1[core 3[hwt 0]]: [./.][B/B]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-6-5:14770] MCW rank 6 bound to socket 0[core 0[hwt 0]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 0[core 1[hwt 0]]: [B/B][./.]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-6-5:14770] MCW rank 7 bound to socket 1[core 2[hwt 0]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 1[core 3[hwt 0]]: [./.][B/B]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-1:16437] MCW rank 24 is not bound (or bound to all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available processors)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-5:18925] MCW rank 48 is not bound (or bound to all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available processors)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-1:16437] MCW rank 25 is not bound (or bound to all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available processors)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-5:18925] MCW rank 49 is not bound (or bound to all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available processors)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-1:16437] MCW rank 20 is not bound (or bound to all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available processors)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-1:16437] MCW rank 21 is not bound (or bound to all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available processors)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-5:18925] MCW rank 44 is not bound (or bound to all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available processors)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-5:18925] MCW rank 45 is not bound (or bound to all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available processors)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-1:16437] MCW rank 22 is not bound (or bound to all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available processors)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-1:16437] MCW rank 23 is not bound (or bound to all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available processors)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-5:18925] MCW rank 46 is not bound (or bound to all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available processors)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-5:18925] MCW rank 47 is not bound (or bound to all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available processors)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-3:15946] MCW rank 36 is not bound (or bound to all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available processors)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-3:15946] MCW rank 37 is not bound (or bound to all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available processors)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-3:15946] MCW rank 32 is not bound (or bound to all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available processors)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-3:15946] MCW rank 33 is not bound (or bound to all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available processors)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-3:15946] MCW rank 34 is not bound (or bound to all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available processors)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-3:15946] MCW rank 35 is not bound (or bound to all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available processors)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-12:09165] MCW rank 124 is not bound (or bound to all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available processors)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-12:09165] MCW rank 125 is not bound (or bound to all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available processors)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-12:09165] MCW rank 120 is not bound (or bound to all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available processors)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-12:09165] MCW rank 121 is not bound (or bound to all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available processors)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-12:09165] MCW rank 122 is not bound (or bound to all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available processors)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-12:09165] MCW rank 123 is not bound (or bound to all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available processors)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-6-1:27030] MCW rank 0 bound to socket 0[core 0[hwt 0]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 0[core 1[hwt 0]]: [B/B][./.]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-6-1:27030] MCW rank 1 bound to socket 1[core 2[hwt 0]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 1[core 3[hwt 0]]: [./.][B/B]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-6-1:27030] MCW rank 2 bound to socket 0[core 0[hwt 0]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 0[core 1[hwt 0]]: [B/B][./.]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-6-1:27030] MCW rank 3 bound to socket 1[core 2[hwt 0]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 1[core 3[hwt 0]]: [./.][B/B]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-2:07944] MCW rank 30 is not bound (or bound to all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available processors)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-6:32510] MCW rank 54 is not bound (or bound to all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available processors)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-2:07944] MCW rank 31 is not bound (or bound to all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available processors)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-6:32510] MCW rank 55 is not bound (or bound to all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available processors)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-2:07944] MCW rank 26 is not bound (or bound to all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available processors)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-6:32510] MCW rank 50 is not bound (or bound to all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available processors)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-6:32510] MCW rank 51 is not bound (or bound to all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available processors)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-2:07944] MCW rank 27 is not bound (or bound to all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available processors)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-2:07944] MCW rank 28 is not bound (or bound to all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available processors)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-6:32510] MCW rank 52 is not bound (or bound to all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available processors)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-6:32510] MCW rank 53 is not bound (or bound to all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available processors)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-2:07944] MCW rank 29 is not bound (or bound to all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available processors)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-0:00453] MCW rank 11 bound to socket 1[core 6[hwt 0]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 1[core 7[hwt 0]], socket 1[core 8[hwt 0]], socket 1[core 9[hwt 0]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket1[core 10[hwt 0]], socket 1[core 11[hwt 0]]:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [./././././.][B/B/B/B/B/B]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-0:00453] MCW rank 12 bound to socket 0[core 0[hwt 0]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 0[core 1[hwt 0]], socket 0[core 2[hwt 0]], socket 0[core 3[hwt 0]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 0[core 4[hwt 0]], socket 0[core 5[hwt 0]]: [B/B/B/B/B/B][./././././.]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-0:00453] MCW rank 13 bound to socket 1[core 6[hwt 0]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 1[core 7[hwt 0]], socket 1[core 8[hwt 0]], socket 1[core 9[hwt 0]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 1[core 10[hwt 0]], socket 1[core 11[hwt 0]]:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [./././././.][B/B/B/B/B/B]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-0:00453] MCW rank 14 bound to socket 0[core 0[hwt 0]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 0[core 1[hwt 0]], socket 0[core 2[hwt 0]], socket 0[core 3[hwt 0]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 0[core 4[hwt 0]], socket 0[core 5[hwt 0]]: [B/B/B/B/B/B][./././././.]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-0:00453] MCW rank 15 bound to socket 1[core 6[hwt 0]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 1[core 7[hwt 0]], socket 1[core 8[hwt 0]], socket 1[core 9[hwt 0]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 1[core 10[hwt 0]], socket 1[core 11[hwt 0]]:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [./././././.][B/B/B/B/B/B]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-0:00453] MCW rank 16 bound to socket 0[core 0[hwt 0]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 0[core 1[hwt 0]], socket 0[core 2[hwt 0]], socket 0[core 3[hwt 0]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 0[core 4[hwt 0]], socket 0[core 5[hwt 0]]: [B/B/B/B/B/B][./././././.]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-7:22146] MCW rank 64 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-7:22146] MCW rank 65 bound to socket 1[core 8[hwt 0-1]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0-1]], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1[core 14[hwt 0-1]], socket 1[core 15[hwt 0-1]]:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-0:00453] MCW rank 17 bound to socket 1[core 6[hwt 0]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 1[core 7[hwt 0]], socket 1[core 8[hwt 0]], socket 1[core 9[hwt 0]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 1[core 10[hwt 0]], socket 1[core 11[hwt 0]]:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [./././././.][B/B/B/B/B/B]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-0:00453] MCW rank 18 bound to socket 0[core 0[hwt 0]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 0[core 1[hwt 0]], socket 0[core 2[hwt 0]], socket 0[core 3[hwt 0]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 0[core 4[hwt 0]], socket 0[core 5[hwt 0]]: [B/B/B/B/B/B][./././././.]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-11:00885] MCW rank 116 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-11:00885] MCW rank 117 bound to socket 1[core 8[hwt 0-1]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0-1]], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1[core 14[hwt 0-1]],socket 1[core 15[hwt 0-1]]:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-10:20752] MCW rank 100 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-10:20752] MCW rank 101 bound to socket 1[core 8[hwt 0-1]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0-1]], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1[core 14[hwt 0-1]], socket 1[core 15[hwt 0-1]]:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-0:00453] MCW rank 19 bound to socket 1[core 6[hwt 0]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 1[core 7[hwt 0]], socket 1[core 8[hwt 0]], socket 1[core 9[hwt 0]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 1[core 10[hwt 0]], socket 1[core 11[hwt 0]]:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [./././././.][B/B/B/B/B/B]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-7:22146] MCW rank 66 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-11:00885] MCW rank 118 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-0:00453] MCW rank 8 bound to socket 0[core 0[hwt 0]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 0[core 1[hwt 0]], socket 0[core 2[hwt 0]], socket 0[core 3[hwt 0]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 0[core 4[hwt 0]], socket 0[core 5[hwt 0]]: [B/B/B/B/B/B][./././././.]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-10:20752] MCW rank 102 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-0:00453] MCW rank 9 bound to socket 1[core 6[hwt 0]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 1[core 7[hwt 0]], socket 1[core 8[hwt 0]], socket 1[core 9[hwt 0]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 1[core 10[hwt 0]], socket 1[core 11[hwt 0]]:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [./././././.][B/B/B/B/B/B]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-0:00453] MCW rank 10 bound to socket 0[core 0[hwt 0]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 0[core 1[hwt 0]], socket 0[core 2[hwt 0]], socket 0[core 3[hwt 0]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 0[core 4[hwt 0]], socket 0[core 5[hwt 0]]: [B/B/B/B/B/B][./././././.]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-4:32449] MCW rank 42 is not bound (or bound to all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available processors)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-4:32449] MCW rank 43 is not bound (or bound to all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available processors)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-4:32449] MCW rank 38 is not bound (or bound to all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available processors)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-4:32449] MCW rank 39 is not bound (or bound to all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available processors)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-4:32449] MCW rank 40 is not bound (or bound to all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available processors)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-4:32449] MCW rank 41 is not bound (or bound to all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available processors)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:30897] MCW rank 126 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]]:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [BB/BB/BB/BB/BB/BB][../../../../../..]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-8:17159] MCW rank 80 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:30897] MCW rank 127 bound to socket 1[core 6[hwt 0-1]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 1[core 7[hwt 0-1]], socket 1[core 8[hwt 0-1]], socket 1[core 9[hwt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt 0-1]]:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [../../../../../..][BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-8:17159] MCW rank 81 bound to socket 1[core 8[hwt 0-1]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0-1]], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1[core 14[hwt 0-1]], socket 1[core 8[hwt 0-1]], socket 1[core 9[hwt 0-1]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt 0-1]]:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [../../../../../..][BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-8:17159] MCW rank 81 bound to socket 1[core 8[hwt 0-1]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0-1]], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1[core 14[hwt 0-1]], socket 1[core 15[hwt 0-1]]:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:30897] MCW rank 128 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]]:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [BB/BB/BB/BB/BB/BB][../../../../../..]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-8:17159] MCW rank 82 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:30897] MCW rank 129 bound to socket 1[core 6[hwt 0-1]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 1[core 7[hwt 0-1]], socket 1[core 8[hwt 0-1]], socket 1[core 9[hwt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt 0-1]]:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [../../../../../..][BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-8:17159] MCW rank 83 bound to socket 1[core 8[hwt 0-1]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0-1]], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1[core 14[hwt 0-1]], socket 1[core 15[hwt 0-1]]:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:30897] MCW rank 130 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]]:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [BB/BB/BB/BB/BB/BB][../../../../../..]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:30897] MCW rank 131 bound to socket 1[core 6[hwt 0-1]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 1[core 7[hwt 0-1]], socket 1[core 8[hwt 0-1]], socket 1[core 9[hwt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt 0-1]]:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [../../../../../..][BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-8:17159] MCW rank 84 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-8:17159] MCW rank 85 bound to socket 1[core 8[hwt 0-1]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0-1]], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1[core 14[hwt 0-1]], socket 1[core 15[hwt 0-1]]:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-11:00885] MCW rank 119 bound to socket 1[core 8[hwt 0-1]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0-1]], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1[core 14[hwt 0-1]], socket 1[core 15[hwt 0-1]]:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-10:20752] MCW rank 103 bound to socket 1[core 8[hwt 0-1]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0-1]], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1[core 14[hwt 0-1]], socket 1[core 15[hwt 0-1]]:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-8:17159] MCW rank 86 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-7:22146] MCW rank 67 bound to socket 1[core 8[hwt 0-1]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0-1], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket 1[core
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 14[hwt 0-1]], socket 1[core 15[hwt 0-1]]:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-11:00885] MCW rank 104 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..][csclprd3-0-10:20752] MCW
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rank 88 bound to socket 0[core 0[hwt 0-1]], socket 0[core 1[hwt 0-1]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt 0-1]], socket 0[core 4[hwt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core 6[hwt 0-1]], socket 0[core
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 7[hwt 0-1]]: [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-8:17159] MCW rank 87 bound to socket 1[core 8[hwt 0-1]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0-1]], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1[core 14[hwt 0-1]], socket 1[core 15[hwt 0-1]]:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-11:00885] MCW rank 105 bound to socket 1[core 8[hwt 0-1]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0-1]], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1[core 14[hwt 0-1]], socket 1[core 15[hwt 0-1]]:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-10:20752] MCW rank 89 bound to socket 1[core 8[hwt 0-1]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0-1]], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1[core 14[hwt 0-1]], socket 1[core 15[hwt 0-1]]:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-8:17159] MCW rank 72 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-7:22146] MCW rank 68 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-11:00885] MCW rank 106 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-10:20752] MCW rank 90 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-8:17159] MCW rank 73 bound to socket 1[core 8[hwt 0-1]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0-1]], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1[core 14[hwt 0-1]], socket 1[core 15[hwt 0-1]]:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-11:00885] MCW rank 107 bound to socket 1[core 8[hwt 0-1]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0-1]], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1[core 14[hwt 0-1]], socket 1[core 15[hwt 0-1]]:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-7:22146] MCW rank 69 bound to socket 1[core 8[hwt 0-1]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0-1]], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1[core 14[hwt 0-1]], socket 1[core 15[hwt 0-1]]:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-8:17159] MCW rank 74 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-11:00885] MCW rank 108 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-7:22146] MCW rank 57 bound to socket 1[core 8[hwt 0-1]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0-1]], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1[core 14[hwt 0-1]], socket 1[core 15[hwt 0-1]]:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-11:00885] MCW rank 114 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-10:20752] MCW rank 98 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-11:00885] MCW rank 115 bound to socket 1[core 8[hwt 0-1]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0-1]], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1[core 14[hwt 0-1]], socket 1[core 15[hwt 0-1]]:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-7:22146] MCW rank 58 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-10:20752] MCW rank 99 bound to socket 1[core 8[hwt 0-1]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0-1]], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1[core 14[hwt 0-1]], socket 1[core 15[hwt 0-1]]:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-7:22146] MCW rank 59 bound to socket 1[core 8[hwt 0-1]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0-1]], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1[core 14[hwt 0-1]], socket 1[core 15[hwt 0-1]]:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-7:22146] MCW rank 60 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-7:22146] MCW rank 61 bound to socket 1[core 8[hwt 0-1]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0-1]], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1[core 14[hwt 0-1]], socket 1[core 15[hwt 0-1]]:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-7:22146] MCW rank 62 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-7:22146] MCW rank 63 bound to socket 1[core 8[hwt 0-1]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0-1]], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1[core 14[hwt 0-1]], socket 1[core 15[hwt 0-1]]:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:30901] *** Process received signal ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:30901] Signal: Bus error (7)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:30901] Signal code: Non-existant physical address (2)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:30901] Failing at address: 0x7ff404351d80
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:30901] [ 0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /lib64/libpthread.so.0(+0xf500)[0x7ff41453c500]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:30901] [ 1]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0xd4fea)[0x7ff41481efea]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:30901] [ 2]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_free_list_grow+0x219)[0x7ff41479f009]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:30901] [ 3]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_free_list_resize_mt+0x40)[0x7ff41479f110]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:30901] [ 4]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0xc568e)[0x7ff41480f68e]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:30901] [ 5]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(mca_pml_ob1_add_procs+0xd5)[0x7ff4148e3715]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:30901] [ 6]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_mpi_init+0x8d6)[0x7ff4147b9ad6]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:30901] [ 7]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(MPI_Init+0x170)[0x7ff4147d8c60]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:30901] [ 8]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400ad0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:30901] [ 9]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x7ff4141b9cdd]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:30901] [10]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400999]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:30901] *** End of error message ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  ------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *From:* users [users-bounces_at_[hidden]] on behalf of Ralph Castain [
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rhc_at_[hidden]]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *Sent:* Thursday, June 18, 2015 5:26 PM
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *To:* Open MPI Users
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *Subject:* Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; = crash
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  FWIW: I don&#226;&#128;&#153;t think this actually has anything to do with the #procs
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; you are trying to run. Instead, I expect it has to do with confusion over
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; how many cores it can bind across. When you tell it to use-hwthread-cpus,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; you are asking us to map processes to hwthreads, and not cores. I don&#226;&#128;&#153;t
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; know which nodes are which, but it could be that we are getting incorrect
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; info somewhere.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Given that you are limiting the number of procs to the number of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; cores, is there some reason why you are asking us to use-hwthread-cpus? Why
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; not just leave it at the default core level?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  I also suspect that you would have no problems if you &#226;&#128;&#148;bind-to none -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; does that in fact work?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  On Jun 18, 2015, at 4:54 PM, Lane, William &lt;William.Lane_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  I'm having a strange problem w/OpenMPI 1.8.6. If I run
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; my OpenMPI test code (compiled against OpenMPI 1.8.6
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libraries) on &lt; 131 slots I get no issues. Anything over 131
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; errors out:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun -np 132 -report-bindings --prefix /hpc/apps/mpi/openmpi/1.8.6/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --hostfile hostfile-single --mca btl_tcp_if_include eth0 --hetero-nodes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --use-hwthread-cpus /hpc/home/lanew/mpi/openmpi/ProcessColors3
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The hostfile has the number of slots restricted
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to the number of cores, while the max-slots includes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the hyperthreading cores (e.g. csclprd3-0-0 slots=6
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; max-slots=12).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The nodes are a mix of IBM x3550 nodes some
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; are Sandybridges and others are older Xeons.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I would like to add that the submit node from
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; which I am launching mpirun has the open files
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; soft limit (ulimit -a) set to 1024, while the hard limit
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (ulimit -Ha) is set to 4096. I know open file limits
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; were an issue w/an older version of OpenMPI. The
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; compute nodes all have their hard open files limit
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and soft open files limits set to 4096.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Here's the output (csclprd3-0-13 is the last node
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; listed in the hostfile hostfile-single):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28765] Signal: Bus error (7)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28765] Signal code: Non-existant physical address (2)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28765] Failing at address: 0x7f30002a8980
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28766] *** Process received signal ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28766] Signal: Bus error (7)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28766] Signal code: Non-existant physical address (2)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28766] Failing at address: 0x7fe137662880
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28768] *** Process received signal ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28768] Signal: Bus error (7)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28768] Signal code: Non-existant physical address (2)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28768] Failing at address: 0x7f9b40228a80
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28770] *** Process received signal ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28770] Signal: Bus error (7)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28770] Signal code: Non-existant physical address (2)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28770] Failing at address: 0x7f0de7f2bb00
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28767] *** Process received signal ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28767] Signal: Bus error (7)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28767] Signal code: Non-existant physical address (2)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28767] Failing at address: 0x7f9b6c2e8980
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28764] *** Process received signal ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28764] Signal: Bus error (7)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28764] Signal code: Non-existant physical address (2)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28765] Signal: Bus error (7)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28765] Signal code: Non-existant physical address (2)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28765] Failing at address: 0x7f30002a8980
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28766] *** Process received signal ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28766] Signal: Bus error (7)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28766] Signal code: Non-existant physical address (2)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28766] Failing at address: 0x7fe137662880
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28768] *** Process received signal ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28768] Signal: Bus error (7)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28768] Signal code: Non-existant physical address (2)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28768] Failing at address: 0x7f9b40228a80
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28770] *** Process received signal ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28770] Signal: Bus error (7)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28770] Signal code: Non-existant physical address (2)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28770] Failing at address: 0x7f0de7f2bb00
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28767] *** Process received signal ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28767] Signal: Bus error (7)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28767] Signal code: Non-existant physical address (2)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28767] Failing at address: 0x7f9b6c2e8980
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28764] *** Process received signal ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28764] Signal: Bus error (7)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28764] Signal code: Non-existant physical address (2)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28768] [ 3]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_free_list_resize_mt+0x40)[0x7f9b513ad110]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28768] [ 4]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_free_list_grow+0x219)[0x7f0df77b6009]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28770] [ 3]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_free_list_resize_mt+0x40)[0x7f0df77b6110]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28770] [ 4]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0xc568e)[0x7f9b5141d68e]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28768] [ 5]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(mca_pml_ob1_add_procs+0xd5)[0x7f9b514f1715]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28768] [ 6]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0xc568e)[0x7f30115ea68e]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28765] [ 5]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(mca_pml_ob1_add_procs+0xd5)[0x7f30116be715]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28765] [ 6]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0xc568e)[0x7f9b7bb3b68e]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28767] [ 5]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(mca_pml_ob1_add_procs+0xd5)[0x7f9b7bc0f715]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28767] [ 6] [csclprd3-0-13:28764] [ 4]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0xc568e)[0x7fa946bb768e]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28764] [ 5]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0xc568e)[0x7fe146d4068e]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28766] [ 5]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0xc568e)[0x7f0df782668e]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28770] [ 5]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(mca_pml_ob1_add_procs+0xd5)[0x7f0df78fa715]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28770] [ 6]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_mpi_init+0x8d6)[0x7f0df77d0ad6]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28770] [ 7]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(mca_pml_ob1_add_procs+0xd5)[0x7fe146e14715]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28766] [ 6]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_mpi_init+0x8d6)[0x7fe146ceaad6]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28766] [ 7]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_mpi_init+0x8d6)[0x7f9b513c7ad6]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28768] [ 7]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(MPI_Init+0x170)[0x7f9b513e6c60]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28768] [ 8]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400ad0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28768] [ 9]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x7f9b50dc7cdd]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28768] [10]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400999]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28768] *** End of error message ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_mpi_init+0x8d6)[0x7f3011594ad6]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28765] [ 7]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(MPI_Init+0x170)[0x7f30115b3c60]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28765] [ 8]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400ad0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28765] [ 9]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x7f3010f94cdd]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28765] [10]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400999]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28765] *** End of error message ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_mpi_init+0x8d6)[0x7f9b7bae5ad6]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28767] [ 7]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(MPI_Init+0x170)[0x7f9b7bb04c60]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28767] [ 8]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400ad0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28767] [ 9]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x7f9b7b4e5cdd]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28767] [10]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400999]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28767] *** End of error message ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(mca_pml_ob1_add_procs+0xd5)[0x7fa946c8b715]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28764] [ 6]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_mpi_init+0x8d6)[0x7fa946b61ad6]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28764] [ 7]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(MPI_Init+0x170)[0x7f0df77efc60]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28770] [ 8]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400ad0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28770] [ 9]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x7f0df71d0cdd]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28770] [10]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400999]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28770] *** End of error message ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(MPI_Init+0x170)[0x7fe146d09c60]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28766] [ 8]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400ad0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28766] [ 9]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x7fe1466eacdd]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28767] *** End of error message ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(mca_pml_ob1_add_procs+0xd5)[0x7fa946c8b715]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28764] [ 6]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_mpi_init+0x8d6)[0x7fa946b61ad6]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28764] [ 7]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(MPI_Init+0x170)[0x7f0df77efc60]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28770] [ 8]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400ad0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28770] [ 9]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x7f0df71d0cdd]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28770] [10]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400999]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28770] *** End of error message ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(MPI_Init+0x170)[0x7fe146d09c60]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28766] [ 8]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400ad0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28766] [ 9]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x7fe1466eacdd]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28766] [10]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400999]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28766] *** End of error message ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(MPI_Init+0x170)[0x7fa946b80c60]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28764] [ 8]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400ad0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28764] [ 9]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x7fa946561cdd]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28764] [10]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400999]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-13:28764] *** End of error message ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun noticed that process rank 126 with PID 0 on node csclprd3-0-13
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; exited on signal 7 (Bus error).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Could a lack of the necessary NUMA libraries or the wrong version of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; NUMA
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libraries be contributing to this?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  IMPORTANT WARNING: This message is intended for the use of the person
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; or entity to which it is addressed and may contain information that is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; privileged and confidential, the disclosure of which is governed by
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; applicable law. If the reader of this message is not the intended
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; recipient, or the employee or agent responsible for delivering it to the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; intended recipient, you are hereby notified that any dissemination,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; distribution or copying of this information is strictly prohibited. Thank
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; you for your cooperation. _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/06/27159.php">http://www.open-mpi.org/community/lists/users/2015/06/27159.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   IMPORTANT WARNING: This message is intended for the use of the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; person or entity to which it is addressed and may contain information that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; is privileged and confidential, the disclosure of which is governed by
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; applicable law. If the reader of this message is not the intended
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; recipient, or the employee or agent responsible for delivering it to the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; intended recipient, you are hereby notified that any dissemination,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; distribution or copying of this information is strictly prohibited. Thank
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; you for your cooperation.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden] &lt;<a href="http://UrlBlockedError.aspx">http://UrlBlockedError.aspx</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/06/27164.php">http://www.open-mpi.org/community/lists/users/2015/06/27164.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/06/27166.php">http://www.open-mpi.org/community/lists/users/2015/06/27166.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     IMPORTANT WARNING: This message is intended for the use of the
</span><br>
<span class="quotelev2">&gt;&gt; person or entity to which it is addressed and may contain information that
</span><br>
<span class="quotelev2">&gt;&gt; is privileged and confidential, the disclosure of which is governed by
</span><br>
<span class="quotelev2">&gt;&gt; applicable law. If the reader of this message is not the intended
</span><br>
<span class="quotelev2">&gt;&gt; recipient, or the employee or agent responsible for delivering it to the
</span><br>
<span class="quotelev2">&gt;&gt; intended recipient, you are hereby notified that any dissemination,
</span><br>
<span class="quotelev2">&gt;&gt; distribution or copying of this information is strictly prohibited. Thank
</span><br>
<span class="quotelev2">&gt;&gt; you for your cooperation.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/06/27176.php">http://www.open-mpi.org/community/lists/users/2015/06/27176.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   IMPORTANT WARNING: This message is intended for the use of the person
</span><br>
<span class="quotelev1">&gt; or entity to which it is addressed and may contain information that is
</span><br>
<span class="quotelev1">&gt; privileged and confidential, the disclosure of which is governed by
</span><br>
<span class="quotelev1">&gt; applicable law. If the reader of this message is not the intended
</span><br>
<span class="quotelev1">&gt; recipient, or the employee or agent responsible for delivering it to the
</span><br>
<span class="quotelev1">&gt; intended recipient, you are hereby notified that any dissemination,
</span><br>
<span class="quotelev1">&gt; distribution or copying of this information is strictly prohibited. Thank
</span><br>
<span class="quotelev1">&gt; you for your cooperation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/06/27179.php">http://www.open-mpi.org/community/lists/users/2015/06/27179.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27181/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27182.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem getting job to start"</a>
<li><strong>Previous message:</strong> <a href="27180.php">Lane, William: "Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash"</a>
<li><strong>In reply to:</strong> <a href="27179.php">Lane, William: "Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27184.php">Lane, William: "Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash"</a>
<li><strong>Reply:</strong> <a href="27184.php">Lane, William: "Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash"</a>
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
