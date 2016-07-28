<?
$subject_val = "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 12 03:07:42 2009" -->
<!-- isoreceived="20090612070742" -->
<!-- sent="Fri, 12 Jun 2009 09:09:06 +0200" -->
<!-- isosent="20090612070906" -->
<!-- name="Fran&#231;ois Trahay" -->
<!-- email="francois.trahay_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads" -->
<!-- id="4A31FF12.9070909_at_labri.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="43F9D41F-F116-49AF-9383-EC84A10E7BAA_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads<br>
<strong>From:</strong> Fran&#231;ois Trahay (<em>francois.trahay_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-12 03:09:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9615.php">Scott Atchley: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
<li><strong>Previous message:</strong> <a href="9613.php">George Bosilca: "Re: [OMPI users] Intermittent corruption"</a>
<li><strong>In reply to:</strong> <a href="9611.php">George Bosilca: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9615.php">Scott Atchley: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
<li><strong>Reply:</strong> <a href="9615.php">Scott Atchley: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here's the program.
<br>
It should print something like that:
<br>
<p>[1 communicating threads]
<br>
[0]     1       2.484936           0.402           0.384
<br>
[0]     2       2.478036           0.807           0.770
<br>
[0]     4       2.501503           1.599           1.525
<br>
[0]     8       2.497516           3.203           3.055
<br>
thread #1
<br>
[2 communicating threads]
<br>
[0]     1       3.970628           0.252           0.240
<br>
[1]     1       3.929280           0.254           0.243
<br>
[1]     2       4.087206           0.489           0.467
<br>
[0]     2       5.181758           0.386           0.368
<br>
[1]     4       3.715222           1.077           1.027
<br>
[0]     4       4.358013           0.918           0.875
<br>
[1]     8       4.166852           1.920           1.831
<br>
[0]     8       3.628287           2.205           2.103
<br>
thread #2
<br>
[3 communicating threads]
<br>
[0]     1       5.922241           0.169           0.161
<br>
[2]     1       6.896299           0.145           0.138
<br>
[1]     1       8.973834           0.111           0.106
<br>
...
<br>
<p><p>Francois
<br>
<p>George Bosilca wrote:
<br>
<span class="quotelev1">&gt; I will take a look at the BTL problem. Can you provide a copy of the 
</span><br>
<span class="quotelev1">&gt; benchmarks please.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Thanks,
</span><br>
<span class="quotelev1">&gt;     george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 11, 2009, at 16:05 , Fran&#231;ois Trahay wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; concurrent_ping
</span><br>
<span class="quotelev1">&gt;
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
<p><p>
<br><hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9614/concurrent_ping.c">concurrent_ping.c</a>
</ul>
<!-- attachment="concurrent_ping.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9615.php">Scott Atchley: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
<li><strong>Previous message:</strong> <a href="9613.php">George Bosilca: "Re: [OMPI users] Intermittent corruption"</a>
<li><strong>In reply to:</strong> <a href="9611.php">George Bosilca: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9615.php">Scott Atchley: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
<li><strong>Reply:</strong> <a href="9615.php">Scott Atchley: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
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
