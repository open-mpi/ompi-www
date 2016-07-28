<?
$subject_val = "Re: [OMPI devel] binding output error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 20 21:48:35 2015" -->
<!-- isoreceived="20150421014835" -->
<!-- sent="Tue, 21 Apr 2015 10:48:13 +0900" -->
<!-- isosent="20150421014813" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] binding output error" -->
<!-- id="OFD919D10F.E9CACF65-ON49257E2E.00098BC9-49257E2E.0009EE55_at_jcity.maeda.co.jp" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="AM2PR05MB077186B346617B75ECAC4514AEEF0_at_AM2PR05MB0771.eurprd05.prod.outlook.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] binding output error<br>
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20binding%20output%20error"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2015-04-20 21:48:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17292.php">Kawashima, Takahiro: "Re: [OMPI devel] c_accumulate"</a>
<li><strong>Previous message:</strong> <a href="17290.php">Gilles Gouaillardet: "Re: [OMPI devel] c_accumulate"</a>
<li><strong>In reply to:</strong> <a href="17287.php">Devendar Bureddy: "Re: [OMPI devel] binding output error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17295.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] binding output error"</a>
<li><strong>Reply:</strong> <a href="17295.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] binding output error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Devendar,
<br>

<br>
As far as I know, the report-bindings option shows the logical
<br>
cpu order. On the other hand, you are talking about physical one,
<br>
I guess.
<br>

<br>
Regards,
<br>
Tetsuya Mishima
<br>

<br>
2015/04/21 9:04:37&#227;&#128;&#129;&quot;devel&quot;&#227;&#129;&#149;&#227;&#130;&#147;&#227;&#129;&#175;&#227;&#128;&#140;Re: [OMPI devel] binding output
<br>
error&#227;&#128;&#141;&#227;&#129;&#167;&#230;&#155;&#184;&#227;&#129;&#141;&#227;&#129;&#190;&#227;&#129;&#151;&#227;&#129;&#159;
<br>
<span class="quotelev1">&gt; HT is not enabled.&#194;&#160; All node are same topo . This is reproducible even on
</span><br>
single node.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I ran osu latency to see if it is really is mapped to other socket or not
</span><br>
with &#226;&#128;&#147;map-by socket.&#194;&#160; It looks likes mapping is correct as per latency
<br>
test.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $mpirun -np 2 -report-bindings -map-by
</span><br>
socket&#194;&#160; /hpc/local/benchmarks/hpc-stack-icc/install/ompi-mellanox-v1.8/tests/osu-micro-benchmarks-4.4.1/osu_latency
<br>

<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [clx-orion-001:10084] MCW rank 0 bound to socket 0[core 0[hwt 0]]:
</span><br>
[B/././././././././././././.][./././././././././././././.]
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [clx-orion-001:10084] MCW rank 1 bound to socket 1[core 14[hwt 0]]:
</span><br>
[./././././././././././././.][B/././././././././././././.]
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # OSU MPI Latency Test v4.4.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # Size&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; Latency (us)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 0&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; 0.50
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; 0.50
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; 0.50
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 4&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; 0.49
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
<span class="quotelev1">&gt; $mpirun -np 2 -report-bindings -cpu-set
</span><br>
1,7 /hpc/local/benchmarks/hpc-stack-icc/install/ompi-mellanox-v1.8/tests/osu-micro-benchmarks-4.4.1/osu_latency
<br>

