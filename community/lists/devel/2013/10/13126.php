<?
$subject_val = "Re: [OMPI devel] Warnings in v1.7.4: rcache";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 23 21:50:00 2013" -->
<!-- isoreceived="20131024015000" -->
<!-- sent="Wed, 23 Oct 2013 18:49:58 -0700" -->
<!-- isosent="20131024014958" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Warnings in v1.7.4: rcache" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F36007EEB4E0_at_HQMAIL02.nvidia.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAMD57oem_PMB3HM9P5J36_jEF3SEzQjy++wQMxghaNXgTzgfZA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Warnings in v1.7.4: rcache<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-23 21:49:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13127.php">Bibrak Qamar: "[OMPI devel] Developer's guide to OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="13125.php">Ralph Castain: "[OMPI devel] Warnings in v1.7.4: rcache"</a>
<li><strong>In reply to:</strong> <a href="13125.php">Ralph Castain: "[OMPI devel] Warnings in v1.7.4: rcache"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, that is from one of my CMRs.  I always configure with -enable-picky  but that did not pick up this warning.
<br>
I will fix this in the trunk in the morning (watching the Red Sox right now :)) and then file CMR to bring over.
<br>
Rolf
<br>
<p>From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Ralph Castain
<br>
Sent: Wednesday, October 23, 2013 7:19 PM
<br>
To: Open MPI Developers
<br>
Subject: [OMPI devel] Warnings in v1.7.4: rcache
<br>
<p>One of the recent CMRs has created new warnings in v1.7.4:
<br>
<p>rcache_vma.c: In function 'mca_rcache_vma_find':
<br>
rcache_vma.c:58:23: warning: pointer of type 'void *' used in arithmetic [-Wpedantic]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bound_addr = addr + size - 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
rcache_vma.c:58:30: warning: pointer of type 'void *' used in arithmetic [-Wpedantic]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bound_addr = addr + size - 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
rcache_vma.c: In function 'mca_rcache_vma_find_all':
<br>
rcache_vma.c:84:23: warning: pointer of type 'void *' used in arithmetic [-Wpedantic]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bound_addr = addr + size - 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
rcache_vma.c:84:30: warning: pointer of type 'void *' used in arithmetic [-Wpedantic]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bound_addr = addr + size - 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>Does someone know where these came from, and how to correct them?
<br>
Ralph
<br>
<p>-----------------------------------------------------------------------------------
<br>
This email message is for the sole use of the intended recipient(s) and may contain
<br>
confidential information.  Any unauthorized review, use, disclosure or distribution
<br>
is prohibited.  If you are not the intended recipient, please contact the sender by
<br>
reply email and destroy all copies of the original message.
<br>
-----------------------------------------------------------------------------------
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13126/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13127.php">Bibrak Qamar: "[OMPI devel] Developer's guide to OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="13125.php">Ralph Castain: "[OMPI devel] Warnings in v1.7.4: rcache"</a>
<li><strong>In reply to:</strong> <a href="13125.php">Ralph Castain: "[OMPI devel] Warnings in v1.7.4: rcache"</a>
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
