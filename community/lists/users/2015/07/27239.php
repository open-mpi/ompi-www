<?
$subject_val = "[OMPI users] Running 1 proc per socket but no more";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  1 15:42:17 2015" -->
<!-- isoreceived="20150701194217" -->
<!-- sent="Wed, 1 Jul 2015 15:42:16 -0400" -->
<!-- isosent="20150701194216" -->
<!-- name="Saliya Ekanayake" -->
<!-- email="esaliya_at_[hidden]" -->
<!-- subject="[OMPI users] Running 1 proc per socket but no more" -->
<!-- id="CA+ssbKVSXaMqvQwM8irCdOa28A+tzTPzxWzS7cV7jFvzjO44xw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Running 1 proc per socket but no more<br>
<strong>From:</strong> Saliya Ekanayake (<em>esaliya_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-01 15:42:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27240.php">Ralph Castain: "Re: [OMPI users] Running 1 proc per socket but no more"</a>
<li><strong>Previous message:</strong> <a href="27238.php">Stefan Paquay: "Re: [OMPI users] 1.8.6 w/ CUDA 7.0 &amp; GDR Huge Memory Leak"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27240.php">Ralph Castain: "Re: [OMPI users] Running 1 proc per socket but no more"</a>
<li><strong>Reply:</strong> <a href="27240.php">Ralph Castain: "Re: [OMPI users] Running 1 proc per socket but no more"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am doing some benchmarks and would like to test the following two
<br>
scenarios. Each machine has 4 sockets each with 6 cores (lstopo image
<br>
attached).
<br>
<p>Scenario 1
<br>
<pre>
---
Run 12 procs per node each bound to 2 cores. I can do this by --map-by
socket:PE=2
Scenario 2
Run 12 procs per node each bound to just 1 core. This is what I don't know
how to do, because if I do --map-by socket:PE=1 then mpirun will put more
than 12 procs per node as it can do so.
I'd appreciate any help on this.
Thank you,
Saliya
-- 
Saliya Ekanayake
Ph.D. Candidate | Research Assistant
School of Informatics and Computing | Digital Science Center
Indiana University, Bloomington
Cell 812-391-4914
<a href="http://saliya.org">http://saliya.org</a>

</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27239/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-27239/tempest.cn01.topology.png" alt="tempest.cn01.topology.png">
<!-- attachment="tempest.cn01.topology.png" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27240.php">Ralph Castain: "Re: [OMPI users] Running 1 proc per socket but no more"</a>
<li><strong>Previous message:</strong> <a href="27238.php">Stefan Paquay: "Re: [OMPI users] 1.8.6 w/ CUDA 7.0 &amp; GDR Huge Memory Leak"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27240.php">Ralph Castain: "Re: [OMPI users] Running 1 proc per socket but no more"</a>
<li><strong>Reply:</strong> <a href="27240.php">Ralph Castain: "Re: [OMPI users] Running 1 proc per socket but no more"</a>
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
