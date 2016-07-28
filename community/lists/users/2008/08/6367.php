<?
$subject_val = "[OMPI users] TCP Bandwidth";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug 17 08:10:37 2008" -->
<!-- isoreceived="20080817121037" -->
<!-- sent="Sun, 17 Aug 2008 14:11:25 +0200" -->
<!-- isosent="20080817121125" -->
<!-- name="Andy Georgi" -->
<!-- email="Andy.Georgi_at_[hidden]" -->
<!-- subject="[OMPI users] TCP Bandwidth" -->
<!-- id="48A8156D.9050404_at_zih.tu-dresden.de" -->
<!-- charset="ISO-8859-15" -->
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
<strong>Subject:</strong> [OMPI users] TCP Bandwidth<br>
<strong>From:</strong> Andy Georgi (<em>Andy.Georgi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-17 08:11:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6368.php">Steve Wise: "Re: [OMPI users] TCP Latency"</a>
<li><strong>Previous message:</strong> <a href="6366.php">Brian Dobbins: "[OMPI users] Q: OpenMPI's use of /tmp and hanging apps via FS problems?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6369.php">Steve Wise: "Re: [OMPI users] TCP Bandwidth"</a>
<li><strong>Reply:</strong> <a href="6369.php">Steve Wise: "Re: [OMPI users] TCP Bandwidth"</a>
<li><strong>Maybe reply:</strong> <a href="6376.php">Andy Georgi: "Re: [OMPI users] TCP Bandwidth"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello again ;),
<br>
<p>after getting acceptable latency on our Chelsio S320E-CXA adapters we now want to check if we can
<br>
also tune the bandwidth. On TCP level (measured via iperf) we get 1.15 GB/s, on MPI level (measured
<br>
via MPI-Ping-Pong) just 930 MB/s. We already set btl_tcp_sndbuf and btl_tcp_rcvbuf to get these
<br>
value. Are there any other parameters which should be in-/decreased to get a higher bandwidth?
<br>
<p>If someone has already experiences in it, any help is welcome!
<br>
<p>Thanks and best regards
<br>
<p>Andy
<br>
<p><pre>
-- 
Dresden University of Technology
Center for Information Services
and High Performance Computing (ZIH)
D-01062 Dresden
Germany
e-mail: Andy.Georgi_at_[hidden]
WWW:    <a href="http://www.tu-dresden.de/zih">http://www.tu-dresden.de/zih</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6368.php">Steve Wise: "Re: [OMPI users] TCP Latency"</a>
<li><strong>Previous message:</strong> <a href="6366.php">Brian Dobbins: "[OMPI users] Q: OpenMPI's use of /tmp and hanging apps via FS problems?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6369.php">Steve Wise: "Re: [OMPI users] TCP Bandwidth"</a>
<li><strong>Reply:</strong> <a href="6369.php">Steve Wise: "Re: [OMPI users] TCP Bandwidth"</a>
<li><strong>Maybe reply:</strong> <a href="6376.php">Andy Georgi: "Re: [OMPI users] TCP Bandwidth"</a>
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
