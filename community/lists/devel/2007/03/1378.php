<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar 22 14:18:35 2007" -->
<!-- isoreceived="20070322181835" -->
<!-- sent="Thu, 22 Mar 2007 12:18:29 -0600" -->
<!-- isosent="20070322181829" -->
<!-- name="Greg Watson" -->
<!-- email="g.watson_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RH Enterprise Linux issue" -->
<!-- id="DC82F417-50D2-4374-9ABA-8AFBB13513AB_at_computer.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="88294D0A-32AB-4F6E-8CAE-DEB75F5609DE_at_computer.org" -->
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
<strong>Date:</strong> 2007-03-22 14:18:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1379.php">Jeff Squyres: "Re: [OMPI devel] RH Enterprise Linux issue"</a>
<li><strong>Previous message:</strong> <a href="1377.php">Greg Watson: "[OMPI devel] RH Enterprise Linux issue"</a>
<li><strong>In reply to:</strong> <a href="1377.php">Greg Watson: "[OMPI devel] RH Enterprise Linux issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1379.php">Jeff Squyres: "Re: [OMPI devel] RH Enterprise Linux issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Oh, and this is a single x86 machine. Just trying to launch locally.
<br>
<p>&nbsp;&nbsp;$uname -a
<br>
Linux  2.6.9-42.0.2.ELsmp #1 SMP Thu Aug 17 18:00:32 EDT 2006 i686  
<br>
i686 i386 GNU/Linux
<br>
<p>Greg
<br>
<p>On Mar 22, 2007, at 12:17 PM, Greg Watson wrote:
<br>
<p><span class="quotelev1">&gt; Is this a known problem? Building ompi 1.2 on RHEL4:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --with-devel-headers --without-threads
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (actually tried without '--without-threads' too, but no change)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpirun -np 2 test
</span><br>
<span class="quotelev1">&gt; [beth:06029] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [beth:06029] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [beth:06029] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [beth:06029] Failing at address: 0x2e342e33
</span><br>
<span class="quotelev1">&gt; [beth:06029] [ 0] /lib/tls/libc.so.6 [0x21b890]
</span><br>
<span class="quotelev1">&gt; [beth:06029] [ 1] /usr/local/lib/libopen-rte.so.0(orte_init_stage1 
</span><br>
<span class="quotelev1">&gt; +0x293) [0xb7fc50cb]
</span><br>
<span class="quotelev1">&gt; [beth:06029] [ 2] /usr/local/lib/libopen-rte.so.0(orte_system_init 
</span><br>
<span class="quotelev1">&gt; +0x1e) [0xb7fc84be]
</span><br>
<span class="quotelev1">&gt; [beth:06029] [ 3] /usr/local/lib/libopen-rte.so.0(orte_init+0x6a)  
</span><br>
<span class="quotelev1">&gt; [0xb7fc4cee]
</span><br>
<span class="quotelev1">&gt; [beth:06029] [ 4] mpirun(orterun+0x14b) [0x8049ecb]
</span><br>
<span class="quotelev1">&gt; [beth:06029] [ 5] mpirun(main+0x2a) [0x8049d7a]
</span><br>
<span class="quotelev1">&gt; [beth:06029] [ 6] /lib/tls/libc.so.6(__libc_start_main+0xd3)  
</span><br>
<span class="quotelev1">&gt; [0x208de3]
</span><br>
<span class="quotelev1">&gt; [beth:06029] [ 7] mpirun [0x8049cc9]
</span><br>
<span class="quotelev1">&gt; [beth:06029] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; Segmentation fault
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Greg
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1379.php">Jeff Squyres: "Re: [OMPI devel] RH Enterprise Linux issue"</a>
<li><strong>Previous message:</strong> <a href="1377.php">Greg Watson: "[OMPI devel] RH Enterprise Linux issue"</a>
<li><strong>In reply to:</strong> <a href="1377.php">Greg Watson: "[OMPI devel] RH Enterprise Linux issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1379.php">Jeff Squyres: "Re: [OMPI devel] RH Enterprise Linux issue"</a>
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
