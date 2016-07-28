<?
$subject_val = "Re: [hwloc-users] hwloc-ps output - how to verify process binding on the core level?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 14 01:43:51 2011" -->
<!-- isoreceived="20110214064351" -->
<!-- sent="Sun, 13 Feb 2011 22:43:44 -0800 (PST)" -->
<!-- isosent="20110214064344" -->
<!-- name="Siew Yin Chan" -->
<!-- email="sychan131_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc-ps output - how to verify process binding on the core level?" -->
<!-- id="55365.28857.qm_at_web110415.mail.gq1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4D579F55.4000705_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] hwloc-ps output - how to verify process binding on the core level?<br>
<strong>From:</strong> Siew Yin Chan (<em>sychan131_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-14 01:43:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0279.php">Brice Goglin: "Re: [hwloc-users] hwloc-ps output - how to verify process binding on the core level?"</a>
<li><strong>Previous message:</strong> <a href="0277.php">Brice Goglin: "Re: [hwloc-users] hwloc-ps output - how to verify process binding on	the core level?"</a>
<li><strong>In reply to:</strong> <a href="0277.php">Brice Goglin: "Re: [hwloc-users] hwloc-ps output - how to verify process binding on	the core level?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0279.php">Brice Goglin: "Re: [hwloc-users] hwloc-ps output - how to verify process binding on the core level?"</a>
<li><strong>Reply:</strong> <a href="0279.php">Brice Goglin: "Re: [hwloc-users] hwloc-ps output - how to verify process binding on the core level?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
--- On Sun, 2/13/11, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
From: Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt;
<br>
Subject: Re: [hwloc-users] hwloc-ps output - how to verify process binding on the core level?
<br>
To: &quot;Hardware locality user list&quot; &lt;hwloc-users_at_[hidden]&gt;
<br>
Date: Sunday, February 13, 2011, 3:07 AM
<br>
<p><p><p><p><p><p><p><p><p><p><p>=&gt; Agree. For&#160;socket:0.core:0-3&#160;,&#160;hwloc will bind the MPI processes to all cores in the first socket. But how are the individual processes mapped on these cores? Will it be in this order:
<br>
rank 0&#160;&#224;&#160;core 0rank 1&#160;&#224;&#160;core 1rank 2&#160;&#224;&#160;core 2rank 3&#160;&#224;&#160;core 3
<br>
Or in this *arbitrary* order:
<br>
rank 0&#160;&#224;&#160;core 1rank 1&#160;&#224;&#160;core 3rank 2&#160;&#224;&#160;core 0rank 3&#160;&#224;&#160;core 2

<br>
<p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p>-----Inline Attachment Follows-----
<br>
<p>_______________________________________________
<br>
hwloc-users mailing list
<br>
hwloc-users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0278/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0279.php">Brice Goglin: "Re: [hwloc-users] hwloc-ps output - how to verify process binding on the core level?"</a>
<li><strong>Previous message:</strong> <a href="0277.php">Brice Goglin: "Re: [hwloc-users] hwloc-ps output - how to verify process binding on	the core level?"</a>
<li><strong>In reply to:</strong> <a href="0277.php">Brice Goglin: "Re: [hwloc-users] hwloc-ps output - how to verify process binding on	the core level?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0279.php">Brice Goglin: "Re: [hwloc-users] hwloc-ps output - how to verify process binding on the core level?"</a>
<li><strong>Reply:</strong> <a href="0279.php">Brice Goglin: "Re: [hwloc-users] hwloc-ps output - how to verify process binding on the core level?"</a>
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
