<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar 22 14:17:04 2007" -->
<!-- isoreceived="20070322181704" -->
<!-- sent="Thu, 22 Mar 2007 12:17:00 -0600" -->
<!-- isosent="20070322181700" -->
<!-- name="Greg Watson" -->
<!-- email="g.watson_at_[hidden]" -->
<!-- subject="[OMPI devel] RH Enterprise Linux issue" -->
<!-- id="88294D0A-32AB-4F6E-8CAE-DEB75F5609DE_at_computer.org" -->
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
<strong>From:</strong> Greg Watson (<em>g.watson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-22 14:17:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1378.php">Greg Watson: "Re: [OMPI devel] RH Enterprise Linux issue"</a>
<li><strong>Previous message:</strong> <a href="1376.php">Ralph Castain: "Re: [OMPI devel] mpirun --prefix question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1378.php">Greg Watson: "Re: [OMPI devel] RH Enterprise Linux issue"</a>
<li><strong>Reply:</strong> <a href="1378.php">Greg Watson: "Re: [OMPI devel] RH Enterprise Linux issue"</a>
<li><strong>Reply:</strong> <a href="1379.php">Jeff Squyres: "Re: [OMPI devel] RH Enterprise Linux issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is this a known problem? Building ompi 1.2 on RHEL4:
<br>
<p>./configure --with-devel-headers --without-threads
<br>
<p>(actually tried without '--without-threads' too, but no change)
<br>
<p>$ mpirun -np 2 test
<br>
[beth:06029] *** Process received signal ***
<br>
[beth:06029] Signal: Segmentation fault (11)
<br>
[beth:06029] Signal code: Address not mapped (1)
<br>
[beth:06029] Failing at address: 0x2e342e33
<br>
[beth:06029] [ 0] /lib/tls/libc.so.6 [0x21b890]
<br>
[beth:06029] [ 1] /usr/local/lib/libopen-rte.so.0(orte_init_stage1 
<br>
+0x293) [0xb7fc50cb]
<br>
[beth:06029] [ 2] /usr/local/lib/libopen-rte.so.0(orte_system_init 
<br>
+0x1e) [0xb7fc84be]
<br>
[beth:06029] [ 3] /usr/local/lib/libopen-rte.so.0(orte_init+0x6a)  
<br>
[0xb7fc4cee]
<br>
[beth:06029] [ 4] mpirun(orterun+0x14b) [0x8049ecb]
<br>
[beth:06029] [ 5] mpirun(main+0x2a) [0x8049d7a]
<br>
[beth:06029] [ 6] /lib/tls/libc.so.6(__libc_start_main+0xd3) [0x208de3]
<br>
[beth:06029] [ 7] mpirun [0x8049cc9]
<br>
[beth:06029] *** End of error message ***
<br>
Segmentation fault
<br>
<p>Thanks,
<br>
<p>Greg
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1378.php">Greg Watson: "Re: [OMPI devel] RH Enterprise Linux issue"</a>
<li><strong>Previous message:</strong> <a href="1376.php">Ralph Castain: "Re: [OMPI devel] mpirun --prefix question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1378.php">Greg Watson: "Re: [OMPI devel] RH Enterprise Linux issue"</a>
<li><strong>Reply:</strong> <a href="1378.php">Greg Watson: "Re: [OMPI devel] RH Enterprise Linux issue"</a>
<li><strong>Reply:</strong> <a href="1379.php">Jeff Squyres: "Re: [OMPI devel] RH Enterprise Linux issue"</a>
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
