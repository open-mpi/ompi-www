<?
$subject_val = "[OMPI users] TCP Latency";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 28 14:52:59 2008" -->
<!-- isoreceived="20080728185259" -->
<!-- sent="Mon, 28 Jul 2008 20:53:58 +0200" -->
<!-- isosent="20080728185358" -->
<!-- name="Andy Georgi" -->
<!-- email="Andy.Georgi_at_[hidden]" -->
<!-- subject="[OMPI users] TCP Latency" -->
<!-- id="488E15C6.3070905_at_zih.tu-dresden.de" -->
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
<strong>Subject:</strong> [OMPI users] TCP Latency<br>
<strong>From:</strong> Andy Georgi (<em>Andy.Georgi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-28 14:53:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6159.php">Jeff Squyres: "Re: [OMPI users] TCP Latency"</a>
<li><strong>Previous message:</strong> <a href="6157.php">Eric Shamay: "[OMPI users] MPI_Reduce hangs when running on multiple nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6159.php">Jeff Squyres: "Re: [OMPI users] TCP Latency"</a>
<li><strong>Reply:</strong> <a href="6159.php">Jeff Squyres: "Re: [OMPI users] TCP Latency"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>we use Chelsio S320E-CXA adapters 
<br>
(<a href="http://www.chelsio.com/assetlibrary/products/S320E%20Product%20Brief%20080424.pdf">http://www.chelsio.com/assetlibrary/products/S320E%20Product%20Brief%20080424.pdf</a>) in one of our 
<br>
clusters. After tuning the kernel i measured the ping pong latency via NetPIPE and got ~12us which 
<br>
is pretty good for TCP i think. So i wrote a simple ping-pong-kernel and was really terrified about 
<br>
the ~45us i got with OpenMPI 1.2.6. Are there any hints how we can reduce the MPI latency? To 
<br>
increase the bandwidth we already set the buffer sizes but we couldn't find a parameter which can be 
<br>
relevant for the latency. Every hint is welcome.
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
<li><strong>Next message:</strong> <a href="6159.php">Jeff Squyres: "Re: [OMPI users] TCP Latency"</a>
<li><strong>Previous message:</strong> <a href="6157.php">Eric Shamay: "[OMPI users] MPI_Reduce hangs when running on multiple nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6159.php">Jeff Squyres: "Re: [OMPI users] TCP Latency"</a>
<li><strong>Reply:</strong> <a href="6159.php">Jeff Squyres: "Re: [OMPI users] TCP Latency"</a>
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
