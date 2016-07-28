<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 24 09:51:06 2007" -->
<!-- isoreceived="20071024135106" -->
<!-- sent="Wed, 24 Oct 2007 08:51:00 -0500" -->
<!-- isosent="20071024135100" -->
<!-- name="Dirk Eddelbuettel" -->
<!-- email="edd_at_[hidden]" -->
<!-- subject="[OMPI users] Cannot suppress openib error message" -->
<!-- id="18207.19908.697447.777233_at_ron.nulle.part" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Dirk Eddelbuettel (<em>edd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-24 09:51:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4297.php">Dean Dauger, Ph. D.: "[OMPI users] orterun &quot;by hand&quot;"</a>
<li><strong>Previous message:</strong> <a href="4295.php">George Bosilca: "Re: [OMPI users] Bug in common_mx.c (1.2.5a0r16522)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4303.php">Jeff Squyres: "Re: [OMPI users] Cannot suppress openib error message"</a>
<li><strong>Reply:</strong> <a href="4303.php">Jeff Squyres: "Re: [OMPI users] Cannot suppress openib error message"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've been scratching my head over this:
<br>
<p>lnx01:/usr/lib&gt; orterun -n 2  --mca btl ^openib  ~/c++/tests/mpitest
<br>
[lnx01:14417] mca: base: component_find: unable to open btl openib: file not found (ignored)
<br>
[lnx01:14418] mca: base: component_find: unable to open btl openib: file not found (ignored)
<br>
Hello world, I'm process 0
<br>
Hello world, I'm process 1
<br>
lnx01:/usr/lib&gt; grep openib /etc/openmpi/openmpi-mca-params.conf
<br>
#   btl = ^openib
<br>
btl = ^openib
<br>
lnx01:/usr/lib&gt; orterun -n 2   ~/c++/tests/mpitest
<br>
[lnx01:14429] mca: base: component_find: unable to open btl openib: file not found (ignored)
<br>
[lnx01:14430] mca: base: component_find: unable to open btl openib: file not found (ignored)
<br>
Hello world, I'm process 0
<br>
Hello world, I'm process 1
<br>
<p>and when I strace it, I get
<br>
<p>uname({sys=&quot;Linux&quot;, node=&quot;lnx01&quot;, ...}) = 0
<br>
open(&quot;/etc/openmpi/openmpi-mca-params.conf&quot;, O_RDONLY) = 3
<br>
ioctl(3, SNDCTL_TMR_TIMEBASE or TCGETS, 0xbf820698) = -1 ENOTTY (Inappropriate ioctl for device)
<br>
fstat64(3, {st_mode=S_IFREG|0644, st_size=2877, ...}) = 0
<br>
mmap2(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1, 0) = 0xb7f72000
<br>
read(3, &quot;#\n# Copyright (c) 2004-2005 The &quot;..., 8192) = 2877
<br>
read(3, &quot;&quot;, 4096)                       = 0
<br>
read(3, &quot;&quot;, 8192)                       = 0
<br>
ioctl(3, SNDCTL_TMR_TIMEBASE or TCGETS, 0xbf8205f8) = -1 ENOTTY (Inappropriate ioctl for device)
<br>
close(3)                                = 0
<br>
munmap(0xb7f72000, 4096)                = 0
<br>
<p>Why can't I suppress the dreaded Infinityband message?
<br>
<p>System is Ubuntu 7.04 with 'ported' (ie locally recompiled) current Open MPI packages
<br>
from Debian. 
<br>
<p>Dirk
<br>
<p><pre>
-- 
Three out of two people have difficulties with fractions.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4297.php">Dean Dauger, Ph. D.: "[OMPI users] orterun &quot;by hand&quot;"</a>
<li><strong>Previous message:</strong> <a href="4295.php">George Bosilca: "Re: [OMPI users] Bug in common_mx.c (1.2.5a0r16522)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4303.php">Jeff Squyres: "Re: [OMPI users] Cannot suppress openib error message"</a>
<li><strong>Reply:</strong> <a href="4303.php">Jeff Squyres: "Re: [OMPI users] Cannot suppress openib error message"</a>
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