<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [clx-orion-001:10155] MCW rank 0 bound to socket 0[core 1[hwt 0]]:
</span><br>
[./B/./././././././././././.][./././././././././././././.]
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [clx-orion-001:10155] MCW rank 1 bound to socket 0[core 7[hwt 0]]:
</span><br>
[./././././././B/./././././.][./././././././././././././.]
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # OSU MPI Latency Test v4.4.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # Size&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; Latency (us)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 0&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; 0.23
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; 0.24
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; 0.23
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 4&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; 0.22
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 8&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; 0.23
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Both hwloc and /proc/cpuinfo indicates following cpu numbering
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; socket 0 cpus: 0 1 2 3 4 5 6 14 15 16 17 18 19 20
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; socket 1 cpus: 7 8 9 10 11 12 13 21 22 23 24 25 26 27
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $hwloc-info -f
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Machine (256GB)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#194;&#160; NUMANode L#0 (P#0 128GB) + Socket L#0 + L3 L#0 (35MB)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#194;&#160;&#194;&#160;&#194;&#160; L2 L#0 (256KB) + L1 L#0 (32KB) + Core L#0 + PU L#0 (P#0)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#194;&#160;&#194;&#160;&#194;&#160; L2 L#1 (256KB) + L1 L#1 (32KB) + Core L#1 + PU L#1 (P#1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#194;&#160;&#194;&#160;&#194;&#160; L2 L#2 (256KB) + L1 L#2 (32KB) + Core L#2 + PU L#2 (P#2)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#194;&#160;&#194;&#160;&#194;&#160; L2 L#3 (256KB) + L1 L#3 (32KB) + Core L#3 + PU L#3 (P#3)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#194;&#160;&#194;&#160;&#194;&#160; L2 L#4 (256KB) + L1 L#4 (32KB) + Core L#4 + PU L#4 (P#4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#194;&#160;&#194;&#160;&#194;&#160; L2 L#5 (256KB) + L1 L#5 (32KB) + Core L#5 + PU L#5 (P#5)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#194;&#160;&#194;&#160;&#194;&#160; L2 L#6 (256KB) + L1 L#6 (32KB) + Core L#6 + PU L#6 (P#6)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#194;&#160;&#194;&#160;&#194;&#160; L2 L#7 (256KB) + L1 L#7 (32KB) + Core L#7 + PU L#7 (P#14)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#194;&#160;&#194;&#160;&#194;&#160; L2 L#8 (256KB) + L1 L#8 (32KB) + Core L#8 + PU L#8 (P#15)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#194;&#160;&#194;&#160;&#194;&#160; L2 L#9 (256KB) + L1 L#9 (32KB) + Core L#9 + PU L#9 (P#16)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#194;&#160;&#194;&#160;&#194;&#160; L2 L#10 (256KB) + L1 L#10 (32KB) + Core L#10 + PU L#10 (P#17)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#194;&#160;&#194;&#160;&#194;&#160; L2 L#11 (256KB) + L1 L#11 (32KB) + Core L#11 + PU L#11 (P#18)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#194;&#160;&#194;&#160;&#194;&#160; L2 L#12 (256KB) + L1 L#12 (32KB) + Core L#12 + PU L#12 (P#19)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#194;&#160;&#194;&#160;&#194;&#160; L2 L#13 (256KB) + L1 L#13 (32KB) + Core L#13 + PU L#13 (P#20)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#194;&#160; NUMANode L#1 (P#1 128GB) + Socket L#1 + L3 L#1 (35MB)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#194;&#160;&#194;&#160;&#194;&#160; L2 L#14 (256KB) + L1 L#14 (32KB) + Core L#14 + PU L#14 (P#7)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#194;&#160;&#194;&#160;&#194;&#160; L2 L#15 (256KB) + L1 L#15 (32KB) + Core L#15 + PU L#15 (P#8)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#194;&#160;&#194;&#160;&#194;&#160; L2 L#16 (256KB) + L1 L#16 (32KB) + Core L#16 + PU L#16 (P#9)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#194;&#160;&#194;&#160;&#194;&#160; L2 L#17 (256KB) + L1 L#17 (32KB) + Core L#17 + PU L#17 (P#10)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#194;&#160;&#194;&#160;&#194;&#160; L2 L#18 (256KB) + L1 L#18 (32KB) + Core L#18 + PU L#18 (P#11)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#194;&#160;&#194;&#160;&#194;&#160; L2 L#19 (256KB) + L1 L#19 (32KB) + Core L#19 + PU L#19 (P#12)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#194;&#160;&#194;&#160;&#194;&#160; L2 L#20 (256KB) + L1 L#20 (32KB) + Core L#20 + PU L#20 (P#13)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#194;&#160;&#194;&#160;&#194;&#160; L2 L#21 (256KB) + L1 L#21 (32KB) + Core L#21 + PU L#21 (P#21)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#194;&#160;&#194;&#160;&#194;&#160; L2 L#22 (256KB) + L1 L#22 (32KB) + Core L#22 + PU L#22 (P#22)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#194;&#160;&#194;&#160;&#194;&#160; L2 L#23 (256KB) + L1 L#23 (32KB) + Core L#23 + PU L#23 (P#23)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#194;&#160;&#194;&#160;&#194;&#160; L2 L#24 (256KB) + L1 L#24 (32KB) + Core L#24 + PU L#24 (P#24)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#194;&#160;&#194;&#160;&#194;&#160; L2 L#25 (256KB) + L1 L#25 (32KB) + Core L#25 + PU L#25 (P#25)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#194;&#160;&#194;&#160;&#194;&#160; L2 L#26 (256KB) + L1 L#26 (32KB) + Core L#26 + PU L#26 (P#26)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#194;&#160;&#194;&#160;&#194;&#160; L2 L#27 (256KB) + L1 L#27 (32KB) + Core L#27 + PU L#27 (P#27)
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
<span class="quotelev1">&gt; So, Is --reporting-binding shows one more level of logical CPU numbering?
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
<span class="quotelev1">&gt; -Devendar
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
<span class="quotelev1">&gt; From:devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Ralph Castain
</span><br>
<span class="quotelev1">&gt; Sent: Monday, April 20, 2015 3:52 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] binding output error
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, was this with HT's enabled? I'm wondering if the print code is
</span><br>
incorrectly computing the core because it isn't correctly accounting for HT
<br>
cpus.
<br>
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
<span class="quotelev1">&gt; On Mon, Apr 20, 2015 at 3:49 PM, Jeff Squyres (jsquyres)
</span><br>
&lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph's the authority on this one, but just to be sure: are all nodes the
</span><br>
same topology? E.g., does adding &quot;--hetero-nodes&quot; to the mpirun command
<br>
line fix the problem?
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Apr 20, 2015, at 9:29 AM, Elena Elkina &lt;elena.elkina_at_[hidden]&gt;
</span><br>
wrote:
<br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi guys,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I faced with an issue on our cluster related to mapping &amp; binding
</span><br>
policies on 1.8.5.
<br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The matter is that --report-bindings output doesn't correspond to the
</span><br>
locale. It looks like there is a mistake on the output itself, because it
<br>
just puts serial core number while that core can be
<br>
<span class="quotelev1">&gt; on another socket. For example,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -np 2 --display-devel-map --report-bindings --map-by socket
</span><br>
hostname
<br>
<span class="quotelev2">&gt; &gt;&#194;&#160; Data for JOB [43064,1] offset 0
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;&#194;&#160; Mapper requested: NULL&#194;&#160; Last mapper: round_robin&#194;&#160; Mapping policy:
</span><br>
BYSOCKET&#194;&#160; Ranking policy: SOCKET
<br>
<span class="quotelev2">&gt; &gt;&#194;&#160; Binding policy: CORE&#194;&#160; Cpu set: NULL&#194;&#160; PPR: NULL&#194;&#160; Cpus-per-rank: 1
</span><br>
<span class="quotelev2">&gt; &gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;Num new daemons: 0&#194;&#160; &#194;&#160; &#194;&#160; New daemon starting vpid INVALID
</span><br>
<span class="quotelev2">&gt; &gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;Num nodes: 1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;&#194;&#160; Data for node: clx-orion-001&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;Launch id: -1&#194;&#160; &#194;&#160;State: 2
</span><br>
<span class="quotelev2">&gt; &gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;Daemon: [[43064,0],0]&#194;&#160; &#194;&#160;Daemon launched: True
</span><br>
<span class="quotelev2">&gt; &gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;Num slots: 28&#194;&#160; &#194;&#160;Slots in use: 2 Oversubscribed: FALSE
</span><br>
<span class="quotelev2">&gt; &gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;Num slots allocated: 28 Max slots: 0
</span><br>
<span class="quotelev2">&gt; &gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;Username on node: NULL
</span><br>
<span class="quotelev2">&gt; &gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;Num procs: 2&#194;&#160; &#194;&#160; Next node_rank: 2
</span><br>
<span class="quotelev2">&gt; &gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;Data for proc: [[43064,1],0]
</span><br>
<span class="quotelev2">&gt; &gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;Pid: 0&#194;&#160; Local rank: 0&#194;&#160; &#194;&#160;Node rank: 0&#194;&#160; &#194;&#160; App rank: 0
</span><br>
<span class="quotelev2">&gt; &gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;State: INITIALIZED&#194;&#160; &#194;&#160; &#194;&#160; Restarts: 0&#194;&#160; &#194;&#160; &#194;&#160;App_context: 0
</span><br>
Locale: 0-6,14-20&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;Bind location: 0&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; Binding: 0
<br>
<span class="quotelev2">&gt; &gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;Data for proc: [[43064,1],1]
</span><br>
<span class="quotelev2">&gt; &gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;Pid: 0&#194;&#160; Local rank: 1&#194;&#160; &#194;&#160;Node rank: 1&#194;&#160; &#194;&#160; App rank: 1
</span><br>
<span class="quotelev2">&gt; &gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;State: INITIALIZED&#194;&#160; &#194;&#160; &#194;&#160; Restarts: 0&#194;&#160; &#194;&#160; &#194;&#160;App_context: 0
</span><br>
Locale: 7-13,21-27&#194;&#160; &#194;&#160; &#194;&#160; Bind location: 7&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; Binding: 7
<br>
<span class="quotelev2">&gt; &gt; [clx-orion-001:26951] MCW rank 0 bound to socket 0[core 0[hwt 0]]:
</span><br>
[B/././././././././././././.][./././././././././././././.]
<br>
<span class="quotelev2">&gt; &gt; [clx-orion-001:26951] MCW rank 1 bound to socket 1[core 14[hwt 0]]:
</span><br>
[./././././././././././././.][B/././././././././././././.]
<br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The second process should be bound at core 7 (not core 14).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Another example:
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -np 8 --display-devel-map --report-bindings --map-by core
</span><br>
hostname
<br>
<span class="quotelev2">&gt; &gt;&#194;&#160; Data for JOB [43202,1] offset 0
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;&#194;&#160; Mapper requested: NULL&#194;&#160; Last mapper: round_robin&#194;&#160; Mapping policy:
</span><br>
BYCORE&#194;&#160; Ranking policy: CORE
<br>
<span class="quotelev2">&gt; &gt;&#194;&#160; Binding policy: CORE&#194;&#160; Cpu set: NULL&#194;&#160; PPR: NULL&#194;&#160; Cpus-per-rank: 1
</span><br>
<span class="quotelev2">&gt; &gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;Num new daemons: 0&#194;&#160; &#194;&#160; &#194;&#160; New daemon starting vpid INVALID
</span><br>
<span class="quotelev2">&gt; &gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;Num nodes: 1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;&#194;&#160; Data for node: clx-orion-001&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;Launch id: -1&#194;&#160; &#194;&#160;State: 2
</span><br>
<span class="quotelev2">&gt; &gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;Daemon: [[43202,0],0]&#194;&#160; &#194;&#160;Daemon launched: True
</span><br>
<span class="quotelev2">&gt; &gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;Num slots: 28&#194;&#160; &#194;&#160;Slots in use: 8 Oversubscribed: FALSE
</span><br>
<span class="quotelev2">&gt; &gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;Num slots allocated: 28 Max slots: 0
</span><br>
<span class="quotelev2">&gt; &gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;Username on node: NULL
</span><br>
<span class="quotelev2">&gt; &gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;Num procs: 8&#194;&#160; &#194;&#160; Next node_rank: 8
</span><br>
<span class="quotelev2">&gt; &gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;Data for proc: [[43202,1],0]
</span><br>
<span class="quotelev2">&gt; &gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;Pid: 0&#194;&#160; Local rank: 0&#194;&#160; &#194;&#160;Node rank: 0&#194;&#160; &#194;&#160; App rank: 0
</span><br>
<span class="quotelev2">&gt; &gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;State: INITIALIZED&#194;&#160; &#194;&#160; &#194;&#160; Restarts: 0&#194;&#160; &#194;&#160; &#194;&#160;App_context: 0
</span><br>
Locale: 0&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;Bind location: 0&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; Binding: 0
<br>
<span class="quotelev2">&gt; &gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;Data for proc: [[43202,1],1]
</span><br>
<span class="quotelev2">&gt; &gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;Pid: 0&#194;&#160; Local rank: 1&#194;&#160; &#194;&#160;Node rank: 1&#194;&#160; &#194;&#160; App rank: 1
</span><br>
<span class="quotelev2">&gt; &gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;State: INITIALIZED&#194;&#160; &#194;&#160; &#194;&#160; Restarts: 0&#194;&#160; &#194;&#160; &#194;&#160;App_context: 0
</span><br>
Locale: 1&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;Bind location: 1&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; Binding: 1
<br>
<span class="quotelev2">&gt; &gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;Data for proc: [[43202,1],2]
</span><br>
<span class="quotelev2">&gt; &gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;Pid: 0&#194;&#160; Local rank: 2&#194;&#160; &#194;&#160;Node rank: 2&#194;&#160; &#194;&#160; App rank: 2
</span><br>
<span class="quotelev2">&gt; &gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;State: INITIALIZED&#194;&#160; &#194;&#160; &#194;&#160; Restarts: 0&#194;&#160; &#194;&#160; &#194;&#160;App_context: 0
</span><br>
Locale: 2&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;Bind location: 2&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; Binding: 2
<br>
<span class="quotelev2">&gt; &gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;Data for proc: [[43202,1],3]
</span><br>
<span class="quotelev2">&gt; &gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;Pid: 0&#194;&#160; Local rank: 3&#194;&#160; &#194;&#160;Node rank: 3&#194;&#160; &#194;&#160; App rank: 3
</span><br>
<span class="quotelev2">&gt; &gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;State: INITIALIZED&#194;&#160; &#194;&#160; &#194;&#160; Restarts: 0&#194;&#160; &#194;&#160; &#194;&#160;App_context: 0
</span><br>
Locale: 3&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;Bind location: 3&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; Binding: 3
<br>
<span class="quotelev2">&gt; &gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;Data for proc: [[43202,1],4]
</span><br>
<span class="quotelev2">&gt; &gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;Pid: 0&#194;&#160; Local rank: 4&#194;&#160; &#194;&#160;Node rank: 4&#194;&#160; &#194;&#160; App rank: 4
</span><br>
<span class="quotelev2">&gt; &gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;State: INITIALIZED&#194;&#160; &#194;&#160; &#194;&#160; Restarts: 0&#194;&#160; &#194;&#160; &#194;&#160;App_context: 0
</span><br>
Locale: 4&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;Bind location: 4&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; Binding: 4
<br>
<span class="quotelev2">&gt; &gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;Data for proc: [[43202,1],5]
</span><br>
<span class="quotelev2">&gt; &gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;Pid: 0&#194;&#160; Local rank: 5&#194;&#160; &#194;&#160;Node rank: 5&#194;&#160; &#194;&#160; App rank: 5
</span><br>
<span class="quotelev2">&gt; &gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;State: INITIALIZED&#194;&#160; &#194;&#160; &#194;&#160; Restarts: 0&#194;&#160; &#194;&#160; &#194;&#160;App_context: 0
</span><br>
Locale: 5&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;Bind location: 5&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; Binding: 5
<br>
<span class="quotelev2">&gt; &gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;Data for proc: [[43202,1],6]
</span><br>
<span class="quotelev2">&gt; &gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;Pid: 0&#194;&#160; Local rank: 6&#194;&#160; &#194;&#160;Node rank: 6&#194;&#160; &#194;&#160; App rank: 6
</span><br>
<span class="quotelev2">&gt; &gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;State: INITIALIZED&#194;&#160; &#194;&#160; &#194;&#160; Restarts: 0&#194;&#160; &#194;&#160; &#194;&#160;App_context: 0
</span><br>
Locale: 6&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;Bind location: 6&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; Binding: 6
<br>
<span class="quotelev2">&gt; &gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;Data for proc: [[43202,1],7]
</span><br>
<span class="quotelev2">&gt; &gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;Pid: 0&#194;&#160; Local rank: 7&#194;&#160; &#194;&#160;Node rank: 7&#194;&#160; &#194;&#160; App rank: 7
</span><br>
<span class="quotelev2">&gt; &gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;State: INITIALIZED&#194;&#160; &#194;&#160; &#194;&#160; Restarts: 0&#194;&#160; &#194;&#160; &#194;&#160;App_context: 0
</span><br>
Locale: 14&#194;&#160; &#194;&#160; &#194;&#160; Bind location: 14&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;Binding: 14
<br>
<span class="quotelev2">&gt; &gt; [clx-orion-001:27069] MCW rank 0 bound to socket 0[core 0[hwt 0]]:
</span><br>
[B/././././././././././././.][./././././././././././././.]
<br>
<span class="quotelev2">&gt; &gt; [clx-orion-001:27069] MCW rank 1 bound to socket 0[core 1[hwt 0]]:
</span><br>
[./B/./././././././././././.][./././././././././././././.]
<br>
<span class="quotelev2">&gt; &gt; [clx-orion-001:27069] MCW rank 2 bound to socket 0[core 2[hwt 0]]:
</span><br>
[././B/././././././././././.][./././././././././././././.]
<br>
<span class="quotelev2">&gt; &gt; [clx-orion-001:27069] MCW rank 3 bound to socket 0[core 3[hwt 0]]:
</span><br>
[./././B/./././././././././.][./././././././././././././.]
<br>
<span class="quotelev2">&gt; &gt; [clx-orion-001:27069] MCW rank 4 bound to socket 0[core 4[hwt 0]]:
</span><br>
[././././B/././././././././.][./././././././././././././.]
<br>
<span class="quotelev2">&gt; &gt; [clx-orion-001:27069] MCW rank 5 bound to socket 0[core 5[hwt 0]]:
</span><br>
[./././././B/./././././././.][./././././././././././././.]
<br>
<span class="quotelev2">&gt; &gt; [clx-orion-001:27069] MCW rank 6 bound to socket 0[core 6[hwt 0]]:
</span><br>
[././././././B/././././././.][./././././././././././././.]
<br>
<span class="quotelev2">&gt; &gt; [clx-orion-001:27069] MCW rank 7 bound to socket 0[core 7[hwt 0]]:
</span><br>
[./././././././B/./././././.][./././././././././././././.]
<br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Rank 7 should be bound at core 14 instead of core 7 since core 7 is at
</span><br>
another socket.
<br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Best regards,
</span><br>
<span class="quotelev2">&gt; &gt; Elena
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription:  <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<a href="http://www.open-mpi.org/community/lists/devel/2015/04/17273.php">http://www.open-mpi.org/community/lists/devel/2015/04/17273.php</a>
<br>
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
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription:  <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<a href="http://www.open-mpi.org/community/lists/devel/2015/04/17282.php">http://www.open-mpi.org/community/lists/devel/2015/04/17282.php</a>
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#194;&#160;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/develLink">http://www.open-mpi.org/mailman/listinfo.cgi/develLink</a> to
</span><br>
this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17287.php">http://www.open-mpi.org/community/lists/devel/2015/04/17287.php</a><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17292.php">Kawashima, Takahiro: "Re: [OMPI devel] c_accumulate"</a>
<li><strong>Previous message:</strong> <a href="17290.php">Gilles Gouaillardet: "Re: [OMPI devel] c_accumulate"</a>
<li><strong>In reply to:</strong> <a href="17287.php">Devendar Bureddy: "Re: [OMPI devel] binding output error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17295.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] binding output error"</a>
<li><strong>Reply:</strong> <a href="17295.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] binding output error"</a>
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
