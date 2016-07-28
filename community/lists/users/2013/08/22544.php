<?
$subject_val = "Re: [OMPI users] bind-to-socket across sockets with different core counts";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 22 19:04:41 2013" -->
<!-- isoreceived="20130822230441" -->
<!-- sent="Thu, 22 Aug 2013 16:04:34 -0700" -->
<!-- isosent="20130822230434" -->
<!-- name="Noah Knowles" -->
<!-- email="nknowles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] bind-to-socket across sockets with different core counts" -->
<!-- id="52169902.3090908_at_usgs.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9B2A60A8-6597-4E9C-8E78-3C02AF7DAAC6_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] bind-to-socket across sockets with different core counts<br>
<strong>From:</strong> Noah Knowles (<em>nknowles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-22 19:04:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22545.php">Dave Love: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<li><strong>Previous message:</strong> <a href="22543.php">Ralph Castain: "Re: [OMPI users] bind-to-socket across sockets with different core counts"</a>
<li><strong>In reply to:</strong> <a href="22543.php">Ralph Castain: "Re: [OMPI users] bind-to-socket across sockets with different core counts"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks and sorry, had a feeling I was missing something obvious!
<br>
<p><p>On 08/22/2013 02:56 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; You need to tell mpirun that your system doesn't have homogeneous nodes:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     --hetero-nodes        Nodes in cluster may differ in topology, so send
</span><br>
<span class="quotelev1">&gt;                                        the topology back from each node [Default = false]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 22, 2013, at 2:48 PM, Noah Knowles &lt;nknowles_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi, newb here, so sorry if this is a dumb question but I haven't found an answer. I am running OpenMPI 1.7.2 on a small Rocks 6.1, Bladecenter H cluster. I am using the bind-to-socket option on nodes with different numbers of cores per socket. For the sample output below, compute-0-2 has two 6-core sockets and compute-0-3 has two 8-core sockets.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [1,4]&lt;stderr&gt;:[compute-0-2.local:03268] MCW rank 4 bound to socket 0[core 0[hwt 0]], socket 0[core 1[hwt 0]], socket 0[core 2[hwt 0]], socket 0[core 3[hwt 0]], socket 0[core 4[hwt 0]], socket 0[core 5[hwt 0]]: [B/B/B/B/B/B][./././././.]
</span><br>
<span class="quotelev2">&gt;&gt; [1,5]&lt;stderr&gt;:[compute-0-2.local:03268] MCW rank 5 bound to socket 1[core 6[hwt 0]], socket 1[core 7[hwt 0]], socket 1[core 8[hwt 0]], socket 1[core 9[hwt 0]], socket 1[core 10[hwt 0]], socket 1[core 11[hwt 0]]: [./././././.][B/B/B/B/B/B]
</span><br>
<span class="quotelev2">&gt;&gt; [1,6]&lt;stderr&gt;:[compute-0-3.local:03816] MCW rank 6 bound to socket 0[core 0[hwt 0]], socket 0[core 1[hwt 0]], socket 0[core 2[hwt 0]], socket 0[core 3[hwt 0]], socket 0[core 4[hwt 0]], socket 0[core 5[hwt 0]]: [B/B/B/B/B/B/./.][./././././././.]
</span><br>
<span class="quotelev2">&gt;&gt; [1,7]&lt;stderr&gt;:[compute-0-3.local:03816] MCW rank 7 bound to socket 0[core 6[hwt 0]], socket 0[core 7[hwt 0]], socket 1[core 8[hwt 0]], socket 1[core 9[hwt 0]], socket 1[core 10[hwt 0]], socket 1[core 11[hwt 0]]: [././././././B/B][B/B/B/B/./././.]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is this behavior intended? Is there any way to cause bind-to-socket to use all cores on a socket for the 6-core AND the 8-core nodes? Or at least to have that last binding not spread across cores on two sockets?
</span><br>
<span class="quotelev2">&gt;&gt; I've tried a rankfile too, but had errors-- that should probably be a separate thread though.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Noah
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="22545.php">Dave Love: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<li><strong>Previous message:</strong> <a href="22543.php">Ralph Castain: "Re: [OMPI users] bind-to-socket across sockets with different core counts"</a>
<li><strong>In reply to:</strong> <a href="22543.php">Ralph Castain: "Re: [OMPI users] bind-to-socket across sockets with different core counts"</a>
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
