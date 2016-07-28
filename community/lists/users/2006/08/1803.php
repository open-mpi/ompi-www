<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 30 17:04:54 2006" -->
<!-- isoreceived="20060830210454" -->
<!-- sent="Wed, 30 Aug 2006 17:03:28 -0400" -->
<!-- isosent="20060830210328" -->
<!-- name="chris.neale_at_[hidden]" -->
<!-- email="chris.neale_at_[hidden]" -->
<!-- subject="[OMPI users] short message maximum and btl_tcp_eager_limit" -->
<!-- id="1156971808.44f5fd2061b91_at_webmail.utoronto.ca" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> <a href="mailto:chris.neale_at_[hidden]?Subject=Re:%20[OMPI%20users]%20short%20message%20maximum%20and%20btl_tcp_eager_limit"><em>chris.neale_at_[hidden]</em></a><br>
<strong>Date:</strong> 2006-08-30 17:03:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1804.php">Eng. A.A. Isola: "Re: [OMPI users] little endian - big endian conversion"</a>
<li><strong>Previous message:</strong> <a href="1802.php">Brian Barrett: "Re: [OMPI users] little endian - big endian conversion"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello, I am using Open-mpi with Gromacs. We have an 88 node single processor
<br>
pentium 4 cluster conected by ethernet and running linux. I want to acheive a
<br>
short message tcp maximum length of 512kb. In lam, this would have been a
<br>
configure option --with-tcp-short=524288. I am intending to use open-mpi with a
<br>
runtime option --mca btl_tcp_eager_limit 524288. Is that the only thing that I
<br>
need to do in order to acheive a short message max. length of 512kb? 
<br>
<p>What about:
<br>
<p>btl_tcp_min_send_size
<br>
btl_tcp_max_send_size
<br>
<p>And how is this affected by:
<br>
<p>btl_tcp_min_rdma_size
<br>
btl_tcp_max_rdma_size
<br>
<p>And should I set btl_openib_use_eager_rdma = 0 if I am not using InfiniBand?
<br>
<p>Many thanks.
<br>
<p>Chris Neale.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1804.php">Eng. A.A. Isola: "Re: [OMPI users] little endian - big endian conversion"</a>
<li><strong>Previous message:</strong> <a href="1802.php">Brian Barrett: "Re: [OMPI users] little endian - big endian conversion"</a>
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
