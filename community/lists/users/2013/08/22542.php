<?
$subject_val = "[OMPI users] bind-to-socket across sockets with different core counts";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 22 17:49:13 2013" -->
<!-- isoreceived="20130822214913" -->
<!-- sent="Thu, 22 Aug 2013 14:48:18 -0700" -->
<!-- isosent="20130822214818" -->
<!-- name="Noah Knowles" -->
<!-- email="nknowles_at_[hidden]" -->
<!-- subject="[OMPI users] bind-to-socket across sockets with different core counts" -->
<!-- id="52168722.7010608_at_usgs.gov" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] bind-to-socket across sockets with different core counts<br>
<strong>From:</strong> Noah Knowles (<em>nknowles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-22 17:48:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22543.php">Ralph Castain: "Re: [OMPI users] bind-to-socket across sockets with different core counts"</a>
<li><strong>Previous message:</strong> <a href="22541.php">Hazelrig, Chris CTR (US): "Re: [OMPI users] Finalize() does not return (UNCLASSIFIED)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22543.php">Ralph Castain: "Re: [OMPI users] bind-to-socket across sockets with different core counts"</a>
<li><strong>Reply:</strong> <a href="22543.php">Ralph Castain: "Re: [OMPI users] bind-to-socket across sockets with different core counts"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, newb here, so sorry if this is a dumb question but I haven't found 
<br>
an answer. I am running OpenMPI 1.7.2 on a small Rocks 6.1, Bladecenter 
<br>
H cluster. I am using the bind-to-socket option on nodes with different 
<br>
numbers of cores per socket. For the sample output below, compute-0-2 
<br>
has two 6-core sockets and compute-0-3 has two 8-core sockets.
<br>
<p>[1,4]&lt;stderr&gt;:[compute-0-2.local:03268] MCW rank 4 bound to socket 
<br>
0[core 0[hwt 0]], socket 0[core 1[hwt 0]], socket 0[core 2[hwt 0]], 
<br>
socket 0[core 3[hwt 0]], socket 0[core 4[hwt 0]], socket 0[core 5[hwt 
<br>
0]]: [B/B/B/B/B/B][./././././.]
<br>
[1,5]&lt;stderr&gt;:[compute-0-2.local:03268] MCW rank 5 bound to socket 
<br>
1[core 6[hwt 0]], socket 1[core 7[hwt 0]], socket 1[core 8[hwt 0]], 
<br>
socket 1[core 9[hwt 0]], socket 1[core 10[hwt 0]], socket 1[core 11[hwt 
<br>
0]]: [./././././.][B/B/B/B/B/B]
<br>
[1,6]&lt;stderr&gt;:[compute-0-3.local:03816] MCW rank 6 bound to socket 
<br>
0[core 0[hwt 0]], socket 0[core 1[hwt 0]], socket 0[core 2[hwt 0]], 
<br>
socket 0[core 3[hwt 0]], socket 0[core 4[hwt 0]], socket 0[core 5[hwt 
<br>
0]]: [B/B/B/B/B/B/./.][./././././././.]
<br>
[1,7]&lt;stderr&gt;:[compute-0-3.local:03816] MCW rank 7 bound to socket 
<br>
0[core 6[hwt 0]], socket 0[core 7[hwt 0]], socket 1[core 8[hwt 0]], 
<br>
socket 1[core 9[hwt 0]], socket 1[core 10[hwt 0]], socket 1[core 11[hwt 
<br>
0]]: [././././././B/B][B/B/B/B/./././.]
<br>
<p>Is this behavior intended? Is there any way to cause bind-to-socket to 
<br>
use all cores on a socket for the 6-core AND the 8-core nodes? Or at 
<br>
least to have that last binding not spread across cores on two sockets?
<br>
I've tried a rankfile too, but had errors-- that should probably be a 
<br>
separate thread though.
<br>
<p>Thanks,
<br>
Noah
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22543.php">Ralph Castain: "Re: [OMPI users] bind-to-socket across sockets with different core counts"</a>
<li><strong>Previous message:</strong> <a href="22541.php">Hazelrig, Chris CTR (US): "Re: [OMPI users] Finalize() does not return (UNCLASSIFIED)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22543.php">Ralph Castain: "Re: [OMPI users] bind-to-socket across sockets with different core counts"</a>
<li><strong>Reply:</strong> <a href="22543.php">Ralph Castain: "Re: [OMPI users] bind-to-socket across sockets with different core counts"</a>
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
