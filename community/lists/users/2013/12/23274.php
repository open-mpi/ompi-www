<?
$subject_val = "Re: [OMPI users] &quot;-bind-to numa&quot; of openmpi-1.7.4rc1	dosen't	work	for our magny cours based 32 core node";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 20 20:53:12 2013" -->
<!-- isoreceived="20131221015312" -->
<!-- sent="Sat, 21 Dec 2013 10:52:56 +0900" -->
<!-- isosent="20131221015256" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="Re: [OMPI users] &amp;quot;-bind-to numa&amp;quot; of openmpi-1.7.4rc1	dosen't	work	for our magny cours based 32 core node" -->
<!-- id="OF3CD8B6A2.ADC6ABA8-ON49257C48.0009033B-49257C48.000A5DB5_at_jcity.maeda.co.jp" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="F571524B-824C-4BA7-95EC-BE702368BDF3_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] &quot;-bind-to numa&quot; of openmpi-1.7.4rc1	dosen't	work	for our magny cours based 32 core node<br>
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20users]%20&amp;amp;quot;-bind-to%20numa&amp;amp;quot;%20of%20openmpi-1.7.4rc1	dosen't	work	for%20our%20magny%20cours%20based%2032%20core%20node"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2013-12-20 20:52:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23275.php">Ralph Castain: "Re: [OMPI users] &quot;-bind-to numa&quot; of openmpi-1.7.4rc1	dosen't	work	for our magny cours based 32 core node"</a>
<li><strong>Previous message:</strong> <a href="23273.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: What's the status of OpenMPI and thread safety?"</a>
<li><strong>In reply to:</strong> <a href="23270.php">Ralph Castain: "Re: [OMPI users] &quot;-bind-to numa&quot; of openmpi-1.7.4rc1	dosen't	work for our magny cours based 32 core node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23275.php">Ralph Castain: "Re: [OMPI users] &quot;-bind-to numa&quot; of openmpi-1.7.4rc1	dosen't	work	for our magny cours based 32 core node"</a>
<li><strong>Reply:</strong> <a href="23275.php">Ralph Castain: "Re: [OMPI users] &quot;-bind-to numa&quot; of openmpi-1.7.4rc1	dosen't	work	for our magny cours based 32 core node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph, I'm glad to hear that, thanks.
<br>
<p>By the way, yesterday I tried to check how lama in 1.7.4rc treat numa node.
<br>
<p>Then, even wiht this simple command line, it freezed without any massage:
<br>
<p>&nbsp;&nbsp;mpirun -np 2 -host node05 -mca rmaps lama myprog
<br>
<p>Could you check what happened?
<br>
<p>Is it better to open new thread or continue this thread?
<br>
<p>Regards,
<br>
Tetsuya Mishima
<br>
<p><p><span class="quotelev1">&gt; I'll make it work so that NUMA can be either above or below socket
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 20, 2013, at 2:57 AM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi Brice,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thank you for your comment. I understand what you mean.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; My opinion was made just considering easy way to adjust the code for
</span><br>
<span class="quotelev2">&gt; &gt; inversion of hierarchy in object tree.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Tetsuya Mishima
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I don't think there's any such difference.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Also, all these NUMA architectures are reported the same by hwloc, and
</span><br>
<span class="quotelev3">&gt; &gt;&gt; therefore used the same in Open MPI.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; And yes, L3 and NUMA are topologically-identical on AMD Magny-Cours
</span><br>
(and
<br>
<span class="quotelev3">&gt; &gt;&gt; most recent AMD and Intel platforms).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Brice
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Le 20/12/2013 11:33, tmishima_at_[hidden] a &#233;crit :
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; The numa-node in AMD Mangy-Cours/Interlagos is so called cc(cache
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; coherent)NUMA,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; which seems to be a little bit different from the traditional numa
</span><br>
<span class="quotelev2">&gt; &gt; defined
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; in openmpi.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I notice that ccNUMA object is almost same as L3cache object.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; So &quot;-bind-to l3cache&quot; or &quot;-map-by l3cache&quot; is valid for what I want
</span><br>
to
<br>
<span class="quotelev2">&gt; &gt; do.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Therefore, &quot;do not touch it&quot; is one of the solution, I think ...
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Anyway, mixing up these two types of numa is the problem.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Tetsuya Mishima
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I can wait it'll be fixed in 1.7.5 or later, because putting
</span><br>
&quot;-bind-to
<br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; numa&quot;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; and &quot;-map-by numa&quot; at the same time works as a workaround.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Tetsuya Mishima
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Yeah, it will impact everything that uses hwloc topology maps, I
</span><br>
<span class="quotelev2">&gt; &gt; fear.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; One side note: you'll need to add --hetero-nodes to your cmd line.
</span><br>
If
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt; we
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; don't see that, we assume that all the node topologies are identical
</span><br>
-
<br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; which clearly isn't true here.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; I'll try to resolve the hier inversion over the holiday - won't be
</span><br>
<span class="quotelev2">&gt; &gt; for
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 1.7.4, but hopefully for 1.7.5
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; On Dec 18, 2013, at 9:44 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; I think it's normal for AMD opteron having 8/16 cores such as
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; magny cours or interlagos. Because it usually has 2 numa nodes
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; in a cpu(socket), numa-node can not include a socket. This type
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; of hierarchy would be natural.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; (node03 is Dell PowerEdge R815 and maybe quite common, I guess)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; By the way, I think this inversion should affect rmaps_lama
</span><br>
mapping.
<br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Tetsuya Mishima
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Ick - yeah, that would be a problem. I haven't seen that type of
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; hierarchical inversion before - is node03 a different type of
</span><br>
chip?
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Might take awhile for me to adjust the code to handle hier
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; inversion... :-(
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; On Dec 18, 2013, at 9:05 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I found the reason. I attached the main part of output with 32
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; core node(node03) and 8 core node(node05) at the bottom.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; From this information, socket of node03 includes numa-node.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On the other hand, numa-node of node05 includes socket.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; The direction of object tree is opposite.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Since &quot;-map-by socket&quot; may be assumed as default,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; for node05, &quot;-bind-to numa and -map-by socket&quot; means
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; upward search. For node03, this should be downward.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I guess that openmpi-1.7.4rc1 will always assume numa-node
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; includes socket. Is it right? Then, upward search is assumed
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; in orte_rmaps_base_compute_bindings even for node03 when I
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; put &quot;-bind-to numa and -map-by socket&quot; option.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node03.cluster:15508] [[38286,0],0] rmaps:base:compute_usage
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node03.cluster:15508] mca:rmaps: compute bindings for job
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [38286,1]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; with
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; policy NUMA
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node03.cluster:15508] mca:rmaps: bind upwards for job [38286,1]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; with
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; bindings NUMA
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node03.cluster:15508] [[38286,0],0] bind:upward target NUMANode
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; type
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Machine
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; That's the reason of this trouble. Therefore, adding &quot;-map-by
</span><br>
<span class="quotelev2">&gt; &gt; core&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; works.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (mapping pattern seems to be strange ...)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [mishima_at_node03 demos]$ mpirun -np 8 -bind-to numa -map-by core
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -report-bindings myprog
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node03.cluster:15885] [[38679,0],0] bind:upward target NUMANode
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; type
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Cache
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node03.cluster:15885] [[38679,0],0] bind:upward target NUMANode
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; type
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Cache
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node03.cluster:15885] [[38679,0],0] bind:upward target NUMANode
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; type
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Cache
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node03.cluster:15885] [[38679,0],0] bind:upward target NUMANode
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; type
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; NUMANode
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node03.cluster:15885] [[38679,0],0] bind:upward target NUMANode
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; type
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Cache
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node03.cluster:15885] [[38679,0],0] bind:upward target NUMANode
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; type
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Cache
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node03.cluster:15885] [[38679,0],0] bind:upward target NUMANode
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; type
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Cache
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node03.cluster:15885] [[38679,0],0] bind:upward target NUMANode
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; type
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; NUMANode
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node03.cluster:15885] [[38679,0],0] bind:upward target NUMANode
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; type
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Cache
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node03.cluster:15885] [[38679,0],0] bind:upward target NUMANode
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; type
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Cache
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node03.cluster:15885] [[38679,0],0] bind:upward target NUMANode
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; type
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Cache
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node03.cluster:15885] [[38679,0],0] bind:upward target NUMANode
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; type
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; NUMANode
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node03.cluster:15885] [[38679,0],0] bind:upward target NUMANode
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; type
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Cache
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node03.cluster:15885] [[38679,0],0] bind:upward target NUMANode
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; type
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Cache
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node03.cluster:15885] [[38679,0],0] bind:upward target NUMANode
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; type
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Cache
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node03.cluster:15885] [[38679,0],0] bind:upward target NUMANode
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; type
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; NUMANode
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node03.cluster:15885] [[38679,0],0] bind:upward target NUMANode
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; type
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Cache
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node03.cluster:15885] [[38679,0],0] bind:upward target NUMANode
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; type
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Cache
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node03.cluster:15885] [[38679,0],0] bind:upward target NUMANode
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; type
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Cache
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node03.cluster:15885] [[38679,0],0] bind:upward target NUMANode
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; type
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; NUMANode
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node03.cluster:15885] [[38679,0],0] bind:upward target NUMANode
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; type
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Cache
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node03.cluster:15885] [[38679,0],0] bind:upward target NUMANode
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; type
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Cache
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node03.cluster:15885] [[38679,0],0] bind:upward target NUMANode
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; type
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Cache
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node03.cluster:15885] [[38679,0],0] bind:upward target NUMANode
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; type
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; NUMANode
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node03.cluster:15885] [[38679,0],0] bind:upward target NUMANode
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; type
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Cache
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node03.cluster:15885] [[38679,0],0] bind:upward target NUMANode
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; type
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Cache
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node03.cluster:15885] [[38679,0],0] bind:upward target NUMANode
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; type
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Cache
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node03.cluster:15885] [[38679,0],0] bind:upward target NUMANode
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; type
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; NUMANode
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node03.cluster:15885] [[38679,0],0] bind:upward target NUMANode
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; type
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Cache
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node03.cluster:15885] [[38679,0],0] bind:upward target NUMANode
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; type
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Cache
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node03.cluster:15885] [[38679,0],0] bind:upward target NUMANode
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; type
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Cache
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node03.cluster:15885] [[38679,0],0] bind:upward target NUMANode
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; type
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; NUMANode
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node03.cluster:15885] MCW rank 2 bound to socket 0[core 0[hwt
</span><br>
<span class="quotelev2">&gt; &gt; 0]],
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0[core 1[hwt 0]], socket 0[core 2[hwt 0]], so
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; cket 0[core 3[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [B/B/B/B/./././.][./././././././.][./././././././.][./././././././.]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node03.cluster:15885] MCW rank 3 bound to socket 0[core 0[hwt
</span><br>
<span class="quotelev2">&gt; &gt; 0]],
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0[core 1[hwt 0]], socket 0[core 2[hwt 0]], so
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; cket 0[core 3[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [B/B/B/B/./././.][./././././././.][./././././././.][./././././././.]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node03.cluster:15885] MCW rank 4 bound to socket 0[core 4[hwt
</span><br>
<span class="quotelev2">&gt; &gt; 0]],
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0[core 5[hwt 0]], socket 0[core 6[hwt 0]], so
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; cket 0[core 7[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [././././B/B/B/B][./././././././.][./././././././.][./././././././.]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node03.cluster:15885] MCW rank 5 bound to socket 0[core 4[hwt
</span><br>
<span class="quotelev2">&gt; &gt; 0]],
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0[core 5[hwt 0]], socket 0[core 6[hwt 0]], so
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; cket 0[core 7[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [././././B/B/B/B][./././././././.][./././././././.][./././././././.]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node03.cluster:15885] MCW rank 6 bound to socket 0[core 4[hwt
</span><br>
<span class="quotelev2">&gt; &gt; 0]],
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0[core 5[hwt 0]], socket 0[core 6[hwt 0]], so
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; cket 0[core 7[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [././././B/B/B/B][./././././././.][./././././././.][./././././././.]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node03.cluster:15885] MCW rank 7 bound to socket 0[core 4[hwt
</span><br>
<span class="quotelev2">&gt; &gt; 0]],
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0[core 5[hwt 0]], socket 0[core 6[hwt 0]], so
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; cket 0[core 7[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [././././B/B/B/B][./././././././.][./././././././.][./././././././.]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node03.cluster:15885] MCW rank 0 bound to socket 0[core 0[hwt
</span><br>
<span class="quotelev2">&gt; &gt; 0]],
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0[core 1[hwt 0]], socket 0[core 2[hwt 0]], so
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; cket 0[core 3[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [B/B/B/B/./././.][./././././././.][./././././././.][./././././././.]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node03.cluster:15885] MCW rank 1 bound to socket 0[core 0[hwt
</span><br>
<span class="quotelev2">&gt; &gt; 0]],
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0[core 1[hwt 0]], socket 0[core 2[hwt 0]], so
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; cket 0[core 3[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [B/B/B/B/./././.][./././././././.][./././././././.][./././././././.]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hello world from process 6 of 8
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hello world from process 5 of 8
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hello world from process 0 of 8
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hello world from process 7 of 8
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hello world from process 3 of 8
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hello world from process 4 of 8
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hello world from process 2 of 8
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hello world from process 1 of 8
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Tetsuya Mishima
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node03.cluster:15508] Type: Machine Number of child objects: 4
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;      Name=NULL
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;      total=132358820KB
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;      Backend=Linux
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;      OSName=Linux
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;      OSRelease=2.6.18-308.16.1.el5
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;      OSVersion=&quot;#1 SMP Tue Oct 2 22:01:43 EDT 2012&quot;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;      Architecture=x86_64
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;      Cpuset:  0xffffffff
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;      Online:  0xffffffff
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;      Allowed: 0xffffffff
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;      Bind CPU proc:   TRUE
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;      Bind CPU thread: TRUE
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;      Bind MEM proc:   FALSE
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;      Bind MEM thread: TRUE
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;      Type: Socket Number of child objects: 2
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;              Name=NULL
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;              total=33071780KB
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;              CPUModel=&quot;AMD Opteron(tm) Processor 6136&quot;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;              Cpuset:  0x000000ff
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;              Online:  0x000000ff
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;              Allowed: 0x000000ff
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;              Type: NUMANode Number of child objects: 1
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node05.cluster:21750] Type: Machine Number of child objects: 2
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;      Name=NULL
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;      total=33080072KB
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;      Backend=Linux
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;      OSName=Linux
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;      OSRelease=2.6.18-308.16.1.el5
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;      OSVersion=&quot;#1 SMP Tue Oct 2 22:01:43 EDT 2012&quot;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;      Architecture=x86_64
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;      Cpuset:  0x000000ff
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;      Online:  0x000000ff
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;      Allowed: 0x000000ff
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;      Bind CPU proc:   TRUE
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;      Bind CPU thread: TRUE
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;      Bind MEM proc:   FALSE
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;      Bind MEM thread: TRUE
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;      Type: NUMANode Number of child objects: 1
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;              Name=NULL
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;              local=16532232KB
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;              total=16532232KB
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;              Cpuset:  0x0000000f
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;              Online:  0x0000000f
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;              Allowed: 0x0000000f
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;              Type: Socket Number of child objects: 1
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hmm...try adding &quot;-mca rmaps_base_verbose 10 -mca
</span><br>
<span class="quotelev2">&gt; &gt; ess_base_verbose
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 5&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; to
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; your cmd line and let's see what it thinks it found.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Dec 18, 2013, at 6:55 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi, I report one more problem with openmpi-1.7.4rc1,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; which is more serious.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; For our 32 core nodes(AMD magny cours based) which has
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 8 numa-nodes, &quot;-bind-to numa&quot; does not work. Without
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; this option, it works. For your infomation, at the
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; bottom of this mail, I added the lstopo information
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; of the node.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Tetsuya Mishima
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [mishima_at_manage ~]$ qsub -I -l nodes=1:ppn=32
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; qsub: waiting for job 8352.manage.cluster to start
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; qsub: job 8352.manage.cluster ready
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [mishima_at_node03 demos]$ mpirun -np 8 -report-bindings -bind-to
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; numa
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; myprog
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node03.cluster:15316] [[37582,0],0] bind:upward target
</span><br>
NUMANode
<br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; type
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Machine
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; A request was made to bind to NUMA, but an appropriate target
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; could
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; not
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; be found on node node03.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [mishima_at_node03 ~]$ cd ~/Desktop/openmpi-1.7/demos/
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [mishima_at_node03 demos]$ mpirun -np 8 -report-bindings myprog
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node03.cluster:15282] MCW rank 2 bound to socket 1[core 8[hwt
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 0]]:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [./././././././.][B/././././././.][./././././././.][
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ./././././././.]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node03.cluster:15282] MCW rank 3 bound to socket 1[core 9[hwt
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 0]]:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [./././././././.][./B/./././././.][./././././././.][
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ./././././././.]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node03.cluster:15282] MCW rank 4 bound to socket 2[core 16
</span><br>
[hwt
<br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 0]]:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [./././././././.][./././././././.][B/././././././.]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [./././././././.]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node03.cluster:15282] MCW rank 5 bound to socket 2[core 17
</span><br>
[hwt
<br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 0]]:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [./././././././.][./././././././.][./B/./././././.]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [./././././././.]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node03.cluster:15282] MCW rank 6 bound to socket 3[core 24
</span><br>
[hwt
<br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 0]]:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [./././././././.][./././././././.][./././././././.]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [B/././././././.]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node03.cluster:15282] MCW rank 7 bound to socket 3[core 25
</span><br>
[hwt
<br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 0]]:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [./././././././.][./././././././.][./././././././.]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [./B/./././././.]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node03.cluster:15282] MCW rank 0 bound to socket 0[core 0[hwt
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 0]]:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [B/././././././.][./././././././.][./././././././.][
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ./././././././.]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node03.cluster:15282] MCW rank 1 bound to socket 0[core 1[hwt
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 0]]:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [./B/./././././.][./././././././.][./././././././.][
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ./././././././.]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hello world from process 2 of 8
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hello world from process 5 of 8
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hello world from process 4 of 8
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hello world from process 3 of 8&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hello world from
</span><br>
process 1 of 8
<br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hello world from process 7 of 8
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hello world from process 6 of 8
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hello world from process 0 of 8
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [mishima_at_node03 demos]$ ~/opt/hwloc/bin/lstopo-no-graphics
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Machine (126GB)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Socket L#0 (32GB)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; NUMANode L#0 (P#0 16GB) + L3 L#0 (5118KB)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   L2 L#0 (512KB) + L1d L#0 (64KB) + L1i L#0 (64KB) + Core L#0
</span><br>
+
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt; PU
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; L#0
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (P#0)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   L2 L#1 (512KB) + L1d L#1 (64KB) + L1i L#1 (64KB) + Core L#1
</span><br>
+
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt; PU
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; L#1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (P#1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   L2 L#2 (512KB) + L1d L#2 (64KB) + L1i L#2 (64KB) + Core L#2
</span><br>
+
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt; PU
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; L#2
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (P#2)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   L2 L#3 (512KB) + L1d L#3 (64KB) + L1i L#3 (64KB) + Core L#3
</span><br>
+
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt; PU
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; L#3
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (P#3)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; NUMANode L#1 (P#1 16GB) + L3 L#1 (5118KB)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   L2 L#4 (512KB) + L1d L#4 (64KB) + L1i L#4 (64KB) + Core L#4
</span><br>
+
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt; PU
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; L#4
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (P#4)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   L2 L#5 (512KB) + L1d L#5 (64KB) + L1i L#5 (64KB) + Core L#5
</span><br>
+
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt; PU
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; L#5
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (P#5)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   L2 L#6 (512KB) + L1d L#6 (64KB) + L1i L#6 (64KB) + Core L#6
</span><br>
+
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt; PU
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; L#6
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (P#6)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   L2 L#7 (512KB) + L1d L#7 (64KB) + L1i L#7 (64KB) + Core L#7
</span><br>
+
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt; PU&gt;&gt;&gt;&gt;&gt;&gt; L#7
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (P#7)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Socket L#1 (32GB)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; NUMANode L#2 (P#6 16GB) + L3 L#2 (5118KB)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   L2 L#8 (512KB) + L1d L#8 (64KB) + L1i L#8 (64KB) + Core L#8
</span><br>
+
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt; PU
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; L#8
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (P#8)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   L2 L#9 (512KB) + L1d L#9 (64KB) + L1i L#9 (64KB) + Core L#9
</span><br>
+
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt; PU
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; L#9
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (P#9)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   L2 L#10 (512KB) + L1d L#10 (64KB) + L1i L#10 (64KB) + Core
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; L#10
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; PU
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; L#10 (P#10)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   L2 L#11 (512KB) + L1d L#11 (64KB) + L1i L#11 (64KB) + Core
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; L#11
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; PU
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; L#11 (P#11)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; NUMANode L#3 (P#7 16GB) + L3 L#3 (5118KB)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   L2 L#12 (512KB) + L1d L#12 (64KB) + L1i L#12 (64KB) + Core
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; L#12
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; PU
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; L#12 (P#12)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   L2 L#13 (512KB) + L1d L#13 (64KB) + L1i L#13 (64KB) + Core
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; L#13
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; PU
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; L#13 (P#13)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   L2 L#14 (512KB) + L1d L#14 (64KB) + L1i L#14 (64KB) + Core
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; L#14
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; PU
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; L#14 (P#14)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   L2 L#15 (512KB) + L1d L#15 (64KB) + L1i L#15 (64KB) + Core
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; L#15
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; PU
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; L#15 (P#15)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Socket L#2 (32GB)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; NUMANode L#4 (P#4 16GB) + L3 L#4 (5118KB)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   L2 L#16 (512KB) + L1d L#16 (64KB) + L1i L#16 (64KB) + Core
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; L#16
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; PU
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; L#16 (P#16)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   L2 L#17 (512KB) + L1d L#17 (64KB) + L1i L#17 (64KB) + Core
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; L#17
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; PU
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; L#17 (P#17)&gt; &gt;&gt;&gt;&gt;&gt;    L2 L#18 (512KB) + L1d L#18 (64KB) + L1i
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; L#18 (64KB) + Core L#18
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; PU
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; L#18 (P#18)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   L2 L#19 (512KB) + L1d L#19 (64KB) + L1i L#19 (64KB) + Core
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; L#19
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; PU
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; L#19 (P#19)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; NUMANode L#5 (P#5 16GB) + L3 L#5 (5118KB)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   L2 L#20 (512KB) + L1d L#20 (64KB) + L1i L#20 (64KB) + Core
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; L#20
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; PU
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; L#20 (P#20)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   L2 L#21 (512KB) + L1d L#21 (64KB) + L1i L#21 (64KB) + Core
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; L#21
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; PU
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; L#21 (P#21)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   L2 L#22 (512KB) + L1d L#22 (64KB) + L1i L#22 (64KB) + Core
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; L#22
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; PU
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; L#22 (P#22)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   L2 L#23 (512KB) + L1d L#23 (64KB) + L1i L#23 (64KB) + Core
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; L#23
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; PU
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; L#23 (P#23)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Socket L#3 (32GB)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; NUMANode L#6 (P#2 16GB) + L3 L#6 (5118KB)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   L2 L#24 (512KB) + L1d L#24 (64KB) + L1i L#24 (64KB) + Core
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; L#24
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; PU
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; L#24 (P#24)&gt;&gt;&gt;&gt;&gt;    L2 L#25 (512KB) + L1d L#25 (64KB) + L1i
</span><br>
L#25
<br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; (64KB) + Core L#25 +
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; PU
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; L#25 (P#25)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   L2 L#26 (512KB) + L1d L#26 (64KB) + L1i L#26 (64KB) + Core
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; L#26
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; PU
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; L#26 (P#26)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   L2 L#27 (512KB) + L1d L#27 (64KB) + L1i L#27 (64KB) + Core
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; L#27
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; PU
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; L#27 (P#27)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; NUMANode L#7 (P#3 16GB) + L3 L#7 (5118KB)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   L2 L#28 (512KB) + L1d L#28 (64KB) + L1i L#28 (64KB) + Core
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; L#28
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; PU
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; L#28 (P#28)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   L2 L#29 (512KB) + L1d L#29 (64KB) + L1i L#29 (64KB) + Core
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; L#29
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; PU
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; L#29 (P#29)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   L2 L#30 (512KB) + L1d L#30 (64KB) + L1i L#30 (64KB) + Core
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; L#30
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; PU
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; L#30 (P#30)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   L2 L#31 (512KB) + L1d L#31 (64KB) + L1i L#31 (64KB) + Core
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; L#31
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; PU
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; L#31 (P#31)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; HostBridge L#0
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; PCIBridge
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   PCI 14e4:1639
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;     Net L#0 &quot;eth0&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   PCI 14e4:1639
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;     Net L#1 &quot;eth1&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; PCIBridge
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   PCI 14e4:1639
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;     Net L#2 &quot;eth2&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   PCI 14e4:1639
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;     Net L#3 &quot;eth3&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; PCIBridge
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   PCIBridge
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;     PCIBridge
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;       PCI 1000:0072
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         Block L#4 &quot;sdb&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         Block L#5 &quot;sda&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; PCI 1002:4390
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   Block L#6 &quot;sr0&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; PCIBridge
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   PCI 102b:0532
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; HostBridge L#7
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; PCIBridge
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   PCI 15b3:6274
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;     Net L#7 &quot;ib0&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;     OpenFabrics L#8 &quot;mthca0&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
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
<li><strong>Next message:</strong> <a href="23275.php">Ralph Castain: "Re: [OMPI users] &quot;-bind-to numa&quot; of openmpi-1.7.4rc1	dosen't	work	for our magny cours based 32 core node"</a>
<li><strong>Previous message:</strong> <a href="23273.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: What's the status of OpenMPI and thread safety?"</a>
<li><strong>In reply to:</strong> <a href="23270.php">Ralph Castain: "Re: [OMPI users] &quot;-bind-to numa&quot; of openmpi-1.7.4rc1	dosen't	work for our magny cours based 32 core node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23275.php">Ralph Castain: "Re: [OMPI users] &quot;-bind-to numa&quot; of openmpi-1.7.4rc1	dosen't	work	for our magny cours based 32 core node"</a>
<li><strong>Reply:</strong> <a href="23275.php">Ralph Castain: "Re: [OMPI users] &quot;-bind-to numa&quot; of openmpi-1.7.4rc1	dosen't	work	for our magny cours based 32 core node"</a>
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
