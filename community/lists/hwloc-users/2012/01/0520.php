<?
$subject_val = "Re: [hwloc-users] hwloc_get_last_cpu_location and hwloc_get_cpubind";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 17 05:48:56 2012" -->
<!-- isoreceived="20120117104856" -->
<!-- sent="Tue, 17 Jan 2012 11:48:46 +0100" -->
<!-- isosent="20120117104846" -->
<!-- name="Marc-Andr&#233; Hermanns" -->
<!-- email="m.a.hermanns_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc_get_last_cpu_location and hwloc_get_cpubind" -->
<!-- id="6843F1C2-322E-44B8-8561-CD2711CB62F9_at_grs-sim.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20120116133329.GL4281_at_type.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] hwloc_get_last_cpu_location and hwloc_get_cpubind<br>
<strong>From:</strong> Marc-Andr&#233; Hermanns (<em>m.a.hermanns_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-17 05:48:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0521.php">Samuel Thibault: "Re: [hwloc-users] hwloc_get_last_cpu_location and hwloc_get_cpubind"</a>
<li><strong>Previous message:</strong> <a href="0519.php">Samuel Thibault: "Re: [hwloc-users] hwloc_get_last_cpu_location and hwloc_get_cpubind"</a>
<li><strong>In reply to:</strong> <a href="0519.php">Samuel Thibault: "Re: [hwloc-users] hwloc_get_last_cpu_location and hwloc_get_cpubind"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0521.php">Samuel Thibault: "Re: [hwloc-users] hwloc_get_last_cpu_location and hwloc_get_cpubind"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Samuel,
<br>
<p>my apologies for not checking this. On a Linux box this indeed worked out of the box.
<br>
<p>This system has 4 levels
<br>
Cpuset: 0x00000fff
<br>
Number of objects at depth 0: 1
<br>
Number of objects at depth 1: 2
<br>
Number of objects at depth 2: 12
<br>
Number of objects at depth 3: 12
<br>
<p>It seems now that it has the whole system in the cpuset. How can I 
<br>
really infer the PU this process was run on? I would have expected the 
<br>
cpuset to have only 1 element per level to indicate the path from 
<br>
machine to PU. Evidently my understanding of this functionality is still
<br>
not correct.
<br>
<p>Best regards,
<br>
Marc-Andre
<br>
<p>On 16.01.2012, at 14:33, Samuel Thibault wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Marc-Andr&#233; Hermanns, le Mon 16 Jan 2012 14:01:23 +0100, a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt;    hwloc_get_last_cpu_location(topology, cpuset, 0);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; and I am at a total loss on what I should make of this. It seems I am  
</span><br>
<span class="quotelev2">&gt;&gt; doing something fundamentally wrong,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You need to check the value returned by the function:
</span><br>
<span class="quotelev1">&gt; get_last_cpu_location is currently implemented only on Linux. I don't
</span><br>
<span class="quotelev1">&gt; think MacOS provides the information.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Samuel
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<p><pre>
--
Marc-Andre Hermanns
German Research School for
Simulation Sciences GmbH
c/o Laboratory for Parallel Programming
52056 Aachen | Germany
Tel +49 241 80 99753
Fax +49 241 80 6 99753
Web www.grs-sim.de
Members: Forschungszentrum J&#252;lich GmbH | RWTH Aachen University
Registered in the commercial register of the local court of
D&#252;ren (Amtsgericht D&#252;ren) under registration number HRB 5268
Registered office: J&#252;lich
Executive board: Prof. Marek Behr Ph.D. | Dr. Norbert Drewes

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0520/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0521.php">Samuel Thibault: "Re: [hwloc-users] hwloc_get_last_cpu_location and hwloc_get_cpubind"</a>
<li><strong>Previous message:</strong> <a href="0519.php">Samuel Thibault: "Re: [hwloc-users] hwloc_get_last_cpu_location and hwloc_get_cpubind"</a>
<li><strong>In reply to:</strong> <a href="0519.php">Samuel Thibault: "Re: [hwloc-users] hwloc_get_last_cpu_location and hwloc_get_cpubind"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0521.php">Samuel Thibault: "Re: [hwloc-users] hwloc_get_last_cpu_location and hwloc_get_cpubind"</a>
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
